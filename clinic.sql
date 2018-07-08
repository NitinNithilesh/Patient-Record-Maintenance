-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2018 at 02:12 PM
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
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

DROP TABLE IF EXISTS `amount`;
CREATE TABLE IF NOT EXISTS `amount` (
  `id` int(100) NOT NULL,
  `treatment` varchar(500) NOT NULL,
  `amount_to_be_paid` varchar(100) NOT NULL,
  `amount_paid` varchar(500) NOT NULL,
  `balance` varchar(500) NOT NULL,
  `total_balance` int(100) DEFAULT NULL,
  `time` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chief_complaint`
--

DROP TABLE IF EXISTS `chief_complaint`;
CREATE TABLE IF NOT EXISTS `chief_complaint` (
  `id` int(100) NOT NULL,
  `complaint` varchar(1000) DEFAULT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

DROP TABLE IF EXISTS `investigation`;
CREATE TABLE IF NOT EXISTS `investigation` (
  `id` int(100) NOT NULL,
  `xray_and_others` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_history`;
CREATE TABLE IF NOT EXISTS `medical_history` (
  `id` int(100) NOT NULL,
  `disease` varchar(500) DEFAULT NULL,
  `pressure` varchar(100) NOT NULL,
  `diabetes` varchar(100) NOT NULL,
  `pregnant` varchar(10) DEFAULT NULL,
  `nursing` varchar(10) DEFAULT NULL,
  `habits` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
CREATE TABLE IF NOT EXISTS `medication` (
  `id` int(100) NOT NULL,
  `drug_history` varchar(500) NOT NULL,
  `previous_surgery` varchar(500) NOT NULL,
  `drug_allergy` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oral_health_examination`
--

DROP TABLE IF EXISTS `oral_health_examination`;
CREATE TABLE IF NOT EXISTS `oral_health_examination` (
  `id` int(100) NOT NULL,
  `tooth` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `past_dental_history`
--

DROP TABLE IF EXISTS `past_dental_history`;
CREATE TABLE IF NOT EXISTS `past_dental_history` (
  `id` int(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `age` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `marital_status` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `referred_by` varchar(100) DEFAULT NULL,
  `balance` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(100) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `amount_to_be_paid` int(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `total_balance` int(100) DEFAULT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `user` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user`, `username`, `password`) VALUES
('admin', 'php', 'admin'),
('user', 'php', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

DROP TABLE IF EXISTS `total`;
CREATE TABLE IF NOT EXISTS `total` (
  `id` int(100) NOT NULL,
  `total_amount_to_be_paid` int(100) NOT NULL,
  `total_amount_paid` int(100) NOT NULL,
  `total_balance` int(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
