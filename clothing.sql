-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2020 at 10:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothings`
--

DROP TABLE IF EXISTS `clothings`;
CREATE TABLE IF NOT EXISTS `clothings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clothings`
--

INSERT INTO `clothings` (`id`, `material`, `color`, `name`, `gender`, `size`, `email`, `phone`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Irish', 'Blue', 'Abubakar Ahmad', 'Male', '19, 20, 42, 36', 'Almisawee243@gmail.com', '08039093831', 'IMG_20190105_023001_361.JPG.jpg', 'Ran Road', '2020-09-29 15:36:00', '2020-09-29 15:36:00'),
(2, 'Irish', 'Brown', 'Habibu Umar', 'Male', '19, 20, 42, 36', 'habibu@gmail.com', '08036474862', 'IMG_20190114_041446_679.JPG.jpg', 'Dutsen Tanshi Bauchi', '2020-09-29 20:22:45', '2020-09-29 20:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fromgallery`
--

DROP TABLE IF EXISTS `fromgallery`;
CREATE TABLE IF NOT EXISTS `fromgallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `galleries_id` int(11) NOT NULL,
  `material` varchar(255) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(200) NOT NULL,
  `style` varchar(200) DEFAULT NULL,
  `color` varchar(200) NOT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `price` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `material`, `style`, `color`, `image2`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Cashmire', 'South South', 'Blue', 'IMG_20190105_023001_361.JPG.jpg', '2500', '2020-09-27 18:14:40', '2020-09-27 18:14:40'),
(2, 'Cashmire', 'South West', 'Green', 'BILLIE-EILISH.jpg', '3000', '2020-09-28 03:59:28', '2020-09-28 03:59:28'),
(3, 'Irish', 'Half Jumper', 'Brown', 'IMG_20190114_041403_325.JPG.jpg', '5000', '2020-09-28 04:02:12', '2020-09-28 04:02:12'),
(4, 'Plain', 'Jumper', 'White', 'IMG_20190114_041318_202.JPG.jpg', '6000', '2020-09-28 04:38:02', '2020-09-28 04:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_23_100522_create_clothings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` int(1) NOT NULL DEFAULT 0,
  `fullname` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `fullname`, `phone`, `email`, `password`, `created_at`, `updated_at`, `active`) VALUES
(1, 1, 'Abubakar Ahmad', '08039093831', 'Almisawee243@gmail.com', '5afcd1ec7950f65db366b626c6d00b4e', '2020-09-27 19:36:38', '2020-09-27 19:36:38', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
