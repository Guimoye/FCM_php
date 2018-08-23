-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2018 a las 22:34:24
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notifications`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `dni` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `token`, `nombre`, `dni`) VALUES
(13, 'f5SVuFaO98I:APA91bHvacTahgR6GE8ohURKYr1dOIReWAAoHD20RvPeRgkB9KX15vDOvLadE6rjcqzmbZklC-lPXXSD1-QTo9q0qsrD-6UPGCzhOWvBhv8VYxHt7HIM9FhEy8C9gWn5kYSMHCvkHitY', 'Javier', '48993181'),
(14, 'f5SVuFaO98I:APA91bHvacTahgR6GE8ohURKYr1dOIReWAAoHD20RvPeRgkB9KX15vDOvLadE6rjcqzmbZklC-lPXXSD1-QTo9q0qsrD-6UPGCzhOWvBhv8VYxHt7HIM9FhEy8C9gWn5kYSMHCvkHitY', 'bdbdhddh', 'bdbbdbdhe'),
(15, 'f5SVuFaO98I:APA91bHvacTahgR6GE8ohURKYr1dOIReWAAoHD20RvPeRgkB9KX15vDOvLadE6rjcqzmbZklC-lPXXSD1-QTo9q0qsrD-6UPGCzhOWvBhv8VYxHt7HIM9FhEy8C9gWn5kYSMHCvkHitY', 'jdheejb', 'jeujdjd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
