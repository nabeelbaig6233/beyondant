-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 01:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beyondant`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_11_010727_create_roles_table', 1),
(5, '2020_01_11_011221_create_user_roles_table', 1),
(6, '2020_01_17_003311_alter_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `header_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` decimal(10,0) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"createCategory\",\"updateCategory\",\"viewCategory\",\"deleteCategory\",\"createSubCategory\",\"updateSubCategory\",\"viewSubCategory\",\"deleteSubCategory\",\"createAttribute\",\"updateAttribute\",\"viewAttribute\",\"deleteAttribute\",\"createVariant\",\"updateVariant\",\"viewVariant\",\"deleteVariant\",\"createProduct\",\"updateProduct\",\"viewProduct\",\"deleteProduct\",\"createProductVariant\",\"updateProductVariant\",\"viewProductVariant\",\"deleteProductVariant\",\"createInventory\",\"updateInventory\",\"viewInventory\",\"deleteInventory\",\"createCurrency\",\"updateCurrency\",\"viewCurrency\",\"deleteCurrency\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"createLocation\",\"updateLocation\",\"viewLocation\",\"deleteLocation\",\"updateContent\",\"viewOrder\",\"viewMarket\",\"updateSetting\",\"updateProfile\"]', 1, NULL, 1, '2020-02-28 16:30:40', NULL),
(2, 'customer', '', 1, NULL, NULL, NULL, NULL),
(3, 'vendor', '[\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"createCategory\",\"updateCategory\",\"deleteCategory\"]', 1, NULL, 12, '2020-02-12 22:44:18', NULL),
(4, 'master admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"viewCustomer\",\"deleteCustomer\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, '2020-02-27 18:39:15', 1, '2020-02-27 18:39:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favico` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `language_id`, `title`, `email`, `phone`, `fax`, `address`, `facebook`, `twitter`, `instagram`, `logo`, `favico`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant', 'info@beyondant.com', '12345678910', '12345678910', 'street2', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'assets/uploads/setting/2129567001.png', 'assets/uploads/setting/1559501481.png', 1, '2020-02-27 22:35:25', 1, '2020-02-27 17:35:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `occupation`, `profile_picture`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant Web', 'admin@demo.com', NULL, '$2y$10$ZZ7Gg3uwoULlNSTG3WC3DeO52SSwIP4nrG4oopqDPixrTpYy4TY9i', 'eNAUNfYE5wCYJ3so6RCzUZplAyCM6yLmDSL3CrkNUXqmSxx5AhzeH3aZjB4y', 1234567890, 'C.E.O', 'assets/admin/images/790368965.png', '2020-01-14 14:45:20', NULL, '2020-02-28 17:13:46', NULL),
(2, 2, 'Testing Fname Lname', 'nb@nadocrm.com', NULL, '$2y$10$c5fg4t6cmsZrn1J.wQT3JuoaH/ICLtLMk1Y1PvolnNp/7P/MgDque', NULL, NULL, NULL, NULL, '2020-01-16 17:08:00', NULL, '2020-01-16 17:08:00', NULL),
(3, 0, 'Testing Fname Lname', 'nbs@nadocrm.com', NULL, '$2y$10$5FP3FaUNvZnGIYgtPWAyEuAn950F8DnB6JlqpKAOcuNYaqSG41LHi', NULL, NULL, NULL, NULL, '2020-01-16 17:15:00', NULL, '2020-01-16 17:15:00', NULL),
(4, 0, 'Testing Fname Lname', 'asnb@nadocrm.com', NULL, '$2y$10$BQ/gj/33RRgxxn9WOlY3PuLU8G.1iSKAcFhnH8nShkd1ANXmRt83K', NULL, NULL, NULL, NULL, '2020-01-16 17:52:49', NULL, '2020-01-16 17:52:49', NULL),
(5, 0, 'Testing Fname Lname', 'nqweb@nadocrm.com', NULL, '$2y$10$/JqHT7qkHhwVBKiRSKIYgeN/Xjytg3uuci2r0lGbjiv..oQI5eHJu', NULL, NULL, NULL, NULL, '2020-01-16 19:30:07', NULL, '2020-01-16 19:30:07', NULL),
(6, 0, 'Testing Fname Lname', 'nqqb@nadocrm.com', NULL, '$2y$10$DmaQPh9BupWVWK08t2BMEuA4ZO11SryaKTIXYgfP6xHai/JWoo9FC', NULL, NULL, NULL, NULL, '2020-01-16 21:00:28', NULL, '2020-01-16 21:00:28', NULL),
(7, 0, 'Testing Fname Lname', 'nzxb@nadocrm.com', NULL, '$2y$10$0bGKGX19biW32JSsposx4O0Yjb/JUUv.5DFd5WQavLBQ2RedbKqzC', NULL, NULL, NULL, NULL, '2020-01-16 21:01:45', NULL, '2020-01-16 21:01:45', NULL),
(8, 0, 'Testing Fname Lname', 'qqqnb@nadocrm.com', NULL, '$2y$10$Dto2k9FBfdAUceCj5vaLHOAv7twKLSMTSzpBE9o7L2zQrmbeKZqyq', NULL, NULL, NULL, NULL, '2020-01-16 21:04:58', NULL, '2020-01-16 21:04:58', NULL),
(9, 0, 'Testing Fname Lname', 'nb11@nadocrm.com', NULL, '$2y$10$gwgjRn.qrC.02zehihajIuZvGBPjorPQgdQC8QB/hIE177dVgWjx6', NULL, NULL, NULL, NULL, '2020-01-16 21:12:22', NULL, '2020-01-16 21:12:22', NULL),
(10, 0, 'qweqw asd', 'qwenb@nadocrm.com', NULL, '$2y$10$Cl.6w1iLqQzgx6tRHctS.ugCr8yUwY5zfC7hXgPeu556/4Iqm2kCW', NULL, 1234567892, 'sdas', 'assets/admin/images/332319587.png', '2020-01-16 21:17:36', NULL, '2020-01-16 21:17:36', NULL),
(11, 1, 'Albert Custom', 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, 12345678910, 'Developer', 'assets/admin/images/1209642735.png', '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL),
(12, 3, 'Nick PHP', 'nick@mnb.com', NULL, '$2y$10$dFtCYSQk0saLbkrOywAR2.Ids8QSta1JDfz1y2IYdRrYfdo5PA5d2', NULL, 12345678910, 'Developer', 'assets/admin/images/2021132860.png', '2020-01-23 18:05:34', NULL, '2020-01-23 18:05:34', NULL),
(13, 3, 'Testing Fname Testing Lname', 'test@mnb.com', NULL, '$2y$10$y.XNfo5R4VVgzwo3c0GGGuVnP155rekUVVOE22OoJY/MKLnldKDRq', NULL, 1234567891, 'Developer', 'assets/admin/images/14354318.png', '2020-01-23 18:30:12', NULL, '2020-01-23 18:30:12', NULL),
(14, 4, 'Master Admin', 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, 3333906233, 'PHP Developer', 'assets/admin/images/1784678676.png', '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
