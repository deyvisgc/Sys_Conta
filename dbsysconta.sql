-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 17:27:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsysconta`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Listar_totales` ()  BEGIN
SELECT IFNULL(sum(p.monto_horasEstrasx25),0.00) as horasx25, 
IFNULL(sum(p.monto_horasEstrasx35),0.00) as horasx35,
IFNULL(sum(p.cts),0.00) as CTS,
IFNULL(sum(p.vacaciones),0.00) as vacaciones,
IFNULL(sum(p.bonificacion),0.00) as bonificacion,
IFNULL(sum(p.bonificacion_extraord),0.00) as bonificacionExtra,
IFNULL(sum(p.bonificacion_extraord),0.00) as renumeracion_bruta,
IFNULL(sum(r.total_renumeracion_bruta),0.00) as renumeracion_bruta,
IFNULL(sum(r.base_calculo),0.00) as base_calculo,
IFNULL(sum(r.aporteObligatorio),0.00) as aporte_obligatorio,
IFNULL(sum(r.comisison_sobre_renumeracion_total),0.00) as comision_sobre,
IFNULL(sum(r.Prima_Seguros_monto),0.00) as prima_seguros,
IFNULL(sum(r.total_DescuentoAFP),0.00) as descuento_AFP,
IFNULL(sum(r.Total_descuentoONP),0.00) as descuento_ONP,
IFNULL(sum(r.Quinta_Categoria),0.00) as quinta_categoria,
IFNULL(sum(r.Renumeracion_neta),0.00) as renumeracion_neta,
IFNULL(sum(r.salud),0.00) as salud,
IFNULL(sum(r.SCTR),0.00) as sctr,
IFNULL(sum(r.otros),0.00) as otros
from planilla as p inner join renumeraciones as r on p.idRenumeracion = r.idRenumeraciones;
END$$

DELIMITER ;

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
  `Renumeraciones_idRenumeraciones` int(11) DEFAULT NULL,
  `asiento_renumeracion` decimal(12,0) DEFAULT NULL,
  `asiento_seguridad_prevencion` decimal(12,0) DEFAULT NULL,
  `Asiento_Regimen` decimal(12,0) DEFAULT NULL,
  `Asiento_Seguro_complementario` decimal(12,0) DEFAULT NULL,
  `Asiento_Instituciones_publicas` decimal(12,0) DEFAULT NULL,
  `Asiento_Essalud` decimal(12,0) DEFAULT NULL,
  `Asiento_Onp` decimal(12,0) DEFAULT NULL,
  `Asiento_otras_situaciones` decimal(12,0) DEFAULT NULL,
  `Asiento_SCTR` decimal(12,0) DEFAULT NULL,
  `Asiento_Renumeraciones_pagar` decimal(12,0) DEFAULT NULL,
  `Asiento_Otras_cuenta` decimal(12,0) DEFAULT NULL,
  `Asiento_AFP` decimal(12,0) DEFAULT NULL,
  `Asiento_atributos_Aporte` decimal(12,0) DEFAULT NULL,
  `Asiento_Remuraciones_Participaciones` decimal(12,0) DEFAULT NULL,
  `Asiento_Cuentas_Pagar` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientocontable`
--

INSERT INTO `asientocontable` (`idAsientoContable`, `numero_de_Asiento`, `Haber`, `Debe`, `Descripcion`, `Renumeraciones_idRenumeraciones`, `asiento_renumeracion`, `asiento_seguridad_prevencion`, `Asiento_Regimen`, `Asiento_Seguro_complementario`, `Asiento_Instituciones_publicas`, `Asiento_Essalud`, `Asiento_Onp`, `Asiento_otras_situaciones`, `Asiento_SCTR`, `Asiento_Renumeraciones_pagar`, `Asiento_Otras_cuenta`, `Asiento_AFP`, `Asiento_atributos_Aporte`, `Asiento_Remuraciones_Participaciones`, `Asiento_Cuentas_Pagar`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '356', '0', '50', '0', '4639', '0', NULL, NULL, '4639', NULL),
(2, NULL, '4639.00', NULL, NULL, NULL, NULL, '0', '0', '0', '0', '356', '0', '50', '0', '4639', '0', NULL, NULL, '4639', NULL),
(3, NULL, '5322.38', NULL, NULL, NULL, NULL, '0', '0', '0', '0', '356', '0', '50', '0', '4639', '0', '277', '406', '4639', '277'),
(4, NULL, '9020.29', NULL, NULL, NULL, NULL, '0', '0', '0', '0', '692', '0', '97', '0', '7692', '0', '539', '789', '7692', '539');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `Razon_Social` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ruc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Periodo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Planilla_idPlanilla` int(11) DEFAULT NULL,
  `Direccion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `telefono_empresa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_empresa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `Razon_Social`, `Ruc`, `Periodo`, `Planilla_idPlanilla`, `Direccion`, `fecha_creacion`, `telefono_empresa`, `correo_empresa`) VALUES
(1, 'GEOTÉCNICA S.A.C.', '20509311022', NULL, NULL, 'Calle Arquímedes N° 140 – Urb. La Campiña, distrito de Chorrillos', '2023-06-25', '123456789', 'geotenica@gmail.com'),
(2, 'patitos.cc', '23657894512', NULL, NULL, 'av.lima', '2023-06-26', '564897', 'gar@');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kennyinciso@hotmail', 'perros', '0000-00-00 00:00:00'),
('kennyinciso@hotmail', 'perros', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre_personas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos_Per` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dni` int(11) DEFAULT NULL,
  `Care_extranjeria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_Nacimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Numero_cuenta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trabajador_idTrabajador` int(11) DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre_personas`, `apellidos_Per`, `Dni`, `Care_extranjeria`, `Telefono`, `Direccion`, `Fecha_Nacimiento`, `Numero_cuenta`, `Trabajador_idTrabajador`, `correo`) VALUES
(5, 'deyvis', 'garcia ', 48762727, '277272', 732377373, 'ddhdhdhhd', '388383', 'hshshssh', NULL, ''),
(7, 'Jose Luis', 'Garcia Cardenas', 48762821, '12345', 123456789, 'av.lima', '2006-05-01', '123456', 5, 'pulpin@gmail.com'),
(8, 'Keny', 'sasda', 12312451, '123124123', 123214123, 'dsdfsdgs', '2023-06-26', '123145', 6, 'dsfsdfdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `idPlanilla` int(11) NOT NULL,
  `Fecha_Ingreso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocupacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Asignacion_familiar` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sueldo_Basico` decimal(12,0) DEFAULT NULL,
  `Trabajador_idTrabajador` int(11) NOT NULL,
  `idRenumeracion` int(11) NOT NULL,
  `CUSPP` int(11) NOT NULL,
  `monto_horasEstrasx25` decimal(12,0) NOT NULL,
  `monto_horasEstrasx35` decimal(12,0) NOT NULL,
  `dias_laborales` int(11) NOT NULL,
  `total_horas_trabajadas` int(11) NOT NULL,
  `dias_faltantes` int(11) NOT NULL,
  `cts` decimal(12,0) NOT NULL,
  `vacaciones` decimal(12,0) NOT NULL,
  `bonificacion` decimal(12,0) NOT NULL,
  `bonificacion_extraord` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`idPlanilla`, `Fecha_Ingreso`, `Ocupacion`, `Asignacion_familiar`, `Sueldo_Basico`, `Trabajador_idTrabajador`, `idRenumeracion`, `CUSPP`, `monto_horasEstrasx25`, `monto_horasEstrasx35`, `dias_laborales`, `total_horas_trabajadas`, `dias_faltantes`, `cts`, `vacaciones`, `bonificacion`, `bonificacion_extraord`) VALUES
(1, '2023-06-26 18:47:10', 'Ingenierio', '93', '1500', 5, 8, 1, '17', '9', 29, 232, 2, '465', '398', '797', '72'),
(2, '2023-06-26 19:05:20', 'ambiental', '93', '1800', 6, 9, 12345, '10', '32', 29, 232, 2, '184', '158', '316', '28'),
(3, '2023-07-01 21:02:48', 'ing sistemas', '93', '2500', 6, 10, 123456, '14', '44', 26, 208, 5, '1765', '1513', '3025', '272');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renumeraciones`
--

CREATE TABLE `renumeraciones` (
  `idRenumeraciones` int(11) NOT NULL,
  `Asignacion_famailiar` decimal(12,0) DEFAULT NULL,
  `Movilidad` decimal(12,0) DEFAULT NULL,
  `Alimentacion` decimal(12,0) DEFAULT NULL,
  `Horas_Extras` int(11) DEFAULT NULL,
  `total_renumeracion_bruta` decimal(12,0) DEFAULT NULL,
  `total_ONP` decimal(12,0) DEFAULT NULL,
  `Total_AFP` decimal(12,0) DEFAULT NULL,
  `aporteObligatorio` decimal(12,0) DEFAULT NULL,
  `Comision_R_A` decimal(12,0) DEFAULT NULL,
  `Total_descuento` decimal(12,0) DEFAULT NULL,
  `Renumeracion_neta` decimal(12,0) NOT NULL,
  `Salud` decimal(12,5) DEFAULT NULL,
  `Total_Aportes` decimal(12,0) DEFAULT NULL,
  `S_D` decimal(12,0) DEFAULT NULL,
  `Quinta_Categoria` decimal(12,0) DEFAULT NULL,
  `Planilla_idPlanilla` int(11) DEFAULT NULL COMMENT 'esto no sirve',
  `Renumeracion_otros` decimal(12,0) DEFAULT NULL,
  `Prima_Seguros` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Horas_Extras_25` int(11) NOT NULL,
  `Horas_Extras_35` int(11) NOT NULL,
  `Total_descuentoONP` decimal(12,0) NOT NULL,
  `total_DescuentoAFP` decimal(12,0) NOT NULL,
  `base_calculo` decimal(12,0) NOT NULL,
  `Prima_Seguros_monto` decimal(12,0) NOT NULL,
  `aporte_obligatorio_monto` decimal(12,0) NOT NULL,
  `comisison_sobre_renumeracion_total` decimal(12,0) NOT NULL,
  `otros` decimal(12,0) NOT NULL,
  `SCTR` decimal(12,0) NOT NULL,
  `descuento_inasistencia` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `renumeraciones`
--

INSERT INTO `renumeraciones` (`idRenumeraciones`, `Asignacion_famailiar`, `Movilidad`, `Alimentacion`, `Horas_Extras`, `total_renumeracion_bruta`, `total_ONP`, `Total_AFP`, `aporteObligatorio`, `Comision_R_A`, `Total_descuento`, `Renumeracion_neta`, `Salud`, `Total_Aportes`, `S_D`, `Quinta_Categoria`, `Planilla_idPlanilla`, `Renumeracion_otros`, `Prima_Seguros`, `Horas_Extras_25`, `Horas_Extras_35`, `Total_descuentoONP`, `total_DescuentoAFP`, `base_calculo`, `Prima_Seguros_monto`, `aporte_obligatorio_monto`, `comisison_sobre_renumeracion_total`, `otros`, `SCTR`, `descuento_inasistencia`) VALUES
(8, NULL, '0', '0', NULL, '3324', NULL, NULL, NULL, NULL, NULL, '2986', '179.21000', NULL, '10', '0', NULL, '0', NULL, 17, 9, '0', '339', '1991', '100', '199', '40', '0', '25', '103'),
(9, NULL, '0', '0', NULL, '1969', NULL, NULL, NULL, NULL, NULL, '1653', '177.17000', NULL, '10', '-19', NULL, '0', NULL, 10, 32, '0', '335', '1969', '98', '197', '39', '0', '25', '124'),
(10, NULL, '0', '0', NULL, '3732', NULL, NULL, NULL, NULL, NULL, '3053', '335.91000', NULL, '10', '45', NULL, '0', NULL, 14, 44, '0', '634', '3732', '187', '373', '75', '0', '47', '431');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombre`, `Estado`) VALUES
(1, 'Usuario', 'Activo'),
(2, 'Administrador', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `idseguros` int(11) NOT NULL,
  `nombre_Seguro` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tipo_seguro_idTipo_seguro` int(11) NOT NULL,
  `aporte_obligatorio` int(11) NOT NULL,
  `comision_renumeracion` int(11) NOT NULL,
  `Prima_Seguro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`idseguros`, `nombre_Seguro`, `Tipo_seguro_idTipo_seguro`, `aporte_obligatorio`, `comision_renumeracion`, `Prima_Seguro`) VALUES
(2, 'HABITAT', 1, 10, 2, 5);

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
(1, 'AFP'),
(2, 'ONP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idTrabajador` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguros_idseguros` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `Estado_trabajador` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Periodo_trabajo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_hijos` int(11) NOT NULL,
  `fecha_Ingreso` date NOT NULL,
  `fecha_Salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idTrabajador`, `estado`, `seguros_idseguros`, `idEmpresa`, `Estado_trabajador`, `Periodo_trabajo`, `tra_hijos`, `fecha_Ingreso`, `fecha_Salida`) VALUES
(5, NULL, 2, 1, 'Contratado', 'Mensual', 2, '2023-05-01', '2023-07-31'),
(6, NULL, 2, 1, 'Contratado', 'QUINCENAL', 5, '2023-06-01', '2023-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'kenny', 'kennny@hotm', '0000-00-00 00:00:00', '12345', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `Persona_idPersona` int(11) NOT NULL,
  `user_estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `usuario`, `password`, `foto`, `remember_token`, `Rol_idRol`, `Persona_idPersona`, `user_estado`) VALUES
(6, '48762828', '$2y$10$xKSDJQOyapCKDx32QGN2FOSYkR0l6iHlfpIiKd/wC3Xq4y4MrIUtK', '', 'wik7qgFtHWxNdzBDUpcmsM8qcQyhhxpngoCe64ixbUATjkEIOx0eT81pxOCl', 1, 5, ''),
(7, 'kenny', '12345', '11', '1234', 1, 8, '2');

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
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD KEY `idRenumeracion` (`idRenumeracion`);

--
-- Indices de la tabla `renumeraciones`
--
ALTER TABLE `renumeraciones`
  ADD PRIMARY KEY (`idRenumeraciones`,`Renumeracion_neta`);

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
  ADD KEY `fk_Trabajador_seguros1_idx` (`seguros_idseguros`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `idAsientoContable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `idPlanilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `renumeraciones`
--
ALTER TABLE `renumeraciones`
  MODIFY `idRenumeraciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `idTrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asientocontable`
--
ALTER TABLE `asientocontable`
  ADD CONSTRAINT `fk_AsientoContable_Renumeraciones1` FOREIGN KEY (`Renumeraciones_idRenumeraciones`) REFERENCES `renumeraciones` (`idRenumeraciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_Persona_Trabajador1` FOREIGN KEY (`Trabajador_idTrabajador`) REFERENCES `trabajador` (`idTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
