CREATE TABLE `message`(
	`message_id` int(10) unsigned NOT NULL auto_increment,
	`sender` varchar(64) NOT NULL,
	`getter` varchar(64) NOT NULL,
	`sendtime` datetime NOT NULL,
	`content` varchar(2000) NOT NULL,
	PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;