/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_pln
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pln` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_pln`;

/*Table structure for table `tb_golongan` */

DROP TABLE IF EXISTS `tb_golongan`;

CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) NOT NULL,
  `gol_nama` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`gol_id`,`gol_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_golongan` */

insert  into `tb_golongan`(`gol_id`,`gol_kode`,`gol_nama`,`created_at`,`updated_at`) values 
(1,'13248','Gol II','2022-06-18 11:34:46','2022-06-29 11:34:49'),
(2,'96589','Gol II','2022-06-18 11:35:09','2022-06-18 11:35:11'),
(3,'64565','Gol III','2022-06-18 11:35:25','2022-06-18 11:35:27'),
(4,'53453','Gol IV','2022-06-29 15:21:00','2022-06-29 12:29:00'),
(5,'34216','Gol V','2022-06-29 12:29:00','2022-06-12 12:30:00');

/*Table structure for table `tb_pelanggan` */

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `pel_id` int(11) NOT NULL,
  `pel_id_gol` tinyint(3) DEFAULT NULL,
  `pel_no` varchar(20) NOT NULL,
  `pel_nama` varchar(50) DEFAULT NULL,
  `pel_alamat` text DEFAULT NULL,
  `pel_hp` varchar(20) DEFAULT NULL,
  `pel_ktp` varchar(50) DEFAULT NULL,
  `pel_seri` varchar(50) DEFAULT NULL,
  `pel_meteran` int(11) DEFAULT NULL,
  `pel_aktif` enum('Y','N') DEFAULT NULL,
  `pel_id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pel_id`,`pel_no`),
  KEY `pel_id_gol` (`pel_id_gol`),
  KEY `pel_id_user` (`pel_id_user`),
  CONSTRAINT `pel_id_gol` FOREIGN KEY (`pel_id_gol`) REFERENCES `tb_golongan` (`gol_id`),
  CONSTRAINT `pel_id_user` FOREIGN KEY (`pel_id_user`) REFERENCES `tb_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pelanggan` */

insert  into `tb_pelanggan`(`pel_id`,`pel_id_gol`,`pel_no`,`pel_nama`,`pel_alamat`,`pel_hp`,`pel_ktp`,`pel_seri`,`pel_meteran`,`pel_aktif`,`pel_id_user`,`created_at`,`updated_at`) values 
(1,1,'','Miftahul Ulyana',NULL,NULL,NULL,NULL,NULL,NULL,1,'2022-06-18 18:46:43',NULL),
(2,1,'','Husnida Putriyana H',NULL,NULL,NULL,NULL,NULL,NULL,2,'2022-06-19 10:14:26',NULL),
(3,2,'','gszrbr',NULL,NULL,NULL,NULL,NULL,NULL,3,'2022-06-19 16:40:15',NULL),
(4,1,'','','','','','',0,'',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(5,2,'','besbeb','','','','',0,'',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(6,2,'','','','','','',0,'',2,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_pos` varchar(5) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_users` */

insert  into `tb_users`(`user_id`,`user_email`,`user_password`,`user_nama`,`user_alamat`,`user_hp`,`user_pos`,`user_role`,`user_aktif`,`created_at`,`updated_at`) values 
(1,'mifthulyn07@gmail.com','123','Miftahul Ulyana Hutabarat',NULL,'0813','43254',0,NULL,'2022-06-18 17:18:23','2022-06-18 17:18:25'),
(2,'husnida@gmail.com','123','Husnida Putriyana',NULL,NULL,NULL,NULL,NULL,'2022-06-18 17:43:29',NULL),
(3,'ggbesbvgvr','fffffffff','',NULL,NULL,NULL,NULL,NULL,'2022-06-20 13:06:38',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
