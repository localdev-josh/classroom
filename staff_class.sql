-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 02:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_class`
--

CREATE TABLE `staff_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_time` date NOT NULL,
  `class_user` varchar(255) NOT NULL,
  `max_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_class`
--

INSERT INTO `staff_class` (`class_id`, `class_name`, `class_time`, `class_user`, `max_count`) VALUES
(10, 'Elements of Hydrology', '2019-06-26', 'voffiah@gmail.com', 1),
(11, 'Database Management system', '2019-06-26', 'kenny@gmail.com', 3),
(12, 'Database Management system', '2019-06-26', 'voffiah@gmail.com', 2),
(13, 'Database Management system', '2019-06-26', 'gabi@gmail.com', 1),
(27, 'Geology', '2019-06-26', 'gabi@gmail.com', 8),
(28, 'Geology', '2019-06-26', 'gabi@gmail.com', 7),
(29, 'Geology', '2019-06-26', 'gabi@gmail.com', 6),
(30, 'Geology', '2019-06-26', 'gabi@gmail.com', 5),
(31, 'Geology', '2019-06-26', 'gabi@gmail.com', 4),
(32, 'Geology', '2019-06-26', 'gabi@gmail.com', 3),
(33, 'Geology', '2019-06-26', 'gabi@gmail.com', 2),
(34, 'Geology', '2019-06-26', 'gabi@gmail.com', 1),
(35, 'Elements of Hydrology', '2019-06-26', 'gabi@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_class`
--
ALTER TABLE `staff_class`
  ADD PRIMARY KEY (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_class`
--
ALTER TABLE `staff_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
