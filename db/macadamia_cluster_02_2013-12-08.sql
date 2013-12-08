# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.33)
# Database: macadamia_cluster_02
# Generation Time: 2013-12-08 20:29:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
	(72,21,'Selection','v','icons/illustrator/selection.png'),
	(73,21,'Direction Selection','a','icons/illustrator/directselection.png'),
	(74,21,'Magic Wand','y','icons/illustrator/magicwand.png'),
	(75,21,'Lasso','q','icons/illustrator/lasso.png'),
	(76,21,'Pen','p','icons/illustrator/pen.png'),
	(77,21,'Type','t','icons/illustrator/type.png'),
	(78,21,'Line Segment','\\','icons/illustrator/line.png'),
	(79,21,'Rectangle','m','icons/illustrator/rectangle.png'),
	(80,21,'Ellipse','l','icons/illustrator/ellipse.png'),
	(81,21,'Paintbrush','b','icons/illustrator/paintbrush.png'),
	(82,21,'Pencil','n','icons/illustrator/pencil.png'),
	(83,21,'Scissors','c','icons/illustrator/scissors.png'),
	(91,21,'Eyedropper','i','icons/illustrator/eyedropper.png'),
	(94,21,'Hand','h','icons/illustrator/hand.png'),
	(100,7,'Direct Selection','a','icons/indesign/directionselection.png'),
	(102,7,'Pen','p','icons/indesign/pen.png'),
	(103,7,'Type','t','icons/indesign/type.png'),
	(104,7,'Pencil','n','icons/indesign/pencil.png'),
	(106,7,'Rectangle ','m','icons/indesign/rectangle.png'),
	(107,7,'Ellipse','l','icons/indesign/ellipse.png'),
	(111,7,'Hand','h','icons/indesign/hand.png'),
	(112,7,'Eyedropper','i','icons/indesign/eyedropper.png'),
	(113,7,'lasso','q','icons/indesign/lasso.png'),
	(114,7,'Line Segment','\\','icons/indesign/line.png'),
	(115,7,'Magic Wand','y','icons/indesign/magicwand.png'),
	(116,7,'Scissors','c','icons/indesign/scissors.png'),
	(117,7,'Zoom','z','icons/indesign/zoom.png'),
	(118,7,'Paint Brush','b','icons/indesign/paintbrush.png'),
	(119,21,'Zoom','z','icons/illustrator/zoom.png');

/*!40000 ALTER TABLE `shortcuts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
