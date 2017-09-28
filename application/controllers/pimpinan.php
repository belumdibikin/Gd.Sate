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
		$this->load->model('m_berkas');


	}
	public function index()
	{
		$data["kendali"] = $this->m_berkas->getAllKendaliByStatus(array(5,6));
		$data["content"] = $this->load->view('pimpinan/v_pimpinan', $data, true);
		$data["title"] = "Tabel Berkas";
		$this->parser->parse('content', $data);
		// $this->load->view('pimpinan/v_pimpinan');
	}

	public function home()
	{

		$data["kendali"] = $this->m_berkas->getAllKendali();
		$data["content"] = $this->load->view('pimpinan/v_pimpinan', $data, true);
		$data["title"] = "Tabel Berkas";
		$data["status"] = "success";
		print json_encode($data);	
	}

	public function terima_berkas_pimpinan($id_kendali)
	{
		//$data =array();
		$data["berkas"] = $this->m_berkas->getKendaliUtamaByID($id_kendali);
		$data["content"] = $this->load->view('pimpinan/v_terima_berkas_pimp', $data,  true);
		$data["title"] = "Terima Berkas";
		$data["status"] = "success";
		// print json_encode($data);
		$this->parser->parse('content', $data);

		//$this->load->view('verifikatur/v_terima_berkas'); //contoh yang up (harusnya v_terima_berkas)
	}

	
	
}
