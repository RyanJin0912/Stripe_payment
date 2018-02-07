-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-02-07 07:35:54
-- 伺服器版本: 10.1.25-MariaDB
-- PHP 版本： 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shopcart`
--

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_01_26_171547_create_products_table', 1),
(4, '2018_01_27_150608_create_user_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `imagepath`, `title`, `description`, `price`) VALUES
(1, '2018-01-29 06:39:51', '2018-01-29 06:39:51', 'http://img.eprice.com.hk/img/mobile/5828/fb.png', 'HTC X', 'Superhero!', 1000),
(2, '2018-01-29 06:39:52', '2018-01-29 06:39:52', 'https://img.eprice.com.tw/img/mobile/5833/big.png', 'HTC U11 EYEs', 'Superhero!2', 2000),
(3, '2018-01-29 06:39:52', '2018-01-29 06:39:52', 'https://www.myistore.co.za/media/catalog/product/cache/1/thumbnail/200x/9df78eab33525d08d6e5fb8d27136e95/i/p/iphonex-spgry-2up_1.png', 'IphoneX', 'Superhero!3', 3000),
(4, '2018-01-29 06:39:52', '2018-01-29 06:39:52', 'http://images.indianexpress.com/2017/09/iphone-x-200.jpg', 'Iphone S', 'Superhero!4', 4000),
(5, '2018-02-04 04:03:35', '2018-02-04 04:03:35', 'https://md2.pricebaba.com/images/product/dslr-cameras/25806/canon-eos-5ds-r-body-only-l.jpg', 'Canon Eos 6D', 'Superhero!', 5000),
(6, '2018-02-04 04:04:15', '2018-02-04 04:04:15', 'https://www.becextech.co.nz/images/NikD850Kit24-70Blksml.png', 'Nikon d850', 'Superhero!', 6000);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `password`, `remember_token`) VALUES
(2, '2018-01-31 01:51:45', '2018-01-31 01:51:45', '123@gmail.com', '$2y$10$3tJ0o0AveLp8SRU2lSRmM.2oaTxGHQndq6EjaJA2Y25X5qzTNk23W', 'hHBgqS6sBqJT7A6KuaJDiWCbqMrCjZu7HMCYrvSjuaSGS505EoX1gbfARZya');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
