-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 02:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `pttt` int(255) NOT NULL DEFAULT 1 COMMENT '1.thanh toan nhan hang\r\n2.thanh toan the tin dung',
  `ngaydat` varchar(255) DEFAULT NULL,
  `trangthai` varchar(255) NOT NULL COMMENT '0.Cho xac nhan\r\n1.Cho lay hang\r\n2.Dang giao\r\n3.Da giao',
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ngaybl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `id_user`, `id_sp`, `ngaybl`) VALUES
(1, 'good', 4, 1, '2023-11-12'),
(5, 'bgdfgbfgb', 2, 1, '2023-11-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_gh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `img_sp` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `color` int(11) NOT NULL DEFAULT 0 COMMENT '0.Trắng\r\n1.Đen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id_color`, `color`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name`) VALUES
(1, 'ÁO POLO'),
(4, 'ÁO SƠMI'),
(5, 'ÃO THUN'),
(7, 'ÃO KHOÃC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pro` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `soluong` int(255) DEFAULT NULL,
  `discount` int(11) NOT NULL COMMENT 'giam gia',
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pro`, `name`, `price`, `img`, `mota`, `luotxem`, `soluong`, `discount`, `iddm`) VALUES
(1, 'tivi12', 2555, 'Ã´ tÃ´.jpg', 'TIVi mowis nhaats 2022555       ', 0, NULL, 200, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `size` int(11) NOT NULL DEFAULT 0 COMMENT '0.M\r\n1.S\r\n2.XL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_bienthe`
--

CREATE TABLE `sp_bienthe` (
  `id_bt` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sp_bienthe`
--

INSERT INTO `sp_bienthe` (`id_bt`, `id_size`, `id_color`, `id_sp`, `soluong`) VALUES
(1, 1, 2, 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` int(10) NOT NULL,
  `avata` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0 COMMENT '0.view\r\n1.admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `avata`, `email`, `address`, `phone`, `role`) VALUES
(1, 'bandz', 123456, '', 'banphph36928@fpt.edu.vn', 'Ha Noi', 382686204, 1),
(2, 'ben', 123456, '', 'banbow44@gmail.com', 'HÃ  Ná»™i', 382686204, 1),
(4, 'huy phuc', 123456, NULL, 'phucphph36928@fpt.edu.vn', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `sp_bienthe`
--
ALTER TABLE `sp_bienthe`
  ADD PRIMARY KEY (`id_bt`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sp_bienthe`
--
ALTER TABLE `sp_bienthe`
  MODIFY `id_bt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_pro`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_pro`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id_dm`);

--
-- Các ràng buộc cho bảng `sp_bienthe`
--
ALTER TABLE `sp_bienthe`
  ADD CONSTRAINT `sp_bienthe_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`),
  ADD CONSTRAINT `sp_bienthe_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`),
  ADD CONSTRAINT `sp_bienthe_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
