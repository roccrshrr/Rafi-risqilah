-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:28 PM
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
-- Database: `comment_system_ajax2`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg2`
--

CREATE TABLE `msg2` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `email` text NOT NULL,
  `tanggal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg2`
--

INSERT INTO `msg2` (`id`, `name`, `msg`, `email`, `tanggal`) VALUES
(30, 'Rafid', 'Testing menggunakan bahasa biasa [halo, bagus, mantap]', 'ardiyansaputrarafid@gmail.com', '23/11/2023'),
(37, 'faddil', 'hahaha', 'fadil@gmail.com', '24/11/2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg2`
--
ALTER TABLE `msg2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg2`
--
ALTER TABLE `msg2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
