-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2020 a las 19:37:40
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre_completo` text NOT NULL,
  `identificacion` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `login` text NOT NULL,
  `passwd` text NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_completo`, `identificacion`, `direccion`, `fecha_nacimiento`, `login`, `passwd`, `tipo_usuario`, `id`) VALUES
('eduar hernan', 1010111213, 'monserate', '2020-07-08', 'ehernan', ' 1234', 2, 7),
('uini', 1234567891, 'cra 21331', '2020-09-09', 'clos', '827ccb0eea8a706c4c34a16891f84e7b', 2, 10),
('Ana Lucia G', 34535198, ' cuidad jardin', '2020-09-09', 'analugo', '1234', 2, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE IF NOT EXISTS `usuarios2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `nombre_completo`, `identificacion`, `direccion`, `fecha_nacimiento`, `login`, `passwd`, `tipo_usuario`) VALUES
(1, 'Julian Castillo', '1234567890', 'cll1 #1-11', '1993-12-12', 'ajcastillo', '12345', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
