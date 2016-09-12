-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 12:45 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--
CREATE DATABASE IF NOT EXISTS `user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user`;

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE IF NOT EXISTS `accept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `checkin` varchar(20) NOT NULL,
  `checkout` varchar(20) NOT NULL,
  `hotelname` varchar(20) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `troom` varchar(20) NOT NULL,
  `tprice` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`id`, `name`, `country`, `contact`, `email`, `checkin`, `checkout`, `hotelname`, `roomtype`, `price`, `troom`, `tprice`, `bank`) VALUES
(2, 'Tarek Rahman', 'Bangladesh', '01738214430', 'tarek@yahoo.com', '2016-09-13', '2016-09-13', 'Grand Orient', 'Delux', '$250', '3', '$750', '017382144302');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nishat', '113059'),
('riyad', '113023'),
('sawan', '113019'),
('tarek', '113024'),
('sujan', '113060');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE IF NOT EXISTS `approved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `checkin` varchar(20) NOT NULL,
  `checkout` varchar(20) NOT NULL,
  `hotelname` varchar(20) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `troom` varchar(20) NOT NULL,
  `tprice` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `name`, `country`, `contact`, `email`, `checkin`, `checkout`, `hotelname`, `roomtype`, `price`, `troom`, `tprice`, `bank`) VALUES
(3, 'Tarek Rahman', 'Bangladesh', '01738214430', 'tarek@yahoo.com', '2016-09-13', '2016-09-14', 'Grand Orient', 'Delux', '$250', '3', '$750', '017382144302');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `checkin` varchar(30) DEFAULT NULL,
  `checkout` varchar(30) DEFAULT NULL,
  `hotelname` varchar(30) DEFAULT NULL,
  `roomtype` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tprice` varchar(30) DEFAULT NULL,
  `bank` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `country`, `contact`, `email`, `checkin`, `checkout`, `hotelname`, `roomtype`, `price`, `troom`, `tprice`, `bank`) VALUES
(4, 'Sawan mahmud', 'Bangladesh', '01738214430', 'sawan@gmail.com', '2016-09-15', '2016-09-16', 'Grand Orient', 'Delux', '$250', '3', '$750', '017382144302'),
(5, 'Taufiqur Rahman', 'Bangladesh', '01738214430', 'taufiq@yahoo.com', '2016-09-20', '2016-09-21', 'Grand Orient', 'Standard Room', '$250', '1', '$750', '017382144302'),
(6, 'Sujan mahmud', 'Bangladesh', '01771220983', 'sujan@gmail.com', '2016-09-13', '2016-09-14', 'Hotel agrabad', 'Standard Room', '185', '1', '$750', '017382144302');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `con_pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `con_pass`, `email`) VALUES
('sujan', 'sujan', '12345', '12345', 'sujan@gmail.com'),
('tarek', 'tarek', '12345', '12345', 'tarek@yahoo.com'),
('Taufiqur Rahman', 'taufiqur', '12345', '12345', 'taufiq@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
