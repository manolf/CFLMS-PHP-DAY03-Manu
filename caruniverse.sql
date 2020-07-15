-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 03:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caruniverse`
--
CREATE DATABASE IF NOT EXISTS `caruniverse` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `caruniverse`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `available` tinyint(4) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `available`, `brand`, `image`, `location`, `price`, `year`, `active`) VALUES
(1, 4, 'Mazda', 'mazda.jpg', 'Eisenstadt', 5001, 2012, NULL),
(3, 2, 'Skoda', 'skoda.jpg', 'Wien', 200, 2019, NULL),
(4, 1, 'Beetle', 'beetle.jpg', 'Krems', 700, 2019, NULL),
(5, 12, 'Mini', 'mini.jpg', 'Klagenfurt', 148, 2016, NULL),
(7, 4, 'Ford', 'ford.jpg', 'Innsbruck', 15000, 2011, NULL),
(8, 0, 'Nissan', 'nissan.jpg', 'Eisenstadt', 0, 0000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `phone`, `email`, `message`) VALUES
(1, '', '', '', 'message'),
(2, '', '06803047339', 'yanceen@yahoo.com', 'message'),
(3, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message'),
(4, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message'),
(5, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message'),
(6, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message'),
(7, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message'),
(8, 'Manuela Thamer', '06803047339', 'yanceen@yahoo.com', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'Manuela', 'Thamer', 'yanceen@yahoo.com', '2020-07-14 20:56:34'),
(10, 'Miroslav', 'Belgique', 'miro@slav.cz', '2020-07-14 20:57:06'),
(14, 'Charly', 'Brown', 'charly@chocolate.com', '2020-07-14 12:00:59'),
(17, 'Santo', 'de Vuelves', 'santino@santos.at', '2020-07-14 12:03:10'),
(20, 'Melanie', 'Rainer', 'melanie_1977@gmx.at', '2020-07-14 21:00:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
