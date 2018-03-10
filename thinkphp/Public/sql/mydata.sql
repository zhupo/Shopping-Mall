# Host: localhost  (Version: 5.5.40)
# Date: 2017-01-05 21:46:32
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "nc_admin"
#

DROP TABLE IF EXISTS `nc_admin`;
CREATE TABLE `nc_admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) DEFAULT NULL COMMENT '管理员账号',
  `adminPassword` char(32) DEFAULT NULL COMMENT '管理员密码',
  `adminLevel` int(4) DEFAULT '1' COMMENT '管理员等级，1为超级管理员，2为普通管理员，3为内容管理员、4为信息浏览员',
  `realName` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `sex` char(2) DEFAULT NULL COMMENT '性别，男|女',
  `phone` varchar(30) DEFAULT NULL COMMENT '管理员联系电话',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '管理员',
  `loginTimes` int(11) DEFAULT '0' COMMENT '登录次数',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='管理员表';

#
# Data for table "nc_admin"
#

INSERT INTO `nc_admin` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e',1,'刘攀','男','18874120997','2016-12-27 20:24:44','admin',0),(2,'ceshib','e10adc3949ba59abbe56e057f20f883e',1,'测试','女','13142010423','2017-01-01 16:17:43','admin',0),(7,'aaaaaa','e10adc3949ba59abbe56e057f20f883e',1,'叶小懋','女','13142010423','2016-12-28 22:02:33','admin',0),(8,'bbbbbb','e10adc3949ba59abbe56e057f20f883e',1,'张三','男','123456','2016-12-28 21:56:41','admin',0),(9,'cccccc','e10adc3949ba59abbe56e057f20f883e',1,'haha','男','123456','2016-12-30 14:36:06','admin',0),(12,'ddddd','e10adc3949ba59abbe56e057f20f883e',1,'王五','男','123','2017-01-01 16:18:32','admin',0);

#
# Structure for table "nc_artonce"
#

DROP TABLE IF EXISTS `nc_artonce`;
CREATE TABLE `nc_artonce` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `classId` int(11) DEFAULT '0' COMMENT '单文章类别',
  `title` varchar(30) DEFAULT NULL COMMENT '标题',
  `briefIntro` varchar(255) DEFAULT NULL COMMENT '简介',
  `content` text COMMENT '内容',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  `hits` int(11) DEFAULT '0' COMMENT '点击率',
  `isChecked` bit(1) DEFAULT b'1' COMMENT '是否通过审核',
  `calss` varchar(30) DEFAULT NULL COMMENT '文章类别',
  PRIMARY KEY (`Id`),
  KEY `classId` (`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='单文章表';

#
# Data for table "nc_artonce"
#


#
# Structure for table "nc_buju"
#

DROP TABLE IF EXISTS `nc_buju`;
CREATE TABLE `nc_buju` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(20) DEFAULT NULL COMMENT '栏目名称',
  `topcolor` char(30) DEFAULT NULL COMMENT '上部颜色',
  `footcolor` char(30) DEFAULT NULL COMMENT '下部颜色',
  `images` varchar(50) DEFAULT NULL COMMENT '图片路径',
  `class` varchar(20) DEFAULT NULL COMMENT '选择器名',
  `classId` int(11) NOT NULL DEFAULT '0' COMMENT '类别Id',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='布局表';

#
# Data for table "nc_buju"
#

INSERT INTO `nc_buju` VALUES (1,'母婴专区','#1d84a7','#48aacd','image/f_one.png','floor_one',1),(2,'美妆护肤','#a50332','#cc3467','image/f_two.png','floor_two',2),(3,'家具生活','#217575','#339a99','image/f_three.png','floor_three',3),(4,'食品营养','#ee6018','#ff9a66','image/f_four.png','floor_four',4),(5,'全球直邮','#0f7f29','#3ab055','image/f_five.png','floor_five',5);

#
# Structure for table "nc_class"
#

DROP TABLE IF EXISTS `nc_class`;
CREATE TABLE `nc_class` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fatherId` int(11) DEFAULT '0' COMMENT '父类别Id，如果是0，说明该类别是顶级类别',
  `className` varchar(30) DEFAULT NULL COMMENT '类别名称',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='类别表';

#
# Data for table "nc_class"
#

INSERT INTO `nc_class` VALUES (1,0,'母婴专区','2016-12-27 21:41:22','admin'),(2,0,'美妆护肤','2017-01-02 22:44:55','admin'),(3,0,'家具生活','2017-01-02 22:45:19','admin'),(4,0,'食品营养','2017-01-02 22:45:39','admin'),(5,0,'全球直邮','2017-01-02 22:46:02','admin'),(6,1,'奶粉','2017-01-03 22:46:02','admin'),(8,6,'儿童配方奶粉','2017-01-05 11:12:50','admin'),(9,1,'玩具','2017-01-05 14:25:38','admin'),(10,1,'宝宝洗护','2017-01-05 14:26:44','admin'),(11,9,'直升飞机','2017-01-05 14:27:46','admin'),(12,10,'无害香皂','2017-01-05 14:29:25','admin'),(13,9,'赛车','2017-01-05 14:30:18','admin');

#
# Structure for table "nc_order"
#

DROP TABLE IF EXISTS `nc_order`;
CREATE TABLE `nc_order` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNum` char(20) DEFAULT NULL COMMENT '订单编号，由年月日时分秒+6位随机数组成的编号',
  `contactName` varchar(20) DEFAULT NULL COMMENT '联系人',
  `contactSex` char(2) DEFAULT NULL COMMENT '联系人性别，先生|女士',
  `contactPhone` varchar(30) DEFAULT NULL COMMENT '联系电话，多个用逗号隔开',
  `contactEmail` varchar(60) DEFAULT NULL COMMENT '联系人电子邮箱',
  `contactQQ` varchar(20) DEFAULT NULL COMMENT '联系人QQ号码',
  `contactAddress` varchar(40) DEFAULT NULL COMMENT '联系地址',
  `orderMonny` float(32,3) DEFAULT '0.000' COMMENT '订单金额',
  `paymentMethod` varchar(30) DEFAULT '0' COMMENT '支付方式，存储支付方式的数字代号',
  `shippingMethod` varchar(30) DEFAULT '0' COMMENT '送货方式，存储送货方式的数字代号',
  `remarks` text COMMENT '订单备注',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  `orderStatus` varchar(20) DEFAULT '0' COMMENT '订单状态，存储订单状态的数字代号',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';

#
# Data for table "nc_order"
#


#
# Structure for table "nc_product"
#

DROP TABLE IF EXISTS `nc_product`;
CREATE TABLE `nc_product` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `classId` int(11) DEFAULT '0' COMMENT '商品类别',
  `title` varchar(30) DEFAULT NULL COMMENT '商品名',
  `price` float(16,0) DEFAULT NULL COMMENT '产品价格，如果为0则价格未知',
  `specification` varchar(50) DEFAULT NULL COMMENT '规格，如个、件、箱',
  `stocks` int(11) DEFAULT '0' COMMENT '库存',
  `thumb` varchar(200) DEFAULT NULL COMMENT '缩略图地址',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '管理员',
  `isCommend` varchar(8) DEFAULT NULL COMMENT '是否推荐',
  `ishome` varchar(8) DEFAULT NULL COMMENT '是否首页',
  `producer` varchar(30) DEFAULT NULL COMMENT '产地',
  PRIMARY KEY (`Id`),
  KEY `classId` (`classId`),
  CONSTRAINT `nc_product_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `nc_class` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='产品详细信息表';

#
# Data for table "nc_product"
#

INSERT INTO `nc_product` VALUES (1,8,'澳洲无添加奶粉',188,'2000克/罐',280,'2017-01/05/586de9dc4b2d5.png',NULL,NULL,'推荐',NULL,NULL),(2,8,'惠氏母婴奶粉',146,'1000克/罐',876,'2017-01/05/586deb80ba2c0.jpg',NULL,NULL,'推荐',NULL,NULL),(3,8,'美素佳儿',675,'1500克/罐',887,'2017-01/05/586debbb5fdb6.png',NULL,NULL,'推荐',NULL,NULL),(4,8,'美赞臣',398,'2000克/罐',459,'2017-01/05/586dec0a8eb34.png',NULL,NULL,'推荐',NULL,NULL),(5,8,'爱他美',389,'1000克/罐',765,'2017-01/05/586dec57e216b.png',NULL,NULL,NULL,'首页',NULL),(6,11,'航拍直升机',688,'个',68,'2017-01/05/586e479c99b42.jpg',NULL,NULL,'推荐',NULL,NULL);

#
# Structure for table "nc_orderdetail"
#

DROP TABLE IF EXISTS `nc_orderdetail`;
CREATE TABLE `nc_orderdetail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) DEFAULT NULL COMMENT '外键，所属的订单Id',
  `productId` int(11) DEFAULT NULL COMMENT '外键，订购的产品的Id',
  `productNum` int(11) DEFAULT '0' COMMENT '订购的产品的数量',
  `productPrice` float(32,3) DEFAULT '0.000' COMMENT '订购的产品的单价',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  PRIMARY KEY (`Id`),
  KEY `orderId` (`orderId`),
  KEY `productId` (`productId`),
  CONSTRAINT `nc_orderdetail_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `nc_order` (`Id`),
  CONSTRAINT `nc_orderdetail_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `nc_product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单详情表';

#
# Data for table "nc_orderdetail"
#


#
# Structure for table "nc_favorite"
#

DROP TABLE IF EXISTS `nc_favorite`;
CREATE TABLE `nc_favorite` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL COMMENT '外键，购物车中产品的Id',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  PRIMARY KEY (`Id`),
  KEY `productId` (`productId`),
  CONSTRAINT `nc_favorite_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `nc_product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收藏夹表';

#
# Data for table "nc_favorite"
#


#
# Structure for table "nc_rebook"
#

DROP TABLE IF EXISTS `nc_rebook`;
CREATE TABLE `nc_rebook` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `reType` int(1) DEFAULT '0' COMMENT '留言类别，1为售后反馈，2为发展建议，3为投诉意见，4为其他意见',
  `contactName` varchar(20) DEFAULT NULL COMMENT '联系人',
  `contactSex` char(2) DEFAULT NULL COMMENT '联系人性别，先生|女士',
  `contactPhone` varchar(30) DEFAULT NULL COMMENT '联系电话，多个用逗号隔开',
  `contactEmail` varchar(60) DEFAULT NULL COMMENT '联系人电子邮箱',
  `content` text COMMENT '留言内容',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  `isChecked` int(1) DEFAULT '0' COMMENT '是否通过审核',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言信息表';

#
# Data for table "nc_rebook"
#


#
# Structure for table "nc_shopcar"
#

DROP TABLE IF EXISTS `nc_shopcar`;
CREATE TABLE `nc_shopcar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL COMMENT '外键，购物车中产品的Id',
  `productNum` int(11) DEFAULT '1' COMMENT '欲购买产品的数量',
  `addTime` datetime DEFAULT NULL COMMENT '添加时间',
  `updateTime` datetime DEFAULT NULL COMMENT '最后修改时间',
  `addUser` varchar(20) DEFAULT NULL COMMENT '添加用户',
  PRIMARY KEY (`Id`),
  KEY `productId` (`productId`),
  CONSTRAINT `nc_shopcar_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `nc_product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='购物车表';

#
# Data for table "nc_shopcar"
#


#
# Structure for table "nc_user"
#

DROP TABLE IF EXISTS `nc_user`;
CREATE TABLE `nc_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL COMMENT '会员账号',
  `password` char(200) DEFAULT NULL COMMENT '会员密码',
  `realName` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `sex` char(2) DEFAULT NULL COMMENT '性别，先生|女士',
  `brithday` varchar(20) DEFAULT NULL COMMENT '生日',
  `phone` varchar(30) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(60) DEFAULT NULL COMMENT '电子邮箱',
  `qq` varchar(15) DEFAULT NULL COMMENT 'QQ号码',
  `regTime` datetime DEFAULT NULL COMMENT '注册时间',
  `loginTimes` int(11) DEFAULT '0' COMMENT '登录次数',
  `lastLoginTime` datetime DEFAULT NULL COMMENT '最后一次登录时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员表';

#
# Data for table "nc_user"
#

INSERT INTO `nc_user` VALUES (1,'18874120997','e99a18c428cb38d5f260853678922e03',NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-02 18:51:33',0,NULL),(2,'13575193230','aa6a4c052e4037222256432c61ab3956',NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-05 21:38:32',0,NULL);
