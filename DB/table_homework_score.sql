-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2015 at 01:45 PM
-- Server version: 10.0.16-MariaDB
-- PHP Version: 5.6.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ywc_jwc7`
--

-- --------------------------------------------------------

--
-- Table structure for table `homework_score`
--

CREATE TABLE IF NOT EXISTS `homework_score` (
  `facebookID` varchar(20) NOT NULL,
  `userID` int(11) NOT NULL,
  `q1` tinyint(4) NOT NULL DEFAULT '0',
  `q2` tinyint(4) NOT NULL DEFAULT '0',
  `q3` tinyint(4) NOT NULL DEFAULT '0',
  `q4` tinyint(4) NOT NULL DEFAULT '0',
  `q5` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homework_score`
--
ALTER TABLE `homework_score`
  ADD PRIMARY KEY (`facebookID`,`userID`);
