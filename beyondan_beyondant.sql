-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2020 at 07:13 PM
-- Server version: 5.7.30
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
-- Database: `beyondan_beyondant`
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_url`, `link`, `created_at`, `updated_at`) VALUES
(3, 'assets/admin/images/1850053799.jpg', 'https://www.animeland.us/?__cf_chl_jschl_tk__=7b02f4f52546bd8612f715e02295ad1450165377-1588108252-0-AUJnIYyUVlT-TimFH_5PIW32JeUS06l15xvvKcqtN008AenPoCpHKyhb0-WL9oNMUVT2jL6_Cw8diHk3ruPLRjr0zIdevEPwU9sy', '2020-04-28 22:27:23', '2020-05-01 21:49:25'),
(4, 'assets/admin/images/768517606.jpeg', 'https://getbootstrap.com/docs/4.0/components/input-group/', '2020-04-28 23:27:37', '2020-05-01 21:49:50');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_description`, `profile_url`, `redirected_url`, `user_id`, `created_at`, `updated_at`) VALUES
(24, 'Smart Sticker 2', 'Smart Sticker 2', 'https://beyondant.com/dev/beyondant/public/profile/185/devices/4', 'https://beyondant.com/dev/beyondant/public/profile/185', 185, '2020-05-09 20:32:10', '2020-05-09 20:32:10'),
(23, 'Smart Sticker 1', 'Smart Sticker 1', 'https://beyondant.com/dev/beyondant/public/profile/185/devices/3', 'https://beyondant.com/dev/beyondant/public/profile/185', 185, '2020-05-09 20:30:40', '2020-05-09 20:30:40'),
(22, 'Bemorial Tag 1', 'Water Proof Bemorial Tag 1', 'https://beyondant.com/public/profile/185/devices/2', 'https://beyondant.com/public/profile/185', 185, '2020-05-09 20:19:42', '2020-05-09 20:19:42'),
(18, 'Bracelet 5', 'Bracelet 5', 'https://beyondant.com/dev/beyondant/public/profile/174/devices/1', 'Http://www.cnn.com', 174, '2020-05-06 01:13:52', '2020-05-06 01:15:58'),
(26, 'Demo 1', 'gfyfhfgh', 'https://beyondant.com/dev/beyondant/public/profile/164/devices/2', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-05-11 17:08:16', '2020-05-11 17:08:16'),
(21, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/public/profile/185/devices/1', 'https://beyondant.com/public/profile/185', 185, '2020-05-09 19:38:44', '2020-05-09 19:38:44'),
(19, 'Smart Card 2', 'Instagram Profile Device', 'https://beyondant.com/public/profile/164/devices/1', 'https://www.instagram.com/', 164, '2020-05-06 01:43:59', '2020-05-11 16:57:59'),
(25, 'Smart Sticker 3', 'Smart Sticker 3', 'https://beyondant.com/dev/beyondant/public/profile/185/devices/5', 'https://beyondant.com/dev/beyondant/public/profile/185', 185, '2020-05-09 20:33:26', '2020-05-09 20:33:26'),
(27, 'Demo 1gfh', 'fghfhdgh', 'https://beyondant.com/dev/beyondant/public/profile/164/devices/3', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-05-11 17:08:22', '2020-05-11 17:08:22'),
(28, 'fghfdgfhg', 'fghdfhgdfhg', 'https://beyondant.com/dev/beyondant/public/profile/164/devices/4', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-05-11 17:08:30', '2020-05-11 17:08:30'),
(29, 'Demo 1453', 'dsfgsdfgsfdg', 'https://beyondant.com/dev/beyondant/public/profile/164/devices/5', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-05-11 17:08:44', '2020-05-11 17:12:43'),
(30, 'Demo 1', 'gfhddfhgdfhg', 'https://beyondant.com/dev/beyondant/public/profile/164/devices/6', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-05-11 17:08:49', '2020-05-11 17:08:49'),
(32, 'Bemorial Tag 1', 'Bemorial Tag 1', 'https://beyondant.com/public/profile/189/devices/1', 'https://www.youtube.com/watch?v=2ljxxQy8zHI', 189, '2020-05-14 01:30:43', '2020-05-14 01:39:00'),
(33, 'Bracelet 1', 'Free Bracelet', 'https://beyondant.com/public/profile/178/devices/1', 'https://www.ucesprotectionplan.net/RCollier', 178, '2020-05-14 18:57:18', '2020-05-21 13:56:33'),
(34, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/public/profile/177/devices/1', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 00:51:44', '2020-05-17 00:51:44'),
(41, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/public/profile/216/devices/1', 'https://beyondant.com/public/profile/216', 216, '2020-05-20 15:01:35', '2020-05-20 15:01:35'),
(36, 'Smart Sticker 1', 'Smart Sticker 1', 'https://beyondant.com/public/profile/177/devices/3', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 01:04:59', '2020-05-17 01:04:59'),
(37, 'Smart Sticker 2', 'Smart Sticker 2', 'https://beyondant.com/public/profile/177/devices/4', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 01:07:30', '2020-05-17 01:07:30'),
(38, 'Smart Sticker 3', 'Smart Sticker 3', 'https://beyondant.com/public/profile/177/devices/5', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 01:09:14', '2020-05-17 01:09:14'),
(39, 'Smart Sticker 4', 'Smart Sticker 4', 'https://beyondant.com/public/profile/177/devices/6', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 01:10:34', '2020-05-17 01:10:34'),
(40, 'Smart Sticker 5', 'Smart Sticker 5', 'https://beyondant.com/public/profile/177/devices/7', 'https://beyondant.com/public/profile/177', 177, '2020-05-17 01:12:33', '2020-05-17 01:12:33'),
(42, 'Sticker 1', 'Sticker 1', 'https://beyondant.com/public/profile/216/devices/2', 'https://beyondant.com/public/profile/216', 216, '2020-05-20 15:09:32', '2020-05-20 15:09:32'),
(43, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/public/profile/218/devices/1', 'https://beyondant.com/public/profile/218', 218, '2020-05-20 16:26:20', '2020-05-20 16:26:20'),
(50, 'Demo 1', 'dfgsdfgfedgdg', 'https://beyondant.com/dev/beyondant/public/profile/164/D7', 'https://beyondant.com/dev/beyondant/public/profile/164', 164, '2020-06-02 15:27:13', '2020-06-02 15:27:13'),
(51, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/dev/beyondant/public/profile/174/D2', 'https://beyondant.com/dev/beyondant/public/profile/174', 174, '2020-06-02 15:58:05', '2020-06-02 15:58:05'),
(52, 'Smart Card', 'sddsgdfgdsg', 'https://beyondant.com/public/profile/164/D8', 'https://beyondant.com/public/profile/164', 164, '2020-06-02 16:12:55', '2020-06-02 16:12:55'),
(53, 'Beyondant Digital Business Card', 'Sample Beyondant Card', 'https://beyondant.com/public/profile/266/D1', 'https://www.yahoo.com/', 266, '2020-06-05 20:53:11', '2020-06-06 18:43:58'),
(54, 'Bemorial Tag 1', 'Bemorial Tag 1', 'https://beyondant.com/public/profile/266/D2', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 20:54:54', '2020-06-05 20:54:54'),
(55, 'Bracelet 1', 'Bracelet 1', 'https://beyondant.com/public/profile/266/D3', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 20:56:46', '2020-06-05 20:56:46'),
(56, 'Smart Sticker 1', 'Smart Sticker 1', 'https://beyondant.com/public/profile/266/D4', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 20:58:38', '2020-06-05 20:58:38'),
(57, 'Smart Sticker 2', 'Smart Sticker 2', 'https://beyondant.com/public/profile/266/D5', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 20:59:30', '2020-06-05 20:59:30'),
(58, 'Smart Sticker 3', 'Smart Sticker 3', 'https://beyondant.com/public/profile/266/D6', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 21:00:30', '2020-06-05 21:00:30'),
(59, 'Smart Sticker 4', 'Smart Sticker 4', 'https://beyondant.com/public/profile/266/D7', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 21:01:40', '2020-06-05 21:01:40'),
(60, 'Smart Sticker 5', 'Smart Sticker 5', 'https://beyondant.com/public/profile/266/D8', 'https://beyondant.com/public/profile/266', 266, '2020-06-05 21:02:52', '2020-06-05 21:02:52'),
(63, 'Bemorial Tag 1', 'Bemorial Tag 1', 'https://beyondant.com/public/profile/267/D3', 'https://beyondant.com/public/profile/267', 267, '2020-06-05 21:22:47', '2020-06-05 21:22:47');

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
(1, 'weq', 'ewqwe', 'qwqwe', 'alisyedamir2018@gmail.com', 'sadad', 'gdfgdsg', 'ASDad', 'asdasd', 'ASDSAD', 'ADad', '2343241231', '2132', '234324234', 'Corporation', NULL, '2019-03-24 00:00:00', 'srfsdfsdf', 'wetqwerq34w3d 3r123r1234', 342, 2324, 23423, 'https://beyondant.com/public/entrepreneurs', '234', '$0 - $1 Million', NULL, '2019-03-04 00:00:00', '4234123v3t 34t14512345 435143r231', 0, NULL, NULL),
(2, 'Syed Aamir', 'Ali', 'sdfasdfa', 'alisyedaamir123@hotmail.com', 'https://beyondant.com/dev/beyondant/public/entrepreneurs', 'gdfgdsg', NULL, 'Karachi', 'sadsd', 'asdsad', '23423', '2342', '324234234324', 'Corporation', NULL, '2019-02-20 00:00:00', 'dfadfdsfsafds', 'dsfsdfas safsdfasd dsfsdf', 3432, 23, 434, 'https://beyondant.com/dev/beyondant/public/entrepreneurs', 'safasdf', '$0 - $1 Million', NULL, '2020-02-03 00:00:00', 'sdafsdfa dfaewfewerwq fsfasdf', 0, NULL, NULL),
(3, 'Martin', 'Chernacov', NULL, 'mch@4compuservice.com', NULL, '2681 N Flamingo Rd 2501', NULL, 'Sunrise', 'FL', 'USA', '33323', '0683', '9544485646', 'Individual', NULL, NULL, NULL, 'Marc Rubin', 0, NULL, NULL, 'https://beyondant.com', NULL, '$0 - $1 Million', NULL, '2020-05-06 00:00:00', 'NOW', 0, NULL, NULL);

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
(1, 'Custom Digital Business Cards, Profile Sharing Bracelets & More', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination. The Coronavirus has now changed the way we conduct business. Social Distancing is the new normal. Our solution is in high demand because it is easy, fast and works seamlessly with ironclad security features with just a smartphone tap on any of our devices, thereby eliminating the need for physical exchanges. Evolved from radio frequency identification (RFID) technology, our various devices and applications are reshaping our world.', 'A Smoother Way To Grow Your Business Through Networking Or Simply Grow Your Social Following', 'Create your Custom Digital Business Cards with us and increase your customer interaction despite social distancing. There\'s no need to shake hands or touch unnecessary material. Use our technology to track customer behavior, customer satisfaction and demands all the while maintaining strict customer business confidentiality. Enable secure online shopping and create loyalty programs with the use of our Custom cards, Bracelets tags, stickers and other NFC enabled devices and give your business and social presence a boom.', 'Beyondant will save you time and money', '88% of business cards are thrown away when given to prospects or contacts. Now with the concern of bacterial transfer the percentage of discarded business cards is on the rise. Our devices allow all your contact or profile information to be accessed and saved within seconds. Your contacts/prospects can save your information to their smartphone rapidly. The transfer of your desired destination is provided by humans which ensure the highest levels of privacy and security.', 'Target leads more efficiently', 'Access the contact information of all customer and business interactions on the go with us, in addition to automatic data storage regarding time and venue within your smart phone’s contacts.', 'Availble On Mobile Phones And Desktop PC\'s', 'Change your contact detail easily with either your mobile phone or desktop PC when needed. Our user interface is very straight forward. Designed with non technical individuals in mind. Display the information you care about most.', 'Our Products', 'At this moment we have four products which leverage Near Field Communications and Beyondant’s Profile sharing platform namely Profile Sharing Bracelet, Digital Custom Business Cards, Bemorial Tags and Smart Stickers. This platform serves businesses of all industries as well as the everyday Consumers where it takes seconds to digitally share contact details, social media profiles, internet marketing information, corporate web site or relevant online information.', 'assets/uploads/home/1701610658.png', 'Design Your First Digital Business Card In Seconds', 'Get a state-of-the-art digital business card with unlimited changes to your contact details. Add your graphic file and your profile picture quickly and with ease. Compatible with iPhone, Android, Desktop and tablets. You can share it via SMS, email, WhatsApp and more. Help your customers remember you!. Create your free account to get started!', 'assets/uploads/home/649868911.jpg', 'https://www.youtube.com/embed/MDUX6OpSspQ', 1, '2020-04-17 18:01:35', 1, '2020-04-17 18:01:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `meeting_location` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `first_name`, `last_name`, `email`, `phone`, `meeting_location`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Syed Faizan Ali', 'eewrrqwreq', 'alisyedamir2018@gmail.com', '03132099657', 'Demo', 112, '2020-05-06 22:57:09', '2020-05-06 22:57:09'),
(2, 'Syed Faizan Ali', 'eewrrqwreq', 'alisyedaamir@yahoo.com', '03132099657', 'Demo', 112, '2020-05-06 22:58:07', '2020-05-06 22:58:07'),
(3, 'Melissa', 'Dumont', 'mrsdumont@hotmail.com', '9545514664', 'Parkland', 174, '2020-05-06 23:07:02', '2020-05-06 23:07:02'),
(4, 'Syed Faizan Ali', 'eewrrqwreq', 'alisyedamir2018@gmail.com', '03132099657', 'Demo', 112, '2020-05-07 10:01:14', '2020-05-07 10:01:14'),
(6, 'Melissa', 'Dumont', 'mrsdumont@hotmail.com', '9545514664', 'Parkland', 174, '2020-05-07 20:51:12', '2020-05-07 20:51:12'),
(11, 'Amir', 'Ali', 'aamir.ali@technado.co', '03132099657', 'Google Conference', 92, '2020-05-08 22:03:56', '2020-05-08 22:03:56'),
(9, 'Amir', 'Ali', 'alisyedaamir@yahoo.com', '03132099657', 'Google Conference', 92, '2020-05-08 21:15:51', '2020-05-08 21:15:51'),
(10, 'Amir', 'Ali', 'aamir.ali@technado.co', '03132099657', 'Google Conference', 92, '2020-05-08 21:19:28', '2020-05-08 21:19:28'),
(12, 'Blake', 'Rubin', 'brubin19@bellsouth.net', '9546048652', 'Birthplace', 133, '2020-05-09 00:10:09', '2020-05-09 00:10:09'),
(13, 'Amir', 'Ali', 'aamir.ali@technado.co', '03132099657', 'Google Conference', 104, '2020-05-09 20:37:42', '2020-05-09 20:37:42'),
(14, 'Amir', 'Ali', 'alisyedaamir@yahoo.com', '03132099657', 'Microsoft Conference', 104, '2020-05-09 20:39:05', '2020-05-09 20:39:05'),
(15, 'Billy', 'Boulet', 'ben@b-boulet.com', '9548155678', 'Port Orange Fl', 145, '2020-05-11 13:57:40', '2020-05-11 13:57:40'),
(16, 'Ben', 'Boulet', 'bboulet@quest-comm.com', '954815568', 'Car', 145, '2020-05-11 15:30:59', '2020-05-11 15:30:59'),
(17, 'Carmesha', 'Evans', 'cevans@quest-comm.com', '9103099230', 'Metro', 145, '2020-05-12 19:27:33', '2020-05-12 19:27:33'),
(18, 'Carmesha', 'Evans', 'carmesha7@gmail.com', '9103099230', 'Metro', 145, '2020-05-12 19:30:41', '2020-05-12 19:30:41'),
(19, 'Marcellus', 'Wills', 'marcellus.wills@gmail.com', '7036550514', 'At the barbershop', 138, '2020-05-14 13:43:03', '2020-05-14 13:43:03'),
(20, 'Jack', 'Lawrence', 'cemeteryjack@yahoo.com', '9546472911', 'Cemetery', 189, '2020-05-15 15:38:09', '2020-05-15 15:38:09'),
(21, 'Mark', 'Beyo', 'beyoma@nsmg.com', '3217450149', 'Mark Robert Beyo', 189, '2020-05-15 16:46:32', '2020-05-15 16:46:32'),
(22, 'Jill', 'Rubin', 'blukerubin@bellsouth.net', '9546098428', 'House', 189, '2020-05-15 22:10:58', '2020-05-15 22:10:58'),
(23, 'Ron', 'Leger', 'rleger@regelgroupmarketing.com', '772-408-3804', 'Port st lucie', 108, '2020-05-16 18:25:37', '2020-05-16 18:25:37'),
(24, 'Steve', 'Dumont', 'sdumont@beyondant.com', '9545601670', 'Davie', 189, '2020-05-17 14:38:35', '2020-05-17 14:38:35'),
(25, 'Matt', 'Woodall', 'woodallmatt504@yahoo.com', NULL, 'Cemetery', 189, '2020-05-17 14:47:02', '2020-05-17 14:47:02'),
(26, 'Marc', 'Rubin', 'mrubin717@yahoo.com', '9546098428', 'Cemetery', 189, '2020-05-17 14:51:25', '2020-05-17 14:51:25'),
(27, 'Rodger', 'Strachan', 'rodgerstachan@gmail.com', '9545542123', 'Cigar Bar', 189, '2020-05-18 12:30:53', '2020-05-18 12:30:53'),
(28, 'Johnny', 'Volcy', 'johnny@volcybiz.com', '7726310669', 'Metro', 108, '2020-05-19 15:23:01', '2020-05-19 15:23:01'),
(29, 'Anthony D.', 'Barfield II', 'tdb2nd@gmail.com', '5612352595', '45th st flea market', 138, '2020-05-20 23:40:24', '2020-05-20 23:40:24'),
(30, 'Claire', 'Piche', 'cmpiche1224@gmail.com', '9549992897', 'Cemetery', 189, '2020-05-21 17:16:39', '2020-05-21 17:16:39'),
(31, 'Judd', 'Kirschner', 'juddkirschner@gmail.com', '5618593075', 'Elmg', 189, '2020-05-22 19:20:35', '2020-05-22 19:20:35'),
(32, 'Ray', 'Desmangles', 'raydesmangles@gmail.com', '718-344-0088', 'Fresh Fusion', 108, '2020-05-23 14:42:59', '2020-05-23 14:42:59'),
(33, 'Ralph', 'Amato', 'coolrelic@msn.com', '9546504610', 'Las Vegas', 133, '2020-05-23 21:33:42', '2020-05-23 21:33:42'),
(34, 'Richard', 'Grossfeld', 'richard57g@gmail.com', '7862509969', 'Vegas', 133, '2020-05-23 21:39:14', '2020-05-23 21:39:14'),
(35, 'Howard', 'Friedman', 'howard.friedman1@gmail.com', '954-648-0274', 'Through Bernard Singer', 189, '2020-05-24 02:17:49', '2020-05-24 02:17:49'),
(36, 'Mark', 'Orlinsky', 'morlinsky@gmail.com', '9546004460', 'Cemetery', 189, '2020-05-24 13:35:16', '2020-05-24 13:35:16'),
(37, 'Detlef', 'Taylor', 'detlefusa@gmail.com', '4075588692', 'Hampton Inn', 133, '2020-05-24 18:28:41', '2020-05-24 18:28:41'),
(40, 'Jeffrey', 'O’Keefe', 'jhokeefe@aol.com', '2288612432', 'Phone introduction by brother Justin', 189, '2020-05-24 21:29:44', '2020-05-24 21:29:44'),
(41, 'bob', 'a', 'bantov@gmail.com', '9999', 'bar', 189, '2020-05-25 18:33:47', '2020-05-25 18:33:47'),
(43, 'Bob', 'Antoville', 'beyondantbob@gmail.com', '9146491300', 'Beth David', 64, '2020-05-27 11:16:57', '2020-05-27 11:16:57'),
(46, 'Ed', 'Rusnak', 'edward.rusnak@nsmg.com', '5614417111', 'Bi', 189, '2020-05-27 12:58:31', '2020-05-27 12:58:31'),
(45, 'William', 'Armbrister', 'revearm@aol.com', '954-804-8843', 'Star of David', 189, '2020-05-27 12:45:37', '2020-05-27 12:45:37'),
(47, 'Mike', 'Vierzchalek', 'marketing@ezvds.com', '973575-7171', 'Mickey Quinn', 64, '2020-05-27 14:10:07', '2020-05-27 14:10:07'),
(48, 'David', 'Jenkins', 'jenkinsd@nsmg.com', '4407310320', 'BethIsrael', 189, '2020-05-27 16:32:49', '2020-05-27 16:32:49'),
(50, 'Marc', 'Rubin', 'mrubin717@yahoo.com', '954-609-8428', 'Eternal Light', 231, '2020-05-29 15:58:59', '2020-05-29 15:58:59'),
(51, 'Jessica', 'Joseph', 'jessicajoseph95@gmail.com', '5613037460', 'Boynton Beach', 189, '2020-05-29 20:40:48', '2020-05-29 20:40:48'),
(53, 'Mike', 'Calin', 'michaelcalin@yahoo.com', '561-635-8971', 'Elmg', 189, '2020-06-04 12:55:50', '2020-06-04 12:55:50'),
(54, 'Brett', 'Belsky', 'brebel@gmail.com', '6467251549', 'Cemetery', 189, '2020-06-04 14:54:23', '2020-06-04 14:54:23'),
(55, 'Allan', 'Budelman', 'abudelman@emeraldfamilyoffice.com', '9544655939', 'Emfo', 189, '2020-06-05 14:26:07', '2020-06-05 14:26:07'),
(56, 'Winell', 'Harmon', 'woharmon01@gmail.com', '3026857373', 'Apartment', 261, '2020-06-05 21:20:01', '2020-06-05 21:20:01'),
(57, 'Mark', 'Orlsonk', 'famlee@yahoo.com', '9548003916', 'Test', 266, '2020-06-06 18:46:11', '2020-06-06 18:46:11'),
(59, 'Loring', 'Frank', 'rabbifrank@me.com', '3053353335', 'Eternal', 189, '2020-06-07 15:37:30', '2020-06-07 15:37:30'),
(60, 'Joshua', 'Jacques', 'j@jadeimedia.com', '6318342917', 'Bedroom', 181, '2020-06-09 00:58:59', '2020-06-09 00:58:59'),
(61, 'Evens', 'Latortue', 'latortuee@yahoo.com', '7729715499', 'Port Saint Lucie', 108, '2020-06-09 01:41:29', '2020-06-09 01:41:29');

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
('SDumont@BuiltSocially.com', '$2y$10$uK94.d.nXt/lEVJuDJSFPe9KkSY4e2EYl0Ek45oDxcV/NLyXmGPM6', '2020-04-07 22:08:48'),
('aamir.ali@technado.co', '$2y$10$uQBx3koVaGwqFB3HT3ylJ.ppTZgQSCJXoupvP3N.U6QgD1ewHeWeu', '2020-05-08 21:47:26'),
('alisyedamir2018@gmail.com', '$2y$10$WSdQAJvSed8ecVqfJZWC/OZ9O9uzEagYE8C4JncRHj5dPMOlmgAvK', '2020-05-08 22:00:47');

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
-- Table structure for table `profile_downloads`
--

CREATE TABLE `profile_downloads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_downloads`
--

INSERT INTO `profile_downloads` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 174, '2020-05-15 22:01:45', '2020-05-15 22:01:45'),
(2, 108, '2020-05-16 18:25:40', '2020-05-16 18:25:40'),
(3, 189, '2020-05-17 14:38:38', '2020-05-17 14:38:38'),
(4, 189, '2020-05-17 14:47:05', '2020-05-17 14:47:05'),
(5, 189, '2020-05-17 14:51:29', '2020-05-17 14:51:29'),
(6, 189, '2020-05-17 18:22:00', '2020-05-17 18:22:00'),
(7, 189, '2020-05-18 12:30:56', '2020-05-18 12:30:56'),
(8, 108, '2020-05-18 14:23:49', '2020-05-18 14:23:49'),
(9, 212, '2020-05-18 14:30:06', '2020-05-18 14:30:06'),
(10, 212, '2020-05-18 14:30:15', '2020-05-18 14:30:15'),
(11, 138, '2020-05-18 17:28:42', '2020-05-18 17:28:42'),
(12, 138, '2020-05-18 19:32:36', '2020-05-18 19:32:36'),
(13, 138, '2020-05-18 19:35:15', '2020-05-18 19:35:15'),
(14, 138, '2020-05-18 19:39:45', '2020-05-18 19:39:45'),
(15, 152, '2020-05-19 13:22:40', '2020-05-19 13:22:40'),
(16, 152, '2020-05-19 13:23:54', '2020-05-19 13:23:54'),
(17, 152, '2020-05-19 13:24:38', '2020-05-19 13:24:38'),
(18, 108, '2020-05-19 15:23:06', '2020-05-19 15:23:06'),
(19, 138, '2020-05-20 23:40:28', '2020-05-20 23:40:28'),
(20, 206, '2020-05-21 15:57:06', '2020-05-21 15:57:06'),
(21, 189, '2020-05-21 17:16:43', '2020-05-21 17:16:43'),
(22, 178, '2020-05-21 19:42:15', '2020-05-21 19:42:15'),
(23, 175, '2020-05-22 15:08:56', '2020-05-22 15:08:56'),
(24, 189, '2020-05-22 19:20:39', '2020-05-22 19:20:39'),
(25, 138, '2020-05-23 01:05:03', '2020-05-23 01:05:03'),
(26, 108, '2020-05-23 14:43:03', '2020-05-23 14:43:03'),
(27, 138, '2020-05-23 14:58:35', '2020-05-23 14:58:35'),
(28, 138, '2020-05-23 17:14:46', '2020-05-23 17:14:46'),
(29, 133, '2020-05-23 21:33:46', '2020-05-23 21:33:46'),
(30, 133, '2020-05-23 21:39:18', '2020-05-23 21:39:18'),
(31, 133, '2020-05-23 21:39:58', '2020-05-23 21:39:58'),
(32, 189, '2020-05-24 02:17:53', '2020-05-24 02:17:53'),
(33, 133, '2020-05-24 12:17:34', '2020-05-24 12:17:34'),
(34, 189, '2020-05-24 13:35:19', '2020-05-24 13:35:19'),
(35, 189, '2020-05-24 15:12:49', '2020-05-24 15:12:49'),
(36, 189, '2020-05-24 15:13:10', '2020-05-24 15:13:10'),
(37, 189, '2020-05-24 15:13:36', '2020-05-24 15:13:36'),
(38, 189, '2020-05-24 15:14:00', '2020-05-24 15:14:00'),
(39, 189, '2020-05-24 15:14:00', '2020-05-24 15:14:00'),
(40, 133, '2020-05-24 18:28:44', '2020-05-24 18:28:44'),
(41, 189, '2020-05-24 21:29:47', '2020-05-24 21:29:47'),
(42, 189, '2020-05-25 18:33:51', '2020-05-25 18:33:51'),
(43, 64, '2020-05-25 19:21:51', '2020-05-25 19:21:51'),
(44, 64, '2020-05-25 19:39:11', '2020-05-25 19:39:11'),
(45, 64, '2020-05-27 11:17:04', '2020-05-27 11:17:04'),
(46, 64, '2020-05-27 12:42:01', '2020-05-27 12:42:01'),
(47, 189, '2020-05-27 12:45:40', '2020-05-27 12:45:40'),
(48, 189, '2020-05-27 12:58:34', '2020-05-27 12:58:34'),
(49, 64, '2020-05-27 14:08:09', '2020-05-27 14:08:09'),
(50, 64, '2020-05-27 14:10:10', '2020-05-27 14:10:10'),
(51, 238, '2020-05-27 14:34:15', '2020-05-27 14:34:15'),
(52, 189, '2020-05-27 16:32:52', '2020-05-27 16:32:52'),
(53, 64, '2020-05-28 00:35:04', '2020-05-28 00:35:04'),
(54, 64, '2020-05-28 15:03:03', '2020-05-28 15:03:03'),
(55, 231, '2020-05-29 15:59:03', '2020-05-29 15:59:03'),
(56, 189, '2020-05-29 20:40:51', '2020-05-29 20:40:51'),
(57, 208, '2020-05-29 21:54:46', '2020-05-29 21:54:46'),
(58, 55, '2020-05-30 14:44:21', '2020-05-30 14:44:21'),
(59, 55, '2020-06-01 00:26:10', '2020-06-01 00:26:10'),
(60, 248, '2020-06-01 13:42:24', '2020-06-01 13:42:24'),
(61, 64, '2020-06-02 17:53:07', '2020-06-02 17:53:07'),
(62, 64, '2020-06-03 16:05:31', '2020-06-03 16:05:31'),
(63, 249, '2020-06-03 21:48:45', '2020-06-03 21:48:45'),
(64, 249, '2020-06-03 21:54:27', '2020-06-03 21:54:27'),
(65, 249, '2020-06-03 21:58:51', '2020-06-03 21:58:51'),
(66, 249, '2020-06-03 22:42:57', '2020-06-03 22:42:57'),
(67, 189, '2020-06-04 12:55:55', '2020-06-04 12:55:55'),
(68, 189, '2020-06-04 14:54:26', '2020-06-04 14:54:26'),
(69, 244, '2020-06-04 23:49:10', '2020-06-04 23:49:10'),
(70, 186, '2020-06-05 02:07:35', '2020-06-05 02:07:35'),
(71, 186, '2020-06-05 02:08:15', '2020-06-05 02:08:15'),
(72, 189, '2020-06-05 14:26:10', '2020-06-05 14:26:10'),
(73, 261, '2020-06-05 21:20:04', '2020-06-05 21:20:04'),
(74, 178, '2020-06-06 18:11:55', '2020-06-06 18:11:55'),
(75, 266, '2020-06-06 18:46:14', '2020-06-06 18:46:14'),
(76, 249, '2020-06-07 13:44:55', '2020-06-07 13:44:55'),
(77, 189, '2020-06-07 15:37:36', '2020-06-07 15:37:36'),
(78, 246, '2020-06-07 22:17:05', '2020-06-07 22:17:05'),
(79, 250, '2020-06-08 19:43:15', '2020-06-08 19:43:15'),
(80, 250, '2020-06-08 20:05:01', '2020-06-08 20:05:01'),
(81, 181, '2020-06-09 00:59:03', '2020-06-09 00:59:03'),
(82, 108, '2020-06-09 01:41:31', '2020-06-09 01:41:31'),
(83, 249, '2020-06-09 12:41:40', '2020-06-09 12:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `profile_views`
--

CREATE TABLE `profile_views` (
  `id` int(11) NOT NULL,
  `path` varchar(300) NOT NULL,
  `views_count` int(11) NOT NULL,
  `google_dated` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_views`
--

INSERT INTO `profile_views` (`id`, `path`, `views_count`, `google_dated`, `created_at`, `updated_at`) VALUES
(217, '/public/', 27, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(218, '/public/profile/108', 11, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(219, '/public/profile/110', 2, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(220, '/public/profile/138', 1, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(221, '/public/profile/145', 8, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(222, '/public/profile/147', 1, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(223, '/public/profile/170', 1, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(224, '/public/profile/188', 1, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(225, '/public/profile/register', 1, '2020-05-12', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(226, '/public/', 69, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(227, '/public/profile/108', 8, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(228, '/public/profile/138', 10, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(229, '/public/profile/174', 9, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(230, '/public/profile/189', 30, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(231, '/public/profile/190', 1, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(232, '/public/profile/46', 2, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(233, '/public/profile/74', 1, '2020-05-13', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(234, '/public/', 65, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(235, '/public/profile/104', 6, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(236, '/public/profile/108', 4, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(237, '/public/profile/138', 14, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(238, '/public/profile/174', 1, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(239, '/public/profile/178', 7, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(240, '/public/profile/186', 1, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(241, '/public/profile/189', 1, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(242, '/public/profile/197', 1, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(243, '/public/profile/64', 14, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(244, '/public/profile/92', 8, '2020-05-14', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(245, '/public/', 42, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(246, '/public/profile/138', 7, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(247, '/public/profile/162', 1, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(248, '/public/profile/184', 8, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(249, '/public/profile/185', 2, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(250, '/public/profile/189', 12, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(251, '/public/profile/64', 1, '2020-05-15', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(252, '/public/', 81, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(253, '/public/profile/108', 6, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(254, '/public/profile/138', 9, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(255, '/public/profile/184', 2, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(256, '/public/profile/186', 1, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(257, '/public/profile/189', 2, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(258, '/public/profile/202', 6, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(259, '/public/profile/203', 1, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(260, '/public/profile/204', 2, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(261, '/public/profile/205', 3, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(262, '/public/profile/207', 1, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(263, '/public/profile/64', 3, '2020-05-16', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(264, '/public/', 53, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(265, '/public/profile/138', 9, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(266, '/public/profile/186', 1, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(267, '/public/profile/189', 10, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(268, '/public/profile/209', 1, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(269, '/public/profile/211', 26, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(270, '/public/profile/64', 1, '2020-05-17', '2020-05-18 23:25:06', '2020-05-18 23:25:06'),
(284, '/public/profile/214', 2, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(283, '/public/profile/213', 8, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(282, '/public/profile/212', 1, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(281, '/public/profile/189', 1, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(280, '/public/profile/138', 31, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(279, '/public/profile/108', 4, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(278, '/public/', 65, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(285, '/public/profile/92', 1, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(286, '/public/profile/register', 2, '2020-05-18', '2020-05-20 00:00:04', '2020-05-20 00:00:04'),
(287, '/public/', 25, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(288, '/public/profile/108', 1, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(289, '/public/profile/138', 2, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(290, '/public/profile/152', 2, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(291, '/public/profile/175', 4, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(292, '/public/profile/179', 10, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(293, '/public/profile/215', 1, '2020-05-19', '2020-05-21 00:00:04', '2020-05-21 00:00:04'),
(294, '/public/', 91, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(295, '/public/profile/108', 3, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(296, '/public/profile/138', 2, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(297, '/public/profile/178', 4, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(298, '/public/profile/213', 1, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(299, '/public/profile/216', 7, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(300, '/public/profile/217', 3, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(301, '/public/profile/218', 5, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(302, '/public/profile/219', 11, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(303, '/public/profile/64', 1, '2020-05-20', '2020-05-22 00:00:04', '2020-05-22 00:00:04'),
(304, '/public/', 76, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(305, '/public/profile/109', 10, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(306, '/public/profile/138', 7, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(307, '/public/profile/144', 3, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(308, '/public/profile/175', 1, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(309, '/public/profile/178', 18, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(310, '/public/profile/189', 4, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(311, '/public/profile/206', 4, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(312, '/public/profile/207', 2, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(313, '/public/profile/215', 2, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(314, '/public/profile/216', 7, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(315, '/public/profile/219', 1, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(316, '/public/profile/220', 14, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(317, '/public/profile/64', 2, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(318, '/public/profile/register', 1, '2020-05-21', '2020-05-23 00:00:04', '2020-05-23 00:00:04'),
(319, '/public/', 62, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(320, '/public/profile/108', 9, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(321, '/public/profile/111', 4, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(322, '/public/profile/138', 7, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(323, '/public/profile/175', 5, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(324, '/public/profile/178', 1, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(325, '/public/profile/189', 3, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(326, '/public/profile/205', 4, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(327, '/public/profile/216', 4, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(328, '/public/profile/217', 16, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(329, '/public/profile/220', 1, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(330, '/public/profile/222', 3, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(331, '/public/profile/92', 3, '2020-05-22', '2020-05-24 00:00:03', '2020-05-24 00:00:03'),
(332, '/public/', 19, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(333, '/public/profile/108', 3, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(334, '/public/profile/133', 9, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(335, '/public/profile/138', 12, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(336, '/public/profile/174', 2, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(337, '/public/profile/189', 20, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(338, '/public/profile/217', 6, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(339, '/public/profile/64', 4, '2020-05-23', '2020-05-25 00:00:04', '2020-05-25 00:00:04'),
(340, '/public/', 79, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(341, '/public/profile/118', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(342, '/public/profile/120', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(343, '/public/profile/133', 11, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(344, '/public/profile/138', 5, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(345, '/public/profile/175', 1, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(346, '/public/profile/188', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(347, '/public/profile/189', 37, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(348, '/public/profile/190', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(349, '/public/profile/197', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(350, '/public/profile/208', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(351, '/public/profile/214', 5, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(352, '/public/profile/217', 5, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(353, '/public/profile/218', 1, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(354, '/public/profile/223', 16, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(355, '/public/profile/224', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(356, '/public/profile/225', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(357, '/public/profile/228', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(358, '/public/profile/229', 1, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(359, '/public/profile/230', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(360, '/public/profile/231', 10, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(361, '/public/profile/232', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(362, '/public/profile/233', 4, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(363, '/public/profile/234', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(364, '/public/profile/64', 3, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(365, '/public/profile/register', 2, '2020-05-24', '2020-05-26 00:00:04', '2020-05-26 00:00:04'),
(366, '/public/', 30, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(367, '/public/profile/108', 2, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(368, '/public/profile/133', 3, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(369, '/public/profile/145', 2, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(370, '/public/profile/175', 1, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(371, '/public/profile/178', 1, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(372, '/public/profile/189', 14, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(373, '/public/profile/207', 1, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(374, '/public/profile/217', 15, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(375, '/public/profile/55', 1, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(376, '/public/profile/64', 30, '2020-05-25', '2020-05-27 00:00:03', '2020-05-27 00:00:03'),
(377, '/public/', 39, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(378, '/public/profile/108', 1, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(379, '/public/profile/110', 1, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(380, '/public/profile/118', 1, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(381, '/public/profile/133', 1, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(382, '/public/profile/189', 8, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(383, '/public/profile/209', 3, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(384, '/public/profile/217', 21, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(385, '/public/profile/219', 2, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(386, '/public/profile/220', 2, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(387, '/public/profile/232', 3, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(388, '/public/profile/64', 8, '2020-05-26', '2020-05-28 00:00:04', '2020-05-28 00:00:04'),
(389, '/public/', 47, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(390, '/public/profile/138', 1, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(391, '/public/profile/144', 1, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(392, '/public/profile/175', 2, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(393, '/public/profile/178', 1, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(394, '/public/profile/189', 5, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(395, '/public/profile/217', 11, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(396, '/public/profile/236', 7, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(397, '/public/profile/237', 1, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(398, '/public/profile/238', 2, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(399, '/public/profile/64', 25, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(400, '/public/profile/register', 1, '2020-05-27', '2020-05-29 00:00:04', '2020-05-29 00:00:04'),
(401, '/public/', 42, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(402, '/public/profile/108', 3, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(403, '/public/profile/109', 1, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(404, '/public/profile/118', 3, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(405, '/public/profile/120', 3, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(406, '/public/profile/175', 1, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(407, '/public/profile/178', 1, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(408, '/public/profile/189', 5, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(409, '/public/profile/208', 5, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(410, '/public/profile/213', 10, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(411, '/public/profile/241', 4, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(412, '/public/profile/242', 1, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(413, '/public/profile/64', 11, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(414, '/public/profile/register', 2, '2020-05-28', '2020-05-30 00:00:05', '2020-05-30 00:00:05'),
(415, '/public/', 26, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(416, '/public/profile/109', 1, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(417, '/public/profile/118', 2, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(418, '/public/profile/133', 2, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(419, '/public/profile/189', 3, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(420, '/public/profile/208', 1, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(421, '/public/profile/211', 2, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(422, '/public/profile/231', 6, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(423, '/public/profile/64', 6, '2020-05-29', '2020-05-31 00:00:04', '2020-05-31 00:00:04'),
(424, '/public/', 45, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(425, '/public/profile/108', 1, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(426, '/public/profile/175', 2, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(427, '/public/profile/189', 2, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(428, '/public/profile/211', 4, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(429, '/public/profile/228', 7, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(430, '/public/profile/231', 1, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(431, '/public/profile/55', 1, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(432, '/public/profile/75', 2, '2020-05-30', '2020-06-01 00:00:03', '2020-06-01 00:00:03'),
(433, '/public/', 18, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(434, '/public/profile/108', 1, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(435, '/public/profile/120', 1, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(436, '/public/profile/190', 1, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(437, '/public/profile/208', 7, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(438, '/public/profile/55', 1, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(439, '/public/profile/64', 3, '2020-05-31', '2020-06-02 00:00:04', '2020-06-02 00:00:04'),
(440, '/public/', 59, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(441, '/public/profile/108', 3, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(442, '/public/profile/109', 2, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(443, '/public/profile/133', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(444, '/public/profile/176', 4, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(445, '/public/profile/181', 6, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(446, '/public/profile/184', 4, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(447, '/public/profile/185', 14, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(448, '/public/profile/189', 2, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(449, '/public/profile/211', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(450, '/public/profile/224', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(451, '/public/profile/242', 4, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(452, '/public/profile/244', 4, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(453, '/public/profile/246', 10, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(454, '/public/profile/248', 6, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(455, '/public/profile/249', 4, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(456, '/public/profile/250', 6, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(457, '/public/profile/253', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(458, '/public/profile/260', 2, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(459, '/public/profile/55', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(460, '/public/profile/register', 1, '2020-06-01', '2020-06-03 00:00:04', '2020-06-03 00:00:04'),
(461, '/public/', 37, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(462, '/public/profile/108', 2, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(463, '/public/profile/164', 4, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(464, '/public/profile/185', 2, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(465, '/public/profile/189', 2, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(466, '/public/profile/208', 1, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(467, '/public/profile/213', 1, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(468, '/public/profile/217', 7, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(469, '/public/profile/219', 1, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(470, '/public/profile/220', 4, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(471, '/public/profile/261', 5, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(472, '/public/profile/64', 6, '2020-06-02', '2020-06-04 00:00:03', '2020-06-04 00:00:03'),
(473, '/public/', 44, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(474, '/public/profile/108', 3, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(475, '/public/profile/145', 1, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(476, '/public/profile/175', 4, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(477, '/public/profile/178', 2, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(478, '/public/profile/185', 1, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(479, '/public/profile/189', 1, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(480, '/public/profile/249', 13, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(481, '/public/profile/261', 2, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(482, '/public/profile/262', 2, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(483, '/public/profile/263', 3, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(484, '/public/profile/264', 1, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(485, '/public/profile/64', 8, '2020-06-03', '2020-06-05 00:00:04', '2020-06-05 00:00:04'),
(486, '/public/', 32, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(487, '/public/profile/109', 6, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(488, '/public/profile/133', 1, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(489, '/public/profile/175', 2, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(490, '/public/profile/176', 1, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(491, '/public/profile/186', 1, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(492, '/public/profile/189', 7, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(493, '/public/profile/214', 4, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(494, '/public/profile/244', 15, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(495, '/public/profile/246', 8, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(496, '/public/profile/248', 6, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(497, '/public/profile/249', 1, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(498, '/public/profile/250', 4, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(499, '/public/profile/64', 1, '2020-06-04', '2020-06-06 00:00:03', '2020-06-06 00:00:03'),
(500, '/public/', 52, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(501, '/public/profile/108', 3, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(502, '/public/profile/185', 4, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(503, '/public/profile/186', 3, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(504, '/public/profile/189', 2, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(505, '/public/profile/197', 3, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(506, '/public/profile/207', 1, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(507, '/public/profile/223', 1, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(508, '/public/profile/228', 10, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(509, '/public/profile/230', 1, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(510, '/public/profile/244', 4, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(511, '/public/profile/248', 5, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(512, '/public/profile/249', 3, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(513, '/public/profile/250', 2, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(514, '/public/profile/261', 1, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(515, '/public/profile/266', 5, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(516, '/public/profile/267', 1, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(517, '/public/profile/64', 2, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(518, '/public/profile/92', 2, '2020-06-05', '2020-06-07 00:00:04', '2020-06-07 00:00:04'),
(519, '/public/', 44, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(520, '/public/profile/108', 4, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(521, '/public/profile/178', 2, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(522, '/public/profile/185', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(523, '/public/profile/189', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(524, '/public/profile/223', 4, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(525, '/public/profile/230', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(526, '/public/profile/233', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(527, '/public/profile/246', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(528, '/public/profile/248', 7, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(529, '/public/profile/250', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(530, '/public/profile/266', 32, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(531, '/public/profile/267', 12, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(532, '/public/profile/64', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(533, '/public/profile/64?fbclid=IwAR1QIYMywVP5w_tC7oeDhs62lkntEbKGg9bZGzMeztOlIUzx8_pBxvjDfOM', 1, '2020-06-06', '2020-06-08 00:00:04', '2020-06-08 00:00:04'),
(534, '/public/', 30, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(535, '/public/profile/108', 11, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(536, '/public/profile/189', 2, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(537, '/public/profile/208', 1, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(538, '/public/profile/246', 3, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(539, '/public/profile/248', 2, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(540, '/public/profile/249', 3, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(541, '/public/profile/250', 1, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(542, '/public/profile/64', 6, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03'),
(543, '/public/profile/64?fbclid=IwAR0eh2o3oECJb6jsSnNgWqYI4yKjEtL5DPsfLYBQQ7zvyB_WjpsNYrgqs00', 1, '2020-06-07', '2020-06-09 00:00:03', '2020-06-09 00:00:03');

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
(24, 'Shunya', 'Roytman', NULL, 'Shunya@Finessecollection.com', NULL, '9220 SW 14th Street  Apt. 3401', NULL, 'Boca Raton', 'Florida', 'US', '33428', '8435', '5613027351', 'No Business Formed', NULL, NULL, NULL, 'Marc Rubin', 0, NULL, NULL, 'South Florida', NULL, '$0 - $1 Million', NULL, '2020-04-15 00:00:00', 'as soon as possible', 0, NULL, NULL),
(25, 'Ashley', 'Raeford', 'Luxe lust boutique', 'Ashley.raeford.ar@gmail.com', 'SHOPLUXELUST.com', '1920 Nigel ct', NULL, 'Charlotte', 'NC', 'United States', '28213', '3912', '9803093670', 'Other (Please Specify)', 'LLC', NULL, NULL, 'The regel group', 1, NULL, NULL, 'North Carolina', NULL, '$0 - $1 Million', NULL, '2020-04-18 00:00:00', 'Now', 0, NULL, NULL),
(26, 'Steven', 'Silberman', 'Gotta Catch Jamaal, LLC', 'ssilberman2012@aol.com', 'https://www.linkedin.com/in/steven-silberman/', '609 Verona Place', NULL, 'Weston', 'Florida', 'US', '33326', '3684', '9545295420', 'Other (Please Specify)', 'LLC or S Corp', NULL, NULL, 'Marc Rubin', 1, 1, NULL, 'Contacts in various untapped markets, both domestic and international', NULL, '$0 - $1 Million', NULL, '2020-04-20 00:00:00', 'When Marc wants!', 0, NULL, NULL),
(27, 'julie', 'cerini', 'Regel Group', 'Shadowpanthr9@gmail.com', 'Regel Group', '2318 se longhorn ave', NULL, 'port saint lucie', 'florida', 'USA', '34952', '0000', '7722123002', 'Other (Please Specify)', 'resaller', NULL, NULL, 'Regel Group', 0, NULL, NULL, 'anywhere', NULL, '$0 - $1 Million', NULL, '2020-04-24 00:00:00', 'Regel Group', 0, NULL, NULL),
(28, 'Jeffrey', 'Lewis', NULL, 'cornercuts@yahoo.com', NULL, 'cornercuts@yahoo.com', NULL, 'Port Saint Lucie', 'Florida', 'United States', '34953', '8252', NULL, 'Other (Please Specify)', 'LLC', NULL, NULL, 'Regel Group', 1, NULL, 1, 'ALL OVER', NULL, '$0 - $1 Million', NULL, '0000-00-00 00:00:00', 'Very Soon', 0, NULL, NULL),
(29, 'Lisa', 'Heimanson', '1965', 'lisaheimanson@gmail.com', NULL, '11641 SW 10th ST', NULL, 'Davie', 'FL', 'US', '33325', '8004', '3059173801', 'Individual', NULL, NULL, NULL, 'Indeed', 1, NULL, NULL, 'South Florida', NULL, '', 'I am an individual.', '2020-05-11 00:00:00', 'I don\'t have a Website yet, but could have one created.   I think the product is fantastic.  Would love to give a try at bringing this to Market.  I have a history of increasing sales in the Whole Sale Plumbing and Mechanical Field. \r\nHave my MBA and currently working on a Data Analytics Certificate.\r\n\r\nhttps://www.linkedin.com/in/lisa-heimanson-1652bb7/', 0, NULL, NULL),
(30, 'Sean', 'Campbell', NULL, 'seankcampbell@yahoo.com', NULL, '1182 Concord Ave', NULL, 'West Palm Beach', 'Florida', 'US', '33417', '1764', NULL, 'Individual', NULL, NULL, NULL, 'Indeed.', 10, NULL, NULL, 'Central Palm Beach County', NULL, '$0 - $1 Million', NULL, '2020-05-11 00:00:00', '5/11/2020', 0, NULL, NULL),
(31, 'Doru', 'Bobis', NULL, 'doru.bobis@gmail.com', NULL, '28017 Memory Lane', NULL, 'Valencia', 'California', 'US', '91354', '2854', '-16613734134', 'Individual', NULL, NULL, NULL, 'Website', 1, NULL, NULL, 'Los Angeles', NULL, '$0 - $1 Million', NULL, '2020-05-03 00:00:00', '05/17/2020', 0, NULL, NULL),
(32, 'Eric', 'Vincent', 'Marine Pro Shop', 'marineproshopcr@gmail.com', NULL, 'Apartamentos Quiribri', NULL, 'Pavas', 'San Jose', 'Costa Rica', '1000', '3277', NULL, 'Corporation', NULL, NULL, NULL, 'Friend', 7, 7, NULL, 'Central America', NULL, '$0 - $1 Million', NULL, '0000-00-00 00:00:00', 'As soon as possible', 0, NULL, NULL),
(33, 'Isaac', 'Khoury', 'Sign & Printing Corp', 'ikhoury33@gmail.com', NULL, '1579 5th ave', NULL, 'Bay shore', 'Ny', 'United states', '11706', '2095', '6316175326', 'Corporation', NULL, '2020-05-11 00:00:00', 'Isaac khoury', 'Through representative of the company', 1, 10, 4, 'New york', 'N/A', '$0 - $1 Million', NULL, '2020-06-01 00:00:00', 'As soon as we get approved and develop a campaign surrounding the item .', 0, NULL, NULL),
(34, 'Gabriel', 'Chernacov', 'Parquetec', 'gchernacov@me.com', 'www.parquetec.org', 'Calle 39', NULL, 'San Pedro', 'San Jose', 'Costa Rica', '10000', '2342', '2342', 'Corporation', NULL, NULL, NULL, 'Martin Chernacov', 1, 12, NULL, 'Costa Rica', NULL, '$1 - $10 Million', NULL, '0000-00-00 00:00:00', 'Lets talk and see the details of the product, service, and terms', 0, NULL, NULL),
(35, 'Stevens', 'Prophete', NULL, 'stevensprophete7@gmail.com', 'https://instagram.com/stevensnprophete?igshid=1w4wf82yu3qar', '6385 Woodhaven blvd Apt 1E', NULL, 'Rego park', 'Ny', 'United States', '11374', '5544', NULL, 'No Business Formed', NULL, NULL, 'Stevens Prophete', 'From Josh Jacques', 0, 0, 0, 'Long Island/Queens', NULL, '$1 - $10 Million', NULL, '2020-05-13 00:00:00', 'As soon as possible', 0, NULL, NULL),
(36, 'Christian', 'Levatino', 'Cannabolix LLC', 'cannabolix420@gmail.com', 'cannabolix.org', '96 9th ave', NULL, 'Holtsville', 'NY', 'US', '11742', '2745', NULL, 'Individual', NULL, NULL, NULL, 'Friend of mine', 0, NULL, NULL, 'Everywhere', NULL, '$0 - $1 Million', NULL, '2020-05-18 00:00:00', 'As soon as i can', 0, NULL, NULL),
(37, 'Winvenia', 'Graham', NULL, 'Winvenia.graham@gmail.com', NULL, '1723 Lake Seymour Dr', NULL, 'Middletown', 'Delaware', 'United States', '19709', '0237', '2675351356', 'No Business Formed', NULL, NULL, NULL, 'wow18', 0, NULL, 0, 'Delaware, Philadelphia, Maryland and New Jersey', NULL, '$0 - $1 Million', NULL, '0000-00-00 00:00:00', 'I am looking to start now.', 0, NULL, NULL),
(38, 'TODD', 'RUBIN', NULL, 'todd@toddstickets.com', NULL, '21218 Saint Andrews Boulevard', NULL, 'BOCA RATON', 'FLORIDA', 'US', '33433', '0593', NULL, 'Corporation', NULL, NULL, NULL, 'MARC RUBIN', 1, NULL, NULL, 'BOCA RATON', NULL, '$0 - $1 Million', NULL, '0020-06-01 00:00:00', 'JUNE 1 2020', 0, NULL, NULL),
(39, 'Litha', 'Silo', NULL, 'lithasilo19@gmail.com', NULL, '14 erica court richmondpark', NULL, 'Port Elizabeth', 'Eastern Cape', 'South Africa', '6001', '1234', NULL, 'No Business Formed', NULL, NULL, NULL, 'I heard about the Model from Joshua Jacquess.', 19, NULL, NULL, 'South africa', NULL, '$0 - $1 Million', NULL, '2020-05-18 00:00:00', 'I would like to start as soon as possible.', 0, NULL, NULL),
(40, 'RaShawn', 'Haynes', 'Allstate', 'Rashawnhaynes@gmail.com', NULL, '39 Cherry Street,', NULL, 'central  islip', 'new york', 'US', '11722', '2649', '6315302113', 'Other (Please Specify)', 'sole proprietor- Haynes  Enterprise', '2020-05-18 00:00:00', 'RaShawn Haynes', 'Jadei Media', 0, 1, 1, 'Longisland through  insurance  companies', 'All-State,  geico, state farm, liberty  and many more', '$0 - $1 Million', NULL, '2020-05-19 00:00:00', 'As soon a possible.', 0, NULL, NULL),
(41, 'Latia', 'Gray', 'Make A Definite Effect LLC', 'madepeoplelooklikeme@gmail.com', NULL, '514 Highland street', NULL, 'Street', 'TN', 'Robertson', '37172', '9498', NULL, 'Corporation', NULL, '2019-12-13 00:00:00', 'Latia Gray', 'At a business pop up shop.', 0, 0, 0, 'Nashville and surrounding area', 'None', '$0 - $1 Million', NULL, '2020-05-25 00:00:00', 'May 25,2020', 0, NULL, NULL),
(42, 'Candice  Ryan', 'Villafane', 'Mz Ryan Cutz LLC', 'candiceryan1@gmail.com', 'Www.mzryancutz.com', '116 Shepherd Ave.', NULL, 'Brooklyn', 'Ny', 'US', '11208', '9247', '3473488396', 'Individual', NULL, NULL, 'Candice Ryan Villafane', 'Regal Group Marketing', 1, NULL, NULL, 'New York', 'Currently an active brand Ambassador for Martell Cognac. I often work very closely with the BEVEL company', '$0 - $1 Million', NULL, '2020-06-15 00:00:00', 'ASAP!! THANK YOU.', 0, NULL, NULL),
(43, 'Chris', 'Auamck', NULL, 'cta1011@yahoo.com', NULL, '2302 sw Norton st', NULL, 'Port Saint lucie', 'Fl', 'United states', '34953', '6213', NULL, 'No Business Formed', NULL, NULL, NULL, 'Friend', 0, NULL, NULL, 'Treasure coast', NULL, '$0 - $1 Million', NULL, '2020-05-30 00:00:00', 'As soon as possible', 0, NULL, NULL),
(44, 'Aamir', 'Ali', 'sadADASD', 'alisyedamir2018@gmail.com', 'www.demo.com', 'C-236/1 Khudadad Colony Karachi', NULL, 'Karachi', 'Sindh', 'Pakistan', '75000', '2132', '03045094429', 'Corporation', NULL, '2020-06-11 00:00:00', 'dfsadf', 'sdafsdfasdfsdfsdf', 3, 3, 3, '243dsfsafsdf24', 'asdasd', '$1 - $10 Million', NULL, '2020-06-10 00:00:00', 'sadfdsafsdf', 0, NULL, NULL),
(45, 'Faizan', 'Ali', 'sdfasdfa', 'faizan@test.com', 'ertrweter.com', '3800 SW Hale ST Demo', NULL, 'dfdsfasf', 'sdfaf', 'sdafdsf', '34234', '3445', '234234234', 'Corporation', NULL, NULL, NULL, '23423423432', 234, 2344, NULL, '5345345fdsfsadfsf', NULL, '$1 - $10 Million', NULL, '2020-06-15 00:00:00', '423423423', 0, NULL, NULL),
(46, 'Gigi', 'Fernandez', 'Investo Holdings LLC', 'Gigi@exitny.com', NULL, '6900 Jericho Tpke.', 'Suite 103E', 'Syosset', 'NY', 'USA', '11791', '1667', '-13476242251', 'Corporation', NULL, NULL, NULL, 'Bob Antoville', 1, 0, NULL, 'US', NULL, '$0 - $1 Million', NULL, '0000-00-00 00:00:00', 'July 1, 2020', 0, NULL, NULL),
(47, 'Susan', 'Rosenblatt', NULL, 'srbling@gmail.com', NULL, '7378 Kea Lani Dr', NULL, 'Boynton Beach', 'FL', 'United States', '33437', '8163', '4127609751', 'Corporation', NULL, NULL, NULL, 'Mark Orlinsky. Orlinsky45', 1, 2, NULL, 'Pittsburgh', NULL, '$0 - $1 Million', NULL, '2020-06-06 00:00:00', 'As soon as I have materials.', 0, NULL, NULL);

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
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"updateHome\",\"viewHome\",\"viewReseller\",\"deleteReseller\",\"viewEntrepreneur\",\"updateSetting\",\"createProfile\",\"updateProfile\",\"createCompany\",\"updateCompany\",\"viewCompany\",\"deleteCompany\",\"createIndividual\",\"updateIndividual\",\"viewIndividual\",\"deleteIndividual\",\"createDevice\",\"updateDevice\",\"deleteDevice\",\"createBanner\",\"viewBanner\"]', 1, NULL, 14, '2020-05-11 17:11:57', NULL),
(2, 'customer', '', 1, NULL, NULL, NULL, NULL),
(4, 'master admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, '2020-02-27 18:39:15', 14, '2020-03-04 18:48:50', NULL),
(5, 'company', '[\"viewUserProfile\",\"deleteUserProfile\",\"updateProfile\",\"viewContact\",\"deleteContact\"]', 1, '2020-04-08 22:43:53', 14, '2020-05-08 16:19:28', NULL),
(7, 'individual', '[\"createDevice\",\"updateDevice\",\"viewDevice\",\"deleteDevice\",\"viewContact\",\"deleteContact\"]', 1, '2020-04-30 20:38:23', 14, '2020-05-08 16:19:16', NULL);

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
  `internet_entrepreneurs_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 1, 'Beyondant', 'info@beyondant.com', '800 970-5877', '800 970-5877', '342 East 53rd Street, Suite #4EF\r\n\r\nNew York, NY 10022', 'A Smoother Way to Grow Your Business through Networking or Simply Grow Your Social Following.\r\nCreate your Custom Digital Business Cards with us and increase your customer interaction despite social distancing.', 'Calling qualified entrepreneurs! Join a growing network of Authorized Resellers and build a solid stream of income. Earn monthly commissions. Allow 7 business days for your application to be reviewed. We will be in touch soon and look forward to working with you!', 'Calling all internet entrepreneurs! Join a growing network of Authorized resellers and build a solid stream of income. Work from home And earn 15% or more in monthly commissions. Please allow 7 business Days for your application to be reviewed. We will be in touch with you Soon and look forward to working with you!', 'resellers@beyondant.com', 'https://www.facebook.com/', 'https://www.linked.com', 'https://www.instagram.com/', 'https://www.tiktok.com/', 'assets/uploads/setting/1648940280.png', 'assets/uploads/setting/1530317221.png', 1, '2020-05-20 17:39:56', 1, '2020-05-20 17:39:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'alisyedamir2018@gmail.com', '2020-04-03 21:41:11', '2020-04-03 21:41:11'),
(2, 'admin@demo.com', '2020-04-04 07:40:45', '2020-04-04 07:40:45'),
(3, 'diana123@gmail.com', '2020-04-07 13:33:46', '2020-04-07 13:33:46'),
(4, 'bantov@gmail.com', '2020-04-30 02:12:23', '2020-04-30 02:12:23'),
(5, 'sneakersoldierllc@hotmail.com', '2020-05-07 03:29:54', '2020-05-07 03:29:54'),
(6, 'ANDREW@AKWONLINE.COM', '2020-05-08 19:54:58', '2020-05-08 19:54:58'),
(7, 'MWilson@LegacyBankFL.com', '2020-05-27 14:31:19', '2020-05-27 14:31:19'),
(8, 'test@demo.co', '2020-06-05 17:39:33', '2020-06-05 17:39:33');

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
  `cover_video` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_slideshow` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_embed` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_selection` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image',
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
  `parent_id` int(11) NOT NULL,
  `overridden_profile` int(11) NOT NULL DEFAULT '0',
  `acc_type` enum('personal','company','individual') COLLATE utf8mb4_unicode_ci DEFAULT 'personal',
  `reseller_code` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `cover_video`, `cover_slideshow`, `cover_embed`, `cover_selection`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `parent_id`, `overridden_profile`, `acc_type`, `reseller_code`, `subscription_status`) VALUES
(1, 1, 'Beyondant Web', NULL, 'admin@demo.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', 'SZ7ZpRp9NfbGS6xiQwVSmBdVeK82VnLKe4KUra0wDX2Mw63LVk7rR1OP6DO9', '1234567890', NULL, '', 'C.E.O', 'assets/admin/images/1162149681.png', NULL, 0, '', '', '', 'image', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-03-11 20:50:54', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(11, 1, 'Albert Custom', NULL, 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, '12345678910', NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, 0, '', '', '', 'image', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(12, 5, 'Testing Fname Lname', 'qwerty', 'nb@nadocrm.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(031) 232-1329 ___', '(234) 324-3243', 'Office Number', 'Developer', 'assets/admin/images/767582880.jpg', 'assets/admin/images/770345224.jpg', 0, '', '', '', 'image', 'qwerty', 'qwerty', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'street2', 'Newyork State', 'Newyork', 'USA', '32213', 'https://outsourceinpakistan.com/profile/12324234324234234234234234', 0, 'Website', 'https://outsourceinpakistan.com/', 0, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'https://outsourceinpakistan.com/', 0, 1, '2020-01-23 18:05:34', NULL, '2020-03-24 02:22:06', NULL, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 0, 0, 'company', NULL, 1),
(14, 4, 'Master Admin', NULL, 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, '3333906233', NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, 0, '', '', '', 'image', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(27, 2, 'Umair', NULL, 'smith@gmail.com', NULL, '$2y$10$9/7/ss3GpvrWh7WDooUVe.9bCxf7kG7tbAyah9tiQCJNmD4z0LrXK', NULL, '43534534543', '454354354354', 'Mobile', NULL, 'assets/admin/images/601208910.png', 'assets/admin/images/856559261.png', 0, '', '', '', 'image', 'wqewqe', 'fsdfdsfd', 'dsfdsfd dsfds f', 'R2 St. 5/2 Block E North Nazimabad', NULL, NULL, NULL, NULL, 'http://myprojectstaging.com/', 0, 'Address', 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 1, '2020-03-12 03:33:21', NULL, '2020-03-12 03:33:21', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(28, 2, 'asad', NULL, 'test@123.com', NULL, '$2y$10$KXZYlgxoNDz9clFPhrOGs.Jcg7E8HTej40590dMtfuN/Fvdpcqk2i', NULL, '23232323', '23232323', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'adad', 'asad', 'test', 'fdgdf33', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:38:38', NULL, '2020-03-12 03:38:38', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(29, 2, 'asad siddique', NULL, 'asad.siddiq07@gmail.com', NULL, '$2y$10$IsohB3sm73poRo6b8.QFse6bK3F9RCtr7Bf4HxooZlxLB16ewvYwW', NULL, '324234234', '324324324', 'Mobile', NULL, 'assets/admin/images/1134369862.jpg', 'assets/admin/images/150358304.jpg', 0, '', '', '', 'image', 'test', 'test', 'rest', 'g-73, phase 2 , defence view', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:42:16', NULL, '2020-03-12 03:42:16', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(30, 2, 'usman', NULL, 'usman.naveed@nadocrm.com', NULL, '$2y$10$R8ZoyBNg9pwZLYZyDMQRQubN0jfqKEwRtEn5vdQtPWK.lqJVBsgz2', NULL, '6094761640', '03352155171', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Outsource in Karachi', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-12 03:50:50', NULL, '2020-03-12 03:50:50', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(31, 2, 'Daniyal', NULL, 'sheikhusman19@hotmail.com', NULL, '$2y$10$YtiJ2YJim5FUw5wxGOfnVeqoXgCCbw.hjNifyZabIDl.2CFIq41g6', NULL, '2542122225', '2821581455', 'Mobile', NULL, 'assets/admin/images/1334283108.png', 'assets/admin/images/376553203.jpg', 0, '', '', '', 'image', 'CEO', 'Deepout', 'Clothing', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 17:18:38', NULL, '2020-03-12 17:18:38', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(32, 2, 'usman', NULL, 'johnmethews1@outlook.com', NULL, '$2y$10$.qKdVrwnICdWEx6GXdjgNeYqVxiWP4fTAnWzfeU98/ZPBQ1.ZBXZW', NULL, '123456844', '12546215251', 'Mobile', NULL, 'assets/admin/images/1515907221.png', 'assets/admin/images/170086125.jpg', 0, '', '', '', 'image', 'Manager', 'Outsource', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Website', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-12 22:42:39', NULL, '2020-03-12 23:35:46', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(33, 2, 'tom', NULL, 'nb@nadocrddm.com', NULL, '$2y$10$DlLL9NlILqSm.kU.u7DXG.HBFNfFsExwGf7K0NszkZ0SZlrMCl7Y.', NULL, '34535435', '4543543543', 'Phone', NULL, 'assets/admin/images/1477711861.png', 'assets/admin/images/377888126.jpg', 0, '', '', '', 'image', 'qwer', 'dsfdsf', 'dsfdsf', 'street2', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-13 21:30:23', NULL, '2020-03-13 21:42:23', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(34, 2, 'Showzeb', NULL, 'showzeb@outsourceinpakistan.com', NULL, '$2y$10$mHkGY.TTzmra6SDfRHFFn.LpeTmwQLU/rZqPGLAqgmLDwdr5oel9q', NULL, '225148458', '25551485641', 'Phone', NULL, 'assets/admin/images/317446541.jpg', 'assets/admin/images/922174070.jpg', 0, '', '', '', 'image', 'HOD', 'Technado', 'Outsourcing', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-13 21:56:13', NULL, '2020-03-13 21:56:13', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(36, 2, 'Usman', 'naveed', 'usman@abc.com', NULL, '$2y$10$0/JN8lmdhq.tpRg7S6gdJusksx6fCxgGT9pE08QGt87UX5tPH4nUS', NULL, '(222) 222-2222', '(888) 888-8888', 'Mobile', NULL, 'assets/admin/images/28750152.png', 'assets/admin/images/319673600.jpg', 0, '', '', '', 'image', 'CEO', 'Deja-Vu Solutions', 'Software House', 'ABCD 123', 'sindh', 'karachi', '', '75300', 'https://www.google.com/', 0, 'Address', 'www.linkedin.com/in/usman-naveed-168494b1/', 0, 'www.instagram.com/sheikhusman19/', 1, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-13 22:08:57', NULL, '2020-03-20 01:56:33', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(38, 2, 'Marc Rubin', NULL, 'MRubin@Test.com', NULL, '$2y$10$ecAUtJF2DzVK.oDw.V3kmeWhoprgX.ObOJ7REM4HwAxjYn9T8HXuu', NULL, '4561234569', '4561234569', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Beyondant', 'Technology', '125 NW Victory Lane', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 00:16:45', NULL, '2020-03-14 00:17:22', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(39, 2, 'Marc Sussman', NULL, 'MSussman@Test.com', NULL, '$2y$10$nGYzkPXoMdr9d4WISZKB3.0eNXM1Qe11.RGYv9vIq370mlHmg.ceq', NULL, '9545678764', '95456734543', '', NULL, 'assets/admin/images/2083810365.JPG', 'assets/admin/images/1940459301.jpg', 0, '', '', '', 'image', 'CFO', 'Beyondant', 'Technology', '4563 SW Victory Lance Cooper City, FL 33342', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 11:59:37', NULL, '2020-03-14 12:09:42', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(40, 2, 'lala', NULL, 'asad.siddiqui@nadocrm.com', NULL, '$2y$10$CQDCf1Yh/XOjAexclbUcrOH2P8tEvzzWvyUG7Fw5HnTpUDRBqz5.i', NULL, '23', '2365', '', NULL, '', '', 0, '', '', '', 'image', 'lalala', 'lalala', 'lalala', 'asaas', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-16 17:26:29', NULL, '2020-03-16 17:26:29', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(41, 2, 'dani', NULL, 'daniyal.ali@technado.co', NULL, '$2y$10$xQWum45sv6N21FJyW0E1N.cOriy5.RKMvwrRMFdhGTmfBcCaIwi3a', NULL, '456123', '456123', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'lala', 'olala', 'lalaland', '456123', NULL, NULL, NULL, NULL, 'asaassa', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 17:44:57', NULL, '2020-03-16 17:44:57', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(42, 2, 'daniyal', NULL, 'daniyal.ali@technado.com', NULL, '$2y$10$dGfaJ.podHQinZQ9UmEb.e864EsU9mP/mxUmBA7sWwL3ug/rD5WBe', NULL, '123456789', '789456123', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'WOW', 'Kaam krti hai', 'nowhere', NULL, NULL, NULL, NULL, 'haha.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 17:59:47', NULL, '2020-03-16 18:00:27', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(43, 2, 'daniyal', NULL, 'daniyal@outsourceinpakistan.com', NULL, '$2y$10$RPmVEdxi4hk7KnqybPP1guW0z/jDIkceA5xsoN3lIu0BAXk89vu1C', NULL, '123456', '456123', 'Mobile', NULL, 'assets/admin/images/1582413469.jfif', 'assets/admin/images/258525367.jpg', 0, '', '', '', 'image', ':D', 'LALA', 'Kaam karti hai', 'nowhere', NULL, NULL, NULL, NULL, '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 18:10:35', NULL, '2020-03-17 00:01:49', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(44, 2, 'Robert', 'Jones', 'RJones@CoolTech.com', NULL, '$2y$10$mUXzWC5Y5tJiE2JFT6ZTIeKwuib9RfwfH2WzNushbnIjK7zdai4WO', NULL, '4562347896', '4464568542', 'Mobile', NULL, 'assets/admin/images/179986367.JPG', 'assets/admin/images/2115260670.jpg', 0, '', '', '', 'image', 'CEO/Founder', 'Cool Tech Enterprises', 'Technology', '451 SW Victory Lane', 'Florida', 'Cooper City', 'Test', '33331', 'www.yahoo.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 22:28:15', NULL, '2020-03-16 22:28:15', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(45, 2, 'Testing Fname Lname', 'Testing Fname Lname', 'nb@nadocrmd.com', NULL, '$2y$10$0yS9mTgZJ3w1mVzEEoUMlev8vrRiGq7vb9lWd2gsuvuhjF.PBnsuu', NULL, '324324324324', '342324324324', '', NULL, 'assets/admin/images/146227966.jpg', 'assets/admin/images/1248730661.jpg', 0, '', '', '', 'image', 'sfdfsdf', 'sdfdsf', 'sdfdsfdf', 'street2', 'Punjab', 'Islamabad', 'qwewqe', '72900', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'www.instagram.com/', 0, 'www.facebook.com', 0, 1, '2020-03-16 22:32:35', NULL, '2020-03-16 22:32:35', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(46, 2, 'Marc', 'Rubin', 'MRubin@Test2.com', NULL, '$2y$10$.BxJuqMg9RtedGtV4wdLZOBLalUG9Lub/HTY.enQB2EhstNdpfgD6', NULL, '(456) 213-6987', '(546) 321-4569', 'Mobile', NULL, 'assets/admin/images/2029446747.JPG', 'assets/admin/images/64066282.jpg', 0, '', '', '', 'image', 'CEO/Founder', 'Beyondant', 'Technology Company', '455 Victory Lane', 'Florida', 'Cooper City', '', '23332', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 0, 'Address', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, 'https://www.facebook.com/theregelgroupllc/', 0, 1, '2020-03-16 23:16:14', NULL, '2020-03-23 22:22:12', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(47, 2, 'Usman', 'Naveed', 'naveed@abc.com', NULL, '$2y$10$hbA/jx7k.3UjHsnLC2JQgexvbFEILTOBgWJA//1o7GDdzSKzlsYPG', NULL, '0', '(125) 848-4586', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'S.M', 'Company', 'Technology', 'street 22', 'sindh', 'karachi', '', '76822000', 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-19 21:35:16', NULL, '2020-03-19 21:35:16', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(49, 2, 'Nathan', 'Wilson', 'nathan@demo.com', NULL, '$2y$10$ar4ypoCULl.LfqMucVhUB..69mcrSMXQXLJjLnbQy9Sv6BcX8Bt2S', NULL, '(111) 111-1111', '(222) 222-2222', 'Phone', NULL, 'assets/admin/images/1101614631.png', 'assets/admin/images/139622300.jpg', 0, '', '', '', 'image', 'Marketing Manager', 'Nado', 'Software house', 'Street 24', 'Huston', 'New York', '', '512844', 'beyondant.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 1, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:17:23', NULL, '2020-03-20 00:22:03', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(50, 2, 'Usman', 'snhdfjknASJfn', 'usman@abcde.com', NULL, '$2y$10$oxKVki4Zk03pxnmsw9BFvOFiJ8jDtvw9LGa0hEIruxBXmL.QgXSJq', NULL, '(111) 111-1111', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/497171588.png', 'assets/admin/images/2055233230.jpg', 0, '', '', '', 'image', 'usman786', 'usman786', 'usman786', 'ABCD 123', 'usman786', 'usman786', '', 'usman786', 'https://www.google.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:24:51', NULL, '2020-03-20 00:26:17', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(51, 2, 'Usman', 'Naveed', 'usman@nado.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(222) 222-2222', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/525013690.png', 'assets/admin/images/1596648536.png', 0, '', '', '', 'image', 'Asst. Manager', 'Nado', 'Software house', 'ABCD 123', 'New York', 'New York', '', '512221', 'https://www.google.com/', 1, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:52:28', NULL, '2020-03-20 00:56:12', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(52, 2, 'Nabeel', 'Baig', 'mathswithnabeel@gmail.com', NULL, '$2y$10$PAptzROL2xB.8n79uNSytePNuKtgjwQ5udt3wM4XGlaZxzFNXD7pK', NULL, '(333) 390-6233', '(333) 390-6233', 'Mobile', NULL, 'assets/admin/images/1361536062.jpg', 'assets/admin/images/499532749.jpg', 0, '', '', '', 'image', 'mnb', 'mnbTech', 'mnbTech Software House', 'H-104, Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'https://www.instagram.com/number3.pk/', 0, 'https://www.facebook.com/mnbprofile', 0, 1, '2020-03-20 17:49:20', NULL, '2020-03-20 17:55:24', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(53, 2, 'Testing Fname Lname', 'sdsad', 'nb@nadofdgcrm.com', NULL, '$2y$10$j6zI066zg0BrSE/Ce9N6X.2T4CJKFJ2LcAamnhovZrNyYdY8kvPiK', NULL, '(123) 213-1233', '(432) 432-4324', 'Phone', NULL, 'assets/admin/images/748527921.jpg', 'assets/admin/images/751150779.jpg', 0, '', '', '', 'image', 'fdsfdsf', 'sadsad', 'sdsadsad', 'street2', 'sadsad', 'sadsad', '', '75290', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-20 19:08:49', NULL, '2020-03-20 19:08:49', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(54, 2, 'Usman', 'Naveed', 'usman@outsourceinpakistan.com', NULL, '$2y$10$sCn9XFe8c1ceDUswy563LeF9kb.6a7JMhRSm6m/3WRq0YELmlUxJK', NULL, '(609) 476-1640', '(335) 215-5171', 'Office Number', NULL, 'assets/admin/images/934211422.png', 'assets/admin/images/1860390530.jpg', 0, '', '', '', 'image', 'Asst.Manager', 'Outsource in Pakistan', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'Park Avenue', 'Sindh', 'Karachi', '', '75300', 'https://outsourceinpakistan.com/', 0, 'Website', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, 'https://www.instagram.com/sheikhusman19/', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-20 21:56:29', NULL, '2020-03-20 22:00:27', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(55, 2, 'Joe\'l', 'Perkins', 'JPerkins@GreenAcresNissan.com', NULL, '$2y$10$EzKwbZ0K7EFnnsU258uvzuFSOapfwcXbllrYaQ/KBt4f/JxhsSB0W', NULL, '(561) 537-5300', '(954) 743-9796', 'Mobile', NULL, 'assets/admin/images/411883524.jpg', 'assets/admin/images/1220306644.jpg', 0, '', '', '', 'image', 'Service Director', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 21:58:24', NULL, '2020-04-03 00:45:29', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(56, 2, 'Carlo', 'Renda', 'CRenda@GreenAcresNissan.com', NULL, '$2y$10$fO0Xheh7yWXN6vQsljtmMekWxTCdXkmLYfElfLl9/Yp8qP1cF.E1.', NULL, '(561) 537-5300', '(561) 537-5217', 'Mobile', NULL, 'assets/admin/images/332170584.jpeg', 'assets/admin/images/971418446.jpg', 0, '', '', '', 'image', 'Preowned Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:32:12', NULL, '2020-04-03 17:19:39', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(57, 2, 'Kylinn', 'Dominguez', 'KDominguez@GreenAcresNissan.com', NULL, '$2y$10$91JmDVmeDx3.iFgVDbVl/OIBs7ERcoxrPU.NYk6lNv2KSwEfVRbca', NULL, '(561) 537-5300', '(561) 537-5224', 'Mobile', NULL, 'assets/admin/images/795878240.png', 'assets/admin/images/1308982289.jpg', 0, '', '', '', 'image', 'Client/Owner Loyalty Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:53:21', NULL, '2020-04-02 21:11:02', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(58, 2, 'Mike', 'Pennachio', 'MPennachio@GreenAcresNissan.com', NULL, '$2y$10$AWSmK.LJQuQl.I5Wdy6FWeLE0M2Mv0K9Iu2kczPnHp3ld360Z4Kji', NULL, '(561) 537-5300', '(561) 491-4310', 'Mobile', NULL, 'assets/admin/images/243250041.png', 'assets/admin/images/641373474.jpg', 0, '', '', '', 'image', 'Executive Manager/Owner', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 23:57:23', NULL, '2020-04-02 21:17:35', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(59, 2, 'Dane', 'Luca', 'Dluca@GreenAcresNissan.com', NULL, '$2y$10$lAhoq.ho4.uzLiI1A/akBOAZ8jMn4oFhLf3izuZwhHY8und2U5oWm', NULL, '(561) 537-5509', '(561) 951-5509', 'Mobile', NULL, 'assets/admin/images/33951142.jpeg', 'assets/admin/images/1665517806.jpg', 0, '', '', '', 'image', 'General Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:08:21', NULL, '2020-04-03 17:11:32', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(60, 2, 'Jesus', 'Rodriguez', 'JRodriguez@GreenAcresNissan.com', NULL, '$2y$10$iHaIhDoh2OgyWlt7AW4xHemUMqjLE01zATf1LcKd18l1VtyTxfU3m', NULL, '(561) 537-5300', '(954) 461-1855', 'Mobile', NULL, 'assets/admin/images/2109513939.jpeg', 'assets/admin/images/1735258129.jpg', 0, '', '', '', 'image', 'General Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:25:02', NULL, '2020-04-03 17:26:17', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(61, 2, 'Frank', 'Dellatto', 'FDellatto@greenacresnissan.com', NULL, '$2y$10$GBZoC1WT9q3g.FLiLdYkNOHvXOGYudBK825L7i5.ToCB9r7CxpgkS', NULL, '(561) 537-5300', '(954) 496-2677', 'Mobile', NULL, 'assets/admin/images/249456941.jpeg', 'assets/admin/images/1673810523.jpg', 0, '', '', '', 'image', 'General Floor Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:27:58', NULL, '2020-04-03 17:21:07', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(62, 2, 'Alicia', 'Narcisse', 'Anarcisse@Quest-comm.com', NULL, '$2y$10$obhSiVJ.IRBP98oy5aDqKecL1ltWvX4WQOlHpNwU924qJ2g7jp2Le', NULL, '(919) 322-0799', '(222) 222-2222', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Store Manager', 'Questcomm', 'Metro by T Mobile', '1620 Marin Luther King Blvd.', 'NC', 'Raleigh', '', '27610', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 1, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-22 01:33:48', NULL, '2020-03-22 01:35:37', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(63, 2, 'Erick', 'Johnson', 'mrejohnson26@yahoo.com', NULL, '$2y$10$l.ax8gc7ThD/2okzddwOm.0AOFGQ0YyDgmi3h8kVz4cbmdHwRdmb2', NULL, '(222) 222-2222', '(222) 222-2222', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Sample', 'Sample', 'Sample', '1111111', 'Sample', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-22 01:58:13', NULL, '2020-03-22 01:58:13', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(64, 2, 'Bob', 'Antoville', 'beyondantbob@gmail.com', NULL, '$2y$10$8EIPDorYQi/OyngVjQhMn.wHF//t8BmMi0WWmyEmz7sGozr.GJBAS', 'lCyh8dpZNeCG7hEnpaYkB1AmY9oJmd6nZj9wF0LT7acaQ2xHpLT51hiYxQD0', '(914) 649-1300', '(914) 649-1300', 'Mobile', NULL, 'assets/admin/images/764033609.png', 'assets/admin/images/1805984059.jpg', 0, '', '', '', 'image', 'Authorized Reseller', 'Beyondant', 'Tech', '13924 Via Flora', 'FL', 'Delray Beach', '', '33484', 'www.beyondant.com', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/bob.antoville', 0, 1, '2020-03-25 22:45:55', NULL, '2020-05-27 14:26:18', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(65, 2, 'Chris', 'Hall', 'chall@slbt.com', NULL, '$2y$10$uzNxQTgOs00jI5dQcsBQ4OV9Yvv0HUylS7cvPLe5Usz.PN5p/bEIG', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Store Manager', 'St. Lucie Battery & Tire', 'Complete Care Car Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:00:45', NULL, '2020-03-25 23:00:45', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(66, 2, 'Anthony', 'Mills', 'amills@slbt.com', NULL, '$2y$10$Ux19whbUk2Oi292rr3CY4eUB8dO72N6R9hbDWWYsx668qN8SQy35q', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Service Advisor', 'St. Lucie Battery & Tire', 'Complete Car Care Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:08:57', NULL, '2020-03-25 23:08:57', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(67, 2, 'Pasquale', 'Lamarra', 'pat@eatpastaio.com', NULL, '$2y$10$vf9Au8UlNrjr9O3mwweg4.MlwlbF3YAY0wUDhZTIu7Yl2v4nECmpi', NULL, '(561) 676-1186', '(561) 676-1186', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Pastai', 'Restaurant', '10472 Southwest Village Center Dr.', 'FL', 'Port St. Lucie', '', '34987', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:27:43', NULL, '2020-03-25 23:27:43', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(68, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc@yahoo.com', NULL, '$2y$10$4kojRXhz8aJnpOHpM02YHe4B/L9BEsTbEZ8Yn5iZmtuyAMzPD8Tuq', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:44:46', NULL, '2020-03-25 23:44:46', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(69, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc2@yahoo.com', NULL, '$2y$10$jDM0Kfqopg6hOhYbPBIUoO0w1YzKntVwUh.9cStUuckFflLpC2z.K', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:52:22', NULL, '2020-03-25 23:52:22', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(70, 2, 'Mitchell', 'Wyett', 'tsrfashions1@gmail.com', NULL, '$2y$10$2TM3XUhlAIvsHe1LERi5A.MZ.8v1laGYWqPqKbsouMDBLbuhL.Sd6', NULL, '', '(678) 790-4460', 'Mobile', NULL, '', 'assets/admin/images/1150822383.jpg', 0, '', '', '', 'image', 'Owner', 'TSR Fashion LLC', 'Where fashion is nothing without people', '416 orchards walk', 'Georgia', 'Stone mountain', '', '30087', 'Www.tsrfashion.com', 0, '', '', 0, '', 1, '', 1, 1, '2020-03-28 04:16:23', NULL, '2020-03-28 04:16:23', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(71, 2, 'Abdul', 'Wasay', 'nafay552@gmail.com', NULL, '$2y$10$DaKrFQ6WVb8oNq8QR9RWaeSxdeWoxqpvL.SoYYHu68U/Kk0R1rwE2', NULL, '(300) 363-9508 ___', '(335) 242-0530', 'Phone', NULL, '', 'assets/admin/images/1783606097.jpg', 0, '', '', '', 'image', 'Hafiz', 'Online Quran Teaching', 'Learn and recite Quran Online very easily and properly', 'Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', '', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/abdulnafaymajid.71', 0, 1, '2020-03-28 16:22:19', NULL, '2020-04-11 14:42:30', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(73, 7, 'Nia', 'Dumont', 'NDumont@BuiltSocially.com', NULL, '$2y$10$z7FVfwyZKHAQZ1gEDzDbZOvdKhGuTjFuQZlTNHsQRhVgFH1XoarD2', NULL, '(954) 213-5642', '(954) 213-5642', 'Phone', NULL, 'assets/admin/images/1141922232.png', 'assets/admin/images/1460046494.png', 0, '', '', '', 'image', 'Chief Operations Officer', 'Built Socially', 'Digital Marketing Firm', '7603 NW 60th Lane', 'FL', 'Parkland', '', '33067', 'www.BuiltSocially.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-29 16:03:41', NULL, '2020-05-09 20:23:16', NULL, '', 0, 0, 0, 'individual', NULL, 1),
(74, 2, 'Ralph', 'Avila', 'ravila@holmanauto.com', NULL, '$2y$10$MeitRE8KA.zsZZnRJUxS/.xFzr162Gen8HPekd3PaTO4OEJauchnu', NULL, '(954) 335-2250', '(305) 216-4808', 'Mobile', NULL, 'assets/admin/images/1343502144.jpg', 'assets/admin/images/408156941.jpg', 0, '', '', '', 'image', 'General Sales Manager', 'Holman Motorcars Ft Lauderdale', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', 'https://www.linkedin.com/in/ralphavilasr/', 0, 'https://www.instagram.com/ralphavila/', 0, 'https://www.facebook.com/holmanluxurycars/', 0, 1, '2020-03-31 12:12:42', NULL, '2020-04-02 21:39:09', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(75, 2, 'Carlos', 'Cucalon', 'CCucalon@Holmanauto.com', NULL, '$2y$10$XB1jaIxc7mj2w1Tl1/o2UOg9uQoRPNo6OByyxsi0tnD1ZBgyZHy5K', NULL, '(954) 779-2000', '(954) 383-7040', 'Mobile', NULL, 'assets/admin/images/990031963.JPG', 'assets/admin/images/2086331285.JPG', 0, '', '', '', 'image', 'Marketing Manager', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:27:52', NULL, '2020-05-07 17:38:33', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(76, 2, 'C', 'Viotti', 'cviotti1@vetservices.com', NULL, '$2y$10$F1D7Ar6XvRjVrZeJJaCaoOOi56IFKfxcNB.svg0PdIe9Nx34ol5KK', NULL, '(954) 306-0970', '(954) 306-0970', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'West Lake Animal Hospital', 'Veterinarian Services', '318 Indian Trace', 'FL', 'Weston', '', '33326', 'http://bit.ly/westongoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:30:59', NULL, '2020-04-01 15:35:52', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(77, 2, 'Chris', 'Viotti', 'Cviotti2@vetservices.com', NULL, '$2y$10$bczHFUT/sihi2N9k7xvsGuseHdvOM60XyBvpNAYj2BgUxBCKoI/0i', NULL, '(786) 616-8830', '(786) 616-8830', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Kendal Animal Medical Center', 'Veterinarian Services', '12586 SW 88th Street', 'FL', 'Miami', '', '33186', 'http://bit.ly/kendallgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:41:56', NULL, '2020-04-01 15:44:48', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(78, 2, 'Chris', 'Viotti', 'Cviotti3@vetservices.com', NULL, '$2y$10$/Rx2d8TbxrFMlALjV8gV8uU0dhnNuOKttAONhmFigfK2KW6mqVRdm', NULL, '(954) 405-8640 ___', '(954) 405-8640', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Pines animal Hospital- Vetco Total Care', 'Veterinarian Services', '15895 Pines Blvd', 'FL', 'Pembroke Pines', '', '33027', 'https://g.page/pinesanimalhospital/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:50:39', NULL, '2020-04-01 15:54:02', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(79, 2, 'Chris', 'Viotti', 'Cviotti4@vetservices.com', NULL, '$2y$10$nzlV5CXqXaKhr4p0GWP/z.HE3rzAbcFRzWAvNdFRP7hasWNM6X9Py', NULL, '(954) 419-4560', '(954) 419-4560', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Deerfield Beach Animal Hospital- Vecto Total Care', 'Veterinarian Services', '3551 W. Hilsboro Blvd', 'FL', 'Deerfield Beach', '', '33442', 'https://g.page/VetcoDeerfieldBeachAnimalHosp/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:00:00', NULL, '2020-04-01 16:01:03', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(80, 2, 'Chris', 'Viotti', 'Cviotti5@vetservices.com', NULL, '$2y$10$huyxEV0C41H7z03xYfDG0OeyH1oyZ6wtva8x0ULXVIirdrcfd8g5a', NULL, '(561) 900-2680', '(561) 900-2680', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Delray Beach Animal Hospital- Veterinarian Delray Beach', 'Veterinarian Services', '13900 Jog Road Suite 209', 'FL', 'Delray Beach', '', '33446', 'http://bit.ly/delraybeachgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:05:49', NULL, '2020-04-01 16:06:13', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(81, 2, 'Chris', 'Viotti', 'Cviotti6@vetservices.com', NULL, '$2y$10$x1EZ3Q3p50R8qafZUmeAXOevQjnMW.oPNWPgFD1.tWTACi8WXMyu2', NULL, '(954) 869-4371', '(954) 869-4371', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Oakland Animal Medical Center', 'Veterinarian Services', '1009 E. Commerical Blvd', 'FL', 'Oakland Park', '', '33334', 'http://bit.ly/oaklandgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:09:59', NULL, '2020-04-01 16:10:14', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(83, 2, 'Chris', 'Viotti', 'chris@unitedanimalcare.com', NULL, '$2y$10$U49osEf5aycfYca2iPtbQ.Uc1dR1ag46Tw/N36Ltjvm43dkg3fqQ2', NULL, '(954) 864-6588', '(954) 864-6588', 'Mobile', NULL, 'assets/admin/images/742268011.jpeg', 'assets/admin/images/1241104527.jpg', 0, '', '', '', 'image', 'CEO/Founder', 'United Animal Care', 'Sample', 'Sample', 'FL', 'Sample', '', '222222', 'Www.unitedanimalcare.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 19:55:15', NULL, '2020-04-02 20:37:22', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(84, 2, 'Maria', 'Legarda', 'misslegarda@instagram.com', NULL, '$2y$10$nofNc9aT1Q9SkXHLmqlAVO8L8dylJX.isDKyn0urCygkYUctX8ePC', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'http://www.instagram.com/Misslegarda', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:26:38', NULL, '2020-04-02 17:45:01', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(85, 2, 'Daniela', 'Legarda', 'Danielalegarda@instagram.com', NULL, '$2y$10$6AWn0CA0.vXpuN4Nro.1z.VX3IKmBB8wEOt/dm6YQRkk/xK0pdopG', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'http://www.instagram.com/DanielaLegarda', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:41:53', NULL, '2020-04-02 17:48:33', NULL, '', 0, 90, 0, 'personal', NULL, 1),
(86, 2, 'Harrell', 'Gunn', 'Harrellgunn@instagram.com', NULL, '$2y$10$aWDsSRiqJDPpA4ECTsyIH.8tv8aNlLBwa1BPOjRZQyZ4iRTEQqCqO', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'https://www.instagram.com/harrell_gunn/', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:56:17', NULL, '2020-04-02 17:56:29', NULL, '', 0, 90, 0, 'personal', NULL, 1),
(89, 2, 'Shunya', 'Roytman', 'Shunya@finessecollection.com', NULL, '$2y$10$5UPYjBA9PlnzE9sQUvdsROvxEKZN5z.MsP/5QdmNNr1iwJ2u.PFBG', 'l83MeSEaj5aXAqMvjJEFslMqAmqwFJFukCyOgxfZCkq5nEHp9PXpn6ezHINz', '(561) 302-7351', '(561) 302-7351', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'ShunyaR', 'Sales', '9220 SW 14th St. Apt. 3401', 'Florida', 'Boca Raton', '', '33428', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 19:41:57', NULL, '2020-04-10 17:08:47', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(92, 5, 'dfsgsdf', 'gdsfg', 'alisyedamir2018@gmail.com', NULL, '$2y$10$6YdBAsYDYxU2VaiFZTkt1eYEuoP5EcC3HFJFMizKuVuhYy4qbEJcG', NULL, '(0304)-509-4429', '(324) 234-2342', 'Office Number', 'My Name', 'assets/admin/images/2092235336.png', 'assets/admin/images/2017578051.png', 0, 'assets/admin/videos/1052629244.mp4', '[\"assets\\/admin\\/slideshow\\/92\\/372434433.png\",\"assets\\/admin\\/slideshow\\/92\\/643673277.PNG\"]', 'T99--3MsJ-k', 'embedded', 'New Postqweqw', 'wqeqwe ami', 'e2weqe ami', 'sd234234af ami', '234234 ami', '234234', 'wrqwer234234', '23423423', 'https://www.youtube.com/', 0, '', 'https://www.linkedin.com/in/amir-ali-b8a014128/', 0, 'https://www.instagram.com/', 0, 'https://www.facebook.com/syedaamir.ali.1000/', 0, 1, '2020-04-03 14:21:28', NULL, '2020-06-09 19:08:11', NULL, '', 0, 0, 0, 'company', NULL, 1),
(94, 5, 'Syed Faizan Ali', 'qwe', 'alisyedaami123r@hotmail.com', NULL, '$2y$10$okGunF9O0s2qwTPPnYEK1.WFNSgq/IKHgxNwn4JaJjDSH7nTyQ2sG', NULL, '(234) 324-3242', '(234) 234-3243', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'eqweqwe', 'sdafsdfsd', 'fsafdsf', 'gdfgdsg', 'sdfasdf', 'fasdfasfdsf', 'sdafasdf', '324234', 'wfsdf.com', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-06 21:35:00', NULL, '2020-04-07 16:30:42', NULL, '', 0, 0, 0, 'company', NULL, 1),
(95, 5, 'Syed Faizan Ali', 'dstsar', 'sdasdf@gmail.com', NULL, '$2y$10$RfceBF6qa9aNt7vTbkXJa.FDaWdUQrb8YigPTZPgKYOaAGPp/Ib36', NULL, '(324) 234-234_', '(324) 234-2342', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'werwer', 'weqrwer', 'werqwer', 'sdfasdfasfdsaf', '43sdfsaf24324', '234sdfasdf23432', '', '324234', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 09:24:29', NULL, '2020-04-07 09:24:29', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(96, 5, 'Peter', 'Tosh', 'Tosh@Tosh.com', NULL, '$2y$10$h2UrvntBAAkpx98PrMeUIequmWyycwg7yY51gkGcALK0t5miKd/KC', NULL, '(704) 223-6545', '(704) 223-6545', 'Phone', NULL, 'assets/admin/images/1353930725.jfif', 'assets/admin/images/796552639.JPG', 0, '', '', '', 'image', 'CEO', 'Tosh Enterprises', 'Test Company', '', '', '', '', '33256', 'www.Tosh.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 12:50:24', NULL, '2020-04-10 20:07:51', NULL, '', 0, 0, 0, 'company', NULL, 1),
(97, 2, 'John', 'Smith', 'JSmith@Toshlcom', NULL, '$2y$10$iqtPQ/y0tNDPz0i0YD9speckBupZhbbPhiJuv9JuRbyryctXi1MQW', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'VP', '', '', 'New York', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 12:52:40', NULL, '2020-04-07 12:52:40', NULL, NULL, 0, 96, 0, 'personal', NULL, 1),
(100, 2, 'dsfa', 'sdf', 'adqweqweqwemin@demo.com', NULL, '$2y$10$Llc.l7WlzwwwfBbH1m6r.Oi8CC0AT3HzQUwwOB2S2W5Wjqh40L4lS', NULL, '(231) 312-3213', '(231) 312-3213', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 16:31:16', NULL, '2020-04-07 16:31:16', NULL, NULL, 0, 94, 0, 'personal', NULL, 1),
(101, 2, 'Chris', 'Smith', 'CSmith@Tosh.com', NULL, '$2y$10$82KJRHoPlsYiqhBTvJT4j.g9YHadvXcCDLPWOMm54ipCRo5I0w6qO', NULL, '(704) 563-2223', '(704) 563-2223', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'SVP', '', '', 'New York', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 17:09:32', NULL, '2020-04-07 17:09:32', NULL, NULL, 0, 96, 0, 'personal', NULL, 1),
(104, 2, 'dsfa', 'sdf', 'aamir.ali@technado.co', NULL, '$2y$10$xAQbhRpW7gWhw5s4NnTkR.mLT.RP/OwlU0Cg1b9l0MlFXHpisnqnG', 'jeKxAHzDcOaC1uJGnezHnf6IfX8q1uv69yAdrGaslVpCj8vs6nyWM5FfapR2', '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, 'assets/admin/images/317963535.png', '', -72, '', '', '', 'image', 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:01:55', NULL, '2020-05-14 16:29:11', NULL, NULL, 0, 94, 0, 'personal', NULL, 1),
(106, 2, 'Kristin', 'Fearless', 'KFearless@Tosh.com', NULL, '$2y$10$tVG9yPn53kZsNC1uJEjeLOPoxXVhvxcB9SkezI/yqmPtWdTCRsFP.', NULL, '(954) 555-5555', '(954) 555-5555', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Assistant', '', '', 'Delray Beach', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:23:57', NULL, '2020-04-07 22:23:57', NULL, NULL, 0, 105, 0, 'personal', NULL, 1),
(107, 2, 'dsfa', 'sdf', 'alisyedfaiz1234@gmail.com', NULL, '$2y$10$9TeClhMfrQc3L7yu8bmg7uOK07arsiWbijxrePfnk90tAnqHKmW8q', NULL, '(323) 423-4234', '(323) 423-4234', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:34:58', NULL, '2020-04-07 22:34:58', NULL, NULL, 0, 94, 0, 'personal', NULL, 1),
(108, 5, 'Ronald', 'Leger', 'rleger@regelgroupmarketing.com', NULL, '$2y$10$b4tRUpHsFwAADu3Jsu8F7O8l9SUgwIeexAEyYCSpepoE1W0jXpWPm', NULL, '(772) 236-0338', '(772) 408-3804', 'Mobile', 'CEO/Founder', 'assets/admin/images/581540325.jpg', 'assets/admin/images/2125309849.png', 0, '', '', '', 'image', 'CEO/Founder', 'The Regel Group Marketing Co.', 'We are a marketing company that specializes in digital marketing and B2B sales. Our job is to help leverage and gain clients for your business and get the exposure you need!', '', 'FL', 'Port St Lucie', 'St Lucie County', '0000', 'http://www.beyondant.com/', 0, 'Website', 'https://www.linkedin.com/in/ronald-leger-00111344?trk=people-guest_people_search-card', 0, 'https://www.instagram.com/theregelgroupllc/', 0, 'https://www.facebook.com/theregelgroupllc/?ref=bookmarks', 0, 1, '2020-04-08 19:12:21', NULL, '2020-05-22 22:55:09', NULL, '', 0, 0, 0, 'company', NULL, 1),
(109, 2, 'Johnny', 'Volcy', 'jonathan.regelgroup@gmail.com', NULL, '$2y$10$bNxyNcYci2oz2uAsAv7Ox.49BQnU6khQ3g6BlTfBBLxQvl9cxZeL6', NULL, '(772) 888-5858', '(772) 888-5858', 'Mobile', NULL, 'assets/admin/images/415369909.png', NULL, 0, '', '', '', 'image', 'Senior Executive', 'Volcy Biz, LLC', 'Sales and Marketing', 'Port St Lucie', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:15:37', NULL, '2020-06-02 00:48:13', NULL, '', 0, 108, 1, 'personal', NULL, 1),
(110, 2, 'Javier', 'Nazario', 'javier.regelgroup@gmail.com', NULL, '$2y$10$MbFhFa0J5UGUFiWoZEFGFeR.sIPMNRSa9Bjk0kBhTBVtU6/yqJ0mq', NULL, '(862) 703-6031', '(862) 703-6031', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Senior Executive', '', '', 'Port St Lucie', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:19:42', NULL, '2020-06-02 00:48:13', NULL, NULL, 0, 108, 1, 'personal', NULL, 1),
(111, 2, 'Lamephia', 'Shaw', 'shaw.regelgroup@gmail.com', NULL, '$2y$10$IRY2lDuRPTzke.4osJy3j.epzMSSePp6Oxt2L6oOpsgOPhV13Hh6m', NULL, '(754) 214-9289', '(754) 214-9289', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Senior Executive', '', '', 'Ft Lauderdale, FL', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:22:08', NULL, '2020-06-02 00:48:13', NULL, NULL, 0, 108, 1, 'personal', NULL, 1),
(112, 5, 'Syed Faizan Ali', 'fgdfg', 'company99675@hotmail.com', NULL, '$2y$10$372iwEbDmzJjWHQj7Hihpu8oTf9TfgqR7gR2HAs1RXB4FXiOwRK/6', NULL, '(344) 354-3543', '(345) 435-4354', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'dsfsafds', 'fdgfdsgsfd', 'sgdfgdfg', 'gdfgdsg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 06:51:05', NULL, '2020-04-09 06:51:05', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(113, 2, 'Nathan', 'Martin', 'ibrahimlakhani93@gmail.com', NULL, '$2y$10$XF7jaRwtgU5TXp/.DCjE1.s69snX2dZT85lna1ryy.IMpfMlCpeuS', NULL, '', '(609) 346-4399', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Business Development Officer', 'Beyondant', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination.', 'House# 014(K4), Karimabad Society', 'Sindh', 'Karachi', '', '75300', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-10 01:13:30', NULL, '2020-04-10 01:54:42', NULL, '', 0, 0, 0, 'company', NULL, 1),
(117, 2, 'Jayden', 'Dumont', 'jaydendumontbusiness@gmail.com', NULL, '$2y$10$i6HXT1.UGGpvHtEP4ZeZRO53jKA0ZrmcTxNT1vyr4XFPPn/7U68V2', NULL, '(954) 638-9921', '(954) 638-9921', 'Mobile', NULL, 'assets/admin/images/2090800145.jpg', 'assets/admin/images/1677230803.jpg', 0, '', '', '', 'image', 'Athlete', 'USSDA', 'United States Soccer Development Academy - Beyondant CODE: JAYDEN39', '', '', '', '', '', 'http://www.ussoccerda.com', 0, 'Website', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, '', 0, 1, '2020-04-10 23:09:24', NULL, '2020-04-10 23:23:58', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(118, 2, 'Blake', 'Rubin', 'brubin19@bellsouth.net', NULL, '$2y$10$nOmTGvEf7dtiL3f4Rt9BbuesKAnHV5No/pbFKvpTioamHnn3KjG0q', NULL, '(954) 604-8652', '(954) 604-8652', 'Mobile', NULL, '', 'assets/admin/images/2114649435.jpg', 0, '', '', '', 'image', 'Authorized Reseller', 'Beyondant', 'Promo Code:  Rubin52', '2634 Oakbrook Drive', 'FL', 'Weston', '', '33332', 'www.beyondant.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-11 17:21:42', NULL, '2020-04-11 17:21:42', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(120, 5, 'Steven', 'Silberman', 'ssilberman2012@gmail.com', NULL, '$2y$10$mYcqnDT4nPCwnnTIGLC3muduvComsAUrOmglcBrogYjnp5yjhsjRK', NULL, '', '(954) 529-5420', 'Mobile', NULL, 'assets/admin/images/2104600993.jpeg', 'assets/admin/images/996398315.png', 0, '', '', '', 'image', 'CEO', 'Gotta Catch Jamaal LLC', 'e-commerce POD clothing, handmade artwork, cryptocurrency, freelance journalism', '600, Uno Lago Drive', 'FL', 'Juno Beach', '', '33408', 'https://www.etsy.com/shop/TrndyGrphcTz', 0, 'Website', 'www.linkedin.com/in/stevensilberman', 0, '@stevesemojishirts', 0, 'Steve’s Emoji Shirts', 0, 1, '2020-04-16 10:44:55', NULL, '2020-04-16 10:44:55', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(124, 5, 'Donna', 'Cameron', 'westsidemisfits1@gmail.com', NULL, '$2y$10$jJwWbWH2c9GkGgIcSGha4ecb42Y3gdeQEwo0oPAede0Gu7pZq/Wdq', NULL, '(404) 438-0515', '(678) 999-6306', 'Office Number', 'CoOwner', 'assets/admin/images/1899863120.jpeg', 'assets/admin/images/2023342396.jpeg', 0, '', '', '', 'image', 'Co-Owner', 'Misfits Radio', 'Internet Radio Station', '1780 Childress Drive SW', 'Georgia', 'Atlanta', '', '30311', 'MisfitsMediaGroup.net', 1, '', '', 0, 'http://www.instagram.com/misfits_radio/', 0, 'https://www.facebook.com/MisfitsMediaGroup/', 0, 1, '2020-04-18 01:48:33', NULL, '2020-04-18 01:57:16', NULL, 'https://./vm.tiktok.com/WVMsK1/', 0, 0, 0, 'company', NULL, 1),
(125, 5, 'Cartier', 'Fitch', 'ciss_by_fitch@yahoo.com', NULL, '$2y$10$zQAUnqwX86uphkdusN7vw.KEF4HNEYD1MMXoD9Wlbbz.mr5OGLphC', NULL, '(234) 205-8501', '(234) 716-2466', 'Mobile', 'Cosmetics', 'assets/admin/images/1591880400.jpeg', 'assets/admin/images/525910129.jpeg', 0, '', '', '', 'image', 'Ms', 'Ciss By Fitch Cosmetics', 'Cosmetics', '220 Elizabeth pkwy', 'Oh', 'Akron', '', '44304', 'Don’t have one yet', 0, 'Address', '', 0, 'Https://www.instagram.com/ciss_by_fitch', 0, 'https://www.facebook.com/Cissbyfitch', 0, 1, '2020-04-18 15:40:53', NULL, '2020-04-18 15:43:11', NULL, '', 0, 0, 0, 'company', NULL, 1),
(126, 2, 'Cartier', 'Fitch', 'fitch_cartier@yahoo.com', NULL, '$2y$10$idM7iUolBhN6tAiVA/W4vOn8hmCO9VtmDEKJB17bULY/aKQ1nuPqi', NULL, '2342058501', '2342058501', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Owner', '', '', 'Akron oh', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-18 15:42:00', NULL, '2020-04-18 15:42:00', NULL, NULL, 0, 125, 0, 'personal', NULL, 1),
(127, 2, 'Joe', 'Sample', 'JSample@Sample.com', NULL, '$2y$10$PO/foup5obR7wssssVv1MOtE.X4dvUaK1RPGfOzTY/aUaOxVX0Gm2', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-18 17:57:35', NULL, '2020-04-18 17:57:35', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(133, 2, 'Marc', 'Rubin', 'MRubin@Beyondant.com', NULL, '$2y$10$OuNhwzyI56mUl8.7/s2DQOCPQ5asvfTRXNzUmzgdHMGTjCkvykUka', NULL, '(954) 361-0699', '(954) 609-8428', 'Mobile', NULL, 'assets/admin/images/1921481086.png', 'assets/admin/images/2105543129.png', 0, '', '', '', 'image', 'CEO/Founder', 'Beyondant', 'Technology', '342 East 53 St. #4EF', 'NY', 'New York', '', '10022', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-19 16:11:44', NULL, '2020-05-09 01:06:09', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(134, 2, 'Marc', 'Sussman', 'MSussman@Beyondant.com', NULL, '$2y$10$yHGPmLEA2c6td.bMdVPSGu.d6Svh8rJUCVSQ2W/Cvs4LO3GPcs0pO', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-19 16:13:25', NULL, '2020-04-19 16:13:25', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(135, 2, 'Ben', 'Boulet', 'ben@b-boulet.com', NULL, '$2y$10$P3sFiyfZx85u/ifbBKZNc.YQvvFM8QeUUcF7F7cQSFfy9TbD.Vdmy', NULL, '', '(954) 815-5678', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'President', 'QuestComm Inc.', 'Wireless Communications', 'PO Box 590098', 'Fl', 'Tamarac', '', '33359', '', 0, '', 'https://www.linkedin.com/in/ben-boulet-56b34511/', 1, '', 0, '', 0, 1, '2020-04-19 16:14:26', NULL, '2020-04-19 16:14:26', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(136, 2, 'Dustin', 'Callender', 'dcsportz9@gmail.com', NULL, '$2y$10$1He1PpOCd1YreVCu7t9HiuA4crqYPJLBFG3ey/unv9WU4FYNToTmS', NULL, '', '(631) 747-5976', 'Mobile', NULL, 'assets/admin/images/1829344983.png', 'assets/admin/images/307989353.png', 0, '', '', '', 'image', 'Owner', 'DC Sports Apparel', 'Clothing Brand', '', '', '', '', '', 'https://www.teamdcsportsapparel.com/', 1, 'Website', '', 0, '@teamdcsports_apparel', 0, 'Team DC Sports', 0, 1, '2020-04-19 18:50:25', NULL, '2020-04-27 22:23:09', NULL, '', 0, 0, 0, 'company', NULL, 1),
(138, 5, 'Jeffrey', 'Lewis', 'cornercutsmobile@gmail.com', NULL, '$2y$10$eKP0gGxRRRYJHnlwEAoVrOOv8fjNeYbgWB3rjgyTmSMggWPHiqAwW', '0evVzsVY618Tntm6BpXQ4Dh1CCvq7uluDvYfVsUOOhqsh0Ohsq2cI9yVUutQ', '561-789-CUTS', '561-789-CUTS', 'Mobile', 'Master Barber', 'assets/admin/images/1278117900.jpg', 'assets/admin/images/19383028.jpg', 0, '', '', '', 'image', '', 'Corner Cuts Mobile', 'Mobile Barber: I come to you depending on your location and prices are subject to change..., From Port Saint Lucie / Lake Worth, Florida', '', 'Florida', 'From Port Saint Lucie / Lake Worth', '', '', 'Cornercutsmobile.com', 0, '', '', 0, 'https://www.instagram.com/cornercutsmobile/', 1, '', 0, 1, '2020-04-19 20:11:50', NULL, '2020-05-27 04:56:37', NULL, '', 0, 0, 0, 'company', NULL, 1),
(140, 5, 'Robert', 'Henry', 'AnisupeClothing@gmail.com', NULL, '$2y$10$OuAWd.JF6VOTv.FzXiMH5.EUzjA5xcZKhhcfwpEPT.LVtMkhDUyFa', 'l69SPIbcbOiVA4DZDNATol8TA62a9jNhsZX8NrwFHCmI5qbOj6763gYyBICd', '3476409000', '', '', 'CEO', NULL, 'assets/admin/images/728988925.jpeg', 0, '', '', '', 'image', '', 'Anisupe Clothing', 'Multicultural urban clothing brand', '', '', '', '', '11207', 'https://www.anisupeclothingofficial.com/', 1, '', '', 0, 'https://www.instagram.com/anisupeclothingofficial/', 0, 'Anisupe Clothing', 0, 1, '2020-04-19 20:44:37', NULL, '2020-04-26 01:05:28', NULL, '', 0, 0, 0, 'company', NULL, 1),
(143, 5, 'Travis', 'O\'Neal', 'travis.oneal@christfellowship.church', NULL, '$2y$10$SxMFnHnScshqDqY4rKV5L.L.YSGn2PvK2TgFF3lfmEKPXaoDFiDky', NULL, '772-285-3721', '', '', 'Campus Pastor', NULL, 'assets/admin/images/1265084668.JPG', 0, '', '', '', 'image', '', 'Christ Fellowship', 'Non-denominational church', '10250 SW Village Pkwy', 'FL', 'Port St. Lucie', '', '34987', 'www.christfellowship.church', 0, '', '', 0, '@cf.psl', 0, 'https://www.facebook.com/CFPSL', 1, 1, '2020-04-20 12:58:13', NULL, '2020-04-21 20:21:05', NULL, '', 0, 0, 0, 'company', NULL, 1),
(144, 5, 'Rakhshan', 'Cain', 'rakhshan.cain@gmail.com', NULL, '$2y$10$jApLXAJfmmd3yt7GwSFadenSJj.sAZZA0LBajcdM1/UqfYF7V5pQG', NULL, '5612758195', '5612758195', 'Mobile', 'Pastor', NULL, 'assets/admin/images/1436866107.jpeg', 0, '', '', '', 'image', '', 'Expansion Church', 'Church', '2883 SW Cape Breton Dr.', 'Florida', 'Port Saint Lucie', '', '34953', 'https://www.expansion.church/', 1, '', '', 0, 'https://Weareexpansionchurch', 0, 'https://Weareexpansionchurch', 0, 1, '2020-04-20 12:59:19', NULL, '2020-05-29 00:10:33', NULL, '', 0, 0, 0, 'company', NULL, 1),
(145, 2, 'Trad', 'Hamdan', 'thamdan@quest-comm.com', NULL, '$2y$10$lvH4npDMYn6Cyn3W1MAqTOOJuDu6E2OTkz4UMXzdYdExnCTX/hsou', NULL, '(954) 554-0503', '(954) 554-0503', 'Mobile', NULL, 'assets/admin/images/123133691.png', 'assets/admin/images/648102158.png', 0, '', '', '', 'image', 'General Manager', 'QuestComm Management Inc', 'Metro by T-mobile', 'PO Box 590098', 'FL', 'Tamarac', '', '33359', '', 0, '', 'https://www.linkedin.com/in/trad-hamdan-260546164/', 0, '', 0, '', 0, 1, '2020-04-21 16:09:19', NULL, '2020-04-21 16:19:56', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(147, 5, 'Patti', 'Giunta', 'pgiunta@angpools.com', NULL, '$2y$10$SMpq0tgMLR8XXnD0cZImXuNu/HKTVwE.8v/5CvTFAx8CGVtOjhjFW', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', 'A&G Concrete Pools, Inc.', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:35:51', NULL, '2020-04-21 23:35:51', NULL, NULL, 0, 0, 0, 'company', NULL, 1);
INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `cover_video`, `cover_slideshow`, `cover_embed`, `cover_selection`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `parent_id`, `overridden_profile`, `acc_type`, `reseller_code`, `subscription_status`) VALUES
(148, 2, 'Art', 'Allen', 'aallen@angpools.com', NULL, '$2y$10$Q5GDa.RNXTxR92tnO9RwEe0hEbteDc5z2FcJuaAAkgTIj7LdqPhva', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Owner', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:36:58', NULL, '2020-04-21 23:36:58', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(149, 2, 'Travis Leonard', 'Leonard', 'tleonard@angpools.com', NULL, '$2y$10$QKop0WLmbKp7La7wcsUT0OQK/1/x6SZU0Hzw4bVIKdNZb/dPx4N.O', 'Zb4RnzWwJivUvlWyWWOIEA20ySGCv6hl1Bz2Z2BnBMMtwoZ0G0wNkknRIkpw', '(772) 878-7752 ___', '(772) 260-2206', 'Mobile', NULL, 'assets/admin/images/695250649.png', 'assets/admin/images/482079205.png', 0, '', '', '', 'image', 'CEO / COO', 'A&G Concrete Pools Inc.', 'A&G Concrete Pools Inc Specializes in Custom Swimming Pools and Spas', '8880 Glades Cutoff Road', 'Florida', 'Port St. Lucie', '', '34986', 'www.angpools.com', 0, 'Website', 'linkedin.com/in/travis-leonard-4046859', 0, '', 0, '', 0, 1, '2020-04-21 23:38:05', NULL, '2020-05-11 19:02:45', NULL, '', 0, 147, 0, 'personal', NULL, 1),
(150, 2, 'Bobby', 'Austin', 'baustin@angpools.com', NULL, '$2y$10$IzIjvh49pppJqHFU8vO3xuK4K7cZrGT8YnrtH2QzJDitqO5iKuAW6', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:39:11', NULL, '2020-04-21 23:39:11', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(151, 2, 'Jason', 'Baran', 'jbaran@angpools.com', NULL, '$2y$10$vF8y.7CBoI.diXLQO5BwDOb8Fz.XjNUlnDf5bNMtB11Wb6DYkzmh2', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:39:45', NULL, '2020-04-21 23:39:45', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(152, 2, 'Dave', 'Curland', 'dcurland@angpools.com', NULL, '$2y$10$65zMIp9ECOUcvH0a0mz9YOCr0YvQ4CPMtHgzRboJy20/6d4lnD9tq', NULL, '(772) 878-7752', '(561) 756-4105', 'Mobile', NULL, 'assets/admin/images/4781311.png', 'assets/admin/images/1201071745.png', 0, '', '', '', 'image', 'Professional Designer', 'A&G Concrete Pools', 'Simple to Sensational', '8880 Glades Cut-off Road', 'Florida', 'Port Saint Lucie', '', '34986', 'Www.angpools.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-21 23:40:13', NULL, '2020-04-29 02:08:57', NULL, '', 0, 147, 0, 'personal', NULL, 1),
(153, 2, 'Frank', 'DelRocco', 'frankagpools@hotmail.com', NULL, '$2y$10$e0t.5wqST.OUzXP2V2Ejh.GVNlWdLF1R8xcThSHCZi5CyOE6bt9/G', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Sales & Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:41:31', NULL, '2020-04-21 23:41:31', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(154, 2, 'Lillie', 'Shepherd', 'lshepherd@angpools.com', NULL, '$2y$10$q8qgtfF8zehiVv8u9088H.Dm2FrvwcfWOHpPWF19pjcCPFM8EctPO', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Purchasing Director', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:42:17', NULL, '2020-04-21 23:42:17', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(155, 2, 'DJ', 'Hahn', 'dhahn@angpools.com', NULL, '$2y$10$I07EVheaeYfsQdewmWTRquluHWp9MUhsWvDCakKMo7VD/i3MwSN1a', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Service Coordinator', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:43:05', NULL, '2020-04-21 23:43:05', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(156, 2, 'Jonathan', 'Hoyt', 'jhoyt@angpools.com', NULL, '$2y$10$iGh.3rLRRpxHxZ23rs2bAOcSdmu.YKd/io0fD3axt.K6a1g8xIFuO', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Service Manager', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:44:11', NULL, '2020-04-21 23:44:11', NULL, NULL, 0, 147, 0, 'personal', NULL, 1),
(157, 2, 'Joe', 'Safieddine', 'ysafieddine@hotmail.com', NULL, '$2y$10$msprcfI9AXSzJEC0Itb2yelEqbwZVL0COqGt/AuKfUvpEDEjCunFy', NULL, '', '(097) 977-9779', 'Mobile', NULL, 'assets/admin/images/821078598.png', '', 0, '', '', '', 'image', 'CEO', 'Integrated Aluminum Limited', 'Recycling', 'Plot 5110, Lumumba Road', 'Lusaka', 'Lusaka', '', '30973', '', 0, 'Address', 'https://www.linkedin.com/in/joe-safieddine-88961072/', 1, '', 0, '', 0, 1, '2020-04-25 20:42:55', NULL, '2020-04-25 20:45:55', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(158, 5, 'Rabih', 'Moussa', 'rabih@farama.com.tr', NULL, '$2y$10$QdWWsscFBOT5mNNcdWfZfe4CIyn2AhekZBv6ZfhbzLJ070pmxkACO', NULL, '(905) 446-2042 52_', '(905) 446-2042', 'Mobile', NULL, 'assets/admin/images/592099661.JPG', 'assets/admin/images/2023770797.jpeg', 0, '', '', '', 'image', 'Mr', 'FARAMA Export and Import', 'Export of all Turkish Products to the Middle East Region and Africa', 'Nurol Park Offices, Basin Ekspres, Bahar Cd. Bagcilar,', 'Turkey', 'Istanbul', '', '31212', 'www.farama.com.tr', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-25 22:00:58', NULL, '2020-04-25 22:00:58', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(162, 2, 'Rabih', 'Moussa', 'rabih@rabihmoussa.com', NULL, '$2y$10$03J0KxWDQmDUURfv6aZs9edj8lXKQ2oyAlFVGG4j1NZj.fSi/zaUa', NULL, '(905) 446-2042 52_', '(905) 446-2042', 'Phone', NULL, 'assets/admin/images/792722942.jpg', 'assets/admin/images/516620267.jpg', 0, '', '', '', 'image', 'Mr', 'FARAMA Export and Import', 'Export of all Turkish Products to the Middle East Region and Africa', 'Nurol Park Offices, Basin Ekspres, Bahar Cd. Bagcilar,', 'Turkey', 'Istanbul', '', '31212', 'www.farama.com.tr', 0, 'Address', 'https://www.linkedin.com/in/rabih-moussa-29381212/', 1, 'https://www.instagram.com/rabihmoussa/', 1, '', 0, 1, '2020-04-26 07:59:54', NULL, '2020-04-26 07:59:54', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(163, 2, 'dsfa', 'sdf', 'diana123@gmail.com', NULL, '$2y$10$1A2.bOWuZSJZBg2j2ziN6Oty0eVOj8lyNfrraiipUJ7d8.6.JbgNi', NULL, '6545635465656', '6545635465656', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Faizan Post', '', '', 'gdsfgdgdfg', '', '', '', '', 'https://www.youtube.com/', 0, '', 'https://www.linkedin.com/in/ronald-leger-00111344?trk=people-guest_people_search-card', 1, NULL, 0, NULL, 0, 1, '2020-04-29 19:07:50', NULL, '2020-06-05 17:54:12', NULL, NULL, 0, 92, 0, 'personal', NULL, 1),
(164, 7, 'Amir', 'Ali', 'alisyedaamir@yahoo.com', NULL, '$2y$10$OcrhHcIwpGciInVPgxvorOL25Dyg.neB5qmUu.V2k9Dol7MJ1LmCu', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-30 20:40:44', NULL, '2020-05-04 20:46:32', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(168, 5, 'Donna', 'Cameron', 'donnacmrn@gmail.com', NULL, '$2y$10$LWXFOZebjkELIRltgXPe2eIr8ri/EgC4lB2Ty6WiZkHMttzx0gAQy', 'FDa7FUHiWResNbcVqDHRzpjKJ5ihFOqixw2FgQ4jKLRhfkp180hydE47zrln', '4044380515', '4044380515', 'Phone', 'CEO/Co-Owner', 'assets/admin/images/2002307635.jpeg', 'assets/admin/images/595373499.jpeg', 0, '', '', '', 'image', '', 'Misfits Radio', 'Internet Radio Station', '', '', '', '', '', 'MisfitsMediaGroup.net', 0, '', '', 0, 'https://www.instagram.com/misfits_radio/', 1, 'https://www.facebook.com/MisfitsMediaGroup/', 0, 1, '2020-05-01 09:55:48', NULL, '2020-05-07 01:31:01', NULL, '', 0, 0, 0, 'company', NULL, 1),
(169, 7, 'Amir', 'Ali', 'alisyedaamisadsdadr@yahoo.com', NULL, '$2y$10$N9cnAdLZqgnBrRS1pC9TKuLtrNl7Gg3j0YWkcATyI9V7tKza8Q5WC', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-04 21:38:29', NULL, '2020-05-04 21:38:29', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(170, 2, 'Amir', 'Ali', 'alisydsfsf324234edaamir@yahoo.com', NULL, '$2y$10$IihVFlvQxw2QpZVWy6ST2OEFzOFGuHHrthMjtk34rShDnFLsve6y.', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-04 21:58:22', NULL, '2020-05-04 21:58:22', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(171, 5, 'Michelle', 'Gorden', 'michelle@michellegorden.com', NULL, '$2y$10$aa0ahKLdZpYwT0nRiO0mwOveUsYVU9gatx4ci2REqOBphJfA5wm1W', NULL, '(571) 330-4642', '(571) 330-4642', 'Mobile', NULL, 'assets/admin/images/252931470.jpg', '', 0, '', '', '', 'image', 'Realtor', 'Buy and Sell with Michelle G', 'Real Estate', '', '', '', '', '', 'www.michellegorden.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-05 18:26:55', NULL, '2020-05-05 18:28:40', NULL, '', 0, 0, 0, 'company', NULL, 1),
(173, 7, 'Javier', 'Nazario', 'jn57872002@gmail.com', NULL, '$2y$10$MZg0/Z/jJo6DfRdvB3jOC.jmEf6SDNSWG8EpdORBQurKLiTTefSRa', '28s9Sea2cQ2id3OsR4IQHCujCVOBJAl5AZKqeLcbaFQ8zU4hzFLwB99ooEgX', '', '', '', NULL, 'assets/admin/images/2098076931.png', 'assets/admin/images/1546757848.png', 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-05 20:36:03', NULL, '2020-05-09 21:20:55', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(174, 7, 'Steve', 'Dumont', 'SDumont@Geiststudios.com', NULL, '$2y$10$lYHjM3IFniEWANVqNBPgceaxsfkYYxtsQ6jUgI47qlsEchyR6Pxs.', 'SDEc7J8QkjcIqtU6Q8Ic1JSRbsWzXpCQuzHHhlm0fOQUuzUAYBfkpo3o0P1C', '2222222', '22222222', 'Phone', 'Executive', NULL, NULL, 0, 'assets/admin/videos/1728899877.mp4', '', '', 'video', '', 'QA Enterprises', 'QA', '', '', '', '', '', 'https://www.cnn.com', 0, '', 'https://www.yahoo.com', 0, '', 0, '', 0, 1, '2020-05-05 20:42:27', NULL, '2020-06-08 23:34:20', NULL, '', 0, 0, 0, 'individual', NULL, 1),
(175, 5, 'Richard', 'Desmangles', 'rich.d@2tonemediagroup.com', NULL, '$2y$10$zyAx.b1806yPpIn7RHtUb.hBO3WeX6C8eE0SJ1uXK1xHZ4HENLxa.', NULL, '3474582636', '(347) 458-2636', 'Mobile', NULL, 'assets/admin/images/341350385.JPG', 'assets/admin/images/705158916.png', 0, '', '', '', 'image', 'Digital Media Specialist / Consultant', '2TONE MEDIA & CONSULTING GROUP', 'Digital Media & IT Consultanting', '100 E. Pine St. Suite 110', 'FL', 'Orlando', '', '32801', 'www.2tonemediagroup.com', 0, 'Website', '', 0, 'https://www.instagram.com/2tonemediagroup/', 0, 'https://www.facebook.com/2tonemediagroup', 0, 1, '2020-05-05 20:52:59', NULL, '2020-05-22 15:06:29', NULL, '', 0, 0, 0, 'company', NULL, 1),
(176, 2, 'Jennifer', 'Arellano-Galvan', 'jarellano-galvin@quest-comm.com', NULL, '$2y$10$mjpiTP9V2Mh3DK85uJE6SOv5YNQdbamZN.gAUydIfGSSNK.Fv4Dpm', NULL, '(984) 200-0501', '(919) 884-5267', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'Store Manager', 'Metro By T-Mobile', 'Questcomm', '6574 Glenwood Ave', 'North Carolina', 'Raleigh', '', '27612', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-05-06 01:35:58', NULL, '2020-05-06 01:35:58', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(177, 7, 'NATHALIA', 'SANJUAN', 'nathaliasjn@yahoo.com', NULL, '$2y$10$eW7B/swwIkeLO79pu319Kugv8lMpmeZ8Q1gE/Ws6wLhg3hHwZR/.O', NULL, '', '(954) 740-0653', 'Mobile', NULL, 'assets/admin/images/76236492.png', 'assets/admin/images/765716095.png', 0, '', '', '', 'image', 'Mrs', 'FIU', 'N/A', '12540 Vista Isles Dr Apt 1113', 'FL', 'Plantation', '', '33325', '', 0, 'Address', '', 0, '', 1, '', 1, 1, '2020-05-07 21:55:42', NULL, '2020-05-17 00:51:07', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(178, 7, 'Robert', 'Collier', 'robertcollier772@gmail.com', NULL, '$2y$10$N5DO6sDhNtkq8sDj3Hts6.ubALxWi/J64AuEwlgRoAkSaNYXcU.ka', 'eWwZ7AG5Cowha00TxGOCiv5MG3ymRZQZucLNE8JZzE3AdfESJOFZ5Y5wIe4o', '(772) 812-2856', '(772) 812-2856', 'Mobile', NULL, 'assets/admin/images/1220771603.png', 'assets/admin/images/372221484.png', 0, '', '', '', 'image', 'Mr', 'RCollier Financial', 'Financial Literacy/Credit Repair', '3800 SW Hale ST', 'FL', 'Port Saint Lucie', '', '34953', 'www.ucespp.net/RCollier', 0, 'Website', '', 0, 'rcollierfinancial', 0, '', 0, 1, '2020-05-08 02:18:17', NULL, '2020-05-21 16:37:05', NULL, '', 0, 0, 0, 'individual', NULL, 1),
(179, 2, 'Martin', 'Chernacov', 'mch@4compuservice.com', NULL, '$2y$10$Jm4hPMrDcj39Q/pBgiGjLulMbV15MxrxQPU0lXhjMEXqvgQsYNKda', NULL, '(954) 448-5646', '(954) 448-5646', 'Mobile', NULL, 'assets/admin/images/1592759934.png', 'assets/admin/images/703822233.png', 0, '', '', '', 'image', 'Owner', 'Chernacov', 'Consulting/Board Advisor', '2681 N Flamingo Rd Apt 2501', 'FL', 'Sunrise', '', '33323', 'https://beyondant.com/public/profile/179', 1, 'Website', 'https://www.linkedin.com/in/martin-chernacov-92146212/', 1, '', 0, '', 0, 1, '2020-05-08 13:02:00', NULL, '2020-05-19 17:19:46', NULL, '', 0, 0, 0, 'personal', NULL, 1),
(180, 2, 'Michael', 'Feinberg', 'finergrafx@mac.com', NULL, '$2y$10$R9e8tSAL5wN2bCDdNzvD5.QPs9UcixBmdFIXbLXvKrUoBtji9QOiC', NULL, '(718) 795-3737', '(718) 795-3737', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Finer Grafx', 'Printing', '5196 Pelican Cove Drive', 'Florida', 'Boynton Beach', '', '33437', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-08 14:34:28', NULL, '2020-05-08 14:34:28', NULL, NULL, 0, 0, 0, 'personal', NULL, 1),
(181, 5, 'Joshua', 'jacques', 'j@jadeimedia.com', NULL, '$2y$10$k1NV2gEkFJv.URbMoRRVvOr1PemKi5zIlSCaJLDcgnW3fmWkxEF3a', NULL, '(631) 834-2917', '(631) 834-2917', 'Mobile', 'j@jadeimedia.com', 'assets/admin/images/1936523146.jpg', '', 0, '', '', '', 'image', 'Founder', 'Jadei Media LLC', 'A Content Creation Company', '256 Knickerbocker Ave', 'NY', 'Bohemia', '', '11716', 'www.jadeimedia.com', 0, '', '', 0, 'https://www.instagram.com/joshuajacquess/', 0, '', 0, 1, '2020-05-08 20:23:23', NULL, '2020-05-08 20:43:41', NULL, '', 0, 0, 0, 'company', NULL, 1),
(182, 2, 'Joshua', 'Jacques', 'Josh@WTPClean.com', NULL, '$2y$10$NXl3R3rfHMOp.03Vso41k.Qgl7E2eEtdhUbcEZK2VRdY134sJDwBu', NULL, '6318342917', '6318342917', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Founder', '', '', 'New york', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-08 20:29:10', NULL, '2020-05-08 20:29:10', NULL, NULL, 0, 181, 0, 'personal', NULL, 1),
(183, 2, 'Daniyal', 'Ali', 'daniyal_ali@gmail.com', NULL, '$2y$10$YxSrPVzQXSDdVrxGXD9OHucr.9.M/ktkq8kFIvwIgENyEu3BQMGXy', NULL, '(234) 324-3243', '(234) 324-3243', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'rrr', 'dsfddsf', 'dsfdsfdsf', 'sdfasdfasfdsaf', 'ewrwer', 'werewrwe', 'wrewrwe', '32423432', 'https://www.youtube.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-09 16:25:56', NULL, '2020-05-09 16:25:56', NULL, NULL, 0, 0, 0, 'personal', '3423423432', 1),
(184, 2, 'Kurt', 'Eisinger', 'Eisinger.regelgroup@gmail.com', NULL, '$2y$10$w9q6HpGzKTiZj0HzKoilUuV6VlxEqj23t2AUEImaF1XthC9f9.x8m', NULL, '(973) 625-7519', '(973) 625-7519', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Senior Executive', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-09 19:12:39', NULL, '2020-06-02 00:48:13', NULL, NULL, 0, 108, 1, 'personal', NULL, 1),
(185, 7, 'Kurt', 'Eisinger', 'eisingerk2@gmail.com', NULL, '$2y$10$3adA9Y/3t7EXuzBohIu5f.SzT0w6FfgZU35Z5fPweVOXMtAWmQ2hq', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-09 19:16:57', NULL, '2020-05-09 19:16:57', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(186, 7, 'Drew', 'Humann', 'drew@sabatosells.com', NULL, '$2y$10$yykGTFa3qxDl953jeC5c7OrmG8LGhuV/AdHe9dlFQ08.e1yN3CFeq', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-11 02:55:06', NULL, '2020-05-11 02:55:06', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(187, 5, 'Amir', 'Erum', 'aamir4.ali@technado.co', NULL, '$2y$10$mRsMwygK8c5Q/6LHNdNnneD.Qu79I6DC/2cF/24jGsCq6xVNswsY6', NULL, '(324) 324-3242', '(234) 234-2342', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'sdfdsf', 'gfdg', 'dfgsdfgdsfg', 'gdfgdsg', 'sdfdsaf', 'fsdfasdf', 'sdfasdf', '34234', 'https://www.youtube.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-12 18:45:20', NULL, '2020-05-12 18:45:20', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(188, 5, 'Michael', 'A.Ling', 'allwiredup4u41@gmail.com', NULL, '$2y$10$HejWtTe2HHvndP8R3UKsEeYKTwOPQOwA4fjttebN1P3LwrKlckilu', NULL, '(561) 713-0461', '(561) 713-0461', 'Office Number', 'Electrician', 'assets/admin/images/1299669175.jpg', '', 0, '', '', '', 'image', 'Owner', 'All Wired Up 4U2', 'Electrician', '', 'Fl', 'West Palm Beach', '', '33407', 'none', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-13 00:36:55', NULL, '2020-05-13 00:42:40', NULL, '', 0, 0, 0, 'company', NULL, 1),
(189, 7, 'Marc', 'Rubin', 'marc.rubin@nsmg.com', NULL, '$2y$10$V1yOdZDSCu.4qsT5XyeRSONF.MFu6UsCmSEDCK4dHrbNgHRT3ftF2', NULL, '(954) 609-8428', '(954) 609-8428', 'Mobile', 'Funeral Director', 'assets/admin/images/1149278051.png', 'assets/admin/images/1514254568.png', 0, '', '', '', 'image', 'Senior Director of Business Development', 'Eternal Light/Beth David/Levitt-Weinstein/Beth Israel', 'Cemetery and Funeral', '11520 State Road 7', 'FL', 'Boynton Beach', '', '33473', 'https://www.eternallightmemorialgardens.com/', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-14 00:56:02', NULL, '2020-05-24 21:52:58', NULL, '', 0, 0, 0, 'individual', NULL, 1),
(190, 2, 'Evan', 'Anderson', 'evanja@att.net', NULL, '$2y$10$B05oLBvrBA43myXRC7tZWOXINOXwy6q5D.CVAqgBADo0LvYFnmS6.', NULL, '(561) 635-3964', '(561) 635-3964', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Printer', 'Evan printing', 'Work on printer', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-14 01:18:49', NULL, '2020-05-14 01:18:49', NULL, NULL, 0, 0, 0, 'personal', 'Regel44-10', 1),
(194, 7, 'Robert', 'Collier', 'alisy234234edaamir@yahoo.com', NULL, '$2y$10$ikZNFUyjhmsQkEQ/VIhkI.YydybyClhcuuzn1cuj22nbIeDVzTE0u', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-14 18:48:55', NULL, '2020-05-14 18:48:55', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(196, 7, 'Robert', 'Ali', 'alisydsfsdfsd23123123edaamisadsdadr@yahoo.com', NULL, '$2y$10$KKT9.iC7JE7Mklx1WdW2W.pOZr/8MjJU6pEhbJlbgOqgj/D4S7MYG', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-14 18:52:07', NULL, '2020-05-14 18:52:07', NULL, NULL, 0, 0, 0, 'individual', NULL, 1),
(197, 2, 'Devin', 'Powell', 'devinpowell94@gmail.com', NULL, '$2y$10$V/nhLg3ZQc0LS4iYsy6u2u78HOk.FCuXekoKZIw5AIWG6NwgrOCY6', NULL, '(561) 319-3657', '(561) 319-3657', 'Mobile', NULL, 'assets/admin/images/1503155473.jpeg', 'assets/admin/images/1788514423.jpeg', 0, '', '', '', 'image', 'Mr', 'Devin Powell', 'Entrepreneur', '', '', '', '', '33407', '', 0, '', 'https://www.linkedin.com/in/devinkpowell?trk=people-guest_people_search-card', 0, 'youngtrece__', 0, '', 0, 1, '2020-05-15 01:36:00', NULL, '2020-05-15 01:36:00', NULL, NULL, 0, 0, 0, 'personal', 'Regel44-10', 1),
(198, 5, 'Cheryl', 'Jeter', 'universaltaxsolutionsllc@gmail.com', NULL, '$2y$10$Ds4HchejPWHLAQg7dwAqAu6EGDjYGHsPJorUqR/UqYzi8NkvA2NcG', NULL, '', '(678) 638-9583', 'Mobile', NULL, 'assets/admin/images/1859066104.jpeg', '', 0, '', '', '', 'image', 'Owner', 'Universal Accounting & Tax Solutions, LLC', 'Tax & Accountinf Services', '3716 Whitehall Dr', 'Florida', 'West Palm Beach', 'Florida', '33401', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-05-15 01:48:59', NULL, '2020-05-15 01:48:59', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(199, 5, 'Melissa', 'Dumont', 'GetMelissaNow@Gmail.com', NULL, '$2y$10$MljiWMNdLJOPfbVmLdVz9OlteoY19Y.vMmkMXRLaksfBnWpheiD6m', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', 'Dumont International LLC.', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-16 18:01:24', NULL, '2020-05-16 18:01:24', NULL, NULL, 0, 0, 0, 'company', NULL, 1),
(201, 2, 'Steve', 'Dumont', 'SDumont11@yahoo.com', NULL, '$2y$10$01EcYHzFky.PYlIckQ5jbOxGcQsvTTG8Ny4nioScHxLC/KNY.oF7e', NULL, '2222222222', '2222222222', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Professional Designer', '', '', 'New York', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-16 19:14:10', NULL, '2020-05-16 19:14:10', NULL, NULL, 0, 199, 0, 'personal', NULL, 0),
(202, 5, 'Steve', 'Dumont', 'SDumont@Beyondant.com', NULL, '$2y$10$5cec59lGKGrgYTz.4ybOcu6E5curldnFTSI0b4s45CdHJ5sz/C2CS', NULL, '800 970-5877', '9545601670', 'Phone', NULL, 'assets/admin/images/872471760.png', 'assets/admin/images/220284699.png', 0, '', '', '', 'image', '', 'Beyondant', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination. The Coronavirus has now changed the way we conduct business. Social Distancing is the new normal. Our solution is in high demand because it is easy, fast and works seamlessly with ironclad security features with just a smartphone tap on any of our devices, thereby eliminating the need for physical exchanges. Evolved from radio frequency identification (RFID) technology, our various devices and applications are reshaping our world.', '17105 Reserve CT', 'Florida', 'Southwest Ranches', '', '33331', 'www.Beyondant.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-16 22:17:46', NULL, '2020-05-17 00:34:17', NULL, '', 0, 0, 0, 'company', NULL, 0),
(203, 2, 'TODD', 'RUBIN', 'todd@toddstickets.com', NULL, '$2y$10$X4gjkWnYRvioNt0qMhIBMuVYnKXouNtbOplzq7fkbvNFcI0KfHcnK', NULL, '(786) 859-4579', '(786) 859-4579', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'RE SELLER', 'TODDS TICKETS', 'TICKET SALES', '21218 Saint Andrews Boulevard #748', 'FLORIDA', 'BOCA RATON', '', '33433', 'TODDSTICKETS.COM', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-16 22:25:19', NULL, '2020-05-16 22:25:19', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(204, 2, 'Maria', 'Pena', 'maripen301@gmail.com', NULL, '$2y$10$fsR7Jc395kr9cdjD5ZrRseOsY2NzTAxnzfWgbJZoZe6wHKXvmuyb2', NULL, '(954) 275-7904', '(954) 175-7904', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Executive Assistant', 'MP', 'Administration', '15101 Norfolk Lane', 'FL', 'Davie', '', '33331', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-16 23:42:11', NULL, '2020-05-16 23:42:11', NULL, NULL, 0, 0, 0, 'personal', 'Pena04', 0),
(205, 2, 'Nathalia', 'Sanjuan', 'nathaliasjn2020@gmail.com', NULL, '$2y$10$CWgRnlRST4ZvhDm7ZqyVReRB576dpbT73nrOrM4mBW3Xihgw00XXO', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Authorized Reseller', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-16 23:51:02', NULL, '2020-05-16 23:51:02', NULL, NULL, 0, 202, 0, 'personal', NULL, 0),
(206, 5, 'Matias', 'Sprindys', 'blastcoatings@aol.com', NULL, '$2y$10$NHzhOqphHvlgXHJgesO/3exAadH5Ha6bFRPiqNnQ8ssbF9GUlr8x.', NULL, '(561) 800-3004', '(561) 800-3004', 'Phone', 'Power coating', 'assets/admin/images/1612718262.jpeg', 'assets/admin/images/577748236.jpeg', 0, '', '', '', 'image', 'Owner', 'Blast Coatings Powdercoating,LLC', 'Powder coating', '1847 Aragon Ave Bay #2', 'Florida', 'Lake Worth', '', '33461', 'https://www.instagram.com/blast_coatings/', 0, 'Address', '', 0, 'https://www.instagram.com/blast_coatings/', 1, 'https://m.facebook.com/Blastcoatings/?ref=bookmarks', 0, 1, '2020-05-17 01:47:18', NULL, '2020-05-17 02:07:41', NULL, '', 0, 0, 0, 'company', 'regel44-10', 0),
(207, 2, 'Michele', 'Chandler', 'mrc.18@comcast.net', NULL, '$2y$10$ETjT66y2zlQ4ynGYV647cOR5IVMB3mx0AWhfBrRgiNLY07Fut5Y76', NULL, '954-494-2675', '954-494-2675', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Business Owner', '', '', 'Florida', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-17 02:07:31', NULL, '2020-05-17 02:07:31', NULL, NULL, 0, 202, 0, 'personal', NULL, 0),
(208, 5, 'Roderick', 'Dames', 'roderickstreeservice@yahoo.com', NULL, '$2y$10$yH33MbQifmuqhDv45Sd3E.f00/3t3qX6nDDZEG7Wkd6hhmBU5OLgy', NULL, '(561) 262-0184 ___', '(561) 262-0184', 'Mobile', NULL, 'assets/admin/images/1506783960.png', 'assets/admin/images/1341131442.png', 0, '', '', '', 'image', 'Owner', 'Roderick\'s Tree Service, LLC', 'Tree Service', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-17 02:48:10', NULL, '2020-05-31 20:52:24', NULL, NULL, 0, 0, 0, 'company', 'regel44-10', 0),
(209, 2, 'Debra', 'Layne', 'debbie0706@bellsouth.net', NULL, '$2y$10$mSeW00kQLdyv.L5BpHHh3.DT1KE/xdwTnIoaChAXmzBr355m9RZmS', NULL, '(954) 258-7026', '(954) 258-7026', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Ms', 'Debbie', 'personal', '', 'Florida', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-17 15:45:10', NULL, '2020-05-17 15:45:10', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(210, 5, 'Debbie', 'Layne', 'Debbie.Layne@nsmg.com', NULL, '$2y$10$ylfrxDyY8pQ8TE01C6vn8OZsAoy9FhIBQBcacjdnDLWjzjRm90HKy', NULL, '(954) 258-7026', '(954) 258-7026', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Advisor', 'Eternal Light / Beth Israel', 'Pre-arrangement Specialist', '11520 State Rd 7', 'Florida', 'Boynton Beach', '', '33473', 'www.Eternallightmemorialgardens.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-17 15:57:10', NULL, '2020-05-17 15:57:10', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(211, 5, 'Jose', 'Gonzalez', 'jose@hometownfin.com', NULL, '$2y$10$B5sQ87hZ8ReRYF1XywWDWeIa137AqS7VbZxKU80gEMf8sVI6qpFFm', NULL, '(772) 252-6724', '(772) 332-1144', 'Mobile', 'Loan Originator', 'assets/admin/images/2134296374.png', 'assets/admin/images/621123803.jpeg', 0, '', '', '', 'image', 'Mortgage Loan Originator', 'Hometown Financial Services', 'Mortgage Brokers', '1186 SW Commargo St', 'Florida', 'Port St Lucie', '', '34953', 'https://www.hometownfin.com/mortgage-loan-originator-jg/', 1, 'Website', 'https://www.linkedin.com/in/mortgagesmadesimple', 0, 'https://www.instagram.com/mortgages.made.simple', 0, 'https://www.facebook.com/MakeMortgagesSimple', 0, 1, '2020-05-17 16:47:13', NULL, '2020-06-01 18:15:42', NULL, '', 0, 0, 0, 'company', 'Regel44-10', 0),
(212, 2, 'Rodger', 'Strachan', 'rodgerstrachan@icloud.com', NULL, '$2y$10$V7Hmy.0i908xK7jxKDJ1GOb4n.or5VEzMYRvd8utzl6xduhhz.NHC', NULL, '(954) 554-2123', '(954) 554-2123', 'Phone', NULL, 'assets/admin/images/1279931289.jpeg', '', 0, '', '', '', 'image', 'Authorized Reseller', 'Strachan & Associates', 'Sales and Marketing', '1155 NW 122ND TER', 'FL', 'Pembroke Pines', '', '33026', '', 0, 'Website', '', 0, '', 0, 'www.facebook.com/rodgerstrachan', 1, 1, '2020-05-18 14:29:04', NULL, '2020-05-18 14:29:04', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(213, 5, 'Jeff', 'Auberson', 'jeff.a@timiti.com', NULL, '$2y$10$MGgmuoAVV2E/OvJJaynCAOM53fCGzOE4cZWOeq1F81Ncav9MhixnO', NULL, '3057092147', '(305) 709-2147', 'Office Number', 'Director', 'assets/admin/images/1624580678.jpg', 'assets/admin/images/2077079396.png', 0, '', '', '', 'image', 'Mr', 'TIMITI USA INC', 'We are the new frontier in multimedia content sharing! Produce your videos, upload and share them with your audience with no third party advertising.', '221 West Hallandale Beach Boulevard', 'Florida', 'Hallandale Beach', '', '33009', 'https://timiti.com/', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-18 19:41:18', NULL, '2020-06-02 16:56:57', NULL, '', 0, 0, 0, 'company', NULL, 0),
(214, 5, 'Dereck', 'Sergeant', 'dereckser@gmail.com', NULL, '$2y$10$NXznW/iPWO2XqYM3PoQ/JuPeOT0oQ5XHwA2N4XtCNu1goOlZ9peTS', NULL, '(561) 863-1481', '(561) 635-9645', 'Mobile', NULL, 'assets/admin/images/355370945.jpeg', 'assets/admin/images/317366787.jpeg', 0, '', '', '', 'image', 'Owner', 'Auto Warehouse of South Florida', 'Full Service Auto Body', '5516 Greenwood Ave', 'Florida', 'West Palm Beach', '', '33407', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-05-19 01:55:36', NULL, '2020-05-19 01:55:36', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(216, 7, 'Jeffrey', 'Lewis', 'wekynectus@gmail.com', NULL, '$2y$10$zYYmQPo.6H4doLriLXti2uha3aWzBOXvZXnjSK4wM2IqZsv8VeSSq', NULL, '561-870-0881', '561-870-0881', 'Office Number', NULL, 'assets/admin/images/1820306850.jpeg', 'assets/admin/images/1189651917.png', 0, '', '', '', 'image', '', 'Kynect', 'Networking', '', '', '', '', '', 'https://jlewis.wekynect.com/', 1, '', '', 0, '', 0, '', 0, 1, '2020-05-20 13:54:13', NULL, '2020-05-22 05:20:01', NULL, '', 0, 0, 0, 'individual', NULL, 0),
(217, 2, 'Jeffrey', 'Lewis', 'jlregelgroup@gmail.com', NULL, '$2y$10$nSP.rdVN2PdkpqKlhoEKruKvKjRXvCIB1xWtuhxJXv6CPraGw1eei', 'EciJafjLtzbU5MUjS5MT3VC9FaoP5s6umSCOD6B11TXS8DkGPi6gED6LEQTx', '(561) 440-3848 ___', '(561) 440-3848', 'Mobile', NULL, 'assets/admin/images/1425602119.png', NULL, 0, '', '', '', 'image', 'Senior Executive', 'The Regel Group', 'Authorized Reseller For Beyondant', '', 'FL', 'Port Saint Lucie', '', '', 'https://beyondant-products.com/31872254090/checkouts/2dbaf1adfeecd9ef47c9100cb0400c1a', 1, 'Website', NULL, 0, NULL, 0, NULL, 0, 1, '2020-05-20 14:11:27', NULL, '2020-06-03 03:03:35', NULL, NULL, 0, 108, 0, 'personal', NULL, 0),
(218, 2, 'Ashley', 'Raeford', 'ashley.regelgroup@gmail.com', NULL, '$2y$10$Qp9vM1KVFifeDM8eoVoYmen7kWrakeejHWwhnhq3.J62CO1fUTnL2', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-20 16:24:49', NULL, '2020-06-02 00:48:13', NULL, NULL, 0, 108, 1, 'personal', NULL, 0),
(219, 7, 'Ashley', 'Raeford', 'Ashley.raeford.ar@gmail.com', NULL, '$2y$10$wXKJelUt.B1Gk2ku69Idnu7Sq.Bgv25fgQo4ZX60OrkaLD62TYKlq', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-20 18:46:16', NULL, '2020-05-20 18:46:16', NULL, NULL, 0, 0, 0, 'individual', NULL, 0),
(220, 5, 'Johnny', 'Volcy', 'Johnny@volcybiz.com', NULL, '$2y$10$9NvwybGosiv8tPGBBQqGfOeRw5/dkzPMKdm29CnnST51xpiFlyLlK', NULL, '(772) 888-5858', '(772) 888-5858', 'Phone', NULL, 'assets/admin/images/1407294719.png', '', 0, '', '', '', 'image', 'Solution Specialist', 'Volcy Biz, LLC', 'Sales and marketing company providing you with the tools and solutions needed to succeed!', '173 SE Calmoso Drive', 'FL', 'Port Saint Lucie', '', '34983', 'www.volcybiz.com', 0, '', '', 0, 'https://www.instagram.com/johnny_2live/?hl=en', 0, '', 0, 1, '2020-05-21 04:20:44', NULL, '2020-05-21 04:42:38', NULL, '', 0, 0, 0, 'company', NULL, 0),
(221, 2, 'Vida', 'Volcy', 'Vida@volcybiz.com', NULL, '$2y$10$4GLBFfc7LGvFi.xshvKCD.GWQPP3VEfN0Wff1g6yV/EMThDzrf4xi', NULL, '7726183302', '7726183302', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Operations Manager', '', '', 'Port Saint Lucie', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-21 04:22:41', NULL, '2020-05-21 04:22:41', NULL, NULL, 0, 220, 0, 'personal', NULL, 0),
(222, 5, 'Jeffrey', 'Lewis', 'jlbeyondant@gmail.com', NULL, '$2y$10$u8r4.aAvBirsF9.IPYMrxOI7XVRTeBCfldDWwgM9qKGOOOMx.SWpC', NULL, '561-870-0881', '561-870-0881', 'Phone', NULL, 'assets/admin/images/1540796560.png', '', 0, '', '', '', 'image', 'Senior Executive', 'The Regel Group', 'Marketing', '', '', '', '', '', 'https://beyondant-products.com/products/digital-business-card', 1, '', '', 0, '', 0, '', 0, 1, '2020-05-22 05:28:50', NULL, '2020-05-22 05:45:53', NULL, '', 0, 0, 0, 'company', 'Regel44-10', 0),
(223, 2, 'Mark', 'Orlinsky', 'mark.orlinsky@nsmg.com', NULL, '$2y$10$kdV3NT0kf..WUkoqlvdS9OJ6XNq9Sv9G3FXxadILMiJfi5CVPibae', NULL, '(954) 600-4460 ___', '(954) 600-4460', 'Mobile', NULL, 'assets/admin/images/1393916515.png', 'assets/admin/images/1371607723.png', 0, '', '', '', 'image', 'Family Service Advisor', 'Eternal Light Memorial Gardens/ Beth Israel Chapels', 'Cemetery and Funeral Planning', '11115 Jog Road', 'FL', 'Boynton Beach', '', '33437', '', 0, '', 'www.linkedin.com/in/markorlinsky', 0, '', 0, '', 0, 1, '2020-05-24 13:46:40', NULL, '2020-05-24 20:19:47', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(224, 7, 'Kareem', 'Rogers', 'kareemorogers@gmail.com', NULL, '$2y$10$1ph/ryd6a2BKrsEEhItwTeWsdn5BhOEOeQ.o/.xNBRBWwmjIJH2qe', NULL, '6109458173', '6109458173', 'Phone', 'Lead Pastor', NULL, NULL, 0, '', '', '', 'image', '', 'The Gathering Ministry', 'Gathering to Pray, Worship, Learn and Service', '4940 Keyser Street', '', '', '', '', 'https://www.gatheringinhim.org', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-24 14:35:33', NULL, '2020-06-01 23:52:33', NULL, '', 0, 0, 0, 'individual', NULL, 0),
(225, 2, 'Cheryl', 'Jeter', 'cherylj.jeter119@gmail.com', NULL, '$2y$10$Jbm0ksZOwrPDRpkfUM2Hf.L8ftpbrWEU/ZiQy3DLA7kR8c0Xu3lpW', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-24 15:03:11', NULL, '2020-05-24 15:03:11', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(228, 2, 'Pamela Hughes', 'Hughes', 'letitiashouse@att.net', NULL, '$2y$10$exp8GsIKyV18G5UMuJdJ..1ECJKFGIRz.5oKwpynQG.geqlhuQ1Te', '8R11guoPrcHxylmcKbvOtt3rjGznfkJJ3uOIcmnO5BdvVcTtCwlsaj3ghiky', '', '(609) 668-8176', 'Phone', NULL, 'assets/admin/images/1028736834.png', NULL, 0, '', '', '', 'image', 'Owner', 'Letitia\'s House', 'Ecommerce', '335 bayberry Street', 'NJ', 'Browns Mills', '', '08015', 'Letitiashouse.com', 1, '', '', 0, '', 0, '', 0, 1, '2020-05-24 17:02:51', NULL, '2020-06-05 22:30:36', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(230, 2, 'Ardell', 'McDuffie', 'ardellmcduffie@gmail.com', NULL, '$2y$10$TJRazA5ryf1USyTFjrvgX.bw9WIMeEHzwc9GFw2JRMwrLAXyhXDnS', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-24 17:44:38', NULL, '2020-05-24 17:44:38', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(231, 2, 'Matt', 'Woodall', 'woodallmatt504@yahoo.com', NULL, '$2y$10$.PkdgcB1AA2tH9QWxHRA7eMtSPk/LcXmQ01/DA5EJb1b.IOwlzfBS', 'ZKA9kjBk8PHX6RrhQW4DJ9iuzg5ZKixEb71XyHQUmmP3ma4lwmoyto1Jgkpo', '(561) 737-7411', '(954) 604-1028', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Family Service Advisor', 'Eternal Light & Beth Israel', 'Funeral and Cemetery', '11520 State Rd 7', 'Florida', 'Boynton Beach', '', '33473', 'www.nsmg.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-24 18:45:15', NULL, '2020-05-24 20:58:20', NULL, '', 0, 0, 0, 'company', NULL, 0),
(232, 2, 'Sarah Evans', 'Evans', 'realtorsarahevans@gmail.com', NULL, '$2y$10$SLR0bpFXHDOgHxQtT81Pp.cQOqrn20a.qz.TwLPJQVqpVptADsURS', NULL, '(561) 757-9922', '(561) 757-9922', '', NULL, 'assets/admin/images/967779721.png', NULL, 0, '', '', '', 'image', 'Global Real Estate Advisor', 'One Sothebys International Realty', 'Real Estate', '200 E Palmetto Park Road #104', 'Florida', 'Boca Raton', '', '33432', '', 0, '', '', 0, '', 0, 'https://www.facebook.com/sarahevansFL', 1, 1, '2020-05-24 19:44:14', NULL, '2020-05-26 13:10:57', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(233, 2, 'Remi', 'Orlinsky', 'rorlinsky3@gmail.com', NULL, '$2y$10$8p8JNX/k0HUcUKCTrbN2heJ3egy0G7hObFkllwHaLIhqOTfceMEya', '88BawCcHvNhVmEoEy7Tw2ZAkdNb8vK9Y381ONEmQvqKNAex8EcgkgYNV9F4e', '(954) 336-2473', '(954) 336-2473', 'Mobile', NULL, 'assets/admin/images/1880948329.jpeg', '', 0, '', '', '', 'image', 'Marketer', 'RemiX Marketing', 'Freelance Marketing Agency', '808 West Village Circle', 'FL', 'Fort Lauderdale', '', '33325', '', 0, '', 'https://www.linkedin.com/in/remiorlinsky/', 1, 'https://www.instagram.com/remorlinsky/', 1, '', 0, 1, '2020-05-24 20:45:38', NULL, '2020-06-06 18:24:51', NULL, '', 0, 0, 0, 'personal', 'Remi25', 0),
(234, 5, 'Mason', 'Brown', 'thedeacon11@yahoo.com', NULL, '$2y$10$Jfkr79CrvZ8LOmywlrlImuqKMR9PjMTkuCr/I6/dLE2eDMMhWyGe2', NULL, '(561) 718-3068', '(561) 718-3068', 'Mobile', NULL, 'assets/admin/images/1894752073.png', 'assets/admin/images/1750355275.png', 0, '', '', '', 'image', 'Business Executive', 'Kynect', 'MLM', '', '', '', '', '', '139tasha.wekynect.com', 1, '', '', 0, '', 0, '', 0, 1, '2020-05-24 23:37:08', NULL, '2020-05-24 23:43:16', NULL, '', 0, 0, 0, 'company', 'regel44-10', 0),
(236, 2, 'Marilyn M', 'Wilson', 'MWilson@LegacyBankFL.com', NULL, '$2y$10$bZwhPWTreKrm7EiPsdAr/.quByVvH4k.Y3Er7vcomdcj8Mv/M960S', NULL, '561.347.1970', '561.870.8114', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'SVP, Office Executive', 'Legacy Bank FL', 'Community Bank', '2300 Glades Road W140', 'FL', 'Boca Raton', 'Palm Beach County', '33431', 'www.LegacyBankFL.com', 0, 'Website', 'https://www.linkedin.com/in/marilyn-wilson-8075ab143/', 1, '', 0, '', 0, 1, '2020-05-27 14:07:25', NULL, '2020-05-27 14:44:05', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(237, 2, 'SUZANNE HANDLEY', 'HANDLEY', 'sznnhandley@yahoo.com', NULL, '$2y$10$aOTEFyWXZ7/G47vzBaPxeuQQwjUEoJQXopskZX9XcE0fh6Pe.Sz22', NULL, '(561) 400-7987', '(561) 400-7987', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Director of Business Development', 'Integrity Merchant Solutions', 'Credit Card Processing', '23234 L ERMITAGE CIR', 'FL', 'BOCA RATON', '', '7143', 'www.integritymerchantsolutions.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-27 14:10:45', NULL, '2020-05-27 14:10:45', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(238, 5, 'Latia', 'Gray', 'madepeoplelooklikeme@gmail.com', NULL, '$2y$10$oW.NUt5XwaX95A2QLLP5OuI5QbUU7RfxAsaDGojiawHQU3gkE/qkO', NULL, '', '(615) 389-8969', 'Mobile', NULL, 'assets/admin/images/679202924.jpeg', 'assets/admin/images/1444513073.jpeg', 0, '', '', '', 'image', 'Owner', 'Make A Definite Effect LLC', 'Marketing/promotion', '514 Highland street', 'TN', 'Springfield', '', '37172', '', 0, 'Website', '', 0, 'I\'m on Instagram as made_ppl_looklikeme. Install the app to follow my photos and videos. https://www.instagram.com/invites/contact/?i=iejae6srv43g&utm_content=b6mcesh', 1, 'https://www.facebook.com/MadELLC2020/', 1, 1, '2020-05-27 14:33:07', NULL, '2020-05-27 14:33:07', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(242, 5, 'Marcellus', 'Wills', 'marcelluswills@clarmarc.com', NULL, '$2y$10$BVCwTvDQJ1QeoO48z54by.OhkR47ScvhForHJwA1dMfXllL5mpjKC', NULL, '(800) 894-9997', '(703) 655-0514', 'Phone', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Clarmarc', 'Business Consulting Services', '3406 Davie Rd Suite 508', 'Florida', 'Davie', '', '33314', 'https://www.clarmarc.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-05-28 17:52:34', NULL, '2020-06-01 12:14:46', NULL, '', 0, 0, 0, 'company', NULL, 0),
(244, 2, 'Yolanda', 'Toole', 'yolandatoole@gmail.com', NULL, '$2y$10$Dq7Q/1AZ4Ii9ragMos06AOXvvdU.FVXC6C6Re9DtbLt7swuGCGR8y', NULL, '(609) 614-0977 ___', '(609) 614-0977', 'Mobile', NULL, 'assets/admin/images/1628593790.png', NULL, 0, '', '', '', 'image', 'Reiki Master,  Spiritual Life Coach', 'Evolving Spirit Wellness', 'Reconnect Your Mind, Body & Spirit! Experience Integrated Wellness: Massage, Reiki, Spiriutal Life Coaching and more to bring balance and harmony to your life!', '', 'Delaware', '', '', '', 'https://www.yolandatoole.com', 1, '', '', 0, 'https://instagram.com/evolving_spirit_wellnesss', 0, '', 0, 1, '2020-06-01 11:50:03', NULL, '2020-06-08 19:38:42', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(246, 2, 'Lee M.', 'Orlinsky', 'lorlinsky@peachtreehotelgroup.com', NULL, '$2y$10$VRauyupacIPgGZGVN9Ja8uu0Cb7JGzhTheOxILj7uTPOoiNby3Q1K', NULL, '(407) 352-7602', '(407) 906-1569', 'Mobile', NULL, 'assets/admin/images/1246208787.png', 'assets/admin/images/665410603.png', 0, '', '', '', 'image', 'Assistant General Manager', 'Peachtree Hospitality Management', 'Peachtree Hotel Group, through its management arm Peachtree Hospitality Management, has developed and tested its systems and people on its own properties and extends that success as a third-party manager with the same passion and attention to detail for a growing list of owners nationwide. An approved operator by all the major, premium hotel brand groups, the company’s management expertise encompasses virtually every flag under the Marriott, Starwood, Hilton, Hyatt, Choice, Wyndham and InterContinental Hotels Group banners. The company’s proven, cutting-edge, proprietary operating systems give Peachtree a leg up on its competitive set.', '8278 Universal Blvd', 'Florida', 'Orlando', '', '32819', 'https://marriott.com/MCOEO', 0, 'Website', 'www.linkedin.com/in/lee-orlinsky-1643059a', 0, '', 0, '', 0, 1, '2020-06-01 12:02:51', NULL, '2020-06-04 20:26:43', NULL, '', 0, 0, 0, 'company', NULL, 0),
(248, 2, 'Amina', 'Ali', 'vibezindigo@gmail.com', NULL, '$2y$10$YTHwIe2jxgagNypOA6S0..clHDw/TEsR8lEKNVQ3K8Rhf8wyJHrXK', 'p9mnzbfib2lKFNHPHjkWcmhcDVRN1wtwGXXxv15ceR33LqIEI3gYLWvCdizu', '', '', '', NULL, 'assets/admin/images/958668549.png', 'assets/admin/images/2050758853.png', 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 12:20:37', NULL, '2020-06-04 21:36:55', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(249, 2, 'Brett', 'Friedenburg, LUTCF', 'brett.friedenburg@ffbic.com', NULL, '$2y$10$O3LRnZSv4r6FuEmXTisFaOjibBsYboUZrL8oB1qeYYPRVQdCFm822', NULL, '(561) 404-0000 ___', '(954) 242-5058', 'Office Number', NULL, NULL, NULL, 0, '', '', '', 'image', 'Agency Owner', 'Farm Bureau Insurance', 'Insurance Agency', '13121 S. Military Trail', 'Fl', 'Delray Beach', '', '33484', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-06-01 12:29:03', NULL, '2020-06-09 12:45:40', NULL, '', 0, 0, 0, 'personal', NULL, 0),
(250, 2, 'Isaac', 'Khoury', 'ikhoury33@gmail.com', NULL, '$2y$10$b.UszK0za0qnZsF.RJKubONrq164cboHiw3ytOmAuRrJ8B3OjK9Qu', NULL, '', '(934) 777-0054', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Junior Executive', 'World Leaders Network', 'World Leaders Network is a reference resource for biographical and professional data about individuals and their accomplishments. We spotlight thousands of professionals each year by their specific industry.', '163-165 bridge rd. suite 201', 'Ny', 'Islandia', '', '11749', 'Www.worldleadersnetwork.net', 0, 'Website', '', 0, '_khou_', 0, '', 0, 1, '2020-06-01 12:48:03', NULL, '2020-06-08 19:42:32', NULL, '', 0, 0, 0, 'company', NULL, 0),
(252, 5, 'Cesar', 'Trujillo', 'cesartrujillo@kw.com', NULL, '$2y$10$kdkfx7F/71ysFCLHdRowre815ONvrBPH9sMJqUJ9DMM42/PaE0xkK', NULL, '(772) 626-2504', '(772) 626-2504', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'CEO', 'Cesar Trujillo Team', '#1 Real Estate Team in Keller Williams Port St Lucie', '9700 Reserve Blvd', 'FL', 'Port St Lucie', '', '34987', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:22:46', NULL, '2020-06-01 18:22:46', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(253, 2, 'Hilda', 'Greene', 'h.greene@kw.com', NULL, '$2y$10$fbkphnZb5PALS0FCe8ahee5tNwIGHEFV71fgBuTGaWinvKlkwd90q', NULL, '7723808853', '7723808853', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Team Administrator', '', '', '9700 Reserve Blvd Port St Lucie, FL 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:28:39', NULL, '2020-06-01 18:28:39', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(254, 2, 'Andres', 'Garcia', 'AndresCGarcia@kw.com', NULL, '$2y$10$llrVKi9uHQXVJjsfqEnsVeFUq5UxTSpkeWXaiFp30ds2ZbWFIRho.', NULL, '772-940-4769', '772-940-4769', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Buyer Agent', '', '', '9700 Reserve Blvd Port St Lucie, FL 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:31:31', NULL, '2020-06-01 18:31:31', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(255, 2, 'Sergy', 'Molines', 'smolines@kw.com', NULL, '$2y$10$gXgSPYArDp0DvX.i5qVM5eUS/VgK866401eiQMe2ixm1RgbusG1Gy', NULL, '772-4756999', '772-4756999', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Buyer Agent', '', '', '9700 Reserve Blvd Port St Lucie, Fl 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:32:57', NULL, '2020-06-01 18:32:57', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(256, 2, 'Jeanne Marie', 'Trujillo', 'jmarie@kw.com', NULL, '$2y$10$Gj7dbCreVB3LEO.QPGzY3OMKyKEr747.OnRfyl11wguQvUP99M4om', NULL, '786-717-3501', '786-717-3501', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Buyer Agent', '', '', '9700 Reserve Blvd Port St Lucie, Fl 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:34:50', NULL, '2020-06-01 18:34:50', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(257, 2, 'Javier', 'Andrade', 'javierandrade@kw.com', NULL, '$2y$10$nulga8WHklYQO86cDLdF1uTxAGjPNaxQgJ95GEYsnpsNLqGQ/.fsC', NULL, '561-809-1419', '561-809-1419', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Buyer Agent', '', '', '9700 Reserve Blvd Port St Lucie, FL 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:36:11', NULL, '2020-06-01 18:36:11', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(258, 2, 'Geremy', 'Herrera', 'geremyh@kw.com', NULL, '$2y$10$2/RNjIA3luOw0oSjP1fRpu40kZO/.3DAX93oqhxDrKq.ZzbpAhRt.', NULL, '772-267-2586', '772-267-2586', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'BuyerAgent', '', '', '9700 Reserve Blvd Port St Lucie, FL 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:37:30', NULL, '2020-06-01 18:37:30', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(259, 2, 'Geraldina', 'Trujillo', 'geraldinanaranjo@icloud.com', NULL, '$2y$10$o.366DhF2XhupJmQ/us6LOMOboELYRT0kCrEm8B1fqgknjWAch/.2', NULL, '772-626-4627', '772-626-4627', 'Mobile', NULL, NULL, NULL, 0, '', '', '', 'image', 'Buyer Agent', '', '', '9700 Reserve Blvd Port St Lucie, FL 34986', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-01 18:41:06', NULL, '2020-06-01 18:41:06', NULL, NULL, 0, 252, 0, 'personal', NULL, 0),
(260, 2, 'Winvenia', 'Graham', 'degivingbranch@gmail.com', NULL, '$2y$10$O1Ldd48Rs1k6qgGDZ3/DFOntc6mC5PFgN6NUnVWh2.GVwTLki7LOK', NULL, '2675351356', '2675351356', '', NULL, '', '', 0, '', '', '', 'image', 'Founder', 'The Giving Branch', 'Non Profit', '1723 Lake Seymour Dr', 'Delaware', 'Middletown', '', '19709', '', 0, '', '', 0, '', 1, '', 1, 1, '2020-06-01 18:44:51', NULL, '2020-06-01 18:44:51', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(261, 2, 'Winvenia', 'Graham', 'Winvenia.graham@gmail.com', NULL, '$2y$10$yvVWsPyAmA8wDL2Ot3mPvuMWcmPpjDLArhqloMj8JctJx5j2ODu/i', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-02 14:22:39', NULL, '2020-06-02 14:22:39', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(262, 2, 'Syed Faizan', 'Ali', 'faizan@test.com', NULL, '$2y$10$Oii7fC3s0xFGZof8jkIGZ.AQPnq1Fq63Fu4fS2I0TYm1Gn8ayjyOG', NULL, '(324) 324-3242', '(234) 234-3242', 'Phone', NULL, '', '', 0, '', '', '', 'image', '11wwq', 'cdsdfs', 'sdafsfsdfasdf', '3800 SW Hale ST Demo', 'reterwtert', 'Karachi', 'erwtewrt', '434534', 'https://www.youtube.com/', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-06-03 18:18:26', NULL, '2020-06-03 18:19:44', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(263, 5, 'Ray', 'Desmangles', 'ray.braveheart2020@gmail.com', NULL, '$2y$10$opR8f0R/FUE8xlFP2oIxkel9jrDRM9Z6rDo3Gl6onKAd2C6ilvI62', NULL, '(718) 344-0088', '(718) 344-0088', 'Mobile', NULL, 'assets/admin/images/1057846662.png', 'assets/admin/images/353550519.png', 0, '', '', '', 'image', 'Founder/CEO', 'BraveHeart Faith Based Products, LLC', 'Faith Based Christian Apparel and Products', '11198 SW Kingslake Circle', 'Florida', 'Port St. Lucie', '', '34987', 'https://braveheartinspired.com/', 0, 'Website', '', 0, 'https://www.instagram.com/invites/contact/?i=1ljb9iiufwd4l&utm_content=bnch8e1', 0, 'https://www.facebook.com/BraveheartInspired/', 0, 1, '2020-06-03 22:47:01', NULL, '2020-06-03 22:53:26', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(264, 2, 'noman', 'razzaq', 'abcd@gmail.com', NULL, '$2y$10$O1.SgPVU/j6A0VdZeyGhSeHTpIzk7EXqZvzciyeX8Y3WZ/cXp1OaW', NULL, '(321) 311-3841', '(321) 311-3841', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'designer', 'abc1', 'it', 'xyz st 31 abc', 'abc', 'new york', 'chicago', '78569', 'abc32.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-06-04 00:33:20', NULL, '2020-06-04 00:33:20', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(265, 5, 'ARDELL', 'McDuffie', 'desarrie@gmail.com', NULL, '$2y$10$KizwzcJirEjCakwnkYpfYu0fp8WOmuGfArB6UcHE2352EKfaT0tNi', NULL, '(267) 977-5213', '(267) 977-5213', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'Owner', 'Snaps', 'Photography', '2235 Carpenter Street', 'Pa', 'Philadelphia', '', '19146', 'www.snaps215.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-06-05 15:43:06', NULL, '2020-06-05 15:43:06', NULL, NULL, 0, 0, 0, 'company', NULL, 0),
(266, 7, 'Mark', 'Orlinsky', 'orlinsky45@gmail.com', NULL, '$2y$10$QNabfCA4yOPUAus4ILZS2./Wd.l1iBUarqbrYLaB/syhgmMKJc.kO', 'RTK5pcQ2OnINiDjFD5hORPQztO3KzGaFQoN42VMyWefIIiLkSt9Kxj0kel7A', '(954) 800-3926', '954 800 3926', 'Mobile', 'Authorized Reseller', 'assets/admin/images/887852949.png', 'assets/admin/images/1589070604.png', 0, '', '', '', 'image', '', 'Beyondant LLC | Reseller Code: Orlinsky45', 'Reseller Code: Orlinsky45', 'https://www.beyondant.com', '', '', '', '', 'https://www.beyondant.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-05 20:49:46', NULL, '2020-06-06 18:41:18', NULL, '', 0, 0, 0, 'individual', NULL, 0),
(267, 7, 'Remi', 'Orlinsky', 'RemiOrlinsky@Gmail.com', NULL, '$2y$10$3YQIpck7AzxORV68ukMvIePRRkmkECHCnU5xl/HGM/Ba2quE4Xf2q', NULL, '22222222', '2222222', 'Phone', NULL, NULL, NULL, 0, '', '', '', 'image', '', 'Beyondant', 'Technology', '', '', '', '', '', 'https://www.Beyondant.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-05 21:06:47', NULL, '2020-06-06 19:17:50', NULL, '', 0, 0, 0, 'individual', NULL, 0),
(268, 2, 'Amir', 'Ali', 'amirdemo@fff.com', NULL, '$2y$10$wojpG5MwIdwicSq7FEnzKOvQ08uW8EBPP3Iv6komLFVJy2tBPczBy', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', 'image', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-08 18:36:42', NULL, '2020-06-08 18:36:42', NULL, NULL, 0, 0, 0, 'personal', NULL, 0);
INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `cover_video`, `cover_slideshow`, `cover_embed`, `cover_selection`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `parent_id`, `overridden_profile`, `acc_type`, `reseller_code`, `subscription_status`) VALUES
(269, 2, 'Amir', 'Ali', 'aamir.ali2@technado.co', NULL, '$2y$10$lQtC4svwkgkAnVDMsvlo.OIPEKYG.Ru55JqnwhVz1vrHX5ztBtqpS', NULL, '(435) 454-3534', '(435) 345-3454', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'amir', 'dafdsaf', 'safdasdf', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-08 18:39:19', NULL, '2020-06-08 18:39:19', NULL, NULL, 0, 0, 0, 'personal', NULL, 0),
(270, 5, 'Demo', 'Demo', 'demo@demo.com', NULL, '$2y$10$9UMCLj8CshPPamsQyoFSqObW3O1Bzoan2nySrZEC8c.g8kRxlGzRa', NULL, '(242) 342-3423', '(423) 423-4234', 'Mobile', NULL, '', '', 0, '', '', '', 'image', 'dfsgdfg', 'dgsdfg', 'dfsgdfg', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-06-08 18:41:55', NULL, '2020-06-08 18:41:55', NULL, NULL, 0, 0, 0, 'company', NULL, 0);

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
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
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
-- Indexes for table `profile_downloads`
--
ALTER TABLE `profile_downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_views`
--
ALTER TABLE `profile_views`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
-- AUTO_INCREMENT for table `profile_downloads`
--
ALTER TABLE `profile_downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `profile_views`
--
ALTER TABLE `profile_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;

--
-- AUTO_INCREMENT for table `reseller`
--
ALTER TABLE `reseller`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
