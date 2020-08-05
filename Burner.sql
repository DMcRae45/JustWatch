-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2020 at 06:36 PM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Burner`
--

-- --------------------------------------------------------

--
-- Table structure for table `Burn_Movie`
--

CREATE TABLE `Burn_Movie` (
  `Movie_ID` int(11) NOT NULL,
  `Image_link` varchar(50) NOT NULL,
  `Video_link` varchar(50) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Burn_Movie`
--

INSERT INTO `Burn_Movie` (`Movie_ID`, `Image_link`, `Video_link`, `Title`, `Description`, `Genre`) VALUES
(1, 'Images/ReadyPlayerOne.jpg', 'Movies/Player.mp4', 'Ready Player One', 'Bitchin movie 10/10 would watch again ', 'bitchin');

-- --------------------------------------------------------

--
-- Table structure for table `Burn_Series`
--

CREATE TABLE `Burn_Series` (
  `Series_ID` int(11) NOT NULL,
  `Season_ID` int(2) NOT NULL,
  `Episode_ID` int(3) NOT NULL,
  `Image_link` varchar(50) NOT NULL,
  `Video_link` varchar(50) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Burn_Movie`
--
ALTER TABLE `Burn_Movie`
  ADD PRIMARY KEY (`Movie_ID`);

--
-- Indexes for table `Burn_Series`
--
ALTER TABLE `Burn_Series`
  ADD PRIMARY KEY (`Series_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Burn_Movie`
--
ALTER TABLE `Burn_Movie`
  MODIFY `Movie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Burn_Series`
--
ALTER TABLE `Burn_Series`
  MODIFY `Series_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
