-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 10:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `avens`
--

CREATE TABLE `avens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation` smallint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avens`
--

INSERT INTO `avens` (`id`, `customer_id`, `unit_id`, `serial_number`, `project`, `activation`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2334346643', 'School 1', 1, 1, NULL, NULL),
(2, 1, 2, '2334346644', 'School 1', 1, 1, NULL, NULL),
(3, 1, 2, '2334346644', 'School 1', 1, 2, NULL, NULL),
(4, 2, 3, '2334346855', 'School 1', 0, 1, NULL, NULL),
(5, 3, 4, '2335469950', 'School 1', 1, 2, NULL, NULL),
(6, 3, 3, '12345678', 'School 2', 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `title`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Customer 1', NULL, NULL, NULL),
(2, 'Customer 2', NULL, NULL, NULL),
(3, 'Customer 3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgpath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` int(11) NOT NULL DEFAULT -1,
  `Alarm00` int(11) NOT NULL,
  `Alarm01` int(11) NOT NULL,
  `Alarm02` int(11) NOT NULL,
  `Alarm03` int(11) NOT NULL,
  `Alarm04` int(11) NOT NULL,
  `Alarm05` int(11) NOT NULL,
  `Alarm06` int(11) NOT NULL,
  `Alarm07` int(11) NOT NULL,
  `Alarm08` int(11) NOT NULL,
  `Alarm09` int(11) NOT NULL,
  `Alarm10` int(11) NOT NULL,
  `Alarm11` int(11) NOT NULL,
  `Alarm12` int(11) NOT NULL,
  `CO2Level` int(11) NOT NULL,
  `IncreaseSpeedIAQ` int(11) NOT NULL,
  `InfoProbeIAQ` int(11) NOT NULL,
  `MeasAWP` int(11) NOT NULL,
  `MeasInput1` int(11) NOT NULL,
  `MeasInput2` int(11) NOT NULL,
  `MeasTemp1F` int(11) NOT NULL,
  `MeasTemp2R` int(11) NOT NULL,
  `MeasTemp3S` int(11) NOT NULL,
  `MeasTemp4E` int(11) NOT NULL,
  `RHLevel` int(11) NOT NULL,
  `StatusUnit` int(11) NOT NULL,
  `StatusWeekly` int(11) NOT NULL,
  `VOCLevel` int(11) NOT NULL,
  `cntUpdate_eeprom_info` int(11) NOT NULL,
  `cntUpdate_eeprom_settemp` int(11) NOT NULL,
  `cntUpdate_eeprom_settingpar` int(11) NOT NULL,
  `cntUpdate_eeprom_weekly` int(11) NOT NULL,
  `none` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `serial`, `location`, `unit`, `imgpath`, `family`, `Alarm00`, `Alarm01`, `Alarm02`, `Alarm03`, `Alarm04`, `Alarm05`, `Alarm06`, `Alarm07`, `Alarm08`, `Alarm09`, `Alarm10`, `Alarm11`, `Alarm12`, `CO2Level`, `IncreaseSpeedIAQ`, `InfoProbeIAQ`, `MeasAWP`, `MeasInput1`, `MeasInput2`, `MeasTemp1F`, `MeasTemp2R`, `MeasTemp3S`, `MeasTemp4E`, `RHLevel`, `StatusUnit`, `StatusWeekly`, `VOCLevel`, `cntUpdate_eeprom_info`, `cntUpdate_eeprom_settemp`, `cntUpdate_eeprom_settingpar`, `cntUpdate_eeprom_weekly`, `none`, `created_at`, `updated_at`) VALUES
(1, '2334346643', 'Paris', 'Vs 127', 'VS_7.png', -1, 423, 324, 34, 232, 24, 234, 242, 53, 32, 32, 223, 3, 332, 22, 23, 234, 43, 32, 45, 345, 24, 87, 24, 234, 234, 33, 322, 21, 3, 12, 87, 23, NULL, NULL),
(2, '2334346644', 'Paris', 'Vs 47', 'VS_7.png', -1, 4, 234, 234, 3, 22, 332, 23, 234, 233, 123, 13, 1, 12, 112, 22, 12, 34, 12, 112, 76, 43, 345, 34, 5, 343, 45, 34, 34, 543, 34, 34, 345, NULL, NULL),
(3, '2334346645', 'Paris', 'Vs 47', 'VS_7.png', -1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(5, '2334346855', 'Paris', 'FS 127', 'FS_7.png', -1, 43, 2, 23, 23, 4, 23, 2, 43, 24, 23, 23, 234, 4, 67, 4, 64, 45, 445, 65, 456, 46, 46, 65, 46, 43, 4, 35, 35, 35, 534, 44, 33, NULL, NULL),
(6, '2335469950', 'Paris23', 'HB 32', '65ccafe42b0f3_3devices.png', -1, 234, 34, 327, 94, 494, 49, 94, 85, 55, 94, 94, 99, 98, 88, 22, 84, 84, 58, 8, 67, 74, 74, 58, 55, 584, 848, 888, 84, 57, 36, 56, 55, NULL, NULL),
(7, '12345678', 'Paris23', 'HB 32', '65ccafe42b0f3_3devices.png', -1, 234, 34, 327, 94, 494, 49, 94, 85, 55, 94, 94, 99, 98, 88, 22, 84, 84, 58, 8, 67, 74, 74, 58, 55, 584, 848, 888, 84, 57, 36, 56, 55, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level1_id` int(10) UNSIGNED NOT NULL,
  `level2_id` int(10) UNSIGNED NOT NULL,
  `language_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `level1_id`, `level2_id`, `language_code`, `created_at`, `updated_at`) VALUES
(5, 5, 2, 'de', '2024-02-07 04:07:58', '2024-02-07 04:07:58');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `country_flag` varchar(5) NOT NULL,
  `is_default` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `country_flag`, `is_default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', 'en', 'gb', 1, '2023-01-16 05:12:15', '2023-05-31 09:50:31', NULL),
(2, 'Deutsch', 'de', 'de', 0, '2023-01-16 05:18:07', '2023-04-14 18:44:00', NULL),
(3, 'French', 'fr', 'fr', 0, '2023-01-16 09:51:03', '2023-01-17 16:49:12', NULL),
(4, 'Italy', 'IT', 'it', 0, '2023-01-17 16:15:40', '2023-01-17 16:43:37', NULL),
(5, 'Netherlands', 'nl', 'nl', 0, '2023-01-16 05:23:20', '2023-01-16 06:02:35', NULL),
(6, 'Denmark', 'DK', 'dk', 0, NULL, NULL, NULL),
(7, 'Svenska', 'S', 'se', 0, '2023-05-19 16:34:01', '2023-05-19 16:34:01', NULL),
(8, 'Polski', 'PL', 'pl', 0, '2023-05-19 16:35:29', '2023-05-19 16:35:29', NULL),
(9, 'Lithuana', 'LT', 'lt', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2024_01_24_041549_create_roles_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 2),
(13, '2024_01_24_041658_create_customers_table', 2),
(14, '2024_01_24_044550_create_units_table', 2),
(15, '2024_01_30_164713_create_devices_table', 2),
(16, '2024_01_30_191033_create_avens_table', 2),
(18, '2014_10_12_000000_create_users_table', 3),
(19, '2024_02_06_051340_create_words_table', 4),
(20, '2024_02_06_130057_create_editors_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Vs 127', NULL, NULL),
(2, 'Vs 47', NULL, NULL),
(3, 'FS 127', NULL, NULL),
(4, 'HB 32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_form` int(10) UNSIGNED NOT NULL,
  `sector_activity` int(10) UNSIGNED NOT NULL,
  `company_size` int(10) UNSIGNED NOT NULL,
  `legal_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operational_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept_terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept_privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `level_up` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_name`, `VAT`, `legal_form`, `sector_activity`, `company_size`, `legal_address`, `operational_address`, `contact_person_name`, `position`, `email`, `mobile_phone`, `username`, `password`, `accept_terms`, `accept_privacy`, `role_id`, `level_up`, `created_at`, `updated_at`) VALUES
(1, 'TechSolution', '13123', 1, 1, 1, '10 Rome', '11 Rome Test', 'Hristo K', 'Senior', 'level12@test.com', '+3423434234', 'hriskaz', '1', 'on', 'on', 1, 0, '2024-02-05 17:15:55', '2024-02-05 17:15:55'),
(2, 'tech_level2', 'a3423423', 2, 1, 4, 'address test1', 'address op test1', 'Mario', 'Manager', 'level21@test.com', '+3343434334', 'mario', '$2y$10$TmN4MjvV5RODxwqZfixaveUu6g0pR3P5wzdI4lkaXhFB/vH4osdhO', 'on', 'on', 2, 5, '2024-02-05 17:18:21', '2024-02-05 17:18:21'),
(3, 'ACER', '1354489', 1, 1, 3, 'address test2', 'address op test2', 'Admin', 'Manager', 'admin@test.com', '+3423434234123', 'admin', '$2y$10$YzlA95Oow4MGd4YNNXJZJO1bY/TNYc/TSQlDra/NusiT8Q2jKlqdW', 'on', 'on', 10, 0, '2024-02-05 17:20:15', '2024-02-05 17:20:15'),
(5, 'MechanicSolution', 'VAT123456789', 1, 1, 1, 'address test3', 'address op test3', 'Sandro', 'Manager', 'level11@test.com', '+3234323242', 'sandro', '$2y$10$DhrQBYWTrPUBXEMuji5e3OcIIsCtdth8J9Pl3u4Ah3fvhaO5CreQi', 'on', 'on', 1, 0, '2024-02-05 18:37:55', '2024-02-05 18:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `N` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `en`, `de`, `fr`, `IT`, `nl`, `DK`, `S`, `PL`, `LT`, `N`, `created_at`, `updated_at`) VALUES
(1, 'Smart', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Smart Connect', 'bbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Customers', 'ccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avens`
--
ALTER TABLE `avens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_phone_unique` (`mobile_phone`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avens`
--
ALTER TABLE `avens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
