-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2014 at 10:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--
CREATE DATABASE IF NOT EXISTS `mydatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `SERIAL` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `USERID` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  PRIMARY KEY (`SERIAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`SERIAL`, `NAME`, `USERID`, `PASSWORD`) VALUES
(2, 'admin', 'user', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE IF NOT EXISTS `bed` (
  `BED_ID` int(10) NOT NULL AUTO_INCREMENT,
  `PATIENT_ID` int(50) NOT NULL,
  `DOCTOR_ID` int(50) NOT NULL,
  `NURSE_ID` int(50) NOT NULL,
  `BEDTYPE` varchar(50) NOT NULL,
  `BEDPRICE` int(50) NOT NULL,
  `BEDDESCRIPTION` varchar(100) NOT NULL,
  `TOTALBED` int(200) NOT NULL,
  `AVAILABLEBED` int(200) NOT NULL,
  PRIMARY KEY (`BED_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`BED_ID`, `PATIENT_ID`, `DOCTOR_ID`, `NURSE_ID`, `BEDTYPE`, `BEDPRICE`, `BEDDESCRIPTION`, `TOTALBED`, `AVAILABLEBED`) VALUES
(1, 49, 1, 1, '', 0, '', 0, 0),
(2, 50, 2, 2, '', 0, '', 0, 0),
(3, 45, 4, 1, '', 0, '', 0, 0),
(4, 45, 0, 0, '', 0, '', 0, 0),
(6, 45, 3, 1, '', 0, '', 0, 0),
(7, 45, 4, 1, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bed1`
--

CREATE TABLE IF NOT EXISTS `bed1` (
  `BED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PATIENT_ID` int(11) DEFAULT NULL,
  `DOCTOR_ID` int(11) DEFAULT NULL,
  `NURSE_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`BED_ID`),
  KEY `PATIENT_ID` (`PATIENT_ID`),
  KEY `DOCTOR_ID` (`DOCTOR_ID`),
  KEY `NURSE_ID` (`NURSE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `DOCTOR_ID` int(10) NOT NULL AUTO_INCREMENT,
  `BED_ID` int(50) NOT NULL,
  `PATIENT_ID` int(50) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `QUALIFICATION` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `CONTACTNO` bigint(15) NOT NULL,
  `USERID` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  PRIMARY KEY (`DOCTOR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DOCTOR_ID`, `BED_ID`, `PATIENT_ID`, `FNAME`, `MNAME`, `LNAME`, `QUALIFICATION`, `EMAIL`, `CONTACTNO`, `USERID`, `PASSWORD`) VALUES
(3, 6, 45, 'Mainak', '', 'maulik', 'BDS', '', 1234567897, 'abc', 'abcd'),
(4, 7, 45, 'abc', '', 'def', 'PG', '', 3785485555, 'aaa', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `NURSE_ID` int(20) NOT NULL AUTO_INCREMENT,
  `BED_ID` int(50) NOT NULL,
  `PATIENT_ID` int(50) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `CONTACTNO` bigint(15) NOT NULL,
  `USERID` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  PRIMARY KEY (`NURSE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`NURSE_ID`, `BED_ID`, `PATIENT_ID`, `FNAME`, `MNAME`, `LNAME`, `EMAIL`, `CONTACTNO`, `USERID`, `PASSWORD`) VALUES
(1, 1, 49, 'aa', 'aa', 'aa', 'aa@.', 2147483647, 'qq', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `PATIENT_ID` int(20) NOT NULL AUTO_INCREMENT,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `DEPARTMENT` text NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `CONTACTNO` bigint(15) NOT NULL,
  `USERID` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `DOCTOR_ID` varchar(50) NOT NULL DEFAULT 'pending',
  `NURSE_ID` varchar(50) NOT NULL DEFAULT 'pending',
  `BED_ID` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`PATIENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PATIENT_ID`, `FNAME`, `MNAME`, `LNAME`, `DEPARTMENT`, `EMAIL`, `CONTACTNO`, `USERID`, `PASSWORD`, `DOCTOR_ID`, `NURSE_ID`, `BED_ID`) VALUES
(3, 'Arunabha', '', 'Bhaumik', 'Cardiology', 'aa@yahoo.in', 2147483647, '', '', 'pending', 'pending', 'pending'),
(7, 'Mainak', '', 'Maulik', 'Dermatology', 'mm@hotmail.in', 8972072151, '', '', 'pending', 'pending', 'pending'),
(8, 'ff', 'g', 'hh', 'Dermatology', '', 987654322, '', '', 'pending', 'pending', 'pending'),
(20, 'dfsdf', '', 'ad', 'Cardiology', '', 1233333333, '', '', 'pending', 'pending', 'pending'),
(21, 'dfsdf', '', 'ad', 'Cardiology', '', 1233333333, '', '', 'pending', 'pending', 'pending'),
(22, 'dfsdf', '', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(23, 'dfsdf', '', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(24, 'dfsdf', '', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(26, 'dfsdf', '', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(27, 'dfsdf', '', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(28, 'dfsdf', 'afsadf', 'ad', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(43, 'raj', 'ee', 'aa', 'Dermatology', '', 1111111111, '', '', 'pending', 'pending', 'pending'),
(44, 'dfsdf', 'afsadf', 'qeqwe', 'Cardiology', '', 3456543456, '', '', 'pending', 'pending', 'pending'),
(45, 'dfsdf', 'afsadf', 'qeqwe', 'Cardiology', '', 3456543456, 'eee', 'aaa', '4', '1', 'pending'),
(46, 'dfsdf', 'afsadf', 'ad', 'Dermatology', 'aaa@gmail.com', 3456543456, 'eee', 'aaaa', 'pending', 'pending', 'pending'),
(47, 'arer', '', 'werw', 'Cardiology', '', 2222222222, 'aaa', 'aaa', 'pending', 'pending', 'pending'),
(49, 'aaa', '', 'sadas', 'Cardiology', '', 1222222222, 'rrr', 'rrr', '1', '1', '1'),
(50, 'werwe', '', 'rwerwer', 'Cardiology', '', 4545454545, 'eee', 'eee', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `requestpatient`
--

CREATE TABLE IF NOT EXISTS `requestpatient` (
  `REQUEST_ID` int(50) NOT NULL AUTO_INCREMENT,
  `PATIENT_ID` int(50) NOT NULL,
  `BEDTYPE` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`REQUEST_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `requestpatient`
--

INSERT INTO `requestpatient` (`REQUEST_ID`, `PATIENT_ID`, `BEDTYPE`) VALUES
(1, 45, 'pending'),
(2, 49, 'AC'),
(3, 50, 'AC'),
(4, 50, 'AC'),
(5, 0, 'AC'),
(6, 0, 'AC'),
(7, 45, 'AC'),
(8, 0, 'AC'),
(9, 0, 'AC');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed1`
--
ALTER TABLE `bed1`
  ADD CONSTRAINT `bed1_ibfk_1` FOREIGN KEY (`PATIENT_ID`) REFERENCES `patient` (`PATIENT_ID`),
  ADD CONSTRAINT `bed1_ibfk_2` FOREIGN KEY (`DOCTOR_ID`) REFERENCES `doctor` (`DOCTOR_ID`),
  ADD CONSTRAINT `bed1_ibfk_3` FOREIGN KEY (`NURSE_ID`) REFERENCES `nurse` (`NURSE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
