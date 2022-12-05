-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2022 at 05:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `place` varchar(20) NOT NULL,
  `table-name` varchar(10) NOT NULL,
  `seat-number` int(2) NOT NULL,
  `order-size` int(3) NOT NULL,
  `customer-name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`place`, `table-name`, `seat-number`, `order-size`, `customer-name`) VALUES
('', 'serengeti', 1, 1, 'KARIM SHABAN'),
('', 'serengeti', 1, 1, 'KARIM SHABAN'),
('', 'serengeti', 1, 1, 'KARIM SHABAN'),
('', 'serengeti', 1, 1, 'KARIM SHABAN'),
('', 'serengeti', 1, 1, 'KARIM SHABAN'),
('', 'NGORONGORO', 7, 15, 'JAYDADY'),
('', 'NGORONGORO', 7, 15, 'JAYDADY'),
('', 'NGORONGORO', 7, 15, 'JAYDADY'),
('NJIRO', 'GOMBE', 21, 223, 'OSAMA BIN LADEN'),
('MOROMBO', 'MANYARA', 783, 950, 'MUAMMAR GADDAFI'),
('NJIRO', 'GOMBE', 21, 223, 'OSAMA BIN LADEN'),
('MOROMBO', 'MANYARA', 783, 950, 'MUAMMAR GADDAFI'),
('', 'NGORONGORO', 3, 6, 'JOMMO KENTATTA'),
('ARUSHA', 'KINGO', 12, 21, 'ADOLF HITLER'),
('MWANZA', 'KIGAZI', 25, 2000, 'JULIUS MAFURU MAKUSU'),
('MWANZA', 'KIGAZI', 25, 2000, 'JULIUS MAFURU MAKUSU'),
('KILIMANJARO', 'MOSHI', 4567, 987, 'ADAM SEMLAMBO'),
('MBAUDA', 'FARU', 9, 32, 'OMARY MAJALIWA'),
('KIGOMA', 'KASULU', 34, 89, 'IGNASS MAJALIWA'),
('TANGA', 'HANDENI', 4, 3, 'MSASANI KUMENOGA');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staff-name` varchar(10) NOT NULL,
  `pass` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staff-name`, `pass`) VALUES
('karim', '12345'),
('omary', '12345'),
('admin', '12345'),
('waiter', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
