-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 06:19 AM
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

UPDATE INTO `tb_login` (`Log_id`, `Username`, `Password`, `roleid`, `status`) VALUES
(1, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1, 1);,
(2, 'soumyasnair@mca.ajce.in', '8d576cd637be6c3d47599cda189a29bd', 2, 0),
(6, 'sajithasnair22@gmail.com', '8d6f3cddb390cf9aa9e80fe7b9824a40', 3, 1),
(7, 'kuttu@gmail.com', '55b731863e70859b1a631848f25ee945', 2, 1),
(8, 'dev@gmail.com', '10032586bc62852d2a7ed121da58d05f', 2, 0),
(9, 'neenu@gmail.com', '00e29539ffd0fba9b660762e0c159dd7', 2, 0),
(10, 'jesni@gmail.com', '35730bba91b8ac8172cfaf2ca215f7dc', 2, 1),
(11, 'sneha@gmail.com', '76281d4a9faf68bbce161cb21c3ce1f4', 2, 0),
(12, 'nairsasidharan56@gmail.com', 'e6e061838856bf47e1de730719fb2609', 2, 1),
(13, 'arun@gmail.com', 'a48baea16e7e1194826a8a2366f84e6f', 2, 0);

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
(8, 'panamkutyy', 6, 1),
(9, 'vejnaramood', 1, 1),
(14, 'Kochi', 13, 1),
(16, 'rtgyhj', 2, 1),
(18, 'Mundakayam', 5, 1),
(19, 'Kakanadu', 3, 1),
(23, 'Manarcadu', 6, 1),
(25, 'vaipur', 3, 1),
(26, 'Anickad', 5, 1),
(27, '  kanjiraopally', 13, 1),
(28, 'mhjghnfcg', 3, 1),
(29, 'kallur', 3, 1),
(32, 'kidagnur', 5, 0),
(33, 'Pallickathodu', 4, 1),
(34, 'karikattor', 5, 0),
(35, 'erumeli', 6, 0),
(36, 'kattapana', 6, 0);

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
  `Aadhar` varchar(30) NOT NULL,
  `Aadhar_pic` varchar(30) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regsuser`
--

INSERT INTO `tb_regsuser` (`Log_id`, `first_name`, `last_name`, `hname`, `Gender`, `DOB`, `Pid`, `Pin`, `Mobile`, `Photo`, `Aadhar`, `Aadhar_pic`, `Status`) VALUES
(2, 'Archana', 'S', 'jhfghj', 'Female', '1995-06-17', 3, 686504, '9874563210', 'upload/IMG-20171001-WA0027.jpg', '852369741023', 'upload/aadhar-card.jpg', 1),
(6, 'Sajitha', 'S', 'kottarathil', '', '0000-00-00', 26, 6865423, '9632587410', 'upload/dev.jpg', '', '', 1),
(7, 'Kuttu', 'kumar', 'ghcgcg', 'Male', '1998-01-27', 32, 576574, '9765432198', 'upload/User.png', '965784231048', 'upload/aadhar-card.jpg', 1),
(8, 'Deva', 'R', 'kottarathil', 'Male', '1990-01-10', 2, 686503, '9872583697', 'upload/IMG-20171208-WA0062.jpg', '789369258147', 'upload/aadhar-card.jpg', 1),
(9, 'neenu', 'Babu', 'kjdkhdf', 'Female', '1998-01-22', 26, 686542, '9874563572', 'upload/team1.jpg', '963258741023', 'upload/aadhar-card.jpg', 1),
(10, 'jesni', 'n', 'fghjk', 'Female', '1998-01-23', 26, 685741, '9852367410', 'upload/team2.jpg', '987563214789', 'upload/aadhar-card.jpg', 1),
(11, 'sneha', 's', 'fgdh', 'Female', '1998-01-29', 35, 686542, '9632147580', 'upload/te1.jpg', '987365412010', 'upload/aadhar-card.jpg', 1),
(12, 'Arun', 'G', 'arunnivas', 'Male', '1994-01-12', 2, 686503, '9874563213', 'upload/IMG-20180401-WA0051.jpg', '741258963321', 'upload/aadhar-card.jpg', 1),
(13, 'Ram', 'kumar', 'shggh', 'Male', '1998-01-21', 2, 656897, '9876325410', 'upload/User.png', '852123654789', 'upload/aadhar-card.jpg', 0);

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
  `full_day` varchar(30) NOT NULL,
  `half_day` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`service_id`, `service_name`, `cat_id`, `full_day`, `half_day`, `image`) VALUES
(1, 'Appartment Cleaning', 1, '1000', '600', ''),
(2, 'Rearrange furniture', 5, '2000', '1000', ''),
(3, 'Carpentory', 3, '1500', '800', ''),
(4, 'Washing', 1, '1000', '600', ''),
(5, 'Cooking', 5, '1500', '800', ''),
(6, 'Room Cleaning', 1, '500', '300', ''),
(8, 'Floor Cleaning', 1, '1500', '800', '');

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
  MODIFY `Log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_msg`
--
ALTER TABLE `tb_msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
