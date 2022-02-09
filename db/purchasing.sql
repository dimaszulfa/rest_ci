-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 06:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purchasing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `kode_barang` varchar(150) DEFAULT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT current_timestamp(),
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `kode_barang`, `nama_barang`, `stok`, `tgl`, `keterangan`) VALUES
(1, NULL, NULL, NULL, '2022-02-02 04:08:46', NULL),
(2, 'ML736264', 'Laptop Acer', 20, '2022-02-02 04:09:34', 'Permintaan'),
(3, 'AU4334', 'Laptop Merah Putih', 0, '2022-02-02 04:10:41', 'Permintaan'),
(4, 'RJ2324', 'Laptop ROG', 0, '2022-02-02 04:11:43', 'Diproses'),
(5, 'RJ345345', 'Laptop ASUS', 0, '2022-02-02 04:11:59', 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_supply`
--

CREATE TABLE `tbl_receive_supply` (
  `id_receive` int(11) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `kode_barang` varchar(150) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT current_timestamp(),
  `nama_barang` varchar(200) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `satuan_barang` varchar(50) DEFAULT NULL,
  `harga_satuan_barang` int(11) DEFAULT NULL,
  `total_harga_barang` int(11) DEFAULT NULL,
  `ket_barang` varchar(50) DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_receive_supply`
--

INSERT INTO `tbl_receive_supply` (`id_receive`, `id_supplier`, `kode_barang`, `tgl_transaksi`, `nama_barang`, `jumlah_barang`, `satuan_barang`, `harga_satuan_barang`, `total_harga_barang`, `ket_barang`, `status_pembayaran`) VALUES
(1, 2, '8867232', '2022-02-02', 'Laptop', 2, 'pcs', 10000, 20000, 'Diproses', 'Selesai'),
(2, 2, '32', '2022-02-03', '234234', 324, '234', 324, 234, '324', '234'),
(3, 2, '2323', '2022-02-03', 'sadasd', 10, 'sds', 10, 100000, 'Diproses', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama`, `no_hp`, `alamat`) VALUES
(2, 'AAA', '0821382183', 'hfsdhisdfhihsdfhidsfhidsf'),
(3, 'Dimas Syukron', '07234723473724', 'Baleendah'),
(7, 'Testersss', '123456779', 'Cipeundeuy'),
(8, 'Testersss', '123456779', 'Cipeundeuy'),
(10, 'Testersss', '123456779', 'Cipeundeuy'),
(11, 'Testersss', '123456779', 'Cipeundeuy'),
(12, 'Testersss', '123456779', 'Cipeundeuy'),
(13, 'Testersss', '123456779', 'Cipeundeuy'),
(14, 'Testersss', '123456779', 'Cipeundeuy'),
(15, 'Testersss', '123456779', 'Cipeundeuy'),
(17, 'Testersss', '123456779', 'Cipeundeuy'),
(18, 'Testersss', '123456779', 'Cipeundeuy'),
(19, 'Testersss', '123456779', 'Cipeundeuy'),
(21, 'Testersss', '123456779', 'Cipeundeuy'),
(123, 'Testersss', '123456779', 'Cipeundeuy'),
(1234, 'sdf', '123456779', 'Cipeundeuy'),
(123123123, 'Testersss', '123456779', 'Cipeundeuy'),
(123123125, 'data', '23123123123', 'etet'),
(123123126, 'DIMAS ZULFA SANTANA', '23123123123', 'etet'),
(123123127, 'wildan', '312123', '324324'),
(123123128, 'wildanss', '312123', '324324'),
(123123129, 'wildanss', '312123', '324324'),
(123123130, 'wildanssas', '312123', '324324'),
(123123131, 'wildanssas', '312123', '324324'),
(123123134, 'DIMAS ZULFA SANTANA', '23123123123', 'etet'),
(123123135, 'DIMAS ZULFA SANTANA', '23123123123', 'etet'),
(123123136, 'DIMAS ZULFA SANTANA', '23123123123', 'etet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_receive_supply`
--
ALTER TABLE `tbl_receive_supply`
  ADD PRIMARY KEY (`id_receive`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_receive_supply`
--
ALTER TABLE `tbl_receive_supply`
  MODIFY `id_receive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123123138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
