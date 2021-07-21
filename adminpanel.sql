-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 08:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`) VALUES
(55);

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

CREATE TABLE `project2` (
  `id` int(11) NOT NULL,
  `register_id` int(11) DEFAULT NULL,
  `tittle` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `language` varchar(200) NOT NULL,
  `data_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project2`
--

INSERT INTO `project2` (`id`, `register_id`, `tittle`, `slug`, `description`, `status`, `language`, `data_time`) VALUES
(3, 14, 'PHP Crud Operation', '', 'PHP Crud Operation', 'Completed', 'PHP', '2021-06-30 12:53:50'),
(5, 14, 'React Crud Operation', '', 'Good React project ', 'Panding 50%', 'React.js', '2021-06-30 13:27:39'),
(6, 17, 'C Crud Operation', '', 'C Crud Operation', 'Panding 50%', 'c', '2021-06-30 13:29:32'),
(14, 18, 'PHP Crud Operation', '', 'Good React project ', 'Panding 75%', 'SQL', '2021-06-30 16:15:43'),
(15, 18, '', 'php-crud-operation', 'good project', 'Completed', 'React.js', '2021-06-30 16:29:20'),
(16, 19, 'php', 'php', 'good project', 'Panding 50%', 'c', '2021-06-30 17:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(14, 'arshdeep', 'arshdeepsingh1@gmai.com', 'ef6b1f97cb033a717aefd69a93a7965e', 1),
(17, 'harpreet', 'harpreet@gmail.com', '99ca874580be0af099d14487f3403c9f', 2),
(18, 'manjeet', 'manjeetsingh@gmail.cpm', '0d7a33ff1ea918af9a9f6e006bbe449e', 1),
(19, 'param', 'parm@gmail.com', 'eca07335a33c5aeb5e1bc7c98b4b9d80', 1);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `todo_description` varchar(300) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `project_name`, `todo_description`, `status`, `project_id`) VALUES
(82, 'management system', 'management system\r\n', 2, 3),
(90, 'php management system', 'php management system\r\n', 1, 3),
(91, 'php management system', 'php management system\r\n', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project2`
--
ALTER TABLE `project2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con` (`register_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`usertype`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project2`
--
ALTER TABLE `project2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project2`
--
ALTER TABLE `project2`
  ADD CONSTRAINT `con` FOREIGN KEY (`register_id`) REFERENCES `register` (`id`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `user` FOREIGN KEY (`usertype`) REFERENCES `user_type` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`usertype`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `project2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
