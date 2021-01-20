-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 12:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawful`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs1`
--

CREATE TABLE `dogs1` (
  `dogs_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` varchar(20) NOT NULL,
  `breed` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogs1`
--

INSERT INTO `dogs1` (`dogs_id`, `name`, `age`, `breed`, `gender`, `picture`) VALUES
(1, 'Ruby', '2 Months', 'Labrador Retreiver', 'Female', 'dog1.jpg'),
(3, 'Angus', '4 Months', 'Pug', 'Male', 'dog2.jpg'),
(5, 'Rover', '7 Months', 'Poodle', 'Male', 'dog3.jpg'),
(9, 'Charlie', '2 Years', 'Beagle', 'Male', 'dog4.jpg'),
(10, 'Alvin', '1 Year', 'German Shepherd', 'Male', 'dog5.jpg'),
(11, 'Wishbone', '4 Years', 'Dalmation', 'Male', 'dog6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events1`
--

CREATE TABLE `events1` (
  `Event_id` int(11) NOT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_description` varchar(100) DEFAULT NULL,
  `volunteer_id` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events2`
--

CREATE TABLE `events2` (
  `Event_id` int(11) NOT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_description` varchar(100) DEFAULT NULL,
  `volunteer_id` varchar(35) DEFAULT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events3`
--

CREATE TABLE `events3` (
  `Event_id` int(11) NOT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_description` varchar(100) DEFAULT NULL,
  `volunteer_id` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officers1`
--

CREATE TABLE `officers1` (
  `officer_id` int(11) NOT NULL,
  `Officer_username` varchar(40) DEFAULT NULL,
  `Officer_password` varchar(20) DEFAULT NULL,
  `Off_fname` varchar(20) DEFAULT NULL,
  `Officer_mname` varchar(20) DEFAULT NULL,
  `Officer_gender` bit(2) DEFAULT NULL,
  `Officer_city` varchar(20) DEFAULT NULL,
  `Officer_state` varchar(20) DEFAULT NULL,
  `Officer_zip` int(10) DEFAULT NULL,
  `Officer_email` varchar(20) DEFAULT NULL,
  `Officer_phone` int(10) DEFAULT NULL,
  `Officer_country` varchar(20) DEFAULT NULL,
  `Officer_organization` varchar(40) DEFAULT NULL,
  `Officer_title` varchar(40) DEFAULT NULL,
  `Officer_description` varchar(100) DEFAULT NULL,
  `Officer_start_date` date DEFAULT NULL,
  `Officer_end_date` date DEFAULT NULL,
  `officer_lname` varchar(20) NOT NULL,
  `officer_address` varchar(70) NOT NULL,
  `officer_bday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers1`
--

CREATE TABLE `volunteers1` (
  `volunteer_id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `organization` varchar(20) DEFAULT NULL,
  `gender` bit(2) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `bday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs1`
--
ALTER TABLE `dogs1`
  ADD PRIMARY KEY (`dogs_id`);

--
-- Indexes for table `events1`
--
ALTER TABLE `events1`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `events2`
--
ALTER TABLE `events2`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `events3`
--
ALTER TABLE `events3`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `officers1`
--
ALTER TABLE `officers1`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `volunteers1`
--
ALTER TABLE `volunteers1`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs1`
--
ALTER TABLE `dogs1`
  MODIFY `dogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events1`
--
ALTER TABLE `events1`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `events2`
--
ALTER TABLE `events2`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `events3`
--
ALTER TABLE `events3`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `volunteers1`
--
ALTER TABLE `volunteers1`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
