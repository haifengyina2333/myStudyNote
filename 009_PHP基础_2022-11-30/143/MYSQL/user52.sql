/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80028
Source Host           : localhost:3306
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 80028
File Encoding         : 65001

Date: 2022-12-10 03:23:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user52
-- ----------------------------
DROP TABLE IF EXISTS `user52`;
CREATE TABLE `user52` (
  `account` char(100) NOT NULL,
  `username` char(100) NOT NULL,
  `sex` char(100) NOT NULL,
  `age` char(100) NOT NULL,
  `address` char(100) NOT NULL,
  `mail` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  `number` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of user52
-- ----------------------------
INSERT INTO `user52` VALUES ('1008611', '周某人', '男', '18', '广东', '3119050152@qq.com', '111', '111');
INSERT INTO `user52` VALUES ('123123123', '阿胜', '男', '18', '不知道', '124123', '123', '123123');
INSERT INTO `user52` VALUES ('10086', '阿胜', '男', '18', '广建', '2578762917@qq.com', '123', '098');
INSERT INTO `user52` VALUES ('10010', '阿乌', '男', '19', '管理员', '1234123@163.com', '123456', '123123');
INSERT INTO `user52` VALUES ('123123', '天津地铁', '女', '34', '阿三', '1231243523431@163.com', '123214324111', '111112312');
INSERT INTO `user52` VALUES ('3462342', '蝴蝶酥', '女', '28', '安稳', '2141324@163.com', '1243252421', '123213123');
