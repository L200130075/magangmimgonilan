-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 01:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mimgonilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `psw`) VALUES
('MIMGONILAN', 'mimgonilan');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` varchar(100) NOT NULL,
  `judul` varchar(220) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `image`) VALUES
('1', 'a', 'images/AKU.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jabatan`, `nip`, `jeniskelamin`, `alamat`) VALUES
(1, 'Pamuji Raharjo,S.Pd.I', 'Kepala Sekolah', '', 'Laki-laki', 'Geta RT 01/10 Jaten, Karanganyar'),
(2, 'Siti Rohmah,S.Pd.I', 'Guru', '19650127200122001', 'Perempuan', 'Tuwak RT 01/02 Kartasura, Sukoharjo'),
(3, 'Sri Lestari, S.Pd', 'Guru', '', 'Perempuan', 'Tuwak Rt 01/02 Kartasura, Sukoharjo'),
(4, 'Iswan Tuti, S.Pd', 'Guru', '', 'Perempuan', 'Tywak RT 01/02 Kartasura, Sukoharjo'),
(5, 'Muslih Hamidi, SH,MH', 'Guru', '', 'Laki-laki', 'Tuwak RT.01/02, Kartasura, Sukoharjo'),
(6, 'Istianah, S.Ag.', 'Guru', '', 'Perempuan', 'Karangasem RT.01/VII, Laweyan, Surakarta'),
(7, 'Zizin Nurwaningsih, S.Pd.I', 'Guru', '', 'Perempuan', 'Tuwak RT.01/02, Kartasura, Sukoharjo'),
(8, 'Nur Fadilah, S.Th.I', 'Guru', '', 'Perempuan', 'Serangan RT.04/II, Colomadu, Karanganyar'),
(9, 'Ahmad Shofiuzzuhri, S.E.Sy', 'TU', '', 'Laki-laki', 'Plosorejo, Tawangharjo, Grobogan'),
(10, 'Sundari', 'TU', '', 'Perempuan', 'Tuwak RT.01/02, Kartasura, Sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `kelas1`
--

CREATE TABLE IF NOT EXISTS `kelas1` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas1`
--

INSERT INTO `kelas1` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '', 'Afif Nur Raihan', 'Laki-laki', 'Surakarta', '24/06/2009', '', 'Surakarta'),
('2', '', '', 'Arda Ainun Nafish', 'Laki-laki', 'Sukoharjo', '31/08/2009', '', 'Sukoharjo'),
('3', '', '', 'Kusnul Hidayati', 'Perempuan', 'Boyolali', '17/08/2008', '', 'Boyolali');

-- --------------------------------------------------------

--
-- Table structure for table `kelas2`
--

CREATE TABLE IF NOT EXISTS `kelas2` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas2`
--

INSERT INTO `kelas2` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '', 'Amalia Khasanah', 'Perempuan', 'Karanganyar', '01/04/2009', '', 'Karanganyar'),
('2', '', '', 'Annisa Khila Rahmawati', 'Perempuan', 'Karanganyar', '29/12/2008', '', 'Karanganyar'),
('3', '', '', 'Muhammad Fachri Abbas', 'Laki-laki', 'Bekasi', '26/07/2008', '', 'Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kelas3`
--

CREATE TABLE IF NOT EXISTS `kelas3` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas3`
--

INSERT INTO `kelas3` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '', 'Ainun Nur Azizah', 'Perempuan', 'Sukoharjo', '07/07/2007', '', 'Surakarta'),
('2', '', '', 'Hanan Purnomo', 'Laki-laki', 'Surakarta', '23/03/2007', '', 'Surakarta'),
('3', '', '', 'iqbal Maulana', 'Laki-laki', 'Sukoharjo', '11/04/2007', '', 'Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kelas4`
--

CREATE TABLE IF NOT EXISTS `kelas4` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas4`
--

INSERT INTO `kelas4` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '0062200296', 'Tio Adi Saputra', 'Laki-laki', 'Sukoharjo', '21/07/2006', '', 'Surakarta'),
('2', '', '0065500803', 'Khoirun Nisa', 'Perempuan', 'Karanganyar', '02/08/2006', '', 'Surakarta'),
('3', '', '0062777985', 'Mahfudin Mazid', 'Laki-laki', 'Karanganyar', '08/02/2006', '', 'Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kelas5`
--

CREATE TABLE IF NOT EXISTS `kelas5` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas5`
--

INSERT INTO `kelas5` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '0042804952', 'Hanifatul Jannah', 'Perempuan', 'Sukoharjo', '27/11/2004', '', 'Sukoharjo'),
('2', '', '', 'Yahya Ayyasy', 'Laki-laki', 'Sukoharjo', '25/06/2005', '', 'Sukoharjo'),
('3', '', '', 'Fatimah Azzahra', 'Perempuan', 'Sukoharjo', '07/02/2005', '', 'Sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `kelas6`
--

CREATE TABLE IF NOT EXISTS `kelas6` (
  `id` varchar(1000) NOT NULL,
  `noinduk` varchar(1000) NOT NULL,
  `nisn` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jeniskelamin` varchar(1000) NOT NULL,
  `tempatlahir` varchar(1000) NOT NULL,
  `tanggallahir` varchar(1000) NOT NULL,
  `namaorangtua` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas6`
--

INSERT INTO `kelas6` (`id`, `noinduk`, `nisn`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `namaorangtua`, `alamat`) VALUES
('1', '', '0041972058', 'Zahra Alfiah', 'Perempuan', 'Karanganyar', '30/06/2004', '', 'Surakarta'),
('2', '', '0041972039', 'Bimo Widi Putro', 'Laki-laki', 'Kendal', '30/01/2004', '', 'Surakarta'),
('3', '', '0048600429', 'April', 'Perempuan', 'Sukoharjo', '14/04/2004', '', 'Sukoharjo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
