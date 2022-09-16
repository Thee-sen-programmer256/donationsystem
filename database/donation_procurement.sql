-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2022 at 12:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation_procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

DROP TABLE IF EXISTS `bloodgroup`;
CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bloodtype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `donationId` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statuss` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`donationId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationId`, `fname`, `lname`, `contact`, `amount`, `display`, `email`, `statuss`) VALUES
(1, 'Mark', 'Roi', '0786342567 ', '2000', '', 'wastehub77@gmail.com', 'Pending'),
(2, 'Oscar', 'Daniels', '0786342567', '3000', '', 'wastehub77@gmail.com', 'confirmed'),
(3, 'Bosco', 'Muo', '0755060662', '1000', 'no', 'mukasa.fred@gmail.com', 'Pending'),
(4, 'Micheal', 'Kacheele', '0786342567 ', '400', 'yes', 'agnes.ap@gmail.com', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `donorId` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  PRIMARY KEY (`donorId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eventId` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ev_description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
CREATE TABLE IF NOT EXISTS `notify` (
  `notifyId` int(11) NOT NULL AUTO_INCREMENT,
  `notifications` varchar(255) NOT NULL,
  PRIMARY KEY (`notifyId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`notifyId`, `notifications`) VALUES
(1, 'Hello, how are you?'),
(2, 'i dont have anything'),
(3, 'Haaahahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

DROP TABLE IF EXISTS `organ`;
CREATE TABLE IF NOT EXISTS `organ` (
  `organId` int(11) NOT NULL AUTO_INCREMENT,
  `organname` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `statuss` text NOT NULL,
  PRIMARY KEY (`organId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`organId`, `organname`, `bloodgroup`, `donor`, `date_added`, `statuss`) VALUES
(1, 'Heart', 'A+', 'Okello Brian', '2022-09-09 00:00:00', 'Available'),
(2, 'Kidney', 'B+', 'Aareba Teddy', '2022-09-09 15:57:00', 'Available'),
(3, 'Eyes', 'AB', 'Nakasaga Juliet', '2022-09-09 22:26:00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `requestId` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  `organ` text NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `date_request` datetime NOT NULL,
  `statuss` text NOT NULL,
  PRIMARY KEY (`requestId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `she_description` varchar(255) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `she_description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Introduction', 'dytfygiuhoij;', '2022-09-09 16:16:00', '2022-09-22 16:16:00'),
(6, 'Party', 'Community', '2022-10-08 22:47:00', '2022-10-09 22:47:00'),
(3, 'Zoom', 'To know what patients want etc.', '2022-09-09 16:16:00', '2022-09-22 16:16:00'),
(4, 'Zoom meeting', 'To know what patients want etc next week', '2022-09-09 16:16:00', '2022-09-09 16:17:00'),
(5, 'Feast', 'Big meal', '2022-09-20 22:20:00', '2022-09-21 22:20:00'),
(7, 'hcvjbknl', 'vbklj. ', '2022-10-19 22:48:00', '2022-12-01 22:48:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
