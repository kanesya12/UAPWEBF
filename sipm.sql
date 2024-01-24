-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2024 at 03:59 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$sBy6OWAWZXEYevVHd1wAWuvbTkQMJOlMkBh.i.NPM3CH0.PHjzXo.');

-- --------------------------------------------------------

--
-- Table structure for table `community_service_activities`
--

CREATE TABLE `community_service_activities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nip` varchar(10) DEFAULT NULL,
  `rank` varchar(100) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `work_unit` varchar(255) DEFAULT NULL,
  `activity_category` varchar(255) DEFAULT NULL,
  `activity_description` varchar(255) DEFAULT NULL,
  `activity_date_start` date DEFAULT NULL,
  `activity_date_end` date DEFAULT NULL,
  `result_unit` varchar(50) DEFAULT NULL,
  `activity_volume` float DEFAULT NULL,
  `credit_score` float DEFAULT NULL,
  `total_credit_score` float DEFAULT NULL,
  `documentation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_service_activities`
--
ALTER TABLE `community_service_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community_service_activities`
--
ALTER TABLE `community_service_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
