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
}