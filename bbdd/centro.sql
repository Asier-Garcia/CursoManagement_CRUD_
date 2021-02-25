-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 13:43:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `dni`, `nombre`, `apellido`, `telefono`, `email`, `created`, `modified`) VALUES
(2, 123121211, 'Asier', 'Garcia', 2147483647, 'asier98garcia@gmail.com', '2021-02-23 12:59:28', '2021-02-23 13:01:12'),
(3, 12311111, 'Sara', 'Contreras', 23423423, 'sara@gma.com', '2021-02-23 20:17:07', '2021-02-23 20:17:07'),
(4, 2342341, 'Érika', 'García', 45464564, 'e@e.com', '2021-02-23 20:17:30', '2021-02-25 10:40:18'),
(5, 12312331, 'Juliana', 'López', 12313412, 'julianlopez@gmail.com', '2021-02-25 10:40:42', '2021-02-25 13:28:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_cursos`
--

CREATE TABLE `alumnos_cursos` (
  `alumno_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos_cursos`
--

INSERT INTO `alumnos_cursos` (`alumno_id`, `curso_id`) VALUES
(2, 1),
(2, 2),
(3, 1),
(3, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `dificultad` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `horas` int(5) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `dificultad`, `descripcion`, `horas`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'fácil', 'Matemáticas', 5, '2021-02-23 18:13:22', '2021-02-28 18:13:22'),
(2, 'difícil', 'Latin', 12, '2021-03-01 18:17:53', '2021-03-24 18:17:53'),
(3, 'Muy fácil', 'Informática', 30, '2021-02-27 19:08:26', '2021-03-02 19:08:26'),
(4, 'se', 'se', 3, '2021-02-25 10:40:00', '2021-02-28 10:40:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modifed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modifed`) VALUES
(1, 'admin', '$2a$10$YeXD4KQqLC8duRRwzrODAOe89WprvgGPQFYo9tL5jeJCuOHIJXYai', 'admin', '2021-02-24 13:03:12', NULL),
(3, 'asier', '$2a$10$X2q20puTCCGD4P37rBnkLe4OvhFnNiFYC6befvw0wTyBbvCdDBMCq', 'admin', '2021-02-25 12:14:11', NULL),
(4, 'as', '$2a$10$5wMfhzh5Vm/dcK6M/EvUC.6MtlG/27Xs/lO40.FnlnZWp9Cp4rqAm', 'admin', '2021-02-25 12:44:41', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
