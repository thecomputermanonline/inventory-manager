-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2015 at 09:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `griddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
`CategoryID` int(10) unsigned NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `Description` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`CategoryID`, `CategoryName`, `Description`) VALUES
(1, 'Groceries', 'basic foods sand stuffs');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
`ProductID` int(10) unsigned NOT NULL,
  `ProductSKU` int(20) NOT NULL,
  `ProductName` varchar(40) NOT NULL,
  `SupplierID` int(10) unsigned NOT NULL,
  `CategoryID` int(3) unsigned NOT NULL,
  `UnitsPerCarton` int(20) DEFAULT NULL,
  `UnitPrice` decimal(10,2) unsigned DEFAULT '0.00',
  `UnitsInStock` int(11) DEFAULT '0',
  `ReorderLevel` int(10) unsigned DEFAULT '0',
  `Discontinued` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductID`, `ProductSKU`, `ProductName`, `SupplierID`, `CategoryID`, `UnitsPerCarton`, `UnitPrice`, `UnitsInStock`, `ReorderLevel`, `Discontinued`) VALUES
(1, 1234567, 'Weetabix', 1, 1, 36, '570.00', 0, 3, 1),
(2, 12345678, 'Cornflakes', 1, 1, 36, '450.00', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE IF NOT EXISTS `Suppliers` (
`SupplierID` int(10) unsigned NOT NULL,
  `CompanyName` varchar(40) NOT NULL,
  `ContactName` varchar(30) DEFAULT NULL,
  `ContactTitle` varchar(30) DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `PostalCode` varchar(10) DEFAULT NULL,
  `Country` varchar(15) DEFAULT NULL,
  `Phone` varchar(24) DEFAULT NULL,
  `Fax` varchar(24) DEFAULT NULL,
  `HomePage` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`SupplierID`, `CompanyName`, `ContactName`, `ContactTitle`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `Fax`, `HomePage`) VALUES
(1, 'Bulldog', 'Ebele', 'Mr', 'ogudu', 'lagos', 'West Africa', NULL, 'Nigeria', '08137015090', '1222222', 'www.bulldog.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
 ADD PRIMARY KEY (`CategoryID`), ADD UNIQUE KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
 ADD PRIMARY KEY (`ProductID`), ADD UNIQUE KEY `ProductSKU` (`ProductSKU`), ADD UNIQUE KEY `ProductName` (`ProductName`);

--
-- Indexes for table `Suppliers`
--
ALTER TABLE `Suppliers`
 ADD PRIMARY KEY (`SupplierID`), ADD KEY `CompanyName` (`CompanyName`), ADD KEY `PostalCode` (`PostalCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
MODIFY `CategoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
MODIFY `ProductID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Suppliers`
--
ALTER TABLE `Suppliers`
MODIFY `SupplierID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
