-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2014 at 12:21 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angkorshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmins`
--

CREATE TABLE IF NOT EXISTS `tbladmins` (
  `id` int(11) NOT NULL,
  `adminCode` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adminTypeCode` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`adminCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmintypes`
--

CREATE TABLE IF NOT EXISTS `tbladmintypes` (
  `id` int(11) NOT NULL,
  `adminTypeCode` int(11) NOT NULL,
  `adminTypeName` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`adminTypeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE IF NOT EXISTS `tblcategories` (
  `id` int(11) NOT NULL,
  `cateCode` varchar(11) NOT NULL,
  `cateName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cateCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`id`, `cateCode`, `cateName`, `status`) VALUES
(1, 'CTR0001', 'សំលៀកបំពាក់បុរស', 1),
(2, 'CTR0002', 'សំលៀកបំពាក់នារី', 1),
(3, 'CTR0003', 'ទាំងអស់', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE IF NOT EXISTS `tblcustomers` (
  `id` int(11) NOT NULL,
  `userCode` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `packageTitle` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE IF NOT EXISTS `tblmenu` (
  `id` int(11) NOT NULL,
  `menuCode` int(11) NOT NULL,
  `menuTitle` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`menuCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblorderdetails`
--

CREATE TABLE IF NOT EXISTS `tblorderdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderCode` varchar(11) NOT NULL,
  `proCode` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `cost` float NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE IF NOT EXISTS `tblorders` (
  `id` int(11) NOT NULL,
  `orderCode` varchar(11) NOT NULL,
  `orderDate` date NOT NULL,
  `userCode` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`orderCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpermise`
--

CREATE TABLE IF NOT EXISTS `tblpermise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminTypeCode` int(11) NOT NULL,
  `menuCode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE IF NOT EXISTS `tblproducts` (
  `id` int(11) NOT NULL,
  `proCode` varchar(11) NOT NULL,
  `proName` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `retailPrice` float NOT NULL,
  `picture` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `cateCode` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`proCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `proCode`, `proName`, `price`, `discount`, `retailPrice`, `picture`, `contact`, `cateCode`, `status`) VALUES
(122, '', '', 0, 0, 0, '', '', '', 0),
(654, '0988654', 'Hatari swing fanhi', 98, 0, 98, '', '098 333 222', '08776h665', 1),
(989, '09975764', 'king kong dolar snap', 100, 0, 100, '', '098 88 77 77', 'p0987', 1),
(45, '099764564', 'mekong campus land', 0, 0, 187, '', '0978767866', '', 1),
(85, '67678', 'student info system il', 1000, 0, 1000, '', '109999887', 'dfgh', 1),
(765, '7646', 'nokia connecting people', 231, 0, 231, '', '097 55  444 3', 'ddd', 1),
(8655, '898745', 'Accer aspire 1447', 6554, 0, 876, '', '098 77 66 55', '09433333234', 1),
(998, '97643', 'Angkor fashion shop', 432, 0, 432, '', '098 777 555', '0987', 1),
(8, 'PCOOO', 'Cocacola Ice-Drink', 2500, 0, 0, '', '012 36 56 34', 'CTR0001', 1),
(1, 'PDC0001', 'sunt officia sed derunt', 150, 0, 150, 'PDC0001.png', '012 35 55 44', 'CTR0001', 1),
(2, 'PDC0002', 'duis aute irure start', 650, 0, 650, '', '098 99 88 87', 'CTR0001', 1),
(3, 'PDC0003', 'consectetur euismod elit', 100, 0, 100, '', '077 77 77 65', 'CTR0001', 1),
(4, 'PDC0004', 'dolore eu unlla paraitur', 120, 0, 120, '', '096 888 999', 'CTR0001', 1),
(5, 'PDC0005', 'enim ad minim veniam', 1000, 0, 1000, 'PDC0001.png', '098 9999 00', 'CTR0002', 0),
(6, 'PDC0006', 'excepteur sint cupidate', 340, 0, 340, 'PDC0001.png', '012 333 444', 'CTR0001', 1),
(7, 'poerer', 'cvdcv hjgu hgjgj gjhgj', 129, 0, 129, '', '098 888 777', 'ee30', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
