-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 05:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `application1`
--

CREATE TABLE `application1` (
  `reg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `app_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `maritalstatus` varchar(55) NOT NULL,
  `first_choice` varchar(50) NOT NULL,
  `second_choice` varchar(50) NOT NULL,
  `third_choice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application1`
--

INSERT INTO `application1` (`reg_id`, `user_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `app_date`, `gender`, `nationality`, `maritalstatus`, `first_choice`, `second_choice`, `third_choice`) VALUES
(4, 8, 'Sanjoy Kumar nath', 'Ariful Nath', 'Bijaya Rani', '2015-06-17 00:00:00', '2017-12-31 14:44:01', 'male', 'Bangladeshi', 'single', 'Civil', 'Textile', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `hsc`
--

CREATE TABLE `hsc` (
  `hsc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree_name` varchar(200) NOT NULL,
  `roll` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `cgpa` float NOT NULL,
  `board` varchar(255) NOT NULL,
  `institute` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsc`
--

INSERT INTO `hsc` (`hsc_id`, `user_id`, `degree_name`, `roll`, `subject`, `passing_year`, `cgpa`, `board`, `institute`) VALUES
(1, 8, 'SSC', 9876, 'arts', 2014, 3.9, 'dhaka', 'dei');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `ssc_transcript` varchar(200) NOT NULL,
  `hsc_transcript` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `user_id`, `profile_pic`, `signature`, `ssc_transcript`, `hsc_transcript`) VALUES
(1, 8, 'uploads/ad8ab13fb4.jpg', 'uploads/signature.jpg', 'uploads/ad8ab13fb4.jpg ', 'uploads/ad8ab13fb4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address`
--

CREATE TABLE `permanent_address` (
  `permanent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `careof` varchar(255) NOT NULL,
  `houseorvillage` text NOT NULL,
  `post_office` varchar(255) NOT NULL,
  `police_station` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_address`
--

INSERT INTO `permanent_address` (`permanent_id`, `user_id`, `careof`, `houseorvillage`, `post_office`, `police_station`, `zip_code`, `district`) VALUES
(4, 8, 'dfd dfd', 's sfdsd', 'sfddfsd', 'sfdfd', 2345, 'dcvdf');

-- --------------------------------------------------------

--
-- Table structure for table `present_address`
--

CREATE TABLE `present_address` (
  `present_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `careof` varchar(255) NOT NULL,
  `houseorvillage` text NOT NULL,
  `post_office` varchar(200) NOT NULL,
  `police_station` varchar(200) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `district` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_address`
--

INSERT INTO `present_address` (`present_id`, `user_id`, `careof`, `houseorvillage`, `post_office`, `police_station`, `zip_code`, `district`) VALUES
(4, 8, 'dfd dfd', 's sfdsd', 'sfddfsd', 'sfdfd', 2345, 'dcvdf');

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `ssc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree_name` varchar(200) NOT NULL,
  `ssc_roll` int(11) NOT NULL,
  `ssc_cgpa` varchar(20) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `board` varchar(200) NOT NULL,
  `institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`ssc_id`, `user_id`, `degree_name`, `ssc_roll`, `ssc_cgpa`, `subject`, `passing_year`, `board`, `institute`) VALUES
(1, 8, 'SSC', 123454, '3.9', 'arts', 2014, 'dhaka', 'dei');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(8, 'Mehedi Hasan', 'mehedi@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(9, 'Kamrul Islam', 'kamrul@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(10, 'Aftab Kajol', 'aftab@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(11, 'habib', 'habib@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application1`
--
ALTER TABLE `application1`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `hsc`
--
ALTER TABLE `hsc`
  ADD PRIMARY KEY (`hsc_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `permanent_address`
--
ALTER TABLE `permanent_address`
  ADD PRIMARY KEY (`permanent_id`);

--
-- Indexes for table `present_address`
--
ALTER TABLE `present_address`
  ADD PRIMARY KEY (`present_id`);

--
-- Indexes for table `ssc`
--
ALTER TABLE `ssc`
  ADD PRIMARY KEY (`ssc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application1`
--
ALTER TABLE `application1`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hsc`
--
ALTER TABLE `hsc`
  MODIFY `hsc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permanent_address`
--
ALTER TABLE `permanent_address`
  MODIFY `permanent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `present_address`
--
ALTER TABLE `present_address`
  MODIFY `present_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ssc`
--
ALTER TABLE `ssc`
  MODIFY `ssc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
