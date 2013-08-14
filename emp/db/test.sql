-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2013 at 11:27 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(55) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(55) NOT NULL,
  `emp_address` varchar(55) NOT NULL,
  `emp_salary` varchar(55) NOT NULL,
  `join_date` date NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_salary`, `join_date`) VALUES
(101, 'sairam', 'hanuman', '20000000', '2013-08-08'),
(102, 'ram', 'ramaaaa', '3878787', '2013-08-08'),
(103, 'fdsfs', 'sdfsf', '3434', '2013-08-08'),
(104, 'dfs', 'sdfsf', '23424', '2013-08-08'),
(105, 'dfs', 'sdfsf', '23424', '2013-08-08'),
(106, 'dfs', 'sdfsf', '23424', '2013-08-08'),
(107, 'dfss', 'fdsf', '23424', '2013-08-08'),
(108, 'dfss', 'fdsf', '23424', '2013-08-08'),
(109, 'dfss', 'fdsf', '23424', '2013-08-08'),
(110, 'dfss', 'fdsf', '5656', '2013-08-08'),
(111, 'dfss', 'fdsf', '5656', '2013-08-08'),
(112, 'fghdf', 'fgd', '565665', '2013-08-08'),
(113, 'cxcx', 'xcx', '454', '2013-08-08'),
(114, 'hgfh', 'fghf', '675', '2013-08-08'),
(115, 'fff', 'hggh', '5433434', '2013-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(65) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=591 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(589, 'user', 'user'),
(590, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
