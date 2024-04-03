-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 05:47 AM
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
-- Database: `pos_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(250) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL,
  `description` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`) VALUES
(1, 'Food', 'for eats'),
(2, 'Fruit', 'For eat'),
(3, 'Drink', 'for drink'),
(4, 'baby care', 'Dolore recusandae E');

-- --------------------------------------------------------

--
-- Table structure for table `ispayment`
--

CREATE TABLE `ispayment` (
  `isPayment_id` int(250) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ispayment`
--

INSERT INTO `ispayment` (`isPayment_id`, `action`) VALUES
(45, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_image` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `quantity`, `price`, `category_id`, `user_id`, `item_image`) VALUES
(4, 'Orange', 50, 10, 1, 1, '006_360_F_442964980_AxUMpXXgPhRvxzts6C0ru5dMhN5BOTc0 - Copy.jpg'),
(5, 'Apple', 93, 439, 2, 1, '003_360_F_636126805_qf9wijhYve0f5SXxkHoQsGmy9ganKVMr.jpg'),
(6, 'Straberry', 12, 2, 2, 3, 'Packaged fresh fruit.jpg'),
(7, 'Vital', 24, 1, 3, 1, 'Vital.jpg'),
(8, 'Yoes', 24, 1, 3, 1, 'Yeos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderDetail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_detail_quantity` int(250) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderDetail_id`, `order_id`, `order_detail_quantity`, `item_id`) VALUES
(48, 50, 1, 4),
(50, 52, 6, 4),
(51, 53, 1, 4),
(52, 53, 1, 4),
(53, 54, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`) VALUES
(1, '2024-03-24'),
(2, '2024-03-24'),
(3, '2024-03-24'),
(4, '2024-03-25'),
(5, '2024-03-25'),
(6, '2024-03-26'),
(7, '2024-03-26'),
(8, '2024-03-26'),
(9, '2024-03-26'),
(10, '2024-03-26'),
(11, '2024-03-26'),
(12, '2024-03-26'),
(13, '2024-03-26'),
(14, '2024-03-26'),
(15, '2024-03-26'),
(16, '2024-03-26'),
(17, '2024-03-26'),
(18, '2024-03-27'),
(19, '2024-03-27'),
(20, '2024-03-27'),
(21, '2024-03-27'),
(22, '2024-03-27'),
(23, '2024-03-27'),
(24, '2024-03-27'),
(25, '2024-03-27'),
(26, '2024-03-27'),
(27, '2024-03-27'),
(28, '2024-03-27'),
(29, '2024-03-27'),
(30, '2024-03-27'),
(31, '2024-03-27'),
(32, '2024-03-27'),
(33, '2024-03-27'),
(34, '2024-03-27'),
(35, '2024-03-27'),
(36, '2024-03-27'),
(37, '2024-03-27'),
(38, '2024-03-27'),
(39, '2024-03-27'),
(40, '2024-03-27'),
(41, '2024-03-27'),
(42, '2024-03-27'),
(43, '2024-03-27'),
(44, '2024-03-27'),
(45, '2024-03-27'),
(46, '2024-03-27'),
(47, '2024-03-27'),
(48, '2024-03-27'),
(49, '2024-03-27'),
(50, '2024-03-27'),
(51, '2024-03-27'),
(52, '2024-03-27'),
(53, '2024-03-27'),
(54, '2024-03-27'),
(55, '2024-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `pay_ment`
--

CREATE TABLE `pay_ment` (
  `pay_id` int(250) NOT NULL,
  `pay_nam` varchar(550) NOT NULL,
  `pay_price` int(250) DEFAULT NULL,
  `pay_quantity` int(250) DEFAULT NULL,
  `pay_image` text DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay_ment`
--

INSERT INTO `pay_ment` (`pay_id`, `pay_nam`, `pay_price`, `pay_quantity`, `pay_image`, `item_id`) VALUES
(57, 'Pizza', 10, 1, 'Ice cream.jpg', 4),
(58, 'Straberry', 2, 1, 'Packaged fresh fruit.jpg', 6),
(59, 'Apple', 439, 1, '003_360_F_636126805_qf9wijhYve0f5SXxkHoQsGmy9ganKVMr.jpg', 5),
(60, 'Orange', 10, 1, '006_360_F_442964980_AxUMpXXgPhRvxzts6C0ru5dMhN5BOTc0 - Copy.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pre_order`
--

CREATE TABLE `pre_order` (
  `preOrder_id` int(250) NOT NULL,
  `preOrder_name` varchar(250) DEFAULT NULL,
  `preOrder_price` int(250) DEFAULT NULL,
  `preOrder_quantity` int(250) DEFAULT NULL,
  `preOrder_image` text DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` int(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `profile_image` varchar(550) DEFAULT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `phone`, `city`, `country`, `profile_image`, `role`) VALUES
(1, 'Bunnarith', '$2y$10$efQkIl9Q.z.wPxNGsdh4POiS.r//JMmZGEcCt7Rd3w8kgbaLqUMB6', 'bunnarith@gmail.com', 987652345, 'Batheay', 'Cambodia', '660ccb09cddfc.jpg', 'Admin'),
(2, 'Savorn', '$2y$10$kjQaNHxrMxWMdMhor9eurO7ijcetpoAhvBH54fllY1nyDvfFDwOsa', 'savorn@gmail.com', 986936150, 'Phnom Penh', 'Cambodia', '66004f4f1b1f8.jpg', 'Employee'),
(3, 'Vichhecka', '$2y$10$seWKMTww3oR0HtD/9g2ySeMLzqziFHybBeY2sdWAhKT/7GiimsQui', 'vicheka@gmail.com', 895498309, 'Phnom Penh', 'Cambodia', '660cc908aba7f.jpg', 'Employee'),
(4, 'Sanok Payang', 'S@nok!@2024', 'sanok@gamil.com', 4092345, 'Phnom penh', 'Cambodia', '66040cc87fbd2.jpg', 'Employee'),
(5, 'Vichheka Chhen ', '$2y$10$sT0I/hlcSyuNd/AylXOIIudabZhp/5b1uvlSZZU/dy9A8zIFbRTDK', 'vichheka@gmail.com', 23456, 'Phnom penh', 'Cambodia', '660411f504d08.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ispayment`
--
ALTER TABLE `ispayment`
  ADD PRIMARY KEY (`isPayment_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderDetail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pay_ment`
--
ALTER TABLE `pay_ment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `pre_order`
--
ALTER TABLE `pre_order`
  ADD PRIMARY KEY (`preOrder_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ispayment`
--
ALTER TABLE `ispayment`
  MODIFY `isPayment_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderDetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pay_ment`
--
ALTER TABLE `pay_ment`
  MODIFY `pay_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pre_order`
--
ALTER TABLE `pre_order`
  MODIFY `preOrder_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pay_ment`
--
ALTER TABLE `pay_ment`
  ADD CONSTRAINT `pay_ment_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
