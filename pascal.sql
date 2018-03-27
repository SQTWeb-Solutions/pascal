-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 04:30 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.2.0-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pascal`
--

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `created_at`, `updated_at`, `code`, `lang_code`, `name`, `display_name`) VALUES
(1, '2018-03-22 17:26:42', '2018-03-22 17:26:42', 'en', NULL, 'English', NULL),
(2, '2018-03-22 17:42:58', '2018-03-22 17:42:58', 'fr', NULL, 'French', NULL),
(3, '2018-03-22 17:43:22', '2018-03-22 17:43:22', 'es', NULL, 'Spanish; Castilian', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_02_03_180720_create_locales_table', 1),
(4, '2015_02_03_180721_create_translations_table', 1),
(5, '2018_03_22_180956_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED DEFAULT NULL,
  `translation` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `created_at`, `updated_at`, `locale_id`, `translation_id`, `translation`) VALUES
(1, '2018-03-22 17:26:43', '2018-03-22 17:26:43', 1, NULL, 'Suggest a kid'),
(2, '2018-03-22 17:42:59', '2018-03-22 17:42:59', 2, 1, 'Suggérer un enfant'),
(3, '2018-03-22 17:43:23', '2018-03-22 17:43:23', 3, 1, 'Sugerir un niño'),
(4, '2018-03-22 17:49:21', '2018-03-22 17:49:21', 1, NULL, 'View in'),
(5, '2018-03-22 17:49:22', '2018-03-22 17:49:22', 3, 4, 'Ver en'),
(6, '2018-03-22 17:49:22', '2018-03-22 17:49:22', 1, NULL, 'Volunteer'),
(7, '2018-03-22 17:49:22', '2018-03-22 17:49:22', 3, 6, 'Voluntario'),
(8, '2018-03-22 17:49:22', '2018-03-22 17:49:22', 1, NULL, 'Pascal Rufi Soccer Foundation'),
(9, '2018-03-22 17:49:23', '2018-03-22 17:49:23', 3, 8, 'Fundación de fútbol Pascal Rufi'),
(10, '2018-03-22 17:49:23', '2018-03-22 17:49:23', 1, NULL, 'Foundation'),
(11, '2018-03-22 17:49:24', '2018-03-22 17:49:24', 3, 10, 'Fundación'),
(12, '2018-03-22 17:49:24', '2018-03-22 17:49:24', 1, NULL, 'About Us'),
(13, '2018-03-22 17:49:24', '2018-03-22 17:49:24', 3, 12, 'Sobre nosotros'),
(14, '2018-03-22 17:49:24', '2018-03-22 17:49:24', 1, NULL, 'Our Objective'),
(15, '2018-03-22 17:49:25', '2018-03-22 17:49:25', 3, 14, 'Nuestro objetivo'),
(16, '2018-03-22 17:49:25', '2018-03-22 17:49:25', 1, NULL, 'Sponsors'),
(17, '2018-03-22 17:49:26', '2018-03-22 17:49:26', 3, 16, 'Patrocinadores'),
(18, '2018-03-22 17:49:26', '2018-03-22 17:49:26', 1, NULL, 'Sports'),
(19, '2018-03-22 17:49:26', '2018-03-22 17:49:26', 3, 18, 'Deportes'),
(20, '2018-03-22 17:49:27', '2018-03-22 17:49:27', 1, NULL, 'Tennis'),
(21, '2018-03-22 17:49:27', '2018-03-22 17:49:27', 3, 20, 'Tenis'),
(22, '2018-03-22 17:49:27', '2018-03-22 17:49:27', 1, NULL, 'Athletes'),
(23, '2018-03-22 17:49:28', '2018-03-22 17:49:28', 3, 22, 'Atletas'),
(24, '2018-03-22 17:49:28', '2018-03-22 17:49:28', 1, NULL, 'Suggest a talented kid'),
(25, '2018-03-22 17:49:28', '2018-03-22 17:49:28', 3, 24, 'Sugerir un niño talentoso'),
(26, '2018-03-22 17:49:29', '2018-03-22 17:49:29', 1, NULL, 'Football'),
(27, '2018-03-22 17:49:29', '2018-03-22 17:49:29', 3, 26, 'Fútbol'),
(28, '2018-03-22 17:49:29', '2018-03-22 17:49:29', 1, NULL, 'Basket Ball'),
(29, '2018-03-22 17:49:30', '2018-03-22 17:49:30', 3, 28, 'Baloncesto'),
(30, '2018-03-22 17:49:30', '2018-03-22 17:49:30', 1, NULL, 'Lawn Tennis'),
(31, '2018-03-22 17:49:30', '2018-03-22 17:49:30', 3, 30, 'Tenis sobre hierba'),
(32, '2018-03-22 17:49:30', '2018-03-22 17:49:30', 1, NULL, 'Events'),
(33, '2018-03-22 17:49:31', '2018-03-22 17:49:31', 3, 32, 'Eventos'),
(34, '2018-03-22 17:49:31', '2018-03-22 17:49:31', 1, NULL, 'Voluteer'),
(35, '2018-03-22 17:49:32', '2018-03-22 17:49:32', 3, 34, 'Voluteer'),
(36, '2018-03-22 17:49:32', '2018-03-22 17:49:32', 1, NULL, 'Volunteer to Train'),
(37, '2018-03-22 17:49:33', '2018-03-22 17:49:33', 3, 36, 'Voluntario para entrenar'),
(38, '2018-03-22 17:49:33', '2018-03-22 17:49:33', 1, NULL, 'Volunteer to Support'),
(39, '2018-03-22 17:49:33', '2018-03-22 17:49:33', 3, 38, 'Voluntario para apoyar'),
(40, '2018-03-22 17:49:34', '2018-03-22 17:49:34', 1, NULL, 'News'),
(41, '2018-03-22 17:49:34', '2018-03-22 17:49:34', 3, 40, 'Noticias'),
(42, '2018-03-22 17:49:34', '2018-03-22 17:49:34', 1, NULL, 'Emma\'s Blog'),
(43, '2018-03-22 17:49:35', '2018-03-22 17:49:35', 3, 42, 'Blog de Emma'),
(44, '2018-03-22 17:49:35', '2018-03-22 17:49:35', 1, NULL, 'Contact'),
(45, '2018-03-22 17:49:36', '2018-03-22 17:49:36', 3, 44, 'Contacto'),
(46, '2018-03-22 17:55:44', '2018-03-22 17:55:44', 1, NULL, 'The Pascal Rufi Sports Foundation was established by the Rufi family; Pascal Rufi, Mara Simone, and their lovely daughter Emma.'),
(47, '2018-03-22 17:55:45', '2018-03-22 17:55:45', 3, 46, 'La Fundación Pascal Rufi Sports fue establecida por la familia Rufi; Pascal Rufi, Mara Simone y su encantadora hija Emma.'),
(48, '2018-03-22 17:55:45', '2018-03-22 17:55:45', 1, NULL, 'Read More'),
(49, '2018-03-22 17:55:45', '2018-03-22 17:55:45', 3, 48, 'Lee mas'),
(50, '2018-03-22 17:55:46', '2018-03-22 17:55:46', 1, NULL, 'Basketball'),
(51, '2018-03-22 17:55:46', '2018-03-22 17:55:46', 3, 50, 'Baloncesto'),
(52, '2018-03-22 17:55:46', '2018-03-22 17:55:46', 1, NULL, 'Quick Link'),
(53, '2018-03-22 17:55:47', '2018-03-22 17:55:47', 3, 52, 'Enlace rápido'),
(54, '2018-03-22 17:55:47', '2018-03-22 17:55:47', 1, NULL, 'The Foundation'),
(55, '2018-03-22 17:55:47', '2018-03-22 17:55:47', 3, 54, 'La Fundación'),
(56, '2018-03-22 17:55:48', '2018-03-22 17:55:48', 1, NULL, 'Follow us'),
(57, '2018-03-22 17:55:48', '2018-03-22 17:55:48', 3, 56, 'Síguenos'),
(58, '2018-03-22 18:25:11', '2018-03-22 18:25:11', 1, NULL, 'Here to <span>serve</span>'),
(59, '2018-03-22 18:26:59', '2018-03-22 18:26:59', 1, NULL, 'The Pascal Rufi Foundation is proud to be able to leave positive footprints in the community by providing beneficial intervention to youths in need'),
(60, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Global Reach'),
(61, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Put Nigeria and her athletes on the map for talent scouts and sports institutions worldwide.  '),
(62, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Equiping Young People'),
(63, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Provide these young people with training equipment/space, coaching, mentorship and access to the global sports market. '),
(64, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Encouraging Young People'),
(65, '2018-03-22 18:29:07', '2018-03-22 18:29:07', 1, NULL, 'Encourage young people to explore the numerous benefits of sports.'),
(66, '2018-03-23 12:17:54', '2018-03-23 12:17:54', 1, NULL, 'Our Mission'),
(67, '2018-03-23 12:17:55', '2018-03-23 12:17:55', 1, NULL, 'Crowdfunding campaigns has never been that easy'),
(68, '2018-03-23 12:17:55', '2018-03-23 12:17:55', 1, NULL, 'The Pascal Rufi Sport Foundation strives to foster and support under-privileged Nigerian youths with athletic talent (from the most deprived social and economic areas) to ensure that they find national and international sports success while delivering the cultural, social, health and educational benefits of sports.'),
(69, '2018-03-23 12:17:55', '2018-03-23 12:17:55', 1, NULL, 'start a campaign'),
(70, '2018-03-23 12:33:24', '2018-03-23 12:33:24', 1, NULL, 'Our Atheletes'),
(71, '2018-03-23 12:33:24', '2018-03-23 12:33:24', 1, NULL, 'We Identify the hidden treasures(talent)in this kids, give them opportunity for overall development, provide mentorship and support for them and inpire them for more'),
(72, '2018-03-23 12:48:24', '2018-03-23 12:48:24', 1, NULL, 'John Doe'),
(73, '2018-03-23 12:48:24', '2018-03-23 12:48:24', 1, NULL, 'Years of age'),
(74, '2018-03-23 12:48:24', '2018-03-23 12:48:24', 1, NULL, 'Likes'),
(75, '2018-03-23 12:48:24', '2018-03-23 12:48:24', 1, NULL, 'Country'),
(76, '2018-03-23 13:14:31', '2018-03-23 13:14:31', 1, NULL, 'Mane Doe'),
(77, '2018-03-23 13:14:32', '2018-03-23 13:14:32', 1, NULL, 'Javier Chicharito'),
(78, '2018-03-23 13:14:32', '2018-03-23 13:14:32', 1, NULL, 'J Rollins K.'),
(79, '2018-03-23 13:16:23', '2018-03-23 13:16:23', 1, NULL, 'Age'),
(80, '2018-03-23 15:36:38', '2018-03-23 15:36:38', 1, NULL, 'You can join in Special Events'),
(81, '2018-03-23 15:36:39', '2018-03-23 15:36:39', 1, NULL, 'View Events'),
(82, '2018-03-23 15:36:39', '2018-03-23 15:36:39', 1, NULL, 'Event 1'),
(83, '2018-03-23 15:36:39', '2018-03-23 15:36:39', 1, NULL, 'Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley '),
(84, '2018-03-23 15:36:39', '2018-03-23 15:36:39', 1, NULL, 'View Event'),
(85, '2018-03-23 15:40:40', '2018-03-23 15:40:40', 1, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley '),
(86, '2018-03-23 15:40:40', '2018-03-23 15:40:40', 1, NULL, 'Location:'),
(87, '2018-03-23 15:40:40', '2018-03-23 15:40:40', 1, NULL, 'Address:');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locales_code_unique` (`code`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_locale_id_foreign` (`locale_id`),
  ADD KEY `translations_translation_id_foreign` (`translation_id`);

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
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `translations_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
