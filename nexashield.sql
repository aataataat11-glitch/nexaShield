-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 فبراير 2026 الساعة 16:32
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexashield`
--

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `pdf`, `created_at`) VALUES
(18, 'الحوسبة السحابية', '1769455955_b3.jpg.webp', '1769455955_cloud_computing.pdf', '2026-01-26 19:32:35'),
(19, 'الهاكر الاخلاقي', '1769456061_b4.png.webp', '1769456061_ethical_hacking.pdf', '2026-01-26 19:34:21'),
(20, 'إدارة الشبكات', '1769456116_b5.jpg', '1769456116_networking.pdf', '2026-01-26 19:35:16'),
(21, 'التوجيه والتبديل', '1769456146_b6.jpg', '1769456146_routing_switching.pdf', '2026-01-26 19:35:46'),
(22, 'الهياكل المتقطعة', '1769456188_b7.png.webp', '1769456188_segmented_structures.pdf', '2026-01-26 19:36:28'),
(23, 'قواعد البيانات', '1769456220_b8.jpg', '1769456220_database.pdf', '2026-01-26 19:37:00'),
(24, 'البرمجة', '1769456260_b9.jpg', '1769456260_programming.pdf', '2026-01-26 19:37:40'),
(25, 'أمن المعلومات', '1769456299_b10.png.webp', '1769456299_security.pdf', '2026-01-26 19:38:19'),
(26, 'هندسة البرمجيات', '1769456331_b11.jpg', '1769456331_software_engineering.pdf', '2026-01-26 19:38:51'),
(27, 'أنظمة التشغيل', '1769456372_b12.png', '1769456372_os.pdf', '2026-01-26 19:39:32'),
(28, 'ملخص الحوسبة السحابية', '1769456466_m3.png.webp', '1769456466_m3.pdf', '2026-01-26 19:41:06'),
(29, 'ملخص هياكل البيانات', '1769456553_m1.webp', '1769456553_m1.pdf', '2026-01-26 19:42:33'),
(30, 'ملخص أمن المعلومات', '1769456600_m10.jpg.webp', '1769456600_m10.pdf', '2026-01-26 19:43:20');

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `test_day` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `tests`
--

INSERT INTO `tests` (`id`, `title`, `test_date`, `test_day`, `level`, `created_at`) VALUES
(2, 'امن سيبراني', '2026-12-05', 'الاحد', 'مبتدئ', '2026-01-24 16:22:50');

-- --------------------------------------------------------

--
-- بنية الجدول `test_registrations`
--

CREATE TABLE `test_registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `test_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `test_registrations`
--

INSERT INTO `test_registrations` (`id`, `name`, `email`, `test_title`, `created_at`) VALUES
(1, 'hhhh', 'sddd@gmail.com', 'امن سيبراني', '2026-01-24 16:27:59'),
(2, 'hhhh', 'sddd@gmail.com', 'امن سيبراني', '2026-01-24 16:30:29'),
(3, 'hhhh', 'sddd@gmail.com', 'امن سيبراني', '2026-01-24 16:32:46'),
(4, 'تتتتتتتت', 'sddd@gmail.com', 'تتتتت', '2026-01-25 11:03:44'),
(5, 'ت ', 'sddd@gmail.com', 'امن سيبراني', '2026-01-25 11:04:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_registrations`
--
ALTER TABLE `test_registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_registrations`
--
ALTER TABLE `test_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
