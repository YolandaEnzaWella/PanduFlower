-- -------------------------------------------------------------
-- TablePlus 4.6.8(424)
--
-- https://tableplus.com/
--
-- Database: laravel-flower
-- Generation Time: 2022-06-03 19:10:19.3860
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `flower_id` int NOT NULL,
  `qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
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

DROP TABLE IF EXISTS `flowers`;
CREATE TABLE `flowers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Bougenville','Serut','Bonsai','Keladi','Cemara') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `transaction_detail`;
CREATE TABLE `transaction_detail` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` int NOT NULL,
  `flower_id` int NOT NULL,
  `qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total` int NOT NULL,
  `payment_type` enum('Cash on Delivery','Transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `flowers` (`id`, `name`, `type`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bougenville Coconut Ice', 'Bougenville', 'Bougenville coconut ice yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.', 30000, 'bcoconut.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(2, 'Bougenville California Gold', 'Bougenville', 'Bougenville California Gold yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.', 25000, 'bcalifornia.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(3, 'Bougenville California Gold', 'Bougenville', 'Bougenville California Gold yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.', 25000, 'bbambinom.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(4, 'Bougenville Baby Victoria', 'Bougenville', 'Bougenville Baby Victoria yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.', 45000, 'bbaby.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(5, 'Bougenville Baby Lauren', 'Bougenville', 'Bougenville Baby Lauren yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.', 50000, 'bbambinob.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(6, 'Bonsai Maharani', 'Bonsai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 50000, 'bmaharani.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(7, 'Bonsai Anting-Anting Putri', 'Bonsai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 150000, 'banting.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(8, 'Bonsai Beringin Korea', 'Bonsai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 600000, 'bkorea.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(9, 'Cemara Salju', 'Cemara', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 20000, 'cemara.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(10, 'Keladi Siam Aurora', 'Keladi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 25000, 'aurora.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(11, 'Keladi Tabur Emas', 'Keladi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 20000, 'emas.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33'),
(12, 'Serut', 'Serut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.', 600000, 'serut.jpeg', '2022-06-03 12:08:33', '2022-06-03 12:08:33');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_02_165555_create_flowers_table', 1),
(6, '2022_06_02_165951_create_cart_table', 1),
(7, '2022_06_02_170038_create_transactions_table', 1),
(8, '2022_06_02_170353_create_transaction_detail_table', 1);

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile_no`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pandu', 'Winoto', NULL, NULL, 'pandu@gmail.com', NULL, '$2y$10$fxAL/DquT3dZX1/o/Cp0auMI0oRDhcFWyGokpW5lErFqVS4AXiovW', NULL, '2022-06-03 12:08:33', '2022-06-03 12:08:33');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;