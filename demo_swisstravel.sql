-- MySQL dump 10.11
--
-- Host: mysql1098.servage.net    Database: demo_swisstravel
-- ------------------------------------------------------
-- Server version	5.5.25-MariaDB-mariadb1
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_users`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(200) DEFAULT NULL,
  `admin_pass_word` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` VALUES (1,'admin','swisstravels2011');

--
-- Table structure for table `flight_prices`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `flight_prices` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `flight_cost` varchar(10) DEFAULT NULL,
  `flight_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `flight_prices`
--

INSERT INTO `flight_prices` VALUES (8,'mega one1','SRI','ASI','CHF 745 ',1,'2012-12-05 22:01:08','2013-01-04 12:41:05');
INSERT INTO `flight_prices` VALUES (9,'General ','IND','ASI','CHF810',1,'2012-12-05 22:20:22','2013-01-04 12:43:23');
INSERT INTO `flight_prices` VALUES (10,'Asian flights','PHI','ASI','CHF965',1,'2012-12-05 22:20:46','2013-01-04 12:45:10');
INSERT INTO `flight_prices` VALUES (11,'Asian flights 1','THI','ASI','CHF805 ',1,'2012-12-05 22:21:02','2013-01-04 12:46:27');
INSERT INTO `flight_prices` VALUES (12,'Asian flights 2','SIN','ASI','CHF805 ',1,'2012-12-05 22:21:17','2013-01-04 12:47:10');
INSERT INTO `flight_prices` VALUES (13,'Europe 1','SAF','AFR','CHF1040 ',1,'2012-12-05 22:29:53','2013-01-04 12:48:06');
INSERT INTO `flight_prices` VALUES (14,'Europe 2','MAL','ASI','CHF830',1,'2012-12-05 22:30:17','2013-01-04 12:49:04');
INSERT INTO `flight_prices` VALUES (15,'Europe 3','IRA','MIDEST','CHF755',1,'2012-12-05 22:30:41','2013-01-04 13:03:14');
INSERT INTO `flight_prices` VALUES (16,'Europe 4','ALG','AFR','CHF400',1,'2012-12-05 22:31:59','2013-01-04 13:03:04');
INSERT INTO `flight_prices` VALUES (17,'Europe 5','KEN','AFR','CHF1399',1,'2012-12-05 22:32:17','2013-01-04 12:56:46');
INSERT INTO `flight_prices` VALUES (18,'Middle 1','SAR','MIDEST','CHF780',1,'2012-12-05 22:33:32','2013-01-04 12:58:04');
INSERT INTO `flight_prices` VALUES (19,'Middle 2','LON','EUR','CHF250',1,'2012-12-05 22:33:47','2013-01-04 13:02:51');
INSERT INTO `flight_prices` VALUES (20,'Middle 3','NIG','MIDEST','CHF985',1,'2012-12-05 22:34:05','2013-01-04 13:00:08');
INSERT INTO `flight_prices` VALUES (21,'Middle 4','IRAQ','MIDEST','CHF730',1,'2012-12-05 22:34:24','2013-01-04 13:01:04');
INSERT INTO `flight_prices` VALUES (22,'Middle 5','EGY','MIDEST','CHF 450',1,'2012-12-05 22:34:48','2013-01-04 20:14:22');

--
-- Table structure for table `sri_days`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `sri_days` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_id` int(11) NOT NULL,
  `day_name` varchar(200) DEFAULT NULL,
  `day1_title` text,
  `day2_title` text,
  `day2_place` text,
  `day2_desc` text,
  `day2_path1` text,
  `day2_path2` text,
  `day2_path3` text,
  `day2_path4` text,
  `day2_stay` text,
  `day3_title` text,
  `day3_place` text,
  `day3_desc` text,
  `day3_path1` text,
  `day3_path2` text,
  `day3_path3` text,
  `day3_path4` text,
  `day3_stay` text,
  `day4_title` text,
  `day4_place` text,
  `day4_desc` text,
  `day4_path1` text,
  `day4_path2` text,
  `day4_path3` text,
  `day4_path4` text,
  `day4_stay` text,
  `day5_title` text,
  `day5_place` text,
  `day5_desc` text,
  `day5_path1` text,
  `day5_path2` text,
  `day5_path3` text,
  `day5_path4` text,
  `day5_stay` text,
  `day5_place1` text,
  `day5_desc1` text,
  `day5_path5` text,
  `day5_path6` text,
  `day5_path7` text,
  `day5_path8` text,
  `day6_title` text,
  `day6_place` text,
  `day6_desc` text,
  `day6_path1` text,
  `day6_path2` text,
  `day6_path3` text,
  `day6_path4` text,
  `day6_stay` text,
  `day7_title` text,
  `day7_place` text,
  `day7_desc` text,
  `day7_path1` text,
  `day7_path2` text,
  `day7_path3` text,
  `day7_path4` text,
  `day7_stay` text,
  `day8_title` text,
  `day8_place` text,
  `day8_desc` text,
  `day8_path1` text,
  `day8_path2` text,
  `day8_path3` text,
  `day8_path4` text,
  `day8_stay` text,
  `day9_title` text,
  `day9_place` text,
  `day9_desc` text,
  `day9_path1` text,
  `day9_path2` text,
  `day9_path3` text,
  `day9_path4` text,
  `day9_stay` text,
  `day10_title` text,
  `day10_place` text,
  `day10_desc` text,
  `day10_path1` text,
  `day10_path2` text,
  `day10_path3` text,
  `day10_path4` text,
  `day10_stay` text,
  `day10_place1` text,
  `day10_desc1` text,
  `day10_path5` text,
  `day10_path6` text,
  `day10_path7` text,
  `day10_path8` text,
  `day11_title` text,
  `day11_place` text,
  `day11_desc` text,
  `day11_path1` text,
  `day11_path2` text,
  `day11_path3` text,
  `day11_path4` text,
  `day11_stay` text,
  `day12_title` text,
  `price_include` text,
  `price_notinclude` text,
  `day_status` int(11) DEFAULT NULL,
  `day_insertedDate` datetime DEFAULT NULL,
  `day_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `sri_days`
--

INSERT INTO `sri_days` VALUES (6,2,'jsdjfkds1','wrfjkwrjwek1','werjwerk1','ewrwejirskdf1','ewrwerkwe1','day2_path1/453733693natural1index.jpg','day2_path2/1391108741natural2index.jpg','day2_path3/1401718078natural3index.jpg','day2_path4/1385654746natural4index.jpg','wrewedsfk1','wejrkwjekr1','werkwerk1','werkwejrkwe1','day3_path1/1489440446natural5index.jpg','day3_path2/1308678955natural6index.jpg','day3_path3/611316751natural7index.jpg','day3_path4/627348961natural8index.jpg','werjwekjerk1','wertkewrjkq1','werwerjk1','wertkwejrk1','day4_path1/681659051natural9index.jpg','day4_path2/124493823natural10index.jpg','day4_path3/1560019993natural11index.jpg','day4_path4/2028730877natural12images.jpg','rejtkerk1','werkwjerk1','werkwejrkwe1','wertwerjhwehrk1','day5_path1/1469509286natural13images.jpg','day5_path2/1265153738natural14images.jpg','day5_path3/135439191natural15images.jpg','day5_path4/339643031natural16images.jpg','$  day5_stay1',NULL,NULL,NULL,NULL,NULL,NULL,'ererjtkerjtk1','ertjewrktjkwe1','erjwerkjkwer1','day6_path1/265926464natural17images.jpg','day6_path2/381087371natural18images.jpg','day6_path3/1146832170natural19images.jpg','day6_path4/228481426natural20images.jpg','werwerk1','jrkwewwerjtkwrejt1','rwerktjwekr1','erwerkwerjwek1','day7_path1/285020449','day7_path2/1528107501','day7_path3/982064742','day7_path4/1707425055','wertwerjtkwekrqwerwekr1','qwerjwkerjkwejr1','qwrwekrwe1','qwerwekrjwekr1','day8_path1/1951011046','day8_path2/1091832699','day8_path3/1064336913','day8_path4/1063665233','werwerkwerjk1','wrjwekrkwejrk1','rwerkwerwer1','werwerwerwerwe1','day9_path1/1023023565','day9_path2/621541268','day9_path3/1657476836','day9_path41910129519','werwerjwekrwke1','wqrkwejkrjwek1','qwrwekrjwekr1','wwerwererwe1','day10_path1/1954069265','day10_path2/276044831','day10_path3/683363737','day10_path4/955746828','erterwte1',NULL,NULL,NULL,NULL,NULL,NULL,'rtertertert1','ertertert1','ertetert1','day11_path1/311200789','day11_path2/1864246781','day11_path3/816750562','day11_path4/1071926487','ertert1','eerterter1','erterterter1','etertert1',1,'2012-12-26 06:43:09','2012-12-26 06:44:17');

--
-- Table structure for table `sri_plan`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `sri_plan` (
  `sri_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `sri_code` varchar(100) DEFAULT NULL,
  `sri_desc` text,
  `sri_ps` text,
  `sri_touring` text,
  `sri_cost` varchar(200) DEFAULT NULL,
  `sri_front` int(11) DEFAULT NULL,
  `sri_path` varchar(200) DEFAULT NULL,
  `sri_path1` varchar(200) DEFAULT NULL,
  `sri_path2` varchar(200) DEFAULT NULL,
  `sri_status` int(11) DEFAULT NULL,
  `sri_insertedDate` datetime DEFAULT NULL,
  `sri_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`sri_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `sri_plan`
--

INSERT INTO `sri_plan` VALUES (2,'srilanka package 12','ASI','SRI','code00012','this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.2','this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.2','this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.2','14882',0,'sri_path/1452806147_natural_31images.jpg','sri_path1/772036552_natural_32images.jpg','sri_path2/511705957_natural_33images.jpg',1,'2012-12-12 19:43:06','2012-12-12 19:57:54');
INSERT INTO `sri_plan` VALUES (3,'Srilanka Mega Tour package','ASI','SRI','SRI12455','This is a Srilanka Mega Tour package for the world','About 7 km north of the country’s international airport lies this bustling fishing town with miles long golden sandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ','About 7 km north of the country’s international airport lies this bustling fishing town with miles long golden sandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ','5299',NULL,'sri_path/1418985922_natural_33images.jpg','sri_path1/910947869_natural_32images.jpg','sri_path2/2094060701_natural_31images.jpg',1,'2012-12-20 19:14:59',NULL);

--
-- Table structure for table `tour_enquiry`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tour_enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_phone` varchar(200) DEFAULT NULL,
  `user_msg` text,
  `tour_id` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tour_enquiry`
--

INSERT INTO `tour_enquiry` VALUES (1,'','','','',12,'2012-11-29 11:27:36',NULL);
INSERT INTO `tour_enquiry` VALUES (2,'','','','',12,'2012-11-29 11:28:10',NULL);
INSERT INTO `tour_enquiry` VALUES (3,'','','','',12,'2012-11-29 11:28:36',NULL);
INSERT INTO `tour_enquiry` VALUES (4,'','','','',12,'2012-11-29 11:29:07',NULL);
INSERT INTO `tour_enquiry` VALUES (5,'','','','',12,'2012-11-29 11:29:16',NULL);
INSERT INTO `tour_enquiry` VALUES (6,'senthi kumar','senthil090680@gmail.com','9994589321','hi i ma interested in this',12,'2012-11-29 11:30:56',NULL);
INSERT INTO `tour_enquiry` VALUES (7,'sensehisdk','saraswathi_ict@yahoo.com','9940413993','hi iam interetsted inthsi ',12,'2012-11-29 11:32:00',NULL);
INSERT INTO `tour_enquiry` VALUES (8,'senthil kumar','senthil090680@gmaill.com','9994589321','this is my msg',12,'2012-11-29 11:42:56',NULL);
INSERT INTO `tour_enquiry` VALUES (9,'senthil kumar','senthil090680@gmail.com','9994589321','this is a good message',11,'2012-11-29 19:12:24',NULL);
INSERT INTO `tour_enquiry` VALUES (10,'','','','',7,'2012-12-01 04:24:22',NULL);
INSERT INTO `tour_enquiry` VALUES (11,'','','','',12,'2012-12-01 05:03:12',NULL);
INSERT INTO `tour_enquiry` VALUES (12,'','','','',12,'2012-12-01 05:04:04',NULL);
INSERT INTO `tour_enquiry` VALUES (13,'','','','',12,'2012-12-01 05:04:14',NULL);
INSERT INTO `tour_enquiry` VALUES (14,'','','','',12,'2012-12-01 05:04:30',NULL);
INSERT INTO `tour_enquiry` VALUES (15,'','','','',12,'2012-12-01 05:07:54',NULL);
INSERT INTO `tour_enquiry` VALUES (16,'','','','',12,'2012-12-01 05:08:47',NULL);
INSERT INTO `tour_enquiry` VALUES (17,'','','','',12,'2012-12-01 05:13:22',NULL);
INSERT INTO `tour_enquiry` VALUES (18,'','','','',12,'2012-12-01 05:14:11',NULL);
INSERT INTO `tour_enquiry` VALUES (19,'','','','',12,'2012-12-01 05:14:17',NULL);
INSERT INTO `tour_enquiry` VALUES (20,'','','','',12,'2012-12-01 05:14:49',NULL);
INSERT INTO `tour_enquiry` VALUES (21,'','','','',12,'2012-12-01 05:14:56',NULL);
INSERT INTO `tour_enquiry` VALUES (22,'','','','',12,'2012-12-01 05:15:06',NULL);
INSERT INTO `tour_enquiry` VALUES (23,'','','','',11,'2012-12-01 19:51:27',NULL);
INSERT INTO `tour_enquiry` VALUES (24,'','','','',8,'2012-12-07 05:02:11',NULL);
INSERT INTO `tour_enquiry` VALUES (25,'','','','',11,'2012-12-11 16:37:01',NULL);
INSERT INTO `tour_enquiry` VALUES (26,'','','','',11,'2012-12-11 16:37:36',NULL);
INSERT INTO `tour_enquiry` VALUES (27,'','','','',11,'2012-12-11 16:38:05',NULL);
INSERT INTO `tour_enquiry` VALUES (28,'','','','',11,'2012-12-11 16:39:22',NULL);
INSERT INTO `tour_enquiry` VALUES (29,'','','','',11,'2012-12-11 16:40:30',NULL);
INSERT INTO `tour_enquiry` VALUES (30,'','','','',11,'2012-12-11 16:44:35',NULL);
INSERT INTO `tour_enquiry` VALUES (31,'','','','',11,'2012-12-11 16:45:33',NULL);
INSERT INTO `tour_enquiry` VALUES (32,'serrwe','','','',11,'2012-12-11 16:51:23',NULL);
INSERT INTO `tour_enquiry` VALUES (33,'senthil ','senthil090680@gmail.com','','',11,'2012-12-11 17:18:14',NULL);
INSERT INTO `tour_enquiry` VALUES (34,'wwerwe','senthil090680@gmail.com','','',11,'2012-12-11 17:21:30',NULL);
INSERT INTO `tour_enquiry` VALUES (35,'','','','',11,'2012-12-11 17:25:28',NULL);

--
-- Table structure for table `tour_plan`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tour_plan` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `product_services` text,
  `touring` text,
  `tour_code` varchar(100) DEFAULT NULL,
  `tour_desc` text,
  `tour_cost` varchar(200) DEFAULT NULL,
  `front_order` int(11) DEFAULT NULL,
  `thumb_path` varchar(200) DEFAULT NULL,
  `plan_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `thumb_path1` varchar(200) DEFAULT NULL,
  `thumb_path2` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tour_plan`
--

INSERT INTO `tour_plan` VALUES (11,'Hello tour1','ASI','IND','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','52222','52222','52222',0,'thumb_path/1267449541_natural_7index.jpg',1,'2012-11-28 11:43:01','2012-12-11 15:08:22','thumb_path1/1912529800_natural_8index.jpg','thumb_path2/1764366304_natural_9index.jpg');
INSERT INTO `tour_plan` VALUES (3,'top left','ASI','THI','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF1287','tthis is top left','7899',0,'thumb_path/1979295888_natural_25images.jpg',1,'2012-11-21 09:28:10','2012-12-11 15:13:37','thumb_path1/1679313219_natural_26images.jpg','thumb_path2/154324532_natural_27images.jpg');
INSERT INTO `tour_plan` VALUES (4,'middle right','EUR','FRA','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF12788','this is middle right','7999',0,'thumb_path/1437371735_natural_22images.jpg',1,'2012-11-21 09:28:57','2012-12-11 15:12:59','thumb_path1/1067030197_natural_23images.jpg','thumb_path2/1101516320_natural_24images.jpg');
INSERT INTO `tour_plan` VALUES (5,'down right','EUR','SWI','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF12144','ths is down right','7989',0,'thumb_path/543959136_natural_19images.jpg',1,'2012-11-21 09:29:30','2012-12-11 15:12:21','thumb_path1/958941332_natural_20images.jpg','thumb_path2/1831326247_natural_21images.jpg');
INSERT INTO `tour_plan` VALUES (6,'down left','MIDEST','OMA','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF14778','this is down left','2555',0,'thumb_path/606175205_natural_16images.jpg',1,'2012-11-21 09:30:04','2012-12-11 15:10:34','thumb_path1/857301229_natural_17images.jpg','thumb_path2/1087788950_natural_18images.jpg');
INSERT INTO `tour_plan` VALUES (7,'Asia new','ASI','MAL','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF41455','this is asia new again','588',0,'thumb_path/221083789_natural_13images.jpg',1,'2012-11-26 04:28:26','2012-12-11 15:09:43','thumb_path1/1741894977_natural_14images.jpg','thumb_path2/1941345573_natural_15images.jpg');
INSERT INTO `tour_plan` VALUES (8,'Middle east again','MIDEST','IRA','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','CHF23534','this is middle east again','7888',0,'thumb_path/863455681_natural_10index.jpg',1,'2012-11-26 04:29:38','2012-12-11 15:10:59','thumb_path1/632413394_natural_11index.jpg','thumb_path2/1070257865_natural_12images.jpg');
INSERT INTO `tour_plan` VALUES (12,'Hello this is latest one','EUR','GER','This dummy data contains everything that a theme might express in a blog post, with a bunch of tags, categories, child-cats, child-pages, comments, gravatar-support, etc…','WP-Dummy-Content is a WordPress plugin that will generate a bunch of pages, sub-pages and posts which you specify. ','india123','india123','india123',0,'thumb_path/1754860846_natural_1index.jpg',1,'2012-11-29 10:30:55','2012-12-11 16:34:04','thumb_path1/1943603030_natural_2index.jpg','thumb_path2/443045523_natural_3index.jpg');
INSERT INTO `tour_plan` VALUES (13,'India Package tour of South India','ASI','IND','This is one of the major tour areas covered in india','This is the touring of most significant areas in south india covering lot of places','CHP45899','This is a mega tour package covering south india','4878',0,'thumb_path/584655642_natural_4index.jpg',1,'2012-12-11 14:47:15','2013-01-07 21:11:08','thumb_path1/841841786_natural_5index.jpg','thumb_path2/1742868169_natural_6index.jpg');
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-08 23:33:34
