-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `code_verify` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (16,'khoa','e15c0fbe60ae42e8fcc8f46195c4ce9b','XPNUP','violent12340@gmail.com'),(17,'khoa','e15c0fbe60ae42e8fcc8f46195c4ce9b','XPNUP','violent12340@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUCT` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `NameProduct` varchar(45) NOT NULL,
  `Image` longtext,
  `PriceProduct` decimal(50,2) NOT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `cart_idx` (`ID_User`),
  KEY `cart_product_idx` (`ID_PRODUCT`),
  CONSTRAINT `cart_product` FOREIGN KEY (`ID_PRODUCT`) REFERENCES `product` (`ID_PRODUCT`),
  CONSTRAINT `cart_user` FOREIGN KEY (`ID_User`) REFERENCES `custumers` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `city` (
  `ID_city` int(11) NOT NULL,
  `city_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custumers`
--

DROP TABLE IF EXISTS `custumers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `custumers` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `USER` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `ADDRESS` mediumtext NOT NULL,
  `NBERPHONE` int(11) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `NAME` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `id_city` int(11) DEFAULT NULL,
  `id_quan` int(11) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `is_member` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custumers`
--

LOCK TABLES `custumers` WRITE;
/*!40000 ALTER TABLE `custumers` DISABLE KEYS */;
INSERT INTO `custumers` VALUES (62,'khoa','e15c0fbe60ae42e8fcc8f46195c4ce9b','ádasd',0,'violent12340@gmail.com',NULL,NULL,NULL,1,1);
/*!40000 ALTER TABLE `custumers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_order`
--

DROP TABLE IF EXISTS `detail_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `detail_order` (
  `ID_detail` int(11) NOT NULL AUTO_INCREMENT,
  `ID_order` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL,
  `Price` decimal(50,0) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`ID_detail`),
  KEY `id_product_idx` (`ID_PRODUCT`),
  CONSTRAINT `id_product` FOREIGN KEY (`ID_PRODUCT`) REFERENCES `product` (`ID_PRODUCT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_order`
--

LOCK TABLES `detail_order` WRITE;
/*!40000 ALTER TABLE `detail_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `image` (
  `ID_image` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `link` longtext NOT NULL,
  PRIMARY KEY (`ID_image`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (21,'Navicat_Keygen_Patch_v4.9_By_DFoX.jpg','../upload/image/Navicat_Keygen_Patch_v4.9_By_DFoX.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keyapi`
--

DROP TABLE IF EXISTS `keyapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `keyapi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `public_key` varchar(10) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `key_admin` varchar(45) DEFAULT NULL,
  `key_user` varchar(45) DEFAULT NULL,
  `huy_yeu_cau` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `key_UNIQUE` (`public_key`),
  UNIQUE KEY `ID_user_UNIQUE` (`ID_user`),
  KEY `id_user_idx` (`ID_user`),
  CONSTRAINT `id_user` FOREIGN KEY (`ID_user`) REFERENCES `custumers` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keyapi`
--

LOCK TABLES `keyapi` WRITE;
/*!40000 ALTER TABLE `keyapi` DISABLE KEYS */;
INSERT INTO `keyapi` VALUES (5,'XPNUP',62,'33a07c8a9d71ece237679b41753cea011559618993','078287e63e17ea503976cedb4f603717',0);
/*!40000 ALTER TABLE `keyapi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order` (
  `ID_order` int(11) NOT NULL AUTO_INCREMENT,
  `OnSellDate` float NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `ID_User` int(11) NOT NULL,
  PRIMARY KEY (`ID_order`),
  KEY `customers_idx` (`ID_User`) /*!80000 INVISIBLE */,
  CONSTRAINT `user` FOREIGN KEY (`ID_User`) REFERENCES `custumers` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phan_quyen`
--

DROP TABLE IF EXISTS `phan_quyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `phan_quyen` (
  `IDphan_quyen` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDphan_quyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phan_quyen`
--

LOCK TABLES `phan_quyen` WRITE;
/*!40000 ALTER TABLE `phan_quyen` DISABLE KEYS */;
/*!40000 ALTER TABLE `phan_quyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product` (
  `ID_PRODUCT` int(11) NOT NULL AUTO_INCREMENT,
  `CodeProduct` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NameProduct` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `AmountProduct` int(11) DEFAULT '0',
  `Descrip` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `PriceProduct` decimal(50,0) NOT NULL,
  `Image` text,
  `manufacturer` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_PRODUCT`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (89,'khoa','khoa đẹp trai',12,'																					',1212,'cosair_ax1600i.jpg','việt nam','41'),(96,'12313','1312',1231,'																					',123,'cosair_ax1600i4.jpg','1312','41'),(97,'231','123',1231,'																																			',13,'ram_gskill_laptop_8gb_gearvn_ff44e09d4a1a41698d6c12af574f1d4b.jpg','131','41'),(98,'khoa','ádas',12,'ádasd',1000,'','việt nam','41'),(99,'sad','áds',12,'											',12,'build.gradle','123`','41');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quan_huyen`
--

DROP TABLE IF EXISTS `quan_huyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `quan_huyen` (
  `IDquan_huyen` int(11) NOT NULL,
  `ID_city` int(11) NOT NULL,
  `quan_huyen_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`IDquan_huyen`),
  KEY `city_idx` (`ID_city`),
  CONSTRAINT `city` FOREIGN KEY (`ID_city`) REFERENCES `city` (`ID_city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quan_huyen`
--

LOCK TABLES `quan_huyen` WRITE;
/*!40000 ALTER TABLE `quan_huyen` DISABLE KEYS */;
/*!40000 ALTER TABLE `quan_huyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `type` (
  `ID_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_type`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (41,'CPU '),(42,'MAIN '),(43,'RAM '),(44,'VGA '),(45,'SSD'),(46,'HDD'),(47,'PSU ');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-05 15:04:07
