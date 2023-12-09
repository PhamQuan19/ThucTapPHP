-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th12 09, 2023 lúc 08:15 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `foodorder`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', '', '2023-10-24 04:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`name`, `email`, `message`) VALUES
('QTest', 'phamquan192qt@gmail.com', 'Test'),
('Phạm Anh Quân', 'phamquan192qt@gmail.com', 'Hello'),
('QTest', 'phamquan192qt@gmail.com', 'hello'),
('QTest', 'phamquan192qt@gmail.com', 'hello'),
('QTest', 'phamquan192qt@gmail.com', 'hello'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'd'),
('QTest', 'phamquan192qt@gmail.com', 'd'),
('QTest', 'phamquan192qt@gmail.com', 'd'),
('QTest', 'phamquan192qt@gmail.com', 'd'),
('QTest', 'phamquan192qt@gmail.com', 'g'),
('QTest', 'phamquan192qt@gmail.com', 'g'),
('QTest', 'phamquan192qt@gmail.com', 't'),
('QTest', 'phamquan192qt@gmail.com', 't'),
('Phạm Anh Quân', 'phamquan192qt@gmail.com', '333'),
('Phạm Anh Quân', 'phamquan192qt@gmail.com', '333'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'dd'),
('QTest', 'phamquan192qt@gmail.com', 'dsdsdsfsd'),
('QTest', 'phamquan192qt@gmail.com', 'dsdsdsfsd'),
('QTest', 'phamquan192qt@gmail.com', 'sadsadfs'),
('QTest', 'phamquan192qt@gmail.com', 'sadsadfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfdsds'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfdsds'),
('QTest', 'phamquan192qt@gmail.com', 'dfgdfd'),
('QTest', 'phamquan192qt@gmail.com', 'dfgdfd'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsdfds'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsdfds'),
('QTest', 'phamquan192qt@gmail.com', 'ff'),
('QTest', 'phamquan192qt@gmail.com', 'ff'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'kkk'),
('QTest', 'phamquan192qt@gmail.com', 'jhhh'),
('QTest', 'phamquan192qt@gmail.com', 'jhhh'),
('QTest', 'phamquan192qt@gmail.com', 'fgdgd'),
('QTest', 'phamquan192qt@gmail.com', 'fgdgd'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfdsds'),
('QTest', 'phamquan192qt@gmail.com', 'sdfdsds'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'sdfsfs'),
('QTest', 'phamquan192qt@gmail.com', 'dsfsf'),
('QTest', 'phamquan192qt@gmail.com', 'dsfsf'),
('QTest', 'phamquan192qt@gmail.com', 'hghgh'),
('QTest', 'phamquan192qt@gmail.com', 'hghgh'),
('QTest', 'phamquan192qt@gmail.com', 'jkkkj'),
('QTest', 'phamquan192qt@gmail.com', 'jkkkj'),
('QTest', 'phamquan192qt@gmail.com', 'sdassa'),
('QTest', 'phamquan192qt@gmail.com', 'sdassa'),
('PAQuan', 'phamquan29hy@gmail.com', 'dsfsdfds'),
('PAQuan', 'phamquan29hy@gmail.com', 'dsfsdfds'),
('PAQuan', 'phamquan29hy@gmail.com', 'dksfjskfksd'),
('PAQuan', 'phamquan29hy@gmail.com', 'dksfjskfksd'),
('PAQuan', 'phamquan29hy@gmail.com', 'sadasdsadsa'),
('PAQuan', 'phamquan29hy@gmail.com', 'sadasdsadsa'),
('PAQuan', 'phamquan29hy@gmail.com', 'sdfkjskfsk'),
('PAQuan', 'phamquan29hy@gmail.com', 'sdfkjskfsk'),
('PAQuan', 'phamquan29hy@gmail.com', 'Test'),
('PAQuan', 'phamquan29hy@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(50) NOT NULL,
  `rs_id` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slogan` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(2, 2, 'Gà Madeira', 'Được làm từ thịt gà, nấm và một loại rượu tăng cường..', 50.00, '6568a6e78766d.jpg'),
(3, 1, 'CƠM GÀ RÁN', '1 Cơm Gà Rán + 1 ly Lipton .Chỉ áp dụng từ 10:00 - 14:00', 50.00, '6568a734c3046.jpg'),
(4, 1, 'Khoai tây nghiền phô mai', 'Khoai tây nghiền phô mai thơm ngon. ', 30.00, '6568a5959a860.jpg'),
(5, 1, 'Miếng gà giòn', 'Gà chiên giòn, ăn kèm sốt mù tạt mật ong đặc biệt.', 30.00, '6568a4af8d614.jpg'),
(6, 2, 'Pink Spaghetti ', 'Spaghetti với tôm sốt cà chua tươi.', 40.00, '6568a51d8590e.jpg'),
(7, 2, 'Pizza ', 'Chúng tôi sử dụng hải sản tươi mát như sò điệp,mực, tôm...', 20.00, '6568a5d87e6d6.jpg'),
(8, 1, 'Bánh Mì Burger', 'Bánh Mì Burger Tươi Nhân Thịt Bò ', 70.00, '6568a785afab2.jpg'),
(9, 2, 'Mực rán', 'Mực Rán (5 miếng)', 3500.00, '6558d958ddb82.png'),
(10, 1, 'MIẾNG ĐÙI GÀ QUAY', '1 Miếng Đùi Gà Quay Giấy Bạc/Đùi Gà Quay Tiêu', 30000.00, '655b1770edd0e.jpg'),
(11, 1, 'MIẾNG PHI-LÊ GÀ QUAY', '1 Miếng Phi-lê Gà Quay Flava/Phi-lê Gà Quay Tiêu', 3000.00, '655b1900aefac.jpg'),
(12, 2, 'Combo Burger Tôm', '01 Burger Tôm  01 Khoai tây chiên (M)  01 Pepsi (M)', 300.00, '655b1a6c41176.png'),
(13, 1, 'Gà Xiên Que ', '4 gà xiên que', 31.00, '6568a8300230c.png'),
(14, 2, 'Cá Nugget (5 miếng)', 'Cá miếng tẩm bột Nugget - 300g', 280.00, '655b1ccb1f3e2.png'),
(15, 1, '3 CÁNH GÀ', '3 CÁNH GÀ HOT WINGS', 50000.00, '6567642e235f3.jpg'),
(16, 1, '5 CÁNH GÀ', '5 CÁNH GÀ HOT WINGS', 70000.00, '65676478e691c.jpg'),
(17, 1, 'Cơm gà xiên que', '1 Cơm Gà Xiên Que', 450000.00, '656779a5edd9b.jpg'),
(18, 4, 'Burger Bò ', 'Burger bò miếng lớn và phô-mai', 59000.00, '65677a5aad98a.png'),
(19, 4, 'Burger phi-lê gà', 'Burger phi-lê gà miếng lớn giòn', 69000.00, '65677af15e082.png'),
(20, 3, 'PHINDI KEM SỮA', 'Cà phê Phin thế hệ mới', 39000.00, '65677c486dd9a.jpg'),
(21, 3, 'PHIN ĐEN ĐÁ', 'Dành cho những tín đồ cà phê đích thực!', 29000.00, '65677bffa6dfa.jpg'),
(22, 3, 'Bánh Mousse Ca Cao', 'Là sự kết hợp giữa ca-cao đậm đà cùng kem tươi.', 19000.00, '65677cc0e7139.png'),
(23, 2, 'Gà Lắc', 'Gà lắc phô mai giòn thơm béo hấp dẫn', 40000.00, '65677d86d81a1.png'),
(24, 2, 'Phô Mai Que', 'Phô mai que giòn thơm béo hấp dẫn', 25000.00, '65677eca3d0e3.png'),
(25, 3, 'Bánh gà', 'Bánh gà chiên', 30000.00, '65726f969627a.jpg'),
(26, 2, 'Com Gà Teriyaki', '1 Com Gà Teriyaki', 45000.00, '657270cf22ba6.jpg'),
(27, 4, 'Cơm Gà Bít-tết', '1 Cơm Gà Bít-tết', 35000.00, '6572711b2744e.jpg'),
(28, 4, 'MÌ Ý XỐT', 'MÌ Ý xốt cà xúc xich', 25000.00, '6572718297857.jpg'),
(29, 1, 'Salad Hạt', 'Salad Hạt Gà', 35000.00, '6572720583a4f.jpg'),
(30, 3, 'Salad Pop', ' 1 Salad Hạt Gà Viên Popcorn', 35000.00, '65727262773a1.jpg'),
(31, 1, 'CƠM', '1 bát cơm', 15000.00, '657272dff0c80.jpg'),
(32, 2, '2 THANH BÍ PHÔ MAI', '2 Thanh Bí Phô Mai', 30000.00, '65727342cfac6.jpg'),
(33, 4, 'Viên Khoai Môn', 'Viên khoai môn kim sa', 50.00, '6572739f680ac.jpg'),
(34, 4, 'Bánh Trứng', '4 Bánh Trứng', 25000.00, '6572740fef692.jpg'),
(35, 2, 'CƠM GÀ RÁN', '1 cơm gà ', 30000.00, '6572b9440ed58.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `remark`
--

CREATE TABLE `remark` (
  `id` int(50) NOT NULL,
  `frm_id` int(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(1, 1, 'in process', 'Cam on ban da dat hang', '2023-11-02 12:01:45'),
(2, 1, 'closed', 'done', '2023-11-02 12:05:13'),
(3, 2, 'in process', 'đang gửi', '2023-12-05 10:02:33'),
(4, 2, 'closed', 'Done', '2023-12-05 10:08:34'),
(5, 4, 'in process', 'Đang vận chuyển', '2023-12-05 10:09:11'),
(6, 13, 'in process', 'đang vận chuyển', '2023-12-08 06:37:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `o_hr` varchar(250) NOT NULL,
  `c_hr` varchar(250) NOT NULL,
  `o_days` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(1, 1, 'KFC', 'kfc@gmail.com', ' (028) 38489828', 'https://kfcvietnam.com.vn/', '--Select your Hours--', '--Select your Hours--', '--Select your Days--', ' SỐ 18 TAM TRINH, P. MINH KHAI, HAI BÀ TRƯNG, HÀ NỘI  ', '6537829e80fec.png', '2023-10-24 08:38:54'),
(2, 1, 'Lotteria', 'lotteria@gmail.com', '0921212121', 'https://www.lotteria.vn/', '6am', '10pm', '24hr-x7', 'Lotteria - Minh Khai', '653764d4e3f93.jpg', '2023-10-24 06:31:48'),
(3, 2, 'Highlands Coffee', 'customerservice@highlandscoffee.com.vn', ' (028) 38489828', 'https://www.highlandscoffee.com.vn/', '7am', '10pm', '24hr-x7', 'Highlands Coffee Hoàng Mai', '653765af4d97f.jpg', '2023-10-24 06:35:27'),
(4, 1, 'McDonald', 'mcdonald@gmail.com', '0212222223', 'https://mcdonalds.vn/', '7am', '9pm', 'Mon-Wed', '12 Lĩnh Nam', '6537b0db07a5f.jpg', '2023-10-24 11:56:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'HaiBaTrung', '2023-11-02 11:55:33'),
(2, 'HoangMai', '2023-11-02 11:55:19'),
(3, 'ThanhXuan', '2023-11-02 11:49:21'),
(4, 'CauGiay', '2023-11-02 11:48:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `u_id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `status` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(1, 'PhamQuan', 'Pham', 'Quan', 'phamquan29hy@gmail.com', ' (028) 38489828', 'e10adc3949ba59abbe56e057f20f883e', '126 Nam Dư', 0, '2023-10-24 11:57:29'),
(2, 'XuanViet', 'Xuan', 'Viet', 'xuanviet@gmail.com', '0932324233', 'e10adc3949ba59abbe56e057f20f883e', 'Long Biên Hà Nội', 0, '2023-12-01 03:37:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(250) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(1, 1, 'Bánh mì cừu Yorkshire', 1, 100.00, 'closed', '2023-11-02 12:05:13'),
(2, 1, 'Bánh mì cừu Yorkshire', 1, 100.00, 'closed', '2023-12-05 10:08:34'),
(3, 1, 'Bánh mì cừu Yorkshire', 1, 100.00, NULL, '2023-12-01 01:46:57'),
(4, 1, 'Gà Madeira', 1, 50.00, 'in process', '2023-12-05 10:09:11'),
(6, 1, 'CƠM GÀ RÁN', 1, 50.00, NULL, '2023-12-01 03:14:41'),
(7, 1, 'Combo Burger Tôm', 1, 300.00, NULL, '2023-12-01 03:22:13'),
(8, 1, 'Mực rán', 1, 3500.00, NULL, '2023-12-01 03:22:13'),
(9, 1, 'CƠM GÀ RÁN', 1, 50.00, NULL, '2023-12-05 09:50:53'),
(10, 1, 'Com Gà Teriyaki', 1, 45000.00, NULL, '2023-12-08 03:54:34'),
(11, 1, '2 THANH BÍ PHÔ MAI', 1, 30000.00, NULL, '2023-12-08 03:54:34'),
(12, 1, 'Miếng gà giòn', 1, 30.00, NULL, '2023-12-08 06:34:37'),
(13, 1, 'CƠM GÀ RÁN', 1, 50.00, 'in process', '2023-12-08 06:37:41');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Chỉ mục cho bảng `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Chỉ mục cho bảng `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Chỉ mục cho bảng `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Chỉ mục cho bảng `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
