<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

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
		//$this->load->model('');
	

	}
	public function index()
	{
		$this->load->view('pimpinan/v_pimpinan');
	}

	public function terima_berkas_pimpinan()
	{
		//$this->load->view('verifikatur/v_terima_berkas'); 
		$this->load->view('pimpinan/v_terima_berkas_pimp'); //contoh yang up
	}

	
	
}
