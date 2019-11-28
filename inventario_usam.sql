-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 23:36:02
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
-- Base de datos: `inventario_usam`
--
CREATE DATABASE IF NOT EXISTS `inventario_usam` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `inventario_usam`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `area` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `area`) VALUES
(1, 'CDS1'),
(2, 'CDS2'),
(3, 'CDS3'),
(4, 'Biblioteca'),
(5, 'Oficionas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `id_inmobiliario` int(11) NOT NULL,
  `id_enc` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_asig` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Inmuebles'),
(2, 'Monitores'),
(3, 'Teclados'),
(4, 'Mause'),
(5, 'UPS'),
(6, 'CPU'),
(7, 'Webcam');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id_enc` int(11) NOT NULL,
  `dui_enc` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_enc`, `dui_enc`, `nombres`, `apellidos`, `correo`, `telefono`, `direccion`, `id_sexo`, `id_area`) VALUES
(3, '34343434-3', 'Mauricio', 'Martinez', 'mauri@gmail.com', '2379-6545', 'San Salvador', 1, 2),
(7, '71456156-4', 'Maria', 'Moran', 'mary@gmail.com', '7564-8714', 'San Salvador', 2, 4),
(8, '79302121-5', 'Pablo', 'Escobar', 'pablito@gmail.com', '7612-3961', 'San Marcos', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_danado`
--

CREATE TABLE `equipo_danado` (
  `id_danado` int(11) NOT NULL,
  `id_inmobiliario` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo_danado`
--

INSERT INTO `equipo_danado` (`id_danado`, `id_inmobiliario`, `fecha_ingreso`, `descripcion`, `id_estado`) VALUES
(4, 8, '2019-11-12', 'hola mundo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_mant`
--

CREATE TABLE `equipo_mant` (
  `id_mant` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_inmobiliario` int(11) NOT NULL,
  `f_recibido` date NOT NULL,
  `f_salida` date NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Disponible'),
(2, 'Asignado'),
(3, 'Mantenimiento'),
(4, 'Dañado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmobiliario`
--

CREATE TABLE `inmobiliario` (
  `id_inmobiliario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmobiliario`
--

INSERT INTO `inmobiliario` (`id_inmobiliario`, `id_categoria`, `id_modelo`, `codigo`, `id_estado`, `fecha_ingreso`, `descripcion`) VALUES
(8, 2, 8, 'lm002', 1, '2019-11-21', 'monitor lenovo de 21 plg oled'),
(9, 2, 7, 'lm003', 1, '2019-11-21', 'monitor lenovo de 17 plg full hd'),
(10, 6, 16, '445vx', 1, '2019-11-11', 'CPUS ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(3, 'lenovo'),
(6, 'HP'),
(7, 'Intel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `modelo`, `id_marca`) VALUES
(7, 'le520s', 3),
(8, 'le251s', 3),
(16, '55555', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `direccion`, `telefono`, `dui`, `correo`, `usuario`, `clave`, `id_rol`, `id_sexo`) VALUES
(2, 'Erika', 'Galdamez', 'Apopa', '2375-7865', '65659232-8', 'erika@gmail.com', 'erika', '202cb962ac59075b964b07152d234b70', 1, 2),
(3, 'Rudy', 'Montes', 'Mejicanos', '7856-1636', '78923696-8', 'rudy@gmail.com', 'rudy', '202cb962ac59075b964b07152d234b70', 2, 1),
(4, 'Paola', 'Martinez', 'San Salvador', '4454-5465', '87746655-7', 'pao@gmail.com', 'pao', '202cb962ac59075b964b07152d234b70', 1, 2),
(5, 'Harry', 'Perez', 'Soyapango', '7230-2544', '57871575-5', 'harry@gmail.com', 'harry', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `inmobiliario_asignacion` (`id_inmobiliario`),
  ADD KEY `estado_asig` (`id_estado`),
  ADD KEY `encar_asig` (`id_enc`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id_enc`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `dui_enc` (`dui_enc`),
  ADD KEY `area_encargado` (`id_area`),
  ADD KEY `sexo_encargado` (`id_sexo`);

--
-- Indices de la tabla `equipo_danado`
--
ALTER TABLE `equipo_danado`
  ADD PRIMARY KEY (`id_danado`),
  ADD KEY `inmobiliario_danado` (`id_inmobiliario`),
  ADD KEY `estado_danado` (`id_estado`);

--
-- Indices de la tabla `equipo_mant`
--
ALTER TABLE `equipo_mant`
  ADD PRIMARY KEY (`id_mant`),
  ADD KEY `inmobiriario_mant` (`id_inmobiliario`),
  ADD KEY `usuario_mant` (`id_usuario`),
  ADD KEY `estado_mant` (`id_estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `inmobiliario`
--
ALTER TABLE `inmobiliario`
  ADD PRIMARY KEY (`id_inmobiliario`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `categoria_inmobiliario` (`id_categoria`),
  ADD KEY `marca_inmobiliario` (`id_modelo`),
  ADD KEY `codigo_inmobiliario` (`codigo`),
  ADD KEY `estado_inmobiliario` (`id_estado`),
  ADD KEY `id_inmobiliario` (`id_inmobiliario`,`id_modelo`,`id_categoria`,`codigo`,`id_estado`,`fecha_ingreso`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `id_modelo` (`id_modelo`,`modelo`,`id_marca`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD KEY `rol_usuario` (`id_rol`),
  ADD KEY `sexo_usuario` (`id_sexo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `id_enc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `equipo_danado`
--
ALTER TABLE `equipo_danado`
  MODIFY `id_danado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `equipo_mant`
--
ALTER TABLE `equipo_mant`
  MODIFY `id_mant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inmobiliario`
--
ALTER TABLE `inmobiliario`
  MODIFY `id_inmobiliario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`id_enc`) REFERENCES `encargado` (`id_enc`),
  ADD CONSTRAINT `estado_asig` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `inmobiliario_asignacion` FOREIGN KEY (`id_inmobiliario`) REFERENCES `inmobiliario` (`id_inmobiliario`);

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `area_encargado` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `sexo_encargado` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`);

--
-- Filtros para la tabla `equipo_danado`
--
ALTER TABLE `equipo_danado`
  ADD CONSTRAINT `estado_danado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `inmobiliario_danado` FOREIGN KEY (`id_inmobiliario`) REFERENCES `inmobiliario` (`id_inmobiliario`);

--
-- Filtros para la tabla `equipo_mant`
--
ALTER TABLE `equipo_mant`
  ADD CONSTRAINT `estado_mant` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `inmobiriario_mant` FOREIGN KEY (`id_inmobiliario`) REFERENCES `inmobiliario` (`id_inmobiliario`),
  ADD CONSTRAINT `usuario_mant` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `inmobiliario`
--
ALTER TABLE `inmobiliario`
  ADD CONSTRAINT `categoria_inmobiliario` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `estado_inmobiliario` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `inmobiliario_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `sexo_usuario` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
