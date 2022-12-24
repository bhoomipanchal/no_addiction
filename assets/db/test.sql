-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 06:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `addiction_info`
--

CREATE TABLE `addiction_info` (
  `email` varchar(255) NOT NULL,
  `services` varchar(20) NOT NULL,
  `addiction1` varchar(15) DEFAULT NULL,
  `aq1` varchar(50) DEFAULT NULL,
  `aq2` varchar(50) DEFAULT NULL,
  `aq3` varchar(100) DEFAULT NULL,
  `addiction2` varchar(15) DEFAULT NULL,
  `sq1` varchar(50) DEFAULT NULL,
  `sq2` varchar(50) DEFAULT NULL,
  `sq3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addiction_info`
--

INSERT INTO `addiction_info` (`email`, `services`, `addiction1`, `aq1`, `aq2`, `aq3`, `addiction2`, `sq1`, `sq2`, `sq3`) VALUES
('bhoomi@gmail.com', 'diet', 'alcoholic', 'test', '10', '1 day', '', '', '', ''),
('bhoomi@gmail.com', 'diet', 'alcoholic', 'test', '10', '1 day', '', '', '', ''),
('umesh@gmail.com', 'chart', '', '', '', '', 'smoker', 'test', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `gender`, `age`, `address`, `password`) VALUES
(1, 'umesh', 'umesh@gmail.com', '1234567890', 'male', 25, 'surat', 'u123'),
(2, 'test', 'test@gmail.com', '', 'male', 12, '', 't123'),
(3, 'bhoomi', 'bhoomi@gmail.com', '', 'female', 10, '', 'b123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
