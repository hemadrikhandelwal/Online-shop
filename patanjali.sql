-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 10:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patanjali`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Food Products'),
(2, 'Personal Care'),
(3, 'Home Care'),
(4, 'Health Care'),
(5, 'Medicine'),
(6, 'Grocery'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_cat` int(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `product_dim` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keys` text NOT NULL,
  `product_views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_cat`, `product_qty`, `product_dim`, `product_price`, `product_image`, `product_desc`, `product_keys`, `product_views`) VALUES
(1, 'Marie Biscuit', 1, 75, 'gm', 10, 'Patanjali-Marie-biscuit_120-gm.15.png', 'Patanjali Marie Biscuit are made of wheat flour and are best in taste. ', 'biscuit, marie, wheat, snack, 10', 2),
(2, 'Pure Honey', 4, 250, 'gm', 70, '114244_12O7J_p.jpg', 'This is a pure honey by patanjali.', 'honey, pure, healthy, 70', 1),
(3, 'Kesh Kanti Reetha Hair Cleanser', 2, 200, 'gm', 85, 'patanjali-kesh-kanti-reetha-200ml.jpg', 'Kesh Kanti Reetha Hair cleanser is best cleanser for your hair.', 'Kesh Kanti Reetha Hair cleanser ', 12),
(4, 'Atta Noodles', 1, 70, 'gm', 15, 'noodles-500x539.JPG', 'Patanjali Atta noodles which is fibrous and free of lead. good for health and best in taste.', 'wheat, atta, noodle, sevaiya, leadfree', 8),
(5, 'Elaichi Soan Papdi', 1, 500, 'gm', 105, 'Patanjali-Navratan-Elaichi-Soan-Papdi_250-gm.8.png', 'Elaichi Soan Papdi', 'Elaichi Soan Papdi sweet', 11),
(6, 'Haldi Chandan Soap', 2, 150, 'gm', 25, 'Patanjali-haldi-chandan-body-cleaner_75-gm.5.png', 'Haldi chandan soap ', 'Haldi chandan soap body cleanser turmeric', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cats`
--

CREATE TABLE `sub_cats` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_title` varchar(255) NOT NULL,
  `sub_cat_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cats`
--

INSERT INTO `sub_cats` (`sub_cat_id`, `sub_cat_title`, `sub_cat_parent`) VALUES
(1, 'Biscuits', 1),
(2, 'Soaps', 2),
(3, 'ToothBrush', 2),
(4, 'Spices', 6),
(5, 'Agarbatti', 3),
(6, 'Hair Oil', 2),
(7, 'Noodles', 1),
(8, 'Ghee', 6),
(9, 'Pulses', 6),
(10, 'Vati', 5),
(11, 'Chyawanprash', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_cats`
--
ALTER TABLE `sub_cats`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sub_cats`
--
ALTER TABLE `sub_cats`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
