-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2016 a las 17:26:26
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `exacomco_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_cards`
--

CREATE TABLE IF NOT EXISTS `app_cards` (
  `id_card` int(11) NOT NULL,
  `n_card` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `img_tarjeta` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_cards`
--

INSERT INTO `app_cards` (`id_card`, `n_card`, `img_tarjeta`, `activa`) VALUES
(1, 'Visa Crédito Infinite', 'http://exacomweb.com/webservice/cards/tarjeta11.jpg', '1'),
(2, 'Visa Crédito Oro', 'http://exacomweb.com/webservice/cards/tarjeta22.jpg', '0'),
(3, 'Visa Débito Preferente', 'http://exacomweb.com/webservice/cards/tarjeta33.jpg', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_clasificaciones`
--

CREATE TABLE IF NOT EXISTS `app_clasificaciones` (
  `id_c` int(11) NOT NULL,
  `clasificacion` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_saldo` int(11) NOT NULL,
  `color` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_clasificaciones`
--

INSERT INTO `app_clasificaciones` (`id_c`, `clasificacion`, `user_id`, `id_saldo`, `color`) VALUES
(1, 'Restaurantes', 1, 0, '#B66DAA'),
(2, 'Gastos', 1, 0, '#79905C'),
(8, 'Otra clasificaciÃ³n', 1, 0, '#F90707'),
(0, 'Sin clasificar', 1, 0, '#D1D1D1'),
(10, 'CategorÃ­a nueva', 1, 0, '#ffed01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_home`
--

CREATE TABLE IF NOT EXISTS `app_home` (
  `id_o` int(11) NOT NULL,
  `Opcion` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `ui_sref` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `ion_icon` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `extra_html` longtext COLLATE utf8_unicode_ci NOT NULL,
  `webicon` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `badges` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `menu_type` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_home`
--

INSERT INTO `app_home` (`id_o`, `Opcion`, `ui_sref`, `ion_icon`, `extra_html`, `webicon`, `badges`, `menu_type`) VALUES
(1, 'Mis Tarjetas', 'cards', 'icon ion-card', '', '<i class="fa fa-credit-card"></i>', 'ng-hide', 0),
(2, 'Promociones', 'cards', 'icon ion-ios-pricetag', '', '<i class="fa fa-ticket"></i>', 'ng-hide', 0),
(3, 'Notificaciones', 'Notificaciones', 'icon ion-ios-bell', '<span class="badge badge-{{color}} icon-badge">{{datar.badgeCount}}</span>', '<i class="fa fa-bell"></i>', 'ng-show', 0),
(4, 'Buscar Sucursales', 'Sucursales', 'icon ion-ios-location', '', '<i class="fa fa-map-marker"></i>', 'ng-hide', 0),
(5, 'Marcame', 'cards', 'icon ion-ios-telephone', '', '<i class="fa fa-phone"></i>', 'ng-hide', 0),
(6, 'Ayuda', 'cards', 'icon ion-help', '', '<i class="fa fa-info-circle"></i>', 'ng-hide', 0),
(7, 'Ajustes', 'cards', 'icon ion-android-settings', '', '<i class="fa fa-gears"></i>', 'ng-hide', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_home_options`
--

CREATE TABLE IF NOT EXISTS `app_home_options` (
  `id_g` int(11) NOT NULL,
  `grupo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `opciones` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `opt_tabs` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `opt_subs` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_home_options`
--

INSERT INTO `app_home_options` (`id_g`, `grupo`, `opciones`, `opt_tabs`, `opt_subs`, `activo`) VALUES
(8, 'BANORTE', '1,2,3,4,5,6,7', '2,3,4', '', 0),
(11, 'BANORTE 2', '1,5,7', '1,2,3,4', '', 0),
(12, 'BANORTE 3', '1,3,4,7', '3,4', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_notifications`
--

CREATE TABLE IF NOT EXISTS `app_notifications` (
  `id_n` int(11) NOT NULL,
  `a_notificacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `a_fecha` date NOT NULL,
  `a_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_tarjeta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `a_visto` int(11) NOT NULL,
  `a_archive` int(11) NOT NULL,
  `a_orden` int(11) NOT NULL,
  `a_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `a_icon` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_notifications`
--

INSERT INTO `app_notifications` (`id_n`, `a_notificacion`, `a_fecha`, `a_hora`, `id_tarjeta`, `id_usuario`, `a_visto`, `a_archive`, `a_orden`, `a_imagen`, `a_icon`) VALUES
(12, 'Su tarjeta ... ... ... 7890 Se ha activado exitosamente', '2016-09-08', '2016-09-24 22:24:02', 1, 1, 1, 1, 0, '', ''),
(11, 'El Numero NIP de la tarjeta ha sido Generado.', '2016-09-08', '2016-09-24 22:24:08', 1, 1, 1, 1, 0, '', ''),
(8, 'Se solicito una reposicion de tarjeta de crédito terminacion 8083', '2016-09-06', '2016-10-12 22:33:51', 1, 1, 1, 1, 0, '', ''),
(9, 'Se realizo una Compra en Computer.com de $649.90 el 12/06/16  a las 12.36 pm  a la cuenta **** **** **** 8083 Dudas al 01-800-493-6381', '2016-09-06', '2016-10-19 20:00:21', 1, 1, 1, 0, 0, '', ''),
(10, 'Su tarjeta Visa infinite Card 8083 ha sido reportada como robada y/o extraviada su Num de folio es: 87912', '2016-09-08', '2016-09-22 16:00:48', 1, 1, 1, 1, 0, '', ''),
(25, 'NIP Generado y Actualizado Correctamente', '2016-09-19', '2016-09-24 22:24:11', 1, 1, 1, 1, 0, '', ''),
(26, 'La LÃ­nea de crÃ©dito de su tarjeta con terminacion 8083 ha cambiado a 3,000 ', '2016-09-20', '2016-09-24 22:24:23', 1, 1, 1, 1, 0, '', ''),
(27, 'El Numero NIP de la tarjeta ha sido Generado.', '2016-09-20', '2016-10-13 16:00:40', 1, 1, 1, 0, 0, '', ''),
(28, 'NIP Generado y Actualizado Correctamente', '2016-09-20', '2016-10-13 15:57:58', 1, 1, 1, 1, 0, '', ''),
(29, 'Su tarjeta ... ... ... 7890 Se ha activado exitosamente', '2016-09-20', '2016-10-13 15:58:02', 1, 1, 1, 1, 0, '', ''),
(30, 'NIP Generado y Actualizado Correctamente', '2016-10-19', '2016-10-26 16:11:28', 1, 1, 1, 0, 0, '', ''),
(31, 'NIP Generado y Actualizado Correctamente', '2016-10-26', '2016-10-31 21:45:23', 1, 1, 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_personalizacion`
--

CREATE TABLE IF NOT EXISTS `app_personalizacion` (
  `id_p` int(11) NOT NULL,
  `app_imagen` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_banner` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_color1` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_color2` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_color3` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_color4` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_class1` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_class2` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_class3` varchar(350) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_personalizacion`
--

INSERT INTO `app_personalizacion` (`id_p`, `app_imagen`, `app_banner`, `app_color1`, `app_color2`, `app_color3`, `app_color4`, `app_class1`, `app_class2`, `app_class3`) VALUES
(1, 'http://3.bp.blogspot.com/_H3CoU1MPy9I/TCpalqGwncI/AAAAAAAAAA8/nTLiVqs7op8/s1600/banorte.gif', 'http://surosystem.com/wp-content/uploads/2016/08/banorte-logo.png', 'royal', 'positive', 'calm', 'energized', 'royal', '', ''),
(2, 'http://www.cfht.hawaii.edu/hawaiianstarlight/pics/M16-CFHT_Coelum_Banner.jpg', 'http://3.bp.blogspot.com/_H3CoU1MPy9I/TCpalqGwncI/AAAAAAAAAA8/nTLiVqs7op8/s1600/banorte.gif', 'assertive', 'assertive', 'assertive', 'assertive', 'assertive', 'assertive', 'assertive');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_rel_perso_user`
--

CREATE TABLE IF NOT EXISTS `app_rel_perso_user` (
  `id_r` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perso` int(11) NOT NULL,
  `id_t` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_rel_perso_user`
--

INSERT INTO `app_rel_perso_user` (`id_r`, `id_user`, `id_perso`, `id_t`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_saldos`
--

CREATE TABLE IF NOT EXISTS `app_saldos` (
  `id_s` int(11) NOT NULL,
  `credit_line` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saldoalcorte` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creditodisp` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL,
  `id_subcard` int(11) DEFAULT NULL,
  `card_type` int(11) DEFAULT NULL,
  `activa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_saldos`
--

INSERT INTO `app_saldos` (`id_s`, `credit_line`, `saldoalcorte`, `creditodisp`, `id_card`, `id_subcard`, `card_type`, `activa`) VALUES
(1, '50000', '25000', '25000', 1, 0, 1, 0),
(2, '35000', '12000', '38000', 2, 0, 1, 0),
(3, '45000', '12000', '12000', 1, 0, 1, 0),
(16, '80000', NULL, NULL, 3, NULL, NULL, 0),
(17, '43382', NULL, NULL, NULL, 16, NULL, 0),
(18, '45000', NULL, NULL, 2, NULL, NULL, 0),
(19, '', NULL, NULL, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_subcards`
--

CREATE TABLE IF NOT EXISTS `app_subcards` (
  `id_s` int(11) NOT NULL,
  `addcard` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_saldo` int(11) DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_sucursales`
--

CREATE TABLE IF NOT EXISTS `app_sucursales` (
  `id_s` int(11) NOT NULL,
  `app_sucursal` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `app_horario` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_dias` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_latitud` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_longitud` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_img` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_direccion` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_icon` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `app_tags` varchar(350) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_sucursales`
--

INSERT INTO `app_sucursales` (`id_s`, `app_sucursal`, `app_phone`, `app_horario`, `app_dias`, `app_latitud`, `app_longitud`, `app_img`, `app_direccion`, `app_icon`, `app_tags`) VALUES
(2, 'Banorte Plaza Campestre', '(83) 22 33 55', '09:00am a 06:00pm', '1,2,3,4,5,6', '25.6512698', '-100.3387578', 'http://sipse.com/imgs/012014/290114275e0e3c3med.jpg', 'José Vasconcelos Oriente 158, Residencial San Agustín,San Pedro Garza García, N.L.', 'https://cdn3.iconfinder.com/data/icons/flat-icons-small-version/64/location-pin-64.png', ''),
(1, 'Banorte Lazaro Cardenas', '(83) 22 33 55', '09:00am a 04:00pm', '1,2,3,4,5,6', '25.6181421', '-100.2844277', 'http://sipse.com/imgs/012014/290114275e0e3c3med.jpg', 'Lázaro Cárdenas 4300, Monterrey, N.L., México\n', 'https://cdn3.iconfinder.com/data/icons/flat-icons-small-version/64/location-pin-64.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_tabs`
--

CREATE TABLE IF NOT EXISTS `app_tabs` (
  `id_t` int(11) NOT NULL,
  `tab_name` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_tabs`
--

INSERT INTO `app_tabs` (`id_t`, `tab_name`, `active`, `user_id`) VALUES
(1, 'Transacciones', 0, 0),
(2, 'Notificaciones', 0, 0),
(3, 'Promociones', 0, 0),
(4, 'Servicios', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_transactions`
--

CREATE TABLE IF NOT EXISTS `app_transactions` (
  `id_t` int(11) NOT NULL,
  `transaction` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date_t` date NOT NULL,
  `horas_t` time NOT NULL,
  `points` int(11) NOT NULL,
  `cost` decimal(11,2) NOT NULL,
  `id_s` int(11) NOT NULL,
  `clasificacion` int(11) NOT NULL,
  `tipo_gasto` int(11) NOT NULL,
  `flagged` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_transactions`
--

INSERT INTO `app_transactions` (`id_t`, `transaction`, `date_t`, `horas_t`, `points`, `cost`, `id_s`, `clasificacion`, `tipo_gasto`, `flagged`) VALUES
(1, 'Computer.com', '2016-08-01', '08:00:00', 20, '649.90', 1, 10, 0, '#ffed01'),
(2, 'Rest. Italianis', '2016-08-04', '03:09:24', 10, '1200.00', 1, 1, 0, '#B66DAA'),
(3, 'Walmart', '2016-09-07', '09:22:42', 10, '756.96', 3, 0, 0, ''),
(4, 'Gracias Pago', '2016-09-01', '06:20:33', 45, '2000.00', 1, 2, 1, '#79905C'),
(10, 'JUGUETES', '2015-11-01', '08:00:00', 45, '450.00', 16, 0, 0, ''),
(9, 'Compra McDonalds', '2015-11-01', '10:00:00', 60, '89.00', 1, 1, 0, '#B66DAA'),
(11, 'Las Alitas', '2015-11-19', '11:00:00', 15, '300.00', 1, 1, 0, '#B66DAA'),
(12, 'Gasolina OxxoGas', '2015-11-23', '12:00:00', 10, '500.00', 1, 8, 0, '#F90707'),
(13, 'Pago Netflix', '2015-11-01', '08:00:00', 0, '99.00', 1, 2, 1, '#79905C'),
(14, 'Pago Spotify', '2015-10-01', '12:00:00', 0, '99.00', 1, 2, 1, '#79905C'),
(15, 'PcDomino', '2015-10-29', '10:00:00', 50, '9000.00', 1, 8, 0, '#F90707'),
(16, 'Muncher House', '2015-10-26', '11:00:00', 20, '480.00', 1, 8, 0, '#F90707');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_user`
--

CREATE TABLE IF NOT EXISTS `app_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apaterno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amaterno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tokenkey` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `id_user` int(11) NOT NULL,
  `app_username` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_nombre` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_apellidop` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_apellidom` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_direccion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app_token` longtext COLLATE utf8_unicode_ci NOT NULL,
  `app_word` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `app_users`
--

INSERT INTO `app_users` (`id_user`, `app_username`, `app_password`, `app_nombre`, `app_apellidop`, `app_apellidom`, `app_email`, `app_direccion`, `app_imagen`, `app_token`, `app_word`, `id_group`) VALUES
(1, 'demo', '2ac9cb7dc02b3c0083eb70898e549b63', 'Juan', 'Perez', 'Garcia', 'ing.adriandelgado@hotmail.com', 'tlaxcala #400 Col.Linda Vista', 'https://tracker.moodle.org/secure/attachment/30912/f3.png', 'af8896746e06b528a3e2c66f10bcc81a', 'Island in the sun', 8),
(2, 'Iaguilar', '1a1dc91c907325c69271ddf0c944bc72', 'Ivan', 'Aguilar', 'Perez', 'iaquilar', '', '', '7255e6b002f91abed3701823027a7c7e', 'Beach', 8),
(12, 'rperez', '1a1dc91c907325c69271ddf0c944bc72', 'Roberto', 'Gonzalez', 'Perez', '', '', '', '89646bed76e34acc9908d72bffca62ff', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_card_user`
--

CREATE TABLE IF NOT EXISTS `rel_card_user` (
  `id_rel` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL,
  `id_subcard` int(11) DEFAULT NULL,
  `id_saldo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rel_card_user`
--

INSERT INTO `rel_card_user` (`id_rel`, `id_user`, `id_card`, `id_subcard`, `id_saldo`) VALUES
(1, 1, 1, NULL, 1),
(2, 1, 2, NULL, 2),
(3, 1, 3, NULL, 4),
(4, 2, 1, 1, 3),
(13, 1, 3, 0, 16),
(14, 12, 2, 0, 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `app_cards`
--
ALTER TABLE `app_cards`
  ADD PRIMARY KEY (`id_card`);

--
-- Indices de la tabla `app_clasificaciones`
--
ALTER TABLE `app_clasificaciones`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `app_home`
--
ALTER TABLE `app_home`
  ADD PRIMARY KEY (`id_o`);

--
-- Indices de la tabla `app_home_options`
--
ALTER TABLE `app_home_options`
  ADD PRIMARY KEY (`id_g`);

--
-- Indices de la tabla `app_notifications`
--
ALTER TABLE `app_notifications`
  ADD PRIMARY KEY (`id_n`);

--
-- Indices de la tabla `app_personalizacion`
--
ALTER TABLE `app_personalizacion`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `app_rel_perso_user`
--
ALTER TABLE `app_rel_perso_user`
  ADD PRIMARY KEY (`id_r`);

--
-- Indices de la tabla `app_saldos`
--
ALTER TABLE `app_saldos`
  ADD PRIMARY KEY (`id_s`);

--
-- Indices de la tabla `app_subcards`
--
ALTER TABLE `app_subcards`
  ADD PRIMARY KEY (`id_s`);

--
-- Indices de la tabla `app_sucursales`
--
ALTER TABLE `app_sucursales`
  ADD PRIMARY KEY (`id_s`);

--
-- Indices de la tabla `app_tabs`
--
ALTER TABLE `app_tabs`
  ADD PRIMARY KEY (`id_t`);

--
-- Indices de la tabla `app_transactions`
--
ALTER TABLE `app_transactions`
  ADD PRIMARY KEY (`id_t`);

--
-- Indices de la tabla `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `rel_card_user`
--
ALTER TABLE `rel_card_user`
  ADD PRIMARY KEY (`id_rel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `app_cards`
--
ALTER TABLE `app_cards`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `app_clasificaciones`
--
ALTER TABLE `app_clasificaciones`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `app_home`
--
ALTER TABLE `app_home`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `app_home_options`
--
ALTER TABLE `app_home_options`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `app_notifications`
--
ALTER TABLE `app_notifications`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `app_personalizacion`
--
ALTER TABLE `app_personalizacion`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `app_rel_perso_user`
--
ALTER TABLE `app_rel_perso_user`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `app_saldos`
--
ALTER TABLE `app_saldos`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `app_subcards`
--
ALTER TABLE `app_subcards`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `app_sucursales`
--
ALTER TABLE `app_sucursales`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `app_tabs`
--
ALTER TABLE `app_tabs`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `app_transactions`
--
ALTER TABLE `app_transactions`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `rel_card_user`
--
ALTER TABLE `rel_card_user`
  MODIFY `id_rel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
