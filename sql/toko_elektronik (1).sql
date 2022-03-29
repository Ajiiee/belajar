-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 10:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `foto_produk` text DEFAULT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `stok_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(12, 'Print P201', '2300000', 'WhatsApp Image 2022-03-10 at 13.14.03 (1).jpeg', 'BGL BGL ', '9'),
(13, 'Print Brother', '1600000', 'WhatsApp Image 2022-03-10 at 13.14.04.jpeg', 'print bagus', '11'),
(15, 'PRINT BBL', '20000000', 'OIP.jpg', 'BAGUS', '97');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `status` enum('proses','dikirim','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `name`, `alamat`, `no_hp`, `nama_produk`, `harga_produk`, `subtotal`, `foto_produk`, `status`) VALUES
(4, 'IRJAF', 'jalan kunir', '941372421', 'Print Brother', '1600000', '3200000', 'WhatsApp Image 2022-03-10 at 13.14.04.jpeg', 'dikirim'),
(5, 'IRJAF', 'jaalan jalan', '08313123', 'Print Brother', '1600000', '16000000', 'WhatsApp Image 2022-03-10 at 13.14.04.jpeg', 'dikirim'),
(6, 'user', 'jkjhk', '08767', 'epson', '1900000', '3800000', 'WhatsApp Image 2022-03-10 at 13.14.03.jpeg', 'dikirim'),
(7, 'user', 'jln hhh', '0876545', 'Print P201', '2300000', '6900000', 'WhatsApp Image 2022-03-10 at 13.14.03 (1).jpeg', 'ditolak'),
(8, 'user', 'jalansss', '083242342', 'Print Brother', '1600000', '8000000', 'WhatsApp Image 2022-03-10 at 13.14.04.jpeg', 'proses'),
(9, '', '', '', 'Print P201', '2300000', '2300000', 'WhatsApp Image 2022-03-10 at 13.14.03 (1).jpeg', 'proses'),
(10, '', '', '', '', '', '', '', 'ditolak'),
(11, 'user', 'hwhjdewq', '002323', 'PRINT BBL', '20000000000', '40000000000', 'OIP.jpg', 'proses'),
(12, 'IRJAF', 'jalan kunir', '03842423', 'PRINT BBL', '20000000', '20000000', 'OIP.jpg', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `password`, `role`) VALUES
(7, 'admin', 'admin', 'admin', 'Admin'),
(8, 'user', 'user', 'user', 'Customer'),
(9, 'ajie', 'Muhammad Fajriana', '12345', 'Customer'),
(10, 'user1', 'Fajriana', '12345', 'Customer'),
(12, 'jafadmin', 'JAFF KIYOMASAAAAAA', '12345', 'Admin'),
(13, 'jafuser', 'IRJAF', '12345', 'Customer'),
(14, 'rey', 'reyhan', 'rey', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
