-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cservice`
--

CREATE TABLE `cservice` (
  `owner_phone` varchar(100) DEFAULT NULL,
  `vphone` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cservice`
--

INSERT INTO `cservice` (`owner_phone`, `vphone`, `title`) VALUES
('01612345678', '01333333333', 'Spark Plug Change'),
('01612345678', '01333333333', 'Tire change'),
('01612345678', '01333333333', 'Tire change');

-- --------------------------------------------------------

--
-- Table structure for table `owners_info`
--

CREATE TABLE `owners_info` (
  `o_id` int(100) NOT NULL,
  `owner_name` varchar(100) DEFAULT NULL,
  `owner_address` varchar(100) DEFAULT NULL,
  `owner_email` varchar(100) DEFAULT NULL,
  `owner_phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners_info`
--

INSERT INTO `owners_info` (`o_id`, `owner_name`, `owner_address`, `owner_email`, `owner_phone`, `password`) VALUES
(2, 'Saadman', 'Mirpur-1', 'saadman@email.com', '01612345678', '1234'),
(3, 'Zeba', 'Mirpu-13', 'zeba@email.com', '01512345678', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cyear` varchar(100) NOT NULL,
  `mil` int(100) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `wash` tinyint(1) NOT NULL,
  `brake` tinyint(1) DEFAULT NULL,
  `engine` tinyint(1) DEFAULT NULL,
  `oil` tinyint(1) DEFAULT NULL,
  `tire` tinyint(1) NOT NULL,
  `wiper` tinyint(1) NOT NULL,
  `filter` tinyint(1) DEFAULT NULL,
  `wheel` tinyint(1) NOT NULL,
  `spark plug` tinyint(1) NOT NULL,
  `shock` tinyint(1) NOT NULL,
  `battery` tinyint(1) DEFAULT NULL,
  `ca_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`brand`, `model`, `cyear`, `mil`, `owner_id`, `wash`, `brake`, `engine`, `oil`, `tire`, `wiper`, `filter`, `wheel`, `spark plug`, `shock`, `battery`, `ca_id`) VALUES
('Toyota', 'Alion', '2000', 100, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('Toyota', 'Corrola ', '2000', 100, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
('Toyota', 'Silica', '1995', 1500, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_phone_number` varchar(11) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `password` varchar(16) DEFAULT NULL,
  `vendor_shop_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`vendor_id`, `vendor_name`, `vendor_phone_number`, `vendor_address`, `password`, `vendor_shop_name`) VALUES
(1, 'Ali ', '01555555555', 'Mirpur 10', '123', 'Ali car wash and servicing'),
(2, 'Kazi', '01555555555', 'Mirpur 10', '1234', 'Top Gear Auto Service BD Ltd'),
(3, 'Debopom', '01888888888', 'Mirpur 2', '1234', 'SNM Auto Service BD Ltd'),
(4, 'Sami Nayeem', '01333333333', 'Dhanmondi 10/A', '12345', 'A1 Automobiles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners_info`
--
ALTER TABLE `owners_info`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners_info`
--
ALTER TABLE `owners_info`
  MODIFY `o_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `ca_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
