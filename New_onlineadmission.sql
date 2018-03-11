-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:13 AM
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
  `mobile_number` varchar(20) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `app_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `maritalstatus` varchar(55) NOT NULL,
  `first_choice` varchar(50) NOT NULL,
  `second_choice` varchar(50) NOT NULL,
  `third_choice` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application1`
--

INSERT INTO `application1` (`reg_id`, `user_id`, `name`, `father_name`, `mother_name`, `mobile_number`, `date_of_birth`, `app_date`, `gender`, `nationality`, `maritalstatus`, `first_choice`, `second_choice`, `third_choice`, `mark`) VALUES
(5, 12, 'Arifur Rahman Khan', 'Habibur Rahman', 'Rabey Khanom', '01723276068', '2000-02-02 00:00:00', '2018-01-16 08:49:18', 'male', 'Bangladeshi', 'single', 'Mechanical', 'Civil', 'Textile', 90),
(7, 13, 'nayan', 'ddd', 'dddd', '34455644', '2018-01-18 00:00:00', '2018-01-20 20:06:37', 'male', 'Bangladeshi', 'single', 'Mechanical', 'Civil', 'Textile', 95);

-- --------------------------------------------------------

--
-- Table structure for table `hsc`
--

CREATE TABLE `hsc` (
  `hsc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hsc_degree_name` varchar(200) NOT NULL,
  `hsc_roll` int(11) NOT NULL,
  `hsc_subject` varchar(200) NOT NULL,
  `hsc_passing_year` year(4) NOT NULL,
  `hsc_cgpa` float NOT NULL,
  `hsc_board` varchar(255) NOT NULL,
  `hsc_institute` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsc`
--

INSERT INTO `hsc` (`hsc_id`, `user_id`, `hsc_degree_name`, `hsc_roll`, `hsc_subject`, `hsc_passing_year`, `hsc_cgpa`, `hsc_board`, `hsc_institute`) VALUES
(2, 12, 'hsc', 532456, 'arts', 2014, 4.5, 'Dhaka', 'MPID'),
(4, 13, 'hsc', 7877, 'science', 2014, 5, 'Dhaka', 'MPID');

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
(1, 8, 'uploads/ad8ab13fb4.jpg', 'uploads/signature.jpg', 'uploads/ad8ab13fb4.jpg ', 'uploads/ad8ab13fb4.jpg'),
(2, 12, 'uploads/19cc3ee3c2.jpg', 'uploads/19cc3ee3c2.jpg', 'uploads/19cc3ee3c2.jpg ', 'uploads/19cc3ee3c2.jpg'),
(6, 13, 'uploads/22089170_1727432940614764_5698160408341123565_n.jpg', 'uploads/logo_sigclub.png', 'uploads/425px-WP4.4.2-ERD.png ', 'uploads/16158774000_4f928660df_o.jpg');

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
(6, 12, 'arif', 'road5', 'mirpur', 'mirpur', 1216, 'dhaka'),
(7, 13, 'arif', 'road5', 'mirpur', 'mirpur', 2340, 'dhaka');

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
(5, 12, 'arif', 'road5', 'mirpur', 'mirpur', 1216, 'dhaka'),
(7, 13, 'arif', 'road5', 'mirpur', 'mirpur', 2340, 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `ssc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ssc_degree_name` varchar(200) NOT NULL,
  `ssc_roll` int(11) NOT NULL,
  `ssc_cgpa` varchar(20) NOT NULL,
  `ssc_subject` varchar(150) NOT NULL,
  `ssc_passing_year` year(4) NOT NULL,
  `ssc_board` varchar(200) NOT NULL,
  `ssc_institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`ssc_id`, `user_id`, `ssc_degree_name`, `ssc_roll`, `ssc_cgpa`, `ssc_subject`, `ssc_passing_year`, `ssc_board`, `ssc_institute`) VALUES
(2, 12, 'Dhakhil', 23456, '3.9', 'arts', 2012, 'bteb', 'mpi'),
(4, 13, 'SSC', 2345, '40', 'science', 2012, 'Dhaka', 'wer');

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
(11, 'habib', 'habib@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'manager'),
(12, 'Arifur Rahman', 'arif@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(13, 'nayan', 'nayan@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student');

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
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hsc`
--
ALTER TABLE `hsc`
  MODIFY `hsc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permanent_address`
--
ALTER TABLE `permanent_address`
  MODIFY `permanent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `present_address`
--
ALTER TABLE `present_address`
  MODIFY `present_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ssc`
--
ALTER TABLE `ssc`
  MODIFY `ssc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
