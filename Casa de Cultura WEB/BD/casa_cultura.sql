-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2019 a las 22:08:43
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casa_cultura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--
create database casa_cultura;

use casa_cultura;


CREATE TABLE `administrador` (
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre`, `pass`, `tipo`) VALUES
('angeles', '1234', 'prncipal'),
('carina', '1234', 'principal'),
('franz', '1234', 'principal'),
('ivan', '1234', 'principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `asunto` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `mensaje` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID`, `nombre`, `correo_electronico`, `asunto`, `mensaje`) VALUES
(6, 'Maria de l', '1717110255@utectulancingo.edu.mx', 'Felicitacion', 'excelente pagina'),
(8, 'diana', 'diana.valeria201@gmail.com', 'Felicitacion', 'buenos talleres'),
(9, 'Maria de l', 'annggii199@gmail.com', 'queja', 'nnm,n,m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
