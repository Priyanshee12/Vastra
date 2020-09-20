-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 08:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vastra`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(2) NOT NULL,
  `app_date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `category_id` int(2) NOT NULL,
  `time` time(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boutique`
--

CREATE TABLE `boutique` (
  `boutique_id` int(2) NOT NULL,
  `boutique_name` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_number` int(12) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `city_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique`
--

INSERT INTO `boutique` (`boutique_id`, `boutique_name`, `address`, `contact_number`, `email_id`, `city_id`) VALUES
(0, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `cart_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'upperware');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(2) NOT NULL,
  `city_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(2, 'jaipur'),
(3, 'baroda'),
(7, 'Surat'),
(8, 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(2) NOT NULL,
  `message` varchar(50) NOT NULL,
  `entry_date` date NOT NULL,
  `feedback_qty` int(5) NOT NULL,
  `user_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(2) NOT NULL,
  `order_date` date NOT NULL,
  `order_amount` int(20) NOT NULL,
  `discount` int(10) NOT NULL,
  `shipping_charges` int(20) NOT NULL,
  `tax_percentage` int(20) NOT NULL,
  `net_charges` int(20) NOT NULL,
  `user_id` int(2) NOT NULL,
  `tracking_id` int(5) NOT NULL,
  `tracker_name` varchar(15) NOT NULL,
  `payment_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `quantity` int(10) NOT NULL,
  `order_id` int(2) NOT NULL,
  `product_id` int(2) NOT NULL,
  `price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_return`
--

CREATE TABLE `order_return` (
  `order_r_id` int(2) NOT NULL,
  `date` date NOT NULL,
  `order_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_return_detail`
--

CREATE TABLE `order_return_detail` (
  `order_r_d_id` int(2) NOT NULL,
  `quantity` int(20) NOT NULL,
  `product_id` int(2) NOT NULL,
  `order_r_id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(2) NOT NULL,
  `product_name` varchar(15) NOT NULL,
  `product_price` int(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category_id` int(2) NOT NULL,
  `product_size` float NOT NULL,
  `subcategory_id` int(2) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `description`, `category_id`, `product_size`, `subcategory_id`, `quantity`) VALUES
(18, 'pent', 500, 'HELLO', 1, 60, 2, 0),
(19, 'xyz', 5000, 'ok', 2, 56, 3, 0),
(20, 'abc', 1000, 'hiiiii', 3, 46, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_alteration`
--

CREATE TABLE `product_alteration` (
  `product_alt_id` int(2) NOT NULL,
  `product_alteration_date` date NOT NULL,
  `product_alteration_charges` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(2) NOT NULL,
  `product_image` int(50) NOT NULL,
  `product_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(2) NOT NULL,
  `purchase_date` date NOT NULL,
  `discount` float NOT NULL,
  `supplier_id` int(2) NOT NULL,
  `purchase_final_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `qty` int(11) NOT NULL,
  `purchase_id` int(2) NOT NULL,
  `raw_material_id` int(2) NOT NULL,
  `purchase_price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `purchase_return_id` int(2) NOT NULL,
  `purchase_return_date` date NOT NULL,
  `purchase_id` int(2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_raw_mat`
--

CREATE TABLE `purchase_return_raw_mat` (
  `purchase_return_id` int(2) NOT NULL,
  `raw_material_id` int(2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_id` int(2) NOT NULL,
  `product_id` int(2) NOT NULL,
  `rating_value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raw_material`
--

CREATE TABLE `raw_material` (
  `rawmaterial_id` int(2) NOT NULL,
  `rawmaterial_name` varchar(20) NOT NULL,
  `r_detail` varchar(40) NOT NULL,
  `QTY` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_material`
--

INSERT INTO `raw_material` (`rawmaterial_id`, `rawmaterial_name`, `r_detail`, `QTY`) VALUES
(1, 'fabric1', 'fabrics', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcategory_id` int(2) NOT NULL,
  `subcategory_name` varchar(15) NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier1`
--

CREATE TABLE `supplier1` (
  `supplier_id` int(2) NOT NULL,
  `supplier_name` varchar(10) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `account_number` int(5) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `ifsc_code` int(4) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `city_id` int(5) NOT NULL,
  `boutique_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_raw_mat`
--

CREATE TABLE `supplier_raw_mat` (
  `rawmaterial_id` int(2) NOT NULL,
  `supplier_id` int(2) NOT NULL,
  `price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `product_id` int(11) NOT NULL,
  `user_fname` varchar(15) NOT NULL,
  `user_lname` varchar(15) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `contact_number` int(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city_id` int(2) NOT NULL,
  `password` varchar(10) NOT NULL,
  `security_que` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `security_ans` varchar(50) NOT NULL,
  `pincode` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `product_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`boutique_id`),
  ADD UNIQUE KEY `city_id` (`city_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `product_id` (`product_id`,`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD UNIQUE KEY `order_id` (`order_id`,`product_id`);

--
-- Indexes for table `order_return`
--
ALTER TABLE `order_return`
  ADD PRIMARY KEY (`order_r_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `order_return_detail`
--
ALTER TABLE `order_return_detail`
  ADD PRIMARY KEY (`order_r_d_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `order_r_id` (`order_r_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD UNIQUE KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `product_alteration`
--
ALTER TABLE `product_alteration`
  ADD PRIMARY KEY (`product_alt_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD UNIQUE KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD UNIQUE KEY `purchase_id` (`purchase_id`,`raw_material_id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`purchase_return_id`),
  ADD UNIQUE KEY `purchase_id` (`purchase_id`);

--
-- Indexes for table `purchase_return_raw_mat`
--
ALTER TABLE `purchase_return_raw_mat`
  ADD UNIQUE KEY `purchase_return_id` (`purchase_return_id`,`raw_material_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD UNIQUE KEY `user_id` (`user_id`,`product_id`);

--
-- Indexes for table `raw_material`
--
ALTER TABLE `raw_material`
  ADD PRIMARY KEY (`rawmaterial_id`);

--
-- Indexes for table `supplier1`
--
ALTER TABLE `supplier1`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `raw_material`
--
ALTER TABLE `raw_material`
  MODIFY `rawmaterial_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier1`
--
ALTER TABLE `supplier1`
  MODIFY `supplier_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
