-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 09:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbventarepuestosonline`
--

DELIMITER $$
--
-- Procedures
--
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaID` (IN `ced` VARCHAR(20))  NO SQL
BEGIN
SELECT `personaid` 
FROM `tbpersonas` 
WHERE cedula= ced;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarempleados` (IN `empleados` VARCHAR(50))  NO SQL
    DETERMINISTIC
BEGIN
SELECT * FROM tbempleados e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
WHERE empleadoestado=1;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerrutaimagen` (IN `id` INT, IN `esta` INT)  NO SQL
BEGIN
SELECT `imagenruta` FROM `tbimagenes` 
WHERE 
personaid=id
AND estado= esta;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbcategoriaproducto`
--

CREATE TABLE `tbcategoriaproducto` (
  `categoriaproductoid` int(11) NOT NULL,
  `categoriaproductonombre` varchar(50) NOT NULL,
  `categoriaproductoestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcategoriaproducto`
--

INSERT INTO `tbcategoriaproducto` (`categoriaproductoid`, `categoriaproductonombre`, `categoriaproductoestado`) VALUES
(1, 'Carro', 1),
(2, 'Automovil', 1),
(3, 'Moto', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbclientes`
--

CREATE TABLE `tbclientes` (
  `clienteid` int(20) NOT NULL,
  `personaid` varchar(20) NOT NULL,
  `clientedireccionexacta` varchar(200) NOT NULL,
  `clienteestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbclientes`
--

INSERT INTO `tbclientes` (`clienteid`, `personaid`, `clientedireccionexacta`, `clienteestado`) VALUES
(1, '3', 'Rio Frio Finca 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbcompras`
--

CREATE TABLE `tbcompras` (
  `compraid` int(20) NOT NULL,
  `productoid` varchar(20) NOT NULL,
  `compracantidad` int(40) NOT NULL,
  `compraestado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcompras`
--

INSERT INTO `tbcompras` (`compraid`, `productoid`, `compracantidad`, `compraestado`) VALUES
(1, '1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbempleados`
--

CREATE TABLE `tbempleados` (
  `empleadoid` int(11) NOT NULL,
  `personaid` varchar(20) NOT NULL,
  `tipoempleado` varchar(20) NOT NULL,
  `empleadocedula` varchar(20) NOT NULL,
  `empleadofechaingreso` date NOT NULL,
  `empleadocontrasenia` varchar(20) NOT NULL,
  `empleadoedad` varchar(20) NOT NULL,
  `empleadosexo` varchar(10) NOT NULL,
  `empleadoestadocivil` varchar(20) NOT NULL,
  `empleadobanco` varchar(50) NOT NULL,
  `empleadocuentabancaria` varchar(50) NOT NULL,
  `empleadolicenciaid` varchar(20) NOT NULL,
  `empleadoestado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbempleados`
--

INSERT INTO `tbempleados` (`empleadoid`, `personaid`, `tipoempleado`, `empleadocedula`, `empleadofechaingreso`, `empleadocontrasenia`, `empleadoedad`, `empleadosexo`, `empleadoestadocivil`, `empleadobanco`, `empleadocuentabancaria`, `empleadolicenciaid`, `empleadoestado`) VALUES
(1, '2', 'Cajero', '206990365', '2017-10-03', '12345', '23', 'm', 'soltero', 'Nacional', '256889871', '1', '1'),
(2, '6', 'Administrador', '207210905', '2017-10-01', '12345', '48', 'm', 'soltero', 'Costa rica', '78965542458', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbfacturas`
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
-- Dumping data for table `tbfacturas`
--

INSERT INTO `tbfacturas` (`facturaid`, `compraid`, `empleadoid`, `clienteid`, `facturafecha`, `facturabruta`, `facturaneta`, `facturaestado`) VALUES
('1', '1', '2', '3', '2017-09-10', 6100, 5795, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbimagenes`
--

CREATE TABLE `tbimagenes` (
  `imagenesid` int(11) NOT NULL,
  `personaid` int(11) NOT NULL,
  `productocodigo` varchar(50) NOT NULL,
  `imagenruta` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbimagenes`
--

INSERT INTO `tbimagenes` (`imagenesid`, `personaid`, `productocodigo`, `imagenruta`, `estado`) VALUES
(1, 6, 'M1', '../../images/administrador/david.jpeg', 1),
(2, 1, 'M2', '../../images/administrador/brandon.jpg', 1),
(3, 2, 'M3', '../../images/administrador/juancho.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbpersonas`
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
-- Dumping data for table `tbpersonas`
--

INSERT INTO `tbpersonas` (`personaid`, `cedula`, `personanombre`, `personaapellido1`, `personaapellido2`, `personatelefono`, `personacorreo`, `personaestado`) VALUES
(1, '205880889', 'Brandon', 'Rodrigez', 'Mendez', 62091232, 'brandon-ndsi@hotmail.com', 1),
(2, '508990805', 'Juan', 'Rodriguez', 'Rodriguez', 14358765, 'juararodri@gmail.com', 1),
(3, '306990584', 'Daniel', 'Batista', 'Perez', 89756421, 'batista234@gmail.com', 1),
(4, '706580125', 'Luis', 'Aguilera', 'Somoza', 78562148, 'luisagui@gmail.com', 1),
(5, '305890685', 'David', 'Salas', 'Lorente', 73950274, 'davidloren@gmail.com', 1),
(6, '206990696', 'David', 'Lorente', 'Salas', 85235478, 'yoansalas76@gmail.com', 1),
(7, '306980689', 'Wilber', 'Rodrigez', 'Mendez', 89567842, 'wilrodrigez345@gmail.com', 1),
(8, '24324', 're', 're', 're', 334324, 'xx@gmail.com', 1),
(9, '105860985', 'Pamela', 'Aguero', 'Solano', 89564728, 'perro2345@gmail.com', 1),
(10, '3066990689', 'Sandra', 'Camilo', 'Perez', 68956857, 'saPerez12@gmail.com', 1),
(11, '205480254', 'Maria', 'Murillo', 'Angulo', 87596423, 'maria234@gmail.com', 1),
(12, '306890147', 'Roberto', 'Zoto', 'Coto', 87546923, 'robertochino@gmail.com', 1),
(13, '306980358', 'Andres', 'Quiroz', 'Picado', 78965324, 'wquirozan@gmail.com', 1),
(14, '305680369', 'Angie', 'Lopez', 'Urbina', 75482514, 'urbinalopez@gmail.com', 1),
(15, '305680124', 'Cristel', 'Pedo', 'Angulo', 72548962, 'crsitelstr4@gmail.com', 1),
(16, '204690735', 'Yenni', 'Murillo', 'AcuÃ±a', 84814936, 'sas@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbproductos`
--

CREATE TABLE `tbproductos` (
  `productoid` int(11) NOT NULL,
  `categoriaproductoid` int(11) NOT NULL,
  `productocodigo` varchar(50) NOT NULL,
  `productonombre` varchar(50) NOT NULL,
  `productodescripcion` text NOT NULL,
  `productoprecio` varchar(50) NOT NULL,
  `productoestado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproductos`
--

INSERT INTO `tbproductos` (`productoid`, `categoriaproductoid`, `productocodigo`, `productonombre`, `productodescripcion`, `productoprecio`, `productoestado`) VALUES
(1, 1, 'M1', 'motor', 'es un motor', '120', '1'),
(2, 2, 'M2', 'llanta', 'es una llanta', '2500', '1'),
(3, 2, 'M3', 'cilindro', 'es un cilindro', '2000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbproveedores`
--

CREATE TABLE `tbproveedores` (
  `proveedorid` int(11) NOT NULL,
  `personaid` int(11) NOT NULL,
  `productoid` int(11) NOT NULL,
  `proveedorestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproveedores`
--

INSERT INTO `tbproveedores` (`proveedorid`, `personaid`, `productoid`, `proveedorestado`) VALUES
(1, 3, 2, 1),
(2, 2, 3, 1),
(3, 4, 2, 1),
(4, 5, 2, 1),
(5, 6, 2, 1),
(6, 7, 1, 1),
(7, 1, 1, 1),
(8, 9, 1, 1),
(9, 10, 1, 1),
(10, 11, 1, 1),
(11, 12, 1, 0),
(12, 13, 1, 1),
(13, 14, 1, 1),
(14, 15, 1, 1),
(15, 16, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbtipoempleados`
--

CREATE TABLE `tbtipoempleados` (
  `tipoempleadoid` varchar(20) NOT NULL,
  `tipoempleadosalariobase` double NOT NULL,
  `tipoempleadodescripcion` text NOT NULL,
  `tipoempleadohoraextra` double NOT NULL,
  `tipoempleadoestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbtipoempleados`
--

INSERT INTO `tbtipoempleados` (`tipoempleadoid`, `tipoempleadosalariobase`, `tipoempleadodescripcion`, `tipoempleadohoraextra`, `tipoempleadoestado`) VALUES
('Administrador', 600000, 'Puede agregar,modificar,buscar y eliminar:(zonas,productos,cajeros,persona,precios,combos, etc...', 2000, 1),
('Cajero', 250000, 'Vende en la tienda\n', 2000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcategoriaproducto`
--
ALTER TABLE `tbcategoriaproducto`
  ADD PRIMARY KEY (`categoriaproductoid`);

--
-- Indexes for table `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`clienteid`),
  ADD KEY `personaid` (`personaid`);

--
-- Indexes for table `tbcompras`
--
ALTER TABLE `tbcompras`
  ADD PRIMARY KEY (`compraid`),
  ADD KEY `productoid` (`productoid`);

--
-- Indexes for table `tbempleados`
--
ALTER TABLE `tbempleados`
  ADD PRIMARY KEY (`empleadoid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `tipoempleado` (`tipoempleado`),
  ADD KEY `empleadolicenciaid` (`empleadolicenciaid`);

--
-- Indexes for table `tbfacturas`
--
ALTER TABLE `tbfacturas`
  ADD PRIMARY KEY (`facturaid`),
  ADD KEY `empleadoid` (`empleadoid`),
  ADD KEY `clienteid` (`clienteid`);

--
-- Indexes for table `tbimagenes`
--
ALTER TABLE `tbimagenes`
  ADD PRIMARY KEY (`imagenesid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `productocodigo` (`productocodigo`);

--
-- Indexes for table `tbpersonas`
--
ALTER TABLE `tbpersonas`
  ADD PRIMARY KEY (`personaid`);

--
-- Indexes for table `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD PRIMARY KEY (`productoid`),
  ADD KEY `categoriaproductoid` (`categoriaproductoid`),
  ADD KEY `productocodigo` (`productocodigo`);

--
-- Indexes for table `tbproveedores`
--
ALTER TABLE `tbproveedores`
  ADD PRIMARY KEY (`proveedorid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `materiaprimaid` (`productoid`);

--
-- Indexes for table `tbtipoempleados`
--
ALTER TABLE `tbtipoempleados`
  ADD PRIMARY KEY (`tipoempleadoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcategoriaproducto`
--
ALTER TABLE `tbcategoriaproducto`
  MODIFY `categoriaproductoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `clienteid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbimagenes`
--
ALTER TABLE `tbimagenes`
  MODIFY `imagenesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbpersonas`
--
ALTER TABLE `tbpersonas`
  MODIFY `personaid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbproductos`
--
ALTER TABLE `tbproductos`
  MODIFY `productoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbproveedores`
--
ALTER TABLE `tbproveedores`
  MODIFY `proveedorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
