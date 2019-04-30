-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 08:29 AM
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
(7, 2, 'N', 4, 'Abacus Navy', 5, '40', 1566520),
(8, 18, 'N', 6, 'Authentic 420 Black', 3, '39', 825000),
(9, 41, 'N', 7, 'Blue Ocean Navy', 4, '39', 300000),
(11, 2, 'N', 8, 'Abacus Navy', 1, '39', 313304),
(14, 17, 'N', 8, 'Arthur Black Gum', 3, '39', 1005000);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` varchar(7) NOT NULL,
  `id_prov` varchar(6) NOT NULL,
  `nama_kabupaten` varchar(55) NOT NULL,
  `pusat_pemerintahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `id_prov`, `nama_kabupaten`, `pusat_pemerintahan`) VALUES
('KAB-001', 'PRO-01', 'Bandung', 'Soreang'),
('KAB-002', 'PRO-01', 'Bandung Barat', 'Ngamprah'),
('KAB-003', 'PRO-01', 'Bekasi', 'Cikarang'),
('KAB-004', 'PRO-01', 'Bogor', 'Cibinong'),
('KAB-005', 'PRO-01', 'Ciamis', 'Ciamis'),
('KAB-006', 'PRO-01', 'Cianjur', 'Cianjur'),
('KAB-007', 'PRO-01', 'Cirebon', 'Sumber'),
('KAB-008', 'PRO-01', 'Garut', 'Garut'),
('KAB-009', 'PRO-01', 'Indramayu', 'Indramayu'),
('KAB-010', 'PRO-01', 'Karawang', 'Karawang'),
('KAB-011', 'PRO-01', 'Kuningan', 'Kuningan'),
('KAB-012', 'PRO-01', 'Majalengka', 'Majalengka'),
('KAB-013', 'PRO-01', 'Pangandaran', 'Parigi'),
('KAB-014', 'PRO-01', ' Purwakarta', 'Purwakarta'),
('KAB-015', 'PRO-01', 'Subang', 'Subang'),
('KAB-016', 'PRO-01', 'Sukabumi', 'Palabuhan Ratu'),
('KAB-017', 'PRO-01', 'Sumedang', 'Sumedang'),
('KAB-018', 'PRO-01', 'Tasikmalaya', 'Singaparna'),
('KAB-019', 'PRO-01', 'Kota Bandung', 'Bandung'),
('KAB-020', 'PRO-01', 'Kota Banjar', 'Banjar'),
('KAB-021', 'PRO-01', 'Kota Bekasi', 'Bekasi'),
('KAB-022', 'PRO-01', 'Kota Bogor', 'Bogor'),
('KAB-023', 'PRO-01', 'Kota Cimahi', 'Cimahi'),
('KAB-024', 'PRO-01', 'Kota Cirebon', 'Cirebon'),
('KAB-025', 'PRO-01', 'Kota Depok', 'Depok'),
('KAB-026', 'PRO-01', 'Kota Sukabumi', 'Sukabumi'),
('KAB-027', 'PRO-01', 'Kota Tasikmalaya', 'Tasikmalaya'),
('KAB-028', 'PRO-01', 'Administrasi Kepulauan Seribu', 'Pulau Pramuka'),
('KAB-029', 'PRO-01', 'Kota Administrasi Jakarta Barat', 'Kebon Jeruk'),
('KAB-030', 'PRO-01', 'Kota Administrasi Jakarta Pusat', 'Menteng'),
('KAB-031', 'PRO-01', 'Kota Administrasi Jakarta Selatan', 'Kebayoran Baru'),
('KAB-032', 'PRO-01', 'Kota Administrasi Jakarta Timur', 'Jatinegara'),
('KAB-033', 'PRO-01', 'Kota Administrasi Jakarta Utara', 'Koja'),
('KAB-034', 'PRO-02', 'Aceh Barat', 'Meulaboh'),
('KAB-035', 'PRO-02', 'Aceh Barat Daya', 'Blangpidie'),
('KAB-036', 'PRO-02', 'Aceh Besar', 'Kota Jantho'),
('KAB-037', 'PRO-02', 'Aceh Jaya', 'Calang'),
('KAB-038', 'PRO-02', 'Aceh Selatan', 'Tapak Tuan'),
('KAB-039', 'PRO-02', 'Aceh Singkil', 'Singkil'),
('KAB-040', 'PRO-02', 'Aceh Tamiang', 'Karang Baru'),
('KAB-041', 'PRO-02', 'Aceh Tengah', 'Takengon'),
('KAB-042', 'PRO-02', 'Aceh Tenggara', 'Kutacane'),
('KAB-043', 'PRO-02', 'Aceh Timur', 'Idi Rayeuk'),
('KAB-044', 'PRO-02', 'Aceh Utara', 'Lhoksukon'),
('KAB-045', 'PRO-02', 'Bener Meriah', 'Sipang Tiga Redelong'),
('KAB-046', 'PRO-02', 'Bireuen', 'Bireuen'),
('KAB-047', 'PRO-02', 'Gayo Lues', 'Blang Kejeren'),
('KAB-048', 'PRO-02', 'Nagan Raya', 'Suka Makmue'),
('KAB-049', 'PRO-02', 'Pidie', 'Sigli'),
('KAB-050', 'PRO-02', 'Pidie Jaya', 'Meureudu'),
('KAB-051', 'PRO-02', 'Simeulue', 'Sinabang'),
('KAB-052', 'PRO-02', 'Kota Banda Aceh', 'Banda Aceh'),
('KAB-053', 'PRO-02', 'Kota Langsa', 'Langsa'),
('KAB-054', 'PRO-02', 'Kota Lhokseumawe', 'Lhokseumawe'),
('KAB-055', 'PRO-02', 'Kota Sabang', 'Sabang'),
('KAB-056', 'PRO-02', 'Kota Subulussalam', 'Subulussalam'),
('KAB-057', 'PRO-05', 'Bengkalis', 'Bengkalis'),
('KAB-058', 'PRO-05', 'Indragiri Hilir', 'Tembilahan'),
('KAB-059', 'PRO-05', 'Indragiri Hulu', 'Rengat'),
('KAB-060', 'PRO-05', 'Kampar', 'Bangkinang'),
('KAB-061', 'PRO-05', 'Kepulauan Meranti', 'Selat Panjang'),
('KAB-062', 'PRO-05', 'Kuantan Singingi', 'Taluk Kuantan'),
('KAB-063', 'PRO-05', 'Pelalawan', 'Pangkalan Kerinci'),
('KAB-064', 'PRO-05', 'Rokan Hilir', 'Bagan Siapi-api'),
('KAB-065', 'PRO-05', 'Rokan Hulu', 'Pasir Pangaraian'),
('KAB-066', 'PRO-05', 'Siak', 'Siak Sri Indrapura'),
('KAB-067', 'PRO-05', 'Kota Dumai', 'Dumai'),
('KAB-068', 'PRO-05', 'Kota Pekanbaru', 'Pekanbaru'),
('KAB-069', 'PRO-03', 'Asahan', 'Kisaran'),
('KAB-070', 'PRO-03', 'Batubara', 'Limapuluh'),
('KAB-071', 'PRO-03', 'Dairi', 'Sidikalang'),
('KAB-072', 'PRO-03', 'Deli Serdang', 'Lubuk Pakam'),
('KAB-073', 'PRO-03', 'Humbang Hasundutan', 'Dolok Sanggul');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` varchar(8) NOT NULL,
  `id_kab` varchar(7) NOT NULL,
  `id_prov` varchar(6) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kab`, `id_prov`, `nama_kecamatan`) VALUES
('KEC-0001', 'KAB-001', 'PRO-01', 'Arjasari'),
('KEC-0002', 'KAB-001', 'PRO-01', 'Cikancung'),
('KEC-0003', 'KAB-001', 'PRO-01', 'Ciwidey'),
('KEC-0004', 'KAB-001', 'PRO-01', 'Majalaya'),
('KEC-0005', 'KAB-001', 'PRO-01', 'Pangalengan'),
('KEC-0006', 'KAB-001', 'PRO-01', 'Soreang'),
('KEC-0007', 'KAB-001', 'PRO-01', 'Baleendah'),
('KEC-0008', 'KAB-001', 'PRO-01', 'Cilengkrang'),
('KEC-0009', 'KAB-001', 'PRO-01', 'Dayeuhkolot'),
('KEC-0010', 'KAB-001', 'PRO-01', 'Margaasih'),
('KEC-0011', 'KAB-001', 'PRO-01', 'Paseh'),
('KEC-0012', 'KAB-001', 'PRO-01', 'Banjaran'),
('KEC-0013', 'KAB-001', 'PRO-01', 'Cileunyi'),
('KEC-0014', 'KAB-001', 'PRO-01', 'Ibun'),
('KEC-0015', 'KAB-001', 'PRO-01', 'Margahayu'),
('KEC-0016', 'KAB-001', 'PRO-01', 'Pasirjambu'),
('KEC-0017', 'KAB-001', 'PRO-01', 'Bojongsoang'),
('KEC-0018', 'KAB-001', 'PRO-01', 'Cimaung'),
('KEC-0019', 'KAB-001', 'PRO-01', 'Katapang'),
('KEC-0020', 'KAB-001', 'PRO-01', 'Nagreg'),
('KEC-0021', 'KAB-001', 'PRO-01', 'Rancabali'),
('KEC-0022', 'KAB-001', 'PRO-01', 'Cangkuang'),
('KEC-0023', 'KAB-001', 'PRO-01', 'Cimenyan'),
('KEC-0024', 'KAB-001', 'PRO-01', 'Kertasari'),
('KEC-0025', 'KAB-001', 'PRO-01', 'Pacet'),
('KEC-0026', 'KAB-001', 'PRO-01', 'Solokan Jeruk'),
('KEC-0027', 'KAB-001', 'PRO-01', 'Cicalengka'),
('KEC-0028', 'KAB-001', 'PRO-01', 'Ciparay'),
('KEC-0029', 'KAB-001', 'PRO-01', 'Kutawaringin'),
('KEC-0030', 'KAB-001', 'PRO-01', 'Pameungpeuk'),
('KEC-0031', 'KAB-001', 'PRO-01', 'Rancaekek'),
('KEC-0032', 'KAB-068', 'PRO-05', 'Bukit Raya'),
('KEC-0033', 'KAB-068', 'PRO-05', 'Lima Puluh'),
('KEC-0034', 'KAB-068', 'PRO-05', 'Marpoyan Damai'),
('KEC-0035', 'KAB-068', 'PRO-05', 'Payung Sekaki'),
('KEC-0036', 'KAB-068', 'PRO-05', 'Pekanbaru Kota'),
('KEC-0037', 'KAB-068', 'PRO-05', 'Rumbai'),
('KEC-0038', 'KAB-068', 'PRO-05', 'Rumbai Pesisir'),
('KEC-0039', 'KAB-068', 'PRO-05', 'Sail'),
('KEC-0040', 'KAB-068', 'PRO-05', 'Senapelan'),
('KEC-0041', 'KAB-068', 'PRO-05', 'Sukajadi'),
('KEC-0042', 'KAB-068', 'PRO-05', 'Tampan'),
('KEC-0043', 'KAB-068', 'PRO-05', 'Tenayan Raya'),
('KEC-0046', 'KAB-002', 'PRO-01', 'Batujajar'),
('KEC-0047', 'KAB-002', 'PRO-01', 'Cipongkor'),
('KEC-0048', 'KAB-002', 'PRO-01', 'Rongga'),
('KEC-0049', 'KAB-002', 'PRO-01', 'Cikalongwetan'),
('KEC-0050', 'KAB-002', 'PRO-01', 'Cisarua'),
('KEC-0051', 'KAB-002', 'PRO-01', 'Sindangkerta'),
('KEC-0052', 'KAB-002', 'PRO-01', 'Cihampelas'),
('KEC-0053', 'KAB-002', 'PRO-01', 'Gununghalu'),
('KEC-0054', 'KAB-002', 'PRO-01', 'Lembang'),
('KEC-0055', 'KAB-002', 'PRO-01', 'Cililin'),
('KEC-0056', 'KAB-002', 'PRO-01', 'Ngamprah'),
('KEC-0057', 'KAB-002', 'PRO-01', 'Saguling'),
('KEC-0058', 'KAB-002', 'PRO-01', 'Cipatat'),
('KEC-0059', 'KAB-002', 'PRO-01', 'Padalarang'),
('KEC-0060', 'KAB-002', 'PRO-01', 'Cipeundeuy'),
('KEC-0061', 'KAB-002', 'PRO-01', 'Paronpong'),
('KEC-0062', 'KAB-060', 'PRO-05', 'XIII Koto Kampar'),
('KEC-0063', 'KAB-060', 'PRO-05', 'Tapung Hulu'),
('KEC-0064', 'KAB-060', 'PRO-05', 'Tapung Hilir'),
('KEC-0065', 'KAB-060', 'PRO-05', 'Tapung'),
('KEC-0066', 'KAB-060', 'PRO-05', 'Tambang'),
('KEC-0067', 'KAB-060', 'PRO-05', 'Siak Hulu'),
('KEC-0068', 'KAB-060', 'PRO-05', 'Salo'),
('KEC-0069', 'KAB-060', 'PRO-05', 'Rumbio Jaya'),
('KEC-0070', 'KAB-060', 'PRO-05', 'Perhentian Raja'),
('KEC-0071', 'KAB-060', 'PRO-05', 'Kuok (Bangkinang Barat)'),
('KEC-0072', 'KAB-060', 'PRO-05', 'Koto Kampar Hulu'),
('KEC-0073', 'KAB-060', 'PRO-05', 'Kampar Utara'),
('KEC-0074', 'KAB-060', 'PRO-05', 'Kampar Timur'),
('KEC-0075', 'KAB-060', 'PRO-05', 'Kampar Kiri Tengah'),
('KEC-0076', 'KAB-060', 'PRO-05', 'Kampar Kiri Hulu'),
('KEC-0077', 'KAB-060', 'PRO-05', 'Kampar Kiri Hilir'),
('KEC-0078', 'KAB-060', 'PRO-05', 'Kampar Kiri'),
('KEC-0079', 'KAB-060', 'PRO-05', 'Kampar'),
('KEC-0080', 'KAB-060', 'PRO-05', 'Gunung Sahilan'),
('KEC-0081', 'KAB-060', 'PRO-05', 'Bangkinang Seberang'),
('KEC-0082', 'KAB-060', 'PRO-05', 'Bangkinang');

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
  `provinsi` varchar(6) DEFAULT NULL,
  `kota` varchar(7) DEFAULT NULL,
  `kecamatan` varchar(8) DEFAULT NULL,
  `kodepos` int(5) DEFAULT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`nopemesanan`, `namasementara`, `totalbayar`, `kodetransaksi`, `kurirpengiriman`, `metodepembayaran`, `namalengkap`, `alamattujuan`, `nomortelepon`, `email`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `catatan`) VALUES
(1, 'DSmjaAlGPe', 2236520, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'SEhodaFqey', 1340000, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'yaxPLgSGJM', 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'RkaVCWmIrZ', 1566520, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'tuazvKcrUA', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'UBhcxlnPtr', 825000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'aAlWtpCyDJ', 300000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'DgSxMUkfnJ', 1328304, '2719428335', 'sicepat', 'bank', 'blablabla', 'terserah', 'blablabla', 'blabla@gmail.com', 'PRO-03', 'KAB-013', 'KEC-0013', NULL, 'terserah');

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

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(6) NOT NULL,
  `nama_provinsi` varchar(25) NOT NULL,
  `ibukota_prov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `ibukota_prov`) VALUES
('PRO-01', 'DKI Jakarta', 'Jakarta'),
('PRO-02', 'Nanggroe Aceh Darussalam', 'Banda Aceh'),
('PRO-03', 'Sumatera Utara', 'Medan'),
('PRO-04', 'Sumatera Barat', 'Padang'),
('PRO-05', 'Riau', 'Pekanbaru'),
('PRO-06', 'Jambi', 'Jambi'),
('PRO-07', 'Sumatera Selatan', 'Palembang'),
('PRO-08', 'Bengkulu', 'Bengkulu'),
('PRO-09', 'Lampung', 'Bandar Lampung'),
('PRO-10', 'Kepulauan Bangka Belitung', 'Pangkal Pinang'),
('PRO-11', 'Kepulauan Riau', 'Tanjung Pinang'),
('PRO-12', 'Yogyakarta', 'Yogyakarta'),
('PRO-13', 'Jawa Barat', 'Bandung'),
('PRO-14', 'Jawa Tengah', 'Semarang'),
('PRO-15', 'Jawa Timur', 'Surabaya'),
('PRO-16', 'Banten', 'Serang'),
('PRO-17', 'Bali', 'Denpasar'),
('PRO-18', 'Nusa Tenggara Timur', 'Kupang'),
('PRO-19', 'Nusa Tenggara Barat', 'Mataram'),
('PRO-20', 'Kalimantan Barat', 'Pontianak'),
('PRO-21', 'Kalimantan Tengah', 'Palangka Raya'),
('PRO-22', 'Kalimantan Selatan', 'Banjarmasin'),
('PRO-23', 'Kalimantan Timur', 'Samarinda'),
('PRO-24', 'Kalimantan Utara', 'Tanjung Selor'),
('PRO-25', 'Sulawesi Utara', 'Manado'),
('PRO-26', 'Sulawesi Tengah', 'Palu'),
('PRO-27', 'Sulawesi Selatan', 'Makassar'),
('PRO-28', 'Sulawesi Tenggara', 'Kendari'),
('PRO-29', 'Sulawesi Barat', 'Mamuju'),
('PRO-30', 'Gorontalo', 'Gorontalo'),
('PRO-31', 'Maluku', 'Ambon'),
('PRO-32', 'Maluku Utara', 'Sofifi'),
('PRO-33', 'Papua', 'Jayapura'),
('PRO-34', 'Papua Barat', 'Manokwari'),
('PRO-35', 'Sumbawa', 'Nusa Tengggara Barat'),
('PRO-36', 'Papua Selatan', ''),
('PRO-37', 'Papua Tengah', ''),
('PRO-38', 'Papua Barat Daya', ''),
('PRO-39', 'Tapanuli', ''),
('PRO-40', 'Kepulauan Nias', ''),
('PRO-41', 'Kapuas Raya', ''),
('PRO-42', 'Bolang Mogondow Raya', '');

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
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `id_kab` (`id_kab`,`id_prov`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`,`id_kab`,`id_prov`),
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `id_kab` (`id_kab`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`nopemesanan`),
  ADD UNIQUE KEY `kodetransaksi` (`kodetransaksi`),
  ADD KEY `nopemesanan` (`nopemesanan`),
  ADD KEY `provinsi` (`provinsi`,`kota`,`kecamatan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD UNIQUE KEY `kodeproduk` (`kodeproduk`),
  ADD KEY `idproduk` (`idproduk`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idpemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `nopemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kab`) REFERENCES `kabupaten` (`id_kab`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
