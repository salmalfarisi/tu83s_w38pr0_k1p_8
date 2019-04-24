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
		$query = $this->db->insert('cart', $data);
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
}