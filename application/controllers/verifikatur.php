<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikatur extends CI_Controller {

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
		$data["kendali"] = $this->m_berkas->getAllKendaliByStatus(array(1,7));
        $data["content"] = $this->load->view('verifikatur/v_verifikatur', $data, true);
		$data["title"] = "Tabel Berkas";
		$this->parser->parse('content', $data);
	}

	public function home()
	{

		$data["kendali"] = $this->m_berkas->getAllKendali();
		$data["content"] = $this->load->view('verifikatur/v_verifikatur', $data, true);
		$data["title"] = "Tabel Berkas";
		$data["status"] = "success";
		print json_encode($data);	
	}



	public function terima_berkas_verifikatur($id_kendali)
	{
		//$data =array();
		$data["berkas"] = $this->m_berkas->getKendaliUtamaByID($id_kendali);
		$data["content"] = $this->load->view('verifikatur/v_terima_berkas', $data,  true);
		$data["title"] = "Terima Berkas";
		$data["status"] = "success";
		// print json_encode($data);
		$this->parser->parse('content', $data);

		//$this->load->view('verifikatur/v_terima_berkas'); //contoh yang up (harusnya v_terima_berkas)
	}

	public function ajax_tampil_form_khusus()
	{
		$post_data=$this->input->post();
		$jenis_ajuan = $post_data['select_jenis_aju'];


		if ($jenis_ajuan == "UP") {
			# code...
		$this->load->view('verifikatur/v_berkas_up'); 
			
		}elseif ($jenis_ajuan == "GUP") {
			# code...
		$this->load->view('verifikatur/v_berkas_gu'); 
		}elseif ($jenis_ajuan == "TUP") {
			# code...
		$this->load->view('verifikatur/v_berkas_tu'); 
		}elseif ($jenis_ajuan == "BD") {
			# code...
		$this->load->view('verifikatur/v_berkas_ls_bd'); 
		}elseif ($jenis_ajuan == "TM") {
			# code...
		$this->load->view('verifikatur/v_berkas_ls_tm'); 
		}elseif ($jenis_ajuan == "UM") {
			# code...
		$this->load->view('verifikatur/v_berkas_ls_um'); 
		}elseif ($jenis_ajuan == "BJ") {
			# code...
		$this->load->view('verifikatur/v_berkas_ls_bj'); 
		}
	}


	public function input_dokumen_ver ()
	{
		
	}
	

	
	
}
