

CREATE TABLE `caracteristicas` (
  `id_caracteristica` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `car_nombre` varchar(50) NOT NULL,
  `car_detalle` varchar(50) NOT NULL,
  `car_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id_categoria` int(11) NOT NULL,
  `cat_nombre` varchar(50) NOT NULL,
  `cat_descripcion` varchar(200) NOT NULL,
  `cat_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

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
  MODIFY `id_caracteristica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorías`
--
ALTER TABLE `categorías`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
