-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 01:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshoper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logins`
--

CREATE TABLE `admin_logins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoris`
--

CREATE TABLE `categoris` (
  `categori_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoris`
--

INSERT INTO `categoris` (`categori_id`, `name`, `description`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Welcome to All Electronics ... of electronic and electro-mechanical parts and supplies at discount prices. ..... Receive updates on new products & special offers.', 1, NULL, '2019-10-23 01:50:48', '2019-10-24 00:34:16'),
(2, 'Packing and printing', 'Packaging & Printing, Find Quality Packaging & Printing Products, Packaging & Printing Manufacturers, Packaging & Printing Suppliers and Exporters at ...', 1, NULL, '2019-10-23 01:53:31', '2019-10-23 01:53:31'),
(3, 'Apparel', 'Some of the items we specialize in are: Men - tees, polos, shirts, Bermudas, pants, sweaters, jackets. Women - knitted and woven tops and dresses, shirts, shorts, skirts, sweaters, jackets. Kids - baby suits, rompers,sets,shorts,  party dresses, tops.', 1, NULL, '2019-10-23 02:06:05', '2019-10-23 02:06:05'),
(4, 'Machinery', 'Quality products from top suppliers. Get a live quote now. Global Brands Coverage. 100% On-time Shipment Protection. Shop Online Today! Trade Assurance. Quality Assured. Most Popular', 1, NULL, '2019-10-23 02:08:09', '2019-10-23 02:08:09'),
(5, 'Fabric & Textile Raw Materials', 'Quality products from top suppliers. Get a live quote now. Global Brands Coverage. 100% On-time Shipment Protection. Shop Online Today! Quality Assured. Most Popular. Trade Assurance. 100% Refund.', 1, NULL, '2019-10-23 02:10:36', '2019-10-23 02:10:36'),
(6, 'Beauty & Care', 'We Serve Millions Of Buyers And Suppliers Around The World. Most Popular. Trade Assurance. 100% Refund. Quality Assured. Types: Baby Care, Bath Supplies, Beauty Equipment, Body Art, Breast Care, Feminine Hygiene Product, Fragrance and Deodorant', 1, NULL, '2019-10-23 02:13:40', '2019-10-23 02:13:40'),
(7, 'Home & Kitchen', 'We Serve Millions Of Buyers And Suppliers Around The World. Most Popular. Trade Assurance. 100% Refund. Quality Assured. Types: Baby Care, Bath Supplies, Beauty Equipment, Body Art, Breast Care, Feminine Hygiene Product, Fragrance and Deodorant', 1, NULL, '2019-10-23 02:16:19', '2019-10-23 02:16:19'),
(8, 'Vehicles & Accessories', 'We Serve Millions Of Buyers And Suppliers Around The World. Most Popular. Trade Assurance. 100% Refund. Quality Assured. Types: Baby Care, Bath Supplies, Beauty Equipment, Body Art, Breast Care, Feminine Hygiene Product, Fragrance and Deodorant', 1, NULL, '2019-10-23 02:17:28', '2019-10-23 02:17:28'),
(9, 'Agriculture & Food', 'Find quality Agriculture & Food Manufacturers, Suppliers, Exporters, Importers, Buyers, Wholesalers, Products and Trade Leads from our award-winning ...', 1, NULL, '2019-10-23 02:20:12', '2019-10-23 02:20:12'),
(10, 'Auto & Transportation', 'Car Carrier Trailers,Car Auto & Transportation Semi Trailer For Sale , Find Complete Details about China Car Carrier Trailers,Car Auto & Transportation', 1, NULL, '2019-10-23 02:24:13', '2019-10-23 02:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atiqur Rahman', 'atiqurrahman1503@gmail.com', '01682448090', '$2y$10$SPIIC3lDMtgAMhD/bJ.Znu8X/pWeYJJkTuShIpwfPrpYAtbl.Dwri', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manufactures_id` int(10) UNSIGNED NOT NULL,
  `manufactures_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manufactures_id`, `manufactures_name`, `description`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 1, NULL, '2019-10-23 02:29:16', '2019-10-23 02:29:16'),
(2, 'Sammsung', 'SammsungInc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 1, NULL, '2019-10-23 02:29:58', '2019-10-23 02:29:58'),
(3, 'Zara', 'Zara is a Spanish apparel retailer based  . The company specializes in fast fashion, and products include clothing, accessories, shoes, swimwear, beauty, and perfumes. It is the largest company , the world\'s largest apparel retailer', 1, NULL, '2019-10-23 02:32:54', '2019-10-23 02:32:54'),
(4, 'Microsoft.', 'Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software.', 1, NULL, '2019-10-23 02:33:54', '2019-10-23 02:33:54'),
(5, 'Amazon', 'Amazon.com, Inc., is an American multinational technology company based in Seattle, Washington, that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence.', 1, NULL, '2019-10-23 02:35:12', '2019-10-23 02:35:12'),
(6, 'Alibaba', 'Alibaba Group Holding Limited is a Chinese multinational conglomerate holding company specializing in e-commerce, retail, Internet, and technology.', 1, NULL, '2019-10-23 02:36:28', '2019-10-23 02:36:28'),
(7, 'Nestlé', 'Nestlé S.A. is a Swiss multinational food and drink processing conglomerate corporation headquartered in Vevey, Vaud, Switzerland. It is the largest food company in the world, measured by revenues and other metrics,', 1, NULL, '2019-10-23 02:41:33', '2019-10-23 02:41:33'),
(8, 'Vaseline', 'American brand of petroleum jelly-based products owned by British-Dutch company Unilever. Products include plain petroleum jelly and a selection of skin creams, soaps, lotions, cleansers, and deodorants.', 1, NULL, '2019-10-23 02:45:25', '2019-10-23 02:45:25'),
(9, 'Toyota', 'Toyota Motor Corporation is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.', 1, NULL, '2019-10-23 02:46:40', '2019-10-23 02:46:40'),
(10, 'KFC', 'KFC, also known as Kentucky Fried Chicken, is an American fast food restaurant chain headquartered in Louisville, Kentucky, that specializes in fried chicken. It is the world\'s second-largest', 1, NULL, '2019-10-23 02:50:13', '2019-10-23 02:50:13');

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
(3, '2019_03_27_212802_create_admin_logins_table', 1),
(4, '2019_04_02_065901_create_categoris_table', 1),
(5, '2019_04_04_083114_create_manufactures_table', 1),
(6, '2019_04_10_202825_create_products_table', 1),
(7, '2019_04_28_102445_create_sliders_table', 1),
(8, '2019_05_31_205445_create_customers_table', 1),
(9, '2019_06_03_152324_create_payments_table', 1),
(10, '2019_06_03_152606_create_orders_table', 1),
(11, '2019_06_03_152641_create_order_details_table', 1),
(12, '2019_06_05_072538_create_shippings_table', 1),
(13, '2019_11_08_124145_create_user_account_infos_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `total_order`, `order_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '17,253.00', 'panding', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `price`, `sell_qty`, `stock_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'iPhone 6S,', '500', '3', 'pending', NULL, NULL),
(2, 1, 5, 'Elegant Summer Casual Dresses', '14321', '1', 'pending', NULL, NULL),
(3, 1, 6, '11 Color Eye Shadow', '1432', '1', 'pending', NULL, NULL);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_method`, `payment_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bkash', 'panding', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categori_id` int(11) NOT NULL,
  `manufactures_id` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(15,3) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `categori_id`, `manufactures_id`, `short_description`, `long_description`, `price`, `product_image`, `product_size`, `product_color`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 6S,', 1, 1, 'Apple iPhone 6S, GSM Unlocked, 64GB - Rose Gold (Renewed)', 'This update to the iPhone 6 upgrades the camera to 12 megapixels, bumps up the processor power, and adds a pressure-sensitive screen with haptic ...\r\nImages may be subject to copyright. Find out more', 500.000, 'product_image/add_product/1motorola-one-vision-phone.webp', '5\" inc', 'black white', 1, NULL, '2019-10-23 05:21:39', '2019-10-23 05:21:39'),
(2, 'Printing Paper Gift Box', 2, 6, 'Custom Magnetic Closure Printing Paper Gift Box with Clear Lid', 'Product Information\r\n\r\n1. This box mainly have 3 parts:                                                                                                                                                \r\n               a. outer handmade paper box with custom printing contents;                                                                                                         \r\n\r\n               b. clear lid to keep your products clear, also can show inside products;                                                                                       \r\n\r\n               c. plastic tray to protect your products well;\r\n\r\n2. Matt lamination can make packaging look high-end;\r\n3. If using magnetic closure, it will be easy to open and close;', 500.000, 'product_image/add_product/2Custom-Magnetic-Closure-Printing-Paper-Gift-Box.jpg_350x350.jpg', 'square', 'black,white', 1, NULL, '2019-10-23 05:28:11', '2019-10-23 05:28:11'),
(5, 'Elegant Summer Casual Dresses', 3, 3, 'Fashion Custom Lady Chiffon Ruffle Maxi Dress OEM ,ODM Vestidos Women Elegant Summer Casual Dresses', 'Fashion Custom Lady Chiffon Ruffle Maxi Dress OEM/ODM Vestidos Women Elegant Summer Casual Dresses', 14321.000, 'product_image/add_product/5long.jpg', 'long', 'black,white', 1, NULL, '2019-10-23 05:53:02', '2019-10-23 05:53:02'),
(6, '11 Color Eye Shadow', 6, 5, 'RACHEEL Wholesale Own Brand 11 Color Eye Shadow Glitter Eye Shadow Palette', 'RACHEEL Wholesale Own Brand 11 Color Eye Shadow Glitter Eye Shadow PaletteRACHEEL Wholesale Own Brand 11 Color Eye Shadow Glitter Eye Shadow Palette', 1432.000, 'product_image/add_product/6RACHEEL-Wholesale-Own-Brand-11-Color-Eye.jpg', 'medium', 'black', 1, NULL, '2019-10-23 05:57:59', '2019-10-23 05:57:59'),
(7, 'steel water bottle', 7, 6, '2019 new 18/8 Stainless steel water bottle/ insulated double wall travel mug tumbler cups', '2019 new 18/8 Stainless steel water bottle/ insulated double wall travel mug tumbler cups', 143.000, 'product_image/add_product/72019-new-18-8-Stainless-steel-water.jpg', 'medium', 'black,white', 1, NULL, '2019-10-23 06:01:18', '2019-10-23 06:01:19'),
(10, 'Furniture', 7, 5, 'Farnichar Sofa Set Price In India Furniture Wooden Online ...', 'Farnichar Sofa Set Price In India Furniture Wooden Online ...', 14321.000, 'product_image/add_product/1053212143482634p.jpg', 'long', 'black,white', 1, NULL, '2019-10-23 06:09:32', '2019-10-23 06:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_optional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`shipping_id`, `company_name`, `shipping_name`, `shipping_address`, `address_optional`, `shipping_city`, `shipping_email`, `shipping_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'monika faction', 'Atiqur Rahman', 'Shewapara', 'Mirpur', 'Dhaka', 'atiqurrahman1503@gmail.com', '01682448090', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_description`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'product_image/add_product/3girl1.jpg', '1.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, NULL, '2019-10-23 01:39:38', '2019-10-23 01:39:39'),
(4, 'product_image/add_product/4girl3.jpg', '2.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, NULL, '2019-10-23 01:40:09', '2019-10-23 01:40:10'),
(5, 'product_image/add_product/5girl2.jpg', '3.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, NULL, '2019-10-23 01:40:38', '2019-10-23 01:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Atiqur Rahman', 'atiqurrahman1503@gmail.com', '$2y$10$l1uwD/2mmn5FS7QolDM1PuWrhdt3Ufe0Aa.PM3icZhkYYfgk8/H82', NULL, '2019-11-03 06:52:00', '2019-11-03 06:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_infos`
--

CREATE TABLE `user_account_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logins`
--
ALTER TABLE `admin_logins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categoris`
--
ALTER TABLE `categoris`
  ADD PRIMARY KEY (`categori_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manufactures_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account_infos`
--
ALTER TABLE `user_account_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logins`
--
ALTER TABLE `admin_logins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoris`
--
ALTER TABLE `categoris`
  MODIFY `categori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manufactures_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `shipping_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_account_infos`
--
ALTER TABLE `user_account_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
