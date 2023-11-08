-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2023 at 07:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer_booking`
--

CREATE TABLE IF NOT EXISTS `customer_booking` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `Room_category` text NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `Room_No` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Contact_no` varchar(13) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `customer_booking`
--

INSERT INTO `customer_booking` (`customer_id`, `Room_category`, `check_in_date`, `check_out_date`, `Room_No`, `First_name`, `Last_name`, `Contact_no`, `Email`) VALUES
(1, 'Deluxe Rooms', '2023-04-16', '2023-04-16', 101, 'Ashima', 'Dhingra', '7626923368', 'ashima2310@gmail.com'),
(14, 'Deluxe Rooms', '2023-05-01', '2023-05-02', 104, 'heena', 'arora', '9563251445', 'himani@gmail.com'),
(18, 'Balcony Executives Suites', '2023-06-10', '2023-06-11', 116, 'amit', 'arora', '9874521564', 'amit@gmail.com'),
(26, 'Family Suites', '2023-06-11', '2023-06-12', 108, 'jasleen', 'kaur', '9874512547', 'jasleen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `cardnumber` varchar(30) NOT NULL,
  `cardholder` varchar(30) NOT NULL,
  `expiremonth` int(11) NOT NULL,
  `expireyear` year(4) NOT NULL,
  `ccvv` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `txtroomcategory` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardnumber`, `cardholder`, `expiremonth`, `expireyear`, `ccvv`, `fname`, `lname`, `phone`, `txtroomcategory`, `checkin`, `checkout`) VALUES
('987 456 123', 'vishu', 12, 2024, 77, 'ankit', 'Dhingra', 987456123, 'Family Suites', '2023-06-11', '2023-06-21'),
('987 456 123', 'vishu', 12, 2024, 0, 'ankit', 'Dhingra', 987456123, 'Family Suites', '2023-06-11', '2023-06-21'),
('987 652 124', 'heena', 12, 2024, 77, 'ankit', 'Dhingra', 987456123, 'Family Suites', '2023-06-18', '2023-06-19'),
('456 987 954', 'vishu', 12, 2024, 77, 'amit', 'arora', 2147483647, 'single', '2023-06-17', '2023-06-18'),
('654 954 612', 'vishu', 12, 2025, 77, 'amit', 'arora', 2147483647, 'single', '2023-06-10', '2023-06-11'),
('452 912 354', 'om', 12, 2024, 77, 'ankit', 'Dhingra', 987456123, 'single', '2023-06-18', '2023-06-19'),
('456  987  123', 'om', 12, 2024, 77, 'ankit', 'Dhingra', 987456123, 'Deluxe Rooms', '2023-06-11', '2023-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(6) DEFAULT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `phone`, `email`, `usertype`, `password`) VALUES
('Ashima', 'Dhingra', '762692336', 'ashima2310@gmail.com', 'admin', '456'),
('heena', 'arora', '9563251445', 'himani@gmail.com', 'user', '693'),
('amit', 'arora', '9874521564', 'amit@gmail.com', 'user', '654'),
('ankit', 'Dhingra', '987456123', 'ankit@gmail.com', 'admin', '786'),
('jasleen', 'kaur', '9874512547', 'jasleen@gmail.com', 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `roomstatus_table`
--

CREATE TABLE IF NOT EXISTS `roomstatus_table` (
  `Room_no` int(11) NOT NULL,
  `Room_category` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`Room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomstatus_table`
--

INSERT INTO `roomstatus_table` (`Room_no`, `Room_category`, `status`) VALUES
(101, 'Deluxe Rooms', 'available'),
(102, 'Deluxe Rooms', 'avaliabe'),
(103, 'Deluxe Rooms', 'available'),
(104, 'Deluxe Rooms', 'available'),
(105, 'Deluxe Rooms', 'available'),
(106, 'Deluxe Rooms', 'available'),
(107, 'Deluxe Rooms', 'available'),
(108, 'Family Suites', 'Unavailable'),
(109, 'Family Suites', 'available'),
(110, 'Family Suites', 'available'),
(111, 'Family Suites', 'available'),
(112, 'Family Suites', 'available'),
(113, 'Family Suites', 'available'),
(114, 'Family Suites', 'Unavailable'),
(115, 'Balcony Executives Suites', 'available'),
(116, 'Balcony Executives Suites', 'available'),
(117, 'Balcony Executives Suites', 'Unavailable'),
(118, 'Balcony Executives Suites', 'available'),
(119, 'Balcony Executives Suites', 'available'),
(120, 'Balcony Executives Suites', 'available'),
(121, 'Balcony Executives Suites', 'available'),
(122, 'Balcony Executives Suites', 'available'),
(123, 'single', 'avaliable'),
(124, 'single', 'avaliable');

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE IF NOT EXISTS `room_table` (
  `Room_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Room_category` varchar(30) NOT NULL,
  `Beds` varchar(30) NOT NULL,
  `Facilities` varchar(40) NOT NULL,
  `Price` varchar(7) NOT NULL,
  `Total_rooms` int(12) NOT NULL,
  `Available_rooms` int(11) NOT NULL,
  PRIMARY KEY (`Room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `room_table`
--

INSERT INTO `room_table` (`Room_id`, `image`, `Room_category`, `Beds`, `Facilities`, `Price`, `Total_rooms`, `Available_rooms`) VALUES
(1, 'roomimage/2.jpeg', '	Family Suites', '2 double bed', ' Wifi,TV,AC,', '200', 3, 2),
(7, 'roomimage/default.jpg', 'Deluxe Rooms', '2 single beds', ' TV,AC,', '1600', 7, 6),
(15, 'roomimage/room1.jpg', 'single', '2 single beds', ' Wifi,TV,', '1500', 4, 3),
(23, 'roomimage/room6.jpg', 'single', '1single', ' TV,AC,', '1500', 5, 4),
(25, 'roomimage/gallery8.jpg', 'single', '1single', ' TV,', '1000', 3, 2),
(27, 'roomimage/gallery7.jpg', 'Balcony Executives Suites', '2 single beds', ' TV,', '265', 6, 5),
(28, 'roomimage/gallery3.jpg', '	Family Suites', '3', ' Wifi,', '1200', 6, 5);
