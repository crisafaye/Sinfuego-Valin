-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2009 at 06:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idno` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idno`, `lname`, `fname`, `mname`, `course`, `sex`) VALUES
('15-037-49', 'Kwon', 'Dara', 'Park', 'BSIT', 'Female'),
('15-037-058', 'Sinfuego', 'Jenella', 'Salvadora', 'BSIT', 'Female'),
('15-037-51', 'Wu', 'Vanessa', 'Kim', 'BSIT', 'Female'),
('15-038-59', 'Kang', 'Sung', 'Hyun', 'BSCS', 'Male'),
('15-037-41', 'Parke', 'Jessica', 'Kim', 'BSIT', 'Female'),
('15-037-46', 'Pimchanok', 'Baifern', 'Oppa', 'BSIT', 'Female'),
('15-037-09', 'Boy', 'Boy', 'Girl', 'BSIT', 'M'),
('15-037-52', 'Tomoe', 'Nanami', 'Sama', 'BSIT', 'M'),
('15-038-23', 'Wu', 'Vanessa', 'Kim', 'BSCS', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
