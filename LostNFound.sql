-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 09:47 AM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `LostNFound`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
`CategoryID` int(6) NOT NULL,
  `CategoryName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FoundPost`
--

CREATE TABLE IF NOT EXISTS `FoundPost` (
`FPostID` int(6) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Date` varchar(15) DEFAULT NULL,
  `Time` varchar(15) DEFAULT NULL,
  `TimeStamp` varchar(50) NOT NULL,
  `Location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE IF NOT EXISTS `Item` (
`ItemID` int(6) NOT NULL,
  `ItemName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `FoundPost`
--
ALTER TABLE `FoundPost`
 ADD PRIMARY KEY (`FPostID`), ADD UNIQUE KEY `TimeStamp` (`TimeStamp`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
 ADD PRIMARY KEY (`ItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
MODIFY `CategoryID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `FoundPost`
--
ALTER TABLE `FoundPost`
MODIFY `FPostID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Item`
--
ALTER TABLE `Item`
MODIFY `ItemID` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
