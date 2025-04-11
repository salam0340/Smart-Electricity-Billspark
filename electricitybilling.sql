-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.2
-- Generation Time: Apr 08, 2025 at 10:17 PM
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
-- Database: `electricitybilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `owners_id` int(10) NOT NULL,
  `prev` varchar(20) NOT NULL,
  `pres` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `owners_id`, `prev`, `pres`, `price`, `date`) VALUES
(1, 1, '56', '78', '10', '16/02/04 03:28:20'),
(18, 19, '1066', '1250', '5', '25/03/22 22:39:48'),
(16, 18, '400', '450', '5', '25/03/21 22:52:30'),
(17, 2, '500', '550', '10', '25/03/21 22:55:20'),
(14, 18, '300', '350', '10', '25/03/21 22:26:25'),
(7, 2, '122', '500', '3780', '18/09/11 14:23:49'),
(8, 3, '100', '01', '-990', '18/09/17 16:18:21'),
(15, 18, '350', '400', '10', '25/03/21 22:29:36'),
(10, 18, '10', '200', '950', '25/03/21 20:39:09'),
(11, 18, '200', '250', '500', '25/03/21 21:37:28'),
(12, 18, '250', '300', '500', '25/03/21 22:02:26'),
(19, 21, '1070', '1222', '10', '25/03/22 23:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `lname`, `fname`, `mi`, `address`, `contact`) VALUES
(21, 'Kormokar', 'Krisno Kumar', '86', 'Belkuchi', '0175665535'),
(20, 'Roshid', 'Harun or', '76', 'Enayetpur', '01836464664'),
(19, 'Juthy', 'Jahanara', '12', 'Sirajganj Sadar', '0154100235'),
(18, 'Hasan', 'Nirob ', '23', 'Sirajganj Sadar', '175444444');

-- --------------------------------------------------------

--
-- Table structure for table `tempo_bill`
--

CREATE TABLE `tempo_bill` (
  `id` int(11) NOT NULL,
  `Prev` varchar(40) NOT NULL,
  `Client` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tempo_bill`
--

INSERT INTO `tempo_bill` (`id`, `Prev`, `Client`) VALUES
(1, '300', 'kimei'),
(2, '550', 'Harry'),
(3, '01', 'demo'),
(4, '166', 'Paul'),
(5, '230', 'Clark'),
(6, '300', 'Ava'),
(7, '106', 'Isabella'),
(8, '200', 'Emma'),
(9, '100', 'Liam'),
(10, '366', 'Logan'),
(11, '250', 'James'),
(12, '500', 'Jason'),
(13, '120', 'Tom'),
(14, '99', 'John'),
(15, '320', 'Henry'),
(16, '323', 'Samuel'),
(17, '11', 'sa'),
(18, '450', 'Nirob '),
(19, '1250', 'Jahanara'),
(20, '1069', 'Harun or'),
(21, '1222', 'Krisno Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(4, 'admin', 'admin', 'Abdus Salam'),
(8, 'admin', 'admin123', 'Bonna');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `username`, `password`, `userlevel`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'user2', 'user2', '2'),
(3, 'user3', 'user3', '3'),
(4, 'user4', 'user4', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
