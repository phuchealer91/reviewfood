-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 02:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ar_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `ar_name`, `ar_slug`, `ar_desc`, `created_at`, `updated_at`, `ar_active`) VALUES
(1, 'TP. HCM', 'tp-hcm', 'Khu vực thành phố hồ chí minh', '2020-02-06 10:34:45', '2020-02-06 10:34:45', 1),
(2, 'Hà Nội', 'ha-noi', 'Khu vực thành phố hà nội', '2020-02-06 10:36:01', '2020-02-06 10:36:01', 1),
(3, 'Đà Nẵng', 'da-nang', 'Khu vực thành phố đà nẵng', '2020-02-06 10:37:09', '2020-02-06 11:25:36', 1),
(5, 'Cần Thơ', 'can-tho', 'Cần Thơ', '2020-02-06 22:16:58', '2020-02-06 22:16:58', 1),
(6, 'Khánh Hòa', 'khanh-hoa', 'Khánh Hòa', '2020-02-06 22:17:08', '2020-02-06 22:17:08', 1),
(7, 'Vũng Tàu', 'vung-tau', 'Vũng Tàu', '2020-02-06 22:17:56', '2020-02-06 22:17:56', 1),
(8, 'Hải Phòng', 'hai-phong', 'Hải Phòng', '2020-02-06 22:18:06', '2020-02-06 22:18:06', 1),
(9, 'Bình Thuận', 'binh-thuan', 'Bình Thuận', '2020-02-06 22:18:13', '2020-02-06 22:18:13', 1),
(10, 'Lâm Đồng', 'lam-dong', 'Lâm Đồng', '2020-02-06 22:22:35', '2020-02-06 22:22:35', 1),
(11, 'Đồng Nai', 'dong-nai', 'Đồng Nai', '2020-02-06 22:22:41', '2020-02-06 22:22:41', 1),
(12, 'Quảng Ninh', 'quang-ninh', 'Quảng Ninh', '2020-02-06 22:22:46', '2020-02-06 22:22:46', 1),
(13, 'Huế', 'hue', 'Huế', '2020-02-06 22:22:53', '2020-02-06 22:22:53', 1),
(14, 'Bình Dương', 'binh-duong', 'Bình Dương', '2020-02-06 22:23:16', '2020-02-06 22:23:16', 1),
(15, 'Hải Dương', 'hai-duong', 'Hải Dương', '2020-02-06 22:23:20', '2020-02-06 22:23:20', 1),
(16, 'Ninh Thuận', 'ninh-thuan', 'Ninh Thuận', '2020-02-06 22:23:25', '2020-02-06 22:23:25', 1),
(17, 'Nam Định', 'nam-dinh', 'Nam Định', '2020-02-06 22:23:29', '2020-02-06 22:23:29', 1),
(18, 'Tiền Giang', 'tien-giang', 'Tiền Giang', '2020-02-06 22:23:34', '2020-02-06 22:23:34', 1),
(19, 'Phú Quốc', 'phu-quoc', 'Phú Quốc', '2020-02-06 22:23:38', '2020-02-06 22:23:38', 1),
(20, 'Kon Tum', 'kon-tum', 'Kon Tum', '2020-02-06 22:23:43', '2020-02-06 22:23:43', 1),
(21, 'Quảng Nam', 'quang-nam', 'Quảng Nam', '2020-02-06 22:23:47', '2020-02-06 22:23:47', 1),
(22, 'Lào Cai', 'lao-cai', 'Lào Cai', '2020-02-06 22:23:52', '2020-02-06 22:23:52', 1),
(23, 'Nghệ An', 'nghe-an', 'Nghệ An', '2020-02-06 22:23:57', '2020-02-06 22:23:57', 1),
(24, 'Long An', 'long-an', 'Long An', '2020-02-06 22:24:03', '2020-02-06 22:24:03', 1),
(25, 'Bình Định', 'binh-dinh', 'Bình Định', '2020-02-06 22:24:08', '2020-02-06 22:24:08', 1),
(26, 'Phú Yên', 'phu-yen', 'Phú Yên', '2020-02-06 22:24:12', '2020-02-06 22:24:12', 1),
(27, 'Đắk Lắk', 'dak-lak', 'Đắk Lắk', '2020-02-06 22:24:17', '2020-02-06 22:24:17', 1),
(28, 'An Giang', 'an-giang', 'An Giang', '2020-02-06 22:24:22', '2020-02-06 22:24:22', 1),
(29, 'Thanh Hóa', 'thanh-hoa', 'Thanh Hóa', '2020-02-06 22:24:27', '2020-02-06 22:24:27', 1),
(30, 'Kiên Giang', 'kien-giang', 'Kiên Giang', '2020-02-06 22:24:32', '2020-02-06 22:24:32', 1),
(31, 'Quảng Ngãi', 'quang-ngai', 'Quảng Ngãi', '2020-02-06 22:24:37', '2020-02-06 22:24:37', 1),
(32, 'Tây Ninh', 'tay-ninh', 'Tây Ninh', '2020-02-06 22:24:42', '2020-02-06 22:24:42', 1),
(33, 'Gia Lai', 'gia-lai', 'Gia Lai', '2020-02-06 22:24:46', '2020-02-06 22:24:46', 1),
(34, 'Vĩnh Long', 'vinh-long', 'Vĩnh Long', '2020-02-06 22:24:50', '2020-02-06 22:24:50', 1),
(35, 'Bắc Ninh', 'bac-ninh', 'Bắc Ninh', '2020-02-06 22:24:54', '2020-02-06 22:24:54', 1),
(36, 'Cà Mau', 'ca-mau', 'Cà Mau', '2020-02-06 22:24:59', '2020-02-06 22:24:59', 1),
(37, 'Thái Nguyên', 'thai-nguyen', 'Thái Nguyên', '2020-02-06 22:25:05', '2020-02-06 22:25:05', 1),
(38, 'Đồng Tháp', 'dong-thap', 'Đồng Tháp', '2020-02-06 22:25:11', '2020-02-06 22:25:11', 1),
(39, 'Quảng Bình', 'quang-binh', 'Quảng Bình', '2020-02-06 22:25:15', '2020-02-06 22:25:15', 1),
(40, 'Bến Tre', 'ben-tre', 'Bến Tre', '2020-02-06 22:25:21', '2020-02-06 22:25:21', 1),
(41, 'Quảng Trị', 'quang-tri', 'Quảng Trị', '2020-02-06 22:25:26', '2020-02-06 22:25:26', 1),
(42, 'Bình Phước', 'binh-phuoc', 'Bình Phước', '2020-02-06 22:25:33', '2020-02-06 22:25:33', 1),
(43, 'Sóc Trăng', 'soc-trang', 'Sóc Trăng', '2020-02-06 22:25:43', '2020-02-06 22:25:43', 1),
(44, 'Vĩnh Phúc', 'vinh-phuc', 'Vĩnh Phúc', '2020-02-06 22:25:48', '2020-02-06 22:25:48', 1),
(45, 'Trà Vinh', 'tra-vinh', 'Trà Vinh', '2020-02-06 22:25:52', '2020-02-06 22:25:52', 1),
(46, 'Ninh Bình', 'ninh-binh', 'Ninh Bình', '2020-02-06 22:25:57', '2020-02-06 22:25:57', 1),
(47, 'Bạc Liêu', 'bac-lieu', 'Bạc Liêu', '2020-02-06 22:26:03', '2020-02-06 22:26:03', 1),
(48, 'Hà Tĩnh', 'ha-tinh', 'Hà Tĩnh', '2020-02-06 22:26:08', '2020-02-06 22:26:08', 1),
(49, 'Bắc Giang', 'bac-giang', 'Bắc Giang', '2020-02-06 22:26:12', '2020-02-06 22:26:12', 1),
(50, 'Phú Thọ', 'phu-tho', 'Phú Thọ', '2020-02-06 22:26:17', '2020-02-06 22:26:17', 1),
(51, 'Hậu Giang', 'hau-giang', 'Hậu Giang', '2020-02-06 22:26:22', '2020-02-06 22:26:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `c_total_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `c_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_desc_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(1, 'Ăn uống', 'an-uong', '', NULL, '1', '0', 'ăn uống 24 giờ', 'Những món ăn khắp cả các tỉnh thành', NULL, '2020-02-06 04:40:47', '2020-02-06 04:40:47'),
(2, 'Du lịch', 'du-lich', '', NULL, '1', '0', 'du lịch', 'Những địa điểm du lịch khắp các tỉnh thành', NULL, '2020-02-06 04:41:38', '2020-02-06 04:41:38'),
(3, 'Cưới hỏi', 'cuoi-hoi', '', NULL, '1', '0', 'wedding', 'Những địa điểm tổ chức tiệc cưới, chụp hình', NULL, '2020-02-06 04:42:21', '2020-02-06 04:42:21'),
(4, 'Đẹp khỏe', 'dep-khoe', '', NULL, '1', '0', 'đẹp, khỏe', 'Những địa điểm làm đẹp, chăm sóc sức khỏe', NULL, '2020-02-06 04:43:31', '2020-02-06 04:43:31'),
(5, 'Giải trí', 'giai-tri', '', NULL, '1', '0', 'relax', 'Những loại hình giải trí trong cả nước', NULL, '2020-02-06 04:44:02', '2020-02-06 04:44:02'),
(6, 'Mua sắm', 'mua-sam', '', NULL, '1', '0', 'shopping', 'Những địa điểm mua sắm trong cả nước', NULL, '2020-02-06 04:44:34', '2020-02-06 04:44:34'),
(7, 'Giáo dục', 'giao-duc', '', NULL, '1', '0', 'giáo dục', 'Những địa điểm tổ chức hoạt động giáo dục', NULL, '2020-02-06 04:45:15', '2020-02-06 21:24:16'),
(8, 'Dịch vụ', 'dich-vu', '', NULL, '1', '0', 'Dịch vụ', 'Những loại hình dịch vụ diễn ra trong cả nước', NULL, '2020-02-06 04:45:52', '2020-02-06 21:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2020_02_02_170537_create_categories_table', 1),
(26, '2020_02_05_083249_create_products_table', 1),
(27, '2020_02_05_170242_create_areas_table', 1),
(28, '2020_02_05_170304_create_type_cooks_table', 1),
(29, '2020_02_05_170317_create_type_products_table', 1),
(30, '2020_02_06_095409_create_stores_table', 1),
(31, '2020_02_06_110821_create_type_qualitys_table', 1),
(32, '2020_02_06_145252_update_st_price_table_stores', 2),
(37, '2020_02_06_155704_update_st_phone_table_stores', 3),
(38, '2020_02_06_174702_update_active_table_areas_type_cook_product_quality', 3),
(39, '2020_02_07_121714_update_add_column_pro_count_table_products', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_typeStore_id` int(11) NOT NULL DEFAULT 0,
  `pro_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_price`, `pro_sale`, `pro_active`, `pro_view`, `pro_hot`, `pro_avatar`, `pro_typeStore_id`, `pro_desc_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_count`) VALUES
(1, 'Trà đào', 'tra-dao', 15000, 0, 0, 0, 0, NULL, 1, 'Trà đào', 'tra dao', '2020-02-07 11:35:59', '2020-02-09 10:21:38', 0),
(2, 'Cafe black', 'cafe-black', 15000, 0, 0, 0, 1, NULL, 2, 'Cafe black', NULL, '2020-02-08 23:50:55', '2020-02-09 10:21:33', 0),
(3, 'Trà xanh', 'tra-xanh', 18000, 0, 0, 0, 1, '2020-02-11__pl00.png', 11, 'Trà xanh', NULL, '2020-02-09 09:43:21', '2020-02-11 06:01:14', 0),
(4, 'Trà É', 'tra-e', 10500, 0, 1, 0, 0, '2020-02-11__.jpg', 11, 'Trà É', NULL, '2020-02-09 09:43:58', '2020-02-11 06:01:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `st_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `st_sale` tinyint(4) NOT NULL DEFAULT 0,
  `st_timeOpen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_active` tinyint(4) NOT NULL DEFAULT 1,
  `st_view` int(11) NOT NULL DEFAULT 0,
  `st_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hot` tinyint(4) NOT NULL DEFAULT 0,
  `st_activeOpen` tinyint(4) NOT NULL DEFAULT 0,
  `st_category_id` int(11) NOT NULL DEFAULT 0,
  `st_typeQuality_id` int(11) DEFAULT 0,
  `st_area_id` int(11) NOT NULL DEFAULT 0,
  `st_typeCook_id` int(11) DEFAULT 0,
  `st_typeProduct_id` int(11) DEFAULT 0,
  `st_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `st_phone` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `st_name`, `st_slug`, `st_price`, `st_sale`, `st_timeOpen`, `st_address`, `st_active`, `st_view`, `st_avatar`, `st_hot`, `st_activeOpen`, `st_category_id`, `st_typeQuality_id`, `st_area_id`, `st_typeCook_id`, `st_typeProduct_id`, `st_desc_seo`, `st_keyword_seo`, `created_at`, `updated_at`, `st_phone`) VALUES
(1, 'Hoa Hồi Food - Tiệm Bánh Mì Nướng Lạng Sơn', 'hoa-hoi-food-tiem-banh-mi-nuong-lang-son', '15,000 - 30,000', 0, '07:00 - 23:00', '104 C3 Nghĩa Tân, Quận Cầu Giấy, Hà Nội', 1, 0, NULL, 0, 0, 1, NULL, 2, NULL, NULL, 'Tiệm Bánh Mì Nướng Lạng Sơn', 'hoa doi food', '2020-02-07 07:22:29', '2020-02-09 00:05:46', NULL),
(2, 'Ông Sơn - Bún Cá Biển Cay - Nguyễn Trãi', 'ong-son-bun-ca-bien-cay-nguyen-trai', '15,000 - 50,000', 0, '07:00 - 23:00', '271 Nguyễn Trãi, Quận Thanh Xuân, Hà Nội', 1, 0, NULL, 0, 0, 1, 15, 2, 1, 1, 'Bún Cá Biển Cay - Nguyễn Trãi', 'ong son', '2020-02-07 07:55:41', '2020-02-07 07:55:41', NULL),
(3, 'Thái Hạnh - Huy Mai - Quán Ăn Vặt', 'thai-hanh-huy-mai-quan-an-vat', '5,000 - 50,000', 0, '07:00 - 23:00', '3 Ngõ 4C Đặng Văn Ngữ, Quận Đống Đa, Hà Nội', 1, 0, NULL, 0, 0, 1, 4, 2, 1, 1, 'Thái Hạnh - Huy Mai - Quán Ăn Vặt', NULL, '2020-02-07 07:58:02', '2020-02-07 07:58:02', NULL),
(4, 'Trà Sữa Gong Cha - 貢茶 - Lý Thường Kiệt', 'tra-sua-gong-cha-ly-thuong-kiet', '15,000 - 50,000', 0, '07:00 - 23:00', '56 Lý Thường Kiệt, Quận Hoàn Kiếm, Hà Nội', 1, 0, NULL, 0, 0, 1, 15, 2, 1, 2, 'Trà Sữa Gong Cha - 貢茶 - Lý Thường Kiệt', NULL, '2020-02-07 07:59:01', '2020-02-07 07:59:01', NULL),
(5, 'Chill Tea - Thống Nhất', 'chill-tea-thong-nhat', '15,000 - 30,000', 0, '07:00 - 22:00', '63 Thống Nhất, P. Bình Thọ, Thủ Đức, TP. HCM', 1, 0, NULL, 0, 0, 1, 15, 1, 1, 2, 'Chill Tea - Thống Nhất', NULL, '2020-02-07 08:00:08', '2020-02-07 08:00:08', NULL),
(6, 'Mì Nhật Hana Maru - Nguyễn Ngọc Phương', 'mi-nhat-hana-maru-nguyen-ngoc-phuong', '15,000 - 50,000', 0, '07:00 - 2:00', '8C Nguyễn Ngọc Phương, P. 19, Bình Thạnh, TP. HCM', 1, 0, NULL, 0, 0, 1, 7, 1, 8, 12, 'Mì Nhật Hana Maru - Nguyễn Ngọc Phương', NULL, '2020-02-07 08:01:01', '2020-02-07 08:01:01', NULL),
(7, 'Chilli Thai - Ăn Vặt - Mạc Thị Bưởi', 'chilli-thai-an-vat-mac-thi-buoi', '15,000 - 50,000', 0, '07:00 - 23:00', '38 Mạc Thị Bưởi, P. Bến Nghé, Quận 1, TP. HCM', 1, 0, NULL, 0, 0, 1, 4, 1, 6, 7, 'Chilli Thai - Ăn Vặt - Mạc Thị Bưởi', NULL, '2020-02-07 08:01:58', '2020-02-07 08:01:58', NULL),
(8, 'Trung Tâm Triển Lãm & Hội Nghị Sài Gòn (SECC) - Nguyễn Văn Linh', 'trung-tam-trien-lam-hoi-nghi-sai-gon-secc-nguyen-van-linh', '150,000 - 500,000', 0, '07:00 - 23:00', '799 Nguyễn Văn Linh, P. Tân Phú,  Quận 7, TP. HCM', 1, 0, NULL, 0, 0, 2, 13, 3, 1, 12, 'Trung Tâm Triển Lãm & Hội Nghị Sài Gòn (SECC) - Nguyễn Văn Linh', NULL, '2020-02-07 08:03:51', '2020-02-07 08:03:51', NULL),
(9, 'Chang - Modern Thai Cuisine - Cao Thắng', 'chang-modern-thai-cuisine-cao-thang', '5,000 - 50,000', 0, '07:00 - 23:00', '4 Cao Thắng, P. 5, Quận 3', 1, 0, NULL, 0, 0, 1, NULL, 1, 1, 1, 'Chang - Modern Thai Cuisine - Cao Thắng', NULL, '2020-02-07 08:31:22', '2020-02-07 08:31:22', NULL),
(10, 'Pizza Mập - Pizza Online', 'pizza-map-pizza-online', '70,000 - 130,000', 0, '07:00 - 23:00', '50/514 Thụy Khuê, Quận Tây Hồ, Hà Nội', 1, 0, NULL, 0, 0, 1, NULL, 2, NULL, 8, 'Pizza Mập - Pizza Online', 'dddd', '2020-02-07 08:43:34', '2020-02-09 00:28:42', 383600764),
(11, 'Xích Beer - Nguyên Hồng', 'xich-beer-nguyen-hong', '100.000 - 200.000', 0, '10:00 - 23:59', '68 Nguyên Hồng,  Quận Đống Đa, Hà Nội', 1, 0, NULL, 0, 0, 1, 13, 2, 1, NULL, 'Xích Beer - Nguyên Hồng', NULL, '2020-02-07 08:44:45', '2020-02-07 08:44:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_cooks`
--

CREATE TABLE `type_cooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `tc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tc_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tc_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tc_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_cooks`
--

INSERT INTO `type_cooks` (`id`, `tc_name`, `tc_slug`, `tc_desc`, `created_at`, `updated_at`, `tc_active`) VALUES
(1, 'Món Việt', 'mon-viet', 'Những món ăn của người việt nam', '2020-02-06 17:58:32', '2020-02-06 17:59:00', 1),
(2, 'Món Bắc', 'mon-bac', 'Những món ăn của riêng người bắc', '2020-02-06 18:49:53', '2020-02-06 18:49:53', 1),
(3, 'Món Trung Hoa', 'mon-trung-hoa', 'Những món ăn của người trung khựa', '2020-02-06 18:50:26', '2020-02-06 18:50:26', 1),
(4, 'Món Miền Trung', 'mon-mien-trung', 'Món Miền Trung', '2020-02-06 18:50:37', '2020-02-06 18:50:37', 1),
(5, 'Món Miền Nam', 'mon-mien-nam', 'Món Miền Nam', '2020-02-06 18:50:47', '2020-02-06 18:50:47', 1),
(6, 'Món Thái', 'mon-thai', 'Món Thái', '2020-02-06 18:51:00', '2020-02-06 18:51:00', 1),
(7, 'Món Ý', 'mon-y', 'Món Ý', '2020-02-06 18:51:12', '2020-02-06 18:51:12', 1),
(8, 'Món Nhật', 'mon-nhat', 'Món Nhật', '2020-02-06 18:51:23', '2020-02-06 18:51:23', 1),
(9, 'Món Hàn', 'mon-han', 'Món hàn', '2020-02-06 18:51:33', '2020-02-06 18:52:56', 1),
(10, 'Món Chay', 'mon-chay', 'Món Chay', '2020-02-06 18:51:48', '2020-02-06 18:51:48', 1),
(11, 'Hải Sản', 'hai-san', 'Hải Sản', '2020-02-06 18:51:55', '2020-02-06 18:51:55', 1),
(12, 'Beer/Bar', 'beerbar', 'Beer/Bar', '2020-02-06 18:52:09', '2020-02-06 18:52:09', 1),
(13, 'Bánh', 'banh', 'Bánh', '2020-02-06 18:52:17', '2020-02-06 18:52:17', 1),
(14, 'Kem', 'kem', 'Kem', '2020-02-06 18:52:23', '2020-02-06 18:52:23', 1),
(15, 'Món Pháp', 'mon-phap', 'Món Pháp', '2020-02-06 18:52:36', '2020-02-06 18:52:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `tp_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tp_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `tp_name`, `tp_slug`, `tp_desc`, `created_at`, `updated_at`, `tp_active`) VALUES
(1, 'Food', 'food', 'những loại sản phẩm liên quan đến món ăn', '2020-02-06 19:29:53', '2020-02-06 19:35:32', 1),
(2, 'Drink', 'drink', 'những loại sản phẩm liên quan đến thức uống', '2020-02-06 19:32:19', '2020-02-06 19:35:19', 1),
(3, 'Vege', 'vege', 'những loại sản phẩm liên quan đến rau xanh', '2020-02-06 19:36:16', '2020-02-06 19:36:16', 1),
(4, 'Cakes', 'cakes', 'những loại sản phẩm liên quan đến bánh', '2020-02-06 19:36:40', '2020-02-06 19:36:40', 1),
(5, 'Dessert', 'dessert', 'những loại sản phẩm liên quan đến món tráng miệng', '2020-02-06 19:37:05', '2020-02-06 19:37:05', 1),
(6, 'Homemade', 'homemade', 'những loại sản phẩm liên quan đến những món tự làm', '2020-02-06 19:37:45', '2020-02-06 19:37:45', 1),
(7, 'Streetfood', 'streetfood', 'những loại sản phẩm liên quan đến món ăn đường phố', '2020-02-06 19:38:28', '2020-02-06 19:38:28', 1),
(8, 'Pizza/Burger', 'pizzaburger', 'Pizza/Burger', '2020-02-06 19:39:46', '2020-02-06 19:39:46', 1),
(9, 'Hotpot', 'hotpot', 'những loại sản phẩm liên quan đến lẩu', '2020-02-06 19:40:16', '2020-02-06 19:40:16', 1),
(10, 'Chicken', 'chicken', 'Chicken', '2020-02-06 19:40:24', '2020-02-06 19:40:24', 1),
(11, 'Sushi', 'sushi', 'Sushi', '2020-02-06 19:40:57', '2020-02-06 19:40:57', 1),
(12, 'Noodles', 'noodles', 'những loại sản phẩm liên quan đến mì, bún', '2020-02-06 19:41:31', '2020-02-06 19:41:31', 1),
(13, 'Rice box', 'rice-box', 'những loại sản phẩm liên quan đến cơm hộp', '2020-02-06 19:42:00', '2020-02-06 19:42:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_qualitys`
--

CREATE TABLE `type_qualitys` (
  `id` int(10) UNSIGNED NOT NULL,
  `tq_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tq_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tq_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tq_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_qualitys`
--

INSERT INTO `type_qualitys` (`id`, `tq_name`, `tq_slug`, `tq_desc`, `created_at`, `updated_at`, `tq_active`) VALUES
(1, 'Sang trọng', 'sang-trong', 'những địa điểm được đánh giá sang trọng', '2020-02-06 19:53:32', '2020-02-06 19:53:56', 1),
(2, 'Buffet', 'buffet', 'những địa điểm ăn buffet', '2020-02-06 21:00:32', '2020-02-06 21:00:32', 1),
(3, 'Nhà hàng', 'nha-hang', 'những địa điểm nhà hàng trong cả nước', '2020-02-06 21:00:57', '2020-02-06 21:00:57', 1),
(4, 'Ăn vặt/vỉa hè', 'an-vatvia-he', 'Ăn vặt/vỉa hè', '2020-02-06 21:01:33', '2020-02-06 21:01:33', 1),
(5, 'Ăn chay', 'an-chay', 'Ăn chay', '2020-02-06 21:01:58', '2020-02-06 22:11:15', 1),
(6, 'Cafe/Dessert', 'cafedessert', 'Cafe/Dessert', '2020-02-06 22:11:42', '2020-02-06 22:11:42', 1),
(7, 'Quán ăn', 'quan-an', 'Quán ăn', '2020-02-06 22:13:57', '2020-02-06 22:13:57', 1),
(8, 'Bar/Pub', 'barpub', 'Bar/Pub', '2020-02-06 22:15:06', '2020-02-06 22:15:06', 1),
(9, 'Quán nhậu', 'quan-nhau', 'Quán nhậu', '2020-02-06 22:15:15', '2020-02-06 22:15:15', 1),
(10, 'Beer Club', 'beer-club', 'Beer Club', '2020-02-06 22:15:33', '2020-02-06 22:15:33', 1),
(11, 'Tiệm bánh', 'tiem-banh', 'Tiệm bánh', '2020-02-06 22:15:40', '2020-02-06 22:15:40', 1),
(12, 'Khu ẩm thực', 'khu-am-thuc', 'Khu ẩm thực', '2020-02-06 22:15:57', '2020-02-06 22:15:57', 1),
(13, 'Shop online', 'shop-online', 'Shop online', '2020-02-06 22:16:04', '2020-02-06 22:16:04', 1),
(15, 'Bình thường', 'binh-thuong', 'Bình thường', '2020-02-07 03:27:44', '2020-02-07 03:27:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_ar_slug_index` (`ar_slug`),
  ADD KEY `areas_ar_active_index` (`ar_active`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_typestore_id_index` (`pro_typeStore_id`),
  ADD KEY `products_pro_count_index` (`pro_count`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_st_slug_index` (`st_slug`),
  ADD KEY `stores_st_active_index` (`st_active`),
  ADD KEY `stores_st_category_id_index` (`st_category_id`),
  ADD KEY `stores_st_typequality_id_index` (`st_typeQuality_id`),
  ADD KEY `stores_st_area_id_index` (`st_area_id`),
  ADD KEY `stores_st_typecook_id_index` (`st_typeCook_id`),
  ADD KEY `stores_st_typeproduct_id_index` (`st_typeProduct_id`);

--
-- Indexes for table `type_cooks`
--
ALTER TABLE `type_cooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_cooks_tc_slug_index` (`tc_slug`),
  ADD KEY `type_cooks_tc_active_index` (`tc_active`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_products_tp_slug_index` (`tp_slug`),
  ADD KEY `type_products_tp_active_index` (`tp_active`);

--
-- Indexes for table `type_qualitys`
--
ALTER TABLE `type_qualitys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_qualitys_tq_slug_index` (`tq_slug`),
  ADD KEY `type_qualitys_tq_active_index` (`tq_active`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type_cooks`
--
ALTER TABLE `type_cooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `type_qualitys`
--
ALTER TABLE `type_qualitys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
