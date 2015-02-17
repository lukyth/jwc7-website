-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 05:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ywc_jwc7`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `facebookID` varchar(20) NOT NULL,
  `profilePic` int(11) DEFAULT NULL,
  `registerType` enum('Content','Design','Marketing') DEFAULT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `sex` enum('M','F') DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `national_ID` varchar(13) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` text,
  `province` varchar(50) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `knowFrom` varchar(100) DEFAULT NULL,
  `sizeshirt` enum('S','M','L','XL','XXL') DEFAULT NULL,
  `disease` text,
  `drugAllergy` text,
  `foodAllergy` varchar(50) DEFAULT NULL,
  `specialFood` text,
  `registerDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `parentPhone` varchar(13) DEFAULT NULL,
  `relateParent` varchar(50) DEFAULT NULL,
  `status` enum('InProgress','Registered','Homework_Submitted','Homework_Checked','Accepted','Denied','Paid') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`facebookID`);

ALTER TABLE `register` ADD `birthday` DATE NULL AFTER `sex`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
