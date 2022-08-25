-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2022 at 07:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `risepack`
--

-- --------------------------------------------------------

--
-- Table structure for table `alasan_cancel_order`
--

CREATE TABLE `alasan_cancel_order` (
  `id` int NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alasan_cancel_order`
--

INSERT INTO `alasan_cancel_order` (`id`, `alasan`, `timestamp`) VALUES
(1, 'Harga Tidak Cocok', '2022-07-12 07:59:51'),
(2, 'Dibawah MOQ', '2022-07-12 07:59:58'),
(3, 'Tidak Menyediakan', '2022-07-12 08:00:08'),
(4, 'Lokasi Jauh', '2022-07-12 08:00:14'),
(5, 'Bukan Decision Maker', '2022-07-12 08:00:23'),
(6, 'Tidak Respon', '2022-07-12 08:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `instansi_id` int NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `sumber_id` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `nohp`, `instansi_id`, `instansi`, `sumber_id`, `timestamp`) VALUES
(1, 'Ahmad Harki Ramadhan', '087888583949', 4, 'PT Haha Hihi', 0, '2022-07-24 09:02:28'),
(15, 'Ahmad Rahman', '081928343535', 5, 'Universitas Indonesia', 0, '2022-07-24 09:02:35'),
(16, 'Abdan Syakuro', '0822012938753', 1, 'PT Haha Hihi', 0, '2022-07-24 08:06:14'),
(20, 'asdasd', '5646456', 2, 'ASDDSD', 0, '2022-07-26 05:26:34'),
(21, 'Maemunah', '0874358945945', 2, 'Darul Quran Mulia', 0, '2022-07-26 08:16:45'),
(22, 'Maeee', '08091001234', 1, 'HAjt', 0, '2022-08-15 01:38:11'),
(23, 'Andri', '08123123123', 1, 'Banteng Merah', 0, '2022-08-19 02:01:26'),
(24, 'Cindy', '08123123123', 2, 'SDN ', 0, '2022-08-19 02:01:26'),
(25, 'Pak Pedi', '08123123123', 3, 'Kementrian Pertanian', 0, '2022-08-19 02:01:26'),
(26, 'Riandaka', '08123123123', 4, 'Warung Kopi', 0, '2022-08-19 02:01:26'),
(27, 'Edwin', '08123123123', 5, 'Toko Sembako', 0, '2022-08-19 02:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `deal_status`
--

CREATE TABLE `deal_status` (
  `id` int NOT NULL,
  `status` varchar(255) NOT NULL,
  `badge_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deal_status`
--

INSERT INTO `deal_status` (`id`, `status`, `badge_color`) VALUES
(1, 'Follow Up', 'badge-secondary'),
(2, 'Deal', 'badge-light'),
(3, 'Lost', 'badge-secondary');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bahan`
--

CREATE TABLE `jenis_bahan` (
  `id` int NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_bahan`
--

INSERT INTO `jenis_bahan` (`id`, `jenis`, `timestamp`) VALUES
(1, 'Corrugated', '2022-07-26 05:06:10'),
(2, 'Hardbox', '2022-07-26 05:06:16'),
(3, 'Softbox', '2022-07-26 05:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `kode_order` varchar(255) NOT NULL,
  `kode` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` int NOT NULL,
  `sumber_id` int DEFAULT NULL,
  `kontrak` date DEFAULT NULL,
  `pic_id` int DEFAULT NULL,
  `customer_id` int NOT NULL,
  `deal_status_id` int DEFAULT NULL,
  `order_status_id` int DEFAULT NULL,
  `price` int NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `kode_order`, `kode`, `tanggal`, `bulan`, `sumber_id`, `kontrak`, `pic_id`, `customer_id`, `deal_status_id`, `order_status_id`, `price`, `timestmp`) VALUES
(10, '01/514/2607/001', 1, '2022-07-26', 7, 1, '2022-07-06', 1, 16, 1, 2, 0, '2022-07-26 09:37:44'),
(11, '04/514/2207/002', 2, '2022-07-22', 7, 2, '2022-07-08', 1, 1, 2, 4, 0, '2022-07-26 09:37:47'),
(12, '02/514/1507/003', 3, '2022-07-15', 7, 4, '2022-07-07', 1, 15, 2, 4, 0, '2022-07-26 09:37:50'),
(13, '02/514/2207/004', 4, '2022-07-22', 7, 4, '2022-07-13', 1, 15, 2, 3, 0, '2022-07-26 09:37:53'),
(14, '03/514/1307/005', 5, '2022-07-13', 7, 5, '2022-07-09', 1, 16, 1, 2, 0, '2022-07-26 09:37:55'),
(15, '03/514/2107/006', 6, '2022-07-21', 7, 5, '2022-07-06', 1, 16, 2, 4, 0, '2022-07-26 09:37:59'),
(16, '01/514/1608/007', 7, '2022-08-16', 8, 1, '2022-08-04', 1, 22, 1, 2, 0, '2022-08-15 01:42:10'),
(17, '02/514/0908/008', 8, '2022-08-09', 8, 4, '2022-08-09', 1, 16, 1, 2, 0, '2022-08-15 01:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int NOT NULL,
  `deal_status_id` int NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `badge_color` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `deal_status_id`, `keterangan`, `badge_color`, `timestamp`) VALUES
(1, 3, 'Alasannya', 'badge-light', '2022-07-20 11:15:46'),
(2, 1, 'Grading Konsumen - Bronze', 'badge-secondary', '2022-07-26 13:47:49'),
(3, 2, 'Desain', 'badge-light', '2022-07-20 11:15:40'),
(4, 2, 'Selesai Produksi', 'badge-secondary', '2022-07-20 11:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `nama`, `timestamp`) VALUES
(1, 'Abdan Syakuro', '2022-07-12 07:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int DEFAULT NULL,
  `produk` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `produk`, `timestamp`) VALUES
(1, 1, 'Banner Flexy 280 Std', '2022-07-21 03:00:33'),
(2, 1, 'Banner Flexy 280 Hires', '2022-07-21 03:00:33'),
(3, 1, 'Banner Flexy 340 Hires', '2022-07-21 03:00:33'),
(4, 1, 'Banner Backlite 440', '2022-07-21 03:00:33'),
(5, 1, 'Banner Korea 440 Hires', '2022-07-21 03:00:33'),
(6, 1, 'Roll-Up Banner Flexy 340 Hires Uk.60x160cm', '2022-07-21 03:00:33'),
(7, 1, 'Roll-Up Banner Korea 440 Hires Uk.60x160cm', '2022-07-21 03:00:33'),
(8, 1, 'Roll-Up Banner Albatross Uk.60x160cm', '2022-07-21 03:00:33'),
(9, 1, 'Roll-Up Banner Korea 440 Hires Uk.85x200cm', '2022-07-21 03:00:33'),
(10, 1, 'X Banner Flexy 280 Hires Uk.60x160cm', '2022-07-21 03:00:33'),
(11, 1, 'X Banner Flexy 340 Hires Uk.60x160cm', '2022-07-21 03:00:33'),
(12, 1, 'X Banner Korea 440 Hires Uk.60x160cm', '2022-07-21 03:00:33'),
(13, 1, 'X Banner Albatross Laminasi Uk.60x160cm', '2022-07-21 03:00:33'),
(14, 1, 'X Banner Flexy 280 Hires Uk.80x180cm', '2022-07-21 03:00:33'),
(15, 1, 'X Banner Albatross Non Laminasi Uk.80x180cm', '2022-07-21 03:00:33'),
(16, 3, 'Art Carton 190', '2022-07-21 03:00:33'),
(17, 3, 'Art Carton 210', '2022-07-21 03:00:33'),
(18, 3, 'Art Carton 230', '2022-07-21 03:00:33'),
(19, 3, 'Art Carton 260', '2022-07-21 03:00:33'),
(20, 3, 'Art Carton 310', '2022-07-21 03:00:33'),
(21, 3, 'Art Paper 120', '2022-07-21 03:00:33'),
(22, 3, 'Art Paper 150', '2022-07-21 03:00:33'),
(23, 3, 'HVS 100', '2022-07-21 03:00:33'),
(24, 3, 'TIK Putih, BW,Concorde, linen', '2022-07-21 03:00:33'),
(25, 3, 'Sticker A3 Kromo', '2022-07-21 03:00:33'),
(26, 3, 'Sticker A3 HVS', '2022-07-21 03:00:33'),
(27, 3, 'Sticker A3 Vinyl Ritrama', '2022-07-21 03:00:33'),
(28, 3, 'Sticker A3 Transparant', '2022-07-21 03:00:33'),
(29, 3, 'Sticker Meteran Duratac', '2022-07-21 03:00:33'),
(30, 3, 'Sticker Meteran Transparant', '2022-07-21 03:00:33'),
(31, 3, 'Sticker Meteran Albatros', '2022-07-21 03:00:33'),
(32, 3, 'Sticker Meteran Luster', '2022-07-21 03:00:33'),
(33, 3, 'Sticker Meteran Vinyl Ritrama', '2022-07-21 03:00:33'),
(34, 3, 'Sticker Meteran Oneway Outdoor', '2022-07-21 03:00:33'),
(35, 3, 'Sticker Meteran Oneway Indoor', '2022-07-21 03:00:33'),
(36, 6, 'Kain TC Lokal', '2022-07-21 03:00:33'),
(37, 6, 'Kain TC Impor', '2022-07-21 03:00:33'),
(38, 6, 'Kain Satin Shifon/Std', '2022-07-21 03:00:33'),
(39, 6, 'Kain Satin Fashion', '2022-07-21 03:00:33'),
(40, 7, 'Mug', '2022-07-21 03:00:33'),
(41, 7, 'Lanyard', '2022-07-21 03:00:33'),
(42, 7, 'Tumblr', '2022-07-21 03:00:33'),
(43, 7, 'E-Money', '2022-07-21 03:00:33'),
(44, 7, 'Flashdisk', '2022-07-21 03:00:33'),
(45, 7, 'Kipas AC 310', '2022-07-21 03:00:33'),
(46, 7, 'Plakat', '2022-07-21 03:00:33'),
(47, 4, 'Packaging Kesehatan', '2022-07-21 03:00:33'),
(48, 4, 'Packaging Kecantikan', '2022-07-21 03:00:33'),
(49, 4, 'Packaging Food & Beverage', '2022-07-21 03:00:33'),
(50, 4, 'Packaging Aksesoris', '2022-07-21 03:00:33'),
(51, 4, 'Packaging Produk', '2022-07-21 03:00:33'),
(52, 4, 'Packaging Corrugated', '2022-07-21 03:00:33'),
(53, 4, 'Packaging Hard Box/Rigid Box', '2022-07-21 03:00:33'),
(54, 4, 'Dummy', '2022-07-21 03:00:33'),
(55, 4, 'Tidak Menyediakan', '2022-07-21 03:00:33'),
(56, 4, 'Tanpa Keterangan', '2022-07-21 03:00:33'),
(57, 5, 'Majalah', '2022-07-21 03:00:33'),
(58, 5, 'Brosur A5', '2022-07-21 03:00:33'),
(59, 5, 'Brosur A4', '2022-07-21 03:00:33'),
(60, 5, 'Kartu Nama AC 260', '2022-07-21 03:00:33'),
(61, 5, 'Kartu Nama Linen', '2022-07-21 03:00:33'),
(62, 5, 'Kartu Nama Concord', '2022-07-21 03:00:33'),
(63, 5, 'Kartu Nama Emboss 3D', '2022-07-21 03:00:33'),
(64, 5, 'ID Card', '2022-07-21 03:00:33'),
(65, 5, 'Paket ID Card', '2022-07-21 03:00:33'),
(66, 5, 'Kalender Dinding (1lbr)', '2022-07-21 03:00:33'),
(67, 5, 'Kalender Dinding (3lbr)', '2022-07-21 03:00:33'),
(68, 5, 'Kalender Dinding (7lbr)', '2022-07-21 03:00:33'),
(69, 5, 'Kalender Meja (8lbr)', '2022-07-21 03:00:33'),
(70, 5, 'Kalender Meja (12lbr)', '2022-07-21 03:00:33'),
(71, 5, 'Compro', '2022-07-21 03:00:33'),
(72, 8, 'Goodiebag Uk.25x35', '2022-07-21 03:00:33'),
(73, 8, 'Goodiebag Uk.30x35', '2022-07-21 03:00:33'),
(74, 8, 'Goodiebag Uk.30x40', '2022-07-21 03:00:33'),
(75, 8, 'Map Folio AC 310', '2022-07-21 03:00:33'),
(76, 8, 'Map Folio AC 260', '2022-07-21 03:00:33'),
(77, 8, 'Amplop HVS Uk. 23x11cm', '2022-07-21 03:00:33'),
(78, 8, 'Amplop Art Paper Folio', '2022-07-21 03:00:33'),
(79, 8, 'Nota NCR Folio', '2022-07-21 03:00:33'),
(80, 8, 'Nota NCR 1/2 Folio', '2022-07-21 03:00:33'),
(81, 8, 'Nota NCR 1/3 Folio', '2022-07-21 03:00:33'),
(82, 8, 'Nota NCR 1/4 Folio', '2022-07-21 03:00:33'),
(83, 8, 'Paperbag', '2022-07-21 03:00:33'),
(84, 9, 'Soft Cover', '2022-07-21 03:00:33'),
(85, 9, 'Hard Cover', '2022-07-21 03:00:33'),
(86, 2, 'Packaging', '2022-07-21 03:00:33'),
(87, 2, 'Non Packaging', '2022-07-21 03:00:33'),
(88, 2, 'Stempel', '2022-07-21 03:00:33'),
(89, 2, 'Jasa Desain', '2022-07-21 03:00:33'),
(90, 2, 'PPN', '2022-07-21 03:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `deadline` date NOT NULL,
  `catatan` text NOT NULL,
  `total_tagihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sisa_tagihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `order_id`, `deadline`, `catatan`, `total_tagihan`, `sisa_tagihan`, `timestamp`) VALUES
(1, 10, '2022-07-20', 'Asd Asd', '200.000', '100.000', '2022-07-26 13:06:42'),
(2, 13, '2022-07-15', '', '2.000.000', '10.000.000', '2022-07-26 13:07:59'),
(3, 11, '2022-07-30', 'asdasd', '10.000.000', '12.000.000', '2022-07-26 13:08:50'),
(4, 11, '2022-07-22', 'Asd Asd', '10.000.000', '12.000.000', '2022-07-26 13:19:32'),
(5, 14, '2022-07-15', 'asdsad', '10.000.000', '12.000.000', '2022-07-26 13:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_progress`
--

CREATE TABLE `produksi_progress` (
  `id` int NOT NULL,
  `produksi_id` int NOT NULL,
  `progress_id` int NOT NULL,
  `harga` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `total` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produksi_progress`
--

INSERT INTO `produksi_progress` (`id`, `produksi_id`, `progress_id`, `harga`, `qty`, `total`, `deskripsi`, `timestamp`) VALUES
(19, 1, 1, '200000', 1, '200000', '', '2022-08-18 07:19:05'),
(20, 1, 2, '2000', 10, '20000', '', '2022-08-18 07:19:44'),
(21, 1, 3, '100000', 1, '100000', '', '2022-08-18 07:19:44'),
(22, 1, 4, '20000', 1, '20000', '', '2022-08-18 07:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id` int NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id`, `kategori`, `timestamp`) VALUES
(1, 'Banner', '2022-07-21 02:46:48'),
(2, 'Custom', '2022-07-21 02:46:56'),
(3, 'Digital Printing', '2022-07-21 02:47:06'),
(4, 'Packaging', '2022-07-21 02:47:19'),
(5, 'Perlengkapan Marketing', '2022-07-21 02:47:32'),
(6, 'Kain', '2022-07-21 02:54:18'),
(7, 'Merchandise', '2022-07-21 02:54:42'),
(8, 'Perlengkapan Usaha', '2022-07-21 02:58:05'),
(9, 'Undangan', '2022-07-21 02:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `progress_produksi`
--

CREATE TABLE `progress_produksi` (
  `id` int NOT NULL,
  `progress` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `progress_produksi`
--

INSERT INTO `progress_produksi` (`id`, `progress`, `timestamp`) VALUES
(1, 'Persiapan bahan baku', '2022-08-15 01:22:22'),
(2, 'Cetak', '2022-08-15 01:22:22'),
(3, 'Laminasi', '2022-08-15 01:22:38'),
(4, 'Poly', '2022-08-15 01:22:38'),
(5, 'Emboss', '2022-08-15 01:22:53'),
(6, 'Spot UV', '2022-08-15 01:22:53'),
(7, 'Jendela Mika', '2022-08-15 01:23:11'),
(8, 'Pond', '2022-08-15 01:23:11'),
(9, 'Finishing', '2022-08-15 01:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id` int NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id`, `sumber`, `kode`, `timestamp`) VALUES
(1, 'Online', '01', '2022-07-13 07:09:14'),
(2, 'Repeat Order', '04', '2022-07-13 07:10:00'),
(3, 'Relasi Customer', '05', '2022-07-13 07:10:37'),
(4, 'Offline', '02', '2022-07-13 07:09:20'),
(5, 'Relasi Karyawan', '03', '2022-07-13 07:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_instansi`
--

CREATE TABLE `tipe_instansi` (
  `id` int NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tipe_instansi`
--

INSERT INTO `tipe_instansi` (`id`, `instansi`, `timestamp`) VALUES
(1, 'Komunitas', '2022-07-12 08:13:08'),
(2, 'Lembaga Pendidikan', '2022-07-12 08:13:14'),
(3, 'Pemerintahan', '2022-07-12 08:13:20'),
(4, 'Perseorangan/UMKM', '2022-07-12 08:13:26'),
(5, 'Swasta', '2022-07-12 08:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `pic_id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pic_id`, `email`, `password`, `role`, `timestamp`) VALUES
(1, 1, 'asd@asd.com', '202cb962ac59075b964b07152d234b70', 1, '2022-07-26 06:46:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alasan_cancel_order`
--
ALTER TABLE `alasan_cancel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal_status`
--
ALTER TABLE `deal_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_bahan`
--
ALTER TABLE `jenis_bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi_progress`
--
ALTER TABLE `produksi_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress_produksi`
--
ALTER TABLE `progress_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_instansi`
--
ALTER TABLE `tipe_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alasan_cancel_order`
--
ALTER TABLE `alasan_cancel_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `deal_status`
--
ALTER TABLE `deal_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_bahan`
--
ALTER TABLE `jenis_bahan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produksi_progress`
--
ALTER TABLE `produksi_progress`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `progress_produksi`
--
ALTER TABLE `progress_produksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe_instansi`
--
ALTER TABLE `tipe_instansi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
