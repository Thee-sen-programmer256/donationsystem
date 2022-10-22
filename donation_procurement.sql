-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 03:43 PM
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
(2, 'markRoi', 'kalemamark46@gmail.com', '12345'),
(3, 'Admin', 'admin@gmail.com', '12345');

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
  `fundraise_name` mediumtext NOT NULL,
  `amount` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statuss` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationId`, `fname`, `lname`, `contact`, `fundraise_name`, `amount`, `display`, `email`, `statuss`) VALUES
(1, 'Mark', 'Roi', '0786342567 ', '', '2000', 'no', 'wastehub77@gmail.com', 'confirmed'),
(2, 'Oscar', 'Daniels', '0786342567', '', '3000', 'yes', 'wastehub77@gmail.com', 'confirmed'),
(3, 'Bosco', 'Muo', '0755060662', '', '1000', 'no', 'mukasa.fred@gmail.com', 'confirmed'),
(4, 'Micheal', 'Kacheele', '0786342567 ', '', '400', 'yes', 'agnes.ap@gmail.com', 'confirmed'),
(5, 'Benny', 'Kacheele', '0786342567', '', '2000', 'yes', 'kacheele@gmail.com', 'Pending'),
(6, 'Brian', 'Kenny', '0798678987', '', '3000', 'yes', 'kennyb@gmail.com', 'Pending'),
(7, 'Bosco', 'Kiyo', '0786342567 ', 'Support Jane for her Heart transplant', '20000', 'no', 'mak@gmail.com', 'Pending'),
(8, 'Oscar', 'KOY', '0786342567', 'Save Keith with a new Kidney', '400', 'yes', 'okellobrian@gmail.com', 'Pending'),
(9, 'Mark', 'Roi', '0755060662', 'Support Jane for her Heart transplant', '400', 'yes', 'super@silverfleet.com', 'confirmed'),
(10, 'Mark', 'Roi', '0755060662', 'Support Jane for her Heart transplant', '400', 'yes', 'super@silverfleet.com', 'Pending'),
(11, 'Mark', 'Roi', '0755060662', 'Support Jane for her Heart transplant', '400', 'yes', 'super@silverfleet.com', 'Pending');

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
  `appointdate` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `withdraw_notice` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationappointment`
--

INSERT INTO `donationappointment` (`id`, `fname`, `email`, `organ/tissue/blood`, `bloodgroup`, `appointdate`, `status`, `withdraw_notice`, `created`) VALUES
(1, 'Okello Brian', 'okellobrian@gmail.com', 'heart', 'AB', '0000-00-00 00:00:00', 'Approved', 'ongoing', '2022-10-21 23:33:20'),
(2, 'Tumukunde Oscar', 'oscar@gmail.com', 'Bone marrow', 'O', '0000-00-00 00:00:00', 'Rejected', 'ongoing', '2022-10-21 23:33:28'),
(3, 'Tumukunde Oscar', 'oscar@gmail.com', 'kidney', 'O', '0000-00-00 00:00:00', 'Pending', 'ongoing', '2022-10-21 23:33:34'),
(4, 'Okello Brian', 'okellobrian@gmail.com', 'Bone marrow', 'A', '0000-00-00 00:00:00', 'Rejected', 'WITHDRAWN', '2022-10-21 23:37:53'),
(5, 'Okello Brian', 'okellobrian@gmail.com', 'Blood', 'AB', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:06'),
(6, '', '', '', '', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:18'),
(7, 'Okello Brian', 'okellobrian@gmail.com', 'Blood', 'Choose', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:23'),
(8, 'Okello Brian', 'okellobrian@gmail.com', 'Blood', 'AB', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:28'),
(9, 'Okello Brian', 'okellobrian@gmail.com', 'lungs', 'A', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:34'),
(10, 'Okello Brian', 'okellobrian@gmail.com', 'lungs', 'A', '0000-00-00 00:00:00', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:40'),
(11, 'Okello Brian', 'okellobrian@gmail.com', 'lungs', 'AB', 'Oct 31, 2022', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:46'),
(12, 'Okello Brian', 'okellobrian@gmail.com', 'Middle Ear', 'A', 'Oct 31, 2022', 'Pending', 'WITHDRAWN', '2022-10-21 23:32:59'),
(13, 'Jessica Adong', 'adong@gmail.com', 'pancreas', 'AB', 'Dec 03, 2022', 'Pending', 'ongoing', '2022-10-21 23:29:11'),
(14, 'Jessica Adong', 'adong@gmail.com', 'small bowel', 'AB', 'Feb 25, 2023', 'Pending', 'ongoing', '2022-10-21 23:34:23');

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
  `bloodgroupstatus` varchar(45) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorId`, `fname`, `email`, `dob`, `contact`, `bloodgroup`, `bloodgroupstatus`, `nationality`, `image`, `gender`, `created`, `password`) VALUES
(1, 'Okello Brian', 'okellobrian@gmail.com', '1989-02-16 12:21:00', '0786342567', 'AB', 'Pending', 'ugandan', '256750050168.jpg', 'Male', '2022-10-18 19:02:00', '12345'),
(2, 'Tumukunde Oscar', 'oscar@gmail.com', '1998-07-16 12:39:00', '0755060662', 'O', 'Verified', 'ugandan', 'Female.jpg', 'Male', '2022-10-21 22:38:04', '12345'),
(3, 'Jessica Adong', 'adong@gmail.com', '1991-10-22 02:22:00', '0755060662', 'AB', 'Pending', 'ugandan', 'f-donor-1.jpg', 'Female', '2022-10-21 23:23:07', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `ev_description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fundraise`
--

CREATE TABLE `fundraise` (
  `f_id` int(11) NOT NULL,
  `fundraise_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `amount` varchar(255) NOT NULL,
  `fimage` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fundraise`
--

INSERT INTO `fundraise` (`f_id`, `fundraise_name`, `description`, `amount`, `fimage`, `status`) VALUES
(1, 'Support Jane for her Heart transplant', '\"I learnt it the hard way that one is never too young to have a heart attack .I suffered a severe chest pain while on job in Bangalore. The symptoms included radiating pain in the arm and jaw. I threw up after a while and the pain eased. So, I dismissed it as an acute acidity attack. Later, I had chest pain on and off, but it never struck me that it could be a heart attack; I am only 46\"', 'SHS: 230,000,000', 'pimages/FUND2.jpg', 'Active'),
(2, 'Save Keith with a new Kidney', '\"I have been looking at my baby since three months after he was born. Waking up everyday to see him with all these tubes all over his body, yes he cant talk but am his mother and i know and feel that my son is in great pain but am helpless i just want to be a happy mum again just to see my kid grow up like anyother normal child\"....Keiths mom', 'SHS:100,000,000', 'pimages/FUND3.jpg', 'Active');

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
(1, 'Fundraising Meeting', 'We have a fundraising meeting on monday at 12:00pm.\r\nPlease endeaver to attend.', 'Donor', 'Active'),
(2, 'Meeting', 'Friday meeting about Organ donation awareness', 'All', 'Active'),
(3, 'Check-ups', 'You have been advised to come for a blood group checkup', 'Patient', 'Inactive'),
(4, 'Good night', 'Have some rest after a long day', 'Patient', 'Inactive');

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
(6, 'Lungs', 'B', 'Muyeru Enock', '2022-09-27 20:43:45', 'Unavailable');

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
(1, 'Mukasa Fred', 'muka@gmail.com', '1992-05-31 11:55:00', '0755060662', 'AB', 'Pending', 'ugandan', 'AfricanMen-1-696x696.jpg', 'male', '2022-10-18 19:07:33', '12345'),
(2, 'Nankya Joan', 'joan@gmail.com', '1995-06-23 12:09:00', '0755060662', 'B', 'Verified', 'ugandan', 'AfricanMen-1-696x696.jpg', 'female', '2022-10-21 22:31:30', '12345'),
(3, 'Nantume Maureen', 'maureen@gmail.com', '1976-02-22 01:52:00', '0786342567', 'O', 'Pending', 'ugandan', 'female-p1.jpg', 'female', '2022-10-21 22:53:17', '12345'),
(4, 'Sembera Tom', 'tom@gmail.com', '1980-04-22 02:13:00', '0786342567 ', 'AB', 'Pending', 'ugandan', 'male-p1.jpg', 'male', '2022-10-21 23:14:49', '12345');

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
(1, 'Mukasa Fred', 'muka@gmail.com', 'Heart', 'AB', 'Approved', '2022-10-22 12:12:01'),
(2, 'Nantume Maureen', 'maureen@gmail.com', 'Lungs', 'O', 'Pending', '2022-10-21 22:53:51'),
(3, 'Sembera Tom', 'tom@gmail.com', 'Pancreas', 'AB', 'Pending', '2022-10-21 23:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `she_description` mediumtext NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `she_description`, `start_datetime`, `end_datetime`) VALUES
(1, 'National Volunteer Blood Donor Month', 'National Volunteer Blood Donor Month highlights the importance of donating blood to give life. It encourages new people to sign up and honors past and present donors.', '2022-10-14 16:45:00', '2022-10-28 16:45:00'),
(2, 'The Rose Parade and Donate Life Float', 'Each year on New years Day, The Donate Life is a part of the Rose Parade. It honors the millions of people touched by organ , eye  and tissue donation, including living donors, donor families , transplant recipients and transplant candidates', '2022-10-16 18:13:00', '2022-10-28 18:13:00');

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
(1, 'Mukasa Fred', 'public', '<p>Tucked neatly inside a wooden box were 40 handwritten notes. Andy Voge carefully thought about each one, sharing details of a memory and a special song the 33-year-old had experienced with his wife, Rachel. Andy wrote out as many as he could with the intent they would provide Rachel hope and inspiration during the lengthy, life-saving multi-organ transplant he underwent at Cleveland Clinic on September 10, 2021.</p>\r\n', '../images/male1.webp', 1, '2022-10-16 09:07:38'),
(2, 'Nankya Olivia', 'public', '<p>My husband is a fire fighter, and I worked as an emergency responder for years,&rdquo; said Carnahan. &ldquo;We are salty to begin with, and we deal with a lot of difficult situations on a regular basis. We tend to find humor is the only thing that helps ease the burden. At some point you have to look at yourself and realize, &lsquo;This is pathetic, you are too young to just give up...get your head out of your rear end and do something.</p>\r\n', '../images/female1.webp', 2, '2022-10-16 09:20:51'),
(4, 'Maureen Nantume', 'public', '<p>Maureen Nantume was involved in a road traffic accident whilst on a cycling holiday, suffering injuries to her face, jaw and legs. After making a good initial recovery and expecting to be back at work within three months - three years later she is still having treatment having experienced two further emergency admissions to hospital due to acute cellulitis and sepsis.</p>\r\n', '../images/female-p1.jpg', 3, '2022-10-21 22:59:31'),
(5, 'Tom Sembera', 'public', '<p>In 2007 when Tom Sembera was diagnosed with non-Hodgkin lymphoma his family were stunned by the news.</p>\r\n\r\n<p>This powerful film is based on the testimony of Lisa, Tom&rsquo;s wife who gives a moving account of the events that led to Paul&rsquo;s death and explores the effects on their family.</p>\r\n', '../images/male-p1.jpg', 4, '2022-10-21 23:17:34');

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
-- Indexes for table `fundraise`
--
ALTER TABLE `fundraise`
  ADD PRIMARY KEY (`f_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donationappointment`
--
ALTER TABLE `donationappointment`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundraise`
--
ALTER TABLE `fundraise`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
