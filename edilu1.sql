-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-07-2020 a las 12:27:22
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `edilu1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arca`
--

CREATE TABLE IF NOT EXISTS `arca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `factura` int(15) NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `arca`
--

INSERT INTO `arca` (`id`, `fecha`, `empresa`, `factura`, `subtotal`, `total`) VALUES
(1, '2018-10-23', 'Arca Distribuciones S.A.', 700, 4628.7, 5600.73),
(2, '2018-10-23', 'Arca Distribuciones S.A.', 701, 20836.8, 25212.5),
(4, '2018-10-23', 'Arca Distribuciones S.A.', 4561, 10800.3, 10800.3),
(5, '2018-10-23', 'Arca Distribuciones S.A.', 4562, 48619.2, 48619.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `cuit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Empresa`, `Direccion`, `Localidad`, `Telefono`, `cuit`) VALUES
(1, 'Arca Distribuciones S.A', 'Francia 3553', 'San Martin', '?', '30-68630937-8'),
(2, 'Pueba 1 S.R.L.', 'Calle terrada 456', 'Jose C Paz', '54652254', 'CUIL'),
(3, 'Lady Way S.R.L.', 'Aguero 568 1°C', 'Capital Federal', '?', '30-65146422-2'),
(4, 'Garcia Reguera.', 'Moreno 1432', 'Capital Federal', '?', '30-52880793-9'),
(5, 'Famularo S.A.', 'Alsina 1556/60', 'Capital Federal', '?', '30-53870999-5'),
(6, 'Lola Morena', 'Emilio Lamarca 4959', 'Capital Federal', '45723010', ''),
(7, 'Prueba S.A', 'Calle Falsa 123', 'Vicente López', '4782-3010', '30573652084');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `dni` int(12) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `direccion`, `localidad`, `dni`, `telefono`, `fecha`) VALUES
(1, 'Martin', 'Barrios', 30, 'Calle Cerrada 123', 'Gregorio de Laferrere', 33211888, 56465522, '0000-00-00'),
(2, 'Faustino', 'Centurion', 56, 'Calle terrada 456', 'Jose C Paz', 10000000, 54652254, '2010-03-03'),
(3, 'Rocio', 'Aguero', 50, 'Ruta 4 10.366', 'Jose Leon Suarez', 53355665, 4562256, '2013-10-18'),
(4, 'Ramiro', 'Benzacar', 36, 'Emilio Lamarca 4959', 'Buenos Aires', 29696613, 1162944709, '1997-03-03'),
(5, 'Josefa', 'NN', 65, 'Av Constituyentes 3226', 'San Martin', 36696613, 54646544, '2010-10-18'),
(6, 'Irma', 'Aguirre', 50, 'Calle Falsa 123', 'Jose C paz', 53355665, 4562256, '2007-10-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `numFact` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numRem` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `bon` float NOT NULL,
  `impbon` float NOT NULL,
  `impoiva` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `desde` time NOT NULL,
  `hasta` time NOT NULL,
  `empleado` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `fecha`, `desde`, `hasta`, `empleado`) VALUES
(1, '2019-07-02', '08:35:00', '18:00:00', 1),
(2, '2019-07-01', '00:00:00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Empresa` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `Usuario`, `Contraseña`, `Empresa`) VALUES
(1, 'Admin', '1234', 'Edilu'),
(2, 'Ramiro', '1924', 'Edilu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nc`
--

CREATE TABLE IF NOT EXISTS `nc` (
  `id` int(15) NOT NULL,
  `numNC` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numFact` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nd`
--

CREATE TABLE IF NOT EXISTS `nd` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `numND` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `numFact` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Precio` decimal(50,0) NOT NULL,
  `Subtotal` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `pedido`, `fecha`, `empresa`, `Codigo`, `Descripcion`, `Cantidad`, `Precio`, `Subtotal`, `Total`) VALUES
(1, 1, '2019-07-19', 'Lola Morena', 51650, 'Sout. Red. Luana T.95', 200, '79', 15800, 15800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `Empresa` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `cuit` varchar(50) DEFAULT NULL,
  `mail` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Empresa`, `Direccion`, `Localidad`, `Telefono`, `cuit`, `mail`) VALUES
('Gabor', 'Moron 85', 'Paso del Rey', '4632-630', '30-56017056-0', 'josecarlosgabor@gabor.com.ar'),
('Prueba S.A', '', 'San Martin', '11558556', '30573652084', 'mail'),
('Iteva S.A.', 'Adolfo Alsina 1556 / 60', 'Capital Federal', '45723010', '30-53870999-5', 'lenceria@famularo.com'),
('Arca Distribuciones S.A.', 'Emilio Lamarca 4959', 'Buenos Aires', '1162944709', '20296966135', 'ramiro.benzacar@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remito`
--

CREATE TABLE IF NOT EXISTS `remito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numRem` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `iva` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `cuit` int(13) NOT NULL,
  `cant` int(11) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(55) NOT NULL,
  `cantCajas` int(50) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Precio` varchar(20) DEFAULT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `Codigo`, `Descripcion`, `Precio`, `Empresa`) VALUES
(1, '      01   ', '   Catalogos Lola Morena 2007', ' 149.99', '   Lola Morena'),
(2, '  02 ', ' Lola Morena Catalogos año 2009', ' 150.60', ' Lola Morena'),
(3, '003', 'Catalogos Lola Morena 2008', '50.60', 'Lola Morena'),
(4, '51650', 'Sout. Red. Luana T.95', '79.00', 'Lady Way'),
(5, '51651', 'Sout. Red. Luana T.100', '79.00', 'Lady Way'),
(6, '44028201', 'Pack Vedetinas Bca/Negro T.U', '47.80', 'Millanel Cosmetica S.R.L.'),
(7, ' 2356 ', 'Camisolin Mora Violeta T. EG', '50.66', 'Lola Morena'),
(8, '69129/1', 'Soutien Diana Blanco T. 95', '37.30', 'Arca Distribuciones S.A.'),
(9, '69131/3', 'Soutien Diana Blanco T. 100', '37.30', 'Arca Distribuciones S.A.'),
(16, '69270/0', 'Sout. Red. Lucrecia Negro T.120', '43.50', 'Arca Distribuciones S.A.'),
(18, '69145/3', 'Cola Less Diana Negro T. U ', '17.50', 'Arca Distribuciones S.A.'),
(19, '5533', 'Camison Puntilla Negro T.EG', '80.33', 'Lola Morena'),
(20, '65657/7', 'Camisolin Mora Negro T.M-G', '46.60', 'Arca Distribuciones S.A.'),
(21, '65658/5', 'Camisolin Mora Negro T.G-EG', '46.60', 'Arca Distribuciones S.A.'),
(22, '69129/1', 'Soutien Diana Blanco T. 95', '37.30', 'Arca Distribuciones S.A.'),
(23, '69131/3', 'Soutien Diana Blanco T. 100', '37.30', 'Arca Distribuciones S.A.'),
(24, '69134/8', 'Soutien Diana Blanco T. 105', '37.30', 'Arca Distribuciones S.A.'),
(25, '69139/9', 'Soutien Diana Negro T. 90', '37.30', 'Arca Distribuciones S.A.'),
(26, '69268/9', 'Sout. Red. Lucrecia Negro T.110', '43.50', 'Arca Distribuciones S.A.'),
(27, '51061/0', 'Tiro Corto Raquel Bord. Negro T.U', '26.45', 'Arca Distribuciones S.A.'),
(28, ' 58781/8', ' Trusa Liviana Iara Negra T. U', ' 38.00', ' Arca Distribuciones S.A.'),
(29, ' 88888888', 'prueba', ' 50.33', ' Lola Morena Lenceria'),
(30, '99999999', 'pueba', '180.36', 'Arca Distribuciones S.A.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
