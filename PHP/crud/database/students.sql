-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2021 at 09:21 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `roll` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`) VALUES
(1, 'arfan', '10'),
(2, 'fahim', '16'),
(3, 'fahim', '16'),
(4, 'fahim', '16'),
(24, 'fasdf', '3434'),
(6, 'shuvo', '50'),
(7, 'asdf', '34'),
(8, 'asdf', '34'),
(9, 'arfan', '342'),
(10, 'raju', '3456'),
(11, 'jaju', '2'),
(12, 'jaju', '2'),
(13, 'jaju', '2'),
(14, 'tipu', '60'),
(15, 'adfd', '34'),
(16, 'adfd', '34'),
(17, 'adfd', '34'),
(18, 'adfd', '34'),
(19, 'adfd', '34'),
(20, 'fasdf', '3434'),
(21, 'fasdf', '3434'),
(22, 'fasdf', '3434'),
(23, 'fasdf', '3434'),
(25, 'fasdf', '3434');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
