-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbharry2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno` int(10) NOT NULL,
  `name` varchar(12) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno`, `name`, `lastname`, `email`) VALUES
(2, 'shubh', 'ashua', 'shubhamlondhe'),
(1, 'shubh', 'ashua', 'shubhamlondhe'),
(0, 'shubham lond', 'shubham londhe', 'shubhamlondhe'),
(1, 'shubh', 'ashua', 'shubhamlondhe'),
(1, 'shubh', 'ashua', 'shubhamlondhe'),
(1, 'shubh', 'ashua', 'shubhamlondhe'),
(0, 'akash', 'jadhav', 'jadhav@123'),
(0, 'aswini', 'jadhav', 'shubhamlondhe'),
(0, 'aswini', 'jadhav', 'shubhamlondhe'),
(0, 'shubham lond', 'shubham londhe', 'shubhamlondhe'),
(0, 'shubham lond', 'shubham londhe', 'shubhamlondhe');

-- --------------------------------------------------------

--
-- Table structure for table `user1581`
--

CREATE TABLE `user1581` (
  `sno` int(15) NOT NULL,
  `fullname` varchar(12) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(23) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1581`
--

INSERT INTO `user1581` (`sno`, `fullname`, `username`, `password`, `date`) VALUES
(1, 'shubha', 'pam45', '123', '2022-08-26 21:16:40'),
(2, 'shubham lond', 'pm324', '4', '2022-08-28 22:49:29'),
(3, 'mn', 'pl', 'gh', '2022-08-28 23:06:42'),
(4, 'shubh', 'sdd', 'wer', '2022-08-28 23:09:08'),
(5, 'aniket dukar', 'anni', '9422', '2022-08-30 12:55:46'),
(6, 'vishal', 'vish@12', 'vishal9422', '2022-09-04 14:22:33'),
(10, 'kk', 'kk', 'kk', '2022-09-04 14:44:50'),
(13, 'rushi', 'rushi', 'rushi', '2022-09-04 14:59:45'),
(17, 'sv', 'sv', 'sv', '2022-09-14 18:44:23'),
(19, 'svl', 'kk3', 'kd', '2022-09-16 19:09:09'),
(23, 'aniket dukar', 'abd', 'asd', '2022-09-16 23:00:34'),
(24, 'ravi', 'pol', 'ert', '2022-10-25 16:31:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user1581`
--
ALTER TABLE `user1581`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user1581`
--
ALTER TABLE `user1581`
  MODIFY `sno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
