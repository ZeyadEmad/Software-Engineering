-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 03:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectone`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `ID` int(100) NOT NULL,
  `CouID` int(100) NOT NULL,
  `Day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addgroup`
--

CREATE TABLE `addgroup` (
  `ID` int(100) NOT NULL,
  `StuID` int(100) NOT NULL,
  `CouID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addtime`
--

CREATE TABLE `addtime` (
  `ID` int(100) NOT NULL,
  `AddCouID` int(100) NOT NULL,
  `TimeID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(100) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Teacher` varchar(40) NOT NULL,
  `Room` int(100) NOT NULL,
  `Color` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(100) NOT NULL,
  `Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `Number`) VALUES
(1, 101),
(2, 102),
(3, 103),
(4, 104),
(13, 105),
(14, 106),
(15, 107),
(17, 108),
(18, 109),
(19, 110);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(100) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `SName` varchar(30) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Photo` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `ID` int(100) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CouID` (`CouID`),
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `addgroup`
--
ALTER TABLE `addgroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `addtime`
--
ALTER TABLE `addtime`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `addgroup`
--
ALTER TABLE `addgroup`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `addtime`
--
ALTER TABLE `addtime`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
