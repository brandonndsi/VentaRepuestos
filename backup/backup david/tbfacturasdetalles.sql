-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 01:48 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbfacturasdetalles`
--

CREATE TABLE `tbfacturasdetalles` (
  `iddetalle` int(11) NOT NULL,
  `numerofactura` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioventa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbfacturasdetalles`
--

INSERT INTO `tbfacturasdetalles` (`iddetalle`, `numerofactura`, `idproducto`, `cantidad`, `precioventa`) VALUES
(1, 1, 1, 25, 12000),
(2, 1, 2, 5, 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfacturasdetalles`
--
ALTER TABLE `tbfacturasdetalles`
  ADD PRIMARY KEY (`iddetalle`),
  ADD UNIQUE KEY `numerofactura` (`numerofactura`,`idproducto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbfacturasdetalles`
--
ALTER TABLE `tbfacturasdetalles`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
