-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 04:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `afrin`
--

CREATE TABLE `afrin` (
  `Serial_No` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `DepartureFrom` varchar(255) NOT NULL,
  `DepartureTo` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `DateOfJourney` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'afrin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `add` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `phone`, `add`, `email`, `pass`) VALUES
('abuhanifnumani', 123, 'asas', 'mominabegum48@gmail.com', '123'),
('abuhanifnumani', 1234, 'asasge', 'mominabegum3348@gmail.com', '1234'),
('afrin apu', 12345, 'asdsfewa', 'a@c.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `trainschedule`
--

CREATE TABLE `trainschedule` (
  `Serial_No` int(11) NOT NULL,
  `Train No` int(11) NOT NULL,
  `Train Name` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Depart Time` varchar(255) NOT NULL,
  `Arrival` varchar(255) NOT NULL,
  `Arrival Time` varchar(255) NOT NULL,
  `Off Day` varchar(255) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainschedule`
--

INSERT INTO `trainschedule` (`Serial_No`, `Train No`, `Train Name`, `Destination`, `Depart Time`, `Arrival`, `Arrival Time`, `Off Day`, `Status`) VALUES
(1, 701, 'Subarna Express', 'Chittagong', '06:40', 'Dhaka', '13:00', 'Friday', 'Good'),
(2, 701, 'Subarna Express', 'Chittagong', '06:40', 'Dhaka', '13:00', 'Friday', 'Good'),
(3, 702, 'Mohanagar Goduli', 'Chittagong', '15:00', 'Dhaka', '22:10\r\n', 'Tuesday', 'Good'),
(4, 703, '703', 'Dinajpur', '21:20', 'Dewangong', '12:55', 'Friday', 'Good'),
(5, 702, 'Mohanagar Goduli', 'Chittagong', '15:00', 'Dhaka', '22:10\r\n', 'Tuesday', 'Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afrin`
--
ALTER TABLE `afrin`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`phone`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `trainschedule`
--
ALTER TABLE `trainschedule`
  ADD PRIMARY KEY (`Serial_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afrin`
--
ALTER TABLE `afrin`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainschedule`
--
ALTER TABLE `trainschedule`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
