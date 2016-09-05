DROP TABLE IF EXISTS `tpb_category`;
CREATE TABLE `tpb_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT 50,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT category_user UNIQUE (category_name,user_id),
  FOREIGN KEY (`user_id`) REFERENCES `tpb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;