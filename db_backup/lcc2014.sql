-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 05:28 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcc2014`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_sekolah` int(5) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon_sekolah` varchar(20) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama1` varchar(30) NOT NULL,
  `kelas1` varchar(3) NOT NULL,
  `telepon1` varchar(20) NOT NULL,
  `nama2` varchar(30) NOT NULL,
  `kelas2` varchar(3) NOT NULL,
  `telepon2` varchar(20) NOT NULL,
  `nama3` varchar(30) NOT NULL,
  `kelas3` varchar(3) NOT NULL,
  `telepon3` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_daftar` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_sekolah`, `nama_sekolah`, `email`, `telepon_sekolah`, `alamat_sekolah`, `nama1`, `kelas1`, `telepon1`, `nama2`, `kelas2`, `telepon2`, `nama3`, `kelas3`, `telepon3`, `pesan`, `tanggal_daftar`) VALUES
(1, 'SMK Negeri 2 Terbanggi Besar', 'smkn2@gmail.com', '072556678', 'Terbanggi Besar', 'Albert Septiawan', '12', '089631446027', 'Diana', '10', '0877988288290', 'Leily ', '11', '089967272882', 'Ditunggu LCC super meriahnya :D', '25 November 2014'),
(2, '99999', '99999', '99999', '99999', '99999', '999', '99999', '99999', '999', '99999', '99999', '999', '99999', '99999', '99999'),
(3, '23232323', 'a@gmailc.com', '121212', '12121212', '2323', '323', '3232', '32323', '323', '32323', '32323', '232', '232323', 'but -_-', '13 Oct 2014'),
(4, 'Universitas Muhammadiyah Surakarta', 'axquiredsaint24@gmail.com', '0897726161818', 'Jln. Prokla', 'Triana Dewi Salma', '12', '0897726161818', 'Albert Septiawan', '11', '0897726161818', 'Rifqi Fauzi R', '10', '0897726161818', 'weee :p', '13 Oct 2014'),
(5, 'SMK N 2 TB', 'seolah@yahoo.com', '080182012', 'Terbanggi Besar', 'Albert Septiawan', '8', '09109898', 'Aji tom', '9', '08238203802', 'Andi L', '8', '019091029012', 'Blah :D', '13 Jun 2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_sekolah` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
