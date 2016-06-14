/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : legoushop

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2016-06-14 16:00:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for legoushop_goods
-- ----------------------------
DROP TABLE IF EXISTS `legoushop_goods`;
CREATE TABLE `legoushop_goods` (
  `goods_id` bigint(16) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `color` tinytext NOT NULL,
  `amount` int(11) NOT NULL,
  `discount_status` tinyint(1) NOT NULL DEFAULT '0',
  `discount_price` decimal(9,2) DEFAULT NULL,
  `discount_amount` decimal(9,2) DEFAULT '0.00',
  `discount_start_time` int(11) DEFAULT NULL,
  `discount_end_time` int(11) DEFAULT NULL,
  `details` text NOT NULL,
  `message` text,
  `more` text,
  `sale_num_month` int(11) NOT NULL DEFAULT '0',
  `total_sale_num` mediumtext NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `keyword` text NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000000000000010 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of legoushop_goods
-- ----------------------------
INSERT INTO `legoushop_goods` VALUES ('1000000000000000', '手表', '依波', '1200.00', '银色', '120', '0', null, '0.00', null, null, '这只是一个表', null, null, '7199', '8999', '/PHP_SCHOOL/code/Application/Home/Public/images/p2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p2.jpg', '手表 银色 依波 测试', '2016-05-12 12:19:49');
INSERT INTO `legoushop_goods` VALUES ('1000000000000001', '红色外套', '外套', '1200.00', '红色', '1200', '0', null, '0.00', null, null, '这只是一个红色的外套', null, null, '7200', '9000', '/PHP_SCHOOL/code/Application/Home/Public/images/p1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p1.jpg', '外套 红色 耐克 测试', '2016-05-12 12:24:07');
INSERT INTO `legoushop_goods` VALUES ('1000000000000002', '时尚男外套', '外套', '1300.00', '黑色', '1200', '0', null, '0.00', null, null, '这只是一个时尚的外套', null, null, '7000', '9000', '/PHP_SCHOOL/code/Application/Home/Public/images/p3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p3.jpg', '外套 黑色 耐克 男 测试', '2016-05-12 12:26:06');
INSERT INTO `legoushop_goods` VALUES ('1000000000000003', '情侣外套', '外套', '1000.00', '黑色', '100', '0', null, '0.00', null, null, '这只是一个情侣的外套', null, null, '7000', '9000', '/PHP_SCHOOL/code/Application/Home/Public/images/p4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/p4.jpg', '情侣 外套 耐克 男女 测试', '2016-05-12 12:28:30');
INSERT INTO `legoushop_goods` VALUES ('1000000000000004', '金色戒指', 'ring', '2000.00', '金色', '200', '0', null, '0.00', null, null, '这只是一个金色的戒指', null, null, '70', '90', '/PHP_SCHOOL/code/Application/Home/Public/images/pic1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic1.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic1.jpg', '戒指 金色 测试', '2016-06-08 20:23:43');
INSERT INTO `legoushop_goods` VALUES ('1000000000000005', '紫色长裙', '某品牌', '2001.00', '紫色', '200', '0', null, '0.00', null, null, '这只是一个金色的戒指', null, null, '700', '900', '/PHP_SCHOOL/code/Application/Home/Public/images/pic2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic2.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic2.jpg', '长裙 紫色 外套 测试', '2016-06-08 20:36:09');
INSERT INTO `legoushop_goods` VALUES ('1000000000000006', '黑色书包', '耐克', '200.00', '黑色', '20', '0', null, '0.00', null, null, '这只是一个黑色的书包', null, null, '500', '900', '/PHP_SCHOOL/code/Application/Home/Public/images/pic3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic3.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic3.jpg', '黑色 书包 测试', '2016-06-08 20:41:20');
INSERT INTO `legoushop_goods` VALUES ('1000000000000007', '时尚T恤', '耐克', '200.00', '黑色', '200', '0', null, '0.00', null, null, '这只是一个黑色的T恤', null, null, '50', '90', '/PHP_SCHOOL/code/Application/Home/Public/images/pic4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic4.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic4.jpg', '黑色 T恤  测试', '2016-06-08 20:43:51');
INSERT INTO `legoushop_goods` VALUES ('1000000000000008', '棕色风衣', '耐克', '200.00', '棕色', '100', '0', null, '0.00', null, null, '这只是一个棕色的风衣', null, null, '40', '60', '/PHP_SCHOOL/code/Application/Home/Public/images/pic5.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic5.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic5.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic5.jpg', '棕色 风衣 测试', '2016-06-08 20:45:02');
INSERT INTO `legoushop_goods` VALUES ('1000000000000009', '蓝色长裙', '耐克', '2000.00', '蓝色', '100', '0', null, '0.00', null, null, '这只是一个蓝色的长裙', null, null, '40', '60', '/PHP_SCHOOL/code/Application/Home/Public/images/pic6.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic6.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic6.jpg', '/PHP_SCHOOL/code/Application/Home/Public/images/pic6.jpg', '蓝色 长裙 测试', '2016-06-08 20:47:11');

-- ----------------------------
-- Table structure for legoushop_order
-- ----------------------------
DROP TABLE IF EXISTS `legoushop_order`;
CREATE TABLE `legoushop_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` bigint(16) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `goods_id` bigint(16) NOT NULL,
  `per_price` decimal(9,2) NOT NULL,
  `num` int(11) NOT NULL,
  `logistics_num` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_legouShop_user_has_legouShop_goods_legouShop_goods2_idx` (`goods_id`),
  KEY `fk_legouShop_user_has_legouShop_goods_legouShop_user1_idx` (`user_id`),
  CONSTRAINT `fk_legouShop_user_has_legouShop_goods_legouShop_goods2` FOREIGN KEY (`goods_id`) REFERENCES `legoushop_goods` (`goods_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_legouShop_user_has_legouShop_goods_legouShop_user1` FOREIGN KEY (`user_id`) REFERENCES `legoushop_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of legoushop_order
-- ----------------------------
INSERT INTO `legoushop_order` VALUES ('1', '1000000000000000', '2013592110', '1000000000000001', '1200.00', '2', null, '1', '2016-06-14 15:55:27');
INSERT INTO `legoushop_order` VALUES ('2', '1000000000000001', '2013592110', '1000000000000001', '1200.00', '2', null, '1', '2016-06-14 15:58:10');
INSERT INTO `legoushop_order` VALUES ('3', '1000000000000002', '2013592110', '1000000000000001', '1200.00', '1', null, '1', '2016-06-14 15:58:22');
INSERT INTO `legoushop_order` VALUES ('4', '1000000000000003', '2013592110', '1000000000000001', '1200.00', '1', null, '1', '2016-06-14 15:58:35');
INSERT INTO `legoushop_order` VALUES ('5', '1000000000000003', '2013592110', '1000000000000002', '1300.00', '1', null, '1', '2016-06-14 15:58:35');

-- ----------------------------
-- Table structure for legoushop_session
-- ----------------------------
DROP TABLE IF EXISTS `legoushop_session`;
CREATE TABLE `legoushop_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id_UNIQUE` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of legoushop_session
-- ----------------------------
INSERT INTO `legoushop_session` VALUES ('n7fb07up8hltpo7manr9jr7ir4', '1465897147', 0x757365725F6E616D657C733A393A22E69D8EE58586E9B98F223B757365725F69647C733A31303A2232303133353932313130223B73686F7070696E67636172745F6D6F6E65797C733A373A22302E3030E58583223B);

-- ----------------------------
-- Table structure for legoushop_shoppingcart
-- ----------------------------
DROP TABLE IF EXISTS `legoushop_shoppingcart`;
CREATE TABLE `legoushop_shoppingcart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(16) NOT NULL,
  `goods_id` bigint(16) NOT NULL,
  `num` int(11) NOT NULL,
  `per_price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_legouShop_user_has_legouShop_goods_legouShop_goods1_idx` (`goods_id`),
  KEY `fk_legouShop_user_has_legouShop_goods_legouShop_user_idx` (`user_id`),
  CONSTRAINT `fk_legouShop_user_has_legouShop_goods_legouShop_goods1` FOREIGN KEY (`goods_id`) REFERENCES `legoushop_goods` (`goods_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_legouShop_user_has_legouShop_goods_legouShop_user` FOREIGN KEY (`user_id`) REFERENCES `legoushop_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of legoushop_shoppingcart
-- ----------------------------

-- ----------------------------
-- Table structure for legoushop_user
-- ----------------------------
DROP TABLE IF EXISTS `legoushop_user`;
CREATE TABLE `legoushop_user` (
  `user_id` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telphone_num` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of legoushop_user
-- ----------------------------
INSERT INTO `legoushop_user` VALUES ('11111111', '11111111', '李兆鹏', '524329278@qq.com', '15764562373', 'hiehsofasdf', '2016-06-12 11:14:45');
INSERT INTO `legoushop_user` VALUES ('1234567', '1111111', '李兆鹏', '524329278@qq.com', '15764562373', 'heilongjiangheihe ', '2016-06-12 10:37:43');
INSERT INTO `legoushop_user` VALUES ('2013592110', '2013592110', '李兆鹏', '524329278@qq.com', '15764562373', '黑龙江黑河', '2016-05-20 10:12:52');
INSERT INTO `legoushop_user` VALUES ('524329278', '524329278', '李兆鹏', '524329278@qq.com', '15764562373', '黑龙江黑河', '2016-06-09 20:48:10');
