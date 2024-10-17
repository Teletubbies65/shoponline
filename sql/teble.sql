-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 01:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline2`
--

-- --------------------------------------------------------

--
-- Table structure for table `teble`
--

CREATE TABLE `teble` (
  `tid` int(11) NOT NULL,
  `table` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teble`
--

INSERT INTO `teble` (`tid`, `table`, `img`) VALUES
(1001, 1, 'jpg'),
(1002, 2, 'jpg'),
(1003, 3, 'jpg'),
(1004, 4, 'jpg'),
(1005, 5, 'jpg'),
(1006, 6, 'jpg'),
(1007, 7, 'jpg'),
(1008, 8, 'jpg'),
(1009, 9, 'jpg'),
(1010, 10, 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teble`
--
ALTER TABLE `teble`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teble`
--
ALTER TABLE `teble`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
