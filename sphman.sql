-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 02:04 PM
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
-- Database: `sphman`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id` int(11) NOT NULL,
  `kategory` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alb` float NOT NULL,
  `alp` float NOT NULL,
  `alt` float NOT NULL,
  `ast` float NOT NULL,
  `bil` float NOT NULL,
  `ggt` float NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id`, `kategory`, `umur`, `jenis_kelamin`, `alb`, `alp`, `alt`, `ast`, `bil`, `ggt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Donor darah', 32, 'L', 38.5, 52.5, 7.7, 22.1, 7.5, 12.1, 'Negatif', '2021-11-18 15:31:07', '2021-11-18 08:31:07'),
(2, 'Donor darah', 35, 'P', 38.5, 70.3, 18, 24.7, 3.9, 15.6, 'Negatif', '2022-01-08 12:19:50', '2022-01-08 05:19:50'),
(3, 'Donor darah', 32, 'P', 46.9, 74.7, 36.2, 52.6, 6.1, 33.2, 'Positif', '2022-01-08 12:19:00', '2022-01-08 05:19:00'),
(4, 'Donor darah', 36, 'P', 43.2, 52, 30.6, 22.6, 18.9, 33.8, 'Positif', '2022-01-08 12:20:10', '2022-01-08 05:20:10'),
(5, 'Donor darah', 37, 'L', 39.2, 74.1, 32.6, 24.8, 9.6, 29.9, 'Positif', '2022-01-08 12:20:50', '2022-01-08 05:20:50'),
(6, 'Donor darah', 33, 'L', 41.6, 43.3, 18.5, 19.7, 12.3, 91, 'Negatif', '2022-01-08 12:21:11', '2022-01-08 05:21:11'),
(7, 'Donor darah', 33, 'P', 46.3, 41.3, 17.5, 17.8, 8.5, 16.9, 'Negatif', '2022-01-08 12:21:41', '2022-01-08 05:21:41'),
(8, 'Donor darah', 35, 'L', 42.2, 41.9, 35.8, 31.1, 16.1, 21.5, 'Positif', '2022-01-08 12:22:14', '2022-01-08 05:22:14'),
(9, 'Donor darah', 37, 'L', 50.9, 65.5, 23.2, 21.2, 6.9, 13.7, 'Negatif', '2022-01-08 12:22:47', '2022-01-08 05:22:47'),
(10, 'Donor darah', 38, 'L', 42.4, 86.3, 20.3, 20, 35.2, 15.9, 'Negatif', '2022-01-08 12:23:10', '2022-01-08 05:23:10'),
(11, 'Donor darah', 32, 'L', 40.9, 58.4, 20.1, 26.5, 2.6, 12.7, 'Positif', '2021-12-14 07:59:53', '2021-12-14 07:59:53'),
(12, 'Donor darah', 33, 'L', 46.3, 71.8, 23, 25.2, 11.1, 19.1, 'Negatif', '2022-01-08 12:23:48', '2022-01-08 05:23:48'),
(13, 'Donor darah', 35, 'P', 39.6, 65.9, 64.3, 39.5, 2.8, 24.1, 'Positif', '2022-01-08 12:24:29', '2022-01-08 05:24:29'),
(14, 'Donor darah', 33, 'L', 39.1, 89.4, 15.4, 24.1, 4.1, 12, 'Negatif', '2022-01-08 12:25:01', '2022-01-08 05:25:01'),
(15, 'Donor darah', 36, 'L', 39.3, 59.4, 18.3, 15, 4.8, 12.5, 'Negatif', '2022-01-08 12:28:23', '2022-01-08 05:28:23'),
(16, 'Donor darah', 36, 'L', 46, 58.1, 21.4, 29.3, 6.9, 32.3, 'Positif', '2022-01-08 12:28:49', '2022-01-08 05:28:49'),
(17, 'Donor darah', 35, 'L', 46.4, 64.1, 29.3, 27.6, 13.2, 28.9, 'Positif', '2022-01-08 12:29:12', '2022-01-08 05:29:12'),
(18, 'Donor darah', 32, 'L', 44.3, 71.5, 15.9, 16.3, 7.3, 19.8, 'Negatif', '2021-12-14 08:06:43', '2021-12-14 08:06:43'),
(19, 'Donor darah', 38, 'P', 47.3, 61.7, 17.6, 19.3, 9.9, 13.5, 'Negatif', '2022-01-08 12:29:39', '2022-01-08 05:29:39'),
(20, 'Donor darah', 33, 'P', 41.7, 68.5, 20.6, 16.8, 11.7, 19.3, 'Negatif', '2022-01-08 12:30:00', '2022-01-08 05:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_prediksi`
--

CREATE TABLE `hasil_prediksi` (
  `id_hasil_prediksi` int(11) NOT NULL,
  `alb` float NOT NULL,
  `alp` float NOT NULL,
  `alt` float NOT NULL,
  `ast` float NOT NULL,
  `bil` float NOT NULL,
  `ggt` float NOT NULL,
  `nilai_v` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'rendi01@gmail.com', NULL, '$2y$10$Rhkhalqcwk9NDZeZRqViM.ECsrIlvJEwBL/J8hmcSUawxtAsS7hQq', 'QGvl39SKXVi9KvyRtIWWtXP7Byhb7Qfvk7uGJO0bhL6XttXz8NVa4OEEVFF8', '2021-11-17 07:49:33', '2021-11-17 07:49:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
