-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: mysql51-43.perso
-- Generation Time: May 23, 2016 at 07:22 PM
-- Server version: 5.5.46-0+deb7u1-log
-- PHP Version: 5.4.45-0+deb7u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyrilgrabdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(10) unsigned NOT NULL,
  `event_organiser` varchar(80) NOT NULL,
  `how_to_find_us` varchar(150) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` mediumtext NOT NULL,
  `rsvp_limit` tinyint(3) unsigned NOT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `venueId` varchar(45) NOT NULL,
  `venueName` varchar(100) NOT NULL,
  `venueAddress` varchar(100) NOT NULL,
  `venueCity` varchar(45) NOT NULL,
  `venueCountry` varchar(2) NOT NULL,
  `lat` varchar(15) NOT NULL,
  `lon` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
