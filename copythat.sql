-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 09:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copythat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `ID` int(11) NOT NULL,
  `Efname` varchar(255) NOT NULL,
  `Elname` varchar(255) NOT NULL,
  `Egender` varchar(6) NOT NULL,
  `Ebirthdate` date NOT NULL,
  `Edept` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`ID`, `Efname`, `Elname`, `Egender`, `Ebirthdate`, `Edept`, `rank`) VALUES
(1, 'Joseph', 'Doe', 'Female', '1994-02-28', 'IT', '3'),
(2, 'John', 'Doe', 'Male', '1993-11-25', 'IT', '1'),
(3, 'MARK', 'Doe', 'Male', '1994-12-15', 'ACCOUNTING', '3'),
(4, 'Johnn', 'Mark', 'Male', '1984-12-15', 'ACCOUNTING', '1'),
(5, 'Matt', 'Slick', 'Male', '1954-12-15', 'ENGINEERING', '3'),
(6, 'Scott', 'Hahn', 'Male', '1996-12-15', 'ACCOUNTING', '3'),
(7, 'Patrick', 'Madrid', 'Male', '1998-12-15', 'MARKETING', '1'),
(8, 'Timothy', 'Staples', 'Female', '1984-12-15', 'SALES', '3'),
(9, 'Peter', 'Kreft', 'Male', '1995-12-15', 'ACCOUNTING', '1'),
(10, 'Trent', 'Horn', 'Male', '1996-12-15', 'SALES', '5'),
(13, 'Mama', 'Papa', 'Female', '1998-12-04', 'IT', 'Masteral'),
(14, 'Lars', 'Pacheco', 'Female', '1994-02-02', 'IT', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nickname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `username`, `password`, `role`, `nickname`) VALUES
(2, 'john123', 'xxx123', 'President', 'Mr. Wick'),
(3, '30517615', 'xxx123', 'clerk iii', 'Senssie'),
(4, 'Celo', 'gwapo', 'master', 'Gwapito'),
(5, '1', '1', '1', 'The One'),
(6, '2', '23213', '2', 'Next Option');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
