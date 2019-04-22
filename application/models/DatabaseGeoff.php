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
}