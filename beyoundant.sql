-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 10:36 PM
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
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image_url` varchar(350) NOT NULL,
  `link` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_url`, `link`, `created_at`, `updated_at`) VALUES
(5, 'assets/admin/images/370860003.jpg', 'https://mdbootstrap.com/snippets/jquery/mdbootstrap/930911', '2020-04-28 14:34:13', '2020-04-28 14:34:13'),
(7, 'assets/admin/images/76793621.jpg', 'https://getbootstrap.com/docs/4.0/components/input-group/', '2020-04-28 14:35:37', '2020-04-28 14:35:37'),
(9, 'assets/admin/images/1691387545.jpg', 'https://stackoverflow.com/questions/32738763/laravel-csrf-token-mismatch-for-ajax-post-request', '2020-04-28 14:58:37', '2020-04-28 14:58:37'),
(10, 'assets/admin/images/2032228151.jpg', 'https://getbootstrap.com/docs/4.0/components/input-group/', '2020-04-28 14:58:59', '2020-04-28 14:58:59'),
(11, 'assets/admin/images/963683508.jpg', 'https://www.animeland.us/?__cf_chl_jschl_tk__=7b02f4f52546bd8612f715e02295ad1450165377-1588108252-0-AUJnIYyUVlT-TimFH_5PIW32JeUS06l15xvvKcqtN008AenPoCpHKyhb0-WL9oNMUVT2jL6_Cw8diHk3ruPLRjr0zIdevEPwU9sy', '2020-04-28 16:12:30', '2020-04-28 16:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_name` varchar(120) NOT NULL,
  `device_description` varchar(300) NOT NULL,
  `profile_url` varchar(500) DEFAULT NULL,
  `redirected_url` varchar(400) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_description`, `profile_url`, `redirected_url`, `user_id`, `created_at`, `updated_at`) VALUES
(27, 'DGDSerterGDS', 'wedsafdsfsfwerasfsdaf', 'http://127.0.0.1:8000/profile/289', 'https://www.facebook.com/', 289, '2020-05-04 14:13:53', '2020-05-04 15:32:45'),
(28, 'DGDSGDS', 'reyertwbrt rewter ewtertert', 'http://127.0.0.1:8000/profile/279', '', 279, '2020-05-04 15:17:33', '2020-05-04 15:17:33'),
(29, 'DGDSGDS213213', 'dfasdfdsf sdfsdfsa 3r4resr', 'http://127.0.0.1:8000/profile/221', 'https://html5-tutorial.net/form-validation/validating-urls/', 221, '2020-05-04 15:34:41', '2020-05-04 15:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
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
  `num_of_websites` int(5) UNSIGNED DEFAULT NULL,
  `total_employees` int(11) UNSIGNED DEFAULT NULL,
  `sales_employees` int(11) UNSIGNED DEFAULT NULL,
  `current_primary_web_url` varchar(255) NOT NULL,
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
-- Dumping data for table `entrepreneurs`
--

INSERT INTO `entrepreneurs` (`id`, `f_name`, `l_name`, `company`, `email`, `website`, `address`, `address_line_two`, `city`, `state`, `country`, `postal_code`, `fed_tax_id`, `business_phone`, `business_status`, `business_status_description`, `date_organized`, `name_of_owner`, `about_beyondant`, `num_of_websites`, `total_employees`, `sales_employees`, `current_primary_web_url`, `brands`, `approx_turnover`, `approx_turnover_description`, `beyondant_promotion`, `short_paragraph`, `agreement`, `created_at`, `updated_at`) VALUES
(1, 'weq', 'ewqwe', 'qwqwe', 'alisyedamir2018@gmail.com', 'sadad', 'gdfgdsg', 'ASDad', 'asdasd', 'ASDSAD', 'ADad', '2343241231', '2132', '234324234', 'Corporation', NULL, '2019-03-24 00:00:00', 'srfsdfsdf', 'wetqwerq34w3d 3r123r1234', 342, 2324, 23423, 'https://beyondant.com/public/entrepreneurs', '234', '$0 - $1 Million', NULL, '2019-03-04 00:00:00', '4234123v3t 34t14512345 435143r231', 0, NULL, NULL);

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
(23, 'Kurt', 'Eisinger', NULL, 'eisingerk2@gmail.com', NULL, '93 Erie Ave', NULL, 'Rockaway', 'NJ', 'US', '07866', '0000', '9733494146', 'No Business Formed', 'LLC', NULL, NULL, 'Regel Group', 1, NULL, NULL, 'Any', NULL, '$0 - $1 Million', NULL, '2020-03-26 00:00:00', 'As soon as possible', 0, NULL, NULL),
(24, 'erqwr', 'weqrwer', 'eqwrqwer', 'alisyedamir2018@gmail.com', 'weqrwe', 'gdfgdsg', 'werqw', 'weefsa', 'ewfw', 'wefwqf', '324234', '2342', '32432423432', 'Corporation', NULL, '2019-03-04 00:00:00', '232', 'ssdafasdfsdfsdfsd', 12, 12, 12, 'vdfsdfsdfaasdf', 'safsadfsd', '$0 - $1 Million', NULL, '2019-02-03 00:00:00', 'asfsdfsdfsdfsdffd', 0, NULL, NULL);

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
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"updateHome\",\"viewHome\",\"viewReseller\",\"deleteReseller\",\"viewEntrepreneur\",\"updateSetting\",\"createProfile\",\"updateProfile\",\"createCompany\",\"updateCompany\",\"viewCompany\",\"deleteCompany\",\"createIndividual\",\"updateIndividual\",\"viewIndividual\",\"deleteIndividual\",\"createDevice\",\"updateDevice\",\"deleteDevice\",\"createBanner\",\"viewBanner\"]', 1, NULL, 14, '2020-05-01 15:31:38', NULL),
(2, 'customer', '', 1, NULL, NULL, NULL, NULL),
(4, 'master admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, '2020-02-27 18:39:15', 14, '2020-03-04 18:48:50', NULL),
(5, 'company', '[\"viewUserProfile\",\"deleteUserProfile\",\"updateProfile\"]', 1, '2020-04-08 10:06:59', 14, '2020-04-08 10:06:59', NULL),
(7, 'individual', '[\"createDevice\",\"updateDevice\",\"viewDevice\",\"deleteDevice\"]', 1, '2020-04-29 16:09:17', 14, '2020-04-29 16:09:17', NULL);

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
  `internet_entrepreneurs_text` text COLLATE utf8mb4_unicode_ci,
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

INSERT INTO `setting` (`id`, `language_id`, `title`, `email`, `phone`, `fax`, `address`, `footer_text`, `reseller_text`, `internet_entrepreneurs_text`, `reseller_email`, `facebook`, `linkedin`, `instagram`, `tiktok`, `logo`, `favico`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Beyondant', 'info@beyondant.com', '800 970-5877', '800 970-5877', '342 East 53rd Street, Suite #4EF\r\n\r\nNew York, NY 10022', 'A Smoother Way to Grow Your Business through Networking or Simply Grow Your Social Following.\r\nCreate your Custom Digital Business Cards with us and increase your customer interaction despite social distancing.', 'Calling qualified entrepreneurs! Join a growing network of Authorized Resellers and build a solid stream of income. Earn 20% or more in monthly commissions. Allow 7 business days for your application to be reviewed. We will be in touch soon and look forward to working with you!', 'Calling all internet entrepreneurs! Join a growing network of\r\nAuthorized resellers and build a solid stream of income. Work from home\r\nAnd earn 15% or more in monthly commissions. Please allow 7 business\r\nDays for your application to be reviewed. We will be in touch with you\r\nSoon and look forward to working with you!', 'resellers@beyondant.com', 'https://www.facebook.com/', 'https://www.linked.com', 'https://www.instagram.com/', 'https://www.tiktok.com/', 'assets/uploads/setting/1648940280.png', 'assets/uploads/setting/1530317221.png', 1, '2020-04-06 15:57:53', 1, '2020-04-06 15:57:53', NULL);

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
(2, 'diana123@gmail.com', '2020-04-03 11:32:33', '2020-04-03 11:32:33'),
(3, 'alisyed@yus.com', '2020-04-03 15:05:08', '2020-04-03 15:05:08');

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
  `cover_pos` int(11) NOT NULL DEFAULT '0',
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
  `acc_type` enum('personal','company','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `acc_type`, `parent_id`) VALUES
(1, 1, 'Beyondant', 'Web', 'admin@demo.com', NULL, '$2y$10$T8xyCGvkmKdNEGPhqcABZ.mL1Y/WP/MguOHUb3Hj8Xa2KMCWDib1S', '1CTJAgVuDIt6tgpKOJxtR70V9qyCT6k35P7w7zsqhfasbm8eh0tETgDCQvNO', '1234567890546', NULL, '', 'C.E.O', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-04-08 12:19:23', NULL, NULL, 0, 'personal', 0),
(11, 1, 'Albert Custom', NULL, 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, '12345678910', NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL, NULL, 0, 'personal', 0),
(12, 5, 'Testing Fname Lname', 'qwerty', 'nb@nadocrm.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(031) 232-1329 ___', '(234) 324-3243', 'Office Number', 'Developer', 'assets/admin/images/767582880.jpg', 'assets/admin/images/770345224.jpg', 0, 'qwerty', 'qwerty', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'street2', 'Newyork State', 'Newyork', 'USA', '32213', 'https://outsourceinpakistan.com/profile/12324234324234234234234234', 0, 'Website', 'https://outsourceinpakistan.com/', 0, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'https://outsourceinpakistan.com/', 0, 1, '2020-01-23 18:05:34', NULL, '2020-03-24 02:22:06', NULL, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'company', 0),
(14, 4, 'Master Admin', NULL, 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, '3333906233', NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL, NULL, 0, 'personal', 0),
(15, 5, 'Testing Fname Testing Lname', NULL, 'test@masdsanb.com', NULL, '', NULL, NULL, '123213213', '', NULL, '', '', 0, 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, NULL, NULL, NULL, NULL, 0, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 12:59:18', NULL, '2020-03-10 12:59:18', NULL, NULL, 0, 'company', 0),
(27, 5, 'Umair', NULL, 'smith@gmail.com', NULL, '$2y$10$9/7/ss3GpvrWh7WDooUVe.9bCxf7kG7tbAyah9tiQCJNmD4z0LrXK', NULL, '43534534543', '454354354354', 'Mobile', NULL, 'assets/admin/images/601208910.png', 'assets/admin/images/856559261.png', 0, 'wqewqe', 'fsdfdsfd', 'dsfdsfd dsfds f', 'R2 St. 5/2 Block E North Nazimabad', NULL, NULL, NULL, NULL, 'http://myprojectstaging.com/', 0, 'Address', 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 1, '2020-03-12 03:33:21', NULL, '2020-03-12 03:33:21', NULL, NULL, 0, 'company', 0),
(28, 5, 'asad', NULL, 'test@123.com', NULL, '$2y$10$KXZYlgxoNDz9clFPhrOGs.Jcg7E8HTej40590dMtfuN/Fvdpcqk2i', NULL, '23232323', '23232323', 'Mobile', NULL, '', '', 0, 'adad', 'asad', 'test', 'fdgdf33', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:38:38', NULL, '2020-03-12 03:38:38', NULL, NULL, 0, 'company', 0),
(29, 5, 'asad siddique', NULL, 'asad.siddiq07@gmail.com', NULL, '$2y$10$IsohB3sm73poRo6b8.QFse6bK3F9RCtr7Bf4HxooZlxLB16ewvYwW', NULL, '324234234', '324324324', 'Mobile', NULL, 'assets/admin/images/1134369862.jpg', 'assets/admin/images/150358304.jpg', 0, 'test', 'test', 'rest', 'g-73, phase 2 , defence view', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:42:16', NULL, '2020-03-12 03:42:16', NULL, NULL, 0, 'company', 0),
(30, 5, 'usman', NULL, 'usman.naveed@nadocrm.com', NULL, '$2y$10$R8ZoyBNg9pwZLYZyDMQRQubN0jfqKEwRtEn5vdQtPWK.lqJVBsgz2', NULL, '6094761640', '03352155171', 'Mobile', NULL, '', '', 0, 'CEO', 'Outsource in Karachi', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-12 03:50:50', NULL, '2020-03-12 03:50:50', NULL, NULL, 0, 'company', 0),
(31, 5, 'Daniyal', NULL, 'sheikhusman19@hotmail.com', NULL, '$2y$10$YtiJ2YJim5FUw5wxGOfnVeqoXgCCbw.hjNifyZabIDl.2CFIq41g6', NULL, '2542122225', '2821581455', 'Mobile', NULL, 'assets/admin/images/1334283108.png', 'assets/admin/images/376553203.jpg', 0, 'CEO', 'Deepout', 'Clothing', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 17:18:38', NULL, '2020-03-12 17:18:38', NULL, NULL, 0, 'company', 0),
(32, 5, 'usman', NULL, 'johnmethews1@outlook.com', NULL, '$2y$10$.qKdVrwnICdWEx6GXdjgNeYqVxiWP4fTAnWzfeU98/ZPBQ1.ZBXZW', NULL, '123456844', '12546215251', 'Mobile', NULL, 'assets/admin/images/1515907221.png', 'assets/admin/images/170086125.jpg', 0, 'Manager', 'Outsource', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Website', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-12 22:42:39', NULL, '2020-03-12 23:35:46', NULL, NULL, 0, 'company', 0),
(33, 5, 'tom', NULL, 'nb@nadocrddm.com', NULL, '$2y$10$DlLL9NlILqSm.kU.u7DXG.HBFNfFsExwGf7K0NszkZ0SZlrMCl7Y.', NULL, '34535435', '4543543543', 'Phone', NULL, 'assets/admin/images/1477711861.png', 'assets/admin/images/377888126.jpg', 0, 'qwer', 'dsfdsf', 'dsfdsf', 'street2', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-13 21:30:23', NULL, '2020-03-13 21:42:23', NULL, '', 0, 'company', 0),
(34, 5, 'Showzeb', NULL, 'showzeb@outsourceinpakistan.com', NULL, '$2y$10$mHkGY.TTzmra6SDfRHFFn.LpeTmwQLU/rZqPGLAqgmLDwdr5oel9q', NULL, '225148458', '25551485641', 'Phone', NULL, 'assets/admin/images/317446541.jpg', 'assets/admin/images/922174070.jpg', 0, 'HOD', 'Technado', 'Outsourcing', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-13 21:56:13', NULL, '2020-03-13 21:56:13', NULL, NULL, 0, 'company', 0),
(35, 5, 'Steve', NULL, 'steve@abc.com', NULL, '$2y$10$CGk9YfRZw5Ls/Rqrh74VQOEKBO.AodyUenWfWzvz4ra.5wp3kSvke', NULL, '215458212', '254811162', 'Mobile', NULL, 'assets/admin/images/2125395568.jpg', 'assets/admin/images/298908195.png', 0, 'CEO', 'Built Socially', 'Software', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-13 22:00:48', NULL, '2020-03-14 01:47:16', NULL, '', 0, 'company', 0),
(36, 5, 'Usman', 'naveed', 'usman@abc.com', NULL, '$2y$10$0/JN8lmdhq.tpRg7S6gdJusksx6fCxgGT9pE08QGt87UX5tPH4nUS', NULL, '(222) 222-2222', '(888) 888-8888', 'Mobile', NULL, 'assets/admin/images/28750152.png', 'assets/admin/images/319673600.jpg', 0, 'CEO', 'Deja-Vu Solutions', 'Software House', 'ABCD 123', 'sindh', 'karachi', '', '75300', 'https://www.google.com/', 0, 'Address', 'www.linkedin.com/in/usman-naveed-168494b1/', 0, 'www.instagram.com/sheikhusman19/', 1, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-13 22:08:57', NULL, '2020-03-20 01:56:33', NULL, '', 0, 'company', 0),
(38, 5, 'Marc Rubin', NULL, 'MRubin@Test.com', NULL, '$2y$10$ecAUtJF2DzVK.oDw.V3kmeWhoprgX.ObOJ7REM4HwAxjYn9T8HXuu', NULL, '4561234569', '4561234569', 'Mobile', NULL, '', '', 0, 'CEO', 'Beyondant', 'Technology', '125 NW Victory Lane', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 00:16:45', NULL, '2020-03-14 00:17:22', NULL, '', 0, 'company', 0),
(39, 5, 'Marc Sussman', NULL, 'MSussman@Test.com', NULL, '$2y$10$nGYzkPXoMdr9d4WISZKB3.0eNXM1Qe11.RGYv9vIq370mlHmg.ceq', NULL, '9545678764', '95456734543', '', NULL, 'assets/admin/images/2083810365.JPG', 'assets/admin/images/1940459301.jpg', 0, 'CFO', 'Beyondant', 'Technology', '4563 SW Victory Lance Cooper City, FL 33342', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 11:59:37', NULL, '2020-03-14 12:09:42', NULL, '', 0, 'company', 0),
(40, 5, 'lala', NULL, 'asad.siddiqui@nadocrm.com', NULL, '$2y$10$CQDCf1Yh/XOjAexclbUcrOH2P8tEvzzWvyUG7Fw5HnTpUDRBqz5.i', NULL, '23', '2365', '', NULL, '', '', 0, 'lalala', 'lalala', 'lalala', 'asaas', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-16 17:26:29', NULL, '2020-03-16 17:26:29', NULL, NULL, 0, 'company', 0),
(41, 5, 'dani', NULL, 'daniyal.ali@technado.co', NULL, '$2y$10$xQWum45sv6N21FJyW0E1N.cOriy5.RKMvwrRMFdhGTmfBcCaIwi3a', NULL, '456123', '456123', 'Mobile', NULL, '', '', 0, 'lala', 'olala', 'lalaland', '456123', NULL, NULL, NULL, NULL, 'asaassa', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 17:44:57', NULL, '2020-03-16 17:44:57', NULL, NULL, 0, 'company', 0),
(42, 5, 'daniyal', NULL, 'daniyal.ali@technado.com', NULL, '$2y$10$dGfaJ.podHQinZQ9UmEb.e864EsU9mP/mxUmBA7sWwL3ug/rD5WBe', NULL, '123456789', '789456123', 'Mobile', NULL, '', '', 0, 'CEO', 'WOW', 'Kaam krti hai', 'nowhere', NULL, NULL, NULL, NULL, 'haha.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 17:59:47', NULL, '2020-03-16 18:00:27', NULL, '', 0, 'company', 0),
(43, 5, 'daniyal', NULL, 'daniyal@outsourceinpakistan.com', NULL, '$2y$10$RPmVEdxi4hk7KnqybPP1guW0z/jDIkceA5xsoN3lIu0BAXk89vu1C', NULL, '123456', '456123', 'Mobile', NULL, 'assets/admin/images/1582413469.jfif', 'assets/admin/images/258525367.jpg', 0, ':D', 'LALA', 'Kaam karti hai', 'nowhere', NULL, NULL, NULL, NULL, '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 18:10:35', NULL, '2020-03-17 00:01:49', NULL, '', 0, 'company', 0),
(44, 5, 'Robert', 'Jones', 'RJones@CoolTech.com', NULL, '$2y$10$mUXzWC5Y5tJiE2JFT6ZTIeKwuib9RfwfH2WzNushbnIjK7zdai4WO', NULL, '4562347896', '4464568542', 'Mobile', NULL, 'assets/admin/images/179986367.JPG', 'assets/admin/images/2115260670.jpg', 0, 'CEO/Founder', 'Cool Tech Enterprises', 'Technology', '451 SW Victory Lane', 'Florida', 'Cooper City', 'Test', '33331', 'www.yahoo.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 22:28:15', NULL, '2020-03-16 22:28:15', NULL, NULL, 0, 'company', 0),
(45, 5, 'Testing Fname Lname', 'Testing Fname Lname', 'nb@nadocrmd.com', NULL, '$2y$10$0yS9mTgZJ3w1mVzEEoUMlev8vrRiGq7vb9lWd2gsuvuhjF.PBnsuu', NULL, '324324324324', '342324324324', '', NULL, 'assets/admin/images/146227966.jpg', 'assets/admin/images/1248730661.jpg', 0, 'sfdfsdf', 'sdfdsf', 'sdfdsfdf', 'street2', 'Punjab', 'Islamabad', 'qwewqe', '72900', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'www.instagram.com/', 0, 'www.facebook.com', 0, 1, '2020-03-16 22:32:35', NULL, '2020-03-16 22:32:35', NULL, NULL, 0, 'company', 0),
(46, 5, 'Marc', 'Rubin', 'MRubin@Test2.com', NULL, '$2y$10$.BxJuqMg9RtedGtV4wdLZOBLalUG9Lub/HTY.enQB2EhstNdpfgD6', NULL, '(456) 213-6987', '(546) 321-4569', 'Mobile', NULL, 'assets/admin/images/2029446747.JPG', 'assets/admin/images/64066282.jpg', 0, 'CEO/Founder', 'Beyondant', 'Technology Company', '455 Victory Lane', 'Florida', 'Cooper City', '', '23332', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 0, 'Address', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, 'https://www.facebook.com/theregelgroupllc/', 0, 1, '2020-03-16 23:16:14', NULL, '2020-03-23 22:22:12', NULL, '', 0, 'company', 0),
(47, 5, 'Usman', 'Naveed', 'naveed@abc.com', NULL, '$2y$10$hbA/jx7k.3UjHsnLC2JQgexvbFEILTOBgWJA//1o7GDdzSKzlsYPG', NULL, '0', '(125) 848-4586', 'Mobile', NULL, '', '', 0, 'S.M', 'Company', 'Technology', 'street 22', 'sindh', 'karachi', '', '76822000', 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-19 21:35:16', NULL, '2020-03-19 21:35:16', NULL, NULL, 0, 'company', 0),
(48, 5, 'Steve', 'D', 'steve@abcd.com', NULL, '$2y$10$704Xvf4VrROiXuRKvGibwe.bgZ2Y4opJPvX4FTDLS3UCGinD22nP2', NULL, '0', '(125) 555-5555', 'Mobile', NULL, 'assets/admin/images/389819369.png', 'assets/admin/images/361533621.jpg', 0, 'CEO', 'built', 'Technology', 'street 22', 'New York', 'New York', '', '1521148', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-19 21:39:44', NULL, '2020-03-19 21:39:44', NULL, NULL, 0, 'company', 0),
(49, 5, 'Nathan', 'Wilson', 'nathan@demo.com', NULL, '$2y$10$ar4ypoCULl.LfqMucVhUB..69mcrSMXQXLJjLnbQy9Sv6BcX8Bt2S', NULL, '(111) 111-1111', '(222) 222-2222', 'Phone', NULL, 'assets/admin/images/1101614631.png', 'assets/admin/images/139622300.jpg', 0, 'Marketing Manager', 'Nado', 'Software house', 'Street 24', 'Huston', 'New York', '', '512844', 'beyondant.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 1, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:17:23', NULL, '2020-03-20 00:22:03', NULL, '', 0, 'company', 0),
(50, 5, 'Usman', 'snhdfjknASJfn', 'usman@abcde.com', NULL, '$2y$10$oxKVki4Zk03pxnmsw9BFvOFiJ8jDtvw9LGa0hEIruxBXmL.QgXSJq', NULL, '(111) 111-1111', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/497171588.png', 'assets/admin/images/2055233230.jpg', 0, 'usman786', 'usman786', 'usman786', 'ABCD 123', 'usman786', 'usman786', '', 'usman786', 'https://www.google.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:24:51', NULL, '2020-03-20 00:26:17', NULL, '', 0, 'company', 0),
(51, 5, 'Usman', 'Naveed', 'usman@nado.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(222) 222-2222', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/525013690.png', 'assets/admin/images/1596648536.png', 0, 'Asst. Manager', 'Nado', 'Software house', 'ABCD 123', 'New York', 'New York', '', '512221', 'https://www.google.com/', 1, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:52:28', NULL, '2020-03-20 00:56:12', NULL, '', 0, 'company', 0),
(52, 5, 'Nabeel', 'Baig', 'mathswithnabeel@gmail.com', NULL, '$2y$10$PAptzROL2xB.8n79uNSytePNuKtgjwQ5udt3wM4XGlaZxzFNXD7pK', NULL, '(333) 390-6233', '(333) 390-6233', 'Mobile', NULL, 'assets/admin/images/1361536062.jpg', 'assets/admin/images/499532749.jpg', 0, 'mnb', 'mnbTech', 'mnbTech Software House', 'H-104, Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'https://www.instagram.com/number3.pk/', 0, 'https://www.facebook.com/mnbprofile', 0, 1, '2020-03-20 17:49:20', NULL, '2020-03-20 17:55:24', NULL, NULL, 0, 'company', 0),
(53, 5, 'Testing Fname Lname', 'sdsad', 'nb@nadofdgcrm.com', NULL, '$2y$10$j6zI066zg0BrSE/Ce9N6X.2T4CJKFJ2LcAamnhovZrNyYdY8kvPiK', NULL, '(123) 213-1233', '(432) 432-4324', 'Phone', NULL, 'assets/admin/images/748527921.jpg', 'assets/admin/images/751150779.jpg', 0, 'fdsfdsf', 'sadsad', 'sdsadsad', 'street2', 'sadsad', 'sadsad', '', '75290', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-20 19:08:49', NULL, '2020-03-20 19:08:49', NULL, NULL, 0, 'company', 0),
(54, 5, 'Usman', 'Naveed', 'usman@outsourceinpakistan.com', NULL, '$2y$10$sCn9XFe8c1ceDUswy563LeF9kb.6a7JMhRSm6m/3WRq0YELmlUxJK', NULL, '(609) 476-1640', '(335) 215-5171', 'Office Number', NULL, 'assets/admin/images/934211422.png', 'assets/admin/images/1860390530.jpg', 0, 'Asst.Manager', 'Outsource in Pakistan', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'Park Avenue', 'Sindh', 'Karachi', '', '75300', 'https://outsourceinpakistan.com/', 0, 'Website', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, 'https://www.instagram.com/sheikhusman19/', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-20 21:56:29', NULL, '2020-03-20 22:00:27', NULL, '', 0, 'company', 0),
(55, 5, 'Joe\'l', 'Perkins', 'JPerkins@GreenAcresNissan.com', NULL, '$2y$10$EzKwbZ0K7EFnnsU258uvzuFSOapfwcXbllrYaQ/KBt4f/JxhsSB0W', NULL, '(561) 537-5300', '(561) 537-5210', 'Mobile', NULL, 'assets/admin/images/726938444.png', 'assets/admin/images/50308396.png', 0, 'Service Director', 'Nissan Greenacres', 'Nissan Greenacres Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 21:58:24', NULL, '2020-03-21 22:10:01', NULL, '', 0, 'company', 0),
(56, 5, 'Carlo', 'Renda', 'CRenda@GreenAcresNissan.com', NULL, '$2y$10$fO0Xheh7yWXN6vQsljtmMekWxTCdXkmLYfElfLl9/Yp8qP1cF.E1.', NULL, '(561) 537-5300', '(561) 537-5217', 'Mobile', NULL, 'assets/admin/images/255643792.png', 'assets/admin/images/1273146008.png', 0, 'Preowned Sales Manager', 'Greenacres Nissan', 'Nissan Greenacres Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:32:12', NULL, '2020-03-21 22:32:12', NULL, NULL, 0, 'company', 0),
(57, 5, 'Kylinn', 'Dominguez', 'KDominguez@GreenAcresNissan.com', NULL, '$2y$10$91JmDVmeDx3.iFgVDbVl/OIBs7ERcoxrPU.NYk6lNv2KSwEfVRbca', NULL, '(561) 537-5300', '(561) 537-5224', 'Mobile', NULL, 'assets/admin/images/795878240.png', 'assets/admin/images/1732188437.png', 0, 'Client/Owner Loyalty Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:53:21', NULL, '2020-03-21 22:56:32', NULL, '', 0, 'company', 0),
(58, 5, 'Mike', 'Pennachio', 'MPennachio@GreenAcresNissan.com', NULL, '$2y$10$AWSmK.LJQuQl.I5Wdy6FWeLE0M2Mv0K9Iu2kczPnHp3ld360Z4Kji', NULL, '(561) 537-5300', '(561) 491-4310', 'Mobile', NULL, 'assets/admin/images/243250041.png', 'assets/admin/images/1158578195.png', 0, 'Executive Manager/Owner', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 23:57:23', NULL, '2020-03-21 23:57:23', NULL, NULL, 0, 'company', 0),
(59, 5, 'Dane', 'Luca', 'Dluca@GreenAcresNissan.com', NULL, '$2y$10$lAhoq.ho4.uzLiI1A/akBOAZ8jMn4oFhLf3izuZwhHY8und2U5oWm', NULL, '(561) 537-5509', '(561) 282-1764', 'Mobile', NULL, 'assets/admin/images/1593165740.png', 'assets/admin/images/108464897.png', 0, 'General Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:08:21', NULL, '2020-03-22 00:08:21', NULL, NULL, 0, 'company', 0),
(60, 5, 'Jesus', 'Rodriguez', 'JRodriguez@GreenAcresNissan.com', NULL, '$2y$10$iHaIhDoh2OgyWlt7AW4xHemUMqjLE01zATf1LcKd18l1VtyTxfU3m', NULL, '(561) 537-5300', '(561) 282-1721', 'Mobile', NULL, 'assets/admin/images/2066709945.png', 'assets/admin/images/140106319.png', 0, 'General Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:25:02', NULL, '2020-03-22 00:25:02', NULL, NULL, 0, 'company', 0),
(61, 5, 'Frank', 'Dellatto', 'FDellatoo@Greenacres.com', NULL, '$2y$10$GBZoC1WT9q3g.FLiLdYkNOHvXOGYudBK825L7i5.ToCB9r7CxpgkS', NULL, '(561) 537-5300', '(954) 496-2677', 'Mobile', NULL, 'assets/admin/images/249042804.png', 'assets/admin/images/1374469020.png', 0, 'General Floor Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:27:58', NULL, '2020-03-22 00:27:58', NULL, NULL, 0, 'company', 0),
(62, 5, 'Alicia', 'Narcisse', 'Anarcisse@Quest-comm.com', NULL, '$2y$10$obhSiVJ.IRBP98oy5aDqKecL1ltWvX4WQOlHpNwU924qJ2g7jp2Le', NULL, '(919) 322-0799', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Store Manager', 'Questcomm', 'Metro by T Mobile', '1620 Marin Luther King Blvd.', 'NC', 'Raleigh', '', '27610', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 1, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-22 01:33:48', NULL, '2020-03-22 01:35:37', NULL, '', 0, 'company', 0),
(63, 5, 'Erick', 'Johnson', 'mrejohnson26@yahoo.com', NULL, '$2y$10$l.ax8gc7ThD/2okzddwOm.0AOFGQ0YyDgmi3h8kVz4cbmdHwRdmb2', NULL, '(222) 222-2222', '(222) 222-2222', 'Mobile', NULL, '', '', 0, 'Sample', 'Sample', 'Sample', '1111111', 'Sample', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-22 01:58:13', NULL, '2020-03-22 01:58:13', NULL, NULL, 0, 'company', 0),
(64, 5, 'Bob', 'Antoville', 'Antoviller@NSMG.com', NULL, '$2y$10$YdmfVrzJyU2flKNE/Xtinur8iIwbMoYv7dkSQSIgkOaLu75zkmhFq', NULL, '(561) 737-7411', '(914) 646-1300', 'Mobile', NULL, '', '', 0, 'CEO', 'Beth Israel', 'Memorial Gardens', '13924 via Flora', 'FL', 'Delray Beach', '', '33484', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 22:45:55', NULL, '2020-03-25 22:45:55', NULL, NULL, 0, 'company', 0),
(65, 5, 'Chris', 'Hall', 'chall@slbt.com', NULL, '$2y$10$uzNxQTgOs00jI5dQcsBQ4OV9Yvv0HUylS7cvPLe5Usz.PN5p/bEIG', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, 'Store Manager', 'St. Lucie Battery & Tire', 'Complete Care Car Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:00:45', NULL, '2020-03-25 23:00:45', NULL, NULL, 0, 'company', 0),
(66, 5, 'Anthony', 'Mills', 'amills@slbt.com', NULL, '$2y$10$Ux19whbUk2Oi292rr3CY4eUB8dO72N6R9hbDWWYsx668qN8SQy35q', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, 'Service Advisor', 'St. Lucie Battery & Tire', 'Complete Car Care Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:08:57', NULL, '2020-03-25 23:08:57', NULL, NULL, 0, 'company', 0),
(67, 5, 'Pasquale', 'Lamarra', 'pat@eatpastaio.com', NULL, '$2y$10$vf9Au8UlNrjr9O3mwweg4.MlwlbF3YAY0wUDhZTIu7Yl2v4nECmpi', NULL, '(561) 676-1186', '(561) 676-1186', 'Phone', NULL, '', '', 0, 'Owner', 'Pastai', 'Restaurant', '10472 Southwest Village Center Dr.', 'FL', 'Port St. Lucie', '', '34987', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:27:43', NULL, '2020-03-25 23:27:43', NULL, NULL, 0, 'company', 0),
(68, 5, 'Shamir', 'Bolivar', 'theshadowgroupinc@yahoo.com', NULL, '$2y$10$4kojRXhz8aJnpOHpM02YHe4B/L9BEsTbEZ8Yn5iZmtuyAMzPD8Tuq', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:44:46', NULL, '2020-03-25 23:44:46', NULL, NULL, 0, 'company', 0),
(69, 5, 'Shamir', 'Bolivar', 'theshadowgroupinc2@yahoo.com', NULL, '$2y$10$jDM0Kfqopg6hOhYbPBIUoO0w1YzKntVwUh.9cStUuckFflLpC2z.K', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:52:22', NULL, '2020-03-25 23:52:22', NULL, NULL, 0, 'company', 0),
(70, 5, 'Mitchell', 'Wyett', 'tsrfashions1@gmail.com', NULL, '$2y$10$2TM3XUhlAIvsHe1LERi5A.MZ.8v1laGYWqPqKbsouMDBLbuhL.Sd6', NULL, '', '(678) 790-4460', 'Mobile', NULL, '', 'assets/admin/images/1150822383.jpg', 0, 'Owner', 'TSR Fashion LLC', 'Where fashion is nothing without people', '416 orchards walk', 'Georgia', 'Stone mountain', '', '30087', 'Www.tsrfashion.com', 0, '', '', 0, '', 1, '', 1, 1, '2020-03-28 04:16:23', NULL, '2020-03-28 04:16:23', NULL, NULL, 0, 'company', 0),
(71, 5, 'Abdul', 'Wasay', 'nafay552@gmail.com', NULL, '$2y$10$DaKrFQ6WVb8oNq8QR9RWaeSxdeWoxqpvL.SoYYHu68U/Kk0R1rwE2', NULL, '(335) 242-0530 ___', '(300) 363-9508', 'Phone', NULL, '', 'assets/admin/images/1783606097.jpg', 0, 'Hafiz', 'Online Quran Teaching', 'Learn Quran Online', 'Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', '', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/abdulnafaymajid.71', 0, 1, '2020-03-28 16:22:19', NULL, '2020-03-30 16:20:23', NULL, '', 0, 'company', 0),
(73, 5, 'Nia', 'Dumont', 'NDumont@BuiltSocially.com', NULL, '$2y$10$z7FVfwyZKHAQZ1gEDzDbZOvdKhGuTjFuQZlTNHsQRhVgFH1XoarD2', NULL, '(954) 213-5642', '(954) 213-5642', 'Phone', NULL, 'assets/admin/images/1141922232.png', 'assets/admin/images/1460046494.png', 0, 'Chief Operations Officer', 'Built Socially', 'Digital Marketing Firm', '7603 NW 60th Lane', 'FL', 'Parkland', '', '33067', 'www.BuiltSocially.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-29 16:03:41', NULL, '2020-03-29 16:45:49', NULL, '', 0, 'company', 0),
(74, 5, 'Ralph', 'Avila', 'RAvila@Holmanauto.com', NULL, '$2y$10$MeitRE8KA.zsZZnRJUxS/.xFzr162Gen8HPekd3PaTO4OEJauchnu', NULL, '(954) 335-2250', '(305) 216-4808', 'Mobile', NULL, 'assets/admin/images/1661588346.JPG', 'assets/admin/images/769303411.JPG', 0, 'General Manager', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:12:42', NULL, '2020-03-31 12:20:23', NULL, NULL, 0, 'company', 0),
(75, 5, 'Carlos', 'Cucalon', 'CCucalon@Holmanauto.com', NULL, '$2y$10$XB1jaIxc7mj2w1Tl1/o2UOg9uQoRPNo6OByyxsi0tnD1ZBgyZHy5K', NULL, '(954) 779-2000', '(954) 383-7040', 'Mobile', NULL, 'assets/admin/images/990031963.JPG', 'assets/admin/images/2086331285.JPG', 0, 'Senior Marketing Strategist', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:27:52', NULL, '2020-03-31 12:31:03', NULL, '', 0, 'company', 0),
(76, 5, 'C', 'Viotti', 'cviotti1@vetservices.com', NULL, '$2y$10$F1D7Ar6XvRjVrZeJJaCaoOOi56IFKfxcNB.svg0PdIe9Nx34ol5KK', NULL, '(954) 306-0970', '(954) 306-0970', 'Phone', NULL, '', '', 0, 'Owner', 'West Lake Animal Hospital', 'Veterinarian Services', '318 Indian Trace', 'FL', 'Weston', '', '33326', 'http://bit.ly/westongoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:30:59', NULL, '2020-04-01 15:35:52', NULL, '', 0, 'company', 0),
(77, 5, 'Chris', 'Viotti', 'Cviotti2@vetservices.com', NULL, '$2y$10$bczHFUT/sihi2N9k7xvsGuseHdvOM60XyBvpNAYj2BgUxBCKoI/0i', NULL, '(786) 616-8830', '(786) 616-8830', 'Phone', NULL, '', '', 0, 'Owner', 'Kendal Animal Medical Center', 'Veterinarian Services', '12586 SW 88th Street', 'FL', 'Miami', '', '33186', 'http://bit.ly/kendallgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:41:56', NULL, '2020-04-01 15:44:48', NULL, '', 0, 'company', 0),
(78, 5, 'Chris', 'Viotti', 'Cviotti3@vetservices.com', NULL, '$2y$10$/Rx2d8TbxrFMlALjV8gV8uU0dhnNuOKttAONhmFigfK2KW6mqVRdm', NULL, '(954) 405-8640 ___', '(954) 405-8640', 'Phone', NULL, '', '', 0, 'Owner', 'Pines animal Hospital- Vetco Total Care', 'Veterinarian Services', '15895 Pines Blvd', 'FL', 'Pembroke Pines', '', '33027', 'https://g.page/pinesanimalhospital/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:50:39', NULL, '2020-04-01 15:54:02', NULL, '', 0, 'company', 0),
(79, 5, 'Chris', 'Viotti', 'Cviotti4@vetservices.com', NULL, '$2y$10$nzlV5CXqXaKhr4p0GWP/z.HE3rzAbcFRzWAvNdFRP7hasWNM6X9Py', NULL, '(954) 419-4560', '(954) 419-4560', 'Phone', NULL, '', '', 0, 'Owner', 'Deerfield Beach Animal Hospital- Vecto Total Care', 'Veterinarian Services', '3551 W. Hilsboro Blvd', 'FL', 'Deerfield Beach', '', '33442', 'https://g.page/VetcoDeerfieldBeachAnimalHosp/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:00:00', NULL, '2020-04-01 16:01:03', NULL, '', 0, 'company', 0),
(80, 5, 'Chris', 'Viotti', 'Cviotti5@vetservices.com', NULL, '$2y$10$huyxEV0C41H7z03xYfDG0OeyH1oyZ6wtva8x0ULXVIirdrcfd8g5a', NULL, '(561) 900-2680', '(561) 900-2680', 'Phone', NULL, '', '', 0, 'Owner', 'Delray Beach Animal Hospital- Veterinarian Delray Beach', 'Veterinarian Services', '13900 Jog Road Suite 209', 'FL', 'Delray Beach', '', '33446', 'http://bit.ly/delraybeachgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:05:49', NULL, '2020-04-01 16:06:13', NULL, '', 0, 'company', 0),
(81, 5, 'Chris', 'Viotti', 'Cviotti6@vetservices.com', NULL, '$2y$10$x1EZ3Q3p50R8qafZUmeAXOevQjnMW.oPNWPgFD1.tWTACi8WXMyu2', NULL, '(954) 869-4371', '(954) 869-4371', 'Phone', NULL, '', '', 0, 'Owner', 'Oakland Animal Medical Center', 'Veterinarian Services', '1009 E. Commerical Blvd', 'FL', 'Oakland Park', '', '33334', 'http://bit.ly/oaklandgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:09:59', NULL, '2020-04-01 16:10:14', NULL, '', 0, 'company', 0),
(82, 5, 'Shunya', 'Roytman', 'Shunya@Finessecollection.com', NULL, '$2y$10$ByXYgAF0vW42i1X4kO9ssunl3A0Z/YjJIq3FHXOGtHl936T.zFHt.', NULL, '', '(561) 302-7351', 'Mobile', NULL, '', '', 0, 'N/A', 'N/A', 'N/A', '9220 SW 14th Street  Apt. 3401', 'Fl', 'Boca Raton', '', '33428', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-01 17:53:02', NULL, '2020-04-01 17:53:02', NULL, NULL, 0, 'company', 0),
(83, 5, 'Chris', 'Viotti', 'CViotti@personal.com', NULL, '$2y$10$U49osEf5aycfYca2iPtbQ.Uc1dR1ag46Tw/N36Ltjvm43dkg3fqQ2', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Owner', 'Sample', 'Sample', 'Sample', 'FL', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-01 19:55:15', NULL, '2020-04-01 19:55:15', NULL, NULL, 0, 'company', 0),
(84, 5, 'Syed', 'AamirAli', 'alisyedamir2018@gmail.com', NULL, '$2y$10$G1JhP05hiFoUAu//PWaGXe5hgEuQemN7qsliuGAPqSH99KkYjVmCS', NULL, '(031)-32099657', '(030) 450-9442-456', 'Office Number', 'Executive', 'assets/admin/images/960710274.png', 'assets/admin/images/1434776337.png', 0, 'jhgjjfjhfjsdasdsd', 'sdfs', 'hgcghch hgjhdcghc', 'gdfgdsg', 'Sindh', '', 'dersdsdf', 'sdfsdfsdf', 'https://www.youtube.com/', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/syedaamir.ali.1000/', 0, 1, '2020-04-02 13:55:43', NULL, '2020-04-29 13:54:29', NULL, '', 0, 'company', 0),
(85, 5, 'Syed Faizan Ali', 'ali', 'diana123@gmail.com', NULL, '$2y$10$LqDGs31Ewsn/fNmQ9WfeteSYpsI58dCbSPauPPVAC.f/nGFM2NcdW', NULL, '(313) 209-9657', '(313) 209-9657', 'Mobile', NULL, '', '', 0, 'Abu Ban Kababb', 'HP', 'df', 'gdfgdsg', 'dfg', 'dfsg', 'd', 'dfgsdfgdfsg', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 14:02:30', NULL, '2020-04-02 14:02:30', NULL, NULL, 0, 'company', 0),
(86, 5, 'ASHGSVADJCa', 'ausDVUAYD', 'diana@gmail.com', NULL, '$2y$10$Tp07aNQM.uv0DkrxRahtv.Y1qi4Sy8u7V2y8bAtk08L.Shoq0EwqS', NULL, '(031) 313-1313', '(213) 132-1313', 'Mobile', NULL, '', '', 0, 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:36:40', NULL, '2020-04-02 15:36:40', NULL, NULL, 0, 'company', 0),
(87, 5, 'ASHGSVADJCa', 'ausDVUAYD', 'diana23@gmail.com', NULL, '$2y$10$0DnKX90pk1T.lb0.mlFKB.X4dScXQWPcPixlQZWTaC/Gm4/Qg57a2', NULL, '(252) 525-2525', '(211) 212-3531', 'Mobile', NULL, '', '', 0, 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:41:20', NULL, '2020-04-02 15:41:20', NULL, NULL, 0, 'company', 0),
(88, 5, 'ASHGSVADJCa', 'ausDVUAYD', 'diana33@gmail.com', NULL, '$2y$10$ViCRTg9XfhInDB5MXxck4em3Sfo8tk3o/MuCko4WZSJG9ab3sc18m', NULL, '(233) 145-6456', '(456) 456-4564', 'Mobile', NULL, '', '', 0, 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:46:16', NULL, '2020-04-02 15:46:16', NULL, NULL, 0, 'company', 0),
(89, 5, 'ASHGSVADJCa', 'ausDVUAYD', 'diana43@gmail.com', NULL, '$2y$10$fXdS3hbsA98u2deJkT1Js.YunZnpQQhqfIMPIfmBByx6QgkWmfSx6', NULL, '(312) 313-1231', '(123) 123-1231', 'Mobile', NULL, '', '', 0, 'ASHDVAHGCD', 'SHGFJ', 'DSFAS', 'gdfgdsg', 'JSALFBKDBF', 'kARACHI', 'DSAFSDAF', 'SDFS', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 15:51:14', NULL, '2020-04-02 15:51:14', NULL, NULL, 0, 'company', 0),
(90, 5, 'Syed Aamir', 'Ali', 'alisyed@yus.com', NULL, '$2y$10$wQsELLdIJkrtZHG04s0A.ux4E89WqVIW0ietB5ioYWYd/ZNRalTLK', NULL, '(345) 345-345_', '(345) 345-3453', 'Mobile', NULL, '', '', 0, 'sds', 'fsdfsd', 'sfsdfs', 'ertegsdg', 'erterter', 'rete', 'ert', 'ertertert', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-02 16:08:52', NULL, '2020-04-02 17:00:48', NULL, '', 0, 'company', 0),
(91, 5, 'fgdsfg', 'dsgdfgs', 'wetwett@uasd.com', NULL, '$2y$10$pQPyS5gizYGs46N0e3jKge.r9WwU16p5Aw7hBQeamSc9Y9dfhNj6O', NULL, 'ewtert', '435345345345', 'Mobile', NULL, NULL, NULL, 0, 'dfsgdf', 'etertwet', 'ewtert', 'wetewt', 'werwrqrwq', 'eqrqwrwer', 'weqrqwrwr', 'wqrweqr', 'wqerqer', 0, '', 'weqwe', 0, '', 0, '', 0, 1, '2020-04-03 06:36:09', NULL, '2020-04-03 06:36:09', NULL, NULL, 0, 'company', 0),
(95, 2, 'dsfa', 'sdf', 'alisyedamir20183@gmail.com', NULL, '$2y$10$Cn60Skdn8.y2NhAXmDCIx.xJmIp10nERQNP7nsU2EZ3zaWkrxkOGG', NULL, '(324) 242-3424', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 06:48:08', NULL, '2020-04-03 06:48:08', NULL, NULL, 0, 'personal', 0),
(96, 2, 'dsfa', 'sdf', 'dianasdasd23423@gmail.com', NULL, '$2y$10$oRnyGRrQefuXW9v.2u6AqeFWJkmB9lrXrDEGWbaXl9I/PeLtVhEey', NULL, '(324) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:13:25', NULL, '2020-04-03 07:13:25', NULL, NULL, 0, 'personal', 0),
(97, 2, 'dsfa', 'sdf', 'alisyederwrwe@yus.com', NULL, '$2y$10$YO7wKpW9YQZz3ET8TkBoBuU.f6z7RLlGvKkCV2vrjmnHqSmzdnOcq', NULL, '(345) 345-3453', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post Changed', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:16:04', NULL, '2020-04-03 07:16:04', NULL, NULL, 0, 'personal', 0),
(99, 2, 'dsfa', 'sdf', 'alisyedamir201843534@gmail.com', NULL, '$2y$10$KG0a6ZLJRuzXzELhIeRkreRtLpQM/3uD8jzPEHMqsTJ9s9SYNfKvu', NULL, '(345) 353-4534', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:17:21', NULL, '2020-04-03 07:17:21', NULL, NULL, 0, 'personal', 0),
(101, 2, 'dsfa', 'sdf', 'alisyedamir2018ertert@gmail.com', NULL, '$2y$10$PgVD.yEsBlVXo3o5OnrzCOK5RotThbRjMcgdkNw.x8MI1Tnt4z.9q', NULL, '(234) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:19:35', NULL, '2020-04-03 07:19:35', NULL, NULL, 0, 'personal', 0),
(102, 2, 'dsfa', 'sdf', 'ertetewt@idnfd.vomc', NULL, '$2y$10$XyOG/EvBk5p65wHsYwaEfeg8hJwzoYK0pmxmqp48gbBxeELlWdk3y', NULL, '(234) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:22:10', NULL, '2020-04-03 07:22:10', NULL, NULL, 0, 'personal', 0),
(104, 2, 'dsfa', 'sdf', 'alisyedamir201832423@gmail.com', NULL, '$2y$10$hHUWj6T3lN4uCfkntb8GheSZ/z5cCaWLKtvh6/n7UfHWjyA69VpGS', NULL, '(324) 234-2342', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:23:08', NULL, '2020-04-03 07:23:08', NULL, NULL, 0, 'personal', 0),
(106, 2, 'dfsgsdf', 'sdf', 'alisyedamir201823423423@gmail.com', NULL, '$2y$10$NrDanM0i3.Rxz1b/AdILD.EVQRW0/KJU.2XPxuAcmEGOa3kBMQGqu', NULL, '(423) 423-4234', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:24:31', NULL, '2020-04-03 07:24:31', NULL, NULL, 0, 'personal', 0),
(108, 5, 'dsfa', 'sdf', 'alisyedamir201345348@gmail.com', NULL, '$2y$10$WWUCurP0sSTOFJ.JzIsFHeuVgbR3d5w.RfanBrNdcB4tTfKcfaETm', NULL, '(435) 345-3453', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', 'dgsdfgdsf', '', '345345', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:25:11', NULL, '2020-04-03 07:25:11', NULL, NULL, 0, 'company', 0),
(110, 2, 'dsfa', 'sdf', 'alisyedamir202342318@gmail.com', NULL, '$2y$10$Pfj8D2.afulJ1hMaxl6MR./9bEIM.Q4uOfWqZUMWL4WFMulJcKmJu', NULL, '(234) 234-2423', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:25:59', NULL, '2020-04-03 07:25:59', NULL, NULL, 0, 'personal', 0),
(111, 2, 'dsfa', 'sdf', 'alisywerwrqed@yus.com', NULL, '$2y$10$W2hld.zg37lvp4zZzt1BSeJlEWYertC2WG1Jl4GdQbMQxV5SekBqu', NULL, '(324) 242-3423', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:26:58', NULL, '2020-04-03 07:26:58', NULL, NULL, 0, 'personal', 0),
(112, 2, 'dfsgsdf', 'sdf', 'alisyedamiqweqwer2018@gmail.com', NULL, '$2y$10$.ZASyaTGnizpWn0vNNNeQexs6gTy678YCwtcRv1DIZI01Kd1rJbPG', NULL, '(312) 312-3123', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:28:47', NULL, '2020-04-03 07:28:47', NULL, NULL, 0, 'personal', 0),
(114, 2, 'dsfa', 'sdf', 'alisyedamir1231232018@gmail.com', NULL, '$2y$10$idnE.j3xxSQIuezX4CQbYO4D7cYhEultjO5mhDgeP/MlAFb7gdZEi', NULL, '(231) 312-3123', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:30:54', NULL, '2020-04-03 07:30:54', NULL, NULL, 0, 'personal', 0),
(115, 2, 'dsfa', 'sdf', 'diana1qrqer23@gmail.com', NULL, '$2y$10$lnEjIuftAXiheKjkGkmHz.7FTiKqxSgfBmrlA2lVK8sc.lMvvSARS', NULL, '(234) 242-3423', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:38:53', NULL, '2020-04-03 07:38:53', NULL, NULL, 0, 'personal', 0),
(116, 2, 'dsfa', 'gdsfg', 'eweqrerqwrfqefe@gmaisa.com', NULL, '$2y$10$Uv8Ejd3OLNyKtsOvx9Uo4.Lt6XedEc9QUYZvRGyq/S.Hhhiew.20i', NULL, '(234) 242-3424', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:41:31', NULL, '2020-04-03 07:41:31', NULL, NULL, 0, 'personal', 0),
(117, 2, 'dsfa', 'sdf', 'diana123q21313w@gmail.com', NULL, '$2y$10$B1c6TBRfnXUFWd4ZcVKcA.dR06D3tAWsiRVFH4IbgBfLzs16l0HGq', NULL, '(123) 123-1231', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'eeqweq', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:48:18', NULL, '2020-04-03 07:48:18', NULL, NULL, 0, 'personal', 0),
(118, 2, 'dsfa', 'sdf', 'alisyedamirwqerwe2018@gmail.com', NULL, '$2y$10$zst/M8Ns2KkFeQjoKXVJGuq4G.DmWxl7ZZiczh.2KXAOfTKRN4bxu', NULL, '(123) 214-3434', 'dsfa', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:49:26', NULL, '2020-04-03 07:49:26', NULL, NULL, 0, 'personal', 0),
(119, 2, 'dfsgsdf', 'sdf', 'alisyedweqeamir2018@gmail.com', NULL, '$2y$10$EjWmXfuWak/splBdUSglx.dUMldEQhDZiKx2HxQplg0ktV70z1u/q', NULL, '(231) 231-2312', 'dfsgsdf', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 07:51:28', NULL, '2020-04-03 07:51:28', NULL, NULL, 0, 'company', 0),
(124, 2, 'werqwr', 'qwerqwe', 'wqer@jwheje.com', NULL, '$2y$10$440OXrG/GFt2dyJjE2i0eusW2z8M03CbGyGO9dtMTWQWFCCPwF2da', NULL, '(324) 234-2342', '(324) 234-2342', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:45:49', NULL, '2020-04-03 13:45:49', NULL, NULL, 0, 'personal', 0),
(125, 2, 'dsfa', 'sdf', 'alisyedamewrqwerir2018@gmail.com', NULL, '$2y$10$EbtFt.2.cxpm0rv1BQHyo.NCe6ZoCHoqGzcwgJhiZa0lSTlZ/6eYC', NULL, '(342) 423-4234', '(342) 423-4234', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post Changed', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:47:27', NULL, '2020-04-03 13:47:27', NULL, NULL, 0, 'personal', 0),
(126, 2, 'dsfa', 'sdf', 'alisyewqrdamewrqir2018@gmail.com', NULL, '$2y$10$1o0lLr0lq80KWn81pngIO.xzksYuW/hpDTM8mw1Tkh4ZCWT57igVG', NULL, '(324) 234-2342', '(324) 234-2342', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-03 13:49:05', NULL, '2020-04-03 13:49:05', NULL, NULL, 0, 'company', 84),
(128, 5, 'Syed Faizan Ali', 'eewrrqwreq', 'aladsasihd@gmail.com', NULL, '$2y$10$2MpvvHaXnR0IvtCoFqZwSu/zzuv/xWtl6/LwcrcYFNNxSFT13HxjK', NULL, '(213) 123-1231', '(234) 234-2342', 'Phone', NULL, '', '', 0, 'werqwer', 'fwreferferwrw', 'erwfrefew', 'gdfgdsg', 'sadfsdfsf', 'sadsadasfdsf', 'sdafsfd', 'sdfafsdffd', 'wfsdf.com', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-07 02:58:04', NULL, '2020-04-07 02:58:04', NULL, NULL, 0, 'company', 0),
(129, 5, 'Syed Faizan Ali', 'rtertetw', 'aliamir@yahoo.com', NULL, '$2y$10$cRRFTqd4eGeMnPaFRvjsoe9.ZRduqDE7qQ/q7xNno7M94LC2ZfQ7O', NULL, '(234) 234-2342', '(234) 234-2342', 'Mobile', NULL, '', '', 0, 'trewtertre', 'efrweqrfqwerwqe', 'ewqrqwerwqe', '', 'sdafsdf', 'dfsdfdsaf', 'dfsafsf', '435435', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-07 03:06:26', NULL, '2020-04-07 03:06:26', NULL, NULL, 0, 'company', 0),
(130, 5, 'Syed Faizan Ali', '4ETERTWER', 'amir@demo.com', NULL, '$2y$10$zy85W5N3AM9G36wDGFRnS.73Uy05eKCV0LaXcEm55jKbCfD7zTYFq', NULL, '(234) 234-2343', '(234) 324-2342', 'Mobile', NULL, '', '', 0, 'TERTWERT', 'ewrwerqwe', 'DSFSAFSDF', 'gdfgdsg', 'dfsgfdg', 'fdgsdfg', 'dfsgdfg', '43543', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-07 04:19:57', NULL, '2020-04-07 04:19:57', NULL, NULL, 0, 'company', 0),
(131, 5, 'Syed Faizan Ali', 'trewtewrt', 'amirali2018@gmail.com', NULL, '$2y$10$FSNyx5FwRwTW0Aphw2ct8O0fMVt0ohIiE9.dUICj7Duq5lrzz5Era', NULL, '(345) 345-3425', '(345) 234-5343', 'Mobile', NULL, '', '', 0, 'retertrwe', 'ewrtewrt', 'rete', '43te', '3453452', '345345', '', '34543', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 04:20:53', NULL, '2020-04-07 04:20:53', NULL, NULL, 0, 'company', 0),
(132, 2, 'dsfa', 'sdf', 'alisydasdwqewed@yus.com', NULL, '$2y$10$4rzWsbnCS.IGl2CngTfeEO8.w8AzfNXsbAw1/dm7yZ2bTdzd3jwUG', NULL, '(324) 324-2342', '(324) 324-2342', 'Mobile', NULL, NULL, NULL, 0, 'dsfsdfds', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:18:11', NULL, '2020-04-07 10:18:11', NULL, NULL, 0, 'personal', 84),
(136, 2, 'dsfa', 'sdf', 'alisyedam32423423ir2018@gmail.com', NULL, '$2y$10$Uf8JuGA48Ky4FPMtoNrPDe6mHj2so75A9ZKvAwAaUCVYQ9Bd0levy', NULL, '(234) 234-2342', '(234) 234-2342', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:33:56', NULL, '2020-04-07 10:33:56', NULL, NULL, 0, 'personal', 84),
(137, 2, 'dsfa', 'sdf', 'diana12werwe3@gmail.com', NULL, '$2y$10$WEOESjxi6zXknSz2ADs2UutsRo1wKgIBVSm9fdehH3udrSzbI8JVS', NULL, '(232) 432-4234', '(232) 432-4234', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:35:03', NULL, '2020-04-07 10:35:03', NULL, NULL, 0, 'personal', 84),
(138, 2, 'dsfa', 'sdf', 'qrewrweqrcwer@kbasdka.com', NULL, '$2y$10$KLN/oN7k1kyXrRaqxkzGoOdQgG.w6w3a5dRu4mtSR5yV7tOb/0CJy', NULL, '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:40:09', NULL, '2020-04-07 10:40:09', NULL, NULL, 0, 'personal', 84),
(139, 2, 'dsfa', 'sdf', 'alisyedwerwexsdamir2018@gmail.com', NULL, '$2y$10$N2ughE4WONlE7PHo1JzbnOXXy8QV0E0uPpXUioZ32NfyBA70ySzpi', NULL, '(243) 423-4234', '(243) 423-4234', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:41:45', NULL, '2020-04-07 10:41:45', NULL, NULL, 0, 'personal', 84),
(140, 2, 'dsfa', 'sdf', 'dianaewrweewr123@gmail.com', NULL, '$2y$10$tOMGIS8/CmoB76raVdLkSuNMMM08p1c2qJag1ZLiJbushojk2giXm', NULL, '(234) 324-3242', '(234) 324-3242', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:42:36', NULL, '2020-04-07 10:42:36', NULL, NULL, 0, 'personal', 84),
(142, 2, 'dsfa', 'sdf', 'alisyeda234234234mir2018@gmail.com', NULL, '$2y$10$bCnxIQuIdlPOJ0uOmgFEg.RO9ERSS9i7LTIAe34RPW3ECfZwrJvdy', NULL, '(234) 324-2342', '(234) 324-2342', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:43:44', NULL, '2020-04-07 10:43:44', NULL, NULL, 0, 'personal', 84),
(144, 2, 'dsfa', 'sdf', 'alisyedamirweqwe2018@gmail.com', NULL, '$2y$10$uvHtidMSwPi9hezN1AVWHe3ipukl5/ATBm2UvMjIAmgQnRKDbh3sa', NULL, '(231) 312-3123', '(231) 312-3123', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 10:44:51', NULL, '2020-04-07 10:44:51', NULL, NULL, 0, 'personal', 84),
(147, 2, 'dfsgsdf', 'gdsfg', 'diana1sadas23@gmail.com', NULL, '$2y$10$hauF8bOVZMzt49wH/MybBez7SniUR.FgFki11irr6mN/MlaTOu3sq', NULL, '(342) 423-4234', '(342) 423-4234', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 11:26:25', NULL, '2020-04-07 11:26:25', NULL, NULL, 0, 'personal', 84),
(150, 2, 'dfsgsdf', 'sdf', 'alisyedaamirerwrqw123@hotmail.com', NULL, '$2y$10$D.tuDU6Sqe6sFxppfcTKrOYz13X7rbpGi3bZ14zhfkn/kpSLHPU46', NULL, '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 14:11:11', NULL, '2020-04-07 14:11:11', NULL, NULL, 0, 'personal', 84),
(151, 2, 'dfsgsdf', 'sdf', 'alisyedawqerweramirerwrqw123@hotmail.com', NULL, '$2y$10$HzNMV8//C6HZPsOwMDflauqyFeawhvJ8jXVRRrUqVPT9J9k1GfLLG', NULL, '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 14:11:24', NULL, '2020-04-07 14:11:24', NULL, NULL, 0, 'personal', 84),
(154, 2, 'dfsgsdf', 'sdf', 'dsfadsrewr324r@hotmail.com', NULL, '$2y$10$47kO3RHrawBS7kUWSpWUtuR2HtNBhb8f29cZJdl9Fh505Bf/1joFC', NULL, '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 14:11:39', NULL, '2020-04-07 14:11:39', NULL, NULL, 0, 'personal', 84),
(158, 2, 'dsfa', 'gdsfg', 'diansdafsdfa123@gmail.com', NULL, '$2y$10$2GY5Z9qv3dmmshi5rUdCKurc15hx9hVmwVKYcm21NkNBzzpIARIrC', NULL, '(234) 234-3242', '(234) 234-3242', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 14:12:00', NULL, '2020-04-07 14:12:00', NULL, NULL, 0, 'personal', 84),
(207, 5, 'Syed Faizan Ali', 'eqreqwr', 'alisyedaamir123@hotmail.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(345) 345-3453 345', '(345) 345-3453', 'Office Number', NULL, '', '', 0, 'wqereqw', 'Mosh Hamid', 'dfgdsgdfgdgf', 'gdfgdsg', 'rewtwer', 'erewt', 'tertwer', '534543', 'wfsdf.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-07 16:47:21', NULL, '2020-04-07 16:47:21', NULL, NULL, 0, 'company', 0),
(208, 2, 'dfsgsdf', 'gdsfg', 'aamir.ali@technado.co', NULL, '$2y$10$Xt588eG5srgAObcQOr314.K2Iz7E3kzMRoxordbvrxAPvuH7R76CC', 'qviesIgSacmUN3Jwj4xvVv6npm3UfKAURWJd1Oo3rFNn0xujNLFC0lwwBFGk', '(453) 454-3534 534', '(453) 454-3534 534', 'Mobile', NULL, 'assets/admin/images/1748536718.png', 'assets/admin/images/585430185.png', -54, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 16:48:33', NULL, '2020-04-23 15:18:22', NULL, NULL, 0, 'personal', 84),
(209, 2, 'dsfa', 'sdf', 'dianadsfasfasdfswrwer123@gmail.com', NULL, '$2y$10$EYiNf8RSU2wrePs7ko.a0eb7a3lkfsFcxN92fPPofNHmn2PH/1EPi', NULL, '23423534245', '23423534245', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:46:13', NULL, '2020-04-08 12:46:13', NULL, NULL, 0, 'personal', 84),
(211, 2, 'dsfa', 'sdf', 'alisyedamerwwerew432ir2018@gmail.com', NULL, '$2y$10$sWR47NeihEXVubBo/V1E4OvWgq6qXMePaCtOgpm/YoTAqRnKWlpOW', NULL, '32423423', '32423423', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sfsdfsaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:47:01', NULL, '2020-04-08 12:47:01', NULL, NULL, 0, 'personal', 84),
(212, 2, 'dsfa', 'sdf', 'ewrewrer345@demo.com', NULL, '$2y$10$R8nicYbPyqXrT9JfG6bkT.fzOo7MqSK5LI4Ok9tOSvnjKNmLjXjA2', NULL, '435435435', '435435435', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:48:18', NULL, '2020-04-08 12:48:18', NULL, NULL, 0, 'personal', 84),
(213, 2, 'dsfa', 'gdsfg', 'alisy435edamrewtertir2018@gmail.com', NULL, '$2y$10$3QUX9KFgbGpI8ghBS4xUTu7uPHPMVXqqRf9088WUuOMoElMp9TbF.', NULL, '43535345345', '43535345345', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:49:19', NULL, '2020-04-08 12:49:19', NULL, NULL, 0, 'personal', 84),
(214, 2, 'dsfa', 'sdf', 'ali3424syerwrdaa234mir123@hotmail.com', NULL, '$2y$10$c0CahUO2Oxk4I3wqu5nfReNJ2O/wrlxnA.QiuqjxFTvqU0KBA9L.u', NULL, '34234234324', '34234234324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:52:29', NULL, '2020-04-08 12:52:29', NULL, NULL, 0, 'personal', 84);
INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `acc_type`, `parent_id`) VALUES
(216, 5, 'Erum', 'Masood', 'erum2018@gmail.com', NULL, '$2y$10$Nd0bbE1htE3wjwV1EO/ho.l4.p9./dDCqK2muooTwTX./JgpNXV/G', NULL, '(453) 445-3454', '(435) 345-435_', 'Mobile', NULL, '', '', 0, 'dsfasdfsdaf', 'Foods Knife', 'rhfghdfhgfhg', 'gdfgdsg', 'dfsgdfg', 'fdgsfgsfdg', 'dsfgdf', '645654', 'wfsdf.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 12:59:32', NULL, '2020-04-08 12:59:32', NULL, NULL, 0, 'company', 0),
(217, 2, 'dsfa', 'sdf', 'dianawqewqewq123@gmail.com', NULL, '$2y$10$9TlefvIGZJ6j4KcNfbvcLuMSE8Jbk935fHTZcWfyAtg78RHB34s0q', NULL, '324324324', '324324324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 13:08:18', NULL, '2020-04-08 13:08:18', NULL, NULL, 0, 'personal', 216),
(218, 2, 'dsfa', 'sdf', 'alisyedaewrwermir2018@gmail.com', NULL, '$2y$10$kn4pHCFdqVGK99yBR5YdjeuY2dsTT9nn0mEBDiv/psMXUW35jn0Pm', NULL, '324324324324', '324324324324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 13:09:33', NULL, '2020-04-08 13:09:33', NULL, NULL, 0, 'personal', 216),
(219, 2, 'dsfa', 'sdf', 'alisyedaewrewrmir2018@gmail.com', NULL, '$2y$10$WGBzf3y8VuDfd6ruTiirYerPDqUtJGg9z/sgG7Od9TRu2KyubjML.', NULL, '4234234324', '4234234324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 13:09:58', NULL, '2020-04-08 13:09:58', NULL, NULL, 0, 'personal', 216),
(220, 2, 'dsfa', 'sdf', 'safdfads@yahoo.com', NULL, '$2y$10$R/DZXshxAGXjFyjKrJ07XuQ12jXUcWUzynkpaLMGYzPNxWmhPKuKK', NULL, '324234324324', '324234324324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 13:11:19', NULL, '2020-04-08 13:11:19', NULL, NULL, 0, 'personal', 216),
(221, 2, 'dsfaamir123', 'sdf', '234diawerewrna123@gmail.com', NULL, '$2y$10$xqpMFBVqSd/dc7M4lUhDLe8xBo/OYg4X88i0SE/lgI.rblqbly50K', NULL, '34324234324', '34324234324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 14:06:29', NULL, '2020-04-09 14:34:51', NULL, NULL, 0, 'personal', 84),
(223, 5, 'retewrt', 'erwtert', 'amir123@gmail.com', NULL, '$2y$10$JequH4y0lYdaFmXqZClqwOcxWv11UKJnyWRgsm2NGWL9KKj7L4BfG', NULL, '(543) 534-5435', '(543) 543-5435', 'Mobile', NULL, '', '', 0, 'erwtert', 'fdsgdfg', 'dfsgsdfg', 'gdfgdsg', 'wer', 'wer', 'wer', 'wer3423', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 16:23:21', NULL, '2020-04-08 16:23:21', NULL, NULL, 0, 'company', 0),
(224, 5, 'Syed Faizan Ali', '435', 'company@gmail.com', NULL, '$2y$10$8ppQ1uQiX2TIu5nEFVBMnO7D/z8Vttck0CKp72Am91VS3OO2LUdFe', NULL, '(453) 453-4545 435', '(345) 435-4354', 'Mobile', NULL, '', '', 0, 'ertertret', 'dfgsdfgdf', 'dfssgdfg', 'gdfgdsg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:45:17', NULL, '2020-04-09 00:45:17', NULL, NULL, 0, 'company', 0),
(225, 5, 'Syed', 'FaizanAli435', 'company123@gmail.com', NULL, '$2y$10$y0BBVMN2N/1slfhmrC4cKubC458e0/bq9f7YJpMr6yIHWqyRaJB96', NULL, '4534534545', '(345) 435-4354', 'Mobile', NULL, '', '', 0, 'ertertret', 'Blog Spot', 'dfssgdfg', 'gdfgdsg', '', '', '', '', 'www.gmail.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:47:17', NULL, '2020-04-09 01:16:36', NULL, NULL, 0, 'company', 0),
(226, 2, 'dsfa', 'sdf', 'emp123@gmail.com', NULL, '$2y$10$wCOZgW/7EqxY2T55CIT9qeAxffYp/raF3.ACWlhnRKTRrbEPkRTKS', NULL, '3243243423', '3243243423', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:47:51', NULL, '2020-04-09 00:47:51', NULL, NULL, 0, 'personal', 225),
(230, 2, 'dsfa', 'sdf', 'emp1234233@gmail.com', NULL, '$2y$10$vwUn9ySF5R6tDEA4VECwoO1gpdprlRsoczDdomE9UAMDTYLqSZnUG', NULL, '3243243423', '3243243423', 'Mobile', NULL, NULL, NULL, 0, 'Amir Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:49:31', NULL, '2020-04-09 01:42:23', NULL, NULL, 0, 'personal', 225),
(234, 2, 'dsfa', 'sdf', 'emp1324dsd23@gmail.com', NULL, '$2y$10$dcrlBsZRmq2ahdK6l.oscuaFNnMWw8UfuwNOuahikFMNvDOKLfDQa', NULL, '324234234324', '324234234324', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:53:42', NULL, '2020-04-09 00:53:42', NULL, NULL, 0, 'personal', 225),
(235, 5, 'Syed Faizan Ali', 'erttrewt', 'personal@gmail.com', NULL, '$2y$10$9DCjQfZqu5bq9smcUTyrz.Zjrj7UK/0N5APdi6c4O4dmXZ5Xuj7mm', NULL, '(234) 234-2343 234', '(342) 342-3423', 'Mobile', NULL, '', '', 0, 'rwetret', 'sdfafdsdfsf', 'dsafsdfsdfsdf', 'gdfgdsg', 'fsdafsdfdsf', 'dsafsd', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:56:27', NULL, '2020-04-09 00:56:27', NULL, NULL, 0, 'company', 0),
(236, 2, 'dsfa', 'sdf', 'emp23432123@gmail.com', NULL, '$2y$10$RklcH20Vq.yjURFfaxXw0eHGg6h8oPChzI3TBa0FwScb5L9pfpjX6', NULL, '3234234', '3234234', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 00:57:09', NULL, '2020-04-09 00:57:09', NULL, NULL, 0, 'personal', 225),
(238, 2, 'dsfa', 'sdf', 'alisyeda345345345mir2018@gmail.com', NULL, '$2y$10$z6rjz/dcb8DA9E0EJTCNluYkziLwE1gZBAp2lRWS2ucJwxbzE9Z5e', NULL, '534535', '534535', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:01:49', NULL, '2020-04-09 01:01:49', NULL, NULL, 0, 'personal', 225),
(239, 2, 'dsfa', 'sdf', 'alisyedamirrwerqwrwerwer2018@gmail.com', NULL, '$2y$10$CHY94uS9Et4Ly2Hazs.G5eQqudjIRzg4PLKTmXa5C2suldWxj9tLi', NULL, '423423423423', '423423423423', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:02:58', NULL, '2020-04-09 01:02:58', NULL, NULL, 0, 'personal', 225),
(240, 2, 'dsfa', 'sdf', 'aamir.ali@technaqwewedo.co', NULL, '$2y$10$u1xo69uYdrvOPZRTplscVOJ7fbyYS4eKJkIGnH8XiGtf5nwaZrsv6', NULL, '3242342342', '3242342342', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post Changed', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:10:20', NULL, '2020-04-09 01:10:20', NULL, NULL, 0, 'personal', 225),
(241, 2, 'dfsgsdf', 'sdf', 'diana123@23423gmail.com', NULL, '$2y$10$WCMSzgFErTKtDHsdatv1geONqY0FH1SY1O0DG63movQLmSger9JVm', NULL, '324234234234', '324234234234', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:11:36', NULL, '2020-04-09 01:11:36', NULL, NULL, 0, 'personal', 225),
(245, 2, 'dsfa', 'sdf', 'a23432423lisyedamir2018@gmail.com', NULL, '$2y$10$aUSwbv1EYnB0uq1dp7yha.tCzIvRr8sWIZXnPTuciD8LW9UncfUQG', NULL, '4234234', '4234234', 'Mobile', NULL, NULL, NULL, 0, 'New Post 1234', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:22:50', NULL, '2020-04-09 01:41:48', NULL, NULL, 0, 'personal', 225),
(246, 2, 'dsfa', 'sdf', 'alisyedawerwe234srmir2018@gmail.com', NULL, '$2y$10$sM1thcsZr1vJ/FNvMaBW4u2.IPWeTNkmf07J4opnMMypC/7MNEBMW', NULL, '4324324234', '4324324234', 'Mobile', NULL, NULL, NULL, 0, 'New Post 435435', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:43:37', NULL, '2020-04-09 01:43:52', NULL, NULL, 0, 'personal', 225),
(247, 2, 'Amir', 'sdf', 'dia435345na123@gmail.com', NULL, '$2y$10$NzFxbsWhA.XSJBO4vY29IOxGOiY6RFzDePZNPWnHERIr4DX1vnZu6', NULL, '435435435', '435435435', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post sdfsdfa', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:44:22', NULL, '2020-04-09 01:45:14', NULL, NULL, 0, 'personal', 225),
(248, 5, 'wqerwer', 'wqrwqerwe', 'company6657@gmail.com', NULL, '$2y$10$sBXbmZkkA.gO2KFHphQgG.Onnb1jm9s7m8gv1hgoMmWVG6ZikeIpG', NULL, '(342) 423-4234', '(324) 324-2342', 'Mobile', NULL, '', '', 0, 'rwreqwerwr', 'Foo', 'Food', 'gdfgdsg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 01:52:14', NULL, '2020-04-09 01:52:14', NULL, NULL, 0, 'company', 0),
(251, 2, 'dsfsafasdf', 'sdafsdf', 'lkhasdl@lksld.com', NULL, '$2y$10$.kk2dkgBF04s9.8ciVRmDeTxgXOaEBWm6C2wgKANwKjAKCvZgFpbO', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-17 16:09:57', NULL, '2020-04-17 16:09:57', NULL, NULL, 0, 'personal', 0),
(254, 2, 'Amir', 'retert', 'retertertert@yahoo.com', NULL, '$2y$10$BcnwbK9sBDt/wWmnQ9QPzebh59srmG/kCcG94eyjwt5QnCkjZ.M6.', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-17 16:52:30', NULL, '2020-04-20 15:28:46', NULL, NULL, 0, 'personal', 0),
(276, 2, 'dsfa', 'gdsfg', 'aamiwqewer.ali@technado.co', NULL, '$2y$10$wYrQbCUofTS7LbGbKCsOc.xRV5pWJh8JqMPOvs2U33nQndWsvm/kO', NULL, '213123123', '213123123', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 14:17:44', NULL, '2020-04-21 14:17:44', NULL, NULL, 0, 'personal', 130),
(279, 2, '', '', '12321diwqewqeanwqea123@gmail.com', NULL, '$2y$10$G2Prq3LdiAiko5MTdpJjpuSTQOdxZmEun2HWrD9phLcBHPbK0bgdq', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'wetewt', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 15:31:01', NULL, '2020-04-21 15:31:01', NULL, NULL, 0, 'personal', 248),
(281, 2, '', '', 'alisyedaamir@eee.com', NULL, '$2y$10$iyk6vccevpqfb4UL8FAQNuPxqciW8HQeqSeM7cYWMISKS82VaCsvq', NULL, '', '', 'Mobile', NULL, NULL, 'assets/admin/images/1096766575.png', 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 15:32:20', NULL, '2020-04-21 15:53:54', NULL, NULL, 0, 'personal', 248),
(282, 2, '', '', 'aawqeqweqwmir.ali@technado.co', NULL, '$2y$10$a/8jJBGWi97MPRQvZPD9jezzMnpCrNNJzb21m0S7EW2lpgNKuZLEW', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 15:55:34', NULL, '2020-04-21 15:55:34', NULL, NULL, 0, 'personal', 207),
(289, 7, 'Amir', 'Ali', 'alisyedaamir@yahoo.com', NULL, '$2y$10$khSVkQFIhA7Y8iv6WMDMV.1tjhr4Q2/La8wPIuqqyRTWvAfwunAKG', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-29 16:59:20', NULL, '2020-05-01 15:39:16', NULL, NULL, 0, 'individual', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
