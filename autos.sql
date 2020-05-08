-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-05-2020 a las 11:00:32
-- Versión del servidor: 5.5.62-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `auto_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_auto` varchar(50) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` year(4) NOT NULL,
  `km_auto` int(10) NOT NULL,
  `descripcion_auto` text NOT NULL,
  `precio` smallint(5) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`auto_id`, `nombre_auto`, `id_marca`, `modelo`, `km_auto`, `descripcion_auto`, `precio`, `fecha`) VALUES
(3, 'Serie3', 2, 2017, 10000, 'Gran Auto de lujo', 30000, '0000-00-00 00:00:00'),
(4, 'Clase C', 2, 2016, 5000, 'Tecnología alemana a tu alcance', 28000, '0000-00-00 00:00:00'),
(5, 'Corolla', 2, 2017, 1, 'Estrena este gran automovil', 30000, '0000-00-00 00:00:00'),
(6, 'Altima', 2, 2014, 30000, 'Gran estado, un dueño', 20000, '0000-00-00 00:00:00'),
(34, 'Pikanto Sport GLS', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 15:02:15'),
(35, 'Pikanto Ã‘andÃº', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 15:03:27'),
(36, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 15:05:16'),
(37, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 15:09:37'),
(38, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 15:10:35'),
(39, 'Pikanto Ã‘andÃº', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 16:47:04'),
(40, 'Pikanto Ã‘andÃº', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 16:47:32'),
(41, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 16:48:58'),
(42, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 2000, '2020-05-05 16:50:39'),
(43, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-05 17:05:44'),
(44, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-05 17:05:52'),
(45, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-05 17:17:26'),
(46, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:26:12'),
(47, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:26:57'),
(48, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:37:27'),
(49, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:41:45'),
(50, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:41:52'),
(51, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:41:54'),
(52, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:41:56'),
(53, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:42:58'),
(54, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:44:04'),
(55, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:46:12'),
(56, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:46:13'),
(57, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:48:23'),
(58, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:49:35'),
(59, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:49:58'),
(60, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:49:59'),
(61, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:49:59'),
(62, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:49:59'),
(63, 'Pikanto Ñandú', 2, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:50:39'),
(64, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:52:53'),
(65, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:53:09'),
(66, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:54:15'),
(67, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:56:15'),
(68, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:57:18'),
(69, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:57:42'),
(70, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 15:58:23'),
(71, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:01:37'),
(72, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:06:03'),
(73, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:06:12'),
(74, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:13:08'),
(75, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:13:21'),
(76, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:13:22'),
(77, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:13:22'),
(78, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:13:34'),
(79, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:14:44'),
(80, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:14:56'),
(81, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:15:55'),
(82, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:16:29'),
(83, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:19:02'),
(84, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:19:23'),
(85, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:23:13'),
(86, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:01'),
(87, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:01'),
(88, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:02'),
(89, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:02'),
(90, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:03'),
(91, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 16:25:13'),
(92, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-06 17:10:53'),
(93, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-07 08:21:05'),
(94, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-07 08:21:59'),
(95, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-07 08:28:01'),
(96, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-07 08:28:38'),
(97, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-07 08:37:41'),
(98, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:18:39'),
(99, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:27:44'),
(100, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:32:04'),
(101, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:32:56'),
(102, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:42:53'),
(103, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:53:11'),
(104, 'Pikanto Ñandú', 0, 2019, 100000, ' Update Comodo,  poco combustible', 20000, '2020-05-08 09:53:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`, `pais`) VALUES
(1, 'WW', 'Alemania'),
(2, 'HINO', 'Japon'),
(3, 'FORD', 'EEUU');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
