-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2016 at 01:35 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwa2016`
--

CREATE TABLE `iwa2016` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `question` varchar(500) NOT NULL DEFAULT '0',
  `answer` varchar(500) NOT NULL DEFAULT '0',
  `status` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iwa2016`
--

INSERT INTO `iwa2016` (`id`, `name`, `question`, `answer`, `status`) VALUES
(1, 'kyle', 'why', '0', 0),
(2, 'dara', 'test', '0', 0),
(3, 'dara', 'test', '0', 0),
(4, ':name', ':question', '0', 0),
(5, 'kyle', 'why is there...', '0', 1),
(6, 'kyle', 'why is there...', '0', 0),
(7, 'Maebh', 'Is it raining?', '0', 0),
(8, 'Maebh', 'What is the weather like?', '0', 0),
(9, 'Mary', '0', '0', 0),
(10, 'Bill', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iwa2016`
--
ALTER TABLE `iwa2016`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iwa2016`
--
ALTER TABLE `iwa2016`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
