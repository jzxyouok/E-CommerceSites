###TP商场的数据库设计###

#库名：TPshop
#表名：sp_goods

--创建数据库：
CREATE DATABASE TPshop;

--创建商品表
---每个字段都必须设置NOT NULL；
---自增长从35开始
---unsigned表示只取正数
---设置DEFAULT属性，表示数据写入的时候该字段内容不做要求；
CREATE TABLE `sp_goods`(
`goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
`goods_name` VARCHAR (128) NOT NULL COMMENT '商品名称',
`goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
`goods_number` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '商品数量',
`goods_weight` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品重量',
`good_introduce` text COMMENT '商品详情介绍',
`brand_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品所属品牌',
`cat_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品所属分类',
`type_id` smallint(5) unsigned NOT NULL COMMENT '类型ID',
`country` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '商品产地',
`is_qiang` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0：不抢 1：抢',
`is_hot` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0：不热 1：热',
`is_new` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0：不新 1：新',
`goods_big_logo` char(128) NOT NULL DEFAULT '' COMMENT '图片LOGO大图',
`goods_small_logo` char(128) NOT NULL DEFAULT '' COMMENT '图片LOGO小图',
`sale_time` int(11) NOT NULL DEFAULT '0' COMMENT '商品上架时间',
`is_del` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0：正常 1：删除',
`add_time` int(11) NOT NULL COMMENT '添加商品时间',
`upd_time` int(11) NOT NULL COMMENT '修改商品时间',
PRIMARY KEY (`goods_id`),
UNIQUE KEY `goods_name`(`goods_name`),
KEY `goods_price`(`goods_price`),
KEY `add_time`(`add_time`)
)ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='商品表';



