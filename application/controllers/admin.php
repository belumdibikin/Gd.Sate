<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('m_admin');
	}

	public function index(){
		$data["options"] = array();
        $data["content"] = $this->load->view('admin/v_admin', $data, true);
		$data["title"] = "Administrator";
		$this->parser->parse('content', $data);
	}
}