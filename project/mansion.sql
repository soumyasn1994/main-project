-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 03:27 PM
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

CREATE TABLE `tb_booking` (
  `book_id` int(11) NOT NULL,
  `Log_id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `data` date NOT NULL,
  `location` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`book_id`, `Log_id`, `service_id`, `data`, `location`, `status`) VALUES
(6, 5, 3, '2018-11-21', '', 1),
(7, 5, 4, '2018-11-30', '', 1),
(8, 5, 3, '2018-11-21', 'Kottayam', 1),
(10, 7, 1, '2018-11-23', 'anickadu', 1),
(11, 7, 3, '2018-11-30', '', 1),
(13, 7, 5, '2018-11-28', 'Kanjirappally', 1),
(14, 10, 1, '2018-11-24', 'Manimala', 0),
(15, 7, 4, '2018-11-21', 'Kottayam', 0),
(17, 71, 1, '2019-03-28', 'Manimala', 0),
(18, 71, 1, '2019-03-30', 'Manimala', 0),
(20, 71, 4, '2019-10-22', 'pala', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `service_id`, `cat_name`, `description`) VALUES
(1, 1, 'Cleaning', 'Home cleaning'),
(2, 2, 'Painting', 'House Painting'),
(3, 2, 'Repairing', 'All Repairing'),
(4, 2, 'Plumbing', 'All Plumbing'),
(5, 2, 'Home Maintenance', 'all Mainatenance');

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
(5, 'sou@gmail.com', 'e05d2bb3ada0187a7ae514750f4aade3', 3, 1),
(7, 'sree@gmail.com', '941712b5fe6db6b2f52d7cd9ef5e39a6', 3, 1),
(9, 'admin@gmail.com', '94927f9438df4d48b25eaae47da15e1a', 1, 1),
(10, 'k@gmail.com', 'ccbf00b02a62c72194d9a75f5bc70836', 2, 1),
(11, 'e@gmail.com', '3fd4bae34321de3a264a86579f3ab60f', 2, 1),
(37, 'sam@gmail.com', '4e973aedc00f32e1bbea373bc488b2b7', 2, 1),
(43, 'ram11@gmail.com', 'b04d6c7efa125fc28ece9ebc04967a8c', 3, 1),
(51, 'devanns@gmail.com', 'ce2678d49ca12429e48cbab2b689f559', 2, 0),
(55, 'devanks@gmail.com', 'ce2678d49ca12429e48cbab2b689f559', 3, 1),
(57, 'kutty@gmail.com', 'a72d5a798e2f60d3cd12d1db5c0b5a76', 2, 0),
(58, 'ss@gmail.com', 'c4ea6842ad4434bc655c1a690f77d66e', 2, 0),
(59, 'dascd@dfd.ffd', '698d51a19d8a121ce581499d7b701668', 2, 0),
(70, 'kamal@gmail.com', '443e5a43a3a3e8e9ef46bfa37bef7600', 2, 0),
(71, 'sam1@gmail.com', '4e973aedc00f32e1bbea373bc488b2b7', 3, 1),
(72, 'samk1@gmail.com', 'a04433f4a8ea0f1e7ac0e5662485b10f', 3, 1),
(83, 'devak@123.com', 'bf0859200ad3b6515391e6926f2287da', 3, 1),
(85, 'devaks@123.com', 'bf0859200ad3b6515391e6926f2287da', 3, 1);

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
  `Did` int(10) NOT NULL,
  `Place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_regemployee`
--

CREATE TABLE `tb_regemployee` (
  `Emp_id` int(11) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `ehno` int(30) NOT NULL,
  `ehname` varchar(30) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Pincode` int(20) NOT NULL,
  `edist` varchar(30) NOT NULL,
  `estat` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `service_id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Aadhar` int(30) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regemployee`
--

INSERT INTO `tb_regemployee` (`Emp_id`, `Full_Name`, `ehno`, `ehname`, `Place`, `Photo`, `Pincode`, `edist`, `estat`, `Gender`, `DOB`, `Mobile`, `Email_id`, `service_id`, `Username`, `Password`, `Category`, `Aadhar`, `Status`) VALUES
(10, 'Archana S', 456, 'sdfg', 'fgh', '20160503_075329-1.jpg', 456, 'Idukki', 'Kerala', 'Female', '1986-10-01', '6789', 'k@gmail.com', 1, 'achu', 'ccbf00b02a62c72194d9a75f5bc70836', 'Cleaning', 454678, 1),
(11, 'ert', 4567, 'dfghj', 'dfghj', '20160503_075405.jpg', 34567, 'select', 'Kerala', 'Male', '1986-10-01', '456789', 'e@gmail.com', 3, '', '3fd4bae34321de3a264a86579f3ab60f', 'Carpentory', 345678, 1),
(37, 'sam', 891, 'Sam  nivas', 'sdfghjkl', '20160503_075322-1.jpg', 678998, 'Kannur', 'Kerala', 'Male', '1993-03-24', '9873256981', 'sam@gmail.com', 1, 'sam123', '4e973aedc00f32e1bbea373bc488b2b7', 'Home Maintenance', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_regsuser`
--

CREATE TABLE `tb_regsuser` (
  `Reg_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `hno` int(20) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `State` varchar(30) NOT NULL,
  `Did` int(10) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Pin` int(30) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Aadhar` varchar(25) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regsuser`
--

INSERT INTO `tb_regsuser` (`Reg_id`, `Username`, `Password`, `Full_Name`, `hno`, `hname`, `Gender`, `DOB`, `State`, `Did`, `Place`, `Pin`, `Mobile`, `Photo`, `service_id`, `cat_id`, `Email_id`, `Aadhar`, `Status`) VALUES
(8, 'devas', 'd7e1a5885e0bf096a8a624c333590416', 'Deva', 456, 'ramnivas', '', '0000-00-00', '', 0, '0', 678654, '9657243610', '', 0, 0, 'dev@gmail.com', '1236540123', 0),
(34, 'sams121', '4e973aedc00f32e1bbea373bc488b2b7', 'sam', 897, 'sam nivas', '', '0000-00-00', '', 0, '0', 689750, '9875432193', '', 0, 0, 'sams111@gmail.com', '', 0),
(43, 'ram123', 'b04d6c7efa125fc28ece9ebc04967a8c', 'ram', 459, 'ram nivas', '', '0000-00-00', '', 1, '0', 567890, '9089786716', '', 0, 0, 'ram11@gmail.com', '', 0),
(51, 'devans', 'ce2678d49ca12429e48cbab2b689f559', 'devas', 5665, 'fghjk', 'Male', '2019-03-11', '', 1, '0', 678907, '9089786719', '20160503_075329.jpg', 0, 0, 'devanns@gmail.com', '351269874529', 0),
(55, 'devans111', 'ce2678d49ca12429e48cbab2b689f559', 'devasn', 5665, 'fghjk', '', '0000-00-00', '', 1, '0', 456234, '9089786718', '', 0, 0, 'devanks@gmail.com', '', 0),
(57, 'kuttys', 'a72d5a798e2f60d3cd12d1db5c0b5a76', 'Devajith R', 456, 'fghjk', 'Female', '2019-03-26', '', 0, '0', 686544, '9089786717', '20160503_075309.jpg', 1, 1, 'kutty@gmail.com', '351269874527', 0),
(58, 'Devans123', 'c4ea6842ad4434bc655c1a690f77d66e', 'Archana S', 111, 'dfghjk', 'Male', '2019-03-15', '', 0, '0', 678901, '9089786728', '20160503_075313.jpg', 2, 5, 'ss@gmail.com', '987456321450', 0),
(59, 'Deva', '698d51a19d8a121ce581499d7b701668', 'deva', 456, '', 'Male', '0000-00-00', '', 0, '0', 0, '123', 'IMG-20170906-WA0013.jpg', 0, 0, 'dascd@dfd.ffd', '444', 0),
(70, 'kamal123', '443e5a43a3a3e8e9ef46bfa37bef7600', 'kamal', 490, 'kamal nivas', 'Male', '2019-03-12', 'Kerala', 5, 'Manimala', 678691, '9632587410', '20160503_075322-1.jpg', 2, 5, 'kamal@gmail.com', '789321456258', 0),
(71, 'Sam123', '4e973aedc00f32e1bbea373bc488b2b7', 'saran', 9807, 'ramnivas', '', '0000-00-00', 'Kerala', 11, 'Kochi', 686503, '9089786715', '', 0, 0, 'sam1@gmail.com', '', 0),
(83, 'kuttys123', 'bf0859200ad3b6515391e6926f2287da', 'seenu', 45678, 'dfghjk', '', '0000-00-00', 'Kerala', 12, 'fghjk', 9886532, '85423', '', 0, 0, 'devak@123.com', '', 0),
(85, 'kuttys1234', 'bf0859200ad3b6515391e6926f2287da', 'seenu', 45678, 'dfghjk', '', '0000-00-00', 'Kerala', 13, 'fghjk', 64532, '854235', '', 0, 0, 'devaks@123.com', '', 0);

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
(1, 'Cleaning', 1, 1000, ''),
(2, 'Maintenance', 5, 2000, ''),
(3, 'Carpentory', 3, 1500, ''),
(4, 'Washing', 1, 1000, ''),
(5, 'Cooking', 5, 1500, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `Log_id` (`Log_id`),
  ADD KEY `service_id` (`service_id`);

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
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Did` (`Did`);

--
-- Indexes for table `tb_regemployee`
--
ALTER TABLE `tb_regemployee`
  ADD PRIMARY KEY (`Emp_id`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `tb_regsuser`
--
ALTER TABLE `tb_regsuser`
  ADD PRIMARY KEY (`Reg_id`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

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
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `Log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tb_msg`
--
ALTER TABLE `tb_msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_regemployee`
--
ALTER TABLE `tb_regemployee`
  MODIFY `Emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_regsuser`
--
ALTER TABLE `tb_regsuser`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `tb_login` (`Log_id`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `tb_service` (`service_id`);

--
-- Constraints for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD CONSTRAINT `tb_place_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `tb_district` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
