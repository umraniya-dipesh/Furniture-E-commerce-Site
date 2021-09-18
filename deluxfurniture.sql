-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 12:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deluxfurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cust_id`, `p_id`, `quantity`, `date`) VALUES
(15, 0, 14, 1, '2020-02-27 04:49:00'),
(16, 0, 14, 1, '2020-02-27 04:49:42'),
(19, 4, 17, 1, '2020-03-01 03:54:14'),
(21, 4, 26, 2, '2020-03-01 04:56:25'),
(22, 4, 13, 1, '2020-03-01 04:56:17'),
(23, 40, 14, 1, '2020-03-01 05:02:23'),
(24, 4, 18, 1, '2020-03-02 09:20:24'),
(26, 6, 14, 1, '2020-03-09 06:17:54'),
(27, 6, 18, 1, '2020-03-09 06:19:04'),
(29, 7, 26, 2, '2020-03-10 03:46:32'),
(30, 7, 18, 1, '2020-03-10 03:46:47'),
(31, 7, 13, 1, '2020-03-10 03:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Sofa'),
(3, 'Table'),
(5, 'Chair'),
(6, 'Bed');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactus_id` int(11) NOT NULL,
  `cnt_name` varchar(30) NOT NULL,
  `email` varchar(125) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contactus_id`, `cnt_name`, `email`, `subject`, `message`) VALUES
(1, 'Dipesh Umraniya', 'umraniyadipeshk@gmail.com', 'about product', 'You have any purple colour sofa?'),
(2, 'Pretesh', 'pretest@gmail.com', 'about product', 'i want large sofa set'),
(4, 'Sanjay', 'sanjuahir0711@gmail.com', 'about product', 'i want baby chair'),
(5, 'sanjay', 'sanjay@gmail.com', 'about products', 'THIS PRODUCT IS BEST ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `uname`, `email`, `password`, `contact`, `address`, `city`, `date`) VALUES
(1, 'Dipesh Umraniya', 'umraniyadipesh@gmail.com', 'd3bf43863892c46aec4ad799cc9183a1', '9979880672', 'Sukhpar Nava-vas	', 'Bhuj', '2020-02-09 17:33:22'),
(2, 'sanjay', 'sanjay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9988776644', 'Hirapar	', 'Anjar', '2020-02-10 08:31:35'),
(4, 'Pradeep', 'pradeep@gmail.com', '657047263c96362700718f6768437139', '7984288526', 'Jeshta Nagar, vageshvari Chock	', 'Bhuj', '2020-02-12 11:16:40'),
(26, 'Pinak', 'pinak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9999999995', '	trimandir', 'bhuj', '2020-02-20 09:18:48'),
(28, 'sagar', 'heythere127@yandex.com', '202cb962ac59075b964b07152d234b70', '1234567890', 'bhuj	', 'bhuj', '2020-02-23 11:04:35'),
(33, 'Pradeep', 'yadavpp086@gmail.com', '202cb962ac59075b964b07152d234b70', '1234567890', 'bhuj', 'bhuj', '2020-02-23 11:13:59'),
(34, 'sanjay', 'sanjuahir0711@gmail.com', '202cb962ac59075b964b07152d234b70', '4643665646', '	bhuj', 'bhuj', '2020-02-25 10:56:47'),
(35, 'pradeep', 'yadavpp086@gmail.com', '202cb962ac59075b964b07152d234b70', '5634545465', 'bhuj	', 'bhuj', '2020-02-25 10:59:54'),
(37, 'Dipesh Umraniya', 'umraniyadipeshk@gmail.com', '202cb962ac59075b964b07152d234b70', '9979880672', '	sukhpar', 'Bhuj', '2020-02-26 12:09:42'),
(40, 'Bhavik', 'bhavikbhuva80@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9955223355', 'Sukhpar	', 'Bhuj', '2020-03-01 05:01:04'),
(41, 'Dipesh', 'ohhyeahhyes@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9999999999', 'huhuh	', 'bhbhbh', '2020-03-08 10:32:27'),
(42, 'sanjay', 'sanjuahir0711@gmail.com', '202cb962ac59075b964b07152d234b70', '3563853776', 'vvnbggfhgrg	', 'gfhfbg', '2020-03-08 10:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`order_details_id`, `order_id`, `cust_id`, `p_id`, `price`, `quantity`, `date`, `transaction_id`) VALUES
(1, 0, 2, 13, 9000, 1, '2020-03-10 05:19:53', 0),
(2, 0, 0, 0, 0, 0, '2020-03-10 05:19:54', 0),
(3, 0, 1, 13, 9000, 1, '2020-03-10 05:37:03', 0),
(4, 0, 0, 0, 0, 0, '2020-03-10 05:37:03', 0),
(5, 0, 1, 18, 4000, 1, '2020-03-10 06:26:49', 0),
(6, 0, 0, 0, 0, 0, '2020-03-10 06:26:50', 0),
(7, 0, 1, 26, 8000, 1, '2020-03-10 06:29:27', 0),
(8, 0, 0, 0, 0, 0, '2020-03-10 06:29:27', 0),
(9, 0, 1, 14, 15000, 1, '2020-03-10 06:30:03', 0),
(10, 0, 0, 0, 0, 0, '2020-03-10 06:30:03', 0),
(11, 0, 1, 18, 4000, 1, '2020-03-10 06:32:45', 0),
(12, 0, 0, 0, 0, 0, '2020-03-10 06:32:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `scategory_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `p_price` float NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_image` varchar(1024) NOT NULL,
  `p_colour` varchar(50) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `category_id`, `scategory_id`, `supplier_id`, `p_name`, `p_price`, `p_quantity`, `p_image`, `p_colour`, `p_description`, `date`) VALUES
(13, 0, 0, 0, 'bed', 9000, 5, 'dress2home.jpg1581592297.jpg', 'brown', 'its bed', '2020-02-13 11:11:37'),
(14, 0, 0, 0, 'bed', 15000, 6, 'dress1home.jpg1581672371.jpg', 'black', 'its bed', '2020-02-14 09:26:11'),
(18, 0, 0, 0, 'chair', 4000, 5, 'pexels-photo-2082090.jpeg1581674037.jpeg', 'black', 'its chair', '2020-02-14 09:53:57'),
(26, 0, 0, 0, 'Sofa', 8000, 3, 'sofa_furniture_walls_comfort_80194_1280x720.jpg1582092656.jpg', 'Black', 'its sofa', '2020-02-19 06:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `scategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `scategory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`scategory_id`, `category_id`, `scategory_name`) VALUES
(3, 1, 'Three seater sofa'),
(4, 2, 'Two Seater Sofa'),
(11, 0, 'one seater');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `sup_name` varchar(60) NOT NULL,
  `sup_email` varchar(60) NOT NULL,
  `sup_contact` varchar(20) NOT NULL,
  `sup_address` varchar(255) NOT NULL,
  `sup_city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `sup_name`, `sup_email`, `sup_contact`, `sup_address`, `sup_city`) VALUES
(1, 'Jagdish Bhai', 'jagdish09@gmail.com', '9988776655', 'GT Road ,near hanuman dairy', 'Mandvi');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `txn_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `cust_id`, `txn_id`, `status`, `amount`, `date`) VALUES
(1, 1, 9, 'success', 12000, '2020-03-10 06:26:49'),
(2, 1, 70, 'success', 8000, '2020-03-10 06:29:27'),
(3, 1, 17, 'failure', 15000, '2020-03-10 06:30:03'),
(4, 1, 81, 'failure', 4000, '2020-03-10 06:32:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`scategory_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `scategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
