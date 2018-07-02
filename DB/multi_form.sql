-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2018 a las 01:11:01
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multi_form`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL,
  `nombre_actividad` varchar(255) DEFAULT NULL,
  `dias_disponibles` varchar(255) DEFAULT NULL,
  `horarios_disponibles` text,
  `tipo_actividad` varchar(255) DEFAULT NULL,
  `personas_adultas` varchar(255) DEFAULT NULL,
  `ninos` varchar(255) DEFAULT NULL,
  `hombres` varchar(255) DEFAULT NULL,
  `mujeres` varchar(255) DEFAULT NULL,
  `duracion_dias` varchar(255) DEFAULT NULL,
  `duracion_horas` varchar(255) DEFAULT NULL,
  `duracion_minutos` varchar(255) DEFAULT NULL,
  `disponible_ingles` varchar(255) DEFAULT NULL,
  `forma_pago` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_actividades`
--

CREATE TABLE `descripcion_actividades` (
  `id_descripcion_actividad` int(11) NOT NULL,
  `descripcion_actividad` text,
  `servicios_contratantes` text,
  `acerca_lugar` text,
  `id_empresa` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(255) DEFAULT NULL,
  `giro_empresa` varchar(255) DEFAULT NULL,
  `nombre_contacto` varchar(255) DEFAULT NULL,
  `apellido_contacto` varchar(255) DEFAULT NULL,
  `tel_celular` varchar(255) DEFAULT NULL,
  `tel_oficina` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pagina_web` text,
  `ciudad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(255) DEFAULT NULL,
  `direccion` text,
  `acerca_de` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL,
  `src` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `nombre_imagen` text,
  `id_empresa` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `servicios` varchar(255) DEFAULT NULL,
  `descripcion_servicios` text,
  `descripcion_experiencia` text,
  `quien_apuntarse` text,
  `notas_adicionales` text,
  `politica_cancelacion` text,
  `id_empresa` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `descripcion_actividades`
--
ALTER TABLE `descripcion_actividades`
  ADD PRIMARY KEY (`id_descripcion_actividad`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `descripcion_actividades`
--
ALTER TABLE `descripcion_actividades`
  MODIFY `id_descripcion_actividad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
