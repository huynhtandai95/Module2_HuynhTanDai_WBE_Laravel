-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 01:53 PM
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
-- Database: `qlfurama2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `Services_id` int(11) NOT NULL,
  `OtherService_id` int(11) NOT NULL,
  `DateStart` date NOT NULL,
  `DateEnd` date NOT NULL,
  `UnitRentService` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_04_075458_create_other_services_table', 1),
(5, '2019_10_04_075617_create_contracts_table', 1),
(6, '2019_10_04_193537_create_type_of_services_table', 1),
(7, '2019_10_04_195837_create_services_table', 1),
(8, '2019_10_04_200034_create__type_rent_table', 1),
(9, '2019_10_04_200256_update_services_table', 1),
(10, '2019_10_04_200546_update__contract_table', 1),
(11, '2019_10_06_101846_create_order_deltais_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_deltais`
--

CREATE TABLE `order_deltais` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_deltais`
--

INSERT INTO `order_deltais` (`id`, `users_id`, `services_id`, `Price`, `dateStart`, `dateEnd`, `created_at`, `updated_at`) VALUES
(11, 2, 1, '20000000', '2000-02-01', '2000-02-03', '2019-10-08 07:23:29', '2019-10-08 07:23:29'),
(12, 2, 1, '20000000', '2000-02-01', '2000-02-03', '2019-10-08 07:32:25', '2019-10-08 07:32:25'),
(13, 2, 1, '20000000', '2000-01-02', '2000-01-04', '2019-10-08 07:45:18', '2019-10-08 07:45:18'),
(14, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:38:21', '2019-10-08 10:38:21'),
(15, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:39:45', '2019-10-08 10:39:45'),
(16, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:40:18', '2019-10-08 10:40:18'),
(17, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:42:51', '2019-10-08 10:42:51'),
(18, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:43:12', '2019-10-08 10:43:12'),
(19, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:43:59', '2019-10-08 10:43:59'),
(20, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:47:35', '2019-10-08 10:47:35'),
(21, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:48:05', '2019-10-08 10:48:05'),
(22, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 10:48:16', '2019-10-08 10:48:16'),
(32, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 11:00:45', '2019-10-08 11:00:45'),
(33, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 11:00:57', '2019-10-08 11:00:57'),
(34, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 11:01:04', '2019-10-08 11:01:04'),
(35, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 11:01:23', '2019-10-08 11:01:23'),
(36, 2, 1, '20000000', '2000-01-01', '2000-01-03', '2019-10-08 11:01:51', '2019-10-08 11:01:51'),
(37, 2, 14, '20000000', '2019-10-09', '2019-10-11', '2019-10-08 11:07:27', '2019-10-08 11:07:27'),
(38, 3, 1, '20000000', '2019-10-09', '2019-10-11', '2019-10-08 20:43:24', '2019-10-08 20:43:24'),
(39, 3, 6, '5000000', '2019-10-10', '2019-10-15', '2019-10-21 10:03:54', '2019-10-21 10:03:54'),
(40, 2, 15, '2500000', '2019-10-20', '2019-10-25', '2019-10-22 00:26:53', '2019-10-22 00:26:53'),
(41, 2, 1, '240000000', '2019-10-02', '2019-10-26', '2019-10-23 01:44:36', '2019-10-23 01:44:36'),
(42, 2, 1, '20000000', '2019-10-23', '2019-10-25', '2019-10-23 01:54:47', '2019-10-23 01:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `NameOtherService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `content`, `users_id`, `created_at`, `updated_at`) VALUES
(2, 'Test Bình luận từ Admin', 3, '2019-10-21 08:10:03', '2019-10-21 08:10:03'),
(3, 'Khách Sạn Giá Khá Tốt', 2, '2019-10-21 08:10:38', '2019-10-21 08:10:38'),
(4, 'Chất Lượng dịch vụ 5 sao !!', 5, '2019-10-21 09:57:51', '2019-10-21 09:57:51'),
(5, 'Khách Sạn Tuyệt Vời', 2, '2019-10-22 00:27:34', '2019-10-22 00:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `NameService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AreaUsed` int(11) NOT NULL,
  `MaxPeople` int(11) NOT NULL,
  `Standard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Convenient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumberFloors` int(11) DEFAULT NULL,
  `AreaPool` int(11) DEFAULT 0,
  `Price` decimal(10,0) DEFAULT NULL,
  `TypeRent_id` int(11) DEFAULT NULL,
  `TypeOfService_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `NameService`, `Description`, `AreaUsed`, `MaxPeople`, `Standard`, `Convenient`, `NumberFloors`, `AreaPool`, `Price`, `TypeRent_id`, `TypeOfService_id`, `created_at`, `updated_at`) VALUES
(1, 'BIỆT THỰ HƯỚNG BIỂN 1', '<p>\r\n            <p>Được trang trí với tông màu dịu nhẹ kết hợp với những đồ thủ công trang trí mang đậm hơi thở văn hóa Chăm-pa của địa phương, căn phòng được chia tầng rõ rệt. Ở dưới là khu vực sinh hoạt với ghế sofa chữ L và ở trên là giường ngủ tạo cảm giác trang nhã mà rất thân thuộc như ở nhà.</p>\r\n            <p>Đệm lụa và khăn trải giường cùng gối xa hoa làm tăng sự sang trọng và quyến rũ trong cá tính của chính căn phòng tuyệt đẹp này.</p>\r\n            <p>Diện tích: 80.5 m2 kết nối với ban công rộng 24 m2.</p>\r\n            <p>Tối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.</p>\r\n            </p>', 900, 10, '5 Sao', 'Có', 3, 30, '10000000', NULL, 1, '2019-10-05 06:58:37', '2019-10-07 01:40:55'),
(6, 'House 2', 'Luôn giành được sự ưa thích kỳ lạ bởi thiết kế rộng rãi đầy sang trọng, căn phòng được trang bị nội thất sofa thanh lịch, bàn cà phê và ghế bành thoải mái mang lại sự thư giãn tuyệt đối. Phòng tắm lớn được trang trí bằng đá cẩm thạch màu mật ong chia khu vực bồn tắm và vòi sen với nhiều lựa chọn.\r\n\r\nDiện tích: 43.7 m2 kết nối với ban công rộng 11.3 m2.\r\n\r\nTối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.', 150, 5, '3 Sao', 'Có', 1, 0, '1000000', NULL, 2, '2019-10-05 09:09:36', '2019-10-21 10:02:33'),
(11, 'PHÒNG SUPERIOR HƯỚNG HỒ', 'Tận hưởng khung cảnh nhiệt đới với cây, cỏ và hoa ngập tràn đủ loại sắc màu và xanh ngút ngàn từ ban công của căn phòng thanh lịch và rộng rãi này. Vào ban đêm, hồ bơi và khu vườn được chiếu sáng lãng mạn.\r\n\r\nPhòng có sàn gỗ bóng, khu vực ngồi tiếp khách riêng biệt, độc đáo, tủ quần áo không cửa ngăn, giường đôi hoặc giường King cùng phòng tắm lát đá cẩm thạch rộng lớn được trang bị vòi tắm ngoại cỡ.\r\n\r\nDiện tích: 40.1 m2 kết nối với ban công rộng 11.3 m2.\r\n\r\nTối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.', 41, 2, '3 Sao', 'Có', 1, 0, '300000', NULL, 3, '2019-10-06 10:30:03', '2019-10-06 10:30:03'),
(13, 'BIỆT THỰ HƯỚNG BIỂN', 'Được trang trí với tông màu dịu nhẹ kết hợp với những đồ thủ công trang trí mang đậm hơi thở văn hóa Chăm-pa của địa phương, căn phòng được chia tầng rõ rệt. Ở dưới là khu vực sinh hoạt với ghế sofa chữ L và ở trên là giường ngủ tạo cảm giác trang nhã mà rất thân thuộc như ở nhà.\r\n            Đệm lụa và khăn trải giường cùng gối xa hoa làm tăng sự sang trọng và quyến rũ trong cá tính của chính căn phòng tuyệt đẹp này.\r\n            Diện tích: 80.5 m2 kết nối với ban công rộng 24 m2.\r\n            Tối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.', 900, 10, '5 Sao', 'Có', 3, 30, '10000000', NULL, 1, '2019-10-07 01:24:36', '2019-10-07 01:24:36'),
(14, 'BIỆT THỰ HƯỚNG BIỂN', '<p>\r\n            <p>Được trang trí với tông màu dịu nhẹ kết hợp với những đồ thủ công trang trí mang đậm hơi thở văn hóa Chăm-pa của địa phương, căn phòng được chia tầng rõ rệt. Ở dưới là khu vực sinh hoạt với ghế sofa chữ L và ở trên là giường ngủ tạo cảm giác trang nhã mà rất thân thuộc như ở nhà.</p>\r\n            <p>Đệm lụa và khăn trải giường cùng gối xa hoa làm tăng sự sang trọng và quyến rũ trong cá tính của chính căn phòng tuyệt đẹp này.</p>\r\n            <p>Diện tích: 80.5 m2 kết nối với ban công rộng 24 m2.</p>\r\n            <p>Tối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.</p>\r\n            </p>', 900, 10, '5 Sao', 'Có', 2, 30, '10000000', NULL, 1, '2019-10-07 01:28:17', '2019-10-07 01:28:17'),
(15, 'PHÒNG SUPERIOR HƯỚNG VƯỜN', 'Đắm mình dưới vẻ đẹp tuyệt mỹ của hoàng hôn trên thành phố biển xinh đẹp. Căn phòng hướng mình về phía mặt trời lặn với ban công thoáng đãng, nội thất thanh lịch, sàn gỗ bóng, tủ quần áo không cửa ngăn, quạt trần bên trên giường đôi hoặc giường King kết nối với phòng tắm lát đá cẩm thạch được trang bị vòi tắm hoa sen.\r\n\r\nDiện tích: 40.1 m2 kết nối với ban công rộng 11.3 m2.\r\n\r\nTối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.', 43, 5, '3 Sao', 'Có', 1, 0, '500000', NULL, 3, '2019-10-21 10:06:48', '2019-10-21 10:06:48'),
(16, 'House 2', NULL, 100, 5, '4 Sao', 'Có', 1, 30, '1000000', NULL, 2, '2019-10-21 10:10:25', '2019-10-21 10:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_services`
--

CREATE TABLE `type_of_services` (
  `id` int(11) NOT NULL,
  `NameService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_services`
--

INSERT INTO `type_of_services` (`id`, `NameService`, `created_at`, `updated_at`) VALUES
(1, 'Villa', NULL, NULL),
(2, 'House', NULL, NULL),
(3, 'Room', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_rent`
--

CREATE TABLE `type_rent` (
  `id` int(11) NOT NULL,
  `TypeRent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `Unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_rent`
--

INSERT INTO `type_rent` (`id`, `TypeRent`, `price`, `Unit`, `created_at`, `updated_at`) VALUES
(5, 'Villa Theo Giờ', 500000, 'Giờ', '2019-10-05 06:42:37', '2019-10-05 06:42:37'),
(6, 'Villa Theo ngày', 10000000, 'Ngày', '2019-10-05 06:42:37', '2019-10-05 06:42:37'),
(7, 'House theo Giờ', 250000, 'Giờ', '2019-10-05 06:42:37', '2019-10-05 06:42:37'),
(8, 'House theo Ngày', 3000000, 'Ngày', '2019-10-05 06:42:37', '2019-10-05 06:42:37'),
(9, 'Room theo Giờ', 150000, 'Giờ', '2019-10-05 06:42:37', '2019-10-05 06:42:37'),
(10, 'Room theo Ngày', 1000000, 'Ngày', '2019-10-05 06:42:37', '2019-10-05 06:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberID` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT 2,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userName`, `email`, `email_verified_at`, `password`, `phone`, `numberID`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'huỳnh tấn đại', 'huynhtandai95', 'huynhtandai95@gmail.com', NULL, '$2y$10$T97IYJTPHYt6vy85x6ZTP.T45P8uxr/cbCNcImYRxTik/30s4stxm', '01699358544', '20202020', '22 mẹ hiền', 2, NULL, '2019-10-04 21:31:19', '2019-10-04 21:31:19'),
(3, 'admin11', 'admin11', 'admin11@gmail.com', NULL, '$2y$10$1wS.OZgpUg5U8/eNxOvDY.tFclqaLLdUkMJLbaQli/v1aO8s37N2i', '01699358544', '12345678', '22 mẹ hiền', 1, NULL, '2019-10-07 02:32:46', '2019-10-07 02:32:46'),
(4, 'nguyen van A', 'nguyenvana1', 'nguyenvana1@gmail.com', NULL, '$2y$10$exeafDyB52QfxdYumpJLB.BzxyEW/CyqBjG0RTwARMqxeo6FUd0na', '0906999999', '205890082', 'Da Nang', 2, NULL, '2019-10-20 21:36:55', '2019-10-20 21:36:55'),
(5, 'nguyen van B', 'nguyenvanb', 'nguyenvanb@gmail.com', NULL, '$2y$10$hgBxHI9PwFlsVZc9vnyxheg4W35QwEGl0094xbEO/l.fSKMiv5HSG', '0905123333', '2890927398', 'Quang Nam', 2, NULL, '2019-10-21 09:33:46', '2019-10-21 09:33:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracts_services_id_foreign` (`Services_id`),
  ADD KEY `contracts_otherservice_id_foreign` (`OtherService_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_deltais`
--
ALTER TABLE `order_deltais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id` (`services_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_typerent_id_foreign` (`TypeRent_id`),
  ADD KEY `services_typeofservice_id_foreign` (`TypeOfService_id`);

--
-- Indexes for table `type_of_services`
--
ALTER TABLE `type_of_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_rent`
--
ALTER TABLE `type_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`userName`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_numberid_unique` (`numberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_deltais`
--
ALTER TABLE `order_deltais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `type_of_services`
--
ALTER TABLE `type_of_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_rent`
--
ALTER TABLE `type_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contracts_otherservice_id_foreign` FOREIGN KEY (`OtherService_id`) REFERENCES `other_services` (`id`),
  ADD CONSTRAINT `contracts_services_id_foreign` FOREIGN KEY (`Services_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `order_deltais`
--
ALTER TABLE `order_deltais`
  ADD CONSTRAINT `order_deltais_ibfk_1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `order_deltais_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_typeofservice_id_foreign` FOREIGN KEY (`TypeOfService_id`) REFERENCES `type_of_services` (`id`),
  ADD CONSTRAINT `services_typerent_id_foreign` FOREIGN KEY (`TypeRent_id`) REFERENCES `type_rent` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
