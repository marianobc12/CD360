-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.26 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla cd360.empleados
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `foto` longtext,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(10) NOT NULL,
  `telFamiliar` varchar(10) NOT NULL,
  `comprobanteDom` longtext NOT NULL,
  `credencial` longtext NOT NULL,
  `curriculum` longtext,
  `numSegSocila` int(11) DEFAULT NULL,
  `puesto` varchar(200) NOT NULL,
  `salario` double(10,2) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `tipoJornada` varchar(50) NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Almacenamientos de los empleados';

-- Volcando datos para la tabla cd360.empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`idEmpleado`, `foto`, `nombre`, `apellido`, `fechaNacimiento`, `direccion`, `telefono`, `celular`, `telFamiliar`, `comprobanteDom`, `credencial`, `curriculum`, `numSegSocila`, `puesto`, `salario`, `horarios`, `tipoJornada`) VALUES
	(2, 'dsfsdf', 'hhh', 'ssdf', '2020-01-17', 'dsfsdf', '3sdfsdf', 'dsfdsf', 'sdfsdf', 'dsfsdf', 'dfsdf', 'dfsdf', 2, 'ddsfsdf', 2.00, 'dsfsdf', 'dsfsdf'),
	(3, 'dsfsdf', 'mariano', 'flores', '2020-01-17', 'dsfsdf', '3sdfsdf', 'dsfdsf', 'sdfsdf', 'dsfsdf', 'dfsdf', 'dfsdf', 2, 'ddsfsdf', 2.00, 'dsfsdf', 'dsfsdf');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla cd360.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRoles` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`idRoles`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Se almacenan los roles de los usuarios';

-- Volcando datos para la tabla cd360.roles: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`idRoles`, `nombre`) VALUES
	(1, 'Administrador'),
	(2, 'Ejecutivo de cuenta'),
	(3, 'Cliente'),
	(4, 'Provisional'),
	(5, 'Almacen'),
	(6, 'Control de calidad'),
	(7, 'Recursos humanos'),
	(8, 'Supervisor'),
	(9, 'Compras'),
	(10, 'Operadores'),
	(11, 'Ayudantes en general'),
	(12, 'Produccion'),
	(13, 'Operaciones');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla cd360.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `idRol` int(2) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `rrhhAlta` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tokenPassword` varchar(200) NOT NULL,
  `fechaAlta` date NOT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idRolFk` (`idRol`),
  KEY `idEmpleadoFk` (`idEmpleado`),
  KEY `rrhhAltaFk` (`rrhhAlta`),
  CONSTRAINT `idEmpleadoFk` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`),
  CONSTRAINT `idRolFk` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRoles`),
  CONSTRAINT `rrhhAltaFk` FOREIGN KEY (`rrhhAlta`) REFERENCES `empleados` (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla cd360.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`idUser`, `idRol`, `idEmpleado`, `rrhhAlta`, `user`, `pass`, `email`, `tokenPassword`, `fechaAlta`) VALUES
	(4, 7, 3, 2, 'mariano2', 'juan', 'marianobc12@hotmail.com', 'dfsdf324edfcv', '2020-01-21'),
	(5, 1, 2, 2, 'mariano', 'juan', 'marianobc12@hotmail.com', 'dfsdf324edfcv', '2020-01-21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
