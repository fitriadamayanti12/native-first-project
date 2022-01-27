-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 05:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpembayaran_lisrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelmeteran`
--

CREATE TABLE IF NOT EXISTS `tabelmeteran` (
  `id_meteran` varchar(15) NOT NULL,
  `tarif_daya` varchar(10) NOT NULL,
  `spln` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelmeteran`
--

INSERT INTO `tabelmeteran` (`id_meteran`, `tarif_daya`, `spln`) VALUES
('178900', '2200VA', 'D10.012-1:2015');

-- --------------------------------------------------------

--
-- Table structure for table `tabelpegawai`
--

CREATE TABLE IF NOT EXISTS `tabelpegawai` (
  `id_pegawai` varchar(15) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `tunjangan_jabatan` int(10) NOT NULL,
  `tunjangan_istri` int(10) NOT NULL,
  `tunjangan_transport` int(10) NOT NULL,
  `tunjangan_makan` int(10) NOT NULL,
  `gaji_kotor` int(15) NOT NULL,
  `pajak` int(10) NOT NULL,
  `gaji_bersih` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelpegawai`
--

INSERT INTO `tabelpegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `status`, `alamat`, `jabatan`, `tunjangan_jabatan`, `tunjangan_istri`, `tunjangan_transport`, `tunjangan_makan`, `gaji_kotor`, `pajak`, `gaji_bersih`) VALUES
('17199999001', 'Azizah', 'P', 'Menikah', 'Jln. Merak No.1', 'Admin 1', 5000000, 150000, 500000, 400000, 6050000, 605000, 5445000);

-- --------------------------------------------------------

--
-- Table structure for table `tabelpelanggan`
--

CREATE TABLE IF NOT EXISTS `tabelpelanggan` (
  `id_pelanggan` varchar(15) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelpelanggan`
--

INSERT INTO `tabelpelanggan` (`id_pelanggan`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `umur`, `pekerjaan`, `alamat`, `no_hp`) VALUES
('1908867432', 'Febri Afriani Putri', 'P', 'Depok', '1998-02-25', 18, 'Mahasiswa', 'Jln. Belanti Indah No.3', '081266176521'),
('1908867433', 'Anti Dewi', 'P', 'Danau Kembar', '1996-03-03', 20, 'Mahasiswa', 'Jln. Belanti Indah', '081266176547'),
('199189003451', 'Fitria Damayanti', 'P', 'Jambi', '1996-12-30', 20, 'Mahasiswa', 'Jl. Belanti Indah', '081266176543');

-- --------------------------------------------------------

--
-- Table structure for table `tabelpembayaran`
--

CREATE TABLE IF NOT EXISTS `tabelpembayaran` (
  `id_pelanggan` varchar(15) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_pegawai` varchar(15) NOT NULL,
  `id_meteran` varchar(10) NOT NULL,
  `beban_pemakaian` varchar(30) NOT NULL,
  `jumlah_pemakaian/kWh` int(10) NOT NULL,
  `biaya_pemakaian` int(10) NOT NULL,
  `jumlah_biaya` int(10) NOT NULL,
  `potongan_bank` int(10) NOT NULL,
  `total_bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelpembayaran`
--

INSERT INTO `tabelpembayaran` (`id_pelanggan`, `tgl_bayar`, `id_pegawai`, `id_meteran`, `beban_pemakaian`, `jumlah_pemakaian/kWh`, `biaya_pemakaian`, `jumlah_biaya`, `potongan_bank`, `total_bayar`) VALUES
('1908867431', '1998-03-03', '12345671', '340876325', 'AC', 17, 15000, 255000, 6375, 261375);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelmeteran`
--
ALTER TABLE `tabelmeteran`
  ADD PRIMARY KEY (`id_meteran`);

--
-- Indexes for table `tabelpegawai`
--
ALTER TABLE `tabelpegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tabelpelanggan`
--
ALTER TABLE `tabelpelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tabelpembayaran`
--
ALTER TABLE `tabelpembayaran`
  ADD PRIMARY KEY (`id_pelanggan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
