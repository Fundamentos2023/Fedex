-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-06-2023 a las 18:12:52
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frle_votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_can` int NOT NULL AUTO_INCREMENT,
  `apellidos_can` varchar(50) NOT NULL,
  `nombres_can` varchar(50) NOT NULL,
  `movimiento_can` varchar(50) NOT NULL,
  `latitud_can` varchar(150) NOT NULL,
  `longitud_can` varchar(150) NOT NULL,
  `dignidad_can` varchar(100) NOT NULL,
  PRIMARY KEY (`id_can`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_can`, `apellidos_can`, `nombres_can`, `movimiento_can`, `latitud_can`, `longitud_can`, `dignidad_can`) VALUES
(1, 'JUAN', 'BARBA', 'naranja', '-0.8456021533042062', '-79.21123106759218', 'Presidencial'),
(2, 'Guerrero', 'Henry', 'Verde', '-1.6931623039616164', '-80.2103406197982', 'AsambleistaNacional'),
(5, 'ANDRES', 'BAUTISTA', 'Azul', '-2.930778264171236', '-79.02858713624077', 'AsambleistaProvincial'),
(4, 'LIZETH', 'IZA', 'Verde', '-0.9670116961462687', '-77.75833925892722', 'Presidencial');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
