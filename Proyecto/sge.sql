-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 07:37:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque_dos`
--

CREATE TABLE `bloque_dos` (
  `id_mat` int(2) NOT NULL,
  `bloque` int(1) NOT NULL,
  `tema` varchar(15) NOT NULL,
  `subtema` varchar(30) NOT NULL,
  `tipo_material` varchar(30) NOT NULL,
  `nombre_material` varchar(30) NOT NULL,
  `actividad` varchar(30) NOT NULL,
  `evaluacion` int(2) NOT NULL,
  `observaciones` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bloque_dos`
--

INSERT INTO `bloque_dos` (`id_mat`, `bloque`, `tema`, `subtema`, `tipo_material`, `nombre_material`, `actividad`, `evaluacion`, `observaciones`) VALUES
(1, 2, 'La centena', 'Rincón de las matemáticas', 'Actividad en línea', 'f2_rinconmate.php', '2.1 Primer formulario', 10, 'Todo bien respondido'),
(2, 2, 'La cecena', 'Semillas y vasos', 'Actividad en línea', 'f2_semllasyvasos.php', '2.2 Segundo formulario', 7, '1 preguntas con contestar aún');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque_uno`
--

CREATE TABLE `bloque_uno` (
  `id_mat` int(2) NOT NULL,
  `bloque` int(1) NOT NULL,
  `tema` varchar(15) NOT NULL,
  `subtema` varchar(30) NOT NULL,
  `tipo_material` varchar(30) NOT NULL,
  `nombre_material` varchar(30) NOT NULL,
  `actividad` varchar(30) NOT NULL,
  `evaluacion` int(2) NOT NULL,
  `observaciones` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bloque_uno`
--

INSERT INTO `bloque_uno` (`id_mat`, `bloque`, `tema`, `subtema`, `tipo_material`, `nombre_material`, `actividad`, `evaluacion`, `observaciones`) VALUES
(1, 1, 'La decena', 'Rincón de las matemáticas', 'Actividad en línea', 'f1_rinconmate.php', '1.1 Primer formulario', 10, 'Todo bien respondido'),
(2, 1, 'La decena', 'Semillas y vasos', 'Actividad en línea', 'f2_semllasyvasos.php', '1.2 Segundo formulario', 5, '2 preguntas con contestar aún');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(2) NOT NULL,
  `fecha_cita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `fecha_cita`) VALUES
(1, '2022-01-13'),
(2, '2022-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `num_contacto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `asunto` text NOT NULL,
  `tipo_usuario` varchar(22) NOT NULL,
  `descripcion_asunto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`num_contacto`, `nombre`, `correo`, `asunto`, `tipo_usuario`, `descripcion_asunto`) VALUES
(4, 'Edwin David Guzmán Nieto', 'edwiingzmn@gmail.com', 'Información sobre cómo ingresar al sistema.', 'Usuario no registrado', 'Pedir más información.'),
(5, 'Edwin David Guzmán Nieto', 'mail@mail.com', 'Más información sobre el sistema.', 'Usuario no registrado', 'Quiero saber más información.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `tipo_usuario` varchar(25) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `contrasena` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `tipo_usuario`, `correo`, `contrasena`) VALUES
(1, 'Edwin David Guzmán Nieto', 'edwin9709', 'Alumno', 'mail@mail.com', '00000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bloque_dos`
--
ALTER TABLE `bloque_dos`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indices de la tabla `bloque_uno`
--
ALTER TABLE `bloque_uno`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`num_contacto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloque_dos`
--
ALTER TABLE `bloque_dos`
  MODIFY `id_mat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bloque_uno`
--
ALTER TABLE `bloque_uno`
  MODIFY `id_mat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `num_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
