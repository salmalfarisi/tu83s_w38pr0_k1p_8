<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geoffmax extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); 
			$this->load->database();
			$this->load->Model('DatabaseGeoff');
        } 
	
	public function index()
	{
		$this->session->set_userdata('orderby','Netral');
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF Max Footwear');
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	
	public function produkcowok()
	{
		$this->session->set_userdata('orderby', 'L');
		$orderby = $this->session->userdata('orderby');
		$daftar['produk'] = $this->DatabaseGeoff->showproduct($orderby);
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF BOYS');
		$this->load->view('template/header');
		$this->load->view('halamanproduk', $daftar);
		$this->load->view('template/footer');
	}
	
	public function produkcewek()
	{
		$this->session->set_userdata('orderby', 'P');
		$orderby = $this->session->userdata('orderby');
		$daftar['produk'] = $this->DatabaseGeoff->showproduct($orderby);
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF GIRLS');
		$this->load->view('template/header');
		$this->load->view('halamanproduk', $daftar);
		$this->load->view('template/footer');
	}
	
	public function detail($idproduk)
	{
		$jeniskelamin = $this->session->userdata('orderby');
		if($jeniskelamin = 'L')
		{
			$this->detailcowok($idproduk);
		}
		else
		{
			$this->detailcewek($idproduk);
		}
	}
	
	public function detailcowok($idproduk)
	{
		$deskripsi['detail'] = $this->DatabaseGeoff->detailbarang($idproduk)->result();
		$this->load->view('template/header');
		$this->load->view('Detail', $deskripsi);
		$this->load->view('template/footer');
	}
	
	public function detailcewek($idproduk)
	{
		$deskripsi['detail'] = $this->DatabaseGeoff->detailbarang($idproduk)->result();
		$this->load->view('template/header');
		$this->load->view('DetailCewek', $deskripsi);
		$this->load->view('template/footer');		
	}
	
	/*public function cartcheckbelanja()
	{
		//carasimpan warna untuk tombolnya ??? kesimpulan yang didapat : 
		//dimana posisi terakhir membeli barang, disitulah pewarnaan tombol 
		//mengikuti halaman terakhir yang diakses pelanggan 
		$orderby = $this->session->userdata('orderby');
		//Hitam : #333333
		//Merah : #f93e4c
		if($orderby = 'P')
		{
			$this->session->set_userdata('warnagender','btn-danger');
			$cekdetail['cart'] = $this->DatabaseGeoff->cekbarang();
			$this->load->view('template/header');
			$this->load->view('konfirmasipembelian/ringkasanbarang');
			$this->load->view('template/footer');
		}
		else
		{
			$this->session->set_userdata('warnagender','btn-dark');
			$cekdetail['cart'] = $this->DatabaseGeoff->cekbarang();
			$this->load->view('template/header');
			$this->load->view('konfirmasipembelian/ringkasanbarang', $cekdetail);
			$this->load->view('template/footer');
		}
	}*/
	
	/*public function cartcheckbelanja()
	{
		/*radio
		idproduk
		namaproduk
		ukuransepatu
		qty*//*
		$data = array
		(
			'idproduk' => $this->input->post('idproduk');
			'ukuranproduk' => $this->input->post('radio');
			'namaproduk' => $this->input->post('namaproduk');
			'jumlahproduk' => $this->input->post('qty');
			'jadipesan' => 'Belum Bayar'
		);
		
		$inputkedata = $this->DatabaseGeoff->addcart($data);
		$this->input->post->
	}*/
	
	public function langsungbayar()
	{	
		$totalharga = array('totalbayar' => $this->input->post('totalharga'));

		$data = array
		(
			'idproduk' => $this->input->post('idproduk'),
			'ukuranproduk' => $this->input->post('radio'),
			'namaproduk' => $this->input->post('namaproduk'),
			'jumlahproduk' => $this->input->post('qty'),
			'jadipesan' => 'N'
		);
		
		$masukkantotalharga = $this->DatabaseGeoff->masukkanharga($totalharga);
		$inputkedata = $this->DatabaseGeoff->addcart($data);
		//$caritotalbayar = $this->DatabaseGeoff->shownopemesanan()->totalbayar;
		//$showtotalbayar = $this->session->set_userdata('totalharga', $caritotalbayar);
		// $showpemesanan2 = $this->session->userdata('nomorpemesanan');
		//$data['tampilkandata'] = $this->DatabaseGeoff->showcart();
		//$data['tampilkanproduk'] = $this->DatabaseGeoff->tampilkanproduk();
		$this->load->view('template/header');
		$this->load->view('konfirmasipembelian/ringkasanbarang', $data);
		$this->load->view('template/footer');
	}

	public function identitasdatadiri()
	{
		$this->load->view('template/header');
		$this->load->view('datadiri');
		$this->load->view('template/footer');
	}
}
