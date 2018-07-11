-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 04:51 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--
CREATE DATABASE IF NOT EXISTS `fyp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fyp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pctable`
--

CREATE TABLE IF NOT EXISTS `pctable` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `warrenty` date NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `harddisk` varchar(30) NOT NULL,
  `processer` varchar(20) NOT NULL,
  `keyboardno` varchar(30) NOT NULL,
  `cpuno` varchar(30) NOT NULL,
  `monitorno` varchar(30) NOT NULL,
  `mouseno` varchar(30) NOT NULL,
  `os` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `requirment`
--

CREATE TABLE IF NOT EXISTS `requirment` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(30) NOT NULL,
  `guidename` varchar(30) NOT NULL,
  `membername` varchar(30) NOT NULL,
  `universityroll` int(20) NOT NULL,
  `processer` varchar(15) NOT NULL,
  `harddisk` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `os` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
