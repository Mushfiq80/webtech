-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 12:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfile`
--

CREATE TABLE `cfile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `allegation` varchar(300) NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cfile`
--

INSERT INTO `cfile` (`id`, `name`, `address`, `gender`, `allegation`, `age`) VALUES
(1, 'Aurpon', 'savar', 'Male', 'convicted to Murder case.', 23),
(2, 'Lord Lingard', '2210 Roosevelt Road, Manchester', 'Male', 'He is lord, that is enough for crime', 30),
(3, 'Harry Maguire', '22 Old traffod, Manchester', 'Male', 'Illegally cease of captaincy', 50);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `Username` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`Username`, `Pass`) VALUES
('mush', '1212'),
('dv', '2121');

-- --------------------------------------------------------

--
-- Table structure for table `meet`
--

CREATE TABLE `meet` (
  `prid` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meet`
--

INSERT INTO `meet` (`prid`, `Name`, `Role`, `date`) VALUES
(1, 'Sami', 'Jailer', '2021-12-13'),
(2, 'Piu Costa', 'prisoner', '2021-12-13'),
(5, 'Shoumik', 'warden', '2021-12-14'),
(6, 'Mushfiq Us Saleheen', 'jailer', '2021-12-15'),
(7, 'Shoumik', 'warden', '2021-12-16'),
(8, 'Moida', 'dsaf', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `sprison`
--

CREATE TABLE `sprison` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(4) NOT NULL,
  `country` varchar(20) NOT NULL,
  `Class` text NOT NULL,
  `allegation` varchar(20) NOT NULL,
  `cell` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sprison`
--

INSERT INTO `sprison` (`ID`, `name`, `age`, `country`, `Class`, `allegation`, `cell`) VALUES
(1, 'Allison Fred', 24, 'Brazil', 'C', 'Robbery', 1101),
(2, 'Harry Maguire', 30, 'England', 'A', 'Narcotic', 1012),
(3, 'Luke Shaw', 32, 'England', 'B', 'Murder', 1223),
(4, 'Aron Wan', 22, 'England', 'C', 'Fraud', 122),
(5, 'Lord Lingard', 26, 'England', 'A', 'All crime', 13455);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfile`
--
ALTER TABLE `cfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet`
--
ALTER TABLE `meet`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `sprison`
--
ALTER TABLE `sprison`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfile`
--
ALTER TABLE `cfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meet`
--
ALTER TABLE `meet`
  MODIFY `prid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sprison`
--
ALTER TABLE `sprison`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
