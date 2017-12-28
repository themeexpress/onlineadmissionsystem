-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 01:53 PM
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
-- Table structure for table `address_meta`
--

CREATE TABLE `address_meta` (
  `address_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `permanent_id` int(11) NOT NULL,
  `present_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education_meta`
--

CREATE TABLE `education_meta` (
  `edu_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `hsc_id` int(11) NOT NULL,
  `ssc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hsc`
--

CREATE TABLE `hsc` (
  `hsc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree_Name` varchar(200) NOT NULL,
  `roll` int(11) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `cgpa` float NOT NULL,
  `institute` text NOT NULL,
  `board` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address`
--

CREATE TABLE `permanent_address` (
  `permanent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `houseorvillage` text NOT NULL,
  `post_office` varchar(255) NOT NULL,
  `police_station` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `present_address`
--

CREATE TABLE `present_address` (
  `present_id` int(11) NOT NULL,
  `houseorvillage` text NOT NULL,
  `post_office` varchar(200) NOT NULL,
  `police_station` varchar(200) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `district` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `data_of_birth` datetime NOT NULL,
  `reg_date` datetime NOT NULL,
  `gender` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `maritalstatus` varchar(55) NOT NULL,
  `first_choice` varchar(50) NOT NULL,
  `second_choice` varchar(50) NOT NULL,
  `third_choice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `ssc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ssc_roll` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `cgpa` float NOT NULL,
  `board` varchar(200) NOT NULL,
  `institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'Kamrul Islam', 'kamrul@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(10, 'Aftab Kajol', 'aftab@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(11, 'habib', 'habib@gmail.com ', 'e10adc3949ba59abbe56e057f20f883e', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_meta`
--
ALTER TABLE `address_meta`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `education_meta`
--
ALTER TABLE `education_meta`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `hsc`
--
ALTER TABLE `hsc`
  ADD PRIMARY KEY (`hsc_id`);

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
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

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
-- AUTO_INCREMENT for table `address_meta`
--
ALTER TABLE `address_meta`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education_meta`
--
ALTER TABLE `education_meta`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hsc`
--
ALTER TABLE `hsc`
  MODIFY `hsc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permanent_address`
--
ALTER TABLE `permanent_address`
  MODIFY `permanent_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `present_address`
--
ALTER TABLE `present_address`
  MODIFY `present_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ssc`
--
ALTER TABLE `ssc`
  MODIFY `ssc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
