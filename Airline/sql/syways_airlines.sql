-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 07:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syways_airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `flightnum` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `departuredate` varchar(50) NOT NULL,
  `departuretime` varchar(50) NOT NULL,
  `arrivaltime` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `fare` varchar(50) NOT NULL,
  `slots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flightnum`, `origin`, `destination`, `departuredate`, `departuretime`, `arrivaltime`, `duration`, `fare`, `slots`) VALUES
(1, 'abc123', 'cebu', 'manila', '11/01/2017', '1100', '1200', '1hr', '1500', 50),
(2, 'abc234', 'cebu', 'manila', '11/01/2017', '1600', '1700', '1hr', '2000', 50),
(5, 'abc345', 'cebu', 'manila', '11/01/2017', '0930', '1030', '1hr', '1450', 50),
(6, 'abc456', 'cebu', 'manila', '11/01/2017', '0800', '0900', '1hr', '1200', 50),
(7, 'bcd123', 'manila', 'cebu', '11/01/2017', '0800', '0900', '1hr', '1500', 50),
(8, 'bcd234', 'manila', 'cebu', '11/01/2017', '0900', '1000', '1hr', '1600', 50),
(9, 'bcd345', 'manila', 'cebu', '11/01/2017', '1300', '1400', '1hr', '1500', 50),
(10, 'bcd456', 'manila', 'cebu', '11/01/2017', '1400', '1500', '1hr', '1600', 50),
(11, 'abc567', 'cebu', 'manila', '11/02/2017', '0800', '0900', '1hr', '1500', 50),
(12, 'abc678', 'cebu', 'manila', '11/02/2017', '0900', '1000', '1hr', '1550', 50),
(13, 'abc789', 'cebu', 'manila', '11/02/2017', '1000', '1100', '1hr', '1600', 50),
(14, 'abc890', 'cebu', 'manila', '11/02/2017', '1300', '1400', '1hr', '1650', 50),
(15, 'bcd567', 'manila', 'cebu', '11/02/2017', '0800', '0900', '1hr', '1500', 50),
(16, 'bcd678', 'manila', 'cebu', '11/02/2017', '0900', '1000', '1hr', '1550', 50),
(17, 'bcd789', 'manila', 'cebu', '11/02/2017', '1300', '1400', '1hr', '1600', 50),
(18, 'bcd890', 'manila', 'cebu', '11/02/2017', '1400', '1500', '1hr', '1400', 50);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservationid` varchar(50) NOT NULL,
  `transactionid` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `baggage` varchar(50) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `flighttype` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `departuredate` varchar(50) NOT NULL,
  `flightnumber` varchar(50) NOT NULL,
  `departuretime` varchar(50) NOT NULL,
  `arrivaltime` varchar(50) NOT NULL,
  `fare` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservationid`, `transactionid`, `firstname`, `lastname`, `birthday`, `address`, `nationality`, `email`, `contact`, `baggage`, `seat`, `flighttype`, `origin`, `destination`, `departuredate`, `flightnumber`, `departuretime`, `arrivaltime`, `fare`, `status`) VALUES
(81, 'cc955924341c34295dbb', 'cfced6a92d29f8f050e9', 'Brian', 'Sy', 'MAY/27/1994', 'Guadalupe Cebu City Cebu Philippines', 'Filipino', 'brianmadmaxsy@gmail.com', '09228813555', '15kg', 'A1', 'roundtrip', 'cebu', 'manila', '11/01/2017', 'abc345', '0930', '1030', '1450', 'Payed'),
(82, 'df571532985add265b69', 'cfced6a92d29f8f050e9', 'Brian', 'Sy', 'MAY/27/1994', 'Guadalupe Cebu City Cebu Philippines', 'Filipino', 'brianmadmaxsy@gmail.com', '09228813555', '15kg', 'A2', 'roundtrip', 'manila', 'cebu', '11/02/2017', 'bcd678', '0900', '1000', '1550', 'Payed'),
(83, '60507aadb0e399719bc9', 'cfced6a92d29f8f050e9', 'Jeffrey', 'Ang', 'JULY/28/1994', 'Lahug Cebu City Cebu Philippines', 'Filipino', 'jeffreyang@gmail.com', '12345678901', '20kg', 'B1', 'roundtrip', 'cebu', 'manila', '11/01/2017', 'abc345', '0930', '1030', '1450', 'Payed'),
(84, 'e9c7a1e06ef9f0a4a156', 'cfced6a92d29f8f050e9', 'Jeffrey', 'Ang', 'JULY/28/1994', 'Lahug Cebu City Cebu Philippines', 'Filipino', 'jeffreyang@gmail.com', '12345678901', '20kg', 'B2', 'roundtrip', 'manila', 'cebu', '11/02/2017', 'bcd678', '0900', '1000', '1550', 'Payed'),
(85, 'a914e082f241b7eed7eb', '085bf5e919a7feac9936', 'Juan', 'Dela Cruz', 'JANUARY/01/1994', 'Cebu City Cebu Philippines', 'Filipino', 'juandelacruz@mail.com', '12345678901', '20kg', 'A1', 'oneway', 'cebu', 'manila', '11/02/2017', 'abc789', '1000', '1100', '1600', 'Payed'),
(86, '5bbfd80d12a4e7ff7396', '085bf5e919a7feac9936', 'Pedro', 'Dela Cruz', 'JANUARY/02/1994', 'Cebu City Cebu Philippines', 'Filipino', 'pedrodelacruz@mail.com', '12345678901', '15kg', 'A2', 'oneway', 'cebu', 'manila', '11/02/2017', 'abc789', '1000', '1100', '1600', 'Payed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
