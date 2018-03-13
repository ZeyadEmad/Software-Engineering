-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 05:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add-extra-value`
--

CREATE TABLE `add-extra-value` (
  `id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `extradetails-id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add-extra-value`
--

INSERT INTO `add-extra-value` (`id`, `user-id`, `extradetails-id`, `value`) VALUES
(36, 39, 3, ''),
(37, 39, 2, '1200'),
(38, 40, 3, 'shar3 elnasr'),
(39, 40, 2, '1200'),
(40, 41, 3, 'shar3 elnasr'),
(41, 41, 2, '1200'),
(42, 42, 3, 'shar3 elnasr'),
(43, 42, 2, '1200'),
(44, 43, 3, 'shar3 elnasr'),
(45, 43, 2, '1200'),
(46, 44, 3, 'shar3 elnasr'),
(47, 44, 2, '1200'),
(48, 45, 3, 'shar3 elnasr'),
(49, 45, 2, '1200'),
(50, 46, 1, ''),
(51, 46, 2, ''),
(52, 47, 1, ''),
(53, 47, 2, ''),
(54, 48, 1, ''),
(55, 48, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `add-message`
--

CREATE TABLE `add-message` (
  `id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add-timetable`
--

CREATE TABLE `add-timetable` (
  `id` int(10) NOT NULL,
  `calender-id` int(10) NOT NULL,
  `time` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `group-details-id` int(10) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course-name` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course-name`, `Level`) VALUES
(1, 'English', 'year 12'),
(2, 'Math', 'year 12');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(10) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `course-id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `weekexam` int(11) NOT NULL,
  `student-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `student-id` int(11) NOT NULL,
  `groupdetails-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group-details`
--

CREATE TABLE `group-details` (
  `id` int(11) NOT NULL,
  `Group-code` varchar(20) NOT NULL,
  `course-id` int(11) NOT NULL,
  `room-id` int(11) NOT NULL,
  `teacher-id` int(11) NOT NULL,
  `color` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `Type-translation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message-title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `html` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `number`) VALUES
(1, 10),
(12, 101),
(15, 102);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(100) NOT NULL,
  `staff-id` int(100) NOT NULL,
  `month` int(100) NOT NULL,
  `total-salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary-details`
--

CREATE TABLE `salary-details` (
  `id` int(100) NOT NULL,
  `value-per-day` int(100) NOT NULL,
  `day` int(100) NOT NULL,
  `salary-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary-value-per-day`
--

CREATE TABLE `salary-value-per-day` (
  `id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student-attendence`
--

CREATE TABLE `student-attendence` (
  `id` int(100) NOT NULL,
  `group-id` int(10) NOT NULL,
  `student-id` int(10) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(10) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time`) VALUES
(1, '09:00AM - 11:00AM'),
(2, '11:00AM - 01:00PM'),
(3, '01:00PM - 03:00PM'),
(4, '03:00PM - 05:00PM'),
(5, '05:00PM - 07:00PM'),
(6, '07:00PM - 09:00PM'),
(7, '09:00PM - 11:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `word` int(10) NOT NULL,
  `translate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `First-name` varchar(255) DEFAULT NULL,
  `last-name` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `type-id` int(11) NOT NULL,
  `Pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `First-name`, `last-name`, `age`, `email`, `username`, `password`, `address`, `telephone`, `gender`, `type-id`, `Pic`) VALUES
(1, 'Ammar', 'yasser', 223, 'ammaryasser53@yahoo.com', 'ammaryasser53', '123456', 'Masr Elgdeda', '01111216123', 1, 1, ''),
(3, 'ahmed', 'mohamed', 18, 'ahmed_mohamed@yahoo.com', 'ahmed101', '12345', 'Madent Nasr', '011111', 1, 5, 'img_avatar.png'),
(10, 'aml', 'mohamed', 18, 'aml_mohamed@yahoo.com', 'aml101', '12346', 'Madent Nasr', '011111', 0, 5, 'img_avatar2.png'),
(35, 'ahmed', 'omar', 30, 'ahmed_mohamed@yahoo.com', 'ahmed101', '12345', 'Madent Nasr', '011111', 1, 4, 'img_avatar.png'),
(36, 'aml', 'mohamed', 18, 'aml_mohamed@yahoo.com', 'aml101', '12348', 'Madent Nasr', '011111', 0, 4, 'img_avatar2.png'),
(38, 'mona', 'mohamed', 17, 'mona_mm@yahoo.com', 'mona12345', '123', 'Madent Nasr', '011111', 0, 5, 'img_avatar2.png'),
(39, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '011111', 1, 2, 'img_avatar.png'),
(41, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fa101', '123789', 'medant nasr', '011111', 1, 3, 'img_avatar.png'),
(42, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady1022', '123789', 'medant nasr', '011111', 1, 2, 'img_avatar.png'),
(44, 'fady', 'ahmed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '0111122333', 1, 3, 'img_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `user-extra-details`
--

CREATE TABLE `user-extra-details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-extra-details`
--

INSERT INTO `user-extra-details` (`id`, `name`) VALUES
(1, 'Guardian E-mail'),
(2, 'Guardian Phone-number'),
(3, 'Home-Address'),
(4, 'Salary');

-- --------------------------------------------------------

--
-- Table structure for table `user-type`
--

CREATE TABLE `user-type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-type`
--

INSERT INTO `user-type` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'back-disk'),
(3, 'front-disk'),
(4, 'teacher'),
(5, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user-type-pages`
--

CREATE TABLE `user-type-pages` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `usertype-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `word-description` varchar(255) NOT NULL,
  `Language-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add-extra-value`
--
ALTER TABLE `add-extra-value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Add-extra_fk0` (`user-id`),
  ADD KEY `Add-extra_fk1` (`extradetails-id`);

--
-- Indexes for table `add-message`
--
ALTER TABLE `add-message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Add-message_fk0` (`messageid`),
  ADD KEY `Add-message_fk1` (`pageid`);

--
-- Indexes for table `add-timetable`
--
ALTER TABLE `add-timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Grades_fk0` (`course-id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Group_fk0` (`student-id`),
  ADD KEY `Group_fk1` (`groupdetails-id`);

--
-- Indexes for table `group-details`
--
ALTER TABLE `group-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Group-details_fk0` (`course-id`),
  ADD KEY `Group-details_fk2` (`room-id`),
  ADD KEY `Group-details_fk3` (`teacher-id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary-details`
--
ALTER TABLE `salary-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary-value-per-day`
--
ALTER TABLE `salary-value-per-day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-attendence`
--
ALTER TABLE `student-attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Translate_fk0` (`word`),
  ADD KEY `Translate_fk1` (`translate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_fk0` (`type-id`);

--
-- Indexes for table `user-extra-details`
--
ALTER TABLE `user-extra-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-type`
--
ALTER TABLE `user-type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-type-pages`
--
ALTER TABLE `user-type-pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User-type-pages_fk0` (`pageid`),
  ADD KEY `User-type-pages_fk1` (`usertype-id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Word_fk0` (`Language-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add-extra-value`
--
ALTER TABLE `add-extra-value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `add-message`
--
ALTER TABLE `add-message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add-timetable`
--
ALTER TABLE `add-timetable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group-details`
--
ALTER TABLE `group-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary-details`
--
ALTER TABLE `salary-details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary-value-per-day`
--
ALTER TABLE `salary-value-per-day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student-attendence`
--
ALTER TABLE `student-attendence`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `translate`
--
ALTER TABLE `translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `user-extra-details`
--
ALTER TABLE `user-extra-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user-type`
--
ALTER TABLE `user-type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user-type-pages`
--
ALTER TABLE `user-type-pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `add-extra-value`
--
ALTER TABLE `add-extra-value`
  ADD CONSTRAINT `Add-extra_fk1` FOREIGN KEY (`extradetails-id`) REFERENCES `user-extra-details` (`id`);

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `Group_fk0` FOREIGN KEY (`student-id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Group_fk1` FOREIGN KEY (`groupdetails-id`) REFERENCES `group-details` (`id`);

--
-- Constraints for table `translate`
--
ALTER TABLE `translate`
  ADD CONSTRAINT `Translate_fk0` FOREIGN KEY (`word`) REFERENCES `word` (`id`),
  ADD CONSTRAINT `Translate_fk1` FOREIGN KEY (`translate`) REFERENCES `word` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_fk0` FOREIGN KEY (`type-id`) REFERENCES `user-type` (`id`);

--
-- Constraints for table `user-type-pages`
--
ALTER TABLE `user-type-pages`
  ADD CONSTRAINT `User-type-pages_fk0` FOREIGN KEY (`pageid`) REFERENCES `pages` (`id`),
  ADD CONSTRAINT `User-type-pages_fk1` FOREIGN KEY (`usertype-id`) REFERENCES `user-type` (`id`);

--
-- Constraints for table `word`
--
ALTER TABLE `word`
  ADD CONSTRAINT `Word_fk0` FOREIGN KEY (`Language-id`) REFERENCES `language` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
