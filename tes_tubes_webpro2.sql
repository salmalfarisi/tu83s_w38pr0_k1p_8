-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 06:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_tubes_webpro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idpemesanan` int(11) NOT NULL,
  `idproduk` int(11) DEFAULT NULL,
  `jadipesan` varchar(1) NOT NULL,
  `nopemesanan` int(11) DEFAULT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `jumlahproduk` int(11) NOT NULL,
  `ukuranproduk` varchar(5) NOT NULL,
  `totalhargaproduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idpemesanan`, `idproduk`, `jadipesan`, `nopemesanan`, `namaproduk`, `jumlahproduk`, `ukuranproduk`, `totalhargaproduk`) VALUES
(1, 2, 'N', 1, 'Abacus Navy', 5, '38', 1566520),
(2, 17, 'N', 1, 'Arthur Black Gum', 2, '39', 670000),
(6, 17, 'N', 2, 'Arthur Black Gum', 4, '39', 1340000),
(7, 2, 'N', 4, 'Abacus Navy', 5, '40', 1566520);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `nopemesanan` int(11) NOT NULL,
  `namasementara` varchar(10) NOT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  `kodetransaksi` varchar(10) DEFAULT NULL,
  `kurirpengiriman` varchar(10) DEFAULT NULL,
  `metodepembayaran` varchar(10) DEFAULT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `alamattujuan` varchar(200) DEFAULT NULL,
  `nomortelepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kodepos` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`nopemesanan`, `namasementara`, `totalbayar`, `kodetransaksi`, `kurirpengiriman`, `metodepembayaran`, `namalengkap`, `alamattujuan`, `nomortelepon`, `email`, `provinsi`, `kodepos`) VALUES
(1, 'DSmjaAlGPe', 2236520, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'SEhodaFqey', 1340000, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'yaxPLgSGJM', 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'RkaVCWmIrZ', 1566520, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `jenisproduk` varchar(20) NOT NULL,
  `targetpembeli` varchar(2) NOT NULL,
  `deskripsiproduk` varchar(500) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `gambarproduk` varchar(100) NOT NULL,
  `kodeproduk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `jenisproduk`, `targetpembeli`, `deskripsiproduk`, `harga`, `gambarproduk`, `kodeproduk`) VALUES
(2, 'Abacus Navy', 'Sandal', 'P', NULL, 313304, 'JP1.jpg', 'JP1'),
(3, 'Alice Black', 'Sandal', 'P', NULL, 344174, 'JP2.jpg', 'JP2'),
(4, 'Alice White', 'Sandal', 'P', NULL, 389296, 'JP3.jpg', 'JP3'),
(5, 'Aloha Black White', 'Sandal', 'P', NULL, 373841, 'JP4.jpg', 'JP4'),
(6, 'Alura Tosca', 'Sandal', 'P', NULL, 328144, 'JP5.jpg', 'JP5'),
(7, 'Alvy All White', 'Sepatu', 'P', NULL, 413504, 'SP1.jpg', 'SP1'),
(8, 'Alvy Black White', 'Sepatu', 'P', NULL, 444817, 'SP2.jpg', 'SP2'),
(9, 'Alvy Blue Summer White', 'Sepatu', 'P', NULL, 461622, 'SP3.jpg', 'SP3'),
(10, 'Alvy Junkfood White', 'Sepatu', 'P', NULL, 478115, 'SP4.jpg', 'SP4'),
(11, 'Alvy Light Grey', 'Sepatu', 'P', NULL, 468492, 'SP5.jpg', 'SP5'),
(12, 'Alvy Maroon White', 'Sepatu', 'P', NULL, 480467, 'SP7.jpg', 'SP7'),
(13, 'Alvy Navy White', 'Sepatu', 'P', NULL, 481201, 'SP8.jpg', 'SP8'),
(14, 'Alvy Red White', 'Sepatu', 'P', NULL, 481866, 'SP9.jpg', 'SP9'),
(15, 'Alvy Sky Blue', 'Sepatu', 'P', NULL, 500195, 'SP10.jpg', 'SP10'),
(16, 'Alvy Springster', 'Sepatu', 'P', NULL, 500514, 'SP11.jpg', 'SP11'),
(17, 'Arthur Black Gum', 'Sepatu', 'L', NULL, 335000, 'SL1.jpg', 'SL1'),
(18, 'Authentic 420 Black', 'Sepatu', 'L', NULL, 275000, 'SL2.jpg', 'SL2'),
(19, 'Authentic 420', 'Sepatu', 'L', NULL, 275000, 'SL3.jpg', 'SL3'),
(20, 'Authentic All Black', 'Sepatu', 'L', NULL, 295000, 'SL4.jpg', 'SL4'),
(21, 'Authentic Black Bs White', 'Sepatu', 'L', NULL, 295000, 'SL5.jpg', 'SL5'),
(22, 'Authentic Black Gum', 'Sepatu', 'L', NULL, 295000, 'SL6.jpg', 'SL6'),
(23, 'Authentic Black Pizza', 'Sepatu', 'L', NULL, 295000, 'SL7.jpg', 'SL7'),
(24, 'Authentic Black White', 'Sepatu', 'L', NULL, 285000, 'SL8.jpg', 'SL8'),
(25, 'Authentic Brown Black', 'Sepatu', 'L', NULL, 275000, 'SL9.jpg', 'SL9'),
(26, 'Authentic Ch Tan', 'Sepatu', 'L', NULL, 275000, 'SL10.jpg', 'SL10'),
(27, 'Authentic Drac Black', 'Sepatu', 'L', NULL, 210000, 'SL11.jpg', 'SL11'),
(28, 'Authentic Drac Grey', 'Sepatu', 'L', NULL, 210000, 'SL12.jpg', 'SL12'),
(29, 'Authentic Leather All Black', 'Sepatu', 'L', NULL, 275000, 'SL13.jpg', 'SL13'),
(30, 'Authentic Leather Black Gum', 'Sepatu', 'L', NULL, 275000, 'SL14.jpg', 'SL14'),
(31, 'Authentic Maroon Gum', 'Sepatu', 'L', NULL, 295000, 'SL15.jpg', 'SL15'),
(32, 'Authentic Maroon White', 'Sepatu', 'L', NULL, 285000, 'SL16.jpg', 'SL16'),
(33, 'Authentic Navy Black', 'Sepatu', 'L', NULL, 295000, 'SL17.jpg', 'SL17'),
(34, 'Authentic Navy Gum', 'Sepatu', 'L', NULL, 295000, 'SL18.jpg', 'SL18'),
(35, 'Alvy Woofie', 'Sepatu', 'P', NULL, 285000, 'SP12.jpg', 'SP12'),
(36, 'Cindy Blue White', 'Sepatu', 'P', NULL, 285000, 'SP13.jpg', 'SP13'),
(37, 'Cindy Light Grey', 'Sepatu', 'P', NULL, 285000, 'SP14.jpg', 'SP14'),
(38, 'Cindy Red White', 'Sepatu', 'P', NULL, 285000, 'SP15.jpg', 'SP15'),
(39, 'Beachstripe Orange', 'Sandal', 'L', NULL, 75000, 'JL1.jpg', 'JL1'),
(40, 'Black Rainbow', 'Sandal', 'L', NULL, 75000, 'JL2.jpg', 'JL2'),
(41, 'Blue Ocean Navy', 'Sandal', 'L', NULL, 75000, 'JL3.jpg', 'JL3'),
(42, 'Dark Pizza', 'Sandal', 'L', NULL, 75000, 'JL4.jpg', 'JL4'),
(43, 'Dimension', 'Sandal', 'L', NULL, 75000, 'JL5.jpg', 'JL5'),
(44, 'Etnical Navu', 'Sandal', 'L', NULL, 75000, 'JL6.jpg', 'JL6'),
(45, 'Forest Green', 'Sandal', 'L', NULL, 75000, 'JL7.jpg', 'JL7'),
(46, 'GMX Down Over', 'Sandal', 'L', NULL, 75000, 'JL8.jpg', 'JL8'),
(47, 'Blue Ocean Tosca', 'Sepatu', 'L', NULL, 75000, 'JL9.jpg', 'JL9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idpemesanan`),
  ADD KEY `idproduk` (`idproduk`),
  ADD KEY `idpemesanan` (`idpemesanan`,`nopemesanan`),
  ADD KEY `nopemesanan` (`nopemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`nopemesanan`),
  ADD UNIQUE KEY `kodetransaksi` (`kodetransaksi`),
  ADD KEY `nopemesanan` (`nopemesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD UNIQUE KEY `kodeproduk` (`kodeproduk`),
  ADD KEY `idproduk` (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idpemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `nopemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`nopemesanan`) REFERENCES `pemesanan` (`nopemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
