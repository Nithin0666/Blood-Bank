-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2017 at 05:59 PM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
CREATE TABLE IF NOT EXISTS `blood` (
  `bloodid` int(11) NOT NULL AUTO_INCREMENT,
  `bloodgroup` varchar(10) NOT NULL,
  PRIMARY KEY (`bloodid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bloodid`, `bloodgroup`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

DROP TABLE IF EXISTS `donor_registration`;
CREATE TABLE IF NOT EXISTS `donor_registration` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `no` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhar` bigint(14) NOT NULL,
  `city` varchar(100) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`donor_id`, `first_name`, `last_name`, `age`, `sex`, `no`, `address`, `aadhar`, `city`, `bloodgroup`) VALUES
(4, 'dfkjs', 'qdjk', 12, 'female', 291, 'kjdc', 921, 'djkb', 'B-'),
(5, 'avduk', 'dsjbk', 231, 'male', 9824, 'skjb', 9834, 'dsdjbvk', 'A+'),
(6, 'safeena', 'ac', 12, 'female', 231, 'adclkn', 2131, 'kjbc', 'O-'),
(7, 'safeena', 'n', 20, 'female', 1231231212, 'dkjbb', 1231231, 'sdvjb,', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL,
  `bgroup` varchar(5) DEFAULT NULL,
  `quantity` int(15) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `bgroup`, `quantity`) VALUES
(2, 'A-', 100),
(3, 'B+', 100),
(4, 'B-', 100),
(5, 'AB+', 100),
(6, 'AB-', 100),
(7, 'O+', 100),
(1, 'A+', 100);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `request_registration`
--

DROP TABLE IF EXISTS `request_registration`;
CREATE TABLE IF NOT EXISTS `request_registration` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `no` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhar` bigint(14) NOT NULL,
  `city` varchar(100) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_registration`
--

INSERT INTO `request_registration` (`request_id`, `first_name`, `last_name`, `age`, `sex`, `no`, `address`, `aadhar`, `city`, `bloodgroup`, `action`) VALUES
(1, 'gaurav', 'kumar', 20, 'male', 9999999999, 'SSIT', 1234, 'Tumkur', 'A-', 'Dispatched'),
(2, 'Nitesh', 'Jha', 20, 'male', 9898989898, 'SSIT', 1212412, 'Tumkur', 'A+', 'PENDING');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
