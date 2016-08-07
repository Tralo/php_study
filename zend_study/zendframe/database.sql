CREATE TABLE `message`(
	`message_id` int(10) unsigned NOT NULL auto_increment,
	`sender` varchar(64) NOT NULL,
	`getter` varchar(64) NOT NULL,
	`sendtime` datetime NOT NULL,
	`content` varchar(2000) NOT NULL,
	PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE item(
	id bigint unsigned primary key auto_increment,
	name varchar(64) not null,
	description varchar(128) not null,
	vote_count bigint unsigned) engine = MyISAM DEFAULT CHARSET=utf8;

create table vote_log(
	id bigint unsigned primary key auto_increment,
	ip varchar(20) not null,
	vote_date bigint not null,
	item_id bigint not null
) engine = MyISAM DEFAULT CHARSET=utf8;

create table filter(
	id bigint unsigned primary key auto_increment,
	ip varchar(20)
) engine MyISAM;