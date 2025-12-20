-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2025 at 07:47 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rachid`
--

-- --------------------------------------------------------

--
-- Table structure for table `rachid_bids`
--

DROP TABLE IF EXISTS `rachid_bids`;
CREATE TABLE IF NOT EXISTS `rachid_bids` (
  `owner_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `bid_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rachid_items`
--

DROP TABLE IF EXISTS `rachid_items`;
CREATE TABLE IF NOT EXISTS `rachid_items` (
  `item_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_description` text COLLATE utf8mb4_general_ci,
  `item_user_id` int UNSIGNED NOT NULL,
  `item_created_at` datetime NOT NULL,
  `item_buy_now_price` decimal(10,2) DEFAULT NULL,
  `item_duration_days` tinyint UNSIGNED NOT NULL,
  `item_starting_bid` decimal(10,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rachid_item_pictures`
--

DROP TABLE IF EXISTS `rachid_item_pictures`;
CREATE TABLE IF NOT EXISTS `rachid_item_pictures` (
  `item_id` int UNSIGNED NOT NULL,
  `item_priority` tinyint NOT NULL,
  `item_picture_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rachid_users`
--

DROP TABLE IF EXISTS `rachid_users`;
CREATE TABLE IF NOT EXISTS `rachid_users` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unsigned car on n''a pas besoin des valeurs negatifs',
  `user_full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_roles` json NOT NULL,
  `user_avatar_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_iban` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_pseudo` (`user_pseudo`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
