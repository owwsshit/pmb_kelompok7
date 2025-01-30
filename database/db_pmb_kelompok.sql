-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmb_kelompok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Lesa', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_pendaftaran` int(15) NOT NULL,
  `Nama_file` varchar(255) NOT NULL,
  `Path_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `almt_peserta` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pas_foto` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `skl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `almt_peserta`, `email`, `no_hp`, `pas_foto`, `ktp`, `kk`, `ijazah`, `skl`) VALUES
(81, '2025-01-30', '2025/2026', 'Komputerisasi Akuntansi', 'abil', 'buaya', '2005-11-09', 'Perempuan', 'Katolik', 'bonjol', 'abil@gmail.com', '089765432345', '22.jpg', '52.jpg', '63.pdf', '17.pdf', '81.pdf'),
(82, '2025-01-30', '2025/2026', 'Teknik Informatika', 'FAKHRI KHUZAINI', 'stabat', '2005-12-13', 'Laki-Laki', 'Islam', 'Binjai', 'fakhrii@gmail.com', '087766576654', '91.jpg', '80.jpg', '87.pdf', '59.pdf', '22.pdf'),
(83, '2025-01-30', '2025/2026', 'Bisnis Digital', 'dwi', 'binjai', '2004-02-04', 'Perempuan', 'Islam', 'binjai', 'dwi@gmail.com', '086566665555', '10.jpg', '71.jpg', '97.pdf', '31.pdf', '92.pdf'),
(84, '2025-01-30', '2025/2026', 'Komputerisasi Akuntansi', 'alexa', 'stabat', '0005-03-04', 'Perempuan', 'Islam', 'stabat', 'alexaokta17@gmail.com', '081234567898', '66.jpg', '66.jpg', '89.pdf', '29.pdf', '78.pdf'),
(85, '2025-01-30', '2025/2026', 'Sistem Informasi', 'amanda', 'binjai', '2006-03-03', 'Perempuan', 'Islam', 'binjai', 'manda@gmail.com', '087766554433', '62.jpg', '35.jpg', '28.pdf', '39.pdf', '40.pdf'),
(86, '2025-01-30', '2025/2026', 'Managemen Informatika', 'alya', 'binjai', '1006-02-04', 'Perempuan', 'Islam', 'binjai', 'alya@gmail.com', '088877778888', '41.jpg', '64.jpg', '24.pdf', '15.pdf', '26.pdf'),
(87, '2025-01-30', '2025/2026', 'Komputerisasi Akuntansi', 'fakhri', 'binjai', '2004-12-12', 'Laki-Laki', 'Islam', 'binjai', 'fakhri@gmail.com', '082345455656', '18.jpg', '49.jpg', '96.pdf', '38.pdf', '71.pdf'),
(88, '2025-01-30', '2025/2026', 'Komputerisasi Akuntansi', 'rani', 'binjai', '2005-04-05', 'Perempuan', 'Islam', 'binjai', 'rani@gmail.com', '084455556666', '82.jpg', '11.jpg', '60.pdf', '27.pdf', '31.pdf'),
(89, '2025-01-30', '2025/2026', 'Teknik Informatika', 'dani', 'medan', '2005-12-12', 'Laki-Laki', 'Hindu', 'medan', 'dani@gmail.com', '088899997777', '30.jpg', '36.jpg', '81.pdf', '58.pdf', '14.pdf'),
(90, '2025-01-30', '2025/2026', 'Sistem Informasi', 'riri', 'medan', '2006-12-05', 'Perempuan', 'Buddha', 'medan', 'riri@gmail.com', '086655554444', '69.jpg', '29.jpg', '16.pdf', '48.pdf', '65.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_pendaftaran` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
