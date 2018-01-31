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
-- Table structure for table `tbfacturas`
--

CREATE TABLE `tbfacturas` (
  `idfactura` int(11) NOT NULL,
  `numerofactura` int(11) NOT NULL,
  `fechafactura` date NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idvendedor` int(11) NOT NULL,
  `condicion` int(11) NOT NULL,
  `totalventa` double NOT NULL,
  `estadofactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbfacturas`
--

INSERT INTO `tbfacturas` (`idfactura`, `numerofactura`, `fechafactura`, `idcliente`, `idvendedor`, `condicion`, `totalventa`, `estadofactura`) VALUES
(1, 1, '2018-01-02', 2, 3, 1, 5795, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfacturas`
--
ALTER TABLE `tbfacturas`
  ADD PRIMARY KEY (`idfactura`),
  ADD UNIQUE KEY `numerofactura` (`numerofactura`),
  ADD KEY `empleadoid` (`idcliente`),
  ADD KEY `clienteid` (`idvendedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
