-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2023 a las 16:22:54
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruver`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `email`, `telefono`, `password`) VALUES
(1, 'admin@gmail.com', '6564654', '6666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(6) NOT NULL,
  `cantidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(6) NOT NULL,
  `precio` varchar(40) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `precio`, `estado`, `fecha`) VALUES
(1, '33000', '', '2022-12-05'),
(2, '20000', '', '2022-12-05'),
(3, '65000', 'Por entregar', '2022-12-05'),
(4, '50000', 'Por entregar', '2023-02-14'),
(5, '65000', 'Por entregar', '2023-02-14'),
(6, '65000', 'Por entregar', '2023-02-14'),
(7, '65000', 'Por entregar', '2023-02-14'),
(8, '65000', 'Por entregar', '2023-02-14'),
(9, '65000', 'Por entregar', '2023-02-14'),
(10, '170000', 'Por entregar', '2023-02-14'),
(11, '170000', 'Por entregar', '2023-02-14'),
(12, '170000', 'Por entregar', '2023-02-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(40) NOT NULL,
  `codigo` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `imagen` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `codigo`, `categoria`, `cantidad`, `imagen`) VALUES
(1, 'Manzana', 'La manzana es la fruta ideal para los más pequeños por sus aportes nutritivos. Además, ayuda a preve', 35000, '01', 'Frutas', 'Canastilla', '../images/apples.jpg'),
(2, 'Uvas', 'Las uvas además de estar rodeadas de historia son una fruta que tiene muchos beneficios nutricionale', 15000, '02', 'Frutas', 'Kilo', '../images/grapes.jpg'),
(3, 'Coliflor', 'Todos los tipos de coliflor tienen grandes cantidades de vitaminas A, K, magnesio, potasio, fósforo,', 20000, '03', 'Verduras', 'Unidad', '../images/cabbage-g30c524598_1920.jpg'),
(4, 'Zanahoria', 'Es un vegetal diurético que evita la retención de líquidos. No puede faltar en verano, ya que facili', 60000, '04', 'Verduras', 'Bulto', '../images/carrots.jpg'),
(5, 'Banano', 'Son una de las frutas tropicales más importantes, un cultivo comercial fundamental que crece en gran', 30000, '05', 'Frutas', 'Racimo', '../images/banana.jpg'),
(6, 'Remolacha', 'Este sabroso alimento es una hortaliza de color rojo intenso, con hojas que pueden ser ingeridas tan', 35000, '06', 'Verduras', 'Bulto', '../images/beetroot-g50c93b908_1920.jpg'),
(7, 'Pepino', 'Su forma puede variar: casi globular, oblonga (para encurtido) o alargada (para ensalada). Puede ser', 35000, '07', 'Verduras', 'Bulto', '../images/cucumber-ge539a2e4f_1920.jpg'),
(8, 'Cereza', 'La cereza es el fruto del cerezo, árbol de la familia de las rosáceas que alcanza hasta 20 m de altu', 15000, '08', 'Frutas', 'Kilo', '../images/cherry-g201dc7767_1920.jpg'),
(9, 'Fresa', 'El fruto, que conocemos como fresa, es en realidad un engrosamiento del receptáculo floral y son los', 18000, '09', 'Frutas', 'Canastilla', '../images/stawberries.jpg'),
(10, 'Piña', 'La piña tiene forma cilíndrica, una corteza escamosa de color marrón, una corona de hojas espinosas ', 50000, '10', 'Frutas', 'Guacal', '../images/pina.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `documento` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `documento`, `direccion`, `password`) VALUES
(1, 'Javier ', 'guamanpjh@gmail.com', '3177521278', '1002455', 'Siachoque', 'HwnctaM='),
(2, 'Andres', 'juan@gmail.com', '321455879', '100212', 'Bogotá', 'HwnctQ=='),
(3, 'Mariana', 'maria@gmail.com', '312546987', '10021201202', 'Bogotá', 'GA7bsqTi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pedido` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
