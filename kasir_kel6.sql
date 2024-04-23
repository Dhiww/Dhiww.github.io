-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_kel6`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `kode_produk` varchar(50) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `kode_produk`, `JumlahProduk`, `Subtotal`) VALUES
(0, 108, 'K.003', 5, '25000'),
(0, 109, 'K.003', 4, '20000'),
(0, 111, 'K.003', 3, '15000'),
(0, 112, 'K.003', 1, '5000'),
(0, 112, 'M.001', 1, '15000'),
(0, 117, 'T.002', 2, '14000'),
(0, 117, 'M.001', 1, '15000'),
(0, 126, 'K.003', 3, '15000'),
(0, 154, 'K.001', 1, '3000'),
(0, 154, 'S.001', 1, '7000'),
(0, 154, 'T.003', 1, '7000'),
(0, 155, 'K.001', 5, '15000'),
(0, 155, 'K.003', 2, '10000'),
(0, 155, 'T.001', 1, '5000'),
(0, 155, 'S.001', 2, '14000'),
(0, 155, 'T.002', 2, '14000'),
(0, 156, 'T.002', 1, '7000'),
(0, 156, 'S.002', 1, '10000'),
(0, 157, 'S.001', 10, '70000'),
(0, 157, 'T.002', 7, '49000'),
(0, 157, 'T.003', 3, '21000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `Alamat`, `NomorTelepon`) VALUES
(1, 'kratos', 'pagandon', '0987654321'),
(6, 'NonMember', '.', '111'),
(7, 'aaa', 'aaa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `Bayar` decimal(10,2) NOT NULL,
  `Kembali` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `Bayar`, `Kembali`, `PelangganID`) VALUES
(154, '2024-04-23', '17000.00', '20000.00', '3000.00', 6),
(155, '2024-04-23', '58000.00', '60000.00', '2000.00', 6),
(156, '2024-04-23', '17000.00', '20000.00', '3000.00', 1),
(157, '2024-04-23', '140000.00', '150000.00', '10000.00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(3, 'Aldo Hardianto', 'al', '123', '1231231231', 'petugas'),
(4, 'Handhika Fathir Rahman Novriyanto', 'wowo', '123', '1234567890', 'petugas'),
(10, 'Adhi Chandraprawita Supriadi', 'Adhi', '123', '0987654321', 'admin'),
(11, 'Putri Eka Vinanda', 'mput', '123', '123124432', 'petugas'),
(12, 'Jihan Septi Anestia', 'jihan', '123', '123122', 'petugas'),
(13, 'Dwi Rosa Agustin', 'oca', '123', '5645641', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `kode_produk` varchar(50) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ProdukID`, `kode_produk`, `NamaProduk`, `Harga`, `Stok`) VALUES
(3, 'S.001', 'Seblak Original', '7000.00', 57),
(4, 'K.001', 'Kopi GoodDay', '4000.00', 91),
(9, 'K.003', 'Kopi Hitam', '3000.00', 48),
(10, 'T.001', 'Teh Manis Panas', '4000.00', 98),
(11, 'T.002', 'Teh Manis', '4000.00', 89),
(12, 'T.003', 'Teh Tawar Dingin', '2000.00', 94),
(13, 'S.002', 'Seblak Ceker', '10000.00', 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`PelangganID`) REFERENCES `pelanggan` (`PelangganID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
