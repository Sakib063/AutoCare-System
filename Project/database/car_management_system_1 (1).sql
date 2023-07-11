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
-- Database: `car_management_system_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `title` varchar(111) NOT NULL,
  `price` int(100) NOT NULL,
  `owner_phone` varchar(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`title`, `price`, `owner_phone`, `vendor_id`, `customer_name`) VALUES
('Brake Pads', 500, '1611345678', 3, 'A'),
('Windshield wipers', 300, '1612349679', 2, 'B'),
('Seat covers', 400, '1612345778', 1, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` int(255) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `description`, `title`, `category`, `price`, `vendor_id`) VALUES
(31, 'IMG-6320e6f7777904.26231950.jpg', 'anything', 'new', '1', 0, 0),
(35, 'IMG-6320f817364fd8.97161934.jpg', 'HELPS TO KEEP YOUR CAR CLEAN', 'Mobil', '1', 0, 0),
(36, 'IMG-6320f844064f00.95045152.jpg', 'HELPS TO KEEP YOUR CAR CLEAN', 'Mobil', '1', 0, 0),
(39, 'IMG-6320fa36b95f91.34283596.jpg', 'HELPS TO KEEP YOUR CAR CLEAN', 'Mobil', '1', 100000, 0),
(40, 'IMG-6321033cc11ec7.60561228.jpg', 'for toyota,original', 'brake pads', '4', 1500, 0),
(41, 'IMG-63245b6f2b05b0.02387753.jpg', 'toyota spark plug', 'TOYOTA SPARK PLUG K16R-U11 4PCS COROLLA ALTIS 2008-2010 90080-91161 GENUINE', '4', 1300, 2),
(42, 'IMG-632463d704f969.96609222.jpg', 'high boiling point', ' MOBIL BRAKE FLUID - DOT 4', '5', 600, 2),
(43, 'IMG-63248fb81d9565.51037426.jpg', 'FCVGBHNJMK', 'ENGINE OIL', '1', 3000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `owners_info`
--

CREATE TABLE `owners_info` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `owner_phone_number` varchar(11) NOT NULL,
  `owner_adress` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `v_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners_info`
--

INSERT INTO `owners_info` (`owner_id`, `owner_name`, `owner_phone_number`, `owner_adress`, `password`, `v_id`) VALUES
(1, 'Musarrat Zeba', '01999999999', 'Mirpur 13', '12345', NULL),
(2, 'Saadman Sakib', '01888888888', 'Mirpur 1', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `brand` varchar(11) NOT NULL,
  `cyear` int(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `mil` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`brand`, `cyear`, `model`, `mil`, `owner_id`) VALUES
('1', 1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `model` varchar(100) NOT NULL,
  `milage` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `brake` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`model`, `milage`, `owner_id`, `brake`) VALUES
('[value-2]', 0, 0, 2);

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
  `vendor_shop_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`vendor_id`, `vendor_name`, `vendor_phone_number`, `vendor_address`, `password`, `vendor_shop_name`) VALUES
(1, 'Ali', '01555555555', 'Mirpur 10', '123', 'Ali car wash and servicing'),
(2, 'Tom', '01555555555', 'Mirpur 10', '1234', 'Top Gear Auto Service BD Ltd'),
(3, 'Sami', '01888888888', 'Mirpur 2', '1234', 'SNM Auto Service BD Ltd\n'),
(4, 'Rodoshi', '01333333333', 'Dhanmondi 10/A', '12345', 'A1 Automobiles\n'),
(7, '', '', '', '111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners_info`
--
ALTER TABLE `owners_info`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `owners_info`
--
ALTER TABLE `owners_info`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
