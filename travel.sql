-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 04:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `sno` int(3) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`sno`, `name`, `age`, `phone`, `email`, `password`, `dt`) VALUES
(1, 'testname', 3, '9999999999999', 'this@this.com', 'this is my first message.', '2023-01-31 18:44:45'),
(2, 'mudassir', 19, '033232324454', 'mudassir.brandian@gmai', '12345678', '2023-01-31 19:37:42'),
(3, 'mudassir', 19, '033232324454', 'mudassir.brandian@gmai', '12345678', '2023-01-31 19:39:29'),
(4, 'mudassir', 19, '033232324454', 'mudassir.brandian@gmai', '12345678', '2023-01-31 19:40:14'),
(5, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:49:22'),
(6, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:52:57'),
(7, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:53:12'),
(8, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:53:21'),
(9, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:55:23'),
(10, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:56:08'),
(11, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:58:05'),
(12, 'mudassir', 19, '033232324454', 'brandiansdev2@gmail.co', '1234567', '2023-01-31 19:58:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
