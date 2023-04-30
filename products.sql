-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:41 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `ProductName` text NOT NULL COMMENT 'ชื่อสินค้า',
  `Picture` text NOT NULL COMMENT 'รูปภาพสินค้า',
  `Category` text NOT NULL COMMENT 'ประเภทสินค้า',
  `ProductDescription` text NOT NULL COMMENT 'รายละเอียดสินค้า',
  `Price` int(4) NOT NULL COMMENT 'ราคาสินค้า',
  `QuantityStock` int(3) NOT NULL COMMENT 'จำนวนสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Picture`, `Category`, `ProductDescription`, `Price`, `QuantityStock`) VALUES
(1, 'LIFX', 'https://www.muzzley.com/uploads/devices/main_56001ea6215708f9755113ed.png', 'Lighting', 'The brightest, most efficient Wi-Fi LED light bulb.', 150, 48),
(2, 'Amazon Echo', 'https://www.muzzley.com/uploads/devices/main_56f44bc87570537d86229100.png', 'Voice', 'Use your voice to control your Muzzley devices.', 151, 102),
(3, 'Nest Learning Thermostat®', 'https://www.muzzley.com/uploads/devices/main_56001d0b215708f9755113e4.jpg', 'Thermostats', 'Set the perfect temperature and save money while you\'re away.', 152, 77),
(4, 'Nest Protect: Smoke + Carbon Monoxident', 'https://www.muzzley.com/uploads/devices/main_56097e0b6cab5e733821638e.jpg', 'Detectors & Sensors', 'It speaks up to tell you if there\'s smoke or CO and tells you where the problem is so you know what to do.', 168, 145),
(5, 'ecobee3', 'https://www.muzzley.com/uploads/devices/main_5605eade6cab5e733821637b.png', 'Thermostats', 'ecobee3 is an Apple HomeKit enabled smart thermostat with wireless remote sensors.', 169, 80),
(11, 'Router DVB4224GL', 'https://res.cloudinary.com/cenergy-innovation-limited-head-office/image/fetch/c_scale,q_70,f_auto,h_740/https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/0/0/000263559_dvb4224gl.jpg', 'Router', 'CPU: MT7621A MIPS dual-core 880MHz, ROM16/RAM128MB', 784, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
