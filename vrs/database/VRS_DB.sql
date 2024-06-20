-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 12:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `usersid` int(12) NOT NULL,
  `distance` int(5) NOT NULL,
  `b_date` date NOT NULL,
  `pay_m` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`usersid`, `distance`, `b_date`, `pay_m`) VALUES
(1234, 123, '2023-06-12', 'cash'),
(12345, 123, '2023-06-13', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `usersid` int(12) NOT NULL,
  `ch_name` varchar(30) NOT NULL,
  `c_no` int(12) NOT NULL,
  `ex_date` int(5) NOT NULL,
  `cvc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`usersid`, `ch_name`, `c_no`, `ex_date`, `cvc`) VALUES
(1234, 'Dineth Rashmika', 151451, 1211, 112),
(12345, 'ffffe', 12132225, 1211, 211);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` text NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `comment` text NOT NULL,
  `rate` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersid` int(12) NOT NULL,
  `usersfName` varchar(20) NOT NULL,
  `userslName` varchar(20) NOT NULL,
  `usersMobile` int(10) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersid`, `usersfName`, `userslName`, `usersMobile`, `usersEmail`, `usersPwd`) VALUES
(0, 'hjghj', 'hjgy', 788070883, 'dineth550@gmail.com', '$2y$10$eAgcHM02LTb2NirBbNjLYecoLD3q2gmA7HoyusSgEHPu8W32SCzQS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`usersid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`c_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
