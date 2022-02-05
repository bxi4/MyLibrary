-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 08:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_author`
--

CREATE TABLE `add_author` (
  `id` int(11) NOT NULL,
  `name_author` varchar(100) NOT NULL,
  `book_type` varchar(50) NOT NULL,
  `date_author` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_author`
--

INSERT INTO `add_author` (`id`, `name_author`, `book_type`, `date_author`) VALUES
(16, 'Mohammed Alwrafi', 'Sport', '2022-01-11'),
(17, 'Sultan Mohammed', 'Drama ', '2022-01-03'),
(18, 'abdulhman Al-qadi ', 'Romance', '2022-01-07'),
(19, 'Ayash Alhdad ', 'Action', '2021-12-28'),
(20, 'Ahmed Ali', 'Drama ', '2022-01-04'),
(21, 'Mohsan Alhdad ', 'Horror', '2022-01-07'),
(22, 'Salman Ahmed', 'Fun', '2022-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `id` int(11) NOT NULL,
  `name_book` varchar(100) NOT NULL,
  `book_type` varchar(50) NOT NULL,
  `name_author` varchar(50) NOT NULL,
  `date_book` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `name_book`, `book_type`, `name_author`, `date_book`, `image`, `price`) VALUES
(31, 'I and Books ', 'Drama ', 'Mohammed Alwrafi', '2022-01-24', 'book_7003986.jpg', 200),
(32, 'The wait Brabra ', 'Horror', 'Sultan Mohammed', '2022-01-25', 'book_5521455.jpg', 600),
(33, 'Doing Good ', 'Fun', 'Mohsan Alhdad ', '2022-01-19', 'book_8257717.jpg', 50),
(34, 'There There ', 'Sport', 'abdulhman Al-qadi ', '2022-01-02', 'book_9034273.jpg', 50),
(35, 'The End Of Man ', 'Romance', 'Salman Ahmed', '2022-06-07', 'book_9969176.jpg', 80),
(36, 'Copy This Book ', 'Action', 'Ayash Alhdad ', '2022-01-12', 'book_4749205.jpg', 900),
(37, 'C++ ', 'Fun', 'Mohammed Alwrafi', '2022-01-27', 'book_5413870.jpg', 350),
(38, 'Logic ', 'Drama ', 'Sultan Mohammed', '2022-01-24', 'book_2139721.jpg', 400),
(39, 'Life Print ', 'Horror', 'Ayash Alhdad ', '2022-01-25', 'book_9815312.jpg', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` int(11) NOT NULL,
  `book_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `book_type`) VALUES
(25, 'Fun'),
(26, 'Sport'),
(27, 'Romance'),
(28, 'Drama '),
(29, 'Horror'),
(30, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(38, 'muhammedahaj@gmail.com', 'admin', 'admin'),
(43, 'muhammedahaj@gmail.com', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_author`
--
ALTER TABLE `add_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
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
-- AUTO_INCREMENT for table `add_author`
--
ALTER TABLE `add_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
