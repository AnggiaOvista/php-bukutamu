-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 05:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baristand`
--

-- --------------------------------------------------------

--
-- Table structure for table `dft_tamu`
--

CREATE TABLE `dft_tamu` (
  `kode` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(29) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `keperluan` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dft_tamu`
--

INSERT INTO `dft_tamu` (`kode`, `tanggal`, `nama`, `instansi`, `alamat`, `tlp`, `keperluan`) VALUES
(39, '2021-10-12', 'Anggia Ovista', 'upi yptk padang', 'Lintau Buo Utara', '085243216789', 'Magang'),
(41, '2021-10-27', 'siska', 'unidha', 'padang', '085323456543', 'mengambil hasil uji'),
(42, '2021-10-20', 'arhamsyah', 'cv. Utama jaya', 'pasaman', '085265434567', 'uji sampel'),
(43, '2020-09-17', 'Mulyandari d', 'cv. Utama', 'batusangkar', '085243216789', 'mengambil hasil uji'),
(45, '2020-09-23', 'Gita Sumarni', 'CV. Anugrah Tani', 'Painan', '082213875698', 'Uji Sampel'),
(46, '2020-01-03', 'Nia', 'ATIP ', 'padang', '085213458900', 'mengambil hasil uji');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namauser` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namauser`, `username`, `password`, `level`) VALUES
(1, 'anggia', 'admin', 'admin', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dft_tamu`
--
ALTER TABLE `dft_tamu`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dft_tamu`
--
ALTER TABLE `dft_tamu`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
