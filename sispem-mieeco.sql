-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 06:48 PM
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
(46, 1, 11, 1, NULL, 18000, '2020-12-17 05:34:00', '2020-12-17 05:34:00');

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
(24, 'Air Mineral Botol', '1604082282.jpg', 'Air Mineral Botol', '3000', '2020-10-30 11:24:42', '2020-10-30 11:24:42');

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
(2, 2, 11, '1608208666.jpeg', NULL, '2020-12-17 05:34:01', '2020-12-28 10:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `id_user`, `tanggal`, `status`, `total`, `created_at`, `updated_at`) VALUES
(10, 5, '2020-12-16', '1', 7000, '2020-12-16 05:26:42', '2020-12-16 05:32:59'),
(11, 2, '2020-12-17', '1', 18000, '2020-12-17 05:34:00', '2020-12-17 05:35:32');

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
  `id` bigint(20) UNSIGNED NOT NULL,
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
(2, 'Axel', 'axelh@gmail.com', 'user', NULL, '$2y$10$SOoT/ZXsz76gs4gez0r/YO2Vi939P49T/fS0Icim6kON1CgJUCcDO', '1998-10-06', 'Laki - Laki', 'Purwokerto', '337343423423', 'LJ4FkSzF8gMWS4yTtewx3svgmzil6P34CP44ARP9wfKSqOBIsDJXHYJHBvy4', '2020-10-20 10:21:58', '2020-11-30 03:34:53'),
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
(16, 'user', 'user@gmail.com', NULL, NULL, '$2y$10$ekQ9XuWno3PBHjh.cM/TPe7rueSRY4eVixljQzjPYUhUkQMomaXEG', '1999-10-06', 'Laki - Laki', NULL, '03984984349', NULL, '2020-11-11 03:45:38', '2020-11-11 03:45:38');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
