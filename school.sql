-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2019 at 01:24 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `authority` set('admin','staff','student') NOT NULL,
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`authority`, `id`, `name`, `email`, `department`, `password`, `phone`, `token`) VALUES
('staff', 31, 'Ina Baba', 'ina@gmail.com', 'electrical', '35a7824b33426a9fc80e9fdabe145a4afb5a5492', '08094145784', 'abu6sdnsahkjh8j'),
('staff', 30, 'Ishola Martins', 'ishola@gmail.com', 'mechanical', '35a7824b33426a9fc80e9fdabe145a4afb5a5492', '08060151873', 'h7hanj86abjkssd'),
('admin', 18, 'Adisa Abass Richard', 'abasstoy14@gmail.com', '', 'ac7eb4e384bed637f630d5cb5926efd60ebc6baa', '08094145784', 'djksd8b7ajbsusn'),
('student', 26, 'Omoniyi', 'omo11@gmail.com', '', '35a7824b33426a9fc80e9fdabe145a4afb5a5492', '08094145784', ''),
('student', 28, 'Ajani Micheal', 'ajani@gmail.com', 'mechanical', 'ac7eb4e384bed637f630d5cb5926efd60ebc6baa', '0809414578', ''),
('staff', 29, 'Akani Islam', 'islam@gmail.com', 'electrical', '87cca47ee6b027e6e9524d6c608d2eae2a072bbbadisa', '08094145767', ''),
('student', 41, 'Mohammed Ibrahim', 'moh@gmail.com', 'electrical', 'ac7eb4e384bed637f630d5cb5926efd60ebc6baa', '08094145784', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `phone`, `token`) VALUES
(1, 'Akade ALI', 'akande@gmail.com', 'ac7eb4e384bed637f630d5cb5926efd60ebc6baa', '08094145767', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
