-- MySQL dump 10.13  Distrib 5.6.37, for osx10.6 (i386)
--
-- Host: localhost    Database: attendancesystem
-- ------------------------------------------------------
-- Server version	5.6.37

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clock_comment` int(11) DEFAULT NULL,
  `iprestriction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'United States of America','America/New_York',NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_company_data`
--

DROP TABLE IF EXISTS `tbl_company_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_company_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `jobposition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `companyemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `dateregularized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `reason` varchar(455) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `leaveprivilege` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_company_data`
--

LOCK TABLES `tbl_company_data` WRITE;
/*!40000 ALTER TABLE `tbl_company_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_company_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_form_company`
--

DROP TABLE IF EXISTS `tbl_form_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_form_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_form_company`
--

LOCK TABLES `tbl_form_company` WRITE;
/*!40000 ALTER TABLE `tbl_form_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_form_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_form_department`
--

DROP TABLE IF EXISTS `tbl_form_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_form_department` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `department` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_form_department`
--

LOCK TABLES `tbl_form_department` WRITE;
/*!40000 ALTER TABLE `tbl_form_department` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_form_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_form_jobtitle`
--

DROP TABLE IF EXISTS `tbl_form_jobtitle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_form_jobtitle` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jobtitle` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `dept_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_form_jobtitle`
--

LOCK TABLES `tbl_form_jobtitle` WRITE;
/*!40000 ALTER TABLE `tbl_form_jobtitle` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_form_jobtitle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_form_leavegroup`
--

DROP TABLE IF EXISTS `tbl_form_leavegroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_form_leavegroup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `leavegroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leaveprivileges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_form_leavegroup`
--

LOCK TABLES `tbl_form_leavegroup` WRITE;
/*!40000 ALTER TABLE `tbl_form_leavegroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_form_leavegroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_form_leavetype`
--

DROP TABLE IF EXISTS `tbl_form_leavetype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_form_leavetype` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `leavetype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percalendar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_form_leavetype`
--

LOCK TABLES `tbl_form_leavetype` WRITE;
/*!40000 ALTER TABLE `tbl_form_leavetype` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_form_leavetype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_people`
--

DROP TABLE IF EXISTS `tbl_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_people` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `emailaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `civilstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nationalid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `homeaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `employmentstatus` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `employmenttype` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_people`
--

LOCK TABLES `tbl_people` WRITE;
/*!40000 ALTER TABLE `tbl_people` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_people_attendance`
--

DROP TABLE IF EXISTS `tbl_people_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_people_attendance` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` int(11) DEFAULT NULL,
  `idno` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `date` date DEFAULT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `timein` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalhours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status_timein` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status_timeout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_people_attendance`
--

LOCK TABLES `tbl_people_attendance` WRITE;
/*!40000 ALTER TABLE `tbl_people_attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_people_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_people_leaves`
--

DROP TABLE IF EXISTS `tbl_people_leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_people_leaves` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` int(11) DEFAULT NULL,
  `idno` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `typeid` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `leavefrom` date DEFAULT NULL,
  `leaveto` date DEFAULT NULL,
  `returndate` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archived` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_people_leaves`
--

LOCK TABLES `tbl_people_leaves` WRITE;
/*!40000 ALTER TABLE `tbl_people_leaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_people_leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_people_schedules`
--

DROP TABLE IF EXISTS `tbl_people_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_people_schedules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` int(11) DEFAULT NULL,
  `idno` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intime` text COLLATE utf8mb4_unicode_ci,
  `outime` text COLLATE utf8mb4_unicode_ci,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `restday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archive` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_people_schedules`
--

LOCK TABLES `tbl_people_schedules` WRITE;
/*!40000 ALTER TABLE `tbl_people_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_people_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_report_views`
--

DROP TABLE IF EXISTS `tbl_report_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_report_views` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `report_id` int(11) DEFAULT NULL,
  `last_viewed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_report_views`
--

LOCK TABLES `tbl_report_views` WRITE;
/*!40000 ALTER TABLE `tbl_report_views` DISABLE KEYS */;
INSERT INTO `tbl_report_views` VALUES (1,1,'','Employee List Report'),(2,2,'','Employee Attendance Report'),(3,3,'','Employee Leaves Report'),(4,4,'','Employee Schedule Report'),(5,5,'','Organization Profile'),(6,6,'','User Accounts Report'),(7,7,'','Employee Birthdays');
/*!40000 ALTER TABLE `tbl_report_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference` int(11) DEFAULT NULL,
  `idno` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `role_id` int(11) DEFAULT NULL,
  `acc_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (17,4,'001122','DEMO, MANAGER','manager@example.com',2,2,1,'$2y$10$mDAH.R8JG5ThPelt4zRXc.8sxizt.tqXQfndx5s/W/3j0Sq6xS3LG','AvP7LgeOFYviB7G0bnVXZwEiuJuNzCVVnOVw4WObrpd7kk8TtvFrkTMy6Lmr','2018-10-31 12:10:04','2018-10-31 12:10:04'),(18,5,'001133','DEMO, EMPLOYEE','employee@example.com',5,1,1,'$2y$10$3qjhKES39RmTl4k7PQWJ.OfG4uFzzF/iYJI8A1BLgYs2uDEfe5pry','YKj2kU7XgixvYIXNL03IoaPjfoDQv6Mf6NZI81GpwxTbVZZ3O6sZ46DMx9Sm','2018-12-21 05:20:18','2018-12-21 05:20:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_permissions`
--

DROP TABLE IF EXISTS `users_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `perm_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1844 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_permissions`
--

LOCK TABLES `users_permissions` WRITE;
/*!40000 ALTER TABLE `users_permissions` DISABLE KEYS */;
INSERT INTO `users_permissions` VALUES (1798,2,1),(1799,2,2),(1800,2,22),(1801,2,21),(1802,2,23),(1803,2,24),(1804,2,25),(1805,2,3),(1806,2,31),(1807,2,32),(1808,2,4),(1809,2,41),(1810,2,42),(1811,2,43),(1812,2,44),(1813,2,5),(1814,2,52),(1815,2,53),(1816,2,9),(1817,2,91),(1818,2,7),(1819,2,8),(1820,2,81),(1821,2,82),(1822,2,83),(1823,2,10),(1824,2,101),(1825,2,102),(1826,2,103),(1827,2,104),(1828,2,11),(1829,2,111),(1830,2,112),(1831,2,12),(1832,2,121),(1833,2,122),(1834,2,13),(1835,2,131),(1836,2,132),(1837,2,14),(1838,2,141),(1839,2,142),(1840,2,15),(1841,2,151),(1842,2,152),(1843,2,153);
/*!40000 ALTER TABLE `users_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_roles`
--

LOCK TABLES `users_roles` WRITE;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` VALUES (2,'MANAGER','Active'),(5,'EMPLOYEE','Active');
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-01 19:12:28
