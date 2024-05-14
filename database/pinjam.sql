-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 05:51 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinjam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `id_data_pinjam` int(4) NOT NULL,
  `no_rm` varchar(8) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `waktu_peminjaman` varchar(20) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`id_data_pinjam`, `no_rm`, `nama_pasien`, `nama_peminjam`, `no_hp`, `tanggal_pinjam`, `tanggal_kembali`, `waktu_peminjaman`, `petugas`, `status`) VALUES
(1, '236452', 'Reno Nama', 'Rona', '09867847653', '2023-11-04', '2023-11-10', '6 hari', 'iraa', 'Dikembalikan'),
(2, '236452', 'Coba Nama', 'Andi', '09867847653', '2023-11-07', '2023-11-11', '4 hari', 'iraa', 'Dikembalikan'),
(4, '123765', 'asdf', 'gjhhj', '678905783', '2023-11-14', '2023-11-21', '7 hari', 'kui', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_data_user` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_data_user`, `username`, `password`, `status`) VALUES
(2, 'a', 'a', 'laporan'),
(3, 'admin_pj', 'qwerty12', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`id_data_pinjam`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_data_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  MODIFY `id_data_pinjam` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_data_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
