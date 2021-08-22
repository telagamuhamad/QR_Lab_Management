-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `namaloginadm` varchar(50) NOT NULL,
  `password_adm` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `namaloginadm`, `password_adm`) VALUES
('001', 'admin1', 'admin1', 'adminadmin');

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `kode_aset` varchar(10) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `lokasi_aset` varchar(50) NOT NULL,
  `foto_aset` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`kode_aset`, `nama_aset`, `spesifikasi`, `klasifikasi`, `lokasi_aset`, `foto_aset`) VALUES
('AS01', 'laptop', 'Intel Core I3', 'Peralatan Mendukung', 'Laboratorium', 0x696d616765732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `form_pelaks`
--

CREATE TABLE `form_pelaks` (
  `tgl_laporan` date NOT NULL,
  `id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_data_aset`
--

CREATE TABLE `laporan_data_aset` (
  `tgl_laporan` date NOT NULL,
  `kode_aset` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelaks_prak`
--

CREATE TABLE `pelaks_prak` (
  `kode_belajar` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perencanaanprak`
--

CREATE TABLE `perencanaanprak` (
  `kode_belajar` varchar(10) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `namalogin_usr` varchar(50) NOT NULL,
  `password_usr` varchar(12) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `namalogin_usr`, `password_usr`, `role`) VALUES
('US001', 'Muhammad Affandi', 'maffandi', '123', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `form_pelaks`
--
ALTER TABLE `form_pelaks`
  ADD PRIMARY KEY (`tgl_laporan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `laporan_data_aset`
--
ALTER TABLE `laporan_data_aset`
  ADD PRIMARY KEY (`tgl_laporan`),
  ADD KEY `kode_aset` (`kode_aset`);

--
-- Indexes for table `pelaks_prak`
--
ALTER TABLE `pelaks_prak`
  ADD KEY `kode_belajar` (`kode_belajar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `perencanaanprak`
--
ALTER TABLE `perencanaanprak`
  ADD PRIMARY KEY (`kode_belajar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_pelaks`
--
ALTER TABLE `form_pelaks`
  ADD CONSTRAINT `form_pelaks_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan_data_aset`
--
ALTER TABLE `laporan_data_aset`
  ADD CONSTRAINT `laporan_data_aset_ibfk_1` FOREIGN KEY (`kode_aset`) REFERENCES `aset` (`kode_aset`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelaks_prak`
--
ALTER TABLE `pelaks_prak`
  ADD CONSTRAINT `pelaks_prak_ibfk_1` FOREIGN KEY (`kode_belajar`) REFERENCES `perencanaanprak` (`kode_belajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelaks_prak_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
