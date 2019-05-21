-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2019 a las 18:19:45
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisten_conta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientocontable`
--

CREATE TABLE `asientocontable` (
  `idAsientoContable` int(11) NOT NULL,
  `numero_de_Asiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Haber` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Debe` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Renumeraciones_idRenumeraciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `Razon_Social` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ruc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Periodo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Planilla_idPlanilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `  nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dni` int(11) DEFAULT NULL,
  `Care_extranjeria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_Nacimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Numero_cuenta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trabajador_idTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `  nombre`, `apellidos`, `Dni`, `Care_extranjeria`, `Telefono`, `Direccion`, `Fecha_Nacimiento`, `Numero_cuenta`, `Trabajador_idTrabajador`) VALUES
(2, 'deyvis', 'garcia ', 48762727, '277272', 732377373, 'ddhdhdhhd', '388383', 'hshshssh', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `idPlanilla` int(11) NOT NULL,
  `Fecha_Ingreso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocupacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Asignacion_familiar` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sueldo_Basico` int(11) DEFAULT NULL,
  `Trabajador_idTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renumeraciones`
--

CREATE TABLE `renumeraciones` (
  `idRenumeraciones` int(11) NOT NULL,
  `Asignacion_famailiar` double DEFAULT NULL,
  `Movilidad` double DEFAULT NULL,
  `Alimentacion` double DEFAULT NULL,
  `Horas_Extras` int(11) DEFAULT NULL,
  `total_renumeracion_bruta` double DEFAULT NULL,
  `total_ONP` double DEFAULT NULL,
  `Total_AFP` double DEFAULT NULL,
  `Aporte_Obligatorio` double DEFAULT NULL,
  `Comision_R_A` double DEFAULT NULL,
  `Total_descuento` double DEFAULT NULL,
  `Renumeracion_neta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Salud` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_Aportes` double DEFAULT NULL,
  `S_D` double DEFAULT NULL,
  `Quinta_Categoria` double DEFAULT NULL,
  `Planilla_idPlanilla` int(11) NOT NULL,
  `Renumeracion_otros` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prima_Seguros` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  ` nombre_rol` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, ` nombre_rol`, `Estado`) VALUES
(1, 'Usuario', 'Activo'),
(2, 'Administrador', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `idseguros` int(11) NOT NULL,
  `nombre_Seguro` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tipo_seguro_idTipo_seguro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`idseguros`, `nombre_Seguro`, `Tipo_seguro_idTipo_seguro`) VALUES
(2, 'xsdsd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_seguro`
--

CREATE TABLE `tipo_seguro` (
  `idTipo_seguro` int(11) NOT NULL,
  `nombre_tipo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_seguro`
--

INSERT INTO `tipo_seguro` (`idTipo_seguro`, `nombre_tipo`) VALUES
(1, 'sassasa'),
(2, 'sasasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idTrabajador` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguros_idseguros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idTrabajador`, `estado`, `seguros_idseguros`) VALUES
(1, 'Activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rol_idRol` int(11) NOT NULL,
  `Persona_idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `usuario`, `password`, `foto`, `remember_token`, `Rol_idRol`, `Persona_idPersona`) VALUES
(2, '48762828', '$2y$10$xKSDJQOyapCKDx32QGN2FOSYkR0l6iHlfpIiKd/wC3Xq4y4MrIUtK', NULL, 'wik7qgFtHWxNdzBDUpcmsM8qcQyhhxpngoCe64ixbUATjkEIOx0eT81pxOCl', 1, 1),
(3, '48762828', '$2y$10$e/xdQow/pp2IT1OGW691RuW5ZH5FZhGfPbCkLK0zvg/9jBXwS2z5y', NULL, NULL, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientocontable`
--
ALTER TABLE `asientocontable`
  ADD PRIMARY KEY (`idAsientoContable`),
  ADD KEY `fk_AsientoContable_Renumeraciones1_idx` (`Renumeraciones_idRenumeraciones`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`),
  ADD KEY `fk_Empresa_Planilla1_idx` (`Planilla_idPlanilla`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `fk_Persona_Trabajador1_idx` (`Trabajador_idTrabajador`);

--
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD PRIMARY KEY (`idPlanilla`),
  ADD KEY `fk_Planilla_Trabajador1_idx` (`Trabajador_idTrabajador`);

--
-- Indices de la tabla `renumeraciones`
--
ALTER TABLE `renumeraciones`
  ADD PRIMARY KEY (`idRenumeraciones`),
  ADD KEY `fk_Renumeraciones_Planilla1_idx` (`Planilla_idPlanilla`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`idseguros`),
  ADD KEY `fk_seguros_Tipo_seguro1_idx` (`Tipo_seguro_idTipo_seguro`);

--
-- Indices de la tabla `tipo_seguro`
--
ALTER TABLE `tipo_seguro`
  ADD PRIMARY KEY (`idTipo_seguro`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`idTrabajador`),
  ADD KEY `fk_Trabajador_seguros1_idx` (`seguros_idseguros`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_Usuarios_Rol_idx` (`Rol_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientocontable`
--
ALTER TABLE `asientocontable`
  MODIFY `idAsientoContable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `idPlanilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `renumeraciones`
--
ALTER TABLE `renumeraciones`
  MODIFY `idRenumeraciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seguros`
--
ALTER TABLE `seguros`
  MODIFY `idseguros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_seguro`
--
ALTER TABLE `tipo_seguro`
  MODIFY `idTipo_seguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `idTrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asientocontable`
--
ALTER TABLE `asientocontable`
  ADD CONSTRAINT `fk_AsientoContable_Renumeraciones1` FOREIGN KEY (`Renumeraciones_idRenumeraciones`) REFERENCES `renumeraciones` (`idRenumeraciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_Empresa_Planilla1` FOREIGN KEY (`Planilla_idPlanilla`) REFERENCES `planilla` (`idPlanilla`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_Persona_Trabajador1` FOREIGN KEY (`Trabajador_idTrabajador`) REFERENCES `trabajador` (`idTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD CONSTRAINT `fk_Planilla_Trabajador1` FOREIGN KEY (`Trabajador_idTrabajador`) REFERENCES `trabajador` (`idTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `renumeraciones`
--
ALTER TABLE `renumeraciones`
  ADD CONSTRAINT `fk_Renumeraciones_Planilla1` FOREIGN KEY (`Planilla_idPlanilla`) REFERENCES `planilla` (`idPlanilla`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD CONSTRAINT `fk_seguros_Tipo_seguro1` FOREIGN KEY (`Tipo_seguro_idTipo_seguro`) REFERENCES `tipo_seguro` (`idTipo_seguro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `fk_Trabajador_seguros1` FOREIGN KEY (`seguros_idseguros`) REFERENCES `seguros` (`idseguros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Rol` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usario_persona` FOREIGN KEY (`Persona_idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
