-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 28, 2022 at 11:22 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments_data`
--

CREATE TABLE `payments_data` (
  `id` int(100) NOT NULL,
  `cf_order_id` int(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customer_id` varchar(250) NOT NULL,
  `customer_email` varchar(250) NOT NULL,
  `customer_phone` int(150) NOT NULL,
  `order_amount` int(200) NOT NULL,
  `order_currency` varchar(100) NOT NULL,
  `order_expiry_time` varchar(6) NOT NULL,
  `order_id` varchar(150) NOT NULL,
  `return_url` varchar(350) NOT NULL,
  `notify_url` varchar(255) NOT NULL,
  `payment_methods` varchar(100) DEFAULT NULL,
  `order_note` varchar(300) DEFAULT NULL,
  `order_status` varchar(200) NOT NULL,
  `order_token` varchar(200) NOT NULL,
  `payment_link` varchar(255) NOT NULL,
  `pUrl` varchar(255) NOT NULL,
  `rUrl` varchar(255) NOT NULL,
  `sUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments_data`
--

INSERT INTO `payments_data` (`id`, `cf_order_id`, `created_at`, `customer_id`, `customer_email`, `customer_phone`, `order_amount`, `order_currency`, `order_expiry_time`, `order_id`, `return_url`, `notify_url`, `payment_methods`, `order_note`, `order_status`, `order_token`, `payment_link`, `pUrl`, `rUrl`, `sUrl`) VALUES
(26, 2950834, '2022-09-17 08:40:54', 'ccustomersdfwse', 'test@gmail.com', 2147483647, 1234, 'INR', '2022-1', 'order_1376472Et9XevaG88Cg3jztqBoFGVkwtS', 'http://localhost:8888/Hackathon/index.php/payment/success?order_id={order_id}&order_token={order_token}', 'https://webhooktestbygaurav.000webhostapp.com/webhook.php', NULL, NULL, 'PAID', 'wXKGK970y27RIimfmWvB', 'https://payments-test.cashfree.com/order/#wXKGK970y27RIimfmWvB', 'https://sandbox.cashfree.com/pg/orders/order_1376472Et9XevaG88Cg3jztqBoFGVkwtS/payments', 'https://sandbox.cashfree.com/pg/orders/order_1376472Et9XevaG88Cg3jztqBoFGVkwtS/refunds', 'https://sandbox.cashfree.com/pg/orders/order_1376472Et9XevaG88Cg3jztqBoFGVkwtS/settlements');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments_data`
--
ALTER TABLE `payments_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments_data`
--
ALTER TABLE `payments_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
