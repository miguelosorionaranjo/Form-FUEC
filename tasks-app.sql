-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-10-2020 a las 13:47:57
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tasks-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuec` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contratante` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objetocontrato` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `origen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recorrido` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `fuec`, `name`, `apellido`, `description`, `contratante`, `objetocontrato`, `cc`, `origen`, `recorrido`) VALUES
(1, '01', 'hola', 'hello', 'Hola Mundo', 'miguel', 'si', 1018, 'Bogota', 'corto'),
(42, '02', 'dsfsdfsfsdf', '123', '123', 'perez', 'no', 2020, 'cali', 'Mediano'),
(44, '03', 'Prueba 01', '333', '3333', '33333', '3333', 33333, '3333', '333333'),
(45, '11111111111', 'juanito', '13232323', '1515116', 'pedro', 'jnkn', 1515151, 'cali', 'fdsdfdfsdfs'),
(46, '555555555', 'fuec', '454545', '454545', 'kkjkj', 'kjkj', 56565, 'jnjnjnjn', 'jnnjjnjnjnjn'),
(50, NULL, 'Girafales', '9876', '6789', 'pepe', 'hola', 5656565, 'barranquilla', 'largo'),
(51, '', 'Prueba 01', '232323', '1321321321', 'perex', '3333', 5555555, 'bogota', 'bhbjhbjhbjhb'),
(52, '33333', 'pumba', '222', '1321321', '3213', '1321', 323, '2132', '1321'),
(53, NULL, 'd', 'd', 'd', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
