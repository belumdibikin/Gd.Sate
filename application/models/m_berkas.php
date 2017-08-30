<?php

class M_berkas extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	

   function select_nama_kegiatan()
   {
      $this->db->select('*');
      $this->db->from('kegiatan');
      return $this->db->get()->result();
   }

   
   function select_verifikatur()
   {
       $this->db->select('*');
      $this->db->from('verifikatur');
      return $this->db->get()->result();
   }

   


}



?>

