-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2016 a las 03:01:16
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `CodCar` int(6) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`CodCar`, `Descripcion`) VALUES
(1, 'SUPERVISOR DE VENTAS'),
(2, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CodCli` int(6) NOT NULL,
  `CI` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `PapCli` varchar(30) NOT NULL,
  `MapCli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CodCli`, `CI`, `Nombre`, `PapCli`, `MapCli`) VALUES
(1, '979519', 'MARIO', 'MAMANI', 'PEREZ'),
(2, '10426545', 'HENNRY', 'FLORES', 'ESPINOSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `CodCon` int(6) NOT NULL,
  `HoraEnt` date NOT NULL,
  `HoraSal` date NOT NULL,
  `Fecha` date NOT NULL,
  `CodUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `CodEmp` int(6) NOT NULL,
  `CI` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `PapEmp` varchar(30) NOT NULL,
  `MapEmp` varchar(30) NOT NULL,
  `FechaNac` date NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `CodCar` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`CodEmp`, `CI`, `Nombre`, `PapEmp`, `MapEmp`, `FechaNac`, `Telefono`, `Celular`, `Correo`, `CodCar`) VALUES
(1, '65951512', 'RAFAEL', 'PEÑA', 'ROMERO', '0000-00-00', 0, 0, '', 1),
(4, '84511125', 'JOEL', 'MAMANI', 'FLORES', '0000-00-00', 0, 0, '', 2),
(5, '94512154', 'CRISTIAN', 'TORRES', 'MAYTA', '0000-00-00', 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventariohardware`
--

CREATE TABLE `inventariohardware` (
  `CodInvHard` int(6) NOT NULL,
  `Unidad` int(6) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `FechaAdquisicion` date NOT NULL,
  `PrecioUnidad` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventariohardware`
--

INSERT INTO `inventariohardware` (`CodInvHard`, `Unidad`, `Tipo`, `Marca`, `Modelo`, `FechaAdquisicion`, `PrecioUnidad`, `Descripcion`) VALUES
(1, 10, 'PC', 'APPLE', '20-FD 00', '2015-04-22', '$ 650', 'CORE DUO imag 20 let/2.4 hgz'),
(2, 6, 'TECLADO', 'ESTANDAR', '', '2015-03-07', '$ 110', 'GENIUS OPTIMO A PUERTO USB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventariosoftware`
--

CREATE TABLE `inventariosoftware` (
  `CodInvSoft` int(6) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Utilidad` varchar(50) NOT NULL,
  `Fabricante` varchar(50) NOT NULL,
  `Licencia` varchar(50) NOT NULL,
  `FechaAdquisicion` date NOT NULL,
  `Precio` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventariosoftware`
--

INSERT INTO `inventariosoftware` (`CodInvSoft`, `Nombre`, `Utilidad`, `Fabricante`, `Licencia`, `FechaAdquisicion`, `Precio`, `Descripcion`) VALUES
(1, 'Sqlserver2005', 'BASE DE DATOS', 'MICROSOFT', 'PAGADO', '2015-06-07', '$ 175', 'IMPLEMENTO COMPLETO PARA COMPUTADORAS WINDOWS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `CodSer` int(6) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`CodSer`, `Nombre`) VALUES
(1, 'MANTENIMIENTO Y REPARACION DE  EQUIPOS'),
(2, 'SERVICIO DE INSTALACION DE REDES'),
(3, 'VENTA Y/O ACTUALIZACION DE PC'),
(4, 'DESARROLLO DE PAGINA WEB'),
(5, 'APLICACION MOVIL'),
(6, 'SISTEMAS EMPRESARIALES'),
(7, 'DISEÑO LOGOTIPO DE EMPRESAS'),
(8, 'EDICION DE VIDEOS'),
(9, 'RESTAURACION DE IMAGENES'),
(10, 'CAMPAÑAS PUBLICITARIAS PARA SU EMPRESA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CodUsu` int(11) NOT NULL,
  `Nick` varchar(30) NOT NULL,
  `Pass` varchar(80) NOT NULL DEFAULT 'e26c062fedf6b32834e4de93f9c8b644',
  `PreguntaSeguridad` varchar(100) NOT NULL,
  `CodEmp` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CodUsu`, `Nick`, `Pass`, `PreguntaSeguridad`, `CodEmp`) VALUES
(2, '', '6264ea2cf17d30c318aaa60b4be4e6b4', 'asdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `CodVen` int(6) NOT NULL,
  `CodSer` int(6) NOT NULL,
  `CodCli` int(6) NOT NULL,
  `CodUsu` int(6) NOT NULL,
  `Fecha/Hora` date NOT NULL,
  `CodInvHard` int(6) DEFAULT NULL,
  `CodInvSoft` int(11) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`CodCar`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCli`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`CodCon`),
  ADD KEY `CodUsu` (`CodUsu`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`CodEmp`),
  ADD KEY `CodCar` (`CodCar`);

--
-- Indices de la tabla `inventariohardware`
--
ALTER TABLE `inventariohardware`
  ADD PRIMARY KEY (`CodInvHard`);

--
-- Indices de la tabla `inventariosoftware`
--
ALTER TABLE `inventariosoftware`
  ADD PRIMARY KEY (`CodInvSoft`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`CodSer`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodUsu`),
  ADD KEY `CodEmp` (`CodEmp`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`CodVen`),
  ADD KEY `CodSer` (`CodSer`),
  ADD KEY `CodCli` (`CodCli`),
  ADD KEY `CodInv` (`CodInvHard`),
  ADD KEY `CodUsu` (`CodUsu`),
  ADD KEY `CodInvSoft` (`CodInvSoft`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `CodCar` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCli` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `CodCon` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `CodEmp` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inventariohardware`
--
ALTER TABLE `inventariohardware`
  MODIFY `CodInvHard` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inventariosoftware`
--
ALTER TABLE `inventariosoftware`
  MODIFY `CodInvSoft` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `CodSer` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CodUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `CodVen` int(6) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`CodCar`) REFERENCES `cargo` (`CodCar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`CodSer`) REFERENCES `servicio` (`CodSer`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`CodCli`) REFERENCES `cliente` (`CodCli`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`CodInvHard`) REFERENCES `inventariohardware` (`CodInvHard`),
  ADD CONSTRAINT `ventas_ibfk_5` FOREIGN KEY (`CodInvSoft`) REFERENCES `inventariosoftware` (`CodInvSoft`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
