<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseGeoff extends CI_Model 
{
	/*
		Menampilkan semua produk yang ada dalam database
	*/
	public function showsemuaproduk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
		Menampilkan hasil pencarian produk berdasarkan permintaan pengguna
	*/
	public function cariproduk()
	{
		$keyword = $this->input->post('cariproduk', true);
		$this->db->select('*');
		$this->db->from('produk');
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
	
	/*
		Menampilkan produk yang sudah diorder oleh pengguna
	*/
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
	
	/*
		Menampilkan produk yang dipinta pengguna
	*/
	public function detailbarang($idproduk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('idproduk', $idproduk);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
	
	/*
		Berfungsi untuk memasukkan nama anonymous pengguna ke dalam database
	*/
	public function insertnama($data)
	{	
		$query = $this->db->insert('pemesanan', $data);
		return $query;
	}
	
	/*
		Menampilkan random produk perempuan berdasarkan jenis kelamin
	*/
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
	
	/*
		Menampilkan random produk pria berdasarkan jenis kelamin
	*/
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
	
	/*
		Menampilkan produk yang dipinta oleh pengguna
	*/
	public function panggilproduk($idproduk)
	{
		$this->db->select('idproduk, namaproduk, harga');
		$this->db->from('produk');
		$this->db->where('idproduk', $idproduk);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	/*
		Mencari nomor pesanan untuk pengguna berdasarkan userdata anonymous user
	*/
	public function carinamapelanggan($nama)
	{
		$this->db->select('nopemesanan');
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $nama);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->row();
	}
	
	/*
		Memasukkan data produk yang dipesan oleh pengguna ke dalam tabel cart
	*/
	public function addcart($data)
	{
		$this->db->insert('cart', $data);
	}
	
	/*
		Berfungsi untuk memasukkan value total bayar berdasarkan produk yang dipesan oleh pengguna
	*/
	public function masukkantotalbayar($masukkanharga, $nama)
	{
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $nama);
		$this->db->limit('1');
		$this->db->update('pemesanan', $masukkanharga);
	}
	
	/*
		Menampilkan produk yang ada di dalam tabel cart berdasarkan anonymous pengguna
	*/
	public function ambilhargaproduk($idpemesanan)
	{
		$this->db->select('totalhargaproduk');
		$this->db->from('cart');
		$this->db->where('idpemesanan', $idpemesanan);
		$query = $this->db->get();
		return $query->row();
	}
	
	/*
		Berfungsi untuk menghapus data yang ada dalam cart berdasarkan nomor pemesanan
		sudah diurutkan dari nama anonymous pengguna
	*/
	public function hapusbarangorderan($idpemesanan)
	{
		$this->db->select('*');	
		$this->db->from('cart');
		$this->db->limit('1');
		$query = $this->db->where('idpemesanan', $idpemesanan);
		$query = $this->db->delete();
	}
	
	/*
		Berfungsi untuk menampilkan semua data yang ada di dalam cart berdasarkan nama anonymous pengguna
	*/
	public function showcart()
	{
		$namaorang = $this->session->userdata('namapelanggan');
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('cart','pemesanan.nopemesanan=cart.nopemesanan','RIGHT OUTER');
		$this->db->join('produk','cart.idproduk=produk.idproduk','RIGHT OUTER');
		$this->db->where('pemesanan.namasementara', $namaorang);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	/*
		Menampilkan semua data provinsi
	*/
	public function optionprovinsi()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
		Menampilkan semua data kabupaten
	*/
	public function optionkabupaten()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->join('kabupaten','provinsi.id_provinsi = kabupaten.id_prov', 'RIGHT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
		Menampilkan semua data kecamatan
	*/
	public function optionkecamatan()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->join('kabupaten','provinsi.id_provinsi = kabupaten.id_prov', 'RIGHT OUTER');
		$this->db->join('kecamatan','kabupaten.id_kab = kecamatan.id_kab', 'RIGHT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
		Memasukkan data identitas diri ke dalam tabel pemesanan
	*/
	public function insertdatapemesanan($inputform, $nama)
	{
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $nama);
		//$query = $this->db->get();
		$query = $this->db->update('pemesanan', $inputform);
	}
	
	
	
	/*
		Mengubah status jadi pesan jadi iya dengan tujuan agar terbaca dalam halaman pemesanan admin
	*/
	public function ubahiya($jadipesan, $carinama)
	{
		$this->db->where('nopemesanan',$carinama);
		$query = $this->db->update('cart', $jadipesan);
	}
	
	/*
		Menampilkan kode transaksi dan harga tagihan yang harus dibayar
		berdasarkan nama anonymous pengguna
	*/
	public function showkodedanharga($nama)
	{
		$this->db->select('totalbayar, kodetransaksi, metodepembayaran');
		$this->db->from('pemesanan');
		$this->db->where('namasementara', $nama);
		$query = $this->db->get();
		return $query->row();
	}
}
