-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeitlouder`
--

-- --------------------------------------------------------

--
-- Table structure for table `customersignup`
--

CREATE TABLE `customersignup` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `ContactNumber` varchar(15) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customersignup`
--

INSERT INTO `customersignup` (`Email`, `Password`, `Street`, `City`, `State`, `zipCode`, `ContactNumber`, `firstName`, `lastName`, `pic`) VALUES
('ronim.karki@gmail.com', 'sdfsdf', '125 ninth avenue', 'Belfield', 'NSW', '2191', '0410938499', NULL, NULL, NULL),
('admin', '', 'j coularie avenue', 'HomeBush West', 'NSW', '2135', '0410938499', 'Anil', 'Yadav', ''),
('', '', '', '', '', '', '', NULL, NULL, NULL),
('', 'admin', '', '', '', '', '', NULL, NULL, NULL),
('anil.kumar@gmail.com', 'anil123', 'j coularie avenue', 'HomeBush West', 'NSW', '2135', '0410938499', '', '', ''),
('anil@gmail.com', '12345', 'aurther', 'STRATHFIELD', 'NSW', '2135', '0410938499', '', '', ''),
('Cta.ruwali@gmail.com', '12345', '11 ramsdenway', 'Morley', 'WA', '6062', '0481848779', '', '', ''),
('anil123@gmail.com', '123456', '11 ramsdenway', 'Morley', 'WA', '6062', '0481848779', '', '', ''),
('Cta.ruwali@gmail.com', '123456', '11 ramsdenway', 'Morley', 'WA', '6062', '12345678', '', '', ''),
('Cta.ruwali@gmail.com', '123456', '11 ramsdenway', 'Morley', 'WA', '6062', '123456', '', '', ''),
('ronim.karki@gmail.com', 'ronim123', '125 ninth avenue', 'Belfield', 'NSW', '2191', '0410938499', '', '', ''),
('angelica.castro', 'angelica', '125 ninth avenue', 'Belfield', 'NSW', '2191', '0410938499', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
