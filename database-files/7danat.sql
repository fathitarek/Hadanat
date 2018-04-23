-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 04:27 PM
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
(14, 'testr555', 'one', '6', '77', 'asu-logo.png', '2018-04-08 06:55:37', '2018-04-08 07:31:02', NULL),
(15, 'one', 'laszt', 'last', 'ioio', 'images.jpg', '2018-04-08 06:59:21', '2018-04-08 06:59:21', NULL),
(16, 'ttyyy', 'tt', 'tt', 'tt', '73752800-fee0-4f24-8652-e82bfc8233ec-original.jpeg', '2018-04-08 08:51:58', '2018-04-08 08:52:04', NULL),
(17, 'trtr', 'rtrt', 'rttr', 'trtr', 'downloadr.jpg', '2018-04-08 09:08:33', '2018-04-08 09:08:33', NULL);

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
(6, '2018_04_04_121122_create_products_table', 3);

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_en`, `name_ar`, `cover`, `logo`, `desc_en`, `desc_ar`, `advantages_en`, `advantages_ar`, `address`, `latitude`, `longitude`, `conditions_en`, `conditions_ar`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uoynoonnonjoon', 'y', 'y', 'yuihgui', 'yuuy', 'yy', 'huyuhy', 'yy', 'uhyuyh', 'yuy', 'yhuu', 'yuyu', 'yuhuy', 'huyy', '2018-04-04 10:42:31', '2018-04-04 11:47:04', '2018-04-04 11:47:04'),
(2, 'u', 'uu', 'uu', 'u', 'u', 'uu', 'u', 'uu', 'u', 'uu', 'u', 'u', 'u', '13', '2018-04-04 12:03:01', '2018-04-04 12:03:01', NULL),
(3, 'oneo9098', 'one', 'C:\\xampp\\tmp\\php8C42.tmp', 'C:\\xampp\\tmp\\php8C21.tmp', '89899', '98790', '00980', '9809009', '08089', '88090', '8809089098', '098098', '09809809', '14', '2018-04-08 07:10:54', '2018-04-08 07:10:54', NULL),
(4, '54777', '54654', 'download.jpg', 'downloada.jpg', '45', '5646', '54', '565', '54', '54', '54', '654', '654', '14', '2018-04-08 07:13:26', '2018-04-08 07:29:53', NULL),
(5, 'test', 'test', '26112426_1922747284406854_2714925771820340291_n.jpg', 'AE33.jpg', 'uyiui', 'uiyiu', 'iuyui', 'uioy', 'Hassan Ma\'moon, Al Manteqah as Sadesah, Nasr City, Cairo Governorate, Egypt', '30.0565394719953', '31.35794061389163', 'iuyiu', 'uiyuiy', '16', '2018-04-08 11:34:41', '2018-04-08 11:47:49', NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
