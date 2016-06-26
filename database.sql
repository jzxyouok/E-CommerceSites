#创建一个数据库
CREATE DATABASE ESHOP;
#创建一个商品类型表
create table it_type(
	id tinyint unsigned  primary key auto_increment,
	type_name varchar(32) not null comment '商品类型的名称',
	index (type_name)
)engine myisam charset utf8;

