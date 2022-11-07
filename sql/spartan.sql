-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 12:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spartan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'adminspartan', 'c008d101ce6e8c097ae23c8b3b2573da', 'Admin Spartan');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `fullname`, `image`, `ktp`, `date`, `status`) VALUES
(1, 'password2', 'e120ea280aa50693d5568d0071456460', 'adwityo', '2.JPG', 'IMG_0522.JPG', '2021-11-18', '0'),
(3, 'password5', 'e120ea280aa50693d5568d0071456460', 'adwito', 'Capture.PNG', 'Diet(2300).png', '2021-12-02', '0'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Muhammad Rauf Abiyyunanda (1).png', '', '2022-01-17', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(3) NOT NULL,
  `order_id` varchar(5) NOT NULL,
  `name` varchar(26) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `quantity_bcaa` varchar(2) NOT NULL,
  `quantity_wp` varchar(2) NOT NULL,
  `quantity_amino` varchar(2) NOT NULL,
  `quantity_pw` varchar(2) NOT NULL,
  `status` varchar(1) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `order_id`, `name`, `phone`, `address`, `quantity_bcaa`, `quantity_wp`, `quantity_amino`, `quantity_pw`, `status`, `date`, `payment`) VALUES
(2, '0', 'Adwityo Bhagaskara', '083813709538', 'Jln. Jambore Raya No.42', '0', '0', '2', '2', '0', '2021-12-02', 'Screenshot (1).png'),
(4, '0', 'Adwityo', '1231231231231', 'JlnJln', '2', '2', '2', '2', '0', '2021-12-02', 'Screenshot (2).png'),
(17, 'ClCpN', 'aaa', '1111111111111', 'aaa', '1', '', '', '', '0', '2022-01-17', 'Muhammad Rauf Abiyyunanda (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `nama` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
