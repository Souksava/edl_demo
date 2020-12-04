-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 03:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edl_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'ທີ່ຢູ່ອາໄສ'),
(2, 'ໂຮງງານ'),
(3, 'ບໍລິສັດ'),
(4, 'ຫ້າງຮ້ານ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cus_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cus_surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `delivery` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cus_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_surname`, `tel`, `address`, `pro_id`, `cate_id`, `gender`, `delivery`, `cus_no`) VALUES
('0002 1772', 'ບຸນເພັງ', 'ບຸນ', '02054187448', 'ໂນນແກ້ວ, 0237, ມ ຂ0202, ມ.ສີໂຄດຕະບອງ, ນະຄອນຫຼອງວຽງຈັນ', 1, 1, 'ຊາຍ', 'ບ ໂນນແກ້ວ,ມ ສ/ຄ 0202070237', '0021 772'),
('0018 9622', 'ນວນທອງ', 'ສຸລະວະດີ', '0302080312', 'ບ້ານທົ່ງພານທອງ, 1, ມ. 0302, ມ.ສີສັດຕະນາກ, ນະຄອນຫູວງວຽງຈັນ', 1, 1, 'ຊາຍ', 'ບ້ານທົ່ງພານທອງ, ເຮືອນເລກທີ 001, ຊັ້ນເຮືອນ 1, ມ. 0302, ເມືອງ ສີສັດຕະນາກ, ນະຄອນຫຼວງວຽງຈັນ', '0188 939');

-- --------------------------------------------------------

--
-- Table structure for table `listselldetail`
--

CREATE TABLE `listselldetail` (
  `id` int(11) NOT NULL,
  `meter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_before` int(11) NOT NULL,
  `no_after` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listselldetail`
--

INSERT INTO `listselldetail` (`id`, `meter`, `no_before`, `no_after`) VALUES
(10, '16616315', 0, 244);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`pro_id`, `pro_name`) VALUES
(1, 'ນະຄອນຫຼວງວຽງຈັນ'),
(2, 'ແຂວງວຽງຈັນ'),
(3, 'ແຂວງຫຼວງພະບາງ'),
(4, 'ແຂວງຈຳປາສັກ'),
(5, 'ແຂວງຜົ້ງສາລີ'),
(6, 'ອັດຕະປື'),
(7, 'ບໍ່ແກ້ວ'),
(8, 'ບໍລິຄຳໄຊ'),
(9, 'ຫົວພັນ'),
(10, 'ຄຳມ່ວນ'),
(11, 'ຫຼວງນ້ຳທາ'),
(12, 'ອຸດົມໄຊ'),
(13, 'ສາລະວັນ'),
(14, 'ສະຫວັນນະເຂດ'),
(15, 'ເຊກອງ'),
(16, 'ໄຊຍະບູລີ'),
(17, 'ໄຊສົມບູນ'),
(18, 'ຊຽງຂວາງ');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `billno` int(11) NOT NULL,
  `cus_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_qty` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `sell_date` date NOT NULL,
  `sell_time` time NOT NULL,
  `monthly` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`billno`, `cus_id`, `total_qty`, `amount`, `sell_date`, `sell_time`, `monthly`) VALUES
(1, '0018 9622', 240, '137445.00', '2020-12-03', '18:45:22', '2020-12-03'),
(2, '0018 9622', 240, '137445.00', '2020-12-05', '18:51:26', '2020-12-03'),
(3, '0018 9622', 240, '137445.00', '2020-12-05', '18:54:31', '2020-12-03'),
(4, '0018 9622', 300, '184305.00', '2020-12-05', '18:55:16', '2020-12-10'),
(5, '0018 9622', 152, '68717.00', '2020-12-05', '18:57:26', '2020-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `selldetail`
--

CREATE TABLE `selldetail` (
  `id` int(11) NOT NULL,
  `meter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_before` int(11) NOT NULL,
  `no_after` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `billno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `selldetail`
--

INSERT INTO `selldetail` (`id`, `meter`, `no_before`, `no_after`, `total`, `billno`) VALUES
(1, '24180022675', 0, 240, 240, 3),
(2, 'lafnasodbfgipas', 0, 300, 300, 4),
(3, 'asfasfsf', 0, 152, 152, 5);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`user_id`, `user_name`, `email`, `password`, `status`) VALUES
(1, 'User_Demo', 'demo@edl.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `listselldetail`
--
ALTER TABLE `listselldetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `selldetail`
--
ALTER TABLE `selldetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listselldetail`
--
ALTER TABLE `listselldetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `selldetail`
--
ALTER TABLE `selldetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `province` (`pro_id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
