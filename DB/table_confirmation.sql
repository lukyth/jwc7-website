-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2015 at 07:42 PM
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
-- Table structure for table `confirmation`
--

CREATE TABLE IF NOT EXISTS `confirmation` (
`id` int(11) NOT NULL,
  `facebookID` varchar(20) NOT NULL,
  `img_slip` varchar(40) DEFAULT NULL,
  `img_id` varchar(40) DEFAULT NULL,
  `status` enum('Real','Test') NOT NULL DEFAULT 'Test'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `facebookID`, `img_slip`, `img_id`, `status`) VALUES
(1, '10202923525442639', '', '', 'Real'),
(2, '10203890623375033', '', '', 'Real'),
(3, '10204010877732116', '', '', 'Real'),
(4, '1046647052029741', '', '', 'Real'),
(5, '1056535317709883', '', '', 'Real'),
(6, '1122569114424711', '', '', 'Real'),
(7, '1513204775566991', '', '', 'Real'),
(8, '1553006424958967', '', '', 'Real'),
(9, '357693077764930', '', '', 'Real'),
(10, '358142257710887', '', '', 'Real'),
(11, '385775921608582', '', '', 'Real'),
(12, '393573830812673', '', '', 'Real'),
(13, '632522216853879', '', '', 'Real'),
(14, '735867089844993', '', '', 'Real'),
(15, '767512809991083', '', '', 'Real'),
(16, '768747419867669', '', '', 'Real'),
(17, '777956922285243', '', '', 'Real'),
(18, '784978018260998', '', '', 'Real'),
(19, '785245464885819', '', '', 'Real'),
(20, '811438715578748', '', '', 'Real'),
(21, '824145657633549', '', '', 'Real'),
(22, '834273383306575', '', '', 'Real'),
(23, '840815042644475', '', '', 'Real'),
(24, '845649035495944', '', '', 'Real'),
(25, '854042284654425', '', '', 'Real'),
(26, '863741690351953', '', '', 'Real'),
(27, '864185733620524', '', '', 'Real'),
(28, '866678596731677', '', '', 'Real'),
(29, '868309016567266', '', '', 'Real'),
(30, '874082682633962', '', '', 'Real'),
(31, '882571945098636', '', '', 'Real'),
(32, '884845614905185', '', '', 'Real'),
(33, '894356807297672', '', '', 'Real'),
(34, '910692488983194', '', '', 'Real'),
(35, '910883212284934', '', '', 'Real'),
(36, '913419545348857', '', '', 'Real'),
(37, '927294193959268', '', '', 'Real'),
(38, '943426452347794', '', '', 'Real'),
(39, '945518525469023', '', '', 'Real'),
(40, '953486367997513', '', '', 'Real'),
(41, '966474836697564', '', '', 'Real'),
(42, '972937799397620', '', '', 'Real');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
