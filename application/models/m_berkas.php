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

    /*
        Status
        1 = Baru Masuk
    */
    function insert_kendali_utama($spp_nomor, $spp_tgl_terima, $spp_nilai, $kode_bidang, $kode_kegiatan, $nama_penyedia, $tgl_kendali_verifikasi, $status_kendali, $terbit_tgl, $terbit_nomor, $kode_jenis, $id_verifikatur){
        $sql = "
            INSERT INTO kendali_utama 
            VALUES
            (
                '',
                '$spp_nomor',
                '$spp_tgl_terima',
                '$spp_nilai',
                '$kode_bidang',
                '$kode_kegiatan',
                '$nama_penyedia',
                '$tgl_kendali_verifikasi',
                '1',
                '',
                '',
                '$kode_jenis'
            )
        ";
        $query = $this->db->query($query);
        if($query){
            // vr_catatan   vr_kesimpulan   vr_tgl_periksa  vr_tgl_kembali  vr_tgl_selesai  id_ppk  ppk_tgl_periksa ppk_tgl_kembali ppk_tgl_setuju
            $id_kendali = $this->db->insert_id();
            $sql = "
                INSERT INTO kendali_periksa 
                VALUES
                (
                    '$id_kendali',
                    '$id_verifikatur',
                    '',
                    '',
                    '',
                    '',
                    '',
                    (SELECT pj_pengelola_keuangan_skpd FROM kegiatan WHERE kode_kegiatan = '$kode_kegiatan'),
                    '',
                    '',
                    ''
                )
            ";
            $query = $this->db->query($query);
            if($query){
                return $id_kendali;
            }else{
                return "error";
            }
        }else{
            return "error";
        }
    }

}

?>