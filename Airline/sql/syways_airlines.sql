-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 07:21 AM
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
(18, 'bcd890', 'manila', 'cebu', '11/02/2017', '1400', '1500', '1hr', '1400', 50),
(19, 'abc098', 'cebu', 'manila', '11/03/2017', '0800', '0900', '1hr', '1400', 50),
(20, 'abc987', 'cebu', 'manila', '11/03/2017', '0900', '1000', '1hr', '1500', 50),
(21, 'abc876', 'cebu', 'manila', '11/03/2017', '1100', '1200', '1hr', '1550', 50),
(22, 'abc765', 'cebu', 'manila', '11/03/2017', '1300', '1400', '1hr', '1450', 50),
(23, 'bcd098', 'manila', 'cebu', '11/03/2017', '0930', '1030', '1hr', '2050', 50),
(24, 'bcd987', 'manila', 'cebu', '11/03/2017', '1100', '1200', '1hr', '1850', 50),
(25, 'bcd876', 'manila', 'cebu', '11/03/2017', '1300', '1400', '1hr', '1500', 50),
(26, 'bcd765', 'manila', 'cebu', '11/03/2017', '1400', '1500', '1hr', '1500', 50),
(27, 'abc654', 'cebu', 'manila', '11/04/2017', '0800', '0900', '1hr', '1500', 50),
(28, 'abc543', 'cebu', 'manila', '11/04/2017', '0900', '1000', '1hr', '1550', 50),
(29, 'abc432', 'cebu', 'manila', '11/04/2017', '1300', '1400', '1hr', '1550', 50),
(30, 'abc321', 'cebu', 'manila', '11/04/2017', '1430', '1530', '1hr', '1400', 50),
(31, 'bcd654', 'manila', 'cebu', '11/04/2017', '0800', '0900', '1hr', '1500', 50),
(32, 'bcd543', 'manila', 'cebu', '11/04/2017', '0900', '1000', '1hr', '1600', 50),
(33, 'bcd432', 'manila', 'cebu', '11/04/2017', '1300', '1400', '1hr', '1450', 50),
(34, 'bcd321', 'manila', 'cebu', '11/04/2017', '1400', '1500', '1hr', '1500', 50);

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
(87, '9b859a87bf308fb32cb6', '12bb4fa2b7c7ee511fcc', 'Brian', 'Sy', 'MAY/27/1994', 'Guadalupe Cebu City Cebu Philippines', 'Filipino', 'brianmadmaxsy@gmail.com', '12345678901', '15kg', 'A1', 'roundtrip', 'cebu', 'manila', '11/01/2017', 'abc234', '1600', '1700', '2000', 'Payed'),
(88, 'f1b55f03cab2c8a0bc24', '12bb4fa2b7c7ee511fcc', 'Brian', 'Sy', 'MAY/27/1994', 'Guadalupe Cebu City Cebu Philippines', 'Filipino', 'brianmadmaxsy@gmail.com', '12345678901', '15kg', 'A2', 'roundtrip', 'manila', 'cebu', '11/04/2017', 'bcd432', '1300', '1400', '1450', 'Payed'),
(89, 'ef0c36ec7ce7c3def046', '12bb4fa2b7c7ee511fcc', 'Jeffrey', 'Ang', 'JULY/28/1994', 'Lahug Cebu City Cebu Philippines', 'Filipino', 'jeffreyang@gmail.com', '09223456789', '20kg', 'B1', 'roundtrip', 'cebu', 'manila', '11/01/2017', 'abc234', '1600', '1700', '2000', 'Payed'),
(90, 'f4ecd4587659eb1e9fff', '12bb4fa2b7c7ee511fcc', 'Jeffrey', 'Ang', 'JULY/28/1994', 'Lahug Cebu City Cebu Philippines', 'Filipino', 'jeffreyang@gmail.com', '09223456789', '20kg', 'B2', 'roundtrip', 'manila', 'cebu', '11/04/2017', 'bcd432', '1300', '1400', '1450', 'Payed'),
(91, '1a3e81b2186b39bdcab7', '48910a3fda0ea30e5c55', 'Juan', 'Dela Cruz', 'JANUARY/01/1994', 'Cebu City Cebu Philippines', 'Filipino', 'juandelacruz@mail.com', '12345678901', '15kg', 'F3', 'oneway', 'manila', 'cebu', '11/02/2017', 'bcd678', '0900', '1000', '1550', 'Payed'),
(92, 'd410a33144ce7f00d08e', '48910a3fda0ea30e5c55', 'Pedro', 'Dela Cruz', 'JANUARY/02/1994', 'Cebu City Cebu Philippines', 'Filipino', 'pedrodelacruz@mail.com', '12345678901', '20kg', 'J1', 'oneway', 'manila', 'cebu', '11/02/2017', 'bcd678', '0900', '1000', '1550', 'Payed'),
(93, '27da466f91d1b34ff7fc', 'ec04ed4299fffffefcea', 'Andy', 'Go', 'FEBRUARY/07/1994', 'Guadalajara Cebu City Cebu Philippines', 'Filipino', 'andygo@mail.com', '12345678901', '15kg', 'A1', 'roundtrip', 'cebu', 'manila', '11/02/2017', 'abc890', '1300', '1400', '1650', 'Payed'),
(94, '6b9abda756a24501800f', 'ec04ed4299fffffefcea', 'Andy', 'Go', 'FEBRUARY/07/1994', 'Guadalajara Cebu City Cebu Philippines', 'Filipino', 'andygo@mail.com', '12345678901', '15kg', 'A2', 'roundtrip', 'manila', 'cebu', '11/03/2017', 'bcd987', '1100', '1200', '1850', 'Payed'),
(95, 'a6dfc9ced2a5efc052f6', 'ec04ed4299fffffefcea', 'Gerry', 'Malalin', 'MARCH/06/1992', 'Labangon Cebu City Cebu Philippines', 'Filipino', 'gerry_malalin@mail.com', '12345678901', '20kg', 'B1', 'roundtrip', 'cebu', 'manila', '11/02/2017', 'abc890', '1300', '1400', '1650', 'Payed'),
(96, '13f81bcb66d34240b200', 'ec04ed4299fffffefcea', 'Gerry', 'Malalin', 'MARCH/06/1992', 'Labangon Cebu City Cebu Philippines', 'Filipino', 'gerry_malalin@mail.com', '12345678901', '20kg', 'B2', 'roundtrip', 'manila', 'cebu', '11/03/2017', 'bcd987', '1100', '1200', '1850', 'Payed'),
(97, 'd97095e425da2aca8fb8', 'ec04ed4299fffffefcea', 'John', 'Doe', 'APRIL/08/1994', 'Minglanilla Cebu Philippines', 'Filipino', 'johndoe@mail.com', '1234567890', '25kg', 'C1', 'roundtrip', 'cebu', 'manila', '11/02/2017', 'abc890', '1300', '1400', '1650', 'Payed'),
(98, '0a51fa8303583391965e', 'ec04ed4299fffffefcea', 'John', 'Doe', 'APRIL/08/1994', 'Minglanilla Cebu Philippines', 'Filipino', 'johndoe@mail.com', '1234567890', '25kg', 'C2', 'roundtrip', 'manila', 'cebu', '11/03/2017', 'bcd987', '1100', '1200', '1850', 'Payed');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
