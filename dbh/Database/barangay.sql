-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2023 at 04:44 PM
-- Server version: 8.0.34-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `a_id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `a_title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_pic` longblob NOT NULL,
  `a_content` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_startdate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_enddate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `a_display` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangay_officials`
--

CREATE TABLE `barangay_officials` (
  `bo_id` int NOT NULL,
  `bo_name` varchar(200) NOT NULL,
  `bo_position` varchar(200) NOT NULL,
  `bo_pic` longblob NOT NULL,
  `officialstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feed_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL,
   feedbackid int NOT NULL,
  FOREIGN KEY (feedbackid) REFERENCES user(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

 CREATE TABLE `comments` ( 
  `comment_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  `email` varchar(100) NOT NULL, 
  `name` varchar(200) NOT NULL, 
  `comment` varchar(255) NOT NULL, 
  `date` varchar(255) NOT NULL,
   `time` varchar(100) NOT NULL, 
   `sub_comment_id` int NOT NULL,
    FOREIGN KEY (`sub_comment_id`) REFERENCES `feedbacks`(`feed_id`) 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `requested_certs`
--

CREATE TABLE `requested_certs` (
  `req_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `controlnum` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `Typecertificate` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  `pic` longblob NOT NULL,
  `living` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `pliving` varchar(100) NOT NULL,
  PersonID int NOT NULL,
  FOREIGN KEY (PersonID) REFERENCES user(user_id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `declinerequest` (
  `decline_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(50) NOT NULL,
  declinepersonID int NOT NULL,
  declinecertID int NOT NULL,
  FOREIGN KEY (declinepersonID) REFERENCES user(user_id),
  FOREIGN KEY (declinecertID) REFERENCES requested_certs(req_id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `controlnum` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middleinitial` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobilenum` varchar(20) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `age` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `civilstats` varchar(50) NOT NULL,
  `educattainment` varchar(200) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `senior` varchar(200) NOT NULL,
  `soloparent` varchar(200) NOT NULL,
  `lgbt` varchar(200) NOT NULL,
  `voter` varchar(200) NOT NULL,
  `breastfeeding` varchar(200) NOT NULL,
  `pregnant` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `materials` varchar(200) NOT NULL,
  `ownership` varchar(200) NOT NULL,
  `namesowner` varchar(200) NOT NULL,
  `electricity` varchar(200) NOT NULL,
  `water` varchar(200) NOT NULL,
  `waste` varchar(200) NOT NULL,
  `wastemanagement` varchar(200) NOT NULL,
  `cr` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `valid_id` longblob NOT NULL,
  `picture_2x2` longblob NOT NULL,
  `voters` longblob NOT NULL,
  `status` varchar(200) DEFAULT NULL /*Admin or user*/
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--

--
-- Indexes for table `barangay_officials`
--
ALTER TABLE `barangay_officials`
  ADD PRIMARY KEY (`bo_id`);

ALTER TABLE `barangay_officials`
    MODIFY `bo_id` int NOT NULL AUTO_INCREMENT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
