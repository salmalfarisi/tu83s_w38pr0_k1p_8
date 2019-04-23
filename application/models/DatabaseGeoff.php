<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseGeoff extends CI_Model 
{
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
	
	public function addcart($data)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->join('produk','cart.idproduk = produk.idproduk','RIGHT OUTER');
		$query = $this->db->insert('cart', $data);
		return $query;
	}

	public function masukkanharga($totalharga)
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		//$this->db->join('cart','pemesanan.nopemesanan = cart.nopemesanan', 'LEFT OUTER');
		$query = $this->db->insert('pemesanan',$totalharga);
		return $query;
	}

	public function shownopemesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->order_by('nopemesanan','DESC');
		$query = $this->db->get();
		return $query->row();
		//return $query=$this->db->query('SELECT nopemesanan FROM pemesanan order by nopemesanan desc limit 1');
		//return $query;


	}

	public function showcart()
	{
		// $this->db->select('*');
		// $this->db->from('pemesanan');
		// $this->db->order_by('nopemesanan', 'DESC');
		// $query = $this->db->get();
		// return $query->result();
		return $query=$this->db->query('SELECT nopemesanan FROM pemesanan order by nopemesanan desc');
	}

	public function tampilkanproduk()
	{
		$this->db->select('','');
		$this->db->from('cart');
		//$this->db->join('produk', 'cart.idproduk = produk.idproduk', 'LEFT OUTER');
		//$this->db->group_by('produk.idproduk');
		$this->db->get();
		return $query->results();
	}
}