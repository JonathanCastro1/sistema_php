-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2018 a las 20:58:03
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `profesion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `ciudad`, `telefono`, `profesion`) VALUES
(1, 'pedro', 'chacon', 'distrito federal', 12345678, 'panadero'),
(2, 'maria', 'ramirez', 'falcon', 234567, 'heladera'),
(3, 'andrea', 'bracamontes', 'zulia', 4567890, 'chef'),
(5, 'Pablo', 'Perez', 'valencia', 414564789, 'Contador'),
(8, 'joseito', 'camil', 'amazonas', 345, 'vago'),
(9, 'ramonsito', 'camilo', 'caracas', 1234567, 'costurero'),
(10, 'romulo', 'correa', 'guarenas', 8885566, 'capitan'),
(11, 'margarita', 'zerpa', 'merida', 0, 'chismosa'),
(12, 'joseito', 'pachin', 'valencia', 452345, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falconmunicipios`
--

CREATE TABLE `falconmunicipios` (
  `id` int(11) NOT NULL,
  `municipio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `falconmunicipios`
--

INSERT INTO `falconmunicipios` (`id`, `municipio`) VALUES
(1, 'acosta'),
(2, 'bolivar'),
(3, 'silva'),
(4, 'zamora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hubicacion`
--

CREATE TABLE `hubicacion` (
  `id` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hubicacion`
--

INSERT INTO `hubicacion` (`id`, `estado`, `ciudad`, `municipio`) VALUES
(1, 'distrito federal', 'caracas', 'libertador'),
(2, 'falcon', 'coro', 'acosta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinmunicipio`
--

CREATE TABLE `joinmunicipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `joinmunicipio`
--

INSERT INTO `joinmunicipio` (`id`, `municipio`) VALUES
(1, 'libertador'),
(2, 'san juan'),
(3, 'altagracia'),
(4, 'san jose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `ciudad` varchar(15) NOT NULL,
  `municipio` varchar(15) NOT NULL,
  `parroquia` varchar(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `apellido`, `estado`, `ciudad`, `municipio`, `parroquia`, `usuario`, `contrasena`) VALUES
(1, 6325149, 'carmen', 'pacheco', 'distrito federa', 'caracas', 'giraldo', 'camote', 'mia', '222'),
(2, 1234567, 'cruz', 'petro', 'carabobo', 'valencia', 'pequin', 'nanote', 'qwe', '333'),
(3, 45262728, 'jonathan', 'castro', 'aragua', 'pamone', 'cupira', 'guazon', 'calu1', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `falconmunicipios`
--
ALTER TABLE `falconmunicipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hubicacion`
--
ALTER TABLE `hubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `joinmunicipio`
--
ALTER TABLE `joinmunicipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `falconmunicipios`
--
ALTER TABLE `falconmunicipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hubicacion`
--
ALTER TABLE `hubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `joinmunicipio`
--
ALTER TABLE `joinmunicipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
