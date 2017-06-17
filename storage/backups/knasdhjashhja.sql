-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: 127.0.0.1
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `accion`
--

DROP TABLE IF EXISTS `accion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tabla` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idTupla` int(11) DEFAULT NULL,
  `idBitacora` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accion_idbitacora_foreign` (`idBitacora`),
  CONSTRAINT `accion_idbitacora_foreign` FOREIGN KEY (`idBitacora`) REFERENCES `bitacora` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion`
--

LOCK TABLES `accion` WRITE;
/*!40000 ALTER TABLE `accion` DISABLE KEYS */;
INSERT INTO `accion` VALUES (1,'2017-05-31','17:08:08','Creo una Cuenta, LogIn',NULL,NULL,1,'123456','1','2017-05-31 21:08:08','2017-05-31 21:08:08'),(2,'2017-05-31','17:08:23','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-05-31 21:08:23','2017-05-31 21:08:23'),(3,'2017-05-31','17:23:07','Ingreso a la pagina de Factura',NULL,NULL,1,'123456','1','2017-05-31 21:23:07','2017-05-31 21:23:07'),(4,'2017-05-31','17:23:28','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 21:23:28','2017-05-31 21:23:28'),(5,'2017-05-31','18:06:55','Ingreso a la pagina de Factura',NULL,NULL,1,'123456','1','2017-05-31 22:06:55','2017-05-31 22:06:55'),(6,'2017-05-31','18:07:00','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:00','2017-05-31 22:07:00'),(7,'2017-05-31','18:07:11','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:11','2017-05-31 22:07:11'),(8,'2017-05-31','18:07:14','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:14','2017-05-31 22:07:14'),(9,'2017-05-31','18:07:15','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:15','2017-05-31 22:07:15'),(10,'2017-05-31','18:07:16','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:16','2017-05-31 22:07:16'),(11,'2017-05-31','18:07:19','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:19','2017-05-31 22:07:19'),(12,'2017-05-31','18:07:20','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:20','2017-05-31 22:07:20'),(13,'2017-05-31','18:07:22','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:22','2017-05-31 22:07:22'),(14,'2017-05-31','18:07:23','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:23','2017-05-31 22:07:23'),(15,'2017-05-31','18:07:26','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:26','2017-05-31 22:07:26'),(16,'2017-05-31','18:07:27','Ingreso a la pagina de Crear Factura',NULL,NULL,1,'123456','1','2017-05-31 22:07:27','2017-05-31 22:07:27'),(17,'2017-06-01','08:03:20','LogIn',NULL,NULL,2,'123456','1','2017-06-01 12:03:20','2017-06-01 12:03:20'),(18,'2017-06-02','09:56:18','LogIn',NULL,NULL,3,'123456','1','2017-06-02 13:56:18','2017-06-02 13:56:18'),(19,'2017-06-02','10:57:26','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 14:57:26','2017-06-02 14:57:26'),(20,'2017-06-02','10:57:45','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 14:57:45','2017-06-02 14:57:45'),(21,'2017-06-02','11:01:33','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:01:33','2017-06-02 15:01:33'),(22,'2017-06-02','11:03:56','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:03:56','2017-06-02 15:03:56'),(23,'2017-06-02','11:05:15','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:05:15','2017-06-02 15:05:15'),(24,'2017-06-02','11:05:20','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:05:20','2017-06-02 15:05:20'),(25,'2017-06-02','11:07:23','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:07:23','2017-06-02 15:07:23'),(26,'2017-06-02','11:08:19','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:08:19','2017-06-02 15:08:19'),(27,'2017-06-02','11:10:11','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:10:11','2017-06-02 15:10:11'),(28,'2017-06-02','11:10:48','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:10:48','2017-06-02 15:10:48'),(29,'2017-06-02','11:11:14','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:11:14','2017-06-02 15:11:14'),(30,'2017-06-02','11:16:19','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:16:19','2017-06-02 15:16:19'),(31,'2017-06-02','11:17:44','Creo una nueva Factura','factura',1,3,'123456','1','2017-06-02 15:17:44','2017-06-02 15:17:44'),(32,'2017-06-02','11:17:45','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:17:45','2017-06-02 15:17:45'),(33,'2017-06-02','11:18:07','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:18:07','2017-06-02 15:18:07'),(34,'2017-06-02','11:18:19','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:18:19','2017-06-02 15:18:19'),(35,'2017-06-02','11:18:22','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:18:22','2017-06-02 15:18:22'),(36,'2017-06-02','11:20:45','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:20:45','2017-06-02 15:20:45'),(37,'2017-06-02','11:20:50','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:20:50','2017-06-02 15:20:50'),(38,'2017-06-02','11:21:37','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:21:37','2017-06-02 15:21:37'),(39,'2017-06-02','11:21:41','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:21:41','2017-06-02 15:21:41'),(40,'2017-06-02','11:24:39','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:24:39','2017-06-02 15:24:39'),(41,'2017-06-02','11:26:00','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:26:00','2017-06-02 15:26:00'),(42,'2017-06-02','11:26:20','Creo una nueva Factura','factura',2,3,'123456','1','2017-06-02 15:26:20','2017-06-02 15:26:20'),(43,'2017-06-02','11:26:21','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:26:21','2017-06-02 15:26:21'),(44,'2017-06-02','11:26:32','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:26:32','2017-06-02 15:26:32'),(45,'2017-06-02','11:27:25','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:27:25','2017-06-02 15:27:25'),(46,'2017-06-02','11:27:33','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:27:33','2017-06-02 15:27:33'),(47,'2017-06-02','11:44:26','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:44:26','2017-06-02 15:44:26'),(48,'2017-06-02','11:45:57','Ingreso a la pagina de Crear Factura',NULL,NULL,3,'123456','1','2017-06-02 15:45:57','2017-06-02 15:45:57'),(49,'2017-06-02','11:46:37','Creo una nueva Factura','factura',3,3,'123456','1','2017-06-02 15:46:37','2017-06-02 15:46:37'),(50,'2017-06-02','11:46:38','Ingreso a la pagina de Factura',NULL,NULL,3,'123456','1','2017-06-02 15:46:38','2017-06-02 15:46:38'),(51,'2017-06-02','17:33:08','LogIn',NULL,NULL,4,'123456','1','2017-06-02 21:33:08','2017-06-02 21:33:08'),(52,'2017-06-04','02:55:12','LogIn',NULL,NULL,5,'123456','1','2017-06-04 06:55:12','2017-06-04 06:55:12'),(53,'2017-06-04','03:01:47','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:01:47','2017-06-04 07:01:47'),(54,'2017-06-04','03:02:13','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:02:13','2017-06-04 07:02:13'),(55,'2017-06-04','03:02:58','Ingreso a la pagina de Crear Factura',NULL,NULL,5,'123456','1','2017-06-04 07:02:58','2017-06-04 07:02:58'),(56,'2017-06-04','03:04:42','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:04:42','2017-06-04 07:04:42'),(57,'2017-06-04','03:06:27','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:06:27','2017-06-04 07:06:27'),(58,'2017-06-04','03:06:38','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:06:38','2017-06-04 07:06:38'),(59,'2017-06-04','03:09:07','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:09:07','2017-06-04 07:09:07'),(60,'2017-06-04','03:09:18','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:09:18','2017-06-04 07:09:18'),(61,'2017-06-04','03:10:05','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:10:05','2017-06-04 07:10:05'),(62,'2017-06-04','03:10:29','Ingreso a la pagina de Cargo',NULL,NULL,5,'123456','1','2017-06-04 07:10:29','2017-06-04 07:10:29'),(63,'2017-06-04','03:11:00','Creo un nuevo Cargo','cargo',1,5,'123456','1','2017-06-04 07:11:00','2017-06-04 07:11:00'),(64,'2017-06-04','03:11:02','Ingreso a la pagina de Cargo',NULL,NULL,5,'123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(65,'2017-06-04','03:13:57','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:13:57','2017-06-04 07:13:57'),(66,'2017-06-04','03:15:26','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:15:26','2017-06-04 07:15:26'),(67,'2017-06-04','03:17:10','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:17:10','2017-06-04 07:17:10'),(68,'2017-06-04','03:20:51','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:20:51','2017-06-04 07:20:51'),(69,'2017-06-04','03:21:03','Ingreso a la pagina de Crear Factura',NULL,NULL,5,'123456','1','2017-06-04 07:21:03','2017-06-04 07:21:03'),(70,'2017-06-04','03:21:42','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:21:42','2017-06-04 07:21:42'),(71,'2017-06-04','03:25:08','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:25:08','2017-06-04 07:25:08'),(72,'2017-06-04','03:25:26','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:25:26','2017-06-04 07:25:26'),(73,'2017-06-04','03:29:35','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:29:35','2017-06-04 07:29:35'),(74,'2017-06-04','03:29:46','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:29:46','2017-06-04 07:29:46'),(75,'2017-06-04','03:30:10','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:30:10','2017-06-04 07:30:10'),(76,'2017-06-04','03:30:24','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:30:24','2017-06-04 07:30:24'),(77,'2017-06-04','03:31:07','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:31:07','2017-06-04 07:31:07'),(78,'2017-06-04','03:32:50','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:32:50','2017-06-04 07:32:50'),(79,'2017-06-04','03:34:52','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:34:52','2017-06-04 07:34:52'),(80,'2017-06-04','03:37:04','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:37:04','2017-06-04 07:37:04'),(81,'2017-06-04','03:37:08','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:37:08','2017-06-04 07:37:08'),(82,'2017-06-04','03:37:12','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:37:12','2017-06-04 07:37:12'),(83,'2017-06-04','03:37:26','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:37:26','2017-06-04 07:37:26'),(84,'2017-06-04','03:44:12','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:44:12','2017-06-04 07:44:12'),(85,'2017-06-04','03:46:30','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:46:30','2017-06-04 07:46:30'),(86,'2017-06-04','03:49:15','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:49:15','2017-06-04 07:49:15'),(87,'2017-06-04','03:50:02','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:50:02','2017-06-04 07:50:02'),(88,'2017-06-04','03:50:30','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:50:30','2017-06-04 07:50:30'),(89,'2017-06-04','03:51:27','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:51:27','2017-06-04 07:51:27'),(90,'2017-06-04','03:54:58','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:54:58','2017-06-04 07:54:58'),(91,'2017-06-04','03:55:40','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:55:40','2017-06-04 07:55:40'),(92,'2017-06-04','03:56:13','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:56:13','2017-06-04 07:56:13'),(93,'2017-06-04','03:56:36','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:56:36','2017-06-04 07:56:36'),(94,'2017-06-04','03:56:58','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:56:58','2017-06-04 07:56:58'),(95,'2017-06-04','03:57:11','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:57:11','2017-06-04 07:57:11'),(96,'2017-06-04','03:57:27','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:57:27','2017-06-04 07:57:27'),(97,'2017-06-04','03:57:50','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 07:57:50','2017-06-04 07:57:50'),(98,'2017-06-04','03:57:55','Ingreso a la pagina de Crear Factura',NULL,NULL,5,'123456','1','2017-06-04 07:57:55','2017-06-04 07:57:55'),(99,'2017-06-04','03:58:18','Ingreso a la pagina de Crear Factura',NULL,NULL,5,'123456','1','2017-06-04 07:58:18','2017-06-04 07:58:18'),(100,'2017-06-04','04:16:16','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 08:16:16','2017-06-04 08:16:16'),(101,'2017-06-04','05:20:29','Ingreso a la pagina de Factura',NULL,NULL,5,'123456','1','2017-06-04 09:20:29','2017-06-04 09:20:29'),(102,'2017-06-04','12:16:02','LogIn',NULL,NULL,6,'123456','1','2017-06-04 16:16:02','2017-06-04 16:16:02'),(103,'2017-06-04','12:16:16','Ingreso a la pagina de Factura',NULL,NULL,6,'123456','1','2017-06-04 16:16:16','2017-06-04 16:16:16'),(104,'2017-06-06','16:30:33','LogIn',NULL,NULL,7,'123456','1','2017-06-06 20:30:33','2017-06-06 20:30:33'),(105,'2017-06-06','16:31:05','LogOut',NULL,NULL,7,'123456','1','2017-06-06 20:31:05','2017-06-06 20:31:05'),(106,'2017-06-06','16:33:12','Creo una Cuenta, LogIn',NULL,NULL,8,'1234567','1','2017-06-06 20:33:12','2017-06-06 20:33:12'),(107,'2017-06-06','16:33:28','Ingreso a la pagina de Cargo',NULL,NULL,8,'1234567','1','2017-06-06 20:33:28','2017-06-06 20:33:28');
/*!40000 ALTER TABLE `accion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adquisicion_parvada`
--

DROP TABLE IF EXISTS `adquisicion_parvada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adquisicion_parvada` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idProveedor` int(10) unsigned NOT NULL,
  `idParvada` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adquisicion_parvada_idproveedor_foreign` (`idProveedor`),
  KEY `adquisicion_parvada_idparvada_foreign` (`idParvada`),
  CONSTRAINT `adquisicion_parvada_idparvada_foreign` FOREIGN KEY (`idParvada`) REFERENCES `parvada` (`id`),
  CONSTRAINT `adquisicion_parvada_idproveedor_foreign` FOREIGN KEY (`idProveedor`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adquisicion_parvada`
--

LOCK TABLES `adquisicion_parvada` WRITE;
/*!40000 ALTER TABLE `adquisicion_parvada` DISABLE KEYS */;
/*!40000 ALTER TABLE `adquisicion_parvada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alimento`
--

DROP TABLE IF EXISTS `alimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alimento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alimento`
--

LOCK TABLES `alimento` WRITE;
/*!40000 ALTER TABLE `alimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `alimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `backup`
--

DROP TABLE IF EXISTS `backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backup`
--

LOCK TABLES `backup` WRITE;
/*!40000 ALTER TABLE `backup` DISABLE KEYS */;
INSERT INTO `backup` VALUES (1,'sergio','2017-06-04',NULL,123456,'1');
/*!40000 ALTER TABLE `backup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bateria`
--

DROP TABLE IF EXISTS `bateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bateria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `capacidad` int(11) NOT NULL,
  `idGalpon` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bateria_idgalpon_foreign` (`idGalpon`),
  CONSTRAINT `bateria_idgalpon_foreign` FOREIGN KEY (`idGalpon`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bateria`
--

LOCK TABLES `bateria` WRITE;
/*!40000 ALTER TABLE `bateria` DISABLE KEYS */;
/*!40000 ALTER TABLE `bateria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bitacora_iduser_foreign` (`idUser`),
  CONSTRAINT `bitacora_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (1,1,'123456','1','2017-05-31 21:08:08','2017-05-31 21:08:08'),(2,1,'123456','1','2017-06-01 12:03:20','2017-06-01 12:03:20'),(3,1,'123456','1','2017-06-02 13:56:17','2017-06-02 13:56:17'),(4,1,'123456','1','2017-06-02 21:33:08','2017-06-02 21:33:08'),(5,1,'123456','1','2017-06-04 06:55:11','2017-06-04 06:55:11'),(6,1,'123456','1','2017-06-04 16:16:02','2017-06-04 16:16:02'),(7,1,'123456','1','2017-06-06 20:30:33','2017-06-06 20:30:33'),(8,2,'1234567','1','2017-06-06 20:33:12','2017-06-06 20:33:12');
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Administrador General','Encargado de todo el Sistema\r\n','123456','1','2017-06-04 07:11:00','2017-06-04 07:11:00');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caso_uso`
--

DROP TABLE IF EXISTS `caso_uso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caso_uso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idModulo` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `caso_uso_idmodulo_foreign` (`idModulo`),
  CONSTRAINT `caso_uso_idmodulo_foreign` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caso_uso`
--

LOCK TABLES `caso_uso` WRITE;
/*!40000 ALTER TABLE `caso_uso` DISABLE KEYS */;
INSERT INTO `caso_uso` VALUES (1,1,'Cargo','0','1',NULL,NULL),(2,1,'Empleado','0','1',NULL,NULL),(3,1,'Usuarios','0','1',NULL,NULL),(4,1,'Privilegios','0','1',NULL,NULL),(5,1,'Bitacora','0','1',NULL,NULL),(6,2,'Proveedores','0','1',NULL,NULL),(7,2,'Insumos','0','1',NULL,NULL),(8,2,'Adquisición de Parvada','0','1',NULL,NULL),(9,2,'Unidad de Medidas','0','1',NULL,NULL),(10,2,'Registro de Compras','0','1',NULL,NULL),(11,3,'Clientes','0','1',NULL,NULL),(12,3,'Facturas','0','1',NULL,NULL),(13,3,'Productos','0','1',NULL,NULL),(14,3,'Categorias','0','1',NULL,NULL),(15,3,'Tipo de Pollo','0','1',NULL,NULL),(16,3,'Inventarios','0','1',NULL,NULL),(17,4,'Equipos','0','1',NULL,NULL),(18,4,'Planta de Incubación','0','1',NULL,NULL),(19,4,'Galpones','0','1',NULL,NULL),(20,4,'Baterias','0','1',NULL,NULL),(21,4,'Granja','0','1',NULL,NULL),(22,4,'Procesos de Sanitización','0','1',NULL,NULL),(23,4,'Registro Sanitario','0','1',NULL,NULL),(24,5,'Reportes Diarios','0','1',NULL,NULL),(25,5,'Reportes de Midicación','0','1',NULL,NULL),(26,5,'Reportes de Huevos','0','1',NULL,NULL),(27,6,'Engorde','0','1',NULL,NULL),(28,6,'Ponedoras','0','1',NULL,NULL),(29,6,'Reproductora','0','1',NULL,NULL),(30,6,'Dieta Alimentacia','0','1',NULL,NULL),(31,6,'Lote de Huevo Incubables','0','1',NULL,NULL),(32,6,'Medicación','0','1',NULL,NULL),(33,6,'Producción de Alimento','0','1',NULL,NULL),(34,6,'Traspasos de Parvada','0','1',NULL,NULL),(35,6,'Etapas de Parvada','0','1',NULL,NULL),(36,6,'Etapas de Incubación','0','1',NULL,NULL),(37,6,'Traspasos de Huevos','0','1',NULL,NULL),(38,6,'Orden de Producción','0','1',NULL,NULL);
/*!40000 ALTER TABLE `caso_uso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casop_cargo`
--

DROP TABLE IF EXISTS `casop_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casop_cargo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPrivilegio` int(10) unsigned NOT NULL,
  `idCaso` int(10) unsigned NOT NULL,
  `permiso` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `casop_cargo_idprivilegio_foreign` (`idPrivilegio`),
  KEY `casop_cargo_idcaso_foreign` (`idCaso`),
  CONSTRAINT `casop_cargo_idcaso_foreign` FOREIGN KEY (`idCaso`) REFERENCES `caso_uso` (`id`),
  CONSTRAINT `casop_cargo_idprivilegio_foreign` FOREIGN KEY (`idPrivilegio`) REFERENCES `privilegio_cargo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casop_cargo`
--

LOCK TABLES `casop_cargo` WRITE;
/*!40000 ALTER TABLE `casop_cargo` DISABLE KEYS */;
INSERT INTO `casop_cargo` VALUES (1,1,1,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(2,1,2,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(3,1,3,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(4,1,4,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(5,1,5,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(6,2,6,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(7,2,7,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(8,2,8,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(9,2,9,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(10,2,10,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(11,3,11,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(12,3,12,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(13,3,13,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(14,3,14,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(15,3,15,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(16,3,16,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(17,4,17,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(18,4,18,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(19,4,19,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(20,4,20,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(21,4,21,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(22,4,22,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(23,4,23,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(24,5,24,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(25,5,25,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(26,5,26,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(27,6,27,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(28,6,28,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(29,6,29,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(30,6,30,'n','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(31,6,31,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(32,6,32,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(33,6,33,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(34,6,34,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(35,6,35,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(36,6,36,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(37,6,37,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02'),(38,6,38,'n','123456','1','2017-06-04 07:11:02','2017-06-04 07:11:02');
/*!40000 ALTER TABLE `casop_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casop_usuario`
--

DROP TABLE IF EXISTS `casop_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casop_usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPrivilegio` int(10) unsigned NOT NULL,
  `idCaso` int(10) unsigned NOT NULL,
  `permiso` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `casop_usuario_idprivilegio_foreign` (`idPrivilegio`),
  KEY `casop_usuario_idcaso_foreign` (`idCaso`),
  CONSTRAINT `casop_usuario_idcaso_foreign` FOREIGN KEY (`idCaso`) REFERENCES `caso_uso` (`id`),
  CONSTRAINT `casop_usuario_idprivilegio_foreign` FOREIGN KEY (`idPrivilegio`) REFERENCES `privilegio_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casop_usuario`
--

LOCK TABLES `casop_usuario` WRITE;
/*!40000 ALTER TABLE `casop_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `casop_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesoIntervaloSuperior` double(8,2) NOT NULL,
  `pesoIntervaloInferior` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Categoria A','Ninguna',2.50,5.50,'123456','1','2017-06-02 15:54:25','2017-06-02 15:54:25');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `composicion`
--

DROP TABLE IF EXISTS `composicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `composicion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAlimento` int(10) unsigned NOT NULL,
  `idMateriaPrima` int(10) unsigned NOT NULL,
  `peso` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `composicion_idalimento_foreign` (`idAlimento`),
  KEY `composicion_idmateriaprima_foreign` (`idMateriaPrima`),
  CONSTRAINT `composicion_idalimento_foreign` FOREIGN KEY (`idAlimento`) REFERENCES `alimento` (`id`),
  CONSTRAINT `composicion_idmateriaprima_foreign` FOREIGN KEY (`idMateriaPrima`) REFERENCES `insumo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `composicion`
--

LOCK TABLES `composicion` WRITE;
/*!40000 ALTER TABLE `composicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `composicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `font` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idSuperAdmin` int(10) unsigned NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `config_idsuperadmin_foreign` (`idSuperAdmin`),
  CONSTRAINT `config_idsuperadmin_foreign` FOREIGN KEY (`idSuperAdmin`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_alimentacion`
--

DROP TABLE IF EXISTS `detalle_alimentacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_alimentacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAlimento` int(10) unsigned NOT NULL,
  `idDietaAlimenticia` int(10) unsigned NOT NULL,
  `cantidadAlimento` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_alimentacion_idalimento_foreign` (`idAlimento`),
  KEY `detalle_alimentacion_iddietaalimenticia_foreign` (`idDietaAlimenticia`),
  CONSTRAINT `detalle_alimentacion_idalimento_foreign` FOREIGN KEY (`idAlimento`) REFERENCES `alimento` (`id`),
  CONSTRAINT `detalle_alimentacion_iddietaalimenticia_foreign` FOREIGN KEY (`idDietaAlimenticia`) REFERENCES `dieta_alimenticia` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_alimentacion`
--

LOCK TABLES `detalle_alimentacion` WRITE;
/*!40000 ALTER TABLE `detalle_alimentacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_alimentacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_compra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idRegistrarCompra` int(10) unsigned NOT NULL,
  `idInsumo` int(10) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_compra_idregistrarcompra_foreign` (`idRegistrarCompra`),
  KEY `detalle_compra_idinsumo_foreign` (`idInsumo`),
  CONSTRAINT `detalle_compra_idinsumo_foreign` FOREIGN KEY (`idInsumo`) REFERENCES `insumo` (`id`),
  CONSTRAINT `detalle_compra_idregistrarcompra_foreign` FOREIGN KEY (`idRegistrarCompra`) REFERENCES `registrar_compra` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_compra`
--

LOCK TABLES `detalle_compra` WRITE;
/*!40000 ALTER TABLE `detalle_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_factura` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFactura` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_factura_idfactura_foreign` (`idFactura`),
  KEY `detalle_factura_idproducto_foreign` (`idProducto`),
  CONSTRAINT `detalle_factura_idfactura_foreign` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`id`),
  CONSTRAINT `detalle_factura_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `producto_venta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_factura`
--

LOCK TABLES `detalle_factura` WRITE;
/*!40000 ALTER TABLE `detalle_factura` DISABLE KEYS */;
INSERT INTO `detalle_factura` VALUES (1,1,1,2,'123456','1','2017-06-02 15:17:44','2017-06-02 15:17:44'),(2,1,2,3,'123456','1','2017-06-02 15:17:44','2017-06-02 15:17:44'),(3,2,1,5,'123456','1','2017-06-02 15:26:20','2017-06-02 15:26:20'),(4,2,2,5,'123456','1','2017-06-02 15:26:20','2017-06-02 15:26:20'),(5,3,1,3,'123456','1','2017-06-02 15:46:37','2017-06-02 15:46:37'),(6,3,2,7,'123456','1','2017-06-02 15:46:37','2017-06-02 15:46:37');
/*!40000 ALTER TABLE `detalle_factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_medicacion`
--

DROP TABLE IF EXISTS `detalle_medicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_medicacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idMedicamento` int(10) unsigned NOT NULL,
  `idReporteMedicacion` int(10) unsigned NOT NULL,
  `dosis` double(8,2) NOT NULL,
  `viaDeAplicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_medicacion_idmedicamento_foreign` (`idMedicamento`),
  KEY `detalle_medicacion_idreportemedicacion_foreign` (`idReporteMedicacion`),
  CONSTRAINT `detalle_medicacion_idmedicamento_foreign` FOREIGN KEY (`idMedicamento`) REFERENCES `insumo` (`id`),
  CONSTRAINT `detalle_medicacion_idreportemedicacion_foreign` FOREIGN KEY (`idReporteMedicacion`) REFERENCES `reporte_medicacion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_medicacion`
--

LOCK TABLES `detalle_medicacion` WRITE;
/*!40000 ALTER TABLE `detalle_medicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_medicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_orden`
--

DROP TABLE IF EXISTS `detalle_orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_orden` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idOrdenProduccion` int(10) unsigned NOT NULL,
  `idAlimento` int(10) unsigned NOT NULL,
  `peso` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_orden_idordenproduccion_foreign` (`idOrdenProduccion`),
  KEY `detalle_orden_idalimento_foreign` (`idAlimento`),
  CONSTRAINT `detalle_orden_idalimento_foreign` FOREIGN KEY (`idAlimento`) REFERENCES `alimento` (`id`),
  CONSTRAINT `detalle_orden_idordenproduccion_foreign` FOREIGN KEY (`idOrdenProduccion`) REFERENCES `orden_produccion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_orden`
--

LOCK TABLES `detalle_orden` WRITE;
/*!40000 ALTER TABLE `detalle_orden` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_producto`
--

DROP TABLE IF EXISTS `detalle_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProductoSanitario` int(10) unsigned NOT NULL,
  `idProcesoSanitario` int(10) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_producto_idproductosanitario_foreign` (`idProductoSanitario`),
  KEY `detalle_producto_idprocesosanitario_foreign` (`idProcesoSanitario`),
  CONSTRAINT `detalle_producto_idprocesosanitario_foreign` FOREIGN KEY (`idProcesoSanitario`) REFERENCES `proceso_sanitario` (`id`),
  CONSTRAINT `detalle_producto_idproductosanitario_foreign` FOREIGN KEY (`idProductoSanitario`) REFERENCES `insumo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_producto`
--

LOCK TABLES `detalle_producto` WRITE;
/*!40000 ALTER TABLE `detalle_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_sanitizacion`
--

DROP TABLE IF EXISTS `detalle_sanitizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_sanitizacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProcesoSanitario` int(10) unsigned NOT NULL,
  `idRegistroSanitizacion` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_sanitizacion_idprocesosanitario_foreign` (`idProcesoSanitario`),
  KEY `detalle_sanitizacion_idregistrosanitizacion_foreign` (`idRegistroSanitizacion`),
  CONSTRAINT `detalle_sanitizacion_idprocesosanitario_foreign` FOREIGN KEY (`idProcesoSanitario`) REFERENCES `proceso_sanitario` (`id`),
  CONSTRAINT `detalle_sanitizacion_idregistrosanitizacion_foreign` FOREIGN KEY (`idRegistroSanitizacion`) REFERENCES `registro_sanitizacion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_sanitizacion`
--

LOCK TABLES `detalle_sanitizacion` WRITE;
/*!40000 ALTER TABLE `detalle_sanitizacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_sanitizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dieta_alimenticia`
--

DROP TABLE IF EXISTS `dieta_alimenticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dieta_alimenticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidadAgua` double(8,2) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dieta_alimenticia`
--

LOCK TABLES `dieta_alimenticia` WRITE;
/*!40000 ALTER TABLE `dieta_alimenticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `dieta_alimenticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `idPlantaIncubacion` int(10) unsigned NOT NULL,
  `tipo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipo_idplantaincubacion_foreign` (`idPlantaIncubacion`),
  CONSTRAINT `equipo_idplantaincubacion_foreign` FOREIGN KEY (`idPlantaIncubacion`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,'Prueba',100,5,'Incubadora','123456','1',NULL,NULL),(2,'Prueba',100,5,'Nacedora','123456','1',NULL,NULL);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapa`
--

DROP TABLE IF EXISTS `etapa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etapa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa`
--

LOCK TABLES `etapa` WRITE;
/*!40000 ALTER TABLE `etapa` DISABLE KEYS */;
INSERT INTO `etapa` VALUES (1,'Etapa de Crianza','123456','1','2017-05-31 21:08:39','2017-05-31 21:08:39'),(2,'Etapa de Ciclo Reproductivo','123456','1','2017-05-31 21:08:45','2017-05-31 21:08:45');
/*!40000 ALTER TABLE `etapa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapa_incubacion`
--

DROP TABLE IF EXISTS `etapa_incubacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etapa_incubacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa_incubacion`
--

LOCK TABLES `etapa_incubacion` WRITE;
/*!40000 ALTER TABLE `etapa_incubacion` DISABLE KEYS */;
INSERT INTO `etapa_incubacion` VALUES (1,'Etapa de Incubacion','123456','1','2017-05-31 21:08:54','2017-05-31 21:08:54'),(2,'Etapa de Nacedora','123456','1','2017-05-31 21:09:00','2017-05-31 21:09:00');
/*!40000 ALTER TABLE `etapa_incubacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nit` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `montoTotal` double(8,2) NOT NULL,
  `idCliente` int(10) unsigned NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `factura_idcliente_foreign` (`idCliente`),
  KEY `factura_idempleado_foreign` (`idEmpleado`),
  CONSTRAINT `factura_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `persona` (`id`),
  CONSTRAINT `factura_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES (1,987465,'sergio frv','2017-06-02 15:17:44',173.00,1,3,'123456','activa','2017-06-02 15:17:44','2017-06-02 15:17:44'),(2,987545,'sergio frv','2017-06-02 15:26:20',331.00,1,3,'123456','activa','2017-06-02 15:26:20','2017-06-02 15:26:20'),(3,654987,'cesar Garcia','2017-06-02 15:46:37',361.00,1,3,'123456','activa','2017-06-02 15:46:37','2017-06-02 15:46:37');
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `granja`
--

DROP TABLE IF EXISTS `granja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `granja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `granja`
--

LOCK TABLES `granja` WRITE;
/*!40000 ALTER TABLE `granja` DISABLE KEYS */;
INSERT INTO `granja` VALUES (1,'Ariva','Engorde','123456','1',NULL,NULL),(2,'Abajo','Reproductora','123456','1',NULL,NULL),(3,'Medio','Reproductora','123456','1',NULL,NULL),(4,'Medio','Incubacion','123456','1',NULL,NULL);
/*!40000 ALTER TABLE `granja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infraestructura`
--

DROP TABLE IF EXISTS `infraestructura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infraestructura` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `capacidad` int(11) NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGranja` int(10) unsigned NOT NULL,
  `idEmpresa` int(10) unsigned NOT NULL,
  `cantidadHuevosAlmacenados` int(11) DEFAULT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `infraestructura_idgranja_foreign` (`idGranja`),
  CONSTRAINT `infraestructura_idgranja_foreign` FOREIGN KEY (`idGranja`) REFERENCES `granja` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infraestructura`
--

LOCK TABLES `infraestructura` WRITE;
/*!40000 ALTER TABLE `infraestructura` DISABLE KEYS */;
INSERT INTO `infraestructura` VALUES (1,1000,'Disponible','Galpon',1,123456,NULL,'1',NULL,NULL),(2,1000,'Disponible','Galpon',2,123456,NULL,'1',NULL,NULL),(3,1000,'Disponible','Galpon',3,123456,NULL,'1',NULL,NULL),(4,1000,'Disponible','Galpon',1,123456,NULL,'1',NULL,NULL),(5,1000,'Disponible','Planta de Incubacion',4,123456,300,'1',NULL,NULL);
/*!40000 ALTER TABLE `infraestructura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingreso_huevo_incubable`
--

DROP TABLE IF EXISTS `ingreso_huevo_incubable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingreso_huevo_incubable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idReporteDiario` int(10) unsigned NOT NULL,
  `idPlantaIncubacion` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ingreso_huevo_incubable_idreportediario_foreign` (`idReporteDiario`),
  KEY `ingreso_huevo_incubable_idplantaincubacion_foreign` (`idPlantaIncubacion`),
  CONSTRAINT `ingreso_huevo_incubable_idplantaincubacion_foreign` FOREIGN KEY (`idPlantaIncubacion`) REFERENCES `infraestructura` (`id`),
  CONSTRAINT `ingreso_huevo_incubable_idreportediario_foreign` FOREIGN KEY (`idReporteDiario`) REFERENCES `reporte_diario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingreso_huevo_incubable`
--

LOCK TABLES `ingreso_huevo_incubable` WRITE;
/*!40000 ALTER TABLE `ingreso_huevo_incubable` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingreso_huevo_incubable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insumo`
--

DROP TABLE IF EXISTS `insumo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insumo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidadTotal` int(11) NOT NULL,
  `tipo` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipoInsumo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUnidadMedida` int(10) unsigned DEFAULT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `insumo_idunidadmedida_foreign` (`idUnidadMedida`),
  CONSTRAINT `insumo_idunidadmedida_foreign` FOREIGN KEY (`idUnidadMedida`) REFERENCES `unidad_medida` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumo`
--

LOCK TABLES `insumo` WRITE;
/*!40000 ALTER TABLE `insumo` DISABLE KEYS */;
/*!40000 ALTER TABLE `insumo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lote_huevo_incubable`
--

DROP TABLE IF EXISTS `lote_huevo_incubable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lote_huevo_incubable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `idPlantaIncubacion` int(10) unsigned NOT NULL,
  `tipoLote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lote_huevo_incubable_idplantaincubacion_foreign` (`idPlantaIncubacion`),
  CONSTRAINT `lote_huevo_incubable_idplantaincubacion_foreign` FOREIGN KEY (`idPlantaIncubacion`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lote_huevo_incubable`
--

LOCK TABLES `lote_huevo_incubable` WRITE;
/*!40000 ALTER TABLE `lote_huevo_incubable` DISABLE KEYS */;
INSERT INTO `lote_huevo_incubable` VALUES (1,0,5,'Ponedora','123456','Inactivo','2017-05-31 23:20:20','2017-06-04 17:41:39'),(2,300,5,'Ponedora','123456','Inactivo','2017-06-01 12:13:37','2017-06-04 17:50:20'),(3,300,5,'Engorde','123456','Inactivo','2017-06-01 12:13:45','2017-06-04 18:02:49'),(4,300,5,'Reproductora','123456','Inactivo','2017-06-01 12:29:24','2017-06-04 18:04:55'),(5,300,5,'Reproductora','123456','Activo','2017-06-01 12:30:06','2017-06-01 12:30:06'),(6,300,5,'Engorde','123456','Activo','2017-06-01 12:39:08','2017-06-01 12:39:08');
/*!40000 ALTER TABLE `lote_huevo_incubable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2014_10_12_100001_create_modulo_table',1),(3,'2014_10_12_100002_create_caso_uso_table',1),(4,'2014_10_12_100003_create_cargo_table',1),(5,'2014_10_12_100004_create_privilegio_cargo_table',1),(6,'2014_10_12_100005_create_casop_cargo_table',1),(7,'2014_10_12_100006_create_persona_table',1),(8,'2014_10_12_100007_create_telefono_table',1),(9,'2014_10_12_100008_create_users_table',1),(10,'2014_10_12_100009_create_privilegio_usuario_table',1),(11,'2014_10_12_100010_create_casop_usuario_table',1),(12,'2014_10_12_100011_create_bitacora_table',1),(13,'2014_10_12_100012_create_accion_table',1),(14,'2014_10_12_100013_create_orden_produccion_table',1),(15,'2014_10_12_100014_create_alimento_table',1),(16,'2014_10_12_100015_create_detalle_orden_table',1),(17,'2014_10_12_100016_create_unidad_medida_table',1),(18,'2014_10_12_100019_create_registro_compra_tabla',1),(19,'2014_10_12_100020_create_insumo_table',1),(20,'2014_10_12_100021_create_detalle_compra_tabla',1),(21,'2014_10_12_100022_create_composicion_table',1),(22,'2014_10_12_100023_create_dieta_alimenticia_table',1),(23,'2014_10_12_100024_create_detalle_alimentacion_table',1),(24,'2014_10_12_100025_create_parvada_table',1),(25,'2014_10_12_100026_create_adquisicion_parvada_table',1),(26,'2014_10_12_100027_create_etapa_table',1),(27,'2014_10_12_100028_create_reporte_diario_table',1),(28,'2014_10_12_100029_create_granja_table',1),(29,'2014_10_12_100030_create_infraestructura_table',1),(30,'2014_10_12_100031_create_traspaso_parvada_table',1),(31,'2014_10_12_100032_create_bateria_table',1),(32,'2014_10_12_100033_create_proceso_sanitario_table',1),(33,'2014_10_12_100034_create_detalle_producto_table',1),(34,'2014_10_12_100035_create_registro_sanitizacion_table',1),(35,'2014_10_12_100036_create_detalle_sanitizacion_table',1),(36,'2014_10_12_100037_create_lote_huevo_incubable_table',1),(37,'2014_10_12_100038_create_ingreso_huevo_incubable_table',1),(38,'2014_10_12_100039_create_reporte_medicacion_table',1),(39,'2014_10_12_100040_create_detalle_medicacion_table',1),(40,'2014_10_12_100041_create_equipo_table',1),(41,'2014_10_12_100042_create_etapa_incubacion_table',1),(42,'2014_10_12_100043_create_traspaso_huevo_table',1),(43,'2014_10_12_100044_create_reporte_huevo_table',1),(44,'2014_10_12_100045_create_factura_table',1),(45,'2014_10_12_100046_create_categoria_table',1),(46,'2014_10_12_100047_create_tipo_table',1),(47,'2014_10_12_100048_create_producto_venta_table',1),(48,'2017_05_02_220855_create_detalle_factura_table',1),(49,'2017_05_08_235750_create_config_table',1),(50,'2017_05_25_213856_create_backup_tabla',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (1,'seguridad','0','1',NULL,NULL),(2,'compra','0','1',NULL,NULL),(3,'venta','0','1',NULL,NULL),(4,'infraestructura','0','1',NULL,NULL),(5,'reporte','0','1',NULL,NULL),(6,'procesos','0','1',NULL,NULL);
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_produccion`
--

DROP TABLE IF EXISTS `orden_produccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_produccion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orden_produccion_idempleado_foreign` (`idEmpleado`),
  CONSTRAINT `orden_produccion_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_produccion`
--

LOCK TABLES `orden_produccion` WRITE;
/*!40000 ALTER TABLE `orden_produccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_produccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parvada`
--

DROP TABLE IF EXISTS `parvada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parvada` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidadPollos` int(11) NOT NULL,
  `sexo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `pesoPromedio` double(8,2) NOT NULL,
  `caracteristicas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productividad` int(11) DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mortalidad` int(11) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parvada`
--

LOCK TABLES `parvada` WRITE;
/*!40000 ALTER TABLE `parvada` DISABLE KEYS */;
INSERT INTO `parvada` VALUES (8,4000,'Machos',5,5.50,'Ninguna',NULL,'Engorde',0,'123456','Inactivo','2017-06-01 12:22:19','2017-06-04 16:28:42'),(9,1900,'Hembras',4,4.50,'Ninguna',0,'Ponedora',100,'123456','Inactivo','2017-06-01 12:22:55','2017-06-04 16:31:52'),(10,2500,'Hembras',4,2.30,'Ninguna',0,'Reproductora',0,'123456','Inactivo','2017-06-01 12:23:29','2017-06-04 16:37:21'),(11,1400,'Machos',5,2.90,'Ninguna',0,'Reproductora',50,'123456','Activo','2017-06-04 16:37:56','2017-06-04 16:37:56'),(12,2300,'Machos',5,2.50,'Ninguna',NULL,'Engorde',0,'123456','Activo','2017-06-04 17:49:30','2017-06-04 17:49:30'),(14,300,'Machos',5,5.50,'Proviniente de Nacedoras',0,'Reproductora',0,'123456','Activo','2017-06-04 18:04:56','2017-06-04 18:04:56'),(15,250,'Hembras',25,50.00,'pollitos para el tio kiki',0,'Ponedora',0,'1234567','Activo','2017-06-06 20:37:00','2017-06-06 20:37:00');
/*!40000 ALTER TABLE `parvada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ci` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombreEmpresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCargo` int(10) unsigned DEFAULT NULL,
  `tipo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_idcargo_foreign` (`idCargo`),
  CONSTRAINT `persona_idcargo_foreign` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,98754654,'Eduardo Luis','Caceres Gonzalo','Av. Pirai',NULL,NULL,NULL,NULL,NULL,NULL,'c','123456','1','2017-06-02 14:56:53','2017-06-02 14:56:53'),(2,465454,'Sergio Francoo','Ramirez Vasquez','Av. Centenario',NULL,NULL,NULL,NULL,NULL,NULL,'c','123456','1','2017-06-02 15:01:15','2017-06-04 07:00:57'),(3,654612,'Cesar','Garcia','Av. Pirai',NULL,NULL,NULL,NULL,NULL,1,'e','123456','1',NULL,NULL),(4,987546,'Jaime','Valdibieso G.','Av. Pirai',NULL,NULL,NULL,NULL,NULL,NULL,'c','123456','1','2017-06-04 06:57:33','2017-06-04 06:57:33'),(5,987545,'Daniel Oliver','Zambrana G.','Av. pirai.',NULL,NULL,'1996-06-06','2015-06-04','user.png',1,'e','123456','1','2017-06-04 07:13:35','2017-06-04 07:13:35'),(6,979845,'Pedro ','Garcia','Av. Bush.',NULL,NULL,NULL,NULL,NULL,NULL,'c','123456','1','2017-06-04 07:20:08','2017-06-04 07:20:08');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilegio_cargo`
--

DROP TABLE IF EXISTS `privilegio_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privilegio_cargo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idCargo` int(10) unsigned NOT NULL,
  `idModulo` int(10) unsigned NOT NULL,
  `permiso` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `privilegio_cargo_idcargo_foreign` (`idCargo`),
  KEY `privilegio_cargo_idmodulo_foreign` (`idModulo`),
  CONSTRAINT `privilegio_cargo_idcargo_foreign` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `privilegio_cargo_idmodulo_foreign` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegio_cargo`
--

LOCK TABLES `privilegio_cargo` WRITE;
/*!40000 ALTER TABLE `privilegio_cargo` DISABLE KEYS */;
INSERT INTO `privilegio_cargo` VALUES (1,1,1,'0','123456','1','2017-06-04 07:11:00','2017-06-04 07:11:00'),(2,1,2,'0','123456','1','2017-06-04 07:11:00','2017-06-04 07:11:00'),(3,1,3,'0','123456','1','2017-06-04 07:11:00','2017-06-04 07:11:00'),(4,1,4,'0','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(5,1,5,'0','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01'),(6,1,6,'0','123456','1','2017-06-04 07:11:01','2017-06-04 07:11:01');
/*!40000 ALTER TABLE `privilegio_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilegio_usuario`
--

DROP TABLE IF EXISTS `privilegio_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privilegio_usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) unsigned NOT NULL,
  `idModulo` int(10) unsigned NOT NULL,
  `permiso` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `privilegio_usuario_idusuario_foreign` (`idUsuario`),
  KEY `privilegio_usuario_idmodulo_foreign` (`idModulo`),
  CONSTRAINT `privilegio_usuario_idmodulo_foreign` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`id`),
  CONSTRAINT `privilegio_usuario_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegio_usuario`
--

LOCK TABLES `privilegio_usuario` WRITE;
/*!40000 ALTER TABLE `privilegio_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilegio_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proceso_sanitario`
--

DROP TABLE IF EXISTS `proceso_sanitario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proceso_sanitario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proceso_sanitario`
--

LOCK TABLES `proceso_sanitario` WRITE;
/*!40000 ALTER TABLE `proceso_sanitario` DISABLE KEYS */;
/*!40000 ALTER TABLE `proceso_sanitario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_venta`
--

DROP TABLE IF EXISTS `producto_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto_venta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precioUnitario` double(8,2) NOT NULL,
  `idCategoria` int(10) unsigned DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `sexo` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pesoPromedio` double(8,2) DEFAULT NULL,
  `productividad` int(11) DEFAULT NULL,
  `caracteristicas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idTipo` int(10) unsigned DEFAULT NULL,
  `tipo` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producto_venta_idcategoria_foreign` (`idCategoria`),
  KEY `producto_venta_idtipo_foreign` (`idTipo`),
  CONSTRAINT `producto_venta_idcategoria_foreign` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `producto_venta_idtipo_foreign` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_venta`
--

LOCK TABLES `producto_venta` WRITE;
/*!40000 ALTER TABLE `producto_venta` DISABLE KEYS */;
INSERT INTO `producto_venta` VALUES (1,'Pollos A','uno.jpg',4000,25.90,NULL,30,'Machos',4.50,NULL,'Ninguna',1,'pollo','123456','1','2017-06-02 14:29:05','2017-06-04 16:28:42'),(2,'Pollos B','dos.jpg',1800,40.60,NULL,40,'Machos',10.20,NULL,'Ninguna',2,'pollo','123456','1','2017-06-02 14:35:16','2017-06-04 16:31:52'),(3,'Huevo A','11.jpg',0,10.50,1,NULL,NULL,NULL,NULL,NULL,NULL,'huevo','123456','1','2017-06-02 16:04:55','2017-06-02 16:04:55'),(4,'Pollos C','tres.jpg',2500,23.30,NULL,5,'Machos',6.50,NULL,'Ninguna',3,'pollo','123456','1','2017-06-04 08:34:34','2017-06-04 16:37:21');
/*!40000 ALTER TABLE `producto_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrar_compra`
--

DROP TABLE IF EXISTS `registrar_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrar_compra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idProveedor` int(10) unsigned NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registrar_compra_idempleado_foreign` (`idEmpleado`),
  KEY `registrar_compra_idproveedor_foreign` (`idProveedor`),
  CONSTRAINT `registrar_compra_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`),
  CONSTRAINT `registrar_compra_idproveedor_foreign` FOREIGN KEY (`idProveedor`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrar_compra`
--

LOCK TABLES `registrar_compra` WRITE;
/*!40000 ALTER TABLE `registrar_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrar_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro_sanitizacion`
--

DROP TABLE IF EXISTS `registro_sanitizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro_sanitizacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idInfraestructura` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_sanitizacion_idinfraestructura_foreign` (`idInfraestructura`),
  CONSTRAINT `registro_sanitizacion_idinfraestructura_foreign` FOREIGN KEY (`idInfraestructura`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro_sanitizacion`
--

LOCK TABLES `registro_sanitizacion` WRITE;
/*!40000 ALTER TABLE `registro_sanitizacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `registro_sanitizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte_diario`
--

DROP TABLE IF EXISTS `reporte_diario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_diario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `mortalidad` int(11) NOT NULL,
  `cantidadHuevos` int(11) NOT NULL,
  `pesoPromedio` double(8,2) NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idDietaAlimenticia` int(10) unsigned NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idEtapa` int(10) unsigned NOT NULL,
  `idParvada` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reporte_diario_iddietaalimenticia_foreign` (`idDietaAlimenticia`),
  KEY `reporte_diario_idempleado_foreign` (`idEmpleado`),
  KEY `reporte_diario_idetapa_foreign` (`idEtapa`),
  KEY `reporte_diario_idparvada_foreign` (`idParvada`),
  CONSTRAINT `reporte_diario_iddietaalimenticia_foreign` FOREIGN KEY (`idDietaAlimenticia`) REFERENCES `dieta_alimenticia` (`id`),
  CONSTRAINT `reporte_diario_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`),
  CONSTRAINT `reporte_diario_idetapa_foreign` FOREIGN KEY (`idEtapa`) REFERENCES `etapa` (`id`),
  CONSTRAINT `reporte_diario_idparvada_foreign` FOREIGN KEY (`idParvada`) REFERENCES `parvada` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_diario`
--

LOCK TABLES `reporte_diario` WRITE;
/*!40000 ALTER TABLE `reporte_diario` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_diario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte_huevo`
--

DROP TABLE IF EXISTS `reporte_huevo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_huevo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `mortalidad` int(11) NOT NULL,
  `cantidadMachos` int(10) unsigned NOT NULL,
  `cantidadHembras` int(10) unsigned NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idLoteHuevoIncubable` int(10) unsigned NOT NULL,
  `idEtapaIncubacion` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reporte_huevo_idempleado_foreign` (`idEmpleado`),
  KEY `reporte_huevo_idlotehuevoincubable_foreign` (`idLoteHuevoIncubable`),
  KEY `reporte_huevo_idetapaincubacion_foreign` (`idEtapaIncubacion`),
  CONSTRAINT `reporte_huevo_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`),
  CONSTRAINT `reporte_huevo_idetapaincubacion_foreign` FOREIGN KEY (`idEtapaIncubacion`) REFERENCES `etapa_incubacion` (`id`),
  CONSTRAINT `reporte_huevo_idlotehuevoincubable_foreign` FOREIGN KEY (`idLoteHuevoIncubable`) REFERENCES `lote_huevo_incubable` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_huevo`
--

LOCK TABLES `reporte_huevo` WRITE;
/*!40000 ALTER TABLE `reporte_huevo` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_huevo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte_medicacion`
--

DROP TABLE IF EXISTS `reporte_medicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_medicacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fechaMedicacion` date NOT NULL,
  `idEmpleado` int(10) unsigned NOT NULL,
  `idParvada` int(10) unsigned NOT NULL,
  `idLoteHuevoIncubable` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reporte_medicacion_idempleado_foreign` (`idEmpleado`),
  KEY `reporte_medicacion_idparvada_foreign` (`idParvada`),
  KEY `reporte_medicacion_idlotehuevoincubable_foreign` (`idLoteHuevoIncubable`),
  CONSTRAINT `reporte_medicacion_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`),
  CONSTRAINT `reporte_medicacion_idlotehuevoincubable_foreign` FOREIGN KEY (`idLoteHuevoIncubable`) REFERENCES `lote_huevo_incubable` (`id`),
  CONSTRAINT `reporte_medicacion_idparvada_foreign` FOREIGN KEY (`idParvada`) REFERENCES `parvada` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_medicacion`
--

LOCK TABLES `reporte_medicacion` WRITE;
/*!40000 ALTER TABLE `reporte_medicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_medicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` int(10) unsigned NOT NULL,
  `idPersona` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `telefono_idpersona_foreign` (`idPersona`),
  CONSTRAINT `telefono_idpersona_foreign` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
INSERT INTO `telefono` VALUES (1,98745456,5,'123456','1','2017-06-04 07:13:35','2017-06-04 07:13:35');
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Pollo Tipo Engorde','123456','1','2017-06-01 13:04:58','2017-06-01 13:04:58'),(2,'Pollo Tipo Ponedora','123456','1','2017-06-01 13:07:44','2017-06-01 13:07:44'),(3,'Pollo Tipo Reproductora','123456','1','2017-06-02 14:01:43','2017-06-02 14:01:43');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traspaso_huevo`
--

DROP TABLE IF EXISTS `traspaso_huevo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traspaso_huevo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idLoteHuevoIncubable` int(10) unsigned NOT NULL,
  `idEtapaIncubacion` int(10) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idEquipo` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `traspaso_huevo_idlotehuevoincubable_foreign` (`idLoteHuevoIncubable`),
  KEY `traspaso_huevo_idetapaincubacion_foreign` (`idEtapaIncubacion`),
  KEY `traspaso_huevo_idequipo_foreign` (`idEquipo`),
  CONSTRAINT `traspaso_huevo_idequipo_foreign` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`id`),
  CONSTRAINT `traspaso_huevo_idetapaincubacion_foreign` FOREIGN KEY (`idEtapaIncubacion`) REFERENCES `etapa_incubacion` (`id`),
  CONSTRAINT `traspaso_huevo_idlotehuevoincubable_foreign` FOREIGN KEY (`idLoteHuevoIncubable`) REFERENCES `lote_huevo_incubable` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traspaso_huevo`
--

LOCK TABLES `traspaso_huevo` WRITE;
/*!40000 ALTER TABLE `traspaso_huevo` DISABLE KEYS */;
INSERT INTO `traspaso_huevo` VALUES (1,1,1,0,'2017-05-31',1,'123456','1','2017-05-31 23:20:20','2017-05-31 23:20:20'),(2,2,1,300,'2017-06-01',1,'123456','1','2017-06-01 12:13:37','2017-06-01 12:13:37'),(3,3,1,300,'2017-06-01',1,'123456','1','2017-06-01 12:13:45','2017-06-01 12:13:45'),(4,2,2,300,'2017-06-01',2,'123456','1','2017-06-01 12:15:37','2017-06-01 12:15:37'),(5,4,1,300,'2017-06-01',1,'123456','1','2017-06-01 12:29:25','2017-06-01 12:29:25'),(6,5,1,300,'2017-06-01',1,'123456','1','2017-06-01 12:30:06','2017-06-01 12:30:06'),(7,6,1,300,'2017-06-01',1,'123456','1','2017-06-01 12:39:08','2017-06-01 12:39:08'),(8,1,2,0,'2017-06-01',2,'123456','1','2017-06-01 12:42:53','2017-06-01 12:42:53'),(9,4,2,300,'2017-06-04',2,'123456','1','2017-06-04 17:23:28','2017-06-04 17:23:28'),(10,3,2,300,'2017-06-04',2,'123456','1','2017-06-04 17:38:39','2017-06-04 17:38:39');
/*!40000 ALTER TABLE `traspaso_huevo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traspaso_parvada`
--

DROP TABLE IF EXISTS `traspaso_parvada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traspaso_parvada` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idGalpon` int(10) unsigned DEFAULT NULL,
  `idParvada` int(11) DEFAULT NULL,
  `idEtapa` int(11) DEFAULT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `traspaso_parvada_idgalpon_foreign` (`idGalpon`),
  CONSTRAINT `traspaso_parvada_idgalpon_foreign` FOREIGN KEY (`idGalpon`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traspaso_parvada`
--

LOCK TABLES `traspaso_parvada` WRITE;
/*!40000 ALTER TABLE `traspaso_parvada` DISABLE KEYS */;
INSERT INTO `traspaso_parvada` VALUES (6,'2017-06-01',4000,4,8,1,'123456','1','2017-06-01 12:22:19','2017-06-01 12:22:19'),(7,'2017-06-01',1900,2,9,1,'123456','1','2017-06-01 12:22:55','2017-06-01 12:22:55'),(8,'2017-06-01',2500,3,10,1,'123456','1','2017-06-01 12:23:29','2017-06-01 12:23:29'),(9,'2017-06-01',4000,1,8,2,'123456','1','2017-06-01 12:24:27','2017-06-01 12:24:27'),(10,'2017-06-01',2500,3,10,2,'123456','1','2017-06-01 12:35:52','2017-06-01 12:35:52'),(11,'2017-06-01',1900,1,9,2,'123456','1','2017-06-01 12:38:13','2017-06-01 12:38:13'),(12,'2017-06-04',1400,3,11,1,'123456','1','2017-06-04 16:37:56','2017-06-04 16:37:56'),(13,'2017-06-04',1350,3,11,2,'123456','1','2017-06-04 16:59:59','2017-06-04 16:59:59'),(14,'2017-06-04',2300,4,12,1,'123456','1','2017-06-04 17:49:30','2017-06-04 17:49:30'),(15,'2017-06-04',300,NULL,14,1,'123456','1','2017-06-04 18:04:56','2017-06-04 18:04:56'),(16,'2017-06-06',250,2,15,1,'1234567','1','2017-06-06 20:37:01','2017-06-06 20:37:01');
/*!40000 ALTER TABLE `traspaso_parvada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad_medida`
--

DROP TABLE IF EXISTS `unidad_medida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad_medida` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad_medida`
--

LOCK TABLES `unidad_medida` WRITE;
/*!40000 ALTER TABLE `unidad_medida` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidad_medida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(10) unsigned DEFAULT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipoUser` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `privilegio` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_idempleado_foreign` (`idEmpleado`),
  CONSTRAINT `users_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sergio r','user.png','sergiofrv20@gmail.com','$2y$10$Dr30qhoX5Agbk1isOlOnXuuTsBGS5Jt4oNXn8yjR2BAlZxBteIdXq','1',NULL,'123456','a',NULL,'1','16XF16JlaU3X4C081grxXyfOGMd6rZ0EdNCkd4eXuHJe4YfrkOPRjtnewVle','2017-05-31 21:08:08','2017-06-06 20:31:06'),(2,'natalia Oviedo de Escalante','user.png','natalia@hotmail.com','$2y$10$l6kNE.3/wiRkvFLHffDOxun.voNzB/ye9iF76mzCMrc.LrtNh2Q.e','1',NULL,'1234567','a',NULL,'1',NULL,'2017-06-06 20:33:12','2017-06-06 20:33:12');
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

-- Dump completed on 2017-06-06 16:42:38