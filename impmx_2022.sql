-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-05-2022 a las 00:01:17
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eurosonl_impmx2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

DROP TABLE IF EXISTS `tbl_categorias`;
CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

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
(58, 'Team Shines Mixto Bachata', 'grupos', 0),
(59, 'Solista Bachata Femenino Alumna', 'solistas', 0),
(60, 'Bachata Dúos Femenino Open', 'parejas', 0),
(61, 'Parejas Bachata Pro-Am Over 65', 'parejas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados`
--

DROP TABLE IF EXISTS `tbl_estados`;
CREATE TABLE IF NOT EXISTS `tbl_estados` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Estructura de tabla para la tabla `tbl_grupos`
--

DROP TABLE IF EXISTS `tbl_grupos`;
CREATE TABLE IF NOT EXISTS `tbl_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_insc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nom_repre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_repre` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais_grupo` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_repre` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nom_grupo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `integrantes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `fecharegistro_p` datetime DEFAULT NULL,
  `cod_insc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numintegrantes` int(2) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `invoiceid` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paymenthmethod` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idform` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'grupos',
  `num_auto` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomcomprobante` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_grupos`
--

INSERT INTO `tbl_grupos` (`id`, `categoria_insc`, `nom_repre`, `celular_repre`, `pais_grupo`, `email_repre`, `nom_grupo`, `integrantes`, `fecharegistro_p`, `cod_insc`, `numintegrantes`, `status`, `invoiceid`, `paymenthmethod`, `idform`, `num_auto`, `nomcomprobante`) VALUES
(1, '51', 'Alexis Velasco Salazar', '2223521968', '21', 'wendolyne.velascos@gmail.com', 'Kimbara Team', '{\"idnumintegrantes0\":\"Karla Andrea Avenda\\u00f1o L\\u00f3pez\",\"date_birthday0\":\"2001-03-30\",\"generoint0\":\"Femenino\",\"codfullpass0\":\"RIBVB4259\",\"idnumintegrantes1\":\"Shareny Getsemani De Jes\\u00fas Porras\",\"date_birthday1\":\"2004-07-22\",\"generoint1\":\"Femenino\",\"codfullpass1\":\"ZXRHH4601\",\"idnumintegrantes2\":\"Shirley Dyanne T\\u00e9llez Mendoza\",\"date_birthday2\":\"1999-03-31\",\"generoint2\":\"Femenino\",\"codfullpass2\":\"GLWRO4740\",\"idnumintegrantes3\":\"Rodrigo De Jes\\u00fas Porras\",\"date_birthday3\":\"2001-09-06\",\"generoint3\":\"Masculino\",\"codfullpass3\":\"CDFFX7195\",\"idnumintegrantes4\":\"Rodrigo Velazquez Avila\",\"date_birthday4\":\"2004-11-29\",\"generoint4\":\"Masculino\",\"codfullpass4\":\"ILRHE2498\",\"idnumintegrantes5\":\"Juan Manuel Ju\\u00e1rez P\\u00e9rez\",\"date_birthday5\":\"1996-06-18\",\"generoint5\":\"Masculino\",\"codfullpass5\":\"XKZVI1197\",\"idnumintegrantes6\":\" Alan Moreno Ahuacatitan\",\"date_birthday6\":\"1993-02-13\",\"generoint6\":\"Masculino\",\"codfullpass6\":\"HVKMV4073\",\"idnumintegrantes7\":\"Ver\\u00f3nica Guill\\u00e9n Ju\\u00e1rez\",\"date_birthday7\":\"1995-08-12\",\"generoint7\":\"Femenino\",\"codfullpass7\":\"XUEWX3718\"}', '2022-04-26 16:52:52', 'GLBP7920', 8, 0, NULL, NULL, 'grupos', NULL, 'GLBP7920_278767393_761797244791516_2160641378899831414_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parejas`
--

DROP TABLE IF EXISTS `tbl_parejas`;
CREATE TABLE IF NOT EXISTS `tbl_parejas` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `fecha_deposito` datetime DEFAULT NULL,
  `monto_pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_auto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `via_pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad_pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adjunto_pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_insc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacp1` date DEFAULT NULL,
  `email_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codfullpass_p1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacp2` date DEFAULT NULL,
  `email_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codfullpass_p2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `enteraste_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `expectativa_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecharegistro_p` datetime DEFAULT NULL,
  `cod_insc` int(6) DEFAULT NULL,
  `invoiceid` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paymenthmethod` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idform` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'parejas',
  `status` int(1) NOT NULL DEFAULT 0,
  `nomcomprobante` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_parejas`
--

INSERT INTO `tbl_parejas` (`id`, `fecha_deposito`, `monto_pago`, `num_auto`, `via_pago`, `estado_pago`, `ciudad_pago`, `adjunto_pago`, `categoria_insc`, `nombre_p1`, `apellidos_p1`, `fecha_nacp1`, `email_p1`, `genero_p1`, `estado_p1`, `ciudad_p1`, `celular_p1`, `codfullpass_p1`, `nombre_p2`, `apellidos_p2`, `fecha_nacp2`, `email_p2`, `genero_p2`, `estado_p2`, `ciudad_p2`, `celular_p2`, `codfullpass_p2`, `enteraste_p`, `expectativa_p`, `fecharegistro_p`, `cod_insc`, `invoiceid`, `paymenthmethod`, `idform`, `status`, `nomcomprobante`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20', 'Kenia', 'Aguilar Domínguez', '1992-01-31', 'dancistika@gmail.com', 'Femenino', '17', NULL, '7771916675', ' BOYDB4460', 'arturo ', 'Ruiz Carmona', '1990-02-08', 'dancistika@gmail.com', 'Masculino', '17', NULL, '7771035513', 'OQUJE4030', NULL, NULL, '2022-04-25 22:33:06', 0, NULL, NULL, 'parejas', 0, 'P0HK1833_IMG_20220211_125621.jpg'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24', 'LUIS ERNESTO ', 'LOPEZ NUÑEZ', '1983-03-17', 'ernesto170383@gmail.com', 'Masculino', '7', NULL, '2226837040', 'IATEG2559', 'KARINA', 'GARCIA BENITEZ', '1995-03-21', 'kariigabe21@gmail.com', 'Femenino', '21', NULL, '2224818014', 'COLOW9249', NULL, NULL, '2022-04-27 15:12:52', 0, NULL, NULL, 'parejas', 0, 'ZYZE3905_WhatsApp Image 2022-03-29 at 11.51.39 AM (1).jpeg'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42', 'JOSE RAUL ', 'GARCIA LUGO', '1987-12-31', 'jraul.garcia31@gmail.com', 'Masculino', '19', NULL, '8115879024', 'EBWNQ2117', 'ALICIA MARIA ', 'TREJO TREVIÑO', '1991-03-15', 'alytrejo_091@hotmail.com', 'Femenino', '19', NULL, '81 1040 4188', 'TNWWC3487', NULL, NULL, '2022-04-29 13:08:20', 77, NULL, NULL, 'parejas', 0, '77TU1623_Screenshot_20220427-081848.jpg'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '41', 'Yaheli', 'Ruiz', '1996-12-26', 'gr.procesos.empresariales@gmail.com', 'Femenino', '16', NULL, '4432717114', 'XMYIP9332', 'Jonathan', 'Guzmán', '1994-03-14', 'jonathanagt1@gmail.com', 'Masculino', '16', NULL, '4431889505', 'CSSPJ7164', NULL, NULL, '2022-05-01 15:20:29', 0, NULL, NULL, 'parejas', 0, 'HQFF5561_IMG-20220501-WA0000.jpg'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30', 'Bernardo ', 'LOPEZ MATEOS', '1971-10-18', 'blopezmateos@yahoo.com.mx', 'Masculino', '15', NULL, '5523213836', 'PQOBH1468', 'Nohemi ', 'León Zuñiga', '1980-11-10', 'blopezmateos@yahoo.com.mx', 'Femenino', '15', NULL, '5523213836', 'SXOSL3249', NULL, NULL, '2022-05-02 10:32:33', 9, NULL, NULL, 'parejas', 0, '9LIK2401_comprobante inscripción.pdf'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31', 'Adolfo', 'Lamadrid Marín', '1960-11-14', 'adolfo.lamadrid@gmail.com', 'Masculino', '19', NULL, '8110806302', 'XJXWQ8521', 'Alicia ', 'Trejo Treviño', '1991-03-15', 'alytrejo_091@hotmail.com', 'Femenino', '19', NULL, '8110404188', 'TNWWC3487', NULL, NULL, '2022-05-02 11:18:27', 0, NULL, NULL, 'parejas', 0, 'Z1G32754_Comprobante inscripción Salsa-Pro-am over 65 Adolfo y Aly.jpg'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61', 'Adolfo', 'Lamadrid Marín', '1960-11-14', 'adolfo.lamadrid@gmail.com', 'Masculino', '19', NULL, '8110806302', 'XJXWQ8521', 'Alicia ', 'Trejo Treviño', '1991-03-15', 'alytrejo_091@hotmail.com', 'Femenino', '19', NULL, '8110404188', 'TNWWC3487', NULL, NULL, '2022-05-02 12:17:14', 0, NULL, NULL, 'parejas', 0, 'Z8HA5966_Comprobante inscripción Bachata-Pro-am over 65 Adolfo y Aly.jpg'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '38', 'Maritza Alejandra', 'Toledo Rodríguez', '1993-06-15', 'm.a.toledo1506@gmail.com', 'Femenino', '7', NULL, '9612381790', 'IBAJG6448', 'Ivonne', 'Ramírez Molina', '1999-03-10', 'ivonneramirezmolina@outlook.es', 'Femenino', '7', NULL, '9611432617', 'KXBHX3991', NULL, NULL, '2022-05-02 14:09:36', 0, NULL, NULL, 'parejas', 0, 'P8X07378_WhatsApp Image 2022-04-30 at 12.40.15 PM.jpeg'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44', 'ERIKA LIZBETH', 'RODRIGUEZ ARIAS', '1989-07-26', 'erika_e26@hotmail.com', 'Femenino', '16', NULL, '4432856383', 'KLEFZ9370', 'MIGUEL ANGEL', 'GARDUÑO RESENDIZ', '1996-08-04', 'rosevenom_skate@hotmail.com', 'Masculino', '16', NULL, '4432216600', 'ZEOZL4815', NULL, NULL, '2022-05-02 23:03:40', 0, NULL, NULL, 'parejas', 0, 'WVT11000_Inscripcion.jpg'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '41', 'ARMANDO', 'BARRANCO', '1990-07-24', 'armandouchija@gmail.com', 'Masculino', '20', NULL, '9511581900', 'WHWOX7946', 'EMI', 'VERA', '2002-11-13', 'eduemily09@gmail.com', 'Femenino', '2', NULL, '6461317479', 'PETWK5044', NULL, NULL, '2022-05-03 00:08:45', 0, NULL, NULL, 'parejas', 0, 'HA9B8148_EMI.pdf'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31', 'ARMANDO', 'BARRANCO', '1990-07-24', 'armandouchija@gmail.com', 'Masculino', '20', NULL, '9511581900', 'WHWOX7946', 'MARIA LUISA', 'PUGA', '1974-04-17', 'mariestetica2@gmail.com', 'Femenino', '21', NULL, '2221368176', 'UYHBE3329', NULL, NULL, '2022-05-03 00:14:56', 88, NULL, NULL, 'parejas', 0, '88NU4901_INCRIPCION.pdf'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '41', 'ARMANDO', 'BARRANCO', '1990-07-24', 'armandouchija@gmail.com', 'Masculino', '20', NULL, '9511581900', 'WHWOX7946', 'ANAHI', 'SANCHEZ', '1998-09-07', 'sannah77235@gmail.com', 'Masculino', '21', NULL, '2224873263', 'SFGSY9354', NULL, NULL, '2022-05-03 00:18:28', 0, NULL, NULL, 'parejas', 0, 'CBTP5397_INCRIPCION.pdf'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46', 'Neftali', 'Padilla', '1990-01-18', 'turitmosensual@outlook.com', 'Masculino', '23', NULL, '9981330347', 'FUCYJ9227', 'Natali', 'Goldman', '1992-06-04', 'turitmosensual@outlook.com', 'Femenino', '23', NULL, '9982273811', 'ANMZG5249', NULL, NULL, '2022-05-03 01:07:35', 0, NULL, NULL, 'parejas', 0, 'TCMV4171_585BF1F4-0B9F-4913-B2F7-67ACD9B65D78.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_solistas`
--

DROP TABLE IF EXISTS `tbl_solistas`;
CREATE TABLE IF NOT EXISTS `tbl_solistas` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
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
  `idform` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'solistas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_solistas`
--

INSERT INTO `tbl_solistas` (`id`, `categoria_insc`, `nombre_p`, `apellidos_p`, `fecha_nac`, `email_p`, `genero_p`, `estado_p`, `ciudad_p`, `celular_p`, `fecharegistro_p`, `cod_insc`, `codfullpass`, `status`, `invoiceid`, `paymenthmethod`, `nomcomprobante`, `idform`) VALUES
(28, '9', 'DIANA', 'RAMIREZ MUÑOZ', '1987-09-19', 'diana.ramuz1987@gmail.com', 'Femenino', '5', 'TORREÓN', '8711338167', '2022-04-19 12:51:16', 'BK6W6827', 'IERUH1199', 0, NULL, NULL, 'BK6W6827_WhatsApp Image 2022-04-19 at 12.40.32 PM.jpeg', 'solistas'),
(29, '3', 'heriberto', 'gomez franco', '1992-06-22', 'salsaynomas@hotmail.com', 'Masculino', '8', 'chihuahua', '6142137374', '2022-04-25 19:12:36', '1DJ42426', '250422', 0, NULL, NULL, '1DJ42426_comprobante_transferencia   1699.pdf', 'solistas'),
(31, '59', 'Ivany ', 'De la Ossa', '2000-07-18', 'ivanydelaossa@hotmail.com', 'Femenino', '21', 'Puebla', '2212171171', '2022-04-26 00:15:00', '37T93433', 'IMPMX2022APDP01', 0, NULL, NULL, '37T93433_tempImageoZI0FV.png', 'solistas'),
(32, '15', 'Ingrid', 'Tepoxteco Aguilar', '1995-10-14', 'tepoxtecoa.ingrid@gmail.com', 'Femenino', '17', 'Tepalcingo', '7352145071', '2022-04-26 15:09:26', 'W2N85808', 'XRQOB2761', 0, NULL, NULL, 'W2N85808_2022-04-22_12-01-38.jpg', 'solistas'),
(33, '5', 'Angel Samir', 'Sanchez  Ventura', '2011-06-07', 'wendolyne.velascos@gmail.com', 'Masculino', '21', 'Puebla', '2223521968', '2022-04-26 16:32:07', 'QSUB2414', 'HVEQW8016', 0, NULL, NULL, 'QSUB2414_278767393_761797244791516_2160641378899831414_n.jpg', 'solistas'),
(34, '17', 'JOSE RAUL ', 'GARCIA LUGO ', '1987-12-31', 'jraul.garcia31@gmail.com', 'Masculino', '19', 'SAN NICOLAS DE LOS GARZA', '8115879024', '2022-04-29 13:12:38', 'GWBB2720', 'EBWNQ2117', 0, NULL, NULL, 'GWBB2720_Screenshot_20220427-081848.jpg', 'solistas'),
(35, '3', 'JOSE RAUL ', 'GARCIA LUGO ', '1987-12-31', 'jraul.garcia31@gmail.com', 'Masculino', '19', 'SAN NICOLAS DE LOS GARZA', '8115879024', '2022-04-29 13:14:45', 'HS435389', 'EBWNQ2117', 0, NULL, NULL, 'HS435389_Screenshot_20220427-081848.jpg', 'solistas'),
(36, '7', 'Rafael ', 'Gonzalez  Centeno ', '1976-04-06', 'cousen06@gmail.com', 'Masculino', '21', 'Puebla ', '2221168621', '2022-05-02 07:42:52', 'KCP44328', 'Aún no lo envían ', 0, NULL, NULL, 'KCP44328_AB2F378F-A4C5-4352-8E92-85C8AD156933.jpeg', 'solistas'),
(37, '8', 'Maritza Alejandra', 'Toledo Rodríguez', '1993-06-15', 'm.a.toledo1506@gmail.com', 'Femenino', '7', 'Tuxtla Gutiérrez', '9612381790', '2022-05-02 14:12:43', 'DJ3X5620', 'IBAJG6448', 0, NULL, NULL, 'DJ3X5620_WhatsApp Image 2022-04-30 at 12.40.15 PM (1).jpeg', 'solistas'),
(38, '16', 'ARMANDO', 'BARRANCO', '1990-07-24', 'armandouchija@gmail.com', 'Masculino', '20', 'oaxaca de juarez', '9511581900', '2022-05-02 23:11:47', 'TWU82847', 'WHWOX7946', 0, NULL, NULL, 'TWU82847_WhatsApp Image 2022-05-02 at 10.23.26 AM.pdf', 'solistas'),
(39, '3', 'Claudio', 'Cortés González', '1997-07-21', 'claudio.hihat@hotmail.com', 'Masculino', '21', 'Puebla', '2225082346', '2022-05-02 23:43:08', '9HZN1075', 'NTNJQ8411', 0, NULL, NULL, '9HZN1075_Comprobante inscripción.pdf', 'solistas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
