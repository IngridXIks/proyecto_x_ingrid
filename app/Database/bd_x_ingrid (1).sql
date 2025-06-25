-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2025 a las 15:53:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_x_ingrid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 1,
  `agregado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `respuesta` text DEFAULT NULL,
  `respondida` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_respuesta` datetime DEFAULT NULL,
  `creado_en` datetime DEFAULT current_timestamp(),
  `actualizado_en` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id` int(11) NOT NULL,
  `factura_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id`, `factura_id`, `producto_id`, `cantidad`, `precio_unitario`, `subtotal`) VALUES
(1, 1, 3, 1, 19500.00, 19500.00),
(2, 2, 3, 1, 19500.00, 19500.00),
(3, 3, 3, 1, 19500.00, 19500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `codigo_postal` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `id_usuario`, `calle`, `numero`, `ciudad`, `provincia`, `codigo_postal`, `descripcion`) VALUES
(12, 16, '123', '123', 'aca', 'cts', '123', 'asdsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `usuario_id`, `fecha`, `total`, `estado`) VALUES
(1, 16, '2025-06-10 01:22:18', 19500.00, 'completado'),
(2, 16, '2025-06-10 22:44:43', 19500.00, 'completado'),
(3, 16, '2025-06-10 22:56:49', 19500.00, 'completado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `activo`, `creado_en`) VALUES
(2, 'Deli Simple + Papas Fritas', 'Medallon x1 Cheddar Fetas x2 Bacon Cebolla Crispy Aderezo Deli', 16000.00, 'big_pons_simple.jpg', 1, '2025-06-02 22:49:59'),
(3, 'Deli Doble + Papas Fritas', 'Medallon x2 Cheddar Fetas x4 Bacon Cebolla Crispy Aderezo Deli', 19500.00, 'big_pons_doble.jpg', 1, '2025-06-02 22:49:59'),
(4, 'Pesto Simple + Papas fritas', 'Medallon x 1 + Cheddar fetas x 2 + Tomate + Pesto + Alioli + Papas fritas', 14500.00, 'pesto_simple.jpg', 1, '2025-06-02 22:49:59'),
(5, 'Baby Back Doble + Papas Fritas', 'Medallón x2, Cheddar Fetas x4, Chopped Bacon y BBQ Homemade.', 18500.00, 'baby_back_doble.jpg', 1, '2025-06-02 22:49:59'),
(6, 'Cheese Burger Simple + Papas Fritas', 'Medallon x1 Cheddar Feta x2', 12000.00, 'cheese_burguer_simple.jpg', 1, '2025-06-02 22:49:59'),
(7, 'Cheese Burger Doble + Papas Fritas', 'Medallon x2 Cheddar x4', 15500.00, 'cheese_burguer_doblejpg.jpg', 1, '2025-06-02 22:49:59'),
(8, 'Cheese Burger Triple + Papas Fritas', 'Medallon x3 Cheddar Fetas x6', 19000.00, 'cheese_burguer_triple.jpg', 1, '2025-06-02 22:49:59'),
(9, 'Royal Simple + Papas Fritas', 'Medallon x1 Cheddar Fetas x2 Cebolla Cruda Ketchup Mostaza Pepino', 14500.00, 'royal_simple.jpg', 1, '2025-06-02 22:49:59'),
(10, 'Royal Doble + Papas Fritas', 'Medallon x2 Cheddar Fetas x4 Cebolla Cruda Ketchup Mostaza Pepino', 17500.00, 'royal_doble.jpg', 1, '2025-06-02 22:49:59'),
(11, 'Stacked Bacon Simple + Papas Fritas', 'Medallón x 1 + Cheddar fetas x 2 + Bacon ahumado x4 + Relish sauce + Papas fritas', 16000.00, 'stacked_bacon_simple.jpg', 1, '2025-06-02 22:49:59'),
(12, 'Stacked Bacon Doble + Papas Fritas', 'Medallón x2 + Cheddar x4 + Bacon ahumado x4 + Relish sauce + Papas fritas', 19500.00, 'stacked_bacon_doble.jpg', 1, '2025-06-02 22:49:59'),
(13, 'American Burger Simple + Papas Fritas', 'Medallon x1 Cheddar x2 Tomate Lechuga Cebolla Cruda Pickles Aderezo Thousand Island', 14500.00, 'american_burguer_simple.jpg', 1, '2025-06-02 22:49:59'),
(14, 'mini', 'byrger112', 11293.00, 'tortas tamys (2).png', 1, '2025-06-21 21:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_perfiles` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `id_direccion` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `id_perfiles`, `password`, `celular`, `id_direccion`, `activo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'Ingrid', 'ingrid@gmail.com', 1, '$2y$10$.GQacc6KDOwLh2VSyuZE1.ZQqnfB6CgiuEYPBGhaC.LJg8n02t6Lm', '3794250733', NULL, 1, '2025-06-09 21:02:28', '2025-06-09 20:52:34', NULL),
(16, 'german', 'germansau96@gmail.com', 1, '$2y$10$ZufgF.PhP7aD/uchOZxHg.7HeA95yl3iyrhTu4O4uMPeclwHBi0VS', '', NULL, 1, '2025-06-10 01:14:45', '2025-06-10 19:33:56', NULL),
(17, 'asdasd', 'asd@asd.com', 0, '$2y$10$Ui/jPr9GEGdsjwH8RESXt.EExMxcRM.q9kgoh1cMvTPc5ije1MI/q', '', NULL, 1, '2025-06-10 22:35:39', '2025-06-10 22:35:39', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factura_id` (`factura_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`factura_id`) REFERENCES `facturas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
