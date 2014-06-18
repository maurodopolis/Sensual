CREATE DATABASE  IF NOT EXISTS `tia5` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `tia5`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: tia5
-- ------------------------------------------------------
-- Server version	5.5.32

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
-- Table structure for table `temas`
--

DROP TABLE IF EXISTS `temas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temas`
--

LOCK TABLES `temas` WRITE;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` VALUES (1,1,'Sahara','2014-02-20 17:49:52','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere viverra elit, sed interdum massa tempus ac. Nam a metus at massa dapibus dapibus sed ut erat. Nulla ac nibh eget elit adipiscing mattis. In id euismod neque, quis congue massa. Maecenas velit orci, ultricies sed nisi eu, placerat gravida sem. Praesent viverra consectetur risus quis ornare. Maecenas at orci urna. Aliquam auctor commodo malesuada. Fusce tempor, libero id convallis suscipit, velit turpis iaculis elit, non mollis sem quam vitae urna. Nullam at tortor pellentesque, tincidunt dui ut, sagittis mauris. Praesent interdum ligula vitae varius varius. Aenean in mauris mauris. Praesent ac elementum quam, quis scelerisque arcu. Sed vestibulum rhoncus bibendum.'),(2,1,'hola','2014-02-20 17:49:52','Donec sit amet vestibulum lectus. Etiam vitae eleifend dolor. Maecenas dolor lorem, viverra at massa vel, consectetur accumsan sem. Sed at ultrices orci. Phasellus non congue nunc. Aenean est enim, pellentesque ut gravida vel, mattis sed dui. Donec id neque eget nibh faucibus consequat blandit eu leo. Ut et pharetra nisl. Sed vel erat turpis.'),(3,1,'ipsum','2014-02-20 17:49:52','Ut sit amet lobortis nibh. Phasellus consectetur suscipit tristique. Ut laoreet, libero ut vehicula condimentum, urna nisl eleifend sem, eget rutrum libero risus sed felis. In ut tristique sem. Aenean consequat euismod nibh. Nullam ac mattis lectus. Integer id diam risus. Phasellus et massa luctus, tincidunt diam id, suscipit dui. Etiam in velit nec turpis tincidunt dapibus id et mauris. Etiam vulputate urna est, non sodales libero posuere ac. Nunc placerat nibh condimentum diam facilisis tempus. Sed pellentesque neque lacus, quis condimentum risus adipiscing ut. Cras sed elit non ante luctus condimentum sed nec lectus. Phasellus id malesuada felis, at adipiscing erat. Pellentesque auctor commodo accumsan.');
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-03 10:48:28
