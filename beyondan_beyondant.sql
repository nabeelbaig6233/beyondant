-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 08:41 PM
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
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_description`, `profile_url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'DEMO UPDATE', 'This Device Is For Demo Purpose', 'https://www.facebook.com/', 164, '2020-04-30 20:42:36', '2020-04-30 20:44:15'),
(2, 'DGDSGDS', 'rtetwer tretwrewtwerwtert', NULL, 163, '2020-05-01 21:10:37', '2020-05-01 21:10:37'),
(3, 'DGDSerterGDS', 'rewter tretwe rtwer te rwewtwertert', NULL, 164, '2020-05-01 21:11:06', '2020-05-01 21:11:06'),
(4, 'Bracelet', 'Instagram', NULL, 167, '2020-05-02 14:24:39', '2020-05-02 14:24:39');

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
(2, 'Syed Aamir', 'Ali', 'sdfasdfa', 'alisyedaamir123@hotmail.com', 'https://beyondant.com/dev/beyondant/public/entrepreneurs', 'gdfgdsg', NULL, 'Karachi', 'sadsd', 'asdsad', '23423', '2342', '324234234324', 'Corporation', NULL, '2019-02-20 00:00:00', 'dfadfdsfsafds', 'dsfsdfas safsdfasd dsfsdf', 3432, 23, 434, 'https://beyondant.com/dev/beyondant/public/entrepreneurs', 'safasdf', '$0 - $1 Million', NULL, '2020-02-03 00:00:00', 'sdafsdfa dfaewfewerwq fsfasdf', 0, NULL, NULL);

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
('alisyedamir2018@gmail.com', '$2y$10$XyXYaefvFD8BHYI8k7MfV.Z.EQ3RO6dJe0oVyhJOfbVG1lZgfuMTS', '2020-04-10 15:24:12');

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
(24, 'Shunya', 'Roytman', NULL, 'Shunya@Finessecollection.com', NULL, '9220 SW 14th Street  Apt. 3401', NULL, 'Boca Raton', 'Florida', 'US', '33428', '8435', '5613027351', 'No Business Formed', NULL, NULL, NULL, 'Marc Rubin', 0, NULL, NULL, 'South Florida', NULL, '$0 - $1 Million', NULL, '2020-04-15 00:00:00', 'as soon as possible', 0, NULL, NULL),
(25, 'Ashley', 'Raeford', 'Luxe lust boutique', 'Ashley.raeford.ar@gmail.com', 'SHOPLUXELUST.com', '1920 Nigel ct', NULL, 'Charlotte', 'NC', 'United States', '28213', '3912', '9803093670', 'Other (Please Specify)', 'LLC', NULL, NULL, 'The regel group', 1, NULL, NULL, 'North Carolina', NULL, '$0 - $1 Million', NULL, '2020-04-18 00:00:00', 'Now', 0, NULL, NULL),
(26, 'Steven', 'Silberman', 'Gotta Catch Jamaal, LLC', 'ssilberman2012@aol.com', 'https://www.linkedin.com/in/steven-silberman/', '609 Verona Place', NULL, 'Weston', 'Florida', 'US', '33326', '3684', '9545295420', 'Other (Please Specify)', 'LLC or S Corp', NULL, NULL, 'Marc Rubin', 1, 1, NULL, 'Contacts in various untapped markets, both domestic and international', NULL, '$0 - $1 Million', NULL, '2020-04-20 00:00:00', 'When Marc wants!', 0, NULL, NULL),
(27, 'julie', 'cerini', 'Regel Group', 'Shadowpanthr9@gmail.com', 'Regel Group', '2318 se longhorn ave', NULL, 'port saint lucie', 'florida', 'USA', '34952', '0000', '7722123002', 'Other (Please Specify)', 'resaller', NULL, NULL, 'Regel Group', 0, NULL, NULL, 'anywhere', NULL, '$0 - $1 Million', NULL, '2020-04-24 00:00:00', 'Regel Group', 0, NULL, NULL),
(28, 'Jeffrey', 'Lewis', NULL, 'cornercuts@yahoo.com', NULL, 'cornercuts@yahoo.com', NULL, 'Port Saint Lucie', 'Florida', 'United States', '34953', '8252', NULL, 'Other (Please Specify)', 'LLC', NULL, NULL, 'Regel Group', 1, NULL, 1, 'ALL OVER', NULL, '$0 - $1 Million', NULL, '0000-00-00 00:00:00', 'Very Soon', 0, NULL, NULL),
(29, 'Lisa', 'Heimanson', '1965', 'lisaheimanson@gmail.com', NULL, '11641 SW 10th ST', NULL, 'Davie', 'FL', 'US', '33325', '8004', '3059173801', 'Individual', NULL, NULL, NULL, 'Indeed', 1, NULL, NULL, 'South Florida', NULL, '', 'I am an individual.', '2020-05-11 00:00:00', 'I don\'t have a Website yet, but could have one created.   I think the product is fantastic.  Would love to give a try at bringing this to Market.  I have a history of increasing sales in the Whole Sale Plumbing and Mechanical Field. \r\nHave my MBA and currently working on a Data Analytics Certificate.\r\n\r\nhttps://www.linkedin.com/in/lisa-heimanson-1652bb7/', 0, NULL, NULL),
(30, 'Sean', 'Campbell', NULL, 'seankcampbell@yahoo.com', NULL, '1182 Concord Ave', NULL, 'West Palm Beach', 'Florida', 'US', '33417', '1764', NULL, 'Individual', NULL, NULL, NULL, 'Indeed.', 10, NULL, NULL, 'Central Palm Beach County', NULL, '$0 - $1 Million', NULL, '2020-05-11 00:00:00', '5/11/2020', 0, NULL, NULL),
(31, 'Doru', 'Bobis', NULL, 'doru.bobis@gmail.com', NULL, '28017 Memory Lane', NULL, 'Valencia', 'California', 'US', '91354', '2854', '-16613734134', 'Individual', NULL, NULL, NULL, 'Website', 1, NULL, NULL, 'Los Angeles', NULL, '$0 - $1 Million', NULL, '2020-05-03 00:00:00', '05/17/2020', 0, NULL, NULL);

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
(1, 'admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"updateHome\",\"viewHome\",\"viewReseller\",\"deleteReseller\",\"viewEntrepreneur\",\"updateSetting\",\"createProfile\",\"updateProfile\",\"createCompany\",\"updateCompany\",\"viewCompany\",\"deleteCompany\",\"createIndividual\",\"updateIndividual\",\"viewIndividual\",\"deleteIndividual\",\"createDevice\",\"updateDevice\",\"deleteDevice\",\"createBanner\",\"viewBanner\"]', 1, NULL, 14, '2020-05-01 21:09:43', NULL),
(2, 'customer', '', 1, NULL, NULL, NULL, NULL),
(4, 'master admin', '[\"createUser\",\"updateUser\",\"viewUser\",\"deleteUser\",\"createRole\",\"updateRole\",\"viewRole\",\"deleteRole\",\"viewCustomer\",\"deleteCustomer\",\"viewUserProfile\",\"deleteUserProfile\",\"createHome\",\"updateHome\",\"viewHome\",\"deleteHome\",\"updateSetting\",\"updateProfile\"]', 1, '2020-02-27 18:39:15', 14, '2020-03-04 18:48:50', NULL),
(5, 'company', '[\"viewUserProfile\",\"deleteUserProfile\",\"updateProfile\"]', 1, '2020-04-08 22:43:53', 14, '2020-04-08 22:43:53', NULL),
(7, 'individual', '[\"createDevice\",\"updateDevice\",\"viewDevice\",\"deleteDevice\"]', 1, '2020-04-30 20:38:23', 14, '2020-04-30 20:38:23', NULL);

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
(1, 1, 'Beyondant', 'info@beyondant.com', '800 970-5877', '800 970-5877', '342 East 53rd Street, Suite #4EF\r\n\r\nNew York, NY 10022', 'A Smoother Way to Grow Your Business through Networking or Simply Grow Your Social Following.\r\nCreate your Custom Digital Business Cards with us and increase your customer interaction despite social distancing.', 'Calling qualified entrepreneurs! Join a growing network of Authorized Resellers and build a solid stream of income. Earn 20% or more in monthly commissions. Allow 7 business days for your application to be reviewed. We will be in touch soon and look forward to working with you!', 'Calling all internet entrepreneurs! Join a growing network of Authorized resellers and build a solid stream of income. Work from home And earn 15% or more in monthly commissions. Please allow 7 business Days for your application to be reviewed. We will be in touch with you Soon and look forward to working with you!', 'resellers@beyondant.com', 'https://www.facebook.com/', 'https://www.linked.com', 'https://www.instagram.com/', 'https://www.tiktok.com/', 'assets/uploads/setting/1648940280.png', 'assets/uploads/setting/1530317221.png', 1, '2020-04-06 19:09:18', 1, '2020-04-06 19:09:18', NULL);

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
(4, 'bantov@gmail.com', '2020-04-30 02:12:23', '2020-04-30 02:12:23');

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
  `parent_id` int(11) NOT NULL,
  `acc_type` enum('personal','company','individual') COLLATE utf8mb4_unicode_ci DEFAULT 'personal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `parent_id`, `acc_type`) VALUES
(1, 1, 'Beyondant Web', NULL, 'admin@demo.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', 'NPtdBDot6dIYEZjQ3IDRjlTwu8pZImdTDooAQGhuF5xwxlafFceIKMHmiIsY', '1234567890', NULL, '', 'C.E.O', 'assets/admin/images/1162149681.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 14:45:20', NULL, '2020-03-11 20:50:54', NULL, NULL, 0, 0, 'personal'),
(11, 1, 'Albert Custom', NULL, 'albert@gmail.com', NULL, '$2y$10$98RO0l9cpedqIgB.fh6sEu0ikc/YoCdDEFmGlAV1MwSE8kQcmE/6S', NULL, '12345678910', NULL, '', 'Developer', 'assets/admin/images/1209642735.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-23 16:23:09', NULL, '2020-01-23 16:23:09', NULL, NULL, 0, 0, 'personal'),
(12, 5, 'Testing Fname Lname', 'qwerty', 'nb@nadocrm.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(031) 232-1329 ___', '(234) 324-3243', 'Office Number', 'Developer', 'assets/admin/images/767582880.jpg', 'assets/admin/images/770345224.jpg', 0, 'qwerty', 'qwerty', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'street2', 'Newyork State', 'Newyork', 'USA', '32213', 'https://outsourceinpakistan.com/profile/12324234324234234234234234', 0, 'Website', 'https://outsourceinpakistan.com/', 0, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 'https://outsourceinpakistan.com/', 0, 1, '2020-01-23 18:05:34', NULL, '2020-03-24 02:22:06', NULL, 'https://myprojectstaging.com/custom/beyondant/public/edit-profile/12', 0, 0, 'company'),
(14, 4, 'Master Admin', NULL, 'admin@admin.com', NULL, '$2y$10$MS8j/EHKg1SJXofp3wGAcuzF.ysib8odDMwsxc8X4UlCvYssxGO6W', NULL, '3333906233', NULL, '', 'PHP Developer', 'assets/admin/images/1611976308.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-02-27 17:37:28', NULL, '2020-02-28 14:59:04', NULL, NULL, 0, 0, 'personal'),
(15, 0, 'Testing Fname Testing Lname', NULL, 'test@masdsanb.com', NULL, '', NULL, NULL, '123213213', '', NULL, '', '', 0, 'asdsad', 'sadsad', 'dasdsad', 'street2', NULL, NULL, NULL, NULL, NULL, 0, '', NULL, 0, NULL, 0, NULL, 0, 1, '2020-03-10 12:59:18', NULL, '2020-03-10 12:59:18', NULL, NULL, 0, 0, 'personal'),
(27, 2, 'Umair', NULL, 'smith@gmail.com', NULL, '$2y$10$9/7/ss3GpvrWh7WDooUVe.9bCxf7kG7tbAyah9tiQCJNmD4z0LrXK', NULL, '43534534543', '454354354354', 'Mobile', NULL, 'assets/admin/images/601208910.png', 'assets/admin/images/856559261.png', 0, 'wqewqe', 'fsdfdsfd', 'dsfdsfd dsfds f', 'R2 St. 5/2 Block E North Nazimabad', NULL, NULL, NULL, NULL, 'http://myprojectstaging.com/', 0, 'Address', 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 'http://myprojectstaging.com/', 0, 1, '2020-03-12 03:33:21', NULL, '2020-03-12 03:33:21', NULL, NULL, 0, 0, 'personal'),
(28, 2, 'asad', NULL, 'test@123.com', NULL, '$2y$10$KXZYlgxoNDz9clFPhrOGs.Jcg7E8HTej40590dMtfuN/Fvdpcqk2i', NULL, '23232323', '23232323', 'Mobile', NULL, '', '', 0, 'adad', 'asad', 'test', 'fdgdf33', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:38:38', NULL, '2020-03-12 03:38:38', NULL, NULL, 0, 0, 'personal'),
(29, 2, 'asad siddique', NULL, 'asad.siddiq07@gmail.com', NULL, '$2y$10$IsohB3sm73poRo6b8.QFse6bK3F9RCtr7Bf4HxooZlxLB16ewvYwW', NULL, '324234234', '324324324', 'Mobile', NULL, 'assets/admin/images/1134369862.jpg', 'assets/admin/images/150358304.jpg', 0, 'test', 'test', 'rest', 'g-73, phase 2 , defence view', NULL, NULL, NULL, NULL, 'https://technado.co/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 03:42:16', NULL, '2020-03-12 03:42:16', NULL, NULL, 0, 0, 'personal'),
(30, 2, 'usman', NULL, 'usman.naveed@nadocrm.com', NULL, '$2y$10$R8ZoyBNg9pwZLYZyDMQRQubN0jfqKEwRtEn5vdQtPWK.lqJVBsgz2', NULL, '6094761640', '03352155171', 'Mobile', NULL, '', '', 0, 'CEO', 'Outsource in Karachi', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-12 03:50:50', NULL, '2020-03-12 03:50:50', NULL, NULL, 0, 0, 'personal'),
(31, 2, 'Daniyal', NULL, 'sheikhusman19@hotmail.com', NULL, '$2y$10$YtiJ2YJim5FUw5wxGOfnVeqoXgCCbw.hjNifyZabIDl.2CFIq41g6', NULL, '2542122225', '2821581455', 'Mobile', NULL, 'assets/admin/images/1334283108.png', 'assets/admin/images/376553203.jpg', 0, 'CEO', 'Deepout', 'Clothing', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-12 17:18:38', NULL, '2020-03-12 17:18:38', NULL, NULL, 0, 0, 'personal'),
(32, 2, 'usman', NULL, 'johnmethews1@outlook.com', NULL, '$2y$10$.qKdVrwnICdWEx6GXdjgNeYqVxiWP4fTAnWzfeU98/ZPBQ1.ZBXZW', NULL, '123456844', '12546215251', 'Mobile', NULL, 'assets/admin/images/1515907221.png', 'assets/admin/images/170086125.jpg', 0, 'Manager', 'Outsource', 'Software', 'ABCD 123', NULL, NULL, NULL, NULL, 'https://www.google.com/', 0, 'Website', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-12 22:42:39', NULL, '2020-03-12 23:35:46', NULL, NULL, 0, 0, 'personal'),
(33, 2, 'tom', NULL, 'nb@nadocrddm.com', NULL, '$2y$10$DlLL9NlILqSm.kU.u7DXG.HBFNfFsExwGf7K0NszkZ0SZlrMCl7Y.', NULL, '34535435', '4543543543', 'Phone', NULL, 'assets/admin/images/1477711861.png', 'assets/admin/images/377888126.jpg', 0, 'qwer', 'dsfdsf', 'dsfdsf', 'street2', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-13 21:30:23', NULL, '2020-03-13 21:42:23', NULL, '', 0, 0, 'personal'),
(34, 2, 'Showzeb', NULL, 'showzeb@outsourceinpakistan.com', NULL, '$2y$10$mHkGY.TTzmra6SDfRHFFn.LpeTmwQLU/rZqPGLAqgmLDwdr5oel9q', NULL, '225148458', '25551485641', 'Phone', NULL, 'assets/admin/images/317446541.jpg', 'assets/admin/images/922174070.jpg', 0, 'HOD', 'Technado', 'Outsourcing', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-13 21:56:13', NULL, '2020-03-13 21:56:13', NULL, NULL, 0, 0, 'personal'),
(35, 2, 'Steve', NULL, 'steve@abc.com', NULL, '$2y$10$CGk9YfRZw5Ls/Rqrh74VQOEKBO.AodyUenWfWzvz4ra.5wp3kSvke', NULL, '215458212', '254811162', 'Mobile', NULL, 'assets/admin/images/2125395568.jpg', 'assets/admin/images/298908195.png', 0, 'CEO', 'Built Socially', 'Software', 'Park Avenue', NULL, NULL, NULL, NULL, 'https://outsourceinpakistan.com/', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-13 22:00:48', NULL, '2020-03-14 01:47:16', NULL, '', 0, 0, 'personal'),
(36, 2, 'Usman', 'naveed', 'usman@abc.com', NULL, '$2y$10$0/JN8lmdhq.tpRg7S6gdJusksx6fCxgGT9pE08QGt87UX5tPH4nUS', NULL, '(222) 222-2222', '(888) 888-8888', 'Mobile', NULL, 'assets/admin/images/28750152.png', 'assets/admin/images/319673600.jpg', 0, 'CEO', 'Deja-Vu Solutions', 'Software House', 'ABCD 123', 'sindh', 'karachi', '', '75300', 'https://www.google.com/', 0, 'Address', 'www.linkedin.com/in/usman-naveed-168494b1/', 0, 'www.instagram.com/sheikhusman19/', 1, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-13 22:08:57', NULL, '2020-03-20 01:56:33', NULL, '', 0, 0, 'personal'),
(38, 2, 'Marc Rubin', NULL, 'MRubin@Test.com', NULL, '$2y$10$ecAUtJF2DzVK.oDw.V3kmeWhoprgX.ObOJ7REM4HwAxjYn9T8HXuu', NULL, '4561234569', '4561234569', 'Mobile', NULL, '', '', 0, 'CEO', 'Beyondant', 'Technology', '125 NW Victory Lane', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 00:16:45', NULL, '2020-03-14 00:17:22', NULL, '', 0, 0, 'personal'),
(39, 2, 'Marc Sussman', NULL, 'MSussman@Test.com', NULL, '$2y$10$nGYzkPXoMdr9d4WISZKB3.0eNXM1Qe11.RGYv9vIq370mlHmg.ceq', NULL, '9545678764', '95456734543', '', NULL, 'assets/admin/images/2083810365.JPG', 'assets/admin/images/1940459301.jpg', 0, 'CFO', 'Beyondant', 'Technology', '4563 SW Victory Lance Cooper City, FL 33342', NULL, NULL, NULL, NULL, '', 0, '', '', 0, 'www.cnn.com', 1, '', 0, 1, '2020-03-14 11:59:37', NULL, '2020-03-14 12:09:42', NULL, '', 0, 0, 'personal'),
(40, 2, 'lala', NULL, 'asad.siddiqui@nadocrm.com', NULL, '$2y$10$CQDCf1Yh/XOjAexclbUcrOH2P8tEvzzWvyUG7Fw5HnTpUDRBqz5.i', NULL, '23', '2365', '', NULL, '', '', 0, 'lalala', 'lalala', 'lalala', 'asaas', NULL, NULL, NULL, NULL, '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-16 17:26:29', NULL, '2020-03-16 17:26:29', NULL, NULL, 0, 0, 'personal'),
(41, 2, 'dani', NULL, 'daniyal.ali@technado.co', NULL, '$2y$10$xQWum45sv6N21FJyW0E1N.cOriy5.RKMvwrRMFdhGTmfBcCaIwi3a', NULL, '456123', '456123', 'Mobile', NULL, '', '', 0, 'lala', 'olala', 'lalaland', '456123', NULL, NULL, NULL, NULL, 'asaassa', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 17:44:57', NULL, '2020-03-16 17:44:57', NULL, NULL, 0, 0, 'personal'),
(42, 2, 'daniyal', NULL, 'daniyal.ali@technado.com', NULL, '$2y$10$dGfaJ.podHQinZQ9UmEb.e864EsU9mP/mxUmBA7sWwL3ug/rD5WBe', NULL, '123456789', '789456123', 'Mobile', NULL, '', '', 0, 'CEO', 'WOW', 'Kaam krti hai', 'nowhere', NULL, NULL, NULL, NULL, 'haha.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 17:59:47', NULL, '2020-03-16 18:00:27', NULL, '', 0, 0, 'personal'),
(43, 2, 'daniyal', NULL, 'daniyal@outsourceinpakistan.com', NULL, '$2y$10$RPmVEdxi4hk7KnqybPP1guW0z/jDIkceA5xsoN3lIu0BAXk89vu1C', NULL, '123456', '456123', 'Mobile', NULL, 'assets/admin/images/1582413469.jfif', 'assets/admin/images/258525367.jpg', 0, ':D', 'LALA', 'Kaam karti hai', 'nowhere', NULL, NULL, NULL, NULL, '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-16 18:10:35', NULL, '2020-03-17 00:01:49', NULL, '', 0, 0, 'personal'),
(44, 2, 'Robert', 'Jones', 'RJones@CoolTech.com', NULL, '$2y$10$mUXzWC5Y5tJiE2JFT6ZTIeKwuib9RfwfH2WzNushbnIjK7zdai4WO', NULL, '4562347896', '4464568542', 'Mobile', NULL, 'assets/admin/images/179986367.JPG', 'assets/admin/images/2115260670.jpg', 0, 'CEO/Founder', 'Cool Tech Enterprises', 'Technology', '451 SW Victory Lane', 'Florida', 'Cooper City', 'Test', '33331', 'www.yahoo.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-16 22:28:15', NULL, '2020-03-16 22:28:15', NULL, NULL, 0, 0, 'personal'),
(45, 2, 'Testing Fname Lname', 'Testing Fname Lname', 'nb@nadocrmd.com', NULL, '$2y$10$0yS9mTgZJ3w1mVzEEoUMlev8vrRiGq7vb9lWd2gsuvuhjF.PBnsuu', NULL, '324324324324', '342324324324', '', NULL, 'assets/admin/images/146227966.jpg', 'assets/admin/images/1248730661.jpg', 0, 'sfdfsdf', 'sdfdsf', 'sdfdsfdf', 'street2', 'Punjab', 'Islamabad', 'qwewqe', '72900', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'www.instagram.com/', 0, 'www.facebook.com', 0, 1, '2020-03-16 22:32:35', NULL, '2020-03-16 22:32:35', NULL, NULL, 0, 0, 'personal'),
(46, 2, 'Marc', 'Rubin', 'MRubin@Test2.com', NULL, '$2y$10$.BxJuqMg9RtedGtV4wdLZOBLalUG9Lub/HTY.enQB2EhstNdpfgD6', NULL, '(456) 213-6987', '(546) 321-4569', 'Mobile', NULL, 'assets/admin/images/2029446747.JPG', 'assets/admin/images/64066282.jpg', 0, 'CEO/Founder', 'Beyondant', 'Technology Company', '455 Victory Lane', 'Florida', 'Cooper City', '', '23332', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 0, 'Address', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, 'https://www.facebook.com/theregelgroupllc/', 0, 1, '2020-03-16 23:16:14', NULL, '2020-03-23 22:22:12', NULL, '', 0, 0, 'personal'),
(47, 2, 'Usman', 'Naveed', 'naveed@abc.com', NULL, '$2y$10$hbA/jx7k.3UjHsnLC2JQgexvbFEILTOBgWJA//1o7GDdzSKzlsYPG', NULL, '0', '(125) 848-4586', 'Mobile', NULL, '', '', 0, 'S.M', 'Company', 'Technology', 'street 22', 'sindh', 'karachi', '', '76822000', 'https://www.google.com/', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-19 21:35:16', NULL, '2020-03-19 21:35:16', NULL, NULL, 0, 0, 'personal'),
(48, 2, 'Steve', 'D', 'steve@abcd.com', NULL, '$2y$10$704Xvf4VrROiXuRKvGibwe.bgZ2Y4opJPvX4FTDLS3UCGinD22nP2', NULL, '0', '(125) 555-5555', 'Mobile', NULL, 'assets/admin/images/389819369.png', 'assets/admin/images/361533621.jpg', 0, 'CEO', 'built', 'Technology', 'street 22', 'New York', 'New York', '', '1521148', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-19 21:39:44', NULL, '2020-03-19 21:39:44', NULL, NULL, 0, 0, 'personal'),
(49, 2, 'Nathan', 'Wilson', 'nathan@demo.com', NULL, '$2y$10$ar4ypoCULl.LfqMucVhUB..69mcrSMXQXLJjLnbQy9Sv6BcX8Bt2S', NULL, '(111) 111-1111', '(222) 222-2222', 'Phone', NULL, 'assets/admin/images/1101614631.png', 'assets/admin/images/139622300.jpg', 0, 'Marketing Manager', 'Nado', 'Software house', 'Street 24', 'Huston', 'New York', '', '512844', 'beyondant.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 1, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:17:23', NULL, '2020-03-20 00:22:03', NULL, '', 0, 0, 'personal'),
(50, 2, 'Usman', 'snhdfjknASJfn', 'usman@abcde.com', NULL, '$2y$10$oxKVki4Zk03pxnmsw9BFvOFiJ8jDtvw9LGa0hEIruxBXmL.QgXSJq', NULL, '(111) 111-1111', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/497171588.png', 'assets/admin/images/2055233230.jpg', 0, 'usman786', 'usman786', 'usman786', 'ABCD 123', 'usman786', 'usman786', '', 'usman786', 'https://www.google.com/', 0, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:24:51', NULL, '2020-03-20 00:26:17', NULL, '', 0, 0, 'personal'),
(51, 2, 'Usman', 'Naveed', 'usman@nado.com', NULL, '$2y$10$tra5AbjDt9FFmLC8itFAAONxHkCFtG62u3iXyzLYeuqfIDgwjfiVC', NULL, '(222) 222-2222', '(555) 555-5555', 'Mobile', NULL, 'assets/admin/images/525013690.png', 'assets/admin/images/1596648536.png', 0, 'Asst. Manager', 'Nado', 'Software house', 'ABCD 123', 'New York', 'New York', '', '512221', 'https://www.google.com/', 1, 'Address', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, '', 0, 'https://www.facebook.com/sheikh.usman.79274089', 0, 1, '2020-03-20 00:52:28', NULL, '2020-03-20 00:56:12', NULL, '', 0, 0, 'personal'),
(52, 2, 'Nabeel', 'Baig', 'mathswithnabeel@gmail.com', NULL, '$2y$10$PAptzROL2xB.8n79uNSytePNuKtgjwQ5udt3wM4XGlaZxzFNXD7pK', NULL, '(333) 390-6233', '(333) 390-6233', 'Mobile', NULL, 'assets/admin/images/1361536062.jpg', 'assets/admin/images/499532749.jpg', 0, 'mnb', 'mnbTech', 'mnbTech Software House', 'H-104, Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', 'https://outsourceinpakistan.com/', 0, 'Address', 'https://www.linked.com/', 0, 'https://www.instagram.com/number3.pk/', 0, 'https://www.facebook.com/mnbprofile', 0, 1, '2020-03-20 17:49:20', NULL, '2020-03-20 17:55:24', NULL, NULL, 0, 0, 'personal'),
(53, 2, 'Testing Fname Lname', 'sdsad', 'nb@nadofdgcrm.com', NULL, '$2y$10$j6zI066zg0BrSE/Ce9N6X.2T4CJKFJ2LcAamnhovZrNyYdY8kvPiK', NULL, '(123) 213-1233', '(432) 432-4324', 'Phone', NULL, 'assets/admin/images/748527921.jpg', 'assets/admin/images/751150779.jpg', 0, 'fdsfdsf', 'sadsad', 'sdsadsad', 'street2', 'sadsad', 'sadsad', '', '75290', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-20 19:08:49', NULL, '2020-03-20 19:08:49', NULL, NULL, 0, 0, 'personal'),
(54, 2, 'Usman', 'Naveed', 'usman@outsourceinpakistan.com', NULL, '$2y$10$sCn9XFe8c1ceDUswy563LeF9kb.6a7JMhRSm6m/3WRq0YELmlUxJK', NULL, '(609) 476-1640', '(335) 215-5171', 'Office Number', NULL, 'assets/admin/images/934211422.png', 'assets/admin/images/1860390530.jpg', 0, 'Asst.Manager', 'Outsource in Pakistan', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'Park Avenue', 'Sindh', 'Karachi', '', '75300', 'https://outsourceinpakistan.com/', 0, 'Website', 'https://www.linkedin.com/in/usman-naveed-168494b1/', 0, 'https://www.instagram.com/sheikhusman19/', 0, 'https://www.facebook.com/sheikh.usman.79274089', 1, 1, '2020-03-20 21:56:29', NULL, '2020-03-20 22:00:27', NULL, '', 0, 0, 'personal'),
(55, 2, 'Joe\'l', 'Perkins', 'JPerkins@GreenAcresNissan.com', NULL, '$2y$10$EzKwbZ0K7EFnnsU258uvzuFSOapfwcXbllrYaQ/KBt4f/JxhsSB0W', NULL, '(561) 537-5300', '(954) 743-9796', 'Mobile', NULL, 'assets/admin/images/411883524.jpg', 'assets/admin/images/1220306644.jpg', 0, 'Service Director', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 21:58:24', NULL, '2020-04-03 00:45:29', NULL, '', 0, 0, 'personal'),
(56, 2, 'Carlo', 'Renda', 'CRenda@GreenAcresNissan.com', NULL, '$2y$10$fO0Xheh7yWXN6vQsljtmMekWxTCdXkmLYfElfLl9/Yp8qP1cF.E1.', NULL, '(561) 537-5300', '(561) 537-5217', 'Mobile', NULL, 'assets/admin/images/332170584.jpeg', 'assets/admin/images/971418446.jpg', 0, 'Preowned Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:32:12', NULL, '2020-04-03 17:19:39', NULL, '', 0, 0, 'personal'),
(57, 2, 'Kylinn', 'Dominguez', 'KDominguez@GreenAcresNissan.com', NULL, '$2y$10$91JmDVmeDx3.iFgVDbVl/OIBs7ERcoxrPU.NYk6lNv2KSwEfVRbca', NULL, '(561) 537-5300', '(561) 537-5224', 'Mobile', NULL, 'assets/admin/images/795878240.png', 'assets/admin/images/1308982289.jpg', 0, 'Client/Owner Loyalty Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 22:53:21', NULL, '2020-04-02 21:11:02', NULL, '', 0, 0, 'personal'),
(58, 2, 'Mike', 'Pennachio', 'MPennachio@GreenAcresNissan.com', NULL, '$2y$10$AWSmK.LJQuQl.I5Wdy6FWeLE0M2Mv0K9Iu2kczPnHp3ld360Z4Kji', NULL, '(561) 537-5300', '(561) 491-4310', 'Mobile', NULL, 'assets/admin/images/243250041.png', 'assets/admin/images/641373474.jpg', 0, 'Executive Manager/Owner', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-21 23:57:23', NULL, '2020-04-02 21:17:35', NULL, '', 0, 0, 'personal'),
(59, 2, 'Dane', 'Luca', 'Dluca@GreenAcresNissan.com', NULL, '$2y$10$lAhoq.ho4.uzLiI1A/akBOAZ8jMn4oFhLf3izuZwhHY8und2U5oWm', NULL, '(561) 537-5509', '(561) 951-5509', 'Mobile', NULL, 'assets/admin/images/33951142.jpeg', 'assets/admin/images/1665517806.jpg', 0, 'General Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:08:21', NULL, '2020-04-03 17:11:32', NULL, '', 0, 0, 'personal'),
(60, 2, 'Jesus', 'Rodriguez', 'JRodriguez@GreenAcresNissan.com', NULL, '$2y$10$iHaIhDoh2OgyWlt7AW4xHemUMqjLE01zATf1LcKd18l1VtyTxfU3m', NULL, '(561) 537-5300', '(954) 461-1855', 'Mobile', NULL, 'assets/admin/images/2109513939.jpeg', 'assets/admin/images/1735258129.jpg', 0, 'General Sales Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:25:02', NULL, '2020-04-03 17:26:17', NULL, '', 0, 0, 'personal'),
(61, 2, 'Frank', 'Dellatto', 'FDellatto@greenacresnissan.com', NULL, '$2y$10$GBZoC1WT9q3g.FLiLdYkNOHvXOGYudBK825L7i5.ToCB9r7CxpgkS', NULL, '(561) 537-5300', '(954) 496-2677', 'Mobile', NULL, 'assets/admin/images/249456941.jpeg', 'assets/admin/images/1673810523.jpg', 0, 'General Floor Manager', 'Greenacres Nissan', 'Greenacres Nissan Dealership', '5353 Lake Worth Rd', 'FL', 'Greenacres', '', '33463', 'www.GreenAcresNissan.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-22 00:27:58', NULL, '2020-04-03 17:21:07', NULL, '', 0, 0, 'personal'),
(62, 2, 'Alicia', 'Narcisse', 'Anarcisse@Quest-comm.com', NULL, '$2y$10$obhSiVJ.IRBP98oy5aDqKecL1ltWvX4WQOlHpNwU924qJ2g7jp2Le', NULL, '(919) 322-0799', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Store Manager', 'Questcomm', 'Metro by T Mobile', '1620 Marin Luther King Blvd.', 'NC', 'Raleigh', '', '27610', 'https://clickmy.site/i/2CFFA187CC2BB0CE9582725B217DF269?sh=B9Pp', 1, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-22 01:33:48', NULL, '2020-03-22 01:35:37', NULL, '', 0, 0, 'personal'),
(63, 2, 'Erick', 'Johnson', 'mrejohnson26@yahoo.com', NULL, '$2y$10$l.ax8gc7ThD/2okzddwOm.0AOFGQ0YyDgmi3h8kVz4cbmdHwRdmb2', NULL, '(222) 222-2222', '(222) 222-2222', 'Mobile', NULL, '', '', 0, 'Sample', 'Sample', 'Sample', '1111111', 'Sample', 'Sample', '', '222222', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-22 01:58:13', NULL, '2020-03-22 01:58:13', NULL, NULL, 0, 0, 'personal'),
(64, 2, 'Bob', 'Antoville', 'bantov@gmail.com', NULL, '$2y$10$8EIPDorYQi/OyngVjQhMn.wHF//t8BmMi0WWmyEmz7sGozr.GJBAS', 'wRkDcCQOfGIddUSPmZrJdrbcIANv1mnkk3cfl24EPnkjpZhfeEbsuLybXu59', '(914) 649-1300', '(914) 649-1300', 'Mobile', NULL, 'assets/admin/images/2085470795.png', 'assets/admin/images/1805984059.jpg', 0, 'Representative', 'Beyondant', 'Tech', '13924 Via Flora', 'FL', 'Delray Beach', '', '33484', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-03-25 22:45:55', NULL, '2020-04-14 06:41:55', NULL, '', 0, 0, 'personal'),
(65, 2, 'Chris', 'Hall', 'chall@slbt.com', NULL, '$2y$10$uzNxQTgOs00jI5dQcsBQ4OV9Yvv0HUylS7cvPLe5Usz.PN5p/bEIG', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, 'Store Manager', 'St. Lucie Battery & Tire', 'Complete Care Car Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:00:45', NULL, '2020-03-25 23:00:45', NULL, NULL, 0, 0, 'personal'),
(66, 2, 'Anthony', 'Mills', 'amills@slbt.com', NULL, '$2y$10$Ux19whbUk2Oi292rr3CY4eUB8dO72N6R9hbDWWYsx668qN8SQy35q', NULL, '(772) 466-1814', '(772) 466-1814', 'Phone', NULL, '', '', 0, 'Service Advisor', 'St. Lucie Battery & Tire', 'Complete Car Care Centers', '6911 Hancock Dr.', 'FL', 'Port St. Lucie', '', '34952', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:08:57', NULL, '2020-03-25 23:08:57', NULL, NULL, 0, 0, 'personal'),
(67, 2, 'Pasquale', 'Lamarra', 'pat@eatpastaio.com', NULL, '$2y$10$vf9Au8UlNrjr9O3mwweg4.MlwlbF3YAY0wUDhZTIu7Yl2v4nECmpi', NULL, '(561) 676-1186', '(561) 676-1186', 'Phone', NULL, '', '', 0, 'Owner', 'Pastai', 'Restaurant', '10472 Southwest Village Center Dr.', 'FL', 'Port St. Lucie', '', '34987', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:27:43', NULL, '2020-03-25 23:27:43', NULL, NULL, 0, 0, 'personal'),
(68, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc@yahoo.com', NULL, '$2y$10$4kojRXhz8aJnpOHpM02YHe4B/L9BEsTbEZ8Yn5iZmtuyAMzPD8Tuq', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:44:46', NULL, '2020-03-25 23:44:46', NULL, NULL, 0, 0, 'personal'),
(69, 2, 'Shamir', 'Bolivar', 'theshadowgroupinc2@yahoo.com', NULL, '$2y$10$jDM0Kfqopg6hOhYbPBIUoO0w1YzKntVwUh.9cStUuckFflLpC2z.K', NULL, '(954) 520-0312', '(954) 520-0312', 'Mobile', NULL, '', '', 0, 'CEO', 'Shadow Security Group', 'Security Firm', 'Sample', 'Sample', 'Sample', '', 'Sample', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-03-25 23:52:22', NULL, '2020-03-25 23:52:22', NULL, NULL, 0, 0, 'personal'),
(70, 2, 'Mitchell', 'Wyett', 'tsrfashions1@gmail.com', NULL, '$2y$10$2TM3XUhlAIvsHe1LERi5A.MZ.8v1laGYWqPqKbsouMDBLbuhL.Sd6', NULL, '', '(678) 790-4460', 'Mobile', NULL, '', 'assets/admin/images/1150822383.jpg', 0, 'Owner', 'TSR Fashion LLC', 'Where fashion is nothing without people', '416 orchards walk', 'Georgia', 'Stone mountain', '', '30087', 'Www.tsrfashion.com', 0, '', '', 0, '', 1, '', 1, 1, '2020-03-28 04:16:23', NULL, '2020-03-28 04:16:23', NULL, NULL, 0, 0, 'personal'),
(71, 2, 'Abdul', 'Wasay', 'nafay552@gmail.com', NULL, '$2y$10$DaKrFQ6WVb8oNq8QR9RWaeSxdeWoxqpvL.SoYYHu68U/Kk0R1rwE2', NULL, '(300) 363-9508 ___', '(335) 242-0530', 'Phone', NULL, '', 'assets/admin/images/1783606097.jpg', 0, 'Hafiz', 'Online Quran Teaching', 'Learn and recite Quran Online very easily and properly', 'Rufi Green City, Block-18, Gulistan-e-Jauhar', 'Sindh', 'Karachi', 'Pakistan', '75290', '', 0, 'Address', '', 0, '', 0, 'https://www.facebook.com/abdulnafaymajid.71', 0, 1, '2020-03-28 16:22:19', NULL, '2020-04-11 14:42:30', NULL, '', 0, 0, 'personal'),
(73, 2, 'Nia', 'Dumont', 'NDumont@BuiltSocially.com', NULL, '$2y$10$z7FVfwyZKHAQZ1gEDzDbZOvdKhGuTjFuQZlTNHsQRhVgFH1XoarD2', NULL, '(954) 213-5642', '(954) 213-5642', 'Phone', NULL, 'assets/admin/images/1141922232.png', 'assets/admin/images/1460046494.png', 0, 'Chief Operations Officer', 'Built Socially', 'Digital Marketing Firm', '7603 NW 60th Lane', 'FL', 'Parkland', '', '33067', 'www.BuiltSocially.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-29 16:03:41', NULL, '2020-03-29 16:45:49', NULL, '', 0, 0, 'personal'),
(74, 2, 'Ralph', 'Avila', 'ravila@holmanauto.com', NULL, '$2y$10$MeitRE8KA.zsZZnRJUxS/.xFzr162Gen8HPekd3PaTO4OEJauchnu', NULL, '(954) 335-2250', '(305) 216-4808', 'Mobile', NULL, 'assets/admin/images/1343502144.jpg', 'assets/admin/images/408156941.jpg', 0, 'General Sales Manager', 'Holman Motorcars Ft Lauderdale', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', 'https://www.linkedin.com/in/ralphavilasr/', 0, 'https://www.instagram.com/ralphavila/', 0, 'https://www.facebook.com/holmanluxurycars/', 0, 1, '2020-03-31 12:12:42', NULL, '2020-04-02 21:39:09', NULL, '', 0, 0, 'personal'),
(75, 2, 'Carlos', 'Cucalon', 'CCucalon@Holmanauto.com', NULL, '$2y$10$XB1jaIxc7mj2w1Tl1/o2UOg9uQoRPNo6OByyxsi0tnD1ZBgyZHy5K', NULL, '(954) 779-2000', '(954) 383-7040', 'Mobile', NULL, 'assets/admin/images/990031963.JPG', 'assets/admin/images/2086331285.JPG', 0, 'Senior Marketing Strategist', 'Holman Motorcars', 'Auto Dealership', '900 East Sunrise Blvd.', 'FL', 'Fort Lauderdale', '', '33304', 'www.HolmanMotorcars.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-03-31 12:27:52', NULL, '2020-03-31 12:31:03', NULL, '', 0, 0, 'personal'),
(76, 2, 'C', 'Viotti', 'cviotti1@vetservices.com', NULL, '$2y$10$F1D7Ar6XvRjVrZeJJaCaoOOi56IFKfxcNB.svg0PdIe9Nx34ol5KK', NULL, '(954) 306-0970', '(954) 306-0970', 'Phone', NULL, '', '', 0, 'Owner', 'West Lake Animal Hospital', 'Veterinarian Services', '318 Indian Trace', 'FL', 'Weston', '', '33326', 'http://bit.ly/westongoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:30:59', NULL, '2020-04-01 15:35:52', NULL, '', 0, 0, 'personal'),
(77, 2, 'Chris', 'Viotti', 'Cviotti2@vetservices.com', NULL, '$2y$10$bczHFUT/sihi2N9k7xvsGuseHdvOM60XyBvpNAYj2BgUxBCKoI/0i', NULL, '(786) 616-8830', '(786) 616-8830', 'Phone', NULL, '', '', 0, 'Owner', 'Kendal Animal Medical Center', 'Veterinarian Services', '12586 SW 88th Street', 'FL', 'Miami', '', '33186', 'http://bit.ly/kendallgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:41:56', NULL, '2020-04-01 15:44:48', NULL, '', 0, 0, 'personal'),
(78, 2, 'Chris', 'Viotti', 'Cviotti3@vetservices.com', NULL, '$2y$10$/Rx2d8TbxrFMlALjV8gV8uU0dhnNuOKttAONhmFigfK2KW6mqVRdm', NULL, '(954) 405-8640 ___', '(954) 405-8640', 'Phone', NULL, '', '', 0, 'Owner', 'Pines animal Hospital- Vetco Total Care', 'Veterinarian Services', '15895 Pines Blvd', 'FL', 'Pembroke Pines', '', '33027', 'https://g.page/pinesanimalhospital/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 15:50:39', NULL, '2020-04-01 15:54:02', NULL, '', 0, 0, 'personal'),
(79, 2, 'Chris', 'Viotti', 'Cviotti4@vetservices.com', NULL, '$2y$10$nzlV5CXqXaKhr4p0GWP/z.HE3rzAbcFRzWAvNdFRP7hasWNM6X9Py', NULL, '(954) 419-4560', '(954) 419-4560', 'Phone', NULL, '', '', 0, 'Owner', 'Deerfield Beach Animal Hospital- Vecto Total Care', 'Veterinarian Services', '3551 W. Hilsboro Blvd', 'FL', 'Deerfield Beach', '', '33442', 'https://g.page/VetcoDeerfieldBeachAnimalHosp/review?rc', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:00:00', NULL, '2020-04-01 16:01:03', NULL, '', 0, 0, 'personal'),
(80, 2, 'Chris', 'Viotti', 'Cviotti5@vetservices.com', NULL, '$2y$10$huyxEV0C41H7z03xYfDG0OeyH1oyZ6wtva8x0ULXVIirdrcfd8g5a', NULL, '(561) 900-2680', '(561) 900-2680', 'Phone', NULL, '', '', 0, 'Owner', 'Delray Beach Animal Hospital- Veterinarian Delray Beach', 'Veterinarian Services', '13900 Jog Road Suite 209', 'FL', 'Delray Beach', '', '33446', 'http://bit.ly/delraybeachgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:05:49', NULL, '2020-04-01 16:06:13', NULL, '', 0, 0, 'personal'),
(81, 2, 'Chris', 'Viotti', 'Cviotti6@vetservices.com', NULL, '$2y$10$x1EZ3Q3p50R8qafZUmeAXOevQjnMW.oPNWPgFD1.tWTACi8WXMyu2', NULL, '(954) 869-4371', '(954) 869-4371', 'Phone', NULL, '', '', 0, 'Owner', 'Oakland Animal Medical Center', 'Veterinarian Services', '1009 E. Commerical Blvd', 'FL', 'Oakland Park', '', '33334', 'http://bit.ly/oaklandgoogle', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 16:09:59', NULL, '2020-04-01 16:10:14', NULL, '', 0, 0, 'personal'),
(83, 2, 'Chris', 'Viotti', 'chris@unitedanimalcare.com', NULL, '$2y$10$U49osEf5aycfYca2iPtbQ.Uc1dR1ag46Tw/N36Ltjvm43dkg3fqQ2', NULL, '(954) 864-6588', '(954) 864-6588', 'Mobile', NULL, 'assets/admin/images/742268011.jpeg', 'assets/admin/images/1241104527.jpg', 0, 'CEO/Founder', 'United Animal Care', 'Sample', 'Sample', 'FL', 'Sample', '', '222222', 'Www.unitedanimalcare.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-01 19:55:15', NULL, '2020-04-02 20:37:22', NULL, '', 0, 0, 'personal'),
(84, 2, 'Maria', 'Legarda', 'misslegarda@instagram.com', NULL, '$2y$10$nofNc9aT1Q9SkXHLmqlAVO8L8dylJX.isDKyn0urCygkYUctX8ePC', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'http://www.instagram.com/Misslegarda', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:26:38', NULL, '2020-04-02 17:45:01', NULL, '', 0, 0, 'personal'),
(85, 2, 'Daniela', 'Legarda', 'Danielalegarda@instagram.com', NULL, '$2y$10$6AWn0CA0.vXpuN4Nro.1z.VX3IKmBB8wEOt/dm6YQRkk/xK0pdopG', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'http://www.instagram.com/DanielaLegarda', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:41:53', NULL, '2020-04-02 17:48:33', NULL, '', 0, 90, 'personal'),
(86, 2, 'Harrell', 'Gunn', 'Harrellgunn@instagram.com', NULL, '$2y$10$aWDsSRiqJDPpA4ECTsyIH.8tv8aNlLBwa1BPOjRZQyZ4iRTEQqCqO', NULL, '(222) 222-2222', '(222) 222-2222', 'Phone', NULL, '', '', 0, 'Sample', 'Sample', 'Sample', '457 Alderwood Street', 'GA', 'Sandy Springs', '', '30328', 'https://www.instagram.com/harrell_gunn/', 1, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-02 17:56:17', NULL, '2020-04-02 17:56:29', NULL, '', 0, 90, 'personal'),
(89, 2, 'Shunya', 'Roytman', 'Shunya@finessecollection.com', NULL, '$2y$10$5UPYjBA9PlnzE9sQUvdsROvxEKZN5z.MsP/5QdmNNr1iwJ2u.PFBG', 'l83MeSEaj5aXAqMvjJEFslMqAmqwFJFukCyOgxfZCkq5nEHp9PXpn6ezHINz', '(561) 302-7351', '(561) 302-7351', 'Mobile', NULL, '', '', 0, 'Owner', 'ShunyaR', 'Sales', '9220 SW 14th St. Apt. 3401', 'Florida', 'Boca Raton', '', '33428', '', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-02 19:41:57', NULL, '2020-04-10 17:08:47', NULL, '', 0, 0, 'personal'),
(92, 5, 'dfsgsdf', 'gdsfg', 'alisyedamir2018@gmail.com', NULL, '$2y$10$VdU1k.3SGX5H0ZnTt91uUuHUSRZUQfGJHS2jtRwY4D7qzepiESJ/y', NULL, '(0304)-509-4429', '(324) 234-2342', 'Office Number', 'Executive', 'assets/admin/images/514795578.png', 'assets/admin/images/667448893.png', 0, 'New Postqweqw', 'wqeqwe', 'e2weqe', 'sd234234af', '234234', '234234', 'wrqwer234234', '23423423', 'https://www.youtube.com/', 0, '', '', 0, '', 0, 'https://www.facebook.com/syedaamir.ali.1000/', 0, 1, '2020-04-03 14:21:28', NULL, '2020-04-29 19:27:22', NULL, '', 0, 0, 'company'),
(94, 5, 'Syed Faizan Ali', 'qwe', 'alisyedaami123r@hotmail.com', NULL, '$2y$10$okGunF9O0s2qwTPPnYEK1.WFNSgq/IKHgxNwn4JaJjDSH7nTyQ2sG', NULL, '(234) 324-3242', '(234) 234-3243', 'Mobile', NULL, '', '', 0, 'eqweqwe', 'sdafsdfsd', 'fsafdsf', 'gdfgdsg', 'sdfasdf', 'fasdfasfdsf', 'sdafasdf', '324234', 'wfsdf.com', 0, 'Address', '', 0, '', 0, '', 0, 1, '2020-04-06 21:35:00', NULL, '2020-04-07 16:30:42', NULL, '', 0, 0, 'company'),
(95, 5, 'Syed Faizan Ali', 'dstsar', 'sdasdf@gmail.com', NULL, '$2y$10$RfceBF6qa9aNt7vTbkXJa.FDaWdUQrb8YigPTZPgKYOaAGPp/Ib36', NULL, '(324) 234-234_', '(324) 234-2342', 'Phone', NULL, '', '', 0, 'werwer', 'weqrwer', 'werqwer', 'sdfasdfasfdsaf', '43sdfsaf24324', '234sdfasdf23432', '', '324234', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 09:24:29', NULL, '2020-04-07 09:24:29', NULL, NULL, 0, 0, 'company'),
(96, 5, 'Peter', 'Tosh', 'Tosh@Tosh.com', NULL, '$2y$10$h2UrvntBAAkpx98PrMeUIequmWyycwg7yY51gkGcALK0t5miKd/KC', NULL, '(704) 223-6545', '(704) 223-6545', 'Phone', NULL, 'assets/admin/images/1353930725.jfif', 'assets/admin/images/796552639.JPG', 0, 'CEO', 'Tosh Enterprises', 'Test Company', '', '', '', '', '33256', 'www.Tosh.com', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 12:50:24', NULL, '2020-04-10 20:07:51', NULL, '', 0, 0, 'company'),
(97, 2, 'John', 'Smith', 'JSmith@Toshlcom', NULL, '$2y$10$iqtPQ/y0tNDPz0i0YD9speckBupZhbbPhiJuv9JuRbyryctXi1MQW', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'VP', '', '', 'New York', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 12:52:40', NULL, '2020-04-07 12:52:40', NULL, NULL, 0, 96, 'personal'),
(100, 2, 'dsfa', 'sdf', 'adqweqweqwemin@demo.com', NULL, '$2y$10$Llc.l7WlzwwwfBbH1m6r.Oi8CC0AT3HzQUwwOB2S2W5Wjqh40L4lS', NULL, '(231) 312-3213', '(231) 312-3213', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 16:31:16', NULL, '2020-04-07 16:31:16', NULL, NULL, 0, 94, 'personal'),
(101, 2, 'Chris', 'Smith', 'CSmith@Tosh.com', NULL, '$2y$10$82KJRHoPlsYiqhBTvJT4j.g9YHadvXcCDLPWOMm54ipCRo5I0w6qO', NULL, '(704) 563-2223', '(704) 563-2223', 'Mobile', NULL, NULL, NULL, 0, 'SVP', '', '', 'New York', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 17:09:32', NULL, '2020-04-07 17:09:32', NULL, NULL, 0, 96, 'personal'),
(104, 2, 'dsfa', 'sdf', 'aamir.ali@technado.co', NULL, '$2y$10$grjC4zTcAhwaRbJVCqj1VeDVJCWmMHumdyfpd/2ICRQHgkslf42ei', 'vLJM0hR7lBfatj7xhk8lza5Vmn2uo3MdNNGDWFoLjT0v7FGQOyJtE7ZEd9GE', '(231) 231-2312', '(231) 231-2312', 'Mobile', NULL, 'assets/admin/images/936408597.png', '', -72, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:01:55', NULL, '2020-04-23 20:55:18', NULL, NULL, 0, 94, 'personal'),
(106, 2, 'Kristin', 'Fearless', 'KFearless@Tosh.com', NULL, '$2y$10$tVG9yPn53kZsNC1uJEjeLOPoxXVhvxcB9SkezI/yqmPtWdTCRsFP.', NULL, '(954) 555-5555', '(954) 555-5555', 'Mobile', NULL, NULL, NULL, 0, 'Assistant', '', '', 'Delray Beach', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:23:57', NULL, '2020-04-07 22:23:57', NULL, NULL, 0, 105, 'personal'),
(107, 2, 'dsfa', 'sdf', 'alisyedfaiz1234@gmail.com', NULL, '$2y$10$9TeClhMfrQc3L7yu8bmg7uOK07arsiWbijxrePfnk90tAnqHKmW8q', NULL, '(323) 423-4234', '(323) 423-4234', 'Mobile', NULL, NULL, NULL, 0, 'New Post', '', '', 'sdaf', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-07 22:34:58', NULL, '2020-04-07 22:34:58', NULL, NULL, 0, 94, 'personal'),
(108, 5, 'Ronald', 'Leger', 'rleger@regelgroupmarketing.com', NULL, '$2y$10$5umnJpahyQflRPLcKdFgPeWa1HItfIVczylYu0r3rEk853YS5v.Xm', NULL, '(772) 236-0338', '(772) 408-3804', 'Mobile', 'CEO/Founder', 'assets/admin/images/581540325.jpg', 'assets/admin/images/2125309849.png', 0, 'CEO/Founder', 'The Regel Group Marketing Co.', 'We are a marketing company that specializes in digital marketing and B2B sales. Our job is to help leverage and gain clients for your business and get the exposure you need!', '', 'FL', 'Port St Lucie', 'St Lucie County', '', 'http://www.beyondant.com/', 0, 'Website', '', 0, 'https://www.instagram.com/theregelgroupllc/', 0, 'https://www.facebook.com/theregelgroupllc/?ref=bookmarks', 0, 1, '2020-04-08 19:12:21', NULL, '2020-04-23 16:32:44', NULL, '', 0, 0, 'company'),
(109, 2, 'Jonathan', 'Volcy', 'jonathan.regelgroup@gmail.com', NULL, '$2y$10$bNxyNcYci2oz2uAsAv7Ox.49BQnU6khQ3g6BlTfBBLxQvl9cxZeL6', NULL, '(772) 631-0669', '(772) 631-0669', 'Mobile', NULL, NULL, NULL, 0, 'Senior Executive', '', '', 'Port St Lucie', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:15:37', NULL, '2020-04-08 19:15:37', NULL, NULL, 0, 108, 'personal'),
(110, 2, 'Javier', 'Nazario', 'javier.regelgroup@gmail.com', NULL, '$2y$10$MbFhFa0J5UGUFiWoZEFGFeR.sIPMNRSa9Bjk0kBhTBVtU6/yqJ0mq', NULL, '(862) 703-6031', '(862) 703-6031', 'Mobile', NULL, NULL, NULL, 0, 'Senior Executive', '', '', 'Port St Lucie', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:19:42', NULL, '2020-04-19 22:05:54', NULL, NULL, 0, 108, 'personal'),
(111, 2, 'Lamephia', 'Shaw', 'shaw.regelgroup@gmail.com', NULL, '$2y$10$IRY2lDuRPTzke.4osJy3j.epzMSSePp6Oxt2L6oOpsgOPhV13Hh6m', NULL, '(754) 214-9289', '(754) 214-9289', 'Mobile', NULL, NULL, NULL, 0, 'Senior Executive', '', '', 'Ft Lauderdale, FL', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-08 19:22:08', NULL, '2020-04-19 22:12:13', NULL, NULL, 0, 108, 'personal'),
(112, 5, 'Syed Faizan Ali', 'fgdfg', 'company99675@hotmail.com', NULL, '$2y$10$372iwEbDmzJjWHQj7Hihpu8oTf9TfgqR7gR2HAs1RXB4FXiOwRK/6', NULL, '(344) 354-3543', '(345) 435-4354', 'Mobile', NULL, '', '', 0, 'dsfsafds', 'fdgfdsgsfd', 'sgdfgdfg', 'gdfgdsg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-09 06:51:05', NULL, '2020-04-09 06:51:05', NULL, NULL, 0, 0, 'company'),
(113, 2, 'Nathan', 'Martin', 'ibrahimlakhani93@gmail.com', NULL, '$2y$10$XF7jaRwtgU5TXp/.DCjE1.s69snX2dZT85lna1ryy.IMpfMlCpeuS', NULL, '', '(609) 346-4399', 'Mobile', NULL, '', '', 0, 'Business Development Officer', 'Beyondant', 'Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination.', 'House# 014(K4), Karimabad Society', 'Sindh', 'Karachi', '', '75300', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-10 01:13:30', NULL, '2020-04-10 01:54:42', NULL, '', 0, 0, 'company'),
(117, 2, 'Jayden', 'Dumont', 'jaydendumontbusiness@gmail.com', NULL, '$2y$10$i6HXT1.UGGpvHtEP4ZeZRO53jKA0ZrmcTxNT1vyr4XFPPn/7U68V2', NULL, '(954) 638-9921', '(954) 638-9921', 'Mobile', NULL, 'assets/admin/images/2090800145.jpg', 'assets/admin/images/1677230803.jpg', 0, 'Athlete', 'USSDA', 'United States Soccer Development Academy - Beyondant CODE: JAYDEN39', '', '', '', '', '', 'http://www.ussoccerda.com', 0, 'Website', '', 0, 'https://www.instagram.com/jaydendumont/?hl=en', 0, '', 0, 1, '2020-04-10 23:09:24', NULL, '2020-04-10 23:23:58', NULL, '', 0, 0, 'personal'),
(118, 2, 'Blake', 'Rubin', 'brubin19@bellsouth.net', NULL, '$2y$10$nOmTGvEf7dtiL3f4Rt9BbuesKAnHV5No/pbFKvpTioamHnn3KjG0q', NULL, '(954) 604-8652', '(954) 604-8652', 'Mobile', NULL, '', 'assets/admin/images/2114649435.jpg', 0, 'Authorized Reseller', 'Beyondant', 'Promo Code:  Rubin52', '2634 Oakbrook Drive', 'FL', 'Weston', '', '33332', 'www.beyondant.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-11 17:21:42', NULL, '2020-04-11 17:21:42', NULL, NULL, 0, 0, 'personal'),
(120, 5, 'Steven', 'Silberman', 'ssilberman2012@gmail.com', NULL, '$2y$10$mYcqnDT4nPCwnnTIGLC3muduvComsAUrOmglcBrogYjnp5yjhsjRK', NULL, '', '(954) 529-5420', 'Mobile', NULL, 'assets/admin/images/2104600993.jpeg', 'assets/admin/images/996398315.png', 0, 'CEO', 'Gotta Catch Jamaal LLC', 'e-commerce POD clothing, handmade artwork, cryptocurrency, freelance journalism', '600, Uno Lago Drive', 'FL', 'Juno Beach', '', '33408', 'https://www.etsy.com/shop/TrndyGrphcTz', 0, 'Website', 'www.linkedin.com/in/stevensilberman', 0, '@stevesemojishirts', 0, 'Steve’s Emoji Shirts', 0, 1, '2020-04-16 10:44:55', NULL, '2020-04-16 10:44:55', NULL, NULL, 0, 0, 'company'),
(124, 5, 'Donna', 'Cameron', 'westsidemisfits1@gmail.com', NULL, '$2y$10$jJwWbWH2c9GkGgIcSGha4ecb42Y3gdeQEwo0oPAede0Gu7pZq/Wdq', NULL, '(404) 438-0515', '(678) 999-6306', 'Office Number', 'CoOwner', 'assets/admin/images/1899863120.jpeg', 'assets/admin/images/2023342396.jpeg', 0, 'Co-Owner', 'Misfits Radio', 'Internet Radio Station', '1780 Childress Drive SW', 'Georgia', 'Atlanta', '', '30311', 'MisfitsMediaGroup.net', 1, '', '', 0, 'http://www.instagram.com/misfits_radio/', 0, 'https://www.facebook.com/MisfitsMediaGroup/', 0, 1, '2020-04-18 01:48:33', NULL, '2020-04-18 01:57:16', NULL, 'https://./vm.tiktok.com/WVMsK1/', 0, 0, 'company'),
(125, 5, 'Cartier', 'Fitch', 'ciss_by_fitch@yahoo.com', NULL, '$2y$10$zQAUnqwX86uphkdusN7vw.KEF4HNEYD1MMXoD9Wlbbz.mr5OGLphC', NULL, '(234) 205-8501', '(234) 716-2466', 'Mobile', 'Cosmetics', 'assets/admin/images/1591880400.jpeg', 'assets/admin/images/525910129.jpeg', 0, 'Ms', 'Ciss By Fitch Cosmetics', 'Cosmetics', '220 Elizabeth pkwy', 'Oh', 'Akron', '', '44304', 'Don’t have one yet', 0, 'Address', '', 0, 'Https://www.instagram.com/ciss_by_fitch', 0, 'https://www.facebook.com/Cissbyfitch', 0, 1, '2020-04-18 15:40:53', NULL, '2020-04-18 15:43:11', NULL, '', 0, 0, 'company'),
(126, 2, 'Cartier', 'Fitch', 'fitch_cartier@yahoo.com', NULL, '$2y$10$idM7iUolBhN6tAiVA/W4vOn8hmCO9VtmDEKJB17bULY/aKQ1nuPqi', NULL, '2342058501', '2342058501', 'Mobile', NULL, NULL, NULL, 0, 'Owner', '', '', 'Akron oh', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-18 15:42:00', NULL, '2020-04-18 15:42:00', NULL, NULL, 0, 125, 'personal'),
(127, 2, 'Joe', 'Sample', 'JSample@Sample.com', NULL, '$2y$10$PO/foup5obR7wssssVv1MOtE.X4dvUaK1RPGfOzTY/aUaOxVX0Gm2', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-18 17:57:35', NULL, '2020-04-18 17:57:35', NULL, NULL, 0, 0, 'personal'),
(133, 2, 'Marc', 'Rubin', 'MRubin@Beyondant.com', NULL, '$2y$10$/oYVtIuaKBghThA9A7plPOe00CAz7lQLEztV37kAQeq8JO2oyzY66', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-19 16:11:44', NULL, '2020-04-19 16:11:44', NULL, NULL, 0, 0, 'personal'),
(134, 2, 'Marc', 'Sussman', 'MSussman@Beyondant.com', NULL, '$2y$10$yHGPmLEA2c6td.bMdVPSGu.d6Svh8rJUCVSQ2W/Cvs4LO3GPcs0pO', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-19 16:13:25', NULL, '2020-04-19 16:13:25', NULL, NULL, 0, 0, 'personal'),
(135, 2, 'Ben', 'Boulet', 'ben@b-boulet.com', NULL, '$2y$10$P3sFiyfZx85u/ifbBKZNc.YQvvFM8QeUUcF7F7cQSFfy9TbD.Vdmy', NULL, '', '(954) 815-5678', 'Mobile', NULL, '', '', 0, 'President', 'QuestComm Inc.', 'Wireless Communications', 'PO Box 590098', 'Fl', 'Tamarac', '', '33359', '', 0, '', 'https://www.linkedin.com/in/ben-boulet-56b34511/', 1, '', 0, '', 0, 1, '2020-04-19 16:14:26', NULL, '2020-04-19 16:14:26', NULL, NULL, 0, 0, 'personal'),
(136, 2, 'Dustin', 'Callender', 'dcsportz9@gmail.com', NULL, '$2y$10$1He1PpOCd1YreVCu7t9HiuA4crqYPJLBFG3ey/unv9WU4FYNToTmS', NULL, '', '(631) 747-5976', 'Mobile', NULL, 'assets/admin/images/1829344983.png', 'assets/admin/images/307989353.png', 0, 'Owner', 'DC Sports Apparel', 'Clothing Brand', '', '', '', '', '', 'https://www.teamdcsportsapparel.com/', 1, 'Website', '', 0, '@teamdcsports_apparel', 0, 'Team DC Sports', 0, 1, '2020-04-19 18:50:25', NULL, '2020-04-27 22:23:09', NULL, '', 0, 0, 'company'),
(138, 5, 'Jeffrey', 'Lewis', 'cornercutsmobile@gmail.com', NULL, '$2y$10$ozQD0iaL8ui2bzH7WeIpVOvsRJExNvsskIVyQe5.DYAGQBfuLdsP.', 'Pe8agYBY8xCU6teLkIf2xMF8d6dgxAIxJrxlit69hUSmdI3y99DTY83ZFF0X', '561-789-CUTS', '561-789-CUTS', 'Mobile', 'Master Barber', 'assets/admin/images/1278117900.jpg', 'assets/admin/images/1301719645.jpeg', 0, '', 'Corner Cuts Mobile', 'Mobile Barber', 'I come to you depending on your location and prices are subject to change...', 'Florida', 'From Port Saint Lucie / Lake Worth', '', '', 'Cornercutsmobile.com', 0, '', '', 0, 'https://www.instagram.com/cornercutsmobile/', 0, '', 0, 1, '2020-04-19 20:11:50', NULL, '2020-05-04 11:06:37', NULL, '', 0, 0, 'company'),
(140, 5, 'Robert', 'Henry', 'AnisupeClothing@gmail.com', NULL, '$2y$10$OuAWd.JF6VOTv.FzXiMH5.EUzjA5xcZKhhcfwpEPT.LVtMkhDUyFa', 'l69SPIbcbOiVA4DZDNATol8TA62a9jNhsZX8NrwFHCmI5qbOj6763gYyBICd', '3476409000', '', '', 'CEO', NULL, 'assets/admin/images/728988925.jpeg', 0, '', 'Anisupe Clothing', 'Multicultural urban clothing brand', '', '', '', '', '11207', 'https://www.anisupeclothingofficial.com/', 1, '', '', 0, 'https://www.instagram.com/anisupeclothingofficial/', 0, 'Anisupe Clothing', 0, 1, '2020-04-19 20:44:37', NULL, '2020-04-26 01:05:28', NULL, '', 0, 0, 'company'),
(142, 5, 'Javier', 'Nazario', 'jn57872002@gmail.com', NULL, '$2y$10$SvF6/hxG0QrT5psf//1Te.H3cxMOm1mInwB0SGlZB6P4syjIDmqwm', NULL, '', '', '', NULL, NULL, NULL, 0, '', 'Capsule Corp.', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-19 22:15:57', NULL, '2020-04-19 22:15:57', NULL, NULL, 0, 0, 'company'),
(143, 5, 'Travis', 'O\'Neal', 'travis.oneal@christfellowship.church', NULL, '$2y$10$SxMFnHnScshqDqY4rKV5L.L.YSGn2PvK2TgFF3lfmEKPXaoDFiDky', NULL, '772-285-3721', '', '', 'Campus Pastor', NULL, 'assets/admin/images/1265084668.JPG', 0, '', 'Christ Fellowship', 'Non-denominational church', '10250 SW Village Pkwy', 'FL', 'Port St. Lucie', '', '34987', 'www.christfellowship.church', 0, '', '', 0, '@cf.psl', 0, 'https://www.facebook.com/CFPSL', 1, 1, '2020-04-20 12:58:13', NULL, '2020-04-21 20:21:05', NULL, '', 0, 0, 'company'),
(144, 5, 'Rock', 'Cain', 'Rakhshan.cain@gmail.com', NULL, '$2y$10$sxyzUGI/e5wUXBsYFyrA4O0rC2Awd3SHZMITQVWPKwYhDNeb.E7sa', NULL, '', '', '', NULL, NULL, NULL, 0, '', 'Expansion Church', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-20 12:59:19', NULL, '2020-04-20 12:59:19', NULL, NULL, 0, 0, 'company'),
(145, 2, 'Trad', 'Hamdan', 'thamdan@quest-comm.com', NULL, '$2y$10$lvH4npDMYn6Cyn3W1MAqTOOJuDu6E2OTkz4UMXzdYdExnCTX/hsou', NULL, '(954) 554-0503', '(954) 554-0503', 'Mobile', NULL, 'assets/admin/images/123133691.png', 'assets/admin/images/648102158.png', 0, 'General Manager', 'QuestComm Management Inc', 'Metro by T-mobile', 'PO Box 590098', 'FL', 'Tamarac', '', '33359', '', 0, '', 'https://www.linkedin.com/in/trad-hamdan-260546164/', 0, '', 0, '', 0, 1, '2020-04-21 16:09:19', NULL, '2020-04-21 16:19:56', NULL, '', 0, 0, 'personal'),
(147, 5, 'Patti', 'Giunta', 'pgiunta@angpools.com', NULL, '$2y$10$SMpq0tgMLR8XXnD0cZImXuNu/HKTVwE.8v/5CvTFAx8CGVtOjhjFW', NULL, '', '', '', NULL, NULL, NULL, 0, '', 'A&G Concrete Pools, Inc.', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:35:51', NULL, '2020-04-21 23:35:51', NULL, NULL, 0, 0, 'company'),
(148, 2, 'Art', 'Allen', 'aallen@angpools.com', NULL, '$2y$10$Q5GDa.RNXTxR92tnO9RwEe0hEbteDc5z2FcJuaAAkgTIj7LdqPhva', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Owner', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:36:58', NULL, '2020-04-21 23:36:58', NULL, NULL, 0, 147, 'personal'),
(149, 2, 'Travis', 'Leonard', 'tleonard@angpools.com', NULL, '$2y$10$TMaqu/VGgKYHq8lLCA9LI.TlAju0f72n23vnZ6/AvU6o9KTYR/Wmm', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'CEO / COO', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:38:05', NULL, '2020-04-21 23:38:05', NULL, NULL, 0, 147, 'personal'),
(150, 2, 'Bobby', 'Austin', 'baustin@angpools.com', NULL, '$2y$10$IzIjvh49pppJqHFU8vO3xuK4K7cZrGT8YnrtH2QzJDitqO5iKuAW6', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:39:11', NULL, '2020-04-21 23:39:11', NULL, NULL, 0, 147, 'personal'),
(151, 2, 'Jason', 'Baran', 'jbaran@angpools.com', NULL, '$2y$10$vF8y.7CBoI.diXLQO5BwDOb8Fz.XjNUlnDf5bNMtB11Wb6DYkzmh2', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:39:45', NULL, '2020-04-21 23:39:45', NULL, NULL, 0, 147, 'personal'),
(152, 2, 'Dave', 'Curland', 'dcurland@angpools.com', NULL, '$2y$10$65zMIp9ECOUcvH0a0mz9YOCr0YvQ4CPMtHgzRboJy20/6d4lnD9tq', NULL, '(772) 878-7752', '(561) 756-4105', 'Mobile', NULL, 'assets/admin/images/4781311.png', 'assets/admin/images/1201071745.png', 0, 'Professional Designer', 'A&G Concrete Pools', 'Simple to Sensational', '8880 Glades Cut-off Road', 'Florida', 'Port Saint Lucie', '', '34986', 'Www.angpools.com', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-21 23:40:13', NULL, '2020-04-29 02:08:57', NULL, '', 0, 147, 'personal'),
(153, 2, 'Frank', 'DelRocco', 'frankagpools@hotmail.com', NULL, '$2y$10$e0t.5wqST.OUzXP2V2Ejh.GVNlWdLF1R8xcThSHCZi5CyOE6bt9/G', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Sales & Professional Designer', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:41:31', NULL, '2020-04-21 23:41:31', NULL, NULL, 0, 147, 'personal');
INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `contact_number`, `mobile_number`, `mobile_check`, `occupation`, `profile_picture`, `cover_image`, `cover_pos`, `job_title`, `company_name`, `company_description`, `address`, `state`, `city`, `province`, `zipcode`, `website`, `website_check`, `website_address`, `linkedin`, `linkedin_check`, `instagram`, `instagram_check`, `facebook`, `facebook_check`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `tiktok`, `tiktok_check`, `parent_id`, `acc_type`) VALUES
(154, 2, 'Lillie', 'Shepherd', 'lshepherd@angpools.com', NULL, '$2y$10$q8qgtfF8zehiVv8u9088H.Dm2FrvwcfWOHpPWF19pjcCPFM8EctPO', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Purchasing Director', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:42:17', NULL, '2020-04-21 23:42:17', NULL, NULL, 0, 147, 'personal'),
(155, 2, 'DJ', 'Hahn', 'dhahn@angpools.com', NULL, '$2y$10$I07EVheaeYfsQdewmWTRquluHWp9MUhsWvDCakKMo7VD/i3MwSN1a', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Service Coordinator', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:43:05', NULL, '2020-04-21 23:43:05', NULL, NULL, 0, 147, 'personal'),
(156, 2, 'Jonathan', 'Hoyt', 'jhoyt@angpools.com', NULL, '$2y$10$iGh.3rLRRpxHxZ23rs2bAOcSdmu.YKd/io0fD3axt.K6a1g8xIFuO', NULL, '', '', 'Mobile', NULL, NULL, NULL, 0, 'Service Manager', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-21 23:44:11', NULL, '2020-04-21 23:44:11', NULL, NULL, 0, 147, 'personal'),
(157, 2, 'Joe', 'Safieddine', 'ysafieddine@hotmail.com', NULL, '$2y$10$msprcfI9AXSzJEC0Itb2yelEqbwZVL0COqGt/AuKfUvpEDEjCunFy', NULL, '', '(097) 977-9779', 'Mobile', NULL, 'assets/admin/images/821078598.png', '', 0, 'CEO', 'Integrated Aluminum Limited', 'Recycling', 'Plot 5110, Lumumba Road', 'Lusaka', 'Lusaka', '', '30973', '', 0, 'Address', 'https://www.linkedin.com/in/joe-safieddine-88961072/', 1, '', 0, '', 0, 1, '2020-04-25 20:42:55', NULL, '2020-04-25 20:45:55', NULL, NULL, 0, 0, 'personal'),
(158, 5, 'Rabih', 'Moussa', 'rabih@farama.com.tr', NULL, '$2y$10$QdWWsscFBOT5mNNcdWfZfe4CIyn2AhekZBv6ZfhbzLJ070pmxkACO', NULL, '(905) 446-2042 52_', '(905) 446-2042', 'Mobile', NULL, 'assets/admin/images/592099661.JPG', 'assets/admin/images/2023770797.jpeg', 0, 'Mr', 'FARAMA Export and Import', 'Export of all Turkish Products to the Middle East Region and Africa', 'Nurol Park Offices, Basin Ekspres, Bahar Cd. Bagcilar,', 'Turkey', 'Istanbul', '', '31212', 'www.farama.com.tr', 0, 'Website', '', 0, '', 0, '', 0, 1, '2020-04-25 22:00:58', NULL, '2020-04-25 22:00:58', NULL, NULL, 0, 0, 'company'),
(162, 2, 'Rabih', 'Moussa', 'rabih@rabihmoussa.com', NULL, '$2y$10$03J0KxWDQmDUURfv6aZs9edj8lXKQ2oyAlFVGG4j1NZj.fSi/zaUa', NULL, '(905) 446-2042 52_', '(905) 446-2042', 'Phone', NULL, 'assets/admin/images/792722942.jpg', 'assets/admin/images/516620267.jpg', 0, 'Mr', 'FARAMA Export and Import', 'Export of all Turkish Products to the Middle East Region and Africa', 'Nurol Park Offices, Basin Ekspres, Bahar Cd. Bagcilar,', 'Turkey', 'Istanbul', '', '31212', 'www.farama.com.tr', 0, 'Address', 'https://www.linkedin.com/in/rabih-moussa-29381212/', 1, 'https://www.instagram.com/rabihmoussa/', 1, '', 0, 1, '2020-04-26 07:59:54', NULL, '2020-04-26 07:59:54', NULL, NULL, 0, 0, 'personal'),
(163, 2, 'dsfa', 'sdf', 'diana123@gmail.com', NULL, '$2y$10$HURpJHK//mwFoU7m.9YDheH61/cCjtxwy7RkhiLd8NjiR5NZiZzt6', NULL, '6545635465656', '6545635465656', 'Mobile', NULL, NULL, NULL, 0, 'Faizan Post Changed', '', '', 'gdsfgdgdfg', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-29 19:07:50', NULL, '2020-04-29 19:07:50', NULL, NULL, 0, 92, 'personal'),
(164, 7, 'Amir', 'Ali', 'alisyedaamir@yahoo.com', NULL, '$2y$10$sKUj/FKOtHJO8YgUAiN/S.NrMyZlSICmudpEgUYhaB1R/WZIDn05C', NULL, '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-30 20:40:44', NULL, '2020-04-30 20:40:44', NULL, NULL, 0, 0, 'individual'),
(167, 7, 'Steve', 'Dumont', 'SDumont@Geiststudios.com', NULL, '$2y$10$sR8XLQBiy4jRAftlPCoVteahm4XtjKOoWkHGbyR4bbb53D/cHR0ze', 'lDSfLIa4IU4MsZyvwgVrrI65xbLXfssgfEVJpVF71qoKYsHnJ40xdiCX4Hf2', '', '', '', NULL, NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-04-30 21:15:37', NULL, '2020-05-01 18:27:29', NULL, NULL, 0, 0, 'individual'),
(168, 5, 'Donna', 'Cameron', 'donnacmrn@gmail.com', NULL, '$2y$10$Zb44346nRbSgSKDfk5r06e4FL1jDBMR.DjWJ3FasqLNX759Ius08q', NULL, '', '', '', NULL, NULL, NULL, 0, '', 'Misfits Radio', '', '', '', '', '', '', '', 0, '', '', 0, '', 0, '', 0, 1, '2020-05-01 09:55:48', NULL, '2020-05-01 09:55:48', NULL, NULL, 0, 0, 'company');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
