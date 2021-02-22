-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2021 a las 17:56:55
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_nuevoecu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buses`
--

CREATE TABLE `buses` (
  `id` int(20) NOT NULL,
  `cod_buses` int(50) NOT NULL,
  `placa` int(20) NOT NULL,
  `documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `buses`
--

INSERT INTO `buses` (`id`, `cod_buses`, `placa`, `documento`) VALUES
(26, 200000, 0, 'CAMPAÑAS.xlsx'),
(27, 200000, 0, 'CAMPAÑAS.xlsx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `cedula` int(10) NOT NULL,
  `tipo_indentificacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellidos`, `cedula`, `tipo_indentificacion`) VALUES
(4, 'johan', 'sanchez', 98746413, 'Cedula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_aportes`
--

CREATE TABLE `registro_aportes` (
  `id` int(50) NOT NULL,
  `monto` int(50) NOT NULL,
  `id_persona` varchar(20) NOT NULL,
  `cedula` int(20) NOT NULL,
  `fecha_ingreso` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_aportes`
--

INSERT INTO `registro_aportes` (`id`, `monto`, `id_persona`, `cedula`, `fecha_ingreso`) VALUES
(22, 200, 'nando', 55565823, '2021-02-22 00:00:00.000000'),
(23, 100000, 'nando', 958985623, '2021-08-19 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(50) NOT NULL,
  `salida` varchar(20) NOT NULL,
  `serie` int(50) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `hora` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `salida`, `serie`, `dia`, `mes`, `hora`) VALUES
(6, 'eeee', 23, 'dia', '2021-09', 9),
(7, 'eeee', 23, 'dia', '2021-09', 9),
(8, 'eeee', 23, 'dia', '2021-09', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `fecha_creacion` datetime(6) NOT NULL,
  `fecha_actual` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_aportes`
--
ALTER TABLE `registro_aportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro_aportes`
--
ALTER TABLE `registro_aportes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
