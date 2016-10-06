DROP TABLE IF EXISTS `tpb_message`;
CREATE TABLE `tpb_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(25) NOT NULL,
  `content` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  `pre_id` int(10) unsigned,
  `sort` int(10) unsigned NOT NULL DEFAULT 50,
  PRIMARY KEY (`id`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `tpb_article` (`id`),
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`pre_id`) REFERENCES `tpb_message` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;