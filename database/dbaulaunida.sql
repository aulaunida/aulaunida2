-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-09-2024 a las 02:46:53
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbaulaunida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

DROP TABLE IF EXISTS `administrativos`;
CREATE TABLE IF NOT EXISTS `administrativos` (
  `id_administrativo` int NOT NULL AUTO_INCREMENT,
  `persona_id` int NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_administrativo`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_instituciones`
--

DROP TABLE IF EXISTS `configuracion_instituciones`;
CREATE TABLE IF NOT EXISTS `configuracion_instituciones` (
  `id_config_institucion` int NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `celular` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_config_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion_instituciones`
--

INSERT INTO `configuracion_instituciones` (`id_config_institucion`, `nombre_institucion`, `logo`, `direccion`, `telefono`, `celular`, `correo`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'Instituto Arturo Capdevila', '2024-06-03-20-30-17capdevila.png', 'Av. Arturo Capdevila 709', '351-355-7204', '351-355-7205', 'direccion@instituto-capdevila.com.ar', '2024-01-03', '2024-06-03', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int NOT NULL AUTO_INCREMENT,
  `persona_id` int NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_docente`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `persona_id` int NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestiones`
--

DROP TABLE IF EXISTS `gestiones`;
CREATE TABLE IF NOT EXISTS `gestiones` (
  `id_gestion` int NOT NULL AUTO_INCREMENT,
  `gestion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_gestion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `gestiones`
--

INSERT INTO `gestiones` (`id_gestion`, `gestion`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'CICLO LECTIVO 2023', '2023-01-16', '2024-08-25', '0'),
(2, 'CICLO LECTIVO 2024', '2024-01-08', '2024-08-24', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

DROP TABLE IF EXISTS `grados`;
CREATE TABLE IF NOT EXISTS `grados` (
  `id_grado` int NOT NULL AUTO_INCREMENT,
  `nivel_id` int NOT NULL,
  `curso` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `paralelo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_grado`),
  KEY `nivel_id` (`nivel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `nivel_id`, `curso`, `paralelo`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 1, 'PRIMER GRADO', 'A', '2024-08-24', '2024-08-24', '1'),
(2, 2, 'PRIMER GRADO', 'B', '2024-08-25', '2024-08-25', '1'),
(8, 1, 'SEGUNDO GRADO', 'A', '2024-08-25', '2024-08-25', '1'),
(9, 2, 'SEGUNDO GRADO', 'B', '2024-08-25', '2024-08-25', '1'),
(10, 1, 'TERCER GRADO', 'A', '2024-08-25', NULL, '1'),
(11, 2, 'TERCER GRADO', 'B', '2024-08-25', NULL, '1'),
(12, 1, 'CUARTO GRADO', 'A', '2024-08-25', '2024-08-25', '1'),
(13, 2, 'CUARTO GRADO', 'B', '2024-08-25', NULL, '1'),
(14, 1, 'QUINTO GRADO', 'A', '2024-08-25', NULL, '1'),
(15, 2, 'QUINTO GRADO', 'B', '2024-08-25', NULL, '1'),
(16, 1, 'SEXTO GRADO', 'A', '2024-08-25', NULL, '1'),
(17, 2, 'SEXTO GRADO', 'B', '2024-08-25', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'MATEMÁTICA', '2024-08-26', '2024-08-30', '1'),
(2, 'LENGUA Y LITERATURA', '2024-08-26', '2024-08-27', '1'),
(3, 'CIENCIAS SOCIALES', '2024-08-26', NULL, '1'),
(4, 'CIENCIAS NATURALES Y TECNOLOGÍA', '2024-08-26', '2024-08-30', '1'),
(5, 'EDUCACIÓN FÍSICA', '2024-08-26', '2024-08-30', '1'),
(6, 'EDUCACIÓN TECNOLÓGICA', '2024-08-26', '2024-08-30', '1'),
(7, 'EDUCACIÓN ARTÍSTICA', '2024-08-26', '2024-08-30', '1'),
(8, 'CIUDADANÍA Y PARTICIPACIÓN', '2024-08-26', '2024-08-30', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

DROP TABLE IF EXISTS `niveles`;
CREATE TABLE IF NOT EXISTS `niveles` (
  `id_nivel` int NOT NULL AUTO_INCREMENT,
  `gestion_id` int NOT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_nivel`),
  KEY `gestion_id` (`gestion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_nivel`, `gestion_id`, `nivel`, `turno`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 2, 'PRIMARIA', 'MAÑANA', '2024-04-22', '2024-08-25', '1'),
(2, 2, 'PRIMARIA', 'TARDE', '2024-06-03', '2024-08-20', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profesion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `usuario_id`, `nombres`, `apellidos`, `dni`, `fecha_nacimiento`, `profesion`, `direccion`, `celular`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 1, 'Leonardo', 'Rodriguez', '36143425', '1991-10-29', 'Analista de Sistemas', 'Ana Maria Janer 1227', '3512558885', '2024-08-30', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppffs`
--

DROP TABLE IF EXISTS `ppffs`;
CREATE TABLE IF NOT EXISTS `ppffs` (
  `id_ppff` int NOT NULL AUTO_INCREMENT,
  `persona_id` int NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_ppff`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`),
  UNIQUE KEY `nombre_rol` (`nombre_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'ADMINISTRADOR', '2024-01-03', NULL, '1'),
(2, 'DIRECTOR', '2024-01-03', NULL, '1'),
(3, 'DOCENTE', '2024-01-03', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `rol_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fyh_creacion` date DEFAULT NULL,
  `fyh_actualizacion` date DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `rol_id`, `email`, `password`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 1, 'admin@admin.com', '$2y$10$0tYmdHU9uGCIxY1f90W1EuIm54NQ8axowkxL1WzLbqO2LdNa8m3l2', '2024-05-13', NULL, '1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD CONSTRAINT `administrativos_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grados`
--
ALTER TABLE `grados`
  ADD CONSTRAINT `grados_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`id_nivel`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD CONSTRAINT `niveles_ibfk_1` FOREIGN KEY (`gestion_id`) REFERENCES `gestiones` (`id_gestion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ppffs`
--
ALTER TABLE `ppffs`
  ADD CONSTRAINT `ppffs_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
