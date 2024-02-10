-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2023 a las 03:46:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarea1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `cedula`, `nombre`, `apellido`, `carrera`, `usuario`, `password`) VALUES
(1, 0, 'ADMIN', 'ADMIN', 'NA', 'ADMIN', 'ADMIN'),
(2, 26911225, 'wilsber', 'herrera', 'informatica', 'wilsberh', 'GeekYolo'),
(3, 27047530, 'jesus', 'pacheco', 'informatica', 'jesusdcsk', 'jesus123'),
(4, 1515151515, 'John', 'labrador', 'informatica', 'johnlab', 'password1'),
(5, 1616161616, 'Juan', 'perez', 'Administracion de empresas', 'juanp', 'password1'),
(6, 1234567890, 'John', 'Doe', 'Administracion de empresas', 'johndoe', 'password1'),
(7, 2147483647, 'Jane', 'Smith', 'Informatica', 'janesmith', 'password2'),
(8, 1111111111, 'Michael', 'Johnson', 'Comercio exterior', 'michaeljohnson', 'password3'),
(9, 2147483647, 'Emily', 'Williams', 'Administracion tributaria', 'emilywilliams', 'password4'),
(10, 2147483647, 'Daniel', 'Brown', 'Informatica', 'danielbrown', 'password5'),
(11, 2147483647, 'Olivia', 'Jones', 'Administracion de empresas', 'oliviajones', 'password6'),
(12, 2147483647, 'David', 'Davis', 'Comercio exterior', 'daviddavis', 'password7'),
(13, 2147483647, 'Sophia', 'Miller', 'Administracion de empresas', 'sophiamiller', 'password8'),
(14, 2147483647, 'James', 'Anderson', 'Comercio exterior', 'jamesanderson', 'password9'),
(15, 2147483647, 'Ava', 'Wilson', 'Administracion tributaria', 'avawilson', 'password10'),
(16, 2147483647, 'Joseph', 'Taylor', 'Comercio exterior', 'josephtaylor', 'password11'),
(17, 1212121212, 'Mia', 'Thomas', 'Administracion tributaria', 'miathomas', 'password12'),
(18, 2147483647, 'Benjamin', 'Moore', 'Administracion de empresas', 'benjaminmoore', 'password13'),
(19, 2147483647, 'Charlotte', 'Jackson', 'Informatica', 'charlottejackson', 'password14'),
(20, 2147483647, 'Henry', 'White', 'Administracion tributaria', 'henrywhite', 'password15'),
(21, 2147483647, 'Harper', 'Harris', 'Comercio exterior', 'harperharris', 'password16'),
(22, 2147483647, 'Elijah', 'Martin', 'Administracion de empresas', 'elijahmartin', 'password17'),
(23, 2147483647, 'Amelia', 'Thompson', 'Informatica', 'ameliathompson', 'password18'),
(24, 2147483647, 'Daniel', 'Garcia', 'Administracion tributaria', 'danielgarcia', 'password19'),
(25, 2147483647, 'Sofia', 'Lee', 'Comercio exterior', 'sofialee', 'password20'),
(26, 1010101010, 'Alexander', 'Lewis', 'Administracion de empresas', 'alexanderlewis', 'password21'),
(27, 1111111111, 'Mila', 'Hall', 'Informatica', 'milahall', 'password22'),
(28, 1212121212, 'Daniel', 'Young', 'Administracion tributaria', 'danielyoung', 'password23'),
(29, 1313131313, 'Emily', 'Clark', 'Administracion de empresas', 'emilyclark', 'password24'),
(30, 1414141414, 'William', 'King', 'Informatica', 'williamking', 'password25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
