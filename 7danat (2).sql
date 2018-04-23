-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 03:28 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7danat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `desc_en`, `desc_ar`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'one555', 'one', 'one', 'kk', 'one', '2018-04-04 07:16:57', '2018-04-04 10:51:36', '2018-04-04 10:51:36'),
(2, 'one', 'one', 'one', 'kk', 'one', '2018-04-04 08:02:28', '2018-04-04 09:46:41', '2018-04-04 09:46:41'),
(3, 'one', 'one', 'one', 'kk', 'one', '2018-04-04 08:15:00', '2018-04-04 10:52:56', '2018-04-04 10:52:56'),
(4, 'one', 'one', 'one', 'kk', 'one', '2018-04-04 08:16:34', '2018-04-04 08:22:21', '2018-04-04 08:22:21'),
(5, 'one665', '6', '6', '6', '6', '2018-04-04 08:22:39', '2018-04-04 11:15:49', '2018-04-04 11:15:49'),
(6, 'one', '6', '6', '6', '6', '2018-04-04 08:24:21', '2018-04-04 11:16:09', '2018-04-04 11:16:09'),
(7, 'one', '6', '6', '6', '6', '2018-04-04 08:24:45', '2018-04-04 11:17:05', '2018-04-04 11:17:05'),
(8, 'one77', '77', '77', '77', '77', '2018-04-04 08:25:11', '2018-04-04 11:17:26', '2018-04-04 11:17:26'),
(9, 'one66', '77', '77', '77', '77', '2018-04-04 08:25:22', '2018-04-04 08:55:27', '2018-04-04 08:55:27'),
(10, '77778689897', '77', '77', '777887', '7777', '2018-04-04 08:26:53', '2018-04-04 11:16:21', '2018-04-04 11:16:21'),
(11, 'last', 'laszt', 'last', 'last', 'last', '2018-04-04 09:37:26', '2018-04-04 11:23:18', '2018-04-04 11:23:18'),
(12, 'ioio', 'oio', 'ioio', 'ioio', 'ioio', '2018-04-04 09:45:08', '2018-04-04 11:23:27', '2018-04-04 11:23:27'),
(13, 'iii', 'ioio', 'iiio', 'ioio', 'ioioio', '2018-04-04 09:45:19', '2018-04-08 08:52:10', '2018-04-08 08:52:10'),
(14, 'hadanat', 'one', '6', '77', 'asu-logo.png', '2018-04-08 06:55:37', '2018-04-11 10:44:35', NULL),
(15, 'madares', 'laszt', 'last', 'ioio', 'images.jpg', '2018-04-08 06:59:21', '2018-04-11 10:44:49', NULL),
(16, 'gama3at', 'tt', 'tt', 'tt', 'downloada.jpg', '2018-04-08 08:51:58', '2018-04-11 11:11:04', NULL),
(17, 'hospitals', 'rtrt', 'rttr', 'trtr', 'downloadr.jpg', '2018-04-08 09:08:33', '2018-04-11 10:45:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `mobile`, `product_name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tamer', 'tamer@yahoo.com', '2121', 'eeyey', '$2y$10$//mO77HhHu0tRHo8Zn/21e32NEzER3rrEpuTWA469NhZOYkUwEMTS', 'zXe2057IJJUf9RE3nQaE2YbxWLMJvwpWc8Dwu91ZvE8OsgNpu7TLKGmgKRzx', '2018-04-19 07:53:44', '2018-04-19 07:53:44'),
(2, 'admin', 'fathi@admin.com', '12345', 'trtrtr', '$2y$10$rGcE.T4qQy3/NMojazFvqermdWX7oiTFEHq4l8MgDSAvc7nf7wrYO', NULL, '2018-04-19 08:14:17', '2018-04-19 08:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `client_password_resets`
--

CREATE TABLE `client_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_profiles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_03_22_080834_create_users_systems_tables', 1),
(5, '2018_04_04_091305_create_categories_table', 2),
(6, '2018_04_04_121122_create_products_table', 3),
(7, '2018_04_17_115748_create_clients_table', 4),
(8, '2018_04_17_115749_create_client_password_resets_table', 4),
(9, '2018_04_17_135942_create_reviews_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ontheflypostions`
--

CREATE TABLE `ontheflypostions` (
  `id` int(11) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advantages_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `advantages_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `distance` int(11) NOT NULL,
  `count_view` int(11) NOT NULL,
  `total_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_en`, `name_ar`, `cover`, `logo`, `desc_en`, `desc_ar`, `advantages_en`, `advantages_ar`, `address`, `latitude`, `longitude`, `conditions_en`, `conditions_ar`, `category_id`, `created_at`, `updated_at`, `deleted_at`, `distance`, `count_view`, `total_rate`) VALUES
(1, 'uoynoonnonjoon', 'y', 'y', 'yuihgui', 'yuuy', 'yy', 'huyuhy', 'yy', 'uhyuyh', 'yuy', 'yhuu', 'yuyu', 'yuhuy', 'huyy', '2018-04-04 10:42:31', '2018-04-04 11:47:04', '2018-04-04 11:47:04', 0, 0, 0),
(2, 'el salam el dawly', 'uu', 'downloada.jpg', 'AE33.jpg', 'u', 'uu', 'u', 'uu', '20 ميدان الجزائر، Al Basatin Al Gharbeyah, El-Basatin, Cairo Governorate', '29.9764164', ',31.2735302', 'u', 'u', '17', '2018-04-04 12:03:01', '2018-04-22 09:05:32', NULL, 3004, 79, 3),
(3, 'oneo9098', 'one', 'بشل2فىغ.jpg', 'sorya.PNG', '89899', '98790', '00980', '9809009', 'Novo Progresso - State of Pará, 68193-000, Brazil', '-7.5095349', '-55.8929437', '098098', '09809809', '14', '2018-04-08 07:10:54', '2018-04-11 11:17:48', NULL, 0, 0, 0),
(4, '54777', '54654', 'sorya.PNG', 'downloada.jpg', '45', '5646', '54', '565', 'Kammweg Hörselberg, 99820 Wutha-Farnroda, Germany', '50.9643807', '10.4062974', '654', '654', '17', '2018-04-08 07:13:26', '2018-04-22 09:05:32', NULL, 2906, 0, 0),
(5, 'test', 'test', '26112426_1922747284406854_2714925771820340291_n.jpg', 'AE33.jpg', 'uyiui', 'uiyiu', 'iuyui', 'uioy', 'Hassan Ma\'moon, Al Manteqah as Sadesah, Nasr City, Cairo Governorate, Egypt', '30.0565394719953', '31.35794061389163', 'iuyiu', 'uiyuiy', '16', '2018-04-08 11:34:41', '2018-04-08 11:47:49', NULL, 0, 0, 0),
(6, 'teztta reaa', '.lkuij', 'downloadr.jpg', 'downloada.jpg', '<ul><li><b><u><font color=\"#ff0033\">rrrr</font></u></b><br></li></ul>', 'uiyuiy', 'rr', 'rrr', 'Dr Ibrahim Abou El-Naga, Al Hadiqah Ad Dawleyah, Nasr City, Cairo Governorate, Egypt', '30.044281', '31.340002000000027', 'rr', 'rr', '17', '2018-04-10 06:38:05', '2018-04-22 09:05:31', NULL, 9, 1, 0),
(7, 'yt', 'ytygt', 'AE33.jpg', 'asu-logo.png', '<ul><li><b><font color=\"#66cc99\">tyghfg</font></b><br></li></ul>', 'yutg', 'hgv', 'ygfv', '00172 Rome, Metropolitan City of Rome, Italy', '41.87194', '12.567379999999957', 'gh', 'gf', '17', '2018-04-10 07:01:23', '2018-04-22 07:06:50', NULL, 2135, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `mobile`, `email`, `city`, `rating`, `review`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rdeftr', '222', 'da@yahoo.com', '222', 5.00, '222', 2, '2018-04-18 07:47:09', '2018-04-18 07:47:09', NULL),
(2, '656565', '777', 'fe@yahoio.com', 'vvv', 5.00, '44', 2, '2018-04-18 07:49:21', '2018-04-18 07:49:21', NULL),
(3, '555', '4444', 'e@yahoo.com', '444', 1.00, '444', 2, '2018-04-18 08:08:03', '2018-04-18 08:08:03', NULL),
(4, 'yyy', '6666', 're3@yahoo.com', '6666', 2.00, '666666', 2, '2018-04-18 08:11:57', '2018-04-18 08:11:57', NULL),
(5, 'yyy', '6666', 're3@yahoo.com', '6666', 2.00, '666666', 2, '2018-04-18 08:12:44', '2018-04-18 08:12:44', NULL),
(6, 'yyy', '6666', 're3@yahoo.com', '6666', 2.00, '666666', 2, '2018-04-18 08:20:06', '2018-04-18 08:20:06', NULL),
(7, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:20:49', '2018-04-18 08:20:49', NULL),
(8, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:21:20', '2018-04-18 08:21:20', NULL),
(9, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:21:40', '2018-04-18 08:21:40', NULL),
(10, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:21:56', '2018-04-18 08:21:56', NULL),
(11, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:23:15', '2018-04-18 08:23:15', NULL),
(12, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:23:36', '2018-04-18 08:23:36', NULL),
(13, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:26:15', '2018-04-18 08:26:15', NULL),
(14, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:26:59', '2018-04-18 08:26:59', NULL),
(15, 'rere', '9584585875', 'sw@yahoo.com', 'fdfdf', 3.00, 'fdfdfd', 2, '2018-04-18 08:27:41', '2018-04-18 08:27:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_password_resets`
--

CREATE TABLE `system_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `system_profiles`
--

CREATE TABLE `system_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `active_by` int(11) NOT NULL DEFAULT '0',
  `active_date` timestamp NULL DEFAULT NULL,
  `unactive_by` int(11) NOT NULL DEFAULT '0',
  `unactive_date` timestamp NULL DEFAULT NULL,
  `lastedit_by` int(11) NOT NULL DEFAULT '0',
  `lastedit_date` timestamp NULL DEFAULT NULL,
  `add_by` int(11) NOT NULL DEFAULT '0',
  `add_date` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_profiles`
--

INSERT INTO `system_profiles` (`id`, `name`, `permissions`, `active`, `active_by`, `active_date`, `unactive_by`, `unactive_date`, `lastedit_by`, `lastedit_date`, `add_by`, `add_date`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', '{\"users\":1,\"users_add\":1,\"users_view\":1,\"users_edit\":1,\"users_delete\":1,\"users_active\":1,\"profiles\":1,\"profiles_add\":1,\"profiles_edit\":1,\"profiles_delete\":1,\"profiles_active\":1,\"profiles_view\":1,\"categories\":1,\"categories_add\":1,\"categories_show\":1,\"categories_view\":1,\"categories_edit\":1,\"categories_delete\":1,\"categories_active\":1,\"products\":1,\"products_add\":1,\"products_show\":1,\"products_view\":1,\"products_edit\":1,\"products_delete\":1,\"products_active\":1,\"settings\":1,\"system\":1,\"profile\":1,\"dashboard\":1}', 1, 1, '2018-04-04 06:07:46', 0, NULL, 1, '2018-04-04 12:33:06', 1, '2018-04-04 06:07:46', 0, NULL, NULL, '2018-04-04 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_all_projects` int(11) NOT NULL DEFAULT '0',
  `custom_views_projects` longtext COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL DEFAULT '0',
  `active_by` int(11) NOT NULL DEFAULT '0',
  `active_date` timestamp NULL DEFAULT NULL,
  `unactive_by` int(11) NOT NULL DEFAULT '0',
  `unactive_date` timestamp NULL DEFAULT NULL,
  `lastedit_by` int(11) NOT NULL DEFAULT '0',
  `lastedit_date` timestamp NULL DEFAULT NULL,
  `add_by` int(11) NOT NULL DEFAULT '0',
  `add_date` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `profile_id`, `name`, `email`, `username`, `password`, `img_dir`, `img`, `view_all_projects`, `custom_views_projects`, `active`, `active_by`, `active_date`, `unactive_by`, `unactive_date`, `lastedit_by`, `lastedit_date`, `add_by`, `add_date`, `deleted_by`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'admin', '$2y$10$k6ywGoTR/J8fG0U1aRrULesRiOxI6y2yPl1rVvL2nlUDNTdO5gG9S', NULL, NULL, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, 1, '2018-04-04 06:07:46', 0, NULL, '5FWP7UdJmoIM3phfSLB37n7Rf3Q3JAcEylNPt2KNcOmiIOV0x94QIq9O4rMz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_users_systems`
--

CREATE TABLE `system_users_systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `backend_lang` enum('en','ar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_color` enum('default','darkblue','blue','grey','light','light2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_layout` enum('fluid','boxed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_header` enum('default','fixed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_top_menu_dropdown` enum('light','dark') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_sidebar_menu_mode` enum('default','fixed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_sidebar_menu_sub_show` enum('accordion','hover') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_sidebar_menu_style` enum('default','light') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_sidebar_menu_position` enum('left','right') COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_footer` enum('default','fixed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastedit_by` int(11) DEFAULT NULL,
  `lastedit_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_users_systems`
--

INSERT INTO `system_users_systems` (`id`, `user_id`, `backend_lang`, `backend_color`, `backend_layout`, `backend_header`, `backend_top_menu_dropdown`, `backend_sidebar_menu_mode`, `backend_sidebar_menu_sub_show`, `backend_sidebar_menu_style`, `backend_sidebar_menu_position`, `backend_footer`, `lastedit_by`, `lastedit_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'default', 'fluid', 'default', 'light', 'default', 'accordion', 'default', 'left', 'default', NULL, NULL, '2018-04-04 06:09:45', '2018-04-04 06:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `user-id`, `product_id`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 1, 2),
(5, 1, 2),
(6, 1, 2),
(7, 1, 2),
(8, 1, 2),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 1, 2),
(13, 1, 2),
(14, 1, 2),
(15, 1, 2),
(16, 1, 2),
(17, 1, 2),
(18, 1, 2),
(19, 1, 2),
(20, 1, 2),
(21, 1, 2),
(22, 1, 2),
(23, 1, 2),
(24, 1, 2),
(25, 1, 6),
(26, 1, 7),
(27, 1, 2),
(28, 1, 2),
(29, 1, 2),
(30, 1, 2),
(31, 1, 2),
(32, 1, 2),
(33, 1, 2),
(34, 1, 2),
(35, 1, 2),
(36, 1, 2),
(37, 1, 2),
(38, 1, 2),
(39, 1, 2),
(40, 1, 2),
(41, 1, 2),
(42, 1, 2),
(43, 1, 2),
(44, 1, 2),
(45, 1, 2),
(46, 1, 2),
(47, 1, 2),
(48, 1, 2),
(49, 1, 2),
(50, 1, 2),
(51, 1, 2),
(52, 1, 2),
(53, 1, 2),
(54, 1, 2),
(55, 1, 2),
(56, 1, 2),
(57, 1, 2),
(58, 1, 2),
(59, 1, 2),
(60, 1, 2),
(61, 1, 2),
(62, 1, 2),
(63, 1, 2),
(64, 1, 2),
(65, 1, 2),
(66, 1, 2),
(67, 1, 2),
(68, 1, 2),
(69, 1, 2),
(70, 1, 2),
(71, 1, 2),
(72, 1, 2),
(73, 1, 2),
(74, 1, 2),
(75, 1, 2),
(76, 1, 2),
(77, 1, 2),
(78, 1, 2),
(79, 1, 2),
(80, 1, 7),
(81, 1, 7),
(82, 1, 7),
(83, 1, 7),
(84, 1, 7),
(85, 1, 7),
(86, 1, 2),
(87, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `client_password_resets`
--
ALTER TABLE `client_password_resets`
  ADD KEY `client_password_resets_email_index` (`email`),
  ADD KEY `client_password_resets_token_index` (`token`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ontheflypostions`
--
ALTER TABLE `ontheflypostions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_password_resets`
--
ALTER TABLE `system_password_resets`
  ADD KEY `system_password_resets_email_index` (`email`),
  ADD KEY `system_password_resets_token_index` (`token`);

--
-- Indexes for table `system_profiles`
--
ALTER TABLE `system_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `system_users_email_unique` (`email`),
  ADD UNIQUE KEY `system_users_username_unique` (`username`),
  ADD KEY `system_users_profile_id_foreign` (`profile_id`);

--
-- Indexes for table `system_users_systems`
--
ALTER TABLE `system_users_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_users_systems_user_id_foreign` (`user_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ontheflypostions`
--
ALTER TABLE `ontheflypostions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `system_profiles`
--
ALTER TABLE `system_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_users_systems`
--
ALTER TABLE `system_users_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `system_users`
--
ALTER TABLE `system_users`
  ADD CONSTRAINT `system_users_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `system_profiles` (`id`);

--
-- Constraints for table `system_users_systems`
--
ALTER TABLE `system_users_systems`
  ADD CONSTRAINT `system_users_systems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `system_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
