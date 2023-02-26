-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.17-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5169
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sbd_web
DROP DATABASE IF EXISTS `sbd_web`;
CREATE DATABASE IF NOT EXISTS `sbd_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sbd_web`;

-- Dumping structure for table sbd_web.phonebook
DROP TABLE IF EXISTS `phonebook`;
CREATE TABLE IF NOT EXISTS `phonebook` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nomor_telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table sbd_web.phonebook: 10 rows
/*!40000 ALTER TABLE `phonebook` DISABLE KEYS */;
INSERT INTO `phonebook` (`id`, `nama`, `nomor_telepon`, `foto`) VALUES
	(13, 'Dhea', '081281129301', ''),
	(1, 'Fitri', '085715121159', ''),
	(4, 'Gima', '08561584040', ''),
	(8, 'Intan', '081916665523', ''),
	(3, 'Izmi', '085691005106', ''),
	(9, 'Nyokap', '081807882319', ''),
	(10, 'Trax FM', '081510141014', ''),
	(7, 'Trias', '082233845514', ''),
	(18, 'marcello', '08111982219', 'foto.jpg'),
	(15, 'Shira', '0123456789', NULL);
/*!40000 ALTER TABLE `phonebook` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
