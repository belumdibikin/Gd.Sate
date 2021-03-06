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
		$data["kendali"] = $this->m_berkas->getAllKendali();
        $data["content"] = $this->load->view('registrator/v_registrator', $data, true);
		$data["title"] = "Tabel Berkas";
		$this->parser->parse('content', $data);
	}

	public function home(){
		$data["kendali"] = $this->m_berkas->getAllKendali();
		$data["content"] = $this->load->view('registrator/v_registrator', $data, true);
		$data["title"] = "Tabel Berkas";
		$data["status"] = "success";
		print json_encode($data);	
	}

	public function tambah_berkas()
	{
		$data["content"] = $this->load->view('registrator/v_tambah_berkas', '', true);
		$data["title"] = "Tambah Berkas";
		$data["status"] = "success";
		print json_encode($data);
	}

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


	
	

	public function ajax_tampil_form_verifikasi()
	{

		$post_data=$this->input->post();
		$jenis_verifikasi = $post_data['select_jenis_ver'];
		$data['nama_verifikatur'] = $this->m_berkas->getAllVerifikatur();
		// $data['kode_kegiatan'] = $this->m_berkas->getAllKegiatan();
		$kode_bidang = "SKT";
		$data['kode_kegiatan'] = $this->m_berkas->getKegiatanByBidang($kode_bidang);

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

	public function ajax_nama_kegiatan()
	{
		$post_data=$this->input->post();
		$kode_kegiatan = $post_data['kde_kegiatan'];
		//var_dump($kode_kegiatan);
		$data['nama_kegiatan'] = $this->m_berkas->getNamaKegiatanByKode($kode_kegiatan);

		print $data['nama_kegiatan']->nama_kegiatan;
	}

	public function ajax_kode_kegiatan()
	{

		$post_data=$this->input->post();
		$kode_bidang = $post_data['bidang'];
		//var_dump($kode_kegiatan);
		$data['kegiatan'] = $this->m_berkas->getKegiatanByBidang($kode_bidang);

		print json_encode($data);
	}

	public function input_dokumen_reg()
	{

		
		$post_data=$this->input->post();


		$spp_tgl_terima=$post_data['tanggalterima'];
		$spp_nilai=$post_data['nilaispp'];
		$kode_bidang=$post_data['bidang'];
		$spp_nomor=$post_data['nomorspp'];
		$kode_kegiatan=$post_data['kde_kegiatan'];
			//$nama_kegiatan=$post_data['namkeg'];
		$nama_penyedia=$post_data['namapenyedia'];
		$tgl_kendali_verifikasi=$post_data['tanggalkendali'];
			//$status_kendali=$post_data['select_jenis_aju'];
			//$terbit_tgl=$post_data['select_jenis_aju'];
			//$terbit_nomor=$post_data['select_jenis_aju'];
		$id_verifikatur=$post_data['verifikatur'];
		
		$kode_jenis=$post_data['select_jenis_aju'];
		if ($kode_jenis=="LS"){
			$kode_jenis = $post_data['blls'];
		}


		$hasil = $this->m_berkas->newKendali($spp_nomor, $spp_tgl_terima, $spp_nilai, $kode_bidang, $kode_kegiatan, $nama_penyedia, $tgl_kendali_verifikasi, $kode_jenis, $id_verifikatur);
		
		print $hasil;

	}



}
