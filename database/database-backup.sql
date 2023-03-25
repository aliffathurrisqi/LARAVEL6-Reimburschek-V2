-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: reimbesement
-- ------------------------------------------------------
-- Server version	5.7.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_02_27_145650_create_reimbesements_table',1),(6,'2023_02_27_164313_create_reimbesement_details_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reimbesement_details`
--

DROP TABLE IF EXISTS `reimbesement_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reimbesement_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `berangkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_1` decimal(20,2) NOT NULL,
  `image_1` text COLLATE utf8mb4_unicode_ci,
  `pulang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_2` decimal(20,2) NOT NULL,
  `image_2` text COLLATE utf8mb4_unicode_ci,
  `makan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_3` decimal(20,2) NOT NULL,
  `image_3` text COLLATE utf8mb4_unicode_ci,
  `lainnya` text COLLATE utf8mb4_unicode_ci,
  `nominal_4` decimal(20,2) DEFAULT NULL,
  `image_4` text COLLATE utf8mb4_unicode_ci,
  `total` decimal(20,2) NOT NULL,
  `reimbesement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reimbesement_details`
--

LOCK TABLES `reimbesement_details` WRITE;
/*!40000 ALTER TABLE `reimbesement_details` DISABLE KEYS */;
INSERT INTO `reimbesement_details` VALUES (1,'Perjalanan dari Kost ke kantor merona coffee',27500.00,'1679239520.WhatsApp Image 2023-03-19 at 22.24.54.jpeg','Perjalanan pulang dari Kantor merah merona coffee ke kost',27500.00,'1679239520.WhatsApp Image 2023-03-19 at 22.24.54 (1).jpeg','Makan',40000.00,'1679239520.WhatsApp Image 2023-03-19 at 22.28.12.jpeg',NULL,NULL,NULL,95000.00,1,'2023-03-19 15:25:20','2023-03-19 15:25:20',NULL),(2,'Perjalanan dari Kost ke Pengilon Resto',13250.00,'1679239832.WhatsApp Image 2023-03-19 at 22.30.10.jpeg','Perjalanan dari Pengilon ke Kolona',1750.00,'1679239832.WhatsApp Image 2023-03-19 at 22.33.19.jpeg','Makan',40000.00,'1679239832.01253a37-d09d-4a5c-81a5-2acf1f49adca.jpeg',NULL,NULL,NULL,55000.00,2,'2023-03-19 15:30:32','2023-03-19 15:30:32',NULL),(3,'Perjalanan dari Kolona ke Blue Heron',11500.00,'1679240452.WhatsApp Image 2023-03-19 at 22.33.21.jpeg','Perjalanan dari Blue Heron ke Kost',13000.00,'1679240452.WhatsApp Image 2023-03-19 at 22.33.22.jpeg','-',0.00,NULL,NULL,NULL,NULL,24500.00,7,'2023-03-19 15:40:52','2023-03-19 15:40:52',NULL),(4,'Perjalanan dari Kolona ke Blue Heron',11500.00,'1679240478.WhatsApp Image 2023-03-19 at 22.33.21.jpeg','Perjalanan dari Blue Heron ke Kost',13000.00,'1679240478.WhatsApp Image 2023-03-19 at 22.33.22.jpeg','sudah makan',0.00,NULL,NULL,NULL,NULL,24500.00,8,'2023-03-19 15:41:18','2023-03-19 15:41:18',NULL),(5,'Perjalanan dari Kolona ke Blue Heron',11500.00,'1679241015.WhatsApp Image 2023-03-19 at 22.33.21.jpeg','Perjalanan dari Blue Heron ke Kost',13000.00,'1679241015.WhatsApp Image 2023-03-19 at 22.33.22.jpeg','-',0.00,'1679241015.polos.png',NULL,NULL,NULL,24500.00,9,'2023-03-19 15:50:15','2023-03-19 15:50:15',NULL);
/*!40000 ALTER TABLE `reimbesement_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reimbesements`
--

DROP TABLE IF EXISTS `reimbesements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reimbesements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reimbesement_date` date NOT NULL,
  `outlet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reimbesements`
--

LOCK TABLES `reimbesements` WRITE;
/*!40000 ALTER TABLE `reimbesements` DISABLE KEYS */;
INSERT INTO `reimbesements` VALUES (1,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-16','Merona Coffee & Noodle','2023-03-19 15:25:20','2023-03-19 15:25:20',NULL),(2,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Pengilon Resto','2023-03-19 15:30:32','2023-03-19 15:30:32',NULL),(3,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:32:08','2023-03-19 15:32:08','2023-03-19 15:44:51'),(4,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:32:21','2023-03-19 15:32:21','2023-03-19 15:44:51'),(5,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:34:11','2023-03-19 15:34:11','2023-03-19 15:44:51'),(6,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:40:32','2023-03-19 15:40:32','2023-03-19 15:44:51'),(7,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:40:52','2023-03-19 15:40:52','2023-03-19 15:44:51'),(8,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:41:18','2023-03-19 15:41:18','2023-03-19 15:44:51'),(9,'Aprilyani Sanjaya','Implementor','ESB Jogja','2023-03-17','Blue Heron','2023-03-19 15:50:15','2023-03-19 15:50:15',NULL);
/*!40000 ALTER TABLE `reimbesements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kupril20','Aprilyani Sanjaya','kupril1999@gmail.com',NULL,'$2y$10$L9IAVyowA9RPWfv8/r4AauPXoce3k/Z1jV9ssEAx4EZLWiAMB5EuG','Implementor','ESB Jogja',NULL,'2023-03-12 17:45:28','2023-03-12 17:45:28',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-19 23:10:25
