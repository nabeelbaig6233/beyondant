-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2020 at 03:19 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprojectstaging_beyondant`
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
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading1` varchar(191) DEFAULT NULL,
  `text1` text,
  `heading2` varchar(191) DEFAULT NULL,
  `text2` text,
  `section_heading1` varchar(191) DEFAULT NULL,
  `section_text1` text,
  `section_heading2` varchar(191) DEFAULT NULL,
  `section_text2` text,
  `section_heading3` varchar(191) DEFAULT NULL,
  `section_text3` text,
  `section_heading4` varchar(191) DEFAULT NULL,
  `section_text4` text,
  `section_image4` varchar(191) DEFAULT NULL,
  `section_heading5` varchar(191) DEFAULT NULL,
  `section_text5` text,
  `section_image5` varchar(191) DEFAULT NULL,
  `iframe` text,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `heading1`, `text1`, `heading2`, `text2`, `section_heading1`, `section_text1`, `section_heading2`, `section_text2`, `section_heading3`, `section_text3`, `section_heading4`, `section_text4`, `section_image4`, `section_heading5`, `section_text5`, `section_image5`, `iframe`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Custom Digital Business Cards, Profile Sharing Bracelets & More', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and then enable technology in close secured proximity to direct your customer/prospects to your desired Internet destination. The Coronavirus has now changed the way we conduct business. Social Distancing is the new normal. Our solution is in high demand because it is easy, fast and works automatically with iron clad security features while only requiring a smart phone tap on our devices. This excludes the need for physical exchanges. Evolved from radio frequency identification (RFID) tech, our various devices and applications are reshaping the world you live in.', 'A Smoother Way To Grow Your Business Through Networking Or Simply Grow Your Social Following', 'Create your Custom Digital Business Cards with us and increase your customer interaction despite social distancing. There no need to shake hands or touch unnecessary material. Use our technology to track customer behaviour, customer satisfaction and demands all the while maintaining strict customer business confidentiality. Enable secure online shopping and create loyalty programs with the use of our Custom cards, Bracelets tags, stickers and other NFC enabled devices and give your business and social presence a boom.', 'Beyondant will save you time and money', '88% of business cards are thrown away when given to prospects or contacts. Now with the concern of bacterial transfer the percentage of discarded business cards is on the rise. Our devices allow all your contact or profile information to be accessed and saved within seconds. Your contacts/prospects can save your information to their smart phone rapidly. The transfer of your desired destination is provided by humans which ensure the highest levels of privacy and security.', 'Target leads more efficiently', 'Access the contact information of all customer and business interactions on the go with us, in addition to automatic data storage regarding time and venue within your smart phone’s contacts.', 'Availble On Mobile Phones And Desktop Pcs', 'Change your contact detail easily with either your mobile phone or desktop pc when needed. Our user interface is very straight forward. Designed with non technical individuals in mind. Display the information you care about most.', 'Our Products', 'At this moment we have four products which leverage Near Field Communications and Beyondant’s Profile sharing platform namely Profile Sharing Bracelet, Digital Custom Business Cards and Bemorial Tags, Smart Stickers. This platform serves businesses of all industries as well as the everyday consumer where it takes seconds to digitally share contact details, social media profiles, and internet marketing information, corporate web site or relevant online information.', 'assets/uploads/home/1701610658.png', 'Design Your First Digital Business Card In Seconds', 'Get a state-of-the-art digital business card with unlimited changes & ongoing platform enhancements at no charge to you. Compatible with iPhone, Android, Desktop and tablets, you can share it via SMS, email, WhatsApp and more. Help your customers remember you!. Create your free account to get started!', 'assets/uploads/home/649868911.jpg', 'www.youtube.com/embed/2ljxxQy8zHI', 1, '2020-03-20 03:12:15', 1, '2020-03-20 03:12:15', NULL);

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
-- Table structure for table `reseller`
--

CREATE TABLE `reseller` (
  `id` int(11) UNSIGNED NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `address_line_two` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `fed_tax_id` varchar(255) DEFAULT NULL,
  `business_phone` varchar(20) DEFAULT NULL,
  `business_status` enum('Corporation','Partnership','Individual','Other (Please Specify)') NOT NULL,
  `business_status_description` text,
  `date_organized` datetime NOT NULL,
  `name_of_owner` varchar(255) NOT NULL,
  `about_beyondant` text NOT NULL,
  `num_of_locations` int(5) UNSIGNED DEFAULT NULL,
  `total_employees` int(11) UNSIGNED NOT NULL,
  `sales_employees` int(11) UNSIGNED DEFAULT NULL,
  `preferred_territory` varchar(255) NOT NULL,
  `brands` varchar(255) NOT NULL,
  `approx_turnover` enum('$0 - $1 Million','$1 - $10 Million','$10+ Million','Others (Please Specify)') DEFAULT NULL,
  `approx_turnover_description` text,
  `beyondant_promotion` datetime NOT NULL,
  `short_paragraph` text NOT NULL,
  `agreement` int(1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"updateHome\",\"viewHome\",\"viewReseller\",\"deleteReseller\",\"updateSetting\",\"updateProfile\"]', 1, NULL, 14, '2020-03-19 22:58:50', NULL),
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
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `reseller_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `setting` (`id`, `language_id`, `title`, `email`, `phone`, `fax`, `address`, `footer_text`, `reseller_email`, `facebook`, `twitter`, `instagram`, `tiktok`, `logo`, `favico`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant', 'info@beyondant.com', '800 970-5877', '800 970-5877', '342 East 53rd Street, Suite #4EF\r\n\r\nNew York, NY 10022', 'A Smoother Way to Grow Your Business through Networking or Simply Grow Your Social Following\r\nCreate your Custom Digital Business Cards with us and increase your customer interaction despite social distancing.', 'sdumont@builtsocially.com', 'www.facebook.com/sheikh.usman.79274089', 'https://www.linkedin.com/feed/', 'www.instagram.com', 'www.tiktok.com', 'assets/uploads/setting/1648940280.png', 'assets/uploads/setting/1530317221.png', 1, '2020-03-20 02:15:29', 1, '2020-03-20 02:15:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_check` enum('Mobile','Phone','Office Number') COLLATE utf8mb4_unicode_ci DEFAULT 'Mobile',
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_check` tinyint(1) DEFAULT '0',
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
  `updated_by` int(11) DEFAULT NULL,
  `tiktok` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok_check` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`) VALUES
(1, 1, 'Beyondant Web', NULL, 'admin@demo.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', 'CO6sVeKYoxE4cK83ndxxa9nNuJbZzr5BUYS1Ak8gfup5M1g7ZevgdIJW1B9D', '1234567890', NULL, '', 'C.E.O', 'assets/admin/images/1162149681.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-03-11 20:50:54', NULL, NULL, 0),
(11, 1, 'Albert Custom', NULL, 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, '12345678910', NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL, NULL, 0),
(12, 2, 'Testing Fname Lname', 'qwerty', 'nb@nadocrm.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(031) 232-1321', '(234) 324-3243', 'Phone', 'Developer', 'assets/admin/images/251356155.jpg', 'assets/admin/images/770345224.jpg', 'qwerty', 'qwerty', 'qwertyfdg', 'street2', 'Newyork State', 'Newyork', 'USA', '32213', 'https://outsourceinpakistan.com/', 1, 'Address', 'https://outsourceinpakistan.com/', 0, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'https://outsourceinpakistan.com/', 0, 1, '2020-01-23 18:05:34', NULL, '2020-03-20 00:53:44', NULL, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0),
(14, 4, 'Master Admin', NULL, 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, '3333906233', NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL, NULL, 0),
(15, 0, 'Testing Fname Testing Lname', NULL, 'test@masdsanb.com', NULL, '', NULL, NULL, '123213213', '', NULL, '', '', 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, NULL, NULL, NULL, NULL, 0, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 12:59:18', NULL, '2020-03-10 12:59:18', NULL, NULL, 0),
(27, 2, 'Umair', NULL, 'smith@gmail.com', NULL, '$2y$10$9/7/ss3GpvrWh7WDooUVe.9bCxf7kG7tbAyah9tiQCJNmD4z0LrXK', NULL, '43534534543', '454354354354', 'Mobile', NULL, 'assets/admin/images/601208910.png', 'assets/admin/images/856559261.png', 'wqewqe', 'fsdfdsfd', 'dsfdsfd dsfds f', 'R2 St. 5/2 Block E North Nazimabad', NULL, NULL, NULL, NULL, 'http://myprojectstaging.com/', 0, 'Address', 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 1, '2020-03-12 03:33:21', NULL, '2020-03-12 03:33:21', NULL, NULL, 0),
(28, 2, 'asad', NULL, 'test@123.com', NULL, '$2y$10$KXZYlgxoNDz9clFPhrOGs.Jcg7E8HTej40590dMtfuN/Fvdpcqk2i', NULL, '23232323', '23232323', 'Mobile', NULL, '', '', 'adad', 'asad', 'test', 'fdgdf33', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:38:38', NULL, '2020-03-12 03:38:38', NULL, NULL, 0),
(29, 2, 'asad siddique', NULL, 'asad.siddiq07@gmail.com', NULL, '$2y$10$IsohB3sm73poRo6b8.QFse6bK3F9RCtr7Bf4HxooZlxLB16ewvYwW', NULL, '324234234', '324324324', 'Mobile', NULL, 'assets/admin/images/1134369862.jpg', 'assets/admin/images/150358304.jpg', 'test', 'test', 'rest', 'g-73, phase 2 , defence view', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:42:16', NULL, '2020-03-12 03:42:16', NULL, NULL, 0),
(30, 2, 'usman', NULL, 'usman.naveed@nadocrm.com', NULL, '$2y$10$R8ZoyBNg9pwZLYZyDMQRQubN0jfqKEwRtEn5vdQtPWK.lqJVBsgz2', NULL, '6094761640', '03352155171', 'Mobile', NULL, '', '', 'CEO', 'Outsource in Karachi', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-12 03:50:50', NULL, '2020-03-12 03:50:50', NULL, NULL, 0),
(31, 2, 'Daniyal', NULL, 'sheikhusman19@hotmail.com', NULL, '$2y$10$YtiJ2YJim5FUw5wxGOfnVeqoXgCCbw.hjNifyZabIDl.2CFIq41g6', NULL, '2542122225', '2821581455', 'Mobile', NULL, 'assets/admin/images/1334283108.png', 'assets/admin/images/376553203.jpg', 'CEO', 'Deepout', 'Clothing', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 17:18:38', NULL, '2020-03-12 17:18:38', NULL, NULL, 0),
(32, 2, 'usman', NULL, 'johnmethews1@outlook.com', NULL, '$2y$10$.qKdVrwnICdWEx6GXdjgNeYqVxiWP4fTAnWzfeU98/ZPBQ1.ZBXZW', NULL, '123456844', '12546215251', 'Mobile', NULL, 'assets/admin/images/1515907221.png', 'assets/admin/images/170086125.jpg', 'Manager', 'Outsource', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Website', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-12 22:42:39', NULL, '2020-03-12 23:35:46', NULL, NULL, 0),
(33, 2, 'tom', NULL, 'nb@nadocrddm.com', NULL, '$2y$10$DlLL9NlILqSm.kU.u7DXG.HBFNfFsExwGf7K0NszkZ0SZlrMCl7Y.', NULL, '34535435', '4543543543', 'Phone', NULL, 'assets/admin/images/1477711861.png', 'assets/admin/images/377888126.jpg', 'qwer', 'dsfdsf', 'dsfdsf', 'street2', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-13 21:30:23', NULL, '2020-03-13 21:42:23', NULL, '', 0),
(34, 2, 'Showzeb', NULL, 'showzeb@outsourceinpakistan.com', NULL, '$2y$10$mHkGY.TTzmra6SDfRHFFn.LpeTmwQLU/rZqPGLAqgmLDwdr5oel9q', NULL, '225148458', '25551485641', 'Phone', NULL, 'assets/admin/images/317446541.jpg', 'assets/admin/images/922174070.jpg', 'HOD', 'Technado', 'Outsourcing', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-13 21:56:13', NULL, '2020-03-13 21:56:13', NULL, NULL, 0),
(35, 2, 'Steve', NULL, 'steve@abc.com', NULL, '$2y$10$CGk9YfRZw5Ls/Rqrh74VQOEKBO.AodyUenWfWzvz4ra.5wp3kSvke', NULL, '215458212', '254811162', 'Mobile', NULL, 'assets/admin/images/2125395568.jpg', 'assets/admin/images/298908195.png', 'CEO', 'Built Socially', 'Software', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-13 22:00:48', NULL, '2020-03-14 01:47:16', NULL, '', 0),
(36, 2, 'Usman', 'naveed', 'usman@abc.com', NULL, '$2y$10$0/JN8lmdhq.tpRg7S6gdJusksx6fCxgGT9pE08QGt87UX5tPH4nUS', NULL, '(222) 222-2222', '(888) 888-8888', 'Mobile', NULL, 'assets/admin/images/28750152.png', 'assets/admin/images/319673600.jpg', 'CEO', 'Deja-Vu Solutions', 'Software House', 'ABCD 123', 'sindh', 'karachi', '', '75300', 'https://www.google.com/', 0, 'Address', 'www.linkedin.com/in/usman-naveed-168494b1/', 0, 'www.instagram.com/sheikhusman19/', 1, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-13 22:08:57', NULL, '2020-03-20 01:56:33', NULL, '', 0),
(38, 2, 'Marc Rubin', NULL, 'MRubin@Test.com', NULL, '$2y$10$ecAUtJF2DzVK.oDw.V3kmeWhoprgX.ObOJ7REM4HwAxjYn9T8HXuu', NULL, '4561234569', '4561234569', 'Mobile', NULL, '', '', 'CEO', 'Beyondant', 'Technology', '125 NW Victory Lane', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 00:16:45', NULL, '2020-03-14 00:17:22', NULL, '', 0),
(39, 2, 'Marc Sussman', NULL, 'MSussman@Test.com', NULL, '$2y$10$nGYzkPXoMdr9d4WISZKB3.0eNXM1Qe11.RGYv9vIq370mlHmg.ceq', NULL, '9545678764', '95456734543', '', NULL, 'assets/admin/images/2083810365.JPG', 'assets/admin/images/1940459301.jpg', 'CFO', 'Beyondant', 'Technology', '4563 SW Victory Lance Cooper City, FL 33342', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 11:59:37', NULL, '2020-03-14 12:09:42', NULL, '', 0),
(40, 2, 'lala', NULL, 'asad.siddiqui@nadocrm.com', NULL, '$2y$10$CQDCf1Yh/XOjAexclbUcrOH2P8tEvzzWvyUG7Fw5HnTpUDRBqz5.i', NULL, '23', '2365', '', NULL, '', '', 'lalala', 'lalala', 'lalala', 'asaas', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-16 17:26:29', NULL, '2020-03-16 17:26:29', NULL, NULL, 0),
(41, 2, 'dani', NULL, 'daniyal.ali@technado.co', NULL, '$2y$10$xQWum45sv6N21FJyW0E1N.cOriy5.RKMvwrRMFdhGTmfBcCaIwi3a', NULL, '456123', '456123', 'Mobile', NULL, '', '', 'lala', 'olala', 'lalaland', '456123', NULL, NULL, NULL, NULL, 'asaassa', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 17:44:57', NULL, '2020-03-16 17:44:57', NULL, NULL, 0),
(42, 2, 'daniyal', NULL, 'daniyal.ali@technado.com', NULL, '$2y$10$dGfaJ.podHQinZQ9UmEb.e864EsU9mP/mxUmBA7sWwL3ug/rD5WBe', NULL, '123456789', '789456123', 'Mobile', NULL, '', '', 'CEO', 'WOW', 'Kaam krti hai', 'nowhere', NULL, NULL, NULL, NULL, 'haha.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 17:59:47', NULL, '2020-03-16 18:00:27', NULL, '', 0),
(43, 2, 'daniyal', NULL, 'daniyal@outsourceinpakistan.com', NULL, '$2y$10$RPmVEdxi4hk7KnqybPP1guW0z/jDIkceA5xsoN3lIu0BAXk89vu1C', NULL, '123456', '456123', 'Mobile', NULL, 'assets/admin/images/1582413469.jfif', 'assets/admin/images/258525367.jpg', ':D', 'LALA', 'Kaam karti hai', 'nowhere', NULL, NULL, NULL, NULL, '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 18:10:35', NULL, '2020-03-17 00:01:49', NULL, '', 0),
(44, 2, 'Robert', 'Jones', 'RJones@CoolTech.com', NULL, '$2y$10$mUXzWC5Y5tJiE2JFT6ZTIeKwuib9RfwfH2WzNushbnIjK7zdai4WO', NULL, '4562347896', '4464568542', 'Mobile', NULL, 'assets/admin/images/179986367.JPG', 'assets/admin/images/2115260670.jpg', 'CEO/Founder', 'Cool Tech Enterprises', 'Technology', '451 SW Victory Lane', 'Florida', 'Cooper City', 'Test', '33331', 'www.yahoo.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 22:28:15', NULL, '2020-03-16 22:28:15', NULL, NULL, 0),
(45, 2, 'Testing Fname Lname', 'Testing Fname Lname', 'nb@nadocrmd.com', NULL, '$2y$10$0yS9mTgZJ3w1mVzEEoUMlev8vrRiGq7vb9lWd2gsuvuhjF.PBnsuu', NULL, '324324324324', '342324324324', '', NULL, 'assets/admin/images/146227966.jpg', 'assets/admin/images/1248730661.jpg', 'sfdfsdf', 'sdfdsf', 'sdfdsfdf', 'street2', 'Punjab', 'Islamabad', 'qwewqe', '72900', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'www.instagram.com/', 0, 'www.facebook.com', 0, 1, '2020-03-16 22:32:35', NULL, '2020-03-16 22:32:35', NULL, NULL, 0),
(46, 2, 'Marc', 'Rubin', 'MRubin@Test2.com', NULL, '$2y$10$.BxJuqMg9RtedGtV4wdLZOBLalUG9Lub/HTY.enQB2EhstNdpfgD6', NULL, '(456) 213-6987', '(546) 321-4569', 'Mobile', NULL, 'assets/admin/images/2029446747.JPG', 'assets/admin/images/64066282.jpg', 'CEO/Founder', 'Beyondant', 'Technology Company', '455 Victory Lane', 'Florida', 'Cooper City', '', '23332', 'https://beyondant.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 23:16:14', NULL, '2020-03-20 02:41:07', NULL, '', 0),
(47, 2, 'Usman', 'Naveed', 'naveed@abc.com', NULL, '$2y$10$hbA/jx7k.3UjHsnLC2JQgexvbFEILTOBgWJA//1o7GDdzSKzlsYPG', NULL, '0', '(125) 848-4586', 'Mobile', NULL, '', '', 'S.M', 'Company', 'Technology', 'street 22', 'sindh', 'karachi', '', '76822000', 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-19 21:35:16', NULL, '2020-03-19 21:35:16', NULL, NULL, 0),
(48, 2, 'Steve', 'D', 'steve@abcd.com', NULL, '$2y$10$704Xvf4VrROiXuRKvGibwe.bgZ2Y4opJPvX4FTDLS3UCGinD22nP2', NULL, '0', '(125) 555-5555', 'Mobile', NULL, 'assets/admin/images/389819369.png', 'assets/admin/images/361533621.jpg', 'CEO', 'built', 'Technology', 'street 22', 'New York', 'New York', '', '1521148', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-19 21:39:44', NULL, '2020-03-19 21:39:44', NULL, NULL, 0),
(49, 2, 'Nathan', 'Wilson', 'nathan@demo.com', NULL, '$2y$10$ar4ypoCULl.LfqMucVhUB..69mcrSMXQXLJjLnbQy9Sv6BcX8Bt2S', NULL, '(111) 111-1111', '(222) 222-2222', 'Phone', NULL, 'assets/admin/images/1101614631.png', 'assets/admin/images/139622300.jpg', 'Marketing Manager', 'Nado', 'Software house', 'Street 24', 'Huston', 'New York', '', '512844', 'beyondant.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 1, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:17:23', NULL, '2020-03-20 00:22:03', NULL, '', 0),
(50, 2, 'Usman', 'snhdfjknASJfn', 'usman@abcde.com', NULL, '$2y$10$oxKVki4Zk03pxnmsw9BFvOFiJ8jDtvw9LGa0hEIruxBXmL.QgXSJq', NULL, '(111) 111-1111', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/497171588.png', 'assets/admin/images/2055233230.jpg', 'usman786', 'usman786', 'usman786', 'ABCD 123', 'usman786', 'usman786', '', 'usman786', 'https://www.google.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:24:51', NULL, '2020-03-20 00:26:17', NULL, '', 0),
(51, 2, 'Usman', 'Naveed', 'usman@nado.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(222) 222-2222', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/525013690.png', 'assets/admin/images/1596648536.png', 'Asst. Manager', 'Nado', 'Software house', 'ABCD 123', 'New York', 'New York', '', '512221', 'https://www.google.com/', 1, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:52:28', NULL, '2020-03-20 00:56:12', NULL, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
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
-- Indexes for table `reseller`
--
ALTER TABLE `reseller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reseller_email_uindex` (`email`);

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
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `reseller`
--
ALTER TABLE `reseller`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
