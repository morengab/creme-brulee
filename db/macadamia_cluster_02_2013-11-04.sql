# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.29)
# Database: macadamia_cluster_02
# Generation Time: 2013-11-04 20:50:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table apps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL DEFAULT '',
  `date` varchar(256) DEFAULT '',
  `image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `apps` WRITE;
/*!40000 ALTER TABLE `apps` DISABLE KEYS */;

INSERT INTO `apps` (`id`, `name`, `date`, `image_url`)
VALUES
	(6,'Illustrator','','icons/Illustrator.png'),
	(7,'InDesign','','icons/Indesign.png'),
	(10,'Photoshop','','icons/Photoshop.png');

/*!40000 ALTER TABLE `apps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shortcuts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shortcuts`;

CREATE TABLE `shortcuts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` int(11) unsigned NOT NULL,
  `name` varchar(256) NOT NULL DEFAULT '',
  `shortcut` varchar(256) NOT NULL DEFAULT '',
  `image` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_id` (`app_id`),
  CONSTRAINT `shortcuts_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shortcuts` WRITE;
/*!40000 ALTER TABLE `shortcuts` DISABLE KEYS */;

INSERT INTO `shortcuts` (`id`, `app_id`, `name`, `shortcut`, `image`)
VALUES
	(20,10,'Brush','b',NULL),
	(21,10,'Marquee','m',NULL),
	(22,10,'Arrow','v',NULL);

/*!40000 ALTER TABLE `shortcuts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
