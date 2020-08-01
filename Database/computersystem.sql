/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.7.11 : Database - computesystem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`computesystem` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `computesystem`;

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(50) DEFAULT NULL,
  `brandlogo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `brand` */

LOCK TABLES `brand` WRITE;

insert  into `brand`(`brandid`,`brandname`,`brandlogo`) values (1,'PLY Computer','1.jpg');

UNLOCK TABLES;

/*Table structure for table `color` */

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color` (
  `colid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`colid`),
  KEY `fk` (`brandname`),
  CONSTRAINT `FK_color` FOREIGN KEY (`colid`) REFERENCES `productcolor` (`pcid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `color` */

LOCK TABLES `color` WRITE;

insert  into `color`(`colid`,`brandname`) values (2,'Black'),(1,'white');

UNLOCK TABLES;

/*Table structure for table `inventory` */

DROP TABLE IF EXISTS `inventory`;

CREATE TABLE `inventory` (
  `stockid` int(11) NOT NULL AUTO_INCREMENT,
  `stockname` varchar(50) DEFAULT NULL,
  `proid` int(11) DEFAULT NULL,
  PRIMARY KEY (`stockid`),
  KEY `FK` (`stockid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `inventory` */

LOCK TABLES `inventory` WRITE;

insert  into `inventory`(`stockid`,`stockname`,`proid`) values (1,'Dell',NULL),(2,'Acer',NULL),(3,'Asus',NULL),(4,'Apple',NULL),(5,'MIS',NULL),(6,'HP',NULL),(7,'Samsung',NULL),(8,'Sony',NULL);

UNLOCK TABLES;

/*Table structure for table `productcolor` */

DROP TABLE IF EXISTS `productcolor`;

CREATE TABLE `productcolor` (
  `pcid` int(11) NOT NULL AUTO_INCREMENT,
  `proid` int(11) DEFAULT NULL,
  `colid` int(11) DEFAULT NULL,
  PRIMARY KEY (`pcid`),
  KEY `Forenkey` (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `productcolor` */

LOCK TABLES `productcolor` WRITE;

insert  into `productcolor`(`pcid`,`proid`,`colid`) values (1,1,1),(2,2,2),(3,3,3);

UNLOCK TABLES;

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `stffid` int(11) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(50) DEFAULT NULL,
  `staffgender` varchar(5) DEFAULT NULL,
  `staffdob` datetime DEFAULT NULL,
  `staffaddress` varchar(100) DEFAULT NULL,
  `staffphone` varchar(100) DEFAULT NULL,
  `stockid` int(11) DEFAULT NULL,
  PRIMARY KEY (`stffid`),
  KEY `fk` (`stockid`),
  CONSTRAINT `FK_staff` FOREIGN KEY (`stffid`) REFERENCES `tblproduct` (`Staffid`),
  CONSTRAINT `FK_staff_inventory` FOREIGN KEY (`stockid`) REFERENCES `inventory` (`stockid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `staff` */

LOCK TABLES `staff` WRITE;

UNLOCK TABLES;

/*Table structure for table `tblproduct` */

DROP TABLE IF EXISTS `tblproduct`;

CREATE TABLE `tblproduct` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `proname` varchar(100) DEFAULT NULL,
  `procpu` varchar(100) DEFAULT NULL,
  `proram` varchar(100) DEFAULT NULL,
  `proharddisk` varchar(100) DEFAULT NULL,
  `prosize` varchar(100) DEFAULT NULL,
  `proprice` varchar(100) DEFAULT NULL,
  `brandid` int(11) DEFAULT NULL,
  `Staffid` int(11) DEFAULT NULL,
  `stockid` int(11) DEFAULT NULL,
  PRIMARY KEY (`proid`),
  KEY `NewIndex1` (`Staffid`),
  KEY `fk1` (`brandid`),
  KEY `FK_tblproduct_inventory` (`stockid`),
  CONSTRAINT `FK_tblproduct` FOREIGN KEY (`proid`) REFERENCES `productcolor` (`proid`),
  CONSTRAINT `FK_tblproduct_brand` FOREIGN KEY (`brandid`) REFERENCES `brand` (`brandid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tblproduct_inventory` FOREIGN KEY (`stockid`) REFERENCES `inventory` (`stockid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tblproduct` */

LOCK TABLES `tblproduct` WRITE;

insert  into `tblproduct`(`proid`,`proname`,`procpu`,`proram`,`proharddisk`,`prosize`,`proprice`,`brandid`,`Staffid`,`stockid`) values (1,'Acer','IntelR core I5-6200U CPU @ 2.30Ghz 2.40GHz','8GB','1TB','15.6 InH','530$',1,1,1),(2,'Asus','intel core I7','8GB','SDD 512GB','14','650$',1,1,1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
