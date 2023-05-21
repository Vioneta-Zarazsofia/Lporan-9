-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 03:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `alamat`) VALUES
(1, 'Budi Susanto', '1MM3', 'Sedati Gede'),
(2, 'Dita Anggraini', '1MM2', 'Rungkut'),
(3, 'Riska Nur Aini', '3MM1', 'Wonocolo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswabaru`
--

CREATE TABLE `tb_siswabaru` (
  `id_siswa` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `cita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswabaru`
--

INSERT INTO `tb_siswabaru` (`id_siswa`, `nama`, `kelas`, `alamat`, `umur`, `cita`) VALUES
(1, 'Permatasari', '12', 'Surabaya', '10', 'CEO'),
(2, 'Zarazsofia', '12', 'Ngawi', '17', 'HRD'),
(3, 'Vioneta', '13', 'Rungkut', '16', 'Pelukis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswabaru`
--
ALTER TABLE `tb_siswabaru`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswabaru`
--
ALTER TABLE `tb_siswabaru`
  MODIFY `id_siswa` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
