-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2023 lúc 03:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopnhom9`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethoadon`
--

CREATE TABLE `tbl_chitiethoadon` (
  `id_chitiethoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `mahoadon` varchar(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitiethoadon`
--

INSERT INTO `tbl_chitiethoadon` (`id_chitiethoadon`, `id_sanpham`, `mahoadon`, `soluongmua`) VALUES
(1, 12, '842', 1),
(2, 36, '842', 1),
(3, 12, '2505', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `mahoadon` varchar(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhthucthanhtoan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`id_hoadon`, `id_khachhang`, `mahoadon`, `trangthai`, `hinhthucthanhtoan`) VALUES
(1, 1, '842', 1, 'Tiền Mặt'),
(2, 1, '2505', 1, 'Chuyển Khoản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` text NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES
(1, 'Nguyễn Hoài Nam', 'taca1706', '12345', '0867072237', 'taca1706', '					Vĩnh Phúc			', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vande` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `hovaten`, `email`, `vande`) VALUES
(1, 'Nguyễn Nam', 'Taca1706@gmail.com', 'Quần áo quá đắt.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `id_loaisanpham` int(11) NOT NULL,
  `tenloaisanpham` varchar(100) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`id_loaisanpham`, `tenloaisanpham`, `mota`) VALUES
(1, 'Quần áo Nam', 'Quần áo thoáng mát dành riêng cho nam giới: Áo phông, Ba lỗ, ... Quần áo lịch sự dành riêng cho công sở.'),
(2, 'Quần áo Nữ', 'Quần áo xinh xẻo cho các nàng, Váy công sở, Chân váy, ...'),
(3, 'Quần áo trẻ em', 'Quần áo đáng yêu, năng động cho trẻ em. Quần áo đồng phục cho bé đi học.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_mausac`
--

CREATE TABLE `tbl_mausac` (
  `id_mausac` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `loaimau` varchar(50) NOT NULL,
  `hinhanh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_mausac`
--

INSERT INTO `tbl_mausac` (`id_mausac`, `id_sanpham`, `loaimau`, `hinhanh`) VALUES
(1, 36, 'Đỏ', 'mau_do.jpg'),
(2, 36, 'Trắng', 'mau_trang.jpg'),
(3, 36, 'Xanh Lá Cây Đậm', 'mau_xanhlacaydam.jpg'),
(4, 35, 'Nâu', 'mau_nau.jpg'),
(5, 34, 'Xanh Đậm', 'mau_xanhdam.png'),
(6, 33, 'Xám', 'mau_xam.png'),
(7, 32, 'Đỏ Đậm', 'mau_dodam.png'),
(8, 31, 'Đen', 'mau_den.webp'),
(9, 30, 'Đen', 'mau_den.webp'),
(10, 29, 'Đen', 'mau_den.webp'),
(11, 28, 'Trắng', 'mau_trang.jpg'),
(12, 27, 'Xanh', 'product_color.png'),
(13, 26, 'Đỏ Đậm', 'mau_dodam.png'),
(14, 25, 'Xám', 'mau_xam.png'),
(15, 24, 'Đen', 'mau_den.webp'),
(16, 23, 'Xám', 'mau_xam.png'),
(17, 22, 'Đen', 'mau_den.webp'),
(18, 21, 'Trắng', 'mau_trang.jpg'),
(19, 20, 'Đỏ', 'mau_do.png'),
(20, 19, 'Xám', 'mau_xam.png'),
(21, 18, 'Đỏ', 'mau_do.png'),
(22, 17, 'Xanh Đậm', 'mau_xanhdam.png'),
(23, 16, 'Xám', 'mau_xam.png'),
(24, 15, 'Đen', 'mau_den.webp'),
(25, 14, 'Xám', 'mau_xam.png'),
(26, 13, 'Đen', 'mau_den.webp'),
(27, 12, 'Trắng', 'mau_trang.jpg'),
(28, 11, 'Xanh Lá Cây', 'mau_xanhlacay.png'),
(29, 10, 'Trắng', 'mau_trang.jpg'),
(30, 9, 'Đỏ', 'mau_do.png'),
(31, 8, 'Vàng', 'mau_vang.png'),
(32, 7, 'Trắng', 'mau_trang.jpg'),
(33, 6, 'Trắng', 'mau_trang.jpg'),
(34, 5, 'Hồng', 'mau_hongdam.png'),
(35, 4, 'Đỏ', 'mau_dodam.png'),
(36, 3, 'Xanh Lá Cây Đậm', 'mau_xanhlacaydam.jpg'),
(37, 2, 'Đen', 'mau_den.webp'),
(39, 1, 'Đen', 'mau_den.webp'),
(40, 1, 'Xanh Lá Cây', 'mau_xanhlacay.png'),
(41, 1, 'Đỏ', 'mau_do.png'),
(42, 2, 'Xanh', 'product_color.png'),
(43, 2, 'Nâu', 'mau_nau.jpg'),
(44, 3, 'Đỏ', 'mau_do.png'),
(45, 3, 'Xám', 'mau_xam.png'),
(46, 4, 'Xanh Lá Cây', 'mau_xanhlacay.png'),
(47, 4, 'Nâu', 'mau_nau.jpg'),
(48, 5, 'Đỏ', 'mau_do.png'),
(49, 5, 'Trắng', 'mau_trang.jpg'),
(50, 6, 'Xám', 'mau_xam.png'),
(51, 6, 'Đỏ', 'mau_do.png'),
(52, 7, 'Xám', 'mau_xam.png'),
(53, 7, 'Đỏ', 'mau_do.png'),
(54, 8, 'Xám', 'mau_xam.png'),
(55, 8, 'Xanh', 'product_color.png'),
(56, 9, 'Trắng', 'mau_trang.jpg'),
(57, 9, 'Nâu', 'mau_nau.jpg'),
(58, 10, 'Đỏ', 'mau_do.png'),
(59, 10, 'Nâu', 'mau_nau.jpg'),
(60, 11, 'Đỏ', 'mau_do.png'),
(61, 11, 'Trắng', 'mau_trang.jpg'),
(62, 12, 'Đỏ', 'mau_do.png'),
(63, 12, 'Hồng', 'mau_hongdam.png'),
(64, 13, 'Đỏ', 'mau_do.png'),
(65, 13, 'Xanh', 'product_color.png'),
(66, 14, 'Đỏ', 'mau_do.png'),
(67, 14, 'Nâu', 'mau_nau.jpg'),
(68, 15, 'Đỏ', 'mau_do.png'),
(69, 15, 'Hồng', 'mau_hongdam.png'),
(70, 16, 'Đỏ', 'mau_do.png'),
(71, 16, 'Nâu', 'mau_nau.jpg'),
(72, 17, 'Xanh Lá Cây', 'mau_xanhlacay.png'),
(73, 17, 'Đỏ Đậm', 'mau_dodam.png'),
(74, 18, 'Xám', 'mau_xam.png'),
(75, 18, 'Nâu', 'mau_nau.jpg'),
(76, 19, 'Đỏ', 'mau_do.png'),
(77, 19, 'Nâu', 'mau_nau.jpg'),
(78, 20, 'Đỏ Đậm', 'mau_dodam.png'),
(79, 20, 'Trắng', 'mau_trang.jpg'),
(80, 21, 'Đỏ', 'mau_do.png'),
(81, 21, 'Nâu', 'mau_nau.jpg'),
(82, 22, 'Đỏ', 'mau_do.png'),
(83, 22, 'Trắng', 'mau_trang.jpg'),
(84, 23, 'Đỏ', 'mau_do.png'),
(85, 23, 'Xanh', 'product_color.png'),
(86, 24, 'Trắng', 'mau_trang.jpg'),
(87, 24, 'Xám', 'mau_xam.png'),
(88, 25, 'Vàng', 'mau_vang.png'),
(89, 25, 'Nâu', 'mau_nau.jpg'),
(90, 26, 'Đỏ', 'mau_do.png'),
(91, 26, 'Nâu', 'mau_nau.jpg'),
(92, 27, 'Xám', 'mau_xam.png'),
(93, 27, 'Trắng', 'mau_trang.jpg'),
(94, 28, 'Xám', 'mau_xam.png'),
(95, 28, 'Xanh', 'product_color.png'),
(96, 29, 'Đỏ Đậm', 'mau_dodam.png'),
(97, 29, 'Nâu', 'mau_nau.jpg'),
(98, 30, 'Đỏ Đậm', 'mau_dodam.png'),
(99, 30, 'Nâu', 'mau_nau.jpg'),
(100, 31, 'Đỏ Đậm', 'mau_dodam.png'),
(101, 31, 'Nâu', 'mau_nau.jpg'),
(102, 32, 'Nâu', 'mau_nau.jpg'),
(103, 32, 'Xanh', 'product_color.png'),
(104, 33, 'Nâu', 'mau_nau.jpg'),
(105, 33, 'Đỏ Đậm', 'mau_dodam.png'),
(106, 34, 'Xanh', 'product_color.png'),
(107, 34, 'Nâu', 'mau_nau.jpg'),
(108, 35, 'Đỏ', 'mau_do.png'),
(109, 35, 'Xám', 'mau_xam.png'),
(110, 36, 'Xám', 'mau_xam.png'),
(111, 36, 'Vàng', 'mau_vang.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhacungcap`
--

CREATE TABLE `tbl_nhacungcap` (
  `id_nhacungcap` int(11) NOT NULL,
  `tennhacungcap` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhacungcap`
--

INSERT INTO `tbl_nhacungcap` (`id_nhacungcap`, `tennhacungcap`, `diachi`, `sodienthoai`) VALUES
(1, 'Nhà may Phương Thảo', 'Hà Nội', '0987665497'),
(2, 'Nhà may Việt Hoàng', 'Hà Nam', '0979452647'),
(3, 'Nhà may Huy Phương', 'Hải Dương', '0987566477'),
(4, 'Nhà may Hạnh Phúc', 'Hà Nội', '0987256723');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `id_loaisanpham` int(11) NOT NULL,
  `id_nhacungcap` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `id_loaisanpham`, `id_nhacungcap`, `trangthai`) VALUES
(1, 'Đồng phục học sinh tiểu học 1', 'DPHS-0032', 199000, 6, 'kid_p1.jpg', 'Đồng phục cho học sinh tiểu học năng động, phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 1, 0),
(2, 'Đồng phục học sinh tiểu học 2', 'DPHS-0028', 159000, 5, 'kid_p2.jpg', 'Đồng phục cho học sinh tiểu học năng động, phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 2, 0),
(3, 'Đồng phục học sinh tiểu học 0033', 'DPHS-0033', 149000, 7, 'kid_p3.jpg', 'Đồng phục cho trẻ năng động, thoáng mát, phá cách, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 3, 0),
(4, 'Đồng phục học sinh tiểu học 0024', 'DPHS-0024', 300000, 8, 'kid_p4.jpg', 'Đồng phục cho học sinh tiểu học năng động, phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 4, 1),
(5, 'Đồng phục học sinh tiểu học 41', 'DPHS-0066', 210000, 10, 'kid_p5.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 4, 0),
(6, 'Đồng phục học sinh tiểu học 0067', 'DPHS-0067', 195000, 6, 'kid_p6.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 3, 0),
(7, 'Đồng phục mầm non 29', 'DPMN-0029', 190000, 4, 'kid_p7.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 2, 0),
(8, 'Đồng phục mầm non 28', 'DPMN-0028', 190000, 5, 'kid_p8.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 1, 0),
(9, 'Đồng phục mầm non 27', 'DPMN-0027', 149000, 5, 'kid_p9.jpg', 'Đồng phục cho trẻ năng động, thoáng mát, phá cách, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 2, 0),
(10, 'Đồng phục mầm non 26', 'DPMN-0026', 179000, 2, 'kid_p10.jpg', 'Đồng phục cho trẻ năng động, thoáng mát, phá cách, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 3, 1),
(11, 'Đồng phục mầm non 25', 'DPMN-0025', 249000, 4, 'kid_p11.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, cá tính, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 4, 0),
(12, 'Đồng phục mầm non 07', 'DPMN-0007', 229000, 6, 'kid_p12.jpg', 'Đồng phục cho học sinh tiểu học phổ biến, thoáng mát, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 3, 1, 0),
(13, 'Áo Khoác Gió Nữ AK 017', 'DPAK-017', 375000, 4, 'woman_p1.jpg', 'Đồng phục ngoài trời, thoải mái, thời trang ...', 'Xuất xứ: Việt Nam, Chất liệu: Bông', 2, 2, 0),
(14, 'Áo Khoác Gió Nữ AK 018', 'DPAK-018', 499000, 2, 'woman_p2.jpg', 'Đồng phục ngoài trời, thoải mái, thời trang ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 3, 0),
(15, 'Áo Khoác Gió Nữ AK 011', 'DPAK-011', 619000, 3, 'woman_p3.jpg', 'Đồng phục ngoài trời, thoải mái, thời trang ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 1, 0),
(16, 'Áo Khoác Gió Nữ AK 012', 'DPAK-012', 550000, 4, 'woman_p4.jpg', 'Đồng phục ngoài trời, thoải mái, thời trang ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 4, 0),
(17, 'Áo Khoác Gió Nữ AK 014', 'DPAK-014', 600000, 7, 'woman_p5.jpg', 'Đồng phục ngoài trời, thoải mái, nhẹ ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 1, 0),
(18, 'Áo Khoác Gió Nữ AK 016', 'DPAK-016', 350000, 6, 'woman_p6.jpg', 'Đồng phục ngoài trời cho nữ, thoải mái, thoáng mát ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 2, 1),
(19, 'Áo Khoác Gió Nữ AK 015', 'DPAK-015', 25000, 4, 'woman_p7.jpg', 'Đồng phục ngoài trời cho nữ, thoải mái, thoáng mát ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 1, 0),
(20, 'Thời trang công sở nữ 0073', 'DPCS-0073', 615000, 3, 'woman_p8.jpg', 'Đồng phục công sở nữ lịch sự, sang trọng, thoải mái, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 4, 0),
(21, 'Thời trang công sở nữ 0058', 'DPCS-0058', 500000, 5, 'woman_p9.jpg', 'Đồng phục công sở nữ lịch sự, sang trọng, thoải mái, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 3, 0),
(22, 'Thời trang công sở nữ 0075', 'DPCS-0075', 450000, 7, 'woman_p10.jpg', 'Đồng phục công sở nữ lịch sự, sang trọng, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 2, 0),
(23, 'Thời trang công sở nữ 0060', 'DPCS-0060', 320000, 5, 'woman_p11.jpg', 'Đồng phục công sở nữ lịch sự, sang trọng, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 1, 0),
(24, 'Thời trang công sở nữ 0061', 'DPCS-0061', 412000, 5, 'woman_p12.jpg', 'Đồng phục công sở nữ lịch sự, sang trọng, trang nghiêm, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 2, 3, 0),
(25, 'Áo Khoác Gió Nam AK 010', 'DPAK-010', 364000, 3, 'man_p1.jpg', 'Đồng phục khoác gió nam, thoải mái và hoàn hảo cho mọi hoạt động ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 4, 0),
(26, 'Áo polo công sở 0048', 'DPCS-0048', 370000, 5, 'man_p2.jpg', 'Đồng phục công sở, thoải mái, trẻ trung, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 2, 0),
(27, 'Áo sơ mi công sở 0020', 'DPCS-0020', 350000, 7, 'man_p3.jpg', 'Đồng phục công sở, thoải mái, trẻ trung, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 4, 0),
(28, 'Áo sơ mi công sở 0019', 'DPCS-0019', 321000, 5, 'man_p4.jpg', 'Đồng phục công sở, thoải mái, trẻ trung, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 1, 0),
(29, 'Áo vest nam công sở 0045', 'DPCS-0045', 365000, 7, 'man_p5.jpg', 'Đồng phục công sở, thoải mái, sang trọng ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 3, 0),
(30, 'Áo vest nam công sở 0043', 'DPCS-0043', 400000, 5, 'man_p6.jpg', 'Đồng phục công sở, thoải mái, sang trọng, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 2, 0),
(31, 'Áo vest nam công sở 0041', 'DPCS-0041', 390000, 3, 'man_p7.jpg', 'Đồng phục công sở, thoải mái, sang trọng, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 4, 0),
(32, 'Áo vest nam công sở 0042', 'DPCS-0042', 375000, 4, 'man_p8.jpg', 'Đồng phục công sở, thoải mái, trẻ trung, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 3, 1),
(33, 'Áo vest nam công sở 0044', 'DPCS-0044', 621000, 6, 'man_p9.jpg', 'Đồng phục công sở nam lịch sự, thoải mái, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 1, 0),
(34, 'Áo vest nam công sở 0046', 'DPCS-0046', 550000, 7, 'man_p10.jpg', 'Đồng phục công sở nam lịch sự, thoải mái, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 4, 0),
(35, 'Áo vest nam công sở 0040', 'DPCS-0040', 690000, 8, 'man_p11.jpg', 'Đồng phục công sở nam lịch sự, sang trọng, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 4, 0),
(36, 'Áo polo công sở 0049', 'DPCS-0049', 596000, 4, 'man_p12.jpg', 'Đồng phục công sở nam trẻ trung, năng động, ...', 'Xuất xứ: Việt Nam, Chất liệu: Cotton', 1, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id_size` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `loaisize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_size`
--

INSERT INTO `tbl_size` (`id_size`, `id_sanpham`, `loaisize`) VALUES
(1, 36, 'S'),
(2, 36, 'M'),
(3, 36, 'L'),
(4, 36, 'XL'),
(5, 36, 'XXL'),
(6, 35, 'XXL'),
(7, 35, 'XL'),
(8, 35, 'L'),
(9, 34, 'L'),
(10, 34, 'XL'),
(11, 34, 'XXL'),
(12, 33, 'XL'),
(13, 33, 'L'),
(14, 33, 'S'),
(15, 32, 'S'),
(17, 32, 'XL'),
(18, 32, 'L'),
(19, 31, 'S'),
(21, 31, 'XL'),
(22, 31, 'L'),
(23, 30, 'L'),
(24, 30, 'XL'),
(25, 30, 'XXL'),
(26, 29, 'L'),
(27, 29, 'XL'),
(28, 29, 'XXL'),
(29, 28, 'XXL'),
(30, 28, 'L'),
(31, 28, 'XL'),
(32, 27, 'L'),
(33, 27, 'XL'),
(34, 27, 'XXL'),
(35, 26, 'XL'),
(36, 26, 'L'),
(37, 26, 'XXL'),
(38, 25, 'L'),
(39, 25, 'XL'),
(40, 25, 'XXL'),
(41, 24, 'L'),
(42, 24, 'XL'),
(43, 24, 'XXL'),
(44, 23, 'XL'),
(45, 23, 'XXL'),
(46, 23, 'L'),
(47, 22, 'XL'),
(48, 22, 'XXL'),
(49, 22, 'L'),
(50, 21, 'L'),
(51, 21, 'XL'),
(52, 21, 'XXL'),
(53, 20, 'L'),
(54, 20, 'XL'),
(55, 20, 'XXL'),
(56, 19, 'L'),
(57, 19, 'XL'),
(58, 19, 'XXL'),
(59, 18, 'L'),
(60, 18, 'XL'),
(61, 18, 'XXL'),
(62, 17, 'L'),
(63, 17, 'XXL'),
(64, 16, 'XL'),
(65, 16, 'L'),
(66, 16, 'XXL'),
(67, 15, 'L'),
(68, 15, 'XL'),
(69, 15, 'XXL'),
(70, 14, 'L'),
(71, 14, 'XL'),
(72, 14, 'XXL'),
(73, 13, 'L'),
(74, 13, 'XL'),
(75, 13, 'XXL'),
(76, 12, 'M'),
(77, 12, 'S'),
(78, 12, 'L'),
(79, 11, 'M'),
(80, 11, 'S'),
(81, 11, 'L'),
(82, 10, 'M'),
(83, 10, 'S'),
(84, 10, 'L'),
(85, 9, 'M'),
(86, 9, 'S'),
(87, 9, 'L'),
(88, 8, 'M'),
(89, 8, 'S'),
(90, 8, 'L'),
(91, 7, 'M'),
(92, 7, 'S'),
(93, 7, 'L'),
(94, 6, 'L'),
(95, 6, 'M'),
(96, 6, 'XL'),
(97, 5, 'L'),
(98, 5, 'M'),
(99, 5, 'XL'),
(100, 4, 'L'),
(101, 4, 'M'),
(102, 4, 'XL'),
(103, 3, 'M'),
(104, 3, 'L'),
(105, 3, 'XL'),
(106, 2, 'M'),
(107, 2, 'L'),
(108, 2, 'XL'),
(109, 1, 'M'),
(110, 1, 'L'),
(111, 1, 'XL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `Cart_Detail_SanPham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `GioHang_KhachHang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`id_loaisanpham`);

--
-- Chỉ mục cho bảng `tbl_mausac`
--
ALTER TABLE `tbl_mausac`
  ADD PRIMARY KEY (`id_mausac`),
  ADD KEY `ms_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  ADD PRIMARY KEY (`id_nhacungcap`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `LoaiSanPham_SanPham` (`id_loaisanpham`),
  ADD KEY `NhaCungCap_SanPham` (`id_nhacungcap`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id_size`),
  ADD KEY `s_sp` (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  MODIFY `id_chitiethoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `id_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_mausac`
--
ALTER TABLE `tbl_mausac`
  MODIFY `id_mausac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  MODIFY `id_nhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD CONSTRAINT `Cart_Detail_SanPham` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `GioHang_KhachHang` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_khachhang` (`id_khachhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_mausac`
--
ALTER TABLE `tbl_mausac`
  ADD CONSTRAINT `ms_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `LoaiSanPham_SanPham` FOREIGN KEY (`id_loaisanpham`) REFERENCES `tbl_loaisanpham` (`id_loaisanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NhaCungCap_SanPham` FOREIGN KEY (`id_nhacungcap`) REFERENCES `tbl_nhacungcap` (`id_nhacungcap`);

--
-- Các ràng buộc cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD CONSTRAINT `s_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
