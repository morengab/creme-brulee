# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.33)
# Database: macadamia_cluster_02
# Generation Time: 2013-12-08 19:36:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE d53482573gb7uf;

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
	(72,6,'Selection','v','icons/illustrator/selection'),
	(73,6,'Direction Selection','a','icons/illustrator/directselection'),
	(74,6,'Magic Wand','y','icons/illustrator/magicwand'),
	(75,6,'Lasso','q','icons/illustrator/lasso'),
	(76,6,'Pen','p','icons/illustrator/pen'),
	(77,6,'Type','t','icons/illustrator/type'),
	(78,6,'Line Segment','\\','icons/illustrator/line'),
	(79,6,'Rectangle','m','icons/illustrator/rectangle'),
	(80,6,'Ellipse','l','icons/illustrator/ellipse'),
	(81,6,'Paintbrush','b','icons/illustrator/paintbrush'),
	(82,6,'Pencil','n','icons/illustrator/pencil'),
	(83,6,'Scissors','c','icons/illustrator/scissors'),
	(91,6,'Eyedropper','i','icons/illustrator/eyedropper'),
	(94,6,'Hand','h','icons/illustrator/hand'),
	(100,7,'Direct Selection','a','icons/indesign/directionselection'),
	(102,7,'Pen','p','icons/indesign/pen'),
	(103,7,'Type','t','icons/indesign/type'),
	(104,7,'Pencil','n','icons/indesign/pencil'),
	(106,7,'Rectangle ','m','icons/indesign/rectangle'),
	(107,7,'Ellipse','l','icons/indesign/ellipse'),
	(111,7,'Hand','h','icons/indesign/hand'),
	(112,7,'Eyedropper','i','icons/indesign/eyedropper'),
	(113,7,'lasso','q','icons/indesign/lasso'),
	(114,7,'Line Segment','\\','icons/indesign/line'),
	(115,7,'Magic Wand','y','icons/indesign/magicwand'),
	(116,7,'Scissors','c','icons/indesign/scissors'),
	(117,7,'Zoom','z','icons/indesign/zoom'),
	(118,7,'Paint Brush','b','icons/indesign/paintbrush'),
	(119,6,'Zoom','z','icons/illustrator/zoom');

/*!40000 ALTER TABLE `shortcuts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
