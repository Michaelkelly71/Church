-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ch`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Number` int(10) NOT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Number`, `Email`) VALUES
(1, 244525655, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `Coordinator` varchar(250) NOT NULL,
  `scriptureReader` varchar(100) NOT NULL,
  `TitheOffering` varchar(100) NOT NULL,
  `Prayer` varchar(100) NOT NULL,
  `Speaker` varchar(250) NOT NULL,
  `Topic` text NOT NULL,
  `adDate` date NOT NULL,
  `Day` varchar(50) NOT NULL,
  `adTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Coordinator`, `scriptureReader`, `TitheOffering`, `Prayer`, `Speaker`, `Topic`, `adDate`, `Day`, `adTime`) VALUES
(1, 'Mad. Comfort Amoako', '', '', '', 'Pr. Joe Hagan', 'Prayer, Praise And Thanksgiving', '2019-12-01', 'Sunday', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `Date` date NOT NULL,
  `Day` varchar(50) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`Date`, `Day`, `Amount`) VALUES
('2019-12-05', 'Wednesday', 450),
('2019-12-11', 'Wednesday', 200.5),
('2019-12-14', 'Saturday', 1500.65),
('2019-12-18', 'Wednesday', 6000.65);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `M.I` varchar(50) DEFAULT NULL,
  `Address` varchar(250) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `FName`, `LName`, `M.I`, `Address`, `Date of Birth`, `Gender`, `Position`) VALUES
(1, 'Kofi', 'Babone', 'J.J', '211 pine ave', '1998-02-14', 'Male', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `sabbathschool`
--

CREATE TABLE `sabbathschool` (
  `ID` int(11) NOT NULL,
  `Coordinator` varchar(100) NOT NULL,
  `Supretendent` varchar(150) NOT NULL,
  `Prayer` varchar(150) NOT NULL,
  `adDate` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `adTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sabbathschool`
--

INSERT INTO `sabbathschool` (`ID`, `Coordinator`, `Supretendent`, `Prayer`, `adDate`, `Day`, `adTime`) VALUES
(1, 'Amanda', 'Natlie', 'David', '2021-07-24', 'Saturday', '08:08:44.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `acctype` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `acctype`) VALUES
(1, 'test', 'admin', 'admin'),
(2, 'church', 'test', 'user'),
(7, 'hi', 'red', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sabbathschool`
--
ALTER TABLE `sabbathschool`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sabbathschool`
--
ALTER TABLE `sabbathschool`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
