-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2022 a las 06:38:08
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `impmx_2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id` int(5) NOT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id`, `categoria`, `tipo`, `status`) VALUES
(1, 'Solista Salsa Masculino Profesional', 'solistas', 0),
(2, 'Solista Salsa Masculino Semipro', 'solistas', 0),
(3, 'Solista Salsa Masculino Amateur', 'solistas', 0),
(4, 'Solista Salsa Masculino Junior (13-17 años)', 'solistas', 0),
(5, 'Solista Salsa Masculino Infantil (8-12 años)', 'solistas', 0),
(6, 'Solista Salsa Masculino Baby (4-7 años)', 'solistas', 0),
(7, 'Solista Salsa Masculino Alumno', 'solistas', 0),
(8, 'Solista Salsa Femenino Profesional', 'solistas', 0),
(9, 'Solista Salsa Femenino Semipro', 'solistas', 0),
(10, 'Solista Salsa Femenino Over 40/50 Femenino', 'solistas', 0),
(11, 'Solista Salsa Femenino Amateur', 'solistas', 0),
(12, 'Solista Salsa Femenino Junior (13-17 años)', 'solistas', 0),
(13, 'Solista Salsa Femenino Infantil (8-12 años)', 'solistas', 0),
(14, 'Solista Salsa Femenino Baby (4-7 años)', 'solistas', 0),
(15, 'Solista Salsa Femenino Alumna', 'solistas', 0),
(16, 'Solista Bachata Masculino Profesional', 'solistas', 0),
(17, 'Solista Bachata Masculino Amateur', 'solistas', 0),
(18, 'Solista Bachata Femenino Profesional', 'solistas', 0),
(19, 'Solista Bachata Femenino Amateur', 'solistas', 0),
(20, 'Parejas Salsa Profesional On 1', 'parejas', 0),
(21, 'Parejas Salsa Profesional On 2', 'parejas', 0),
(22, 'Parejas Salsa Profesional Cabaret', 'parejas', 0),
(23, 'Parejas Salsa Semipro Rising Star', 'parejas', 0),
(24, 'Parejas Salsa Pro-Am Hombre Pro/Mujer Amateur', 'parejas', 0),
(25, 'Parejas Salsa Pro-Am Mujer Pro/Hombre Amateur', 'parejas', 0),
(26, 'Parejas Salsa Amateur', 'parejas', 0),
(27, 'Parejas Salsa Junior (13-17 años)', 'parejas', 0),
(28, 'Parejas Salsa Infantil (8-12 años)', 'parejas', 0),
(29, 'Parejas Salsa Alumnos', 'parejas', 0),
(30, 'Parejas Salsa Over 65/75 Amateur', 'parejas', 0),
(31, 'Parejas Salsa Over 65/75 Pro-Am', 'parejas', 0),
(32, 'Parejas Salsa Grande Petit (Pro-Niñ@ edad 6-13 años)', 'parejas', 0),
(33, 'Parejas Salsa Masculino Same Gender Open No Cabaret', 'parejas', 0),
(34, 'Parejas Salsa Femenino Same Gender Open No Cabaret', 'parejas', 0),
(35, 'Parejas Salsa Masculino Same Gender Open Cabaret', 'parejas', 0),
(36, 'Parejas Salsa Femenino Same Gender Open Cabaret', 'parejas', 0),
(37, 'Dúos Shines Salsa Masculino (Abierta)', 'parejas', 0),
(38, 'Dúos Shines Salsa Femenino (Abierta)', 'parejas', 0),
(39, 'Dúos Shines Salsa Masculino (Amateur)', 'parejas', 0),
(40, 'Dúos Shines Salsa Femenino (Amateur)', 'parejas', 0),
(41, 'Parejas Bachata Pro-Am Hombre Pro/Mujer Amateur', 'parejas', 0),
(42, 'Parejas Bachata Pro-Am Mujer Pro/Hombre Amateur', 'parejas', 0),
(43, 'Parejas Bachata Semi-Pro Rising Star', 'parejas', 0),
(44, 'Parejas Bachata Amateur', 'parejas', 0),
(45, 'Parejas Bachata Alumnos', 'parejas', 0),
(46, 'Parejas Kizomba Fusión (Abierta)', 'parejas', 0),
(47, 'Parejas Bachata Profesional No Cabaret', 'parejas', 0),
(48, 'Parejas Bachata Profesional Cabaret', 'parejas', 0),
(49, 'Grupos Salsa Amateur (4 parejas Min)', 'grupos', 0),
(50, 'Grupos Salsa Pro-Am (4 parejas Min)', 'grupos', 0),
(51, 'Grupos Salsa Alumnos (4 parejas Min)', 'grupos', 0),
(52, 'Grupos Bachata Amateur (4 parejas Min)', 'grupos', 0),
(53, 'Grupos Bachata Pro-Am (4 parejas Min)', 'grupos', 0),
(54, 'Grupos Bachata Alumnos (4 parejas Min)', 'grupos', 0),
(55, 'Team Shines Masculino Open (Int. 4-16 max)', 'grupos', 0),
(56, 'Team Shines Femenino Open (Int. 4-16 max)', 'grupos', 0),
(57, 'Team Shines Mixto Salsa', 'grupos', 0),
(58, 'Team Shines Mixto Bachata', 'grupos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados`
--

CREATE TABLE `tbl_estados` (
  `id` int(55) NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_estados`
--

INSERT INTO `tbl_estados` (`id`, `estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila de Zaragoza'),
(6, 'Colima'),
(7, 'Chiapas'),
(8, 'Chihuahua'),
(9, 'Ciudad de México'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'México'),
(16, 'Michoacán de Ocampo'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_solistas`
--

CREATE TABLE `tbl_solistas` (
  `id` int(55) NOT NULL,
  `categoria_insc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecharegistro_p` datetime DEFAULT NULL,
  `cod_insc` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codfullpass` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(2) DEFAULT 0,
  `invoiceid` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paymenthmethod` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomcomprobante` text COLLATE utf8_spanish_ci NOT NULL,
  `idform` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'solistas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_solistas`
--

INSERT INTO `tbl_solistas` (`id`, `categoria_insc`, `nombre_p`, `apellidos_p`, `fecha_nac`, `email_p`, `genero_p`, `estado_p`, `ciudad_p`, `celular_p`, `fecharegistro_p`, `cod_insc`, `codfullpass`, `status`, `invoiceid`, `paymenthmethod`, `nomcomprobante`, `idform`) VALUES
(1, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:42:03', 'QQDPDV4S6908', '6516516516', 0, NULL, NULL, '', 'solistas'),
(2, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:42:23', 'SF2JAFTV1582', '6516516516', 0, NULL, NULL, '', 'solistas'),
(3, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:43:27', 'XQ8E1512', '6516516516', 0, NULL, NULL, '', 'solistas'),
(4, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:43:44', 'LKXM3372', '6516516516', 0, NULL, NULL, '', 'solistas'),
(5, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:44:12', 'KYSW7656', '6516516516', 0, NULL, NULL, '', 'solistas'),
(6, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:56:24', 'XNSN5119', '6516516516', 0, NULL, NULL, '', 'solistas'),
(7, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:56:57', 'WHKY7035', '6516516516', 0, NULL, NULL, '', 'solistas'),
(8, '15', 'Bryan', 'Romero', '2022-04-28', 'bryan.martinez.romero@gmail.com', 'Masculino', '10', 'Puebla', '8183273074', '2022-04-05 14:58:04', '26VG8450', '6516516516', 0, NULL, NULL, '', 'solistas'),
(9, '12', 'Bryan', 'Romero', '2022-04-14', 'bryan.martinez.romero@gmail.com', 'Masculino', '11', 'Puebla', '8183273074', '2022-04-05 15:02:08', 'DG0J6996', '6516516516', 0, NULL, NULL, 'image_2022_04_04T21_20_50_518Z.png', 'solistas'),
(10, '10', 'Bryan', 'Romero', '2022-04-09', 'bryan.martinez.romero@gmail.com', 'Masculino', '5', 'Puebla', '8183273074', '2022-04-07 22:41:33', 'L3EI6937', 'IWZLW7016', 0, NULL, NULL, 'L3EI6937_original_JAI-UR01002.jpg', 'solistas'),
(11, '10', 'Bryan', 'Romero', '2022-04-09', 'bryan.martinez.romero@gmail.com', 'Masculino', '5', 'Puebla', '8183273074', '2022-04-07 23:03:55', 'O0KI2402', 'IWZLW7016', 0, NULL, NULL, 'O0KI2402_original_JAI-UR01002.jpg', 'solistas'),
(12, '10', 'Bryan', 'Romero', '2022-04-09', 'bryan.martinez.romero@gmail.com', 'Masculino', '5', 'Puebla', '8183273074', '2022-04-07 23:06:00', 'UQ4Q6443', 'IWZLW7016', 0, NULL, NULL, 'UQ4Q6443_original_JAI-UR01002.jpg', 'solistas'),
(13, '19', 'Bryan', 'Romero', '2022-04-09', 'bryan.martinez.romero@gmail.com', 'Masculino', '2', 'Puebla', '8183273074', '2022-04-07 23:06:46', 'MN657989', 'IWZLW7016', 0, NULL, NULL, 'MN657989_original_JAI-UR01002.jpg', 'solistas'),
(14, '14', 'Bryan', 'Romero', '2022-04-22', 'bryan.martinez.romero@gmail.com', 'Masculino', '6', 'Puebla', '8183273074', '2022-04-07 23:14:50', '0ATM6240', 'IWZLW7016', 0, NULL, NULL, '0ATM6240_6064314283_c97b142c95_b.jpg', 'solistas'),
(15, '17', 'Bryan', 'Romero', '1992-05-13', 'bryanmzrom@gmail.com', 'Masculino', '21', 'Puebla', '8183273074', '2022-04-07 23:25:36', 'UT8W7375', 'IWZLW7016', 0, NULL, NULL, 'UT8W7375_6064314283_c97b142c95_b.jpg', 'solistas'),
(16, '17', 'Bryan', 'Romero', '1992-05-13', 'bryanmzrom@gmail.com', 'Masculino', '21', 'Puebla', '8183273074', '2022-04-07 23:26:03', '5TOI5644', 'IWZLW7016', 0, NULL, NULL, '5TOI5644_6064314283_c97b142c95_b.jpg', 'solistas'),
(17, '6', 'Bryan', 'Romero', '1992-05-13', 'bryanmzrom@gmail.com', 'Masculino', '21', 'Puebla', '8183273074', '2022-04-07 23:27:35', '2OO47890', 'IWZLW7016', 0, NULL, NULL, '2OO47890_6064314283_c97b142c95_b.jpg', 'solistas'),
(18, '6', 'Bryan', 'Romero', '1992-05-13', 'bryanmzrom@gmail.com', 'Masculino', '21', 'Puebla', '8183273074', '2022-04-07 23:31:10', 'CMOC4817', 'IWZLW7016', 0, NULL, NULL, 'CMOC4817_6064314283_c97b142c95_b.jpg', 'solistas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_solistas`
--
ALTER TABLE `tbl_solistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tbl_solistas`
--
ALTER TABLE `tbl_solistas`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
