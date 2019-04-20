-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 12:04 PM
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
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idpemesanan` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `jadipesan` varchar(1) NOT NULL,
  `nopemesanan` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `jumlahproduk` int(11) NOT NULL,
  `ukuranproduk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `nopemesanan` int(11) NOT NULL,
  `totalbayar` int(11) NOT NULL,
  `kodetransaksi` varchar(10) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `alamattujuan` varchar(200) NOT NULL,
  `nomortelepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `jenisproduk` varchar(20) NOT NULL,
  `targetpembeli` varchar(2) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambarproduk` varchar(100) NOT NULL,
  `kodeproduk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `jenisproduk`, `targetpembeli`, `harga`, `gambarproduk`, `kodeproduk`) VALUES
(2, 'Abacus Navy', 'Sandal', 'P', 313304, 'JP1.jpg', 'JP1'),
(3, 'Alice Black', 'Sandal', 'P', 344174, 'JP2.jpg', 'JP2'),
(4, 'Alice White', 'Sandal', 'P', 389296, 'JP3.jpg', 'JP3'),
(5, 'Aloha Black White', 'Sandal', 'P', 373841, 'JP4.jpg', 'JP4'),
(6, 'Alura Tosca', 'Sandal', 'P', 328144, 'JP5.jpg', 'JP5'),
(7, 'Alvy All White', 'Sepatu', 'P', 413504, 'SP1.jpg', 'SP1'),
(8, 'Alvy Black White', 'Sepatu', 'P', 444817, 'SP2.jpg', 'SP2'),
(9, 'Alvy Blue Summer White', 'Sepatu', 'P', 461622, 'SP3.jpg', 'SP3'),
(10, 'Alvy Junkfood White', 'Sepatu', 'P', 478115, 'SP4.jpg', 'SP4'),
(11, 'Alvy Light Grey', 'Sepatu', 'P', 468492, 'SP5.jpg', 'SP5'),
(12, 'Alvy Maroon White', 'Sepatu', 'P', 480467, 'SP7.jpg', 'SP7'),
(13, 'Alvy Navy White', 'Sepatu', 'P', 481201, 'SP8.jpg', 'SP8'),
(14, 'Alvy Red White', 'Sepatu', 'P', 481866, 'SP9.jpg', 'SP9'),
(15, 'Alvy Sky Blue', 'Sepatu', 'P', 500195, 'SP10.jpg', 'SP10'),
(16, 'Alvy Springster', 'Sepatu', 'P', 500514, 'SP11.jpg', 'SP11');

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
  MODIFY `idpemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `nopemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
