-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for ep4
DROP DATABASE IF EXISTS `ep4`;
CREATE DATABASE IF NOT EXISTS `ep4` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ep4`;


-- Dumping structure for table ep4.nomina
DROP TABLE IF EXISTS `nomina`;
CREATE TABLE IF NOT EXISTS `nomina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) DEFAULT NULL,
  `nombre` int(11) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table ep4.nomina: ~4 rows (approximately)
DELETE FROM `nomina`;
/*!40000 ALTER TABLE `nomina` DISABLE KEYS */;
INSERT INTO `nomina` (`id`, `cedula`, `nombre`, `apellidos`, `genero`, `valor`, `fecha`) VALUES
	(27, 20245430, 0, 'Acosta Montilla', 'M', 800000, '2012-01-01'),
	(28, 19543389, 0, 'Acosta Ochoa', 'M', 800000, '2012-01-01'),
	(29, 10323217, 0, 'Alvarado Roman ', 'M', 800000, '2012-01-01'),
	(30, 19798667, 0, 'Alvarez Perez', 'M', 800000, '2012-01-01');
/*!40000 ALTER TABLE `nomina` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
