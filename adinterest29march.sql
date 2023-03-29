-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2023 at 09:25 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adinterest`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'category-1-1', 'Active', '2023-02-14 09:53:33', '2023-02-14 09:53:33'),
(2, 'Category 2', 'category-2-2', 'Active', '2023-02-14 09:53:43', '2023-02-14 09:53:43'),
(3, 'Category 3', 'category-3-3', 'Active', '2023-02-14 09:53:52', '2023-02-14 09:53:52'),
(4, 'Category 4', 'category-4-4', 'Active', '2023-02-14 09:54:01', '2023-02-14 09:54:01'),
(5, 'Category 5', 'category-5-5', 'Active', '2023-02-14 09:54:08', '2023-02-14 09:54:08'),
(6, 'Baby', 'baby-6', 'Active', '2023-02-14 10:03:40', '2023-02-14 10:03:40'),
(7, 'Hobby', 'hobby-7', 'Active', '2023-02-14 10:03:49', '2023-02-14 10:03:49'),
(8, 'Gadgets', 'gadgets-8', 'Active', '2023-02-14 10:07:49', '2023-02-14 10:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit` bigint(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `keyword`, `hit`, `created_at`, `updated_at`) VALUES
(1, 'Body building', 11, '2023-02-02 03:56:03', '2023-03-15 10:41:51'),
(2, 'Fitness', 8, '2023-02-02 10:27:49', '2023-03-28 22:40:05'),
(3, 'hello', 7, '2023-02-09 03:55:51', '2023-03-16 02:10:27'),
(4, 'Programming', 1, '2023-02-11 21:56:52', '2023-02-11 21:56:52'),
(5, 'Bangladesh', 1, '2023-02-22 02:16:09', '2023-02-22 02:16:09'),
(6, 'iphone', 1, '2023-03-21 23:06:10', '2023-03-21 23:06:10'),
(7, 'Music', 1, '2023-03-22 10:53:21', '2023-03-22 10:53:21');

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
(7, '2023_01_25_074456_create_results_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2019_08_19_000000_create_failed_jobs_table', 2),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(12, '2023_01_24_172622_create_interests_table', 2),
(13, '2023_01_24_181423_create_projects_table', 2),
(25, '2023_02_09_172348_create_product_research_table', 3),
(26, '2023_02_11_134953_create_categories_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_research`
--

CREATE TABLE `product_research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aliexpress_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_price` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_price` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliexpress_link` text COLLATE utf8mb4_unicode_ci,
  `fb_ads` text COLLATE utf8mb4_unicode_ci,
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `ali_video_link` text COLLATE utf8mb4_unicode_ci,
  `fb_ads_img` text COLLATE utf8mb4_unicode_ci,
  `video_link_img` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `eng_heart` int(11) NOT NULL DEFAULT '0',
  `eng_comment` int(11) NOT NULL DEFAULT '0',
  `eng_share` int(11) NOT NULL DEFAULT '0',
  `eng_reaction` int(11) NOT NULL DEFAULT '0',
  `cpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_review` int(11) DEFAULT '0',
  `avg_rating` decimal(3,2) DEFAULT NULL,
  `discount` int(11) DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `description_url` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_research`
--

INSERT INTO `product_research` (`id`, `aliexpress_id`, `title`, `slug`, `categories`, `buy_price`, `sell_price`, `aliexpress_link`, `fb_ads`, `video_link`, `ali_video_link`, `fb_ads_img`, `video_link_img`, `url`, `eng_heart`, `eng_comment`, `eng_share`, `eng_reaction`, `cpa`, `net`, `total_order`, `review`, `total_review`, `avg_rating`, `discount`, `country`, `gender`, `age`, `audience`, `interests`, `short_description`, `description`, `description_url`, `status`, `images`, `created_at`, `updated_at`) VALUES
(20, 1005005258318387, '2022 Children&#39;s One Piece Swimsuit Sunscreen Quick-Dry Baby Surfing Suit for Boys Girls Swimwear Toddler Bathing Suit', '2022-children39s-one-piece-swimsuit-sunscreen-quick-dry-baby-surfing-suit-for-boys-girls-swimwear-toddler-bathing-suit-20', 'Sonkpuel', '8.31', '23.8497', 'https://www.aliexpress.com/item/3256805072003635.html', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '180', NULL, 4, '5.00', 50, NULL, NULL, NULL, NULL, NULL, 'Get swimsuit sunscreen at a bigger saving. Onepiece swimsuit sunscreen suit for girls boys girls. Find products of Swimwear with high quality at AliExpress.\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005005258318387&key=S2ce88498b3694a748a37bc205ced720fM.zip&token=2cc747e529c6fe4eafa5995fd2d133fa', 'Active', '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/S7ac642ec498f49c2b262a09619ec43b8K\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S89a7a01ab6c949ec9085a8b77454cc30t\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sd7dc9e1f5c2d44088572d6d46a4ca1bdP\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se057f2918461444e9cddbf894d6bdc14p\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se6fb4dc4d9fc43d7bee14943ca5752f72\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S5d098fd91a224934a78996ed4f946bdb3\\/2022-Children-s-One-Piece-Swimsuit-Sunscreen-Quick-Dry-Baby-Surfing-Suit-for-Boys-Girls-Swimwear.jpg\"]', '2023-03-27 03:49:22', '2023-03-27 03:49:22'),
(21, 3256804864225933, 'T800 Ultra Series 8 Smart Watch For Man Women Sport Fitness Call Watches Smartwatch For Apple Andriod Phone PK T900 i8 Pro Max', 't800-ultra-series-8-smart-watch-for-man-women-sport-fitness-call-watches-smartwatch-for-apple-andriod-phone-pk-t900-i8-pro-max-21', 'Smart Watches,SPORT,On Wrist,MIATA', '14.99', '40.05', 'https://www.aliexpress.com/item/3256804864225933.html', NULL, 'https://video.aliexpress-media.com/play/u/ae_sg_item/2214501065192/p/1/e/6/t/10301/1100132962058.mp4', NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '28', NULL, 13, '4.30', 52, 'Mainland China', NULL, NULL, NULL, NULL, 'Get smart watches smartwatch series 8 with fast return and fast delivery. This smart watch is designed with sports track elements, so you can know the time and date. Find apple smart watch series 8,watch phone series 8 with high quality at AliExpress.\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005005050540685&key=S50533edc80fe4a21af9cf1df9391fc162.zip&token=8995144f39954a3f29980567a54663ec', NULL, '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/S6568a94199c7492b87137b20e4257ad9Z\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S3a118c37bdf14cbd8ee6e61ae71e82a5p\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S63f642bc3c7f40ee94933137afcfbafbW\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sc3ea183be09c4ce3ae01e50d2c8343f3q\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sd77bb311f9574ea0a422622beb5c3819w\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se86f56fa1483498b988385089fcc38242\\/T800-Ultra-Series-8-Smart-Watch-For-Man-Women-Sport-Fitness-Call-Watches-Smartwatch-For-Apple.jpg\"]', '2023-03-28 02:13:57', '2023-03-28 02:13:57'),
(22, 3256804539027661, '2023 8 Max Smartwatch For Man Sports Woman Fitness Original Watches For ios Android Phone Call Smartwatch PK iwo Series 7 i8 Pro', '2023-8-max-smartwatch-for-man-sports-woman-fitness-original-watches-for-ios-android-phone-call-smartwatch-pk-iwo-series-7-i8-pro-22', 'Smart Watches,Fashion,On Wrist,MIATA', '7.99', '22', 'https://www.aliexpress.com/item/3256804539027661.html', NULL, 'https://video.aliexpress-media.com/play/u/ae_sg_item/2214501065192/p/1/e/6/t/10301/1100110162219.mp4', NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '10,000+', NULL, 3909, '4.50', 88, 'Mainland China', NULL, NULL, NULL, NULL, 'Shop smartwatch with 24 hours fast shipping . The watch 8 max smartwatch can also provide an alarm clock, NFC，bluetooth Call. It can also receive information notifications and various sports modes to facilitate your life. Now the price is very affordable.\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005004725342413&key=S1dca2575f7eb418b9b8d6079d18f2cfbD.zip&token=278f519e7862b24598ae4794d6ac22e1', NULL, '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/S121ba00b16614b9db519855c6a4221f1q\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sa9641967e7f04fe8a4970fc170606938B\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S25654a05736642d2a2198dcd4c3b4d84S\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se36a31efd2f2493d84ee8b3b99802d8fu\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sd33859665ee24376b8616696b20206c93\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S4559886501154a92b3f6665da8614ea6W\\/2023-8-Max-Smartwatch-For-Man-Sports-Woman-Fitness-Original-Watches-For-ios-Android-Phone-Call.jpg\"]', '2023-03-28 02:15:59', '2023-03-28 02:15:59'),
(23, 3256804886046108, 'REDRAGON K688RGB-PRO Wireless Gaming mechanical keyboard RGB backlit hot swap 78 key Proof Switches Swappable Ergonomic for PC', 'redragon-k688rgb-pro-wireless-gaming-mechanical-keyboard-rgb-backlit-hot-swap-78-key-proof-switches-swappable-ergonomic-for-pc-23', 'Standard,Bluetooth Wireless,REDRAGON', '60.99', '183', 'https://www.aliexpress.com/item/3256804886046108.html', NULL, 'https://video.aliexpress-media.com/play/u/ae_sg_item/2210461713108/p/1/e/6/t/10301/1100110507696.mp4', NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '21', NULL, 6, '4.30', 24, 'Mainland China', NULL, NULL, NULL, NULL, 'Shop wireless mechanical keyboard hot swappable online with fast shipping and fast delivery. Wireless redragon mechanical keyboard with rgb backlight. Find wireless gaming mechanical keyboards with high quality at AliExpress.\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005005072360860&key=S0623d76781ba4648804594ea189717e2R.zip&token=992d5a620f28c50acec75b31f34c0811', NULL, '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/S00eab1f8ec064875bbfd19f9d129ea783\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S4c3a03bbde7f40f6ace63c85b9140e90L\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S817ee430a7cc47a88873cc206c7cf4c2w\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se43109ee1b6a4886a806075ca06b4db4w\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S58bdd582eadc4acb96bd6f6411b0c101u\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S56d302e985e6431287c6d04858494122f\\/REDRAGON-K688RGB-PRO-Wireless-Gaming-mechanical-keyboard-RGB-backlit-hot-swap-78-key-Proof-Switches-Swappable.jpg\"]', '2023-03-28 02:33:17', '2023-03-28 02:33:17'),
(24, 3256802900885315, 'Boy Kids Beach Water Sports Sneakers Children Swimming Aqua Barefoot Shoes Baby Girl Surf Fishing Diving Indoor Outdoor Slippers', 'boy-kids-beach-water-sports-sneakers-children-swimming-aqua-barefoot-shoes-baby-girl-surf-fishing-diving-indoor-outdoor-slippers-24', 'Sonkpuel,First Walkers,Baby Shoes,Crib Shoes', '2.99', '7', 'https://www.aliexpress.com/item/3256802900885315.html', NULL, NULL, 'https://video.aliexpress-media.com/play/u/ae_sg_item/2200772046263/p/1/e/6/t/10301/1100041523866.mp4', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '1,000+', NULL, 117, '4.80', 45, 'Mainland China', NULL, NULL, NULL, NULL, '📦 🧦 Buy barefoot shoes baby boys online with fast delivery and fast shipping. New shoes, slippers, beach, baby go out in the water. Find beach shoes baby boy with high quality at AliExpress. Also shop for First Walkers at best prices on AliExpress!\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005003087200067&key=Sea52ad967ebd40e0853c588ebdbac82fA.zip&token=44aa4092ceae41ea0df6b1afe5e9bba2', NULL, '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/Se703bf5203fc44719935b4177a8a1f1f6\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S814524b08d9d47589b8fd2e0c5f8679bH\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S657d62631eb343788379cf8f20ffe6beS\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S4619dc07d5164e2cafac1b9b2d84c99dQ\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S21bbdb3a80754be7a3ed4198fc1b7bcfb\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S4b9a817a588247389b7010799327ed3fZ\\/Boy-Kids-Beach-Water-Sports-Sneakers-Children-Swimming-Aqua-Barefoot-Shoes-Baby-Girl-Surf-Fishing-Diving.jpg\"]', '2023-03-28 03:05:11', '2023-03-28 03:05:11'),
(25, 3256805098463949, 'Change to Ultra For Apple Watch Case Tempered Glass Cover 8 7 6 5 4 45mm 44mm 41mm 40mm Appearance Upgrade to Ultra 49mm Frame', 'change-to-ultra-for-apple-watch-case-tempered-glass-cover-8-7-6-5-4-45mm-44mm-41mm-40mm-appearance-upgrade-to-ultra-49mm-frame-25', 'Geekthink,Watch Cases', '2.99', '7', 'https://www.aliexpress.com/item/3256805098463949.html', NULL, NULL, 'https://video.aliexpress-media.com/play/u/ae_sg_item/3683507821/p/1/e/6/t/10301/1100129556065.mp4', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '1,000+', NULL, 32, '4.80', 50, 'Mainland China', NULL, NULL, NULL, NULL, '⌚ Quality watch case with free worldwide shipping. New fashion trends stainless steel metal watch case. Find products of Watch Cases with high quality at AliExpress.\nEnjoy ✓Free Shipping Worldwide! ✓Limited Time Sale ✓Easy Return.', NULL, 'https://aeproductsourcesite.alicdn.com/product/description/pc/v2/en_US/desc.htm?productId=1005005284778701&key=S0a76c6f5c8ec4b128103d18fdfbedf11n.zip&token=e671054867b8ca7b5b1e5719ffb25785', 'Active', '[\"https:\\/\\/ae01.alicdn.com\\/kf\\/S6ca1cccc726845268c140dbe1e2d8665c\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S76873baee01145d29b79e9548999b7a0x\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sab9a0a5ddc3a4b95884b246a89af30d70\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S42837e2721f5497e87526485cd7a8bfav\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/S83fd06739c94421f9fe6c455fa847b89l\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\",\"https:\\/\\/ae01.alicdn.com\\/kf\\/Sd21f3c523d4e497a81b5526ed8556f70Q\\/Change-to-Ultra-For-Apple-Watch-Case-Tempered-Glass-Cover-8-7-6-5-4-45mm.jpg\"]', '2023-03-29 03:15:57', '2023-03-29 03:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Fitness', '[\"{\\\"id\\\":\\\"6003180879333\\\",\\\"name\\\":\\\"World Amateur Body Building Association\\\",\\\"audience_size_lower_bound\\\":\\\"39.52 K\\\",\\\"audience_size_upper_bound\\\":\\\"46.48 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"World Amateur Body Building Association\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003648059946\\\",\\\"name\\\":\\\"Bodybuilding\\\",\\\"audience_size_lower_bound\\\":\\\"196.14 M\\\",\\\"audience_size_upper_bound\\\":\\\"230.66 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Fitness en welzijn\\\",\\\"Bodybuilding\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003319055018\\\",\\\"name\\\":\\\"International Federation of BodyBuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.73 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.32 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"International Federation of BodyBuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003054306185\\\",\\\"name\\\":\\\"Bodybuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.55 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.11 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Bodybuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Sports and outdoors\\\"}\",\"{\\\"id\\\":\\\"6003384248805\\\",\\\"name\\\":\\\"Fitness en welzijn\\\",\\\"audience_size_lower_bound\\\":\\\"1083.75 M\\\",\\\"audience_size_upper_bound\\\":\\\"1274.49 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Fitness en welzijn\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003277229371\\\",\\\"name\\\":\\\"Fysieke fitness\\\",\\\"audience_size_lower_bound\\\":\\\"678.87 M\\\",\\\"audience_size_upper_bound\\\":\\\"798.35 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Fitness en welzijn\\\",\\\"Fysieke fitness\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003068349915\\\",\\\"name\\\":\\\"Men\'s Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"49.85 M\\\",\\\"audience_size_upper_bound\\\":\\\"58.62 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Men\'s Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003327114145\\\",\\\"name\\\":\\\"Muscle & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"41.17 M\\\",\\\"audience_size_upper_bound\\\":\\\"48.42 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Muscle & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"News and entertainment\\\"}\",\"{\\\"id\\\":\\\"6003067198997\\\",\\\"name\\\":\\\"Fitness (biologie)\\\",\\\"audience_size_lower_bound\\\":\\\"23.83 M\\\",\\\"audience_size_upper_bound\\\":\\\"28.03 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness (biologie)\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Hobbies and activities\\\"}\",\"{\\\"id\\\":\\\"6003559906449\\\",\\\"name\\\":\\\"Fitness Girls\\\",\\\"audience_size_lower_bound\\\":\\\"21.14 M\\\",\\\"audience_size_upper_bound\\\":\\\"24.86 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness Girls\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003319055018\\\",\\\"name\\\":\\\"International Federation of BodyBuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.73 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.32 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"International Federation of BodyBuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003054306185\\\",\\\"name\\\":\\\"Bodybuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.55 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.11 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Bodybuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Sports and outdoors\\\"}\",\"{\\\"id\\\":\\\"6003434426343\\\",\\\"name\\\":\\\"Anytime Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"12.88 M\\\",\\\"audience_size_upper_bound\\\":\\\"15.15 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Anytime Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003325329736\\\",\\\"name\\\":\\\"General fitness training\\\",\\\"audience_size_lower_bound\\\":\\\"9.71 M\\\",\\\"audience_size_upper_bound\\\":\\\"11.42 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"General fitness training\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003213657133\\\",\\\"name\\\":\\\"Fitness- en figuurwedstrijd\\\",\\\"audience_size_lower_bound\\\":\\\"8.13 M\\\",\\\"audience_size_upper_bound\\\":\\\"9.56 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness- en figuurwedstrijd\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6009539829781\\\",\\\"name\\\":\\\"MyFitnessPal\\\",\\\"audience_size_lower_bound\\\":\\\"8.02 M\\\",\\\"audience_size_upper_bound\\\":\\\"9.43 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"MyFitnessPal\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003170221285\\\",\\\"name\\\":\\\"Planet Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"7.69 M\\\",\\\"audience_size_upper_bound\\\":\\\"9.04 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Planet Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003383572725\\\",\\\"name\\\":\\\"24 Hour Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"6.13 M\\\",\\\"audience_size_upper_bound\\\":\\\"7.21 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"24 Hour Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Stadion, arena en sportlocatie\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003147794026\\\",\\\"name\\\":\\\"Mamae Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"5.42 M\\\",\\\"audience_size_upper_bound\\\":\\\"6.38 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Mamae Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Nieuws- en mediawebsite\\\"}\",\"{\\\"id\\\":\\\"6003284927000\\\",\\\"name\\\":\\\"Fitness First\\\",\\\"audience_size_lower_bound\\\":\\\"5.03 M\\\",\\\"audience_size_upper_bound\\\":\\\"5.91 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness First\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003275318125\\\",\\\"name\\\":\\\"Garmin Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"4.52 M\\\",\\\"audience_size_upper_bound\\\":\\\"5.31 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Garmin Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Product\\\\\\/dienst\\\"}\",\"{\\\"id\\\":\\\"6003146998665\\\",\\\"name\\\":\\\"Vida Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"4.29 M\\\",\\\"audience_size_upper_bound\\\":\\\"5.05 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Vida Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003288780851\\\",\\\"name\\\":\\\"Fitness professional\\\",\\\"audience_size_lower_bound\\\":\\\"3.96 M\\\",\\\"audience_size_upper_bound\\\":\\\"4.66 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness professional\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sport- en recreatielocatie\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003347748581\\\",\\\"name\\\":\\\"Equinox Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"3.37 M\\\",\\\"audience_size_upper_bound\\\":\\\"3.96 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Equinox Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003152135258\\\",\\\"name\\\":\\\"GoodLife Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"3.13 M\\\",\\\"audience_size_upper_bound\\\":\\\"3.68 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"GoodLife Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003240500608\\\",\\\"name\\\":\\\"Life Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"2.68 M\\\",\\\"audience_size_upper_bound\\\":\\\"3.16 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Life Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003342254787\\\",\\\"name\\\":\\\"Crunch Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"2.57 M\\\",\\\"audience_size_upper_bound\\\":\\\"3.03 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Crunch Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Stadion, arena en sportlocatie\\\"}\",\"{\\\"id\\\":\\\"6003451832471\\\",\\\"name\\\":\\\"LA Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"2.53 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.98 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"LA Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Stadion, arena en sportlocatie\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"1644240425887660\\\",\\\"name\\\":\\\"Fitness app\\\",\\\"audience_size_lower_bound\\\":\\\"2.52 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.97 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness app\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6011664538138\\\",\\\"name\\\":\\\"PopSugar Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"2.37 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.79 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"PopSugar Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Media-\\\\\\/nieuwsbedrijf\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003338274387\\\",\\\"name\\\":\\\"Rogue Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"1.97 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.32 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Rogue Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportwinkel\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003666786518\\\",\\\"name\\\":\\\"Snap Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"1.92 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.26 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Snap Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003338218489\\\",\\\"name\\\":\\\"Life Time Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"1.84 M\\\",\\\"audience_size_upper_bound\\\":\\\"2.17 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Life Time Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6017740206107\\\",\\\"name\\\":\\\"Josef Rakich Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"1.54 M\\\",\\\"audience_size_upper_bound\\\":\\\"1.81 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Josef Rakich Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Atleet\\\"}\",\"{\\\"id\\\":\\\"6013731055813\\\",\\\"name\\\":\\\"California Fitness & Yoga Centers Vietnam\\\",\\\"audience_size_lower_bound\\\":\\\"1.09 M\\\",\\\"audience_size_upper_bound\\\":\\\"1.29 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"California Fitness & Yoga Centers Vietnam\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003414023889\\\",\\\"name\\\":\\\"fitness world\\\",\\\"audience_size_lower_bound\\\":\\\"1.01 M\\\",\\\"audience_size_upper_bound\\\":\\\"1.19 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"fitness world\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6011646680330\\\",\\\"name\\\":\\\"Fitness and Power\\\",\\\"audience_size_lower_bound\\\":\\\"923.27 K\\\",\\\"audience_size_upper_bound\\\":\\\"1.09 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness and Power\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"News and entertainment\\\"}\",\"{\\\"id\\\":\\\"6003709662183\\\",\\\"name\\\":\\\"Fitness (magazine)\\\",\\\"audience_size_lower_bound\\\":\\\"508.16 K\\\",\\\"audience_size_upper_bound\\\":\\\"597.6 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness (magazine)\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Tijdschrift\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003663933307\\\",\\\"name\\\":\\\"Functional Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"325.69 K\\\",\\\"audience_size_upper_bound\\\":\\\"383.01 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Functional Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003108688790\\\",\\\"name\\\":\\\"California Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"317.21 K\\\",\\\"audience_size_upper_bound\\\":\\\"373.04 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"California Fitness\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6003396460763\\\",\\\"name\\\":\\\"Fitness Tips\\\",\\\"audience_size_lower_bound\\\":\\\"266.08 K\\\",\\\"audience_size_upper_bound\\\":\\\"312.91 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness Tips\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Sports and outdoors\\\"}\",\"{\\\"id\\\":\\\"6003257722886\\\",\\\"name\\\":\\\"Gimnasios Energy Fitness Clubs\\\",\\\"audience_size_lower_bound\\\":\\\"264.9 K\\\",\\\"audience_size_upper_bound\\\":\\\"311.52 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Gimnasios Energy Fitness Clubs\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Stadion, arena en sportlocatie\\\",\\\"topic\\\":\\\"Sports and outdoors\\\"}\",\"{\\\"id\\\":\\\"6003381924804\\\",\\\"name\\\":\\\"Elite Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"247.73 K\\\",\\\"audience_size_upper_bound\\\":\\\"291.33 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Elite Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Shopping and fashion\\\"}\",\"{\\\"id\\\":\\\"6003057531985\\\",\\\"name\\\":\\\"Go! Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"244.11 K\\\",\\\"audience_size_upper_bound\\\":\\\"287.07 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Go! Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6002952934355\\\",\\\"name\\\":\\\"6 Pack Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"216.31 K\\\",\\\"audience_size_upper_bound\\\":\\\"254.38 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"6 Pack Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Tassen\\\\\\/bagage\\\",\\\"topic\\\":\\\"Shopping and fashion\\\"}\",\"{\\\"id\\\":\\\"6003521798995\\\",\\\"name\\\":\\\"Fitness & Health\\\",\\\"audience_size_lower_bound\\\":\\\"201.51 K\\\",\\\"audience_size_upper_bound\\\":\\\"236.97 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness & Health\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Gezondheid\\\\\\/beauty\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6015119925291\\\",\\\"name\\\":\\\"Wahoo Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"197.23 K\\\",\\\"audience_size_upper_bound\\\":\\\"231.94 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Wahoo Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sport en recreatie\\\",\\\"topic\\\":\\\"Technology\\\"}\",\"{\\\"id\\\":\\\"6002983499721\\\",\\\"name\\\":\\\"Ben Greenfield Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"169.97 K\\\",\\\"audience_size_upper_bound\\\":\\\"199.89 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Ben Greenfield Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Bekende persoon\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003356802204\\\",\\\"name\\\":\\\"Women\'s Fitness Magazine\\\",\\\"audience_size_lower_bound\\\":\\\"152.27 K\\\",\\\"audience_size_upper_bound\\\":\\\"179.07 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Women\'s Fitness Magazine\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"News and entertainment\\\"}\",\"{\\\"id\\\":\\\"6013246787410\\\",\\\"name\\\":\\\"FitnessBlender.com\\\",\\\"audience_size_lower_bound\\\":\\\"150.82 K\\\",\\\"audience_size_upper_bound\\\":\\\"177.37 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"FitnessBlender.com\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Gezondheid- en welnesswebsite\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003230298576\\\",\\\"name\\\":\\\"EVO Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"117.11 K\\\",\\\"audience_size_upper_bound\\\":\\\"137.72 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"EVO Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"495052123990163\\\",\\\"name\\\":\\\"PoleFreaks - Pole Dance & Fitness Community\\\",\\\"audience_size_lower_bound\\\":\\\"97.54 K\\\",\\\"audience_size_upper_bound\\\":\\\"114.71 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"PoleFreaks - Pole Dance & Fitness Community\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6003357074154\\\",\\\"name\\\":\\\"Retro Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"89.61 K\\\",\\\"audience_size_upper_bound\\\":\\\"105.38 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Retro Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003426377919\\\",\\\"name\\\":\\\"MyFitness\\\",\\\"audience_size_lower_bound\\\":\\\"85.65 K\\\",\\\"audience_size_upper_bound\\\":\\\"100.72 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"MyFitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportclub\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003273162643\\\",\\\"name\\\":\\\"Propel Fitness Water\\\",\\\"audience_size_lower_bound\\\":\\\"71.95 K\\\",\\\"audience_size_upper_bound\\\":\\\"84.61 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Propel Fitness Water\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003577518238\\\",\\\"name\\\":\\\"Pure Fitness Official Page\\\",\\\"audience_size_lower_bound\\\":\\\"52.1 K\\\",\\\"audience_size_upper_bound\\\":\\\"61.27 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Pure Fitness Official Page\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Gezondheid\\\\\\/beauty\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6014704554913\\\",\\\"name\\\":\\\"Scooby\'s Home Fitness and Bodybuilding Workouts\\\",\\\"audience_size_lower_bound\\\":\\\"50.08 K\\\",\\\"audience_size_upper_bound\\\":\\\"58.89 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Scooby\'s Home Fitness and Bodybuilding Workouts\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"People\\\"}\",\"{\\\"id\\\":\\\"6003456563483\\\",\\\"name\\\":\\\"IDEA Health and Fitness Association\\\",\\\"audience_size_lower_bound\\\":\\\"49.81 K\\\",\\\"audience_size_upper_bound\\\":\\\"58.58 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"IDEA Health and Fitness Association\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6016605351958\\\",\\\"name\\\":\\\"Diet Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"46.95 K\\\",\\\"audience_size_upper_bound\\\":\\\"55.21 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Diet Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Ondernemer\\\",\\\"topic\\\":\\\"Shopping and fashion\\\"}\",\"{\\\"id\\\":\\\"6003577982107\\\",\\\"name\\\":\\\"XSport Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"44.38 K\\\",\\\"audience_size_upper_bound\\\":\\\"52.19 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"XSport Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003360812987\\\",\\\"name\\\":\\\"Australian Institute of Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"41.9 K\\\",\\\"audience_size_upper_bound\\\":\\\"49.28 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Australian Institute of Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Onderwijs\\\",\\\"topic\\\":\\\"Education\\\"}\",\"{\\\"id\\\":\\\"6003190765284\\\",\\\"name\\\":\\\"Bally Total Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"40.99 K\\\",\\\"audience_size_upper_bound\\\":\\\"48.2 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Bally Total Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6013214167296\\\",\\\"name\\\":\\\"Victorious Fitness Supplements\\\",\\\"audience_size_lower_bound\\\":\\\"36.83 K\\\",\\\"audience_size_upper_bound\\\":\\\"43.31 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Victorious Fitness Supplements\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Vitaminen\\\\\\/supplementen\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003381993004\\\",\\\"name\\\":\\\"Fitness Australia\\\",\\\"audience_size_lower_bound\\\":\\\"36.51 K\\\",\\\"audience_size_upper_bound\\\":\\\"42.94 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fitness Australia\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Niet-gouvernementele organisatie (NGO)\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6017583344873\\\",\\\"name\\\":\\\"AFPA American Fitness Professionals & Associates\\\",\\\"audience_size_lower_bound\\\":\\\"35.79 K\\\",\\\"audience_size_upper_bound\\\":\\\"42.09 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"AFPA American Fitness Professionals & Associates\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Onderwijs\\\",\\\"topic\\\":\\\"Education\\\"}\",\"{\\\"id\\\":\\\"6003291079930\\\",\\\"name\\\":\\\"True Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"35.51 K\\\",\\\"audience_size_upper_bound\\\":\\\"41.76 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"True Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sport- en fitnessinstructie\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003430539606\\\",\\\"name\\\":\\\"California Family Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"30.48 K\\\",\\\"audience_size_upper_bound\\\":\\\"35.84 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"California Family Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6018174015104\\\",\\\"name\\\":\\\"International Fitness Professionals Association\\\",\\\"audience_size_lower_bound\\\":\\\"22.42 K\\\",\\\"audience_size_upper_bound\\\":\\\"26.37 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"International Fitness Professionals Association\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6013979574253\\\",\\\"name\\\":\\\"GYM Fitness Center 24\\\\\\/7\\\",\\\"audience_size_lower_bound\\\":\\\"14 K\\\",\\\"audience_size_upper_bound\\\":\\\"16.46 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"GYM Fitness Center 24\\\\\\/7\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003217532876\\\",\\\"name\\\":\\\"Total Fitness Gym\\\",\\\"audience_size_lower_bound\\\":\\\"12.41 K\\\",\\\"audience_size_upper_bound\\\":\\\"14.6 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Total Fitness Gym\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003591319703\\\",\\\"name\\\":\\\"Fresh Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"8.84 K\\\",\\\"audience_size_upper_bound\\\":\\\"10.4 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Fresh Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6003392423577\\\",\\\"name\\\":\\\"Australian Fitness Network\\\",\\\"audience_size_lower_bound\\\":\\\"4.96 K\\\",\\\"audience_size_upper_bound\\\":\\\"5.83 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Australian Fitness Network\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sport- en fitnessinstructie\\\",\\\"topic\\\":\\\"Education\\\"}\",\"{\\\"id\\\":\\\"6003370624060\\\",\\\"name\\\":\\\"fitness dk\\\",\\\"audience_size_lower_bound\\\":\\\"4.52 K\\\",\\\"audience_size_upper_bound\\\":\\\"5.32 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"fitness dk\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003210665630\\\",\\\"name\\\":\\\"Kids Club Fun & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"2.56 K\\\",\\\"audience_size_upper_bound\\\":\\\"3.01 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Kids Club Fun & Fitness\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Speeltuin\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6012119194622\\\",\\\"name\\\":\\\"Jetts Fitness New Zealand\\\",\\\"audience_size_lower_bound\\\":\\\"1.57 K\\\",\\\"audience_size_upper_bound\\\":\\\"1.85 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Jetts Fitness New Zealand\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Sportschool\\\\\\/fitnesscentrum\\\",\\\"topic\\\":\\\"Travel, places and events\\\"}\",\"{\\\"id\\\":\\\"6004115167424\\\",\\\"name\\\":\\\"Lichaamsbeweging\\\",\\\"audience_size_lower_bound\\\":\\\"646.98 M\\\",\\\"audience_size_upper_bound\\\":\\\"760.85 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Fitness en welzijn\\\",\\\"Lichaamsbeweging\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003420915231\\\",\\\"name\\\":\\\"Sportschool\\\",\\\"audience_size_lower_bound\\\":\\\"136.15 M\\\",\\\"audience_size_upper_bound\\\":\\\"160.11 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Sportschool\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003344968239\\\",\\\"name\\\":\\\"Bootcamp\\\",\\\"audience_size_lower_bound\\\":\\\"3.12 M\\\",\\\"audience_size_upper_bound\\\":\\\"3.67 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Bootcamp\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6002969657892\\\",\\\"name\\\":\\\"Nordic walking\\\",\\\"audience_size_lower_bound\\\":\\\"1.05 M\\\",\\\"audience_size_upper_bound\\\":\\\"1.24 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Nordic walking\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Lokaal bedrijf\\\",\\\"topic\\\":\\\"Sports and outdoors\\\"}\",\"{\\\"id\\\":\\\"6011282595516\\\",\\\"name\\\":\\\"Judge John Hodgman\\\",\\\"audience_size_lower_bound\\\":\\\"70.02 K\\\",\\\"audience_size_upper_bound\\\":\\\"82.34 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Judge John Hodgman\\\"],\\\"description\\\":null,\\\"disambiguation_category\\\":\\\"Televisieprogramma\\\",\\\"topic\\\":\\\"News and entertainment\\\"}\",\"{\\\"id\\\":\\\"6003180879333\\\",\\\"name\\\":\\\"World Amateur Body Building Association\\\",\\\"audience_size_lower_bound\\\":\\\"39.52 K\\\",\\\"audience_size_upper_bound\\\":\\\"46.48 K\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"World Amateur Body Building Association\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Business and industry\\\"}\",\"{\\\"id\\\":\\\"6003648059946\\\",\\\"name\\\":\\\"Bodybuilding\\\",\\\"audience_size_lower_bound\\\":\\\"196.14 M\\\",\\\"audience_size_upper_bound\\\":\\\"230.66 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Fitness en welzijn\\\",\\\"Bodybuilding\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003319055018\\\",\\\"name\\\":\\\"International Federation of BodyBuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.73 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.32 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"International Federation of BodyBuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Fitness and wellness\\\"}\",\"{\\\"id\\\":\\\"6003054306185\\\",\\\"name\\\":\\\"Bodybuilding & Fitness\\\",\\\"audience_size_lower_bound\\\":\\\"14.55 M\\\",\\\"audience_size_upper_bound\\\":\\\"17.11 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Bodybuilding & Fitness\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Sports and outdoors\\\"}\"]', '2023-02-02 10:39:40', '2023-03-09 16:59:01'),
(2, 'Music', '[\"{\\\"id\\\":\\\"6002997799844\\\",\\\"name\\\":\\\"Zingen\\\",\\\"audience_size_lower_bound\\\":\\\"425.76 M\\\",\\\"audience_size_upper_bound\\\":\\\"500.7 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Kunst en muziek\\\",\\\"Zingen\\\"],\\\"description\\\":\\\"\\\",\\\"topic\\\":\\\"Lifestyle and culture\\\"}\",\"{\\\"id\\\":\\\"6003071554093\\\",\\\"name\\\":\\\"Piano\\\",\\\"audience_size_lower_bound\\\":\\\"71.01 M\\\",\\\"audience_size_upper_bound\\\":\\\"83.51 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Piano\\\"],\\\"description\\\":null,\\\"topic\\\":\\\"Lifestyle and culture\\\"}\",\"{\\\"id\\\":\\\"1711794862401024\\\",\\\"name\\\":\\\"Tidal (service)\\\",\\\"audience_size_lower_bound\\\":\\\"17.59 M\\\",\\\"audience_size_upper_bound\\\":\\\"20.69 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Tidal (service)\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6003258109357\\\",\\\"name\\\":\\\"Tijdperk\\\",\\\"audience_size_lower_bound\\\":\\\"13.4 M\\\",\\\"audience_size_upper_bound\\\":\\\"15.76 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"Tijdperk\\\"],\\\"description\\\":null}\",\"{\\\"id\\\":\\\"6003287010541\\\",\\\"name\\\":\\\"File sharing\\\",\\\"audience_size_lower_bound\\\":\\\"7.41 M\\\",\\\"audience_size_upper_bound\\\":\\\"8.71 M\\\",\\\"path\\\":[\\\"Interesses\\\",\\\"Aanvullende interesses\\\",\\\"File sharing\\\"],\\\"description\\\":null}\"]', '2023-03-22 10:59:05', '2023-03-22 10:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nomlanga Marshall', 'test@yopmail.com', NULL, '$2y$10$MDc865YGdg0ahfeIdx9mb.bI0/lX4BFXylAF0hfy4RI5Ng9ina1n.', NULL, '2023-03-05 22:57:31', '2023-03-05 22:57:31'),
(2, 'Mr klant2', 'klant2@yopmail.com', NULL, '$2y$10$RGYub5DuCtOPoyQd58a8JOJtGbCbuSsV2HOpLYNyXa576jcLjSQJK', NULL, '2023-03-05 23:13:57', '2023-03-05 23:13:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product_research`
--
ALTER TABLE `product_research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_research`
--
ALTER TABLE `product_research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
