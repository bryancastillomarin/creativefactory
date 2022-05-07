-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2021 a las 00:51:56
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creative`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `encabezado` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `texto` varchar(5000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `encabezado`, `imagen`, `texto`) VALUES
(27, 'Este es el encabezado', 'istockphoto-515447460-1024x1024.jpg', 'Mauris gravida eu est et facilisis. Donec convallis felis felis, quis dignissim nibh dictum vitae. Phasellus vehicula tortor odio, vitae convallis est pellentesque faucibus. Nunc nec commodo tortor. Maecenas ligula diam, molestie sed tellus et, pharetra sagittis sem. Morbi consequat risus nec felis porta, non auctor nibh congue. Integer eget vestibulum ligula. Nulla eget lorem nulla. Fusce tempor maximus nunc, non feugiat sapien suscipit ut. Ut sed metus lorem.\r\n\r\nNunc aliquam nisi lectus, vel semper diam mattis ac. Mauris vel risus ut ipsum vehicula pulvinar. Suspendisse velit nulla, laoreet eget nisi eget, facilisis ultrices ante. Vestibulum id pharetra urna, auctor rutrum dui. Phasellus velit tellus, ullamcorper sit amet felis eu, lacinia accumsan enim. Pellentesque tortor dolor, scelerisque vel tempor eget, lacinia nec tortor. Praesent nec aliquet lorem, nec maximus nisi. Maecenas non sollicitudin ante, aliquam pharetra augue. Cras sollicitudin quis sem ut commodo. Mauris faucibus, libero vel pulvinar fringilla, dui dolor consequat justo, et scelerisque nisi augue nec magna.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `url_salida` varchar(300) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `url_salida`) VALUES
(11, 'slider1covid19.jpg', 'https://google.com'),
(12, 'slider2cocina.jpg', 'https://google.com'),
(13, 'slider3teotihuacan.jpg', 'https://google.com'),
(14, 'slider4RR.jpg', 'https://google.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(2, 'admin', '$2y$10$VOPUK1IfeOlMGrC7vq57H.0T/hoz5CxrWYMxyJoZEvNy8oe5gpIDi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
