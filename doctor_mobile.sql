-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2016 at 01:47 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctor_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=321 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, '', NULL, 'controllers', 1, 636),
(2, 1, '', NULL, 'Attachments', 2, 13),
(3, 2, '', NULL, 'admin_index', 3, 4),
(4, 2, '', NULL, 'admin_add', 5, 6),
(5, 2, '', NULL, 'admin_edit', 7, 8),
(6, 2, '', NULL, 'admin_delete', 9, 10),
(7, 2, '', NULL, 'admin_browse', 11, 12),
(8, 1, '', NULL, 'Blocks', 14, 29),
(9, 8, '', NULL, 'admin_index', 15, 16),
(10, 8, '', NULL, 'admin_add', 17, 18),
(11, 8, '', NULL, 'admin_edit', 19, 20),
(12, 8, '', NULL, 'admin_delete', 21, 22),
(13, 8, '', NULL, 'admin_moveup', 23, 24),
(14, 8, '', NULL, 'admin_movedown', 25, 26),
(15, 8, '', NULL, 'admin_process', 27, 28),
(16, 1, '', NULL, 'Comments', 30, 45),
(17, 16, '', NULL, 'admin_index', 31, 32),
(18, 16, '', NULL, 'admin_edit', 33, 34),
(19, 16, '', NULL, 'admin_delete', 35, 36),
(20, 16, '', NULL, 'admin_process', 37, 38),
(21, 16, '', NULL, 'index', 39, 40),
(22, 16, '', NULL, 'add', 41, 42),
(23, 16, '', NULL, 'delete', 43, 44),
(24, 1, '', NULL, 'Contacts', 46, 57),
(25, 24, '', NULL, 'admin_index', 47, 48),
(26, 24, '', NULL, 'admin_add', 49, 50),
(27, 24, '', NULL, 'admin_edit', 51, 52),
(28, 24, '', NULL, 'admin_delete', 53, 54),
(29, 24, '', NULL, 'view', 55, 56),
(30, 1, '', NULL, 'Filemanager', 58, 79),
(31, 30, '', NULL, 'admin_index', 59, 60),
(32, 30, '', NULL, 'admin_browse', 61, 62),
(33, 30, '', NULL, 'admin_editfile', 63, 64),
(34, 30, '', NULL, 'admin_upload', 65, 66),
(35, 30, '', NULL, 'admin_delete_file', 67, 68),
(36, 30, '', NULL, 'admin_delete_directory', 69, 70),
(37, 30, '', NULL, 'admin_rename', 71, 72),
(38, 30, '', NULL, 'admin_create_directory', 73, 74),
(39, 30, '', NULL, 'admin_create_file', 75, 76),
(40, 30, '', NULL, 'admin_chmod', 77, 78),
(41, 1, '', NULL, 'Languages', 80, 95),
(42, 41, '', NULL, 'admin_index', 81, 82),
(43, 41, '', NULL, 'admin_add', 83, 84),
(44, 41, '', NULL, 'admin_edit', 85, 86),
(45, 41, '', NULL, 'admin_delete', 87, 88),
(46, 41, '', NULL, 'admin_moveup', 89, 90),
(47, 41, '', NULL, 'admin_movedown', 91, 92),
(48, 41, '', NULL, 'admin_select', 93, 94),
(49, 1, '', NULL, 'Links', 96, 113),
(50, 49, '', NULL, 'admin_index', 97, 98),
(51, 49, '', NULL, 'admin_add', 99, 100),
(52, 49, '', NULL, 'admin_edit', 101, 102),
(53, 49, '', NULL, 'admin_delete', 103, 104),
(54, 49, '', NULL, 'admin_moveup', 105, 106),
(55, 49, '', NULL, 'admin_movedown', 107, 108),
(56, 49, '', NULL, 'admin_process', 109, 110),
(57, 1, '', NULL, 'Menus', 114, 123),
(58, 57, '', NULL, 'admin_index', 115, 116),
(59, 57, '', NULL, 'admin_add', 117, 118),
(60, 57, '', NULL, 'admin_edit', 119, 120),
(61, 57, '', NULL, 'admin_delete', 121, 122),
(62, 1, '', NULL, 'Messages', 124, 133),
(63, 62, '', NULL, 'admin_index', 125, 126),
(64, 62, '', NULL, 'admin_edit', 127, 128),
(65, 62, '', NULL, 'admin_delete', 129, 130),
(66, 62, '', NULL, 'admin_process', 131, 132),
(67, 1, '', NULL, 'Nodes', 134, 191),
(68, 67, '', NULL, 'admin_index', 135, 136),
(69, 67, '', NULL, 'admin_create', 137, 138),
(70, 67, '', NULL, 'admin_add', 139, 140),
(71, 67, '', NULL, 'admin_edit', 141, 142),
(72, 67, '', NULL, 'admin_update_paths', 143, 144),
(73, 67, '', NULL, 'admin_delete', 145, 146),
(74, 67, '', NULL, 'admin_delete_meta', 147, 148),
(75, 67, '', NULL, 'admin_add_meta', 149, 150),
(76, 67, '', NULL, 'admin_process', 151, 152),
(77, 67, '', NULL, 'index', 153, 154),
(78, 67, '', NULL, 'term', 155, 156),
(79, 67, '', NULL, 'promoted', 157, 158),
(80, 67, '', NULL, 'search', 159, 160),
(81, 67, '', NULL, 'view', 161, 162),
(82, 1, '', NULL, 'Regions', 192, 201),
(83, 82, '', NULL, 'admin_index', 193, 194),
(84, 82, '', NULL, 'admin_add', 195, 196),
(85, 82, '', NULL, 'admin_edit', 197, 198),
(86, 82, '', NULL, 'admin_delete', 199, 200),
(87, 1, '', NULL, 'Roles', 202, 211),
(88, 87, '', NULL, 'admin_index', 203, 204),
(89, 87, '', NULL, 'admin_add', 205, 206),
(90, 87, '', NULL, 'admin_edit', 207, 208),
(91, 87, '', NULL, 'admin_delete', 209, 210),
(92, 1, '', NULL, 'Settings', 212, 231),
(93, 92, '', NULL, 'admin_dashboard', 213, 214),
(94, 92, '', NULL, 'admin_index', 215, 216),
(95, 92, '', NULL, 'admin_view', 217, 218),
(96, 92, '', NULL, 'admin_add', 219, 220),
(97, 92, '', NULL, 'admin_edit', 221, 222),
(98, 92, '', NULL, 'admin_delete', 223, 224),
(99, 92, '', NULL, 'admin_prefix', 225, 226),
(100, 92, '', NULL, 'admin_moveup', 227, 228),
(101, 92, '', NULL, 'admin_movedown', 229, 230),
(102, 1, '', NULL, 'Terms', 232, 249),
(103, 102, '', NULL, 'admin_index', 233, 234),
(104, 102, '', NULL, 'admin_add', 235, 236),
(105, 102, '', NULL, 'admin_edit', 237, 238),
(106, 102, '', NULL, 'admin_delete', 239, 240),
(107, 102, '', NULL, 'admin_moveup', 241, 242),
(108, 102, '', NULL, 'admin_movedown', 243, 244),
(109, 102, '', NULL, 'admin_process', 245, 246),
(110, 1, '', NULL, 'Types', 250, 259),
(111, 110, '', NULL, 'admin_index', 251, 252),
(112, 110, '', NULL, 'admin_add', 253, 254),
(113, 110, '', NULL, 'admin_edit', 255, 256),
(114, 110, '', NULL, 'admin_delete', 257, 258),
(115, 1, '', NULL, 'Users', 260, 301),
(116, 115, '', NULL, 'admin_index', 261, 262),
(117, 115, '', NULL, 'admin_add', 263, 264),
(118, 115, '', NULL, 'admin_edit', 265, 266),
(119, 115, '', NULL, 'admin_reset_password', 267, 268),
(120, 115, '', NULL, 'admin_delete', 269, 270),
(121, 115, '', NULL, 'admin_login', 271, 272),
(122, 115, '', NULL, 'admin_logout', 273, 274),
(123, 115, '', NULL, 'index', 275, 276),
(124, 115, '', NULL, 'add', 277, 278),
(125, 115, '', NULL, 'activate', 279, 280),
(126, 115, '', NULL, 'edit', 281, 282),
(127, 115, '', NULL, 'forgot', 283, 284),
(128, 115, '', NULL, 'reset', 285, 286),
(129, 115, '', NULL, 'login', 287, 288),
(130, 115, '', NULL, 'logout', 289, 290),
(131, 115, '', NULL, 'view', 291, 292),
(132, 1, '', NULL, 'Vocabularies', 302, 315),
(133, 132, '', NULL, 'admin_index', 303, 304),
(134, 132, '', NULL, 'admin_add', 305, 306),
(135, 132, '', NULL, 'admin_edit', 307, 308),
(136, 132, '', NULL, 'admin_delete', 309, 310),
(137, 1, '', NULL, 'AclAcos', 316, 325),
(138, 137, '', NULL, 'admin_index', 317, 318),
(139, 137, '', NULL, 'admin_add', 319, 320),
(140, 137, '', NULL, 'admin_edit', 321, 322),
(141, 137, '', NULL, 'admin_delete', 323, 324),
(142, 1, '', NULL, 'AclActions', 326, 339),
(143, 142, '', NULL, 'admin_index', 327, 328),
(144, 142, '', NULL, 'admin_add', 329, 330),
(145, 142, '', NULL, 'admin_edit', 331, 332),
(146, 142, '', NULL, 'admin_delete', 333, 334),
(147, 142, '', NULL, 'admin_move', 335, 336),
(148, 142, '', NULL, 'admin_generate', 337, 338),
(149, 1, '', NULL, 'AclAros', 340, 349),
(150, 149, '', NULL, 'admin_index', 341, 342),
(151, 149, '', NULL, 'admin_add', 343, 344),
(152, 149, '', NULL, 'admin_edit', 345, 346),
(153, 149, '', NULL, 'admin_delete', 347, 348),
(154, 1, '', NULL, 'AclPermissions', 350, 355),
(155, 154, '', NULL, 'admin_index', 351, 352),
(156, 154, '', NULL, 'admin_toggle', 353, 354),
(159, 1, '', NULL, 'ExtensionsHooks', 356, 361),
(160, 159, '', NULL, 'admin_index', 357, 358),
(161, 159, '', NULL, 'admin_toggle', 359, 360),
(162, 1, '', NULL, 'ExtensionsLocales', 362, 373),
(163, 162, '', NULL, 'admin_index', 363, 364),
(164, 162, '', NULL, 'admin_activate', 365, 366),
(165, 162, '', NULL, 'admin_add', 367, 368),
(166, 162, '', NULL, 'admin_edit', 369, 370),
(167, 162, '', NULL, 'admin_delete', 371, 372),
(168, 1, '', NULL, 'ExtensionsPlugins', 374, 383),
(169, 168, '', NULL, 'admin_index', 375, 376),
(170, 168, '', NULL, 'admin_add', 377, 378),
(171, 168, '', NULL, 'admin_delete', 379, 380),
(172, 1, '', NULL, 'ExtensionsThemes', 384, 397),
(173, 172, '', NULL, 'admin_index', 385, 386),
(174, 172, '', NULL, 'admin_activate', 387, 388),
(175, 172, '', NULL, 'admin_add', 389, 390),
(176, 172, '', NULL, 'admin_editor', 391, 392),
(177, 172, '', NULL, 'admin_save', 393, 394),
(178, 172, '', NULL, 'admin_delete', 395, 396),
(179, 1, NULL, NULL, 'Clients', 398, 415),
(180, 179, NULL, NULL, 'admin_index', 399, 400),
(181, 179, NULL, NULL, 'index', 401, 402),
(182, 179, NULL, NULL, 'admin_view', 403, 404),
(183, 179, NULL, NULL, 'admin_add', 405, 406),
(184, 179, NULL, NULL, 'admin_edit', 407, 408),
(185, 179, NULL, NULL, 'admin_delete', 409, 410),
(186, 1, NULL, NULL, 'Publications', 416, 433),
(187, 186, NULL, NULL, 'admin_index', 417, 418),
(188, 186, NULL, NULL, 'index', 419, 420),
(189, 186, NULL, NULL, 'admin_view', 421, 422),
(190, 186, NULL, NULL, 'admin_add', 423, 424),
(191, 186, NULL, NULL, 'admin_edit', 425, 426),
(192, 186, NULL, NULL, 'admin_delete', 427, 428),
(193, 1, NULL, NULL, 'Publicationscategories', 434, 445),
(194, 193, NULL, NULL, 'admin_index', 435, 436),
(195, 193, NULL, NULL, 'admin_view', 437, 438),
(196, 193, NULL, NULL, 'admin_add', 439, 440),
(197, 193, NULL, NULL, 'admin_edit', 441, 442),
(198, 193, NULL, NULL, 'admin_delete', 443, 444),
(199, 1, NULL, NULL, 'Translationnetworks', 446, 461),
(200, 199, NULL, NULL, 'admin_index', 447, 448),
(201, 199, NULL, NULL, 'admin_view', 449, 450),
(202, 199, NULL, NULL, 'admin_add', 451, 452),
(203, 199, NULL, NULL, 'add', 453, 454),
(204, 199, NULL, NULL, 'admin_edit', 455, 456),
(205, 199, NULL, NULL, 'admin_delete', 457, 458),
(206, 1, NULL, NULL, 'Translationnetworkstyps', 462, 473),
(207, 206, NULL, NULL, 'admin_index', 463, 464),
(208, 206, NULL, NULL, 'admin_view', 465, 466),
(209, 206, NULL, NULL, 'admin_add', 467, 468),
(210, 206, NULL, NULL, 'admin_edit', 469, 470),
(211, 206, NULL, NULL, 'admin_delete', 471, 472),
(212, 132, NULL, NULL, 'admin_moveup', 311, 312),
(213, 132, NULL, NULL, 'admin_movedown', 313, 314),
(214, 1, NULL, NULL, 'Example', 474, 479),
(215, 214, NULL, NULL, 'admin_index', 475, 476),
(216, 214, NULL, NULL, 'index', 477, 478),
(217, 168, NULL, NULL, 'admin_toggle', 381, 382),
(218, 1, NULL, NULL, 'Translate', 480, 487),
(219, 218, NULL, NULL, 'admin_index', 481, 482),
(220, 218, NULL, NULL, 'admin_edit', 483, 484),
(221, 218, NULL, NULL, 'admin_delete', 485, 486),
(222, 49, NULL, NULL, 'getlinks', 111, 112),
(223, 186, NULL, NULL, 'get_last_publication', 429, 430),
(224, 186, NULL, NULL, 'get_last_publication_offset', 431, 432),
(225, 179, NULL, NULL, 'export_xls', 411, 412),
(226, 179, NULL, NULL, 'getlastclients', 413, 414),
(227, 1, NULL, NULL, 'Models', 488, 489),
(228, 67, NULL, NULL, 'send_events_to_all', 163, 164),
(229, 67, NULL, NULL, 'view_new', 165, 166),
(230, 67, NULL, NULL, 'gettags', 167, 168),
(231, 67, NULL, NULL, 'get_all_types', 169, 170),
(232, 67, NULL, NULL, 'blogstop', 171, 172),
(233, 67, NULL, NULL, 'blogs', 173, 174),
(234, 67, NULL, NULL, 'getlastnews', 175, 176),
(235, 67, NULL, NULL, 'getlastcon', 177, 178),
(236, 67, NULL, NULL, 'getlastslider', 179, 180),
(237, 67, NULL, NULL, 'get_last_data_bytype', 181, 182),
(238, 67, NULL, NULL, 'displaytabs', 183, 184),
(239, 67, NULL, NULL, 'changeLanguage', 185, 186),
(240, 67, NULL, NULL, 'home', 187, 188),
(241, 1, NULL, NULL, 'Sitesliders', 490, 505),
(242, 241, NULL, NULL, 'admin_index', 491, 492),
(243, 241, NULL, NULL, 'admin_view', 493, 494),
(244, 241, NULL, NULL, 'view', 495, 496),
(245, 241, NULL, NULL, 'admin_add', 497, 498),
(246, 241, NULL, NULL, 'admin_edit', 499, 500),
(247, 241, NULL, NULL, 'admin_delete', 501, 502),
(248, 241, NULL, NULL, 'getlastslider', 503, 504),
(249, 102, NULL, NULL, 'gettags', 247, 248),
(250, 115, NULL, NULL, 'mobile_add', 293, 294),
(251, 115, NULL, NULL, 'addnew', 295, 296),
(252, 115, NULL, NULL, 'check_mail', 297, 298),
(253, 115, NULL, NULL, 'check_login', 299, 300),
(254, 1, NULL, NULL, 'Albums', 506, 525),
(255, 254, NULL, NULL, 'admin_index', 507, 508),
(256, 254, NULL, NULL, 'admin_add', 509, 510),
(257, 254, NULL, NULL, 'admin_edit', 511, 512),
(258, 254, NULL, NULL, 'admin_delete', 513, 514),
(259, 254, NULL, NULL, 'index', 515, 516),
(260, 254, NULL, NULL, 'view', 517, 518),
(261, 254, NULL, NULL, 'admin_upload', 519, 520),
(262, 254, NULL, NULL, 'admin_upload_photo', 521, 522),
(263, 254, NULL, NULL, 'admin_delete_photo', 523, 524),
(264, 1, NULL, NULL, 'Photos', 526, 527),
(265, 1, NULL, NULL, 'Nodethumb', 528, 531),
(266, 265, NULL, NULL, 'admin_upload', 529, 530),
(267, 1, NULL, NULL, 'Polls', 532, 545),
(268, 267, NULL, NULL, 'admin_index', 533, 534),
(269, 267, NULL, NULL, 'admin_add', 535, 536),
(270, 267, NULL, NULL, 'admin_add_store', 537, 538),
(271, 267, NULL, NULL, 'admin_edit', 539, 540),
(272, 267, NULL, NULL, 'admin_delete', 541, 542),
(273, 267, NULL, NULL, 'vote', 543, 544),
(274, 1, NULL, NULL, 'Testimonials', 546, 569),
(275, 274, NULL, NULL, 'index', 547, 548),
(276, 274, NULL, NULL, 'view', 549, 550),
(277, 274, NULL, NULL, 'add', 551, 552),
(278, 274, NULL, NULL, 'edit', 553, 554),
(279, 274, NULL, NULL, 'delete', 555, 556),
(280, 274, NULL, NULL, 'admin_index', 557, 558),
(281, 274, NULL, NULL, 'admin_view', 559, 560),
(282, 274, NULL, NULL, 'admin_add', 561, 562),
(283, 274, NULL, NULL, 'admin_edit', 563, 564),
(284, 274, NULL, NULL, 'admin_delete', 565, 566),
(285, 274, NULL, NULL, 'getlasttestimonial', 567, 568),
(286, 199, NULL, NULL, 'add_home', 459, 460),
(287, 67, NULL, NULL, 'get_data_byslug', 189, 190),
(288, 1, NULL, NULL, 'Tests', 570, 575),
(289, 288, NULL, NULL, 'index', 571, 572),
(290, 288, NULL, NULL, 'home', 573, 574),
(291, 1, NULL, NULL, 'MovesActivities', 576, 611),
(292, 291, NULL, NULL, 'getAccessToken', 577, 578),
(293, 291, NULL, NULL, 'getDailyActivity', 579, 580),
(294, 291, NULL, NULL, 'index', 581, 582),
(295, 291, NULL, NULL, 'view', 583, 584),
(296, 291, NULL, NULL, 'add', 585, 586),
(297, 291, NULL, NULL, 'edit', 587, 588),
(298, 291, NULL, NULL, 'delete', 589, 590),
(299, 1, NULL, NULL, 'MovesUsers', 612, 635),
(300, 299, NULL, NULL, 'index', 613, 614),
(301, 299, NULL, NULL, 'view', 615, 616),
(302, 299, NULL, NULL, 'add', 617, 618),
(303, 299, NULL, NULL, 'edit', 619, 620),
(304, 299, NULL, NULL, 'delete', 621, 622),
(305, 291, NULL, NULL, 'updateMovesActivities', 591, 592),
(306, 291, NULL, NULL, 'getDailyActivityByDate', 593, 594),
(307, 291, NULL, NULL, 'getDailyActivityMonthly', 595, 596),
(308, 291, NULL, NULL, 'getDailyActivityWeekly', 597, 598),
(309, 291, NULL, NULL, 'getActivitiesByUser', 599, 600),
(310, 291, NULL, NULL, 'admin_index', 601, 602),
(311, 291, NULL, NULL, 'admin_view', 603, 604),
(312, 291, NULL, NULL, 'admin_add', 605, 606),
(313, 291, NULL, NULL, 'admin_edit', 607, 608),
(314, 291, NULL, NULL, 'admin_delete', 609, 610),
(315, 299, NULL, NULL, 'getAccessToken', 623, 624),
(316, 299, NULL, NULL, 'admin_index', 625, 626),
(317, 299, NULL, NULL, 'admin_view', 627, 628),
(318, 299, NULL, NULL, 'admin_add', 629, 630),
(319, 299, NULL, NULL, 'admin_edit', 631, 632),
(320, 299, NULL, NULL, 'admin_delete', 633, 634);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, '', 1, 4),
(2, NULL, 'Role', 2, '', 5, 6),
(3, NULL, 'Role', 3, '', 7, 8),
(5, NULL, 'User', 1, '', 9, 10),
(14, 1, 'User', 10, NULL, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=112 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 2, 23, '1', '1', '1', '1'),
(2, 2, 22, '1', '1', '1', '1'),
(3, 2, 21, '1', '1', '1', '1'),
(4, 3, 21, '1', '1', '1', '1'),
(5, 3, 22, '1', '1', '1', '1'),
(6, 2, 29, '1', '1', '1', '1'),
(7, 3, 29, '1', '1', '1', '1'),
(8, 2, 77, '1', '1', '1', '1'),
(9, 2, 78, '1', '1', '1', '1'),
(10, 2, 79, '1', '1', '1', '1'),
(11, 2, 80, '1', '1', '1', '1'),
(12, 2, 81, '1', '1', '1', '1'),
(13, 3, 77, '1', '1', '1', '1'),
(14, 3, 78, '1', '1', '1', '1'),
(15, 3, 79, '1', '1', '1', '1'),
(16, 3, 80, '1', '1', '1', '1'),
(17, 3, 81, '1', '1', '1', '1'),
(18, 2, 123, '1', '1', '1', '1'),
(19, 3, 124, '1', '1', '1', '1'),
(20, 3, 125, '1', '1', '1', '1'),
(21, 2, 126, '1', '1', '1', '1'),
(22, 3, 127, '1', '1', '1', '1'),
(23, 3, 128, '1', '1', '1', '1'),
(24, 3, 129, '1', '1', '1', '1'),
(25, 2, 130, '1', '1', '1', '1'),
(26, 2, 131, '1', '1', '1', '1'),
(27, 3, 131, '1', '1', '1', '1'),
(28, 3, 188, '1', '1', '1', '1'),
(29, 2, 188, '1', '1', '1', '1'),
(30, 2, 181, '1', '1', '1', '1'),
(31, 3, 181, '1', '1', '1', '1'),
(32, 2, 216, '1', '1', '1', '1'),
(33, 3, 216, '1', '1', '1', '1'),
(34, 2, 203, '1', '1', '1', '1'),
(35, 3, 203, '1', '1', '1', '1'),
(36, 2, 222, '1', '1', '1', '1'),
(37, 3, 222, '1', '1', '1', '1'),
(38, 2, 224, '1', '1', '1', '1'),
(39, 2, 223, '1', '1', '1', '1'),
(40, 3, 224, '1', '1', '1', '1'),
(41, 3, 223, '1', '1', '1', '1'),
(42, 3, 226, '1', '1', '1', '1'),
(43, 2, 226, '1', '1', '1', '1'),
(44, 2, 275, '1', '1', '1', '1'),
(45, 3, 275, '1', '1', '1', '1'),
(46, 2, 285, '1', '1', '1', '1'),
(47, 3, 285, '1', '1', '1', '1'),
(48, 2, 286, '1', '1', '1', '1'),
(49, 3, 286, '1', '1', '1', '1'),
(50, 2, 233, '1', '1', '1', '1'),
(51, 3, 233, '1', '1', '1', '1'),
(52, 2, 232, '1', '1', '1', '1'),
(53, 3, 232, '1', '1', '1', '1'),
(54, 2, 249, '1', '1', '1', '1'),
(55, 3, 249, '1', '1', '1', '1'),
(56, 2, 292, '1', '1', '1', '1'),
(57, 3, 292, '1', '1', '1', '1'),
(58, 2, 293, '1', '1', '1', '1'),
(59, 3, 293, '1', '1', '1', '1'),
(60, 3, 294, '1', '1', '1', '1'),
(61, 2, 294, '1', '1', '1', '1'),
(62, 2, 295, '1', '1', '1', '1'),
(63, 2, 296, '1', '1', '1', '1'),
(64, 2, 297, '1', '1', '1', '1'),
(65, 2, 298, '1', '1', '1', '1'),
(66, 3, 298, '1', '1', '1', '1'),
(67, 3, 297, '1', '1', '1', '1'),
(68, 3, 296, '1', '1', '1', '1'),
(69, 3, 295, '1', '1', '1', '1'),
(70, 3, 304, '1', '1', '1', '1'),
(71, 3, 303, '1', '1', '1', '1'),
(72, 3, 302, '1', '1', '1', '1'),
(73, 3, 301, '1', '1', '1', '1'),
(74, 3, 300, '1', '1', '1', '1'),
(75, 2, 300, '1', '1', '1', '1'),
(76, 2, 301, '1', '1', '1', '1'),
(77, 2, 302, '1', '1', '1', '1'),
(78, 2, 303, '1', '1', '1', '1'),
(79, 2, 304, '1', '1', '1', '1'),
(80, 2, 314, '1', '1', '1', '1'),
(81, 2, 313, '1', '1', '1', '1'),
(82, 2, 312, '1', '1', '1', '1'),
(83, 2, 311, '1', '1', '1', '1'),
(84, 2, 310, '1', '1', '1', '1'),
(85, 2, 309, '1', '1', '1', '1'),
(86, 2, 308, '1', '1', '1', '1'),
(87, 2, 307, '1', '1', '1', '1'),
(88, 2, 306, '1', '1', '1', '1'),
(89, 2, 305, '1', '1', '1', '1'),
(90, 3, 305, '1', '1', '1', '1'),
(91, 3, 306, '1', '1', '1', '1'),
(92, 3, 307, '1', '1', '1', '1'),
(93, 3, 308, '1', '1', '1', '1'),
(94, 3, 309, '1', '1', '1', '1'),
(95, 3, 310, '1', '1', '1', '1'),
(96, 3, 311, '1', '1', '1', '1'),
(97, 3, 312, '1', '1', '1', '1'),
(98, 3, 313, '1', '1', '1', '1'),
(99, 3, 314, '1', '1', '1', '1'),
(100, 2, 315, '1', '1', '1', '1'),
(101, 2, 316, '1', '1', '1', '1'),
(102, 2, 317, '1', '1', '1', '1'),
(103, 2, 318, '1', '1', '1', '1'),
(104, 2, 319, '1', '1', '1', '1'),
(105, 2, 320, '1', '1', '1', '1'),
(106, 3, 320, '1', '1', '1', '1'),
(107, 3, 319, '1', '1', '1', '1'),
(108, 3, 318, '1', '1', '1', '1'),
(109, 3, 317, '1', '1', '1', '1'),
(110, 3, 316, '1', '1', '1', '1'),
(111, 3, 315, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `region_id` int(20) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `weight` int(11) DEFAULT NULL,
  `element` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `visibility_paths` text COLLATE utf8_unicode_ci,
  `visibility_php` text COLLATE utf8_unicode_ci,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `region_id`, `title`, `alias`, `body`, `show_title`, `class`, `status`, `weight`, `element`, `visibility_roles`, `visibility_paths`, `visibility_php`, `params`, `updated`, `created`) VALUES
(8, 4, 'Search', 'search', '', 0, '', 1, 1, 'search', '', '', '', '', '2009-12-20 03:07:39', '2009-12-20 03:07:27'),
(13, 3, 'Our Location', 'our-Location', '<p>Office : Address : 1-210st., Vectoria Square Degla, Maadi, Cairo, Egypt</p>\r\n<p>Mob:(+2) 010 1555 7045  Tel &amp; Fax:(+2) 22 5199 645</p>\r\n<p>E_mail: Contact@egystone-eg.com</p>\r\n<p>Factory : Address : 64 Shaq El Thoban st., industrial zone of Marble &amp; Granite, Torah, Cairo, Egypt</p>\r\n<p>Mob : (+2) 012 8305 5574  Tel : (+2) 22 9700 579</p>\r\n<p>E_mail : info@egystone-eg.com</p>', 1, '', 1, 3, '', '', '', NULL, '', '2015-12-24 22:48:21', '2015-12-24 22:46:44'),
(12, 3, 'Who us', 'who-us', '<p>As we progressed throughout the years, Egystone held pride in putting  its expertise and bundle of professional services to cater to its  clients. We carry out our work around Egypt with excellence, where we  continuously cooperate with our clients to harmoniously integrate their  needs with our work to guarantee gratifying results.Egystone was  established in 1988 in the ever-popular marble industrial area known as  &ldquo;Shaq El Thoban&rdquo;. Since its establishment, Egystone has been a pioneer  Egyptian company; offering a wide array of high quality natural stones,  ranging from glamorous and majestic marble to tough and scratch  resistant granite, in addition to many others.</p>', 1, '', 1, 2, '', '', '', NULL, '', '2015-12-24 22:46:03', '2015-12-24 22:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `imgpath` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '#',
  `description` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `created`, `modified`, `imgpath`, `link`, `description`) VALUES
(1, 'Altamimi and Company', '2014-01-14 12:19:27', '2014-09-14 05:10:37', '/uploads/541585bd-19d0-4565-aeae-0299323f7c01-al-tamimi.jpg', 'http://www.tamimi.com', '<p>Al Tamimi&nbsp;has been providing legal services to clients in the Middle East for over 25 years. We ensure that our clients receive sound, strategic legal advice.</p>\r\n<div class="rc">\r\n<div class="s">\r\n<div class="s">\r\n<div><span class="st"><span dir="ltr"><br /></span></span></div>\r\n</div>\r\n</div>\r\n</div>'),
(2, 'Pepsi', '2014-01-14 12:24:08', '2014-12-21 02:32:58', '/uploads/549693ca-fea8-4fdc-b227-4b21323f7c01-pepsi.jpg', 'http://www.pepsi.com/', '<p><span>Pepsi is a global leader in food and beverage industry</span></p>'),
(3, 'Shiftin Partners', '2014-01-14 12:26:53', '2014-09-14 04:52:54', '/uploads/54158196-e0b4-4b53-b3ec-3f65323f7c01-53ea24ec-9a30-450e-a480-3f60323f7c01-shiftinpartners.jpg', 'http://www.shiftinpartners.net/', '<p>&nbsp;</p>\r\n<div class="rc">\r\n<div class="s"><span class="st"><span dir="ltr">The&nbsp;<span>ShiftIN</span>&nbsp;Way. How we can help. Driving Results From WithIN. The journey from awakening to achievement begins with a shift.</span></span></div>\r\n<div><span class="st"><span dir="ltr"><br /></span></span></div>\r\n</div>\r\n<p>&nbsp;</p>'),
(4, 'China Constructions Dubai', '2014-01-14 12:35:03', '2014-09-14 04:55:37', '/uploads/54158239-1328-4881-9956-4554323f7c01-53ea2555-f3a0-44bf-a35c-3f60323f7c01-chinaconstructions.jpg', 'http://www.chinaconstruction.ae/', '<p><span>China Construction</span><span>&nbsp;is globally known for undertaking super high-rise &amp; innovative projects.</span></p>'),
(5, 'ASEB', '2014-01-14 12:38:27', '2014-09-14 04:59:26', '/uploads/5415831e-d800-4302-959c-0299323f7c01-53ea25f5-12f8-4d08-acc9-3f69323f7c01-52d59233-276c-4378-92a0-34b0323f7c01-aseb.jpg', 'http://asebacademy.com/', '<p><span>ASEB</span><span>&nbsp;is a first class training center for English courses in Alexandria, Egypt.</span></p>'),
(6, 'Hamdan Al Harmi & Associates ', '2014-10-20 14:48:28', '2014-11-13 04:45:11', '/uploads/546499c7-6e10-42a5-ac52-1828323f7c01-Untitled-1.jpg', 'http://harmilaw.com/index.asp', '<p><span>Ours is a law firm of Advocates and Legal Consultants with over 25 years of experience.</span></p>'),
(7, 'Quest', '2014-11-13 03:15:37', '2014-11-13 03:15:37', '/uploads/UnderCostructionImage.jpg', 'http://quest.com.eg/index.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `node_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `notify` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'comment',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `node_id`, `user_id`, `name`, `email`, `website`, `ip`, `title`, `body`, `rating`, `status`, `notify`, `type`, `comment_type`, `lft`, `rght`, `updated`, `created`) VALUES
(1, NULL, 1, 0, 'Mr Croogo', 'email@example.com', 'http://www.croogo.org', '127.0.0.1', '', 'Hi, this is the first comment.', NULL, 1, 0, 'blog', 'comment', 1, 2, '2009-12-25 12:00:00', '2009-12-25 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `address2` text COLLATE utf8_unicode_ci,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_status` tinyint(1) NOT NULL DEFAULT '1',
  `message_archive` tinyint(1) NOT NULL DEFAULT '1',
  `message_count` int(11) NOT NULL DEFAULT '0',
  `message_spam_protection` tinyint(1) NOT NULL DEFAULT '0',
  `message_captcha` tinyint(1) NOT NULL DEFAULT '0',
  `message_notify` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `alias`, `body`, `name`, `position`, `address`, `address2`, `state`, `country`, `postcode`, `phone`, `fax`, `email`, `message_status`, `message_archive`, `message_count`, `message_spam_protection`, `message_captcha`, `message_notify`, `status`, `updated`, `created`) VALUES
(1, 'Contact', 'contact', '', '', '', '', '', 'dfgfgb', 'Egypt', '', '7656787', '5481731', 'info@cfbsf.com', 1, 1, 167, 0, 0, 1, 1, '2014-01-07 07:18:00', '2009-09-16 01:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `native` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `native`, `alias`, `status`, `weight`, `updated`, `created`) VALUES
(1, 'English', 'English', 'eng', 1, 1, '2009-11-02 21:37:38', '2009-11-02 20:52:00'),
(2, 'ara', 'ara', 'ara', 1, 2, '2012-11-06 03:42:23', '2012-11-06 03:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `menu_id` int(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `parent_id`, `menu_id`, `title`, `class`, `description`, `link`, `target`, `rel`, `status`, `lft`, `rght`, `visibility_roles`, `params`, `updated`, `created`) VALUES
(5, NULL, 4, 'About', '', '', 'controller:nodes/action:view/type:page/slug:about', '', '', 1, 3, 4, '', '', '2009-10-06 23:14:21', '2009-08-19 12:23:33'),
(6, NULL, 4, 'Contact', '', '', 'controller:contacts/action:view/contact', '', '', 1, 5, 6, '', '', '2009-10-06 23:14:45', '2009-08-19 12:34:56'),
(32, NULL, 3, 'About Us', 'about-us', '', '#', '', '', 1, 15, 22, '', '', '2015-12-23 01:46:46', '2009-09-06 21:34:57'),
(10, NULL, 5, 'Site Admin', '', '', '/admin', '', '', 1, 1, 2, '', '', '2009-09-12 06:34:09', '2009-09-12 06:34:09'),
(11, NULL, 5, 'Log out', '', '', '/users/logout', '', '', 1, 7, 8, '["1","2"]', '', '2009-09-12 06:35:22', '2009-09-12 06:34:41'),
(12, NULL, 6, 'Croogo', '', '', 'http://www.croogo.org', '', '', 1, 3, 4, '', '', '2009-09-12 23:31:59', '2009-09-12 23:31:59'),
(14, NULL, 6, 'CakePHP', '', '', 'http://www.cakephp.org', '', '', 1, 1, 2, '', '', '2009-10-07 03:25:25', '2009-09-12 23:38:43'),
(16, NULL, 5, 'Entries (RSS)', '', '', '/nodes/promoted.rss', '', '', 1, 3, 4, '', '', '2009-10-27 17:46:22', '2009-10-27 17:46:22'),
(17, NULL, 5, 'Comments (RSS)', '', '', '/comments.rss', '', '', 1, 5, 6, '', '', '2009-10-27 17:46:54', '2009-10-27 17:46:54'),
(60, 51, 3, 'Stone Gallery', 'stone-gallery', '', '#', '', '', 1, 42, 43, '', '', '2015-12-23 01:09:46', '2015-12-23 01:09:46'),
(59, 51, 3, 'Photos', 'photos', '', '#', '', '', 1, 40, 41, '', '', '2015-12-23 01:09:19', '2015-12-23 01:09:19'),
(58, 51, 3, 'Videos', 'videos', '', '#', '', '', 1, 38, 39, '', '', '2015-12-23 01:08:50', '2015-12-23 01:08:50'),
(57, 50, 3, 'Our Location', 'our-location', '', '#', '', '', 1, 34, 35, '', '', '2015-12-23 01:07:10', '2015-12-23 01:07:10'),
(61, NULL, 3, 'Contact Us', 'contact-us', '', '/contact', '', '', 1, 45, 46, '', '', '2014-03-01 02:14:49', '2014-01-15 11:25:23'),
(48, 32, 3, 'Vision', 'vision', '', '/page/vision', '', '', 1, 18, 19, '', '', '2015-12-24 22:34:40', '2015-12-23 01:02:17'),
(31, NULL, 3, 'Home', 'home', '', '/', '', '', 1, 5, 14, '', '', '2015-12-23 01:26:21', '2014-01-20 04:57:01'),
(56, 50, 3, 'FAQ''s', 'faqs', '', '#', '', '', 1, 32, 33, '', '', '2015-12-23 01:06:45', '2015-12-23 01:06:45'),
(53, 50, 3, 'Services', 'services', '', '#', '', '', 1, 26, 27, '', '', '2015-12-23 01:07:27', '2015-12-23 01:05:10'),
(54, 50, 3, 'Turnkey Projects', 'turnkey-projects', '', '#', '', '', 1, 28, 29, '', '', '2015-12-23 01:05:46', '2015-12-23 01:05:46'),
(55, 50, 3, 'Stone Care Products', 'stone-care-products', '', '#', '', '', 1, 30, 31, '', '', '2015-12-23 01:06:17', '2015-12-23 01:06:17'),
(51, NULL, 3, 'Gallery', 'gallery', '', '#', '', '', 1, 37, 44, '', '', '2015-12-23 01:04:08', '2015-12-23 01:04:08'),
(52, 50, 3, 'Products', 'products', '', '#', '', '', 1, 24, 25, '', '', '2015-12-23 01:04:39', '2015-12-23 01:04:39'),
(49, 32, 3, 'Mission', 'mission', '', '/page/mission', '', '', 1, 20, 21, '', '', '2015-12-24 22:35:11', '2015-12-23 01:02:45'),
(50, NULL, 3, 'Scope of Servies', 'scope-of-servies', '', '#', '', '', 1, 23, 36, '', '', '2015-12-23 01:03:31', '2015-12-23 01:03:31'),
(47, 32, 3, 'General Information', 'general-information', '', '/page/background-general-information', '', '', 1, 16, 17, '', '', '2015-12-24 22:33:22', '2015-12-23 01:01:53'),
(43, 31, 3, 'Interior', 'interior', '', '/page/interior', '', '', 1, 6, 7, '', '', '2015-12-24 22:25:12', '2015-12-23 00:59:18'),
(44, 31, 3, 'Finishes', 'finishes', '', 'page/finishes', '', '', 1, 8, 9, '', '', '2015-12-23 00:59:54', '2015-12-23 00:59:54'),
(45, 31, 3, 'Stones', 'stones', '', 'page/stones', '', '', 1, 10, 11, '', '', '2015-12-23 01:00:26', '2015-12-23 01:00:26'),
(46, 31, 3, 'Background', 'background', '', 'page/background', '', '', 1, 12, 13, '', '', '2015-12-23 01:00:58', '2015-12-23 01:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `link_count` int(11) NOT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `alias`, `class`, `description`, `status`, `weight`, `link_count`, `params`, `updated`, `created`) VALUES
(3, 'Main Menu', 'main', '', '', 1, NULL, 21, '', '2009-08-19 12:21:06', '2009-07-22 01:49:53'),
(4, 'Footer', 'footer', '', '', 1, NULL, 2, '', '2009-08-19 12:22:42', '2009-08-19 12:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `message_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=168 ;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE IF NOT EXISTS `meta` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Node',
  `foreign_key` int(20) DEFAULT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `model`, `foreign_key`, `key`, `value`, `weight`) VALUES
(1, 'Node', 1, 'meta_keywords', 'key1, key2', NULL),
(2, 'Node', 4, '', '', NULL),
(3, 'Node', 5, '', '', NULL),
(4, 'Node', 39, '', '', NULL),
(5, 'Node', 41, '', '', NULL),
(6, 'Node', 42, '', '', NULL),
(7, 'Node', 53, '', '', NULL),
(8, 'Node', 54, '', '', NULL),
(9, 'Node', 55, '', '', NULL),
(10, 'Node', 56, '', '', NULL),
(11, 'Node', 58, '', '', NULL),
(12, 'Node', 59, '', '', NULL),
(13, 'Node', 60, '', '', NULL),
(14, 'Node', 61, '', '', NULL),
(15, 'Node', 62, '', '', NULL),
(16, 'Node', 63, '', '', NULL),
(17, 'Node', 64, '', '', NULL),
(18, 'Node', 65, '', '', NULL),
(19, 'Node', 66, '', '', NULL),
(20, 'Node', 70, '', '', NULL),
(21, 'Node', 71, '', '', NULL),
(22, 'Node', 104, '', '', NULL),
(23, 'Node', 105, '', '', NULL),
(24, 'Node', 106, '', '', NULL),
(25, 'Node', 107, '', '', NULL),
(26, 'Node', 113, '', '', NULL),
(27, 'Node', 114, '', '', NULL),
(28, 'Node', 115, '', '', NULL),
(29, 'Node', 116, '', '', NULL),
(30, 'Node', 117, '', '', NULL),
(31, 'Node', 118, '', '', NULL),
(32, 'Node', 119, '', '', NULL),
(33, 'Node', 121, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moves_activities`
--

CREATE TABLE IF NOT EXISTS `moves_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) NOT NULL,
  `moves_user_id` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `duration` double NOT NULL,
  `distance` double NOT NULL,
  `steps` int(11) NOT NULL,
  `groups` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `moves_activities`
--

INSERT INTO `moves_activities` (`id`, `activity_name`, `moves_user_id`, `created`, `duration`, `distance`, `steps`, `groups`) VALUES
(1, 'walking', 1, '2016-03-15', 31, 18, 36, 'walking'),
(2, 'walking', 1, '2016-03-20', 14, 10, 20, 'walking'),
(3, 'walking', 1, '2016-03-21', 118, 100, 200, 'walking'),
(4, 'walking', 1, '2016-03-22', 106, 109, 218, 'walking'),
(5, 'walking', 1, '2016-03-23', 60, 45, 91, 'walking'),
(6, 'walking', 1, '2016-03-25', 449, 583, 777, 'walking');

-- --------------------------------------------------------

--
-- Table structure for table `moves_users`
--

CREATE TABLE IF NOT EXISTS `moves_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `moves_users`
--

INSERT INTO `moves_users` (`id`, `userid`, `access_token`) VALUES
(1, '7882254734904342', 'sPrJYGy6BcDO8Gjvd9WLD64E9NfKZ2aGoJAKEzD8l3v609VQkJbh2UyxmO5m6m36');

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE IF NOT EXISTS `nodes` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `user_id` int(20) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `mime_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_status` int(1) NOT NULL DEFAULT '1',
  `comment_count` int(11) DEFAULT '0',
  `promote` tinyint(1) NOT NULL DEFAULT '0',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms` text COLLATE utf8_unicode_ci,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'node',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  `company_profile` tinyint(1) NOT NULL DEFAULT '0',
  `img_file_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=122 ;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`id`, `parent_id`, `user_id`, `title`, `slug`, `body`, `excerpt`, `status`, `mime_type`, `comment_status`, `comment_count`, `promote`, `path`, `terms`, `sticky`, `lft`, `rght`, `visibility_roles`, `type`, `updated`, `created`, `company_profile`, `img_file_name`) VALUES
(111, NULL, 0, 'Pic 1', 'Pic 1.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/Pic 1.jpg', NULL, 0, 27, 28, NULL, 'attachment', '2014-08-12 06:01:17', '2014-08-12 06:01:17', 0, NULL),
(67, NULL, 0, 'ScreenShot00014', 'ScreenShot00014.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00014.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-24 01:11:46', '2014-01-24 01:11:46', 0, NULL),
(68, NULL, 0, 'aboutus', 'aboutus.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/aboutus.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-24 01:14:48', '2014-01-24 01:14:48', 0, NULL),
(52, NULL, 0, 'b', 'blog-train.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/blog-train.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2013-12-17 01:37:19', '2013-12-17 01:37:19', 0, NULL),
(117, NULL, 1, '  Background & General Information', 'background-general-information', '<p>Egystone has been a leader in marble manufacturing, trading, and  contracting since 1988. After accomplishing major success with our  clients, and utilizing the experience accumulated through the years, as  well as making the best use of the Egystone team which expanded to  include members with extensive backgrounds in design and interior  finishing, Egystone evolved to expand its scope to include design,  interior, and finishing, and offer its clients a highly comprehensive  service. We are proud to put our expertise and professional knowhow to cater to  our clients'' needs. We continuously thrive for excellence in cooperating  with our clients to harmoniously integrate their needs with our  knowledge to transform their imagination to reality and guarantee  gratifying results.  ""Recognizing the need is the primary condition for design."" Charles  Eames.</p>', '', 1, NULL, 1, 0, 1, '/page/background-general-information', NULL, 0, 1, 2, '', 'page', '2015-12-24 22:38:35', '2015-12-24 22:12:00', 0, 'about_ph_1.jpg'),
(118, NULL, 1, 'Vision', 'vision', '<p>Reaching perfection in satisfying our clients.</p>', '', 1, NULL, 1, 0, 1, '/page/vision', NULL, 0, 3, 4, '', 'page', '2015-12-24 23:52:36', '2015-12-24 22:15:00', 0, 'about_ph_1.jpg'),
(119, NULL, 1, 'Mission', 'mission', '<p>To make the best of our experience, skills, and passion to provide our  clients with a comprehensive service at a quality that exceeds their  expectation.</p>', '', 1, NULL, 1, 0, 1, '/page/mission', NULL, 0, 5, 6, '', 'page', '2015-12-24 22:38:07', '2015-12-24 22:15:00', 0, 'about_ph_1.jpg'),
(120, NULL, 0, 'product-gallery-img4', 'product-gallery-img4.png', '', NULL, 0, 'image/png', 1, 0, 0, '/uploads/product-gallery-img4.png', NULL, 0, 29, 30, NULL, 'attachment', '2015-12-24 22:24:25', '2015-12-24 22:24:25', 0, NULL),
(121, NULL, 1, 'Interior', 'interior', '<p><img src="/egystone/uploads/product-gallery-img4.png" alt="k" width="355" height="355" /></p>', 'Egystone’s concept of design is drawing on all elements that are important to the client and translating them into a visual and factual experience. We totally believe in addressing our client’s preferences and transforming them into a reality that better works for them. Design is not just what it looks like and feels like. Design is how it works.” Steve Jobs', 1, NULL, 1, 0, 1, '/page/interior', NULL, 0, 7, 8, '', 'page', '2015-12-24 22:39:04', '2015-12-24 22:16:00', 0, 'interior_bg.jpg'),
(57, NULL, 0, 'ScreenShot00002', 'ScreenShot00002.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00002.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-15 11:31:16', '2014-01-15 11:31:16', 0, NULL),
(73, NULL, 0, 'ScreenShot00021', 'ScreenShot00021.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00021.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:23:24', '2014-01-25 05:23:24', 0, NULL),
(74, NULL, 0, 'ScreenShot00022', 'ScreenShot00022.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00022.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:23:42', '2014-01-25 05:23:42', 0, NULL),
(75, NULL, 0, 'ScreenShot00023', 'ScreenShot00023.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00023.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:27:51', '2014-01-25 05:27:51', 0, NULL),
(76, NULL, 0, 'ScreenShot00024', 'ScreenShot00024.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00024.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:28:09', '2014-01-25 05:28:09', 0, NULL),
(77, NULL, 0, 'ScreenShot00025', 'ScreenShot00025.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00025.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:28:29', '2014-01-25 05:28:29', 0, NULL),
(78, NULL, 0, 'ScreenShot00026', 'ScreenShot00026.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00026.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:28:47', '2014-01-25 05:28:47', 0, NULL),
(79, NULL, 0, 'ScreenShot00027', 'ScreenShot00027.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/ScreenShot00027.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-25 05:29:10', '2014-01-25 05:29:10', 0, NULL),
(80, NULL, 0, 'aboutus-banner', 'aboutus-banner.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/aboutus-banner.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 13:47:23', '2014-01-29 13:47:23', 0, NULL),
(81, NULL, 0, 'transhome-strategy', 'transhome-strategy.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-strategy.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 13:53:50', '2014-01-29 13:53:50', 0, NULL),
(82, NULL, 0, 'transhome-translation', 'transhome-translation.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-translation.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 14:18:14', '2014-01-29 14:18:14', 0, NULL),
(83, NULL, 0, 'transhome-languages', 'transhome-languages.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-languages.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 14:37:27', '2014-01-29 14:37:27', 0, NULL),
(84, NULL, 0, 'transhome-policies-procedures', 'transhome-policies-procedures.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-policies-procedures.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 14:51:27', '2014-01-29 14:51:27', 0, NULL),
(85, NULL, 0, 'transhome-policies-procedures-interpretation', 'transhome-policies-procedures-interpretation.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-policies-procedures-interpretation.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 14:57:22', '2014-01-29 14:57:22', 0, NULL),
(86, NULL, 0, 'transhome-interpretation-services', 'transhome-interpretation-services.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-interpretation-services.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 15:08:29', '2014-01-29 15:08:29', 0, NULL),
(87, NULL, 0, 'transhome-equipment-lease', 'transhome-equipment-lease.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-equipment-lease.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 16:24:53', '2014-01-29 16:24:53', 0, NULL),
(88, NULL, 0, 'transhome-global-covergae', 'transhome-global-covergae.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-global-covergae.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 16:30:13', '2014-01-29 16:30:13', 0, NULL),
(89, NULL, 0, 'transhome-training', 'transhome-training.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transhome-training.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 16:38:46', '2014-01-29 16:38:46', 0, NULL),
(90, NULL, 0, 'transhome-interpretation-services', '52e99178-cf0c-44bd-978d-5190323f7c01-transhome-interpretation-services.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/52e99178-cf0c-44bd-978d-5190323f7c01-transhome-interpretation-services.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-01-29 16:40:40', '2014-01-29 16:40:40', 0, NULL),
(91, NULL, 0, 'media', 'media.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/media.jpg', NULL, 0, 1, 2, NULL, 'attachment', '2014-02-01 02:37:16', '2014-02-01 02:37:16', 0, NULL),
(92, NULL, 0, 'media', '52ecc121-83fc-4c8b-bcff-5758323f7c01-media.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/52ecc121-83fc-4c8b-bcff-5758323f7c01-media.jpg', NULL, 0, 3, 4, NULL, 'attachment', '2014-02-01 02:40:49', '2014-02-01 02:40:49', 0, NULL),
(94, NULL, 0, 'desktop', 'desktop.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/desktop.jpg', NULL, 0, 7, 8, NULL, 'attachment', '2014-02-01 03:26:13', '2014-02-01 03:26:13', 0, NULL),
(93, NULL, 0, 'media', '52ecc189-6410-4040-9979-5758323f7c01-media.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/52ecc189-6410-4040-9979-5758323f7c01-media.jpg', NULL, 0, 5, 6, NULL, 'attachment', '2014-02-01 02:42:33', '2014-02-01 02:42:33', 0, NULL),
(95, NULL, 0, 'field-oriented', 'field-oriented.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/field-oriented.jpg', NULL, 0, 9, 10, NULL, 'attachment', '2014-02-01 03:26:19', '2014-02-01 03:26:19', 0, NULL),
(96, NULL, 0, 'intellectual', 'intellectual.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/intellectual.jpg', NULL, 0, 11, 12, NULL, 'attachment', '2014-02-01 03:26:25', '2014-02-01 03:26:25', 0, NULL),
(97, NULL, 0, 'it', 'it.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/it.jpg', NULL, 0, 13, 14, NULL, 'attachment', '2014-02-01 03:26:32', '2014-02-01 03:26:32', 0, NULL),
(98, NULL, 0, 'legal', 'legal.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/legal.jpg', NULL, 0, 15, 16, NULL, 'attachment', '2014-02-01 03:26:43', '2014-02-01 03:26:43', 0, NULL),
(99, NULL, 0, 'Literature', 'Literature.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/Literature.jpg', NULL, 0, 17, 18, NULL, 'attachment', '2014-02-01 03:26:49', '2014-02-01 03:26:49', 0, NULL),
(100, NULL, 0, 'subtitling', 'subtitling.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/subtitling.jpg', NULL, 0, 19, 20, NULL, 'attachment', '2014-02-01 03:26:56', '2014-02-01 03:26:56', 0, NULL),
(101, NULL, 0, 'transcription', 'transcription.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/transcription.jpg', NULL, 0, 21, 22, NULL, 'attachment', '2014-02-01 03:27:03', '2014-02-01 03:27:03', 0, NULL),
(102, NULL, 0, 'typesetting', 'typesetting.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/typesetting.jpg', NULL, 0, 23, 24, NULL, 'attachment', '2014-02-01 03:27:10', '2014-02-01 03:27:10', 0, NULL),
(103, NULL, 0, 'voice-over', 'voice-over.jpg', '', NULL, 0, 'image/jpeg', 1, 0, 0, '/uploads/voice-over.jpg', NULL, 0, 25, 26, NULL, 'attachment', '2014-02-01 03:27:17', '2014-02-01 03:27:17', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nodes_taxonomies`
--

CREATE TABLE IF NOT EXISTS `nodes_taxonomies` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `node_id` int(20) NOT NULL DEFAULT '0',
  `taxonomy_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `publicationscategory_id` int(11) DEFAULT NULL,
  `imgpath` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `imgpath_thumb` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `description`, `created`, `modified`, `publicationscategory_id`, `imgpath`, `imgpath_thumb`, `excerpt`) VALUES
(2, 'Egypt Constitution 2013', '<p>This publication contains the Egyptian Constitution for 2013</p>', '2014-01-15 10:41:02', '2014-03-14 06:35:15', 2, '/uploads/53230593-7d74-4b89-8c66-1bb9323f7c01-dostoor.jpg', '/uploads/public.jpg', 'This publication contains the Egyptian Constitution for 2013'),
(4, 'UAE Federal Supreme Court Verdicts', '<p>This publication comprises a selection of the most notable UAE Federal Supreme Court Rulings.</p>', '2014-03-14 05:51:45', '2014-09-27 02:47:32', 2, '/uploads/542687b4-b1e0-4e83-873e-4963323f7c01-ScreenShot00079.jpg', NULL, 'This publication comprises a selection of the most notable UAE Federal Supreme Court Rulings'),
(5, 'Legal Glossary', '<p>This publication contains a Legal Glossary for your use.</p>', '2014-09-28 07:45:46', '2014-09-29 04:04:27', 4, '/uploads/54293cbb-1c28-4d02-af46-27e7323f7c01-Legal Glossary-1.jpg', NULL, ''),
(6, 'Newsletter', '<p>This publication contains our monthly legal publication 2014</p>', '2014-11-01 03:02:20', '2014-11-01 03:02:20', 1, '/uploads/Untitled-1.jpg', NULL, 'This publication contains our monthly legal publication 2014');

-- --------------------------------------------------------

--
-- Table structure for table `publicationscategories`
--

CREATE TABLE IF NOT EXISTS `publicationscategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `publicationscategories`
--

INSERT INTO `publicationscategories` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Judgments', '2013-01-06 01:38:15', '2013-01-18 15:01:10'),
(2, 'Legislation', '2013-01-18 15:01:23', '2014-08-12 07:57:46'),
(3, 'References', '2013-01-18 15:01:47', '2013-01-18 15:01:47'),
(4, 'Dictionaries', '2014-09-28 03:35:21', '2014-09-28 03:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `block_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `title`, `alias`, `description`, `block_count`) VALUES
(3, 'none', '', '', 2),
(4, 'right', 'right', '', 1),
(6, 'left', 'left', '', 0),
(7, 'header', 'header', '', 0),
(8, 'footer', 'footer', '', 0),
(9, 'region1', 'region1', '', 0),
(10, 'region2', 'region2', '', 0),
(11, 'region3', 'region3', '', 0),
(12, 'region4', 'region4', '', 0),
(13, 'region5', 'region5', '', 0),
(14, 'region6', 'region6', '', 0),
(15, 'region7', 'region7', '', 0),
(16, 'region8', 'region8', '', 0),
(17, 'region9', 'region9', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `alias`, `created`, `updated`) VALUES
(1, 'Admin', 'admin', '2009-04-05 00:10:34', '2009-04-05 00:10:34'),
(2, 'Registered', 'registered', '2009-04-05 00:10:50', '2009-04-06 05:20:38'),
(3, 'Public', 'public', '2009-04-05 00:12:38', '2009-04-07 01:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `title`, `description`, `input_type`, `editable`, `weight`, `params`) VALUES
(6, 'Site.title', 'EGYSTONE', '', '', '', 1, 1, ''),
(7, 'Site.tagline', 'Translation\r\nMedia: the world has become a small village due to the great advancements in the telecommunication field. That is why we always endeavor to excel in conveying the media messages in different languages to information seekers. We have distinguished expertise in copyrighting and translating material for diverse audio-visual media channels including but not limited to magazines, newspapers, advertisements, newsletters, press reports and releases, periodicals, billboards in addition to radio commercials, programs, scripts and announcements.\r\nField Oriented Translation: we have a profound experience in translating diverse documents that are generated through different fields of practice such as law, trade, accounting (chartered and non-chartered), banking, auditing and medicine including but not limited to contracts, agreements, memos, laws, judgments, briefings, power of attorneys, balance sheets, financial statements, profit and loss documents, fund prospectus, accounting articles, ledgers, tender specifications, shipping and freight documents, financial reports, economic reviews, technical writing, medical reports and research…etc.\r\nIntellectual Property: We support the field of empirical research and scientific advancements by facilitating and translating patents, trademarks, research papers, specialized journals, academic publications and references.\r\nLiterature: We believe in the significance of art and its impact on the different cultures regardless of the geographical boundaries that separate them. Our expertise include sharing the pieces of art among the different nations through the translation of literary books, novels, poetry, prose, short stories…etc.\r\nInformation Technology & Internet: We always seek to keep up with the latest trends in the field of technological advancements, and we are always keen on sharing them with our clients. We provide translation of technical policies and manuals including, but not limited to, IT infrastructure, IT security, networks, automated enterprise architecture structures, tailored systems arabization, website localization, service level agreements, wireframes, detailed functional specifications, IT non-disclosure agreements…etc.\r\n\r\n\r\nINTERPRETATION\r\nEvent Management: provide interpretation services in conferences, seminars, forums, training courses, round tables, one-on-one meetings...etc \r\nDistance Interpretation: Third party conversations and teleconferencing interpretation services are provided in a professional manner and according to an accurately planned agenda.\r\nEquipment Lease: we provide interpretation equipment for events on competitive prices.\r\n\r\nSystems and Training\r\nTraining: We provide tailored training programs in specialized English in accordance with the requirements of the client\r\nSystems: We provide the required knowledge regarding the implementation and usage of translation technologies in different fields and practices\r\n\r\n\r\n     \r\n', '', '', 'textarea', 1, 2, ''),
(8, 'Site.email', 'info@thetranshome.com', '', '', '', 1, 3, ''),
(9, 'Site.status', '1', '', '', 'checkbox', 1, 5, ''),
(12, 'Meta.robots', 'Translation, Interpretation, Translation services, Translation in Dubai, Translation in Cairo, Legal translation, certified translation, Financial translation, Localization, Translator, Interpreter ', '', '', '', 1, 6, ''),
(13, 'Meta.keywords', 'Translation, Interpretation, Translation services, Translation in Dubai, Translation in Cairo, Legal translation, certified translation, Financial translation, Localization, Translator, Interpreter, desktop publishing, internationalization, copywriting, transcription. ', '', '', 'textarea', 1, 7, ''),
(14, 'Meta.description', 'Translation and Localization Services in Cairo and Dubai', '', '', 'textarea', 1, 8, ''),
(15, 'Meta.generator', 'Croogo - Content Management System', '', '', '', 0, 9, ''),
(16, 'Service.akismet_key', 'your-key', '', '', '', 1, 11, ''),
(17, 'Service.recaptcha_public_key', 'your-public-key', '', '', '', 1, 12, ''),
(18, 'Service.recaptcha_private_key', 'your-private-key', '', '', '', 1, 13, ''),
(19, 'Service.akismet_url', 'http://your-blog.com', '', '', '', 1, 10, ''),
(20, 'Site.theme', 'egystone', '', '', '', 0, 14, ''),
(21, 'Site.feed_url', '', '', '', '', 0, 15, ''),
(22, 'Reading.nodes_per_page', '5', '', '', '', 1, 16, ''),
(23, 'Writing.wysiwyg', '1', 'Enable WYSIWYG editor', '', 'checkbox', 1, 17, ''),
(24, 'Comment.level', '1', '', 'levels deep (threaded comments)', '', 1, 18, ''),
(25, 'Comment.feed_limit', '10', '', 'number of comments to show in feed', '', 1, 19, ''),
(26, 'Site.locale', 'eng', '', '', '', 0, 20, ''),
(27, 'Reading.date_time_format', 'D, M d Y H:i:s', '', '', '', 1, 21, ''),
(28, 'Comment.date_time_format', 'M d, Y', '', '', '', 1, 22, ''),
(29, 'Site.timezone', '0', '', 'zero (0) for GMT', '', 1, 4, ''),
(32, 'Hook.bootstraps', 'tinymce', '', '', '', 0, 23, '');

-- --------------------------------------------------------

--
-- Table structure for table `taxonomies`
--

CREATE TABLE IF NOT EXISTS `taxonomies` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `term_id` int(10) NOT NULL,
  `vocabulary_id` int(10) NOT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `taxonomies`
--

INSERT INTO `taxonomies` (`id`, `parent_id`, `term_id`, `vocabulary_id`, `lft`, `rght`) VALUES
(5, NULL, 5, 2, 5, 6),
(4, NULL, 4, 2, 3, 4),
(3, NULL, 3, 2, 1, 2),
(6, NULL, 6, 2, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `slug`, `description`, `updated`, `created`) VALUES
(4, 'Translation', 'translation', '', '2014-01-20 06:04:08', '2014-01-20 06:04:08'),
(5, 'Transhome News', 'transhome-news', '', '2014-01-20 06:04:18', '2014-01-20 06:04:18'),
(3, 'Translation Videos', 'mytag', '', '2014-03-15 01:11:52', '2009-08-26 14:42:43'),
(6, 'Term and Phrase', 'term-and-phrase', 'Term and Phrase Blog', '2014-03-13 05:27:05', '2014-03-13 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `job` varchar(500) NOT NULL,
  `company` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `company`, `description`, `imgpath`) VALUES
(3, 'Naief Yahya ', 'Senior Associate', 'Al Tamimi & Co.', '<p>&ldquo;Translation of legal texts require accuracy, speed and honesty, I have found TRANSHOME to be unprecedented in fulfilling such necessities</p>', '/uploads/testimonial/54268835-f698-4d6a-a375-0c90323f7c01-testimonial-tamimi.jpg'),
(4, 'Tarek El Goweiny', 'General Manager ', 'National Catering Company, Abu Dhabi', '<p>Excellent Services...Friendly Staff...Incomparable Experience.</p>', '/uploads/testimonial/542688d8-2278-4ac1-acb9-4963323f7c01-watania-testimonial.jpg'),
(8, 'Mohamed Farouk', 'Counselor at the Arab League', 'The Arab League', '<p>&nbsp;</p>\r\n<div>I have dealt with several translation firms, but TRANSHOME stands out by far</div>', '/uploads/testimonial/54268891-d46c-420d-86f3-4ad0323f7c01-testimonials.jpg'),
(6, 'Maureen E. Conner, Ph.D.', 'Associate Professor and Director, Judicial administration program', 'Michigan State university', '<p style="text-align: justify;">In my opinion, TRANSHOME&rsquo;s emphasis on translation of document combined with experienced translators who can navigate the cultural differences makes this company a worthy partner in any endeavor where multiple cultures and languages are a factor</p>', '/uploads/testimonial/542688b1-5ed0-4176-9958-4963323f7c01-testimonials.jpg'),
(7, 'Fakhry El Masry', 'Senior Associate', 'Zaki Hashem & Partners Attorneys at Law', '<p>\r\n<div>TRANSHOME provides superb services at astounding prices</div>\r\n<div></div>\r\n</p>', '/uploads/testimonial/53219f52-9e70-4ed0-91c0-082f323f7c01-testimonials.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `format_show_author` tinyint(1) NOT NULL DEFAULT '1',
  `format_show_date` tinyint(1) NOT NULL DEFAULT '1',
  `comment_status` int(1) NOT NULL DEFAULT '1',
  `comment_approve` tinyint(1) NOT NULL DEFAULT '1',
  `comment_spam_protection` tinyint(1) NOT NULL DEFAULT '0',
  `comment_captcha` tinyint(1) NOT NULL DEFAULT '0',
  `params` text COLLATE utf8_unicode_ci,
  `plugin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `alias`, `description`, `format_show_author`, `format_show_date`, `comment_status`, `comment_approve`, `comment_spam_protection`, `comment_captcha`, `params`, `plugin`, `updated`, `created`) VALUES
(1, 'Page', 'page', 'A page is a simple method for creating and displaying information that rarely changes, such as an "About us" section of a website. By default, a page entry does not allow visitor comments.', 0, 0, 0, 1, 0, 0, '', '', '2009-09-09 00:23:24', '2009-09-02 18:06:27'),
(2, 'Blog', 'blog', 'A blog entry is a single post to an online journal, or blog.', 1, 1, 2, 1, 0, 0, '', '', '2009-09-15 12:15:43', '2009-09-02 18:20:44'),
(4, 'Node', 'node', 'Default content type.', 1, 1, 2, 1, 0, 0, '', '', '2009-10-06 21:53:15', '2009-09-05 23:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `types_vocabularies`
--

CREATE TABLE IF NOT EXISTS `types_vocabularies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(10) NOT NULL,
  `vocabulary_id` int(10) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `types_vocabularies`
--

INSERT INTO `types_vocabularies` (`id`, `type_id`, `vocabulary_id`, `weight`) VALUES
(31, 2, 2, NULL),
(30, 2, 1, NULL),
(25, 4, 2, NULL),
(24, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_key` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `name`, `email`, `website`, `activation_key`, `image`, `bio`, `timezone`, `status`, `updated`, `created`) VALUES
(1, 1, 'admin', '40b82a59f4bc489d01d33db8ea9fe92502202ac7', 'Administrator', 'you@your-site.com', '/about', '', '', '', '0', 1, '2012-08-21 01:08:28', '2009-04-05 00:20:34'),
(10, 1, 'sara', '863ea96fcc33e33e9608927df376d4fafe8c366c', 'sara', 'sara@test.com', '', 'bb4cd6d69dc556ddbcf226ee0b548ad1', NULL, NULL, '0', 1, '2016-03-25 14:22:56', '2016-03-25 14:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `vocabularies`
--

CREATE TABLE IF NOT EXISTS `vocabularies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `multiple` tinyint(1) NOT NULL DEFAULT '0',
  `tags` tinyint(1) NOT NULL DEFAULT '0',
  `plugin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `title`, `alias`, `description`, `required`, `multiple`, `tags`, `plugin`, `weight`, `updated`, `created`) VALUES
(1, 'Categories', 'categories', '', 0, 1, 0, '', 1, '2010-05-17 20:03:11', '2009-07-22 02:16:21'),
(2, 'Tags', 'tags', '', 0, 1, 0, '', 2, '2010-05-17 20:03:11', '2009-07-22 02:16:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
