# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.0.95)
# Database: BCA
# Generation Time: 2013-08-21 19:31:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table circle_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `circle_photos`;

CREATE TABLE `circle_photos` (
  `id` int(11) NOT NULL auto_increment,
  `ref_circle_id` int(11) NOT NULL,
  `description` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `filename` varchar(100) NOT NULL,
  `users_fb_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `circle_photos` WRITE;
/*!40000 ALTER TABLE `circle_photos` DISABLE KEYS */;

INSERT INTO `circle_photos` (`id`, `ref_circle_id`, `description`, `filename`, `users_fb_id`)
VALUES
	(1,2017,'','photo_1377099410.jpg',39607548),
	(2,2017,'Photo upload test','photo_1377099435.jpg',39607548),
	(3,2018,'','photo_1377102213.jpg',2147483647),
	(4,2019,'','photo_1377104431.jpg',1305641),
	(5,3,'Upload test from mobile','photo_1377106774.jpg',39607548);

/*!40000 ALTER TABLE `circle_photos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table circles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `circles`;

CREATE TABLE `circles` (
  `id` int(11) NOT NULL auto_increment,
  `users_fb_id` int(11) NOT NULL,
  `users_name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `users_photo_url` text NOT NULL,
  `goal` text character set utf8 NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `language` int(2) default NULL,
  `ref_goal_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `circles` WRITE;
/*!40000 ALTER TABLE `circles` DISABLE KEYS */;

INSERT INTO `circles` (`id`, `users_fb_id`, `users_name`, `users_photo_url`, `goal`, `date`, `language`, `ref_goal_id`)
VALUES
	(1,2147483647,'Sean Oh','http://profile.ak.fbcdn.net/hprofile-ak-ash4/275760_100003988000326_1919791226_n.jpg','Live healthily. Eat antioxidant-rich food and maintain a healthy weight.','2013-07-31 11:50:53',0,2),
	(2,534664939,'Jason Tordsen','http://profile-b.xx.fbcdn.net/hprofile-prn1/623695_534664939_1207367401_n.jpg','Be proactive. Schedule a mammogram.','2013-07-31 11:55:48',0,1),
	(3,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Be proactive. Schedule a mammogram.','2013-08-12 13:27:50',0,1),
	(2014,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Support someone in your life.','2013-08-20 21:41:58',0,3),
	(2015,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Be proactive. Schedule a mammogram.','2013-08-20 21:49:24',0,1),
	(2016,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Drink less. Limit your alcohol intake and toast to a healthier life.','2013-08-20 21:58:54',0,4),
	(2017,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Live healthily. Eat antioxidant-rich food and maintain a healthy weight.','2013-08-20 22:05:52',0,2),
	(2018,2147483647,'Stevie AtEstee','https://profile-b.xx.fbcdn.net/hprofile-prn2/195485_100002351527147_3431849_n.jpg','Going running everyday this week!','2013-08-21 12:18:14',0,2),
	(2019,1305641,'JaKenna Marise Gilbert','https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/369095_1305641_9030947_n.jpg','Walk together, cook healthy together, and support each other.','2013-08-21 12:24:37',0,4),
	(2020,39607548,'Mili Kuo','https://profile-a.xx.fbcdn.net/hprofile-prn1/41405_39607548_1844_n.jpg','Live healthily. Eat antioxidant-rich food and maintain a healthy weight.','2013-08-21 13:07:18',0,2),
	(2021,2147483647,'Stevie AtEstee','https://profile-b.xx.fbcdn.net/hprofile-prn2/195485_100002351527147_3431849_n.jpg','Go to the gym','2013-08-21 13:25:37',0,1),
	(2022,1305641,'JaKenna Marise Gilbert','https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/369095_1305641_9030947_n.jpg','Walk together, cook healthy together, and support each other.','2013-08-21 13:58:34',0,4),
	(2023,2147483647,'Stevie AtEstee','https://profile-b.xx.fbcdn.net/hprofile-prn2/195485_100002351527147_3431849_n.jpg','Walk together, cook healthy together, and support each other.','2013-08-21 14:38:39',0,4);

/*!40000 ALTER TABLE `circles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friends`;

CREATE TABLE `friends` (
  `id` int(11) NOT NULL auto_increment,
  `ref_circle_id` varchar(11) NOT NULL,
  `friends_fb_id` varchar(11) NOT NULL default '',
  `friends_name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;

INSERT INTO `friends` (`id`, `ref_circle_id`, `friends_fb_id`, `friends_name`)
VALUES
	(8,'1','550976682','Alex W.'),
	(9,'2','39603659','Alvery G.'),
	(10,'2','1548248238','Adam F.'),
	(11,'2','570179940','Alvery G.'),
	(12,'3','550976682','Alex W.'),
	(13,'3','63914509','Angelo K.'),
	(14,'3','10000370597','JB H.'),
	(15,'3','852415633','Anferne C.'),
	(16,'26','1548248238','Adam F.'),
	(17,'27','1548248238','Adam F.'),
	(18,'28','1059030980','Allen H.'),
	(19,'29','53101096','Andrew H.'),
	(20,'30','1366440094','Adam C.'),
	(21,'31','689025943','Ajit M.'),
	(22,'32','1548248238','Adam F.'),
	(23,'33','1548248238','Adam F.'),
	(24,'34','1548248238','Adam F.'),
	(25,'35','1548248238','Adam F.'),
	(26,'4','1548248238','Adam F.'),
	(27,'4','1366440094','Adam C.'),
	(28,'36','689025943','Ajit M.'),
	(29,'37','10000425064','Jason C.'),
	(30,'38','10000425064','Jason C.'),
	(31,'39','10000398800','Sean\'ouch O.'),
	(32,'5','10000425064','Jason C.'),
	(33,'5','10000398800','Sean\'ouch O.'),
	(34,'6','10000425064','Jason C.'),
	(35,'7','10000425064','Jason C.'),
	(36,'8','10000425064','Jason C.'),
	(37,'9','10000425064','Jason C.'),
	(38,'10','10000425064','Jason C.'),
	(39,'11','10000425064','Jason C.'),
	(40,'12','10000425064','Jason C.'),
	(41,'13','10000425064','Jason C.'),
	(42,'14','10000425064','Jason C.'),
	(43,'15','10000425064','Jason C.'),
	(44,'16','10000425064','Jason C.'),
	(45,'17','10000425064','Jason C.'),
	(46,'18','10000425064','Jason C.'),
	(47,'2014','585049521','Jason M.'),
	(48,'2015','1548248238','Adam F.'),
	(49,'2016','1366440094','Adam C.'),
	(50,'2017','682572430','Alice C.'),
	(51,'2018','1366440094','Adam C.'),
	(52,'2018','10000040470','Dashus C.'),
	(53,'2019','1311819004','Heather B.'),
	(54,'2019','763295159','Sienna F.'),
	(55,'2020','3004727','Colin G.'),
	(56,'2021','10000439353','Maya E.'),
	(57,'2021','10000279157','Payton C.'),
	(58,'2021','10000040470','Dashus C.'),
	(59,'2021','10000241879','Ingrid C.'),
	(60,'2022','763295159','Sienna F.'),
	(61,'2022','1311819004','Heather B.'),
	(62,'2022','810037','Ivy L.'),
	(63,'2023','10000040470','Dashus C.');

/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table goals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goals`;

CREATE TABLE `goals` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `goal` text character set utf8 NOT NULL,
  `icon` text character set utf8 NOT NULL,
  `taken_number` int(11) NOT NULL,
  `goal_type` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;

INSERT INTO `goals` (`id`, `goal`, `icon`, `taken_number`, `goal_type`)
VALUES
	(1,'Be proactive. Schedule a mammogram.','proactive',3,'default'),
	(2,'Live healthily. Eat antioxidant-rich food and maintain a healthy weight.','living',4,'default'),
	(3,'Drink less. Limit your alcohol intake and toast to a healthier life.','drinkless',0,'default'),
	(4,'Walk together, cook healthy together, and support each other.','walking',4,'default'),
	(5,'Support someone in your life.','supporting',1,'default');

/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `description` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;

INSERT INTO `photos` (`id`, `date`, `description`, `filename`)
VALUES
	(5,'2013-08-07 14:57:28','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a tortor nisl.','photo_1375901848.jpg'),
	(6,'2013-08-07 14:57:57','In varius nisl in urna sagittis, eget gravida nibh dapibus.','photo_1375901877.jpg'),
	(7,'2013-08-07 14:58:14','','photo_1375901894.jpg'),
	(8,'2013-08-21 11:27:45','','photo_1377098865.jpg'),
	(9,'2013-08-21 11:27:53','','photo_1377098873.jpg'),
	(10,'2013-08-21 12:33:48','','photo_1377102828.jpg'),
	(11,'2013-08-21 12:40:57','','photo_1377103257.jpg'),
	(12,'2013-08-21 12:44:20','','photo_1377103460.jpg'),
	(13,'2013-08-21 12:57:01','a test','photo_1377104221.jpg'),
	(14,'2013-08-21 12:59:25','','photo_1377104365.jpg'),
	(15,'2013-08-21 13:15:15','I believe in the power of positive thought. ','photo_1377105315.jpg'),
	(16,'2013-08-21 14:10:16','','photo_1377108616.jpg'),
	(17,'2013-08-21 14:11:36','','photo_1377108696.jpg'),
	(18,'2013-08-21 15:09:53','I\'m a baby. I shouldn\'t be surfing the web. ','photo_1377112193.jpg');

/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;