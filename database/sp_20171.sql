-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2017 lúc 12:58 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sp_20171`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'áo khoác bomber xám', 'ao_khoac_bomber(1).jpg', 240000),
(2, 'ao_khoac_du_nam', 'ao_khoac_du_nam.jpg', 209000),
(3, 'áo khoác bomber đen', 'ao_khoac_bomber (2).jpg', 160000),
(4, 'ao_khoac_nam_akuba', 'ao_khoac_nam_akuba.jpg', 520000),
(5, 'áo sơ mi dài tay', 'ao_so_mi_dai_tay.jpg', 175000),
(6, 'áo sơ mi ngắn tay caro akuba', 'ao_so_mi_ngan_tay_caro_akuba.jpg', 290000),
(7, 'áo thun nam alex', 'ao_thun_nam_alex.jpg', 148000),
(8, 'áo thun nam jackies xanh thẫm', 'ao_thun_nam_jackies.jpg', 230000),
(9, 'áo thun nam jackies xám', 'ao_thun_nam_jackies_2.jpg', 250000),
(10, 'quần tây nam công sở Vũ Tuấn', 'quan_tay_nam_cong_so_vu_tuan.jpg', 365000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'pnam2311', 'pnam2311'),
(4, 'hklbndvl', 'ducprocf1'),
(5, 'tuanml', 'tuanml'),
(6, 'testuserlmao', 'lmaoxd'),
(7, 'lmduc', '123456'),
(9, 'shiro', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `phone_number` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `full_name`, `sex`, `email`, `address`, `phone_number`) VALUES
(4, 'Duc', 'Male', 'pmduc@mail.com', 'lolxd', 1023024824),
(6, 'lmao guy', 'Female', 'lmaoxd@lmail.com', 'lmaostreet', 2147483647),
(7, 'Lee Mink Duk', 'Male', 'lmduk@gmail.com', 'HN', 1234956705),
(9, 'Shiraori', 'Female', 'shiro@gmail.com', 'Issekai', 1234567);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `USERNAME` (`username`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
