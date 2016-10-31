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
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (100,'herdishelga@gmail.com','kuka','disa','herdis','helga',NULL,23,NULL,2,1,99),(101,'aslaugran@gmail.com','aslaug','asa','aslaug','Einarsdottir',NULL,37,NULL,2,1,99),(102,'jontryggvi@jontryggvi.is','elgringo','jonTryggvi','jon','unnarsson',NULL,36,NULL,2,2,99),(103,'h','h','h','hh','Hh','2016-10-27 09:24:49',1,'Array',1,1,1),(124,'h','h','h','hh','hh','2016-10-27 09:24:49',1,'Array',1,1,1),(125,'h','h','h','hh','hh','2016-10-27 09:24:49',1,'Array',1,1,1),(126,'h','h','h','hh','hh','2016-10-27 09:24:49',1,'Array',1,1,1),(127,'h','h','h','hh','hh','2016-10-27 09:24:49',1,'Array',1,1,1),(128,'h','h','h','hh','hh','2016-10-27 09:24:49',1,'Array',1,1,1),(161,'david@hotmail.com','fsdfsdf','david','david','halldorsson','2016-10-27 09:24:49',1,'Array',1,1,1),(162,'david@hotmail.com','as','sa','As','as','2016-10-27 09:24:49',0,'Array',1,1,1),(163,'david@hotmail.com','as','sa','As','as','2016-10-27 09:24:49',0,'Array',1,1,1),(164,'a','G4o','a','a','a','2016-10-27 09:24:49',1,'Array',1,1,1),(165,'a','G4o','a','a','a','2016-10-27 09:24:49',1,'Array',1,1,1),(166,'a','G4o','a','a','a','2016-10-27 09:24:49',1,'Array',1,1,1),(167,'e','G4o','herdis3he','e','e','2016-10-27 09:24:49',1,'Array',1,1,1),(168,'FHG','asd','sdf','HFGHasd','HFG','2016-10-27 09:24:49',0,'Array',1,1,1),(171,'api','api','pi','api','api','2016-10-27 09:24:49',1,'Array',1,1,1);
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
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apps_countries`
--

LOCK TABLES `apps_countries` WRITE;
/*!40000 ALTER TABLE `apps_countries` DISABLE KEYS */;
INSERT INTO `apps_countries` VALUES (1,'',''),(2,'AF','Afghanistan'),(3,'AL','Albania'),(4,'DZ','Algeria'),(5,'DS','American Samoa'),(6,'AD','Andorra'),(7,'AO','Angola'),(8,'AI','Anguilla'),(9,'AQ','Antarctica'),(10,'AG','Antigua and Barbuda'),(11,'AR','Argentina'),(12,'AM','Armenia'),(13,'AW','Aruba'),(14,'AU','Australia'),(15,'AT','Austria'),(16,'AZ','Azerbaijan'),(17,'BS','Bahamas'),(18,'BH','Bahrain'),(19,'BD','Bangladesh'),(20,'BB','Barbados'),(21,'BY','Belarus'),(22,'BE','Belgium'),(23,'BZ','Belize'),(24,'BJ','Benin'),(25,'BM','Bermuda'),(26,'BT','Bhutan'),(27,'BO','Bolivia'),(28,'BA','Bosnia and Herzegovina'),(29,'BW','Botswana'),(30,'BV','Bouvet Island'),(31,'BR','Brazil'),(32,'IO','British Indian Ocean Territory'),(33,'BN','Brunei Darussalam'),(34,'BG','Bulgaria'),(35,'BF','Burkina Faso'),(36,'BI','Burundi'),(37,'KH','Cambodia'),(38,'CM','Cameroon'),(39,'CA','Canada'),(40,'CV','Cape Verde'),(41,'KY','Cayman Islands'),(42,'CF','Central African Republic'),(43,'TD','Chad'),(44,'CL','Chile'),(45,'CN','China'),(46,'CX','Christmas Island'),(47,'CC','Cocos (Keeling) Islands'),(48,'CO','Colombia'),(49,'KM','Comoros'),(50,'CG','Congo'),(51,'CK','Cook Islands'),(52,'CR','Costa Rica'),(53,'HR','Croatia (Hrvatska)'),(54,'CU','Cuba'),(55,'CY','Cyprus'),(56,'CZ','Czech Republic'),(57,'DK','Denmark'),(58,'DJ','Djibouti'),(59,'DM','Dominica'),(60,'DO','Dominican Republic'),(61,'TP','East Timor'),(62,'EC','Ecuador'),(63,'EG','Egypt'),(64,'SV','El Salvador'),(65,'GQ','Equatorial Guinea'),(66,'ER','Eritrea'),(67,'EE','Estonia'),(68,'ET','Ethiopia'),(69,'FK','Falkland Islands (Malvinas)'),(70,'FO','Faroe Islands'),(71,'FJ','Fiji'),(72,'FI','Finland'),(73,'FR','France'),(74,'FX','France, Metropolitan'),(75,'GF','French Guiana'),(76,'PF','French Polynesia'),(77,'TF','French Southern Territories'),(78,'GA','Gabon'),(79,'GM','Gambia'),(80,'GE','Georgia'),(81,'DE','Germany'),(82,'GH','Ghana'),(83,'GI','Gibraltar'),(84,'GK','Guernsey'),(85,'GR','Greece'),(86,'GL','Greenland'),(87,'GD','Grenada'),(88,'GP','Guadeloupe'),(89,'GU','Guam'),(90,'GT','Guatemala'),(91,'GN','Guinea'),(92,'GW','Guinea-Bissau'),(93,'GY','Guyana'),(94,'HT','Haiti'),(95,'HM','Heard and Mc Donald Islands'),(96,'HN','Honduras'),(97,'HK','Hong Kong'),(98,'HU','Hungary'),(99,'IS','Iceland'),(100,'IN','India'),(101,'IM','Isle of Man'),(102,'ID','Indonesia'),(103,'IR','Iran (Islamic Republic of)'),(104,'IQ','Iraq'),(105,'IE','Ireland'),(106,'IL','Israel'),(107,'IT','Italy'),(108,'CI','Ivory Coast'),(109,'JE','Jersey'),(110,'JM','Jamaica'),(111,'JP','Japan'),(112,'JO','Jordan'),(113,'KZ','Kazakhstan'),(114,'KE','Kenya'),(115,'KI','Kiribati'),(116,'KP','Korea, Democratic People\'s Republic of'),(117,'KR','Korea, Republic of'),(118,'XK','Kosovo'),(119,'KW','Kuwait'),(120,'KG','Kyrgyzstan'),(121,'LA','Lao People\'s Democratic Republic'),(122,'LV','Latvia'),(123,'LB','Lebanon'),(124,'LS','Lesotho'),(125,'LR','Liberia'),(126,'LY','Libyan Arab Jamahiriya'),(127,'LI','Liechtenstein'),(128,'LT','Lithuania'),(129,'LU','Luxembourg'),(130,'MO','Macau'),(131,'MK','Macedonia'),(132,'MG','Madagascar'),(133,'MW','Malawi'),(134,'MY','Malaysia'),(135,'MV','Maldives'),(136,'ML','Mali'),(137,'MT','Malta'),(138,'MH','Marshall Islands'),(139,'MQ','Martinique'),(140,'MR','Mauritania'),(141,'MU','Mauritius'),(142,'TY','Mayotte'),(143,'MX','Mexico'),(144,'FM','Micronesia, Federated States of'),(145,'MD','Moldova, Republic of'),(146,'MC','Monaco'),(147,'MN','Mongolia'),(148,'ME','Montenegro'),(149,'MS','Montserrat'),(150,'MA','Morocco'),(151,'MZ','Mozambique'),(152,'MM','Myanmar'),(153,'NA','Namibia'),(154,'NR','Nauru'),(155,'NP','Nepal'),(156,'NL','Netherlands'),(157,'AN','Netherlands Antilles'),(158,'NC','New Caledonia'),(159,'NZ','New Zealand'),(160,'NI','Nicaragua'),(161,'NE','Niger'),(162,'NG','Nigeria'),(163,'NU','Niue'),(164,'NF','Norfolk Island'),(165,'MP','Northern Mariana Islands'),(166,'NO','Norway'),(167,'OM','Oman'),(168,'PK','Pakistan'),(169,'PW','Palau'),(170,'PS','Palestine'),(171,'PA','Panama'),(172,'PG','Papua New Guinea'),(173,'PY','Paraguay'),(174,'PE','Peru'),(175,'PH','Philippines'),(176,'PN','Pitcairn'),(177,'PL','Poland'),(178,'PT','Portugal'),(179,'PR','Puerto Rico'),(180,'QA','Qatar'),(181,'RE','Reunion'),(182,'RO','Romania'),(183,'RU','Russian Federation'),(184,'RW','Rwanda'),(185,'KN','Saint Kitts and Nevis'),(186,'LC','Saint Lucia'),(187,'VC','Saint Vincent and the Grenadines'),(188,'WS','Samoa'),(189,'SM','San Marino'),(190,'ST','Sao Tome and Principe'),(191,'SA','Saudi Arabia'),(192,'SN','Senegal'),(193,'RS','Serbia'),(194,'SC','Seychelles'),(195,'SL','Sierra Leone'),(196,'SG','Singapore'),(197,'SK','Slovakia'),(198,'SI','Slovenia'),(199,'SB','Solomon Islands'),(200,'SO','Somalia'),(201,'ZA','South Africa'),(202,'GS','South Georgia South Sandwich Islands'),(203,'ES','Spain'),(204,'LK','Sri Lanka'),(205,'SH','St. Helena'),(206,'PM','St. Pierre and Miquelon'),(207,'SD','Sudan'),(208,'SR','Suriname'),(209,'SJ','Svalbard and Jan Mayen Islands'),(210,'SZ','Swaziland'),(211,'SE','Sweden'),(212,'CH','Switzerland'),(213,'SY','Syrian Arab Republic'),(214,'TW','Taiwan'),(215,'TJ','Tajikistan'),(216,'TZ','Tanzania, United Republic of'),(217,'TH','Thailand'),(218,'TG','Togo'),(219,'TK','Tokelau'),(220,'TO','Tonga'),(221,'TT','Trinidad and Tobago'),(222,'TN','Tunisia'),(223,'TR','Turkey'),(224,'TM','Turkmenistan'),(225,'TC','Turks and Caicos Islands'),(226,'TV','Tuvalu'),(227,'UG','Uganda'),(228,'UA','Ukraine'),(229,'AE','United Arab Emirates'),(230,'GB','United Kingdom'),(231,'US','United States'),(232,'UM','United States minor outlying islands'),(233,'UY','Uruguay'),(234,'UZ','Uzbekistan'),(235,'VU','Vanuatu'),(236,'VA','Vatican City State'),(237,'VE','Venezuela'),(238,'VN','Vietnam'),(239,'VG','Virgin Islands (British)'),(240,'VI','Virgin Islands (U.S.)'),(241,'WF','Wallis and Futuna Islands'),(242,'EH','Western Sahara'),(243,'YE','Yemen'),(244,'ZR','Zaire'),(245,'ZM','Zambia'),(246,'ZW','Zimbabwe');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,'female'),(2,'male');
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
INSERT INTO `roles` VALUES (1,'user'),(2,'admin');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shade`
--

LOCK TABLES `shade` WRITE;
/*!40000 ALTER TABLE `shade` DISABLE KEYS */;
INSERT INTO `shade` VALUES (1,'brown','You\'re are fine. Poop is naturally brown due to the bile produced in your liver'),(2,'Green','Food may be moving through your large intestine too quickly. Or you could have eaten lots of green leafy veggies, or green food colouring.'),(3,'Yellow','Greasy, foul-smelling yellow poop indicates excess fat, which could be due to a malabsorption disorder like celiac disease.'),(4,'Black','It could mean that you\'re bleeding internally due to ulcer or cancer. Some vitamins containing iron or bismuth subsalicylate could cause black poop too. Pay attention if it\'s sticky, and see a doc ifyou\'re worried.'),(5,'Light-coloured, white, or clay-coloured','If it\'s not what you\'re normally seeing, it could mean a bile duct obstruction. Some meds could cause this too. See a doc.'),(6,'Blood-stained or Red','Blood in your poop could be a symptom of cancer. Always see a doc right away if you find blood in your stool.');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texture`
--

LOCK TABLES `texture` WRITE;
/*!40000 ALTER TABLE `texture` DISABLE KEYS */;
INSERT INTO `texture` VALUES (1,'Separated hard, lumps, like nuts','You\'re lacking fibre and fluids. Drink more water and chomp on some fruits and veggies.'),(2,'Sausage-shaped, smooth and soft','Optimal poop! You\'re doing fine!'),(3,'Watery, no solid pieces, all liquid','re having diarrhoea! This is probably caused by some sort of infection and diarrhoea is your s way of cleaning it out. Make sure you drink lots of liquids to replace the liquids lost otherwise you might find yourself dehydrated!'),(4,'Watery, no solid pieces, all liquid','re having diarrhoea! This is probably caused by some sort of infection and diarrhoea is your s way of cleaning it out. Make sure you drink lots of liquids to replace the liquids lost otherwise you might find yourself dehydrated!'),(5,'Watery, no solid pieces, all liquid','re having diarrhoea! This is probably caused by some sort of infection and diarrhoea is your s way of cleaning it out. Make sure you drink lots of liquids to replace the liquids lost otherwise you might find yourself dehydrated!'),(6,'Watery, no solid pieces, all liquid',' You\'re having diarrhoea! This is probably caused by some sort of infection and diarrhoea is your body\'s way of cleaning it out. Make sure you drink lots of liquids to replace the liquids lost otherwise you might find yourself dehydrated!'),(7,'Sausage-shaped but lumpy',' Not as serious as separate hard lumps, but you need to load up on fluids and fibre.'),(8,'Soft blobs with clear-cut edges','Not too bad. Pretty normal if you\'re pooping multiple times a day.'),(9,'Sausage-shaped but with cracks on surface',' This is normal, but the cracks mean you could still up your intake of water.\n'),(10,'Fluffy pieces & ragged edges, a mushy stool','You\'re on the edge of normal. This type of poop is on its way to becoming diarrhoea.'),(11,'Soft & sticks to the side of the toilet bowl','Presence of too much oil, which could mean that your body isn\'t absorbing the fats properly. Diseases like chronic pancreatitis prevent your body from absorbing fat.');
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

-- Dump completed on 2016-10-31 14:18:09
