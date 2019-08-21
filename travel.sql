-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 12:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(100) NOT NULL,
  `tripType` varchar(100) NOT NULL,
  `flightFrom` varchar(100) NOT NULL,
  `flightTo` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `ret` varchar(100) NOT NULL,
  `adult` int(100) NOT NULL,
  `children` int(100) NOT NULL,
  `travelClass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flightinfo`
--

CREATE TABLE `flightinfo` (
  `id` int(100) NOT NULL,
  `flyingFrom` varchar(100) NOT NULL,
  `flyingTo` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `ret` varchar(100) NOT NULL,
  `seat` int(100) NOT NULL,
  `departureTime` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightinfo`
--

INSERT INTO `flightinfo` (`id`, `flyingFrom`, `flyingTo`, `dept`, `ret`, `seat`, `departureTime`, `price`) VALUES
(1, 'Hazrat Shajalal International Airport ', 'Agra, Kheria Airport, AGR, India', '08/21/2019', '09/01/2019', 60, '', 0),
(2, 'Singapore, Singapore Changi International Airport, SIN, Singapore', 'Kathmandu, Tribhuvan International Airport, KTM, Nepal', '08/23/2019', '08/28/2019', 50, '10 pm', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `usertype` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `cname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `licenseno` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `contactno` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `postalcode` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `usertype`, `cname`, `licenseno`, `contactno`, `city`, `address`, `postalcode`) VALUES
(1, 'saima', 'sharleen', 'saimasharleen0', 'saimasharleen0@gmail.com', 'hotelagent', 'yoyo', '13213543322343', '54243346', 'Dhaka', 'wefwqfewfwf', '1206'),
(2, 'saimaa', 'sang', 'saimasharleen0', 'shaheba@mail.com', 'b2bagent', 'jnj', '7887', '7777', 'Dhaka', '888', '1206'),
(3, 'saima', 'sharleen', 'superadmin', 'saima@gmail.com', 'b2bagent', 'knk', '1777', '898989', 'Dhaka', 'jkljl', '1206'),
(4, 'saima', 'sharleen', 'saima0', 'saimayoyo@gmail.com', 'b2bagent', 'klklk', '1234', '0182614864', 'Dhaka', 'kjkjkjk', '1206');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `usertype` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `password`, `usertype`) VALUES
(1, 'laravelbts@gmail.com', 'Btsexogot7**0', 'superadmin'),
(2, 'saimayoyo@gmail.com', '1234', 'b2bagent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightinfo`
--
ALTER TABLE `flightinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flightinfo`
--
ALTER TABLE `flightinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
