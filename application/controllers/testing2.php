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
	
	/*
		Berfungsi untuk :
		- Menampilkan halaman home
		- Membuat anonymous user yang mengakses halaman ini
		- Membuat session baru untuk pewarnaan dan judul halaman dalam website
	*/
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
		$this->session->set_userdata('warnagender','btn-dark');
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi agar tidak memasukkan data user terbaru beserta anonymous user lagi
	*/
	public function rumah()
	{
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF Max Footwear');
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi untuk mencari produk yang dicari berdasarkan permintaan user
	*/
	public function searchproductengine()
	{
		if ($this->input->post('cariproduk')) {
			$daftar['produk'] = $this->DatabaseGeoff->cariproduk();
			$this->load->view('template/header');
			$this->load->view('halamanproduk', $daftar);
			$this->load->view('template/footer');
		}
	}
	
	/*
		Berfungsi untuk menampilkan semua produk pria
	*/
	public function produkcowok()
	{
		$this->session->set_userdata('orderby', 'L');
		$orderby = $this->session->userdata('orderby');
		$this->session->set_userdata('warnagender','btn-dark');
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF BOYS');
		
		if ($this->input->post('cariproduk')) {
			$daftar['produk'] = $this->DatabaseGeoff->cariproduk();
			$this->load->view('template/header');
			$this->load->view('halamanproduk', $daftar);
			$this->load->view('template/footer');
		}
		else
		{
			$daftar['produk'] = $this->DatabaseGeoff->showproduct($orderby);
			$this->load->view('template/header');
			$this->load->view('halamanproduk', $daftar);
			$this->load->view('template/footer');
		}
	}
	
	/*
		Berfungsi untuk menampilkan semua produk wanita
	*/
	public function produkcewek()
	{
		$this->session->set_userdata('orderby', 'P');
		$orderby = $this->session->userdata('orderby');
		$this->session->set_userdata('warnagender','btn-danger');
		$daftar['produk'] = $this->DatabaseGeoff->showproduct($orderby);
		$this->session->set_userdata('Judul Halaman', 'GMX- GEOFF GIRLS');
				if ($this->input->post('cariproduk')) {
			$daftar['produk'] = $this->DatabaseGeoff->cariproduk();
			$this->load->view('template/header');
			$this->load->view('halamanproduk', $daftar);
			$this->load->view('template/footer');
		}
		else
		{
			$daftar['produk'] = $this->DatabaseGeoff->showproduct($orderby);
			$this->load->view('template/header');
			$this->load->view('halamanproduk', $daftar);
			$this->load->view('template/footer');
		}
	}
	
	/*
		Berfungsi untuk :
		- Menampilkan produk yang dipinta oleh pengguna
		- Membuat session baru untuk produk yang dipinta berguna sebagai antisipasi kedepannya
		- Membuat session baru untuk membedakan warna tombol untuk wanita dan pria
	*/
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
	
	/*
		Berfungsi untuk menampilkan produk pria yang dipilih oleh pengguna
	*/
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
	
	/*
		Berfungsi untuk menampilkan produk wanita yang dipilih oleh pengguna
	*/
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
	
	/*
		Berfungsi untuk :
		- Menambahkan produk yang ingin dibeli oleh pengguna berdasarkan nama 
		anonymous pengguna yang sudah disiapkan dalam session yang sudah dibuat
	*/
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
	
	/*
		Berfungsi untuk menghapus produk yang dipilih oleh pengguna
	*/
	public function hapusbarangorderan($idpemesanan)
	{
			$this->DatabaseGeoff->hapusbarangorderan($idpemesanan);
			redirect('testing2/panggilcart');
	}
	
	/*
		Berfungsi untuk menampilkan orderan produk yang telah dimasukkan keranjang oleh pengguna
		berdasarkan nama anonymous pengguna
	*/
	public function panggilcart()
	{
		$cart['cart'] = $this->DatabaseGeoff->showcart();
		$this->load->view('template/header');
		$this->load->view('konfirmasipembelian/ringkasanbarang', $cart);
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi untuk mengisi identitas pengguna agar dimasukkan ke dalam database
		berdasarkan nama anonymous pengguna
	*/
	public function identitasdatadiri()
	{
		//$nama= $this->session->userdata('namapelanggan');
		$cart['cart'] = $this->DatabaseGeoff->showcart();
		$this->load->view('template/header');
		$this->load->view('konfirmasipembelian/identitasdiri', $cart);
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi untuk menampilkan halaman tentang profil perusahaan
	*/
	public function aboutus()
	{
		$this->load->view('template/header');
		$this->load->view('aboutus');
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi untuk memberi pengetahuan tentang cara membeli barang di dalam website
	*/
	public function beli()
	{
		$this->load->view('template/header');
		$this->load->view('beli');
		$this->load->view('template/footer');
	}
	
	/*
		Berfungsi untuk mengkonfirmasi pesan yang sudah dipesan pengguna
	*/
	public function konfirmasibarang()
	{
		$this->load->view('template/header');
		$this->load->view('konfirmasi');
		$this->load->view('template/footer');
	}
}
