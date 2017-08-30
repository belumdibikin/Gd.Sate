<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrator extends CI_Controller {

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
		$this->load->view('registrator/v_registrator');
	}

	public function tambah_berkas()
	{


		$this->load->view('registrator/v_tambah_berkas');
	}

	// public function test()
	// {

	// 	$post_data=$this->input->post();
	// 	$bidang = $post_data['bidang'];
	// 	$select_jenis_aju = $post_data['select_jenis_aju'];

	// 	echo "<pre>";
	// 	print_r($post_data);
	// 	exit();

	// 	//$this->load->view('test',$data);
	// }

	public function berkas_up()
	{
		$this->load->view('v_berkas_up');
	}

	public function berkas_gu()
	{
		$this->load->view('v_berkas_gu');
	}

	public function berkas_tu()
	{
		$this->load->view('v_berkas_tu');
	}


	// public function ajax_tampil_form()
	// {

	// 	$post_data=$this->input->post();
	// 	$jenis_ajuan = $post_data['select_jenis_aju'];

	// 	if($jenis_ajuan == 'UP')
	// 	{

	// 	$this->load->view('registrator/v_berkas_up');

	// 	}elseif ($jenis_ajuan == "GU") {
	// 		# code...
	// 		$this->load->view('registrator/v_berkas_gu');

	// 	}elseif ($jenis_ajuan == "TU") {
	// 		# code...
	// 		$this->load->view('registrator/v_berkas_tu');
	// 	}elseif($jenis_ajuan == 'LS'){

	// 		$this->load->view('registrator/v_berkas_ls');
	// 	}elseif($jenis_ajuan == 'SPJ'){
	// 		$this->load->view('registrator/v_berkas_spj');

	// 	}else{	
	// 		echo "Maaf input yang anda masukan tidak sesuai, Silahkan ulangi kembali";
	// 	}


	// }

	// public function ajax_tampil_lampiran()
	// {

	// 	$post_data=$this->input->post();
	// 	$jenis_ajuan = $post_data['select_jenis_aju'];

	// 	if($jenis_ajuan == 'UP')
	// 	{

	// 	echo "lampiran UP";	
	// 	//$this->load->view('registrator/v_berkas_up');

	// 	}elseif ($jenis_ajuan == "GU") {
	// 		# code...
	// 	echo "lampiran GU";	
	// 		//$this->load->view('registrator/v_berkas_gu');

	// 	}elseif ($jenis_ajuan == "TU") {
	// 		# code...
	// 	echo "lampiran TU";	
	// 		//$this->load->view('registrator/v_berkas_tu');
	// 	}elseif($jenis_ajuan == 'LS'){

	// 	echo "lampiran LS";	
	// 		//$this->load->view('registrator/v_berkas_ls');
	// 	}elseif($jenis_ajuan == 'SPJ'){
	// 	echo "lampiran UP";	
	// 		//$this->load->view('registrator/v_berkas_spj');

	// 	}else{	
	// 		echo "Maaf input yang anda masukan tidak sesuai, Silahkan ulangi kembali";
	// 	}


	// }
	

	public function ajax_tampil_form_verifikasi()
	{

		$post_data=$this->input->post();
		$jenis_verifikasi = $post_data['select_jenis_ver'];
		$data['nama_verifikatur'] = $this->m_berkas->select_verifikatur();
		$data['kode_kegiatan'] = $this->m_berkas->select_nama_kegiatan();

		if ($jenis_verifikasi == "BL") {
			# code...
			$this->load->view('registrator/v_form_SPM_BL',$data);

		}elseif ($jenis_verifikasi == "TBL") {
			# code...
			$this->load->view('registrator/v_form_SPM_TBL');
		}elseif($jenis_verifikasi == 'SPJ'){
			
			$this->load->view('registrator/v_form_SPJ');
		}else{	
			echo "Maaf input yang anda masukan tidak sesuai, Silahkan ulangi kembali";
		}

		
	}
	
}
