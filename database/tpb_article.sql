DROP TABLE IF EXISTS `tpb_article`;
CREATE TABLE `tpb_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30),
  `tag` varchar(30),
  `content` text,
  `create_datetime` datetime NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT 50,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tpb_category` (`id`),
  CONSTRAINT `article_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tpb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;