-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 11:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `SellerId` int(100) NOT NULL,
  `InsertPermission` varchar(100) NOT NULL,
  `SellerAccStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`SellerId`, `InsertPermission`, `SellerAccStatus`) VALUES
(1, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Buyid` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `cart` int(50) NOT NULL,
  `orders` int(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Buyid`, `pid`, `uid`, `quantity`, `cart`, `orders`, `amount`) VALUES
(38, 27, 2, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `PSize` varchar(100) NOT NULL,
  `PDetails` varchar(100) NOT NULL,
  `PColor` varchar(100) NOT NULL,
  `Poffer` varchar(100) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `SellerId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `quantity`, `amount`, `PSize`, `PDetails`, `PColor`, `Poffer`, `Product`, `SellerId`) VALUES
(2, 'p2.jpg', 30, 899, ' 22, 26, 30', 'Running Shoes For Men', 'Red', '72% off', 'VERTIGO', 1),
(3, 'p3.jpg', 30, 3, ' 22, 26, 30', 'Check-in Luggage - 30 inch', 'Green', '72% off', 'Safari Mosaic', 1),
(4, 'p4.jpeg', 30, 507, ' 22, 26, 30', 'Printed Women Kurta', 'Red', '72% off', 'Rang Nitya ', 1),
(5, 'p4.jpeg', 30, 355, '35,55', 'p4.jpeg', 'p4.jpeg', 'p4.jpeg', 'p4.jpeg', 1),
(25, 'Untitled.png', 32, 6316, '4152', 'fhv', 'cg', '', 'xfx', 1),
(26, 'Untitled.png', 0, 0, 'dy', 'fuy', 'dfu', '', 'srsr', 1),
(27, 'Untitled.png', 0, 0, 'hgz', 'hgz', 'hgz', '', 'hgz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selerinfo`
--

CREATE TABLE `selerinfo` (
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selerinfo`
--

INSERT INTO `selerinfo` (`Name`, `Phone`, `email`, `pw`, `id`) VALUES
('GC', '985346', 'GGG@GG.vpm', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `email` varchar(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `uname`, `phone`, `uid`, `psw`) VALUES
('gcb@gmail.com', 'gurucharan', '952223604', 2, '123456'),
('gurucharan@agridoc.co.in', 'gurucharan', '9532223604', 3, 'gurucharan'),
('sdfg@gmail.co m', 'sdfghj', '666', 1, 'dfghj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD KEY `SallerId` (`SellerId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Buyid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SellerId` (`SellerId`);

--
-- Indexes for table `selerinfo`
--
ALTER TABLE `selerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `uid_2` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Buyid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `selerinfo`
--
ALTER TABLE `selerinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD CONSTRAINT `SellerId` FOREIGN KEY (`SellerId`) REFERENCES `selerinfo` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `userinfo` (`uid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SellerId`) REFERENCES `selerinfo` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`SellerId`) REFERENCES `selerinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
