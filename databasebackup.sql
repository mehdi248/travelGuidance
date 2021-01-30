-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 28, 2021 at 08:44 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `travelGuidanceSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `carBooking`
--

CREATE TABLE `carBooking` (
  `bookingId` int(11) NOT NULL,
  `pickupLocation` varchar(200) NOT NULL,
  `dropLocation` varchar(200) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `entryDate` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `paymentStatus` enum('unpaid','paid') NOT NULL DEFAULT 'unpaid',
  `bookingStatus` enum('confirmed','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carBooking`
--

INSERT INTO `carBooking` (`bookingId`, `pickupLocation`, `dropLocation`, `startDate`, `endDate`, `entryDate`, `price`, `userId`, `paymentStatus`, `bookingStatus`) VALUES
(1, 'Brisbane Downtown5', 'Brisbane Hotel within city limits', '2021-01-28 00:00:00', '2021-02-06 00:00:00', '2021-01-28 07:01:12', 4320, 10, 'unpaid', 'pending'),
(2, 'Brisbane Hotel within city limits', 'Brisbane North City Office', '2021-01-28 12:33:00', '2021-02-01 18:39:00', '2021-01-28 07:05:15', 2040, 10, 'unpaid', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `hotelBooking`
--

CREATE TABLE `hotelBooking` (
  `bookingId` int(11) NOT NULL,
  `property` varchar(200) NOT NULL,
  `rooms` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `entryDate` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `paymentStatus` enum('unpaid','paid') NOT NULL DEFAULT 'unpaid',
  `bookingStatus` enum('confirmed','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelBooking`
--

INSERT INTO `hotelBooking` (`bookingId`, `property`, `rooms`, `adults`, `children`, `startDate`, `endDate`, `entryDate`, `price`, `userId`, `paymentStatus`, `bookingStatus`) VALUES
(1, 'Q1 Resort & Spa - Official', 3, 1, 0, '2021-01-28', '2021-01-30', '2021-01-27 19:12:05', 600, 10, 'unpaid', 'pending'),
(2, 'Sofitel Sydney Darling Harbour', 3, 3, 2, '2021-01-30', '2021-02-03', '2021-01-27 19:49:20', 1200, 10, 'unpaid', 'pending'),
(3, 'Hilton Surfers Paradise Hotel & Residences', 1, 1, 0, '2021-01-30', '2021-02-06', '2021-01-27 20:03:17', 700, 10, 'unpaid', 'pending'),
(4, 'Sofitel Sydney Darling Harbour', 4, 4, 3, '2021-01-28', '2021-01-29', '2021-01-27 20:07:51', 400, 10, 'unpaid', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `queryId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `query` text NOT NULL,
  `entryDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryId`, `email`, `subject`, `query`, `entryDate`) VALUES
(38, 'mehdirazatesting@gmail.com', 'Testing Mail', 'Hi, \r\nI am testing my query box mail. \r\nIt should be send to my admin email id that I have put in my code i.e. for now travelguidancesystem@gmail.com\r\n\r\nLater we will update this email id in code by the email id of client.\r\n\r\nSo now this query should be received by admin. ', '2021-01-02 16:07:42'),
(39, 'mehdirazatesting@gmail.com ', 'Lets test one more time', 'Last mail was received on admin mail id and the message have been saved to our database too. \r\nNew message from portal to admin let check it again ', '2021-01-02 16:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `mobileNumber`, `password`) VALUES
(6, 'James', 'james@yopmail.com', '19842292922', '123456'),
(7, 'james', 'james1@gmail.com', '194224438444', '123455'),
(9, 'James 2', 'james2@yopmail.com', '1297868768', '123456'),
(10, 'james2@gmail.com', 'james2@gmail.com', 'e33333', '3333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carBooking`
--
ALTER TABLE `carBooking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `hotelBooking`
--
ALTER TABLE `hotelBooking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`queryId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carBooking`
--
ALTER TABLE `carBooking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotelBooking`
--
ALTER TABLE `hotelBooking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `queryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
