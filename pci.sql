-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 08:47 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pci`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FatherFirstName` varchar(255) NOT NULL,
  `FatherLastName` varchar(255) NOT NULL,
  `FatherCNIC` varchar(255) NOT NULL,
  `MotherFirstName` varchar(255) NOT NULL,
  `MotherLastName` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `ResidingAddress` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `PakPresentAddress` varchar(255) NOT NULL,
  `PakPermanentAddress` varchar(255) NOT NULL,
  `PakLandline` varchar(255) NOT NULL,
  `PakMobile` varchar(255) NOT NULL,
  `EmergencyLandline` varchar(255) NOT NULL,
  `EmergencyMobile` varchar(255) NOT NULL,
  `VisaNumber` varchar(255) NOT NULL,
  `IssueDate` datetime NOT NULL,
  `ExpiryDate` datetime NOT NULL,
  `VisaNature` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Id`, `FirstName`, `LastName`, `FatherFirstName`, `FatherLastName`, `FatherCNIC`, `MotherFirstName`, `MotherLastName`, `Country`, `ResidingAddress`, `MobileNumber`, `PakPresentAddress`, `PakPermanentAddress`, `PakLandline`, `PakMobile`, `EmergencyLandline`, `EmergencyMobile`, `VisaNumber`, `IssueDate`, `ExpiryDate`, `VisaNature`) VALUES
(1, 'muneeb', 'rehman', 'Muhammad', 'Akram', '445588770', '09884422', '44300044', 'Pakistan', 'Islamabad', '99884499', 'karachi', 'Multan', '9004421', '5567883', '888494999', '09887222', '7788', '2017-05-04 00:00:00', '2017-05-18 00:00:00', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'test', 'test', 'test', 'test', '11111', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '2017-05-04 00:00:00', '2017-05-04 00:00:00', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Passport` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Email`, `CNIC`, `Passport`, `Password`) VALUES
(1, 'muneb', 'abc', 'test', 'test', 'test'),
(2, '', '', '', '', ''),
(3, 'muneeb', 'abc@gmail.com', '', '', ''),
(4, 'muneeb', 'abc@gmail.com', '61102-4994658-9', 'Pakistan', 'abcd'),
(5, 'muneeb', 'abc@gmail.com', '', '', ''),
(6, 'Ali ', 'ali@gmail.com', '61102-4994658-9', 'Pakistan', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
