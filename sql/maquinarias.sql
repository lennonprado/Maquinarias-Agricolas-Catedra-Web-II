-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2016 a las 19:58:41
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maquinarias`
--
CREATE DATABASE IF NOT EXISTS `maquinarias` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maquinarias`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

DROP TABLE IF EXISTS `caracteristicas`;
CREATE TABLE `caracteristicas` (
  `id_caracteristica` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `car_nombre` varchar(50) NOT NULL,
  `car_detalle` varchar(50) NOT NULL,
  `car_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `caracteristicas`
--

TRUNCATE TABLE `caracteristicas`;
--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id_caracteristica`, `id_producto`, `car_nombre`, `car_detalle`, `car_status`) VALUES
(10, 1, 'Motor', 'Hercules 398', '2016-10-19 14:50:57'),
(11, 1, 'Aspiracion', 'Natural', '2016-10-19 15:19:58'),
(14, 7, 'Motor', 'Hercules 398', '2016-10-19 15:54:56'),
(16, 12, 'asa', 'asas', '2016-10-19 16:46:46'),
(19, 15, 'sxasxas', 'asxasxas', '2016-10-19 16:52:08'),
(20, 12, 'pppp', 'pp', '2016-10-19 20:31:56'),
(22, 19, 'op', 'op', '2016-10-19 20:54:57'),
(23, 11, 'ssss', 'ssss', '2016-11-09 17:38:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

DROP TABLE IF EXISTS `categorías`;
CREATE TABLE `categorías` (
  `id_categoria` int(11) NOT NULL,
  `cat_nombre` varchar(50) NOT NULL,
  `cat_descripcion` varchar(200) NOT NULL,
  `cat_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `categorías`
--

TRUNCATE TABLE `categorías`;
--
-- Volcado de datos para la tabla `categorías`
--

INSERT INTO `categorías` (`id_categoria`, `cat_nombre`, `cat_descripcion`, `cat_status`) VALUES
(1, 'Cosechadoras', 'Cosechadoras', '2016-10-18 12:02:54'),
(2, 'Sembradoras', '', '2016-10-19 20:51:11'),
(3, 'Tractores', 'Tractores', '2016-10-18 12:03:20'),
(4, 'Tolvas', 'Tolvas', '2016-10-18 12:03:41'),
(5, 'Implementos', 'Implementos', '2016-10-18 12:03:41'),
(6, 'Otros', 'Otros', '2016-10-18 12:03:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `com_id_producto` int(11) NOT NULL,
  `com_id_usuario` int(11) NOT NULL,
  `com_mensaje` text NOT NULL,
  `com_puntuacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `comentarios`
--

TRUNCATE TABLE `comentarios`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imágenes`
--

DROP TABLE IF EXISTS `imágenes`;
CREATE TABLE `imágenes` (
  `id_imagen` int(11) NOT NULL,
  `img_producto` int(11) NOT NULL,
  `img_descripcion` varchar(50) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `img_mime` varchar(20) NOT NULL,
  `img_destacada` tinyint(1) NOT NULL,
  `img_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `imágenes`
--

TRUNCATE TABLE `imágenes`;
--
-- Volcado de datos para la tabla `imágenes`
--

INSERT INTO `imágenes` (`id_imagen`, `img_producto`, `img_descripcion`, `img_url`, `img_mime`, `img_destacada`, `img_status`) VALUES
(1, 1, 'imagen', 'images/140680976926367715_300x200.jpg', '', 1, 1),
(2, 1, 'imagen', 'images/1448111173684775796_300x200.jpg', '', 0, 1),
(10, 1, '', 'images/58078ddb009e9_1411672801837801533_300x200.jpg', '', 0, 0),
(13, 7, '', 'images/5807973ce50e2_1406810280478763949_300x200.jpg', '', 1, 0),
(34, 11, '', 'images/5807a08fc4e34_14481199712125912013_300x200.jpg', '', 0, 1),
(35, 11, '', 'images/5807a08fc513b_14606435931001989488_300x200.jpg', '', 1, 1),
(36, 11, '', 'images/5807a08fceeb5_14606446331713399153_300x200.jpg', '', 0, 1),
(37, 11, '', 'images/5807a08fcf1f7_14607233461695415642_300x200.jpg', '', 0, 1),
(38, 11, '', 'images/5807a08fcf66f_14608122721950416615_300x200.jpg', '', 0, 1),
(39, 11, '', 'images/5807a08fcf9a3_14608169931673304909_300x200.jpg', '', 0, 1),
(44, 12, '', 'images/5807a372abe36_14608170881842605740_300x200.jpg', '', 0, 1),
(57, 19, '', 'images/5807dd9ba84de_5807a08fceeb5_14606446331713399153_300x200.jpg', '', 1, 1),
(60, 12, '', 'images/582370f6c2aed_58078ddb009e9_1411672801837801533_300x200.jpg', '', 0, 1),
(61, 12, '', 'images/582370f6c4f79_580797fe16178_1417262481566743770_300x200.jpg', '', 0, 1),
(63, 12, '', 'images/582370f6cdc98_5807974ba091c_1432212125824062698_300x200.jpg', '', 0, 1),
(76, 15, '', 'images/58237286ad026_5807a08fcf1f7_14607233461695415642_300x200.jpg', '', 0, 1),
(78, 15, '', 'images/58237286b2b4e_5807a08fcf66f_14608122721950416615_300x200.jpg', '', 0, 1),
(82, 15, '', 'images/582372e4b39be_13982033061840700110_300x200.jpg', '', 0, 1),
(87, 15, '', 'images/582372e4c7bcf_14375809701926290309_300x200.jpg', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `mar_nombre` varchar(60) NOT NULL,
  `mar_descripcion` varchar(200) NOT NULL,
  `mar_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `marcas`
--

TRUNCATE TABLE `marcas`;
--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `mar_nombre`, `mar_descripcion`, `mar_status`) VALUES
(1, 'Lecar', '', 1),
(3, 'Pauny', '', 1),
(4, 'Praba', '', 1),
(5, 'Don Roque', '', 1),
(6, 'Bertini', '', 1),
(7, 'Erca', '', 1),
(8, 'Baima', '', 1),
(9, 'Cestari', '', 1),
(10, 'De Grande', '', 1),
(11, 'Otras', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `prod_categoria` int(11) NOT NULL,
  `prod_nombre` varchar(50) NOT NULL,
  `prod_descripcion` text NOT NULL,
  `prod_marca` int(11) NOT NULL,
  `prod_modelo` varchar(50) NOT NULL,
  `prod_estado` varchar(20) NOT NULL,
  `prod_anio` int(5) NOT NULL,
  `prod_precio` float(11,2) NOT NULL,
  `prod_visible` tinyint(1) NOT NULL DEFAULT '1',
  `prod_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `productos`
--

TRUNCATE TABLE `productos`;
--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `prod_categoria`, `prod_nombre`, `prod_descripcion`, `prod_marca`, `prod_modelo`, `prod_estado`, `prod_anio`, `prod_precio`, `prod_visible`, `prod_status`) VALUES
(1, 2, 'Claas Tucano 430 Claas', 'Cosechado de arrastre', 9, '66666', 'nuevo', 90, 69.00, 1, '2016-10-19 15:20:26'),
(7, 3, 'TRactor Pauny 790', 'TRactor Pauny 790', 3, 'TRactor Pauny 790', 'usado', 2014, 200.00, 1, '2016-10-19 15:54:28'),
(11, 5, 'Tractor fo90', 'dssdas', 3, '', 'nuevo', 0, 0.00, 1, '2016-10-19 16:34:15'),
(12, 3, 'TRactor Pauny 790', '', 3, '', 'nuevo', 0, 0.00, 1, '2016-10-19 16:37:47'),
(15, 3, 'TRactor Pauny 790', 'qwdqwd', 3, '66666', 'usado', 222, 122.00, 1, '2016-10-19 16:51:51'),
(19, 1, 'prakkkao', 'pepeepep', 1, '', 'nuevo', 0, 0.00, 1, '2016-10-19 21:22:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `user_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_permisos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id_caracteristica`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `categorías`
--
ALTER TABLE `categorías`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `com_id_producto` (`com_id_producto`),
  ADD KEY `com_id_usuario` (`com_id_usuario`);

--
-- Indices de la tabla `imágenes`
--
ALTER TABLE `imágenes`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `img_producto` (`img_producto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `mac_categoria` (`prod_categoria`),
  ADD KEY `mac_marca` (`prod_marca`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_caracteristica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `categorías`
--
ALTER TABLE `categorías`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imágenes`
--
ALTER TABLE `imágenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `img_pro` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarioProducto` FOREIGN KEY (`com_id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarioUsuario` FOREIGN KEY (`com_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imágenes`
--
ALTER TABLE `imágenes`
  ADD CONSTRAINT `img_prod` FOREIGN KEY (`img_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `prod_cat` FOREIGN KEY (`prod_categoria`) REFERENCES `categorías` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prod_mar` FOREIGN KEY (`prod_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
