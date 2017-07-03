-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: sistema_avicola
-- ------------------------------------------------------
-- Server version	5.6.26

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
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion`
--

LOCK TABLES `accion` WRITE;
/*!40000 ALTER TABLE `accion` DISABLE KEYS */;
INSERT INTO `accion` VALUES (1,'2017-06-17','10:11:59','Creo una Cuenta, LogIn',NULL,NULL,1,'123456','1','2017-06-17 14:11:59','2017-06-17 14:11:59'),(2,'2017-06-17','10:12:32','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:12:32','2017-06-17 14:12:32'),(3,'2017-06-17','10:13:01','Creo un nuevo Cargo','cargo',1,1,'123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(4,'2017-06-17','10:13:03','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:13:03','2017-06-17 14:13:03'),(5,'2017-06-17','10:13:23','Creo un nuevo Cargo','cargo',2,1,'123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(6,'2017-06-17','10:13:25','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:13:25','2017-06-17 14:13:25'),(7,'2017-06-17','10:13:52','Creo un nuevo Cargo','cargo',3,1,'123456','1','2017-06-17 14:13:52','2017-06-17 14:13:52'),(8,'2017-06-17','10:13:54','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(9,'2017-06-17','10:14:09','Creo un nuevo Cargo','cargo',4,1,'123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(10,'2017-06-17','10:14:11','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:14:11','2017-06-17 14:14:11'),(11,'2017-06-17','10:14:50','Creo un nuevo Cargo','cargo',5,1,'123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(12,'2017-06-17','10:14:52','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:14:52','2017-06-17 14:14:52'),(13,'2017-06-17','10:15:27','Creo un nuevo Cargo','cargo',6,1,'123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(14,'2017-06-17','10:15:29','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(15,'2017-06-17','10:15:46','Ingreso a la pagina de Editar Cargo','cargo',6,1,'123456','1','2017-06-17 14:15:46','2017-06-17 14:15:46'),(16,'2017-06-17','10:15:57','Actualizo datos de un Cargo','cargo',6,1,'123456','1','2017-06-17 14:15:57','2017-06-17 14:15:57'),(17,'2017-06-17','10:15:58','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:15:58','2017-06-17 14:15:58'),(18,'2017-06-17','10:16:35','Creo un nuevo Cargo','cargo',7,1,'123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(19,'2017-06-17','10:16:38','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:16:38','2017-06-17 14:16:38'),(20,'2017-06-17','10:16:59','Creo un nuevo Cargo','cargo',8,1,'123456','1','2017-06-17 14:16:59','2017-06-17 14:16:59'),(21,'2017-06-17','10:17:02','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:17:02','2017-06-17 14:17:02'),(22,'2017-06-17','10:17:26','Creo un nuevo Cargo','cargo',9,1,'123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(23,'2017-06-17','10:17:28','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:17:28','2017-06-17 14:17:28'),(24,'2017-06-17','10:17:48','Creo un nuevo Cargo','cargo',10,1,'123456','1','2017-06-17 14:17:48','2017-06-17 14:17:48'),(25,'2017-06-17','10:17:50','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(26,'2017-06-17','10:20:21','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:20:21','2017-06-17 14:20:21'),(27,'2017-06-17','10:23:43','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:23:43','2017-06-17 14:23:43'),(28,'2017-06-17','10:23:47','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:23:47','2017-06-17 14:23:47'),(29,'2017-06-17','10:23:52','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:23:52','2017-06-17 14:23:52'),(30,'2017-06-17','10:58:07','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:58:07','2017-06-17 14:58:07'),(31,'2017-06-17','10:58:21','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:58:21','2017-06-17 14:58:21'),(32,'2017-06-17','10:58:42','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 14:58:42','2017-06-17 14:58:42'),(33,'2017-06-17','11:32:44','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 15:32:44','2017-06-17 15:32:44'),(34,'2017-06-17','11:37:07','Ingreso a la pagina de Cargo',NULL,NULL,1,'123456','1','2017-06-17 15:37:07','2017-06-17 15:37:07'),(35,'2017-06-17','11:42:26','Ingreso a la pagina de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:42:26','2017-06-17 15:42:26'),(36,'2017-06-17','11:43:57','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:43:57','2017-06-17 15:43:57'),(37,'2017-06-17','11:45:03','Ingreso a la pagina de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:45:03','2017-06-17 15:45:03'),(38,'2017-06-17','11:45:52','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:45:52','2017-06-17 15:45:52'),(39,'2017-06-17','11:50:53','Registro: Empleado','persona',2,1,'123456','1','2017-06-17 15:50:53','2017-06-17 15:50:53'),(40,'2017-06-17','11:50:54','Ingreso a la pagina de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:50:54','2017-06-17 15:50:54'),(41,'2017-06-17','11:53:58','Ingreso: Edicion de empleado.',NULL,NULL,1,'123456','1','2017-06-17 15:53:58','2017-06-17 15:53:58'),(42,'2017-06-17','11:54:19','Ingreso: Edicion de empleado.',NULL,NULL,1,'123456','1','2017-06-17 15:54:19','2017-06-17 15:54:19'),(43,'2017-06-17','11:54:37','Edicion: Empleado','persona',1,1,'123456','1','2017-06-17 15:54:37','2017-06-17 15:54:37'),(44,'2017-06-17','11:54:37','Ingreso a la pagina de Empleados.',NULL,NULL,1,'123456','1','2017-06-17 15:54:37','2017-06-17 15:54:37'),(45,'2017-06-17','12:18:21','LogOut',NULL,NULL,1,'123456','1','2017-06-17 16:18:21','2017-06-17 16:18:21'),(46,'2017-06-17','20:30:54','LogIn',NULL,NULL,2,'123456','1','2017-06-18 00:30:54','2017-06-18 00:30:54'),(47,'2017-06-17','21:23:06','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:23:06','2017-06-18 01:23:06'),(48,'2017-06-17','21:24:19','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:24:19','2017-06-18 01:24:19'),(49,'2017-06-17','21:25:09','Registro: Empleado','persona',3,2,'123456','1','2017-06-18 01:25:09','2017-06-18 01:25:09'),(50,'2017-06-17','21:25:10','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:25:10','2017-06-18 01:25:10'),(51,'2017-06-17','21:25:29','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:25:29','2017-06-18 01:25:29'),(52,'2017-06-17','21:26:01','Registro: Empleado','persona',4,2,'123456','1','2017-06-18 01:26:01','2017-06-18 01:26:01'),(53,'2017-06-17','21:26:02','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:26:02','2017-06-18 01:26:02'),(54,'2017-06-17','21:26:11','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:26:11','2017-06-18 01:26:11'),(55,'2017-06-17','21:26:58','Registro: Empleado','persona',5,2,'123456','1','2017-06-18 01:26:58','2017-06-18 01:26:58'),(56,'2017-06-17','21:26:58','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:26:58','2017-06-18 01:26:58'),(57,'2017-06-17','21:27:07','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:27:07','2017-06-18 01:27:07'),(58,'2017-06-17','21:27:45','Registro: Empleado','persona',6,2,'123456','1','2017-06-18 01:27:45','2017-06-18 01:27:45'),(59,'2017-06-17','21:27:46','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:27:46','2017-06-18 01:27:46'),(60,'2017-06-17','21:29:07','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:29:07','2017-06-18 01:29:07'),(61,'2017-06-17','21:29:42','Registro: Empleado','persona',7,2,'123456','1','2017-06-18 01:29:42','2017-06-18 01:29:42'),(62,'2017-06-17','21:29:43','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:29:43','2017-06-18 01:29:43'),(63,'2017-06-17','21:30:13','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:30:13','2017-06-18 01:30:13'),(64,'2017-06-17','21:30:51','Registro: Empleado','persona',8,2,'123456','1','2017-06-18 01:30:51','2017-06-18 01:30:51'),(65,'2017-06-17','21:30:51','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:30:51','2017-06-18 01:30:51'),(66,'2017-06-17','21:31:30','Ingreso a la pagina de Registro de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:31:30','2017-06-18 01:31:30'),(67,'2017-06-17','21:32:07','Registro: Empleado','persona',9,2,'123456','1','2017-06-18 01:32:07','2017-06-18 01:32:07'),(68,'2017-06-17','21:32:08','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:32:08','2017-06-18 01:32:08'),(69,'2017-06-17','21:33:09','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:33:09','2017-06-18 01:33:09'),(70,'2017-06-17','21:34:08','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:34:08','2017-06-18 01:34:08'),(71,'2017-06-17','21:34:20','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:34:20','2017-06-18 01:34:20'),(72,'2017-06-17','21:35:14','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:35:14','2017-06-18 01:35:14'),(73,'2017-06-17','21:35:31','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:35:31','2017-06-18 01:35:31'),(74,'2017-06-17','21:35:34','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:35:34','2017-06-18 01:35:34'),(75,'2017-06-17','21:35:40','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:35:40','2017-06-18 01:35:40'),(76,'2017-06-17','21:35:44','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:35:44','2017-06-18 01:35:44'),(77,'2017-06-17','21:38:51','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:38:51','2017-06-18 01:38:51'),(78,'2017-06-17','21:39:18','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:39:18','2017-06-18 01:39:18'),(79,'2017-06-17','21:40:11','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 01:40:11','2017-06-18 01:40:11'),(80,'2017-06-17','22:02:30','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:02:30','2017-06-18 02:02:30'),(81,'2017-06-17','22:03:57','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:03:57','2017-06-18 02:03:57'),(82,'2017-06-17','22:05:02','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:05:02','2017-06-18 02:05:02'),(83,'2017-06-17','22:06:45','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:06:45','2017-06-18 02:06:45'),(84,'2017-06-17','22:07:47','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:07:47','2017-06-18 02:07:47'),(85,'2017-06-17','22:08:33','Ingreso: Indice de Empleados.',NULL,NULL,2,'123456','1','2017-06-18 02:08:33','2017-06-18 02:08:33'),(86,'2017-06-17','22:13:36','LogOut',NULL,NULL,2,'123456','1','2017-06-18 02:13:36','2017-06-18 02:13:36'),(87,'2017-06-18','11:00:08','LogIn',NULL,NULL,3,'123456','1','2017-06-18 15:00:08','2017-06-18 15:00:08'),(88,'2017-06-18','11:05:48','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:05:48','2017-06-18 15:05:48'),(89,'2017-06-18','11:05:52','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:05:52','2017-06-18 15:05:52'),(90,'2017-06-18','11:06:37','Registro: Usuario','persona',2,3,'123456','1','2017-06-18 15:06:37','2017-06-18 15:06:37'),(91,'2017-06-18','11:06:37','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:06:37','2017-06-18 15:06:37'),(92,'2017-06-18','11:09:57','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:09:57','2017-06-18 15:09:57'),(93,'2017-06-18','11:10:48','Registro: Usuario','persona',3,3,'123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(94,'2017-06-18','11:10:49','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:10:49','2017-06-18 15:10:49'),(95,'2017-06-18','11:10:52','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:10:52','2017-06-18 15:10:52'),(96,'2017-06-18','11:11:41','Registro: Usuario','persona',4,3,'123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(97,'2017-06-18','11:11:42','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:11:42','2017-06-18 15:11:42'),(98,'2017-06-18','11:11:45','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:11:45','2017-06-18 15:11:45'),(99,'2017-06-18','11:12:11','Registro: Usuario','persona',5,3,'123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(100,'2017-06-18','11:12:11','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(101,'2017-06-18','11:12:19','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:12:19','2017-06-18 15:12:19'),(102,'2017-06-18','11:13:02','Registro: Usuario','persona',6,3,'123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(103,'2017-06-18','11:13:03','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:13:03','2017-06-18 15:13:03'),(104,'2017-06-18','11:14:31','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:14:31','2017-06-18 15:14:31'),(105,'2017-06-18','11:14:57','Registro: Usuario','persona',7,3,'123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(106,'2017-06-18','11:14:58','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:14:58','2017-06-18 15:14:58'),(107,'2017-06-18','11:15:08','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:15:08','2017-06-18 15:15:08'),(108,'2017-06-18','11:16:24','Registro: Usuario','persona',8,3,'123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(109,'2017-06-18','11:16:24','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(110,'2017-06-18','11:16:32','Ingreso: Registro de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:16:32','2017-06-18 15:16:32'),(111,'2017-06-18','11:17:01','Registro: Usuario','persona',9,3,'123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(112,'2017-06-18','11:17:01','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(113,'2017-06-18','11:18:00','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:18:00','2017-06-18 15:18:00'),(114,'2017-06-18','11:18:20','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:18:20','2017-06-18 15:18:20'),(115,'2017-06-18','11:18:25','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:18:25','2017-06-18 15:18:25'),(116,'2017-06-18','11:35:45','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:35:45','2017-06-18 15:35:45'),(117,'2017-06-18','11:36:26','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 15:36:26','2017-06-18 15:36:26'),(118,'2017-06-18','12:44:42','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:44:42','2017-06-18 16:44:42'),(119,'2017-06-18','12:46:24','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:46:24','2017-06-18 16:46:24'),(120,'2017-06-18','12:48:50','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:48:50','2017-06-18 16:48:50'),(121,'2017-06-18','12:49:18','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:49:18','2017-06-18 16:49:18'),(122,'2017-06-18','12:49:59','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:49:59','2017-06-18 16:49:59'),(123,'2017-06-18','12:50:14','Ingreso: Indice de Usuarios.',NULL,NULL,3,'123456','1','2017-06-18 16:50:14','2017-06-18 16:50:14'),(124,'2017-06-18','12:51:01','Ingreso: Indice de Empleados.',NULL,NULL,3,'123456','1','2017-06-18 16:51:01','2017-06-18 16:51:01'),(125,'2017-06-18','12:51:06','Ingreso a la pagina de Cargo',NULL,NULL,3,'123456','1','2017-06-18 16:51:06','2017-06-18 16:51:06'),(126,'2017-06-18','12:51:28','Ingreso: Indice de Privilegios.',NULL,NULL,3,'123456','1','2017-06-18 16:51:28','2017-06-18 16:51:28'),(127,'2017-06-18','15:37:03','LogIn',NULL,NULL,4,'123456','1','2017-06-18 19:37:03','2017-06-18 19:37:03'),(128,'2017-06-18','15:37:07','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:37:07','2017-06-18 19:37:07'),(129,'2017-06-18','15:37:13','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:37:13','2017-06-18 19:37:13'),(130,'2017-06-18','15:37:17','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:37:17','2017-06-18 19:37:17'),(131,'2017-06-18','15:44:57','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:44:57','2017-06-18 19:44:57'),(132,'2017-06-18','15:45:37','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:45:37','2017-06-18 19:45:37'),(133,'2017-06-18','15:50:55','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:50:55','2017-06-18 19:50:55'),(134,'2017-06-18','15:56:51','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:56:51','2017-06-18 19:56:51'),(135,'2017-06-18','15:57:15','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 19:57:15','2017-06-18 19:57:15'),(136,'2017-06-18','16:03:09','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:03:09','2017-06-18 20:03:09'),(137,'2017-06-18','16:06:20','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:06:20','2017-06-18 20:06:20'),(138,'2017-06-18','16:10:33','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:10:33','2017-06-18 20:10:33'),(139,'2017-06-18','16:12:14','Ingreso a la pagina de Cargo',NULL,NULL,4,'123456','1','2017-06-18 20:12:14','2017-06-18 20:12:14'),(140,'2017-06-18','16:12:22','Ingreso a la pagina de Editar Cargo','cargo',4,4,'123456','1','2017-06-18 20:12:22','2017-06-18 20:12:22'),(141,'2017-06-18','16:12:30','Ingreso: Indice de Empleados.',NULL,NULL,4,'123456','1','2017-06-18 20:12:30','2017-06-18 20:12:30'),(142,'2017-06-18','16:12:39','Ingreso: Edicion de empleado.',NULL,NULL,4,'123456','1','2017-06-18 20:12:39','2017-06-18 20:12:39'),(143,'2017-06-18','16:12:50','Ingreso: Indice de Usuarios.',NULL,NULL,4,'123456','1','2017-06-18 20:12:50','2017-06-18 20:12:50'),(144,'2017-06-18','16:12:59','Ingreso: Edicion de Usuario.',NULL,NULL,4,'123456','1','2017-06-18 20:12:59','2017-06-18 20:12:59'),(145,'2017-06-18','16:13:04','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:13:04','2017-06-18 20:13:04'),(146,'2017-06-18','16:13:56','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:13:56','2017-06-18 20:13:56'),(147,'2017-06-18','16:15:42','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:15:42','2017-06-18 20:15:42'),(148,'2017-06-18','16:20:29','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:20:29','2017-06-18 20:20:29'),(149,'2017-06-18','16:21:52','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:21:52','2017-06-18 20:21:52'),(150,'2017-06-18','16:23:47','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:23:47','2017-06-18 20:23:47'),(151,'2017-06-18','16:26:21','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:26:21','2017-06-18 20:26:21'),(152,'2017-06-18','16:30:30','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:30:30','2017-06-18 20:30:30'),(153,'2017-06-18','16:55:02','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 20:55:02','2017-06-18 20:55:02'),(154,'2017-06-18','17:01:41','Ingreso: Indice de Usuarios.',NULL,NULL,4,'123456','1','2017-06-18 21:01:41','2017-06-18 21:01:41'),(155,'2017-06-18','17:01:57','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:01:57','2017-06-18 21:01:57'),(156,'2017-06-18','17:03:22','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:03:22','2017-06-18 21:03:22'),(157,'2017-06-18','17:11:07','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:11:07','2017-06-18 21:11:07'),(158,'2017-06-18','17:13:20','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:13:20','2017-06-18 21:13:20'),(159,'2017-06-18','17:14:12','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:14:12','2017-06-18 21:14:12'),(160,'2017-06-18','17:14:27','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:14:27','2017-06-18 21:14:27'),(161,'2017-06-18','17:16:03','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:16:03','2017-06-18 21:16:03'),(162,'2017-06-18','17:18:11','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:18:11','2017-06-18 21:18:11'),(163,'2017-06-18','17:21:27','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:21:27','2017-06-18 21:21:27'),(164,'2017-06-18','17:21:57','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:21:57','2017-06-18 21:21:57'),(165,'2017-06-18','17:22:24','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:22:24','2017-06-18 21:22:24'),(166,'2017-06-18','17:23:10','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:23:10','2017-06-18 21:23:10'),(167,'2017-06-18','17:38:00','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:38:00','2017-06-18 21:38:00'),(168,'2017-06-18','17:38:10','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:38:10','2017-06-18 21:38:10'),(169,'2017-06-18','17:38:25','Ingreso a la pagina de Cargo',NULL,NULL,4,'123456','1','2017-06-18 21:38:25','2017-06-18 21:38:25'),(170,'2017-06-18','17:38:54','Creo un nuevo Cargo','cargo',11,4,'123456','1','2017-06-18 21:38:54','2017-06-18 21:38:54'),(171,'2017-06-18','17:38:57','Ingreso a la pagina de Cargo',NULL,NULL,4,'123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(172,'2017-06-18','17:39:01','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:39:01','2017-06-18 21:39:01'),(173,'2017-06-18','17:40:06','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:40:06','2017-06-18 21:40:06'),(174,'2017-06-18','17:41:32','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:41:32','2017-06-18 21:41:32'),(175,'2017-06-18','17:42:07','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:42:07','2017-06-18 21:42:07'),(176,'2017-06-18','17:43:01','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:43:01','2017-06-18 21:43:01'),(177,'2017-06-18','17:43:42','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:43:42','2017-06-18 21:43:42'),(178,'2017-06-18','17:44:19','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:44:19','2017-06-18 21:44:19'),(179,'2017-06-18','17:44:40','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:44:40','2017-06-18 21:44:40'),(180,'2017-06-18','17:47:11','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:47:11','2017-06-18 21:47:11'),(181,'2017-06-18','17:47:37','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:47:37','2017-06-18 21:47:37'),(182,'2017-06-18','17:48:09','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:48:09','2017-06-18 21:48:09'),(183,'2017-06-18','17:53:16','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:53:16','2017-06-18 21:53:16'),(184,'2017-06-18','17:54:42','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:54:42','2017-06-18 21:54:42'),(185,'2017-06-18','17:55:17','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:55:17','2017-06-18 21:55:17'),(186,'2017-06-18','17:55:45','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:55:45','2017-06-18 21:55:45'),(187,'2017-06-18','17:56:09','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:56:09','2017-06-18 21:56:09'),(188,'2017-06-18','17:56:26','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:56:26','2017-06-18 21:56:26'),(189,'2017-06-18','17:57:28','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 21:57:28','2017-06-18 21:57:28'),(190,'2017-06-18','19:52:34','Ingreso: Indice de Privilegios.',NULL,NULL,4,'123456','1','2017-06-18 23:52:34','2017-06-18 23:52:34'),(191,'2017-06-18','21:07:41','Ingreso: Indice de Empleados.',NULL,NULL,4,'123456','1','2017-06-19 01:07:41','2017-06-19 01:07:41'),(192,'2017-06-18','21:10:03','Ingreso: Indice de Usuarios.',NULL,NULL,4,'123456','1','2017-06-19 01:10:03','2017-06-19 01:10:03'),(193,'2017-06-18','21:10:08','Ingreso: Registro de Usuarios.',NULL,NULL,4,'123456','1','2017-06-19 01:10:08','2017-06-19 01:10:08'),(194,'2017-06-18','22:10:05','LogOut',NULL,NULL,4,'123456','1','2017-06-19 02:10:05','2017-06-19 02:10:05'),(195,'2017-06-19','05:46:11','LogIn',NULL,NULL,5,'123456','1','2017-06-19 09:46:11','2017-06-19 09:46:11'),(196,'2017-06-19','05:46:17','Ingreso a la pagina de Cargo',NULL,NULL,5,'123456','1','2017-06-19 09:46:17','2017-06-19 09:46:17'),(197,'2017-06-19','05:46:22','Ingreso: Indice de Privilegios.',NULL,NULL,5,'123456','1','2017-06-19 09:46:22','2017-06-19 09:46:22'),(198,'2017-06-19','05:46:52','Ingreso: Indice de Usuarios.',NULL,NULL,5,'123456','1','2017-06-19 09:46:52','2017-06-19 09:46:52'),(199,'2017-06-19','05:47:16','Ingreso: Indice de Empleados.',NULL,NULL,5,'123456','1','2017-06-19 09:47:16','2017-06-19 09:47:16'),(200,'2017-06-19','05:48:04','Ingreso: Indice de Empleados.',NULL,NULL,5,'123456','1','2017-06-19 09:48:04','2017-06-19 09:48:04'),(201,'2017-06-19','05:48:10','Ingreso a la pagina de Cargo',NULL,NULL,5,'123456','1','2017-06-19 09:48:10','2017-06-19 09:48:10'),(202,'2017-06-19','05:48:24','Ingreso: Indice de Usuarios.',NULL,NULL,5,'123456','1','2017-06-19 09:48:24','2017-06-19 09:48:24'),(203,'2017-06-19','05:48:46','LogOut',NULL,NULL,5,'123456','1','2017-06-19 09:48:46','2017-06-19 09:48:46'),(204,'2017-06-19','05:49:02','LogIn',NULL,NULL,6,'123456','1','2017-06-19 09:49:02','2017-06-19 09:49:02'),(205,'2017-06-19','05:49:07','Ingreso: Indice de Usuarios.',NULL,NULL,6,'123456','1','2017-06-19 09:49:07','2017-06-19 09:49:07'),(206,'2017-06-19','05:49:15','Ingreso: Indice de Empleados.',NULL,NULL,6,'123456','1','2017-06-19 09:49:15','2017-06-19 09:49:15'),(207,'2017-06-19','05:49:19','Ingreso: Indice de Usuarios.',NULL,NULL,6,'123456','1','2017-06-19 09:49:19','2017-06-19 09:49:19'),(208,'2017-06-19','05:49:22','Ingreso: Registro de Usuarios.',NULL,NULL,6,'123456','1','2017-06-19 09:49:22','2017-06-19 09:49:22'),(209,'2017-06-19','05:49:48','Registro: Usuario','persona',10,6,'123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(210,'2017-06-19','05:49:49','Ingreso: Indice de Usuarios.',NULL,NULL,6,'123456','1','2017-06-19 09:49:49','2017-06-19 09:49:49'),(211,'2017-06-19','05:50:01','Ingreso: Indice de Privilegios.',NULL,NULL,6,'123456','1','2017-06-19 09:50:01','2017-06-19 09:50:01'),(212,'2017-06-19','05:50:09','Ingreso: Edicion de privilegio de usuario.',NULL,NULL,6,'123456','1','2017-06-19 09:50:09','2017-06-19 09:50:09'),(213,'2017-06-19','05:50:15','Ingreso: Indice de Privilegios.',NULL,NULL,6,'123456','1','2017-06-19 09:50:15','2017-06-19 09:50:15'),(214,'2017-06-19','05:51:18','LogOut',NULL,NULL,6,'123456','1','2017-06-19 09:51:18','2017-06-19 09:51:18'),(215,'2017-06-19','05:51:33','LogIn',NULL,NULL,7,'123456','1','2017-06-19 09:51:33','2017-06-19 09:51:33'),(216,'2017-06-19','05:51:37','Ingreso: Indice de Usuarios.',NULL,NULL,7,'123456','1','2017-06-19 09:51:37','2017-06-19 09:51:37'),(217,'2017-06-19','05:51:40','Ingreso: Registro de Usuarios.',NULL,NULL,7,'123456','1','2017-06-19 09:51:40','2017-06-19 09:51:40'),(218,'2017-06-19','05:52:01','Registro: Usuario','persona',11,7,'123456','1','2017-06-19 09:52:01','2017-06-19 09:52:01'),(219,'2017-06-19','05:52:01','Ingreso: Indice de Usuarios.',NULL,NULL,7,'123456','1','2017-06-19 09:52:01','2017-06-19 09:52:01'),(220,'2017-06-19','05:53:00','LogOut',NULL,NULL,7,'123456','1','2017-06-19 09:53:00','2017-06-19 09:53:00'),(221,'2017-06-19','06:18:41','LogIn',NULL,NULL,8,'123456','1','2017-06-19 10:18:41','2017-06-19 10:18:41'),(222,'2017-06-19','07:37:52','LogOut',NULL,NULL,8,'123456','1','2017-06-19 11:37:52','2017-06-19 11:37:52'),(223,'2017-06-19','07:38:56','LogIn',NULL,NULL,9,'123456','1','2017-06-19 11:38:56','2017-06-19 11:38:56'),(224,'2017-06-19','07:39:00','Ingreso: Indice de Usuarios.',NULL,NULL,9,'123456','1','2017-06-19 11:39:00','2017-06-19 11:39:00'),(225,'2017-06-19','07:39:07','Ingreso: Indice de Empleados.',NULL,NULL,9,'123456','1','2017-06-19 11:39:07','2017-06-19 11:39:07'),(226,'2017-06-19','07:39:16','Ingreso a la pagina de Cargo',NULL,NULL,9,'123456','1','2017-06-19 11:39:16','2017-06-19 11:39:16'),(227,'2017-06-19','07:39:19','Ingreso: Indice de Empleados.',NULL,NULL,9,'123456','1','2017-06-19 11:39:19','2017-06-19 11:39:19'),(228,'2017-06-19','07:40:06','Ingreso: Indice de Empleados.',NULL,NULL,9,'123456','1','2017-06-19 11:40:06','2017-06-19 11:40:06'),(229,'2017-06-19','07:41:16','Ingreso: Indice de Empleados.',NULL,NULL,9,'123456','1','2017-06-19 11:41:16','2017-06-19 11:41:16'),(230,'2017-06-19','07:45:19','LogOut',NULL,NULL,9,'123456','1','2017-06-19 11:45:19','2017-06-19 11:45:19'),(231,'2017-06-19','07:45:32','LogIn',NULL,NULL,10,'123456','1','2017-06-19 11:45:32','2017-06-19 11:45:32'),(232,'2017-06-19','07:45:39','Ingreso: Indice de Usuarios.',NULL,NULL,10,'123456','1','2017-06-19 11:45:39','2017-06-19 11:45:39'),(233,'2017-06-19','07:46:17','Ingreso: Indice de Usuarios.',NULL,NULL,10,'123456','1','2017-06-19 11:46:17','2017-06-19 11:46:17'),(234,'2017-06-19','07:46:32','Ingreso: Indice de Empleados.',NULL,NULL,10,'123456','1','2017-06-19 11:46:32','2017-06-19 11:46:32'),(235,'2017-06-19','07:46:38','Ingreso: Indice de Usuarios.',NULL,NULL,10,'123456','1','2017-06-19 11:46:38','2017-06-19 11:46:38'),(236,'2017-06-19','07:50:34','Ingreso: Indice de Privilegios.',NULL,NULL,10,'123456','1','2017-06-19 11:50:34','2017-06-19 11:50:34'),(237,'2017-06-19','07:50:58','LogOut',NULL,NULL,10,'123456','1','2017-06-19 11:50:58','2017-06-19 11:50:58'),(238,'2017-06-19','07:52:17','LogIn',NULL,NULL,11,'123456','1','2017-06-19 11:52:17','2017-06-19 11:52:17'),(239,'2017-06-19','07:52:22','Ingreso: Indice de Usuarios.',NULL,NULL,11,'123456','1','2017-06-19 11:52:22','2017-06-19 11:52:22'),(240,'2017-06-19','07:52:43','Ingreso: Indice de Empleados.',NULL,NULL,11,'123456','1','2017-06-19 11:52:43','2017-06-19 11:52:43'),(241,'2017-06-19','07:53:24','LogOut',NULL,NULL,11,'123456','1','2017-06-19 11:53:24','2017-06-19 11:53:24'),(242,'2017-06-19','07:53:43','LogIn',NULL,NULL,12,'123456','1','2017-06-19 11:53:43','2017-06-19 11:53:43'),(243,'2017-06-19','10:06:11','Ingreso a la pagina de Cargo',NULL,NULL,12,'123456','1','2017-06-19 14:06:11','2017-06-19 14:06:11'),(244,'2017-06-19','10:06:15','Ingreso: Indice de Empleados.',NULL,NULL,12,'123456','1','2017-06-19 14:06:15','2017-06-19 14:06:15'),(245,'2017-06-19','10:06:19','Ingreso: Indice de Usuarios.',NULL,NULL,12,'123456','1','2017-06-19 14:06:19','2017-06-19 14:06:19'),(246,'2017-06-19','10:06:22','Ingreso a la pagina de Cargo',NULL,NULL,12,'123456','1','2017-06-19 14:06:22','2017-06-19 14:06:22'),(247,'2017-06-19','10:06:27','Ingreso a la pagina de Editar Cargo','cargo',1,12,'123456','1','2017-06-19 14:06:27','2017-06-19 14:06:27'),(248,'2017-06-19','10:06:31','Ingreso: Indice de Usuarios.',NULL,NULL,12,'123456','1','2017-06-19 14:06:31','2017-06-19 14:06:31'),(249,'2017-06-19','10:06:36','Ingreso: Indice de Privilegios.',NULL,NULL,12,'123456','1','2017-06-19 14:06:36','2017-06-19 14:06:36'),(250,'2017-06-19','10:06:45','LogOut',NULL,NULL,12,'123456','1','2017-06-19 14:06:45','2017-06-19 14:06:45'),(251,'2017-06-19','10:06:56','LogIn',NULL,NULL,13,'123456','1','2017-06-19 14:06:56','2017-06-19 14:06:56'),(252,'2017-06-19','10:08:05','LogOut',NULL,NULL,13,'123456','1','2017-06-19 14:08:05','2017-06-19 14:08:05'),(253,'2017-06-19','10:08:18','LogIn',NULL,NULL,14,'123456','1','2017-06-19 14:08:18','2017-06-19 14:08:18'),(254,'2017-06-19','10:08:23','Ingreso a la pagina de Cargo',NULL,NULL,14,'123456','1','2017-06-19 14:08:23','2017-06-19 14:08:23'),(255,'2017-06-19','10:08:28','Ingreso: Indice de Empleados.',NULL,NULL,14,'123456','1','2017-06-19 14:08:28','2017-06-19 14:08:28'),(256,'2017-06-19','10:08:31','Ingreso: Edicion de empleado.',NULL,NULL,14,'123456','1','2017-06-19 14:08:31','2017-06-19 14:08:31'),(257,'2017-06-19','10:08:35','Ingreso: Indice de Empleados.',NULL,NULL,14,'123456','1','2017-06-19 14:08:35','2017-06-19 14:08:35'),(258,'2017-06-19','10:08:39','Ingreso: Registro de Empleados.',NULL,NULL,14,'123456','1','2017-06-19 14:08:39','2017-06-19 14:08:39'),(259,'2017-06-19','10:08:44','Ingreso: Indice de Privilegios.',NULL,NULL,14,'123456','1','2017-06-19 14:08:44','2017-06-19 14:08:44'),(260,'2017-06-19','10:08:48','Ingreso a la pagina de Cargo',NULL,NULL,14,'123456','1','2017-06-19 14:08:48','2017-06-19 14:08:48'),(261,'2017-06-19','10:08:52','Ingreso: Indice de Empleados.',NULL,NULL,14,'123456','1','2017-06-19 14:08:52','2017-06-19 14:08:52'),(262,'2017-06-19','10:08:58','Ingreso: Indice de Usuarios.',NULL,NULL,14,'123456','1','2017-06-19 14:08:58','2017-06-19 14:08:58'),(263,'2017-06-19','10:09:02','Ingreso: Edicion de Usuario.',NULL,NULL,14,'123456','1','2017-06-19 14:09:02','2017-06-19 14:09:02'),(264,'2017-06-19','10:09:09','Ingreso: Indice de Usuarios.',NULL,NULL,14,'123456','1','2017-06-19 14:09:09','2017-06-19 14:09:09'),(265,'2017-06-19','10:09:12','Ingreso: Registro de Usuarios.',NULL,NULL,14,'123456','1','2017-06-19 14:09:12','2017-06-19 14:09:12'),(266,'2017-06-19','10:09:19','LogOut',NULL,NULL,14,'123456','1','2017-06-19 14:09:19','2017-06-19 14:09:19'),(267,'2017-06-19','10:09:30','LogIn',NULL,NULL,15,'123456','1','2017-06-19 14:09:30','2017-06-19 14:09:30'),(268,'2017-06-19','10:23:22','LogOut',NULL,NULL,15,'123456','1','2017-06-19 14:23:22','2017-06-19 14:23:22'),(269,'2017-06-25','10:17:56','LogIn',NULL,NULL,16,'123456','1','2017-06-25 14:17:56','2017-06-25 14:17:56'),(270,'2017-06-25','10:18:01','LogOut',NULL,NULL,16,'123456','1','2017-06-25 14:18:01','2017-06-25 14:18:01'),(271,'2017-07-01','15:31:06','LogIn',NULL,NULL,17,'123456','1','2017-07-01 19:31:06','2017-07-01 19:31:06');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backup`
--

LOCK TABLES `backup` WRITE;
/*!40000 ALTER TABLE `backup` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (1,1,'123456','1','2017-06-17 14:11:59','2017-06-17 14:11:59'),(2,1,'123456','1','2017-06-18 00:30:54','2017-06-18 00:30:54'),(3,1,'123456','1','2017-06-18 15:00:08','2017-06-18 15:00:08'),(4,1,'123456','1','2017-06-18 19:37:03','2017-06-18 19:37:03'),(5,2,'123456','1','2017-06-19 09:46:10','2017-06-19 09:46:10'),(6,3,'123456','1','2017-06-19 09:49:02','2017-06-19 09:49:02'),(7,2,'123456','1','2017-06-19 09:51:33','2017-06-19 09:51:33'),(8,3,'123456','1','2017-06-19 10:18:40','2017-06-19 10:18:40'),(9,2,'123456','1','2017-06-19 11:38:56','2017-06-19 11:38:56'),(10,3,'123456','1','2017-06-19 11:45:32','2017-06-19 11:45:32'),(11,3,'123456','1','2017-06-19 11:52:17','2017-06-19 11:52:17'),(12,2,'123456','1','2017-06-19 11:53:43','2017-06-19 11:53:43'),(13,1,'123456','1','2017-06-19 14:06:56','2017-06-19 14:06:56'),(14,3,'123456','1','2017-06-19 14:08:18','2017-06-19 14:08:18'),(15,1,'123456','1','2017-06-19 14:09:30','2017-06-19 14:09:30'),(16,2,'123456','1','2017-06-25 14:17:56','2017-06-25 14:17:56'),(17,1,'123456','1','2017-07-01 19:31:05','2017-07-01 19:31:05');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Encargado de Reproductoras','Encargado de Reproductoras','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(2,'Encargado de Incubadoras','Encargado de Incubadoras','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(3,'Encargado de Nacedoras','Encargado de Nacedoras','123456','1','2017-06-17 14:13:52','2017-06-17 14:13:52'),(4,'Encargado de Parvada','Encargado de Parvada.','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(5,'Gerente General','Gerente General','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(6,'Gerente de Ventas','Encargado de Ventas','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:57'),(7,'Gerente de Compras','Gerente de Compras.','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(8,'Encargado de Produccion','Encargado de Produccion','123456','1','2017-06-17 14:16:59','2017-06-17 14:16:59'),(9,'Encargado de RRHH','Encargado de RRHH','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(10,'Encargado de Sanitizacion','Encargado de Sanitizacion','123456','1','2017-06-17 14:17:48','2017-06-17 14:17:48'),(11,'Encargado de Limpieza','Encargado de Limpieza','123456','1','2017-06-18 21:38:54','2017-06-18 21:38:54');
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
) ENGINE=InnoDB AUTO_INCREMENT=419 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casop_cargo`
--

LOCK TABLES `casop_cargo` WRITE;
/*!40000 ALTER TABLE `casop_cargo` DISABLE KEYS */;
INSERT INTO `casop_cargo` VALUES (1,1,1,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(2,1,2,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(3,1,3,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(4,1,4,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(5,1,5,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(6,2,6,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(7,2,7,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(8,2,8,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(9,2,9,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(10,2,10,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(11,3,11,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(12,3,12,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(13,3,13,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(14,3,14,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(15,3,15,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(16,3,16,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(17,4,17,'n','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(18,4,18,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(19,4,19,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(20,4,20,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(21,4,21,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(22,4,22,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(23,4,23,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(24,5,24,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(25,5,25,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(26,5,26,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(27,6,27,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(28,6,28,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(29,6,29,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(30,6,30,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(31,6,31,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(32,6,32,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(33,6,33,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(34,6,34,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(35,6,35,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(36,6,36,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(37,6,37,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(38,6,38,'n','123456','1','2017-06-17 14:13:02','2017-06-17 14:13:02'),(39,7,1,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(40,7,2,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(41,7,3,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(42,7,4,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(43,7,5,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(44,8,6,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(45,8,7,'n','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(46,8,8,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(47,8,9,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(48,8,10,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(49,9,11,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(50,9,12,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(51,9,13,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(52,9,14,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(53,9,15,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(54,9,16,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(55,10,17,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(56,10,18,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(57,10,19,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(58,10,20,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(59,10,21,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(60,10,22,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(61,10,23,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(62,11,24,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(63,11,25,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(64,11,26,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(65,12,27,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(66,12,28,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(67,12,29,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(68,12,30,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(69,12,31,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(70,12,32,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(71,12,33,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(72,12,34,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(73,12,35,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(74,12,36,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(75,12,37,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(76,12,38,'n','123456','1','2017-06-17 14:13:24','2017-06-17 14:13:24'),(77,13,1,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(78,13,2,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(79,13,3,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(80,13,4,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(81,13,5,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(82,14,6,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(83,14,7,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(84,14,8,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(85,14,9,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(86,14,10,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(87,15,11,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(88,15,12,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(89,15,13,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(90,15,14,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(91,15,15,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(92,15,16,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(93,16,17,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(94,16,18,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(95,16,19,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(96,16,20,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(97,16,21,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(98,16,22,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(99,16,23,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(100,17,24,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(101,17,25,'n','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(102,17,26,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(103,18,27,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(104,18,28,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(105,18,29,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(106,18,30,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(107,18,31,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(108,18,32,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(109,18,33,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(110,18,34,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(111,18,35,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(112,18,36,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(113,18,37,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(114,18,38,'n','123456','1','2017-06-17 14:13:54','2017-06-17 14:13:54'),(115,19,1,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(116,19,2,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(117,19,3,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(118,19,4,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(119,19,5,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(120,20,6,'n','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(121,20,7,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(122,20,8,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(123,20,9,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(124,20,10,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(125,21,11,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(126,21,12,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(127,21,13,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(128,21,14,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(129,21,15,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(130,21,16,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(131,22,17,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(132,22,18,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(133,22,19,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(134,22,20,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(135,22,21,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(136,22,22,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(137,22,23,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(138,23,24,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(139,23,25,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(140,23,26,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(141,24,27,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(142,24,28,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(143,24,29,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(144,24,30,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(145,24,31,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(146,24,32,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(147,24,33,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(148,24,34,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(149,24,35,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(150,24,36,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(151,24,37,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(152,24,38,'n','123456','1','2017-06-17 14:14:10','2017-06-17 14:14:10'),(153,25,1,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(154,25,2,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(155,25,3,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(156,25,4,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(157,25,5,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(158,26,6,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(159,26,7,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(160,26,8,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(161,26,9,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(162,26,10,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(163,27,11,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(164,27,12,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(165,27,13,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(166,27,14,'n','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(167,27,15,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(168,27,16,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(169,28,17,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(170,28,18,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(171,28,19,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(172,28,20,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(173,28,21,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(174,28,22,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(175,28,23,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(176,29,24,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(177,29,25,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(178,29,26,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(179,30,27,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(180,30,28,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(181,30,29,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(182,30,30,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(183,30,31,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(184,30,32,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(185,30,33,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(186,30,34,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(187,30,35,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(188,30,36,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(189,30,37,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(190,30,38,'n','123456','1','2017-06-17 14:14:51','2017-06-17 14:14:51'),(191,31,1,'n','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(192,31,2,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(193,31,3,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(194,31,4,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(195,31,5,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(196,32,6,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(197,32,7,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(198,32,8,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(199,32,9,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(200,32,10,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(201,33,11,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(202,33,12,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(203,33,13,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(204,33,14,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(205,33,15,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(206,33,16,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(207,34,17,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(208,34,18,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(209,34,19,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(210,34,20,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(211,34,21,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(212,34,22,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(213,34,23,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(214,35,24,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(215,35,25,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(216,35,26,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(217,36,27,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(218,36,28,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(219,36,29,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(220,36,30,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(221,36,31,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(222,36,32,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(223,36,33,'n','123456','1','2017-06-17 14:15:28','2017-06-17 14:15:28'),(224,36,34,'n','123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(225,36,35,'n','123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(226,36,36,'n','123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(227,36,37,'n','123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(228,36,38,'n','123456','1','2017-06-17 14:15:29','2017-06-17 14:15:29'),(229,37,1,'n','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(230,37,2,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(231,37,3,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(232,37,4,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(233,37,5,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(234,38,6,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(235,38,7,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(236,38,8,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(237,38,9,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(238,38,10,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(239,39,11,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(240,39,12,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(241,39,13,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(242,39,14,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(243,39,15,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(244,39,16,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(245,40,17,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(246,40,18,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(247,40,19,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(248,40,20,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(249,40,21,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(250,40,22,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(251,40,23,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(252,41,24,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(253,41,25,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(254,41,26,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(255,42,27,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(256,42,28,'n','123456','1','2017-06-17 14:16:36','2017-06-17 14:16:36'),(257,42,29,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(258,42,30,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(259,42,31,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(260,42,32,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(261,42,33,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(262,42,34,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(263,42,35,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(264,42,36,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(265,42,37,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(266,42,38,'n','123456','1','2017-06-17 14:16:37','2017-06-17 14:16:37'),(267,43,1,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(268,43,2,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(269,43,3,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(270,43,4,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(271,43,5,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(272,44,6,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(273,44,7,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(274,44,8,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(275,44,9,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(276,44,10,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(277,45,11,'n','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(278,45,12,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(279,45,13,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(280,45,14,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(281,45,15,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(282,45,16,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(283,46,17,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(284,46,18,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(285,46,19,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(286,46,20,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(287,46,21,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(288,46,22,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(289,46,23,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(290,47,24,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(291,47,25,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(292,47,26,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(293,48,27,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(294,48,28,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(295,48,29,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(296,48,30,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(297,48,31,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(298,48,32,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(299,48,33,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(300,48,34,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(301,48,35,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(302,48,36,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(303,48,37,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(304,48,38,'n','123456','1','2017-06-17 14:17:01','2017-06-17 14:17:01'),(305,49,1,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(306,49,2,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(307,49,3,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(308,49,4,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(309,49,5,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(310,50,6,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(311,50,7,'n','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(312,50,8,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(313,50,9,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(314,50,10,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(315,51,11,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(316,51,12,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(317,51,13,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(318,51,14,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(319,51,15,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(320,51,16,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(321,52,17,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(322,52,18,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(323,52,19,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(324,52,20,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(325,52,21,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(326,52,22,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(327,52,23,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(328,53,24,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(329,53,25,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(330,53,26,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(331,54,27,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(332,54,28,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(333,54,29,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(334,54,30,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(335,54,31,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(336,54,32,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(337,54,33,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(338,54,34,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(339,54,35,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(340,54,36,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(341,54,37,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(342,54,38,'n','123456','1','2017-06-17 14:17:27','2017-06-17 14:17:27'),(343,55,1,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(344,55,2,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(345,55,3,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(346,55,4,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(347,55,5,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(348,56,6,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(349,56,7,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(350,56,8,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(351,56,9,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(352,56,10,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(353,57,11,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(354,57,12,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(355,57,13,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(356,57,14,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(357,57,15,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(358,57,16,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(359,58,17,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(360,58,18,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(361,58,19,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(362,58,20,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(363,58,21,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(364,58,22,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(365,58,23,'n','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(366,59,24,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(367,59,25,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(368,59,26,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(369,60,27,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(370,60,28,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(371,60,29,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(372,60,30,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(373,60,31,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(374,60,32,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(375,60,33,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(376,60,34,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(377,60,35,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(378,60,36,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(379,60,37,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(380,60,38,'n','123456','1','2017-06-17 14:17:50','2017-06-17 14:17:50'),(381,61,1,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(382,61,2,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(383,61,3,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(384,61,4,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(385,61,5,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(386,62,6,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(387,62,7,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(388,62,8,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(389,62,9,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(390,62,10,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(391,63,11,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(392,63,12,'n','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(393,63,13,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(394,63,14,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(395,63,15,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(396,63,16,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(397,64,17,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(398,64,18,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(399,64,19,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(400,64,20,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(401,64,21,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(402,64,22,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(403,64,23,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(404,65,24,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(405,65,25,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(406,65,26,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(407,66,27,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(408,66,28,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(409,66,29,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(410,66,30,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(411,66,31,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(412,66,32,'n','123456','1','2017-06-18 21:38:56','2017-06-18 21:38:56'),(413,66,33,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(414,66,34,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(415,66,35,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(416,66,36,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(417,66,37,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57'),(418,66,38,'n','123456','1','2017-06-18 21:38:57','2017-06-18 21:38:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=381 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casop_usuario`
--

LOCK TABLES `casop_usuario` WRITE;
/*!40000 ALTER TABLE `casop_usuario` DISABLE KEYS */;
INSERT INTO `casop_usuario` VALUES (1,1,1,'n','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(2,1,2,'n','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(3,1,3,'n','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(4,1,4,'n','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(5,1,5,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(6,2,6,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(7,2,7,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(8,2,8,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(9,2,9,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(10,2,10,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(11,3,11,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(12,3,12,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(13,3,13,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(14,3,14,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(15,3,15,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(16,3,16,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(17,4,17,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(18,4,18,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(19,4,19,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(20,4,20,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(21,4,21,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(22,4,22,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(23,4,23,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(24,5,24,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(25,5,25,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(26,5,26,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(27,6,27,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(28,6,28,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(29,6,29,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(30,6,30,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(31,6,31,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(32,6,32,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(33,6,33,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(34,6,34,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(35,6,35,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(36,6,36,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(37,6,37,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(38,6,38,'n','123456','1','2017-06-18 15:06:36','2017-06-18 15:06:36'),(39,7,1,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(40,7,2,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(41,7,3,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(42,7,4,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(43,7,5,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(44,8,6,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(45,8,7,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(46,8,8,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(47,8,9,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(48,8,10,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(49,9,11,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(50,9,12,'n','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(51,9,13,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(52,9,14,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(53,9,15,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(54,9,16,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(55,10,17,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(56,10,18,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(57,10,19,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(58,10,20,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(59,10,21,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(60,10,22,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(61,10,23,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(62,11,24,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(63,11,25,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(64,11,26,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(65,12,27,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(66,12,28,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(67,12,29,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(68,12,30,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(69,12,31,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(70,12,32,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(71,12,33,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(72,12,34,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(73,12,35,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(74,12,36,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(75,12,37,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(76,12,38,'n','123456','1','2017-06-18 15:10:48','2017-06-18 15:10:48'),(77,13,1,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(78,13,2,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(79,13,3,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(80,13,4,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(81,13,5,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(82,14,6,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(83,14,7,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(84,14,8,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(85,14,9,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(86,14,10,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(87,15,11,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(88,15,12,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(89,15,13,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(90,15,14,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(91,15,15,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(92,15,16,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(93,16,17,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(94,16,18,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(95,16,19,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(96,16,20,'n','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(97,16,21,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(98,16,22,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(99,16,23,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(100,17,24,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(101,17,25,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(102,17,26,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(103,18,27,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(104,18,28,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(105,18,29,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(106,18,30,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(107,18,31,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(108,18,32,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(109,18,33,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(110,18,34,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(111,18,35,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(112,18,36,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(113,18,37,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(114,18,38,'n','123456','1','2017-06-18 15:11:41','2017-06-18 15:11:41'),(115,19,1,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(116,19,2,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(117,19,3,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(118,19,4,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(119,19,5,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(120,20,6,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(121,20,7,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(122,20,8,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(123,20,9,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(124,20,10,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(125,21,11,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(126,21,12,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(127,21,13,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(128,21,14,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(129,21,15,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(130,21,16,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(131,22,17,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(132,22,18,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(133,22,19,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(134,22,20,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(135,22,21,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(136,22,22,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(137,22,23,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(138,23,24,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(139,23,25,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(140,23,26,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(141,24,27,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(142,24,28,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(143,24,29,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(144,24,30,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(145,24,31,'n','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(146,24,32,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(147,24,33,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(148,24,34,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(149,24,35,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(150,24,36,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(151,24,37,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(152,24,38,'n','123456','1','2017-06-18 15:12:11','2017-06-18 15:12:11'),(153,25,1,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(154,25,2,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(155,25,3,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(156,25,4,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(157,25,5,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(158,26,6,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(159,26,7,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(160,26,8,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(161,26,9,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(162,26,10,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(163,27,11,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(164,27,12,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(165,27,13,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(166,27,14,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(167,27,15,'n','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(168,27,16,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(169,28,17,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(170,28,18,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(171,28,19,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(172,28,20,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(173,28,21,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(174,28,22,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(175,28,23,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(176,29,24,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(177,29,25,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(178,29,26,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(179,30,27,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(180,30,28,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(181,30,29,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(182,30,30,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(183,30,31,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(184,30,32,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(185,30,33,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(186,30,34,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(187,30,35,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(188,30,36,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(189,30,37,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(190,30,38,'n','123456','1','2017-06-18 15:13:02','2017-06-18 15:13:02'),(191,31,1,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(192,31,2,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(193,31,3,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(194,31,4,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(195,31,5,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(196,32,6,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(197,32,7,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(198,32,8,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(199,32,9,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(200,32,10,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(201,33,11,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(202,33,12,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(203,33,13,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(204,33,14,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(205,33,15,'n','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(206,33,16,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(207,34,17,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(208,34,18,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(209,34,19,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(210,34,20,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(211,34,21,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(212,34,22,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(213,34,23,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(214,35,24,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(215,35,25,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(216,35,26,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(217,36,27,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(218,36,28,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(219,36,29,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(220,36,30,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(221,36,31,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(222,36,32,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(223,36,33,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(224,36,34,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(225,36,35,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(226,36,36,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(227,36,37,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(228,36,38,'n','123456','1','2017-06-18 15:14:57','2017-06-18 15:14:57'),(229,37,1,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(230,37,2,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(231,37,3,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(232,37,4,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(233,37,5,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(234,38,6,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(235,38,7,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(236,38,8,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(237,38,9,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(238,38,10,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(239,39,11,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(240,39,12,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(241,39,13,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(242,39,14,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(243,39,15,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(244,39,16,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(245,40,17,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(246,40,18,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(247,40,19,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(248,40,20,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(249,40,21,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(250,40,22,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(251,40,23,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(252,41,24,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(253,41,25,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(254,41,26,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(255,42,27,'n','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(256,42,28,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(257,42,29,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(258,42,30,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(259,42,31,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(260,42,32,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(261,42,33,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(262,42,34,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(263,42,35,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(264,42,36,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(265,42,37,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(266,42,38,'n','123456','1','2017-06-18 15:16:24','2017-06-18 15:16:24'),(267,43,1,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(268,43,2,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(269,43,3,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(270,43,4,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(271,43,5,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(272,44,6,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(273,44,7,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(274,44,8,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(275,44,9,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(276,44,10,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(277,45,11,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(278,45,12,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(279,45,13,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(280,45,14,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(281,45,15,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(282,45,16,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(283,46,17,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(284,46,18,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(285,46,19,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(286,46,20,'n','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(287,46,21,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(288,46,22,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(289,46,23,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(290,47,24,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(291,47,25,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(292,47,26,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(293,48,27,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(294,48,28,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(295,48,29,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(296,48,30,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(297,48,31,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(298,48,32,'n','123456','1','2017-06-18 15:17:00','2017-06-18 15:17:00'),(299,48,33,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(300,48,34,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(301,48,35,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(302,48,36,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(303,48,37,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(304,48,38,'n','123456','1','2017-06-18 15:17:01','2017-06-18 15:17:01'),(305,49,1,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(306,49,2,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(307,49,3,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(308,49,4,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(309,49,5,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(310,50,6,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(311,50,7,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(312,50,8,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(313,50,9,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(314,50,10,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(315,51,11,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(316,51,12,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(317,51,13,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(318,51,14,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(319,51,15,'n','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(320,51,16,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(321,52,17,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(322,52,18,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(323,52,19,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(324,52,20,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(325,52,21,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(326,52,22,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(327,52,23,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(328,53,24,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(329,53,25,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(330,53,26,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(331,54,27,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(332,54,28,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(333,54,29,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(334,54,30,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(335,54,31,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(336,54,32,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(337,54,33,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(338,54,34,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(339,54,35,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(340,54,36,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(341,54,37,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(342,54,38,'n','123456','1','2017-06-19 09:49:48','2017-06-19 09:49:48'),(343,55,1,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(344,55,2,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(345,55,3,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(346,55,4,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(347,55,5,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(348,56,6,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(349,56,7,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(350,56,8,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(351,56,9,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(352,56,10,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(353,57,11,'n','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(354,57,12,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(355,57,13,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(356,57,14,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(357,57,15,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(358,57,16,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(359,58,17,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(360,58,18,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(361,58,19,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(362,58,20,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(363,58,21,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(364,58,22,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(365,58,23,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(366,59,24,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(367,59,25,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(368,59,26,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(369,60,27,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(370,60,28,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(371,60,29,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(372,60,30,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(373,60,31,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(374,60,32,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(375,60,33,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(376,60,34,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(377,60,35,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(378,60,36,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(379,60,37,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00'),(380,60,38,'n','123456','1','2017-06-19 09:52:00','2017-06-19 09:52:00');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_factura`
--

LOCK TABLES `detalle_factura` WRITE;
/*!40000 ALTER TABLE `detalle_factura` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa`
--

LOCK TABLES `etapa` WRITE;
/*!40000 ALTER TABLE `etapa` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa_incubacion`
--

LOCK TABLES `etapa_incubacion` WRITE;
/*!40000 ALTER TABLE `etapa_incubacion` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `granja`
--

LOCK TABLES `granja` WRITE;
/*!40000 ALTER TABLE `granja` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infraestructura`
--

LOCK TABLES `infraestructura` WRITE;
/*!40000 ALTER TABLE `infraestructura` DISABLE KEYS */;
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
  `tipoLote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lote_huevo_incubable_idplantaincubacion_foreign` (`idPlantaIncubacion`),
  CONSTRAINT `lote_huevo_incubable_idplantaincubacion_foreign` FOREIGN KEY (`idPlantaIncubacion`) REFERENCES `infraestructura` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lote_huevo_incubable`
--

LOCK TABLES `lote_huevo_incubable` WRITE;
/*!40000 ALTER TABLE `lote_huevo_incubable` DISABLE KEYS */;
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
  `productividad` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mortalidad` int(11) NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parvada`
--

LOCK TABLES `parvada` WRITE;
/*!40000 ALTER TABLE `parvada` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,12234556,'Sergio Weimar','Ricaldez Zapata','Av. Banzer',NULL,NULL,'1991-09-29','2017-06-17','user.png',5,'e','123456','1','2017-06-17 15:45:03','2017-06-17 15:45:03'),(2,221133,'Alex','Wallt','Av. Irala',NULL,NULL,'2000-08-04','2017-06-17','user.png',2,'e','123456','1','2017-06-17 15:50:53','2017-06-17 15:50:53'),(3,45126397,'Marco','Jacobich','Av. Irala',NULL,NULL,'1995-12-04','2017-06-17','user.png',4,'e','123456','1','2017-06-18 01:25:09','2017-06-18 01:25:09'),(4,145863214,'Maria ','Suarez','Av.Irala',NULL,NULL,'1985-08-04','2017-06-17','user.png',3,'e','123456','1','2017-06-18 01:26:01','2017-06-18 01:26:01'),(5,78452144,'Sebastian','Annita','Av.Irala',NULL,NULL,'1996-04-08','2017-06-17','user.png',2,'e','123456','1','2017-06-18 01:26:58','2017-06-18 01:26:58'),(6,362012214,'Joaquin','Quinta Quinteros','Av. Sur',NULL,NULL,'2001-03-25','2017-06-17','user.png',2,'e','123456','1','2017-06-18 01:27:45','2017-06-18 01:27:45'),(7,78450014,'Ernesto','Baron','Av. Banzer',NULL,NULL,'1990-04-07','2017-06-17','user.png',3,'e','123456','1','2017-06-18 01:29:42','2017-06-18 01:29:42'),(8,41033215,'Charli','Romero Garcia','Av. Bolivia',NULL,NULL,'1989-10-14','2017-06-17','user.png',3,'e','123456','1','2017-06-18 01:30:51','2017-06-18 01:30:51'),(9,1235048,'Javier','Arquim','Av. Sur',NULL,NULL,'1985-11-08','2017-06-17','user.png',4,'e','123456','1','2017-06-18 01:32:07','2017-06-18 01:32:07'),(10,42191751,'Lenny Leuschke','Bayer','14896 Bednar Corners\nConsidineborough, TX 91784',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:27','2017-06-19 01:07:27'),(11,18107182,'Deonte Simonis IV','Witting','4688 Zackery Pass\nWillmouth, NY 69277',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:27','2017-06-19 01:07:27'),(12,42535437,'Lea Douglas','Murray','3134 Alvina Summit\nNew Deion, UT 87743',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:27','2017-06-19 01:07:27'),(13,62353930,'Gussie Cronin','Ullrich','5795 Runolfsson Pine\nWest Larissa, ND 29763-8060',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:27','2017-06-19 01:07:27'),(14,32214879,'Jimmy Haag','Halvorson','66039 Gibson Grove\nKuhnburgh, MS 70092',NULL,NULL,NULL,NULL,'user.png',6,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(15,93688268,'Caleb Bailey','Homenick','119 Joey Well\nWest Vivienne, NV 53344-1878',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(16,43780343,'Joanie Goldner','Pagac','43459 Sandra Meadows Apt. 470\nEast Perrychester, VT 15826-7617',NULL,NULL,NULL,NULL,'user.png',6,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(17,30019375,'Myah Nikolaus','Lindgren','97814 Estrella Circles Apt. 214\nNew Lupeside, HI 52138-6086',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(18,67657538,'Brandyn Daniel','Bosco','53272 Abernathy Springs\nPort Dariana, SC 09418',NULL,NULL,NULL,NULL,'user.png',4,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(19,68986888,'Mr. Wilfrid Bechtelar DDS','Schoen','673 Block Estates Suite 272\nLeonardhaven, ND 64105-1274',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(20,25899916,'Zena Dickinson I','Pfannerstill','6269 Devin Village\nLynchburgh, NC 74723-4424',NULL,NULL,NULL,NULL,'user.png',4,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(21,67577326,'Madisen Lakin','Grady','847 Cristian Bridge\nSouth Jessemouth, NY 92012',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(22,71806221,'Meta Ferry','Rohan','8592 Goldner Ports Suite 286\nNew Mohammadberg, MD 10856-0438',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(23,31438682,'Onie Haag','Macejkovic','3259 Roberts Square\nSteuberside, NJ 66662-3536',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(24,78697256,'Hildegard Jenkins','Ledner','101 Meda Mills\nWest Aaron, AK 46741',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(25,88505946,'Thomas Bayer','Watsica','4343 Brown Orchard Suite 987\nNorth Travis, TX 29595-6728',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(26,43530649,'Dr. Lennie Hettinger II','Donnelly','352 Stiedemann Island\nLake Huldaberg, TN 48803-2071',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(27,91923453,'Raphaelle Kuhn','Abernathy','434 Angelo Street\nEast Eldonmouth, MI 61502-1700',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(28,60935499,'Dario Kemmer','Beatty','24320 Veum Stravenue\nBeierport, IA 01995',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(29,49699367,'Sam Hermann','Yundt','89773 Jerad Prairie Apt. 125\nPort Agnes, ID 81264-5062',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(30,63895641,'Wiley Hansen','Wisozk','87651 Nikki Mountains\nMcDermottberg, IL 18522',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(31,34603532,'Coty Lubowitz I','Kuphal','8735 Ewell Views Suite 979\nKeeganmouth, TN 02789-9514',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(32,21677910,'Ulices McKenzie','Batz','274 O\'Keefe Common\nSouth Hollyport, KY 72686',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(33,42267734,'Kelsie Berge','Schiller','29878 Ratke Union Suite 538\nNorth Bradlymouth, LA 39442-2094',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(34,89979606,'Emil Wilkinson','Grant','389 Cora Pass\nEast Abe, DE 16974',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(35,79384089,'Shawna Cassin','Eichmann','76274 Nikolaus Island Apt. 393\nSouth Ashleigh, MI 76526',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(36,62201251,'Donnie Bogisich','Grant','9008 Macejkovic Light\nWest Giovannabury, HI 00464-1772',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(37,84701155,'Kaitlin Schumm II','Spencer','811 Viva Ports Apt. 157\nLizzieshire, SD 16858-0729',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(38,15492457,'Ms. Christina Watsica','Braun','32394 Ruby Cove\nEffertzburgh, WI 64005',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(39,13575702,'Mrs. Elsie Terry Sr.','Strosin','4767 Franecki Union\nNew Caden, DE 97630-4490',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(40,43919323,'Erin Willms MD','Pouros','36324 Eudora Shoal\nEast Kobestad, ME 65627',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(41,92468210,'Kristian Kiehn','Barrows','52854 Dariana Forge Suite 001\nWest Melody, VT 93515',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(42,47484901,'Gilberto Schuster','O\'Keefe','803 Harber Crossroad Apt. 385\nWest Jeromebury, AZ 20824-3478',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(43,57722140,'Mrs. Erika Kunde','Lebsack','83191 King Port Suite 291\nPort Idell, SC 62214',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(44,19628965,'Alvena Paucek','Considine','3239 Courtney Falls\nNorth Deondreshire, MS 99966',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(45,74496674,'Sydnee Lakin','Schowalter','3240 Judah Spur Suite 770\nNorth Arjun, SC 62562-4500',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:28','2017-06-19 01:07:28'),(46,93889671,'Miss Sibyl Harvey','McKenzie','2574 King Row Suite 268\nHerminastad, OK 84848-9357',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(47,53247431,'Clemmie Boyle Sr.','Leannon','7228 Ellsworth Islands\nKristymouth, CA 26107-1863',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(48,84399864,'Frankie Harber','Harber','7323 Reagan Ramp\nD\'Amoretown, RI 77168-3831',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(49,98889228,'Yessenia Homenick','Mosciski','908 Hauck Branch Suite 271\nJudeberg, CO 44618-3260',NULL,NULL,NULL,NULL,'user.png',6,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(50,25335199,'Delia Lueilwitz','McGlynn','49623 Hegmann Villages\nOndrickaton, MS 45065',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(51,50872579,'Kattie Rath','Feil','367 Cummerata Forge Apt. 975\nCasperborough, MA 53085-7244',NULL,NULL,NULL,NULL,'user.png',4,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(52,67370650,'Mylene Bergstrom','Rohan','9813 Jacobi Junction\nMcLaughlinton, OR 80580',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(53,87399607,'Vidal Mills','Bashirian','500 Quitzon Turnpike Apt. 960\nBernieceberg, ME 63546-2106',NULL,NULL,NULL,NULL,'user.png',4,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(54,66748274,'Ewell Terry Jr.','Yundt','1274 Cathrine Rest Apt. 972\nLednerfort, CO 14531',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(55,66487112,'Miss Haven Larkin','Wisozk','68783 Kim Glen Apt. 503\nJessikashire, WI 29566',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(56,13549445,'Caleigh Russel','Lubowitz','52879 Noel Ports\nKathleenmouth, NJ 88483',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(57,82787560,'Gus Rodriguez DVM','Prosacco','70294 Terry Street\nNorth Santatown, VT 61349-4124',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(58,39027952,'Ms. Brigitte Kilback','Auer','30828 Victoria Well\nPattieland, ND 69535-6562',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(59,16236516,'Alycia Rau Sr.','Dickens','394 Janae Causeway Suite 067\nNew Vivian, RI 63030-6942',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(60,22891126,'Mr. Lonnie Brown PhD','Walter','314 Schumm Glen Apt. 571\nCruickshankburgh, NM 96431',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(61,51324110,'Edd Collier','Welch','7469 Senger Shoal Apt. 341\nEast Kadenland, MN 08812',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(62,67701405,'Dr. Jimmie Kemmer MD','Cassin','682 Antwon Fork\nMrazburgh, NE 45403-1207',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(63,36943495,'Ms. Treva Ortiz','Medhurst','478 Graciela Trail\nSouth Jaimehaven, MO 10334',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(64,72847809,'Evelyn Auer','Barton','258 Ebony Cliffs Apt. 884\nEast Grahamtown, CA 83126',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(65,12205735,'Charity Schinner','Watsica','764 Zola Mall\nJohnathonshire, NH 45244-8649',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(66,38612397,'Dr. Reyes Sanford','Kutch','468 Mertz Trace\nIsmaelshire, WY 78573-2538',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(67,48678208,'Mrs. Alena Buckridge','Ziemann','733 Myron Ways\nLexieberg, NJ 32313-5664',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(68,51170254,'Rosalyn Howe III','Halvorson','327 Fiona Row Apt. 265\nPort Gudrunport, NJ 58082',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(69,70679569,'Alf Kerluke','Gutmann','81722 Sidney Glens\nIsaifort, TX 61121-6221',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(70,27241200,'Ms. Melyssa Buckridge Jr.','Willms','616 Yoshiko Track Apt. 699\nEast Kaylichester, NM 26304',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(71,39943536,'Jevon Mayer','Crooks','4668 Tobin Viaduct Apt. 255\nTerryberg, CA 17575-4677',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(72,58401513,'Isabelle Upton I','Hilpert','98263 Savion Extensions Suite 665\nAureliaview, LA 66239-3016',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(73,37166374,'Leda Goldner','Davis','1740 Evan Loaf\nEwellmouth, IN 29309',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(74,43640489,'Eloisa Wolff','Haley','62389 Upton Row Suite 513\nLake Keely, NM 02713-7175',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(75,25988602,'Dr. Braden Terry','McKenzie','885 Cummerata Bridge\nNorth Vidaland, KY 38421',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(76,44374075,'Jennie Hettinger','Goldner','90697 Treutel Mountains Suite 275\nPort Jameyfort, MI 72413-3934',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(77,54382989,'Audrey Howe','Schamberger','613 Vesta Corners\nNelleville, IA 88248',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(78,18971396,'Mrs. Litzy Hartmann','Volkman','38751 Lila Skyway Suite 321\nMillertown, AR 58600',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(79,81608824,'Coralie Considine','Predovic','757 Riley Ville Suite 384\nNew Rubiefurt, ND 49847',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:29','2017-06-19 01:07:29'),(80,80459577,'Dr. Modesto Beier I','McClure','671 Ankunding Valley\nCassandrechester, NY 70157',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(81,46969422,'Dena Bergnaum','Rippin','8536 Hans Drive Suite 906\nNorth Sincereberg, WV 90681-3632',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(82,68618664,'Dr. Arnold Kautzer PhD','Runolfsdottir','27424 Bruen Run Apt. 366\nKarlville, IN 59176-0350',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(83,65071735,'Neil Lowe DVM','Hayes','822 Flatley Springs\nPort Tanyashire, MO 15917',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(84,85715923,'Noelia Fadel','Funk','33683 Brian Glen Suite 011\nCedrickfurt, ID 09552',NULL,NULL,NULL,NULL,'user.png',3,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(85,60001905,'Van Deckow','Hirthe','2018 Jennings Islands Apt. 276\nLake Jarretburgh, KS 44650',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(86,42135817,'Valerie Funk','Brown','758 Casimir Crest Apt. 819\nEast Ramiro, OK 70228-3128',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(87,39589205,'Alexane Morar','Wunsch','31553 Cecil Key Suite 251\nAndersonstad, AZ 56587-8792',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(88,29636703,'Alexandro Torp','O\'Conner','7495 Tess Garden\nRoxanebury, NC 66998',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(89,87740774,'Archibald Heaney','Schuster','93078 Rodolfo Gardens Suite 854\nNorth Edyth, NV 43582',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(90,77430501,'Karina Adams','Hamill','932 Elenora Point Apt. 137\nEast Bert, NE 71837',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(91,20665920,'Hans West','Ryan','5864 Bergnaum Meadows Apt. 091\nSouth Gastonmouth, MO 92437',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(92,37687351,'Dr. Jaclyn Schoen I','Rutherford','77093 Winona Drives\nAdrienfurt, GA 96211',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(93,53569802,'Dena Runte','Moen','8759 Schumm Row Apt. 556\nWest Meredithchester, FL 30163',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(94,24396672,'Alexander Schmitt','Mitchell','63905 Dicki Roads Apt. 333\nPort Doug, ID 25819',NULL,NULL,NULL,NULL,'user.png',10,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(95,28328477,'Adolphus Parker','Reichert','628 Mossie Freeway Suite 385\nIssacbury, ND 92134-9404',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(96,21217080,'Garnet Cole','Jones','27958 Emmy Plaza\nShieldsmouth, FL 31366',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(97,71398480,'Emory Buckridge','Runolfsdottir','39400 Reichel Courts Apt. 808\nKaiaborough, AL 90653',NULL,NULL,NULL,NULL,'user.png',6,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(98,16008368,'Aron Purdy','Brekke','164 Beier Stravenue\nMayertberg, IN 04216-3289',NULL,NULL,NULL,NULL,'user.png',11,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(99,24549621,'Dorothy Mann','Mohr','941 Annamae Lights Suite 236\nReynoldsfort, WY 91736-9786',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(100,73325059,'Dr. Rita Bartoletti','Medhurst','51720 Marco Way Apt. 918\nLake Avisland, RI 99592-0624',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(101,43264240,'Jenifer Lubowitz','Shields','1389 Buck Summit Suite 472\nPort Stacytown, WI 56697',NULL,NULL,NULL,NULL,'user.png',4,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(102,30715994,'Wendell Wunsch','Gorczany','398 Graciela Knolls Suite 441\nWest Penelopeland, OK 70887',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(103,27239583,'Peter Rohan','Rolfson','869 Mina Islands Apt. 605\nPort Hayden, NJ 71995-3612',NULL,NULL,NULL,NULL,'user.png',1,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(104,82754362,'Anya Stokes','Ward','377 Kub Locks Apt. 244\nEast Carli, OK 73225-0755',NULL,NULL,NULL,NULL,'user.png',5,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(105,39522089,'Hettie Kemmer','Turcotte','4502 Hoppe Rue\nLawrencetown, NE 45695',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(106,62203045,'Olin Mosciski','Kovacek','24269 Dannie Village Suite 954\nNorrisshire, MD 54982',NULL,NULL,NULL,NULL,'user.png',2,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(107,87581799,'Elody Farrell','Stracke','425 Glover Squares\nNaderburgh, TX 98598-0193',NULL,NULL,NULL,NULL,'user.png',8,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(108,40501839,'Elisa Steuber','Heller','8985 Kuvalis Terrace\nWaelchiville, RI 11015',NULL,NULL,NULL,NULL,'user.png',7,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30'),(109,57335758,'Dr. Citlalli Walsh V','Hessel','3984 Prohaska Mount Suite 544\nWest Al, CO 48732-6904',NULL,NULL,NULL,NULL,'user.png',9,'e','123456','1','2017-06-19 01:07:30','2017-06-19 01:07:30');
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegio_cargo`
--

LOCK TABLES `privilegio_cargo` WRITE;
/*!40000 ALTER TABLE `privilegio_cargo` DISABLE KEYS */;
INSERT INTO `privilegio_cargo` VALUES (1,1,1,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(2,1,2,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(3,1,3,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(4,1,4,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(5,1,5,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(6,1,6,'0','123456','1','2017-06-17 14:13:01','2017-06-17 14:13:01'),(7,2,1,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(8,2,2,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(9,2,3,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(10,2,4,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(11,2,5,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(12,2,6,'0','123456','1','2017-06-17 14:13:23','2017-06-17 14:13:23'),(13,3,1,'0','123456','1','2017-06-17 14:13:52','2017-06-17 14:13:52'),(14,3,2,'0','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(15,3,3,'0','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(16,3,4,'0','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(17,3,5,'0','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(18,3,6,'0','123456','1','2017-06-17 14:13:53','2017-06-17 14:13:53'),(19,4,1,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(20,4,2,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(21,4,3,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(22,4,4,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(23,4,5,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(24,4,6,'0','123456','1','2017-06-17 14:14:09','2017-06-17 14:14:09'),(25,5,1,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(26,5,2,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(27,5,3,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(28,5,4,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(29,5,5,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(30,5,6,'0','123456','1','2017-06-17 14:14:50','2017-06-17 14:14:50'),(31,6,1,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(32,6,2,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(33,6,3,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(34,6,4,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(35,6,5,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(36,6,6,'0','123456','1','2017-06-17 14:15:27','2017-06-17 14:15:27'),(37,7,1,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(38,7,2,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(39,7,3,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(40,7,4,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(41,7,5,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(42,7,6,'0','123456','1','2017-06-17 14:16:35','2017-06-17 14:16:35'),(43,8,1,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(44,8,2,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(45,8,3,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(46,8,4,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(47,8,5,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(48,8,6,'0','123456','1','2017-06-17 14:17:00','2017-06-17 14:17:00'),(49,9,1,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(50,9,2,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(51,9,3,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(52,9,4,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(53,9,5,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(54,9,6,'0','123456','1','2017-06-17 14:17:26','2017-06-17 14:17:26'),(55,10,1,'0','123456','1','2017-06-17 14:17:48','2017-06-17 14:17:48'),(56,10,2,'0','123456','1','2017-06-17 14:17:48','2017-06-17 14:17:48'),(57,10,3,'0','123456','1','2017-06-17 14:17:48','2017-06-17 14:17:48'),(58,10,4,'0','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(59,10,5,'0','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(60,10,6,'0','123456','1','2017-06-17 14:17:49','2017-06-17 14:17:49'),(61,11,1,'0','123456','1','2017-06-18 21:38:54','2017-06-18 21:38:54'),(62,11,2,'0','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(63,11,3,'0','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(64,11,4,'0','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(65,11,5,'0','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55'),(66,11,6,'0','123456','1','2017-06-18 21:38:55','2017-06-18 21:38:55');
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegio_usuario`
--

LOCK TABLES `privilegio_usuario` WRITE;
/*!40000 ALTER TABLE `privilegio_usuario` DISABLE KEYS */;
INSERT INTO `privilegio_usuario` VALUES (1,2,1,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(2,2,2,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(3,2,3,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(4,2,4,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(5,2,5,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(6,2,6,'0','123456','1','2017-06-18 15:06:35','2017-06-18 15:06:35'),(7,3,1,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(8,3,2,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(9,3,3,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(10,3,4,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(11,3,5,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(12,3,6,'0','123456','1','2017-06-18 15:10:47','2017-06-18 15:10:47'),(13,4,1,'0','123456','1','2017-06-18 15:11:39','2017-06-18 15:11:39'),(14,4,2,'0','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(15,4,3,'0','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(16,4,4,'0','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(17,4,5,'0','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(18,4,6,'0','123456','1','2017-06-18 15:11:40','2017-06-18 15:11:40'),(19,5,1,'0','123456','1','2017-06-18 15:12:09','2017-06-18 15:12:09'),(20,5,2,'0','123456','1','2017-06-18 15:12:09','2017-06-18 15:12:09'),(21,5,3,'0','123456','1','2017-06-18 15:12:09','2017-06-18 15:12:09'),(22,5,4,'0','123456','1','2017-06-18 15:12:09','2017-06-18 15:12:09'),(23,5,5,'0','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(24,5,6,'0','123456','1','2017-06-18 15:12:10','2017-06-18 15:12:10'),(25,6,1,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(26,6,2,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(27,6,3,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(28,6,4,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(29,6,5,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(30,6,6,'0','123456','1','2017-06-18 15:13:01','2017-06-18 15:13:01'),(31,7,1,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(32,7,2,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(33,7,3,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(34,7,4,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(35,7,5,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(36,7,6,'0','123456','1','2017-06-18 15:14:56','2017-06-18 15:14:56'),(37,8,1,'0','123456','1','2017-06-18 15:16:22','2017-06-18 15:16:22'),(38,8,2,'0','123456','1','2017-06-18 15:16:22','2017-06-18 15:16:22'),(39,8,3,'0','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(40,8,4,'0','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(41,8,5,'0','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(42,8,6,'0','123456','1','2017-06-18 15:16:23','2017-06-18 15:16:23'),(43,9,1,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(44,9,2,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(45,9,3,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(46,9,4,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(47,9,5,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(48,9,6,'0','123456','1','2017-06-18 15:16:59','2017-06-18 15:16:59'),(49,10,1,'0','123456','1','2017-06-19 09:49:46','2017-06-19 09:49:46'),(50,10,2,'0','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(51,10,3,'0','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(52,10,4,'0','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(53,10,5,'0','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(54,10,6,'0','123456','1','2017-06-19 09:49:47','2017-06-19 09:49:47'),(55,11,1,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(56,11,2,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(57,11,3,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(58,11,4,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(59,11,5,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59'),(60,11,6,'0','123456','1','2017-06-19 09:51:59','2017-06-19 09:51:59');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_venta`
--

LOCK TABLES `producto_venta` WRITE;
/*!40000 ALTER TABLE `producto_venta` DISABLE KEYS */;
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
  `idEmpleado` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_sanitizacion_idinfraestructura_foreign` (`idInfraestructura`),
  KEY `registro_sanitizacion_idempleado_foreign` (`idEmpleado`),
  CONSTRAINT `registro_sanitizacion_idempleado_foreign` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`),
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
INSERT INTO `telefono` VALUES (1,79015753,1,'123456','0','2017-06-17 15:45:03','2017-06-17 15:54:19'),(2,4521360,5,'123456','1','2017-06-18 01:26:58','2017-06-18 01:26:58');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traspaso_huevo`
--

LOCK TABLES `traspaso_huevo` WRITE;
/*!40000 ALTER TABLE `traspaso_huevo` DISABLE KEYS */;
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
  `idGalpon` int(10) unsigned NOT NULL,
  `idParvada` int(10) unsigned NOT NULL,
  `idEtapa` int(10) unsigned NOT NULL,
  `idEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `traspaso_parvada_idgalpon_foreign` (`idGalpon`),
  KEY `traspaso_parvada_idparvada_foreign` (`idParvada`),
  KEY `traspaso_parvada_idetapa_foreign` (`idEtapa`),
  CONSTRAINT `traspaso_parvada_idetapa_foreign` FOREIGN KEY (`idEtapa`) REFERENCES `etapa` (`id`),
  CONSTRAINT `traspaso_parvada_idgalpon_foreign` FOREIGN KEY (`idGalpon`) REFERENCES `infraestructura` (`id`),
  CONSTRAINT `traspaso_parvada_idparvada_foreign` FOREIGN KEY (`idParvada`) REFERENCES `parvada` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traspaso_parvada`
--

LOCK TABLES `traspaso_parvada` WRITE;
/*!40000 ALTER TABLE `traspaso_parvada` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sergio Weimar','user.png','ser61_ol@yahoo.es','$2y$10$5DmPcqTVszx/VDu.ptltZ.vZBb9eH46EneHlXxMQlxFNRNrkAtQLO','1',NULL,'123456','a',NULL,'1','GK4EbTHeubrbKsR8IqzA9jCRgxEDagycB5VX0WlnqKtysZr4Eui3PBcBq5V7','2017-06-17 14:11:59','2017-06-19 14:23:22'),(2,'SA-Sergio Weimar','user.png','sergio@sergio.com','$2y$10$3X2NHvJ131ojcxpjyK.53epIJHsvZEYmEGt875bZnSlhwN7zS0Ggm','0',1,'123456','u','0','1','8IWpr73Lyr9hYXCyFxAeiErwkxHBGJNwD5Pl0T95lwjJBT4UoVuHEG9hupaX','2017-06-18 15:06:35','2017-06-25 14:18:01'),(3,'SA-Alex','user.png','alex@alex.com','$2y$10$0cSVo0l3eZcDoJ8Pb9x6I.NEBbJYyA7vyHP8lBzWrx2.yLDufFwPW','0',2,'123456','u','0','1','7BcW2StKELOYalhiEx8EPaKRQQIEMjodhn8cre464eTLb83n7lViIWzu6iXx','2017-06-18 15:10:47','2017-06-19 14:09:19'),(4,'SA-Marco','user.png','marco@gamil.com','$2y$10$BJsFqCxNPOGYDyXz4XVjreQDUPp8Ijs7TFZ5tn7NMeMAHPKJtJq1K','0',3,'123456','u','0','1',NULL,'2017-06-18 15:11:39','2017-06-18 15:11:39'),(5,'SA-Maria','user.png','maria@maria.com','$2y$10$niO.BTk0KTxD8JNzrdfFFuBBUhoVK7UvsvxZztv9lXM1cW3u0qhfO','0',4,'123456','u','0','1',NULL,'2017-06-18 15:12:09','2017-06-18 15:12:09'),(6,'SA-Sebastian','user.png','serbastian@sebastian.com','$2y$10$MYLaXl.Wmq3tJ/kFz3YB3eJMJw8XLtLQhCgC9ugzwfdYzhA4SmBbW','0',5,'123456','u','0','1',NULL,'2017-06-18 15:13:01','2017-06-18 15:13:01'),(7,'SA-Joaquin','user.png','joaquin@joaquin.com','$2y$10$UNiYiVw34uHEEZGZxINzSeupYozIi91c/m6RQty5cjW6V6aHtCq32','0',6,'123456','u','0','1',NULL,'2017-06-18 15:14:56','2017-06-18 15:14:56'),(8,'SA-Ernesto','user.png','ernesto@ernesto.com','$2y$10$N/UZr2fHeVp3Fae9EGqj8uY.K6B/AyPYVEt0cS4tjkwMYcS7Kh.o.','0',7,'123456','u','0','1',NULL,'2017-06-18 15:16:22','2017-06-18 15:16:22'),(9,'SA-Charli','user.png','charli@char.com','$2y$10$MvHvp.RMD5qIwPE1IWc7eOQ06jK3w0R94zh0XOQo98xYuMIaKksOq','0',8,'123456','u','0','1',NULL,'2017-06-18 15:16:58','2017-06-18 15:16:58'),(10,'SA-Peter','user.png','peter@peter.com','$2y$10$b2uGne2Tzd7b18B4tlKQpOaWUUQzrLlVeg8f0MK/yAKmaeJouUZ7C','0',103,'123456','u','0','1',NULL,'2017-06-19 09:49:46','2017-06-19 09:49:46'),(11,'SA-Myah','user.png','miah@miah.com','$2y$10$.KyEFITR09gMR9Oqbagx1.Z.7c7dcsCF9oNZIQei9JWwyHykS1Tpi','0',17,'123456','u','0','1',NULL,'2017-06-19 09:51:59','2017-06-19 09:51:59');
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

-- Dump completed on 2017-07-01 15:31:38