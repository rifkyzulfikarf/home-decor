/*
SQLyog Ultimate v8.82 
MySQL - 5.6.24 : Database - home-decor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`home-decor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `home-decor`;

/*Table structure for table `img` */

DROP TABLE IF EXISTS `img`;

CREATE TABLE `img` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

/*Data for the table `img` */

insert  into `img`(`id`,`id_kategori`,`nama`) values (1,1,'01 Bed.png'),(2,1,'02 Bed Coffee Table.png'),(3,1,'03 Bed Silang.png'),(4,1,'05 Bookcase Lengkung.png'),(5,1,'06 Bookcase.png'),(6,1,'07 Large Bookcase.png'),(7,1,'08 Bar Chair.png'),(8,1,'09 Meh Dining Chair.png'),(9,1,'10 Rujen Chair.png'),(10,1,'11 Rujen Chair With Arm.png'),(11,1,'12 X Dining Chair.png'),(12,1,'13 X Dining Chair With Arm.png'),(13,1,'14 Bar Stool.png'),(14,1,'15 Bar Stool Kaki Segitiga.png'),(15,1,'16 Bar Stool Kotak Kaki Simple.png'),(16,1,'17 Bar Stool Kotak Kaki Silang.png'),(17,1,'18 Stool Bulat Kaki Bulat.png'),(18,1,'19 Stool Bulat Kaki Segitiga.png'),(19,1,'20 Stool Kotak Kaki Silang.png'),(20,1,'21 Stool Kotak Kaki Simple.png'),(21,1,'22 Combine Console.png'),(22,1,'23 Z Iron Console Table.png'),(23,1,'24 CoffeeTable Silang.png'),(24,1,'25 Circle Stainless Coffee Table.png'),(25,1,'26 Circle Coffee Table.png'),(26,1,'27 Coffee Table with Glass.png'),(27,1,'28 Stool Kotak.png'),(28,1,'29 Office Table.png'),(29,1,'30 Office Chair.png'),(30,1,'31 Bar Table.png'),(31,1,'32 Dining Table with SS.png'),(32,1,'33 Dining Table Natural Leg Wood 300.png'),(33,1,'34  Dining Table Natural Leg Wood 200.png'),(34,1,'35  Dining Table Jointing.png'),(35,1,'36 Dining Table With Black Iron base.png'),(36,1,'37 Dining Table With Natural Iron base.png'),(37,1,'38 Dining Table With Iron base.png'),(38,1,'39 Dining Table With Square Iron.png'),(39,1,'40 Meh Dining Table with T Leg.png'),(40,1,'41 Ribbon Table.png'),(41,1,'42 Slat Bench.png'),(42,1,'43 Profil Bench.png'),(43,1,'44 Natural Bench 150.png'),(44,1,'45 Natural Bench 200.png'),(45,1,'46 Natural Bench with Stainless Leg 150.png'),(46,1,'47  Natural Bench with Stainless Leg 200.png'),(47,1,'48 Rujen Bench.png'),(48,2,'01 Balet dan Couple.png'),(49,2,'02 Bonsai dan Anggur.png'),(50,2,'03 Hanger Gentong dan Single.png'),(51,2,'04 Ibu Anak Small.png'),(52,2,'05 Kiss dan Penari.png'),(53,2,'06 Rak Daun.png'),(54,2,'07 Tempat Buah Lengkung, A dan B.png'),(55,2,'08 Anting Sono, Banteng dan Naga.png'),(56,2,'09 Gajah dan Katak.png'),(57,2,'10 Guci.png'),(58,2,'11 Mangkok, Nampan Sono dan Kaki.png'),(59,2,'12 Nagka dan Peanut.png'),(60,2,'13 Piring Dia dan Daun Gelombang Cinta.png'),(61,2,'14 TB Sono Tutup dan Aqua.png'),(62,2,'15 Tempat Buah Alami dan Sono.png'),(63,2,'16 Untir Sono dan Yinyang.png'),(64,3,'HD07002 Marrion TV Cabinet Large 200x50x65CM.JPG'),(65,3,'HD07003 Marrion Glass Cabinet 1 Door 70x40x200CM.JPG'),(66,3,'HD07004 Marrion Glass Cabinet 2 Door 130X48X220CM.JPG'),(67,3,'HD07008 Marrion Dining Table 220 (220x110x78CM).JPG'),(68,3,'HD07011 Marrion Sideboard Small 160X50X90cm.JPG'),(69,3,'HD07012 Marrion Salon Table Box 135x75x50CM.JPG'),(70,3,'HD07014 Table 3 Latches 160x45x90CM.JPG'),(71,3,'HD07015 Almari 1 Door 75x45x190CM.JPG'),(72,3,'HD07016 Bottle Racht 2 Drawers 100x40x105CM.JPG'),(73,3,'HD07017 Recca Table 245x103x74CM.JPG'),(74,3,'HD07018 Cross Log Table 240x100x75CM.JPG'),(75,3,'NO KATALOG.JPG'),(76,4,'HD08001 SIDEBOARD 3 DOORS 3 DRAWERS 220X45X85.jpg'),(77,4,'HD08002 SIDEBOARD 3 DOORS 180X45X85.jpg'),(78,4,'HD08003 BOOKCASE 3 DRAWERS 50X35X180.jpg'),(79,4,'HD08004 CABINET 2 DOORS 50X40X180.jpg'),(80,4,'HD08005 CABINET 4 DOORS 130X45X160.jpg'),(81,4,'HD08006 CHEST OF DRAWERS 50X40X120.jpg'),(82,4,'HD08007 TV STAND 2 DRAWERS 2 LATCHES 220X45X37.jpg'),(83,4,'HD08008 TV STAND 2 DRAWERS 180X45X37.jpg'),(84,4,'HD08009 TV STAND 1 DRAWERS 140X45X37.jpg'),(85,4,'HD08010 COFFEE TABLE 4 DRAWERS  135X70X40.jpg'),(86,4,'HD08011 END TABLE 1 DRAWER  60X60X40.jpg'),(87,4,'HD08012 COFFEE TABLE WITH BLACK IRON FOR LEGS 135X75X45.jpg'),(88,4,'HD08013 END TABLE WITH BLACK IRON FOR LEGS 60X60X45.jpg'),(89,4,'HD08016 DINNING TABLE KD WITH BLACK IRON LEGS 220X100X78.jpg'),(90,5,'HD09003 Boekenkast 3 Drawers +1OV+1 Doors 195X65X40CM.JPG'),(91,5,'HD09004 Boekenkast  3 Drawers +3OV 195X65X40CM.JPG'),(92,5,'HD09005 Dressoir  6 Drawers +2 Doors 75X210X45CM.JPG'),(93,5,'HD09006 Etafel with Black Iron DT 190x95x78.jpg'),(94,5,'HD09008 HOEKTAFEL 1OV 65X65X41.jpg'),(95,5,'HD09009 Hoektafel 1 Door 65X65X41.jpg'),(96,5,'HD09012 SALONTAFEL 92X92X41CM.JPG'),(97,5,'HD09013 KOMMODE 2L+2D 110X40X96CM.JPG'),(98,5,'HD09014 BERNGKAST 3L+2D+2OV 162X120X40CM.JPG'),(99,6,'DSC_0682.jpg'),(100,6,'DSC_0703.jpg'),(101,6,'DSC_0708.jpg'),(102,6,'DSC_0720.jpg'),(103,6,'DSC_0727.jpg'),(104,6,'HD01009 KURSI TERATAI.png'),(105,6,'kursi swanci 01.jpg'),(106,6,'kursi teras hongkong01.png'),(107,6,'meja swanci 01.jpg'),(108,6,'meja teh naga 01.jpg'),(109,6,'meja teras hongkong01.png'),(110,6,'Set Makan Swanci.jpg'),(111,6,'Set Tamu Cingkok.jpg'),(112,6,'Set Tamu Giok.jpg'),(113,6,'Set Tamu Killin.jpg'),(114,6,'Set Tamu Naga.jpg'),(115,6,'Set Tamu Swanci.jpg'),(116,6,'Set Tamu Taichi.jpg'),(117,6,'set teras hongkong.png'),(118,7,'Bench Ming.jpg'),(119,7,'DSC_0679.jpg'),(120,7,'DSC_0681.jpg'),(121,7,'DSC_0718.jpg'),(122,7,'kursi kendang 01.jpg'),(123,7,'meja kendang 01.jpg'),(124,7,'Set Kendang.jpg'),(125,7,'Set Makan Macao.jpg'),(126,7,'Set Partner Desk.jpg'),(127,8,'Bathroom.jpg'),(128,8,'BD 4 view 1.jpg'),(129,8,'BD 4 view 3.jpg'),(130,8,'BD 4 view 4.jpg'),(131,8,'bedroom 1 view 1.jpg'),(132,8,'bedroom 1 view 2.jpg'),(133,8,'bedroom 1 view 3.jpg'),(134,8,'Bedroom 1 view 4 (bathroom).jpg'),(135,8,'bedroom 2 view (bathroom).jpg'),(136,8,'bedroom 2 view 1.jpg'),(137,8,'bedroom 2 view 2.jpg'),(138,8,'bedroom 2 view 3.jpg'),(139,8,'bedroom 3 view 1 (alternatif 1).jpg'),(140,8,'bedroom 3 view 1 (alternatif 2).jpg'),(141,8,'bedroom 3 view 2.jpg'),(142,8,'bedroom 3 view 3.jpg'),(143,8,'Kamar Anak Bu Erni.jpg'),(144,8,'Kamar Anak Cewek Pak Agung Budi view 1.jpg'),(145,8,'Kamar Anak Cewek Pak Agung Budi view 2.jpg'),(146,8,'Kamar Anak Cowok Kedua Pak Agung Budi view 1.jpg'),(147,8,'Kamar Anak Cowok Kedua Pak Agung Budi view 2.jpg'),(148,8,'Kamar Anak Cowok Pertama Pak Agung Budi view 1.jpg'),(149,8,'Kamar Anak Cowok Pertama Pak Agung Budi view 2.jpg'),(150,8,'Kamar Anak Kedua Bu Rinas view 1.jpg'),(151,8,'Kamar Anak Kedua Bu Rinas view 2.jpg'),(152,8,'Kamar Anak Kedua Bu Rinas view 3.jpg'),(153,8,'Kamar Anak Pertama Bu Rinas view 1.jpg'),(154,8,'Kamar Anak Pertama Bu Rinas view 2.jpg'),(155,8,'Kamar Tidur Tamu Pak Agung Pati.jpg'),(156,8,'Kamar Utama Bu Tia view 1.jpg'),(157,8,'Kamar Utama Bu Tia view 2.jpg'),(158,8,'Kamar Utama Bu Tia view 2i.jpg'),(159,8,'Kamar Utama Bu Tia view 3.jpg'),(160,8,'Kamar Utama Bu Tia view 4.jpg'),(161,8,'Kamar Utama Bu Tia view 5.jpg'),(162,8,'Kamar Utama Pak Agung Budi view 1.jpg'),(163,8,'Kamar Utama Pak Agung Budi view 2.jpg'),(164,8,'Kamar Utama Pak Agung Budi view 3.jpg'),(165,8,'Kamar Utama Pak Agung Pati view 1.jpg'),(166,8,'Kamar Utama Pak Agung Pati view 2.jpg'),(167,8,'Kamar Utama Pak Agung Pati view 3.jpg'),(168,8,'Kamar Utama Pak Agung Pati view 4 (Bathroom).jpg'),(169,8,'Main Bedroom (1).jpg'),(170,8,'Main Bedroom (2).jpg'),(171,8,'Parents Bedroom (1).jpg'),(172,8,'Parents Bedroom (2).jpg'),(173,8,'Parents Bedroom (3).jpg'),(174,8,'Parents Bedroom (4).jpg');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`id_menu`,`nama`,`hapus`) values (1,1,'MODERN COLLECTIONS','0'),(2,1,'CRAFT COLLECTIONS','0'),(3,1,'RECYCLE PINE - WHITE','0'),(4,1,'RECYCLE PINE - IRON','0'),(5,1,'RECYCLE PINE - GRAY','0'),(6,1,'CLASSIC COLLECTION - CING','0'),(7,1,'CLASSIC COLLECTION - MING','0'),(8,2,'HOME - BEDROOM','0'),(9,2,'HOME - KITCHEN SET','0'),(10,2,'HOME - LIVING AND FAMILY','0'),(11,2,'HOME - OTHERS','0'),(12,2,'HOTEL','0'),(13,2,'OFFICE','0'),(14,3,'HOME - BEDROOM ','0'),(15,3,'HOME - KITCHEN SET','0'),(16,3,'HOME - LIVING AND FAMILY','0'),(17,3,'HOME - KIDS AND YOUTH','0'),(18,3,'CAFE AND RESTO','0'),(19,3,'OFFICE','0');

/*Table structure for table `menu_public` */

DROP TABLE IF EXISTS `menu_public`;

CREATE TABLE `menu_public` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `menu_public` */

insert  into `menu_public`(`id`,`nama`,`hapus`) values (1,'FURNITURE','0'),(2,'DESIGN PROJECT','0'),(3,'INTERIOR IDEAS','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
