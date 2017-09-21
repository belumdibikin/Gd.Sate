-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 11:47 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gd_sate`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `kode_bidang` char(10) NOT NULL,
  `nama_bidang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BA', 'BIDANG ANGGARAN');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BAP', 'BIDANG AKUNTANSI DAN PELAPORAN');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BLPBJ', 'BALAI PENGADAAN BARANG JASA');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BLPEA', 'BALAI PELAYANAN EVALUASI APBD KAB/KOTA');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BLPPA', 'BALAI PELAYANAN DAN PEMANFAATAN ASET');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BP', 'BIDANG PERBENDAHARAAN');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('BPBMD', 'BIDANG PENGELOLAAN BARANG MILIK DAERAH');
INSERT INTO `bidang` (`kode_bidang`, `nama_bidang`) VALUES('SKT', 'SEKRETARIAT');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `kode_jenis` char(5) NOT NULL,
  `detail_jenis` varchar(255) DEFAULT NULL,
  `head_jenis` char(5) NOT NULL DEFAULT '-',
  `tabel_jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('BD', 'Bendahara', 'LS', 'kendali_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('BJ', 'Barang Jasa', 'LS', 'kendali_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('GUP', 'Ganti Uang Persediaan', '-', 'kendali_non_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('LS', 'Belanja Langsung', '-', 'kendali_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('TM', 'Termin', 'LS', 'kendali_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('TUP', 'Tambah Uang Persediaan', '-', 'kendali_non_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('UM', 'Uang Muka', 'LS', 'kendali_ls');
INSERT INTO `jenis` (`kode_jenis`, `detail_jenis`, `head_jenis`, `tabel_jenis`) VALUES('UP', 'Uang Persediaan', '-', 'kendali_non_ls');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kode_kegiatan` char(50) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `kode_bidang` char(10) NOT NULL,
  `pj_pembuat_komitmen` int(11) DEFAULT NULL,
  `pj_pelaksana_teknis_kegiatan` int(11) DEFAULT NULL,
  `bd_pengeluaran_pembantu` int(11) DEFAULT NULL,
  `bd_pengeluaran_bpkad` int(11) DEFAULT NULL,
  `pj_pengelola_keuangan_skpd` int(11) DEFAULT NULL,
  `pg_anggaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.01', 'Penyusunan APBD Proovinsi Jawa Barat', 'BA', 17, 22, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.02', 'Penyusunan Perubahan APBD Provinsi Jawa Barat', 'BA', 17, 22, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.03', 'Sosialisasi Peraturan Mengenai Pengelolaan Keuangan Daerah', 'BA', 17, 24, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.04', 'Penyusunan Peraturan Mengenai Pengelolaan Keuangan Daerah', 'BA', 17, 24, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.05', 'Sinkronisasi dan Konfirmasi Pendapatan Daerah', 'BA', 17, 23, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.06', 'Penganggaran Gaji dan Tunjangan', 'BA', 17, 23, 16, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.07', 'Pembinaan dan Bimbingan Teknis Penatausahaan Keuangan Daerah', 'BP', 30, 38, 25, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.08', 'Penatausahaan Gaji dan Tunjangan', 'BP', 30, 21, 25, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.09', 'Penyelesaian Penyaluran Dana SP2D dan Retur', 'BP', 30, 6, 25, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.10', 'Bimbingan Teknis Akuntansi dan Pelaporan Keuangan Daerah', 'BAP', 39, 36, 8, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.12', 'Rekonsiliasi Pendapatan Sektor Pajak Daerah', 'BAP', 39, 14, 8, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.13', 'Penyusunan Laporan Pertanggungjawaban Pelaksanaan APBD Pemerintah Daerah Provinsi Jawa Barat Tahun Anggaran 2016', 'BAP', 39, 7, 8, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.14', 'Pembinaan Penyimpanan dan Ditribusi Barang Daerah', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.15', 'Pengamanan Fisik Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat', 'BPBMD', 19, 31, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.16', 'Pengembangan Sistem Pengelolaan Keuangan dan Aset Daerah', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.17', 'Penilaian/Appraisal untuk Penghapusan dan Pemindahtanganan Barang Milik Daerah Provinsi Jawa Barat', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.18', 'Inventarisasi Barang Milik Daerah', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.19', 'Identifikasi Kebutuhan Barang Milik daerah', 'BPBMD', 19, 31, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.20', 'Penyusunan Standar Harga Barang', 'BPBMD', 19, 31, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.21', 'Pengamanan Administrasi Aset Tanah dan Bangunan Milik Pemerintah', 'BPBMD', 19, 31, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.22', 'Verifikasi Usulan Penghapusan dan Pemindahtanganan Barang Milik Daerah Provinsi Jawa Barat', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.23', 'Evaluasi Rancangan Perda Kabupaten/Kota tentang Pertanggungjawaban Pelaksanaan APBD dan Rancangan Peraturan Bupati/Wali Kota tentang Penjabaran Pertanggungjawaban Pelaksanaan APBD', 'BLPEA', 10, 37, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.24', 'Evaluasi Rancangan Perda Kabupaten/Kota tentang Perubahan APBD dan Rancangan Peraturan Bupati/ Wali Kota tentang Penjabaran Perubahan APBD', 'BLPEA', 10, 29, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.25', 'Evaluasi Rancangan Perda Kabupaten/Kota tentang APBD dan Rancangan Peraturan Bupati/Wali Kota tentang Penjabaran APBD', 'BLPEA', 10, 29, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.26', 'Sinergitas dan Pembinaan Pengelolaan Keuangan Daerah Kabupaten/Kota', 'BLPEA', 10, 37, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.27', 'Penyelarasan Data APBD Perubahan APBD dan Pertanggungjawaban Pelaksanaan APBD Kabupaten/ Kota se Jawa barat', 'BLPEA', 10, 41, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.28', 'Monitoring dan Evaluasi Pemanfaatan Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat', 'BLPPA', 40, 3, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('100.29', 'Pengelolaan Pemanfaatan Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat', 'BLPPA', 40, 3, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('101.01', 'Penyusunan Rencana Kerja Anggaran BPKAD', 'SKT', 30, 28, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('101.02', 'Pameran Laporan Keterangan Pertanggungjawaban (LKPJ)', 'SKT', 30, 28, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('101.03', 'Penyusunan Laporan Keuangan Bulanan Semesteran dan Akhir Tahun', 'SKT', 30, 33, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('101.04', 'Penyusunan Dokumen Perencanaan Badan Pengelolaan Keuangan dan Aset daerah', 'SKT', 30, 28, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.01', 'Peningkatan dan Pengembangan Wawasan SDM Badan Pengelolaan Keuangan dan Aset Daerah', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.02', 'Peningkatan Kapasitas Pengelola Pemindahtanganan Pemusnahan dan Penghapusan', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.03', 'Peningkatan Kapasitas Pengelola Inventarisasi Barang Milik Daerah', 'BPBMD', 31, 26, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.04', 'Sosialisasi Perencanaan Kebutuhan Barang', 'BPBMD', 19, 4, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.05', 'Sosialisasi Standar Harga Barang Tahun 2018', 'BPBMD', 19, 4, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('102.06', 'Pemeliharaan Komplek Olahraga Cisangkan', 'BPBMD', 19, 4, 2, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('103.01', 'Pengadaan Pakaian Badan Pengelolaan Keuangan dan Aset Daerah', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('109.01', 'Pemeliharaan Peralatan dan Perlengkapan kantor BPKAD', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('109.03', 'Pemeliharaan Sarana dan Prasarana Kantor UPTB Unit Layanan Pengadaan Barang dan Jasa', 'BLPBJ', 13, 12, 18, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('109.04', 'Pemeliharaan Sarana dan Prasarana UPTB Pemanfaatan Aset', 'BLPPA', 40, 30, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('109.05', 'Pengelolaan Asrama Jawa Barat di Jogjakarta', 'BLPPA', 40, 20, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('109.07', 'Pemeliharaan Pondok Seni Pangandaran', 'BLPPA', 40, 20, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.01', 'Penyusunan DED Pembangunan Gedung Badan Pengelolaan Keuangan dan Aset Daerah', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.02', 'Pengadaan Komputer Printer Jaringan dan Acesoris Lainnya BPKAD', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.04', 'Pengadaan Peralatan dan Kelengkapan Kantor BPKAD', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.05', 'Pengadaan Meubelair BPKAD', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.06', 'Pengadaan Kendaraan Dinas/Operasional Provinsi Jawa Barat', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.07', 'Peningkatan Sarana dan Prasarana UPTB Pengadaan Barang dan Jasa', 'BLPBJ', 13, 12, 18, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('110.08', 'Peningkatan Sarana dan Prasarana UPTB Pemanfaatan Aset', 'BLPPA', 40, 5, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.01', 'Penyediaan Jasa Kantor Badan Pengelolaan Keuangan dan Aset Daerah', 'SKT', 30, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.02', 'Penyediaan Belanja Cetak dan Penjilidan', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.03', 'Penyediaan Makanan dan Minuman', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.04', 'Penyediaan Belanja Perjalanan Dinas', 'SKT', 39, 15, 1, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.05', 'Rapat-Rapat Koordinasi dan Konsultasi Balai Pelayanan Evaluasi APBD Kabupaten/Kota', 'BLPEA', 10, 41, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.07', 'Penyediaan Makanan dan Minuman Balai Pelayanan Evaluasi APBD Kabupaten/Kota', 'BLPEA', 10, 41, 32, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.08', 'Penyediaan Jasa Kantor UPTB Pengadaan Barang dan Jasa', 'BLPBJ', 13, 12, 18, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.09', 'Penyediaan Makan dan Minum UPTB Pengadaan Barang dan Jasa', 'BLPBJ', 13, 12, 18, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.10', 'Perjalanan Dinas UPTB Pengadaan Barang dan Jasa', 'BLPBJ', 13, 12, 18, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.11', 'Penyediaan Jasa Kantor UPTB Pemanfaatan Aset', 'BLPPA', 40, 30, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.12', 'Penyediaan Perjalanan Dinas UPTB Pemanfaatan Aset', 'BLPPA', 40, 30, 34, 9, 27, 11);
INSERT INTO `kegiatan` (`kode_kegiatan`, `nama_kegiatan`, `kode_bidang`, `pj_pembuat_komitmen`, `pj_pelaksana_teknis_kegiatan`, `bd_pengeluaran_pembantu`, `bd_pengeluaran_bpkad`, `pj_pengelola_keuangan_skpd`, `pg_anggaran`) VALUES('111.13', 'Penyediaan Makan dan Minum UPTB Pemanfaatan Aset', 'BLPPA', 40, 30, 34, 9, 27, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kendali_ls`
--

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
  `bd_fc_sp` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendali_non_ls`
--

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
  `tu_rencana_guna` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendali_periksa`
--

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
  `ppk_tgl_setuju` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendali_utama`
--

CREATE TABLE `kendali_utama` (
  `id_kendali` int(11) NOT NULL,
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
  `kode_jenis` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` char(18) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(1, '197009202009011002', 'Ade Abdul Fatah, SP.', 'Pengatur Muda Tk.I/II.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(2, '197507212007011011', 'Asep Setiawan', 'Penata Muda/III.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(3, '197306032008011005', 'Bambang Purwoyono, ST, MT', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(4, '197411302005011006', 'Budi Kadaris Rudianto, SH, M.Si', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(5, '196108211999031005', 'Dadang K. S.Pd, S.Sos, MM', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(6, '196408071999032001', 'Dianty Lovera, SE, Ak', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(7, '197601042006041002', 'Dindin Mahfudin, SE.Ak. Mak', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(8, '196807141990021001', 'Dodo Aripien,S.IP', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(9, '196706272007011006', 'Dr. H. Emed Taryaman, SE., MM.', 'Penata Muda/III.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(10, '196804041988032014', 'Dra. Hj. I Gusti Agung Kim F.W. Oka., M.Si', 'Pembina/IV.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(11, '195910071985032005', 'Dra. Hj. Nurdialis M., M.Si.', 'Pembina Utama Muda/IV.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(12, '196607151986031011', 'Drs. Sonson Garnason, M.Si', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(13, '196506221994031006', 'Drs. Uuh Suparman, M.Si', 'Pembina Tk.I/IV.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(14, '197707282005011006', 'Empep Hendra Permana, SE.Ak', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(15, '197509022008012003', 'Ervita Siti Hidayah, S.Ip', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(16, '197610142008011003', 'Gun Gun Nugraha, SE', 'Pengatur/II.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(17, '196703061995031001', 'H. Ucup Yusup, S.Sos. M.Si.', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(18, '197008142007011012', 'Hari Djohari, SE', 'Penata Muda/III.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(19, '196405241985031001', 'Hazairin Danial, SE, Ak, MM', 'Pembina/IV.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(20, '196108211986031004', 'Kelly Suyantoro, SH. MM', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(21, '197111011999021001', 'Koman, SE, MM', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(22, '198611062004122002', 'Maulida Rahmawati, S.STP, MM', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(23, '196208161986032010', 'Momi Gustiar, S.Sos., MM.', 'Pembina/IV.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(24, '197512272009011004', 'Muhammad Taufiq Hidayat, SP, MM', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(25, '197708182014121001', 'Mulia Agus', 'Pengatur Muda/II.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(26, '198306232006042011', 'Novi Rahyanti, SE', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(27, '196304081986032007', 'Nurcahyani, SE.', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(28, '197302142008012003', 'Ridwan Indrakusuma, S.Sos, MM', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(29, '197709192006012013', 'Rosa Rosana, SE', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(30, '197805272006041003', 'Rudi Molandi T, S.Si, MT', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(31, '196105211984021002', 'Rukmana, SE', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(32, '198708072010012010', 'Sari Agnestiani, A.Md', 'Pengatur Tk.I/II.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(33, '198209042009011001', 'Setiady, S.ST', 'Penata Muda/III.a');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(34, '198309032009012001', 'Sinta Dewi Utami', 'Pengatur Muda Tk.I/II.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(36, '198103272006042011', 'Siti Syamsinur SE, Ak, M.Ak, CA', 'Penata Muda Tk.I/III.b');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(37, '198212282002121002', 'Suhendar S.STP, MH', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(38, '196010121986031017', 'Tatang Sutarya, SE, MM', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(39, '197605031998031003', 'Upar Suparno, S.IP, M.AP', 'Penata/III.c');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(40, '197307311998031003', 'Yadi Cahyadi, S.Sos., M.Si', 'Penata Tk.I/III.d');
INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `golongan`) VALUES(41, '198006111998101002', 'Yosep Mochamad Zuanda, S.STP, M.Si', 'Penata/III.c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `level` char(10) DEFAULT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(1, 1, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(2, 2, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(3, 3, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(4, 4, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(5, 5, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(6, 6, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(7, 7, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(8, 8, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(9, 9, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(10, 10, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(11, 11, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(12, 12, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(13, 13, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(14, 14, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(15, 15, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(16, 16, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(17, 17, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(18, 18, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(19, 19, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(20, 20, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(21, 21, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(22, 22, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(23, 23, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(24, 24, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(25, 25, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(26, 26, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(27, 27, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(28, 28, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(29, 29, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(30, 30, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(31, 31, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(32, 32, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(33, 33, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(34, 34, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(35, 35, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(36, 36, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(37, 37, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(38, 38, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(39, 39, '4', '047aeeb234644b9e2d4138ed3bc7976a');
INSERT INTO `user` (`id_user`, `id_pegawai`, `level`, `password`) VALUES(40, 40, '4', '047aeeb234644b9e2d4138ed3bc7976a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`kode_bidang`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kode_kegiatan`),
  ADD KEY `kode_bidang` (`kode_bidang`),
  ADD KEY `pj_pembuat_komitmen` (`pj_pembuat_komitmen`),
  ADD KEY `pj_pelaksana_teknis_kegiatan` (`pj_pelaksana_teknis_kegiatan`),
  ADD KEY `bd_pengeluaran_pembantu` (`bd_pengeluaran_pembantu`),
  ADD KEY `bd_pengeluaran_bpkad` (`bd_pengeluaran_bpkad`),
  ADD KEY `pj_pengelola_keuangan_skpd` (`pj_pengelola_keuangan_skpd`),
  ADD KEY `pg_anggaran` (`pg_anggaran`);

--
-- Indexes for table `kendali_ls`
--
ALTER TABLE `kendali_ls`
  ADD PRIMARY KEY (`id_kendali`);

--
-- Indexes for table `kendali_non_ls`
--
ALTER TABLE `kendali_non_ls`
  ADD PRIMARY KEY (`id_kendali`);

--
-- Indexes for table `kendali_periksa`
--
ALTER TABLE `kendali_periksa`
  ADD PRIMARY KEY (`id_kendali`),
  ADD KEY `id_verifikatur` (`id_verifikatur`),
  ADD KEY `id_ppk` (`id_ppk`);

--
-- Indexes for table `kendali_utama`
--
ALTER TABLE `kendali_utama`
  ADD PRIMARY KEY (`id_kendali`),
  ADD KEY `kode_jenis` (`kode_jenis`),
  ADD KEY `kode_bidang` (`kode_bidang`),
  ADD KEY `kode_kegiatan` (`kode_kegiatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendali_utama`
--
ALTER TABLE `kendali_utama`
  MODIFY `id_kendali` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kode_bidang`) REFERENCES `bidang` (`kode_bidang`),
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`pj_pembuat_komitmen`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kegiatan_ibfk_3` FOREIGN KEY (`pj_pelaksana_teknis_kegiatan`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kegiatan_ibfk_4` FOREIGN KEY (`bd_pengeluaran_pembantu`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kegiatan_ibfk_5` FOREIGN KEY (`bd_pengeluaran_bpkad`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kegiatan_ibfk_6` FOREIGN KEY (`pj_pengelola_keuangan_skpd`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kegiatan_ibfk_7` FOREIGN KEY (`pg_anggaran`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `kendali_ls`
--
ALTER TABLE `kendali_ls`
  ADD CONSTRAINT `kendali_ls_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`);

--
-- Constraints for table `kendali_non_ls`
--
ALTER TABLE `kendali_non_ls`
  ADD CONSTRAINT `kendali_non_ls_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`);

--
-- Constraints for table `kendali_periksa`
--
ALTER TABLE `kendali_periksa`
  ADD CONSTRAINT `kendali_periksa_ibfk_1` FOREIGN KEY (`id_kendali`) REFERENCES `kendali_utama` (`id_kendali`),
  ADD CONSTRAINT `kendali_periksa_ibfk_2` FOREIGN KEY (`id_verifikatur`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `kendali_periksa_ibfk_3` FOREIGN KEY (`id_ppk`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `kendali_utama`
--
ALTER TABLE `kendali_utama`
  ADD CONSTRAINT `kendali_utama_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`),
  ADD CONSTRAINT `kendali_utama_ibfk_2` FOREIGN KEY (`kode_bidang`) REFERENCES `bidang` (`kode_bidang`),
  ADD CONSTRAINT `kendali_utama_ibfk_3` FOREIGN KEY (`kode_kegiatan`) REFERENCES `kegiatan` (`kode_kegiatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
