-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ywc_jwc7.register
CREATE TABLE IF NOT EXISTS `register` (
  `facebookID` varchar(20) NOT NULL,
  `profilePic` int(11) DEFAULT NULL,
  `registerType` enum('Design','Content','Marketing') DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `national_ID` varchar(13) DEFAULT NULL,
  `grade` float DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `province` varchar(10) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `knowFrom` varchar(10) DEFAULT NULL,
  `foodAllergy` varchar(50) DEFAULT NULL,
  `disease` text,
  `drugAllergy` text,
  `specialFood` enum('Normal','Vegan','J','Halal') DEFAULT NULL,
  `registerDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `parentPhone` varchar(10) DEFAULT NULL,
  `status` enum('Registered','Homework_Submitted','Homework_Checked','Accepted','Denied','Paid') DEFAULT NULL,
  PRIMARY KEY (`facebookID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
