-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 03:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ac`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `photo`) VALUES
(1, 'Md Salim Hasan  Riad', 'salim@gmail.com', '019658754524', '792656d96b3e5c8ffb1cbe9aa3af6bd9.jpg'),
(5, 'Sohag Khan chowdhory', 'sohag@gmail.com', '01740445607', '51570e45f26dc78e7b45d48906086eec.jpg'),
(6, 'Shopon Chowdhory', 'shopon@gmail.com', '018754558758', 'fe7d93d1caae2a64c2dc265d223c5da1.jpg'),
(7, 'Mizanur Rhman', 'mizan@gmail.com', '018546986548', '09152fcaa17914d1d0d146a968e4701b.jpg'),
(8, 'Badsha Mia', 'madsha@gmail.com', '018754558758', '53f19b037f4953af10890291f363d0a1.jpg'),
(9, 'Motiur Rahman', 'motiur@gmail.com', '015897587888', '80f39a0bc7cb2004d7a57d59cecd7750.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
