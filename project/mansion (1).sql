-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mansion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--
-- Error reading structure for table mansion.tb_booking: #1932 - Table 'mansion.tb_booking' doesn't exist in engine
-- Error reading data for table mansion.tb_booking: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `mansion`.`tb_booking`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `description`, `status`) VALUES
(1, 'Cleaning', 'Home cleaning', 1),
(2, 'Painting', 'House Painting', 1),
(3, 'Repairing', 'All Repairing', 1),
(4, 'Plumbing', 'All Plumbing', 1),
(5, 'Home Maintenance', 'all Mainatenance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_district`
--

CREATE TABLE `tb_district` (
  `Did` int(11) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_district`
--

INSERT INTO `tb_district` (`Did`, `District`, `Status`) VALUES
(1, 'Thiruvanathapuram', 1),
(2, 'Kollam', 1),
(3, 'Pathanamthitta', 1),
(4, 'Alapuzha', 1),
(5, 'Kottayam', 1),
(6, 'Iddukki', 1),
(7, 'Eranakulam', 1),
(8, 'Thrissur', 1),
(9, 'Palakkad', 1),
(10, 'Malapuram', 1),
(11, 'Kozhikode', 1),
(12, 'Wayanad', 1),
(13, 'Kannur', 1),
(14, 'Kasargode', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `Log_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `roleid` int(5) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`Log_id`, `Username`, `Password`, `roleid`, `status`) VALUES
(107, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1, 1),
(162, 'jiss@gmail.com', '637aacf80da8c851eab29e322948ca36', 3, 1),
(164, 'raj@gmail.com', 'f8d53959da9bc156492d1a3f66e5c9d1', 3, 1),
(171, 'navya@gmail.com', 'a806fae5e0313deb9da55f34597b155c', 2, 1),
(172, 'anil@gmail.com', 'dae25370b4b2cd9c9d8483059950cdf4', 2, 1),
(175, 'neenu@gmail.com', 'ebe1dfe3c92ab1ea2e982a64ccb94248', 3, 1),
(176, 'kutty@gmail.com', 'a72d5a798e2f60d3cd12d1db5c0b5a76', 2, 1),
(177, 'achu@gmail.com', 'c443e2706031356a27cc57d6d6723a09', 3, 1),
(178, 'soumyassjnair@gmail.com', 'cc20cc56b9485515925f74c0ccd88dbc', 3, 1),
(179, 'aaa@g.com', '832a2509f23176a49883753fe80ae885', 3, 1),
(180, 'a@g.in', '832a2509f23176a49883753fe80ae885', 3, 1),
(181, '', 'd41d8cd98f00b204e9800998ecf8427e', 3, 1),
(182, 'sssss@gmail.com', '251800da8d338eb82819105d5f3c7629', 3, 1),
(183, 'deva@123.coms', '251800da8d338eb82819105d5f3c7629', 2, 1),
(184, 'ramk@gmail.com', '769608153d9f5279ab35d52adee63bd7', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_msg`
--

CREATE TABLE `tb_msg` (
  `mid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_msg`
--

INSERT INTO `tb_msg` (`mid`, `user_id`, `msg`, `status`) VALUES
(20, 10, 'Your Booking is Confirmed', 0),
(25, 7, 'Your Booking is Confirmed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_place`
--

CREATE TABLE `tb_place` (
  `Pid` int(11) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Did` int(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_place`
--

INSERT INTO `tb_place` (`Pid`, `Place`, `Did`, `Status`) VALUES
(1, 'Ponkunnam', 5, 1),
(2, 'Anickadu', 5, 1),
(3, 'kajnirapally', 5, 1),
(6, 'dfghjk', 2, 1),
(7, 'vytla', 7, 1),
(8, 'panamkutyy', 3, 1),
(9, 'vejnaramood', 1, 1),
(10, 'hjk', 13, 0),
(11, 'ertyuio', 3, 1),
(12, 'ffhgfh', 1, 1),
(13, 'fd', 12, 1),
(14, 'Kochi', 13, 1),
(15, 'deddwqd', 11, 1),
(16, 'rtgyhj', 2, 1),
(17, 'fgsfds', 14, 1),
(18, 'Mundakayam', 5, 1),
(19, 'Kakanadu', 3, 1),
(23, 'Manarcadu', 6, 1),
(25, 'vaipur', 3, 1),
(26, 'Anickad', 5, 1),
(27, '  kanjiraopally', 13, 1),
(28, 'mhjghnfcg', 3, 1),
(29, 'kallur', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_regsuser`
--

CREATE TABLE `tb_regsuser` (
  `Log_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Pid` int(20) NOT NULL,
  `Pin` int(15) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `service_id` int(15) NOT NULL,
  `cat_id` int(15) NOT NULL,
  `Aadhar` varchar(30) NOT NULL,
  `Aadhar_pic` varchar(30) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regsuser`
--

INSERT INTO `tb_regsuser` (`Log_id`, `first_name`, `last_name`, `hname`, `Gender`, `DOB`, `Pid`, `Pin`, `Mobile`, `Photo`, `service_id`, `cat_id`, `Aadhar`, `Aadhar_pic`, `Status`) VALUES
(162, 'jiss', '', 'gdfsds', '', '0000-00-00', 17, 654321, '454689', 'upload/vava.jpg', 0, 3, '', '', 1),
(164, 'Raj S', '', 'Raj Nivas', '', '0000-00-00', 18, 678691, '9765432190', 'upload/dev.jpg', 0, 5, '', '', 1),
(171, 'Navya', '', 'Rose', 'Female', '1998-01-06', 8, 676890, '9089564533', 'upload/dev.jpg', 1, 1, '123451567890', '', 1),
(175, 'Neenu Babu', '', 'dfghj', '', '0000-00-00', 23, 686503, '9871472558', 'upload/Capture.JPG', 0, 4, '', '', 1),
(176, 'Archana S', '', 'fghj', '', '0000-00-00', 19, 686542, '9852369874', 'upload/vava.jpg', 0, 2, '', '', 1),
(177, 'Archu S', '', 'lkjgghf', '', '0000-00-00', 25, 686542, '9852369877', 'upload/vava.jpg', 0, 3, '', '', 1),
(178, 'Soumya S', '', 'kottarathil', '', '0000-00-00', 26, 686503, '9765432103', 'upload/ts2.jpg', 0, 2, '', '', 1),
(179, 'asd bgfg', '', 'khbvbcvbnm', '', '0000-00-00', 27, 0, '9000000000', 'upload/20160503_075313-1.jpg', 0, 4, '', '', 1),
(180, 'hgfhg', '', 'bjh', '', '0000-00-00', 28, 678900, '8000000008', 'upload/20160503_075405.jpg', 0, 5, '', '', 1),
(181, 'mjgyufyfty', '', '', '', '0000-00-00', 29, 0, '', 'upload/', 0, 1, '', '', 1),
(182, 'vinay', '', 'fghj', '', '1994-06-07', 25, 686503, '8848223266', 'upload/20160503_075431.jpg', 0, 3, '947258369123', '', 1),
(183, 'Devajith R', '', 'ffsdffsf', 'Male', '1998-01-23', 25, 254685, '9765432198', 'upload/20160503_075329.jpg', 0, 4, '285599564458', 'upload/Screenshot (2).png', 1),
(184, 'Ram', 'kumar', 'jhgjh', '', '0000-00-00', 29, 686769, '9876325810', 'upload/vava.jpg', 0, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`roleid`, `role`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`service_id`, `service_name`, `cat_id`, `service_charge`, `image`) VALUES
(1, 'Appartment Cleaning', 1, 1000, ''),
(2, 'Rearrange furniture', 5, 2000, ''),
(3, 'Carpentory', 3, 1500, ''),
(4, 'Washing', 1, 1000, ''),
(5, 'Cooking', 5, 1500, ''),
(6, 'Room Cleaning', 1, 500, ''),
(7, '', 3, 1000, ''),
(8, 'Floor Cleaning', 1, 1500, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`Log_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `tb_msg`
--
ALTER TABLE `tb_msg`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `tb_regsuser`
--
ALTER TABLE `tb_regsuser`
  ADD PRIMARY KEY (`Log_id`),
  ADD UNIQUE KEY `Log_id` (`Log_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `Log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tb_msg`
--
ALTER TABLE `tb_msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_regsuser`
--
ALTER TABLE `tb_regsuser`
  ADD CONSTRAINT `tb_regsuser_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `tb_login` (`Log_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
