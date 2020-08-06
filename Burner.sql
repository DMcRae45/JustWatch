-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 04:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burner`
--

-- --------------------------------------------------------

--
-- Table structure for table `burn_movie`
--

CREATE TABLE `burn_movie` (
  `Movie_ID` int(11) NOT NULL,
  `Image_link` varchar(50) NOT NULL,
  `Video_link` varchar(50) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burn_movie`
--

INSERT INTO `burn_movie` (`Movie_ID`, `Image_link`, `Video_link`, `Title`, `Description`, `Genre`) VALUES
(1, '../View/images/5f2c0bad77baf4.78691275.jpg', 'Movies/PlayerOne.mp4', 'Ready Player One', 'VR Game with real-world consequences', 'Gaming'),
(2, '../View/images/5f2c0202ad1144.23151383.jpg', 'Movies/Rampage.mp4', 'Rampage', 'Rampage movie is about a big boi and a bigger boi', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `burn_series`
--

CREATE TABLE `burn_series` (
  `Series_ID` int(11) NOT NULL,
  `Season_ID` int(2) NOT NULL,
  `Episode_ID` int(3) NOT NULL,
  `Image_link` varchar(50) NOT NULL,
  `Video_link` varchar(50) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `burn_user`
--

CREATE TABLE `burn_user` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burn_user`
--

INSERT INTO `burn_user` (`User_ID`, `Name`, `Username`, `Password`) VALUES
(1, 'David', 'DM', '$2y$10$CWPH4unyIK5yiLISw37tredZKG4HU0tEt5Zh7BrAiZiACah9sBt8e'),
(2, 'Oliver', 'OD', '$2y$10$CWPH4unyIK5yiLISw37tredZKG4HU0tEt5Zh7BrAiZiACah9sBt8e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burn_movie`
--
ALTER TABLE `burn_movie`
  ADD PRIMARY KEY (`Movie_ID`);

--
-- Indexes for table `burn_series`
--
ALTER TABLE `burn_series`
  ADD PRIMARY KEY (`Series_ID`);

--
-- Indexes for table `burn_user`
--
ALTER TABLE `burn_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `burn_movie`
--
ALTER TABLE `burn_movie`
  MODIFY `Movie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `burn_series`
--
ALTER TABLE `burn_series`
  MODIFY `Series_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burn_user`
--
ALTER TABLE `burn_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
