-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2016 a las 17:03:02
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
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id_caracteristica`, `id_producto`, `car_nombre`, `car_detalle`, `car_status`) VALUES
(1, 1, 'TDP trasera (toma de potencia)', 'Velocidad [rpm] 540', '2016-10-18 14:58:17'),
(2, 1, 'Aspiración', 'Natural', '2016-10-18 14:58:17'),
(3, 1, 'Embrague', 'Dual (doble etapa) en sec', '2016-10-18 14:58:59'),
(4, 1, 'Tración', 'Simple', '2016-10-18 14:58:59'),
(5, 1, 'Tamaño', '280 mm', '2016-10-18 14:59:42'),
(6, 1, 'Motor', 'International Tractors LTD', '2016-10-18 14:59:42');

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
-- Volcado de datos para la tabla `categorías`
--

INSERT INTO `categorías` (`id_categoria`, `cat_nombre`, `cat_descripcion`, `cat_status`) VALUES
(1, 'Cosechadoras', 'Cosechadoras', '2016-10-18 12:02:54'),
(2, 'Sembradoras', 'Sembradoras', '2016-10-18 12:03:20'),
(3, 'Tractores', 'Tractores', '2016-10-18 12:03:20'),
(4, 'Tolvas', 'Tolvas', '2016-10-18 12:03:41'),
(5, 'Implementos', 'Implementos', '2016-10-18 12:03:41'),
(6, 'Otros', 'Otros', '2016-10-18 12:03:52');

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
  `img_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imágenes`
--

INSERT INTO `imágenes` (`id_imagen`, `img_producto`, `img_descripcion`, `img_url`, `img_mime`, `img_destacada`, `img_status`) VALUES
(1, 1, 'imagen', 'images/140680976926367715_300x200.jpg', '', 1, 1),
(2, 1, 'imagen', 'images/1448111173684775796_300x200.jpg', '', 0, 1),
(3, 2, 'imagen', 'images/1406898163538096429_300x200.jpg', '', 1, 1),
(4, 2, 'imagen', 'images/1416432979716822078_300x200.jpg', '', 0, 1),
(5, 3, '', 'images/13979189101624839171_300x200.jpg', '', 1, 1),
(6, 3, '', 'images/14322140511693025431_300x200.jpg', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `marca_nombre` varchar(60) NOT NULL,
  `marca_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `marca_nombre`, `marca_status`) VALUES
(1, 'Lecar', 1),
(2, 'Pozzi', 1),
(3, 'Pauny', 1),
(4, 'Praba', 1),
(5, 'Don Roque', 1),
(6, 'Bertini', 1),
(7, 'Erca', 1),
(8, 'Baima', 1),
(9, 'Cestari', 1),
(10, 'De Grande', 1),
(11, 'Otras', 1);

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
  `prod_visible` tinyint(1) NOT NULL,
  `prod_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `prod_categoria`, `prod_nombre`, `prod_descripcion`, `prod_marca`, `prod_modelo`, `prod_estado`, `prod_anio`, `prod_precio`, `prod_visible`, `prod_status`) VALUES
(1, 1, 'Claas Tucano 430 Claas', 'Claas Tucano 430, modelo 2009, 25 pies, 3300 Hs. ', 1, '430', 'Usado', 2009, 0.00, 1, '2016-10-18 12:13:00'),
(2, 1, 'Girasolero Mainero, De 21 Surcos A 52 Mainero', 'Girasolero Mainero 1040, de 21 surcos a 52, con 400has., mod. 2009. ', 1, '1040', 'Usado', 2009, 0.00, 1, '2016-10-18 12:14:11'),
(3, 2, 'DEUTZ -AGCO ALLIS 6.125 DT Agco Allis', 'DEUTZ -AGCO ALLIS 6.125 Doble Tracción , Rodado duales 34, Cabina Rodriguez.\r\nDor. ', 2, 'ALLIS 6.125', 'Nuevo', 2016, 0.00, 1, '2016-10-18 12:17:32');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_caracteristica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `categorías`
--
ALTER TABLE `categorías`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `imágenes`
--
ALTER TABLE `imágenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `img_pro` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

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
