-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 12:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eva`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombreCarrera`) VALUES
(1, 'Ing.Sistemas'),
(2, 'Ing.Informatica'),
(3, 'Ing.Civil'),
(4, 'Ing.Electrica');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nombreCurso` varchar(300) NOT NULL,
  `objetivos` text NOT NULL,
  `descripcion` text NOT NULL,
  `codigoCurso` varchar(45) DEFAULT NULL,
  `fechaCreacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `curso_usuario`
--

CREATE TABLE `curso_usuario` (
  `idCurso` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documento`
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
-- Table structure for table `tarea`
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

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `idTema` int(11) NOT NULL,
  `nombreTema` varchar(60) NOT NULL,
  `descripcionTema` text NOT NULL,
  `contenido` text,
  `idCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `lastname`, `tipo`) VALUES
(6, 'Kenny', 'kennydaltonc@yahoo.com', '$2y$10$RotW6m9K3OeBO5AFTPgEb.0aoOFnkPPVSXJvoUfPSG7bJ/oveGvf6', 'BtJN1a79kpwt8ydtfwS3oKS7yV1tqNNJpVtRGvENrX8yo7oWOtrkspZTaOUV', '2018-06-11 04:05:11', '2018-06-16 23:38:40', 'Dalton', 'docente'),
(7, 'Pedro', 'Pereira.Pedro@gmail.com', '$2y$10$jK9P3kjOS6T28rVaw16j3uwvKI8MJntsHXoMtCnQhTPdNEn.MyXci', 'vgHEWDfOPcJAjFLV7waFGjLp6artoPd8zIZY2U3IGUyYKaTAN5Zdy0FJSf28', '2018-06-11 09:48:41', '2018-06-16 23:42:36', 'Pereira', 'estudiante'),
(23, 'qqqqq', 'qqqqq@qq.com', '$2y$10$hZDCw7RxyphqcXArwwMo1e3CylGwF5Ng5yRbJxSVNY0HrggryDoqO', 'HqVtNB44dQWg59XyYv1b7tlM9Q9CWJxz7YC1H9anRMBbkDWWm7azxyDJNWwM', '2018-06-16 07:22:31', '2018-06-16 07:23:56', 'qqqqqq', 'docente'),
(24, 'kkk', 'kkkkk@dsd.com', '$2y$10$j6XfywnGwNo.bSnzrIevBOrLsVC9iCNY4X7pSV8R4KKnpXXuAMfXm', NULL, '2018-06-16 07:24:40', '2018-06-16 07:24:40', 'kkkkk', 'docente');

-- --------------------------------------------------------

--
-- Table structure for table `user_carrera`
--

CREATE TABLE `user_carrera` (
  `id` int(11) NOT NULL,
  `idCarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indexes for table `curso_usuario`
--
ALTER TABLE `curso_usuario`
  ADD KEY `fk_curso_usuario_curso1_idx` (`idCurso`),
  ADD KEY `fk_curso_usuario_users1_idx` (`id`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `fk_documento_tema1_idx` (`idTema`);

--
-- Indexes for table `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`idTarea`),
  ADD KEY `fk_tareas_tema1_idx` (`idTema`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idTema`),
  ADD KEY `fk_tema_curso1_idx` (`idCurso`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_carrera`
--
ALTER TABLE `user_carrera`
  ADD KEY `fk_user_carrera_users1_idx` (`id`),
  ADD KEY `fk_user_carrera_carrera1_idx` (`idCarrera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3318;
--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tarea`
--
ALTER TABLE `tarea`
  MODIFY `idTarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `idTema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `curso_usuario`
--
ALTER TABLE `curso_usuario`
  ADD CONSTRAINT `fk_curso_usuario_curso1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_usuario_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_documento_tema1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`idTema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `fk_tareas_tema1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`idTema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `fk_tema_curso1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_carrera`
--
ALTER TABLE `user_carrera`
  ADD CONSTRAINT `fk_user_carrera_carrera1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_carrera_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
