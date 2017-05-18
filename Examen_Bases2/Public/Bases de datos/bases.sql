-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2016 at 04:32 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bases`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `Cedula` int(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`Cedula`, `Nombre`, `Apellido`, `Edad`, `Telefono`) VALUES
(1312, 'Pablo', 'Herrera', 35, 213213),
(12345678, 'Jose', 'Araya', 45, 123132132),
(123456789, 'Carlos', 'Hernandez', 28, 12345678),
(234567891, 'Juan', 'Lopez', 35, 4509876);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(100) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Usuario`, `Contrasena`, `Email`, `Nombre`, `Apellido`) VALUES
(1, 'test', '827ccb0eea8a706c4c34a16891f84e7b', 'test@test.com', 'Test', 'Test'),
(2, 'Test2', '827ccb0eea8a706c4c34a16891f84e7b', 'test2@yahoo.com', 'Test2', 'Test2'),
(3, 'Test3', 'fcea920f7412b5da7be0cf42b8c93759', 'Test3@gmail.com', 'Test3', 'Test3'),
(4, 'Test4', '42f749ade7f9e195bf475f37a44cafcb', 'Test4@hotmail.com', 'Test4', 'Test4'),
(5, 'Test5', '827ccb0eea8a706c4c34a16891f84e7b', 'Test5@hotmail.com', 'Test5', 'Test5'),
(6, 'Test6', '42f749ade7f9e195bf475f37a44cafcb', 'Test6@yahoo.com', 'Test6', 'Test6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD UNIQUE KEY `Cedula` (`Cedula`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
