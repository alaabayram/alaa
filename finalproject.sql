-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 12:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'alaa', 'alaa@gmail.com', 'test', '2023-06-01 18:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `flavor` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `categories` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `image`, `name`, `flavor`, `size`, `price`, `categories`, `date`) VALUES
(2, 'images/cake5.jpg', 'pink cake', 'strawberry & vanilla', 'medium', 40, 'birthday', '2023-06-12 19:46:10'),
(3, 'images/cake3.jpeg', 'cocoa', 'chocolate', 'small', 20, 'birthday', '2023-06-12 19:46:20'),
(4, 'images/cake23.jpg', 'Gold Sparkle', 'vanilla', 'XL', 100, 'wedding', '2023-06-12 19:46:29'),
(13, 'images/cake10.jpg', 'blue cake', 'vanilla', 'medium', 45, 'birthday', '2023-06-13 05:11:22'),
(15, 'images/cake1.jpg', 'blue cake', 'chocolate', 'medium', 50, 'birthday', '2023-06-25 07:15:38'),
(16, 'images/cake4.jpg', 'Heavenly Layers', 'vanilla & strawberry', 'XXL', 150, 'wedding', '2023-06-25 11:16:52'),
(17, 'images/cake8.jpg', 'Macaron ', 'strawberry & coconuts', '20 pcs', 30, 'cupcake', '2023-06-25 11:32:57'),
(18, 'images/cake9.jpg', 'mini balls', 'chocolate', '20 pcs', 20, 'cupcake', '2023-06-25 11:46:21'),
(20, 'images/cake2.jpg', 'Joyful Treats', 'berry & vanilla', 'medium', 45, 'birthday', '2023-06-25 19:42:36'),
(21, 'images/cake12.jpg', 'unicorn', 'chocolate & vanilla', 'L', 60, 'birthday', '2023-06-25 19:44:06'),
(22, 'images/cake25.jpg', 'tropicane', 'coconut & vanilla', 'XL', 110, 'wedding', '2023-06-25 19:46:37'),
(23, 'images/cake14.jpg', 'crystal blue', 'vanilla & chocolate', 'XXL', 200, 'wedding', '2023-06-25 19:48:21'),
(24, 'images/cake6.jpg', 'gateau au sucette', 'strawberry & vanilla', '20 pcs', 20, 'cupcake', '2023-06-25 19:50:00'),
(25, 'images/cake42.jpg', 'bee cake', 'honey', '2 pcs', 1567, 'cupcake', '2023-06-26 18:33:49'),
(26, 'images/cake40.jpg', 'Strawberry Bliss', 'strawberry', '2 pcs', 5, 'cupcake', '2023-06-25 19:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `position`) VALUES
(8, 'alaa', 'alaa@gmail.com', '$2y$10$NDzrH7I26gbCycvjk8OvGuRAAmBx7sy7Er/OrZtBc9EwLJLzRiuCq', '2023-06-12 15:12:27', 1),
(9, 'ali', 'ali@gmail.com', '$2y$10$ErcBCKP1dyS6lUCNrxIkeujGCh.uoZ67ZVpoe5YsxHQHp7Xj5uHRG', '2023-06-26 15:34:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
