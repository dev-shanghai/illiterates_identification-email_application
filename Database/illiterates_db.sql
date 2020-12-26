-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2015 at 08:02 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `illiterates_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `framea`
--

CREATE TABLE IF NOT EXISTS `framea` (
  `Pic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Pic_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `framea`
--

INSERT INTO `framea` (`Pic_Id`, `Pic_Name`) VALUES
(1, 'Pic1'),
(2, 'Pic2'),
(3, 'Pic3'),
(4, 'Pic4'),
(5, 'Pic5'),
(6, 'Pic6'),
(7, 'Pic7'),
(8, 'Pic8'),
(9, 'Pic9'),
(10, 'Pic10');

-- --------------------------------------------------------

--
-- Table structure for table `frameb`
--

CREATE TABLE IF NOT EXISTS `frameb` (
  `Pic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Pic_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `frameb`
--

INSERT INTO `frameb` (`Pic_Id`, `Pic_Name`) VALUES
(1, 'Pic1'),
(2, 'Pic2'),
(3, 'Pic3'),
(4, 'Pic4'),
(5, 'Pic5'),
(6, 'Pic6'),
(7, 'Pic7'),
(8, 'Pic8'),
(9, 'Pic9'),
(10, 'Pic10');

-- --------------------------------------------------------

--
-- Table structure for table `framec`
--

CREATE TABLE IF NOT EXISTS `framec` (
  `Pic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Pic_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `framec`
--

INSERT INTO `framec` (`Pic_Id`, `Pic_Name`) VALUES
(1, 'Pic1'),
(2, 'Pic2'),
(3, 'Pic3'),
(4, 'Pic4'),
(5, 'Pic5'),
(6, 'Pic6'),
(7, 'Pic7'),
(8, 'Pic8'),
(9, 'Pic9'),
(10, 'Pic10');

-- --------------------------------------------------------

--
-- Table structure for table `framed`
--

CREATE TABLE IF NOT EXISTS `framed` (
  `Pic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Pic_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `framed`
--

INSERT INTO `framed` (`Pic_Id`, `Pic_Name`) VALUES
(1, 'Pic1'),
(2, 'Pic2'),
(3, 'Pic3'),
(4, 'Pic4'),
(5, 'Pic5'),
(6, 'Pic6'),
(7, 'Pic7'),
(8, 'Pic8'),
(9, 'Pic9'),
(10, 'Pic10');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE IF NOT EXISTS `mailbox` (
  `M_Id` int(11) NOT NULL AUTO_INCREMENT,
  `M_Name` varchar(256) NOT NULL,
  `R_Id` varchar(256) NOT NULL,
  `S_Id` varchar(256) NOT NULL,
  `Status` varchar(256) NOT NULL,
  `Date` varchar(256) NOT NULL,
  PRIMARY KEY (`M_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`M_Id`, `M_Name`, `R_Id`, `S_Id`, `Status`, `Date`) VALUES
(1, '', '', '1', '0', '20151123'),
(2, '', '', '1', '0', '20151123'),
(3, '', '', '1', '0', '20151123');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pics`
--

CREATE TABLE IF NOT EXISTS `profile_pics` (
  `Pic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Pic_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile_pics`
--

INSERT INTO `profile_pics` (`Pic_Id`, `Pic_Name`) VALUES
(1, '20150524221642'),
(2, '20151123194359'),
(3, '20151123195241'),
(4, '20151128104516');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `U_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `U_Name` (`U_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `U_Name`, `Password`, `Language`, `Gender`, `Occupation`) VALUES
(1, '20151123195241', 'Pic2Pic3Pic2Pic3', 'push', 'male', 'Labour'),
(2, '20151128104516', 'Pic10Pic10Pic10Pic10', 'push', 'male', 'driver');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
