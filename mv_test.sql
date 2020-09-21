-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2020 lúc 10:26 AM
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
(23, '0001', 'Khác', '2020-09-18 06:25:34'),
(24, 'TT_007', 'Trà', '2020-09-20 03:34:28'),
(25, 'CF_008', 'Cà Phê', '2020-09-20 03:34:46'),
(26, 'DAM_009', 'Đồ Ăn Mặn', '2020-09-20 03:35:27'),
(27, 'TM_010', 'Tráng Miệng', '2020-09-20 03:35:47');

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
(1, 'GRAND OPENING: PHÚC LONG LÊ VĂN LƯƠNG – HỒ CHÍ MINH', 'Đón chào tháng 9 rực rỡ với cửa hàng Phúc Long thứ 75: Phúc Long Lê Văn Lương sẽ chính thức phục vụ kể từ thứ Hai, ngày 21.09.2020.\r\nTham gia vào chương trình khai trương kể từ thứ Sáu, ngày 25.09.2020. Các khách hàng đến cửa hàng Phúc Long Lê Văn Lương sẽ có cơ hội nhận những phần quà cực kỳ hấp dẫn:', 'https://phuclong.com.vn/upload/images/EC-UU-DAI-VANG_2048.jpg', '2020-09-18 09:13:49', 0),
(2, 'MUA 3 TẶNG 1, MUA 5 TẶNG 2', 'Khách hàng đặt hàng qua Grab (31/08 - 04/09) và hotline 1800 6779 (31/08 - 19/09) trên hệ thống cửa hàng toàn quốc sẽ nhận được ưu đãi sau:\r\n\r\nMua 3 tặng 1, mua 5 tặng 2 (*)\r\nMiễn phí giao hàng từ 3 ly trong bán kính 3km\r\n(*) – Thức uống mua áp dụng: thức uống size Lớn thuộc hai nhóm: Classical Coffee và Special Tea.\r\n\r\n- Thức uống tặng size Vừa gồm: Hồng trà chanh, Hồng trà sữa, Trà sữa Phúc Long, Trà Olong sữa, Trà xanh Latte, Trà Đào sữa, Trà vải (sen/lài), Hồng trà vải, Trà nhãn (sen/lài), Trà thảo mộc, Trà hoa hồng, Trà Olong dâu.', 'https://phuclong.com.vn/upload/images/EC-UU-DAI-VANG_2048.jpg', '2020-09-18 09:13:44', 0),
(3, 'MUA 3 TẶNG 1, MUA 5 TẶNG 2', 'Khách hàng đặt hàng qua Grab (31/08 - 04/09) và hotline 1800 6779 (31/08 - 19/09) trên hệ thống cửa hàng toàn quốc sẽ nhận được ưu đãi sau:\r\n\r\nMua 3 tặng 1, mua 5 tặng 2 (*)\r\nMiễn phí giao hàng từ 3 ly trong bán kính 3km\r\n(*) – Thức uống mua áp dụng: thức uống size Lớn thuộc hai nhóm: Classical Coffee và Special Tea.\r\n\r\n- Thức uống tặng size Vừa gồm: Hồng trà chanh, Hồng trà sữa, Trà sữa Phúc Long, Trà Olong sữa, Trà xanh Latte, Trà Đào sữa, Trà vải (sen/lài), Hồng trà vải, Trà nhãn (sen/lài), Trà thảo mộc, Trà hoa hồng, Trà Olong dâu', 'https://phuclong.com.vn/upload/images/EC-UU-DAI-VANG_2048.jpg', '2020-09-18 09:13:40', 0),
(4, 'ƯU ĐÃI VÀNG – NHẬN NGAY BỘ ĐÔI TƯƠI MÁT', 'Đón chào tháng 8 với chương trình “Ưu Đãi Vàng – Nhận Ngay Bộ Đôi Tươi Mát” trị giá 164.000đ chưa từng có khi mua hoá đơn từ 180,000đ tại cửa hàng Phúc Long hoặc đặt hàng qua Call Center 1800 6779.', 'https://phuclong.com.vn/upload/images/EC-UU-DAI-VANG_2048.jpg', '2020-09-18 08:40:41', 0),
(5, 'ƯU ĐÃI VÀNG – NHẬN NGAY BỘ ĐÔI TƯƠI MÁT', 'Đón chào tháng 8 với chương trình “Ưu Đãi Vàng – Nhận Ngay Bộ Đôi Tươi Mát” trị giá 164.000đ chưa từng có khi mua hoá đơn từ 180,000đ tại cửa hàng Phúc Long hoặc đặt hàng qua Call Center 1800 6779.', 'https://phuclong.com.vn/upload/images/EC-UU-DAI-VANG_2048.jpg', '2020-09-18 08:40:51', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permision_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permision_name` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permision_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `permision_code`, `permision_name`, `created_at`, `updated_at`, `permision_order`) VALUES
(1, 'admin', 'Admin', '2020-09-19 08:11:34', '2020-09-19 08:30:09', 0),
(2, 'view_product', 'View Product', '2020-09-19 08:12:10', '2020-09-19 08:29:15', 1),
(3, 'view_user', 'View User', '2020-09-19 08:42:20', '2020-09-19 17:59:49', 1),
(4, 'add_user', 'Add User', '2020-09-19 08:42:34', '2020-09-19 17:59:53', 1),
(5, 'diactive_user', 'Diactive User', '2020-09-19 08:42:48', '2020-09-19 17:59:58', 1),
(6, 'add_permission', 'Add Permission', '2020-09-19 17:37:17', '2020-09-19 18:00:07', 9),
(7, 'add_product', 'Add Product', '2020-09-19 17:47:08', '2020-09-19 17:58:58', 2),
(8, 'edit_product', 'Edit Product', '2020-09-19 17:47:31', '2020-09-19 17:59:02', 3),
(9, 'delete_product', 'Delete Product', '2020-09-19 17:47:46', '2020-09-19 17:59:05', 4),
(10, 'view_category', 'View Category', '2020-09-19 17:48:52', '2020-09-19 17:59:18', 5),
(11, 'add_category', 'Add Category', '2020-09-19 17:49:29', '2020-09-19 17:59:20', 6),
(12, 'edit_category', 'Edit Category', '2020-09-19 17:49:42', '2020-09-19 17:59:25', 7),
(13, 'delete_category', 'Delete Category', '2020-09-19 17:49:58', '2020-09-19 17:59:27', 8),
(14, 'view_permission', 'View Permission', '2020-09-19 17:50:28', '2020-09-19 18:00:14', 9),
(15, 'edit_permission', 'Edit Permission', '2020-09-19 17:50:42', '2020-09-19 18:00:11', 9),
(16, 'delete_permission', 'Delete Permission', '2020-09-19 17:51:02', '2020-09-19 18:00:16', 9),
(17, 'edit_permission_user', 'Edit Permission User', '2020-09-19 18:05:52', '2020-09-19 18:05:52', 10),
(18, 'edit_user', 'Edit User', '2020-09-19 18:09:09', '2020-09-19 18:09:09', 1);

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
(21, 'Hồng Trà Đác Cam', '65000', 10, 'Forest Black Tea', 'public/uploads/94970d6103ec23a00f4d9dd6ed2f025b_20200918084834.png', 20),
(22, 'Trà Lài Đác Thơm', '55000', 0, 'Forest Jasmine Tea', 'public/uploads/24b06739a7b2d713359a7cd6f36e821f_20200918085041.png', 20),
(23, 'Trà Ô Long Sữa', '45000', 0, 'Oolong Milk Tea', 'public/uploads/4c24333730ecc8d196d6c004e3eef752_20200918085152.png', 19),
(24, 'Trà Sữa Phúc Long', '50000', 0, 'Phuc Long Tea Latte', 'public/uploads/040d21c050fac9355c9bff072ecbaa08_20200918085306.png', 18),
(25, 'Trà Đào', '60000', 0, 'Peach Black Tea', 'public/uploads/913053e73dc415f71c25c0f15c77de9b_20200918085421.png', 20),
(26, 'Trà Nhãn - Sen', '64000', 0, 'Longan Tea - Lotus', 'public/uploads/5365f25bb01270679f223210a077919d_20200918085544.png', 20),
(27, 'Trà Thảo Mộc', '50000', 0, 'Lucky Tea', 'public/uploads/fa882f7720922d2edb078120add55a70_20200918093202.png', 19),
(28, 'Hồng Trà Sữa', '50000', 0, 'Black Milk Tea', 'public/uploads/fb78f5489bae09e3d7feed2787a7b9d0_20200918093238.png', 18),
(29, 'Trà Cocktail Phúc Long', '65000', 0, 'Phuc Long Cocktail Tea', 'public/uploads/6478267b3b5922c6ee6b750410dc7694_20200918093319.png', 21),
(31, 'Trà Xanh Đá Xay', '55000', 0, 'Green Tea Ice Blended', 'public/uploads/e809f15f4f74616cc3656d0da45ef05c_20200920053715.png', 21),
(32, 'Trà Đào Đá Xay', '60000', 0, 'Peach Tea', 'public/uploads/ca5395e70a359e46bd49fa2b789b4e92_20200920053802.png', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `fullname` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `remember_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `token_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `permisions` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag_deactive` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `remember_code`, `token_code`, `permisions`, `birthday`, `created_at`, `updated_at`, `flag_deactive`) VALUES
(1, 'saoxa37', 'e147605d9bac7e35a1239f244ad98467fff1c845', 'saoxa37@gmail.com', 'Đậu Minh Việt', '0329012526', '', '', '', '05/07/1998', '2020-09-18 16:00:13', '2020-09-19 08:43:03', 0),
(2, 'admin', 'a6bb5f6eaed2bcb24c8cd64c76bde9918cca60c9', 'doanthihoan0961556327@gmail.com', 'Đoàn Thị Hoàn', '0329012526', '', '', '1|2|3|4|5|18|7|8|9|10|11|12|13|6|14|15|16|17', '10/02/1999', '2020-09-19 05:39:12', '2020-09-20 03:33:42', 0),
(3, 'user1', 'ce81085865cfea69c6ebd9d0fe69ab03f7eff010', 'user@demo.local', 'Demo User', '0879848104', '', '', '', '14/01/1998', '2020-09-19 08:59:39', '2020-09-19 09:03:50', 1);

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
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
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
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
