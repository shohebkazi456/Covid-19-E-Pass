-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 06:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_pass`
--

CREATE TABLE `e_pass` (
  `userid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `e_pass_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `m_certificate` varchar(10) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `c_city` varchar(20) NOT NULL,
  `d_city` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_pass`
--

INSERT INTO `e_pass` (`userid`, `username`, `e_pass_id`, `name`, `gender`, `age`, `phoneno`, `m_certificate`, `relation`, `address`, `c_city`, `d_city`, `status`) VALUES
(1001, 'shoheb123', 1, 'Shoheb Kazi', 'Male', 20, 9527710456, 'Yes', 'Myself', 'Narhe, Pune', 'Pune', 'Kolhapur', 'Accepted'),
(1001, 'shoheb123', 2, 'Taheer Kazi', 'Male', 22, 7458451254, 'Yes', 'Brother', 'Narhe, Pune', 'Pune', 'Kolhapur', 'Accepted'),
(1002, 'amit123', 3, 'Amit Ghadage', 'Male', 25, 7856254005, 'Yes', 'Myself', 'Kothrud, Pune', 'Pune', 'Satara', 'Accepted'),
(1001, 'shoheb123', 4, 'Hassim Kazi', 'Male', 18, 8458125485, 'Yes', 'Brother', 'Narhe, Pune', 'Pune', 'Kolhapur', 'Rejected'),
(1005, 'raja123', 5, 'Raja Syed', 'Male', 20, 8458745124, 'Yes', 'Myself', 'Airoli, Mumbai', 'Mumbai', 'Delhi', 'Accepted'),
(1005, 'raja123', 6, 'Rehman Sayed', 'Male', 24, 8458125485, 'Yes', 'Brother', 'Airoli, Mumbai', 'Mumbai', 'Delhi', 'Rejected'),
(1003, 'varun123', 7, 'Vaibhav Sutar', 'Male', 28, 8458125485, 'Yes', 'Brother', 'Ghatkopar, Mumbai', 'Mumbai', 'Kolhapur', 'Accepted'),
(1003, 'varun123', 8, 'Varun Sutar', 'Male', 22, 8458521245, 'Yes', 'Myself', 'Ghatkopar, Mumbai', 'Mumbai', 'Kolhapur', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(1001, 'Shoheb', 'Kazi', 'shohebkazi456@gmail.com', 'shoheb123', 'shoheb123'),
(1002, 'Amit', 'Ghadage', 'amit@gmail.com', 'amit123', 'amit123'),
(1003, 'Varun', 'Sutar', 'varun@gmail.com', 'varun123', 'varun123'),
(1004, 'Rahul', 'Desai', 'rahul@gmail.com', 'rahul123', 'rahul123'),
(1005, 'Raja', 'Sayed', 'raja@gmail.com', 'raja123', 'raja123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_pass`
--
ALTER TABLE `e_pass`
  ADD PRIMARY KEY (`e_pass_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_pass`
--
ALTER TABLE `e_pass`
  MODIFY `e_pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
