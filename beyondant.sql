-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 03:39 AM
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
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile_image`, `cover_image`, `name`, `title`, `company_name`, `company_description`, `phone_number`, `mobile_number`, `fax_number`, `email`, `address`, `website`, `linkedin`, `instagram`, `facebook`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'assets/uploads/profile/user-img-1.jpg', 'assets/uploads/profile/profile-main-img.jpg', 'Nick', 'Chief Executive Officer', 'Mick & Associates, LLC', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '123456789', '03333906233', '03333906233', 'johnny.mick@demo.com', '777 Brockton Avenue,\r\nAbington MA 2351', 'http://localhost/laravel/beyondant/public/profile', 'https://pk.linkedin.com/', 'https://www.instagram.com/', 'http://facebook.com/', '2020-03-09 18:44:47', NULL, '2020-03-09 18:44:47', NULL);

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
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, NULL, 14, '2020-03-04 18:48:56', NULL),
(2, 'customer', '', 1, NULL, NULL, NULL, NULL),
(4, 'master admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, '2020-02-27 18:39:15', 14, '2020-03-04 18:48:50', NULL);

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
  `fax_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_check` enum('Mobile','Phone','Fax') COLLATE utf8mb4_unicode_ci DEFAULT 'Mobile',
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_address` enum('Website','Address') COLLATE utf8mb4_unicode_ci DEFAULT 'Address',
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_check` tinyint(1) DEFAULT '0',
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_check` tinyint(1) DEFAULT '0',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_check` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `fax_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `job_title`, `company_name`, `company_description`, `address`, `website`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant Web', 'admin@demo.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', 'XFdf1m02BRFeno4j9wqnVH54wsKEZyik5UIFlVbWWAwLRHonCoAei6McbwVi', 1234567890, NULL, NULL, '', 'C.E.O', 'assets/admin/images/1162149681.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-03-11 20:50:54', NULL),
(2, 2, 'Testing Fname Lname', 'nb@nadocrm.com', NULL, '$2y$10$ZZ7Gg3uwoULlNSTG3WC3DeO52SSwIP4nrG4oopqDPixrTpYy4TY9i', NULL, 1234567890, '56986362563', '56986362563', 'Mobile', NULL, 'assets/uploads/profile/user-img-1.jpg', 'assets/uploads/profile/profile-main-img.jpg', 'Chief Executive Officer', 'Mick & Associates, LLC', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '777 Brockton Avenue, Abington MA 2351', 'http://facebook.com', 'Website', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-16 17:08:00', NULL, '2020-01-16 17:08:00', NULL),
(11, 1, 'Albert Custom', 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, 12345678910, NULL, NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL),
(12, 3, 'Nick PHP', 'nick@mnb.com', NULL, '$2y$10$dFtCYSQk0saLbkrOywAR2.Ids8QSta1JDfz1y2IYdRrYfdo5PA5d2', NULL, 12345678910, NULL, NULL, '', 'Developer', 'assets/admin/images/2021132860.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 18:05:34', NULL, '2020-01-23 18:05:34', NULL),
(13, 3, 'Testing Fname Testing Lname', 'test@mnb.com', NULL, '$2y$10$y.XNfo5R4VVgzwo3c0GGGuVnP155rekUVVOE22OoJY/MKLnldKDRq', NULL, 1234567891, NULL, NULL, '', 'Developer', 'assets/admin/images/14354318.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 18:30:12', NULL, '2020-01-23 18:30:12', NULL),
(14, 4, 'Master Admin', 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, 3333906233, NULL, NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL),
(15, 0, 'Testing Fname Testing Lname', 'test@masdsanb.com', NULL, '', NULL, NULL, '123213213213', '123213213', '', NULL, '', '', 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 12:59:18', NULL, '2020-03-10 12:59:18', NULL),
(17, 2, 'Testing Fname Testing Lname', 'test@sdfsasnb.com', NULL, '', NULL, NULL, '123213213213', '123213213', '', NULL, '', '', 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 13:42:13', NULL, '2020-03-10 13:42:13', NULL),
(18, 2, 'Testing Fname Testing Lname', 'test@sdfsassnb.com', NULL, '', NULL, NULL, '123213213213', '123213213', '', NULL, '', '', 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 13:42:40', NULL, '2020-03-10 13:42:40', NULL),
(19, 2, 'Testing Fname Testing Lname', 'test@mnfffb.com', NULL, '', NULL, NULL, '432432432', '432432432', '', NULL, '', '', 'dsadas', 'dfsdf', 'fdsfdsf', 'street2', 'addd', '', 'sfds', 0, 'Testing Fname Lname', 0, 'www.facebook.com', 0, 1, '2020-03-10 15:19:24', NULL, '2020-03-10 15:19:24', NULL),
(20, 2, 'Testing Fname Testing Lname', 'test@mndfdfb.com', NULL, '', NULL, NULL, '234324324324', '324234324', '', NULL, 'assets/admin/images/266944074.PNG', 'assets/admin/images/859125283.PNG', 'dsfdsfsd', 'dsadsa', 'sdfsdf', 'street2', 'addd', '', 'asdasdsad', 0, 'Testing Fname', 0, 'ww.sd', 0, 1, '2020-03-10 15:24:19', NULL, '2020-03-10 15:24:19', NULL),
(21, 2, 'Testing Fname Testing Lname', 'test@masdndfdfb.com', NULL, '', NULL, NULL, '234324324324', '324234324', '', NULL, 'assets/admin/images/806950238.PNG', 'assets/admin/images/168713681.PNG', 'dsfdsfsd', 'dsadsa', 'sdfsdf', 'street2', 'addd', 'Website', 'asdasdsad', 1, 'Testing Fname', 1, 'ww.sd', 1, 1, '2020-03-10 15:26:00', NULL, '2020-03-10 15:26:00', NULL),
(22, 2, 'Testing Fname Testing Lname', 'test@mnsdfdsfb.com', NULL, '', NULL, NULL, '', '343432432432', '', NULL, '', '', 'sdfsdf', 'fsdf', 'sdfsdfsdf', 'street2', '', '', '', 0, '', 0, '', 0, 1, '2020-03-10 18:20:51', NULL, '2020-03-10 18:20:51', NULL),
(23, 2, 'Jordan', 'nb@nadocrms.com', NULL, '', NULL, 2134635078, '123456789', '03333906233', 'Mobile', NULL, 'assets/admin/images/373380592.jpg', 'assets/admin/images/1328457617.jpg', 'Developer', 'OIP', 'Out Source in Pakistan', 'street2', 'https://outsourceinpakistan.com/', 'Address', 'https://www.linked.com/', 0, 'https://www.instagram.com/', 0, 'https://www.facebook.com/', 0, 1, '2020-03-11 21:14:20', NULL, '2020-03-11 21:14:20', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
