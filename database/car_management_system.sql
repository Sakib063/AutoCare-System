-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 12:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `title` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `date` date DEFAULT current_timestamp(),
  `address` varchar(100) NOT NULL,
  `garage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cservice`
--

INSERT INTO `cservice` (`owner_phone`, `vphone`, `title`, `service_id`, `vendor_id`, `owner_id`, `status`, `date`, `address`, `garage`) VALUES
('01234567891', '0190000000', 'Change Car Battery', 34, 3, 4, 'done', '2023-04-30', 'test user address', ''),
('01522222222', '01522222222', 'Car Wash', 35, 3, 2, 'pending', '2023-07-19', 'Mirpur 1', 'Sami bhai garage');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `title` varchar(111) NOT NULL,
  `price` int(100) NOT NULL,
  `owner_phone` varchar(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`title`, `price`, `owner_phone`, `vendor_id`, `customer_name`, `order_id`, `owner_id`, `status`) VALUES
('Brake Pads', 500, '1611345678', 3, 'Saadman', 1, 2, 'done'),
('Windshield wipers', 300, '1612349679', 2, 'Saadman', 2, 2, 'pending'),
('Seat covers', 400, '1612345778', 1, 'Saadman', 3, 2, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `g_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`g_id`, `name`, `address`, `phone`, `email`, `vendor_id`) VALUES
(4, 'Ali Enterprize', 'Dhaka', '01522222222', 'test@test.com', 1),
(5, 'Tom Garage', 'Dhaka', '01700000000', 'test@email.com', 2),
(6, 'sami garage', 'Dhanmondi', '0190000000', 'sami@email.com', 3),
(7, 'sami garage 2', 'DMD', '011000000', 'sami@email.com', 3),
(8, 'test', 'test', '000000000', 'test@test.com', 9),
(9, 'Sami bhai garage', 'DMD', '01522222222', 'sami@sami.com', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `owner_address` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `owner_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners_info`
--

INSERT INTO `owners_info` (`owner_id`, `owner_name`, `owner_phone_number`, `owner_address`, `password`, `owner_email`) VALUES
(1, 'Zeba Apa', '01999999999', 'Mirpur 13', '12345', 'zeba@email.com'),
(2, 'Saadman', '01522222222', 'Mirpur 1', '1234', 'sakib@email.com'),
(4, 'test user name', '01234567891', 'test user address', '1234', 'testusername@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `v_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `milage` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `cyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`v_id`, `model`, `milage`, `owner_id`, `brand`, `cyear`) VALUES
(4, 'Agurao', 18000, 2, 'Lamborgini', 2010),
(9, 'Corolla', 15000, 1, 'Toyota', 2008),
(10, 'test', 18000, 4, 'test car', 2010),
(11, 'Supro', 1000, 2, 'Toyota', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_phone_number` varchar(11) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`vendor_id`, `vendor_name`, `vendor_phone_number`, `vendor_email`, `password`) VALUES
(1, 'Ali', '01555555555', 'ali@gmail.com', '1234'),
(2, 'Tom', '01555555555', 'tom@email.com', '1234'),
(3, 'Sami', '01888888888', 'sami@email.com', '1234'),
(4, 'Rodoshi', '01333333333', 'r@email.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cservice`
--
ALTER TABLE `cservice`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_owner` (`owner_id`),
  ADD KEY `fk_vendor` (`vendor_id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `owners_info`
--
ALTER TABLE `owners_info`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cservice`
--
ALTER TABLE `cservice`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owners_info`
--
ALTER TABLE `owners_info`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`owner_id`) REFERENCES `owners_info` (`owner_id`),
  ADD CONSTRAINT `fk_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_info` (`vendor_id`);

--
-- Constraints for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD CONSTRAINT `vehicle_info_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owners_info` (`owner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
