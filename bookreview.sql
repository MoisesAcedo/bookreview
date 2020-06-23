-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2020 a las 13:09:45
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `booki`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `imagen` varchar(200) NOT NULL DEFAULT 'uploads/default.jpg',
  `nota` float(2,1) NOT NULL,
  `destacado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `autor`, `imagen`, `nota`, `destacado`) VALUES
(1, 'UN CUENTO PERFECTO', 'ELISABET BENAVENT', 'uploads/libro-01.jpg', 9.3, 1),
(2, 'LA MADRE DE FRANKENSTEIN', 'ALMUDENA GRANDES', 'uploads/libro-02.jpg', 8.9, 1),
(3, 'BALADA DE PÁJAROS CANTORES Y SERPIENTES', 'SUZANNE COLLINS', 'uploads/libro-03.jpg', 9.3, 1),
(4, 'SOY UNA MAMÁ', 'MEGAN MAXWELL', 'uploads/libro-04.jpg', 9.0, 1),
(5, 'TIERRA', 'ELOY MORENO', 'uploads/libro-05.jpg', 8.7, 1),
(6, 'LOBA NEGRA', 'JUAN GOMEZ-JURADO', 'uploads/libro-06.jpg', 9.2, 0),
(7, 'REINA ROJA', 'JUAN GOMEZ-JURADO', 'uploads/libro-07.jpg', 8.9, 0),
(8, 'LA CHICA DE NIEVE', 'JAVIER CASTILLO', 'uploads/libro-08.jpg', 9.4, 0),
(9, 'Y JULIA RETO A LOS DIOSES', 'SANTIAGO POSTEGUILLO', 'uploads/libro-09.jpg', 9.1, 0),
(10, 'CICATRIZ', 'JUAN GOMEZ-JURADO', 'uploads/libro-10.jpg', 7.1, 0),
(11, 'EL MAPA DE LOS AFECTOS', 'ANA MERINO', 'uploads/libro-11.jpg', 8.6, 0),
(12, 'MENTALIDAD MAMBA: LOS SECRETOS DE MI EXITO', 'KOBE BRYANT', 'uploads/libro-12.jpg', 7.7, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
