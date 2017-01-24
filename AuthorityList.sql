-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: 10.123.0.133:3306
-- Generation Time: Jan 24, 2017 at 09:02 AM
-- Server version: 5.7.15
-- PHP Version: 5.4.45-0+deb7u4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seetoh88_m18`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthorityList`
--

CREATE TABLE IF NOT EXISTS `AuthorityList` (
  `AuthorityId` varchar(100) CHARACTER SET latin7 NOT NULL,
  `AuthorityName` varchar(100) CHARACTER SET latin7 NOT NULL,
  `Address` varchar(100) CHARACTER SET latin7 NOT NULL,
  `TelephoneNo` int(20) NOT NULL,
  `FaxNo` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthorityList`
--

INSERT INTO `AuthorityList` (`AuthorityId`, `AuthorityName`, `Address`, `TelephoneNo`, `FaxNo`) VALUES
('PUB', 'Public Utilities Board', '40 Scotts Road #22-01\r\nEnvironment Building\r\nSingapore 228231', 62255782, 67258015),
('HDB', 'House Development Board', '12323213123123123', 12321312, 12321321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AuthorityList`
--
ALTER TABLE `AuthorityList`
  ADD PRIMARY KEY (`AuthorityId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AuthorityList`
--
ALTER TABLE `AuthorityList`
AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
