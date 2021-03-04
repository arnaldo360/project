-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2021 at 06:07 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(90) NOT NULL,
  `activity` varchar(45) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_userid` int(11) NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `fk_userid` (`fk_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `description`, `activity`, `dateTime`, `fk_userid`) VALUES
(51, 'User has Logged In successfull', 'LOGIN', '2021-02-24 23:20:03', 1),
(52, 'User has Logged Out successfull', 'LOGOUT', '2021-02-24 23:20:34', 1),
(53, 'User has Logged In successfull', 'LOGIN', '2021-02-25 09:05:58', 11),
(54, 'User request has Been Created successfull', 'CREATE FORM', '2021-02-25 09:15:31', 11),
(55, 'User has Logged Out successfull', 'LOGOUT', '2021-02-25 09:17:50', 11),
(56, 'User has Logged In successfull', 'LOGIN', '2021-02-25 09:18:14', 1),
(57, 'User request has Been Attended successfull', 'ATTENDED', '2021-02-25 09:20:21', 1),
(58, 'User request has Been Declined ', 'DECLINE', '2021-02-25 09:20:55', 1),
(59, 'User Profile has been updated successfull', 'UPDATE PROFILE IMAGE', '2021-02-25 09:23:44', 1),
(60, 'User has Logged Out successfull', 'LOGOUT', '2021-02-25 09:24:40', 1),
(61, 'User has Logged In successfull', 'LOGIN', '2021-02-25 11:23:39', 1),
(62, 'User has Logged Out successfull', 'LOGOUT', '2021-02-25 11:38:37', 1),
(63, 'User has Logged In successfull', 'LOGIN', '2021-02-26 15:54:45', 1),
(64, 'User has Logged In successfull', 'LOGIN', '2021-02-26 15:55:52', 1),
(65, 'User Profile has been updated successfull', 'UPDATE PROFILE IMAGE', '2021-02-26 16:00:44', 1),
(66, 'User has Logged Out successfull', 'LOGOUT', '2021-02-26 17:20:57', 1),
(67, 'User has Logged In successfull', 'LOGIN', '2021-02-27 08:45:26', 1),
(68, 'User has Logged Out successfull', 'LOGOUT', '2021-02-27 08:58:40', 1),
(69, 'User has Logged In successfull', 'LOGIN', '2021-02-27 15:04:39', 1),
(70, 'User has Logged Out successfull', 'LOGOUT', '2021-02-27 16:13:52', 1),
(71, 'User has Logged In successfull', 'LOGIN', '2021-02-28 18:03:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `fullname`, `email`, `subject`, `message`) VALUES
(3, 'JONI JEMSI', 'JONIJAMES@gmail.com', 'umeme', 'nmekatiwa');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `formId` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `region` varchar(45) NOT NULL,
  `ward` varchar(45) NOT NULL,
  `district` varchar(45) NOT NULL,
  `requested_date` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `request_for` varchar(45) NOT NULL,
  `contact` int(15) NOT NULL,
  `Id_type` varchar(45) NOT NULL,
  `Id_number` varchar(45) NOT NULL,
  `pillar` int(10) DEFAULT NULL,
  `phase` int(10) DEFAULT NULL,
  `controlNo` varchar(45) DEFAULT NULL,
  `wireSize` int(20) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`formId`),
  KEY `fk_user` (`fk_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `images` varchar(45) DEFAULT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `fullname`, `phone`, `address`, `gender`, `dob`, `images`, `user_role`) VALUES
(1, 'Super', 'superuser@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Super User', 745855555, 'Kijionyama', 'Male', '1991-12-30', 'Snapchat-1384266564.jpg', 0),
(11, 'joni', 'hkkhkh@gmal.vo', 'df780a97b7d6a8f779f14728bccd3c4c', NULL, NULL, NULL, NULL, NULL, NULL, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`fk_userid`) REFERENCES `users` (`userId`);

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `forms_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
