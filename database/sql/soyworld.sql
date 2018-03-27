-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2018 at 11:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `onfarm_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `onfarm_id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(3, 5, 'Penanaman benih', 'Penanaman benih \'Penanaman kedelai bulan mei\' sejumlah 4 Kg', '2017-05-21 17:00:00', '2017-10-03 00:45:05', '2017-10-03 00:45:05'),
(7, 5, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(8, 5, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(9, 5, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(10, 5, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(11, 5, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(12, 5, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(13, 5, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(14, 5, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(15, 5, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(16, 5, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(17, 5, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(18, 6, 'Penanaman benih', 'Penanaman benih \'Penanaman kedelai bulan mei\' sejumlah 4 Kg', '2017-05-21 17:00:00', '2017-10-03 00:45:05', '2017-10-03 00:45:05'),
(19, 6, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(20, 6, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(21, 6, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(22, 6, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(23, 6, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(24, 6, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(25, 6, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(26, 6, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(27, 6, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(28, 6, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(29, 6, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(30, 6, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei\' sejumlah 7 Kg', '2017-05-21 17:00:00', '2017-10-04 19:36:19', '2017-10-04 19:36:19'),
(31, 7, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Tukimin\' sejumlah 7 Kg', '2017-05-21 17:00:00', '2017-10-07 23:20:54', '2017-10-07 23:20:54'),
(32, 8, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei subarjo\' sejumlah 5 Kg', '2017-05-21 17:00:00', '2017-10-07 23:29:33', '2017-10-07 23:29:33'),
(33, 9, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei tukiman\' sejumlah 3.5 Kg', '2017-05-21 17:00:00', '2017-10-07 23:50:28', '2017-10-07 23:50:28'),
(34, 10, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei jumiyo\' sejumlah 3 Kg', '2017-05-21 17:00:00', '2017-10-07 23:58:59', '2017-10-07 23:58:59'),
(35, 11, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei sutrisno\' sejumlah 3 Kg', '2017-05-21 17:00:00', '2017-10-08 01:07:01', '2017-10-08 01:07:01'),
(36, 12, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Dwi lestari\' sejumlah 2.5 Kg', '2017-05-20 17:00:00', '2017-10-08 01:24:52', '2017-10-08 01:24:52'),
(37, 13, 'Penanaman benih', 'Penanaman benih \'Penanaman kedelai bulan Mei Hadi\' sejumlah 3 Kg', '2017-05-22 17:00:00', '2017-10-08 01:54:34', '2017-10-08 01:54:34'),
(38, 14, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei sudi\' sejumlah 5 Kg', '2017-05-21 17:00:00', '2017-10-08 02:06:52', '2017-10-08 02:06:52'),
(39, 15, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Pairin\' sejumlah 1.5 Kg', '2017-05-21 17:00:00', '2017-10-08 02:14:00', '2017-10-08 02:14:00'),
(40, 16, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Suranta\' sejumlah 2 Kg', '2017-05-22 17:00:00', '2017-10-08 03:24:20', '2017-10-08 03:24:20'),
(41, 17, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Paijo\' sejumlah 7 Kg', '2017-05-20 17:00:00', '2017-10-08 03:31:00', '2017-10-08 03:31:00'),
(42, 18, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Poniman\' sejumlah 13 Kg', '2017-05-21 17:00:00', '2017-10-08 03:37:28', '2017-10-08 03:37:28'),
(43, 19, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Jawud\' sejumlah 2.5 Kg', '2017-05-21 17:00:00', '2017-10-08 04:35:03', '2017-10-08 04:35:03'),
(44, 20, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Suwandi\' sejumlah 3.5 Kg', '2017-05-21 17:00:00', '2017-10-08 04:42:41', '2017-10-08 04:42:41'),
(45, 21, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan mei Wakiran\' sejumlah 3 Kg', '2017-05-22 17:00:00', '2017-10-08 05:09:35', '2017-10-08 05:09:35'),
(46, 7, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(47, 7, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(48, 7, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(49, 7, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(50, 7, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(51, 7, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(52, 7, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(53, 7, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(54, 7, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(55, 7, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(56, 7, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(57, 8, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(58, 8, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(59, 8, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(60, 8, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(61, 8, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(62, 8, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(63, 8, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(64, 8, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(65, 8, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(66, 8, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(67, 8, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(68, 9, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(69, 9, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(70, 9, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(71, 9, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(72, 9, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(73, 9, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(74, 9, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(75, 9, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(76, 9, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(77, 9, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(78, 9, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(79, 10, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(80, 10, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(81, 10, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(82, 10, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(83, 10, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(84, 10, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(85, 10, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(86, 10, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(87, 10, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(88, 10, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(89, 10, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(90, 11, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(91, 11, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(92, 11, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(93, 11, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(94, 11, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(95, 11, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(96, 11, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(97, 11, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(98, 11, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(99, 11, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(100, 11, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(101, 12, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(102, 12, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(103, 12, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(104, 12, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(105, 12, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(106, 12, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(107, 12, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(108, 12, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(109, 12, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(110, 12, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(111, 12, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(112, 13, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(113, 13, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(114, 13, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(115, 13, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(116, 13, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(117, 13, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(118, 13, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(119, 13, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(120, 13, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(121, 13, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(122, 13, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(123, 14, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(124, 14, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(125, 14, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(126, 14, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(127, 14, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(128, 14, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(129, 14, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(130, 14, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(131, 14, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(132, 14, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(133, 14, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(134, 15, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(135, 15, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(136, 15, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(137, 15, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(138, 15, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(139, 15, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(140, 15, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(141, 15, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(142, 15, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(143, 15, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(144, 15, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(145, 16, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(146, 16, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(147, 16, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(148, 16, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(149, 16, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(150, 16, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(151, 16, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(152, 16, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(153, 16, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(154, 16, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(155, 16, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(156, 17, 'Membuat saluran drainase', 'Membuat saluran air untuk pengairan', '2017-05-18 17:00:00', '2017-10-03 01:03:37', '2017-10-03 01:03:37'),
(157, 17, 'Pengomposan', 'Pemupukan dengan kompos', '2017-05-21 17:00:00', '2017-10-03 01:04:22', '2017-10-03 01:04:22'),
(158, 17, 'Pendangiran', 'Penyiangan untuk menjaga kelembapan tanah', '2017-06-10 17:00:00', '2017-10-03 01:05:17', '2017-10-03 01:05:48'),
(159, 17, 'Pemupukan dan pengairan', 'Pemupukan NPK, Za, dan pengairan', '2017-06-25 17:00:00', '2017-10-03 01:07:18', '2017-10-03 01:07:18'),
(160, 17, 'Penyiangan', 'Penyiangan dari gulma', '2017-07-10 17:00:00', '2017-10-03 01:10:13', '2017-10-03 01:10:13'),
(161, 17, 'Pemupukan daun', 'Pemupukan daun pertama', '2017-05-31 17:00:00', '2017-10-03 01:11:46', '2017-10-03 01:11:46'),
(162, 17, 'Pemupukan daun', 'Pemupukan daun kedua', '2017-06-10 17:00:00', '2017-10-03 01:13:25', '2017-10-03 01:13:25'),
(163, 17, 'Pemupukan daun', 'Pemupukan daun ke tiga', '2017-06-20 17:00:00', '2017-10-03 01:14:20', '2017-10-03 01:14:20'),
(164, 17, 'Pemupukan daun', 'Pemupukan daun keempat', '2017-06-30 17:00:00', '2017-10-03 01:14:41', '2017-10-03 01:14:41'),
(165, 17, 'Penyemprotan regen', 'penyemprotan untuk daun berlubang', '2017-07-19 17:00:00', '2017-10-03 01:16:53', '2017-10-03 01:16:53'),
(166, 17, 'Penyemprotan regen', 'penyemprotan regen untuk daun berlubang kedua', '2017-08-24 17:00:00', '2017-10-03 01:17:45', '2017-10-03 01:17:45'),
(167, 22, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan maret\' sejumlah 4 Kg', '2018-03-21 17:00:00', '2018-03-21 22:45:49', '2018-03-21 22:45:49'),
(168, 23, 'Penanaman benih', 'Penanaman benih \'Tanam kedelai bulan maret jumiyo\' sejumlah 4 Kg', '2018-03-21 17:00:00', '2018-03-22 21:29:50', '2018-03-22 21:29:50'),
(169, 23, 'Pengairan', NULL, '2018-03-21 17:00:00', '2018-03-22 21:30:14', '2018-03-22 21:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `activity_photos`
--

CREATE TABLE `activity_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_photos`
--

INSERT INTO `activity_photos` (`id`, `activity_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 3, '/uploads/activity/5/hm6csWOWo6GxSjtM5x8J3zP5kgCCSBInL3LOn7zs.jpeg', '2017-10-03 00:45:05', '2017-10-03 00:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `harvests`
--

CREATE TABLE `harvests` (
  `id` int(10) UNSIGNED NOT NULL,
  `onfarm_id` int(10) UNSIGNED NOT NULL,
  `harvested_at` date DEFAULT NULL,
  `initial_stock` double(4,1) DEFAULT NULL,
  `ending_stock` double(4,1) DEFAULT NULL,
  `water_content` decimal(4,2) DEFAULT NULL,
  `on_sale` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `harvests`
--

INSERT INTO `harvests` (`id`, `onfarm_id`, `harvested_at`, `initial_stock`, `ending_stock`, `water_content`, `on_sale`, `created_at`, `updated_at`) VALUES
(4, 5, '2017-08-16', 166.0, 166.0, NULL, 1, '2017-10-03 01:18:45', '2018-03-13 07:58:41'),
(5, 6, '2017-08-16', 291.0, 291.0, NULL, 1, '2017-10-04 19:36:40', '2018-03-13 07:58:41'),
(6, 7, '2017-08-15', 270.0, 270.0, NULL, 1, '2017-10-07 23:21:26', '2018-03-13 07:58:41'),
(7, 8, '2017-08-19', 209.0, 209.0, NULL, 1, '2017-10-07 23:30:17', '2018-03-13 07:58:41'),
(8, 9, '2017-08-15', 145.6, 145.6, NULL, 1, '2017-10-07 23:50:54', '2018-03-13 07:58:41'),
(9, 11, '2017-08-16', 124.8, 124.8, NULL, 1, '2017-10-08 01:09:16', '2018-03-13 07:58:41'),
(10, 12, '2017-08-16', 104.0, 0.0, NULL, 1, '2017-10-08 01:37:38', '2018-03-07 20:12:27'),
(11, 13, '2017-08-16', 124.8, 0.0, NULL, 1, '2017-10-08 01:58:04', '2018-03-07 20:12:27'),
(12, 14, '2017-08-16', 208.0, 0.0, NULL, 1, '2017-10-08 02:08:31', '2018-03-07 20:12:27'),
(13, 15, '2017-08-16', 62.4, 0.0, NULL, 1, '2017-10-08 02:15:50', '2018-03-07 20:12:28'),
(14, 16, '2017-08-17', 83.2, 82.4, NULL, 1, '2017-10-08 03:24:47', '2018-03-07 20:12:28'),
(15, 17, '2017-08-17', 291.0, 291.0, NULL, 1, '2017-10-08 03:31:23', '2018-03-07 20:11:49'),
(16, 18, '2017-08-16', 540.8, 503.8, NULL, 1, '2017-10-08 03:37:48', '2018-03-22 21:20:50'),
(17, 19, '2017-08-16', 104.0, 104.0, NULL, 1, '2017-10-08 04:35:40', '2018-03-07 20:11:49'),
(18, 20, '2017-08-14', 145.6, 145.6, NULL, 1, '2017-10-08 04:42:57', '2018-03-07 20:11:49'),
(19, 21, '2017-08-16', 124.8, 124.8, NULL, 1, '2017-10-08 05:09:48', '2018-03-07 20:11:48'),
(20, 22, '2018-03-22', 100.0, 95.0, NULL, 1, '2018-03-21 22:46:44', '2018-03-21 22:51:04'),
(21, 23, '2018-06-20', 900.0, 865.0, NULL, 1, '2018-03-22 21:31:23', '2018-03-22 21:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `harvest_postharvest`
--

CREATE TABLE `harvest_postharvest` (
  `id` int(10) UNSIGNED NOT NULL,
  `harvest_id` int(10) UNSIGNED NOT NULL,
  `postharvest_id` int(10) UNSIGNED NOT NULL,
  `cost` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `weight_reduction` double(6,4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `harvest_postharvest`
--

INSERT INTO `harvest_postharvest` (`id`, `harvest_id`, `postharvest_id`, `cost`, `date`, `weight_reduction`, `created_at`, `updated_at`) VALUES
(13, 21, 1, 0, '2018-03-01', 20.0000, NULL, NULL),
(14, 20, 1, 0, '2018-03-14', 5.0000, NULL, NULL),
(15, 16, 1, 0, '2018-03-06', 27.0000, NULL, NULL),
(16, 16, 0, 0, '2018-03-14', 10.0000, NULL, NULL),
(18, 21, 0, 0, '2018-03-15', 17.0000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_11_224300_create_privilages_table', 1),
(4, '2017_06_11_224953_create_suppliers_table', 1),
(5, '2017_06_14_212739_create_seeds_table', 1),
(6, '2017_06_14_220842_create_poktans_table', 1),
(7, '2017_06_14_232847_create_onfarms_table', 1),
(8, '2017_06_19_012929_create_activities_table', 1),
(9, '2017_06_19_024307_create_activity_photos_table', 1),
(10, '2017_06_20_141011_create_seed_photos_table', 1),
(11, '2017_06_27_025827_create_onfarm_costs_table', 1),
(12, '2017_08_23_045731_create_harvests_table', 2),
(13, '2017_08_23_143745_create_postharvests_table', 2),
(14, '2017_08_29_131631_create_statuses_table', 3),
(15, '2017_08_29_131659_create_transactions_table', 3),
(16, '2017_08_29_131714_create_transaction_details_table', 3),
(17, '2017_08_29_132647_create_prices_table', 3),
(18, '2017_09_23_032845_create_notifications_table', 4),
(19, '2018_02_23_022251_create_harvest_postharvests_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0655bd78-9e7a-4411-9154-15adf37b5695', 'App\\Notifications\\SoybeanSold', 4, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/10\"}', '2018-02-16 22:36:06', '2018-01-23 09:55:43', '2018-02-16 22:36:06'),
('06fccbf6-c5ea-464b-bb2a-986568df13f7', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #36130218 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/6\"}', '2018-02-28 17:54:26', '2018-02-19 19:30:37', '2018-02-28 17:54:26'),
('07dbe164-0f29-41cb-ab12-81fbaf37b029', 'App\\Notifications\\SoybeanSold', 10, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/2\"}', NULL, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
('09b4d2b6-7269-4dea-84f2-5ceef5a17cef', 'App\\Notifications\\SoybeanSold', 6, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/13\"}', NULL, '2018-01-29 00:45:18', '2018-01-29 00:45:18'),
('1259d553-2a7c-4626-8ebc-4dedb4649c4a', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #31080318 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/1\"}', '2018-03-21 23:10:15', '2018-03-11 19:25:49', '2018-03-21 23:10:15'),
('172fe062-a5ca-4df2-bf3d-c25717b21677', 'App\\Notifications\\SoybeanSold', 9, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/1\"}', NULL, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
('1a2f9332-290b-4de6-87e1-12d09ecaf595', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #31080318 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/1\"}', '2018-03-07 20:38:04', '2018-03-07 20:15:18', '2018-03-07 20:38:04'),
('1a4ecf8a-5fb5-474b-834c-7ac7116894ec', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/23\"}', '2017-10-03 01:40:19', '2017-09-24 01:59:09', '2017-10-03 01:40:19'),
('1c84798b-998c-4270-8392-1210338cce44', 'App\\Notifications\\SoybeanSold', 4, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/5\"}', NULL, '2017-11-15 09:07:02', '2017-11-15 09:07:02'),
('1d31d17b-319c-42f0-a993-ddceca4042ff', 'App\\Notifications\\SoybeanSold', 7, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/9\"}', '2017-11-19 20:00:18', '2017-11-15 21:25:23', '2017-11-19 20:00:18'),
('1d63d53c-a56e-49c1-8fae-90e658dbefa4', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #31091017 dibatalkan\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/1\"}', '2017-10-09 09:17:40', '2017-10-09 09:17:26', '2017-10-09 09:17:40'),
('22eb49ff-b716-40bf-bb99-2203465a5daf', 'App\\Notifications\\SoybeanSold', 5, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/7\"}', '2017-11-17 00:22:25', '2017-11-15 21:25:23', '2017-11-17 00:22:25'),
('314930ba-69a1-4669-8d21-0021d65ffb92', 'App\\Notifications\\SoybeanSold', 11, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/4\"}', NULL, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
('45cf50bf-1a74-4589-b7ba-2b7284597c74', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"buyer\":\"Industri\",\"action\":\"\\/sold\\/18\"}', '2017-09-23 00:21:58', '2017-09-22 23:58:24', '2017-09-23 00:21:58'),
('46553c3a-3bb3-4c26-984a-692b7101e886', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/20\"}', '2017-09-24 01:59:16', '2017-09-24 01:59:09', '2017-09-24 01:59:16'),
('49bd8872-f2f6-4223-9f4b-cf98e86cf173', 'App\\Notifications\\SoybeanSold', 4, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/2\"}', NULL, '2017-10-09 09:13:03', '2017-10-09 09:13:03'),
('4ee2bc9b-1d68-4ccb-a340-14dc829f1317', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/1\"}', '2017-10-09 09:16:15', '2017-10-09 09:13:04', '2017-10-09 09:16:15'),
('51325579-813b-4be6-8002-c750621a6048', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #35290118 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/5\"}', '2018-02-13 08:08:56', '2018-01-29 00:54:22', '2018-02-13 08:08:56'),
('524aa3d7-18f3-4e5a-8759-63553eb8571a', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/21\"}', '2017-09-23 20:47:13', '2017-09-23 09:08:50', '2017-09-23 20:47:13'),
('54105ac4-757e-4ee2-b252-fcd1a6cfd28b', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #36130218 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/6\"}', '2018-02-19 19:27:46', '2018-02-16 07:01:30', '2018-02-19 19:27:46'),
('5a915c5c-6155-47b1-9b18-db72494ac679', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/19\"}', '2017-09-24 01:57:13', '2017-09-24 01:56:50', '2017-09-24 01:57:13'),
('603fcaf0-a231-4664-ad36-83d41a85fc18', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/18\"}', '2017-09-23 09:37:15', '2017-09-23 09:08:50', '2017-09-23 09:37:15'),
('6080d304-d8aa-40bb-ac2b-a25df442097f', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi 319240917 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/19\"}', '2017-09-24 01:57:27', '2017-09-24 01:57:18', '2017-09-24 01:57:27'),
('634a0bff-8e6a-40b6-9690-30de5c41201f', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/3\"}', '2017-11-15 21:25:30', '2017-11-15 21:25:23', '2017-11-15 21:25:30'),
('776608a4-4102-469c-97ab-231caa26e973', 'App\\Notifications\\SoybeanSold', 4, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/6\"}', '2018-02-16 22:36:14', '2017-11-15 21:25:23', '2018-02-16 22:36:14'),
('7eb21fed-ebee-469d-9c93-8659e6d77c1f', 'App\\Notifications\\SoybeanSold', 6, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/15\"}', NULL, '2018-02-19 19:27:56', '2018-02-19 19:27:56'),
('80468dc1-5b12-4306-8c2b-f647772afe43', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi <b>#320240917<\\/b> dibatalkan\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/20\"}', '2017-09-24 01:59:31', '2017-09-24 01:59:21', '2017-09-24 01:59:31'),
('82272a61-cc44-4b70-b423-ae0928830dec', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"buyer\":\"Industri\",\"action\":\"\\/sold\\/16\"}', '2017-09-22 23:55:07', '2017-09-22 23:54:52', '2017-09-22 23:55:07'),
('8b7dbb34-06c3-4cb8-bba3-a199f37d705f', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #34230118 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/4\"}', '2018-01-23 09:58:41', '2018-01-23 09:56:07', '2018-01-23 09:58:41'),
('8fe723a7-b720-4a62-b3c3-e64a4903e655', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/4\"}', NULL, '2017-11-15 09:07:02', '2017-11-15 09:07:02'),
('983748bb-5751-4a03-bddf-200853b7a9db', 'App\\Notifications\\SoybeanSold', 12, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/5\"}', NULL, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
('a5a77f6b-c5f2-4ef5-bcd4-dc46446c217e', 'App\\Notifications\\SoybeanSold', 6, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/8\"}', NULL, '2017-11-15 21:25:23', '2017-11-15 21:25:23'),
('a7cfb0b4-408f-4693-9db7-c7a26c14eac9', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #34230118 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/4\"}', '2018-02-13 09:24:52', '2018-02-13 08:47:33', '2018-02-13 09:24:52'),
('a90e5b45-74f1-4797-8311-7f054b4af0da', 'App\\Notifications\\SoybeanSold', 19, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/3\"}', NULL, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
('a9ad5668-be66-45ab-be5c-1f5841617c1e', 'App\\Notifications\\SoybeanSold', 7, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/16\"}', NULL, '2018-02-19 19:27:56', '2018-02-19 19:27:56'),
('ab412d7f-97a8-498b-b822-e01e391bcff2', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #32151117 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/2\"}', '2017-11-15 20:15:07', '2017-11-15 20:14:41', '2017-11-15 20:15:07'),
('ad3a307d-818f-42b5-af6d-8172feb356b5', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/17\"}', '2017-09-23 00:20:49', '2017-09-23 00:20:40', '2017-09-23 00:20:49'),
('b1677aa9-e583-489c-ae7a-aa905102e3bb', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #35290118 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/5\"}', '2018-02-13 08:08:51', '2018-01-29 00:54:43', '2018-02-13 08:08:51'),
('b2ddfb8c-7665-4e92-ae28-fcec42cf2f12', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #37200218 diproses\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/7\"}', '2018-02-28 17:54:29', '2018-02-19 19:30:10', '2018-02-28 17:54:29'),
('b43c7af6-aead-4d40-99fe-b42b663904e6', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/22\"}', '2017-10-03 01:40:24', '2017-09-24 01:56:50', '2017-10-03 01:40:24'),
('b5483d08-328b-4b0b-9f1e-b45b4fed87cf', 'App\\Notifications\\SoybeanSold', 5, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/12\"}', NULL, '2018-01-29 00:45:18', '2018-01-29 00:45:18'),
('beb471fb-f814-4e9f-b0b8-b9ca025ec9b4', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/20\"}', '2017-09-23 00:21:51', '2017-09-23 00:20:40', '2017-09-23 00:21:51'),
('bebd0bfe-4e54-4d7e-b843-fb4da1db45bf', 'App\\Notifications\\NewTransaction', 14, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/1\"}', '2018-03-13 07:59:12', '2018-03-07 20:12:28', '2018-03-13 07:59:12'),
('c373fe78-5510-45ad-89db-d5932faf6373', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"buyer\":\"Industri\",\"action\":\"\\/sold\\/17\"}', '2017-09-23 00:22:01', '2017-09-22 23:57:02', '2017-09-23 00:22:01'),
('c6b14f51-a28c-4606-a1c9-958862cf7f6e', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #32151117 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/2\"}', '2017-11-15 20:25:48', '2017-11-15 20:18:03', '2017-11-15 20:25:48'),
('c8f29d2d-6b0f-4a11-bb77-dc6aef7c5329', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/19\"}', '2017-09-23 00:21:56', '2017-09-23 00:20:09', '2017-09-23 00:21:56'),
('cb14550f-7a5a-436c-91a4-250b5ad098f3', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #33161117 dibatalkan\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/3\"}', '2017-11-25 06:44:17', '2017-11-15 21:29:26', '2017-11-25 06:44:17'),
('d705cd71-95d9-4f3b-8e57-85935daf771c', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/2\"}', '2017-11-15 09:07:22', '2017-11-15 09:07:02', '2017-11-15 09:07:22'),
('dc84c12a-8894-490f-b59e-6619fc96441b', 'App\\Notifications\\SoybeanSold', 2, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/1\"}', '2017-10-09 09:14:04', '2017-10-09 09:13:03', '2017-10-09 09:14:04'),
('ddcdda0e-7022-4a74-9b4e-de004c40b79b', 'App\\Notifications\\SoybeanSold', 5, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/3\"}', '2017-11-17 00:22:33', '2017-10-09 09:13:03', '2017-11-17 00:22:33'),
('e7da5bea-90c6-4681-88e5-9810d6acb7e9', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi 319240917 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/19\"}', '2017-09-24 01:57:56', '2017-09-24 01:57:50', '2017-09-24 01:57:56'),
('eb075c49-32ca-47a0-b373-a1ffecaa5d2f', 'App\\Notifications\\NewTransaction', 14, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/7\"}', '2018-02-19 19:30:01', '2018-02-19 19:27:56', '2018-02-19 19:30:01'),
('ebbb3b27-b871-4cae-9497-6a4470bae085', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/5\"}', '2018-02-24 08:35:02', '2018-01-29 00:45:18', '2018-02-24 08:35:02'),
('ee2c1f7c-fa74-40ef-9d64-d7695ca483f4', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/4\"}', '2018-01-23 09:55:50', '2018-01-23 09:55:43', '2018-01-23 09:55:50'),
('ee4d4a41-c019-4822-9c82-463e95602b39', 'App\\Notifications\\TransactionConfirmation', 3, 'App\\User', '{\"message\":\"Transaksi #37200218 selesai\",\"icon\":\"fa fa-archive bg-green\",\"action\":\"\\/transaction\\/7\"}', '2018-02-28 17:54:20', '2018-02-19 19:42:45', '2018-02-28 17:54:20'),
('f0881619-8abe-4591-b992-427474f9c73c', 'App\\Notifications\\SoybeanSold', 5, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/11\"}', NULL, '2018-01-23 09:55:43', '2018-01-23 09:55:43'),
('fb5d1d9c-cd3e-4fe9-aeef-488ba7f21d4f', 'App\\Notifications\\NewTransaction', 1, 'App\\User', '{\"message\":\"Pesanan baru\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sales\\/6\"}', '2018-02-24 08:34:58', '2018-02-13 09:23:40', '2018-02-24 08:34:58'),
('fd79c35a-7a41-4e47-83e7-971a9d54dbee', 'App\\Notifications\\SoybeanSold', 6, 'App\\User', '{\"message\":\"Kedelai anda dibeli\",\"icon\":\"fa fa-shopping-cart bg-green\",\"action\":\"\\/sold\\/14\"}', NULL, '2018-02-13 09:23:40', '2018-02-13 09:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `onfarms`
--

CREATE TABLE `onfarms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `area` int(11) DEFAULT NULL,
  `planted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onfarms`
--

INSERT INTO `onfarms` (`id`, `name`, `description`, `user_id`, `area`, `planted_at`, `created_at`, `updated_at`) VALUES
(5, 'Penanaman kedelai bulan mei', NULL, 2, 800, '2017-05-21 17:00:00', '2017-10-03 00:34:29', '2017-10-03 00:45:05'),
(6, 'Tanam kedelai bulan mei', NULL, 4, 1400, '2017-05-21 17:00:00', '2017-10-04 19:30:59', '2017-10-04 19:36:19'),
(7, 'Tanam kedelai bulan mei Tukimin', NULL, 5, 1300, '2017-05-21 17:00:00', '2017-10-04 20:04:03', '2017-10-07 23:20:54'),
(8, 'Tanam kedelai bulan mei subarjo', NULL, 6, 1000, '2017-05-21 17:00:00', '2017-10-07 23:27:38', '2017-10-07 23:29:33'),
(9, 'Tanam kedelai bulan mei tukiman', NULL, 7, 700, '2017-05-21 17:00:00', '2017-10-07 23:34:01', '2017-10-07 23:50:28'),
(10, 'Tanam kedelai bulan mei jumiyo', NULL, 18, 600, '2017-05-21 17:00:00', '2017-10-07 23:56:45', '2017-10-07 23:58:59'),
(11, 'Tanam kedelai bulan mei sutrisno', NULL, 8, 600, '2017-05-21 17:00:00', '2017-10-08 01:05:54', '2017-10-08 01:07:01'),
(12, 'Tanam kedelai bulan mei Dwi lestari', NULL, 9, 500, '2017-05-20 17:00:00', '2017-10-08 01:23:42', '2017-10-08 01:24:52'),
(13, 'Penanaman kedelai bulan Mei Hadi', NULL, 10, 600, '2017-05-22 17:00:00', '2017-10-08 01:52:23', '2017-10-08 01:54:34'),
(14, 'Tanam kedelai bulan mei sudi', NULL, 19, 1000, '2017-05-21 17:00:00', '2017-10-08 02:06:03', '2017-10-08 02:06:52'),
(15, 'Tanam kedelai bulan mei Pairin', NULL, 11, 300, '2017-05-21 17:00:00', '2017-10-08 02:13:05', '2017-10-08 02:14:00'),
(16, 'Tanam kedelai bulan mei Suranta', NULL, 12, 400, '2017-05-22 17:00:00', '2017-10-08 03:11:46', '2017-10-08 03:24:20'),
(17, 'Tanam kedelai bulan mei Paijo', NULL, 13, 1400, '2017-05-20 17:00:00', '2017-10-08 03:28:00', '2017-10-08 03:31:00'),
(18, 'Tanam kedelai bulan mei Poniman', NULL, 14, 2600, '2017-05-21 17:00:00', '2017-10-08 03:34:18', '2017-10-08 03:37:28'),
(19, 'Tanam kedelai bulan mei Jawud', NULL, 15, 500, '2017-05-21 17:00:00', '2017-10-08 04:32:31', '2017-10-08 04:35:03'),
(20, 'Tanam kedelai bulan mei Suwandi', NULL, 16, 700, '2017-05-21 17:00:00', '2017-10-08 04:38:57', '2017-10-08 04:42:41'),
(21, 'Tanam kedelai bulan mei Wakiran', NULL, 17, 600, '2017-05-22 17:00:00', '2017-10-08 05:07:11', '2017-10-08 05:09:35'),
(22, 'Tanam kedelai bulan maret', NULL, 14, 300, '2018-03-21 17:00:00', '2018-03-21 22:44:16', '2018-03-21 22:45:49'),
(23, 'Tanam kedelai bulan maret jumiyo', NULL, 7, 800, '2018-03-21 17:00:00', '2018-03-22 21:28:47', '2018-03-22 21:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `onfarm_costs`
--

CREATE TABLE `onfarm_costs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `onfarm_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onfarm_costs`
--

INSERT INTO `onfarm_costs` (`id`, `name`, `description`, `price`, `onfarm_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 'Biaya pupuk', 'Pupuk Organik 120 Kg, NPK 24 Kg, ZA 8 Kg', 144000, 5, 2, '2017-10-03 00:46:49', '2017-10-03 00:46:49'),
(2, 'Pembelian pupuk', 'Pupuk organik 210 Kg, NPK 42 Kg, Za 14Kg', 252000, 6, 2, '2017-10-04 19:35:39', '2017-10-04 19:35:39'),
(3, 'Pembelian pupuk', 'organik 90 kg\r\nNPK 18 kg\r\nZA 6 kg', 108000, 10, 2, '2017-10-08 00:02:23', '2017-10-08 00:02:23'),
(4, 'Pembelian pupuk', 'organik 90 kg\r\nNPK 18 kg\r\nZA 6 kg', 108000, 10, 2, '2017-10-08 00:03:19', '2017-10-08 00:03:19'),
(5, 'Pembelian pupuk', 'Organik 105 Kg, NPK 21 Kg, Za 7 Kg', 126000, 9, 2, '2017-10-08 00:10:25', '2017-10-08 00:10:25'),
(7, 'Pembelian pupuk', 'Organik 195 Kg, NPK 39 Kg, ZA 13 Kg', 234000, 7, 2, '2017-10-08 00:53:00', '2017-10-08 00:53:00'),
(8, 'Pembelian pupuk', 'organik  150 Kg, NPK 30 Kg, Za 10 Kg', 180000, 8, 1, '2017-10-08 01:00:13', '2017-10-08 01:00:13'),
(9, 'Pembelian pupuk', 'Organik 90 Kg, NPK 18 Kg, ZA 6 Kg', 108000, 11, 2, '2017-10-08 01:08:54', '2017-10-08 01:08:54'),
(10, 'Pembelian pupuk', 'Organik 75 Kg, NPK 15 Kg, Za 5 Kg', 90000, 12, 2, '2017-10-08 01:37:08', '2017-10-08 01:37:08'),
(11, 'Pembelian pupuk', 'Organik 90 Kg, NPK 18 Kg, Za 6 Kg', 108000, 13, 2, '2017-10-08 01:57:11', '2017-10-08 01:57:11'),
(12, 'Pembelian pupuk', 'Organik 150 Kg, NPK 30 Kg, Za 10 Kg', 180000, 14, 2, '2017-10-08 02:08:07', '2017-10-08 02:08:07'),
(13, 'Pembelian pupuk', 'Organik 45 Kg, NPK 9 Kg, ZA 3 Kg', 54000, 15, 2, '2017-10-08 02:15:23', '2017-10-08 02:15:23'),
(14, 'Pembelian pupuk', 'Organik 60 Kg, NPK 12 Kg, Za 4 Kg', 72000, 16, 2, '2017-10-08 03:22:47', '2017-10-08 03:22:47'),
(15, 'Pembelian pupuk', 'Organik 210 Kg, NPK 42 Kg, Za 14 Kg', 252000, 17, 2, '2017-10-08 03:29:40', '2017-10-08 03:29:40'),
(16, 'Pembelian pupuk', 'Organik 390 Kg, NPK 78 Kg, Za 26 KG', 468000, 18, 2, '2017-10-08 03:36:54', '2017-10-08 03:36:54'),
(17, 'Pembelian pupuk', 'Organik 75 Kg, NPK 15 Kg, ZA 5 Kg', 90000, 19, 2, '2017-10-08 04:34:25', '2017-10-08 04:34:25'),
(18, 'Pembelian pupuk', 'Organik 105 Kg, NPK 21 Kg, ZA 7 Kg', 126000, 20, 2, '2017-10-08 04:41:16', '2017-10-08 04:41:16'),
(19, 'Pembelian pupuk', 'Organik 90 Kg, NPK 18 Kg, Za 6 Kg', 108000, 21, 1, '2017-10-08 05:09:15', '2017-10-08 05:09:15'),
(20, 'Beli pupuk', NULL, 18000, 23, 2, '2018-03-22 21:30:47', '2018-03-22 21:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wildan.arrahman@gmail.com', '$2y$10$iTigsm2eLPW9EZD4V4PvwOqmQMKFhuqdn3SxBrzp8qh5lOyFQT4F6', '2017-12-07 00:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `poktans`
--

CREATE TABLE `poktans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leader_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poktans`
--

INSERT INTO `poktans` (`id`, `name`, `address`, `leader_user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tani Makmur', 'Desa Sendoharjo, Kecamatan Prambanan, Sleman', 14, '2017-08-21 17:00:00', '2017-11-15 21:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `postharvests`
--

CREATE TABLE `postharvests` (
  `id` int(10) UNSIGNED NOT NULL,
  `poktan_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reduction_percentage` double(4,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postharvests`
--

INSERT INTO `postharvests` (`id`, `poktan_id`, `name`, `reduction_percentage`, `created_at`, `updated_at`) VALUES
(0, 1, 'Sortasi', 0.02, '2018-02-23 03:08:03', '2018-02-23 03:08:37'),
(1, 1, 'Pengeringan', 0.05, '2018-02-23 03:08:03', '2018-02-23 03:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 8000, '2017-09-01 17:00:00', '2017-09-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `privilages`
--

CREATE TABLE `privilages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_superadmin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privilages`
--

INSERT INTO `privilages` (`id`, `name`, `is_superadmin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, NULL, NULL),
(2, 'petani', 0, NULL, NULL),
(3, 'instansi', 0, NULL, NULL),
(4, 'industri', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `quantity` double(3,1) NOT NULL,
  `price` int(11) NOT NULL,
  `onfarm_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `name`, `supplier_id`, `quantity`, `price`, `onfarm_id`, `created_at`, `updated_at`) VALUES
(4, 'pembelian benih Penanaman kedelai bulan mei', 1, 4.0, 14000, 5, '2017-10-03 00:41:18', '2017-10-03 00:41:18'),
(5, 'pembelian benih Tanam kedelai bulan mei', 1, 7.0, 14000, 6, '2017-10-04 19:31:23', '2017-10-04 19:31:23'),
(6, 'pembelian benih Tanam kedelai bulan mei Tukimin', 2, 6.5, 14000, 7, '2017-10-07 23:19:25', '2017-10-07 23:19:25'),
(7, 'pembelian benih Tanam kedelai bulan mei subarjo', 2, 5.0, 14000, 8, '2017-10-07 23:28:34', '2017-10-07 23:28:34'),
(8, 'pembelian benih Tanam kedelai bulan mei tukiman', 2, 3.5, 14000, 9, '2017-10-07 23:49:33', '2017-10-07 23:49:33'),
(9, 'pembelian benih Tanam kedelai bulan mei jumiyo', 1, 3.0, 14000, 10, '2017-10-07 23:58:24', '2017-10-07 23:58:24'),
(10, 'pembelian benih Tanam kedelai bulan mei sutrisno', 1, 3.0, 14000, 11, '2017-10-08 01:06:16', '2017-10-08 01:06:16'),
(11, 'pembelian benih Tanam kedelai bulan mei Dwi lestari', 2, 2.5, 14000, 12, '2017-10-08 01:24:24', '2017-10-08 01:24:24'),
(12, 'pembelian benih Penanaman kedelai bulan Mei Hadi', 2, 3.0, 14000, 13, '2017-10-08 01:54:01', '2017-10-08 01:54:01'),
(13, 'pembelian benih Tanam kedelai bulan mei sudi', 1, 5.0, 14000, 14, '2017-10-08 02:06:33', '2017-10-08 02:06:33'),
(14, 'pembelian benih Tanam kedelai bulan mei Pairin', 1, 1.5, 14000, 15, '2017-10-08 02:13:31', '2017-10-08 02:13:31'),
(15, 'pembelian benih Tanam kedelai bulan mei Suranta', 2, 2.0, 14000, 16, '2017-10-08 03:14:57', '2017-10-08 03:14:57'),
(16, 'pembelian benih Tanam kedelai bulan mei Paijo', 1, 7.0, 14000, 17, '2017-10-08 03:28:21', '2017-10-08 03:28:21'),
(17, 'pembelian benih Tanam kedelai bulan mei Poniman', 1, 13.0, 14000, 18, '2017-10-08 03:34:39', '2017-10-08 03:34:39'),
(18, 'pembelian benih Tanam kedelai bulan mei Jawud', 1, 2.5, 14000, 19, '2017-10-08 04:32:57', '2017-10-08 04:32:57'),
(19, 'pembelian benih Tanam kedelai bulan mei Suwandi', 1, 3.5, 14000, 20, '2017-10-08 04:39:35', '2017-10-08 04:39:35'),
(20, 'pembelian benih Tanam kedelai bulan mei Wakiran', 1, 3.0, 14000, 21, '2017-10-08 05:07:40', '2017-10-08 05:07:40'),
(21, 'pembelian benih Tanam kedelai bulan maret', 1, 4.0, 8000, 22, '2018-03-21 22:45:25', '2018-03-21 22:45:25'),
(22, 'pembelian benih Tanam kedelai bulan maret jumiyo', 1, 4.0, 7988, 23, '2018-03-22 21:29:32', '2018-03-22 21:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `seed_photos`
--

CREATE TABLE `seed_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seed_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seed_photos`
--

INSERT INTO `seed_photos` (`id`, `seed_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 4, '/uploads/seed/4/thGtejjJoxh4o7xYyN87BGORuzoWzvKWplnuII4a.png', '2017-10-03 00:41:19', '2017-10-03 00:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pending', NULL, NULL),
(2, 'Confirmed', '2017-09-01 17:00:00', '2017-09-01 17:00:00'),
(3, 'Finished', '2017-09-01 17:00:00', '2017-09-01 17:00:00'),
(4, 'Cancelled', '2017-09-01 17:00:00', '2017-09-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `poktan_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `poktan_id`, `name`, `description`, `address`, `contact`, `created_at`, `updated_at`) VALUES
(1, 1, 'Balai benih Gading', 'Supplier benih', 'Gading, Gunung Kidul', '081230622288', '2017-08-22 03:15:55', '2017-08-22 03:15:55'),
(2, 1, 'Balai pupuk', 'Supplier pupuk', 'Yogyakarta', '081230622288', '2017-08-22 03:31:45', '2017-08-22 03:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `poktan_id` int(10) UNSIGNED DEFAULT NULL,
  `delivered_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `code`, `user_id`, `status_id`, `poktan_id`, `delivered_to`, `created_at`, `updated_at`) VALUES
(1, '31080318', 3, 3, 1, 'Yogyakarta', '2018-03-07 20:12:27', '2018-03-11 19:25:49'),
(2, NULL, 3, 1, 1, 'Yogyakarta', '2018-03-21 22:53:00', '2018-03-21 22:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `harvest_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `harvest_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 104, 8000, '2018-03-07 20:12:27', '2018-03-07 20:12:27'),
(2, 1, 11, 125, 8000, '2018-03-07 20:12:27', '2018-03-07 20:12:27'),
(3, 1, 12, 208, 8000, '2018-03-07 20:12:27', '2018-03-07 20:12:27'),
(4, 1, 13, 62, 8000, '2018-03-07 20:12:28', '2018-03-07 20:12:28'),
(5, 1, 14, 1, 8000, '2018-03-07 20:12:28', '2018-03-07 20:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilage_id` int(10) UNSIGNED DEFAULT NULL,
  `poktan_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `address`, `contact`, `password`, `privilage_id`, `poktan_id`, `remember_token`, `is_activated`, `created_at`, `updated_at`) VALUES
(1, 'Wildan', NULL, 'wildan.arrahman@gmail.com', 'Lumajang', '081230622288', '$2y$10$5cfMqB4QNiQZ7nqAde.FKOuUtA0sEwbKg6ypul4xdZpa47FtGXp8e', 1, 1, 'JAC6WxJxbdus0Z37eWseSxZGrNyCPdbjm191vJhPXgMlpFp9oyLQDyuV2Urg', 1, '2017-08-22 02:36:22', '2017-08-22 02:36:22'),
(2, 'Sumarno', NULL, 'sumarno@mail.com', 'Prambanan', '081230622288', '$2y$10$aSxwqELGpQb0viTmDaA0E.W6fCqEieWeUaPjNYe51.WDISOGCWJSW', 2, 1, 'zxHAswDXNrQyX5nKhDBbfVdnMzBqaJ9E13YbuteXU03ewyULr2isQ1tjsK4K', 1, '2017-08-22 03:03:38', '2017-10-03 01:29:04'),
(3, 'Industri', NULL, 'industri@mail.com', 'Yogyakarta', '081230622288', '$2y$10$2grfInhIo2HSRgW16aF.tOL.LjIayZZU0EH7m6yTyATGFqW//YOlW', 4, NULL, 'I2pmkADv3TzNZLLYqe5jTfM6yjY2JEse8urDUgwCo0av7Mrx2I7AFnrfeIDX', 1, '2017-09-01 03:07:11', '2017-09-01 03:28:43'),
(4, 'Jumingan', NULL, 'jumingan@mail.com', 'Prambanan', '081230622288', '$2y$10$3vrm18bywVcSCQavO6G2iuW.G.CpHI7mUGdqSApznj.iCO4oHiL9q', 2, 1, 'NOP1HaNIJp7fO52gY45hFRAsvW0Tp7AlBReS4c18Z617jNeu66l8qov9DgAj', 1, '2017-10-03 01:33:51', '2017-10-04 19:30:38'),
(5, 'Tukimin', NULL, 'tukimin@mail.com', 'Prambanan', '081230622288', '$2y$10$bHqHV9SttmF3rYeZTXrmj.TWbSr2L9KNnacsEQoZiPM/NGpJO8jEq', 2, 1, 'B1OuivO0JWlbtDfeB7cUUDXLHaVFZHotcXnpyHV7Tdn87OZ2FtZdCwXvUMwd', 1, '2017-10-03 01:34:42', '2017-10-03 01:34:42'),
(6, 'subarjo', NULL, 'subarjo@mail.com', 'Prambanan', '081230622288', '$2y$10$F4uQXh.bMKv0YQMqTIU.7eyBkqx82QiSEIfua7EClQ.5cp4vCrHma', 2, 1, 'yvSiwRCMpk0tQEIRd7CMkCAxDj5alvrEfLCKZyfGf2erEdPDDwPAj9I1UolJ', 1, '2017-10-03 01:45:16', '2017-10-03 01:45:16'),
(7, 'Tukiman', NULL, 'tukiman@mail.com', 'Prambanan', '081230622288', '$2y$10$eu.7jANJvec1H0BgiG3AaO72GAXJXiihtwanmk6IN79C5c9DpgTZC', 2, 1, 'dvDk4FDfZmdZIlARmBfWOFi0ZnOgPp57nMgs2g3cURFkTVJ2DboufsjOGcqc', 1, '2017-10-04 19:00:39', '2017-10-04 19:00:39'),
(8, 'Sutrisno', NULL, 'sutrisno@mail.com', 'Prambanan', '081230622288', '$2y$10$on0BQ.OqBhL7QYHTLOYWVOS8LOmAL8luGZiKDNuZiiRzVRZh5OX9W', 2, 1, 'ThrdQEIzvgUhWa8XDNzaQ72LfSCmpViaxAb9lJxEOlCrDeOxfeU1LuFR5vOT', 1, '2017-10-04 19:01:36', '2017-10-04 19:01:36'),
(9, 'Dwi Lestari', NULL, 'dwi.lestari@mail.com', 'Prambanan', '081230622288', '$2y$10$nvn1yA7YZn5/.FhQ53P.3OuoDrVgBircBNiY1PjyYSDjJjoQyX/Jm', 2, 1, 'fCSnAyUxNe4NklzR4cfKoDnZr5GC4wbpec5OgNjmqfLVALiqf1rHQyoo3ngV', 1, '2017-10-04 19:02:31', '2017-10-04 19:07:59'),
(10, 'Hadi sutrisno', NULL, 'hadi.sutrisno@mail.com', 'Prambanan', '081230622288', '$2y$10$.vldLrrp9GlUIgP4BWlil.QRX3U9bN0P.WHcH59cy.akXk2aQl5BW', 2, 1, NULL, 1, '2017-10-04 19:03:23', '2017-10-04 19:03:23'),
(11, 'Pairin', NULL, 'pairin@mail.com', 'Prambanan', '081230622288', '$2y$10$YTGF1DnFiJpjfgL90bB8zuhr4HcIFrrkisZ7LPi6RozE3GHTcRYDe', 2, 1, 'rAY1pD7LJrB3b3Lbw5t4Nm8uk96Qelx7zEfqs5kRGikUnrHTnmL7XicAe65O', 1, '2017-10-04 19:04:08', '2017-10-04 19:04:08'),
(12, 'Suranta', NULL, 'suranta@mail.com', 'Prambanan', '081230622288', '$2y$10$eSlD.zfovcvPbTnYUP7MmeWNQTwKWCtWdXFfTW.pM/cRs/1e7UmNK', 2, 1, NULL, 1, '2017-10-04 19:04:47', '2017-10-04 19:04:47'),
(13, 'Paijo', NULL, 'paijo@mail.com', 'Prambanan', '081230622288', '$2y$10$hwyontwM6rDQxlG2WgfKZOB548qfkxOt97JNcQC6sYC5vqnpZo1AG', 2, 1, NULL, 1, '2017-10-04 19:07:45', '2017-10-04 19:07:45'),
(14, 'Poniman', NULL, 'poniman@mail.com', 'Prambanan', '081230622288', '$2y$10$onxTm6eXGwl7mJ29/ca1qOLJ30ZbpFsJrkCk5UQm.v0lv6ZNxLQIa', 2, 1, 'SUY2tPdS1lLjWz1VTlxZyxiyFWc6X01DztcU7fPV03Zugz7K1maV0V77LHMS', 1, '2017-10-04 19:08:37', '2017-10-04 19:08:37'),
(15, 'Jawud Isnandi', NULL, 'jawud.i@mail.com', 'Prambanan', '081230622288', '$2y$10$1p2mMDxBEeJzKXDXOxyPN..JNX3ic9HNj3ofwtAB./cAXF7BNUdJy', 2, 1, NULL, 1, '2017-10-04 19:09:31', '2017-10-04 19:09:31'),
(16, 'Suwandi', NULL, 'suwandi@mail.com', 'Prambanan', '081230622288', '$2y$10$dv14lXxQ/955yqGNE4ZQ9..JQGU7Bduy8BCc5mLZXOFc3GTtcVWn6', 2, 1, NULL, 1, '2017-10-04 19:10:56', '2017-10-04 19:10:56'),
(17, 'Wakiran', NULL, 'wakiran@mail.com', 'Prambanan', '081230622288', '$2y$10$WgTG93FROBhb9ssei2Xe2Oluh0heQYN8jxKRcGTi2BbJJ3m7TO10q', 2, 1, NULL, 1, '2017-10-04 19:13:35', '2017-10-04 19:13:35'),
(18, 'Jumiyo', NULL, 'jumiyo@mail.com', 'Prambanan', '081230622288', '$2y$10$gkzgjQFQYrljPfpyppDYSuVoJAjza2SObyjDK9NBD7ePq5A3YvTHq', 2, 1, 'YP9bpTzKZc1sev7w2IJpHe4jWE7qJ6fQ11AvL9TPPjhAMMozetpPZxEwQcKk', 1, '2017-10-04 19:14:14', '2017-10-04 19:14:14'),
(19, 'Sudi Hartono', NULL, 'sudi.hartono@mail.com', 'Prambanan', '081230622288', '$2y$10$kXaPE.O0p1wB/Wl4bnBGqOOwa5Vg9S2e.hqulyIkHv7skB3msgQ6S', 2, 1, NULL, 1, '2017-10-08 02:05:33', '2017-10-08 02:05:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_photos`
--
ALTER TABLE `activity_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harvests`
--
ALTER TABLE `harvests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harvest_postharvest`
--
ALTER TABLE `harvest_postharvest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `onfarms`
--
ALTER TABLE `onfarms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onfarm_costs`
--
ALTER TABLE `onfarm_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `poktans`
--
ALTER TABLE `poktans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postharvests`
--
ALTER TABLE `postharvests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilages`
--
ALTER TABLE `privilages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seed_photos`
--
ALTER TABLE `seed_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `activity_photos`
--
ALTER TABLE `activity_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `harvests`
--
ALTER TABLE `harvests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `harvest_postharvest`
--
ALTER TABLE `harvest_postharvest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `onfarms`
--
ALTER TABLE `onfarms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `onfarm_costs`
--
ALTER TABLE `onfarm_costs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `poktans`
--
ALTER TABLE `poktans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `postharvests`
--
ALTER TABLE `postharvests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privilages`
--
ALTER TABLE `privilages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `seed_photos`
--
ALTER TABLE `seed_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
