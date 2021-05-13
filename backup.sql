/*
SQLyog Job Agent v12.4.3 (64 bit) Copyright(c) Webyog Inc. All Rights Reserved.


MySQL - 10.4.8-MariaDB : Database - prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prueba`;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`apellidos`,`cedula`,`saldo`) values 
(1,'william sleider','valencia cruz',123456789,19875),
(2,'luz elena','cruz valbuena',12457896,28000),
(3,'joseph santiado','valencia cruz',12369474,22890),
(4,'jorge eduardo','jaramillo ramos',58992313,58610),
(5,'diana lizeth','albornoz bernal',484916538,46325);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
