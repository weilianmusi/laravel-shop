-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2020-04-30 06:07:05'),(2,0,9,'系统管理','fa-tasks',NULL,NULL,'2020-06-03 02:30:05'),(3,2,10,'管理员','fa-users','auth/users',NULL,'2020-06-03 02:30:06'),(4,2,11,'角色','fa-user','auth/roles',NULL,'2020-06-03 02:30:06'),(5,2,12,'权限','fa-ban','auth/permissions',NULL,'2020-06-03 02:30:06'),(6,2,13,'菜单','fa-bars','auth/menu',NULL,'2020-06-03 02:30:06'),(7,2,14,'操作日志','fa-history','auth/logs',NULL,'2020-06-03 02:30:07'),(8,0,2,'用户管理','fa-bars','/users','2020-04-30 06:40:54','2020-04-30 06:41:33'),(9,0,4,'商品管理','fa-bars','/products','2020-04-30 09:10:23','2020-06-01 09:38:43'),(10,0,7,'订单管理','fa-bars','/orders','2020-05-14 07:03:53','2020-06-03 02:30:05'),(11,0,8,'优惠券管理','fa-bars','/coupon_codes','2020-05-18 02:50:15','2020-06-03 02:30:05'),(12,0,3,'类目管理','fa-bars','/categories','2020-06-01 09:38:13','2020-06-01 09:38:43'),(13,9,5,'众筹商品','fa-bars','/crowdfunding_products','2020-06-03 02:28:17','2020-06-03 02:30:04'),(14,9,6,'普通商品','fa-bars','/products','2020-06-03 02:29:24','2020-06-03 02:30:04'),(15,9,0,'秒杀商品','fa-bars','/seckill_products','2020-06-23 08:58:53','2020-06-23 08:58:53');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2020-04-30 07:20:53','2020-04-30 07:20:53'),(7,'商品管理','products','','/products*','2020-05-29 06:02:57','2020-05-29 06:03:31'),(8,'订单管理','orders','','/orders*','2020-05-29 06:04:11','2020-05-29 06:04:11'),(9,'优惠券管理','coupon_codes','','/coupon_codes*','2020-05-29 06:05:02','2020-05-29 06:05:02');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2020-04-30 05:46:34','2020-04-30 05:46:34'),(2,'运营','operator','2020-04-30 07:44:43','2020-04-30 07:44:43');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$g/tMdl9Tvnn2V7HRPCkxxu24bZ/3tPAMXhqX6JrX4GPY.gEU4UY2O','Administrator',NULL,'Y1e5jxojulcouDbOkCWAPgrKjYE7j6x2gBPAmvSDewU3eJeUG2w4dkLuRcQN','2020-04-30 05:46:34','2020-04-30 05:46:34'),(2,'operator','$2y$10$0Y4xxKXmy/zFOgzfww2mhePZjwqJGQEeMqFpJPO9yZFBOhMmLUB/e','运营',NULL,'1D5wLqnZvkm46aCAh9qj3DoauDqOHbWx4It9HE20DJfpL2R9S1f1Pvp35gCL','2020-04-30 07:47:49','2020-04-30 07:47:49');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-23  9:12:56
