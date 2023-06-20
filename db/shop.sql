-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `cart_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL COMMENT 'รหัสพนักงาน',
  `mem_fname` varchar(40) NOT NULL COMMENT 'ชื่อ',
  `mem_lname` varchar(40) NOT NULL COMMENT 'นามสกุล',
  `mem_email` varchar(80) NOT NULL COMMENT 'อีเมลล์',
  `mem_tel` varchar(10) NOT NULL COMMENT 'เบอร์',
  `mem_address` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `mem_username` varchar(30) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `mem_password` varchar(60) NOT NULL COMMENT 'รหัสผ่าน',
  `mem_create_at` varchar(15) NOT NULL,
  `mem_status` enum('admin','employee','user') NOT NULL DEFAULT 'user' COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_fname`, `mem_lname`, `mem_email`, `mem_tel`, `mem_address`, `mem_username`, `mem_password`, `mem_create_at`, `mem_status`) VALUES
(1, 'นายลูกค้า', 'รวยมาก', 'demo@demo.com', '0812345678', '99/99 นครศรี', 'demo', '$2y$10$OsBJKA6tkMFg4LZ7hUy89.B.pi1jVcJAApi5UoXPWfqWPe8JQ9xdy', '2020-04-08', 'user'),
(2, 'แอดมิน', 'เองครับ', 'admin@admin.com', '0894969999', '      -', 'admin', '$2y$10$1Psji12WhAwbKQ8YYgIXL.CW8kRXKRt9fG6ORTWTU2hPZdeLBWQem', '2020-04-08', 'admin'),
(3, 'test', 'test', 'test@mail.com', '0812345678', 'test', 'test', '$2y$10$q8OAF7gmvrYdTCE1nYUHXeWkaIc3Ejj9WCcIiguwzYh3ZZIN90BnS', '2023-06-13', 'user'),
(5, 'พนักงาน', 'เองครับ1', 'employee@gmail.com', '0913245678', '  2/2', 'employee', '$2y$10$Ziq9SCpsqNPXwJUJH28dzeRmM.stGYUIWX4G00AAUroMp77SMMHOS', '2023-06-19', 'employee'),
(6, 'ทดสอบ', 'ทดสอบ', 'test@mail.com', '0812345678', '20/25 นครศรี', 'user', '$2y$10$qJJDgTzy8E5nz51KiKxN2eUbIg3iftUZ0Nwfzbb3ueTCjwzVFFmom', '2023-06-19', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(11) NOT NULL COMMENT 'รหัสข่าว',
  `new_title` varchar(30) NOT NULL COMMENT 'หัวข้อข่าว',
  `new_image` varchar(100) NOT NULL COMMENT 'รูปข่าว',
  `new_date` date NOT NULL COMMENT 'วันที่ลงข่าว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_title`, `new_image`, `new_date`) VALUES
(1, 'new 出来', '15818806584306.png', '2020-02-18'),
(2, 'xs', '15818815805616.png', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(20) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `order_shipping` varchar(2) NOT NULL,
  `price_total` int(8) NOT NULL,
  `order_status` int(1) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `mem_id`, `address`, `order_shipping`, `price_total`, `order_status`, `order_date`) VALUES
(79, '100623095950', 1, '1001/32 Thailand', '50', 95, 2, '2023-06-10 09:59:50'),
(81, '120623103632', 1, '1001/32 Thailand', '50', 11995, 2, '2023-06-12 10:36:32'),
(85, '190623121505', 6, '20/25 นครศรี', '50', 995, 2, '2023-06-19 12:15:05'),
(87, '190623212630', 6, '20/25 นครศรี', '50', 600, 1, '2023-06-19 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_number` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_number`, `product_id`, `product_price`) VALUES
(1, '', 13, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `payment_file` varchar(100) NOT NULL,
  `payment_price` varchar(10) NOT NULL,
  `payment_bank` varchar(50) NOT NULL,
  `payment_Detail` text NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_status` enum('ตรวจสอบ','ชำระเรียบร้อย') NOT NULL DEFAULT 'ตรวจสอบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `mem_id`, `payment_file`, `payment_price`, `payment_bank`, `payment_Detail`, `payment_date`, `payment_time`, `payment_status`) VALUES
(6, 24, 1, '080623_113612.jpg', '10.00', 'กรุงเทพ', '', '2023-06-08', '16:36:00', 'ตรวจสอบ'),
(7, 79, 1, '100623_110157.png', '95.00', 'ไทยพาณิชย์', '', '2023-06-10', '16:01:00', 'ชำระเรียบร้อย'),
(8, 81, 1, '120623_104227.jpg', '12,045.00', 'ไทยพาณิชย์', '', '2023-06-12', '15:42:00', 'ชำระเรียบร้อย'),
(9, 82, 1, '120623_132605.jpg', '23,350.00', 'ไทยพาณิชย์', '', '2023-06-12', '18:25:00', 'ชำระเรียบร้อย'),
(10, 85, 6, '190623_122448.jpg', '1,045.00', 'ไทยพาณิชย์', '', '2023-06-19', '17:24:00', 'ชำระเรียบร้อย'),
(11, 87, 6, '190623_162708.jpg', '650.00', 'กรุงเทพ', '', '2023-06-19', '21:27:00', 'ตรวจสอบ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_price` double(10,2) NOT NULL COMMENT 'ราคาสินค้า',
  `product_discount` int(10) NOT NULL COMMENT 'ส่วนลด',
  `product_tag` varchar(30) NOT NULL,
  `product_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_detail`, `product_image`, `product_code`, `product_price`, `product_discount`, `product_tag`, `product_date`) VALUES
(19, 'test', 'test', '16869920551046.png', 'Test1', 1000.00, 10, 'เสื้อ', '2023-06-19'),
(20, 'MLB bigball chunky สีขาว logo ', 'MLB ของแท้ รองเท้า MLB bigball chunky สีขาว logo NY ป้ายแท็กเกาหลี KR\r\nใส่แล้วสูงขึ้น 6cm ', '16870140880928.jpg', 'Sh-0001', 3090.00, 0, 'รองเท้า', '2023-06-19'),
(21, 'รองเท้า Fila Disruptor', 'อัปเปอร์ผลิตจากวัสดุสังเคราะห์\r\nบุนุ่มรอบข้อเท้าและลิ้นรองเท้า\r\nพื้นรองเท้าผลิตจาก EVA มีน้ำหนักเบาและรองรับแรงกระแทกอย่างนุ่มนวล\r\nพื้นรองเท้าด้านนอกทำจาก TPR\r\nแถบดึงลิ้นรองเท้าและส้นเท้าช่วยให้สวมใส่สะดวกยิ่งขึ้น', '16870144276359.jpg', 'Sh-0002', 2500.00, 10, 'รองเท้า', '2023-06-19'),
(22, 'กางเกงขายาว', 'ผู้ชาย กางเกงขายาว พ็อกเก็ตซิป ด้านข้าง เชือกรูดที่เอว', '16870145786903.jpg', 'P-0001', 600.00, 0, 'กางเกง', '2023-06-19'),
(23, 'กางเกง คาร์โก้', 'Extended Sizes ผู้ชาย กางเกง คาร์โก้ กระเป๋าพนังด้านข้าง เชือกรูดที่เอว', '16870146431506.jpg', 'P-0002', 650.00, 10, 'กางเกง', '2023-06-19'),
(24, 'กระเป๋าใส่เหรียญ', 'กระเป๋าใส่เหรียญ สีดำ ซิป โพลีเอสเตอร์', '16870148247363.jpg', 'B-0001', 60.00, 0, 'กระเป๋า', '2023-06-19'),
(25, 'กระเป๋าสี่เหลี่ยม', 'ผู้ชาย กระเป๋าสี่เหลี่ยม มินิ มินิมอลลิสต์', '16870148821406.jpg', 'B-0002', 170.00, 0, 'กระเป๋า', '2023-06-19'),
(26, 'กระเป๋าสะพาย', 'ผู้ชาย ผ้าแคนวาส กระเป๋าสะพาย ธุรกิจ ลำลอง กระเป๋าทรงซองจดหมาย สีดำ เมสเซนเจอร์', '16870149383698.jpg', 'B-0003', 530.00, 20, 'กระเป๋า', '2023-06-19'),
(27, 'สร้อยคอลูกปัด', 'สร้อยคอลูกปัด หลายสี', '16870150413747.jpg', 'D-0001', 60.00, 0, 'เครื่องประดับ', '2023-06-19'),
(28, 'กระโปรง ทูโทน', 'กระโปรง ทูโทน พลีต สายผูกเอว', '16870151391917.jpg', 'P-0003', 540.00, 0, 'กางเกง', '2023-06-19'),
(29, 'เกาะอกสายเดี่ยว', 'เกาะอกสายเดี่ยวดีเทลมีสาย เซ็กซี่ ต้องมีแล้วสาวๆ', '16870152419865.jpg', 'Shirt-0001', 150.00, 10, 'เสื้อ', '2023-06-19'),
(30, 'เสื้อยืด Oversize', 'เสื้อยืด ไหล่ตก อาคาร & กราฟฟิค ตัวอักษร', '16870153632218.jpg', 'Shirt-0002', 170.00, 0, 'เสื้อ', '2023-06-19'),
(31, 'ไหมพรมคลุมโอเวอร์ไซส์', 'ไหมพรมคลุมโอเวอร์ไซส์ ดีเทลกระเป๋าหน้า(ใช้งานได้จริง) แต่งลุคสคูลหรือเวิคกิ้งก็เริ่ดจ้า', '16870154479810.jpg', 'Shirt-0003', 200.00, 0, 'เสื้อ', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `product_tag_id` int(11) NOT NULL,
  `product_tag_name` varchar(50) NOT NULL,
  `product_tag_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`product_tag_id`, `product_tag_name`, `product_tag_date`) VALUES
(1, 'เสื้อ', '2020-04-08'),
(2, 'กางเกง', '2020-04-08'),
(3, 'เครื่องประดับ', '2023-06-19'),
(4, 'กระเป๋า', '2023-06-19'),
(9, 'รองเท้า', '2023-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`product_tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสพนักงาน', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าว', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `product_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
