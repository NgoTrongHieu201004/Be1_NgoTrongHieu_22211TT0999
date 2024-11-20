-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2024 lúc 05:42 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `id_manu` int(11) NOT NULL,
  `name_manu` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`id_manu`, `name_manu`, `icon`) VALUES
(1, 'SamSung', ''),
(2, 'Oppo', ''),
(3, 'Apple', ''),
(4, 'Realme', ''),
(5, 'Sony', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `price`, `image`, `description`, `feature`, `create_at`, `type_id`) VALUES
(1, 'SamSung galaxys24 ultra', 1, 2400000, '10a224fce53bf7fb48c745c6d63284243eee1036_1.jpg', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI dung lượng bộ nhớ tới 128GB. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 1),
(2, 'OppoA92', 2, 600000, 'oppo-a92-tim-600x600.jpg', 'Điện thoại OPPO A92 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(3, 'Iphone 16ProMax', 3, 2600000, 'iPhone-16-Pro-Series-Desert11345601058.jpg', 'Tất cả các trung tâm dữ liệu Apple đều sử dụng 100% điện tái tạo. iPhone 16 sử dụng nhiều kim loại tái chế nhất từ trước đến nay: hơn 95% lithium trong pin là lithium tái chế. 9 100% vàng', 0, '2024-10-26 14:32:36', 1),
(4, 'Realme gt neo6', 4, 700000, 'realme-gt-neo6-se-1.png', 'alme là thương hiệu công nghệ chuyên cung cấp điện thoại thông minh chất lượng cao, tập trung vào nhu cầu của người dùng và đưa ra sản phẩm với hiệu suất mạnh mẽ ', 0, '2024-10-26 14:32:36', 1),
(5, 'Redme note 11 pro', 4, 8000000, 'note-11-pro-_1684227634.jpg.jpg', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 1),
(6, 'Redme note 12 pro', 4, 8000000, 'xiaomi-redmi-12-pro-4g-xanh-thumb-600x600.jpg', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 1),
(7, 'Redme note 13 pro', 4, 8000000, 'xiaomi-redmi-note-13-pro-5g-xanhla-thumb-600x600.jpg', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 1),
(8, 'Redme note 10 pro', 4, 8000000, 'xiaomi-redmi-note-10-pro-thumb-xam-600x600-600x600.jpg', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 1),
(9, 'Redme note 9 pro', 4, 8000000, '10046259-dien-thoai-xiaomi-redmi-note-9-pro-6gb-128gb-xanh-la-1.jpg', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 1),
(10, 'SamSung galaxys23 ultra', 1, 2400000, '50244_samsung_galaxy_s23_ultra_den_7.jpg', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 1),
(11, 'SamSung galaxys22 ultra', 1, 2400000, 'sm-s908_galaxys22ultra_front_burgundy_211119_2.png', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 1),
(12, 'SamSung galaxys20ultra', 1, 2400000, 'sm-s908_galaxys22ultra_front_burgundy_211119_2.png', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 1),
(13, 'SamSung galaxys19ultra', 1, 2400000, 'samsung-galaxy-s20-ultra-600x600-1-400x400.jpg', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 1),
(14, 'Iphone 12 Pro Max', 3, 2400000, 'thumb_IP12Pro_4.png', 'iPhone 12 Pro Max 128GB tiếp tục khẳng định vị thế của mình như một trong những sản phẩm cao cấp và đẳng cấp nhất. Với công nghệ 5G tiên tiến, camera chất lượng cao, và thiết kế sang trọng, chiếc điện thoại này chắc chắn xứng đáng là lựa chọn hàng đầu cho những người dùng khó tính nhất.', 0, '2024-10-26 14:32:36', 1),
(15, 'Iphone 8 Plus', 3, 2400000, 'iphone-8-plus-hh-600x600-400x400.jpg', 'Thừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', 0, '2024-10-26 14:32:36', 1),
(16, 'Iphone 11', 3, 2400000, 'iphone-11-trang-600x600.jpg', 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 0, '2024-10-26 14:32:36', 1),
(17, 'Sony Xperia 5 mark 3', 5, 2400000, 'sony-xperia-5-mark-3-8gb-128gb-ban-my-cu-99-xtmobile.jpg', 'Sony Xperia 5 Mark 3 - Công nghệ tiên phong, thiết kế tuyệt đẹp\r\nCùng Clickbuy khám phá Sony Xperia 5 Mark 3 – sự kết hợp hoàn hảo giữa công nghệ tiên phong và thiết kế tuyệt đẹp. Được trang bị những công nghệ mới nhất từ Sony, chiếc điện thoại này mang đến hiệu suất vượt trội cùng trải nghiệm hình ảnh và âm thanh tuyệt hảo. Với thiết kế tinh tế và màn hình OLED sắc nét, Xperia 5 Mark 3 không chỉ là một thiết bị di động mà còn là một tác phẩm nghệ thuật. Hãy trải nghiệm đỉnh cao của công nghệ và thiết kế của thiết bị này.', 0, '2024-10-26 14:32:36', 1),
(18, 'OppoA91', 2, 600000, 'oppo-a91-trang-600x600-600x600.jpg', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(19, 'OppoA90', 2, 600000, 'oppo-a9-600x600-trang-600x600.jpg', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(20, 'OppoA55', 2, 600000, 'oppo-a55-4g-thumb-new-600x600.jpg', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(21, 'OppoA54', 2, 600000, 'oppo-a54-4g-black-600x600.jpg', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(22, 'Sony Xperia 1 Mark 4', 5, 2600000, 'sony-xperia-1-iv-white-digiphone_2e4d7f92adad4b56b68c99668038e3bd.png', 'Sony Xperia 1 IV là một chiếc điện thoại thông minh chạy hệ điều hành Android được sản xuất bởi Sony. Ra mắt vào ngày 11 tháng 5 năm 2022, nó là phiên bản cao cấp mới nhất trong dòng Xperia của Sony 2022 , kế thừa Xperia 1 III', 0, '2024-10-26 14:32:36', 1),
(23, 'Sony Xperia XA1', 5, 2600000, 'sony-xperia-xa1-hh-400x400.jpg', 'Xperia XA1 là bản nâng cấp của chiếc Xperia XA đã khá thành công ở thị trường nước ta, với thiết kế khá tương đồng siêu phẩm Xperia XZ, cấu hình được trang bị cao hơn và camera có chất lượng tốt hơn.', 0, '2024-10-26 14:32:36', 1),
(24, 'Sony Xperia XZ2', 5, 2600000, 'sony-xperia-xz2-cu (1).jpg', 'Cuối cùng Sony đã thỏa hiệp trong việc làm mới thiết kế cho dòng Xperia. Một vài tinh chỉnh nhỏ giúp model XZ2 trở nên thời thượng và sang trong hơn. ', 0, '2024-10-26 14:32:36', 1),
(25, '', 2, 600000, 'oppo-a55-4g-thumb-new-600x600 (1).jpg', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét ', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`id_type`, `name_type`, `icon`) VALUES
(1, 'Điện Thoại', 'fas fa-mobile-alt me-2'),
(2, 'LapTop', 'fas fa-laptop me-2'),
(3, 'TV', 'fas fa-tv me-2'),
(4, 'Phụ Kiện', 'fas fa-mouse me-2'),
(5, 'Âm Thanh', 'fas fa-headphones me-2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id_manu`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id_manu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
