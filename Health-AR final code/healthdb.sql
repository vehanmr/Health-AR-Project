-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 07:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `coachId` varchar(11) NOT NULL,
  `Cfname` varchar(100) NOT NULL,
  `Clname` varchar(100) NOT NULL,
  `Cdob` date NOT NULL,
  `Caddress` varchar(100) NOT NULL,
  `Ccontact` varchar(10) NOT NULL,
  `Cemail` varchar(50) NOT NULL,
  `Cpassword` varchar(100) NOT NULL,
  `Cfield` varchar(100) NOT NULL,
  `Cexperience` varchar(250) NOT NULL,
  `Cpexperience` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`coachId`, `Cfname`, `Clname`, `Cdob`, `Caddress`, `Ccontact`, `Cemail`, `Cpassword`, `Cfield`, `Cexperience`, `Cpexperience`) VALUES
('251', 'vehan', 'Rathnayake', '0000-00-00', 'test1', '027895623', 'vehan251@healthar.com', '1234', 'test5', '5', 'test5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'ranidume@admin.com', '1234', 'admin'),
(2, 'Kaveen', '1234', 'player'),
(3, 'vehan', '1234', 'coach'),
(13, 'ranidume@yahoo.com', '1234', 'player'),
(14, 'vehan251@healthar.com', '1234', 'coach');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `playerId` varchar(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`playerId`, `fname`, `lname`, `dob`, `address`, `contact`, `email`, `password`, `height`, `weight`, `bloodgroup`) VALUES
('20', 'Ranidu', 'Vishwa', '1998-07-26', 'No 1 Mampitiya Handessa', '0760927434', 'ranidume@yahoo.com', '1234', '142', '65', 'AB+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`coachId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`playerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
