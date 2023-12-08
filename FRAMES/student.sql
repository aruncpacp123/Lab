-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 03:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `ktu_id` varchar(30) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `series1` int(11) NOT NULL,
  `series2` int(11) NOT NULL,
  `assignments3` int(11) NOT NULL,
  `assignment4` int(11) NOT NULL,
  `attendence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`ktu_id`, `subject_id`, `series1`, `series2`, `assignments3`, `assignment4`, `attendence`) VALUES
('TVE23MCA-2019', 1, 20, 20, 10, 12, 6),
('TVE23MCA-2019', 2, 60, 59, 20, 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ktu_id` varchar(30) NOT NULL,
  `roll_no` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `semester` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ktu_id`, `roll_no`, `name`, `gender`, `age`, `semester`, `address`, `phone_no`, `email`) VALUES
('TVE23MCA-2000', 20, 'TEST', 'male', 20, 1, 'Chaneparambil ,mk sanakan smrithi lane road,kannangattu edakochi', 9074244885, 'aruncpacp10@gmail.com'),
('TVE23MCA-2001', 20, 'TEST', 'male', 20, 1, 'Chaneparambil ,mk sanakan smrithi lane road,kannangattu edakochi', 9074244885, 'aruncpacp10@gmail.com'),
('TVE23MCA-2002', 20, 'TEST', 'male', 20, 1, 'Chaneparambil ,mk sanakan smrithi lane road,kannangattu edakochi', 9074244885, 'aruncpacp10@gmail.com'),
('TVE23MCA-2019', 19, 'ARUN C P', 'male', 19, 1, 'chaneparambil', 9074244885, 'aruncpacp10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject`, `semester`) VALUES
(1, 'ADS', 1),
(2, 'DFCA', 1),
(3, 'ASE', 1),
(4, 'MATHS', 1),
(5, 'LAB', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ktu_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
