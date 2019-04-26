<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Madmin');
		$this->load->library('form_validation');
        $this->load->helper('url'); 
		$this->load->helper('string');
		$this->load->database();
			
	}

	public function index()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		if($this->form_validation->run()==false)
		{
			$this->session->set_userdata('Judul Halaman', 'GMX- Admin Login');
			$this->load->view('admin/login');
			$this->session->set_flashdata('login','ditambahkan');
		}
		else
		{
			$this->login();
		}
	}

	private function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$usernameA=$this->input->post('Auser');
		$passwordA=$this->input->post('Apass');

		if(!($username==$usernameA)&& !($password==$passwordA))
		{
			
			$this->load->view('admin/login');
		}
		else
		{
			$data['produk'] = $this->Madmin->daftarproduct();
			if ($this->input->post('keyword')) {
				$data['produk'] = $this->Madmin->cariDataProduk();
			}
			$this->session->set_userdata('Judul Halaman', 'GMX- Data Produk');
			$this->load->view('template/adminheader');
			$this->load->view('admin/dataproduk',$data);
		}	
	}

	public function dataproduk()
	{
		$data['produk'] = $this->Madmin->daftarproduct();
		if ($this->input->post('keyword')) {
			$data['produk'] = $this->Madmin->cariDataProduk();
		}
		$this->session->set_userdata('Judul Halaman', 'GMX- Data Produk');
		$this->load->view('template/adminheader');
		$this->load->view('admin/dataproduk',$data);
				
	}
	public function datapemesanan()
	{
		$data['pemesanan'] = $this->Madmin->daftarpemesanan();
		if ($this->input->post('keyword')) {
			$data['pemesanan'] = $this->Madmin->cariDataPesanan();
		}
		$this->session->set_userdata('Judul Halaman', 'GMX- Data Pemesanan');
		$this->load->view('template/adminheader');
		$this->load->view('admin/datapemesanan',$data);
				
	}
	
	public function ubahproduk()
	{
		$data['produk'] = $this->Madmin->daftarproduct();
		$this->load->view('template/adminheader');
		$this->load->view('admin/ubahproduk',$data);
				
	}
	public function tambahproduk()
	{
		$this->form_validation->set_rules('namaproduk','namaproduk','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('kodeproduk','kodeproduk','required');

		if ( $this->form_validation->run() == false)
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('template/adminheader');
					$this->load->view('admin/tambahproduk',$error);     
                }
		else
		{
			$this->Madmin->tambahproduk();
			$this->session->set_flashdata('flash','ditambahkan');		
			redirect('admin/dataproduk');
		}
	}
	public function hapus($id)
	{		
		$this->Madmin->hapusproduk($id);		
		$this->session->set_flashdata('flash','dihapus');		
		redirect('admin/dataproduk');
	}

	public function hapusPesanan($id)
	{		
		$this->Madmin->hapuspesanan($id);		
		$this->session->set_flashdata('flash','dihapus');		
		redirect('admin/datapemesanan');
	}

	public function ubah($id)
	{
		$this->session->set_userdata('Judul Halaman', 'GMX- Ubah Produk');
		$data['produk'] = $this->Madmin->getProdukById($id);		
		$this->form_validation->set_rules('namaproduk','namaproduk','required');
		$this->form_validation->set_rules('harga','harga','required');

		if($this->form_validation->run() == false){
			$this->load->view('template/adminheader');
			$this->load->view('admin/ubahproduk',$data);
		}
		else{
			$this->Madmin->ubahproduk($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('admin/dataproduk');
		}
	}

	function edit($id){
		$where = array('idproduk' => $idproduk);
		$data['produk'] = $this->Madmin->edit_data($where,'kodeproduk')->result();
		$this->load->view('template/adminheader');
		$this->load->view('ubahproduk',$data);
	}

	function update()
	{
		$id = $this->input->post('idproduk');
		$namaproduk = $this->input->post('namaproduk');
		$harga = $this->input->post('harga');
		
	 
		$data = array(
			'harga' => $harga,
			'namaproduk'=>$namaproduk
			
		);
	 
		$where = array(
			'idproduk' => $id
		);
	 
		$this->Madmin->update_data($where,$data,'produk');
		redirect('admin/dataproduk');
	}
}