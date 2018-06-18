-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2018 a las 23:26:33
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombreCarrera`) VALUES
(1, 'Ing.Sistemas'),
(2, 'Ing.Informatica'),
(3, 'Ing.Civil'),
(4, 'Ing.Electrica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nombreCurso` varchar(300) NOT NULL,
  `objetivos` text NOT NULL,
  `descripcion` text NOT NULL,
  `codigoCurso` varchar(45) DEFAULT NULL,
  `fechaCreacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombreCurso`, `objetivos`, `descripcion`, `codigoCurso`, `fechaCreacion`) VALUES
(1, 'MAESTRIA EN INGENIERIA AMBIENTAL ', 'Las crecientes demandas sobre los recursos naturales acompañadas, en general, del deterioro en su calidad pueden, en algunos ca\r\nsos, \r\nsuperar la capacidad de recuperación natural, por lo que se requerirá adoptar cuidadosas medidas de manejo, conservación y miti\r\ngación \r\nque necesitarán de la aplicación de conocimientos más profundos sobre la ingeniería ambiental.  \r\nSiendo  el  objetivo  de  la  propuesta  el  desarrollar,  complement\r\nar  y/o  generar  capacidades  con  elevado  grado  de  especialidad  de  \r\nconocimientos, teóricos y prácticos, de variadas disciplinas qu\r\ne permitan enfrentar los desafíos que representa, para nuestro p\r\naís, el \r\ncrecimiento económico y la protección del ambiente. ', 'MAGISTER EN INGENIERIA AMBIENTAL', '123456', '2018-06-18'),
(2, 'MAESTRÍA EN GEOTECNIA ', 'Capacitar profesionales en el Área de Ingeniería Geotecnia, de\r\n manera que tengan los conocimientos necesarios para realizar \r\nproyectos geotécnicos como una aplicación de la  Mecánica de Suel\r\nos y la Mecánica de Rocas. Además de contribuir con el desarrollo técnico-científico en el áre', 'Se otorgará el grado de Especialista a los participantes que cumplan con los requisitos para ésta modalidad de graduación y  Magister en Geotecnia para los participantes que cumplan con el plan completo de estudios y defiendan la tesis de Maestría. ', '123456', '2018-06-18'),
(3, 'DIPLOMADO EN INGENIERÍA VIAL', 'Formar profesionales altamente capacitados en áreas específicas de la Ingeniería Vial, con una visión conceptual clara y  un grado de  conocimiento, tales que, permitan resolver problemas específicos con criterio práctico\r\ny adecuado a los requerimientos del medio', 'Diplomado en Ingeniería Vial ', '123456', '2018-06-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_usuario`
--

CREATE TABLE `curso_usuario` (
  `idCurso` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_usuario`
--

INSERT INTO `curso_usuario` (`idCurso`, `id`) VALUES
(1, 25),
(2, 25),
(3, 25),
(2, 26),
(1, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `idDoc` int(11) NOT NULL,
  `nombreDoc` varchar(75) NOT NULL,
  `descripcionDoc` text,
  `archivo` text,
  `idTema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `idTarea` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `descripcion` text,
  `idTema` int(11) NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `documento` text,
  `estadoEntrega` enum('No entregada','Entregada') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`idTarea`, `fechaInicio`, `fechaFin`, `descripcion`, `idTema`, `fechaEntrega`, `documento`, `estadoEntrega`) VALUES
(3, '2018-06-18', '2018-06-21', 'Tarea 1', 1, NULL, NULL, NULL),
(4, '2018-06-18', '2018-06-26', 'Tarea 2', 1, NULL, NULL, NULL),
(5, '2018-06-18', '2018-06-28', 'Tarea 3', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idTema` int(11) NOT NULL,
  `nombreTema` varchar(60) NOT NULL,
  `descripcionTema` text NOT NULL,
  `contenido` text,
  `idCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idTema`, `nombreTema`, `descripcionTema`, `contenido`, `idCurso`) VALUES
(1, 'PRIMER MODULO', '-', 'MECÁNICA DE SUELOS CLÁSICA,                                                                                     MECÁNICA DE SUELOS MODERNA,                                                                                       MECÁNICA DE ROCAS,                                                                                              MECÁNICA  DEL MEDIO CONTINUO,                                                                                             GEOLOGÍA APLICADA,                                                                                             GEOTECNIA EXPERIMENTAL,                                                                                             ESTABILIDAD DE TALUDES Y ESTRUCTURAS DE ESTABILIDAD,                                                                                             HIDROLOGÍA Y AGUA SUBTERRÁNEA,                                                                                             PAVIMENTOS. ', 2),
(2, 'SEGUNDO MODULO', '-', 'FUNDACIONES,\r\nMECÁNICA DE SUELOS PARCIALMENTE, SATURADOS,\r\nGEOTECNIA AMBIENTAL,\r\nREPRESAS,                                                                                              TÚNELES,', 2),
(3, 'TERCER MODULO', '-', 'TALLER DE TESIS DE MAESTRÍA', 2),
(4, 'MODULO I', '-', 'DETERMINACION DE MODELOS DIGITALES DEL \r\nTERRENO (DTM) Y DE E\r\nLEVACION (DEM) \r\nMEDIANTE DRONES Y SU\r\nAPLICACION EN \r\nDISEÑO Y SUPERVISION\r\nDE OBRAS CIVILES', 3),
(5, 'MODULO II', '-', 'DISEÑO GEOMETRICO \r\nCOMPUTARIZADO DE \r\nCARRETERAS\r\n                                                                                              ', 3),
(6, 'MODULO III', '-', 'MATERIALES PARA CONSTRUCCION DE  PAVIMENTOS', 3),
(7, 'MODULO IV', '-', 'COSTOS Y PRESUPUESTOS DE CONSTRUCCION DE CARRETERAS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `tipo` enum('estudiante','docente') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `lastname`, `tipo`) VALUES
(6, 'Kenny', 'kennydaltonc@yahoo.com', '$2y$10$RotW6m9K3OeBO5AFTPgEb.0aoOFnkPPVSXJvoUfPSG7bJ/oveGvf6', 'BtJN1a79kpwt8ydtfwS3oKS7yV1tqNNJpVtRGvENrX8yo7oWOtrkspZTaOUV', '2018-06-11 04:05:11', '2018-06-16 23:38:40', 'Dalton', 'docente'),
(7, 'Pedro', 'Pereira.Pedro@gmail.com', '$2y$10$jK9P3kjOS6T28rVaw16j3uwvKI8MJntsHXoMtCnQhTPdNEn.MyXci', 'vgHEWDfOPcJAjFLV7waFGjLp6artoPd8zIZY2U3IGUyYKaTAN5Zdy0FJSf28', '2018-06-11 09:48:41', '2018-06-16 23:42:36', 'Pereira', 'estudiante'),
(23, 'qqqqq', 'qqqqq@qq.com', '$2y$10$hZDCw7RxyphqcXArwwMo1e3CylGwF5Ng5yRbJxSVNY0HrggryDoqO', 'HqVtNB44dQWg59XyYv1b7tlM9Q9CWJxz7YC1H9anRMBbkDWWm7azxyDJNWwM', '2018-06-16 07:22:31', '2018-06-16 07:23:56', 'qqqqqq', 'docente'),
(24, 'kkk', 'kkkkk@dsd.com', '$2y$10$j6XfywnGwNo.bSnzrIevBOrLsVC9iCNY4X7pSV8R4KKnpXXuAMfXm', NULL, '2018-06-16 07:24:40', '2018-06-16 07:24:40', 'kkkkk', 'docente'),
(25, 'Ronaldo', 'ronaldbautista666@gmail.com', '$2y$10$37SSL6Xzo/zEPF9I.xZ5vOzr5p.4WTPmz0HWU052I1Viga/7cS5tq', '55BJc2OQeV5dBLq8HQM7aQ2wPQyocvYw81rD8NW54K1FXU8FgtSIPeWvibnM', '2018-06-18 18:58:26', '2018-06-19 00:48:56', 'Quispe Condori', 'docente'),
(26, 'Ronal', 'rbqc123@gmail.com', '$2y$10$0P3GP/oBEFheC/TWdjJpI.9WawasGIV0uhbguxgi3vLIx/JubHRsG', 'lbzDY5MTLV0IWWdYUWR1AIBRwGgnwnmugzeNoqrAZuE5pw3L0KitqWx6jW3H', '2018-06-18 23:34:59', '2018-06-19 01:07:02', 'Quispe', 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_carrera`
--

CREATE TABLE `user_carrera` (
  `id` int(11) NOT NULL,
  `idCarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `curso_usuario`
--
ALTER TABLE `curso_usuario`
  ADD KEY `fk_curso_usuario_curso1_idx` (`idCurso`),
  ADD KEY `fk_curso_usuario_users1_idx` (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `fk_documento_tema1_idx` (`idTema`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`idTarea`),
  ADD KEY `fk_tareas_tema1_idx` (`idTema`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idTema`),
  ADD KEY `fk_tema_curso1_idx` (`idCurso`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_carrera`
--
ALTER TABLE `user_carrera`
  ADD KEY `fk_user_carrera_users1_idx` (`id`),
  ADD KEY `fk_user_carrera_carrera1_idx` (`idCarrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `idTarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idTema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso_usuario`
--
ALTER TABLE `curso_usuario`
  ADD CONSTRAINT `fk_curso_usuario_curso1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_usuario_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_documento_tema1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`idTema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `fk_tareas_tema1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`idTema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `fk_tema_curso1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user_carrera`
--
ALTER TABLE `user_carrera`
  ADD CONSTRAINT `fk_user_carrera_carrera1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_carrera_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
