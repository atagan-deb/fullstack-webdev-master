create database test_db;
drop database test_db;

create table test_db.test_table (
	id int(6) unsigned default 0 comment 'ID',
	val varchar(20) default 'hello' comment '値'
);

drop table test_db.test_table ;

desc test_db.test_table;
show full columns from test_db.test_table;
show create table test_db.test_table ;