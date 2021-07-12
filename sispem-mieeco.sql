-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 02:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispem-mieeco`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanans`
--

CREATE TABLE `detail_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pesanans`
--

INSERT INTO `detail_pesanans` (`id`, `id_menu`, `id_pesanan`, `jumlah`, `catatan`, `jml_harga`, `created_at`, `updated_at`) VALUES
(4, 2, 3, 4, 'asin', 60000, '2020-11-02 10:08:05', '2020-11-02 10:08:05'),
(7, 1, 3, 2, 'pedas', 36000, '2020-11-04 18:05:52', '2020-11-04 18:05:52'),
(8, 23, 4, 1, NULL, 7000, '2020-11-15 12:11:14', '2020-11-15 12:11:14'),
(9, 22, 4, 1, 'ice less', 3000, '2020-11-16 00:38:17', '2020-11-16 00:38:17'),
(10, 2, 5, 2, NULL, 30000, '2020-11-16 06:41:30', '2020-11-16 06:41:30'),
(11, 3, 5, 1, NULL, 16000, '2020-11-16 06:56:39', '2020-11-16 06:56:39'),
(37, 3, 6, 2, NULL, 32000, '2020-11-25 07:16:06', '2020-11-25 07:16:06'),
(39, 24, 7, 1, NULL, 3000, '2020-11-25 08:59:06', '2020-11-25 08:59:06'),
(40, 2, 8, 1, NULL, 15000, '2020-12-13 08:27:09', '2020-12-13 08:27:09'),
(42, 2, 9, 1, NULL, 15000, '2020-12-16 05:23:07', '2020-12-16 05:23:07'),
(43, 23, 10, 1, NULL, 7000, '2020-12-16 05:26:43', '2020-12-16 05:26:43'),
(46, 1, 11, 1, NULL, 18000, '2020-12-17 05:34:00', '2020-12-17 05:34:00'),
(47, 2, 12, 2, NULL, 30000, '2021-01-13 09:37:23', '2021-01-13 09:37:23'),
(48, 22, 12, 2, NULL, 6000, '2021-01-13 09:37:43', '2021-01-13 09:37:43'),
(49, 3, 13, 1, NULL, 16000, '2021-01-13 09:45:17', '2021-01-13 09:45:17'),
(50, 23, 13, 1, NULL, 7000, '2021-01-13 09:45:30', '2021-01-13 09:45:30'),
(51, 2, 14, 1, 'tidak pedas', 15000, '2021-01-20 19:53:02', '2021-01-20 19:53:02'),
(52, 1, 15, 5, NULL, 90000, '2021-05-29 05:48:07', '2021-05-29 05:48:07'),
(54, 2, 16, 2, NULL, 30000, '2021-06-04 04:13:01', '2021-06-04 04:13:01'),
(55, 24, 17, 1, NULL, 3000, '2021-06-04 05:35:39', '2021-06-04 05:35:39'),
(56, 23, 18, 10, NULL, 70000, '2021-06-04 05:48:32', '2021-06-04 05:48:32'),
(57, 2, 19, 10, NULL, 150000, '2021-06-04 06:10:11', '2021-06-04 06:10:11'),
(58, 1, 40, 20, NULL, 360000, '2021-06-04 06:13:49', '2021-06-04 06:13:49'),
(59, 1, 41, 10, 'kuah banyak', 180000, '2021-06-04 06:19:00', '2021-06-04 06:19:00'),
(60, 22, 41, 10, NULL, 30000, '2021-06-04 06:19:45', '2021-06-04 06:19:45'),
(61, 3, 42, 5, NULL, 80000, '2021-06-04 06:22:20', '2021-06-04 06:22:20'),
(62, 23, 42, 2, NULL, 14000, '2021-06-04 06:22:46', '2021-06-04 06:22:46'),
(63, 22, 43, 2, NULL, 6000, '2021-06-04 06:25:19', '2021-06-04 06:25:19'),
(64, 2, 44, 1, 'a', 15000, '2021-06-04 06:29:04', '2021-06-04 06:29:04'),
(65, 27, 48, 1, 'aaa', 10100, '2021-06-04 06:34:42', '2021-06-04 06:34:42'),
(66, 27, 49, 5, 'aa', 50500, '2021-06-04 06:38:38', '2021-06-04 06:38:38'),
(67, 2, 50, 2, NULL, 30000, '2021-06-05 02:01:25', '2021-06-05 02:01:25'),
(68, 23, 50, 2, 'ez', 14000, '2021-06-05 02:13:13', '2021-06-05 02:13:13'),
(69, 24, 51, 2, 'ga dingin', 6000, '2021-06-05 02:16:35', '2021-06-05 02:16:35'),
(70, 3, 51, 2, '1212', 32000, '2021-06-05 02:17:20', '2021-06-05 02:17:20'),
(103, 2, 60, 1, NULL, 15000, '2021-06-23 08:46:32', '2021-06-23 08:46:32'),
(111, 1, 64, 5, 'aaaa', 90000, '2021-06-28 04:14:45', '2021-06-28 04:14:45'),
(112, 22, 64, 5, 'sssss', 15000, '2021-06-28 04:15:01', '2021-06-28 04:15:01'),
(113, 27, 64, 5, 'dddd', 50500, '2021-06-28 04:15:17', '2021-06-28 04:15:17'),
(114, 3, 65, 5, NULL, 80000, '2021-06-30 06:30:17', '2021-06-30 06:30:17'),
(115, 24, 65, 2, NULL, 6000, '2021-06-30 06:30:35', '2021-06-30 06:30:35'),
(116, 22, 65, 3, NULL, 9000, '2021-06-30 06:30:58', '2021-06-30 06:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(30) NOT NULL,
  `nama_menu` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `gambar`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Mie Komplit', '1604063025.jpg', 'Mie + Ati Ampela + Telor Kecap + Bakso + Pangsit', '18000', '2020-10-25 05:56:08', '2020-10-30 06:04:36'),
(2, 'Mie Pangsit Eco', 'mie-pangsit.jpg', 'Mie + Ati Ampela + Telor Kecap + Pangsit', '15000', '2020-10-25 05:56:43', '2020-10-25 05:56:43'),
(3, 'Mie Bakso Eco', 'mie-bakso.jpg', 'Mie + Ati Ampela + Telor Kecap + Bakso', '16000', '2020-10-25 06:31:48', '2020-10-25 06:31:49'),
(22, 'Es Teh Manis', '1604081653.jpeg', 'Teh + Gula + Es', '3000', '2020-10-30 11:14:13', '2020-10-30 11:14:13'),
(23, 'Es Jeruk', '1604081969.jpg', 'Jeruk Peras + Gula + Es', '7000', '2020-10-30 11:19:29', '2020-10-30 11:19:29'),
(24, 'Air Mineral Botol', '1604082282.jpg', 'Air Mineral Botol', '3000', '2020-10-30 11:24:42', '2020-10-30 11:24:42'),
(27, 'ayam', '1611197755.png', 'Mie + Ayam', '10100', '2021-01-20 19:55:55', '2021-01-20 19:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_10_19_180341_create_pesanans_table', 1),
(4, '2020_10_19_181224_create_detail_pesanans_table', 1),
(5, '2020_10_20_173659_create_admins_table', 2),
(7, '2020_11_02_075934_add_catatan_to_pesanans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('axelh@gmail.com', '$2y$10$Wf5bql429HZUn49kx1ihOumfTID/pi/fNlBMFBIVTF0R/jzGayJ9u', '2020-11-30 03:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `jenis`, `icon`) VALUES
(1, 'Dine in', 'dine in_1.png'),
(2, 'Take Away', 'take away_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `bukti_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_bayar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `id_user`, `id_pesanan`, `bukti_foto`, `status_bayar`, `created_at`, `updated_at`) VALUES
(1, 5, 10, '1608206778.jpg', '1', '2020-12-16 05:32:26', '2020-12-28 09:37:52'),
(2, 2, 11, '1624976654.png', '1', '2020-12-17 05:34:01', '2021-06-29 07:24:14'),
(3, 4, 12, NULL, '0', '2021-01-13 09:37:23', '2021-01-13 09:37:23'),
(5, 7, 13, '1610556708.jpg', NULL, '2021-01-13 09:45:17', '2021-01-20 08:20:09'),
(6, 7, 13, NULL, '0', '2021-01-13 09:45:30', '2021-01-13 09:45:30'),
(7, 18, 14, '1611197657.png', '0', '2021-01-20 19:53:02', '2021-01-20 19:54:17'),
(8, 2, 15, NULL, '1', '2021-05-29 05:48:08', '2021-06-12 07:49:18'),
(9, 2, 16, NULL, '1', '2021-06-01 02:30:33', '2021-06-12 07:49:27'),
(10, 2, 16, NULL, '1', '2021-06-04 04:13:01', '2021-06-04 04:13:01'),
(11, 2, 17, NULL, '1', '2021-06-04 05:35:39', '2021-06-12 07:49:34'),
(12, 2, 18, NULL, '1', '2021-06-04 05:48:14', '2021-06-12 07:49:46'),
(13, 2, 19, NULL, '1', '2021-06-04 06:10:11', '2021-06-12 07:49:54'),
(14, 2, 40, NULL, '1', '2021-06-04 06:13:49', '2021-06-12 07:50:14'),
(15, 4, 41, NULL, '0', '2021-06-04 06:19:00', '2021-06-04 06:19:00'),
(16, 4, 41, NULL, '0', '2021-06-04 06:19:45', '2021-06-04 06:19:45'),
(17, 4, 42, NULL, '0', '2021-06-04 06:22:20', '2021-06-04 06:22:20'),
(18, 4, 42, NULL, '0', '2021-06-04 06:22:46', '2021-06-04 06:22:46'),
(19, 4, 43, NULL, '0', '2021-06-04 06:25:19', '2021-06-04 06:25:19'),
(20, 4, 44, NULL, '0', '2021-06-04 06:29:04', '2021-06-04 06:29:04'),
(21, 4, 48, NULL, '0', '2021-06-04 06:34:43', '2021-06-04 06:34:43'),
(22, 2, 49, NULL, '1', '2021-06-04 06:38:39', '2021-06-12 07:50:30'),
(23, 2, 50, NULL, '1', '2021-06-05 02:01:25', '2021-06-12 07:50:42'),
(24, 2, 50, NULL, '1', '2021-06-05 02:13:13', '2021-06-05 02:13:13'),
(25, 2, 51, NULL, '1', '2021-06-05 02:16:35', '2021-06-12 07:50:52'),
(26, 2, 51, NULL, '1', '2021-06-05 02:17:20', '2021-06-05 02:17:20'),
(47, 2, 60, NULL, '0', '2021-06-23 08:47:24', '2021-06-23 08:47:24'),
(48, 2, 64, '1624978741.png', '0', '2021-06-28 04:14:45', '2021-06-29 07:59:01'),
(49, 4, 65, NULL, '0', '2021-06-30 06:30:18', '2021-06-30 06:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` bigint(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `id_user`, `tanggal`, `jam`, `status`, `total`, `id_layanan`, `created_at`, `updated_at`) VALUES
(10, 5, '2020-12-16', NULL, '1', 7000, 1, '2020-12-16 05:26:42', '2020-12-16 05:32:59'),
(11, 2, '2020-12-17', NULL, '1', 18000, 2, '2020-12-17 05:34:00', '2020-12-17 05:35:32'),
(12, 4, '2021-01-13', NULL, '1', 36000, 1, '2021-01-13 09:37:22', '2021-01-13 09:37:58'),
(13, 7, '2021-01-13', NULL, '1', 23000, 2, '2021-01-13 09:45:17', '2021-01-13 09:51:10'),
(14, 18, '2021-01-21', NULL, '1', 15000, 2, '2021-01-20 19:53:02', '2021-01-20 19:53:30'),
(15, 2, '2021-05-29', NULL, '1', 90000, 1, '2021-05-29 05:48:07', '2021-05-29 05:48:20'),
(16, 2, '2021-06-01', NULL, '1', 30000, 1, '2021-06-01 02:30:33', '2021-06-04 04:13:27'),
(17, 2, '2021-06-04', NULL, '1', 3000, 1, '2021-06-04 01:01:36', '2021-06-04 05:36:11'),
(18, 2, '2021-06-04', NULL, '1', 0, 2, '2021-06-04 01:05:25', '2021-06-04 06:07:14'),
(19, 2, '2021-06-04', NULL, '1', 150000, 1, '2021-06-04 01:38:28', '2021-06-04 06:11:56'),
(40, 2, '2021-06-04', NULL, '1', 360000, 2, '2021-06-04 06:13:34', '2021-06-04 06:14:42'),
(41, 4, '2021-06-04', NULL, '1', 210000, 2, '2021-06-04 06:18:03', '2021-06-04 06:20:01'),
(42, 4, '2021-06-04', NULL, '1', 94000, 2, '2021-06-04 06:18:41', '2021-06-04 06:22:57'),
(43, 4, '2021-06-04', NULL, '1', 6000, 2, '2021-06-04 06:19:31', '2021-06-04 06:25:53'),
(44, 4, '2021-06-04', NULL, '1', 15000, 2, '2021-06-04 06:22:00', '2021-06-04 06:30:02'),
(48, 4, '2021-06-04', NULL, '1', 10100, 1, '2021-06-04 06:32:49', '2021-06-04 06:35:28'),
(49, 2, '2021-06-04', NULL, '1', 50500, 1, '2021-06-04 06:38:11', '2021-06-04 06:39:27'),
(50, 2, '2021-06-05', NULL, '1', 44000, 1, '2021-06-05 02:00:25', '2021-06-05 02:15:37'),
(51, 2, '2021-06-05', NULL, '1', 38000, 1, '2021-06-05 02:01:06', '2021-06-05 02:17:35'),
(60, 2, '2021-06-23', NULL, '1', 15000, 1, '2021-06-23 08:40:28', '2021-06-23 04:14:05'),
(64, 2, '2021-06-28', '18:15:00', '1', 155500, 1, '2021-06-28 04:14:22', '2021-06-28 04:15:42'),
(65, 4, '2021-06-30', '19:31:00', '1', 95000, 1, '2021-06-30 06:30:03', '2021-06-30 06:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `tgl_lahir`, `jenkel`, `alamat`, `no_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Axel', 'axel@gmail.com', 'user', '2020-10-19 19:37:55', '123456', '1998-10-06', 'Laki-Laki', 'Puri Indah K-42', '0821289289389', NULL, NULL, NULL),
(2, 'Axel', 'axelh@gmail.com', 'user', NULL, '$2y$10$SOoT/ZXsz76gs4gez0r/YO2Vi939P49T/fS0Icim6kON1CgJUCcDO', '1998-10-06', 'Laki - Laki', 'Purwokerto', '337343423423', 'ViOADnbRspulIlCi54KUeMqtUfEz8bxZIql5CWDOoW5IYf9nEpQka6bZNfxr', '2020-10-20 10:21:58', '2020-11-30 03:34:53'),
(3, 'admin', 'admin@mieeco.com', 'admin', NULL, '$2y$10$SnBxHRWKZJE.xUcrj4NR1u.6kfHiKqAvJkSM/m.1ouZM2MOztT6rC', NULL, NULL, NULL, NULL, NULL, '2020-10-26 08:02:29', '2020-10-26 08:02:29'),
(4, 'adriel', 'adriel@gmail.com', 'user', NULL, '$2y$10$wiCKHRSzfPV36/620Eo8mu9IUSbV0GileHvPwzXBXOnSOz./95oY.', NULL, NULL, NULL, NULL, NULL, '2020-10-26 10:54:36', '2020-10-26 10:54:36'),
(5, 'agus', 'agus@gmail.com', NULL, NULL, '$2y$10$XBHUSU03ll4ilLNeGPV/QO9/l4.4Pi3yhhfkgyMkhMrlOVrEe8o8K', NULL, NULL, NULL, NULL, 'EpisRQ0fBtRrSOBtwCU0PfwfjbPImLozc0NN4NO4f5eTAmsA5bWjaIKQDSJ7', '2020-10-28 00:56:53', '2020-10-28 00:56:53'),
(6, 'dewi', 'dewi@gmail.com', NULL, NULL, '$2y$10$slhT5LThoEtI6Oxl2LZBu.gzBbj7X1nUHtUIQAPe2be.ERW1yBLkG', NULL, NULL, NULL, NULL, NULL, '2020-10-28 01:36:07', '2020-10-28 01:36:07'),
(7, 'dono', 'dono@gmail.com', NULL, NULL, '$2y$10$w50TVgIHsPS3HysyVfzqO.jFtduGyvhUs14fs9SsexQY57yB27AxO', NULL, NULL, NULL, NULL, NULL, '2020-11-04 11:27:23', '2020-11-04 11:27:23'),
(8, 'kezia', 'kezia@gmail.com', NULL, NULL, '$2y$10$.YyMABYtvsX788uSJ23TLuBpgPOblosEn2/qn3MWOoGdoCMs8d24e', NULL, NULL, NULL, NULL, NULL, '2020-11-09 04:04:21', '2020-11-09 04:04:21'),
(9, 'unyu', 'unyu@gmail.com', NULL, NULL, '$2y$10$2M75e6MHoHZJ46KfM0GdfOq8RUqvDJyt0yxccyzIoZl0iwonVgNPq', NULL, NULL, NULL, NULL, NULL, '2020-11-10 07:42:08', '2020-11-10 07:42:08'),
(10, 'unyuin', 'unyuin@gmail.com', NULL, NULL, '$2y$10$BCZLCXjlXVvy/MQSk.fLTOoTlbyF61UqNRE9bUAoETfqGgWzPJA92', NULL, NULL, NULL, '082147547747', NULL, '2020-11-10 07:46:37', '2020-11-10 07:46:37'),
(11, 'unyu2', 'unyu2@gmail.com', NULL, NULL, '$2y$10$loMKAUgAsJP4HP/Y/nTNUuG1neFS0ElkTsNEhAWSO6yM2AaWkCrVO', NULL, 'Laki - Laki', NULL, '038493849334', NULL, '2020-11-10 08:59:36', '2020-11-10 08:59:36'),
(12, 'unyu3', 'unyu3@gmail.com', NULL, NULL, '$2y$10$0Xx81o4IeudfMEzuZ0TCMujSG/muphwwQXlBmgnqCs9vkSigmNe96', NULL, 'Perempuan', NULL, '0839843433', NULL, '2020-11-10 09:00:39', '2020-11-10 09:00:39'),
(13, 'jimny', 'jimny@gmail.com', NULL, NULL, '$2y$10$xYHZqW9sgxtZX0et5uj2puz7uRaXn1HTtL.84DhC0rg.6AR6nWIam', NULL, 'Laki - Laki', NULL, '04484843742', NULL, '2020-11-10 09:31:58', '2020-11-10 09:31:58'),
(14, 'aman', 'aman@gmail.com', NULL, NULL, '$2y$10$U/2hqmgXpJVvJzedvKKosO./lZTCld3xnMLsncPT66/OMIbxYbtt.', NULL, 'Laki - Laki', NULL, '0989489343', NULL, '2020-11-11 03:22:10', '2020-11-11 03:22:10'),
(15, 'aman1', 'aman1@gmail.com', NULL, NULL, '$2y$10$3SZ5cSCiW1dsV4lTw8QN7eebqNVplvjWsGhm725mZAxx6Isq2iPs6', NULL, 'Laki - Laki', NULL, '08984599898', NULL, '2020-11-11 03:33:42', '2020-11-11 03:33:42'),
(16, 'user', 'user@gmail.com', NULL, NULL, '$2y$10$ekQ9XuWno3PBHjh.cM/TPe7rueSRY4eVixljQzjPYUhUkQMomaXEG', '1999-10-06', 'Laki - Laki', NULL, '03984984349', NULL, '2020-11-11 03:45:38', '2020-11-11 03:45:38'),
(17, 'pradana', 'pradana@gmail.com', NULL, NULL, '$2y$10$dcBJ4pmywKQ4YnhEYPo.oum5BBbwP2H9kw6eKmyMZkQSaapiTc1w.', '2020-12-31', 'Laki - Laki', NULL, '1231232132321', NULL, '2021-01-20 19:29:26', '2021-01-20 19:29:26'),
(18, 'beni', 'beni@gmail.com', NULL, NULL, '$2y$10$cTSouJk.dvLcZO9Ux5zJY.lj2Lk2nH8snxJAg5q66hM4CeG9cA3CG', '2020-12-30', 'Laki - Laki', NULL, '1234567891', NULL, '2021-01-20 19:52:11', '2021-01-20 19:52:11'),
(19, 'Dedy Vandy', 'dedy@gmail.com', NULL, NULL, '$2y$10$svoVhuLW8Qb3gZj37TE/ze6gkxgtboLhD0mvD5ig2FNOx7OyeOvlO', '1998-06-06', 'Laki - Laki', NULL, '43534534535', NULL, '2021-06-29 09:01:48', '2021-06-29 09:01:48'),
(20, 'ridwan', 'ridwan@gmail.com', NULL, NULL, '$2y$10$luSOwVZT6dm7egAnVX7t/eDiER2PF2KdEoDgIUQuhUkUqxYtVXKwe', '1996-06-02', 'Laki - Laki', NULL, '8768726481', NULL, '2021-06-29 22:34:59', '2021-06-29 22:34:59'),
(21, 'ayep', 'ayep@gmail.com', NULL, NULL, '$2y$10$kCAou44EbzuqBe6pTCQjMO7tajEZ9kyDGfHkViW7qpHEAex9A7iSi', '1880-10-17', 'Laki - Laki', NULL, '1234567892', NULL, '2021-06-29 22:47:13', '2021-06-29 22:47:13'),
(22, 'ayes', 'ayes@gmail.com', 'user', NULL, '$2y$10$6gaGpr/WNC.WIvbj4rR6PenPNjpHyY8S8g5tRucWErLtfGglofEUS', '1992-12-08', 'Laki - Laki', NULL, '9485372903', NULL, '2021-06-29 23:13:40', '2021-06-29 23:13:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
