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
}