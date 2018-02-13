-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2018 at 09:22 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campersdb`
--
CREATE DATABASE IF NOT EXISTS `campersdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `campersdb`;

-- --------------------------------------------------------

--
-- Table structure for table `camp_additional_services`
--

DROP TABLE IF EXISTS `camp_additional_services`;
CREATE TABLE IF NOT EXISTS `camp_additional_services` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `currency_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `descp` varchar(255) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_additional_services`
--

INSERT INTO `camp_additional_services` (`id`, `currency_id`, `name`, `descp`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wochenendaufpreis', NULL, 399, '2018-02-12 20:20:15', '2018-02-12 20:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `camp_category`
--

DROP TABLE IF EXISTS `camp_category`;
CREATE TABLE IF NOT EXISTS `camp_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_category`
--

INSERT INTO `camp_category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, '2-bed camper', '2018-02-09 11:05:29', '2018-02-09 11:05:39'),
(2, '4-bed motorhome', '2018-02-11 19:38:54', '2018-02-11 19:38:54'),
(3, '6-bed motorhome', '2018-02-11 19:39:04', '2018-02-11 19:39:04'),
(4, '4WD vehicles without equipment', '2018-02-11 19:39:18', '2018-02-11 19:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `camp_city`
--

DROP TABLE IF EXISTS `camp_city`;
CREATE TABLE IF NOT EXISTS `camp_city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_city`
--

INSERT INTO `camp_city` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Johannesburg', '2018-02-09 11:01:54', '2018-02-09 11:02:22'),
(2, 'Windhoek', '2018-02-09 11:02:01', '2018-02-09 11:02:01'),
(3, 'Kapstadt', '2018-02-09 11:02:11', '2018-02-09 11:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `camp_company`
--

DROP TABLE IF EXISTS `camp_company`;
CREATE TABLE IF NOT EXISTS `camp_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_company`
--

INSERT INTO `camp_company` (`id`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'Bobocampers', '2018-02-09 11:02:52', '2018-02-09 11:02:52'),
(2, 'Acso', '2018-02-09 11:02:59', '2018-02-09 11:03:32'),
(3, 'BRITZ', '2018-02-09 11:03:07', '2018-02-09 11:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `camp_company_cities`
--

DROP TABLE IF EXISTS `camp_company_cities`;
CREATE TABLE IF NOT EXISTS `camp_company_cities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_company_cities`
--

INSERT INTO `camp_company_cities` (`id`, `city_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2018-02-10 06:15:30', '2018-02-10 06:44:11'),
(2, 1, 2, '2018-02-10 06:43:01', '2018-02-10 06:43:01'),
(3, 1, 1, '2018-02-10 06:43:44', '2018-02-10 06:44:04'),
(4, 2, 2, '2018-02-10 10:21:26', '2018-02-10 10:21:26'),
(5, 3, 2, '2018-02-10 10:21:35', '2018-02-10 10:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `camp_company_inclusions`
--

DROP TABLE IF EXISTS `camp_company_inclusions`;
CREATE TABLE IF NOT EXISTS `camp_company_inclusions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL,
  `inclusion_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `inclusion_id` (`inclusion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camp_currency`
--

DROP TABLE IF EXISTS `camp_currency`;
CREATE TABLE IF NOT EXISTS `camp_currency` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_currency`
--

INSERT INTO `camp_currency` (`id`, `currency_code`, `currency_symbol`, `created_at`, `updated_at`) VALUES
(1, 'USD', '$', '2018-02-09 12:56:28', '2018-02-09 12:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `camp_equipment`
--

DROP TABLE IF EXISTS `camp_equipment`;
CREATE TABLE IF NOT EXISTS `camp_equipment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `currency_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_equipment`
--

INSERT INTO `camp_equipment` (`id`, `name`, `amount`, `created_at`, `updated_at`, `currency_id`) VALUES
(1, 'Baby / Child seat', 209, '2018-02-12 20:14:46', '2018-02-12 20:14:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `camp_inclusions`
--

DROP TABLE IF EXISTS `camp_inclusions`;
CREATE TABLE IF NOT EXISTS `camp_inclusions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_inclusions`
--

INSERT INTO `camp_inclusions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Unlimited kilometres', '2018-02-09 11:25:54', '2018-02-09 11:29:43'),
(2, 'Airport / Hotel Transfers', '2018-02-11 18:33:05', '2018-02-11 18:33:05'),
(3, 'Complete Camping equipment', '2018-02-11 18:33:23', '2018-02-11 18:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `camp_season`
--

DROP TABLE IF EXISTS `camp_season`;
CREATE TABLE IF NOT EXISTS `camp_season` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `season_name` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `start_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_season`
--

INSERT INTO `camp_season` (`id`, `company_id`, `city_id`, `season_name`, `amount`, `currency_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Season 1', 500, 1, '2018-02-13 00:00:00', '2018-02-28 00:00:00', '2018-02-10 10:38:59', '2018-02-12 20:44:25'),
(3, 2, 1, 'Season 2', 900, 1, '2018-03-10 00:00:00', '2018-03-31 00:00:00', '2018-02-10 10:39:20', '2018-02-12 20:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `camp_season_company_rates`
--

DROP TABLE IF EXISTS `camp_season_company_rates`;
CREATE TABLE IF NOT EXISTS `camp_season_company_rates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `season_name` varchar(255) DEFAULT NULL,
  `season_rate` int(10) NOT NULL,
  `start_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `city_id` (`city_id`),
  KEY `season_id` (`season_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_season_company_rates`
--

INSERT INTO `camp_season_company_rates` (`id`, `company_id`, `city_id`, `season_id`, `season_name`, `season_rate`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'Testing', 650, '2018-02-21 00:00:00', '2018-02-21 00:00:00', '2018-02-10 11:23:22', '2018-02-10 12:23:11'),
(2, 2, 1, 3, 'Testing', 650, '2018-02-21 00:00:00', '2018-02-21 00:00:00', '2018-02-10 11:23:22', '2018-02-10 12:23:11'),
(3, 3, 1, 3, 'Testing', 650, '2018-02-21 00:00:00', '2018-02-21 00:00:00', '2018-02-10 11:23:22', '2018-02-10 12:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `camp_vechicle`
--

DROP TABLE IF EXISTS `camp_vechicle`;
CREATE TABLE IF NOT EXISTS `camp_vechicle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(255) DEFAULT NULL,
  `company_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `v_person` varchar(255) DEFAULT NULL,
  `v_age` varchar(255) DEFAULT NULL,
  `v_type` varchar(255) DEFAULT NULL,
  `v_engine` varchar(255) DEFAULT NULL,
  `v_toll_fee` varchar(255) DEFAULT NULL,
  `v_dep_fee` varchar(255) DEFAULT NULL,
  `currency_id` int(10) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `v_images` text,
  `equipments` varchar(100) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `inclusion_id` varchar(255) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `is_featured` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `city_id` (`city_id`),
  KEY `season_id` (`season_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_vechicle`
--

INSERT INTO `camp_vechicle` (`id`, `v_name`, `company_id`, `city_id`, `season_id`, `v_person`, `v_age`, `v_type`, `v_engine`, `v_toll_fee`, `v_dep_fee`, `currency_id`, `category_id`, `v_images`, `equipments`, `service_id`, `inclusion_id`, `status`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Suzuki Cultas', 1, 1, 2, '2 Persons', '15 Years', 'Manual', 'Heighest', '222', '333', 1, '4,3,2', '1516436449.png,1516436475.png', '3,1', '2,1', '3,2,1', 1, 'no', '2018-02-11 21:30:09', '2018-02-11 21:30:09'),
(2, 'Britz 4x4 NAVI Camper', 1, 1, 3, '4 Persons', '15 Years', 'Manual', 'Heighest', '455', '444', 1, '4,3,2,1', '1516436475.png', '3,1', '2,1', '3,2,1', 1, 'no', '2018-02-11 21:34:59', '2018-02-11 21:34:59'),
(3, 'Britz 4x4 Toyota Single Cab mit Dachzelt', 1, 1, 3, '6 Persons', '15 Years', 'Manual', 'Heighest', '333', '454', 1, '4,3,2,1', '1516363933.png,1516371202.png,1516371210.png', '3,1', '2,1', '3,2,1', 1, 'no', '2018-02-11 21:37:34', '2018-02-11 21:37:34'),
(4, 'Britz 4x4 Toyota Landcruiser SLE', 2, 1, 3, '2 Persons', '15 Years', 'Manual', 'Heighest', '226', '454', 1, '4,3,2', '1516363262.png,1516363406.png', '3,1', '2,1', '3,2,1', 1, 'no', '2018-02-11 21:44:22', '2018-02-11 21:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `camp_vechicle_booking`
--

DROP TABLE IF EXISTS `camp_vechicle_booking`;
CREATE TABLE IF NOT EXISTS `camp_vechicle_booking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vechicle_id` int(10) NOT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `other_contacts` varchar(255) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `vechicle_id` (`vechicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_02_08_183745_create_user_roles_table', 1),
(3, '2018_02_08_183940_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `full_name`, `email`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Camper Admin', 'admin@campers.com', '$2y$10$teOKddQyTNNaX.cEOMi7L.RdBsSD9EK9hpl7SpuoEGaSUmBiJ0jva', '1', 'WAHk0q1KMIICQeGYjtvWv95jD6brMNWmjHbFRg4SYYxrAOVQQ6MzkIczeeUo', '2018-02-09 06:00:41', '2018-02-09 06:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-02-08 19:00:00', '2018-02-08 19:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camp_company_cities`
--
ALTER TABLE `camp_company_cities`
  ADD CONSTRAINT `camp_company_cities_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `camp_city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_company_cities_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `camp_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `camp_company_inclusions`
--
ALTER TABLE `camp_company_inclusions`
  ADD CONSTRAINT `camp_company_inclusions_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `camp_company` (`id`),
  ADD CONSTRAINT `camp_company_inclusions_ibfk_2` FOREIGN KEY (`inclusion_id`) REFERENCES `camp_inclusions` (`id`);

--
-- Constraints for table `camp_season`
--
ALTER TABLE `camp_season`
  ADD CONSTRAINT `camp_season_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `camp_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_season_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `camp_city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `camp_season_company_rates`
--
ALTER TABLE `camp_season_company_rates`
  ADD CONSTRAINT `camp_season_company_rates_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `camp_company` (`id`),
  ADD CONSTRAINT `camp_season_company_rates_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `camp_city` (`id`),
  ADD CONSTRAINT `camp_season_company_rates_ibfk_3` FOREIGN KEY (`season_id`) REFERENCES `camp_season` (`id`);

--
-- Constraints for table `camp_vechicle`
--
ALTER TABLE `camp_vechicle`
  ADD CONSTRAINT `camp_vechicle_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `camp_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_vechicle_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `camp_city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_vechicle_ibfk_3` FOREIGN KEY (`season_id`) REFERENCES `camp_season` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_vechicle_ibfk_6` FOREIGN KEY (`currency_id`) REFERENCES `camp_currency` (`id`);

--
-- Constraints for table `camp_vechicle_booking`
--
ALTER TABLE `camp_vechicle_booking`
  ADD CONSTRAINT `camp_vechicle_booking_ibfk_1` FOREIGN KEY (`vechicle_id`) REFERENCES `camp_vechicle` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
