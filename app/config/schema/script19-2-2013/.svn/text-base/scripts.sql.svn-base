
CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `imageurl` varchar(100) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
   `status` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;




CREATE TABLE IF NOT EXISTS `adv_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `adv_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB   DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;




CREATE TABLE IF NOT EXISTS `filesystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
`description` varchar(255) DEFAULT NULL,  
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS `sitesliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path` text CHARACTER SET utf8 NOT NULL,
  `desc` text CHARACTER SET utf8,
  `imglink` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '#',
  `link_target` tinyint(4) DEFAULT '0',
  `image_order` int(11) DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;