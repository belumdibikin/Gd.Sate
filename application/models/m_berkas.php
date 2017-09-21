<?php

class M_berkas extends CI_Model {

    private $arrNonLS = array("GUP","TUP","UP");

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
    function newKendali($spp_nomor, $spp_tgl_terima, $spp_nilai, $kode_bidang, $kode_kegiatan, $nama_penyedia, $tgl_kendali_verifikasi, $terbit_tgl, $terbit_nomor, $kode_jenis, $id_verifikatur){
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
        $query = $this->db->simple_query($query);
        if($query){
            $id_kendali = $this->db->insert_id();
            $sql = "
                INSERT INTO kendali_periksa(`id_kendali`,`id_verifikatur`,`id_ppk`) 
                VALUES
                (
                    '$id_kendali',
                    '$id_verifikatur',
                    (SELECT pj_pengelola_keuangan_skpd FROM kegiatan WHERE kode_kegiatan = '$kode_kegiatan')
                )
            ";
            $query = $this->db->simple_query($query);
            if($query){
                if(in_array($kode_kegiatan, $arrNonLS)){
                    $sql = "
                        INSERT INTO kendali_non_ls(`id_kendali`) 
                        VALUES
                        (
                            '$id_kendali'
                        )
                    ";
                }else{
                    $sql = "
                        INSERT INTO kendali_ls(`id_kendali`) 
                        VALUES
                        (
                            '$id_kendali'
                        )
                    ";
                }

                $query = $this->db->simple_query($query);
                if($query){
                    return $id_kendali;
                }else{
                    return "error";
                }
            }else{
                return "error";
            }
        }else{
            return "error";
        }
    }

    //id_kendali    spp_bp  spp_bpp spp_ringkasan   spp_rincian spp_nd_pengajuan    sr_pernyataan_pengajuan up_dat_dpa  up_dat_spd_tri  up_anggaran_kas up_rencana_pencairan    gu_sr_pengesahan_spj    gu_sr_pernyataan_belanja    tu_sr_setuju    tu_rencana_guna

    // vr_catatan   vr_kesimpulan   vr_tgl_periksa  vr_tgl_kembali  vr_tgl_selesai  id_ppk  ppk_tgl_periksa ppk_tgl_kembali ppk_tgl_setuju
    function vrTerima($id_kendali, $vr_catatan, $spp_bp, $spp_bpp, $spp_ringkasan, $spp_rincian, $spp_nd_pengajuan, $sr_pernyataan_pengajuan, $up_dat_dpa, $up_dat_spd_tri, $up_anggaran_kas, $up_rencana_pencairan, $gu_sr_pengesahan_spj, $gu_sr_pernyataan_belanja, $tu_sr_setuju, $tu_rencana_guna){
        
        $sql = "
            SELECT kode_kegiatan FROM kendali_utama WHERE id_kendali = '$id_kendali'
        ";
        $query = $this->db->query($query);
        $row = $query->row();
        if(isset($row)){
            $kode_kegiatan = $row->kode_kegiatan;
        }else{
            return "error";
        }

        //Non LS
        if(in_array($kode_kegiatan, $arrNonLS)){
            $sql = "
                UPDATE kendali_non_ls
                SET 
                    `spp_bp` = '$spp_bp',
                    `spp_bpp` = '$spp_bpp',
                    `spp_ringkasan` = '$spp_ringkasan',
                    `spp_rincian` = '$spp_rincian',
                    `spp_nd_pengajuan` = '$spp_nd_pengajuan',
                    `sr_pernyataan_pengajuan` = '$sr_pernyataan_pengajuan',
                    `up_dat_dpa` = '$up_dat_dpa',
                    `up_dat_spd_tri` = '$up_dat_spd_tri',
                    `up_anggaran_kas` = '$up_anggaran_kas',
                    `up_rencana_pencairan` = '$up_rencana_pencairan',
                    `gu_sr_pengesahan_spj` = '$gu_sr_pengesahan_spj',
                    `gu_sr_pernyataan_belanja` = '$gu_sr_pernyataan_belanja',
                    `tu_sr_setuju` = '$tu_sr_setuju',
                    `tu_rencana_guna` = '$tu_rencana_guna'
                WHERE
                    `id_kendali = '$id_kendali'
            ";
        }else{
            $sql = "
                UPDATE kendali_ls
                SET 
                    `spp_bp` = '$spp_bp',
                    `spp_bpp` = '$spp_bpp',
                    `spp_ringkasan` = '$spp_ringkasan',
                    `spp_rincian` = '$spp_rincian',
                    `spp_nd_pengajuan` = '$spp_nd_pengajuan',
                    `sr_pernyataan_pengajuan` = '$sr_pernyataan_pengajuan',
                    `up_dat_dpa` = '$up_dat_dpa',
                    `up_dat_spd_tri` = '$up_dat_spd_tri',
                    `up_anggaran_kas` = '$up_anggaran_kas',
                    `up_rencana_pencairan` = '$up_rencana_pencairan',
                    `gu_sr_pengesahan_spj` = '$gu_sr_pengesahan_spj',
                    `gu_sr_pernyataan_belanja` = '$gu_sr_pernyataan_belanja',
                    `tu_sr_setuju` = '$tu_sr_setuju',
                    `tu_rencana_guna` = '$tu_rencana_guna'
                WHERE
                    `id_kendali = '$id_kendali'
            ";
        }

        $query = $this->db->simple_query($query);
        if($query){
            $sql = "
                UPDATE kendali_periksa
                SET
                    `vr_catatan` = '$vr_catatan',
                    `vr_tgl_periksa` = CURDATE()
                WHERE
                    `id_kendali = '$id_kendali'
            ";
        }else{
            return "error";
        }
    }
}

?>