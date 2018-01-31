-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2018 a las 06:57:42
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbventarepuestosonline`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarCliente` (IN `cliende` VARCHAR(50), IN `proid` INT)  NO SQL
BEGIN
UPDATE `tbclientes`
SET `clientedireccionexacta`=cliende
WHERE clienteid=proid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarPersona` (IN `perced` VARCHAR(20), IN `pernom` VARCHAR(20), IN `perape1` VARCHAR(20), IN `perape2` VARCHAR(20), IN `pertel` INT, IN `perco` VARCHAR(50), IN `perid` INT)  NO SQL
BEGIN
UPDATE `tbpersonas` SET 
`cedula`=perced,
`personanombre`=pernom,
`personaapellido1`=perape1,
`personaapellido2`=perape2,
`personatelefono`=pertel,
`personacorreo`=perco
 WHERE personaid=perid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarProveedor` (IN `producid` VARCHAR(50), IN `proid` INT)  NO SQL
BEGIN
UPDATE `tbproveedores`
SET `productoid`=producid
WHERE proveedorid=proid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarclientes` (IN `id` INT)  NO SQL
BEGIN
SELECT *
FROM tbclientes e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.clientedireccionexacta= e.clientedireccionexacta
WHERE e.clienteid= id  
AND e.clienteestado = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaCorreo` (IN `correo` VARCHAR(20))  NO SQL
BEGIN
SELECT `personaid` 
FROM `tbpersonas` 
WHERE personacorreo= correo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaID` (IN `ced` VARCHAR(20))  NO SQL
BEGIN
SELECT `personaid` 
FROM `tbpersonas` 
WHERE cedula= ced;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaIDCliente` (IN `proid` INT)  NO SQL
BEGIN
SELECT `personaid`
FROM `tbclientes` 
WHERE clienteid= proid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaIDProveedor` (IN `proid` INT)  NO SQL
BEGIN
SELECT `personaid`
FROM `tbproveedores` 
WHERE proveedorid= proid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproveedores` (IN `id` INT)  NO SQL
BEGIN
SELECT *
FROM tbproveedores e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.productoid= e.productoid
WHERE e.proveedorid= id  
AND e.proveedorestado = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarclientes` (IN `id` INT)  NO SQL
BEGIN

UPDATE `tbclientes` 
SET `clienteestado`= 0 
WHERE clienteid=id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarEmpleado` (IN `empleado` VARCHAR(50))  NO SQL
BEGIN
UPDATE tbempleados set empleadoestado=0 WHERE empleadoid=empleado AND empleadoestado=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarproveedores` (IN `id` INT)  NO SQL
BEGIN

UPDATE `tbproveedores` 
SET `proveedorestado`= 0 
WHERE proveedorid=id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarclientes` ()  NO SQL
BEGIN
SELECT *
FROM tbclientes e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.clientedireccionexacta= e.clientedireccionexacta
WHERE  e.clienteestado = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarempleados` (IN `empleados` VARCHAR(50))  NO SQL
    DETERMINISTIC
BEGIN
SELECT * FROM tbempleados e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
WHERE empleadoestado=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarfactura` ()  NO SQL
BEGIN
SELECT *
FROM tbfacturas e
INNER JOIN tbfacturasdetalles p ON e.numerofactura= p.numerofactura
WHERE  e.estadofactura = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarproveedores` ()  NO SQL
BEGIN
SELECT *
FROM tbproveedores e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.productoid= e.productoid
WHERE  e.proveedorestado = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevaPersona` (IN `ced` VARCHAR(20), IN `nom` VARCHAR(20), IN `ape1` VARCHAR(20), IN `ape2` VARCHAR(20), IN `tel` VARCHAR(20), IN `co` VARCHAR(50), IN `esta` INT)  NO SQL
BEGIN
INSERT INTO `tbpersonas`
( `cedula`, 
 `personanombre`,
 `personaapellido1`,
 `personaapellido2`,
 `personatelefono`, 
 `personacorreo`,
 `personaestado`) VALUES 
  (ced,
  nom,
  ape1,
  ape2,
  tel,
  co,
  1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevoCliente` (IN `persona` VARCHAR(20), IN `clave` VARCHAR(20), IN `direccion` VARCHAR(20), IN `estado` BOOLEAN)  NO SQL
BEGIN
INSERT INTO `tbclientes`( `personaid`, `clienteclave`,`clientedireccionexacta`,`clienteestado`) 
VALUES (persona, clave, direccion, estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevoEmpleado` (IN `persona` VARCHAR(20), IN `cedula` VARCHAR(20), IN `tipo` VARCHAR(20), IN `clave` VARCHAR(20), IN `edad` INT, IN `sexo` VARCHAR(20), IN `estadoCivil` VARCHAR(20), IN `banco` VARCHAR(20), IN `cuenta` INT, IN `fecha` DATE, IN `estado` BOOLEAN)  NO SQL
BEGIN
INSERT INTO `tbempleados`(`personaid`, `empleadocedula`,  `tipoempleado`, `empleadocontrasenia`, `empleadoedad`, `empleadosexo`, `empleadoestadocivil`, `empleadobanco`, `empleadocuentabancaria`, `empleadofechaingreso`, `empleadoestado`)
VALUES (persona, cedula, tipo, clave, edad, sexo, estadoCivil, banco, cuenta,fecha, estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevoProveedor` (IN `perso` VARCHAR(20), IN `pro` VARCHAR(20), IN `esta` VARCHAR(20))  NO SQL
BEGIN
INSERT INTO `tbproveedores`
( `personaid`, 
 `productoid`, 
 `proveedorestado`) VALUES 
  (perso,
  pro,
   esta);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcategoriaproducto`
--

CREATE TABLE `tbcategoriaproducto` (
  `categoriaproductoid` int(11) NOT NULL,
  `categoriaproductonombre` varchar(50) NOT NULL,
  `categoriaproductoestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcategoriaproducto`
--

INSERT INTO `tbcategoriaproducto` (`categoriaproductoid`, `categoriaproductonombre`, `categoriaproductoestado`) VALUES
(1, 'Carros 4x4', 1),
(2, 'Automoviles', 1),
(3, 'Motos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbclientes`
--

CREATE TABLE `tbclientes` (
  `clienteid` int(20) NOT NULL,
  `personaid` varchar(20) NOT NULL,
  `clienteclave` varchar(20) NOT NULL,
  `clientedireccionexacta` varchar(200) NOT NULL,
  `clienteestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbclientes`
--

INSERT INTO `tbclientes` (`clienteid`, `personaid`, `clienteclave`, `clientedireccionexacta`, `clienteestado`) VALUES
(1, '3', '12345', 'Rio Frio Finca 2', 1),
(13, '22', 'kjhkj', 'Prueba2321', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcompras`
--

CREATE TABLE `tbcompras` (
  `compraid` int(20) NOT NULL,
  `productoid` varchar(20) NOT NULL,
  `compracantidad` int(40) NOT NULL,
  `compraestado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcompras`
--

INSERT INTO `tbcompras` (`compraid`, `productoid`, `compracantidad`, `compraestado`) VALUES
(1, '1', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleados`
--

CREATE TABLE `tbempleados` (
  `empleadoid` int(11) NOT NULL,
  `personaid` varchar(20) NOT NULL,
  `empleadocedula` varchar(20) NOT NULL,
  `tipoempleado` varchar(20) NOT NULL,
  `empleadocontrasenia` varchar(20) NOT NULL,
  `empleadoedad` varchar(20) NOT NULL,
  `empleadosexo` varchar(10) NOT NULL,
  `empleadoestadocivil` varchar(20) NOT NULL,
  `empleadobanco` varchar(50) NOT NULL,
  `empleadocuentabancaria` varchar(50) NOT NULL,
  `empleadofechaingreso` date NOT NULL,
  `empleadoestado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbempleados`
--

INSERT INTO `tbempleados` (`empleadoid`, `personaid`, `empleadocedula`, `tipoempleado`, `empleadocontrasenia`, `empleadoedad`, `empleadosexo`, `empleadoestadocivil`, `empleadobanco`, `empleadocuentabancaria`, `empleadofechaingreso`, `empleadoestado`) VALUES
(0, '24', '207560987', 'Administrador', 'Prueba123', '23', 'Masculino', 'Viudo', 'LAFISE', '2147483647', '2018-01-17', '1'),
(1, '1', '207210905', 'Administrador', '12345', '48', 'm', 'soltero', 'Costa rica', '78965542458', '2017-10-01', '1'),
(2, '2', '206990365', 'Cajero', '12345', '23', 'm', 'soltero', 'Nacional', '256889871', '2017-10-03', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfacturas`
--

CREATE TABLE `tbfacturas` (
  `facturaid` varchar(50) NOT NULL,
  `compraid` varchar(50) NOT NULL,
  `empleadoid` varchar(50) NOT NULL,
  `clienteid` varchar(50) NOT NULL,
  `facturafecha` date NOT NULL,
  `facturabruta` double NOT NULL,
  `facturaneta` double NOT NULL,
  `facturaestado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbfacturas`
--

INSERT INTO `tbfacturas` (`facturaid`, `compraid`, `empleadoid`, `clienteid`, `facturafecha`, `facturabruta`, `facturaneta`, `facturaestado`) VALUES
('1', '1', '2', '3', '2017-09-10', 6100, 5795, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfacturasdetalles`
--

CREATE TABLE `tbfacturasdetalles` (
  `iddetalle` int(11) NOT NULL,
  `numerofactura` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioventa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbfacturasdetalles`
--

INSERT INTO `tbfacturasdetalles` (`iddetalle`, `numerofactura`, `idproducto`, `cantidad`, `precioventa`) VALUES
(1, 1, 1, 25, 12000),
(2, 1, 2, 5, 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbimagenes`
--

CREATE TABLE `tbimagenes` (
  `imagenesid` int(11) NOT NULL,
  `personaid` int(11) NOT NULL,
  `productocodigo` varchar(50) NOT NULL,
  `imagenruta` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbimagenes`
--

INSERT INTO `tbimagenes` (`imagenesid`, `personaid`, `productocodigo`, `imagenruta`, `estado`) VALUES
(1, 6, 'M1', '../../images/administrador/david.jpeg', 1),
(2, 1, 'M2', '../../images/administrador/brandon.jpg', 1),
(3, 2, 'M3', '../../images/administrador/juancho.jpeg', 1),
(4, 5, 'M4', '../../images/catalogo/trailer.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpersonas`
--

CREATE TABLE `tbpersonas` (
  `personaid` int(20) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `personanombre` varchar(20) NOT NULL,
  `personaapellido1` varchar(20) NOT NULL,
  `personaapellido2` varchar(20) NOT NULL,
  `personatelefono` int(11) NOT NULL,
  `personacorreo` varchar(50) NOT NULL,
  `personaestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpersonas`
--

INSERT INTO `tbpersonas` (`personaid`, `cedula`, `personanombre`, `personaapellido1`, `personaapellido2`, `personatelefono`, `personacorreo`, `personaestado`) VALUES
(1, '205880889', 'Brandon', 'Rodriguez', 'Mendez', 62091232, 'brandon-ndsi@hotmail.com', 1),
(2, '508990805', 'Juan', 'Rodriguez', 'Rodriguez', 14358765, 'juararodri@gmail.com', 1),
(3, '206990696', 'Pedro', 'Salas', 'Salas', 73950274, 'yoansalas76@gmail.com', 1),
(21, '', 'asdsad', 'aaaaaa', 'jhgjg', 65656565, 'lopez@gmail.com', 1),
(22, '', 'asdsad', 'aaaaaa', 'jhgjg', 65656565, 'lopez@gmail.com', 1),
(23, '207560987', 'Jorge', 'Arias', 'Arias', 65748574, 'gorgearias@gmail.com', 1),
(24, '207560987', 'Mathias', 'Perez', 'Arias', 65748574, 'as@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproductos`
--

CREATE TABLE `tbproductos` (
  `productoid` int(11) NOT NULL,
  `productocodigo` varchar(50) NOT NULL,
  `productonombre` varchar(50) NOT NULL,
  `productodescripcion` text NOT NULL,
  `productoprecio` varchar(50) NOT NULL,
  `productoestado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbproductos`
--

INSERT INTO `tbproductos` (`productoid`, `productocodigo`, `productonombre`, `productodescripcion`, `productoprecio`, `productoestado`) VALUES
(1, 'M1', 'motor', 'es un motor', '120', '1'),
(2, 'M2', 'llanta', 'es una llanta', '2500', '1'),
(3, 'M3', 'cilindro', 'es un cilindro', '2000', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproveedores`
--

CREATE TABLE `tbproveedores` (
  `proveedorid` int(11) NOT NULL,
  `personaid` int(11) NOT NULL,
  `productoid` int(11) NOT NULL,
  `proveedorestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbproveedores`
--

INSERT INTO `tbproveedores` (`proveedorid`, `personaid`, `productoid`, `proveedorestado`) VALUES
(1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipoempleados`
--

CREATE TABLE `tbtipoempleados` (
  `tipoempleadoid` varchar(20) NOT NULL,
  `tipoempleadosalariobase` double NOT NULL,
  `tipoempleadodescripcion` text NOT NULL,
  `tipoempleadohoraextra` double NOT NULL,
  `tipoempleadoestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tbtipoempleados`
--

INSERT INTO `tbtipoempleados` (`tipoempleadoid`, `tipoempleadosalariobase`, `tipoempleadodescripcion`, `tipoempleadohoraextra`, `tipoempleadoestado`) VALUES
('Administrador', 600000, 'Puede agregar,modificar,buscar y eliminar:(zonas,productos,cajeros,persona,precios,combos, etc...', 2000, 1),
('Cajero', 250000, 'Vende en la tienda\n', 2000, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcategoriaproducto`
--
ALTER TABLE `tbcategoriaproducto`
  ADD PRIMARY KEY (`categoriaproductoid`);

--
-- Indices de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`clienteid`),
  ADD KEY `personaid` (`personaid`);

--
-- Indices de la tabla `tbcompras`
--
ALTER TABLE `tbcompras`
  ADD PRIMARY KEY (`compraid`),
  ADD KEY `productoid` (`productoid`);

--
-- Indices de la tabla `tbempleados`
--
ALTER TABLE `tbempleados`
  ADD PRIMARY KEY (`empleadoid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `tipoempleado` (`tipoempleado`);

--
-- Indices de la tabla `tbfacturas`
--
ALTER TABLE `tbfacturas`
  ADD PRIMARY KEY (`facturaid`),
  ADD KEY `empleadoid` (`empleadoid`),
  ADD KEY `clienteid` (`clienteid`);

--
-- Indices de la tabla `tbfacturasdetalles`
--
ALTER TABLE `tbfacturasdetalles`
  ADD PRIMARY KEY (`iddetalle`),
  ADD UNIQUE KEY `numerofactura` (`numerofactura`,`idproducto`);

--
-- Indices de la tabla `tbimagenes`
--
ALTER TABLE `tbimagenes`
  ADD PRIMARY KEY (`imagenesid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `productocodigo` (`productocodigo`);

--
-- Indices de la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  ADD PRIMARY KEY (`personaid`);

--
-- Indices de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD PRIMARY KEY (`productoid`);

--
-- Indices de la tabla `tbproveedores`
--
ALTER TABLE `tbproveedores`
  ADD PRIMARY KEY (`proveedorid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `materiaprimaid` (`productoid`);

--
-- Indices de la tabla `tbtipoempleados`
--
ALTER TABLE `tbtipoempleados`
  ADD PRIMARY KEY (`tipoempleadoid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcategoriaproducto`
--
ALTER TABLE `tbcategoriaproducto`
  MODIFY `categoriaproductoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `clienteid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbfacturasdetalles`
--
ALTER TABLE `tbfacturasdetalles`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbimagenes`
--
ALTER TABLE `tbimagenes`
  MODIFY `imagenesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  MODIFY `personaid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  MODIFY `productoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbproveedores`
--
ALTER TABLE `tbproveedores`
  MODIFY `proveedorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
