-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 03:33 PM
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
(3, 2, 'M3', '../../images/administrador/juancho.jpeg', 1),
(4, 5, 'M4', '../../images/catalogo/trailer.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbimagenes`
--
ALTER TABLE `tbimagenes`
  ADD PRIMARY KEY (`imagenesid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `productocodigo` (`productocodigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbimagenes`
--
ALTER TABLE `tbimagenes`
  MODIFY `imagenesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
