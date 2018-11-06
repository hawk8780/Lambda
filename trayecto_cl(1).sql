-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2018 a las 03:37:05
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trayecto_cl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buses`
--

CREATE TABLE `buses` (
  `asientos_disponibles` int(3) NOT NULL,
  `chofer` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `patente` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `id_bus` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `buses`
--

INSERT INTO `buses` (`asientos_disponibles`, `chofer`, `tipo`, `patente`, `id_bus`) VALUES
(25, 'Antonio González', 'MiniBus', 'ADTR523', 5),
(50, 'Carlos Montecinos', 'Bus', 'ARPT56', 8),
(35, 'Rosa Martinez', 'Bus turista', 'ASDG76', 12),
(50, 'Marcos Carrillo', 'Bus Turista', 'AX1265', 4),
(50, 'Alejandro Poblete', 'Bus', 'AXCP98', 3),
(50, 'Cristiano Pérez', 'Bus Turista', 'BRPT56', 2),
(35, 'Genaro Silva', 'Micro Bus', 'BRSP35', 1),
(50, 'Mario Sandoval', 'Bus', 'EGGD43', 14),
(35, 'Benjamin Fuentes', 'Bus', 'EROL76', 10),
(50, 'David Saldias', 'Bus', 'GWSA43', 9),
(50, 'Alfonso Da Silva', 'Bus', 'LCXC77', 15),
(50, 'Pablo Escroba', 'Bus', 'LDOE54', 13),
(50, 'Carlos Villanueva', 'Bus', 'RTYN48', 7),
(50, 'Esteban Soto', 'Bus', 'WWAZ29', 11),
(50, 'Felipe Errazuriz', 'Bus', 'ZXCP28', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

CREATE TABLE `recorridos` (
  `origen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `destino` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `horario_salida` time NOT NULL,
  `numero_recorrido` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`origen`, `destino`, `fecha`, `horario_salida`, `numero_recorrido`) VALUES
('TEMUCO', 'SANTIAGO', '0000-00-00', '00:00:00', 1),
('TEMUCO', 'VALDIVIA', '0000-00-00', '00:00:00', 2),
('OSORNO', 'TEMUCO', '0000-00-00', '00:00:00', 3),
('PUERTO MONTT', 'SANTIAGO', '0000-00-00', '00:00:00', 4),
('CONCEPCION', 'SANTIAGO', '0000-00-00', '00:00:00', 5),
('SANTIAGO', 'TEMUCO', '0000-00-00', '00:00:00', 6),
('OSORNO', 'TEMUCO', '0000-00-00', '00:00:00', 7),
('CHILLAN', 'TEMUCO', '0000-00-00', '00:00:00', 8),
('CONTITUCIÓN', 'TEMUCO', '0000-00-00', '00:00:00', 9),
('VALPARAISO', 'TEMUCO', '0000-00-00', '00:00:00', 10),
('PUERTO VARAS', 'TEMUCO', '0000-00-00', '00:00:00', 11),
('CHILLAN', 'SANTIAGO', '0000-00-00', '00:00:00', 12),
('LOS ANGELES', 'SANTIAGO', '0000-00-00', '00:00:00', 13),
('TEMUCO', 'LOS ANGELES', '0000-00-00', '00:00:00', 14),
('SANTIAGO', 'TEMUCO', '0000-00-00', '00:00:00', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cuenta` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`patente`),
  ADD UNIQUE KEY `id_bus` (`id_bus`),
  ADD UNIQUE KEY `identificador` (`id_bus`);

--
-- Indices de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  ADD UNIQUE KEY `identificador_recorrido` (`numero_recorrido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buses`
--
ALTER TABLE `buses`
  MODIFY `id_bus` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
