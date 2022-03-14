-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2022 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_sp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nsx`
--

CREATE TABLE `tbl_nsx` (
  `ma_nhasx` int(11) NOT NULL,
  `ten_nhasx` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nsx`
--

INSERT INTO `tbl_nsx` (`ma_nhasx`, `ten_nhasx`) VALUES
(1, 'apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(1000) NOT NULL,
  `ma_nhasx` varchar(25) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ma_sp`, `ten_sp`, `ma_nhasx`, `dongia`, `soluong`) VALUES
(1, 'iphone 11', 'Apple', 1000, 2),
(2, 'sanpham1', 'Google', 850, 3),
(3, 'sam sung note 30 ultra', 'LG', 85, 5),
(4, 'iphone 12', 'Samsung', 410, 7),
(5, 'sp1', 'Samsung', 3, 4),
(6, 'sp11', 'Google', 3333, 222),
(7, '', 'Google', 1000, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_nsx`
--
ALTER TABLE `tbl_nsx`
  ADD PRIMARY KEY (`ma_nhasx`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_nsx`
--
ALTER TABLE `tbl_nsx`
  MODIFY `ma_nhasx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
