-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 01:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bravo_wine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'bolajiakeem@yahoo.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `website` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `terms` varchar(10) NOT NULL,
  `newsletter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `password`, `name`, `phone`, `street`, `city`, `country`, `website`, `gender`, `day`, `month`, `year`, `nationality`, `adult`, `terms`, `newsletter`) VALUES
(6, 'root@root.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Akeem Lanre', '08139569356', 'Sweden', 'Tokyo', 'Germany', 'website', 'gender', 13, 'March', 2001, 'German', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `selling_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `customer`, `customer_email`, `selling_price`, `quantity`, `order_date`) VALUES
(1, 'Emel High Technology Industrial Taping Sewing Mach', '', 'root@root.com', 375000, 0, '2022-12-02'),
(2, 'Emel High Technology Industrial Taping Sewing Mach', '', 'root@root.com', 375000, 0, '2022-12-02'),
(3, 'Laptop System', '', 'root@root.com', 2000.4, 0, '2022-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `label` varchar(200) NOT NULL,
  `order_date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `cost_price`, `selling_price`, `quantity`, `label`, `order_date`, `description`) VALUES
(1, 'Kettle', 12.9, 13.9, 12, 'Very Good', '0000-00-00', 'Very good'),
(2, 'Laptop System', 1200.3, 2000.4, 30, 'Very Good', '0000-00-00', 'High Speed, low noise, small start-up moment; beautiful apprearance,simple and easy operation; steady, nice and ideal lines,convenient adjustment. It\'s applicable to whiptitch opertation of trousers, pyjamas,shirt and sportwear.'),
(3, 'Emel High Technology Industrial Taping Sewing Machine', 370000, 375000, 50, 'Very Good', '0000-00-00', 'Flatbed, interlock stitch machine with top cover thread for plain seaming, this versatile machine can be used for all kind of Special Machine machine by changing accessories, to meet different patten stitch in good quality. '),
(4, 'Seven Up', 2300, 2500, 10, 'Very Good', '0000-00-00', 'This is very good for your body');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
