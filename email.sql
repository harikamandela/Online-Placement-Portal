-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2011 at 06:42 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frm` varchar(20) NOT NULL,
  `too` varchar(20) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `dt` date NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

--
-- Dumping data for table `inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(11) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `city` char(10) NOT NULL,
  `gender` char(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `pwd`, `email`, `mob`, `city`, `gender`) VALUES
(1, '123', 'sekhar', 123, 'mumbai', 'male'),
(2, '123', 'harika', 123, 'delhi', 'female');
