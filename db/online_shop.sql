-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for online_shop
CREATE DATABASE IF NOT EXISTS `online_shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `online_shop`;

-- Dumping structure for table online_shop.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.customers: ~0 rows (approximately)

-- Dumping structure for table online_shop.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table online_shop.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.migrations: ~11 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(18, '2014_10_12_100000_create_password_resets_table', 1),
	(19, '2019_08_19_000000_create_failed_jobs_table', 1),
	(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(21, '2023_11_14_182058_create_product_categories_table', 1),
	(22, '2023_11_14_182131_create_products_table', 1),
	(23, '2023_11_14_182202_create_vendors_table', 1),
	(24, '2023_11_14_182220_create_customers_table', 1),
	(25, '2023_11_14_182239_create_products_circulations_table', 1),
	(26, '2023_11_14_182301_create_purchases_table', 1),
	(27, '2023_11_14_182321_create_purchase_details_table', 1),
	(28, '2023_11_14_182430_create_sales_table', 1),
	(29, '2023_11_14_182451_create_sales_details_table', 1),
	(30, '2023_11_14_182508_create_user_groups_table', 1),
	(31, '2023_11_14_182525_create_penggunas_table', 1);

-- Dumping structure for table online_shop.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.password_resets: ~0 rows (approximately)

-- Dumping structure for table online_shop.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table online_shop.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `group_id` int NOT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.pengguna: ~0 rows (approximately)

-- Dumping structure for table online_shop.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table online_shop.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `product_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `unit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pcs',
  `discount_amount` decimal(15,2) DEFAULT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.products: ~25 rows (approximately)
INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_code`, `is_active`, `created_at`, `updated_at`, `created_by`, `updated_by`, `description`, `price`, `unit`, `discount_amount`, `stock`, `image`) VALUES
	(1, 'Product 1', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 1', 151448.00, 'pcs', NULL, 5374, NULL),
	(2, 'Product 2', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 2', 219609.00, 'pcs', NULL, 4134, NULL),
	(3, 'Product 3', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 3', 962473.00, 'pcs', NULL, 4833, NULL),
	(4, 'Product 4', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 4', 146723.00, 'pcs', NULL, 6130, NULL),
	(5, 'Product 5', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 5', 368880.00, 'pcs', NULL, 7583, NULL),
	(6, 'Product 6', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 6', 819291.00, 'pcs', NULL, 1851, NULL),
	(7, 'Product 7', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 7', 496256.00, 'pcs', NULL, 7094, NULL),
	(8, 'Product 8', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 8', 941840.00, 'pcs', NULL, 9173, NULL),
	(9, 'Product 9', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 9', 946404.00, 'pcs', NULL, 1171, NULL),
	(10, 'Product 10', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 10', 670390.00, 'pcs', NULL, 8215, NULL),
	(11, 'Product 11', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 11', 856934.00, 'pcs', NULL, 7253, NULL),
	(12, 'Product 12', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 12', 781795.00, 'pcs', NULL, 7757, NULL),
	(13, 'Product 13', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 13', 157641.00, 'pcs', NULL, 6319, NULL),
	(14, 'Product 14', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 14', 544989.00, 'pcs', NULL, 1297, NULL),
	(15, 'Product 15', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 15', 679788.00, 'pcs', NULL, 5149, NULL),
	(16, 'Product 16', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 16', 847597.00, 'pcs', NULL, 2820, NULL),
	(17, 'Product 17', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 17', 485653.00, 'pcs', NULL, 2323, NULL),
	(18, 'Product 18', 1, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 18', 964517.00, 'pcs', NULL, 8423, NULL),
	(19, 'Product 19', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 19', 238102.00, 'pcs', NULL, 8937, NULL),
	(20, 'Product 20', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 20', 254995.00, 'pcs', NULL, 5910, NULL),
	(21, 'Product 21', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 21', 484054.00, 'pcs', NULL, 1828, NULL),
	(22, 'Product 22', 3, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 22', 868006.00, 'pcs', NULL, 6407, NULL),
	(23, 'Product 23', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 23', 949788.00, 'pcs', NULL, 1158, NULL),
	(24, 'Product 24', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 24', 869579.00, 'pcs', NULL, 5394, NULL),
	(25, 'Product 25', 2, NULL, 'active', NULL, NULL, NULL, NULL, 'Description for Product 25', 872971.00, 'pcs', NULL, 1963, NULL);

-- Dumping structure for table online_shop.products_circulations
CREATE TABLE IF NOT EXISTS `products_circulations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `trx_date` date NOT NULL,
  `reff` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` int NOT NULL DEFAULT '0',
  `out` int NOT NULL DEFAULT '0',
  `product_id` int NOT NULL,
  `remaining_stock` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.products_circulations: ~0 rows (approximately)

-- Dumping structure for table online_shop.product_categories
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.product_categories: ~3 rows (approximately)
INSERT INTO `product_categories` (`id`, `category_name`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`) VALUES
	(1, 'Sports', NULL, NULL, NULL, NULL, 'active'),
	(2, 'Daily', NULL, NULL, NULL, NULL, 'active'),
	(3, 'Accessories', NULL, NULL, NULL, NULL, 'active');

-- Dumping structure for table online_shop.purchase
CREATE TABLE IF NOT EXISTS `purchase` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_date` date NOT NULL,
  `sub_amount` decimal(15,2) DEFAULT NULL,
  `amount_total` decimal(15,2) DEFAULT NULL,
  `discount_amount` decimal(15,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `total_products` int DEFAULT NULL,
  `vendor_id` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `purchase_vendor_id_foreign` (`vendor_id`),
  CONSTRAINT `purchase_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.purchase: ~0 rows (approximately)

-- Dumping structure for table online_shop.purchase_details
CREATE TABLE IF NOT EXISTS `purchase_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` int NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `amount_total` decimal(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `purchase_details_product_id_foreign` (`product_id`),
  CONSTRAINT `purchase_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.purchase_details: ~0 rows (approximately)

-- Dumping structure for table online_shop.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_date` date NOT NULL,
  `sub_amount` decimal(15,2) DEFAULT NULL,
  `amount_total` decimal(15,2) DEFAULT NULL,
  `discount_amount` decimal(15,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `total_products` int DEFAULT NULL,
  `customer_id` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `sales_customer_id_foreign` (`customer_id`),
  CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.sales: ~0 rows (approximately)

-- Dumping structure for table online_shop.sales_details
CREATE TABLE IF NOT EXISTS `sales_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sales_id` int NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `amount_total` decimal(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `sales_details_product_id_foreign` (`product_id`),
  CONSTRAINT `sales_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.sales_details: ~0 rows (approximately)

-- Dumping structure for table online_shop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ali Khatami', 'alirpl2643@gmail.com', NULL, '12345678', NULL, '2023-12-03 23:37:10', '2023-12-03 23:37:10');

-- Dumping structure for table online_shop.user_groups
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.user_groups: ~0 rows (approximately)

-- Dumping structure for table online_shop.vendors
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table online_shop.vendors: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
