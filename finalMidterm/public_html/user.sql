-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 10:54 PM
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
(1, 'Ammar', 'yasser', 22, 'ammaryasser53@yahoo.com', 'ammaryasser53', '123456', 'Masr Elgdeda', '01111216123', 1, 1, ''),
(3, 'ahmed', 'mohamed', 18, 'ahmed_mohamed@yahoo.com', 'ahmed101', '12345', 'Madent Nasr', '011111', 1, 5, 'img_avatar.png'),
(10, 'aml', 'mohamed', 18, 'aml_mohamed@yahoo.com', 'aml101', '12346', 'Madent Nasr', '011111', 0, 5, 'img_avatar2.png'),
(35, 'ahmed', 'mohamed', 18, 'ahmed_mohamed@yahoo.com', 'ahmed101', '12347', 'Madent Nasr', '011111', 1, 4, 'img_avatar.png'),
(36, 'aml', 'mohamed', 18, 'aml_mohamed@yahoo.com', 'aml101', '12348', 'Madent Nasr', '011111', 0, 4, 'img_avatar2.png'),
(37, 'mona', 'ahmed', 18, 'mona_ahmed@yahoo.com', 'mona123', '22222', 'Madent Nasr', '011111', 0, 5, 'img_avatar2.png'),
(38, 'mona', 'mohamed', 17, 'mona_mm@yahoo.com', 'mona12345', '123', 'Madent Nasr', '011111', 0, 5, 'img_avatar2.png'),
(39, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '', 1, 2, 'img_avatar.png'),
(40, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '', 1, 2, ''),
(41, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '', 1, 2, 'img_avatar.png'),
(42, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '', 1, 2, 'img_avatar.png'),
(43, 'fady', 'mohamed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '0111122333', 1, 2, 'img_avatar.png'),
(44, 'fady', 'ahmed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '0111122333', 1, 3, 'img_avatar.png'),
(45, 'fady', 'ahmed', 21, 'fady@yahoo.com', 'fadyfady101', '123789', 'medant nasr', '0111122333', 1, 3, 'img_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_fk0` (`type-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_fk0` FOREIGN KEY (`type-id`) REFERENCES `user-type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
