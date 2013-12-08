# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.33)
# Database: macadamia_cluster_02
# Generation Time: 2013-12-08 18:30:03 +0000
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
  `image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_id` (`app_id`),
  CONSTRAINT `shortcuts_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shortcuts` WRITE;
/*!40000 ALTER TABLE `shortcuts` DISABLE KEYS */;

INSERT INTO `shortcuts` (`id`, `app_id`, `name`, `shortcut`, `image_url`)
VALUES
	(23,10,'Zoom','z','icons/photoshop/zoom.png'),
	(24,10,'Magic Wand','w','icons/photoshop/wand.png'),
	(25,10,'Text','t','icons/photoshop/text.png'),
	(26,10,'Slice','c','icons/photoshop/slice.png'),
	(27,10,'Move','v','icons/photoshop/arrow.png'),
	(28,10,'Brush','b','icons/photoshop/brush.png'),
	(29,10,'Crop','c','icons/photoshop/crop.png'),
	(30,10,'Eraser','e','icons/photoshop/eraser.png'),
	(31,10,'Eyedropper','i','icons/photoshop/eyedropper.png'),
	(32,10,'Gradient','g','icons/photoshop/gradient.png'),
	(33,10,'Hand','h','icons/photoshop/hand.png'),
	(34,10,'Lasso','l','icons/photoshop/lasso.png'),
	(35,10,'Direct Selection','a','icons/photoshop/path.png'),
	(36,10,'Pen','p','icons/photoshop/pen.png'),
	(37,10,'Rectangular Marquee','m','icons/photoshop/select.png'),
	(38,10,'Shape','u','icons/photoshop/shape.png'),
	(72,6,'Selection','v',NULL),
	(73,6,'Direction Selection','a',NULL),
	(74,6,'Magic Wand','y',NULL),
	(75,6,'Lasso','q',NULL),
	(76,6,'Pen','p',NULL),
	(77,6,'Type','t',NULL),
	(78,6,'Line Segment','\\',NULL),
	(79,6,'Rectangle','m',NULL),
	(80,6,'Ellipse','l',NULL),
	(81,6,'Paintbrush','b',NULL),
	(82,6,'Pencil','n',NULL),
	(83,6,'Scissors','c',NULL),
	(84,6,'Rotate','r',NULL),
	(85,6,'Reflect','o',NULL),
	(86,6,'Scale','s',NULL),
	(87,6,'Freetransform','e',NULL),
	(88,6,'Column Graph','j',NULL),
	(89,6,'Mesh','u',NULL),
	(90,6,'Gradient','g',NULL),
	(91,6,'Eyedropper','i',NULL),
	(92,6,'Blend','w',NULL),
	(93,6,'Live Paint Bucket','k',NULL),
	(94,6,'Hand','h',NULL),
	(95,6,'Zoom','z',NULL),
	(96,6,'Toggle between Fill & Stroke','x',NULL),
	(97,6,'Default Fill & Stroke','f',NULL);

/*!40000 ALTER TABLE `shortcuts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
