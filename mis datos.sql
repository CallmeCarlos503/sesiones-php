-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.16.0.7229
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para gestiones
CREATE DATABASE IF NOT EXISTS `gestiones` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `gestiones`;

-- Volcando estructura para tabla gestiones.inventario
CREATE TABLE IF NOT EXISTS `inventario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(90) NOT NULL,
  `PRECIO` decimal(10,2) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `FECHA_FABRICACION` date NOT NULL,
  `FECHA_VENCIMIENTO` date NOT NULL,
  `FECHA_INGRESO` date DEFAULT curdate(),
  `ID_USUARIO_RESPONSABLE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_USUARIO_RESPONSABLE` (`ID_USUARIO_RESPONSABLE`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`ID_USUARIO_RESPONSABLE`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla gestiones.inventario: ~0 rows (aproximadamente)
DELETE FROM `inventario`;
INSERT INTO `inventario` (`ID`, `NOMBRE`, `PRECIO`, `STOCK`, `FECHA_FABRICACION`, `FECHA_VENCIMIENTO`, `FECHA_INGRESO`, `ID_USUARIO_RESPONSABLE`) VALUES
	(1, 'Papel', 12.00, 3, '2026-04-05', '2026-04-06', '2026-04-05', 2);

-- Volcando estructura para tabla gestiones.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla gestiones.roles: ~4 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`ID`, `Nombre`) VALUES
	(1, 'Administrador'),
	(2, 'Empleado'),
	(3, 'Programador'),
	(4, 'Otros');

-- Volcando estructura para tabla gestiones.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(90) NOT NULL,
  `APELLIDO` varchar(90) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `TELEFONO` varchar(8) NOT NULL,
  `CORREO` varchar(120) NOT NULL,
  `PASSWOR` text NOT NULL,
  `Rol` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Rol` (`Rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `roles` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla gestiones.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `DUI`, `TELEFONO`, `CORREO`, `PASSWOR`, `Rol`) VALUES
	(2, 'Carlos Alberto', 'Sanchez Castillo', '05972513-8', '71680706', 'carlosgeek503@gmail.com', '321', 1),
	(7, ' Juan Carlos', ' Bodoque Mendez', '05972513-9', '71680706', 'Juan@example.com', '$2y$10$r7qTBUymOGGcNVBwGioB2ev.kLiluTeXPW64i1XEYrhDZMdr1CXvC', 1),
	(9, 'Mireya', 'Argueta', '000000-0', '78753516', 'example2@gmail.com', '8d23cf6c86e834a7aa6eded54c26ce2bb2e74903538c61bdd5d2197997ab2f72', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
