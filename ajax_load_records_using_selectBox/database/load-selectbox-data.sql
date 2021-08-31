-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 12:13 PM
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
-- Database: `multiple-delete`
--

-- --------------------------------------------------------

--
-- Table structure for table `srecord`
--

CREATE TABLE `srecord` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(255) NOT NULL,
  `city` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srecord`
--

INSERT INTO `srecord` (`id`, `name`, `age`, `city`) VALUES
(1, 'dilara akter', 19, 'agra'),
(2, 'Shahrukh Khan', 60, 'Delhi'),
(3, 'Hanifa', 19, 'dhaka'),
(11, 'nasir akter', 44, 'agra'),
(12, 'sarmin', 14, 'Delhi'),
(13, 'mimi', 16, 'dhaka'),
(14, 'parul', 25, 'bhopal'),
(15, 'fahmida', 29, 'birol'),
(16, 'nusaiba', 22, 'khulna'),
(17, 'mamun', 26, 'rangpur'),
(18, 'samim', 10, 'Khulna'),
(19, 'masuma', 18, 'dinajpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srecord`
--
ALTER TABLE `srecord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `srecord`
--
ALTER TABLE `srecord`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
