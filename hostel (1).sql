-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 07:54 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(2, 'admin', 'anilshaw025@gmail.com', 'Anil@1234', '2019-07-28 18:03:39', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_sn` varchar(255) DEFAULT NULL,
  `course_fn` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(8, 'BT04', 'B.Tech/B.E.', 'Bachelor  of Technology/Bachelor  of Engineering', '2019-08-01 16:31:13'),
(9, 'BS03', 'B.Sc.', 'Bachelor  of Science', '2019-08-01 16:34:35'),
(10, 'BCM03', 'B.Com.', 'Bachelor of Commerce', '2019-08-01 16:35:17'),
(11, 'BA03', 'B.A.', 'Bachelor  of Arts', '2019-08-01 16:36:53'),
(12, 'B03', 'BCA', 'Bachelor Of Computer Application', '2019-08-01 16:37:31'),
(13, 'BB02', 'BBA', 'Bachelor of Business Administration', '2019-08-01 16:39:29'),
(14, 'M02', 'MCA', 'Master of Computer Application', '2019-08-01 16:41:13'),
(15, 'MT02', 'M.Tech.', 'Master of  Technology', '2019-08-01 16:41:47'),
(16, 'MS02', 'M.Sc.', 'Master of Science', '2019-08-01 16:43:37'),
(17, 'MCM02', 'M.Com.', 'Master of Commerce', '2019-08-01 16:45:06'),
(18, 'MA02', 'M.A.', 'Master of  Arts', '2019-08-01 16:45:39'),
(19, '-', '-', 'Others', '2019-08-01 16:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `email`, `phone`, `message`, `posting_date`) VALUES
(3, 'anilshaw025@gmail.com', 9784790675, 'Hello Sir', '2019-08-10 08:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `feespm` int(11) DEFAULT NULL,
  `foodstatus` int(11) DEFAULT NULL,
  `stayfrom` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `course` varchar(500) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `middleName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `aadhar` bigint(20) NOT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(500) DEFAULT NULL,
  `corresPincode` int(11) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmnatetState` varchar(500) DEFAULT NULL,
  `pmntPincode` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `email`, `aadhar`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `image`, `postingDate`) VALUES
(34, 105, 5, 1000, 0, '2019-08-19', 3, 'Bachelor of Commerce', 'Suman', '', 'Shaw', 'female', 9903078285, 'anilshaw025@gmail.com', 843512843512, 0, 'qswdefrgthy', 'sdfghj', 9903078285, 'Anand vihar co operative housing society limited H/no-62/1/1/6, BL No-16,', 'Kan', 'Bihar', 743126, 'Anand vihar co operative housing society limited H/no-62/1/1/6, BL No-16,', 'Kan', 'Bihar', 743126, 'back.jpg', '2019-08-03 19:02:00'),
(44, 104, 4, 1600, 0, '2019-08-15', 8, 'Master of Computer Application', 'Anil', '', 'Shaw', 'male', 5421542102, 'anilshaw02@gmail.com', 8435128435, 0, 'sdefdg', 'sdfghj', 8754321652, 'H/No-56/2,BL No-22,Sugiapara,Kankinara', 'Kolkata', 'Dadra and Nagar Haveli (UT)', 743126, 'H/No-56/2,BL No-22,Sugiapara,Kankinara', 'Kolkata', 'Dadra and Nagar Haveli (UT)', 743126, 'back.jpg', '2019-08-03 20:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `reply_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(6, 1, 101, 5000, '2019-08-01 14:41:55'),
(7, 2, 102, 3500, '2019-08-01 14:44:16'),
(8, 3, 103, 2500, '2019-08-01 14:45:52'),
(9, 4, 104, 1600, '2019-08-01 14:46:39'),
(10, 5, 105, 1000, '2019-08-01 14:46:56'),
(11, 1, 201, 5000, '2019-08-01 14:47:06'),
(12, 2, 202, 3500, '2019-08-01 14:47:19'),
(13, 3, 203, 2500, '2019-08-01 14:47:44'),
(14, 4, 204, 1600, '2019-08-01 14:47:55'),
(15, 5, 205, 1000, '2019-08-01 14:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(12, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-09 03:56:04'),
(13, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-10 03:52:19'),
(14, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-10 03:55:40'),
(15, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-14 02:36:00'),
(16, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-20 10:11:06'),
(17, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-24 14:11:18'),
(18, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 08:25:29'),
(19, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 08:26:51'),
(20, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 08:28:23'),
(21, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 13:59:57'),
(22, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 14:24:40'),
(23, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 14:40:35'),
(24, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 14:40:44'),
(25, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 14:54:47'),
(26, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-25 15:57:37'),
(27, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:06:39'),
(28, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:09:13'),
(29, 0, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:09:22'),
(30, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:17:23'),
(31, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:22:20'),
(32, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 13:31:57'),
(33, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-28 14:21:18'),
(34, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-29 15:40:43'),
(35, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-30 08:45:03'),
(36, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 04:26:32'),
(37, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:08:20'),
(38, 27, 'pk1981021@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:14:47'),
(39, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:39:05'),
(40, 29, 'anilshaw02@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:42:11'),
(41, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:47:53'),
(42, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 05:51:51'),
(43, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 06:25:46'),
(44, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-07-31 10:59:58'),
(45, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 05:34:47'),
(46, 29, 'anilshaw02@gmail.com', 0x3a3a31, '', '', '2019-08-01 07:55:45'),
(47, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 09:07:46'),
(48, 26, 'pk198021@gmail.com', 0x3a3a31, '', '', '2019-08-01 09:33:17'),
(49, 27, 'pk1981021@gmail.com', 0x3a3a31, '', '', '2019-08-01 09:33:38'),
(50, 26, 'pk198021@gmail.com', 0x3a3a31, '', '', '2019-08-01 09:33:54'),
(51, 27, 'pk1981021@gmail.com', 0x3a3a31, '', '', '2019-08-01 09:36:58'),
(52, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 13:07:39'),
(53, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 13:59:35'),
(54, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 15:27:45'),
(55, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-01 17:11:34'),
(56, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-02 05:09:34'),
(57, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-03 09:42:37'),
(58, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-03 15:12:38'),
(59, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-03 17:42:44'),
(60, 29, 'anilshaw02@gmail.com', 0x3a3a31, '', '', '2019-08-03 19:59:07'),
(61, 29, 'anilshaw02@gmail.com', 0x3a3a31, '', '', '2019-08-03 20:48:01'),
(62, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-09 16:28:41'),
(63, 21, 'anilshaw025@gmail.com', 0x3a3a31, '', '', '2019-08-10 15:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) DEFAULT NULL,
  `passUdateDate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(21, 'Anil', '', 'Shaw', 'male', 9784790675, 'anilshaw025@gmail.com', '1234', '2019-07-08 20:58:53', '28-07-2019 07:44:05', '01-08-2019 09:08:26'),
(26, 'Suman', '', 'Shaw', 'female', 9784790675, 'pk198021@gmail.com', '123', '2019-07-31 05:11:16', NULL, NULL),
(27, 'Pramod', '', 'Shaw', 'male', 9903078285, 'pk1981021@gmail.com', '1234', '2019-07-31 05:14:00', '31-07-2019 10:54:07', ''),
(29, 'anil', '', 'kumar', 'male', 5421542102, 'anilshaw02@gmail.com', '123', '2019-07-31 05:41:34', '31-07-2019 07:41:34', ''),
(32, 'Pramod', 'Kumar', 'Shaw', 'male', 9784790675, 'pramodkumar2124@gmail.com', '1', '2019-08-01 13:58:11', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
