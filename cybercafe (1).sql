-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 07:09:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cybercafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `Procesador` varchar(100) NOT NULL,
  `Tarjetagrafica` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `Discoduro` varchar(100) NOT NULL,
  `Monitor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadora`
--

INSERT INTO `computadora` (`Procesador`, `Tarjetagrafica`, `RAM`, `Discoduro`, `Monitor`) VALUES
('Intel 9', 'GTX 1040 Ti', '16 gb', '1 Tb', '32 Pulgadas'),
('Intel 9', 'GTX 1040 Ti', '16 gb', '1 Tb', '32 Pulgadas'),
('intel4', 'GTX 1040 Ti', '8 gb', '1 Tb', '32 Pulgadas'),
('intel 3', 'GTX 1040 Ti', '16 gb', '6gb', ' 27 Pulgadas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
