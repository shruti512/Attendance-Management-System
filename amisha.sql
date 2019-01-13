-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2019 at 10:32 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `facultyID` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `email`, `password`, `facultyID`, `subject`, `phone`) VALUES
('pankaj', 'pankaj@gmail.com', 'pankaj', '20175555', 'maths', '99');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `studentID` bigint(100) NOT NULL,
  `attendance` int(100) NOT NULL default '0',
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `password`, `studentID`, `attendance`, `phone`, `email`) VALUES
('a', 'a', 0, 6, '999', 'a@gmail.com'),
('b', 'b', 0, 6, '999', 'b@gmail.com'),
('c', 'c', 0, 6, '999', 'c@gmail.com'),
('d', 'd', 0, 6, '999', 'd@gmail.com');
