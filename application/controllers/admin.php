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
		//$this->load->view('template/adminheader');
		$this->session->set_userdata('Judul Halaman', 'GMX- Admin Login');
		$this->load->view('admin/login');
	}

	public function dataproduk()
	{
		$data['produk'] = $this->Madmin->daftarproduct();
		if ($this->input->post('keyword')) {
			$data['produk'] = $this->Madmin->cariDataProduk();
		}
		// $daftar['produk'] = $this->Madmin->daftarproduct();
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
		$this->load->view('template/adminheader');
		$this->load->view('admin/ubahproduk');
				
	}
	public function tambahproduk()
	{
		

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('namaproduk','namaproduk','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('kodeproduk','kodeproduk','required');
		// $this->form_validation->set_rules('uploud','gambarproduk','required');
		//conditon in form_validation, if user input form = false, then load page "tambah" again
		// if($this->form_validation->run() == false){
		// 	$this->load->view('template/adminheader');
		// 	$this->load->view('admin/tambahproduk');
		// }
	    

		if ( $this->form_validation->run() == false)
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('template/adminheader');
						$this->load->view('admin/tambahproduk',$error);
                        
                }
                
		//else, when successed {
		else{
		
			$this->Madmin->tambahproduk();
		//use flashdata to to show alert "added success"
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
		$data['judul'] = 'Form Ubah Produk';
		$data['produk'] = $this->Madmin->getProdukById($id);
		

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('namaproduk','namaproduk','required');
		$this->form_validation->set_rules('harga','harga','required');
		//conditon in form_validation, if user input form = false, then load page "ubah" again
		if($this->form_validation->run() == false){
			$this->load->view('template/adminheader');
			$this->load->view('admin/ubahproduk');
		}
		//else, when successed {
		else{
		//call method "ubahDataMahasiswa" in Mahasiswa_model
			$this->Madmin->ubahproduk($id);
		//use flashdata to to show alert "data changed successfully"
			$this->session->set_flashdata('flash','diubah');
		//back to controller mahasiswa }
			redirect('admin/dataproduk');
		}
	}




}
