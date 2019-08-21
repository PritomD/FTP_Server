-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 01:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

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
(1, 'Hazrat Shajalal International Airport ', 'Agra, Kheria Airport, AGR, India', '2019-08-21', '2019-09-01', 60, '1.00 am', 3000),
(2, 'Singapore, Singapore Changi International Airport, SIN, Singapore', 'Kathmandu, Tribhuvan International Airport, KTM, Nepal', '08/23/2019', '08/28/2019', 50, '10 pm', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flightinfo`
--
ALTER TABLE `flightinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flightinfo`
--
ALTER TABLE `flightinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
