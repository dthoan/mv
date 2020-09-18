-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 18, 2020 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mv_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `id` int(11) NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`id`, `category_code`, `category_name`, `created_at`) VALUES
(18, 'TSPL_001', 'Trà Sữa', '2020-09-18 06:19:10'),
(19, 'TTMPL_002', 'Trà Thảo Mộc ', '2020-09-18 06:19:38'),
(20, 'TTCPL_003', 'Trà Trái Cây', '2020-09-18 06:20:14'),
(21, 'DXPL_004', 'Đá Xay', '2020-09-18 06:20:56'),
(22, 'NEPL_005', 'Nước Ép ', '2020-09-18 06:22:00'),
(23, '0001', 'Khác', '2020-09-18 06:25:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image_title`, `news_at`, `topic_id`) VALUES
(1, 'Trung Quốc rót tỷ đô xây \'thành phố trong mơ\'', 'Tân Khu Hùng An, Hà Bắc, đang trong cơn sốt xây dựng nhằm hiện thực hóa dự án tham vọng của chính phủ: kiến tạo \"thành phố trong mơ\" từ con số 0.\r\n\r\nTrung Quốc đã tuyên bố chi hàng tỷ USD vào các dự án cơ sở hạ tầng trong năm nay nhằm thúc đẩy động lực phục hồi kinh tế quốc gia và ổn định thị trường việc làm sau đại dịch Covid-19. Hùng An, cách trung tâm Bắc Kinh khoảng hai giờ lái xe về phía nam, đang đi những bước đầu tiên trên con đường trở thành một đô thị kiểu mới sau khi Chủ tịch Trung Quốc Tập Cận Bình hồi tháng 4/2017 đích thân chọn nơi đây để kiến tạo \"thành phố của tương lai\".', '', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `discount` int(11) DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `discount`, `description`, `images`, `category_id`) VALUES
(20, 'Sữa Chua Phúc Bồn Tử Đác Cam', '65000', 10, 'Berry Berry Yogurt', 'public/uploads/e27ea63f4764bfcd7acc58d1f126c22d_20200918082650.png', 22),
(21, 'Hồng Trà Đác Cam', '6500', 10, 'Forest Black Tea', 'public/uploads/94970d6103ec23a00f4d9dd6ed2f025b_20200918084834.png', 20),
(22, 'Trà Lài Đác Thơm', '55000', 0, 'Forest Jasmine Tea', 'public/uploads/24b06739a7b2d713359a7cd6f36e821f_20200918085041.png', 20),
(23, 'Trà Ô Long Sữa', '45000', 0, 'Oolong Milk Tea', 'public/uploads/4c24333730ecc8d196d6c004e3eef752_20200918085152.png', 19),
(24, 'Trà Sữa Phúc Long', '50000', 0, 'Phuc Long Tea Latte', 'public/uploads/040d21c050fac9355c9bff072ecbaa08_20200918085306.png', 18),
(25, 'Trà Đào', '60000', 0, 'Peach Black Tea', 'public/uploads/913053e73dc415f71c25c0f15c77de9b_20200918085421.png', 20),
(26, 'Trà Nhãn - Sen', '64000', 0, 'Longan Tea - Lotus', 'public/uploads/5365f25bb01270679f223210a077919d_20200918085544.png', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaLoai` (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `MaLoai_2` (`category_id`),
  ADD KEY `MaLoai_3` (`category_id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
