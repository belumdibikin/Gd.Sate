<?php

class M_berkas extends CI_Model {

    var $arrNonLS = array("GUP","TUP","UP");

    function __construct()
    {
        parent::__construct();
    }

    function getAllKegiatan()
    {
        $this->db->select('*');
        $this->db->from('kegiatan');
        return $this->db->get()->result();
    }

    function getKegiatanByBidang($kode_bidang)
    {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('kode_bidang', $kode_bidang);
        return $this->db->get()->result();
    }

    function getAllVerifikatur()
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

    function getNamaKegiatanByKode($kode_kegiatan){
        $this->db->select('nama_kegiatan');
        $this->db->from('kegiatan');
        $this->db->where('kode_kegiatan', $kode_kegiatan);
        return $this->db->get()->row();
    }

    function getAllKendali(){
        $this->db->select('*');
        $this->db->from('kendali_utama ku');
        $this->db->join('kendali_periksa kp', 'ku.id_kendali = kp.id_kendali', 'left');
        $this->db->join('kegiatan k', 'ku.kode_kegiatan = k.kode_kegiatan', 'left');
        $this->db->join('status s', 'ku.status_kendali = s.id_status', 'left');
        $this->db->join('pegawai p', 'kp.id_verifikatur = p.id_pegawai', 'left');
        return $this->db->get()->result();
    }

    function getKendaliUtamaByID($id_kendali){
        $this->db->select('*');
        $this->db->from('kendali_utama');
        $this->db->where('id_kendali', $id_kendali);
        return $this->db->get()->row();   
    }

    /*
        Level
        1 = Registrator
        2 = Verifikatur
        3 = Pimpinan
        4 = Pegawai
        5 = Admin

        Status
        1 = Berkas Baru (1)
        2 = Berkas Kembali (1)
        3 = Berkas Diperiksa Verifikatur (2)
        4 = Berkas Dikembalikan ke Pengaju (2)
        5 = Berkas Dikirim ke Pimpinan (2)
        6 = Berkas Diperiksa Pimpinan (3)
        7 = Berkas Dikembalikan ke Verifikatur (3)
        8 = Berkas Disetujui Pimpinan (3)
        9 = Berkas Terbit (2)
    */
    function newKendali($spp_nomor, $spp_tgl_terima, $spp_nilai, $kode_bidang, $kode_kegiatan, $nama_penyedia, $tgl_kendali_verifikasi, $kode_jenis, $id_verifikatur){
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
        $query = $this->db->simple_query($sql);
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
            $query = $this->db->simple_query($sql);
            if($query){
                if(in_array($kode_jenis, $this->arrNonLS)){
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

                $query = $this->db->simple_query($sql);
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

    // vr_catatan   vr_kesimpulan   vr_tgl_periksa  vr_tgl_kembali  vr_tgl_selesai  id_ppk  ppk_tgl_periksa ppk_tgl_kembali ppk_tgl_setuju
    function vrTerimaNonLS($id_kendali, $status_kendali, $vr_catatan, $spp_bp, $spp_bpp, $spp_ringkasan, $spp_rincian, $spp_nd_pengajuan, $sr_pernyataan_pengajuan, $up_dat_dpa, $up_dat_spd_tri, $up_anggaran_kas, $up_rencana_pencairan, $gu_sr_pengesahan_spj, $gu_sr_pernyataan_belanja, $tu_sr_setuju, $tu_rencana_guna){
        
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

        $query = $this->db->simple_query($sql);
        if($query){
            $sql = "
                UPDATE kendali_periksa
                SET
                    `vr_catatan` = '$vr_catatan',
                    `vr_tgl_periksa` = CURDATE()
                WHERE
                    `id_kendali = '$id_kendali'
            ";
            $query = $this->db->simple_query($sql);
            if($query){
                $sql = "
                    UPDATE kendali_utama
                    SET
                        `status_kendali` = '$status_kendali'
                    WHERE
                        `id_kendali = '$id_kendali'
                ";
                $query = $this->db->simple_query($sql);
                if($query){
                    return "success";
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

    function vrTerimaLS($id_kendali, $status_kendali, $vr_catatan, $spp_bp, $spp_bpp, $spp_ringkasan, $spp_rincian, $nt_pengajuan, $ls_spk, $ls_bapp, $ls_bukti_transfer, $ls_referensi_bank, $ls_ebilling_pajak, $ls_faktur_pajak, $um_rincian, $um_jaminan, $jm_pelaksana_pekerjaan, $jm_sosial_ketenagakerjaan, $tm_kemajuan_pekerjaan, $js_ba_serah_terima, $js_sr_permohonan_bayar, $bd_rekap_lalu, $bd_hadir_lalu, $bd_sr_tanggung_jawab, $bd_nominatif, $bd_nominatif_lalu, $bd_fc_spk, $bd_fc_sp){
        
        $sql = "
            UPDATE kendali_ls
            SET 
                `spp_bp` = '$spp_bp',
                `spp_bpp` = '$spp_bpp',
                `spp_ringkasan` = '$spp_ringkasan',
                `spp_rincian` = '$spp_rincian',
                `nt_pengajuan` = '$nt_pengajuan',
                `ls_spk` = '$ls_spk',
                `ls_bapp` = '$ls_bapp',
                `ls_bukti_transfer` = '$ls_bukti_transfer',
                `ls_referensi_bank` = '$ls_referensi_bank',
                `ls_ebilling_pajak` = '$ls_ebilling_pajak',
                `ls_faktur_pajak` = '$ls_faktur_pajak',
                `um_rincian` = '$um_rincian',
                `um_jaminan` = '$um_jaminan',
                `jm_pelaksana_pekerjaan` = '$jm_pelaksana_pekerjaan',
                `jm_sosial_ketenagakerjaan` = '$jm_sosial_ketenagakerjaan',
                `tm_kemajuan_pekerjaan` = '$tm_kemajuan_pekerjaan',
                `js_ba_serah_terima` = '$js_ba_serah_terima',
                `js_sr_permohonan_bayar` = '$js_sr_permohonan_bayar',
                `bd_rekap_lalu` = '$bd_rekap_lalu',
                `bd_hadir_lalu` = '$bd_hadir_lalu',
                `bd_sr_tanggung_jawab` = '$bd_sr_tanggung_jawab',
                `bd_nominatif` = '$bd_nominatif',
                `bd_nominatif_lalu` = '$bd_nominatif_lalu',
                `bd_fc_spk` = '$bd_fc_spk',
                `bd_fc_sp` = '$bd_fc_sp'
            WHERE
                `id_kendali = '$id_kendali'
        ";

        $query = $this->db->simple_query($sql);
        if($query){
            $sql = "
                UPDATE kendali_periksa
                SET
                    `vr_catatan` = '$vr_catatan',
                    `vr_tgl_periksa` = CURDATE()
                WHERE
                    `id_kendali = '$id_kendali'
            ";
            $query = $this->db->simple_query($sql);
            if($query){
                $sql = "
                    UPDATE kendali_utama
                    SET
                        `status_kendali` = '$status_kendali'
                    WHERE
                        `id_kendali = '$id_kendali'
                ";
                $query = $this->db->simple_query($sql);
                if($query){
                    return "success";
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
}

?>