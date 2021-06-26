-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 09:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ali', 'ali@gmail.com', 'abcdef'),
(2, 'Mr. X', 'xyz@g.m', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Bones', 'bones@j.k', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(4, 'Babar Ali', 'babar_ali@bing.cpm', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'John Doe', 'john.doe@gmail.com', 'Hi! You\'re doing great work! Keep it up!'),
(2, 'Bob', 'bob@hotmail.com', 'Hey! Great website!'),
(3, 'Ms. Swift', 'tswift@kol.pom', 'Great help for curious people!'),
(4, 'James Banner', 'james_banner@gmail.com', 'So much better since the last updates. Keep up the good work guys!'),
(5, 'Ben Hunter', 'ben.hunter@gmail.com', ''),
(6, 'Ben Hunter', 'ben.hunter@gmail.com', 'Thank you for your help last month. I\'m doing great!'),
(7, 'Stranger', 'stranger@gmail.com', 'I\'m suspicious of my neighbour having Covid. Can I report it here?'),
(8, 'blue', 'blue@g.n', 'Hi im doing great!');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `bp` text NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `category`, `bp`, `message`) VALUES
(1, 'Joe Bloom', 'joe_b@hot.com', 'Emergency', 'Low', 'A family member needs immediate attention. Please help!'),
(2, 'Panhwar Ubaid', 'panhawar@live.com', 'Serious Symptoms', 'High', 'Hi! I have been showing more than mild symptoms of Covid-19 illness. I would like to schedule a checkup ASAP.');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `cases` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `recovered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `cases`, `deaths`, `recovered`) VALUES
(1, 'World', 152638586, 3201764, 89979425),
(2, 'Pakistan', 850131, 18677, 747755),
(3, 'USA', 33116664, 590215, 25713185),
(4, 'India', 19549656, 215523, 15981772),
(5, 'France', 5642359, 104706, 4590568),
(6, 'Russia', 4814558, 110520, 4436583),
(7, 'Italy', 4035617, 121033, 3484042),
(8, 'Germany', 3405610, 83678, 3012100),
(9, 'Canada', 1224314, 24257, 1117284),
(10, 'Australia', 29813, 910, 28599),
(11, 'Kuwait', 273991, 1563, 257261),
(12, 'Brazil', 1444654, 395324, 12992442),
(14, 'Sample', 7797989, 9998, 57658099);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'Green', 'green@g.m', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'superuser', 'super@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Bigman', 'biggie@h.u', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
