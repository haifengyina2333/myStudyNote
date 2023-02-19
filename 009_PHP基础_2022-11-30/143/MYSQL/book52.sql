/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80028
Source Host           : localhost:3306
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 80028
File Encoding         : 65001

Date: 2022-12-10 03:23:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for book52
-- ----------------------------
DROP TABLE IF EXISTS `book52`;
CREATE TABLE `book52` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `price` varchar(20) NOT NULL,
  `data` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of book52
-- ----------------------------
INSERT INTO `book52` VALUES ('001', '降龙十八掌', '99', '1998-11-6', '秘籍');
INSERT INTO `book52` VALUES ('002', '百年孤独', '12', '2003-6-29', '文学');
INSERT INTO `book52` VALUES ('003', '围城', '88', '2009-9-18', '文学');
INSERT INTO `book52` VALUES ('004', '绿皮车', '65', '2004-8-5', '励志');
INSERT INTO `book52` VALUES ('005', '小王子', '87', '2003-07-16', '励志文学');
INSERT INTO `book52` VALUES ('006', '活着', '38', '2005-8-9', '文学');
INSERT INTO `book52` VALUES ('007', '平凡的世界', '27', '2004', '创作');
INSERT INTO `book52` VALUES ('008', '简爱', '48', '1998', '国外文学');
INSERT INTO `book52` VALUES ('009', '天才在左 疯子在右', '36', '2015', '烧脑');
INSERT INTO `book52` VALUES ('010', '斜阳', '67', '2013', '治愈');
INSERT INTO `book52` VALUES ('011', '虽败犹荣', '26', '2018', '励志文学');
INSERT INTO `book52` VALUES ('012', '别让不好意思害了你', '16', '2018', '鸡汤文学');
INSERT INTO `book52` VALUES ('013', '撒野', '58', '2016', '小说');
INSERT INTO `book52` VALUES ('014', '墨菲定律', '22', '2014', '道理');
INSERT INTO `book52` VALUES ('015', '总要习惯一个人', '18', '2018', '鸡汤');
INSERT INTO `book52` VALUES ('018', '人性的弱点', '14', '2014', '道理');
INSERT INTO `book52` VALUES ('019', '你不努力，谁也给你不了你想要的生活', '77', '2019', '鸡汤');
INSERT INTO `book52` VALUES ('020', '乐普 · 吉他', '26', '2008', '音乐');
INSERT INTO `book52` VALUES ('021', '老人与海', '11', '2001', '国外文学');
