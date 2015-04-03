-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2015 at 10:38 PM
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
  `status` enum('Real','Test','Revoke','Waiting') NOT NULL DEFAULT 'Test'
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `facebookID`, `img_slip`, `img_id`, `status`) VALUES
(1, '10202923525442639', '', '', 'Waiting'),
(2, '10203890623375033', '', '', 'Waiting'),
(3, '10204010877732116', '', '', 'Waiting'),
(4, '1046647052029741', '', '', 'Waiting'),
(5, '1056535317709883', '', '', 'Waiting'),
(6, '1122569114424711', '', '', 'Waiting'),
(7, '1513204775566991', '', '', 'Waiting'),
(8, '1553006424958967', '', '', 'Waiting'),
(9, '357693077764930', '', '', 'Waiting'),
(10, '358142257710887', '', '', 'Waiting'),
(11, '385775921608582', '', '', 'Waiting'),
(12, '393573830812673', '', '', 'Waiting'),
(13, '632522216853879', '', '', 'Waiting'),
(14, '735867089844993', '', '', 'Waiting'),
(15, '767512809991083', '', '', 'Waiting'),
(16, '768747419867669', '', '', 'Waiting'),
(17, '777956922285243', '', '', 'Waiting'),
(18, '784978018260998', '', '', 'Waiting'),
(19, '785245464885819', '', '', 'Waiting'),
(20, '811438715578748', '', '', 'Waiting'),
(21, '824145657633549', '', '', 'Waiting'),
(22, '834273383306575', '', '', 'Waiting'),
(23, '840815042644475', '', '', 'Waiting'),
(24, '845649035495944', '', '', 'Waiting'),
(25, '854042284654425', '', '', 'Waiting'),
(26, '863741690351953', '', '', 'Waiting'),
(27, '864185733620524', '', '', 'Waiting'),
(28, '866678596731677', '', '', 'Waiting'),
(29, '868309016567266', '', '', 'Waiting'),
(30, '874082682633962', '', '', 'Waiting'),
(31, '882571945098636', '', '', 'Waiting'),
(32, '884845614905185', '', '', 'Waiting'),
(33, '894356807297672', '', '', 'Waiting'),
(34, '910692488983194', '', '', 'Waiting'),
(35, '910883212284934', '', '', 'Waiting'),
(36, '913419545348857', '', '', 'Waiting'),
(37, '927294193959268', '', '', 'Waiting'),
(38, '943426452347794', '', '', 'Waiting'),
(39, '945518525469023', '', '', 'Waiting'),
(40, '953486367997513', '', '', 'Waiting'),
(41, '966474836697564', '', '', 'Waiting'),
(42, '972937799397620', '', '', 'Waiting'),
(44, '996409963716276', NULL, NULL, 'Test');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
