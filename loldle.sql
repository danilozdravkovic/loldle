-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loldle`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` datetime NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requestData` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `name`, `dateTime`, `user`, `requestData`) VALUES
(1, 'Register', '2022-12-10 17:02:04', '127.0.0.1', '{\"_token\":\"n1sBnnEiSyONs9MRMfvcgkjue43mut5VjHfBUYW9\",\"email\":\"mika@gmail.com\",\"username\":\"Mika\",\"password\":\"sifra123\"}'),
(3, 'AdminLogin', '2022-12-10 17:06:30', '127.0.0.1', '{\"_token\":\"C4StDWCzMAyuQQZRW6438eMgqqevKMCBCwT1hPcV\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(6, 'Login', '2022-12-10 17:13:33', '127.0.0.1', '{\"_token\":\"XGT7AjRuhqJuYvg8FW6RmxX4SSQYU9QFtsX5FIb9\",\"email\":\"danilo@gmail.com\",\"password\":\"sifra123\"}'),
(7, 'Logout', '2022-12-10 17:14:57', 'danilo@gmail.com', '[]'),
(8, 'AdminLogin', '2022-12-10 17:57:26', '127.0.0.1', '{\"_token\":\"1Awskybk5T7NiD1avJafnsGXp7nz2csK4aTamGll\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(9, 'Logout', '2022-12-10 18:53:37', 'admin1@gmail.com', '[]'),
(10, 'AdminLogin', '2022-12-10 18:53:44', '127.0.0.1', '{\"_token\":\"O8hpsIB7RWz3nYLLKJas7jN78Kuk1V9khOT9i6WR\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(11, 'Logout', '2022-12-10 18:53:47', 'admin1@gmail.com', '[]'),
(12, 'Login', '2022-12-10 18:53:58', '127.0.0.1', '{\"_token\":\"ECHSXL93aKrx0O4GsMWhV0oiTLOvFegHSWLSiV2o\",\"email\":\"danilo@gmail.com\",\"password\":\"sifra123\"}'),
(13, 'Logout', '2022-12-10 18:54:00', 'danilo@gmail.com', '[]'),
(14, 'AdminLogin', '2022-12-10 18:54:14', '127.0.0.1', '{\"_token\":\"u759o2Oe0UUT7YD7MJCnHT1gZ8tbKOZINlOb61ai\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(15, 'Logout', '2022-12-10 18:54:16', 'admin1@gmail.com', '[]'),
(16, 'AdminLogin', '2022-12-10 18:54:24', '127.0.0.1', '{\"_token\":\"KmDxa4wLKLe6h8I854XymcOjdBnKHt5h8Es8u2d1\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(17, 'Logout', '2022-12-10 19:20:30', 'admin1@gmail.com', '[]'),
(18, 'AdminLogin', '2022-12-10 19:21:18', '127.0.0.1', '{\"_token\":\"6sVqiNy2uSjBbZAdEe81Or1vQWDTjTiGUCppRdh6\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(29, 'Register', '2022-12-11 11:14:20', '127.0.0.1', '{\"_token\":\"tWYioPY6T6WWKQbntWYvo19L9EXp7up3qObTZLj2\",\"email\":\"zika@gmial.com\",\"username\":\"Zika\",\"password\":\"sifra123\"}'),
(30, 'Login', '2022-12-11 11:14:41', '127.0.0.1', '{\"_token\":\"tWYioPY6T6WWKQbntWYvo19L9EXp7up3qObTZLj2\",\"email\":\"zika@gmial.com\",\"password\":\"sifra123\"}'),
(31, 'Logout', '2022-12-11 11:15:47', 'zika@gmial.com', '[]'),
(32, 'AdminLogin', '2022-12-11 11:16:01', '127.0.0.1', '{\"_token\":\"dK1YpAeV1Ic7JLpJgbtz6Dx6i4ZygltUWwATI6jo\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(33, 'Logout', '2022-12-11 11:17:54', 'admin1@gmail.com', '[]'),
(34, 'Login', '2022-12-11 14:22:55', '127.0.0.1', '{\"_token\":\"3isVobUD2y5olU5aykdXyhqF0NmVSydO42dvLcT2\",\"email\":\"danilo@gmail.com\",\"password\":\"sifra123\"}'),
(35, 'Logout', '2022-12-11 14:36:12', 'danilo@gmail.com', '[]'),
(36, 'AdminLogin', '2022-12-11 14:36:41', '127.0.0.1', '{\"_token\":\"FB9AXu1c9o9UynyOwWGIYtRBCU6CfPEyGvZvlXfv\",\"email\":\"admin2@gmail.com\",\"password\":\"sifra123\"}'),
(37, 'Login', '2022-12-11 18:47:50', '127.0.0.1', '{\"_token\":\"biJ7BvPI8vcCygMXg8JfbQ5aaGszXA8XBx995xnA\",\"email\":\"danilo@gmail.com\",\"password\":\"sifra123\"}'),
(38, 'Logout', '2022-12-11 18:50:19', 'danilo@gmail.com', '[]'),
(39, 'AdminLogin', '2022-12-11 18:50:43', '127.0.0.1', '{\"_token\":\"gXEn3ytmSiBd9XvCXLJgJ8qU2sqFmNn5ErGnbMYe\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(40, 'Logout', '2022-12-11 19:05:30', 'admin1@gmail.com', '[]'),
(41, 'AdminLogin', '2023-03-06 11:10:08', '127.0.0.1', '{\"_token\":\"YZQCMSqp8T2bAZcyfgANRSfREYcHYA1numyDN8nA\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(42, 'Logout', '2023-03-06 12:33:41', 'admin1@gmail.com', '[]'),
(43, 'AdminLogin', '2023-03-06 12:34:07', '127.0.0.1', '{\"_token\":\"3HREslTYgluJ31dQxCQy2ROL68dSL6TC3OS18grp\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}'),
(44, 'AdminLogin', '2023-03-08 21:15:55', '127.0.0.1', '{\"_token\":\"bEaCmTumGKY4bF070R6yEI9U3Z4ZHPi6az1rPOwa\",\"email\":\"admin1@gmail.com\",\"password\":\"sifra123\"}');

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `championImg_id` bigint(20) UNSIGNED NOT NULL,
  `gender_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `specie_id` bigint(20) UNSIGNED NOT NULL,
  `resource_id` bigint(20) UNSIGNED NOT NULL,
  `rangeType_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `releaseYear` int(11) NOT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`id`, `name`, `championImg_id`, `gender_id`, `position_id`, `specie_id`, `resource_id`, `rangeType_id`, `region_id`, `releaseYear`, `quote`, `created_at`, `updated_at`) VALUES
(191, 'Katarina', 191, 2, 2, 1, 2, 2, 3, 2009, 'If you run, you won\\\'t see me stab you!', '2022-12-10 06:50:25', NULL),
(192, 'Darius', 192, 1, 1, 1, 1, 2, 3, 2012, 'There\\\'s no I in team, but there is one in Darius.', '2022-12-10 06:50:49', '2022-12-11 07:53:18'),
(193, 'Annie', 193, 2, 2, 1, 1, 1, 3, 2009, 'Ashes, ashes, they all fall down.', '2022-12-10 06:51:13', NULL),
(194, 'Jinx', 194, 2, 4, 1, 1, 1, 8, 2013, 'Oh, You Know. Here, There, Chasing Down Dead Ends.', '2022-12-10 06:52:41', '2022-12-10 07:01:59'),
(195, 'Vayne', 195, 2, 4, 1, 1, 1, 1, 2011, 'On wings of night.', '2022-12-10 06:53:44', '2022-12-11 08:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `champion_image`
--

CREATE TABLE `champion_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `champion_image`
--

INSERT INTO `champion_image` (`id`, `src`, `alt`, `created_at`, `updated_at`) VALUES
(191, 'Katarina.jpg', 'Katarina', '2022-12-10 06:50:25', NULL),
(192, 'Darius.jpg', 'Darius', '2022-12-10 06:50:49', NULL),
(193, 'Annie.jpg', 'Annie', '2022-12-10 06:51:13', NULL),
(194, 'Jinx.jpg', 'Jinx', '2022-12-10 06:52:41', NULL),
(195, 'Vayne.jpg', 'Vayne', '2022-12-10 06:53:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2022-12-03 20:48:25', NULL),
(2, 'Female', '2022-12-03 20:48:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `src`, `alt`, `href`, `created_at`, `updated_at`) VALUES
(1, 'buttonClassic.png', 'buttonClassic', 'classic', '2022-12-09 12:09:46', NULL),
(2, 'buttonQuote.png', 'buttonQuote', 'quote', '2022-12-09 12:10:36', NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_03_195641_create_roles_table', 1),
(3, '2022_12_03_195731_create_champion_image_table', 1),
(4, '2022_12_03_195858_create_genders_table', 1),
(5, '2022_12_03_195934_create_positions_table', 1),
(6, '2022_12_03_200000_create_species_table', 1),
(7, '2022_12_03_200022_create_resources_table', 1),
(8, '2022_12_03_200046_create_range_types_table', 1),
(9, '2022_12_03_200121_create_regions_table', 1),
(10, '2022_12_03_200210_create_ability_image_table', 1),
(11, '2022_12_03_200301_create_users_table', 1),
(12, '2022_12_03_200509_create_champions_table', 1),
(13, '2022_12_03_200933_create_abilities_table', 1),
(14, '2022_12_03_213032_create_menu_table', 2),
(15, '2022_12_03_213356_create_socials_table', 2),
(16, '2022_12_10_162814_create_activity_log_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Top', '2022-12-03 20:52:03', NULL),
(2, 'Middle', '2022-12-03 20:52:08', NULL),
(3, 'Jungle', '2022-12-03 20:52:58', NULL),
(4, 'Bottom', '2022-12-03 20:53:23', NULL),
(5, 'Support', '2022-12-03 20:53:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `range_types`
--

CREATE TABLE `range_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `range_types`
--

INSERT INTO `range_types` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Ranged', '2022-12-03 20:54:05', NULL),
(2, 'Melee', '2022-12-03 20:54:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Demacia', '2022-12-03 20:58:01', NULL),
(2, 'Ionia', '2022-12-03 20:58:07', NULL),
(3, 'Noxus', '2022-12-03 20:58:52', NULL),
(4, 'Void', '2022-12-03 20:59:04', NULL),
(5, 'Freljord', '2022-12-03 20:59:27', NULL),
(6, 'Shurima', '2022-12-03 20:59:32', NULL),
(7, 'Piltover', '2022-12-03 20:59:59', NULL),
(8, 'Targon', '2022-12-03 21:00:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Mana', '2022-12-03 20:55:05', NULL),
(2, 'Manaless', '2022-12-03 20:55:12', NULL),
(3, 'Health', '2022-12-03 20:56:20', NULL),
(4, 'Rage', '2022-12-03 20:56:11', NULL),
(5, 'Furry', '2022-12-03 20:55:54', NULL),
(6, 'Energy', '2022-12-03 20:56:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-12-03 20:57:10', NULL),
(2, 'User', '2022-12-03 20:57:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `href`, `created_at`, `updated_at`) VALUES
(1, 'instagram', 'https://www.instagram.com/leagueoflegends/', '2022-12-09 12:26:39', NULL),
(2, 'twitter', 'https://twitter.com/loldlegame', '2022-12-09 12:27:26', NULL),
(3, 'facebook', 'https://www.facebook.com/leagueoflegends/', '2022-12-09 12:28:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Human', '2022-12-03 21:02:20', NULL),
(2, 'Spirit', '2022-12-03 21:02:52', NULL),
(3, 'Undead', '2022-12-03 21:03:45', NULL),
(4, 'Yordle', '2022-12-03 21:03:57', NULL),
(5, 'Iceborn', '2022-12-03 21:04:38', NULL),
(6, 'Spiritualist', '2022-12-03 21:05:08', NULL),
(7, 'Magicborn', '2022-12-03 21:05:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'admin1@gmail.com', 'f1dc735ee3581693489eaf286088b916', 1, NULL, NULL),
(2, 'Danilo', 'danilo@gmail.com', 'f1dc735ee3581693489eaf286088b916', 2, NULL, NULL),
(3, 'Pera', 'pera@gmail.com', 'f1dc735ee3581693489eaf286088b916', 2, NULL, NULL),
(9, 'Zika', 'zika@gmial.com', 'f1dc735ee3581693489eaf286088b916', 2, NULL, NULL),
(10, 'Admin2', 'admin2@gmail.com', 'f1dc735ee3581693489eaf286088b916', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `champions_championimg_id_foreign` (`championImg_id`),
  ADD KEY `champions_gender_id_foreign` (`gender_id`),
  ADD KEY `champions_position_id_foreign` (`position_id`),
  ADD KEY `champions_specie_id_foreign` (`specie_id`),
  ADD KEY `champions_resource_id_foreign` (`resource_id`),
  ADD KEY `champions_rangetype_id_foreign` (`rangeType_id`),
  ADD KEY `champions_region_id_foreign` (`region_id`);

--
-- Indexes for table `champion_image`
--
ALTER TABLE `champion_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `range_types`
--
ALTER TABLE `range_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `socials_name_unique` (`name`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `champions`
--
ALTER TABLE `champions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `champion_image`
--
ALTER TABLE `champion_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `range_types`
--
ALTER TABLE `range_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `champions`
--
ALTER TABLE `champions`
  ADD CONSTRAINT `champions_championimg_id_foreign` FOREIGN KEY (`championImg_id`) REFERENCES `champion_image` (`id`),
  ADD CONSTRAINT `champions_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `champions_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `champions_rangetype_id_foreign` FOREIGN KEY (`rangeType_id`) REFERENCES `range_types` (`id`),
  ADD CONSTRAINT `champions_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `champions_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`),
  ADD CONSTRAINT `champions_specie_id_foreign` FOREIGN KEY (`specie_id`) REFERENCES `species` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
