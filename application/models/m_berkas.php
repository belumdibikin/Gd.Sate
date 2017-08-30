<?php

class M_berkas extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	

   function select_kegiatan()
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


   function select_nama_kegiatan($kode_kegiatan)
   {
       $this->db->select('nama_kegiatan');
      $this->db->from('kegiatan');
      $this->db->where('kode_kegiatan', $kode_kegiatan);
      return $this->db->get()->result();
   }


   


}



?>

