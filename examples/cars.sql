-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2016 at 09:09 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE IF NOT EXISTS `makes` (
  `make_id` int(11) NOT NULL,
  `make_name` varchar(65) NOT NULL,
  `hq` text NOT NULL,
  `make_notes` text NOT NULL,
  PRIMARY KEY (`make_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`make_id`, `make_name`, `hq`, `make_notes`) VALUES
(1, 'Ford', 'Dearborn, Michigan, USA', 'Best make'),
(2, 'Chevrolet', 'Detroit, Michigan, USA', 'A good second best');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `model_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `make_name` varchar(65) NOT NULL,
  `horsepower` int(11) NOT NULL,
  `num_doors` int(11) NOT NULL,
  `make_notes` text NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `make_id`, `make_name`, `horsepower`, `num_doors`, `make_notes`) VALUES
(1, 1, 'mustang gt', 435, 2, 'crazy awesome car'),
(2, 1, 'ford focus', 123, 4, 'cheaper car'),
(3, 2, 'camaro ss', 650, 2, 'looks good on paper...'),
(4, 2, 'impala', 197, 4, 'really not worth buying...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
