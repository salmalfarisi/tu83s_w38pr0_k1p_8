<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model 
{
	private $_table = "products";

    public $idproduk;
    public $namaproduk;
    public $harga;
    public $image = "default.jpg";
    public $target;
    public $sasaran;


	public function daftarproduct()
	{
		$this->db->select('*');
		$this->db->from('produk');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function daftarpemesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->where('namalengkap is not null',null, false);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function showallpesanan($nopemesanan)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$query = $this->db->where('nopemesanan',$nopemesanan);
		$query = $this->db->where('jadipesan','Y');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambahproduk()
	{
		$data = [
			"namaproduk" => $this->input->post('namaproduk', true),
			"jenisproduk" => $this->input->post('jenisproduk', true),
			"targetpembeli" => $this->input->post('targetpembeli', true),
			"harga" => $this->input->post('harga', true),
			"kodeproduk" => $this->input->post('kodeproduk', true),
			"deskripsiproduk" => $this->input->post('deskripsi', true),
			"gambarproduk"=>$this->uploadImage(),
		];
		if($this->uploadImage()!=false){
			return $this->db->insert('produk', $data);
		}
	}

	public function uploadImage()
	{
	    $config['upload_path']          = './assets/produk/listproduk/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 1048; // 1MB
	    $config['file_name']            = $this->input->post('kodeproduk', true);
	    $config['max_width']            = 1024;
	    $config['max_height']           = 768;

	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);

	    if ($this->upload->do_upload('gambar')) {
	        return $this->upload->data("file_name");
		}
		else{
			return false;
		}
	    
	}
	
	public function hapusproduk($id)
	{
		
		$this->db->where("idproduk", $id);  
        return $this->db->delete("produk");
	}		
		
	public function hapusdatacart($nopemesanan)
	{
		$this->db->from("pemesanan");
		$query = $this->db->where("nopemesanan", $nopemesanan);  
		return $query = $this->db->delete('cart');
	}		

	public function getProdukById($id)
	{
		
		$this->db->where("idproduk", $id);  
        return $this->db->get("produk")->row_array();  
	}

	public function ubahproduk()
	{
		$data = [
			"namaproduk" => $this->input->post('namaproduk', true),
			"harga" => $this->input->post('harga', true),
			"deskripsiproduk" => $this->input->post('deskripsi', true),			
		];
		$this->db->where('idproduk',$this->input->post('idproduk'));
		return $this->db->update('produk',$data);
	}

	public function cariDataProduk()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('namaproduk', $keyword);
		$this->db->or_like('kodeproduk', $keyword);
		$this->db->or_like('jenisproduk', $keyword);
		return $this->db->get('produk')->result_array();
	}

	public function cariDataPesanan()
	{
		$keyword = $this->input->post('keyword', true);
		
		$this->db->like('kodetransaksi', $keyword);
		$this->db->or_like('namalengkap', $keyword);
		return $this->db->get('pemesanan')->result_array();
	}

	public function getUsername()
	{
		$jsonAkun = file_get_contents("assets/js/akun.json");
		$json = json_decode($jsonAkun,true); 
		$usernameA=  $json['username'];

		return $usernameA;
	}

	public function getPassword()
	{
		$jsonAkun = file_get_contents("assets/js/akun.json");
		$json = json_decode($jsonAkun,true); 
		$passwordA=  $json['password'];

		return $passwordA;
	}

}