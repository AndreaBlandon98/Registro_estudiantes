-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 00:03:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantes`
--
CREATE DATABASE IF NOT EXISTS `estudiantes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estudiantes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `genero` enum('Y','N') DEFAULT NULL,
  `areas_interes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `edad`, `correo`, `curso`, `genero`, `areas_interes`) VALUES
(NULL, 'Andrea Blandon', 26, 'andrea.blandon@gmail.com', 'programacion', '', ''),
(NULL, 'Andrea Blandon', 26, 'andrea.blandon@gmail.com', 'Matemáticas', '', ''),
(NULL, 'Laura Tovar', 19, 'laura.tovar@gmail.com', 'Ciencias', '', 'Ciencias'),
(NULL, 'Esteban Munera', 31, 'esteban.munera@gmail.com', 'Literatura', '', 'Literatura');


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla estudiantes
--

--
-- Metadatos para la base de datos estudiantes
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
