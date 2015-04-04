-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 09:21 AM
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
  `status` enum('Real','Test','Revoke','Waiting','Denied') NOT NULL DEFAULT 'Test',
  `fullName` varchar(50) DEFAULT NULL,
  `nickName` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `telEmergency` varchar(13) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `facebookID`, `img_slip`, `img_id`, `status`, `fullName`, `nickName`, `gender`, `tel`, `telEmergency`, `address`, `place`, `note`) VALUES
(1, '10202923525442639', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '10203890623375033', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '10204010877732116', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '1046647052029741', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1056535317709883', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '1122569114424711', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '1513204775566991', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '1553006424958967', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '357693077764930', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '358142257710887', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '385775921608582', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '393573830812673', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '632522216853879', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '735867089844993', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '767512809991083', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '768747419867669', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '777956922285243', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '784978018260998', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '785245464885819', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '811438715578748', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '824145657633549', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '834273383306575', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '840815042644475', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '845649035495944', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '854042284654425', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '863741690351953', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '864185733620524', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '866678596731677', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '868309016567266', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '874082682633962', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '882571945098636', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '884845614905185', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '894356807297672', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '910692488983194', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '910883212284934', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '913419545348857', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '927294193959268', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '943426452347794', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '945518525469023', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '953486367997513', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '966474836697564', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '972937799397620', '', '', 'Waiting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `facebookID` (`facebookID`);

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
