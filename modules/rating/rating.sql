CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(10) NOT NULL,
  `mark` int(10) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `rating_ip` (
  `id` int(10) NOT NULL,
  `ip` varchar(16) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
