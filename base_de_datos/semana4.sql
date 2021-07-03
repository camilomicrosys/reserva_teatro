-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2021 a las 04:13:11
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semana4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `fila`, `columna`, `estado`) VALUES
(1, 1, 1, 'v'),
(2, 1, 2, 'v'),
(3, 1, 3, 'l'),
(4, 1, 4, 'l'),
(5, 1, 5, 'l'),
(6, 2, 1, 'l'),
(7, 2, 2, 'l'),
(8, 2, 3, 'v'),
(9, 2, 4, 'l'),
(10, 2, 5, 'l'),
(11, 3, 1, 'l'),
(12, 3, 2, 'l'),
(13, 3, 3, 'v'),
(14, 3, 4, 'l'),
(15, 3, 5, 'l'),
(16, 4, 1, 'l'),
(17, 4, 2, 'R'),
(18, 4, 3, 'l'),
(19, 4, 4, 'l'),
(20, 4, 5, 'v'),
(21, 5, 1, 'v'),
(22, 5, 2, 'l'),
(23, 5, 3, 'R'),
(24, 5, 4, 'l'),
(25, 5, 5, 'l');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
