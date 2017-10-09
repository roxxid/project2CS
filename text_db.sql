-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 10:06 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `text_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assId` int(11) NOT NULL,
  `assName` varchar(30) NOT NULL,
  `Instructions` text NOT NULL,
  `dueDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assId`, `assName`, `Instructions`, `dueDate`) VALUES
(1, 'Assignment 1', 'dgerg', '2017-05-04 12:59:00'),
(2, 'Assignment 2', 'Lorem ipsum dolor', '2017-05-15 12:59:00'),
(3, 'Assignment 3', 'Hi there this is a test.', '2017-05-10 12:59:00'),
(4, 'Assignment 4', 'Test 4', '2017-05-18 11:00:00'),
(5, 'Assignment 5', 'Yolo', '2017-05-15 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `studId` varchar(11) NOT NULL,
  `assId` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `subId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`studId`, `assId`, `grade`, `subId`) VALUES
('U012345678', 1, 9, 1),
('U012345678', 2, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studId` varchar(10) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studId`, `firstName`, `lastName`) VALUES
('U012345678', 'Karan', 'Thakkar'),
('U087654321', 'Manlu', 'Chen'),
('U098765432', 'Chen', 'Liu'),
('U234567890', 'Abhishek', 'Kulkarni'),
('U573936573', 'Ricky', 'Jairat'),
('U648395638', 'Nikhilesh', 'Purohit');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `subId` int(11) NOT NULL,
  `studId` varchar(10) NOT NULL,
  `assId` int(11) NOT NULL,
  `assText` text NOT NULL,
  `subDate` datetime NOT NULL,
  `wordCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`subId`, `studId`, `assId`, `assText`, `subDate`, `wordCount`) VALUES
(1, 'U012345678', 1, 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.', '2017-05-02 19:09:35', 21),
(2, 'U012345678', 2, 'Content for assignment 2.', '2017-05-18 12:05:35', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assId`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`subId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studId`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`subId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `subId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
