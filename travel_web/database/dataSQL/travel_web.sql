-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2026 at 10:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_accounts`
--

CREATE TABLE `tb_accounts` (
  `id` varchar(10) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_accounts`
--

INSERT INTO `tb_accounts` (`id`, `username`, `password`, `fullname`, `phone`, `role`) VALUES
('A_1234', 'admin', '654321', 'Lê Hưng', '0795', 1),
('B_3509', 'thuydepgai', '123456', 'Nguyễn Thanh Thúy', '0935', 0),
('H_8318', 'hungdz', '456789', '', '', 0),
('V_1442', 'kha', '44444', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bookings`
--

CREATE TABLE `tb_bookings` (
  `id` varchar(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `tour_id` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `people` varchar(11) NOT NULL,
  `total_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_categaries`
--

CREATE TABLE `tb_categaries` (
  `id` varchar(11) NOT NULL,
  `tour_id` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_images`
--

CREATE TABLE `tb_images` (
  `id` varchar(11) NOT NULL,
  `tour_id` varchar(11) NOT NULL,
  `image_url` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_payments`
--

CREATE TABLE `tb_payments` (
  `id` varchar(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `method` varchar(11) NOT NULL,
  `amount` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reviews`
--

CREATE TABLE `tb_reviews` (
  `ib` varchar(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `tour_id` varchar(11) NOT NULL,
  `rating` varchar(11) NOT NULL,
  `comment` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tours`
--

CREATE TABLE `tb_tours` (
  `ib` varchar(11) NOT NULL,
  `tour_id` varchar(11) NOT NULL,
  `nametour` varchar(250) NOT NULL,
  `location` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `duration` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_tours`
--

INSERT INTO `tb_tours` (`ib`, `tour_id`, `nametour`, `location`, `image`, `description`, `price`, `duration`) VALUES
('A_1234', 'NN_1234', 'Nui vung chua', 'Quy Nhon', 'tour1.jpg', 'Nui dep', '10000', '1 ngay'),
('B_1234', 'BB_1234', 'Be Dao', 'Quy Nhon', 'hung.jpg', '0795316753', '10000 $', '1 đêm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_accounts`
--
ALTER TABLE `tb_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tours`
--
ALTER TABLE `tb_tours`
  ADD PRIMARY KEY (`ib`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
