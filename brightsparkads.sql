-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2024 at 05:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightsparkads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `adminEmail` varchar(255) NOT NULL,
  `adminPWd` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`adminEmail`, `adminPWd`) VALUES
('abigunhettiarachchi@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `advertise_details`
--

CREATE TABLE `advertise_details` (
  `advertiseName` varchar(255) DEFAULT NULL,
  `selectpublisher` varchar(255) DEFAULT NULL,
  `adcontent` varchar(255) DEFAULT NULL,
  `Budget` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertise_details`
--

INSERT INTO `advertise_details` (`advertiseName`, `selectpublisher`, `adcontent`, `Budget`) VALUES
('bigun', 'Publisher3', 'sdsads', 22);

-- --------------------------------------------------------

--
-- Table structure for table `ad_manegement`
--

CREATE TABLE `ad_manegement` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_manegement`
--

INSERT INTO `ad_manegement` (`ad_id`, `title`, `message`, `start_date`, `end_date`) VALUES
(10, 'ad1 iitladf', 'fafa dickkkakakaa', '2024-10-05', '2024-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_details` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `contract_fee` decimal(20,0) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_name`, `contract_details`, `start_date`, `end_date`, `contract_fee`, `customer_name`, `customer_email`, `customer_mobile`) VALUES
(1, 'final contract', 'as', '2024-10-09', '2024-11-01', 22, 'dsf', 'asd@d.com', '0778777138');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`name`, `email`, `mobile`, `message`) VALUES
('Bigun Avishka Hettiarachchi', 'aaabadsf@gmail.com', 778777138, 'www'),
('Bigun Avishka', 'abigunhettiarachchi@gmail.com', 778777138, 'ajl;aasaaasfasfasfs'),
('Bigun Avishka Hettiarachchi', 'b@gmail.com', 778777138, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `ID`, `gender`, `mobile`, `email`, `DOB`, `role`, `psw`) VALUES
('tim', 'baraakakjfasd3443', 2, 'Female', 778777138, 'timmma@gmail.com', '2024-10-03', 'Publisher', 'AAA123@x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`adminEmail`);

--
-- Indexes for table `ad_manegement`
--
ALTER TABLE `ad_manegement`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_manegement`
--
ALTER TABLE `ad_manegement`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
