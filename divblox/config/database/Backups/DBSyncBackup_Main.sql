-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: ss-mysql-server-01.mysql.database.azure.com    Database: dx_sandbox_OmV6weMthrR7
-- ------------------------------------------------------
-- Server version	5.6.39.0

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
-- Table structure for table `Account`
--

DROP TABLE IF EXISTS `Account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Account` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `FirstName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `MiddleNames` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `LastName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `EmailAddress` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `MaidenName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ProfilePicturePath` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `MainContactNumber` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Title` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `PhysicalAddressLineOne` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PhysicalAddressLineTwo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PhysicalAddressPostalCode` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PhysicalAddressCountry` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PostalAddressLineOne` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PostalAddressLineTwo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PostalAddressPostalCode` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `PostalAddressCountry` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `IdentificationNumber` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Nickname` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `Gender` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `AccessBlocked` tinyint(1) DEFAULT NULL,
  `BlockedReason` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UserRole` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Username` (`Username`),
  KEY `UserRole` (`UserRole`),
  CONSTRAINT `6a2da24856d255740c3182182ca5c60e` FOREIGN KEY (`UserRole`) REFERENCES `userrole` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Account`
--

LOCK TABLES `Account` WRITE;
/*!40000 ALTER TABLE `Account` DISABLE KEYS */;
INSERT INTO `Account` VALUES (1,'Johan  Griesel','Johan',NULL,'Griesel','johan@stratusolve.com','johan@stratusolve.com','$2y$10$PbK83G6YKlhQP/csP4VsU.5FINi8JK0gXjJ7.lomGPS0vLoIEzk3K',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-29 09:30:45',2,NULL,-1);
/*!40000 ALTER TABLE `Account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AdditionalAccountInformation`
--

DROP TABLE IF EXISTS `AdditionalAccountInformation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AdditionalAccountInformation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Label` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Value` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Account` (`Account`),
  CONSTRAINT `f2c7efa609f33882ec16c38c0184af91` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AdditionalAccountInformation`
--

LOCK TABLES `AdditionalAccountInformation` WRITE;
/*!40000 ALTER TABLE `AdditionalAccountInformation` DISABLE KEYS */;
/*!40000 ALTER TABLE `AdditionalAccountInformation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuditLogEntry`
--

DROP TABLE IF EXISTS `AuditLogEntry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuditLogEntry` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EntryTimeStamp` datetime DEFAULT NULL,
  `ObjectName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ModificationType` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `UserEmail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ObjectId` text CHARACTER SET latin1,
  `AuditLogEntryDetail` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuditLogEntry`
--

LOCK TABLES `AuditLogEntry` WRITE;
/*!40000 ALTER TABLE `AuditLogEntry` DISABLE KEYS */;
INSERT INTO `AuditLogEntry` VALUES (1,'2019-08-29 10:29:03','ClientConnection','Create','Anonymous','1','{\"Id\":null,\"ClientIpAddress\":\"105.246.40.83\",\"ClientUserAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.132 Safari\\/537.36;https:\\/\\/sandbox.deploydx.com\",\"UpdateDateTime\":{\"date\":\"2019-08-29 10:29:03.113766\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"Account\":null,\"SearchMetaInfo\":null,\"LastUpdated\":null,\"ObjectOwner\":null}','2019-08-29 08:29:03',-1),(2,'2019-08-29 10:29:03','ClientAuthenticationToken','Create','Anonymous','1','{\"Id\":null,\"Token\":\"5597afffe12a424f7a72b68777bc4bb7\",\"UpdateDateTime\":{\"date\":\"2019-08-29 10:29:03.109932\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"ClientConnection\":1,\"SearchMetaInfo\":null,\"LastUpdated\":null,\"ObjectOwner\":null,\"ExpiredToken\":null}','2019-08-29 08:29:03',-1),(3,'2019-08-29 10:29:04','ClientConnection','Create','Anonymous','2','{\"Id\":null,\"ClientIpAddress\":\"105.246.40.83\",\"ClientUserAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.132 Safari\\/537.36;https:\\/\\/sandbox.deploydx.com\",\"UpdateDateTime\":{\"date\":\"2019-08-29 10:29:04.202347\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"Account\":null,\"SearchMetaInfo\":null,\"LastUpdated\":null,\"ObjectOwner\":null}','2019-08-29 08:29:04',-1),(4,'2019-08-29 10:29:04','ClientAuthenticationToken','Create','Anonymous','2','{\"Id\":null,\"Token\":\"7d36d813382e0618ef9b77c85e3f2e5e\",\"UpdateDateTime\":{\"date\":\"2019-08-29 10:29:04.198691\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"ClientConnection\":2,\"SearchMetaInfo\":null,\"LastUpdated\":null,\"ObjectOwner\":null,\"ExpiredToken\":null}','2019-08-29 08:29:04',-1),(5,'2019-08-29 10:29:04','ClientAuthenticationToken','Update','Anonymous','1','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:03.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 10:29:04.484902\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 08:29:04',-1),(6,'2019-08-29 10:29:04','ClientConnection','Update','Anonymous','1','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:03.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 10:29:04.484926\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 08:29:04',-1),(7,'2019-08-29 10:29:04','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:04.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 10:29:04.720699\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 08:29:04',-1),(8,'2019-08-29 10:29:04','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:04.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 10:29:04.720711\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 08:29:04',-1),(9,'2019-08-29 11:02:09','ClientAuthenticationToken','Update','Anonymous','2','{\"Token\":{\"Before\":\"7d36d813382e0618ef9b77c85e3f2e5e\",\"After\":\"430e934d8a77eca0df5d7ba492708154\"},\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:04.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.348546\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}},\"ExpiredToken\":{\"Before\":\"NULL\",\"After\":\"7d36d813382e0618ef9b77c85e3f2e5e\"}}','2019-08-29 09:02:09',-1),(10,'2019-08-29 11:02:09','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 10:29:04.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.348572\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:09',-1),(11,'2019-08-29 11:02:09','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.594070\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:09',-1),(12,'2019-08-29 11:02:09','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.594093\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:09',-1),(13,'2019-08-29 11:02:09','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.838608\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:09',-1),(14,'2019-08-29 11:02:09','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:09.838619\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:09',-1),(15,'2019-08-29 11:02:10','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:10.043835\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:10',-1),(16,'2019-08-29 11:02:10','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:09.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:10.043855\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:10',-1),(17,'2019-08-29 11:02:29','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:10.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:29.454213\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:29',-1),(18,'2019-08-29 11:02:29','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:10.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:29.454230\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:29',-1),(19,'2019-08-29 11:02:34','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:29.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.022495\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(20,'2019-08-29 11:02:34','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:29.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.022512\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(21,'2019-08-29 11:02:34','RequestStatus','Create','Anonymous','1','{\"Id\":null,\"StatusLabel\":\"Open\",\"LastUpdated\":null,\"ObjectOwner\":-1}','2019-08-29 09:02:34',-1),(22,'2019-08-29 11:02:34','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.323826\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(23,'2019-08-29 11:02:34','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.323842\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(24,'2019-08-29 11:02:34','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.571419\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(25,'2019-08-29 11:02:34','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:34.571437\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:34',-1),(26,'2019-08-29 11:02:41','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:41.288738\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:41',-1),(27,'2019-08-29 11:02:41','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:34.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:41.288756\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:41',-1),(28,'2019-08-29 11:02:44','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:41.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.490740\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:44',-1),(29,'2019-08-29 11:02:44','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:41.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.490751\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:44',-1),(30,'2019-08-29 11:02:44','RequestStatus','Create','Anonymous','2','{\"Id\":null,\"StatusLabel\":\"Closed\",\"LastUpdated\":null,\"ObjectOwner\":-1}','2019-08-29 09:02:44',-1),(31,'2019-08-29 11:02:44','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.746472\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:44',-1),(32,'2019-08-29 11:02:44','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.746484\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:44',-1),(33,'2019-08-29 11:02:44','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.960285\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:44',-1),(34,'2019-08-29 11:02:44','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:44.960296\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:45',-1),(35,'2019-08-29 11:02:48','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:48.183591\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:48',-1),(36,'2019-08-29 11:02:48','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:48.183617\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:48',-1),(37,'2019-08-29 11:02:57','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:57.518417\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:57',-1),(38,'2019-08-29 11:02:57','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:02:57.518427\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:02:57',-1),(39,'2019-08-29 11:26:34','StockPhotoRequest','Create','Anonymous','1','{\"Id\":null,\"RequestText\":\"aaaa\",\"CreatedDateTime\":{\"date\":\"2019-08-29 11:26:34.526495\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"LastUpdated\":null,\"Account\":null,\"SearchMetaInfo\":null,\"RequestStatus\":1,\"ObjectOwner\":-1}','2019-08-29 09:26:34',-1),(40,'2019-08-29 11:27:20','StockPhotoRequest','Create','Anonymous','2','{\"Id\":null,\"RequestText\":\"bbbb\",\"CreatedDateTime\":{\"date\":\"2019-08-29 11:27:20.415547\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"LastUpdated\":null,\"Account\":null,\"SearchMetaInfo\":null,\"RequestStatus\":1,\"ObjectOwner\":-1}','2019-08-29 09:27:20',-1),(41,'2019-08-29 11:29:30','ClientAuthenticationToken','Update','Anonymous','2','{\"Token\":{\"Before\":\"430e934d8a77eca0df5d7ba492708154\",\"After\":\"4badf5a5f93355d732cfde94e892d4a1\"},\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:57.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:30.138475\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}},\"ExpiredToken\":{\"Before\":\"NULL\",\"After\":\"430e934d8a77eca0df5d7ba492708154\"}}','2019-08-29 09:29:30',-1),(42,'2019-08-29 11:29:30','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:02:57.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:30.138518\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:30',-1),(43,'2019-08-29 11:29:30','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:30.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:30.424014\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:30',-1),(44,'2019-08-29 11:29:30','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:30.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:30.424050\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:30',-1),(45,'2019-08-29 11:29:38','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:30.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:38.154016\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:38',-1),(46,'2019-08-29 11:29:38','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:30.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:38.154033\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:38',-1),(47,'2019-08-29 11:29:38','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:38.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:38.422915\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:38',-1),(48,'2019-08-29 11:29:38','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:38.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:29:38.422941\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:29:38',-1),(49,'2019-08-29 11:30:13','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:38.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:13.993222\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(50,'2019-08-29 11:30:14','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:29:38.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:13.993251\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(51,'2019-08-29 11:30:14','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:13.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.243679\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(52,'2019-08-29 11:30:14','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:13.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.243695\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(53,'2019-08-29 11:30:14','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.525344\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(54,'2019-08-29 11:30:14','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.525384\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(55,'2019-08-29 11:30:14','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.762143\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(56,'2019-08-29 11:30:14','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:14.762160\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:14',-1),(57,'2019-08-29 11:30:27','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:27.849963\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:27',-1),(58,'2019-08-29 11:30:27','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:14.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:27.850000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:27',-1),(59,'2019-08-29 11:30:28','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:28.095457\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:28',-1),(60,'2019-08-29 11:30:28','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:28.095475\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:28',-1),(61,'2019-08-29 11:30:45','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:28.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:45.102655\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:45',-1),(62,'2019-08-29 11:30:45','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:28.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:45.102690\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:45',-1),(63,'2019-08-29 11:30:45','Account','Create','Anonymous','1','{\"Id\":null,\"FullName\":\"Johan  Griesel\",\"FirstName\":\"Johan\",\"MiddleNames\":null,\"LastName\":\"Griesel\",\"EmailAddress\":\"johan@stratusolve.com\",\"Username\":\"johan@stratusolve.com\",\"Password\":\"$2y$10$PbK83G6YKlhQP\\/csP4VsU.5FINi8JK0gXjJ7.lomGPS0vLoIEzk3K\",\"MaidenName\":null,\"ProfilePicturePath\":null,\"MainContactNumber\":null,\"Title\":null,\"DateOfBirth\":null,\"PhysicalAddressLineOne\":null,\"PhysicalAddressLineTwo\":null,\"PhysicalAddressPostalCode\":null,\"PhysicalAddressCountry\":null,\"PostalAddressLineOne\":null,\"PostalAddressLineTwo\":null,\"PostalAddressPostalCode\":null,\"PostalAddressCountry\":null,\"IdentificationNumber\":null,\"Nickname\":null,\"Status\":null,\"Gender\":null,\"AccessBlocked\":null,\"BlockedReason\":null,\"LastUpdated\":null,\"UserRole\":2,\"SearchMetaInfo\":null,\"ObjectOwner\":-1}','2019-08-29 09:30:45',-1),(64,'2019-08-29 11:30:45','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:45.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:45.516371\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:45',-1),(65,'2019-08-29 11:30:45','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:45.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:45.516388\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:45',-1),(66,'2019-08-29 11:30:48','ClientAuthenticationToken','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:45.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:48.074666\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:48',-1),(67,'2019-08-29 11:30:48','ClientConnection','Update','Anonymous','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:45.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:48.074682\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:48',-1),(68,'2019-08-29 11:30:48','ClientConnection','Update','Anonymous','2','{\"Account\":{\"Before\":\"NULL\",\"After\":1}}','2019-08-29 09:30:48',1),(69,'2019-08-29 11:30:48','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:48.790030\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:48',1),(70,'2019-08-29 11:30:48','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:48.790067\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:48',1),(71,'2019-08-29 11:30:49','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.062102\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(72,'2019-08-29 11:30:49','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:48.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.062119\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(73,'2019-08-29 11:30:49','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.338358\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(74,'2019-08-29 11:30:49','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.338382\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(75,'2019-08-29 11:30:49','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.629724\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(76,'2019-08-29 11:30:49','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.629741\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(77,'2019-08-29 11:30:49','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.875772\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(78,'2019-08-29 11:30:49','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:49.875788\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:49',1),(79,'2019-08-29 11:30:50','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.128082\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(80,'2019-08-29 11:30:50','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:49.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.128100\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(81,'2019-08-29 11:30:50','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.507482\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(82,'2019-08-29 11:30:50','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.507499\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(83,'2019-08-29 11:30:50','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.768205\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(84,'2019-08-29 11:30:50','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:30:50.768223\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:30:50',1),(85,'2019-08-29 11:30:55','StockPhotoRequest','Create','johan@stratusolve.com','3','{\"Id\":null,\"RequestText\":\"Testing\",\"CreatedDateTime\":{\"date\":\"2019-08-29 11:30:55.252685\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"LastUpdated\":null,\"Account\":1,\"SearchMetaInfo\":null,\"RequestStatus\":1,\"ObjectOwner\":1}','2019-08-29 09:30:55',1),(86,'2019-08-29 11:31:00','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:31:00.165165\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:31:00',1),(87,'2019-08-29 11:31:00','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:30:50.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:31:00.165183\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:31:00',1),(88,'2019-08-29 11:46:16','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:31:00.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:46:16.900361\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:46:16',1),(89,'2019-08-29 11:46:16','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:31:00.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:46:16.900379\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:46:16',1),(90,'2019-08-29 11:46:17','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:46:16.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:46:17.177634\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:46:17',1),(91,'2019-08-29 11:46:17','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:46:16.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:46:17.177651\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:46:17',1),(92,'2019-08-29 11:49:01','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:46:17.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:49:01.220311\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:49:01',1),(93,'2019-08-29 11:49:01','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:46:17.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:49:01.220343\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:49:01',1),(94,'2019-08-29 11:49:01','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:49:01.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:49:01.516578\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:49:01',1),(95,'2019-08-29 11:49:01','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:49:01.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:49:01.516603\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:49:01',1),(96,'2019-08-29 11:58:27','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:49:01.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:27.030738\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:27',1),(97,'2019-08-29 11:58:27','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:49:01.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:27.030775\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:27',1),(98,'2019-08-29 11:58:27','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:27.344668\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:27',1),(99,'2019-08-29 11:58:27','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:27.344705\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:27',1),(100,'2019-08-29 11:58:28','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:28.928319\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:28',1),(101,'2019-08-29 11:58:28','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:27.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:28.928356\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:29',1),(102,'2019-08-29 11:58:29','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:28.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:29.203114\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:29',1),(103,'2019-08-29 11:58:29','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:28.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 11:58:29.203128\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 09:58:29',1),(104,'2019-08-29 12:02:44','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:29.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:02:44.366797\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:02:44',1),(105,'2019-08-29 12:02:44','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 11:58:29.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:02:44.366830\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:02:44',1),(106,'2019-08-29 12:02:44','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 12:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:02:44.642466\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:02:44',1),(107,'2019-08-29 12:02:44','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 12:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:02:44.642483\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:02:44',1),(108,'2019-08-29 12:03:53','ClientAuthenticationToken','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 12:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:03:53.969647\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:03:53',1),(109,'2019-08-29 12:03:54','ClientConnection','Update','johan@stratusolve.com','2','{\"UpdateDateTime\":{\"Before\":{\"date\":\"2019-08-29 12:02:44.000000\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"},\"After\":{\"date\":\"2019-08-29 12:03:53.969671\",\"timezone_type\":3,\"timezone\":\"Africa\\/Johannesburg\"}}}','2019-08-29 10:03:54',1),(110,'2019-08-29 12:03:54','FileDocument','Create','johan@stratusolve.com','1','{\"Id\":null,\"FileName\":\"7bfa8ace20412cb51b7c0c67768c1dac.jpeg\",\"Path\":\"\\/usr\\/www\\/users\\/sandbdbewy\\/OmV6weMthrR7\\/project\\/uploads\\/7bfa8ace20412cb51b7c0c67768c1dac.jpeg\",\"UploadedFileName\":\"WhatsApp Image 2019-08-24 at 18.35.55.jpeg\",\"FileType\":\"image\\/jpeg\",\"SizeInKilobytes\":\"123.60 KB\",\"CreatedDate\":null,\"LastUpdated\":null,\"ObjectOwner\":1}','2019-08-29 10:03:54',1);
/*!40000 ALTER TABLE `AuditLogEntry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BackgroundProcess`
--

DROP TABLE IF EXISTS `BackgroundProcess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BackgroundProcess` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PId` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `UserId` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `UpdateDateTime` datetime DEFAULT NULL,
  `Status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Summary` text CHARACTER SET latin1,
  `StartDateTime` datetime DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BackgroundProcess`
--

LOCK TABLES `BackgroundProcess` WRITE;
/*!40000 ALTER TABLE `BackgroundProcess` DISABLE KEYS */;
/*!40000 ALTER TABLE `BackgroundProcess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BackgroundProcessUpdate`
--

DROP TABLE IF EXISTS `BackgroundProcessUpdate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BackgroundProcessUpdate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UpdateDateTime` datetime DEFAULT NULL,
  `UpdateMessage` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `BackgroundProcess` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `BackgroundProcess` (`BackgroundProcess`),
  CONSTRAINT `833be56d0e361e2d332741b299e24fb7` FOREIGN KEY (`BackgroundProcess`) REFERENCES `backgroundprocess` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BackgroundProcessUpdate`
--

LOCK TABLES `BackgroundProcessUpdate` WRITE;
/*!40000 ALTER TABLE `BackgroundProcessUpdate` DISABLE KEYS */;
/*!40000 ALTER TABLE `BackgroundProcessUpdate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ClientAuthenticationToken`
--

DROP TABLE IF EXISTS `ClientAuthenticationToken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClientAuthenticationToken` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Token` varchar(50) CHARACTER SET latin1 NOT NULL,
  `UpdateDateTime` datetime DEFAULT NULL,
  `ExpiredToken` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ClientConnection` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Token` (`Token`),
  UNIQUE KEY `ExpiredToken` (`ExpiredToken`),
  KEY `ClientConnection` (`ClientConnection`),
  CONSTRAINT `f890a96dcf57efde47ddad9017c90751` FOREIGN KEY (`ClientConnection`) REFERENCES `clientconnection` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClientAuthenticationToken`
--

LOCK TABLES `ClientAuthenticationToken` WRITE;
/*!40000 ALTER TABLE `ClientAuthenticationToken` DISABLE KEYS */;
INSERT INTO `ClientAuthenticationToken` VALUES (1,'5597afffe12a424f7a72b68777bc4bb7','2019-08-29 10:29:04',NULL,'2019-08-29 08:29:04',1,NULL,NULL),(2,'4badf5a5f93355d732cfde94e892d4a1','2019-08-29 12:03:53','430e934d8a77eca0df5d7ba492708154','2019-08-29 10:03:53',2,NULL,NULL);
/*!40000 ALTER TABLE `ClientAuthenticationToken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ClientConnection`
--

DROP TABLE IF EXISTS `ClientConnection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClientConnection` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ClientIpAddress` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ClientUserAgent` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `UpdateDateTime` datetime DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Account` (`Account`),
  CONSTRAINT `71da56b0f315ba0638f3a680b7945617` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClientConnection`
--

LOCK TABLES `ClientConnection` WRITE;
/*!40000 ALTER TABLE `ClientConnection` DISABLE KEYS */;
INSERT INTO `ClientConnection` VALUES (1,'105.246.40.83','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36;https://sandbox.deploydx.com','2019-08-29 10:29:04','2019-08-29 08:29:04',NULL,NULL,NULL),(2,'105.246.40.83','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36;https://sandbox.deploydx.com','2019-08-29 12:03:53','2019-08-29 10:03:54',1,NULL,NULL);
/*!40000 ALTER TABLE `ClientConnection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EmailMessage`
--

DROP TABLE IF EXISTS `EmailMessage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EmailMessage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SentDate` datetime DEFAULT NULL,
  `FromAddress` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `ReplyEmail` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Recipients` text CHARACTER SET latin1,
  `Cc` text CHARACTER SET latin1,
  `Bcc` text CHARACTER SET latin1,
  `Subject` text CHARACTER SET latin1,
  `EmailMessage` text CHARACTER SET latin1,
  `Attachments` text CHARACTER SET latin1,
  `ErrorInfo` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EmailMessage`
--

LOCK TABLES `EmailMessage` WRITE;
/*!40000 ALTER TABLE `EmailMessage` DISABLE KEYS */;
/*!40000 ALTER TABLE `EmailMessage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FileDocument`
--

DROP TABLE IF EXISTS `FileDocument`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FileDocument` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Path` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `UploadedFileName` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `FileType` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `SizeInKilobytes` double DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileDocument`
--

LOCK TABLES `FileDocument` WRITE;
/*!40000 ALTER TABLE `FileDocument` DISABLE KEYS */;
INSERT INTO `FileDocument` VALUES (1,'7bfa8ace20412cb51b7c0c67768c1dac.jpeg','/project/uploads/7bfa8ace20412cb51b7c0c67768c1dac.jpeg','WhatsApp Image 2019-08-24 at 18.35.55.jpeg','image/jpeg',123.6,'2019-08-29 12:03:54','2019-08-29 10:03:54',1);
/*!40000 ALTER TABLE `FileDocument` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PageView`
--

DROP TABLE IF EXISTS `PageView`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PageView` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TimeStamped` datetime DEFAULT NULL,
  `IPAddress` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `PageDetails` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `UserAgentDetails` text CHARACTER SET latin1,
  `UserRole` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Username` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PageView`
--

LOCK TABLES `PageView` WRITE;
/*!40000 ALTER TABLE `PageView` DISABLE KEYS */;
/*!40000 ALTER TABLE `PageView` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PasswordReset`
--

DROP TABLE IF EXISTS `PasswordReset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PasswordReset` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Token` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Token` (`Token`),
  KEY `Account` (`Account`),
  CONSTRAINT `a26ac5ad6feb478f6f79e701dacab2dd` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PasswordReset`
--

LOCK TABLES `PasswordReset` WRITE;
/*!40000 ALTER TABLE `PasswordReset` DISABLE KEYS */;
/*!40000 ALTER TABLE `PasswordReset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PhotoSubmission`
--

DROP TABLE IF EXISTS `PhotoSubmission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PhotoSubmission` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IsAccepted` tinyint(1) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT NULL,
  `PhotoFilePath` text CHARACTER SET latin1,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `StockPhotoRequest` int(11) DEFAULT NULL,
  `FileDocument` int(11) DEFAULT NULL,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Account` (`Account`),
  KEY `StockPhotoRequest` (`StockPhotoRequest`),
  KEY `FileDocument` (`FileDocument`),
  CONSTRAINT `134cd3f4775210782f98aa347d8e7cf6` FOREIGN KEY (`FileDocument`) REFERENCES `filedocument` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `a4272a85f15df15aab9e8f7ad20046cd` FOREIGN KEY (`StockPhotoRequest`) REFERENCES `stockphotorequest` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `f96af87d78eda2ebf653b7998ddae8e4` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PhotoSubmission`
--

LOCK TABLES `PhotoSubmission` WRITE;
/*!40000 ALTER TABLE `PhotoSubmission` DISABLE KEYS */;
/*!40000 ALTER TABLE `PhotoSubmission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PushRegistration`
--

DROP TABLE IF EXISTS `PushRegistration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PushRegistration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RegistrationId` text CHARACTER SET latin1,
  `DeviceUuid` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `DevicePlatform` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `DeviceOs` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `RegistrationDateTime` datetime DEFAULT NULL,
  `RegistrationStatus` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `InternalUniqueId` varchar(50) CHARACTER SET latin1 NOT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ClientAuthenticationToken` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `Account` int(11) DEFAULT NULL,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `InternalUniqueId` (`InternalUniqueId`),
  KEY `ClientAuthenticationToken` (`ClientAuthenticationToken`),
  KEY `Account` (`Account`),
  CONSTRAINT `1d6df121e4788f9a57ee5f0d55126955` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `b12366cc3c7f6551cb92aa5aaacc6cd8` FOREIGN KEY (`ClientAuthenticationToken`) REFERENCES `clientauthenticationtoken` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PushRegistration`
--

LOCK TABLES `PushRegistration` WRITE;
/*!40000 ALTER TABLE `PushRegistration` DISABLE KEYS */;
/*!40000 ALTER TABLE `PushRegistration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RequestStatus`
--

DROP TABLE IF EXISTS `RequestStatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RequestStatus` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `StatusLabel` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RequestStatus`
--

LOCK TABLES `RequestStatus` WRITE;
/*!40000 ALTER TABLE `RequestStatus` DISABLE KEYS */;
INSERT INTO `RequestStatus` VALUES (1,'Open','2019-08-29 09:02:34',-1),(2,'Closed','2019-08-29 09:02:44',-1);
/*!40000 ALTER TABLE `RequestStatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `StockPhotoRequest`
--

DROP TABLE IF EXISTS `StockPhotoRequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StockPhotoRequest` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RequestText` text CHARACTER SET latin1,
  `CreatedDateTime` datetime DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Account` int(11) DEFAULT NULL,
  `SearchMetaInfo` text CHARACTER SET latin1,
  `RequestStatus` int(11) DEFAULT NULL,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Account` (`Account`),
  KEY `RequestStatus` (`RequestStatus`),
  CONSTRAINT `3ea7be603407827070d3e5209547f396` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `5eba94b9b18fb1b609a084b1b9e7fdfe` FOREIGN KEY (`RequestStatus`) REFERENCES `requeststatus` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `StockPhotoRequest`
--

LOCK TABLES `StockPhotoRequest` WRITE;
/*!40000 ALTER TABLE `StockPhotoRequest` DISABLE KEYS */;
INSERT INTO `StockPhotoRequest` VALUES (1,'aaaa','2019-08-29 11:26:34','2019-08-29 09:26:34',NULL,NULL,1,-1),(2,'bbbb','2019-08-29 11:27:20','2019-08-29 09:27:20',NULL,NULL,1,-1),(3,'Testing','2019-08-29 11:30:55','2019-08-29 09:30:55',1,NULL,1,1);
/*!40000 ALTER TABLE `StockPhotoRequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserRole`
--

DROP TABLE IF EXISTS `UserRole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserRole` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Role` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ObjectOwner` int(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Role` (`Role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserRole`
--

LOCK TABLES `UserRole` WRITE;
/*!40000 ALTER TABLE `UserRole` DISABLE KEYS */;
INSERT INTO `UserRole` VALUES (1,'Administrator','2019-08-29 07:44:01',NULL),(2,'User','2019-08-29 07:44:01',NULL);
/*!40000 ALTER TABLE `UserRole` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-29 12:04:10
