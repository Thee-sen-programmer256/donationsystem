-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 07:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(11) NOT NULL,
  `bloodtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationId` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statuss` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `donor` (
  `donorId` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `contact` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorId`, `fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `image`, `gender`, `password`) VALUES
(4, 'Okello Brian', 'brian@gmail.com', '2022-09-01 14:18:00', '0781038320', 'B', 'armenian', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', 'male', 'brian123'),
(5, 'gjhghjgj', 'uhuhuuhu@gmail.com', '2022-09-02 14:24:00', '0781038329', 'A', 'barbudans', '256756514046_status_ef830a4a040a450e94df246e10893fde.jpg', 'male', 'yugyuguyguyg'),
(6, 'rdtrdtrdt', 'ftgfhgftft@gmail.com', '2022-09-07 14:26:00', '078967543', 'AB', 'australian', 'FB_IMG_16025292964768137.jpg', 'female', 'rdersdresresr'),
(7, 'fffff', 'fffff@gmail.com', '2022-09-09 15:05:00', '0781038399', 'AB', 'barbadian', '256756514046_status_ef830a4a040a450e94df246e10893fde.jpg', 'female', 'fdfdfffhgfd'),
(8, 'Dr Anabella', 'anabella@gmail.com', '2022-09-03 15:05:00', '0781038888', 'B', 'bahamian', 'IMG_20200503_162943.jpg', 'female', 'anna123'),
(9, 'fgjiogiotgjthiojreio', 'bjkbjbnjkbjk@gmail.com', '2022-09-02 22:30:00', '0781038300', 'B', 'bangladeshi', 'IMG_20200215_185652.jpg', 'female', 'bn12345mbnjhb'),
(10, 'jkghdcdcdvhgh', 'c vcghvcgh@gmail.com', '2022-09-11 22:57:00', '0776896754', 'B', 'bahraini', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', 'female', 'bn12345iyu');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ev_description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `notifyId` int(11) NOT NULL,
  `notifications` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `organ` (
  `organId` int(11) NOT NULL,
  `organname` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `statuss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `contact` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `image`, `gender`, `password`) VALUES
(1, 'vdfdfff', 'bn@gmail.com', '2022-09-04 22:59:00', '0781038320', 'B', 'bahamian', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', 'female', 'bn12345ccf'),
(2, 'Brendah Atuhaire', 'brendah@gmail.com', '2022-09-09 23:03:00', '0781038317', 'AB', 'barbadian', 'IMG-20190519-WA0160.jpg', 'female', 'brendah'),
(3, 'Kato Paul', 'paul@gmail.com', '2022-09-10 23:11:00', '0776896759', 'AB', 'gabonese', 'FB_IMG_16102712847059635.jpg', 'male', 'paul123'),
(4, 'Dan Omona', 'omona@gmail.com', '2022-09-09 23:15:00', '0781038324', 'A', 'bahraini', 'Screenshot_20210113-183019.png', 'male', 'dan123'),
(5, 'babra', 'bn46@gmail.com', '2022-09-11 23:21:00', '0781038320', 'B', 'azerbaijani', '_20200622_003355.jpg', 'female', 'bn12345'),
(6, 'babra67', 'bn67@gmail.com', '2022-09-11 23:21:00', '0781038320', 'B', 'azerbaijani', '_20200622_003355.jpg', 'prefer not to say', 'okellobrian64@gmail.com'),
(7, 'rba', 'rba@gmail.com', '2022-09-02 23:26:00', '0781038320', 'AB', '', '_20200622_003355.jpg', 'female', 'bn12345'),
(8, 'babanans', 'bana@gmail.com', '2022-09-04 23:31:00', '0781038320', 'B', 'australian', '256750050168.jpg', 'female', 'bn12345'),
(9, 'agnes', 'agnes@gmail.com', '2022-09-03 23:36:00', '0781038320', 'A', 'armenian', '_20200622_003355.jpg', 'female', 'bn12345');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  `organ` text NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `date_request` datetime NOT NULL,
  `statuss` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `she_description` varchar(255) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `tell_us` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `title`, `status`, `photo`, `tell_us`, `created_at`, `updated_at`) VALUES
(1, 'first post', 'public', 'images/256750050168.jpg', 'hey there i have a dad diosea', '2022-09-16 20:41:09', '0000-00-00 00:00:00'),
(2, 'first post', 'public', '../images/256750050168.jpg', 'hey there i have a dad diosea', '2022-09-16 20:42:02', '0000-00-00 00:00:00'),
(3, 'Feb Coupon', 'public', '../images/_20200622_003355.jpg', 'hey there', '2022-09-16 20:54:20', '0000-00-00 00:00:00'),
(4, 'vjvyvvivyi', 'public', '../images/256750050168.jpg', 'bububui', '2022-09-16 21:01:52', '0000-00-00 00:00:00'),
(5, 'tttttttttt', 'public', '../images/_20200622_003355.jpg', 'vuovuivu', '2022-09-16 21:02:44', '0000-00-00 00:00:00'),
(6, 'jkfjfd', 'public', '../images/256756514046_status_ef830a4a040a450e94df246e10893fde.jpg', 'jksdh', '2022-09-16 21:05:46', '0000-00-00 00:00:00'),
(7, 'jhhsdh', 'public', '../images/256750050168.jpg', 'jhdhdh', '2022-09-16 21:06:48', '0000-00-00 00:00:00'),
(8, 'kfdf', 'public', '../images/_20200622_003355.jpg', 'fdfndff', '2022-09-16 21:08:05', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`notifyId`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`organId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `notifyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organ`
--
ALTER TABLE `organ`
  MODIFY `organId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
