-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2022 a las 19:05:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viaticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `id_pasaje` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `agencia` char(40) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `nombre_empleado` char(50) DEFAULT NULL,
  `CT` varchar(50) DEFAULT NULL,
  `nombre_ct` char(50) DEFAULT NULL,
  `unidad_admi` char(40) DEFAULT NULL,
  `puesto` varchar(30) DEFAULT NULL,
  `origen` char(20) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `destino` char(20) DEFAULT NULL,
  `regreso` char(20) DEFAULT NULL,
  `fecha_regreso` date DEFAULT NULL,
  `comision` varchar(100) DEFAULT NULL,
  `fuente` varchar(40) DEFAULT NULL,
  `proyecto` varchar(50) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL,
  `observaciones` varchar(60) DEFAULT NULL,
  `autoriza` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasaje`
--

INSERT INTO `pasaje` (`id_pasaje`, `fecha`, `agencia`, `RFC`, `nombre_empleado`, `CT`, `nombre_ct`, `unidad_admi`, `puesto`, `origen`, `fecha_salida`, `destino`, `regreso`, `fecha_regreso`, `comision`, `fuente`, `proyecto`, `partida`, `observaciones`, `autoriza`) VALUES
(1, '2022-08-31', 'LUCIA BURQUEZ COTA', 'CUCJ7302155M1', 'CRUZ GARCIA JULIO EXIQUIO', 'DSD2J212', 'JOSE ROMERO', 'BENEMERITA ESCUELA NORMAL URBANA', 'PROGRAMADOR', 'LA PAZ', '2022-10-27', 'ACAPULCO', 'LA PAZ', '2022-11-01', 'DSDSDS', '536-FONE', 'VIATICOS', 51371001, 'SIN OBSERVACIONES', 'SERGIO ALBERTO MELENDREZ BELTRAN'),
(2, '2022-11-09', '2', '1', NULL, '1', NULL, '2', 'dsfgdfg', '2', '2022-11-03', '2', '1', '2022-11-09', 'kjgjk', '2', 'fhfh', 0, 'jfjgh', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaticos`
--

CREATE TABLE `viaticos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `folio_proyecto` int(11) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `nombre_empleado` char(50) DEFAULT NULL,
  `adscripcion` varchar(10) DEFAULT NULL,
  `nombre_adscripcion` varchar(60) DEFAULT NULL,
  `ubicacion` char(20) DEFAULT NULL,
  `puesto` varchar(30) DEFAULT NULL,
  `clave_cobro` varchar(19) DEFAULT NULL,
  `tipo_pago` char(20) DEFAULT NULL,
  `nivel_beneficiario` varchar(10) DEFAULT NULL,
  `transporte` varchar(20) DEFAULT NULL,
  `proyecto` varchar(50) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL,
  `fuente` varchar(40) DEFAULT NULL,
  `rubro` varchar(30) DEFAULT NULL,
  `motivo_comision` varchar(40) DEFAULT NULL,
  `titular_solicitante` varchar(40) DEFAULT NULL,
  `lugar` varchar(40) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `cuota` varchar(20) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaticos`
--

INSERT INTO `viaticos` (`id`, `fecha`, `folio_proyecto`, `RFC`, `nombre_empleado`, `adscripcion`, `nombre_adscripcion`, `ubicacion`, `puesto`, `clave_cobro`, `tipo_pago`, `nivel_beneficiario`, `transporte`, `proyecto`, `partida`, `fuente`, `rubro`, `motivo_comision`, `titular_solicitante`, `lugar`, `fecha_salida`, `fecha_llegada`, `cuota`, `dias`) VALUES
(1, '2022-11-08', 0, '1', NULL, '2', NULL, 'dfgd', 'gdgdf', '1', NULL, 'dgdg', '1', 'dfgdgfdg', 2, '1', 'dfgdfg', 'tfgfg', '1', '1', '2022-11-02', '2022-11-18', '2,011.00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`id_pasaje`);

--
-- Indices de la tabla `viaticos`
--
ALTER TABLE `viaticos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `id_pasaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `viaticos`
--
ALTER TABLE `viaticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
