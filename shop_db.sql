-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 01:00 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(69, 2, 'samsung', 56999, 1, 'mobile.jpg'),
(70, 2, '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `url`, `name`, `cname`) VALUES
('1', 'mobile.jpg', 'Mobile Phone', 'mobile'),
('1', 'headphone.jpg', 'Headphone & Earphone', 'headphone'),
('1', 'laptop.jpg', 'Laptop', 'laptop'),
('1', 'tv.jpg', 'Telivision', 'tv'),
('1', 'speakers.jpg', 'Speakers', 'speakers'),
('2', 'shirts.jpg', 'Shirts', 'shirts'),
('2', 'tshirts.jpg', 'T-Shirts', 'tshirts'),
('2', 'pants.jpg', 'Pants', 'pants'),
('2', 'watches.jpg', 'Watches', 'watches'),
('2', 'footwear.jpg', 'Footwear', 'footwear'),
('2', 'menacc.jpg', 'Accessories', 'menacc'),
('3', 'ethnic.jpg', 'Ethnic Wear', 'ethnic'),
('3', 'western.jpg', 'Western Wear', 'western'),
('3', 'jewellery.jpg', 'Jewellery', 'jewellery'),
('3', 'handbag.jpg', 'Handbag', 'handbag'),
('3', 'wfootwear.jpg', 'Footwear', 'wfootwear'),
('3', 'womenacc.jpg', 'Accessories', 'womenacc'),
('4', 'kitchenapp.jpg', 'Kitchen Appliances', 'kitchenapp'),
('4', 'kware.jpg', 'Kitchen Ware', 'kware'),
('4', 'furnishing.jpg', 'Home Furnishing', 'furnishing'),
('4', 'decor.jpg', 'Home Decor', 'decor'),
('4', 'furniture.jpg', 'Furniture', 'furniture'),
('5', 'comp.jpg', 'Competitive Examination', 'comp'),
('5', 'school.jpg', 'School Books & guides', 'school'),
('5', 'horror.jpg', 'Horror', 'horror'),
('5', 'comedy.jpg', 'Comedy', 'comedy'),
('5', 'scifi.jpg', 'Sci-Fi', 'scifi'),
('5', 'romance.jpg', 'Romance', 'romance'),
('5', 'action.jpg', 'Action', 'action'),
('5', 'motivational.jpg', 'Motivational', 'motivational'),
('6', 'hammers.jpg', 'Hammers', 'hammers'),
('6', 'wrench.jpg', 'Wrench', 'wrench'),
('6', 'axe.jpg', 'Axe', 'axe'),
('6', 'measure.jpg', 'Measure Instruments', 'measure'),
('6', 'drill.jpg', 'Drill', 'drill'),
('6', 'toolbox.jpg', 'Tool Box', 'toolbox'),
('7', 'dairy.jpg', 'Dairy  Products', 'dairy'),
('7', 'fruitsnvegs.jpg', 'Fruits & Vegetables', 'fruitsnvegs'),
('7', 'bread.jpg', 'Breads', 'bread'),
('7', 'snacks.jpg', 'Snacks', 'snacks'),
('7', 'candy.jpg', 'Candy', 'candy'),
('7', 'drinks.jpg', 'Beverages', 'drinks'),
('7', 'frozen.jpg', 'Frozen Foods', 'frozen'),
('8', 'babycare.jpg', 'Baby Care', 'babycare'),
('8', 'toys.jpg', 'Toys', 'toys'),
('8', 'boys.jpg', 'Boy`s Clothing', 'boys'),
('8', 'girls.jpg', 'Girl`s Clothing', 'girls'),
('8', 'baby.jpg', 'Baby Clothing', 'baby'),
('8', 'footkids.jpg', 'Footwear', 'footkids'),
('9', 'artsup.jpg', 'Art Supplies', 'artsup'),
('9', 'pens.jpg', 'Pen and Markers', 'pens'),
('9', 'notes.jpg', 'Notebooks', 'notes'),
('9', 'file.jpg', 'Files & Folders', 'file'),
('9', 'fileaccs.jpg', 'Filing Accessories', 'fileaccs'),
('9', 'calci.jpg', 'Calculators', 'calci');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 2, 'aachu', 'aachu@gmail.com', '463453', 'asdasfafazfaf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`, `review`) VALUES
(10, 2, 'aachu', '9655557550', 'aachu@gmail.com', 'cash on delivery', 'flat no. 324, asasdasdasdadasdasds, sdadaasd, sadasda - 23424', ', head (1) , ear (1) , ear3 (1) , ear4 (1) ', 495, '19-Aug-2022', 'completed', ''),
(11, 2, 'aachu', '214124', 'aachu@gmail.com', 'cash on delivery', 'flat no. 123, 23weasd, q2wed, qwe - 2323', ', head (2) , ear (1) ', 370, '19-Aug-2022', 'completed', ''),
(12, 2, 'aachu', '654', 'aachu@gmail.com', 'cash on delivery', 'flat no. 134, azf, af, af - 34', ', head (3) , ear (5) ', 989, '21-Aug-2022', 'pending', ''),
(13, 2, 'aachu', '9655557550', 'aachu@gmail.com', 'cash on delivery', 'flat no. 123, dargh asda , afasdasd, India - 641652', ',samsung (1) ,Printed T-Shirt (2) ', 57917, '26-Aug-2022', 'completed', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `subcat` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category`, `subcat`, `description`) VALUES
(5, 'axe', 500, 'axe.jpg', 'kids', 'heead', ''),
(6, 'book', 299, 'book.jpg', 'Electronics', 'Phone', ' <option value=\"Electronics\">Electronics</option>                <option slected=\"disabled\" value=\"men\">Mens Fashion</option>                <option slected=\"disabled\" value=\"women\">Womens Fashion</option>                <option slected=\"disabled\" value=\"Home Apps\">Home Apps</option>                <option slected=\"disabled\" value=\"Books\">Books & Stationaries</option>                 <option slected=\"disabled\" value=\"Tools\">Tools</option>                 <option slected=\"disabled\" value=\"grocery'),
(16, 'drill', 1099, 'drill.jpg', 'Electronics', '', ''),
(17, 'shirt', 500, 'shirt.jpg', 'men', '', ''),
(18, 'shirts', 23423, 'shirt.jpg', 'men', '', ''),
(21, 'Calculator', 1234124, 'about-img.jpg', 'art', 'artsup', 'This is a calculator from the 1980s'),
(22, 'samsung', 56999, 'mobile.jpg', 'electronics', 'mobile', 'Samsung Mobile thi s is a good rpofduc wuth a great value ding don hsoe the laow asiod a daj a la o ve na g ya u adw a sd'),
(23, 'Printed T-Shirt', 459, 'tshirts.jpg', 'men', 'tshirts', 'nothing but a regular good old printed tshirt'),
(24, 'Stapler Celio 2', 158, 'fileaccs.jpg', 'art', 'fileaccs', 'Stapler Product for sale'),
(25, 'shoe', 123, 'footwear.jpg', 'men', 'footwear', 'af asdfas faf asf aa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'aachu', 'aachu@gmail.com', '7391055ec4428358e514b0f57e40d011', 'admin'),
(2, 'gayu', 'gayu@gmail.com', '5cb313e0163cccde2555a7b8da5e9b33', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
