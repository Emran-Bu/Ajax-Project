-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 04:05 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `serialize`
--

CREATE TABLE `serialize` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serialize`
--

INSERT INTO `serialize` (`id`, `name`, `age`, `gender`, `country`) VALUES
(1, 'Emran', 22, 'male', 'Ban'),
(2, 'E', 22, 'Female', 'Ban'),
(3, 'r', 22, 'male', 'Nep'),
(4, 'r', 22, 'male', 'Nep'),
(5, 'dd', 22, 'Female', 'Pak'),
(6, 'ddd', 22, 'male', 'Ind'),
(7, 'hello', 24, 'Female', 'Pak'),
(8, 'Emran', 22, 'male', 'Ban'),
(9, 'Heelo Ji', 25, 'male', 'Sri'),
(10, 'fdfd', 22, 'Female', 'Ban');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`) VALUES
(1, 'Emran', 'Hasan'),
(2, 'Tamanna', 'Bhatia'),
(3, 'Juhi', 'Chawla'),
(4, 'Emran', 'Hasan'),
(5, 'Salman', 'khan'),
(6, 'Anil', 'Kapoor'),
(7, 'Madhuri', 'Dixit'),
(8, 'Sharukh', 'Khan'),
(9, 'Tamanna', 'Bhatia'),
(10, 'Juhi', 'Chawla'),
(11, 'Ehav', 'Babu'),
(12, 'My name is', 'emran'),
(13, 'Hello', ' World'),
(14, 'jn', 'ala'),
(15, 'john', 'Abraham');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(255) NOT NULL,
  `city` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `age`, `city`) VALUES
(1, 'Salman Khan', 50, 'Mombai'),
(2, 'Shahrukh Khan', 60, 'Delhi'),
(3, 'Priyanka', 30, 'Dhaka'),
(4, 'Emran', 20, 'Dinajpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serialize`
--
ALTER TABLE `serialize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serialize`
--
ALTER TABLE `serialize`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
