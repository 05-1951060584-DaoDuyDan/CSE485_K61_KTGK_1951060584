-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060584_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(30) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `nghenghiep` varchar(50) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Nguyen Van A', 'Nam', 2001, 'Học sinh', '2022-01-01', '2022-01-31', 'Hà Nội'),
(3, 'Nguyễn Thị H', 'Nữ', 2001, 'Học sinh', '2022-01-01', '2022-01-07', 'Hà Nội'),
(4, 'Nguyễn T Dàa', 'Nữ', 2001, 'Học sinh', '2022-01-01', '2022-01-02', 'Hà Nội'),
(8, 'Đào Duy Đán', 'Nam', 2001, 'Sinh Viên', '2022-01-01', '2022-01-27', 'Hà Nội'),
(9, 'Phạm Lê Dũng', 'Nam', 2001, 'Học sinh', '2022-01-01', '2022-01-31', 'Hà Nam'),
(10, 'Lê Đức Thắng', 'Nam', 2001, 'Học sinh', '2022-01-01', '2022-01-31', 'Vĩnh Phúc'),
(11, 'Nguyễn Thị D', 'Nữ', 2001, 'Học sinh', '2022-01-01', '2022-01-30', 'Hà Nội'),
(12, 'Lê Hoàng T', 'Nữ', 2001, 'Sinh Viên', '2022-01-08', '2022-01-11', 'Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
