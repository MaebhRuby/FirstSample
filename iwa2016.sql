-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 10:32 AM
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
  `status` int(20) NOT NULL DEFAULT '0',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iwa2016`
--

INSERT INTO `iwa2016` (`id`, `name`, `question`, `answer`, `status`, `Time`) VALUES
(1, 'kyle', 'why', '0', 0, '2016-04-25 18:52:42'),
(2, 'dara', 'test', '0', 0, '2016-04-25 18:52:42'),
(3, 'dara', 'test', '0', 0, '2016-04-25 18:52:42'),
(4, ':name', ':question', '0', 0, '2016-04-25 18:52:42'),
(5, 'kyle', 'why is there...', '0', 1, '2016-04-25 18:52:42'),
(6, 'kyle', 'why is there...', '0', 0, '2016-04-25 18:52:42'),
(7, 'Maebh', 'Is it raining?', '0', 0, '2016-04-25 18:52:42'),
(8, 'Maebh', 'What is the weather like?', '0', 0, '2016-04-25 18:52:42'),
(18, 'Mike', '0', '0', 0, '2016-04-25 18:52:42'),
(19, 'Annalise', '0', '0', 0, '2016-04-25 18:52:42'),
(20, 'Maebh', 'Will this Work?', '0', 0, '2016-04-25 18:52:42'),
(21, 'Sheila', 'How much Ram?', '0', 0, '2016-04-25 18:52:42'),
(22, 'emma', 'how do i do this', '0', 0, '2016-04-25 18:52:42'),
(23, 'Shane', 'What day is it', '0', 0, '2016-04-25 18:52:42'),
(24, 'Jane', 'Is this the right one?', '0', 0, '2016-04-25 18:52:42'),
(25, 'Mary-Jane', 'Is it Tuesday?', '0', 0, '2016-04-25 18:52:42'),
(26, 'Mary-Jane', 'Is it Wednesday?', '0', 0, '2016-04-25 18:52:42'),
(27, 'Abigail', 'working?', '0', 0, '2016-04-25 18:52:42'),
(28, 'jason', 'this time?', '0', 0, '2016-04-25 18:52:42'),
(29, 'john', 'almost', '0', 0, '2016-04-25 18:52:42'),
(30, 'Burt', 'This will!', '0', 0, '2016-04-25 18:52:42'),
(31, 'Ernie', 'Maybe this will?', '0', 0, '2016-04-25 18:52:42'),
(32, 'Jeffrey', 'why', '0', 0, '2016-04-25 18:52:42'),
(33, 'Jeffrey', 'why', '0', 0, '2016-04-25 18:52:42'),
(34, 'Lucia', 'why the border', '0', 0, '2016-04-25 18:52:42'),
(35, 'Mary', 'hello', '0', 0, '2016-04-25 18:52:42'),
(36, 'hello', 'hello', '0', 0, '2016-04-25 18:52:42'),
(37, 'hello', 'hello', '0', 0, '2016-04-25 18:52:42'),
(38, 'hello', 'hello', 'this is your answer', 1, '2016-04-25 18:52:42'),
(39, 'aname', 'another', '0', 0, '2016-04-25 18:52:42'),
(40, 'name', 'name', 'answer', 1, '2016-04-25 18:52:42'),
(41, 'Jill', 'Will this work', '0', 0, '2016-04-25 18:52:42'),
(42, 'zach', 'working', 'this', 1, '2016-04-25 18:52:42'),
(43, 'Emma', 'whattime', '0', 0, '2016-04-25 18:53:31'),
(44, 'lisa', 'checking dialogue', '0', 0, '2016-04-25 19:00:16'),
(45, 'isthis', 'question working', '0', 0, '2016-04-25 19:02:18'),
(46, 'juri', 'are we late', '0', 0, '2016-04-27 17:14:10'),
(47, 'Bert', 'are we late', '0', 0, '2016-04-27 17:16:20'),
(48, 'Chris', 'Are we early', '0', 0, '2016-04-27 17:16:40'),
(49, 'Anna', 'holiday?', '0', 0, '2016-04-27 17:19:48'),
(50, 'christine', 'weather', '0', 0, '2016-04-27 17:25:21'),
(51, 'adam', 'when is class', '0', 0, '2016-04-27 17:27:40'),
(52, 'Maebh', 'What time', '0', 0, '2016-04-27 18:46:34'),
(53, 'Emma', 'is this?', '0', 0, '2016-04-27 18:51:06'),
(54, 'Chris', 'time', '0', 0, '2016-04-27 18:53:48'),
(55, 'Maebh', 'what time', '0', 0, '2016-04-27 18:54:37'),
(56, 'Thomas', 'hey', '0', 0, '2016-04-27 18:58:24'),
(57, 'John', 'hello', '0', 0, '2016-04-27 19:02:01'),
(58, 'Sarah', 'hello', '0', 0, '2016-04-27 19:03:56'),
(59, 'Emma', 'work', '0', 0, '2016-04-27 19:09:49'),
(60, 'Anna', 'work', '0', 0, '2016-04-27 19:10:24'),
(61, 'Adele', 'Is this finished?', 'ter', 1, '2016-04-30 08:00:37'),
(62, 'bert', 'ready yet?', 'gyuugjj', 1, '2016-04-30 08:17:37');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
