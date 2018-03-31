create database php_login_db;
	use php_login_db;
	create table users(
		id int(50) not null,
		email varchar (200) not null,
		password varchar (200) not null
		)Engine InnoDB default charset = latin1;