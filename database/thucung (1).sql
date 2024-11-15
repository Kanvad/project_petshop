-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2024 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thucung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`id`, `ten`, `soluong`, `gia`) VALUES
(1, 'Nhà cây cho mèo ngủ', 1, '30.000'),
(2, 'Thức ăn cho mèo Snack Jinny 35g', 1, '30.000'),
(3, 'Banh nhựa cho cún', 1, '20.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ten` text NOT NULL,
  `gia` text NOT NULL,
  `hinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ten`, `gia`, `hinh`) VALUES
('Thức ăn cho mèo Snack Jinny 35g', '30.000', 'ThucAnMeo1.jpg'),
('Thức ăn cho mèo Minino Yum! 7kg', '250.000', 'ThucAnMeo3.jpg'),
('Thức ăn mèo Purina Pro Plan 1.5kg', '250.000', 'ThucAnMeo6.jpg'),
('Thức ăn hạt cho mèo Golden Gatos', '200.000', 'ThucAnMeo5.jpg'),
('Thức ăn cho mèo Cats Rang 5kg', '170.000', 'ThucAnMeo2.jpg'),
('Thức ăn hạt Whiskas cho mèo 1.1kg', '128.000', 'ThucAnMeo4.jpg'),
('Thức ăn cho cún Royal Canin 1.5kg', '450.000', 'ThucAnCho1.jpg'),
('Thức ăn cho cún Pedigree 8kg', '300.000', 'ThucAnCho2.jpg'),
('Thức ăn cho cún Chunky 1.5kg', '200.000', 'ThucAnCho3.jpg'),
('Thức ăn hạt Pedigree cho cún', '500.000', 'ThucAnCho4.jpg'),
('Thức ăn cho cún Chunky 1.5kg', '240.000', 'ThucAnCho5.jpg'),
('Banh nhựa cho cún', '20.000', 'DoChoiCho1.jpg'),
('Banh nhựa 7 sắc cho cún', '20.000', 'DoChoiCho2.jpg'),
('Dây thừng cho cún chơi đùa', '30.000', 'DoChoiCho3.jpg'),
('Bóng bằng dây thừng cho mèo chơi đùa', '20.000', 'DoChoiMeo1.jpg'),
('Thảm nước cho mèo', '69.000', 'DoChoiMeo2.jpg'),
('Cần Câu trêu mèo', '15.000', 'DoChoiMeo3.jpg'),
('Nhà cây cho mèo ngủ', '50.000', 'DoChoiMeo4.jpg'),
('Ống cào móng cho mèo', '35.000', 'DoChoiMeo5.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
