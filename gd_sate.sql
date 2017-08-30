-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 03:50 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `kode_kegiatan` varchar(15) NOT NULL,
  `nama_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kode_kegiatan`, `nama_kegiatan`) VALUES
(1, '100.01', '\r\nKegiatan Penyusunan APBD Provinsi Jawa Barat\r\n'),
(2, '100.02', 'Kegiatan Penyusunan Perubahan APBD Provinsi Jawa Barat\r\n'),
(3, '100.03', 'Kegiatan Sosialisasi Peraturan Mengenai Pengelolaan Keuangan Daerah\r\n'),
(4, '100.04', 'Kegiatan Penyusunan Peraturan Mengenai Pengelolaan Keuangan Daerah\r\n'),
(5, '100.05', 'Kegiatan Sinkronisasi dan Konfirmasi Pendapatan Daerah\r\n'),
(6, '100.06', 'Kegiatan Penganggaran Gaji dan Tunjangan\r\n'),
(7, '100.07', 'Kegiatan Pembinaan dan Bimbingan Teknis Penatausahaan Keuangan Daerah\r\n '),
(8, '100.08', 'Kegiatan Penatausahaan Gaji dan Tunjangan\r\n'),
(9, '100.09', 'Kegiatan Penyelesaian Penyaluran Dana SP2D dan Retur\r\n'),
(10, '100.10', 'Bimbingan Teknis Akuntansi Dan Pelaporan Keuangan Daerah\r\n'),
(11, '100.12', 'Kegiatan Rekonsiliasi Pendapatan Sektor Pajak Daerah\r\n'),
(12, '100.13', 'Kegiatan Penyusunan Laporan Pertanggungjawaban Pelaksanaan APBD Pemerintah Daerah Provinsi Jawa Barat Tahun Anggaran 2016\r\n'),
(13, '100.14', 'Kegiatan Pembinaan Penyimpanan dan Distribusi Barang Daerah\r\n'),
(14, '100.15', 'Kegiatan Pengamanan Fisik Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat\r\n'),
(15, '100.16', 'Kegiatan Pengembangan Sistem Pengelolaan Keuangan dan aset Daerah\r\n'),
(16, '100.17', 'Kegiatan Penilaian/Appraisal untuk Penghapusan dan Pemindahtanganan Barang Milik Daerah Provinsi Jawa Barat\r\n'),
(17, '100.18', 'Kegiatan Inventarisasi Barang Milik Daerah\r\n'),
(18, '100.19', 'Kegiatan Identifikasi Kebutuhan Barang Milik Daerah\r\n'),
(19, '100.20', 'Kegiatan Penyusunan Standar Harga Barang\r\n'),
(20, '100.21', 'Kegiatan Pengamanan Administrasi Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat\r\n'),
(21, '100.22', 'Kegiatan Verifikasi Usulan Penghapusan dan Pemindahtanganan Barang Milik Daerah Provinsi Jawa Barat\r\n'),
(22, '100.23', 'Kegiatan Evaluasi Rancangan Perda Kabupaten/Kota tentang Pertanggungjawaban Pelaksanaan APBD dan Rancangan Peraturan Bupati/Wali Kota tentang Penjabaran Pertanggungjawaban Pelaksanaan APBD\r\n'),
(23, '100.24', 'Kegiatan Evaluasi Rancangan Perda Kabupaten/Kota tentang Perubahan APBD dan Rancangan Peraturan Bupati/Wali Kota tentang Penjabaran Perubahan APBD\r\n'),
(24, '100.25', 'Kegiatan Evaluasi Rancangan Perda Kabupaten/Kota tentang APBD dan Rancangan Peraturan Bupati/Wali Kota tentang Penjabaran APBD\r\n'),
(25, '100.26', 'Kegiatan Sinergitas dan Pembinaan Pengelolaan Keuangan Daerah Kabupaten/Kota\r\n'),
(26, '100.27', 'Kegiatan Penyelarasan Data APBD, Perubahan APBD dan Pertanggungjawaban Pelaksanaan APBD Kabupaten/Kota se Jawa Barat\r\n'),
(27, '100.28', 'Monitoring dan Evaluasi Pemanfaatan Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat\r\n'),
(28, '100.29', 'Kegiatan Pengelolaan Pemanfaatan Aset Tanah dan Bangunan Milik Pemerintah Provinsi Jawa Barat\r\n'),
(29, '101.01', 'Kegiatan Penyusunan Rencana Kerja Anggaran BPKAD\r\n'),
(30, '101.02', 'Kegiatan Pameran Laporan Keterangan Pertanggungjawaban (LKPJ)\r\n'),
(31, '101.03', 'Kegiatan Penyusunan Laporan Keuangan Bulanan, Semesteran dan Akhir Tahun\r\n'),
(32, '101.04', 'Kegiatan Penyusunan Dokumen Perencanaan Badan Pengelolaan Keuangan dan Aset Daerah\r\n'),
(33, '102.01', 'Kegiatan Peningkatan dan Pengembangan Wawasan SDM Badan Pengelolaan Keuangan dan Aset Daerah\r\n'),
(34, '102.02', 'Kegiatan Peningkatan Kapasitas Pengelola Pemindahtanganan, Pemusnahan dan Penghapusan\r\n'),
(35, '102.03', 'Kegiatan Peningkatan Kapasitas Pengelola Inventarisasi Barang Milik Daerah\r\n'),
(36, '102.04', 'Kegiatan Sosialisasi Perencanaan Kebutuhan Barang\r\n'),
(37, '102.05', 'Kegiatan Sosialisasi Standar Harga Barang Tahun 2018\r\n'),
(38, '103.01', 'Kegiatan Pengadaan Pakaian Badan Pengelolaan Keuangan dan Aset Daerah \r\n'),
(39, '109.01', 'Kegiatan Pemeliharaan Peralatan dan Perlengkapan Kantor BPKAD\r\n'),
(40, '109.03', 'Kegiatan Pemeliharaan Komplek Olahraga Cisangkan\r\n'),
(41, '109.04', 'Kegiatan Pemeliharaan Sarana dan Prasarana Kantor UPTB Unit Layanan Pengadaan Barang dan Jasa\r\n'),
(42, '109.05', 'Kegiatan Pemeliharaan Sarana dan Prasarana UPTB Pemanfaatan Aset\r\n'),
(43, '109.06', 'Kegiatan Pengelolaan Asrama Jawa Barat di Jogjakarta\r\n'),
(44, '109.07', 'Kegiatan Pemeliharaan Pondok Seni Pangandaran\r\n'),
(45, '110.01', 'Kegiatan Penyusunan DED Pembangunan Gedung Badan Pengelolaan Keuangan dan Aset Daerah\r\n'),
(46, '110.02', 'Kegiatan Pengadaan Komputer, Printer, Jaringan dan Acesoris Lainnya BPKAD\r\n'),
(47, '110.04', 'Kegiatan Pengadaan Peralatan dan Kelengkapan Kantor BPKAD\r\n'),
(48, '110.05', 'Kegiatan Pengadaan Maubelair BPKAD\r\n'),
(49, '110.06', 'Kegiatan Pengadaan Kendaraan Dinas/Operasional Provinsi Jawa Barat \r\n'),
(50, '110.07', 'Kegiatan Peningkatan Sarana dan Prasarana UPTB Pengadaan Barang dan Jasa\r\n'),
(51, '110.08', 'Kegiatan Peningkatan Sarana dan Prasarana UPTB Pemanfaatan Aset\r\n'),
(52, '111.01', 'Kegiatan Penyediaan Jasa Kantor Badan Pengelolaan Keuangan dan Aset Daerah\r\n'),
(53, '111.02', 'Kegiatan Penyediaan Belanja Cetak dan Penjilidan\r\n'),
(54, '111.03', 'Kegiatan Penyediaan Makanan dan Minuman\r\n'),
(55, '111.04', 'Kegiatan Penyediaan Belanja Perjalanan Dinas\r\n'),
(56, '111.05', 'Kegiatan Rapat-rapat Koordinasi dan Konsultasi Balai Pelayanan Evaluasi APBD Kabupaten/Kota\r\n'),
(57, '111.07', 'Kegiatan Penyediaan Makanan dan Minuman Balai Pelayanan Evaluasi APBD Kabupaten/Kota\r\n'),
(58, '111.08', 'Kegiatan Penyediaan Jasa Kantor UPTB Pengadaan Barang dan Jasa\r\n'),
(59, '111.09', 'Kegiatan Penyediaan Makan dan Minum UPTB Pengadaan Barang & Jasa\r\n'),
(60, '111.10', 'Kegiatan Perjalanan Dinas UPTB Pengadaan Barang & Jasa\r\n'),
(61, '111.11', 'Kegiatan Penyediaan Jasa Kantor UPTB Pemanfaatan Aset\r\n'),
(62, '111.12', 'Kegiatan Penyediaan Perjalanan Dinas UPTB Pemanfaatan Aset\r\n'),
(63, '111.13', 'Kegiatan Penyediaan Makan dan Minum UPTB Pemanfaatan Aset\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `verifikatur`
--

CREATE TABLE `verifikatur` (
  `id_verifikatur` int(11) NOT NULL,
  `nama_verifikatur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikatur`
--

INSERT INTO `verifikatur` (`id_verifikatur`, `nama_verifikatur`) VALUES
(1, 'Noviyanti, SE., MM.'),
(2, 'Setiady, S.ST.'),
(3, 'Triyani, SE.'),
(4, 'Hendra Hermawan, SE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `verifikatur`
--
ALTER TABLE `verifikatur`
  ADD PRIMARY KEY (`id_verifikatur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `verifikatur`
--
ALTER TABLE `verifikatur`
  MODIFY `id_verifikatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
