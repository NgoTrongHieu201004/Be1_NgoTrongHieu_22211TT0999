-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 09:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom5`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'SamSung'),
(2, 'Oppo'),
(3, 'Iphone'),
(4, 'Realme'),
(5, 'Redme');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `price`, `image`, `description`, `feature`, `create_at`, `type_id`) VALUES
(1, 'SamSung galaxys24 ultra', 10, 2400000, '<img src=\"https://www.bing.com/images/search?view=detailV2&ccid=yMHAHREM&id=1C742EAE152477E7C774E9DF05E7611163097584&thid=OIP.yMHAHREMcU-Ij3-1WECsFgHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI dung lượng bộ nhớ tới 128GB. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 5),
(2, 'OppoA92', 2, 600000, '<img src=\"https://vn.images.search.yahoo.com/images/view;_ylt=AwrKFluX_BxnescDlk9tUwx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzZhZjE4YTNlNjk2OGFkMzQ5NDljNThiOG', 'Điện thoại OPPO A92 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(3, 'Iphone 16ProMax', 3, 2600000, '<img src=\"https://vn.images.search.yahoo.com/images/view;_ylt=Awrx.pbi_BxnBv0ANOptUwx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzY2ODdkYmU2MGQ1YzcxZTJhNWY2YTcyMT', 'Tất cả các trung tâm dữ liệu Apple đều sử dụng 100% điện tái tạo. iPhone 16 sử dụng nhiều kim loại tái chế nhất từ trước đến nay: hơn 95% lithium trong pin là lithium tái chế. 9 100% vàng', 0, '2024-10-26 14:32:36', 2),
(4, 'Realme gt neo6', 4, 700000, '<img src=\"https://www.bing.com/images/search?view=detailV2&ccid=Ep2lvmYE&id=FC1A16BFB9621EB569A83A71251CB07CF28BF428&thid=OIP.Ep2lvmYEi9s3piMFoVrrQgHa', 'alme là thương hiệu công nghệ chuyên cung cấp điện thoại thông minh chất lượng cao, tập trung vào nhu cầu của người dùng và đưa ra sản phẩm với hiệu suất mạnh mẽ ', 0, '2024-10-26 14:32:36', 3),
(5, 'Redme note 11 pro', 5, 8000000, '<img src=\"https://www.bing.com/images/search?view=detailV2&ccid=kyvx1ycI&id=E6CA04B2D1624855A77F4A42B7D006E9EBC313FD&thid=OIP.kyvx1ycIiFLF-ufCgiJ7VwHa', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 4),
(6, 'Redme note 12 pro', 6, 8000000, '<img src=\"https://www.bing.com/images/search?view=detailV2&ccid=Lr7c%2bbPM&id=ACB79B6A0CE1DDC530D8321CF1E9A1328665BAEF&thid=OIP.Lr7c-bPMrhDTdqCdJTcYwQ', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 4),
(7, 'Redme note 13 pro', 7, 8000000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=m9feeY%2fm&id=83199DCDED85A66A21E22F612F0BEC58357BFC78&thid=OIP.m9feeY_mAcRc-fDwX3V0_A', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 4),
(8, 'Redme note 10 pro', 8, 8000000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=q%2fq278ok&id=51FD435D821D8002D638BAB95FE16B0049CC1F23&thid=OIP.q_q278okRf-hfq1QiDE9og', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 4),
(9, 'Redme note 9 pro', 9, 8000000, '<img src=\"https://www.bing.com/images/search view=detailV2&ccid=1iJkrdc%2b&id=977F2852AE23CF7D863882E6C0AFE16DE47C6A81&thid=OIP.1iJkrdc-tBp5Lqm5UaiRMw', 'Mua online điện thoại, smartphone Xiaomi Redmi chính hãng, giá rẻ. Giao nhanh, đem nhiều mẫu chọn, tháng đầu lỗi 1 đổi 1, trả góp 0%, bảo hành tại hơn 2000 điểm toàn quốc', 0, '2024-10-26 14:32:36', 4),
(10, 'SamSung galaxys23 ultra', 1, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=yMHAHREM&id=1C742EAE152477E7C774E9DF05E7611163097584&thid=OIP.yMHAHREMcU-Ij3-1WECsFgHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 5),
(11, 'SamSung galaxys22 ultra', 11, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=7vFBpzMC&id=DED292FFAD0BE6AF062F356C2326876B79A99336&thid=OIP.7vFBpzMCG1zVt8NLEKvLQQHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 5),
(12, 'SamSung galaxys20ultra', 12, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=ctNOCPuc&id=325BEAE738F8D660B7FD90241FE99A7BE96B7F5B&thid=OIP.ctNOCPucChyQ6Lrmx0r6ogHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 5),
(13, 'SamSung galaxys19ultra', 13, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=Qwm9J7O3&id=A542AC0169E2C96D080D54133D5A1CEA07CEAC66&thid=OIP.Qwm9J7O3WSahu7g6xtni_QHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 5),
(14, 'Realme gt 4', 15, 2400000, '<img src=\"https://www.bing.com/images/search?view=detailV2&ccid=yJ9ndp63&id=B32E255729C350B31B237DA0E486BAC818BBB6E5&thid=OIP.yJ9ndp63sxxomZY4qzVQegHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 3),
(15, 'Realme gt 6', 17, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=P9KJjPV6&id=9BD36B39EA4397B52409791554925F1F1BE1E344&thid=OIP.P9KJjPV6pQQe1xrF7S5NjQHa', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 3),
(16, 'Realme gt 5', 16, 2400000, '<img sr=\"https://www.bing.com/images/search?view=detailV2&ccid=EWsk6j5h&id=5BFF4F3DCDA895D0AAE62609B2EBF0F22843907E&thid=OIP.EWsk6j5hGgPv4PaVWurlSAHaH', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 3),
(17, 'Realme gt 3', 14, 2400000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=%2fdHqRH2W&id=80049071577D69C6C7C264D7B7A1DC19452D14AE&thid=OIP._dHqRH2W-53nXcZvN4U_dQ', 'Galaxy S24 và S24+ là thiết bị điện thoại mới nhất của Samsung, với màn hình lớn, pin lớn, khung kim loại và Galaxy AI. Xem thông tin chi tiết, màu sắc, đặc biệt và thanh toán trước giảm 1 triệu.', 0, '2024-10-26 14:32:36', 3),
(18, 'OppoA91', 18, 600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=iy6eOjen&id=31338CFE84FD102910CCE920EE641B55CED59616&thid=OIP.iy6eOjen4kM2LnB5FBQsfAHa', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(19, 'OppoA90', 19, 600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=iy6eOjen&id=31338CFE84FD102910CCE920EE641B55CED59616&thid=OIP.iy6eOjen4kM2LnB5FBQsfAHa', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(20, 'OppoA55', 20, 600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=5nBBche7&id=B8A87CAB0AB756B817802E51BEEE25797B9166E6&thid=OIP.5nBBche7YBHfrAwmmqWIigHa', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(21, 'OppoA54', 22, 600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=%2fn4QtSZV&id=A3C4B868DD905DBB76821D573FB3DCC831AB149E&thid=OIP._n4QtSZV1ZIjHognIayUAQ', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét luoon', 0, '2024-10-26 14:32:36', 1),
(22, 'Iphone 13proMax', 24, 2600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=sdtpSb2M&id=A2D8B5EDD24171A57071C70F01F46282EB5902A7&thid=OIP.sdtpSb2MSbfb9hnGnGeBJQHa', 'Tất cả các trung tâm dữ liệu Apple đều sử dụng 100% điện tái tạo. iPhone 16 sử dụng nhiều kim loại tái chế nhất từ trước đến nay: hơn 95% lithium trong pin là lithium tái chế. 9 100% vàng', 0, '2024-10-26 14:32:36', 2),
(23, 'Iphone 14proMax', 23, 2600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=muM3lyNF&id=1B5EA4FE622092E80339D671746A2A843E24E770&thid=OIP.muM3lyNF2vObnlAQZDhoKQHa', 'Tất cả các trung tâm dữ liệu Apple đều sử dụng 100% điện tái tạo. iPhone 16 sử dụng nhiều kim loại tái chế nhất từ trước đến nay: hơn 95% lithium trong pin là lithium tái chế. 9 100% vàng', 0, '2024-10-26 14:32:36', 2),
(24, 'Iphone 15proMax', 25, 2600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=LkAT%2badl&id=61321825BDE6A28D01DCF1AF246380E3106ECC43&thid=OIP.LkAT-adlPzf1AWJVhles9g', 'Tất cả các trung tâm dữ liệu Apple đều sử dụng 100% điện tái tạo. iPhone 16 sử dụng nhiều kim loại tái chế nhất từ trước đến nay: hơn 95% lithium trong pin là lithium tái chế. 9 100% vàng', 0, '2024-10-26 14:32:36', 2),
(25, 'OppoA55', 20, 600000, '<img src=\"https://www.bing.com/images/searchview=detailV2&ccid=5nBBche7&id=B8A87CAB0AB756B817802E51BEEE25797B9166E6&thid=OIP.5nBBche7YBHfrAwmmqWIigHa', 'Điện thoại OPPO A91 – Hệ thống 4 camera sau 48MP chụp ảnh ấn tượng. OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO cho ra mắt, gây ấn tượng với thiết kế màn hình khoét ', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Oppo'),
(2, 'Iphone'),
(3, 'Realme'),
(4, 'Redmi'),
(5, 'Samsung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
