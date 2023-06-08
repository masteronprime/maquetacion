-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 12:09:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maquetacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_add_user` (IN `p_nombre` VARCHAR(255), IN `p_apellido` VARCHAR(255), IN `p_correo` VARCHAR(255), IN `p_celular` VARCHAR(20))   BEGIN
  INSERT INTO Maquetacion.users (nombre, apellido, correo, celular)
  VALUES (p_nombre, p_apellido, p_correo, p_celular);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `correo`, `celular`) VALUES
(1, 'dasdasd', 'asdasdas', 'adasda', 'daasd'),
(2, 'asdasd', 'dasdad', 'sdadasd', 'sdfasfasfa'),
(3, 'Marcelo', 'asdasda', 'asdasdasda', 'asdasdad'),
(4, 'asdasd', 'adsadada', 'm@gmail.com', '132141312'),
(5, 'asdasd', 'adsadada', 'm@gmail.com', '132141312'),
(6, 'asdasd', 'adsadada', 'm@gmail.com', '132141312'),
(7, 'asdasd', 'adsadada', 'm@gmail.com', '132141312'),
(8, 'asdasd', 'adsadada', 'm@gmail.com', '132141312'),
(9, 'Marcelo', 'ibarra', 'jd@gmail.com', '977885325'),
(10, 'ray marcelo', 'ibarra', 'H@gmail.com', '79797464'),
(11, 'ray marcelo', 'ibarra', 'H@gmail.com', '79797464'),
(12, 'prueba', 'aaaaaa', 'd@gmail.com', '797975445');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
