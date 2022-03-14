-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2021 a las 03:54:19
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codeig`
--

CREATE DATABASE IF NOT EXISTS `codeig` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `codeig`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `salario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `fecha_ingreso`, `nombre`, `salario`) VALUES
(0, '2021-07-21', 'Camilo Rincon', 3500000),
(2, '2021-07-20', 'Andres Rincon', 3000000),
(3, '2021-07-20', 'Juan Rincon', 5000000),
(5, '2021-07-23', 'Olga Rincon', 2200000),
(6, '2021-07-22', 'Valentina Garcia', 1000000),
(7, '2021-07-22', 'Andrea Garcia', 1500000),
(8, '2021-07-22', 'Cristian Cantor', 500000),
(9, '2021-07-20', 'Camila Romero', 1100000),
(10, '2021-07-20', 'Carlos Rodriguez', 1500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `resumen` varchar(50) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `codigo`, `descripcion`, `resumen`, `id_empleado`) VALUES
(1, '5', 'Aumento salarial', 'Aumento', 5),
(2, '12', 'Renuncia por mejor oferta laboral', 'Renuncia', 0),
(3, '234', 'Renuncia por mejor oferta laboral', 'Renuncia por mejor oferta laboral', 8),
(4, '235', 'Equipo dañado', 'Mantenimiento', 5),
(5, '124', 'Perdida de equipo por robo', 'Robo', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
