-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2022 at 10:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babysitterplatform`
--

-- --------------------------------------------------------

--
-- Table structure for table `babysitter`
--

CREATE TABLE `babysitter` (
  `sitterID` int(10) UNSIGNED NOT NULL,
  `sitterfname` varchar(20) NOT NULL,
  `sitterlname` varchar(20) NOT NULL,
  `sitterpassword` varchar(7) NOT NULL,
  `sitteremail` varchar(20) NOT NULL,
  `sitterphone` int(10) NOT NULL,
  `sittercity` varchar(10) NOT NULL,
  `sitteraddress` varchar(50) NOT NULL,
  `sitterbio` varchar(500) NOT NULL,
  `sitterpicture` varchar(200) NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `babysitter`
--

INSERT INTO `babysitter` (`sitterID`, `sitterfname`, `sitterlname`, `sitterpassword`, `sitteremail`, `sitterphone`, `sittercity`, `sitteraddress`, `sitterbio`, `sitterpicture`, `ID`) VALUES
(1, 'Nora', '[value-3]', '[value-', '[value-5]', 0, '[value-7]', '[value-8]', '[value-9]', '[value-10]', 0),
(2, 'Amal', 'ahmed', '49403', 'amal@ht.mail', 5555555, 'riyadh', 'riyadh', 'hi', '[value-10]', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `childName` varchar(20) NOT NULL,
  `childAge` int(2) NOT NULL,
  `service` varchar(20) NOT NULL,
  `durationSTART` datetime NOT NULL,
  `durationEND` datetime NOT NULL,
  `price` double DEFAULT NULL,
  `status` enum('A','P','R','C') NOT NULL DEFAULT 'P',
  `sitterID` int(10) UNSIGNED DEFAULT NULL,
  `parentID` int(10) UNSIGNED NOT NULL,
  `Rate` int(11) DEFAULT NULL,
  `Comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `childName`, `childAge`, `service`, `durationSTART`, `durationEND`, `price`, `status`, `sitterID`, `parentID`, `Rate`, `Comments`) VALUES
(1, 'sara', 1, 'help in home work', '2022-11-04 03:57:15', '2022-11-04 05:57:15', 50, 'A', 1, 1, 4, 'l'),
(2, 'mona', 0, '[value-3]', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'A', 2, 1, 0, '0'),
(3, 'sama', 5, 'hkjhgj', '2022-11-08 12:01:15', '2022-11-30 12:01:15', 0, 'A', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parentID` int(10) UNSIGNED NOT NULL,
  `parentfname` varchar(20) NOT NULL,
  `parentlname` varchar(20) NOT NULL,
  `parentpassword` varchar(7) NOT NULL,
  `parentemail` varchar(20) NOT NULL,
  `parentcity` varchar(10) NOT NULL,
  `parentaddress` varchar(50) NOT NULL,
  `parentpicture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parentID`, `parentfname`, `parentlname`, `parentpassword`, `parentemail`, `parentcity`, `parentaddress`, `parentpicture`) VALUES
(1, 'Sara', 'ahmed', '123', 'kwkna@gmail.com', 'riyadh', 'riyadh', '12'),
(2, 'Saud', 'Fahad', '123', '123@gmai.com', 'riyadh', '12', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD PRIMARY KEY (`sitterID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `sitter` (`sitterID`),
  ADD KEY `parent` (`parentID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `babysitter`
--
ALTER TABLE `babysitter`
  MODIFY `sitterID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `parent` FOREIGN KEY (`parentID`) REFERENCES `parent` (`parentID`),
  ADD CONSTRAINT `sitter` FOREIGN KEY (`sitterID`) REFERENCES `babysitter` (`sitterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
