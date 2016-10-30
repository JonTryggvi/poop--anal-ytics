-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: h5
-- ------------------------------------------------------
-- Server version	5.7.12-0ubuntu1.1

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
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `user_date` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `apps_countries_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`roles_id`,`gender_id`,`apps_countries_id`),
  KEY `fk_User_roles1_idx` (`roles_id`),
  KEY `fk_User_gender1_idx` (`gender_id`),
  KEY `fk_User_apps_countries1_idx` (`apps_countries_id`),
  CONSTRAINT `fk_User_apps_countries1` FOREIGN KEY (`apps_countries_id`) REFERENCES `apps_countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_gender1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (5,'herdis@gmail.com','kuka','disa','herdis','helga','2016-10-27 09:24:49',12,'a',1,1,1);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserAnon`
--

DROP TABLE IF EXISTS `UserAnon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserAnon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserAnon`
--

LOCK TABLES `UserAnon` WRITE;
/*!40000 ALTER TABLE `UserAnon` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserAnon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apps_countries`
--

DROP TABLE IF EXISTS `apps_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apps_countries`
--

LOCK TABLES `apps_countries` WRITE;
/*!40000 ALTER TABLE `apps_countries` DISABLE KEYS */;
INSERT INTO `apps_countries` VALUES (1);
/*!40000 ALTER TABLE `apps_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `User_roles_id` int(11) NOT NULL,
  `User_gender_id` int(11) NOT NULL,
  `User_apps_countries_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`post_id`,`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  KEY `fk_comments_post1_idx` (`post_id`),
  KEY `fk_comments_User1_idx` (`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  CONSTRAINT `fk_comments_User1` FOREIGN KEY (`User_id`, `User_roles_id`, `User_gender_id`, `User_apps_countries_id`) REFERENCES `User` (`id`, `roles_id`, `gender_id`, `apps_countries_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_post1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diary`
--

DROP TABLE IF EXISTS `diary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `User_id` int(11) NOT NULL,
  `User_roles_id` int(11) NOT NULL,
  `User_gender_id` int(11) NOT NULL,
  `User_apps_countries_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  KEY `fk_diary_User1_idx` (`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  CONSTRAINT `fk_diary_User1` FOREIGN KEY (`User_id`, `User_roles_id`, `User_gender_id`, `User_apps_countries_id`) REFERENCES `User` (`id`, `roles_id`, `gender_id`, `apps_countries_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diary`
--

LOCK TABLES `diary` WRITE;
/*!40000 ALTER TABLE `diary` DISABLE KEYS */;
/*!40000 ALTER TABLE `diary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,NULL);
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `User_id` int(11) NOT NULL,
  `User_roles_id` int(11) NOT NULL,
  `User_gender_id` int(11) NOT NULL,
  `User_apps_countries_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  KEY `fk_post_User1_idx` (`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  CONSTRAINT `fk_post_User1` FOREIGN KEY (`User_id`, `User_roles_id`, `User_gender_id`, `User_apps_countries_id`) REFERENCES `User` (`id`, `roles_id`, `gender_id`, `apps_countries_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,NULL),(2,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shade`
--

DROP TABLE IF EXISTS `shade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shade`
--

LOCK TABLES `shade` WRITE;
/*!40000 ALTER TABLE `shade` DISABLE KEYS */;
/*!40000 ALTER TABLE `shade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_user_id` int(11) NOT NULL,
  `UserAnon_user_anon` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `User_id` int(11) NOT NULL,
  `User_roles_id` int(11) NOT NULL,
  `User_gender_id` int(11) NOT NULL,
  `User_apps_countries_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `diary_User_id` int(11) NOT NULL,
  `diary_User_roles_id` int(11) NOT NULL,
  `diary_User_gender_id` int(11) NOT NULL,
  `diary_User_apps_countries_id` int(11) NOT NULL,
  `shade_id` int(11) NOT NULL,
  `texture_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`User_user_id`,`UserAnon_user_anon`,`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`,`diary_id`,`diary_User_id`,`diary_User_roles_id`,`diary_User_gender_id`,`diary_User_apps_countries_id`,`shade_id`,`texture_id`),
  KEY `fk_poop_test_UserAnon1_idx` (`UserAnon_user_anon`),
  KEY `fk_test_User1_idx` (`User_id`,`User_roles_id`,`User_gender_id`,`User_apps_countries_id`),
  KEY `fk_test_diary1_idx` (`diary_id`,`diary_User_id`,`diary_User_roles_id`,`diary_User_gender_id`,`diary_User_apps_countries_id`),
  KEY `fk_test_shade1_idx` (`shade_id`),
  KEY `fk_test_texture1_idx` (`texture_id`),
  CONSTRAINT `fk_poop_test_UserAnon1` FOREIGN KEY (`UserAnon_user_anon`) REFERENCES `UserAnon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_test_User1` FOREIGN KEY (`User_id`, `User_roles_id`, `User_gender_id`, `User_apps_countries_id`) REFERENCES `User` (`id`, `roles_id`, `gender_id`, `apps_countries_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_test_diary1` FOREIGN KEY (`diary_id`, `diary_User_id`, `diary_User_roles_id`, `diary_User_gender_id`, `diary_User_apps_countries_id`) REFERENCES `diary` (`id`, `User_id`, `User_roles_id`, `User_gender_id`, `User_apps_countries_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_test_shade1` FOREIGN KEY (`shade_id`) REFERENCES `shade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_test_texture1` FOREIGN KEY (`texture_id`) REFERENCES `texture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texture`
--

DROP TABLE IF EXISTS `texture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texture` varchar(45) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texture`
--

LOCK TABLES `texture` WRITE;
/*!40000 ALTER TABLE `texture` DISABLE KEYS */;
/*!40000 ALTER TABLE `texture` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-27 13:25:29
