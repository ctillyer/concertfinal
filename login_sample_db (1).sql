-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 12:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) NOT NULL,
  `uniqueid` varchar(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `eventname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `uniqueid`, `user_id`, `eventname`) VALUES
(92, '2528712808321julyband1', 2528712808321, 'julyband1'),
(98, '5793112161557295464julyband1', 5793112161557295464, 'julyband1'),
(99, '171636julyband1', 171636, 'julyband1'),
(103, '997257931005465364julyband1', 997257931005465364, 'julyband1'),
(104, '7953499julyband1', 7953499, 'julyband1'),
(105, '76712129707julyband1', 76712129707, 'julyband1'),
(106, '87703julyband1', 87703, 'julyband1'),
(107, '290julyband1', 290, 'julyband1'),
(108, '9850711134julyband1', 9850711134, 'julyband1'),
(109, '7009929389655380julyband1', 7009929389655380, 'julyband1'),
(110, '5995852300493185348julyband1', 5995852300493185348, 'julyband1'),
(111, '478163328829215julyband1', 478163328829215, 'julyband1'),
(113, '478163328829215julyband3', 478163328829215, 'julyband3'),
(114, '478163328829215julyband2', 478163328829215, 'julyband2'),
(115, '478163328829215julyband8', 478163328829215, 'julyband8'),
(116, '44009julyband1', 44009, 'julyband1');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_second_name` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `user_first_name`, `user_second_name`, `message`) VALUES
(1, 'sdfsdf', 'sdfsd', 'sdfsdf'),
(2, 'a', 'a', 'a'),
(3, 'shijufe', 'ihojusfoe', 'gshoijuegfohjise');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(8, 10549, 'Eathorne', '1234', '2021-06-02 13:49:58'),
(9, 7635360296274633, 'mary', '12345', '2021-06-02 13:50:18'),
(10, 220254893406, 'Eathorne@gmail.com', '1234', '2021-06-03 17:55:17'),
(11, 478163328829215, 'a', 'a', '2021-06-08 13:42:51'),
(12, 183406802489860, 'b', 'b', '2021-06-08 22:57:02'),
(13, 9940679980, 'c', 'c', '2021-06-10 11:58:36'),
(14, 9223372036854775807, 'f', 'f', '2021-06-10 12:24:47'),
(15, 2528712808321, 'z', 'z', '2021-06-10 12:29:24'),
(16, 5793112161557295464, 'test1', 'test1', '2021-06-10 13:10:40'),
(17, 171636, 'test', 'test', '2021-06-10 13:11:30'),
(18, 997257931005465364, 'testf', 'testf', '2021-06-10 13:15:55'),
(19, 7953499, 'testff', 'testff', '2021-06-10 13:17:21'),
(20, 76712129707, 'testa', 'testa', '2021-06-10 13:18:21'),
(21, 87703, 'testg', 'testg', '2021-06-10 13:19:19'),
(22, 290, 'k', 'k', '2021-06-10 13:20:30'),
(23, 9850711134, 'j', 'j', '2021-06-10 14:46:21'),
(24, 7009929389655380, 'finaltest', 'finaltest', '2021-06-10 14:47:49'),
(25, 5995852300493185348, 'lll', 'lll', '2021-06-10 14:49:09'),
(26, 44009, 'asd', 'asd', '2021-06-10 22:45:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `uniqueid` (`uniqueid`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
