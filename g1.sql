-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2020 lúc 04:16 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `g1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idCTDH` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `idGT` int(11) NOT NULL,
  `dongia` decimal(10,0) UNSIGNED NOT NULL,
  `soluong` int(11) UNSIGNED NOT NULL,
  `thanhtien` decimal(10,0) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgoitap`
--

CREATE TABLE `chitietgoitap` (
  `idCTGT` int(11) NOT NULL,
  `idGT` int(11) NOT NULL,
  `gia` decimal(10,0) UNSIGNED NOT NULL,
  `mota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `idDV` int(11) NOT NULL,
  `tenDV` varchar(255) NOT NULL,
  `idLoaiDV` int(11) NOT NULL,
  `HinhDV` varchar(50) DEFAULT NULL,
  `gioithieu` varchar(255) DEFAULT NULL,
  `loiich` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goitap`
--

CREATE TABLE `goitap` (
  `idGT` int(11) NOT NULL,
  `tenGT` varchar(255) NOT NULL,
  `idloaiGT` int(11) NOT NULL,
  `gia` decimal(10,0) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhtintuc`
--

CREATE TABLE `hinhtintuc` (
  `idHinhTT` int(11) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `tenKH` varchar(255) NOT NULL DEFAULT '',
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `cmnd` int(11) NOT NULL,
  `gioitinh` varchar(50) NOT NULL DEFAULT '',
  `ngaysinh` date DEFAULT NULL,
  `ngaycap` date DEFAULT NULL,
  `noicap` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtap`
--

CREATE TABLE `lichtap` (
  `idLT` int(11) NOT NULL,
  `loaiLT` varchar(50) NOT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidichvu`
--

CREATE TABLE `loaidichvu` (
  `idLoaiDV` int(11) NOT NULL,
  `tenLoaiDV` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaigoitap`
--

CREATE TABLE `loaigoitap` (
  `idloaiGT` int(11) NOT NULL,
  `tenloaiGT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNV` int(11) NOT NULL,
  `tenNV` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `cmnd` int(11) DEFAULT NULL,
  `ngaycap` date DEFAULT NULL,
  `noicap` date DEFAULT NULL,
  `gioitinh` varchar(50) DEFAULT NULL,
  `hinhanh` varchar(50) DEFAULT NULL,
  `idQuyen` int(11) NOT NULL,
  `gmailnv` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `idQuyen` int(11) NOT NULL,
  `loaiQuyen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idTT` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idHinhTT` int(11) NOT NULL,
  `ngaydangtin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idCTDH`),
  ADD KEY `KEY_CTDH_DH` (`idDH`),
  ADD KEY `Key_CTDH_GT` (`idGT`);

--
-- Chỉ mục cho bảng `chitietgoitap`
--
ALTER TABLE `chitietgoitap`
  ADD PRIMARY KEY (`idCTGT`),
  ADD KEY `Key_GoiTap` (`idGT`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`idDV`),
  ADD KEY `Key_LoaiDV` (`idLoaiDV`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `KEY_KH_DH` (`idKH`);

--
-- Chỉ mục cho bảng `goitap`
--
ALTER TABLE `goitap`
  ADD PRIMARY KEY (`idGT`),
  ADD KEY `Key_loaiGT` (`idloaiGT`);

--
-- Chỉ mục cho bảng `hinhtintuc`
--
ALTER TABLE `hinhtintuc`
  ADD PRIMARY KEY (`idHinhTT`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`);

--
-- Chỉ mục cho bảng `lichtap`
--
ALTER TABLE `lichtap`
  ADD PRIMARY KEY (`idLT`);

--
-- Chỉ mục cho bảng `loaidichvu`
--
ALTER TABLE `loaidichvu`
  ADD PRIMARY KEY (`idLoaiDV`);

--
-- Chỉ mục cho bảng `loaigoitap`
--
ALTER TABLE `loaigoitap`
  ADD PRIMARY KEY (`idloaiGT`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNV`),
  ADD KEY `KEY_quyenNV` (`idQuyen`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTT`),
  ADD KEY `key_HinhTT` (`idHinhTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idCTDH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietgoitap`
--
ALTER TABLE `chitietgoitap`
  MODIFY `idCTGT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `idDV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `goitap`
--
ALTER TABLE `goitap`
  MODIFY `idGT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhtintuc`
--
ALTER TABLE `hinhtintuc`
  MODIFY `idHinhTT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichtap`
--
ALTER TABLE `lichtap`
  MODIFY `idLT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaidichvu`
--
ALTER TABLE `loaidichvu`
  MODIFY `idLoaiDV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaigoitap`
--
ALTER TABLE `loaigoitap`
  MODIFY `idloaiGT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `KEY_CTDH_DH` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Key_CTDH_GT` FOREIGN KEY (`idGT`) REFERENCES `goitap` (`idGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietgoitap`
--
ALTER TABLE `chitietgoitap`
  ADD CONSTRAINT `Key_GoiTap` FOREIGN KEY (`idGT`) REFERENCES `goitap` (`idGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD CONSTRAINT `Key_LoaiDV` FOREIGN KEY (`idLoaiDV`) REFERENCES `loaidichvu` (`idLoaiDV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `KEY_KH_DH` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`idKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `goitap`
--
ALTER TABLE `goitap`
  ADD CONSTRAINT `Key_loaiGT` FOREIGN KEY (`idloaiGT`) REFERENCES `loaigoitap` (`idloaiGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `KEY_quyenNV` FOREIGN KEY (`idQuyen`) REFERENCES `quyen` (`idQuyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `key_HinhTT` FOREIGN KEY (`idHinhTT`) REFERENCES `hinhtintuc` (`idHinhTT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
