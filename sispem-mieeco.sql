-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 07:41 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanans`
--

CREATE TABLE `detail_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jml_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2020_10_20_173659_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Axel', 'axelh@gmail.com', 'user', NULL, '$2y$10$SOoT/ZXsz76gs4gez0r/YO2Vi939P49T/fS0Icim6kON1CgJUCcDO', NULL, NULL, NULL, NULL, NULL, '2020-10-20 10:21:58', '2020-10-20 10:21:58'),
(3, 'admin', 'admin@mieeco.com', 'admin', NULL, '$2y$10$SnBxHRWKZJE.xUcrj4NR1u.6kfHiKqAvJkSM/m.1ouZM2MOztT6rC', NULL, NULL, NULL, NULL, NULL, '2020-10-26 08:02:29', '2020-10-26 08:02:29'),
(4, 'adriel', 'adriel@gmail.com', 'user', NULL, '$2y$10$wiCKHRSzfPV36/620Eo8mu9IUSbV0GileHvPwzXBXOnSOz./95oY.', NULL, NULL, NULL, NULL, NULL, '2020-10-26 10:54:36', '2020-10-26 10:54:36'),
(5, 'agus', 'agus@gmail.com', NULL, NULL, '$2y$10$XBHUSU03ll4ilLNeGPV/QO9/l4.4Pi3yhhfkgyMkhMrlOVrEe8o8K', NULL, NULL, NULL, NULL, NULL, '2020-10-28 00:56:53', '2020-10-28 00:56:53'),
(6, 'dewi', 'dewi@gmail.com', NULL, NULL, '$2y$10$slhT5LThoEtI6Oxl2LZBu.gzBbj7X1nUHtUIQAPe2be.ERW1yBLkG', NULL, NULL, NULL, NULL, NULL, '2020-10-28 01:36:07', '2020-10-28 01:36:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
