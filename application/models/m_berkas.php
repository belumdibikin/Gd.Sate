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
      $sql = "
        SELECT p.id_pegawai, p.nama_pegawai
        FROM pegawai p, user u
        WHERE u.level = 2
        AND p.id_pegawai = u.id_pegawai
      ";
      $query = $this->db->query($sql);
      return $query->result();
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

