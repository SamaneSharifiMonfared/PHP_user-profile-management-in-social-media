-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: socialmedia
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `birthdate` date DEFAULT NULL,
  `bio` varchar(140) DEFAULT NULL,
  `deleted` varchar(2) DEFAULT 'N',
  `following` varchar(255) DEFAULT NULL,
  `primaryaccount` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jack','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(1).jpeg','1990-10-11','Well, nothing...','N','no',NULL),(2,'Nasim','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(4).jpeg','1990-10-11','Well, nothing...','N','yes',NULL),(3,'Seyed','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(5).jpeg','1990-10-11','Well, nothing...','N','no',NULL),(4,'Ben','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(6).jpeg','1990-10-11','Well, nothing...','N',NULL,NULL),(5,'Peny','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(3).jpeg','1990-10-11','Well, nothing...','N',NULL,NULL),(6,'Hulk','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','+44738374637','avatar(2).jpeg','1990-10-11','Well, nothing...','N','no',NULL),(7,'Samane','astro@mail.com','e10adc3949ba59abbe56e057f20f883e','07361502190','samaneavatar.jpg','1990-10-11','I am Samane , a Web Developer, using Php.','N','This is you!','yes');
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

-- Dump completed on 2023-01-09 21:49:49
