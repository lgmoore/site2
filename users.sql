-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: ictstu-db1.cc.swin.edu.au
-- Generation Time: Sep 05, 2017 at 02:17 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s101458558_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `jobID` int(5) DEFAULT NULL,
  `fName` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `lName` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(254) CHARACTER SET utf8 NOT NULL DEFAULT 'NULL',
  `office` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `desk` int(4) DEFAULT NULL,
  `computer` int(3) DEFAULT NULL,
  `problem` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `comment` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`jobID`, `fName`, `lName`, `phone`, `email`, `office`, `desk`, `computer`, `problem`, `comment`) VALUES
(23456, 'John', 'Lennon', 401734211, 'beets@music.school.eu', 'Heidelberg', 11, 1, 'Lost File', 'Help!'),
(67895, 'Bilbo', 'Baggings', 412345656, 'hoppin@bigb.shire.me', 'Werribee', 34, 22, 'Unknown', 'Help Me'),
(12345, 'Luke', 'Skywalker', 401763555, 'protagonist@film.school.eu', 'Hawthorn', 12, 2, 'New User', NULL),
(55555, 'Ringo', 'Starr', 492334322, 'ring@beets.train.eu', 'Heidelberg', 22, 3, 'Virus', 'Testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `jobID` (`jobID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
