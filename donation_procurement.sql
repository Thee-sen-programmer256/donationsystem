-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'markRoi', 'kalemamark46@gmail.com', '12345'),
(2, 'markRoi', 'kalemamark46@gmail.com', '12345');

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
(1, 'Mark', 'Roi', '0786342567 ', '2000', 'no', 'wastehub77@gmail.com', 'confirmed'),
(2, 'Oscar', 'Daniels', '0786342567', '3000', 'yes', 'wastehub77@gmail.com', 'confirmed'),
(3, 'Bosco', 'Muo', '0755060662', '1000', 'no', 'mukasa.fred@gmail.com', 'confirmed'),
(4, 'Micheal', 'Kacheele', '0786342567 ', '400', 'yes', 'agnes.ap@gmail.com', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `donationappointment`
--

CREATE TABLE `donationappointment` (
  `id` int(40) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `organ/tissue/blood` varchar(45) NOT NULL,
  `bloodgroup` varchar(45) NOT NULL,
  `appointdate` date NOT NULL,
  `status` varchar(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationappointment`
--

INSERT INTO `donationappointment` (`id`, `fname`, `email`, `organ/tissue/blood`, `bloodgroup`, `appointdate`, `status`, `created`) VALUES
(1, 'Okello Brian', 'okellobrian@gmail.com', 'lungs', 'A', '0000-00-00', 'Pending', '2022-10-12 01:07:21');

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
  `gender` enum('Male','Female') NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorId`, `fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `image`, `gender`, `created`, `password`) VALUES
(1, 'Mark', 'mukasa.fred@gmail.com', '2022-09-27 13:52:00', '0789755664', 'B', 'chadian', 'avatar.jpg', 'Male', '2022-09-28 17:41:49', '1234'),
(2, 'Mukwaaya', 'Ku@gmail.com', '2022-09-28 15:21:14', '078656466', 'AB', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', 'Male', '2022-10-11 16:54:06', '7654556'),
(3, 'Enock', 'En@gmail.com ', '2022-09-28 20:19:41', '07536567980', 'O', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', 'Male', '2022-10-11 16:54:00', '674wtedyf'),
(4, 'Mark', 'mark@gmail.com', '2022-09-05 20:42:03', '079543567', 'A', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', '', '2022-10-11 16:53:56', 'kjjfhcvj'),
(5, 'mike Mugera', 'mm@gmail.com', '2012-09-12 23:55:43', '074325656323', 'B', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', '', '2022-10-11 16:53:53', 'wfgeg343444'),
(6, 'Muyere Edgar', 'mug@mail.com', '1997-10-14 11:13:59', '0745675786', 'AB', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', '', '2022-10-11 16:53:49', '86i7fru6v67ju'),
(7, 'Georgia Babirye', 'barb@gmail.com', '1982-10-01 10:18:05', '0776548765', 'O', 'Ugandan', '0295690b06d598ca4af51229b07610b8.png', 'Female', '2022-10-11 16:53:46', '.ilyktcyjfvgkub'),
(8, ' muhumuza Mark', 'mak@gmail.com', '1994-10-29 00:08:00', '0789755664', 'AB', 'ugandan', '0295690b06d598ca4af51229b07610b8.png', 'Male', '2022-10-11 16:53:37', '12345'),
(9, 'Okello Brian', 'okellobrian@gmail.com', '2022-09-29 19:11:00', '0789755664', 'A', 'bahraini', '0295690b06d598ca4af51229b07610b8.png', 'Male', '2022-10-10 16:12:20', 'password');

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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `n_id` int(11) NOT NULL,
  `notifications_name` text NOT NULL,
  `message` text NOT NULL,
  `client_type` text NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`n_id`, `notifications_name`, `message`, `client_type`, `status`) VALUES
(1, 'Greetings', 'Hello, How are you', 'Patient', 'Active'),
(2, 'Meeting', 'Hello we has a zoom meeting at 10am', 'Donor', 'Active');

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
(2, 'Heart', 'A+', 'Aareba Teddy', '2022-09-09 15:57:00', 'Available'),
(3, 'Eyes', 'AB', 'Nakasaga Juliet', '2022-09-09 22:26:00', 'Unavailable'),
(4, 'Kidney', 'O+', 'Okello Brian', '2022-09-13 12:27:00', 'Unavailable'),
(5, 'Heart', 'AB', 'Senyonjo Rhonie', '2022-09-17 03:59:00', 'Available'),
(6, 'Lungs', 'B', 'Muyeru Enock', '2022-09-27 20:43:45', 'Available');

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
  `bloodgroupstatus` varchar(45) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `fname`, `email`, `dob`, `contact`, `bloodgroup`, `bloodgroupstatus`, `nationality`, `image`, `gender`, `created`, `password`) VALUES
(1, 'Mutaasa Kafeera', 'muka@gmail.com', '2022-09-25 11:33:08', '0789654544', 'A', 'Pending', 'Ugandan', '', 'Male', '2022-10-08 16:46:41', '12345'),
(2, 'Edgar', 'edgar@mail.com', '2000-09-28 20:01:41', '0787535676', 'AB', 'Pending', 'Kenyan', '', 'Male', '2022-10-08 16:33:30', 'liuytucdecu6'),
(3, 'Bosco Banda', 'bos@gmail.com', '1980-09-27 23:57:24', '0784235645', 'B', 'Pending', 'Ugandan', '', 'Male', '2022-10-08 16:33:49', '2456te'),
(4, 'Bosco Mutyaaba', 'bosco1@gmail.com', '2022-09-30 21:37:00', '0755060662', 'A', '', 'bahamian', 'anime-wallpapers-anime-nanatsu-no-taizai-meliodas.jpg', 'male', '2022-10-10 16:38:07', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(11) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `organ` text NOT NULL,
  `bloodgroup` varchar(25) NOT NULL,
  `status` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `fname`, `email`, `organ`, `bloodgroup`, `status`, `created`) VALUES
(1, 'Roi', 'bos@gmail.com', 'Heart', 'A', 'Pending', '2022-10-05 21:08:16'),
(2, 'Mark', 'bos@gmail.com', 'Heart', 'private', 'Pending', '2022-10-05 21:10:07'),
(3, 'Bosco', 'bos@gmail.com', 'Kidney', 'private', 'Approved', '2022-10-05 21:33:27'),
(4, 'Mutaasa Kafeera', 'muka@gmail.com', 'Heart', 'O', 'Pending', '2022-10-09 20:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `she_description` varchar(255) NOT NULL,
  `client_type` varchar(45) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `she_description`, `client_type`, `start_datetime`, `end_datetime`) VALUES
(1, 'Introduction', 'dsgvsbdkhg kjvbn l gyuvtfryfghj hniouug', 'Patient', '2022-09-09 16:16:00', '2022-09-22 16:16:00'),
(6, 'Party', 'Community', 'Donor', '2022-10-08 22:47:00', '2022-10-09 22:47:00'),
(3, 'Zoom', 'To know what patients want etc.', 'Donor', '2022-09-09 16:16:00', '2022-09-22 16:16:00'),
(4, 'Zoom meeting', 'To know what patients want etc next week', 'Patient', '2022-09-09 16:16:00', '2022-09-09 16:17:00'),
(5, 'Feast', 'Big meal', 'Patient', '2022-09-20 22:20:00', '2022-09-21 22:20:00'),
(7, 'hcvjbknl', 'vbklj. ', 'Donor', '2022-10-19 22:48:00', '2022-12-01 22:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `status` varchar(20) NOT NULL,
  `body` longtext NOT NULL,
  `storyimage` text NOT NULL,
  `spid` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `status`, `body`, `storyimage`, `spid`, `created`) VALUES
(1, 'My Life', 'public', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n</p>', '../images/dp.JPG', 1, '2022-10-10 16:24:08'),
(2, 'My story', 'public', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n</p>\r\n', '../images/Screenshot (7).png', 2, '2022-10-10 16:24:25'),
(3, 'nstrdh', 'public', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', '../images/dp.JPG', 9, '2022-10-10 16:29:25'),
(4, 'Ikjhgyatucduvf', 'public', '<p>mlvyr ytexcuytfuygoj;lk.njbkhv cu5d4r6f t7guyhi,mkhnbjgfdxzseaqewextrcyivuobj nl;fi</p>\r\n', '../images/anime-4k-image-download-hd-wallpaper-preview.jpg', 0, '2022-10-10 16:38:52'),
(5, 'jkj tfugyihunjok', 'public', '<p>e&nbsp; rytvuyoi 7hv uyioyutfcruytfc etcutuyoiuhltiyguhli;iljmk.</p>\r\n', '../images/anime-4k-image-download-hd-wallpaper-preview.jpg', 4, '2022-10-10 17:05:17');

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
-- Indexes for table `donationappointment`
--
ALTER TABLE `donationappointment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`n_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `donationappointment`
--
ALTER TABLE `donationappointment`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organ`
--
ALTER TABLE `organ`
  MODIFY `organId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
