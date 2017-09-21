-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gd_sate
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bidang`
--

DROP TABLE IF EXISTS `bidang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidang` (
  `kode_bidang` char(10) NOT NULL,
  `nama_bidang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kode_bidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidang`
--

LOCK TABLES `bidang` WRITE;
/*!40000 ALTER TABLE `bidang` DISABLE KEYS */;
/*!40000 ALTER TABLE `bidang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis` (
  `kode_jenis` char(5) NOT NULL,
  `detail_jenis` varchar(255) DEFAULT NULL,
  `head_jenis` char(5) NOT NULL DEFAULT '-',
  `tabel_jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis`
--

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan` (
  `kode_kegiatan` char(50) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `kode_bidang` char(10) NOT NULL,
  `pj_pembuat_komitmen` int(11) DEFAULT NULL,
  `pj_pelaksana_teknis_kegiatan` int(11) DEFAULT NULL,
  `bd_pengeluaran_pembantu` int(11) DEFAULT NULL,
  `bd_pengeluaran_bpkad` int(11) DEFAULT NULL,
  `pj_pengelola_keuangan_skpd` int(11) DEFAULT NULL,
  `pg_anggaran` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_kegiatan`),
  KEY `kode_bidang` (`kode_bidang`),
  KEY `pj_pembuat_komitmen` (`pj_pembuat_komitmen`),
  KEY `pj_pelaksana_teknis_kegiatan` (`pj_pelaksana_teknis_kegiatan`),
  KEY `bd_pengeluaran_pembantu` (`bd_pengeluaran_pembantu`),
  KEY `bd_pengeluaran_bpkad` (`bd_pengeluaran_bpkad`),
  KEY `pj_pengelola_keuangan_skpd` (`pj_pengelola_keuangan_skpd`),
  KEY `pg_anggaran` (`pg_anggaran`),
  CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kode_bidang`) REFERENCES `bidang` (`kode_bidang`),
  CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`pj_pembuat_komitmen`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_ibfk_3` FOREIGN KEY (`pj_pelaksana_teknis_kegiatan`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_ibfk_4` FOREIGN KEY (`bd_pengeluaran_pembantu`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_ibfk_5` FOREIGN KEY (`bd_pengeluaran_bpkad`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_ibfk_6` FOREIGN KEY (`pj_pengelola_keuangan_skpd`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kegiatan_ibfk_7` FOREIGN KEY (`pg_anggaran`) REFERENCES `pegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan`
--

LOCK TABLES `kegiatan` WRITE;
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kendali_ls`
--

DROP TABLE IF EXISTS `kendali_ls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kendali_ls` (
  `id_kendali` int(11) NOT NULL,
  `spp_bp` tinyint(1) DEFAULT NULL,
  `spp_bpp` tinyint(1) DEFAULT NULL,
  `spp_ringkasan` tinyint(1) DEFAULT NULL,
  `spp_rincian` tinyint(1) DEFAULT NULL,
  `nt_pengajuan` tinyint(1) DEFAULT NULL,
  `ls_spk` tinyint(1) DEFAULT NULL,
  `ls_bapp` tinyint(1) DEFAULT NULL,
  `ls_bukti_transfer` tinyint(1) DEFAULT NULL,
  `ls_referensi_bank` tinyint(1) DEFAULT NULL,
  `ls_ebilling_pajak` tinyint(1) DEFAULT NULL,
  `ls_faktur_pajak` tinyint(1) DEFAULT NULL,
  `um_rincian` tinyint(1) DEFAULT NULL,
  `um_jaminan` tinyint(1) DEFAULT NULL,
  `jm_pelaksana_pekerjaan` tinyint(1) DEFAULT NULL,
  `jm_sosial_ketenagakerjaan` tinyint(1) DEFAULT NULL,
  `tm_kemajuan_pekerjaan` tinyint(1) DEFAULT NULL,
  `js_ba_serah_terima` tinyint(1) DEFAULT NULL,
  `js_sr_permohonan_bayar` tinyint(1) DEFAULT NULL,
  `bd_rekap_lalu` tinyint(1) DEFAULT NULL,
  `bd_hadir_lalu` tinyint(1) DEFAULT NULL,
  `bd_sr_tanggung_jawab` tinyint(1) DEFAULT NULL,
  `bd_nominatif` tinyint(1) DEFAULT NULL,
  `bd_nominatif_lalu` tinyint(1) DEFAULT NULL,
  `bd_fc_spk` tinyint(1) DEFAULT NULL,
  `bd_fc_sp` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_kendali`),
  CONSTRAINT `kendali_ls_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendali_ls`
--

LOCK TABLES `kendali_ls` WRITE;
/*!40000 ALTER TABLE `kendali_ls` DISABLE KEYS */;
/*!40000 ALTER TABLE `kendali_ls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kendali_non_ls`
--

DROP TABLE IF EXISTS `kendali_non_ls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kendali_non_ls` (
  `id_kendali` int(11) NOT NULL,
  `spp_bp` tinyint(1) DEFAULT NULL,
  `spp_bpp` tinyint(1) DEFAULT NULL,
  `spp_ringkasan` tinyint(1) DEFAULT NULL,
  `spp_rincian` tinyint(1) DEFAULT NULL,
  `spp_nd_pengajuan` tinyint(1) DEFAULT NULL,
  `sr_pernyataan_pengajuan` tinyint(1) DEFAULT NULL,
  `up_dat_dpa` tinyint(1) DEFAULT NULL,
  `up_dat_spd_tri` tinyint(1) DEFAULT NULL,
  `up_anggaran_kas` tinyint(1) DEFAULT NULL,
  `up_rencana_pencairan` tinyint(1) DEFAULT NULL,
  `gu_sr_pengesahan_spj` tinyint(1) DEFAULT NULL,
  `gu_sr_pernyataan_belanja` tinyint(1) DEFAULT NULL,
  `tu_sr_setuju` tinyint(1) DEFAULT NULL,
  `tu_rencana_guna` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_kendali`),
  CONSTRAINT `kendali_non_ls_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendali_non_ls`
--

LOCK TABLES `kendali_non_ls` WRITE;
/*!40000 ALTER TABLE `kendali_non_ls` DISABLE KEYS */;
/*!40000 ALTER TABLE `kendali_non_ls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kendali_periksa`
--

DROP TABLE IF EXISTS `kendali_periksa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kendali_periksa` (
  `id_kendali` int(11) NOT NULL,
  `id_verifikatur` int(11) NOT NULL,
  `vr_catatan` text,
  `vr_kesimpulan` text,
  `vr_tgl_periksa` date DEFAULT NULL,
  `vr_tgl_kembali` date DEFAULT NULL,
  `vr_tgl_selesai` date DEFAULT NULL,
  `id_ppk` int(11) NOT NULL,
  `ppk_tgl_periksa` date DEFAULT NULL,
  `ppk_tgl_kembali` date DEFAULT NULL,
  `ppk_tgl_setuju` date DEFAULT NULL,
  PRIMARY KEY (`id_kendali`),
  KEY `id_verifikatur` (`id_verifikatur`),
  KEY `id_ppk` (`id_ppk`),
  CONSTRAINT `kendali_periksa_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`),
  CONSTRAINT `kendali_periksa_ibfk_2` FOREIGN KEY (`id_verifikatur`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `kendali_periksa_ibfk_3` FOREIGN KEY (`id_ppk`) REFERENCES `pegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendali_periksa`
--

LOCK TABLES `kendali_periksa` WRITE;
/*!40000 ALTER TABLE `kendali_periksa` DISABLE KEYS */;
/*!40000 ALTER TABLE `kendali_periksa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kendali_utama`
--

DROP TABLE IF EXISTS `kendali_utama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kendali_utama` (
  `id_kendali` int(11) NOT NULL AUTO_INCREMENT,
  `spp_nomor` varchar(255) DEFAULT NULL,
  `spp_tgl_terima` date DEFAULT NULL,
  `spp_nilai` double DEFAULT NULL,
  `kode_bidang` char(50) NOT NULL,
  `kode_kegiatan` char(50) NOT NULL,
  `nama_penyedia` varchar(255) DEFAULT NULL,
  `tgl_kendali_verifikasi` date DEFAULT NULL,
  `status_kendali` int(11) DEFAULT NULL,
  `terbit_tgl` date DEFAULT NULL,
  `terbit_nomor` varchar(255) DEFAULT NULL,
  `kode_jenis` char(5) NOT NULL,
  PRIMARY KEY (`id_kendali`),
  KEY `kode_jenis` (`kode_jenis`),
  KEY `kode_bidang` (`kode_bidang`),
  KEY `kode_kegiatan` (`kode_kegiatan`),
  CONSTRAINT `kendali_utama_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`),
  CONSTRAINT `kendali_utama_ibfk_2` FOREIGN KEY (`kode_bidang`) REFERENCES `bidang` (`kode_bidang`),
  CONSTRAINT `kendali_utama_ibfk_3` FOREIGN KEY (`kode_kegiatan`) REFERENCES `kegiatan` (`kode_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendali_utama`
--

LOCK TABLES `kendali_utama` WRITE;
/*!40000 ALTER TABLE `kendali_utama` DISABLE KEYS */;
/*!40000 ALTER TABLE `kendali_utama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(18) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `level` char(10) DEFAULT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-21 14:55:05
