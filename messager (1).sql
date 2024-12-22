-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messager`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_userid` varchar(222) NOT NULL,
  `recipient_userid` varchar(222) NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` time(6) DEFAULT NULL,
  `last_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_userid`, `recipient_userid`, `message`, `timestamp`, `last_activity`) VALUES
(1, '1', '2', 'hyyyy', '11:31:23.000000', ''),
(2, '2', '1', 'i am kana', '11:32:07.000000', ''),
(3, '1', '2', 'hiiii', '12:13:03.000000', ''),
(4, '1', '2', 'i am natkhat', '12:14:45.000000', ''),
(5, '2', '2', 'i am bholi bhali', '12:15:04.000000', ''),
(6, '1', '', 'juuu', '12:47:28.000000', ''),
(7, '1', '2', 'rajdip', '12:52:40.000000', ''),
(8, '2', '1', 'jyyyyy', '12:54:59.000000', ''),
(9, '2', '1', 'hyyyyyyyy', '12:55:02.000000', ''),
(10, '2', '1', 'hy', '12:55:04.000000', ''),
(11, '2', '1', '', '12:55:04.000000', ''),
(12, '2', '1', '', '12:55:04.000000', ''),
(13, '2', '1', 'hy', '12:55:06.000000', ''),
(14, '2', '1', '', '12:55:07.000000', ''),
(15, '2', '1', '', '12:55:07.000000', ''),
(16, '2', '1', '', '12:55:07.000000', ''),
(17, '2', '1', '', '12:55:10.000000', ''),
(18, '2', '1', '', '12:55:11.000000', ''),
(19, '2', '1', '', '12:55:11.000000', ''),
(20, '2', '1', '', '12:55:11.000000', ''),
(21, '2', '1', '', '12:55:11.000000', ''),
(22, '2', '1', '', '12:55:11.000000', ''),
(23, '2', '1', '', '12:55:11.000000', ''),
(24, '2', '1', '', '12:55:11.000000', ''),
(25, '2', '1', '', '12:55:11.000000', ''),
(26, '2', '1', '', '12:55:11.000000', ''),
(27, '2', '1', '', '12:55:11.000000', ''),
(28, '2', '1', '', '12:55:11.000000', ''),
(29, '2', '1', '', '12:55:11.000000', ''),
(30, '2', '1', '', '12:55:11.000000', ''),
(31, '0', '2', 'hyyy', '14:28:52.000000', ''),
(32, '0', '2', 'i kana', '14:29:51.000000', ''),
(33, '0', '1', 'jiii', '14:32:02.000000', ''),
(34, '0', '1', 'serching', '17:48:22.000000', ''),
(35, '0', '2', 'oooooooooooooooooooo', '17:49:02.000000', ''),
(37, '0', '2', 'hy', '21:40:29.000000', ''),
(38, '0', '2', 'jiiiiiiiiiiiiiiiiiiiiiiiii', '21:40:49.000000', ''),
(39, '0', '2', '<!DOCTYPE html> <!-- Created By CodingNepal --> <html lang=\"en\" dir=\"ltr\">    <head>       <meta charset=\"utf-8\">       <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->       <link rel=\"stylesheet\" href=\"style.css\">       <link rel=\"stylesh', '21:43:10.000000', ''),
(40, '0', '2', '<!DOCTYPE html> <!-- Created By CodingNepal --> <html lang=\"en\" dir=\"ltr\">    <head>       <meta charset=\"utf-8\">       <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->       <link rel=\"stylesheet\" href=\"style.css\">       <link rel=\"stylesh', '21:43:23.000000', ''),
(41, '0', '2', '<!DOCTYPE html> <!-- Created By CodingNepal --> <html lang=\"en\" dir=\"ltr\">    <head>       <meta charset=\"utf-8\">       <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->       <link rel=\"stylesheet\" href=\"style.css\">       <link rel=\"stylesh', '21:43:49.000000', ''),
(42, '0', '2', 'hyy', '22:28:40.000000', ''),
(43, '0', '2', 'bollllllll', '10:12:28.000000', ''),
(44, '0', '2', 'helloooooooooooo', '10:14:49.000000', ''),
(45, '0', '2', 'hyyyyyyyyyyyyy', '10:15:40.000000', ''),
(46, '0', '1', 'hjjjjjjjjjjjjjjj', '10:16:08.000000', ''),
(47, '0', '1', 'huuuuuuuu', '10:22:41.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `last_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `number`, `profile_image`, `last_activity`) VALUES
(1, 'radha ', 'Bholi_Radha143@gmail.com', '123', '08530412554', '33d5cc0790f106e6f0c265a355d15b4c.jpg', '2024-07-31 10:12:08'),
(2, 'kana', 'natkhat_kana143@gmail.com', '321', '08530412554', '33d5cc0790f106e6f0c265a355d15b4c.jpg', '2024-07-31 10:13:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
