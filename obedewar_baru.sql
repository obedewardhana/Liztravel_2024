-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2024 at 02:01 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obedewar_liztravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `displayon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `displayon`) VALUES
(1, 'snapedit_1710901449998-min.png', 'Tempat wisata'),
(2, 'img-Kgk4xaVvwqtXsJ453VBm0-min.png', 'Penginapan'),
(3, 'snapedit_1710906718809_(1).png', 'Taxi/Cargo'),
(4, '8053d3b8cf70524ac132f35b8f19d8e780e9b9a7.png', 'Rent car');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `addressbranch` text NOT NULL,
  `whatsappbranch` varchar(13) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `address`, `addressbranch`, `whatsappbranch`, `logo`, `email`, `whatsapp`, `facebook`, `instagram`, `youtube`, `video`) VALUES
(1, 'LIZRENTCAR', 'Jalan Firdaus Depan BPJS Kesehatan, Singkawang', 'Jalan A. Yani, Pontianak', '6285388166616', 'logo_transparan_-_Copy.png', 'missingpeaceagency@gmail.com', '6281347132237', '#', 'https://www.instagram.com/lizrentcar', '#', '914c5bf439f5a613d102134b9e069aac.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `moduls` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `role`, `moduls`, `created_by`) VALUES
(393, 1, 1, 19),
(394, 1, 2, 19),
(395, 1, 3, 19),
(738, 1, 4, 19),
(741, 1, 5, 19),
(742, 1, 6, 19),
(784, 1, 7, 19),
(795, 1, 8, 19),
(820, 2, 4, 19),
(821, 2, 5, 19),
(822, 2, 6, 19),
(823, 2, 7, 19);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `eksemplar` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moduls`
--

CREATE TABLE `moduls` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moduls`
--

INSERT INTO `moduls` (`id`, `title`, `urutan`) VALUES
(1, 'Users', 1),
(2, 'Role', 2),
(3, 'General Settings', 3),
(4, 'Products', 4),
(5, 'Partners', 5),
(6, 'Partnership', 6),
(7, 'Banners', 7),
(8, 'Orders', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `handphone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `dateorder` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `service`, `name`, `handphone`, `location`, `startdate`, `enddate`, `starttime`, `endtime`, `status`, `dateorder`) VALUES
(54, 1, 'asfasf', '32325325', 'Pontianak', '2024-03-14', '2024-03-12', '00:30:00', '01:30:00', 'Waiting list', '2024-03-17 05:08:34'),
(55, 1, 'asfasf', '32325325', 'Pontianak', '2024-03-14', '2024-03-12', '00:30:00', '01:30:00', 'Waiting list', '2024-03-17 05:09:46'),
(56, 7, 'asfasfasf', '5325235', 'Pontianak', '2024-03-05', '2024-03-26', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 05:10:12'),
(57, 1, 'asfasfa', '35235', 'Singkawang', '2024-03-06', '2024-03-28', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 05:12:53'),
(58, 1, 'obi', '085163136631', 'Singkawang', '2024-03-05', '2024-03-28', '01:30:00', '01:30:00', 'Waiting list', '2024-03-17 05:15:41'),
(59, 2, 'dgsdgsdg', '325325325', 'Pontianak', '2024-03-14', '2024-03-14', '09:30:00', '07:00:00', 'Waiting list', '2024-03-17 05:19:23'),
(60, 6, '212', '212', 'Singkawang', '2024-03-21', '2024-03-22', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 05:22:20'),
(61, 1, 'wetwet', '123124', 'Pontianak', '2024-03-13', '2024-03-21', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 05:24:37'),
(62, 1, 'safasf', '1241421', 'Singkawang', '2024-03-27', '2024-03-21', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:25:57'),
(63, 1, 'asfsaf', '124214214', 'Pontianak', '2024-03-27', '2024-03-27', '00:30:00', '00:30:00', 'Waiting list', '2024-03-17 05:33:24'),
(64, 2, 'mayau', '0895393342378', 'Singkawang', '2024-03-06', '2024-03-20', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:35:53'),
(65, 6, 'tes', '085155039883', 'Singkawang', '2024-03-07', '2024-03-27', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:40:36'),
(66, 2, 'assafasf', '124124124124', 'Pontianak', '2024-03-26', '2024-03-22', '01:30:00', '01:30:00', 'Paid', '2024-03-17 05:43:08'),
(67, 2, 'obet', '08123912399', 'Pontianak', '2024-03-20', '2024-03-28', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:47:05'),
(68, 6, 'tes', '085155039883', 'Pontianak', '2024-03-21', '2024-03-27', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:49:16'),
(69, 1, 'tes', '085155039883', 'Pontianak', '2024-03-05', '2024-04-03', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:50:18'),
(70, 2, 'mayau', '0895393342378', 'Pontianak', '2024-03-26', '2024-03-19', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 05:52:31'),
(71, 2, 'obeth wardhana', '085155039883', 'Pontianak', '2024-03-21', '2024-03-28', '01:00:00', '01:30:00', 'Waiting list', '2024-03-17 05:56:19'),
(72, 2, 'obeth wardhana', '085155039883', 'Singkawang', '2024-03-13', '2024-03-15', '01:30:00', '12:30:00', 'Waiting list', '2024-03-17 05:57:55'),
(73, 8, 'obeth wardhana', '0895393342378', 'Pontianak', '2024-03-20', '2024-03-29', '01:30:00', '01:30:00', 'Waiting list', '2024-03-17 05:59:55'),
(74, 6, 'mitha', '0895393342378', 'Pontianak', '2024-03-13', '2024-03-21', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 06:01:22'),
(75, 2, 'obito', '089609188148', 'Singkawang', '2024-03-20', '2024-03-20', '01:30:00', '01:30:00', 'Waiting list', '2024-03-17 06:02:46'),
(76, 7, 'tes', '085155039883', 'Singkawang', '2024-03-20', '2024-03-27', '01:00:00', '07:00:00', 'Waiting list', '2024-03-17 06:06:44'),
(77, 8, 'afasfsaf', '081291291291', 'Pontianak', '2024-03-20', '2024-03-14', '01:00:00', '10:00:00', 'Waiting list', '2024-03-17 06:08:47'),
(78, 1, 'tes', '085155039883', 'Pontianak', '2024-03-13', '2024-03-27', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 06:10:14'),
(79, 6, 'asfasf', '1221445235', 'Pontianak', '2024-03-20', '2024-03-21', '01:30:00', '01:30:00', 'Waiting list', '2024-03-17 06:33:40'),
(80, 2, 'sfsdgsdg', '32532532', 'Singkawang', '2024-03-28', '2024-03-27', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 07:03:19'),
(81, 10, 'tes', '346436436', 'Singkawang', '2024-04-03', '2024-03-28', '02:30:00', '09:30:00', 'Waiting list', '2024-03-17 07:30:31'),
(82, 11, 'asdasfasf', '085163136631', 'Pontianak', '2024-03-27', '2024-03-27', '01:00:00', '01:30:00', 'Waiting list', '2024-03-17 07:38:44'),
(83, 4, 'tes', '089609188148', 'Pontianak', '2024-03-12', '2024-03-19', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 07:39:24'),
(84, 10, 'tes', '089609188148', 'Pontianak', '2024-03-26', '2024-03-22', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 07:40:54'),
(85, 2, 'tes', '085155039883', 'Singkawang', '2024-03-13', '2024-03-08', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:42:05'),
(86, 2, 'obet', '082138555528', 'Singkawang', '2024-03-27', '2024-03-11', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:43:17'),
(87, 2, 'tes', '082138555528', 'Singkawang', '2024-03-20', '2024-03-13', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:44:55'),
(88, 7, 'tes', '081222333463', 'Singkawang', '2024-03-07', '2024-03-27', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:45:57'),
(89, 2, 'tes', '081222333463', 'Singkawang', '2024-03-13', '2024-03-20', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 07:48:31'),
(90, 9, 'tes', '085155039883', 'Pontianak', '2024-03-26', '2024-03-12', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:50:19'),
(91, 4, 'tes', '0895393342378', 'Pontianak', '2024-03-20', '2024-03-27', '01:00:00', '00:30:00', 'Waiting list', '2024-03-17 07:51:34'),
(92, 3, 'mayau', '0895393342378', 'Pontianak', '2024-03-12', '2024-03-27', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 08:02:05'),
(93, 2, 'tes', '082138555528', 'Singkawang', '2024-03-21', '2024-03-19', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 08:04:43'),
(94, 6, 'mayau', '0895393342378', 'Singkawang', '2024-03-20', '2024-03-14', '00:30:00', '01:00:00', 'Waiting list', '2024-03-17 08:07:28'),
(95, 2, 'dsgsdgds', '0895393342378', 'Singkawang', '2024-03-21', '2024-03-20', '01:30:00', '01:00:00', 'Waiting list', '2024-03-17 08:09:24'),
(96, 2, 'tes', '082138555528', 'Pontianak', '2024-03-19', '2024-03-20', '01:00:00', '01:30:00', 'Waiting list', '2024-03-17 08:12:38'),
(97, 2, 'tes', '082138555528', 'Singkawang', '2024-03-20', '2024-03-19', '01:00:00', '01:00:00', 'Waiting list', '2024-03-17 08:16:14'),
(98, 11, 'tes', '0812913123', 'Pontianak', '2024-03-21', '2024-03-15', '02:30:00', '01:30:00', 'Waiting list', '2024-03-17 13:36:51'),
(99, 2, 'indigo', '08124936226', 'Singkawang', '2024-03-06', '2024-03-13', '04:00:00', '07:00:00', 'Waiting list', '2024-03-17 13:55:40'),
(100, 10, 'tes', '085163136631', 'Singkawang', '2024-03-19', '2024-03-12', '01:30:00', '01:00:00', 'Waiting list', '2024-03-18 05:42:54'),
(101, 5, 'asfasf', '325235', 'Pontianak', '2024-03-13', '2024-03-20', '10:30:00', '15:30:00', 'Waiting list', '2024-03-19 05:43:33'),
(102, 10, 'hkjhkjh', '89798798798', 'Singkawang', '2024-03-21', '2024-03-20', '01:30:00', '10:00:00', 'Paid', '2024-03-20 05:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `logo`, `nama`) VALUES
(28, 'New-Project-5.png', 'Disdaginkopukm Kota Singkawang'),
(29, 'Bank_Mandiri_logo_2016_svg.png', 'Bank Mandiri'),
(30, 'DAAI_TV_Jakarta.png', 'DAAI TV'),
(31, 'download_(3).png', 'Citra Feed'),
(32, 'download_(4).png', 'Kominfo'),
(33, 'download_(5).png', 'Download'),
(34, 'Harent.png', 'Hartono Rent Car'),
(35, 'Lambang_KotaSingkawang.png', 'Kota Singkawang'),
(36, 'LOGO_KEMENPAREKRAF_(BAPAREKRAF)-min.png', 'Kemenparekraf/Baparekraf Republik Indonesia'),
(37, 'smartfren-ok.jpg', 'Smartfren');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no` varchar(13) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`id`, `name`, `no`, `type`, `date`) VALUES
(7, 'tes', '08129239123', 'Agen kota', '2024-03-18 05:55:25'),
(8, 'bagas', '0812912912214', 'Agen kota', '2024-03-18 06:15:13'),
(14, 'lukas', '0812391239123', 'Agen kota', '2024-03-19 05:27:37'),
(15, 'bagas', '0812912912214', 'Titip unit', '2024-03-19 06:54:53'),
(16, 'lili', '0812912912214', 'Agen kota', '2024-03-19 07:06:48'),
(17, 'lukas', '0812391239123', 'Titip unit', '2024-03-19 07:29:40'),
(18, 'Nilam', 'Mercier', 'Agen kota', '2024-03-19 09:20:07'),
(19, 'bagas', '0812391239123', 'Agen kota', '2024-03-19 16:43:34'),
(20, 'bagas', '0812391239123', 'Agen kota', '2024-03-19 16:43:39'),
(21, 'lukas', '0812912912214', 'Agen kota', '2024-03-20 06:12:52'),
(22, 'lukas', '0812912912214', 'Agen kota', '2024-03-20 11:40:19'),
(23, 'bagas', '0812391239123', 'Agen kota', '2024-03-21 01:45:09'),
(24, 'lukas', '0812391239123', 'Agen kota', '2024-03-21 03:45:12'),
(25, 'lukas', '0812391239123', 'Agen kota', '2024-03-21 03:45:17'),
(26, 'lukasf', '0812391239123', 'Agen kota', '2024-03-21 03:45:26'),
(27, 'bagas', '0812912912214', 'Titip unit', '2024-03-21 04:06:42'),
(28, 'bagas', '0812912912214', 'Agen kota', '2024-03-21 04:44:42'),
(29, 'bagas', '0812912912214', 'Agen kota', '2024-03-21 04:44:52'),
(30, 'bagas', '0812912912214', 'Agen kota', '2024-03-21 04:44:52'),
(31, 'bagas', '0812912912214', 'Agen kota', '2024-03-21 04:44:53'),
(32, 'bagas', '0812912912214', 'Agen kota', '2024-03-21 04:44:54'),
(33, 'bagasrf', '0812912912214', 'Titip unit', '2024-03-21 04:45:09'),
(34, 'tes', '0812391239123', 'Agen kota', '2024-03-21 04:47:09'),
(35, 'tes', '0812391239123', 'Agen kota', '2024-03-21 04:50:29'),
(36, 'bagasrf', '0812912912214', 'Agen kota', '2024-03-21 04:52:58'),
(37, 'bagas', '0812912912214', 'Titip unit', '2024-03-21 19:45:11'),
(38, 'bagasrf', '0812912912214', 'Agen kota', '2024-03-22 03:14:23'),
(39, 'ob', '0812787878', 'Agen kota', '2024-03-23 06:32:00'),
(40, 'safasf', '235325', 'Titip unit', '2024-03-25 08:31:12'),
(41, 'adas', '325325', 'Agen kota', '2024-03-27 07:08:47'),
(42, 'asdas', '23325', 'Titip unit', '2024-03-27 11:34:08'),
(43, 'asd', '5235', 'Titip unit', '2024-03-27 12:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `tanggal_pinjam` date DEFAULT current_timestamp(),
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `seat` int(2) NOT NULL,
  `wifi` varchar(100) NOT NULL,
  `hotwater` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `availability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `photo`, `transmission`, `seat`, `wifi`, `hotwater`, `price`, `availability`) VALUES
(1, 'Toyota Veloz', 'Rent car', '2d44073cf08494f938dbf3da2f976231dc8d8cf8.png', 'Manual', 7, 'null', 'null', 300000, 'Tersedia'),
(2, 'Toyota Agya', 'Rent car', 'fb519157c42645e444a24197eddbb2da110cb02b.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(3, 'Toyota Avanza Grand New', 'Rent car', '50762aea9036e6ef578f0233f575fa5c993e0763.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(4, 'Toyota Avanza All New', 'Rent car', '7f2a3310f82c4483a5d9f017c63b6a5bad82b113.png', 'Manual', 7, 'null', 'null', 350000, 'Tersedia'),
(5, 'Toyota Avanza Face Lift', 'Rent car', '8e44d2ebbc96c9be2920748b23cef380b808cd48.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(6, 'Mitsubishi Xpander', 'Rent car', '3b0f2196e92d96b94b0639abb8d3f5178b59d86c.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(7, 'Toyota Rush', 'Rent car', '8053d3b8cf70524ac132f35b8f19d8e780e9b9a7.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(8, 'Toyota Innova Reborn', 'Rent car', '5ad0b718c29f9f7e8c15af57b5533b3d1f119742.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(9, 'Toyota Calya', 'Rent car', '35ed2556e9ed466f36d2f18454b2fdc88987d986.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(10, 'Honda Brio', 'Rent car', 'e9df85ce7d556d17099c3bcda29fc02ac12b3bf1.png', 'Matic', 4, 'null', 'null', 350000, 'Tersedia'),
(11, 'Suzuki Ertiga', 'Rent car', '06763760849e00a15ce6d123d4b960b8c3ca4ca8.png', 'Matic', 7, 'null', 'null', 350000, 'Tersedia'),
(12, 'Toyota Avanza New 2023', 'Rent car', 'e95aca5ba54b2b8494649ad80353668ae1a32025_(1).png', 'Matic', 7, 'null', 'null', 400000, 'Tersedia'),
(13, 'Toyota Innova Reborn', 'Rent car', '07e17c14d283b4f2e9158f52d473c88d92edd95f.png', 'Manual', 7, 'null', 'null', 450000, 'Tersedia'),
(14, 'Taxi A', 'Taxi/Cargo', 'hero.png', 'Matic', 4, 'null', 'null', 20000, 'Tersedia'),
(15, 'Taxi B', 'Taxi/Cargo', 'hero.png', 'Matic', 2, 'null', 'null', 200000, 'Tersedia'),
(16, 'Taxi C', 'Taxi/Cargo', 'hero.png', 'Matic', 4, 'null', 'null', 200000, 'Tersedia'),
(17, 'Double Bed - Akasia Room', 'Penginapan', 'kamar1.png', 'null', 0, 'Ada', 'Tidak ada', 120000, 'Tersedia'),
(18, 'Double Bed - Osaka room', 'Penginapan', 'kamar2.png', 'null', 0, 'Ada', 'Ada', 150000, 'Tersedia'),
(19, 'Trip Pantai Pasir Panjang - Avanza ', 'Tempat wisata', 'img-rrikn6GGPYMipWQRhELQD-min.png', 'Manual', 4, 'null', 'null', 200000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`, `created_by`) VALUES
(1, 'Master', 19),
(2, 'Admin', 19);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `aktif`) VALUES
(1, 'carbook', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `photo`, `role`, `password`, `created_by`) VALUES
(19, 'master', 'master', 'admin@gmail.com', '4107700.png', 1, 'eb0a191797624dd3a48fa681d3061212', 19),
(43, 'valencia', 'Valencia Rahmawan', 'valevale@gmail.com', 'r0WJWwVMeCnHqHt4kCLE--1--zhlqn-removebg-preview.png', 2, '0192023a7bbd73250516f069df18b500', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);

--
-- Indexes for table `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=824;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
