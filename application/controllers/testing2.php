<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing2 extends CI_Controller {

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
			$this->load->helper('string');
			$this->load->database();
			$this->load->Model('DatabaseGeoff');
        } 
	
	public function index()
	{
		$anonymouspelanggan = random_string('alpha', 10);		
		$data = 
		[
			"namasementara" => $anonymouspelanggan,
			"totalbayar" => '0'
		];
		$this->DatabaseGeoff->insertnama($data);
		$callnama = $this->session->set_userdata('namapelanggan', $anonymouspelanggan);
		$this->session->set_userdata('orderby','Netral');
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF Max Footwear');
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	
	public function rumah()
	{
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
		$this->session->set_userdata('idproduk', $idproduk);
		$panggilproduk = $this->DatabaseGeoff->panggilproduk($idproduk);
		$this->session->set_userdata($panggilproduk);
		$jeniskelamin = $this->session->userdata('orderby');
		if($jeniskelamin = 'L')
		{
			//redirect('testing2/detailcowok($idproduk)');
			$this->session->set_userdata('warnagender','btn-dark');
			redirect('testing2/detailcowok');
		}
		if ($jeniskelamin = 'P')
		{
			//redirect('testing2/detailcowok($idproduk)');
			$this->session->set_userdata('warnagender','btn-danger');
			redirect('testing2/detailcewek'($idproduk));
		}
	}
	
	public function detailcowok()
	{
		$idproduk = $this->session->userdata('idproduk');
		$deskripsi['detail'] = $this->DatabaseGeoff->detailbarang($idproduk)->result();
		$jeniskelamin = $this->session->userdata('orderby');
		$deskripsi['randomproduk'] = $this->DatabaseGeoff->showrandomcowok($jeniskelamin);
		$this->load->view('template/header');
		$this->load->view('Detail', $deskripsi);
		$this->load->view('template/footer');
	}
	
	public function detailcewek()
	{
		$idproduk = $this->session->userdata('idproduk');
		$deskripsi['detail'] = $this->DatabaseGeoff->detailbarang($idproduk)->result();
		$jeniskelamin = $this->session->userdata('orderby');
		$deskripsi['randomproduk'] = $this->DatabaseGeoff->showrandomcewek($jeniskelamin);
		$this->load->view('template/header');
		$this->load->view('DetailCewek', $deskripsi);
		$this->load->view('template/footer');		
	}
	
	public function tambahkedalamkeranjang()
	{
		$nama= $this->session->userdata('namapelanggan');
		$carinama = $this->DatabaseGeoff->carinamapelanggan($nama)->nopemesanan;
		$data = array(
			'idproduk' => $this->input->post('idproduk'),
			'namaproduk' => $this->input->post('namaproduk'),
			'jumlahproduk' => $this->input->post('qty'),
			'ukuranproduk' => $this->input->post('radio'),
			'totalhargaproduk' => $this->input->post('hasilproduk'),
			'jadipesan' => 'N',
			'nopemesanan' => $carinama
		);
		
		$totalbayar = $this->session->userdata('totalbayar');
		$produkyangditambah = $this->input->post('hasilproduk');
		$hasilpenjumlahan = $totalbayar + $produkyangditambah;
		
		$this->DatabaseGeoff->addcart($data);	
		
		$masukkanharga = ["totalbayar" => $hasilpenjumlahan];
		$this->DatabaseGeoff->masukkantotalbayar($masukkanharga);
		
		$this->session->set_userdata('totalbayar', $hasilpenjumlahan);
		
		redirect('testing2/panggilcart');
	}
	
	public function hapusbarangorderan($idpemesanan)
	{
			$this->DatabaseGeoff->hapusbarangorderan($idpemesanan);
			redirect('testing2/panggilcart');
	}
	
	public function panggilcart()
	{
		$cart['cart'] = $this->DatabaseGeoff->showcart();
		$this->load->view('template/header');
		$this->load->view('konfirmasipembelian/ringkasanbarang', $cart);
		$this->load->view('template/footer');
	}
	
	public function identitasdatadiri()
	{
		//$nama= $this->session->userdata('namapelanggan');
		$cart['cart'] = $this->DatabaseGeoff->showcart();
		$this->load->view('template/header');
		$this->load->view('konfirmasipembelian/identitasdiri', $cart);
		$this->load->view('template/footer');
	}
}
