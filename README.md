# ISUCON2014

---

## url
- https://gist.github.com/941/d18605a06c7fc93b21ef#file-isucon4online-md
- https://gist.github.com/mirakui/e394ed543415852d34a6
- http://isucon4-portal.herokuapp.com/

- https://idobata.io/#/organization/isucon4/room/qualifier-sat

### api key
- 79-3-ncfwsd-kfyx-1beafa3b21174d81c2da5c4cb9456cee3b5580d8


### mysql

mysql> show create table users \G
*************************** 1. row ***************************
       Table: users
Create Table: CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=200001 DEFAULT CHARSET=utf8
1 row in set (0.00 sec)


mysql> show create table login_log \G
*************************** 1. row ***************************
       Table: login_log
Create Table: CREATE TABLE `login_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `succeeded` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70615 DEFAULT CHARSET=utf8
1 row in set (0.00 sec)
