-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: ss-mysql-server-01.mysql.database.azure.com    Database: dx_sandbox_N4lud3gKwV07
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
  CONSTRAINT `de49ec773bba822671fad9853d03ca39` FOREIGN KEY (`UserRole`) REFERENCES `userrole` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Account`
--

LOCK TABLES `Account` WRITE;
/*!40000 ALTER TABLE `Account` DISABLE KEYS */;
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
  CONSTRAINT `71da56b0f315ba0638f3a680b7945617` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuditLogEntry`
--

LOCK TABLES `AuditLogEntry` WRITE;
/*!40000 ALTER TABLE `AuditLogEntry` DISABLE KEYS */;
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
  CONSTRAINT `a26ac5ad6feb478f6f79e701dacab2dd` FOREIGN KEY (`BackgroundProcess`) REFERENCES `backgroundprocess` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
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
  CONSTRAINT `ecf95c31be005741581b54f0a5927391` FOREIGN KEY (`ClientConnection`) REFERENCES `clientconnection` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClientAuthenticationToken`
--

LOCK TABLES `ClientAuthenticationToken` WRITE;
/*!40000 ALTER TABLE `ClientAuthenticationToken` DISABLE KEYS */;
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
  CONSTRAINT `a41742e10e569904f11a7d223e29484a` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClientConnection`
--

LOCK TABLES `ClientConnection` WRITE;
/*!40000 ALTER TABLE `ClientConnection` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileDocument`
--

LOCK TABLES `FileDocument` WRITE;
/*!40000 ALTER TABLE `FileDocument` DISABLE KEYS */;
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
  CONSTRAINT `91ab7a05b6c47dd1896046b0316831d0` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
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
  CONSTRAINT `b94d407bf7c256a281274b7b4874d1d6` FOREIGN KEY (`ClientAuthenticationToken`) REFERENCES `clientauthenticationtoken` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `c6c60c4011e350444a081f75c5236518` FOREIGN KEY (`Account`) REFERENCES `account` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE
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
INSERT INTO `UserRole` VALUES (1,'Administrator','2019-08-29 07:44:02',NULL),(2,'User','2019-08-29 07:44:02',NULL);
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

-- Dump completed on 2019-08-29 10:19:06
