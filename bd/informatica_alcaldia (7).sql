-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 01:36:03
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `informatica_alcaldia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `actividad` text NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=805 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_registro`, `actividad`, `fecha_hora`) VALUES
(600, 1, 'Inicio sesion en la Sistema Web', '2020-03-25 23:33:52'),
(601, 1, 'Cerro su sesion en el Sistema Web', '2020-03-25 23:33:56'),
(602, 2, 'Inicio sesion en la Sistema Web', '2020-03-25 23:34:53'),
(603, 1, 'Inicio sesion en la Sistema Web', '2020-03-26 17:59:03'),
(604, 1, 'Inicio sesion en la Sistema Web', '2020-03-26 18:49:22'),
(605, 1, 'Inicio sesion en la Sistema Web', '2020-03-26 20:05:32'),
(606, 1, 'Inicio sesion en la Sistema Web', '2020-03-27 12:10:37'),
(607, 1, 'Cerro su sesion en el Sistema Web', '2020-03-27 12:24:44'),
(608, 1, 'Inicio sesion en la Sistema Web', '2020-03-27 12:33:54'),
(609, 1, 'Cerro su sesion en el Sistema Web', '2020-03-27 13:15:46'),
(610, 1, 'Inicio sesion en la Sistema Web', '2020-03-27 13:19:44'),
(611, 1, 'Inicio sesion en la Sistema Web', '2020-03-29 13:55:37'),
(612, 1, 'Cerro su sesion en el Sistema Web', '2020-03-29 17:27:57'),
(613, 1, 'Inicio sesion en la Sistema Web', '2020-03-29 17:29:29'),
(614, 1, 'Inicio sesion en la Sistema Web', '2020-03-29 19:30:21'),
(615, 1, 'Inicio sesion en la Sistema Web', '2020-03-30 20:35:10'),
(616, 1, 'Inicio sesion en la Sistema Web', '2020-03-31 21:55:44'),
(617, 1, 'Inicio sesion en la Sistema Web', '2020-04-03 16:42:51'),
(618, 1, 'Inicio sesion en la Sistema Web', '2020-04-04 15:19:31'),
(619, 1, 'Inicio sesion en la Sistema Web', '2020-04-04 23:30:57'),
(620, 1, 'Inicio sesion en la Sistema Web', '2020-04-05 13:31:57'),
(621, 1, 'Inicio sesion en la Sistema Web', '2020-04-05 19:38:20'),
(622, 1, 'Inicio sesion en la Sistema Web', '2020-04-05 22:51:42'),
(623, 1, 'Inicio sesion en la Sistema Web', '2020-04-05 23:31:59'),
(624, 1, 'Inicio sesion en la Sistema Web', '2020-04-09 17:17:21'),
(625, 1, 'Inicio sesion en la Sistema Web', '2020-05-02 22:11:59'),
(626, 1, 'Cerro su sesion en el Sistema Web', '2020-05-02 22:37:53'),
(627, 1, 'Inicio sesion en la Sistema Web', '2020-05-02 22:40:04'),
(628, 1, 'Inicio sesion en la Sistema Web', '2020-05-08 23:45:46'),
(629, 1, 'Cerro su sesion en el Sistema Web', '2020-05-09 01:54:35'),
(630, 1, 'Inicio sesion en la Sistema Web', '2020-05-09 01:55:29'),
(631, 1, 'Cerro su sesion en el Sistema Web', '2020-05-09 01:55:32'),
(632, 1, 'Inicio sesion en la Sistema Web', '2020-05-09 02:29:26'),
(633, 1, 'Cerro su sesion en el Sistema Web', '2020-05-09 02:29:30'),
(634, 2, 'Inicio sesion en la Sistema Web', '2020-05-09 02:29:35'),
(635, 1, 'Inicio sesion en la Sistema Web', '2020-05-09 02:29:47'),
(636, 1, 'Inicio sesion en la Sistema Web', '2020-05-09 18:31:34'),
(637, 1, 'Cerro su sesion en el Sistema Web', '2020-05-09 20:50:20'),
(638, 3, 'Inicio sesion en la Sistema Web', '2020-05-09 20:50:32'),
(639, 3, 'Inicio sesion en la Sistema Web', '2020-05-09 20:53:19'),
(640, 3, 'Inicio sesion en la Sistema Web', '2020-05-09 20:53:39'),
(641, 3, 'Cerro su sesion en el Sistema Web', '2020-05-09 22:15:27'),
(642, 1, 'Inicio sesion en la Sistema Web', '2020-05-09 22:15:32'),
(643, 1, 'Cerro su sesion en el Sistema Web', '2020-05-09 22:15:40'),
(644, 3, 'Inicio sesion en la Sistema Web', '2020-05-09 22:15:48'),
(645, 1, 'Inicio sesion en la Sistema Web', '2020-05-10 14:25:51'),
(646, 1, 'Cerro su sesion en el Sistema Web', '2020-05-10 15:19:59'),
(647, 1, 'Inicio sesion en la Sistema Web', '2020-05-10 15:21:36'),
(648, 1, 'Cerro su sesion en el Sistema Web', '2020-05-10 17:12:16'),
(649, 3, 'Inicio sesion en la Sistema Web', '2020-05-10 17:12:25'),
(650, 3, 'Cerro su sesion en el Sistema Web', '2020-05-10 17:53:00'),
(651, 1, 'Inicio sesion en la Sistema Web', '2020-05-10 17:53:50'),
(652, 1, 'Inicio sesion en la Sistema Web', '2020-05-10 17:54:04'),
(653, 1, 'Cerro su sesion en el Sistema Web', '2020-05-10 19:15:25'),
(654, 1, 'Inicio sesion en la Sistema Web', '2020-05-10 20:24:54'),
(655, 1, 'Cerro su sesion en el Sistema Web', '2020-05-10 21:12:45'),
(656, 3, 'Inicio sesion en la Sistema Web', '2020-05-10 21:12:52'),
(657, 3, 'Cerro su sesion en el Sistema Web', '2020-05-10 21:14:34'),
(658, 1, 'Inicio sesion en la Sistema Web', '2020-05-11 19:26:46'),
(659, 1, 'Cerro su sesion en el Sistema Web', '2020-05-11 19:28:05'),
(660, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 00:26:42'),
(661, 1, 'Cerro su sesion en el Sistema Web', '2020-05-13 00:27:38'),
(662, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 00:31:12'),
(663, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 00:31:44'),
(664, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 00:50:28'),
(665, 1, 'Cerro su sesion en el Sistema Web', '2020-05-13 00:50:35'),
(666, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 20:44:12'),
(667, 1, 'Cerro su sesion en el Sistema Web', '2020-05-13 20:44:22'),
(668, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 21:04:14'),
(669, 1, 'Cerro su sesion en el Sistema Web', '2020-05-13 21:35:24'),
(670, 1, 'Inicio sesion en la Sistema Web', '2020-05-13 23:19:31'),
(671, 1, 'Cerro su sesion en el Sistema Web', '2020-05-13 23:22:20'),
(672, 3, 'Inicio sesion en la Sistema Web', '2020-05-13 23:22:32'),
(673, 1, 'Inicio sesion en la Sistema Web', '2020-05-14 23:32:34'),
(674, 1, 'Inicio sesion en la Sistema Web', '2020-05-15 22:56:10'),
(675, 1, 'Inicio sesion en la Sistema Web', '2020-05-15 23:42:16'),
(676, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 01:13:26'),
(677, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 01:56:12'),
(678, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 01:56:34'),
(679, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 01:56:59'),
(680, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 12:14:38'),
(681, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 12:15:21'),
(682, 4, 'Inicio sesion en la Sistema Web', '2020-05-16 12:15:28'),
(683, 4, 'Cerro su sesion en el Sistema Web', '2020-05-16 12:15:31'),
(684, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 12:45:08'),
(685, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 12:45:15'),
(686, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 12:45:19'),
(687, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 12:46:09'),
(688, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 13:46:02'),
(689, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 13:46:25'),
(690, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 13:49:55'),
(691, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 13:50:10'),
(692, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 15:00:04'),
(693, 1, 'Cerro su sesion en el Sistema Web', '2020-05-16 15:17:40'),
(694, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 15:17:48'),
(695, 1, 'Inicio sesion en la Sistema Web', '2020-05-16 22:09:08'),
(696, 1, 'Inicio sesion en la Sistema Web', '2020-05-17 01:44:20'),
(697, 1, 'Inicio sesion en la Sistema Web', '2020-05-17 13:46:26'),
(698, 1, 'Inicio sesion en la Sistema Web', '2020-05-17 19:16:22'),
(699, 1, 'Inicio sesion en la Sistema Web', '2020-06-03 23:53:39'),
(700, 1, 'Inicio sesion en la Sistema Web', '2020-06-03 23:54:07'),
(701, 1, 'Inicio sesion en la Sistema Web', '2020-06-03 23:54:07'),
(702, 1, 'Inicio sesion en la Sistema Web', '2020-06-04 23:18:40'),
(703, 1, 'Inicio sesion en la Sistema Web', '2020-06-06 02:20:40'),
(704, 1, 'Inicio sesion en la Sistema Web', '2020-06-06 13:43:24'),
(705, 1, 'Inicio sesion en la Sistema Web', '2020-06-06 18:24:22'),
(706, 1, 'Inicio sesion en la Sistema Web', '2020-06-06 22:43:52'),
(707, 1, 'Cerro su sesion en el Sistema Web', '2020-06-07 02:06:50'),
(708, 3, 'Inicio sesion en la Sistema Web', '2020-06-07 02:06:58'),
(709, 3, 'Inicio sesion en la Sistema Web', '2020-06-07 02:07:20'),
(710, 3, 'Inicio sesion en la Sistema Web', '2020-06-07 02:07:39'),
(711, 3, 'Cerro su sesion en el Sistema Web', '2020-06-07 02:16:57'),
(712, 1, 'Inicio sesion en la Sistema Web', '2020-06-07 15:33:14'),
(713, 1, 'Cerro su sesion en el Sistema Web', '2020-06-07 15:53:31'),
(714, 1, 'Inicio sesion en la Sistema Web', '2020-06-07 15:57:48'),
(715, 1, 'Cerro su sesion en el Sistema Web', '2020-06-07 17:22:23'),
(716, 3, 'Inicio sesion en la Sistema Web', '2020-06-07 17:22:31'),
(717, 3, 'Cerro su sesion en el Sistema Web', '2020-06-07 17:25:13'),
(718, 1, 'Inicio sesion en la Sistema Web', '2020-06-07 20:57:56'),
(719, 1, 'Inicio sesion en la Sistema Web', '2020-06-10 00:26:55'),
(720, 1, 'Inicio sesion en la Sistema Web', '2020-06-11 00:10:51'),
(721, 1, 'Inicio sesion en la Sistema Web', '2020-06-11 21:28:26'),
(722, 1, 'Inicio sesion en la Sistema Web', '2020-06-11 21:49:46'),
(723, 1, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:13:47'),
(724, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:13:55'),
(725, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:32:55'),
(726, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:33:02'),
(727, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:33:46'),
(728, 1, 'Inicio sesion en la Sistema Web', '2020-06-12 02:33:53'),
(729, 1, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:34:11'),
(730, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:34:17'),
(731, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:34:23'),
(732, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:41:23'),
(733, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:41:28'),
(734, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:42:50'),
(735, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:42:54'),
(736, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:43:00'),
(737, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:43:06'),
(738, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:43:54'),
(739, 3, 'Cerro su sesion en el Sistema Web', '2020-06-12 02:44:09'),
(740, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:44:13'),
(741, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:44:19'),
(742, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:44:33'),
(743, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:45:00'),
(744, 3, 'Inicio sesion en la Sistema Web', '2020-06-12 02:45:41'),
(745, 1, 'Inicio sesion en la Sistema Web', '2020-06-15 04:22:04'),
(746, 1, 'Cerro su sesion en el Sistema Web', '2020-06-15 04:23:49'),
(747, 1, 'Inicio sesion en la Sistema Web', '2020-06-16 00:43:05'),
(748, 1, 'Inicio sesion en la Sistema Web', '2020-06-16 00:43:13'),
(749, 1, 'Inicio sesion en la Sistema Web', '2020-06-16 22:25:43'),
(750, 1, 'Cerro su sesion en el Sistema Web', '2020-06-16 23:50:04'),
(751, 1, 'Inicio sesion en la Sistema Web', '2020-06-16 23:52:00'),
(752, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 01:37:30'),
(753, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 02:59:08'),
(754, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 03:03:39'),
(755, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:20:39'),
(756, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:20:54'),
(757, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:36:41'),
(758, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 03:36:51'),
(759, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:36:59'),
(760, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:37:11'),
(761, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:40:04'),
(762, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:40:15'),
(763, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:42:52'),
(764, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:43:05'),
(765, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:49:26'),
(766, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:49:35'),
(767, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:51:06'),
(768, 6, 'Inicio sesion en la Sistema Web', '2020-06-17 03:52:37'),
(769, 6, 'Cerro su sesion en el Sistema Web', '2020-06-17 03:53:28'),
(770, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 20:47:22'),
(771, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:01:08'),
(772, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 21:01:23'),
(773, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:10:49'),
(774, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 21:11:05'),
(775, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:28:40'),
(776, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 21:28:50'),
(777, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:30:47'),
(778, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 21:31:00'),
(779, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:45:58'),
(780, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 21:47:28'),
(781, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 21:47:45'),
(782, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 21:59:16'),
(783, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:01:31'),
(784, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:01:42'),
(785, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:01:55'),
(786, 8, 'Cerro su sesion en el Sistema Web', '2020-06-17 22:04:57'),
(787, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 22:05:10'),
(788, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 22:05:20'),
(789, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 22:05:37'),
(790, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 22:09:28'),
(791, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:09:40'),
(792, 8, 'Cerro su sesion en el Sistema Web', '2020-06-17 22:40:36'),
(793, 1, 'Inicio sesion en la Sistema Web', '2020-06-17 22:40:43'),
(794, 1, 'Cerro su sesion en el Sistema Web', '2020-06-17 22:42:35'),
(795, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:42:50'),
(796, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 22:43:07'),
(797, 8, 'Cerro su sesion en el Sistema Web', '2020-06-17 23:05:56'),
(798, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 23:06:09'),
(799, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 23:06:33'),
(800, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 23:06:48'),
(801, 8, 'Inicio sesion en la Sistema Web', '2020-06-17 23:07:01'),
(802, 8, 'Cerro su sesion en el Sistema Web', '2020-06-17 23:27:57'),
(803, 7, 'Inicio sesion en la Sistema Web', '2020-06-17 23:28:13'),
(804, 7, 'Cerro su sesion en el Sistema Web', '2020-06-17 23:35:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactame`
--

CREATE TABLE IF NOT EXISTS `contactame` (
  `id_contactame` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_contactame`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `contactame`
--

INSERT INTO `contactame` (`id_contactame`, `nombre`, `email`, `asunto`, `mensaje`, `fecha`, `status`) VALUES
(2, 'Yorman Pinto', 'yormanpinto2011@gmail.com', 'Olvido de Clave', 'no me llega el mensaje al correo con mi nueva clave de acceso', '2020-06-17', 'recibido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ente`
--

CREATE TABLE IF NOT EXISTS `ente` (
  `id_ente` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `ente` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_ente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ente`
--

INSERT INTO `ente` (`id_ente`, `id_registro`, `ente`, `fecha_registro`) VALUES
(1, 1, 'Indar', '2020-06-17'),
(2, 1, 'FundaciÃ³n del NiÃ±o', '2020-06-17'),
(3, 1, 'AdministraciÃ³n Central', '2020-06-17'),
(4, 1, 'FundaciÃ³n Turismo', '2020-06-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_inventario`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `id_registro`, `codigo`, `equipo`, `categoria`, `id_oficina`, `marca`, `modelo`, `descripcion`, `fecha_registro`) VALUES
(5, 6, '02245681', 'Monitor Lenovo', 1, 13, 'Lenovo', 'mfg425', 'fdgdfgdgdf', '2020-06-17'),
(6, 6, 'jT6cjZRIrc', 'dgfhfhf', 1, 13, 'Lenovo', 'dgdd', 'fdf', '2020-06-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina`
--

CREATE TABLE IF NOT EXISTS `oficina` (
  `id_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `oficina` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_oficina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id_oficina`, `id_registro`, `oficina`, `fecha_registro`) VALUES
(1, 1, 'InformÃ¡tica', '2020-06-06'),
(2, 1, 'AdministraciÃ³n', '2020-06-06'),
(3, 1, 'TesorerÃ­a', '2020-06-06'),
(4, 1, 'Renta', '2020-06-06'),
(5, 1, 'Despacho', '2020-06-06'),
(6, 1, 'Bienes', '2020-06-06'),
(7, 1, 'PlanificaciÃ³n y Presupuesto', '2020-06-06'),
(8, 1, 'Recursos Humanos', '2020-06-06'),
(9, 1, 'Prensa', '2020-06-06'),
(10, 1, 'Catastro', '2020-06-06'),
(11, 1, 'GestiÃ³n Urbana', '2020-06-06'),
(12, 1, 'Servicios Publicos', '2020-06-06'),
(13, 1, 'Turismo', '2020-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_registro`),
  UNIQUE KEY `cedula` (`cedula`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `nacionalidad`, `cedula`, `nombre`, `email`, `sexo`, `telefono`, `direccion`, `fecha_nacimiento`, `fecha`) VALUES
(1, 'V', 15711095, 'Administrador del Sistema', 'admin@gmail.com', 'Masculino', '04243263753', 'sjm', '1991-03-24', '2020-03-25'),
(6, '', 12121215, 'Bienes', 'bienes@gmail.com', '', '', '', '0000-00-00', '2020-06-17'),
(7, '', 14147896, 'Informatica', 'informatica@gmail.com', '', '', '', '0000-00-00', '2020-06-17'),
(8, '', 0, 'Yaisy Romero', 'turismo@gmail.com', '', '', '', '0000-00-00', '2020-06-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_e_e`
--

CREATE TABLE IF NOT EXISTS `registro_e_e` (
  `id_reg_e_e` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_de_equipo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ente` varchar(255) NOT NULL,
  `nombre_responsable` varchar(255) NOT NULL,
  `telefono_responsable` varchar(12) NOT NULL,
  `cargo_responsable` varchar(255) NOT NULL,
  `falla` text NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modificado` date NOT NULL,
  `solucion` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_reg_e_e`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `registro_e_e`
--

INSERT INTO `registro_e_e` (`id_reg_e_e`, `tipo_de_equipo`, `descripcion`, `ente`, `nombre_responsable`, `telefono_responsable`, `cargo_responsable`, `falla`, `fecha_registro`, `fecha_modificado`, `solucion`, `status`) VALUES
(1, 'Monitor', 'Monitor LG de 17 Pulgadas pantalla plana, color Negra', 'AdministraciÃ³n Central', 'Teresa Gomez', '04245132548', 'Administradora', 'No enciende', '2020-06-17', '2020-06-17', 'Cambio de Filtros', 'Reparado'),
(2, 'Impresora', 'dffdgd', 'Fundacion del NiÃ±o', 'dfgdfgd', '04245132548', 'Administradora', 'dfgfdgd', '2020-06-17', '0000-00-00', '', 'En Cola'),
(3, 'Computadora', 'reterte', 'FundaciÃ³n del NiÃ±o', 'ertret', '04243263753', 'Administradora', 'erterte', '2020-06-17', '2020-06-17', 'formateo', 'Reparado'),
(4, 'Computadora', 'dfgdfgdf', 'Indar', 'Jesus CedeÃ±o', '04245632854', 'Administradora', 'dfgfdgdgd', '2020-06-17', '2020-06-17', 'formateo', 'En Cola'),
(5, 'Teclado', 'teclado usb microsoft', 'FundaciÃ³n Turismo', 'Jorge Sifonsi', '04241532547', 'Director', 'Alguna teclas no le funcionan', '2020-06-18', '2020-06-18', 'Mantenimiento estaba muy sucio', 'Reparado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traspaso`
--

CREATE TABLE IF NOT EXISTS `traspaso` (
  `id_traspaso` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `entidad` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `ubicacion_inicial` varchar(255) NOT NULL,
  `ubicacion_final` varchar(255) NOT NULL,
  `nombre_dep_emisora` varchar(255) NOT NULL,
  `cedula_dep_emisora` varchar(8) NOT NULL,
  `nombre_dep_receptora` varchar(255) NOT NULL,
  `cedula_dep_receptora` varchar(8) NOT NULL,
  `nombre_oficina_bienes` varchar(255) NOT NULL,
  `cedula_oficina_bienes` varchar(8) NOT NULL,
  `nombre_fun_movimiento` varchar(255) NOT NULL,
  `cedula_fun_movimiento` varchar(8) NOT NULL,
  `fecha_traspaso` date NOT NULL,
  PRIMARY KEY (`id_traspaso`),
  UNIQUE KEY `numero` (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `traspaso`
--

INSERT INTO `traspaso` (`id_traspaso`, `id_registro`, `id_inventario`, `entidad`, `tipo`, `numero`, `ubicacion_inicial`, `ubicacion_final`, `nombre_dep_emisora`, `cedula_dep_emisora`, `nombre_dep_receptora`, `cedula_dep_receptora`, `nombre_oficina_bienes`, `cedula_oficina_bienes`, `nombre_fun_movimiento`, `cedula_fun_movimiento`, `fecha_traspaso`) VALUES
(25, 6, 5, 'InformÃ¡tica', 'Traslado', 0, 'Turismo', '12', 'Yorman Pinto', '20247861', 'luis Campos', '12548745', 'Pedro Guevara', '12534784', 'Luis Navas', '15246325', '2020-06-17'),
(26, 6, 5, 'InformÃ¡tica', 'Traslado', 1, 'Servicios Publicos', '13', 'Yorman Pinto', '20247861', 'luis Campos', '12548745', 'Pedro Guevara', '12534784', 'Luis Navas', '15246325', '2020-06-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_registro` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ente` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_registro`, `email`, `password`, `ente`, `tipo`, `estatus`, `codigo`, `fecha_registro`) VALUES
(1, 1, 'admin@gmail.com', '65a123ee9ce9d6489984692f2a010347b559970c9f416ac90e7e83139cf2efb90cd3ea5c1730f7ced5dc03d1dbe7753baf3addfb15626170ea9ec84a845a9167', 'Administracion Central', 1, 'ACTIVO', '', '2020-01-16'),
(6, 6, 'bienes@gmail.com', '6968cb1ff481aab8c801535dcf65b4000a36ab3002dd3d7ce07c0dba4e90f4744534931e3aca45957342a7606c913a9433fbde2753d1ca9843fbd290ee90e546', 'AdministraciÃ³n Central', 4, 'ACTIVO', 'no por ahora', '2020-06-17'),
(7, 7, 'informatica@gmail.com', 'bdfbf2790d596207014d7999f1d472729bb9be13a9eda22226009e12dd2565edeedeeeb7045b31729366c749543437718c694afb2a6705e5efcbe604f00cc829', 'AdministraciÃ³n Central', 3, 'ACTIVO', 'no por ahora', '2020-06-17'),
(8, 8, 'turismo@gmail.com', 'f6640677f790533de09a8c36462ebe2fd2e142095fdfbc431a56b756a00275a7f0ad63769c0a9e5e534c1270ed433cbec3981f22445d6a7389d66a4af0f71f5f', 'FundaciÃ³n Turismo', 2, 'ACTIVO', 'no por ahora', '2020-06-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
