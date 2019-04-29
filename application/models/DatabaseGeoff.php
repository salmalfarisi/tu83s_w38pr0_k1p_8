<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseGeoff extends CI_Model 
{
	public function showsemuaproduk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$query = $this->db->get();
		return $query->result();
	}
	
	//menampilkan produk berdasarkan hasil pencarian
	public function cariproduk()
	{
		$keyword = $this->input->post('cariproduk', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->select('*');
		$this->db->from('produk');
		//pasang like atau or like supaya bisa mencari hasil dari database yang ada. dan semua atribut harus dikeluarkan semua disini
		$this->db->like('namaproduk', $keyword);
		$this->db->or_like('jenisproduk', $keyword);
		$this->db->or_like('deskripsiproduk', $keyword);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Menampilkan semua data berdasarkan jenis kelamin
	public function showproduct($orderby)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('targetpembeli', $orderby);
		$query = $this->db->get();
		return $query->result();
	}
	
	//menampilkan semua data cart yang akan dibeli pelanggan
	public function cekbarang()
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->join('produk','produk.idproduk=cart.idproduk','LEFT OUTER');
		$query = $this->db->count_all_results();
		if ($query >= 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	}
	
	public function detailbarang($idproduk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('idproduk', $idproduk);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
	
	public function insertnama($data)
	{	
		$query = $this->db->insert('pemesanan', $data);
		return $query;
	}
	
	public function showrandomcewek($jeniskelamin)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('targetpembeli', $jeniskelamin);
		$this->db->order_by('idproduk','RANDOM');
		$this->db->limit('3');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function showrandomcowok($jeniskelamin)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('targetpembeli', $jeniskelamin);
		$this->db->order_by('idproduk','RANDOM');
		$this->db->limit('3');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function panggilproduk($idproduk)
	{
		$this->db->select('idproduk, namaproduk, harga');
		$this->db->from('produk');
		$this->db->where('idproduk', $idproduk);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function carinamapelanggan($nama)
	{
		$this->db->select('nopemesanan');
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $nama);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->row();
	}
	
	public function addcart($data)
	{
		$this->db->insert('cart', $data);
	}
	
	/*
	//outputnya ialah menjumlah total produk yang sama ia beli
	public function totalhargasementara()
	{
		//SELECT pemesanan.namasementara, cast(cart.jumlahproduk as unsigned ) * cast(produk.harga as unsigned ) AS totalharga FROM pemesanan join cart on (pemesanan.nopemesanan = cart.nopemesanan) JOIN produk ON (cart.idproduk = produk.idproduk) where pemesanan.namasementara = "xsTKASidWv"
		//$this->db->select('cast(cart.jumlahproduk as unsigned) * cast(produk.harga as unsigned) as totalharga');
		$panggilnama = $this->session->userdata('namapelanggan');
		$this->db->select('cast(pemesanan.totalbayar as unsigned) + cast(cart.jumlahproduk as unsigned ) as totalharga');
		$this->db->select('cast(cart.jumlahproduk as unsigned) * cast(produk.harga as unsigned) AS totalhargaproduk');
		$this->db->from('pemesanan');
		$this->db->join('cart','pemesanan.nopemesanan=cart.nopemesanan');
		$this->db->join('produk','cart.idproduk=produk.idproduk');
		$this->db->where('namasementara', $panggilnama);
		$this->db->order_by('cart.idpemesanan','DESC');
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->row();
	}*/
	
	/*
	//memasukkan harga produk yang dibeli konsumen
	public function totalhargaprodukfix($masukkanhargafix)
	{
		$ambilidpemesanan = $this->session->userdata('idpemesanan');
		$namaorang = $this->session->userdata('namapelanggan');
		$this->db->select('cart.totalhargaproduk');
		$this->db->limit('1');
		$this->db->from('pemesanan');
		$this->db->join('cart','pemesanan.nopemesanan=cart.nopemesanan','RIGHT OUTER');
		$this->db->where('pemesanan.namasementara', $namaorang);
		$this->db->where('cart.idpemesanan', $ambilidpemesanan);
		$this->db->order_by('cart.idpemesanan','DESC');
		$query = $this->db->get();
		$this->db->update('cart', $masukkanhargafix);
	}*/
	
	public function masukkantotalbayar($masukkanharga)
	{
		$namaorang = $this->session->userdata('namapelanggan');
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $namaorang);
		$this->db->limit('1');
		$query = $this->db->get();
		$this->db->update('pemesanan', $masukkanharga);
	}
	
	public function totalbelanja($totalhargabelanja)
	{
		$panggilnama = $this->session->userdata('namapelanggan');
		$this->db->select('cast(pemesanan.totalbayar as unsigned) + cast(cart.jumlahproduk as unsigned ) as totalharga');
		$this->db->from('pemesanan');
		$this->db->join('cart','pemesanan.nopemesanan=cart.nopemesanan');
		$this->db->join('produk','cart.idproduk=produk.idproduk');
		$this->db->where('pemesanan.namasementara', $panggilnama);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->row();
	}
	
	public function menjumlahkantotalbayar($totalbayar2)
	{
		//$panggilnama = $this->session->userdata('namapelanggan');
		//$this->db->where('namasementara', $panggilnama);
		//$this->db->get();
		$this->db->update('pemesanan', $totalbayar2);
	}
	
	public function hapusbarangorderan($idpemesanan)
	{
		
	}
	
	public function showcart()
	{
		//SELECT * from pemesanan right join cart on ('cart.pemesanan=pemesanan.nopemesanan') right join produk on ('cart.idproduk=produk.idproduk') where pemesanan.namasementara = 'aNhtwCzqdI'
		$namaorang = $this->session->userdata('namapelanggan');
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('cart','pemesanan.nopemesanan=cart.nopemesanan','RIGHT OUTER');
		$this->db->join('produk','cart.idproduk=produk.idproduk','RIGHT OUTER');
		$this->db->where('pemesanan.namasementara', $namaorang);
		$query = $this->db->get();
		return $query->result();
	}
}
