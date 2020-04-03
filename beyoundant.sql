-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 09:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beyoundant`
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
(1, 'Custom Digital Business Cards, Profile Sharing Bracelets & More', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination. The Coronavirus has now changed the way we conduct business. Social Distancing is the new normal. Our solution is in high demand because it is easy, fast and works seamlessly with ironclad security features with just a smartphone tap on any of our devices, thereby eliminating the need for physical exchanges. This excludes the need for physical exchanges. Evolved from radio frequency identification (RFID) technology, our various devices and applications are reshaping our world.', 'A Smoother Way To Grow Your Business Through Networking Or Simply Grow Your Social Following', 'Create your Custom Digital Business Cards with us and increase your customer interaction despite social distancing. There\'s no need to shake hands or touch unnecessary material. Use our technology to track customer behavior, customer satisfaction and demands all the while maintaining strict customer business confidentiality. Enable secure online shopping and create loyalty programs with the use of our Custom cards, Bracelets tags, stickers and other NFC enabled devices and give your business and social presence a boom.', 'Beyondant will save you time and money', '88% of business cards are thrown away when given to prospects or contacts. Now with the concern of bacterial transfer the percentage of discarded business cards is on the rise. Our devices allow all your contact or profile information to be accessed and saved within seconds. Your contacts/prospects can save your information to their smartphone rapidly. The transfer of your desired destination is provided by humans which ensure the highest levels of privacy and security.', 'Target leads more efficiently', 'Access the contact information of all customer and business interactions on the go with us, in addition to automatic data storage regarding time and venue within your smart phone’s contacts.', 'Availble On Mobile Phones And Desktop PC\'s', 'Change your contact detail easily with either your mobile phone or desktop PC when needed. Our user interface is very straight forward. Designed with non technical individuals in mind. Display the information you care about most.', 'Our Products', 'At this moment we have four products which leverage Near Field Communications and Beyondant’s Profile sharing platform namely Profile Sharing Bracelet, Digital Custom Business Cards, Bemorial Tags and Smart Stickers. This platform serves businesses of all industries as well as the everyday Consumers where it takes seconds to digitally share contact details, social media profiles, internet marketing information, corporate web site or relevant online information.', 'assets/uploads/home/1701610658.png', 'Design Your First Digital Business Card In Seconds', 'Get a state-of-the-art digital business card with unlimited changes to your contact details. Add your graphic file and your profile picture quickly and with ease. Compatible with iPhone, Android, Desktop and tablets. You can share it via SMS, email, WhatsApp and more. Help your customers remember you!. Create your free account to get started!', 'assets/uploads/home/649868911.jpg', 'https://www.youtube.com/embed/MDUX6OpSspQ', 1, '2020-03-22 13:33:13', 1, '2020-03-22 13:33:13', NULL);

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alisyedamir2018@gmail.com', '$2y$10$JlKK1hMzI0P6E5ejTRFGYuPdKwWBl.hUdPGFMK5pMgwXvqnABNMNC', '2020-04-02 14:42:26');

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
  `company` varchar(255) DEFAULT NULL,
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
  `business_status` enum('Corporation','Partnership','Individual','No Business Formed','Other (Please Specify)') NOT NULL,
  `business_status_description` text,
  `date_organized` datetime DEFAULT NULL,
  `name_of_owner` varchar(255) DEFAULT NULL,
  `about_beyondant` text NOT NULL,
  `num_of_locations` int(5) UNSIGNED DEFAULT NULL,
  `total_employees` int(11) UNSIGNED DEFAULT NULL,
  `sales_employees` int(11) UNSIGNED DEFAULT NULL,
  `preferred_territory` varchar(255) NOT NULL,
  `brands` varchar(255) DEFAULT NULL,
  `approx_turnover` enum('$0 - $1 Million','$1 - $10 Million','$10+ Million','Others (Please Specify)') DEFAULT NULL,
  `approx_turnover_description` text,
  `beyondant_promotion` datetime NOT NULL,
  `short_paragraph` text NOT NULL,
  `agreement` int(1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reseller`
--

INSERT INTO `reseller` (`id`, `f_name`, `l_name`, `company`, `email`, `website`, `address`, `address_line_two`, `city`, `state`, `country`, `postal_code`, `fed_tax_id`, `business_phone`, `business_status`, `business_status_description`, `date_organized`, `name_of_owner`, `about_beyondant`, `num_of_locations`, `total_employees`, `sales_employees`, `preferred_territory`, `brands`, `approx_turnover`, `approx_turnover_description`, `beyondant_promotion`, `short_paragraph`, `agreement`, `created_at`, `updated_at`) VALUES
(8, 'Yosef', 'Klugman', 'Mr Toner USA', 'yosef@mrtonerusa.com', 'www.mrtonerusa.com', '1321', 'NE 173rd St', 'Miami', 'FL', 'USA', '33162', '47-5309510', '7863038457', 'Corporation', NULL, '2015-10-02 00:00:00', 'Yosef Klugman', 'LinkedIn', 1, 2, 2, 'Miami', 'HP, Samsung, Canon, Lexmark', '$0 - $1 Million', NULL, '2020-03-23 00:00:00', 'ASAP', 0, NULL, NULL),
(9, 'David', 'Dussman', 'Dussman Enterprises', 'DDussman@Test.com', 'www.Dussman.com', '2222 Victory Lane', '2222222', 'Coooper City', 'FL', 'US', '33321', '111111111', '2222222222', 'Individual', NULL, '2020-03-23 00:00:00', 'David Dussman', 'Marc Rubin\'s LinkedIn', 13, 20, 10, 'Miami Dade', 'Vista Print', '$0 - $1 Million', NULL, '2020-03-30 00:00:00', 'Now', 0, NULL, NULL),
(17, 'dsfsd', 'fsdfsd', 'dsfsdf', 'nb@nadocrm.com', 'dsfsdfdsfsd', 'street2', 'dsfdsf', 'sdfsdf', 'sdfsdf', 'DEsdfsdf', '2344543', 'dffdsf', '435345', 'Corporation', NULL, '2020-04-04 00:00:00', 'gfsdf', 'gdfgdfgdf', 435345, 3443543543, 453435, 'fedgdf', 'fxfxfcv', '$0 - $1 Million', NULL, '2020-04-03 00:00:00', 'gdfgdfg', 0, NULL, NULL),
(18, 'Nabeel', 'Baig', NULL, 'mathswithnabeel@gmail.com', NULL, 'street2', NULL, 'karachi', 'Sindh', 'DE', '75290', '1234', NULL, 'No Business Formed', NULL, NULL, NULL, 'rty', 123, NULL, NULL, 'try', NULL, '$1 - $10 Million', NULL, '2020-03-13 00:00:00', 'try', 0, NULL, NULL),
(19, 'Test', 'System', 'Test Company', 'Test@Demo.com', 'www.Test.com', '2222 Victory Lane', '2222', 'Victory City', 'New York', 'US', '33321', '2215', '222222222', 'No Business Formed', NULL, NULL, NULL, 'Online Marketing', 12, 1, NULL, 'South East', NULL, '$0 - $1 Million', NULL, '2020-03-23 00:00:00', 'As soon as approved.', 0, NULL, NULL),
(20, 'dsf', 'sdaf', 'sdfsd', 'mathswithnabeesl@gmail.com', NULL, 'street2', NULL, 'asd', 'sadsad', 'DE', '234', '3333', '34324', 'Corporation', NULL, NULL, NULL, 'dsfas', 213, NULL, NULL, 'asdf', NULL, '$1 - $10 Million', NULL, '2020-03-27 00:00:00', 'asdf', 0, NULL, NULL),
(21, 'fd', 'dfsg', 'dsf', 'nb@nadorrcrm.com', 'dsfg', 'street2', NULL, 'ds', 'dfs', 'DE', '234', '5555', '534534', 'Individual', NULL, NULL, NULL, 'dfg', 435, 435, NULL, 'dfg', NULL, '$10+ Million', NULL, '2020-03-21 00:00:00', 'dfg', 0, NULL, NULL),
(22, 'Bob', 'Antoville', NULL, 'bantov@gmail.com', NULL, '13924 Via Flora', 'Unit G', 'Delray Beach', 'FL', 'USA', '33484', '4416', '9146491300', 'Individual', NULL, NULL, NULL, 'M Rubin', 1, NULL, NULL, 'USA Select Clients', NULL, '$0 - $1 Million', NULL, '2020-04-01 00:00:00', 'ASAP', 0, NULL, NULL),
(23, 'Kurt', 'Eisinger', NULL, 'eisingerk2@gmail.com', NULL, '93 Erie Ave', NULL, 'Rockaway', 'NJ', 'US', '07866', '0000', '9733494146', 'No Business Formed', 'LLC', NULL, NULL, 'Regel Group', 1, NULL, NULL, 'Any', NULL, '$0 - $1 Million', NULL, '2020-03-26 00:00:00', 'As soon as possible', 0, NULL, NULL);

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
  `reseller_text` text COLLATE utf8mb4_unicode_ci,
  `reseller_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favico` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `language_id`, `title`, `email`, `phone`, `fax`, `address`, `footer_text`, `reseller_text`, `reseller_email`, `facebook`, `linkedin`, `instagram`, `tiktok`, `logo`, `favico`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant', 'info@beyondant.com', '800 970-5877', '800 970-5877', '342 East 53rd Street, Suite #4EF\r\n\r\nNew York, NY 10022', 'A Smoother Way to Grow Your Business through Networking or Simply Grow Your Social Following.\r\nCreate your Custom Digital Business Cards with us and increase your customer interaction despite social distancing.', 'Calling qualified entrepreneurs! Join a growing network of Authorized Resellers and build a solid stream of income. Earn 20% or more in monthly commissions. Allow 7 business days for your application to be reviewed. We will be in touch soon and look forward to working with you!', 'resellers@beyondant.com', 'https://www.facebook.com/', 'https://www.linked.com', 'https://www.instagram.com/', 'https://www.tiktok.com/', 'assets/uploads/setting/1648940280.png', 'assets/uploads/setting/1530317221.png', 1, '2020-03-24 04:49:10', 1, '2020-03-24 04:49:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'alisyedamir2018@gmail.com', '2020-04-03 11:30:02', '2020-04-03 11:30:02'),
(2, 'diana123@gmail.com', '2020-04-03 11:32:33', '2020-04-03 11:32:33');

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
  `tiktok_check` tinyint(1) DEFAULT '0',
  `acc_type` enum('personal','company') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `acc_type`, `parent_id`) VALUES
(1, 1, 'Beyondant Web', NULL, 'admin@demo.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', 'ZWH4yzZxCSdo4jPLGz68htpKreFzfqi5EMvYmIB5c6HbXNnYHXwushSmLwC7', '1234567890', NULL, '', 'C.E.O', 'assets/admin/images/1162149681.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-03-11 20:50:54', NULL, NULL, 0, 'personal', 0),
(11, 1, 'Albert Custom', NULL, 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, '12345678910', NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL, NULL, 0, 'personal', 0),
(12, 2, 'Testing Fname Lname', 'qwerty', 'nb@nadocrm.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(031) 232-1329 ___', '(234) 324-3243', 'Office Number', 'Developer', 'assets/admin/images/767582880.jpg', 'assets/admin/images/770345224.jpg', 'qwerty', 'qwerty', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'street2', 'Newyork State', 'Newyork', 'USA', '32213', 'https://outsourceinpakistan.com/profile/12324234324234234234234234', 0, 'Website', 'https://outsourceinpakistan.com/', 0, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'https://outsourceinpakistan.com/', 0, 1, '2020-01-23 18:05:34', NULL, '2020-03-24 02:22:06', NULL, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'personal', 0),
(14, 4, 'Master Admin', NULL, 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, '3333906233', NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL, NULL, 0, 'personal', 0),
(15, 0, 'Testing Fname Testing Lname', NULL, 'test@masdsanb.com', NULL, '', NULL, NULL, '123213213', '', NULL, '', '', 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, NULL, NULL, NULL, NULL, 0, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 12:59:18', NULL, '2020-03-10 12:59:18', NULL, NULL, 0, 'personal', 0),
(27, 2, 'Umair', NULL, 'smith@gmail.com', NULL, '$2y$10$9/7/ss3GpvrWh7WDooUVe.9bCxf7kG7tbAyah9tiQCJNmD4z0LrXK', NULL, '43534534543', '454354354354', 'Mobile', NULL, 'assets/admin/images/601208910.png', 'assets/admin/images/856559261.png', 'wqewqe', 'fsdfdsfd', 'dsfdsfd dsfds f', 'R2 St. 5/2 Block E North Nazimabad', NULL, NULL, NULL, NULL, 'http://myprojectstaging.com/', 0, 'Address', 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 1, '2020-03-12 03:33:21', NULL, '2020-03-12 03:33:21', NULL, NULL, 0, 'personal', 0),
(28, 2, 'asad', NULL, 'test@123.com', NULL, '$2y$10$KXZYlgxoNDz9clFPhrOGs.Jcg7E8HTej40590dMtfuN/Fvdpcqk2i', NULL, '23232323', '23232323', 'Mobile', NULL, '', '', 'adad', 'asad', 'test', 'fdgdf33', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:38:38', NULL, '2020-03-12 03:38:38', NULL, NULL, 0, 'personal', 0),
(29, 2, 'asad siddique', NULL, 'asad.siddiq07@gmail.com', NULL, '$2y$10$IsohB3sm73poRo6b8.QFse6bK3F9RCtr7Bf4HxooZlxLB16ewvYwW', NULL, '324234234', '324324324', 'Mobile', NULL, 'assets/admin/images/1134369862.jpg', 'assets/admin/images/150358304.jpg', 'test', 'test', 'rest', 'g-73, phase 2 , defence view', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:42:16', NULL, '2020-03-12 03:42:16', NULL, NULL, 0, 'personal', 0),
(30, 2, 'usman', NULL, 'usman.naveed@nadocrm.com', NULL, '$2y$10$R8ZoyBNg9pwZLYZyDMQRQubN0jfqKEwRtEn5vdQtPWK.lqJVBsgz2', NULL, '6094761640', '03352155171', 'Mobile', NULL, '', '', 'CEO', 'Outsource in Karachi', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-12 03:50:50', NULL, '2020-03-12 03:50:50', NULL, NULL, 0, 'personal', 0),
(31, 2, 'Daniyal', NULL, 'sheikhusman19@hotmail.com', NULL, '$2y$10$YtiJ2YJim5FUw5wxGOfnVeqoXgCCbw.hjNifyZabIDl.2CFIq41g6', NULL, '2542122225', '2821581455', 'Mobile', NULL, 'assets/admin/images/1334283108.png', 'assets/admin/images/376553203.jpg', 'CEO', 'Deepout', 'Clothing', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 17:18:38', NULL, '2020-03-12 17:18:38', NULL, NULL, 0, 'personal', 0),
(32, 2, 'usman', NULL, 'johnmethews1@outlook.com', NULL, '$2y$10$.qKdVrwnICdWEx6GXdjgNeYqVxiWP4fTAnWzfeU98/ZPBQ1.ZBXZW', NULL, '123456844', '12546215251', 'Mobile', NULL, 'assets/admin/images/1515907221.png', 'assets/admin/images/170086125.jpg', 'Manager', 'Outsource', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Website', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-12 22:42:39', NULL, '2020-03-12 23:35:46', NULL, NULL, 0, 'personal', 0),
(33, 2, 'tom', NULL, 'nb@nadocrddm.com', NULL, '$2y$10$DlLL9NlILqSm.kU.u7DXG.HBFNfFsExwGf7K0NszkZ0SZlrMCl7Y.', NULL, '34535435', '4543543543', 'Phone', NULL, 'assets/admin/images/1477711861.png', 'assets/admin/images/377888126.jpg', 'qwer', 'dsfdsf', 'dsfdsf', 'street2', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-13 21:30:23', NULL, '2020-03-13 21:42:23', NULL, '', 0, 'personal', 0),
(34, 2, 'Showzeb', NULL, 'showzeb@outsourceinpakistan.com', NULL, '$2y$10$mHkGY.TTzmra6SDfRHFFn.LpeTmwQLU/rZqPGLAqgmLDwdr5oel9q', NULL, '225148458', '25551485641', 'Phone', NULL, 'assets/admin/images/317446541.jpg', 'assets/admin/images/922174070.jpg', 'HOD', 'Technado', 'Outsourcing', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-13 21:56:13', NULL, '2020-03-13 21:56:13', NULL, NULL, 0, 'personal', 0),
(35, 2, 'Steve', NULL, 'steve@abc.com', NULL, '$2y$10$CGk9YfRZw5Ls/Rqrh74VQOEKBO.AodyUenWfWzvz4ra.5wp3kSvke', NULL, '215458212', '254811162', 'Mobile', NULL, 'assets/admin/images/2125395568.jpg', 'assets/admin/images/298908195.png', 'CEO', 'Built Socially', 'Software', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-13 22:00:48', NULL, '2020-03-14 01:47:16', NULL, '', 0, 'personal', 0),
(36, 2, 'Usman', 'naveed', 'usman@abc.com', NULL, '$2y$10$0/JN8lmdhq.tpRg7S6gdJusksx6fCxgGT9pE08QGt87UX5tPH4nUS', NULL, '(222) 222-2222', '(888) 888-8888', 'Mobile', NULL, 'assets/admin/images/28750152.png', 'assets/admin/images/319673600.jpg', 'CEO', 'Deja-Vu Solutions', 'Software House', 'ABCD 123', 'sindh', 'karachi', '', '75300', 'https://www.google.com/', 0, 'Address', 'www.linkedin.com/in/usman-naveed-168494b1/', 0, 'www.instagram.com/sheikhusman19/', 1, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-13 22:08:57', NULL, '2020-03-20 01:56:33', NULL, '', 0, 'personal', 0),
(38, 2, 'Marc Rubin', NULL, 'MRubin@Test.com', NULL, '$2y$10$ecAUtJF2DzVK.oDw.V3kmeWhoprgX.ObOJ7REM4HwAxjYn9T8HXuu', NULL, '4561234569', '4561234569', 'Mobile', NULL, '', '', 'CEO', 'Beyondant', 'Technology', '125 NW Victory Lane', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 00:16:45', NULL, '2020-03-14 00:17:22', NULL, '', 0, 'personal', 0),
(39, 2, 'Marc Sussman', NULL, 'MSussman@Test.com', NULL, '$2y$10$nGYzkPXoMdr9d4WISZKB3.0eNXM1Qe11.RGYv9vIq370mlHmg.ceq', NULL, '9545678764', '95456734543', '', NULL, 'assets/admin/images/2083810365.JPG', 'assets/admin/images/1940459301.jpg', 'CFO', 'Beyondant', 'Technology', '4563 SW Victory Lance Cooper City, FL 33342', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 11:59:37', NULL, '2020-03-14 12:09:42', NULL, '', 0, 'personal', 0),
(40, 2, 'lala', NULL, 'asad.siddiqui@nadocrm.com', NULL, '$2y$10$CQDCf1Yh/XOjAexclbUcrOH2P8tEvzzWvyUG7Fw5HnTpUDRBqz5.i', NULL, '23', '2365', '', NULL, '', '', 'lalala', 'lalala', 'lalala', 'asaas', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-16 17:26:29', NULL, '2020-03-16 17:26:29', NULL, NULL, 0, 'personal', 0),
(41, 2, 'dani', NULL, 'daniyal.ali@technado.co', NULL, '$2y$10$xQWum45sv6N21FJyW0E1N.cOriy5.RKMvwrRMFdhGTmfBcCaIwi3a', NULL, '456123', '456123', 'Mobile', NULL, '', '', 'lala', 'olala', 'lalaland', '456123', NULL, NULL, NULL, NULL, 'asaassa', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 17:44:57', NULL, '2020-03-16 17:44:57', NULL, NULL, 0, 'personal', 0),
(42, 2, 'daniyal', NULL, 'daniyal.ali@technado.com', NULL, '$2y$10$dGfaJ.podHQinZQ9UmEb.e864EsU9mP/mxUmBA7sWwL3ug/rD5WBe', NULL, '123456789', '789456123', 'Mobile', NULL, '', '', 'CEO', 'WOW', 'Kaam krti hai', 'nowhere', NULL, NULL, NULL, NULL, 'haha.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 17:59:47', NULL, '2020-03-16 18:00:27', NULL, '', 0, 'personal', 0),
(43, 2, 'daniyal', NULL, 'daniyal@outsourceinpakistan.com', NULL, '$2y$10$RPmVEdxi4hk7KnqybPP1guW0z/jDIkceA5xsoN3lIu0BAXk89vu1C', NULL, '123456', '456123', 'Mobile', NULL, 'assets/admin/images/1582413469.jfif', 'assets/admin/images/258525367.jpg', ':D', 'LALA', 'Kaam karti hai', 'nowhere', NULL, NULL, NULL, NULL, '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 18:10:35', NULL, '2020-03-17 00:01:49', NULL, '', 0, 'personal', 0),
(44, 2, 'Robert', 'Jones', 'RJones@CoolTech.com', NULL, '$2y$10$mUXzWC5Y5tJiE2JFT6ZTIeKwuib9RfwfH2WzNushbnIjK7zdai4WO', NULL, '4562347896', '4464568542', 'Mobile', NULL, 'assets/admin/images/179986367.JPG', 'assets/admin/images/2115260670.jpg', 'CEO/Founder', 'Cool Tech Enterprises', 'Technology', '451 SW Victory Lane', 'Florida', 'Cooper City', 'Test', '33331', 'www.yahoo.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 22:28:15', NULL, '2020-03-16 22:28:15', NULL, NULL, 0, 'personal', 0),
(45, 2, 'Testing Fname Lname', 'Testing Fname Lname', 'nb@nadocrmd.com', NULL, '$2y$10$0yS9mTgZJ3w1mVzEEoUMlev8vrRiGq7vb9lWd2gsuvuhjF.PBnsuu', NULL, '324324324324', '342324324324', '', NULL, 'assets/admin/images/146227966.jpg', 'assets/admin/images/1248730661.jpg', 'sfdfsdf', 'sdfdsf', 'sdfdsfdf', 'street2', 'Punjab', 'Islamabad', 'qwewqe', '72900', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'www.instagram.com/', 0, 'www.facebook.com', 0, 1, '2020-03-16 22:32:35', NULL, '2020-03-16 22:32:35', NULL, NULL, 0, 'personal', 0),
(46, 2, 'Marc', 'Rubin', 'MRubin@Test2.com', NULL, '$2y$10$.BxJuqMg9RtedGtV4wdLZOBLalUG9Lub/HTY.enQB2EhstNdpfgD6', NULL, '(456) 213-6987', '(546) 321-4569', 'Mobile', NULL, 'assets/admin/images/2029446747.JPG', 'assets/admin/images/64066282.jpg', 'CEO/Founder', 'Beyondant', 'Technology Company', '455 Victory Lane', 'Florida', 'Cooper City', '', '23332', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 0, 'Address', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, 'https://www.facebook.com/theregelgroupllc/', 0, 1, '2020-03-16 23:16:14', NULL, '2020-03-23 22:22:12', NULL, '', 0, 'personal', 0),
(47, 2, 'Usman', 'Naveed', 'naveed@abc.com', NULL, '$2y$10$hbA/jx7k.3UjHsnLC2JQgexvbFEILTOBgWJA//1o7GDdzSKzlsYPG', NULL, '0', '(125) 848-4586', 'Mobile', NULL, '', '', 'S.M', 'Company', 'Technology', 'street 22', 'sindh', 'karachi', '', '76822000', 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-19 21:35:16', NULL, '2020-03-19 21:35:16', NULL, NULL, 0, 'personal', 0),
(48, 2, 'Steve', 'D', 'steve@abcd.com', NULL, '$2y$10$704Xvf4VrROiXuRKvGibwe.bgZ2Y4opJPvX4FTDLS3UCGinD22nP2', NULL, '0', '(125) 555-5555', 'Mobile', NULL, 'assets/admin/images/389819369.png', 'assets/admin/images/361533621.jpg', 'CEO', 'built', 'Technology', 'street 22', 'New York', 'New York', '', '1521148', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-19 21:39:44', NULL, '2020-03-19 21:39:44', NULL, NULL, 0, 'personal', 0),
(49, 2, 'Nathan', 'Wilson', 'nathan@demo.com', NULL, '$2y$10$ar4ypoCULl.LfqMucVhUB..69mcrSMXQXLJjLnbQy9Sv6BcX8Bt2S', NULL, '(111) 111-1111', '(222) 222-2222', 'Phone', NULL, 'assets/admin/images/1101614631.png', 'assets/admin/images/139622300.jpg', 'Marketing Manager', 'Nado', 'Software house', 'Street 24', 'Huston', 'New York', '', '512844', 'beyondant.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 1, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:17:23', NULL, '2020-03-20 00:22:03', NULL, '', 0, 'personal', 0),
(50, 2, 'Usman', 'snhdfjknASJfn', 'usman@abcde.com', NULL, '$2y$10$oxKVki4Zk03pxnmsw9BFvOFiJ8jDtvw9LGa0hEIruxBXmL.QgXSJq', NULL, '(111) 111-1111', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/497171588.png', 'assets/admin/images/2055233230.jpg', 'usman786', 'usman786', 'usman786', 'ABCD 123', 'usman786', 'usman786', '', 'usman786', 'https://www.google.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:24:51', NULL, '2020-03-20 00:26:17', NULL, '', 0, 'personal', 0),
(51, 2, 'Usman', 'Naveed', 'usman@nado.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(222) 222-2222', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/525013690.png', 'assets/admin/images/1596648536.png', 'Asst. Manager', 'Nado', 'Software house', 'ABCD 123', 'New York', 'New York', '', '512221', 'https://www.google.com/', 1, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:52:28', NULL, '2020-03-20 00:56:12', NULL, '', 0, 'personal', 0),
(52, 2, 'Nabeel', 'Baig', 'mathswithnabeel@gmail.com', NULL, '$2y$10$PAptzROL2xB.8n79uNSytePNuKtgjwQ5udt3wM4XGlaZxzFNXD7pK', NULL, '(333) 390-6233', '(333) 390-6233', 'Mobile', NULL, 'assets/admin/images/1361536062.jpg', 'assets/admin/images/499532749.jpg', 'mnb', 'mnbTech', 'mnbTech Software House', 'H-104, Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'https://www.instagram.com/number3.pk/', 0, 'https://www.facebook.com/mnbprofile', 0, 1, '2020-03-20 17:49:20', NULL, '2020-03-20 17:55:24', NULL, NULL, 0, 'personal', 0),
(53, 2, 'Testing Fname Lname', 'sdsad', 'nb@nadofdgcrm.com', NULL, '$2y$10$j6zI066zg0BrSE/Ce9N6X.2T4CJKFJ2LcAamnhovZrNyYdY8kvPiK', NULL, '(123) 213-1233', '(432) 432-4324', 'Phone', NULL, 'assets/admin/images/748527921.jpg', 'assets/admin/images/751150779.jpg', 'fdsfdsf', 'sadsad', 'sdsadsad', 'street2', 'sadsad', 'sadsad', '', '75290', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-20 19:08:49', NULL, '2020-03-20 19:08:49', NULL, NULL, 0, 'personal', 0),
(54, 2, 'Usman', 'Naveed', 'usman@outsourceinpakistan.com', NULL, '$2y$10$sCn9XFe8c1ceDUswy563LeF9kb.6a7JMhRSm6m/3WRq0YELmlUxJK', NULL, '(609) 476-1640', '(335) 215-5171', 'Office Number', NULL, 'assets/admin/images/934211422.png', 'assets/admin/images/1860390530.jpg', 'Asst.Manager', 'Outsource in Pakistan', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'Park Avenue', 'Sindh', 'Karachi', '', '75300', 'https://outsourceinpakistan.com/', 0, 'Website', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, 'https://www.instagram.com/sheikhusman19/', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-20 21:56:29', NULL, '2020-03-20 22:00:27', NULL, '', 0, 'personal', 0),
(55, 2, 'Joe\'l', 'Perkins', 'JPerkins@GreenAcresNissan.com', NULL, '$2y$10$EzKwbZ0K7EFnnsU258uvzuFSOapfwcXbllrYaQ/KBt4f/JxhsSB0W', NULL, '(561) 537-5300', '(561) 537-5210', 'Mobile', NULL, 'assets/admin/images/726938444.png', 'assets/admin/images/50308396.png', 'Service Director', 'Nissan Greenacres', 'Nissan Greenacres Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 21:58:24', NULL, '2020-03-21 22:10:01', NULL, '', 0, 'personal', 0),
(56, 2, 'Carlo', 'Renda', 'CRenda@GreenAcresNissan.com', NULL, '$2y$10$fO0Xheh7yWXN6vQsljtmMekWxTCdXkmLYfElfLl9/Yp8qP1cF.E1.', NULL, '(561) 537-5300', '(561) 537-5217', 'Mobile', NULL, 'assets/admin/images/255643792.png', 'assets/admin/images/1273146008.png', 'Preowned Sales Manager', 'Greenacres Nissan', 'Nissan Greenacres Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:32:12', NULL, '2020-03-21 22:32:12', NULL, NULL, 0, 'personal', 0),
(57, 2, 'Kylinn', 'Dominguez', 'KDominguez@GreenAcresNissan.com', NULL, '$2y$10$91JmDVmeDx3.iFgVDbVl/OIBs7ERcoxrPU.NYk6lNv2KSwEfVRbca', NULL, '(561) 537-5300', '(561) 537-5224', 'Mobile', NULL, 'assets/admin/images/795878240.png', 'assets/admin/images/1732188437.png', 'Client/Owner Loyalty Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:53:21', NULL, '2020-03-21 22:56:32', NULL, '', 0, 'personal', 0),
(58, 2, 'Mike', 'Pennachio', 'MPennachio@GreenAcresNissan.com', NULL, '$2y$10$AWSmK.LJQuQl.I5Wdy6FWeLE0M2Mv0K9Iu2kczPnHp3ld360Z4Kji', NULL, '(561) 537-5300', '(561) 491-4310', 'Mobile', NULL, 'assets/admin/images/243250041.png', 'assets/admin/images/1158578195.png', 'Executive Manager/Owner', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 23:57:23', NULL, '2020-03-21 23:57:23', NULL, NULL, 0, 'personal', 0),
(59, 2, 'Dane', 'Luca', 'Dluca@GreenAcresNissan.com', NULL, '$2y$10$lAhoq.ho4.uzLiI1A/akBOAZ8jMn4oFhLf3izuZwhHY8und2U5oWm', NULL, '(561) 537-5509', '(561) 282-1764', 'Mobile', NULL, 'assets/admin/images/1593165740.png', 'assets/admin/images/108464897.png', 'General Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:08:21', NULL, '2020-03-22 00:08:21', NULL, NULL, 0, 'personal', 0),
(60, 2, 'Jesus', 'Rodriguez', 'JRodriguez@GreenAcresNissan.com', NULL, '$2y$10$iHaIhDoh2OgyWlt7AW4xHemUMqjLE01zATf1LcKd18l1VtyTxfU3m', NULL, '(561) 537-5300', '(561) 282-1721', 'Mobile', NULL, 'assets/admin/images/2066709945.png', 'assets/admin/images/140106319.png', 'General Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:25:02', NULL, '2020-03-22 00:25:02', NULL, NULL, 0, 'personal', 0),
(61, 2, 'Frank', 'Dellatto', 'FDellatoo@Greenacres.com', NULL, '$2y$10$GBZoC1WT9q3g.FLiLdYkNOHvXOGYudBK825L7i5.ToCB9r7CxpgkS', NULL, '(561) 537-5300', '(954) 496-2677', 'Mobile', NULL, 'assets/admin/images/249042804.png', 'assets/admin/images/1374469020.png', 'General Floor Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:27:58', NULL, '2020-03-22 00:27:58', NULL, NULL, 0, 'personal', 0),
(62, 2, 'Alicia', 'Narcisse', 'Anarcisse@Quest-comm.com', NULL, '$2y$10$obhSiVJ.IRBP98oy5aDqKecL1ltWvX4WQOlHpNwU924qJ2g7jp2Le', NULL, '(919) 322-0799', '(222) 222-2222', 'Phone', NULL, '', '', 'Store Manager', 'Questcomm', 'Metro by T Mobile', '1620 Marin Luther King Blvd.', 'NC', 'Raleigh', '', '27610', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 1, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-22 01:33:48', NULL, '2020-03-22 01:35:37', NULL, '', 0, 'personal', 0),
(63, 2, 'Erick', 'Johnson', 'mrejohnson26@yahoo.com', NULL, '$2y$10$l.ax8gc7ThD/2okzddwOm.0AOFGQ0YyDgmi3h8kVz4cbmdHwRdmb2', NULL, '(222) 222-2222', '(222) 222-2222', 'Mobile', NULL, '', '', 'Sample', 'Sample', 'Sample', '1111111', 'Sample', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-22 01:58:13', NULL, '2020-03-22 01:58:13', NULL, NULL, 0, 'personal', 0),
(64, 2, 'Bob', 'Antoville', 'Antoviller@NSMG.com', NULL, '$2y$10$YdmfVrzJyU2flKNE/Xtinur8iIwbMoYv7dkSQSIgkOaLu75zkmhFq', NULL, '(561) 737-7411', '(914) 646-1300', 'Mobile', NULL, '', '', 'CEO', 'Beth Israel', 'Memorial Gardens', '13924 via Flora', 'FL', 'Delray Beach', '', '33484', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 22:45:55', NULL, '2020-03-25 22:45:55', NULL, NULL, 0, 'personal', 0),
(65, 2, 'Chris', 'Hall', 'chall@slbt.com', NULL, '$2y$10$uzNxQTgOs00jI5dQcsBQ4OV9Yvv0HUylS7cvPLe5Usz.PN5p/bEIG', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 'Store Manager', 'St. Lucie Battery & Tire', 'Complete Care Car Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:00:45', NULL, '2020-03-25 23:00:45', NULL, NULL, 0, 'personal', 0),
(66, 2, 'Anthony', 'Mills', 'amills@slbt.com', NULL, '$2y$10$Ux19whbUk2Oi292rr3CY4eUB8dO72N6R9hbDWWYsx668qN8SQy35q', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 'Service Advisor', 'St. Lucie Battery & Tire', 'Complete Car Care Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:08:57', NULL, '2020-03-25 23:08:57', NULL, NULL, 0, 'personal', 0),
(67, 2, 'Pasquale', 'Lamarra', 'pat@eatpastaio.com', NULL, '$2y$10$vf9Au8UlNrjr9O3mwweg4.MlwlbF3YAY0wUDhZTIu7Yl2v4nECmpi', NULL, '(561) 676-1186', '(561) 676-1186', 'Phone', NULL, '', '', 'Owner', 'Pastai', 'Restaurant', '10472 Southwest Village Center Dr.', 'FL', 'Port St. Lucie', '', '34987', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:27:43', NULL, '2020-03-25 23:27:43', NULL, NULL, 0, 'personal', 0),
(68, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc@yahoo.com', NULL, '$2y$10$4kojRXhz8aJnpOHpM02YHe4B/L9BEsTbEZ8Yn5iZmtuyAMzPD8Tuq', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:44:46', NULL, '2020-03-25 23:44:46', NULL, NULL, 0, 'personal', 0),
(69, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc2@yahoo.com', NULL, '$2y$10$jDM0Kfqopg6hOhYbPBIUoO0w1YzKntVwUh.9cStUuckFflLpC2z.K', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:52:22', NULL, '2020-03-25 23:52:22', NULL, NULL, 0, 'personal', 0),
(70, 2, 'Mitchell', 'Wyett', 'tsrfashions1@gmail.com', NULL, '$2y$10$2TM3XUhlAIvsHe1LERi5A.MZ.8v1laGYWqPqKbsouMDBLbuhL.Sd6', NULL, '', '(678) 790-4460', 'Mobile', NULL, '', 'assets/admin/images/1150822383.jpg', 'Owner', 'TSR Fashion LLC', 'Where fashion is nothing without people', '416 orchards walk', 'Georgia', 'Stone mountain', '', '30087', 'Www.tsrfashion.com', 0, '', '', 0, '', 1, '', 1, 1, '2020-03-28 04:16:23', NULL, '2020-03-28 04:16:23', NULL, NULL, 0, 'personal', 0),
(71, 2, 'Abdul', 'Wasay', 'nafay552@gmail.com', NULL, '$2y$10$DaKrFQ6WVb8oNq8QR9RWaeSxdeWoxqpvL.SoYYHu68U/Kk0R1rwE2', NULL, '(335) 242-0530 ___', '(300) 363-9508', 'Phone', NULL, '', 'assets/admin/images/1783606097.jpg', 'Hafiz', 'Online Quran Teaching', 'Learn Quran Online', 'Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', '', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/abdulnafaymajid.71', 0, 1, '2020-03-28 16:22:19', NULL, '2020-03-30 16:20:23', NULL, '', 0, 'personal', 0),
(73, 2, 'Nia', 'Dumont', 'NDumont@BuiltSocially.com', NULL, '$2y$10$z7FVfwyZKHAQZ1gEDzDbZOvdKhGuTjFuQZlTNHsQRhVgFH1XoarD2', NULL, '(954) 213-5642', '(954) 213-5642', 'Phone', NULL, 'assets/admin/images/1141922232.png', 'assets/admin/images/1460046494.png', 'Chief Operations Officer', 'Built Socially', 'Digital Marketing Firm', '7603 NW 60th Lane', 'FL', 'Parkland', '', '33067', 'www.BuiltSocially.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-29 16:03:41', NULL, '2020-03-29 16:45:49', NULL, '', 0, 'personal', 0),
(74, 2, 'Ralph', 'Avila', 'RAvila@Holmanauto.com', NULL, '$2y$10$MeitRE8KA.zsZZnRJUxS/.xFzr162Gen8HPekd3PaTO4OEJauchnu', NULL, '(954) 335-2250', '(305) 216-4808', 'Mobile', NULL, 'assets/admin/images/1661588346.JPG', 'assets/admin/images/769303411.JPG', 'General Manager', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:12:42', NULL, '2020-03-31 12:20:23', NULL, NULL, 0, 'personal', 0),
(75, 2, 'Carlos', 'Cucalon', 'CCucalon@Holmanauto.com', NULL, '$2y$10$XB1jaIxc7mj2w1Tl1/o2UOg9uQoRPNo6OByyxsi0tnD1ZBgyZHy5K', NULL, '(954) 779-2000', '(954) 383-7040', 'Mobile', NULL, 'assets/admin/images/990031963.JPG', 'assets/admin/images/2086331285.JPG', 'Senior Marketing Strategist', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:27:52', NULL, '2020-03-31 12:31:03', NULL, '', 0, 'personal', 0),
(76, 2, 'C', 'Viotti', 'cviotti1@vetservices.com', NULL, '$2y$10$F1D7Ar6XvRjVrZeJJaCaoOOi56IFKfxcNB.svg0PdIe9Nx34ol5KK', NULL, '(954) 306-0970', '(954) 306-0970', 'Phone', NULL, '', '', 'Owner', 'West Lake Animal Hospital', 'Veterinarian Services', '318 Indian Trace', 'FL', 'Weston', '', '33326', 'http://bit.ly/westongoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:30:59', NULL, '2020-04-01 15:35:52', NULL, '', 0, 'personal', 0),
(77, 2, 'Chris', 'Viotti', 'Cviotti2@vetservices.com', NULL, '$2y$10$bczHFUT/sihi2N9k7xvsGuseHdvOM60XyBvpNAYj2BgUxBCKoI/0i', NULL, '(786) 616-8830', '(786) 616-8830', 'Phone', NULL, '', '', 'Owner', 'Kendal Animal Medical Center', 'Veterinarian Services', '12586 SW 88th Street', 'FL', 'Miami', '', '33186', 'http://bit.ly/kendallgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:41:56', NULL, '2020-04-01 15:44:48', NULL, '', 0, 'personal', 0),
(78, 2, 'Chris', 'Viotti', 'Cviotti3@vetservices.com', NULL, '$2y$10$/Rx2d8TbxrFMlALjV8gV8uU0dhnNuOKttAONhmFigfK2KW6mqVRdm', NULL, '(954) 405-8640 ___', '(954) 405-8640', 'Phone', NULL, '', '', 'Owner', 'Pines animal Hospital- Vetco Total Care', 'Veterinarian Services', '15895 Pines Blvd', 'FL', 'Pembroke Pines', '', '33027', 'https://g.page/pinesanimalhospital/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:50:39', NULL, '2020-04-01 15:54:02', NULL, '', 0, 'personal', 0),
(79, 2, 'Chris', 'Viotti', 'Cviotti4@vetservices.com', NULL, '$2y$10$nzlV5CXqXaKhr4p0GWP/z.HE3rzAbcFRzWAvNdFRP7hasWNM6X9Py', NULL, '(954) 419-4560', '(954) 419-4560', 'Phone', NULL, '', '', 'Owner', 'Deerfield Beach Animal Hospital- Vecto Total Care', 'Veterinarian Services', '3551 W. Hilsboro Blvd', 'FL', 'Deerfield Beach', '', '33442', 'https://g.page/VetcoDeerfieldBeachAnimalHosp/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:00:00', NULL, '2020-04-01 16:01:03', NULL, '', 0, 'personal', 0),
(80, 2, 'Chris', 'Viotti', 'Cviotti5@vetservices.com', NULL, '$2y$10$huyxEV0C41H7z03xYfDG0OeyH1oyZ6wtva8x0ULXVIirdrcfd8g5a', NULL, '(561) 900-2680', '(561) 900-2680', 'Phone', NULL, '', '', 'Owner', 'Delray Beach Animal Hospital- Veterinarian Delray Beach', 'Veterinarian Services', '13900 Jog Road Suite 209', 'FL', 'Delray Beach', '', '33446', 'http://bit.ly/delraybeachgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:05:49', NULL, '2020-04-01 16:06:13', NULL, '', 0, 'personal', 0),
(81, 2, 'Chris', 'Viotti', 'Cviotti6@vetservices.com', NULL, '$2y$10$x1EZ3Q3p50R8qafZUmeAXOevQjnMW.oPNWPgFD1.tWTACi8WXMyu2', NULL, '(954) 869-4371', '(954) 869-4371', 'Phone', NULL, '', '', 'Owner', 'Oakland Animal Medical Center', 'Veterinarian Services', '1009 E. Commerical Blvd', 'FL', 'Oakland Park', '', '33334', 'http://bit.ly/oaklandgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:09:59', NULL, '2020-04-01 16:10:14', NULL, '', 0, 'personal', 0),
(82, 2, 'Shunya', 'Roytman', 'Shunya@Finessecollection.com', NULL, '$2y$10$ByXYgAF0vW42i1X4kO9ssunl3A0Z/YjJIq3FHXOGtHl936T.zFHt.', NULL, '', '(561) 302-7351', 'Mobile', NULL, '', '', 'N/A', 'N/A', 'N/A', '9220 SW 14th Street  Apt. 3401', 'Fl', 'Boca Raton', '', '33428', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-01 17:53:02', NULL, '2020-04-01 17:53:02', NULL, NULL, 0, 'personal', 0),
(83, 2, 'Chris', 'Viotti', 'CViotti@personal.com', NULL, '$2y$10$U49osEf5aycfYca2iPtbQ.Uc1dR1ag46Tw/N36Ltjvm43dkg3fqQ2', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 'Owner', 'Sample', 'Sample', 'Sample', 'FL', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-01 19:55:15', NULL, '2020-04-01 19:55:15', NULL, NULL, 0, 'personal', 0),
(84, 2, 'igigigi', 'igigiog', 'alisyedamir2018@gmail.com', NULL, '$2y$10$rMiOMNPOMZAIkRlqG4QiquWmzIq7EQb8rBBebRE6FEaW1YJKZaG3e', NULL, '(030) 450-9449', '(030) 450-9442', 'Mobile', NULL, '', '', 'jhgjjfjhfjsdasdsd', 'sdfs', 'hgcghch hgjhdcghc', 'sdfsdfasdaf', 'sdf', 'Karacho', 'dersdsdf', 'sdfsdf', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 13:55:43', NULL, '2020-04-03 06:16:42', NULL, '', 0, 'company', 0),
(85, 2, 'Syed Faizan Ali', 'ali', 'diana123@gmail.com', NULL, '$2y$10$LqDGs31Ewsn/fNmQ9WfeteSYpsI58dCbSPauPPVAC.f/nGFM2NcdW', NULL, '(313) 209-9657', '(313) 209-9657', 'Mobile', NULL, '', '', 'Abu Ban Kababb', 'HP', 'df', 'gdfgdsg', 'dfg', 'dfsg', 'd', 'dfgsdfgdfsg', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 14:02:30', NULL, '2020-04-02 14:02:30', NULL, NULL, 0, 'personal', 0),
(86, 2, 'ASHGSVADJCa', 'ausDVUAYD', 'diana@gmail.com', NULL, '$2y$10$Tp07aNQM.uv0DkrxRahtv.Y1qi4Sy8u7V2y8bAtk08L.Shoq0EwqS', NULL, '(031) 313-1313', '(213) 132-1313', 'Mobile', NULL, '', '', 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:36:40', NULL, '2020-04-02 15:36:40', NULL, NULL, 0, 'personal', 0),
(87, 2, 'ASHGSVADJCa', 'ausDVUAYD', 'diana23@gmail.com', NULL, '$2y$10$0DnKX90pk1T.lb0.mlFKB.X4dScXQWPcPixlQZWTaC/Gm4/Qg57a2', NULL, '(252) 525-2525', '(211) 212-3531', 'Mobile', NULL, '', '', 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:41:20', NULL, '2020-04-02 15:41:20', NULL, NULL, 0, 'company', 0),
(88, 2, 'ASHGSVADJCa', 'ausDVUAYD', 'diana33@gmail.com', NULL, '$2y$10$ViCRTg9XfhInDB5MXxck4em3Sfo8tk3o/MuCko4WZSJG9ab3sc18m', NULL, '(233) 145-6456', '(456) 456-4564', 'Mobile', NULL, '', '', 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:46:16', NULL, '2020-04-02 15:46:16', NULL, NULL, 0, 'personal', 0),
(89, 2, 'ASHGSVADJCa', 'ausDVUAYD', 'diana43@gmail.com', NULL, '$2y$10$fXdS3hbsA98u2deJkT1Js.YunZnpQQhqfIMPIfmBByx6QgkWmfSx6', NULL, '(312) 313-1231', '(123) 123-1231', 'Mobile', NULL, '', '', 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:51:14', NULL, '2020-04-02 15:51:14', NULL, NULL, 0, 'company', 0),
(90, 2, 'Syed Aamir', 'Ali', 'alisyed@yus.com', NULL, '$2y$10$wQsELLdIJkrtZHG04s0A.ux4E89WqVIW0ietB5ioYWYd/ZNRalTLK', NULL, '(345) 345-345_', '(345) 345-3453', 'Mobile', NULL, '', '', 'sds', 'fsdfsd', 'sfsdfs', 'ertegsdg', 'erterter', 'rete', 'ert', 'ertertert', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-02 16:08:52', NULL, '2020-04-02 17:00:48', NULL, '', 0, 'company', 0),
(91, 2, 'fgdsfg', 'dsgdfgs', 'wetwett@uasd.com', NULL, '$2y$10$pQPyS5gizYGs46N0e3jKge.r9WwU16p5Aw7hBQeamSc9Y9dfhNj6O', NULL, 'ewtert', '435345345345', 'Mobile', NULL, NULL, NULL, 'dfsgdf', 'etertwet', 'ewtert', 'wetewt', 'werwrqrwq', 'eqrqwrwer', 'weqrqwrwr', 'wqrweqr', 'wqerqer', 0, '', 'weqwe', 0, '', 0, '', 0, 1, '2020-04-03 06:36:09', NULL, '2020-04-03 06:36:09', NULL, NULL, 0, 'personal', 0),
(95, 2, 'dsfa', 'sdf', 'alisyedamir20183@gmail.com', NULL, '$2y$10$Cn60Skdn8.y2NhAXmDCIx.xJmIp10nERQNP7nsU2EZ3zaWkrxkOGG', NULL, '(324) 242-3424', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 06:48:08', NULL, '2020-04-03 06:48:08', NULL, NULL, 0, 'personal', 0),
(96, 2, 'dsfa', 'sdf', 'dianasdasd23423@gmail.com', NULL, '$2y$10$oRnyGRrQefuXW9v.2u6AqeFWJkmB9lrXrDEGWbaXl9I/PeLtVhEey', NULL, '(324) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:13:25', NULL, '2020-04-03 07:13:25', NULL, NULL, 0, 'personal', 0),
(97, 2, 'dsfa', 'sdf', 'alisyederwrwe@yus.com', NULL, '$2y$10$YO7wKpW9YQZz3ET8TkBoBuU.f6z7RLlGvKkCV2vrjmnHqSmzdnOcq', NULL, '(345) 345-3453', 'dsfa', 'Mobile', NULL, NULL, NULL, 'Faizan Post Changed', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:16:04', NULL, '2020-04-03 07:16:04', NULL, NULL, 0, 'personal', 0),
(99, 2, 'dsfa', 'sdf', 'alisyedamir201843534@gmail.com', NULL, '$2y$10$KG0a6ZLJRuzXzELhIeRkreRtLpQM/3uD8jzPEHMqsTJ9s9SYNfKvu', NULL, '(345) 353-4534', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:17:21', NULL, '2020-04-03 07:17:21', NULL, NULL, 0, 'personal', 0),
(101, 2, 'dsfa', 'sdf', 'alisyedamir2018ertert@gmail.com', NULL, '$2y$10$PgVD.yEsBlVXo3o5OnrzCOK5RotThbRjMcgdkNw.x8MI1Tnt4z.9q', NULL, '(234) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:19:35', NULL, '2020-04-03 07:19:35', NULL, NULL, 0, 'personal', 0),
(102, 2, 'dsfa', 'sdf', 'ertetewt@idnfd.vomc', NULL, '$2y$10$XyOG/EvBk5p65wHsYwaEfeg8hJwzoYK0pmxmqp48gbBxeELlWdk3y', NULL, '(234) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:22:10', NULL, '2020-04-03 07:22:10', NULL, NULL, 0, 'personal', 0),
(104, 2, 'dsfa', 'sdf', 'alisyedamir201832423@gmail.com', NULL, '$2y$10$hHUWj6T3lN4uCfkntb8GheSZ/z5cCaWLKtvh6/n7UfHWjyA69VpGS', NULL, '(324) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:23:08', NULL, '2020-04-03 07:23:08', NULL, NULL, 0, 'personal', 0),
(106, 2, 'dfsgsdf', 'sdf', 'alisyedamir201823423423@gmail.com', NULL, '$2y$10$NrDanM0i3.Rxz1b/AdILD.EVQRW0/KJU.2XPxuAcmEGOa3kBMQGqu', NULL, '(423) 423-4234', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:24:31', NULL, '2020-04-03 07:24:31', NULL, NULL, 0, 'personal', 0),
(108, 2, 'dsfa', 'sdf', 'alisyedamir201345348@gmail.com', NULL, '$2y$10$WWUCurP0sSTOFJ.JzIsFHeuVgbR3d5w.RfanBrNdcB4tTfKcfaETm', NULL, '(435) 345-3453', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', '345345', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:25:11', NULL, '2020-04-03 07:25:11', NULL, NULL, 0, 'personal', 0),
(110, 2, 'dsfa', 'sdf', 'alisyedamir202342318@gmail.com', NULL, '$2y$10$Pfj8D2.afulJ1hMaxl6MR./9bEIM.Q4uOfWqZUMWL4WFMulJcKmJu', NULL, '(234) 234-2423', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:25:59', NULL, '2020-04-03 07:25:59', NULL, NULL, 0, 'personal', 0),
(111, 2, 'dsfa', 'sdf', 'alisywerwrqed@yus.com', NULL, '$2y$10$W2hld.zg37lvp4zZzt1BSeJlEWYertC2WG1Jl4GdQbMQxV5SekBqu', NULL, '(324) 242-3423', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:26:58', NULL, '2020-04-03 07:26:58', NULL, NULL, 0, 'personal', 0),
(112, 2, 'dfsgsdf', 'sdf', 'alisyedamiqweqwer2018@gmail.com', NULL, '$2y$10$.ZASyaTGnizpWn0vNNNeQexs6gTy678YCwtcRv1DIZI01Kd1rJbPG', NULL, '(312) 312-3123', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:28:47', NULL, '2020-04-03 07:28:47', NULL, NULL, 0, 'personal', 0),
(114, 2, 'dsfa', 'sdf', 'alisyedamir1231232018@gmail.com', NULL, '$2y$10$idnE.j3xxSQIuezX4CQbYO4D7cYhEultjO5mhDgeP/MlAFb7gdZEi', NULL, '(231) 312-3123', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:30:54', NULL, '2020-04-03 07:30:54', NULL, NULL, 0, 'personal', 0),
(115, 2, 'dsfa', 'sdf', 'diana1qrqer23@gmail.com', NULL, '$2y$10$lnEjIuftAXiheKjkGkmHz.7FTiKqxSgfBmrlA2lVK8sc.lMvvSARS', NULL, '(234) 242-3423', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:38:53', NULL, '2020-04-03 07:38:53', NULL, NULL, 0, 'personal', 0),
(116, 2, 'dsfa', 'gdsfg', 'eweqrerqwrfqefe@gmaisa.com', NULL, '$2y$10$Uv8Ejd3OLNyKtsOvx9Uo4.Lt6XedEc9QUYZvRGyq/S.Hhhiew.20i', NULL, '(234) 242-3424', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:41:31', NULL, '2020-04-03 07:41:31', NULL, NULL, 0, 'personal', 0),
(117, 2, 'dsfa', 'sdf', 'diana123q21313w@gmail.com', NULL, '$2y$10$B1c6TBRfnXUFWd4ZcVKcA.dR06D3tAWsiRVFH4IbgBfLzs16l0HGq', NULL, '(123) 123-1231', 'dsfa', 'Mobile', NULL, NULL, NULL, 'eeqweq', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:48:18', NULL, '2020-04-03 07:48:18', NULL, NULL, 0, 'personal', 0),
(118, 2, 'dsfa', 'sdf', 'alisyedamirwqerwe2018@gmail.com', NULL, '$2y$10$zst/M8Ns2KkFeQjoKXVJGuq4G.DmWxl7ZZiczh.2KXAOfTKRN4bxu', NULL, '(123) 214-3434', 'dsfa', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:49:26', NULL, '2020-04-03 07:49:26', NULL, NULL, 0, 'personal', 0),
(119, 2, 'dfsgsdf', 'sdf', 'alisyedweqeamir2018@gmail.com', NULL, '$2y$10$EjWmXfuWak/splBdUSglx.dUMldEQhDZiKx2HxQplg0ktV70z1u/q', NULL, '(231) 231-2312', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:51:28', NULL, '2020-04-03 07:51:28', NULL, NULL, 0, 'personal', 90),
(122, 2, 'Syed Faizan Ali', 'safsdf', 'alisyedfaiz1234@gmail.com', NULL, '$2y$10$wiXgC7uzogrYgmcphwSYsOP8SFZWNOZ1cDwq1ctx6Ov7kTiCboOTy', NULL, '(212) 312-3123', 'Syed Faizan Ali', 'Mobile', NULL, NULL, NULL, 'Faizan Post', '', '', 'werwer3qerqwr', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 08:01:03', NULL, '2020-04-03 08:01:03', NULL, NULL, 0, 'personal', 90),
(123, 2, 'fsdafs', 'sdf', 'alisyedaamir123@hotmail.com', NULL, '$2y$10$zqRgQX2R4hfXbxAjUSmeFuLzzJ5hUFhZwqfKI.NHtBncXiXoya9d6', NULL, '(324) 242-3423', 'fsdafs', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 08:03:35', NULL, '2020-04-03 08:03:35', NULL, NULL, 0, 'personal', 0),
(124, 2, 'werqwr', 'qwerqwe', 'wqer@jwheje.com', NULL, '$2y$10$440OXrG/GFt2dyJjE2i0eusW2z8M03CbGyGO9dtMTWQWFCCPwF2da', NULL, '(324) 234-2342', '(324) 234-2342', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:45:49', NULL, '2020-04-03 13:45:49', NULL, NULL, 0, 'personal', 0),
(125, 2, 'dsfa', 'sdf', 'alisyedamewrqwerir2018@gmail.com', NULL, '$2y$10$EbtFt.2.cxpm0rv1BQHyo.NCe6ZoCHoqGzcwgJhiZa0lSTlZ/6eYC', NULL, '(342) 423-4234', '(342) 423-4234', 'Mobile', NULL, NULL, NULL, 'Faizan Post Changed', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:47:27', NULL, '2020-04-03 13:47:27', NULL, NULL, 0, 'personal', 0),
(126, 2, 'dsfa', 'sdf', 'alisyewqrdamewrqir2018@gmail.com', NULL, '$2y$10$1o0lLr0lq80KWn81pngIO.xzksYuW/hpDTM8mw1Tkh4ZCWT57igVG', NULL, '(324) 234-2342', '(324) 234-2342', 'Mobile', NULL, NULL, NULL, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:49:05', NULL, '2020-04-03 13:49:05', NULL, NULL, 0, 'personal', 84);

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
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
