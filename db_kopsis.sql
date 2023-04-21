-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 06:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('rajuganteng', 'raju'),
('rofiq', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `Tgl_masuk` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`nama_produk`, `harga`, `kode`, `exp`, `Tgl_masuk`, `id`) VALUES
('teh botol', '4000', '32183871328718', '13-08-24', '4-1-2023', 1),
('TEH gelas', '1000', '812789478219781', '12-12-2024', '5-4-2023', 11),
('teh pucuk', '4000', '473128473812741', '23-4-2024', '5-4-2023', 12),
('rofiq ganteng', '10000', '3284738578134758134', '14513451345', '15354135143', 13),
('fksjdfkjsdkfjskdf', '43218508705133', '35137857247178', '4385724752437', '43297528345', 14),
('jkhdhfjdasjDS', 'JASDKFASJDHASDJFHJS', 'JFDHASJDHFADJASHF', 'HASDJFHDAJSHFDJSAH', 'JADSHFJDSHFJAHSJFD', 15),
('KSDAHFAIHFJASHFJADHSFJ', 'Wfsjdhgjhfdsjsdjh', 'hdsjafhjdfhajshfja', 'jhdfjasjdh', 'jjajfadhfjhajhfs', 16),
('klfdjfkjakjdfa;kj', 'dsjakfjaksjdfkdaj', 'kdjasfjakjfkajdsj', 'jads;fkjakfjakj', 'akdahgjgaj', 17),
('sfasdfdsafasd', 'dsgasd', 'GSFDG', 'HJHjhj', 'hjhljhjhhj', 18),
('jhjghlgh', 'hghghgkghghg', 'hgkhghkghgh', 'ghghjg', 'hghghjg', 19),
('dfsafasdfasfasdfsd', 'dsafdasfasdf', 'fsdfasdfsa', 'dfgsdfgsdfgs', 'dsfsdfsdf', 20),
('kia ganteng', 'kia ', 'ksjkjsa', 'kjdkjsfkj', 'fdsdjfksj', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
