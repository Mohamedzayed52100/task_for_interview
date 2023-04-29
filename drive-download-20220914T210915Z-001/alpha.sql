-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 10:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_for` text NOT NULL,
  `appointment_description` text DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_for`, `appointment_description`, `date`, `time`, `appointment_id`, `patient_id`) VALUES
('Cardiology', NULL, '2022-09-12', '16:27:00', 1, 3),
('Cardiology', NULL, '2022-09-23', '18:09:00', 14, 5);

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
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`email`, `password`, `name`, `patient_id`) VALUES
('alaa@gmail.com', '$2y$10$QknIQx8vQ9Z7A1ArXfzv1uIUTlEbuxpPLB2uqmSUEAtDudwAttO3q', 'Alaa Ibrahim', 2),
('lolo@gmail.com', '$2y$10$.Ro6G7jrglUx.IAOP/wi3OM5MqR0ynSVS7XeAX4WVDn2hZRUpz0Gu', 'Alaa', 3),
('yokasaied40@gmail.com', '$2y$10$gFEptNVwtWyqkT.5vVAl4./fwraYAlVYzj0FYdplzYmq.TiVuWU4G', 'aya saeed', 4),
('rawansaeed108@gmail.com', '$2y$10$6NveMA7VbPI4exxIk2Ek7.ZWRMRS67emsrfYSrCYy7fScHZQRGAvy', 'Rawan Saeed', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pinfos`
--

CREATE TABLE `pinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `bloodgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritalstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anyknownallergies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tpaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tpavalidity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinfos`
--

INSERT INTO `pinfos` (`id`, `name`, `guardian_name`, `dateofbirth`, `bloodgroup`, `maritalstatus`, `phone`, `email`, `address`, `anyknownallergies`, `remarks`, `tpaid`, `tpavalidity`, `nin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(22, 'amira', 'kmk', '2022-09-09', 'D', 'Go', '01091643693', 'a100@gmail.com', 'zifta', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 15:03:46', '2022-09-10 15:03:46'),
(23, 'lol', 'zayed', '2022-09-09', 'R', 'Go', '01091643693', 'b52100@gmail.com', 'zifta', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 23:16:20', '2022-09-10 23:16:20'),
(24, 'AGM', 'zayed', '2022-09-09', 'R', 'Go', '01091643693', 'zayed52100@gmail.com', 'zifta', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 14:18:29', '2022-09-14 17:48:53'),
(25, 'AGM', 'ahmed', '2022-09-09', 'R', 'Go', '01091643693', 'd52100@gmail.com', 'zifta', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 16:19:25', '2022-09-11 23:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `pmedicals`
--

CREATE TABLE `pmedicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientid` int(11) NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symptomstype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symptomstitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symptomsdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anyknownallergies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointmentdate` datetime DEFAULT NULL,
  `case` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casualty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oldpatient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultantdoctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chargecategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standardcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appliedcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentmode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paidamount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liveconsultation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmedicals`
--

INSERT INTO `pmedicals` (`id`, `patientid`, `height`, `weight`, `bp`, `pulse`, `temperature`, `respiration`, `symptomstype`, `symptomstitle`, `symptomsdescription`, `note`, `anyknownallergies`, `appointmentdate`, `case`, `casualty`, `oldpatient`, `tpa`, `consultantdoctor`, `chargecategory`, `tax`, `standardcharge`, `appliedcharge`, `amount`, `paymentmode`, `paidamount`, `liveconsultation`, `created_at`, `updated_at`, `reference`) VALUES
(1, 22, '100', '200', '5000', '400', '300', '5', NULL, '5', '5', NULL, NULL, '2022-08-29 00:00:00', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '5', NULL, '6', NULL, '2022-09-08 20:15:56', '2022-09-08 20:15:56', '5'),
(2, 23, 'k', 'k', '5', '6565', '65', '6', 'select', '65', '65', '65', '5', '2022-09-12 14:28:00', '5', 'yes', 'yes', 'select', 'select', NULL, NULL, NULL, '65', '65', 'bank', '65', 'yes', '2022-09-11 10:28:26', '2022-09-11 10:28:26', '65');

-- --------------------------------------------------------

--
-- Table structure for table `radiology`
--

CREATE TABLE `radiology` (
  `patient_id` int(11) NOT NULL,
  `result` text NOT NULL,
  `img` text NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radiology`
--

INSERT INTO `radiology` (`patient_id`, `result`, `img`, `img_id`) VALUES
(3, 'Covid', 'D:/my-website/public/radiology_images/1662995598.jpg', 13),
(3, 'Covid', 'D:/my-website/public/radiology_images/1662995657.jpg', 14),
(3, 'Covid', 'D:/my-website/public/radiology_images/1662995697.jpg', 15),
(3, 'Covid', 'D:/my-website/public/radiology_images/1662995883.jpg', 16),
(2, 'Covid', 'D:/my-website/public/radiology_images/1662996620.png', 19),
(2, 'Covid', 'D:/my-website/public/radiology_images/1662997063.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `register_vaccine`
--

CREATE TABLE `register_vaccine` (
  `phone` bigint(11) NOT NULL,
  `nationality` text NOT NULL,
  `nationalID` bigint(14) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` text NOT NULL,
  `language` text NOT NULL,
  `ladies` text NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_vaccine`
--

INSERT INTO `register_vaccine` (`phone`, `nationality`, `nationalID`, `birthdate`, `gender`, `language`, `ladies`, `patient_id`) VALUES
(1210630406, 'hgfdfghj', 76535789864567, '2001-08-09', 'F', 'English', 'N', 1),
(1210630406, 'hgfdfghj', 76543234567436, '2001-08-09', 'F', 'English', 'N', 1),
(1224626254, 'lkjhg', 87434567832345, '2001-08-09', 'F', 'English', 'N', 1),
(1224626254, 'Egyption', 98654367823145, '2001-08-10', 'F', 'English', 'N', 5);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'mohamed ibrahimzayed', '2022-09-09 10:49:33', '2022-09-09 10:49:33'),
(2, 'mohamed', 'mohamed ibrahimzayed', '2022-09-09 10:49:34', '2022-09-09 10:49:34'),
(3, 'mohamed', 'mohamed ibrahimzayed', '2022-09-09 10:49:35', '2022-09-09 10:49:35'),
(4, 'amira', 'mohamed', '2022-09-09 11:31:10', '2022-09-09 11:31:10'),
(5, 'mohamed', 'mohamedzayed', '2022-09-09 15:16:36', '2022-09-09 15:16:36'),
(6, 'lila', 'sake', '2022-09-10 12:51:38', '2022-09-10 12:51:38');

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
(1, 'Cleveland Stark PhD', 'reichel.alvis@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A1g4yoOsXq', '2022-09-04 19:26:01', '2022-09-04 19:26:01'),
(2, 'Prof. Darius Parisian', 'amie60@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3FYzcfJucx', '2022-09-04 19:26:02', '2022-09-04 19:26:02'),
(3, 'Shanny Gleason', 'shana47@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'alcLmOkgCk', '2022-09-04 19:26:02', '2022-09-04 19:26:02'),
(4, 'Garfield Koelpin', 'bradtke.kavon@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6bPeGAF4WI', '2022-09-04 19:26:02', '2022-09-04 19:26:02'),
(5, 'Ms. Pearl Koch', 'gino.nader@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mCMNf92O25', '2022-09-04 19:26:02', '2022-09-04 19:26:02'),
(6, 'Mr. Baylee Gorczany', 'sylvester.romaguera@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oIpvBzdGK4', '2022-09-04 19:26:02', '2022-09-04 19:26:02'),
(7, 'Carley Hessel', 'adelia.littel@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8H0i7J0GSy', '2022-09-04 19:26:03', '2022-09-04 19:26:03'),
(8, 'Ms. Sister Bradtke DVM', 'quinten.davis@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'x3JmV5OZ0a', '2022-09-04 19:26:03', '2022-09-04 19:26:03'),
(9, 'Caitlyn Hessel', 'robyn.sipes@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qk2TK4N3zf', '2022-09-04 19:26:03', '2022-09-04 19:26:03'),
(10, 'Joel Kulas V', 'ayost@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EDGTrRLsfW', '2022-09-04 19:26:03', '2022-09-04 19:26:03'),
(11, 'Dr. Joseph Fadel III', 'kling.daron@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e1Ntlu3TA3', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(12, 'Prof. Harmon Okuneva', 'chase50@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CTz58CQyrO', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(13, 'Arch Hagenes', 'hattie21@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y8e2KKTB3s', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(14, 'Prof. Geovany Conroy II', 'romaguera.nelle@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6uZW0WRg2d', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(15, 'Tressa Haag Jr.', 'slebsack@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'okjFmzaU57', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(16, 'Eldora Beer', 'glenda58@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YOQTeA2cau', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(17, 'Candelario Abernathy', 'xrempel@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xvPFmSeOXF', '2022-09-04 19:26:04', '2022-09-04 19:26:04'),
(18, 'Adaline Streich', 'fabiola.hudson@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wTNcxZUFeO', '2022-09-04 19:26:05', '2022-09-04 19:26:05'),
(19, 'Rachael Mraz', 'eweimann@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fLkPCCXIV5', '2022-09-04 19:26:05', '2022-09-04 19:26:05'),
(20, 'Earline Kunde', 'mae.mayert@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ecRg3RlhYp', '2022-09-04 19:26:05', '2022-09-04 19:26:05'),
(21, 'Dr. Nia Reilly MD', 'elissa51@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KRkmJWg2wm', '2022-09-04 19:26:05', '2022-09-04 19:26:05'),
(22, 'Dr. Miracle Mann MD', 'hgreenfelder@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VXfCmbTZbZ', '2022-09-04 19:26:06', '2022-09-04 19:26:06'),
(23, 'Xzavier Harris', 'jprohaska@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sn9b4WwQeu', '2022-09-04 19:26:06', '2022-09-04 19:26:06'),
(24, 'Justice Eichmann', 'quinten.grant@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mz0g7GKGSA', '2022-09-04 19:26:07', '2022-09-04 19:26:07'),
(25, 'Genoveva Windler MD', 'misael.kautzer@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BdL8UEIQyd', '2022-09-04 19:26:07', '2022-09-04 19:26:07'),
(26, 'Henriette Lindgren', 'rutherford.jan@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IKNbsQ0tBb', '2022-09-04 19:26:07', '2022-09-04 19:26:07'),
(27, 'Lottie Gottlieb PhD', 'lelah.stark@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'X65TWsJsif', '2022-09-04 19:26:07', '2022-09-04 19:26:07'),
(28, 'Unique Schuster', 'bryce.crist@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SNFeIj1fur', '2022-09-04 19:26:07', '2022-09-04 19:26:07'),
(29, 'Dennis Powlowski V', 'jovan18@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vsZw2iCqqS', '2022-09-04 19:26:08', '2022-09-04 19:26:08'),
(30, 'Terrill Gaylord', 'katrina.vandervort@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'axYss6nKjf', '2022-09-04 19:26:08', '2022-09-04 19:26:08'),
(31, 'Nayeli Kovacek', 'gunnar.homenick@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g6F5mEcxIs', '2022-09-04 19:26:08', '2022-09-04 19:26:08'),
(32, 'Nels Morissette', 'lyost@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5nZyfjpqao', '2022-09-04 19:26:08', '2022-09-04 19:26:08'),
(33, 'Skylar VonRueden', 'idella.hodkiewicz@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'byvMsG83Hy', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(34, 'Prof. Alexandro Mueller', 'garrett19@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FAVQGGPsQc', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(35, 'Shea Predovic', 'zulauf.leonardo@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'c1x06KmNid', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(36, 'Prof. Manuel Stroman', 'twila75@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DslAzlP7ek', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(37, 'Floy Rosenbaum', 'pablo.tremblay@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eZxY7KTsdH', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(38, 'Mariana Hoppe', 'harvey.wilkinson@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1V5xrQn2c3', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(39, 'Fidel Stark', 'hertha65@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hgX96MHYj8', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(40, 'Ashlee Monahan Jr.', 'dlesch@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bej2p8xM3m', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(41, 'Alysson VonRueden', 'kmarks@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PTxN708Ch3', '2022-09-04 19:26:09', '2022-09-04 19:26:09'),
(42, 'Emilia Herzog PhD', 'kuvalis.hellen@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0rlorUZmLa', '2022-09-04 19:26:10', '2022-09-04 19:26:10'),
(43, 'Dr. Ulises Oberbrunner DVM', 'mekhi22@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'onBcj6c2Cq', '2022-09-04 19:26:10', '2022-09-04 19:26:10'),
(44, 'Michelle O\'Kon', 'swift.filomena@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DOTY9JrSnx', '2022-09-04 19:26:10', '2022-09-04 19:26:10'),
(45, 'Luna DuBuque', 'romaguera.tabitha@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XGZ0KtV98Y', '2022-09-04 19:26:11', '2022-09-04 19:26:11'),
(46, 'Carolyn Quitzon II', 'ellsworth.schinner@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fC830HpW8H', '2022-09-04 19:26:11', '2022-09-04 19:26:11'),
(47, 'Marty Haley', 'nharris@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pmPQ4YVyBb', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(48, 'Eldon Waters DVM', 'skiles.celestine@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M1lViAo7rC', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(49, 'Mrs. Eloisa Reichert', 'amelia82@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vZtjGS2JwK', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(50, 'Dr. Hassie Pfannerstill IV', 'soberbrunner@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3T4oI7DFx9', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(51, 'Polly Funk Sr.', 'ward.nathaniel@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'C4nLsY1H9s', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(52, 'William Heaney', 'gdickens@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ynDKf6J5Ie', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(53, 'Dr. Arjun Farrell', 'jokon@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rJW3K6Qt7o', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(54, 'Verlie Breitenberg', 'arely70@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5FW6lHDMBE', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(55, 'German Mann MD', 'hettie.kulas@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7k4yFTYOK2', '2022-09-04 19:26:12', '2022-09-04 19:26:12'),
(56, 'Louisa Muller', 'bahringer.camryn@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tKFr5vcTym', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(57, 'Cloyd Durgan II', 'cdouglas@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ca8UWJmBVJ', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(58, 'Miss Susie Reynolds', 'sammie.marvin@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yd3hCJzBOL', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(59, 'Ms. Freida Goldner Sr.', 'amara.koch@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ywf8Mhxzbw', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(60, 'Kolby Gleichner', 'maud.cremin@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IFRgX6JLPb', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(61, 'Mauricio Heller', 'dbartell@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'snxb8xJU1X', '2022-09-04 19:26:13', '2022-09-04 19:26:13'),
(62, 'Angel Hand', 'jayson09@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ks3ia36QMZ', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(63, 'Bernice Tromp', 'konopelski.makenzie@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e6wy9eeUaZ', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(64, 'Kira Robel', 'lemke.sydney@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CbhRESo98C', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(65, 'Dr. Domingo Bins MD', 'nhilpert@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DPk4ERnzCX', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(66, 'Yoshiko Weber Sr.', 'francisco69@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D5woTTJsSV', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(67, 'Mr. Santino Green II', 'margarette.effertz@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GfRbBHqLps', '2022-09-04 19:26:14', '2022-09-04 19:26:14'),
(68, 'Allison Bartell', 'pete42@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KUVuKL8C0p', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(69, 'Mr. Nicholas Ryan Jr.', 'pbailey@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8YFOr1iUNR', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(70, 'Breanna Johnston', 'wdaugherty@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5zvDYsDYQO', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(71, 'Dr. Layne Nikolaus', 'mitchel02@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'llepD7gRRH', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(72, 'Reba Schowalter Jr.', 'magnus.sipes@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1oZFRvYFwo', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(73, 'Abagail Kovacek', 'winnifred.volkman@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LZ3XNWd9En', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(74, 'Rubye Johnson', 'queen.lehner@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UMXJ35WyCS', '2022-09-04 19:26:15', '2022-09-04 19:26:15'),
(75, 'Patricia Flatley', 'vboehm@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'f6U5hpQugH', '2022-09-04 19:26:16', '2022-09-04 19:26:16'),
(76, 'America Johnston', 'madisyn.daugherty@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WD9Qezhotp', '2022-09-04 19:26:16', '2022-09-04 19:26:16'),
(77, 'Miss Patsy Connelly', 'clemmie.lesch@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OIG9oX0NEH', '2022-09-04 19:26:16', '2022-09-04 19:26:16'),
(78, 'Maryam McClure', 'bernier.aryanna@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '087LClY6Lu', '2022-09-04 19:26:16', '2022-09-04 19:26:16'),
(79, 'Amara Hudson', 'sschultz@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CJ41FATEDR', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(80, 'Zachary Strosin', 'nya68@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qISEc6DYN0', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(81, 'Dr. Marlen Botsford I', 'goldner.kolby@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eJB9VQG7LP', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(82, 'Devyn West', 'elijah45@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gCU97Ejijl', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(83, 'Sydney Parker', 'shany19@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'o5xBtk4jUK', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(84, 'Ida Mayert', 'luis64@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XZFF95Kubp', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(85, 'Kristofer Hickle', 'leuschke.drake@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8Yfzq5ZqsI', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(86, 'Dr. Tony Rolfson III', 'marvin.jesse@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PNCa39Fsy0', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(87, 'Sidney Grimes III', 'kemmer.luigi@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dRFdgcN2Xh', '2022-09-04 19:26:17', '2022-09-04 19:26:17'),
(88, 'Mrs. Delphine West DVM', 'carlee21@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VbaXgayAao', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(89, 'Mekhi Sporer Jr.', 'gutkowski.robin@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZBq9f75lBD', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(90, 'Dr. Winona Sauer Sr.', 'claudie96@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MLxGEXCvuT', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(91, 'Annie Balistreri', 'kiehn.mike@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uTUdEXuksG', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(92, 'Kyle Becker', 'rico.keebler@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cNiaIq9v6X', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(93, 'Corrine Rath', 'pfeffer.camilla@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S97bjYye19', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(94, 'Prof. Rhiannon Kohler', 'catharine.gorczany@example.org', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uAnHrGhma5', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(95, 'Prof. Gillian Blanda DVM', 'tboyer@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6KmcOUK0CI', '2022-09-04 19:26:18', '2022-09-04 19:26:18'),
(96, 'Aliya Blick', 'clementine.legros@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XIfI2TOkFu', '2022-09-04 19:26:19', '2022-09-04 19:26:19'),
(97, 'Golden Gutkowski', 'melyssa77@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IRmmj2TNx7', '2022-09-04 19:26:19', '2022-09-04 19:26:19'),
(98, 'Ebba Stark', 'earline23@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M13HoFD9pi', '2022-09-04 19:26:19', '2022-09-04 19:26:19'),
(99, 'Cloyd West', 'wmills@example.com', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rpbcJqAJ6k', '2022-09-04 19:26:19', '2022-09-04 19:26:19'),
(100, 'Eudora Mills', 'cassin.aron@example.net', '2022-09-04 19:26:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Qr1BMbAiyr', '2022-09-04 19:26:19', '2022-09-04 19:26:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `pinfos`
--
ALTER TABLE `pinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pmedicals`
--
ALTER TABLE `pmedicals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patientid` (`patientid`);

--
-- Indexes for table `radiology`
--
ALTER TABLE `radiology`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `register_vaccine`
--
ALTER TABLE `register_vaccine`
  ADD PRIMARY KEY (`nationalID`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pinfos`
--
ALTER TABLE `pinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pmedicals`
--
ALTER TABLE `pmedicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radiology`
--
ALTER TABLE `radiology`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `radiology`
--
ALTER TABLE `radiology`
  ADD CONSTRAINT `radiology_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
