-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 05:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_oreder` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(255) NOT NULL,
  `note` varchar(500) NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bill` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_03_23_103259_create_users_table', 1),
(5, '2023_03_24_050901_create_product_categories_table', 2),
(6, '2023_03_24_055159_create_news_table', 3),
(7, '2023_03_24_052744_create_products_table', 4),
(8, '2023_03_24_055357_create_sliders_table', 4),
(9, '2023_03_24_061707_create_customers_table', 5),
(10, '2023_03_24_060438_create_bills_table', 6),
(11, '2023_03_24_064831_create_bill_details_table', 7),
(12, '2023_03_24_072833_create_favourite_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `unit_price` double NOT NULL,
  `promotion_price` double DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_category`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Adidas Predator Accuracy .4 TF Own Your Football', 1, 'adidas Predator Accuracy .4 TF Own Your Football - Core Black/Footwear White/Shock Pink là mẫu giày phổ thông dành cho mặt sân cỏ nhân tạo 5-7 người. Predator đã duy trì sự thay đổi trong suốt những năm qua, và 2023 là một ngoại hình hoàn toàn mới, thiết ', 1590000, 1390000, 'shoes_adidas1.1.png', '', 20, '2023-03-26 03:53:54', '2023-03-26 03:53:54'),
(2, 'NIKE STREET GATO IC - TEAM GOLD/INFRARED 23/WHITE\r\n', 2, 'Nike vốn được mệnh danh là \"master on the small courts\" - chuyên gia trong lĩnh vực giày bóng đá trong nhà. Để tiếp tục khẳng định vị trí của mình, Nike vừa mới đây đã phát hành phiên bản cải tiến ấn tượng của dòng giày Street Gato và các bản cập nhật màu sắc độc đáo đảm bảo đáp ứng mọi phong cách cho người chơi.', 2150000, 0, 'shoes_nike1.1.png', '', 20, '2023-03-26 04:02:42', '2023-03-26 04:02:42'),
(3, 'MIZUNO MORELIA NEO III PRO FG - GOLD/WHITE', 3, 'Morelia là dòng sản phẩm lâu đời nhất của Mizuno (ra mắt năm 1985), nhưng trải qua gần 30 năm hình thành và phát triển, Moreila đang không ngừng cải tiến từng ngày, từ thiết kế đến công nghệ nhằm bắt kịp xu thế hiện đại. Morelia III Beta cũng là dòng sản phẩm được Sergio Ramos làm đại diện trước khi chuyển qua Mizuno Alpha. Giữa thị trường giày bóng đá ngày càng đa dạng với nhiều thương hiệu đình đám, chúng ta vẫn phải công nhận những cải tiến và đột phá của mình đã giúp Mizuno có chỗ đứng vững chắc trong lòng người hâm mộ.', 2850000, 0, 'shoes_mizuno1.1.png', '', 0, '2023-03-26 04:10:03', '2023-03-26 04:10:03'),
(4, 'KAMITO TA11 PRO TF TOUCH OF MAGIC - TEAM RED/MINT', 4, 'TA11 ra đời để vinh danh cũng như ghi nhận những đóng góp đáng giá của cầu thủ Nguyễn Tuấn Anh. Giống như những mẫu giày \"Signature\" khác, Kamito TA11 sở hữu những đặc trưng khác biệt và thú vị liên quan đến đội trưởng của CLB Hoàng Anh Gia Lai.\r\nNhững sản phẩm từ thương hiệu Kamito được kỳ công sáng tạo bởi những người thợ lành nghề, dồn tâm huyết vào từng đường kim mũi chỉ, mong muốn đem đến những sản phẩm tốt nhất, giúp các cầu thủ thăng hoa khi thi đấu cùng hiệu suất cao nhất. \r\n', 899000, 0, 'shoes_kamito1.png', '', 0, '2023-03-26 04:13:32', '2023-03-26 04:13:32'),
(5, 'PUMA FUTURE ULTIMATE FG/AG CREATIVITY - PUMA WHITE/TEAM VIOLET/FLURO YELLOW LIMITED EDITION', 5, 'Phiên bản giày đá banh Puma Future Ultimate \'Creativity\' mới dành cho Neymar được phối màu hài hòa từ 3 gam màu \"Puma White/Team Violet/Fluro Yellow\". Ngoài ra, ấn tượng nhất phải kể đến sự kết hợp sáng tạo giữa các họa tiết cách điệu đầy sự phá cách và táo bạo. Các đường nét họa tiết được thiết kế theo hình thức bất đối xứng, kết hợp giữa màu vàng và trắng mang lại sự độc đáo và ấn tượng mạnh mẽ cho phiên bản giày này. Logo Puma được đặt ở phía trên của giày, kết hợp với chữ ký của Neymar ở phía sau, tạo nên phong cách riêng biệt và cá tính. Tổng thể, màu sắc và họa tiết của phiên bản giày đá banh Future Ultimate rất phù hợp với phong cách chơi bóng nhanh nhẹn, đầy năng lượng của siêu sao Neymar.', 5390000, 0, 'shoes_puma1.1.png', '', 0, '2023-03-26 04:36:27', '2023-03-26 04:36:27'),
(6, 'Tất chống trơn H3 SUPERB', 6, 'Tất chống trơn H3 Superb với thiết kế đặc biệt, lớp cao su dưới lòng bàn chân tạo ma sát, hạn chế trơn trượt, thường sử dụng trong các môn thể thao tốc độ như bóng đá, bóng bầu dục, tennis...\r\nCông nghệ làm tất H3 của Thailand ngày càng hoàn thiện, gần tiệm cận với tất Trusox nổi tiếng của nước ngoài. ', 200000, 175000, 'tất1.1.png', '', 0, '2023-03-26 05:56:50', '2023-03-26 05:56:50'),
(7, 'BĂNG KEO THỂ THAO STARBALM SPORT CARE', 7, 'BĂNG KEO THỂ THAO STARBALM thường được các vận động viên sử dụng trước, trong và sau khi thi đấu. ', 55000, 40000, 'brassard1.png', '', 0, '2023-03-26 06:01:17', '2023-03-26 06:01:17'),
(8, 'BỘ QUẦN ÁO BÓNG ĐÁ KAMITO ĐÀ NẴNG - XANH NGỌC', 8, 'Bộ quần áo bóng đá Kamito Đà Nẵng - Xanh ngọc là dòng sản phẩm có chất vải mềm mại, giảm nhăn hiệu quả, thoáng khí, co dãn 4 chiều với độ đàn hồi cao nhờ sự kết hợp theo tỷ lệ đặc biệt từ sợi Polyester và sợi Elastan. Áp dụng công nghệ Moisture-Wicking giúp những chiếc áo đấu Kamito có khả năng hút ẩm cao và bay hơi nhanh. Người mặc sẽ luôn cảm thấy nhẹ nhàng và khô thoáng, hạn chế những mùi phát sinh trong quá trình vận động cường độ cao. Thiết kế body fit hiện đại, tôn dáng, năng động, giúp người mặc luôn tự tin khi sử dụng.', 239000, 209000, 'clothes1.png', '', 0, '2023-03-26 06:05:14', '2023-03-26 06:05:14'),
(9, 'BALO NEYMARSPORT FOOTBALL BACKPACK 2022\r\n', 9, 'NEYMARSPORT FOOTBALL BACKPACK 2022 là mẫu Balo mới nhất được Neymarsport thiết kế với nhiều tiện lợi, thời trang phù hợp cho người dùng có thể mang đi đá bóng, đi chơi hoặc đi làm và đi học. Balo gồm nhiều ngăn túi đựng đồ đạc, laptop... Ngoài ra, 2 bên túi có thể đựng nước uống và phía dưới có ngăn đựng giày thông minh, gọn gàng tách riêng với đồ đạc cá nhân.\r\n', 219000, 199000, 'bag1.png', '', 0, '2023-03-26 06:10:03', '2023-03-26 06:10:03'),
(10, 'GĂNG TAY THỦ MÔN NIKE GOALKEEPER GLOVES MATCH - BLACK/WHITE', 10, 'Găng tay thủ môn Nike Goalkeeper Match sẵn sàng cùng bạn trong mọi pha cứu thua. Lớp đệm mềm, hỗ trợ trong các pha bắt bóng. Thiết kế bề mặt nhẵn giúp bạn dễ dàng cầm nắm dù trong điều kiện ẩm ướt hay khô ráo.', 809000, 759000, 'găng tay1.1.png', '', 0, '2023-03-26 06:19:27', '2023-03-26 06:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', '', '', '2023-03-26 03:41:48', '2023-03-26 03:41:48'),
(2, 'Nike', '', '', '2023-03-26 03:41:48', '2023-03-26 03:41:48'),
(3, 'Mizuno', '', '', '2023-03-26 03:44:30', '2023-03-26 03:44:30'),
(4, 'Kamito', '', '', '2023-03-26 03:44:30', '2023-03-26 03:44:30'),
(5, 'Puma', '', '', '2023-03-26 03:45:43', '2023-03-26 03:45:43'),
(6, 'Socks', '', '', '2023-03-26 03:45:43', '2023-03-26 03:45:43'),
(7, 'Brassard', '', '', '2023-03-26 03:46:43', '2023-03-26 03:46:43'),
(8, 'Clothes', '', '', '2023-03-26 03:46:43', '2023-03-26 03:46:43'),
(9, 'Bags', '', '', '2023-03-26 03:48:09', '2023-03-26 03:48:09'),
(10, 'Gloves', '', '', '2023-03-26 03:48:09', '2023-03-26 03:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'banner1.jpg', '2023-03-25 09:32:36', '2023-03-25 09:32:36'),
(2, '', 'banner2.jpg', '2023-03-25 09:33:00', '2023-03-25 09:33:00'),
(3, '', 'banner3.jpg', '2023-03-25 09:33:16', '2023-03-25 09:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `is_Verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_details_id_product_foreign` (`id_product`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourite_id_user_foreign` (`id_user`),
  ADD KEY `favourite_id_product_foreign` (`id_product`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_category_foreign` (`id_category`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `favourite_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
