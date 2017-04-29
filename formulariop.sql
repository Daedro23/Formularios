-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 17:04:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulariop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Identificacion` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pagina_web` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `Identificacion`, `Telefono`, `correo`, `pagina_web`, `direccion`, `activo`) VALUES
(1, 'Danny', '23748388', '04126812253', 'daedro23@gmail.com', 'https://twitter.com/DanielGZX', 'Panama', 0),
(2, 'LUIS', 'asd', '02617357289', 'daedro23@gmail.com', 'PANAMA', 'PANAMA', 1),
(3, 'LUIS ENRIQUE VIERA FERNANDEZ', '17735576', '60036763', 'LEVIERAF@GMAIL.COM', '', 'PANAMA', 1),
(5, 'PAOLA VIERA', '4124124', '41241', 'paola.viera@gmail.com', '', 'Panama', 1),
(6, 'Danny', '23748389', '04126712252', 'daedro23@hotmail.com', NULL, 'Sabaneta', 1),
(7, 'Ana Karina', '19938244', '04126907153', 'anakrg@gmail.com', 'Ana', 'Sabaneta, gallo verde', 1),
(8, 'Lucia Rodriguez', '19938244', '04145608247', 'luci_1998@hotmail.com', 'Facebook', 'Sabaneta, gallo verde, Villa Cafetal', 0),
(9, 'Carlos Rodriguez', '9778649', '04166612990', 'cerodriguez23@hotmail.com', 'Cines', 'Sierra Maestra', 0),
(10, 'Argelida Gonzalez', '10437150', '04146183739', 'argelidag@gmail.com', 'Facebook', 'Sabaneta, gallo verde, Villa Cafetal C#6', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
