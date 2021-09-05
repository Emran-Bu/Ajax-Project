-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 03:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selectbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE `country_tb` (
  `cid` int(255) NOT NULL,
  `cname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`cid`, `cname`) VALUES
(1, 'Bangladesh'),
(2, 'Pakistan'),
(3, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `state_tb`
--

CREATE TABLE `state_tb` (
  `sid` int(255) NOT NULL,
  `sname` varchar(60) NOT NULL,
  `scountry` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_tb`
--

INSERT INTO `state_tb` (`sid`, `sname`, `scountry`) VALUES
(1, 'Dhaka', 1),
(2, 'Dinajpur', 1),
(3, 'Barisal', 1),
(4, 'Chitagong', 1),
(5, 'Khulna', 1),
(6, 'Rajshahi', 1),
(7, 'Lahore', 2),
(8, 'Balosisthan', 2),
(9, 'Panjab', 2),
(10, 'Sidth', 2),
(11, 'Delhi', 3),
(12, 'Mombai', 3),
(13, 'kolkata', 3),
(14, 'Rajsthan', 3),
(15, 'Tamil', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_tb`
--
ALTER TABLE `country_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `state_tb`
--
ALTER TABLE `state_tb`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_tb`
--
ALTER TABLE `country_tb`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_tb`
--
ALTER TABLE `state_tb`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
