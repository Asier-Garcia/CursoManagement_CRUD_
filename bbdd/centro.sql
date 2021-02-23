-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2021 a las 20:44:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 123123123, 'Julian ', 'López', 666666666, 'julianlopez@gmail.com', '2021-02-23 11:10:47', '2021-02-23 11:10:47'),
(2, 123121211, 'Asier', 'Garcia', 2147483647, 'asier98garcia@gmail.com', '2021-02-23 12:59:28', '2021-02-23 13:01:12'),
(3, 12311111, 'Sara', 'Contreras', 23423423, 'sara@gma.com', '2021-02-23 20:17:07', '2021-02-23 20:17:07'),
(4, 234234, 'Érika', 'García', 45464564, 'e@e.com', '2021-02-23 20:17:30', '2021-02-23 20:17:30');

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
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(1, 3),
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
(3, 'Muy fácil', 'Informática', 30, '2021-02-27 19:08:26', '2021-03-02 19:08:26');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
