/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50726
Source Host           : localhost:3309
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2022-12-07 16:27:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `BookId` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `BookName` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `BookType` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `BookAuthor` varchar(255) NOT NULL,
  `BookBriefIntroduction` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('11', '9787805673813', '尤利西斯', '意识流', ' 詹姆斯·乔伊斯', '《尤利西斯》被誉为意识流小说的开山之作。作者乔伊斯一反传统的写作方法，使用极为怪诞的手法，展现发生在都柏林一天十八小时中的种种事情，每一小时写一章，最后一章描写女主人公的性心理，整章只有前后两个标点符号，堪称文学一绝。加以这部作品是否属淫书的争论，在西方曾两上法庭，解禁后其影响更大。2000年英美一些重要媒体，一致将《尤利西斯》列为20世纪世界最富影响的名著之一。');
INSERT INTO `books` VALUES ('10', '9787543322851', '百年孤独', '魔幻现实主义', ' 加西亚·马尔克斯', '《百年孤独》是魔幻现实主义文学的代表作，描写了布恩迪亚家族七代人的传奇故事，以及加勒比海沿岸小镇马孔多的百年兴衰，反映了拉丁美洲一个世纪以来风云变幻的历史。作品融入神话传说、民间故事、宗教典故等因素，巧妙地糅合了现实与虚幻，展现出一个瑰丽的想象世界，成为20世纪重要的经典文学巨著。1982年加西亚·马尔克斯获得诺贝尔文学奖，奠定世界文学大师的地位，很大程度上便是凭借《百年孤独》的巨大影响。');
INSERT INTO `books` VALUES ('12', '9787030686503', '声学学科现状以及未来发展趋势', '科学与技术', ' 程建春,李晓东,杨军', '本书详细介绍了声学各个主要分支学科(包括物理声学，声人工结构，水声学和海洋声学，结构声学，检测声学与储层声学，生物医学超声，微声学，功率超声，环境声学，语言声学和生物声学，心理和生理声学，音乐声学，气动声学和大气声学，声学标准和声学计量)的内涵、特点和研究范畴，国内外发展现状，基础领域今后今后5~10 年重点研究方向，国家需求和应用领域急需解决的科学问题，以及发展目标与各领域研究队伍状况.');
INSERT INTO `books` VALUES ('13', '9787030396167', '自然地理学 | 3版', '高等教育教材', ' 刘南威', '本书共11章，包括：自然地理学的研究对象和任务；行星地球；地壳；气候；水文；地貌；植物；动物；土壤；自然地理环境的基本规律；人类与自然地理环境。');
INSERT INTO `books` VALUES ('14', '9787030359834', '水动力及水环境模拟方法与应用', '水科学前沿丛书', ' 陈永灿，刘昭伟，朱德军著', '本书模拟了水流动力条件的变化规律，分析了相关的物理输移和生化反应过程，建立了水环境模拟的数学模型，预测了水温、营养盐、叶绿素、溶解氧等重要环境要素的时空变化，探究了它们在不同条件下的发展趋势等。\r\n');
INSERT INTO `books` VALUES ('15', '9787030285706', '袁隆平论文集', '农学', ' 袁隆平主编', '本书是从袁隆平从事杂交水稻技术研发期间发表的杂交水稻研究文章和在国际会议及活动的报告中选择并结集出版的中英文论文集。内容涉及杂交水稻育种、栽培、基础研究等，集中体现了杂交水稻学的综合全貌与主要内容。');
INSERT INTO `books` VALUES ('16', '9787030493736', '物联网工程开发与应用实例', '计算机科学技术', ' 马洪连,朱明', '近几年，物联网从诞生到迅速发展，受到了产业界及学术界的广泛重视。本书从物联网工程实际应用的角度出发，针对国内大专院校物联网工程专业课程群实践教学的需要，结合作者多年的教学、科研方面的经验编写了这部物联网工程开发与应用实例教材。\r\n本书以基于四核Cortex-A9 微处理器为核心的物联网综合教学实验平台为物联网工程应用实例的硬件平台，该平台还配有以CC2530 为核心部件的14 种无线感知、识别、控制节点模块以及摄像头、条形码和指纹识别三种外设。针对物联网工程实验教学与培训体系不同层面的需要，本教材精心设计和开发了36 项应用实例。');
INSERT INTO `books` VALUES ('17', '9787030474629', '基于全局与局部信息的人脸识别', '计算机科学技术', ' 孔俊,易玉根,王建中', '近几十年来，人脸识别技术已经取得了很大进展，积累了丰富的理论并涌现出大量的识别方法。本书针对已有人脸识别方法进行分析和总结，在此基础上提出六种新的人脸识别方法，并将它们与目前流行的人脸识别方法进行比较。大量实验结果验证了本书所提出方法的有效性和可行性。');
INSERT INTO `books` VALUES ('18', '9787030533975', '当代金融理论学说', '经济学', ' 向岚', '本书以西方国家自由经济和干预经济两大经济学阵营思想理论为框架，归纳梳理了西方各个学派的主要金融理论。本书采用纵向和横向结合的方式，主要介绍了20世纪30年代以来各个时期和学派的理论观点和政策主张，并且对近年来有较大影响的金融学说理论进行了评价。');
INSERT INTO `books` VALUES ('19', '9787030706096', '中国科普互联网数据报告2021', '综合', ' 钟琦,胡俊平,王黎明', '在《全民科学素质行动计划纲要（2006—2010—2020 年）》及其实施方案的指引下，中国科协实施科普信息化工程，开展“科普中国”品牌建设，取得了5年阶段性成果。中国科普研究所科普信息化研究课题组于2015年创建了科普互联网数据分析研究方向，开展系列专题跟踪研究，旨在向公众呈现互联网科普现状，为科普工作者提供一份可参考的科普数据分析报告。');
INSERT INTO `books` VALUES ('20', '9787030708007', 'Python程序设计', '计算机科学技术', ' 葛宇', '本书是面向非计算机专业学生和Python初学者的“计算机科学素养”丛书之一。作为Python编程入门教程，本书语法及功能介绍以够用、实用和应用为原则，将Python语言融入问题求解中；案例选取贴近生活，有助于提高学生的学习兴趣；内容呈现直观、形象，知识点讲解深入浅出、通俗易懂。');
INSERT INTO `books` VALUES ('21', '9787030424327', '虚拟现实 : 从阿凡达到永生', '计算机科学技术', ' (美)吉姆·布拉斯科维奇，(美)杰里米·拜伦森著；辛江译', '本书探索了计算机技术的发展与快速应用对人类生活和社会带来的影响。书中沿着这一思路，阐释了虚拟现实当前和未来的形式——沉浸式视频游戏和社交网站等形式将会无缝整合我们的生活。');
INSERT INTO `books` VALUES ('22', '9787030491565', '基于java的软件开发全过程实战', '计算机科学技术', ' 周雪芹', '本书是“教育部、财政部职业院校教师素质提高计划-本科计算机科学与技术专业职教师资培养资源开发项目”的一门实践类课程的教材。本书从基本原理入手，介绍软件架构设计过程中涉及的一些概念、流程、方法、用到的JavaWeb重点知识等，通过介绍具体的案例来阐述如何定义需求、创建逻辑架构、进行详细开发等。');
INSERT INTO `books` VALUES ('23', '9787030335937', '前馈神经网络分析与设计', '计算机科学技术', ' 乔俊飞，韩红桂著', '本书系统地论述了前馈神经网络的主要理论、设计基础及应用实例，包括感知器神经网络、RBF神经网络、模糊神经网络、前馈神经网络快速下降算法研究、前馈神经网络改进型递归最小二乘算法研究、基于显著性分析的快速修剪型感知器神经网络等内容。');

-- ----------------------------
-- Table structure for borrowbooks
-- ----------------------------
DROP TABLE IF EXISTS `borrowbooks`;
CREATE TABLE `borrowbooks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `usernumber` varchar(255) NOT NULL,
  `bookId` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of borrowbooks
-- ----------------------------
INSERT INTO `borrowbooks` VALUES ('19', '121', '9787030285706');
INSERT INTO `borrowbooks` VALUES ('15', '101', '2020');
INSERT INTO `borrowbooks` VALUES ('16', '121', '9787805673813');
INSERT INTO `borrowbooks` VALUES ('17', '121', '9787030533975');
INSERT INTO `borrowbooks` VALUES ('18', '121', '9787030335937');
INSERT INTO `borrowbooks` VALUES ('20', '121', '9787030686503');

-- ----------------------------
-- Table structure for libraryusers
-- ----------------------------
DROP TABLE IF EXISTS `libraryusers`;
CREATE TABLE `libraryusers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usernumber` varchar(256) NOT NULL COMMENT '用户账号',
  `username` varchar(256) NOT NULL COMMENT '用户名',
  `password` varchar(256) NOT NULL COMMENT '密码',
  `real_name` varchar(256) NOT NULL COMMENT '真实姓名',
  `gender` varchar(256) NOT NULL COMMENT '性别',
  `address` varchar(256) DEFAULT '未公开' COMMENT '地址',
  `phone` varchar(256) NOT NULL COMMENT '手机号',
  `age` varchar(256) NOT NULL COMMENT '年龄',
  `mail` varchar(256) DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`usernumber`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COMMENT='用户表信息';

-- ----------------------------
-- Records of libraryusers
-- ----------------------------
INSERT INTO `libraryusers` VALUES ('1', '10086', 'OP', '123456', '原批', '武装直升飞机', '美国', '10086', '18', 'caonima@qq.com');
INSERT INTO `libraryusers` VALUES ('2', '25231', '山岸逢花', 'password', '许弘文', '男', '林州市', '17517716292', '5', 'adam.hamill@yahoo.com');
INSERT INTO `libraryusers` VALUES ('3', '4123', '夢乃愛華', 'password', '王笑愚', '女', '海阳市', '17318363387', '79', 'rodger.batz@gmail.com');
INSERT INTO `libraryusers` VALUES ('4', '7850', '木下日葵', 'password', '王晟睿', '男', '保定市', '17891740864', '65', 'jefferson.leffler@gmail.com');
INSERT INTO `libraryusers` VALUES ('5', '12234612', '松本一香', 'password', '丁展鹏', '男', '可克达拉市', '17640214401', '78', 'jeannetta.runolfsson@yahoo.com');
INSERT INTO `libraryusers` VALUES ('6', '89885', '西田那津', 'password', '史博超', '女', '宁德市', '17332321252', '56', 'lyndon.tillman@gmail.com');
INSERT INTO `libraryusers` VALUES ('7', '472908036', '蓮實克蕾兒', 'password', '武昊然', '女', '衡阳市', '18822815900', '98', 'caren.cartwright@gmail.com');
INSERT INTO `libraryusers` VALUES ('8', '4056628', '橋本有菜', 'password', '雷修杰', '男', '格尔木市', '15764090679', '44', 'erasmo.collier@gmail.com');
INSERT INTO `libraryusers` VALUES ('9', '901199', '三上悠亜', 'password', '朱乐驹', '男', '北京市', '15683904254', '53', 'margeret.greenfelder@hotmail.com');
INSERT INTO `libraryusers` VALUES ('11', '26123', '七澤美亞', 'password', '姜潇然', '男', '丰城市', '18856859814', '4', 'warner.kuhlman@hotmail.com');
INSERT INTO `libraryusers` VALUES ('12', '13666', '西田那津', 'password', '宋睿渊', '女', '根河市', '14717170130', '97', 'fatima.west@hotmail.com');
INSERT INTO `libraryusers` VALUES ('13', '805', '羽咲美晴', 'password', '白瑾瑜', '女', '尚志市', '17651050990', '59', 'kristen.rolfson@hotmail.com');
INSERT INTO `libraryusers` VALUES ('14', '20044569', '蕾', 'password', '范鸿煊', '男', '九江市', '17623706217', '98', 'lucy.beatty@gmail.com');
INSERT INTO `libraryusers` VALUES ('15', '28441946', '藤森里穂', 'password', '段擎苍', '女', '玉溪市', '15389198357', '48', 'walker.mclaughlin@gmail.com');
INSERT INTO `libraryusers` VALUES ('16', '32388073', '小野六花', 'password', '孟靖琪', '女', '凭祥市', '17006707393', '7', 'granville.kuhn@hotmail.com');
INSERT INTO `libraryusers` VALUES ('17', '18137175', '河北彩花', 'password', '蒋聪健', '女', '宜州市', '15798960813', '49', 'marcel.walker@hotmail.com');
INSERT INTO `libraryusers` VALUES ('18', '182', '小野六花', 'password', '赵烨霖', '男', '洮南市', '17278642038', '83', 'santos.mante@yahoo.com');
INSERT INTO `libraryusers` VALUES ('19', '837415433', '篠田優', 'password', '毛风华', '女', '郴州市', '15258566923', '9', 'kimbery.brekke@yahoo.com');
INSERT INTO `libraryusers` VALUES ('20', '105961602', '神宮寺奈緒', 'password', '毛俊驰', '女', '舒兰市', '17505547048', '93', 'stephen.denesik@hotmail.com');
INSERT INTO `libraryusers` VALUES ('21', '57850445', '石川澪', 'password', '梁明哲', '男', '曲靖市', '13256410926', '28', 'allena.damore@yahoo.com');
INSERT INTO `libraryusers` VALUES ('22', '1068016', '七澤美亞', 'password', '何思远', '女', '启东市', '13928704691', '18', 'rosario.doyle@hotmail.com');
INSERT INTO `libraryusers` VALUES ('23', '532', '夢乃愛華', 'password', '梁建辉', '女', '大理市', '14575274532', '17', 'tomas.bahringer@yahoo.com');
INSERT INTO `libraryusers` VALUES ('24', '99628', '小宵虎南', 'password', '江烨伟', '女', '锡林浩特市', '15244317535', '8', 'lesley.ohara@yahoo.com');
INSERT INTO `libraryusers` VALUES ('25', '92229', 'JULIA', 'password', '姜志泽', '男', '日喀则市', '15115338144', '90', 'jose.lesch@gmail.com');
INSERT INTO `libraryusers` VALUES ('26', '846381', '神宮寺奈緒', 'password', '郭胤祥', '女', '泊头市', '15259790515', '92', 'latrisha.cummings@gmail.com');
INSERT INTO `libraryusers` VALUES ('27', '1108', '小野六花', 'password', '贺鸿煊', '女', '吐鲁番市', '15384117278', '23', 'natividad.bechtelar@gmail.com');
INSERT INTO `libraryusers` VALUES ('28', '8657', '夢乃愛華', 'password', '邵博超', '女', '丽江市', '14588858772', '76', 'charles.stehr@hotmail.com');
INSERT INTO `libraryusers` VALUES ('29', '623', '白桃花\r\n', 'password', '潘健雄', '男', '武夷山市', '17342003994', '83', 'shayna.feil@hotmail.com');
INSERT INTO `libraryusers` VALUES ('30', '641', '七森莉莉', 'password', '程峻熙', '男', '栖霞市', '17001105245', '67', 'olen.bashirian@yahoo.com');
INSERT INTO `libraryusers` VALUES ('31', '1181', '伊藤舞雪', 'password', '吴瑾瑜', '男', '衡阳市', '17046409472', '33', 'twila.hahn@yahoo.com');
INSERT INTO `libraryusers` VALUES ('32', '723252605', '櫻空桃', 'password', '唐越泽', '男', '霍林郭勒市', '15686860770', '35', 'courtney.schmeler@hotmail.com');
INSERT INTO `libraryusers` VALUES ('33', '1123', '末広純', 'password', '孟浩', '女', '醴陵市', '17080929111', '49', 'hassan.lueilwitz@gmail.com');
INSERT INTO `libraryusers` VALUES ('34', '14997591', '小野六花', 'password', '杜煜祺', '男', '根河市', '15681887685', '23', 'leona.harber@yahoo.com');
INSERT INTO `libraryusers` VALUES ('35', '863952', '七澤美亞', 'password', '马俊驰', '男', '永康市', '17111275018', '61', 'kali.stroman@gmail.com');
INSERT INTO `libraryusers` VALUES ('36', '7123', '美谷朱里', 'password', '侯健雄', '女', '玉溪市', '17320746004', '6', 'garry.wehner@hotmail.com');
INSERT INTO `libraryusers` VALUES ('37', '68096954', '櫻空桃', 'password', '朱鹤轩', '女', '余姚市', '15092796123', '17', 'refugio.mcdermott@hotmail.com');
INSERT INTO `libraryusers` VALUES ('38', '7453216352', '楪可憐', 'password', '刘修洁', '男', '聊城市', '15704581338', '58', 'domenica.zboncak@gmail.com');
INSERT INTO `libraryusers` VALUES ('39', '619048642', '藤森里穂', 'password', '贾建辉', '男', '雅安市', '13160169386', '12', 'joann.hayes@yahoo.com');
INSERT INTO `libraryusers` VALUES ('40', '25043026', '小宵虎南', 'password', '任思淼', '女', '泊头市', '15007193439', '21', 'jessie.lakin@yahoo.com');
INSERT INTO `libraryusers` VALUES ('41', '662909004', '篠田優', 'password', '宋昊焱', '男', '海宁市', '15344181960', '45', 'alfred.flatley@yahoo.com');
INSERT INTO `libraryusers` VALUES ('42', '60775120', '三上悠亜', 'password', '顾智宸', '女', '阜康市', '15709155089', '98', 'elfrieda.aufderhar@hotmail.com');
INSERT INTO `libraryusers` VALUES ('43', '436', '河北彩花', 'password', '阎晓啸', '男', '韩城', '15155596246', '34', 'tasha.bogisich@gmail.com');
INSERT INTO `libraryusers` VALUES ('44', '38234399', '三上悠亜', 'password', '侯天宇', '女', '麻城市', '14708569541', '33', 'cleveland.buckridge@yahoo.com');
INSERT INTO `libraryusers` VALUES ('45', '423', '蕾', 'password', '孟明轩', '女', '肇庆市', '15601327921', '69', 'gail.stokes@gmail.com');
INSERT INTO `libraryusers` VALUES ('46', '398', '楪可憐', 'password', '程健雄', '男', '阜康市', '17189208351', '44', 'jacklyn.wolff@gmail.com');
INSERT INTO `libraryusers` VALUES ('47', '311348', '七澤美亞', 'password', '方航', '男', '河源市', '15094381954', '61', 'nicole.bernier@gmail.com');
INSERT INTO `libraryusers` VALUES ('48', '6404964691', '橋本有菜', 'password', '江思源', '女', '和田市', '17202951114', '52', 'hugh.raynor@yahoo.com');
INSERT INTO `libraryusers` VALUES ('49', '7788026671', '三上悠亜', 'password', '于绍齐', '女', '长葛市', '15380231790', '35', 'christa.reichert@gmail.com');
INSERT INTO `libraryusers` VALUES ('50', '398235', '羽咲美晴', 'password', '李锦程', '男', '抚远市', '15864093249', '20', 'sylvia.howell@gmail.com');
INSERT INTO `libraryusers` VALUES ('51', '525244859', '小花暖', 'password', '任博超', '女', '阳春市', '15327683179', '95', 'maile.damore@yahoo.com');
INSERT INTO `libraryusers` VALUES ('52', '2575', '七澤美亞', 'password', '林明轩', '女', '肥城市', '17391945687', '85', 'marquita.gleason@hotmail.com');
INSERT INTO `libraryusers` VALUES ('53', '863308', '高崎聖子', 'password', '顾博涛', '女', '穆棱市', '14786144643', '60', 'tiara.swift@yahoo.com');
INSERT INTO `libraryusers` VALUES ('54', '734', '葵司', 'password', '唐鹏', '男', '义马市', '15025948001', '76', 'katheryn.bins@yahoo.com');
INSERT INTO `libraryusers` VALUES ('55', '403', '松本一香', 'password', '曾明轩', '女', '柳州市', '15840115899', '71', 'herminia.rice@yahoo.com');
INSERT INTO `libraryusers` VALUES ('56', '558', '蓮實克蕾兒', 'password', '杨鹭洋', '女', '瑞昌市', '18300293258', '63', 'elijah.kirlin@gmail.com');
INSERT INTO `libraryusers` VALUES ('57', '6152', '松本一香', 'password', '孙昊然', '女', '楚雄市', '14561055733', '77', 'ed.nikolaus@yahoo.com');
INSERT INTO `libraryusers` VALUES ('58', '5101', '七澤美亞', 'password', '叶子涵', '男', '来宾市', '17223732604', '51', 'donnie.nader@gmail.com');
INSERT INTO `libraryusers` VALUES ('59', '165916405', '羽咲美晴', 'password', '曹风华', '女', '寿光市', '15852642438', '24', 'paris.johnston@hotmail.com');
INSERT INTO `libraryusers` VALUES ('60', '762', '楪可憐', 'password', '方子骞', '女', '丽江市', '15092389026', '57', 'rosario.casper@hotmail.com');
INSERT INTO `libraryusers` VALUES ('61', '154642', '小花暖', 'password', '任天翊', '男', '简阳市', '15566007434', '59', 'haywood.reichert@gmail.com');
INSERT INTO `libraryusers` VALUES ('62', '503', '河北彩花', 'password', '林远航', '男', '嘉峪关市', '14519571464', '16', 'carisa.ryan@hotmail.com');
INSERT INTO `libraryusers` VALUES ('63', '4248', '石川澪', 'password', '于风华', '女', '铜陵市', '15747082560', '87', 'celinda.schaefer@gmail.com');
INSERT INTO `libraryusers` VALUES ('64', '2123', '松本一香', 'password', '黎浩宇', '男', '文山市', '13306938497', '5', 'raleigh.doyle@gmail.com');
INSERT INTO `libraryusers` VALUES ('65', '6982', '松本一香', 'password', '侯智宸', '女', '沙河市', '17606129929', '66', 'gertha.rowe@yahoo.com');
INSERT INTO `libraryusers` VALUES ('66', '823971857', '高崎聖子', 'password', '邱浩', '男', '南阳市', '17502848036', '4', 'darrell.wolff@yahoo.com');
INSERT INTO `libraryusers` VALUES ('67', '51779381', '石原希望', 'password', '段弘文', '女', '洮南市', '17129145706', '28', 'bryon.macgyver@yahoo.com');
INSERT INTO `libraryusers` VALUES ('68', '3910389091', '西田那津', 'password', '邓立诚', '男', '自贡市', '17892607130', '38', 'denisha.bode@yahoo.com');
INSERT INTO `libraryusers` VALUES ('69', '76452310', '末広純', 'password', '白瑾瑜', '男', '上饶市', '17766807153', '14', 'serina.frami@gmail.com');
INSERT INTO `libraryusers` VALUES ('70', '1047', '楪可憐', 'password', '白绍齐', '女', '武安市', '17777900180', '81', 'shae.dibbert@hotmail.com');
INSERT INTO `libraryusers` VALUES ('71', '457506', '山岸逢花', 'password', '龙思源', '女', '营口市', '17528821406', '39', 'marcella.willms@hotmail.com');
INSERT INTO `libraryusers` VALUES ('72', '46085', '石川澪', 'password', '汪煜祺', '女', '昆山市', '17676546973', '91', 'lien.haag@yahoo.com');
INSERT INTO `libraryusers` VALUES ('73', '751', '篠田優', 'password', '邱绍齐', '女', '邹城市', '18842440649', '16', 'giovanni.koelpin@gmail.com');
INSERT INTO `libraryusers` VALUES ('74', '94694821', 'JULIA', 'password', '万建辉', '男', '通化市', '17775986109', '20', 'caridad.senger@yahoo.com');
INSERT INTO `libraryusers` VALUES ('75', '18268154', '小宵虎南', 'password', '钟正豪', '男', '防城港市', '17769386507', '20', 'jc.jakubowski@gmail.com');
INSERT INTO `libraryusers` VALUES ('76', '15825', '白桃花\r\n', 'password', '胡子骞', '女', '集安市', '18948196307', '73', 'helen.marks@hotmail.com');
INSERT INTO `libraryusers` VALUES ('78', '1872205828', '木下日葵', 'password', '叶烨霖', '女', '昌邑市', '17510119160', '93', 'mellie.hyatt@gmail.com');
INSERT INTO `libraryusers` VALUES ('79', '425926', '橋本有菜', 'password', '雷弘文', '女', '嘉峪关市', '15313283232', '99', 'wendell.monahan@yahoo.com');
INSERT INTO `libraryusers` VALUES ('80', '8590304', '三上悠亜', 'password', '白胤祥', '女', '建瓯市', '17883640912', '16', 'corrin.gerlach@yahoo.com');
INSERT INTO `libraryusers` VALUES ('82', '1241', '末広純', 'password', '任展鹏', '女', '北京市', '15308265552', '66', 'leticia.farrell@hotmail.com');
INSERT INTO `libraryusers` VALUES ('83', '800', '石川澪', 'password', '钟擎苍', '男', '石家庄市', '17277037683', '36', 'hiram.murazik@hotmail.com');
INSERT INTO `libraryusers` VALUES ('84', '1372510', '山岸逢花', 'password', '李振家', '男', '池州市', '15757994618', '3', 'hsiu.treutel@yahoo.com');
INSERT INTO `libraryusers` VALUES ('85', '61657196', '松本一香', 'password', '尹晋鹏', '男', '敦煌市', '15055220783', '65', 'enedina.stroman@hotmail.com');
INSERT INTO `libraryusers` VALUES ('86', '587996987', '波多野結衣', 'password', '曾鹏涛', '男', '都匀市', '15755218858', '22', 'dallas.shields@hotmail.com');
INSERT INTO `libraryusers` VALUES ('87', '8652298', '末広純', 'password', '薛远航', '男', '广州市', '15743517450', '40', 'kyle.casper@hotmail.com');
INSERT INTO `libraryusers` VALUES ('88', '32713184', '松本一香', 'password', '苏修杰', '男', '江油市', '15086474904', '30', 'chloe.mcclure@yahoo.com');
INSERT INTO `libraryusers` VALUES ('89', '520617', '七森莉莉', 'password', '侯鸿煊', '女', '石嘴山市', '15931866939', '62', 'nathanial.greenfelder@hotmail.com');
INSERT INTO `libraryusers` VALUES ('91', '735559', '楪可憐', 'password', '高远航', '男', '铜陵市', '17869920575', '37', 'imelda.lakin@hotmail.com');
INSERT INTO `libraryusers` VALUES ('92', '6817059', '橋本有菜', 'password', '毛金鑫', '女', '佛山市', '17310703693', '70', 'donny.hayes@yahoo.com');
INSERT INTO `libraryusers` VALUES ('93', '275', '木下日葵', 'password', '叶建辉', '男', '岳阳市', '17066504483', '10', 'quintin.davis@gmail.com');
INSERT INTO `libraryusers` VALUES ('94', '212', '小花暖', 'password', '苏健雄', '女', '敦煌市', '17646310223', '6', 'luis.beatty@gmail.com');
INSERT INTO `libraryusers` VALUES ('95', '3307864', '高崎聖子', 'password', '李鸿煊', '男', '渭南市', '15547354564', '55', 'shaunda.skiles@gmail.com');
INSERT INTO `libraryusers` VALUES ('96', '640646', '河北彩花', 'password', '曾俊驰', '男', '项城市', '14714165119', '12', 'regina.reilly@gmail.com');
INSERT INTO `libraryusers` VALUES ('97', '60890', '石川澪', 'password', '杨昊天', '女', '乌兰察布市', '18841623008', '14', 'jackie.brekke@yahoo.com');
INSERT INTO `libraryusers` VALUES ('98', '512', '波多野結衣', 'password', '叶明杰', '男', '新竹市', '17307407052', '44', 'grover.kautzer@gmail.com');
INSERT INTO `libraryusers` VALUES ('99', '8862174593', 'JULIA', 'password', '覃钰轩', '女', '伊春市', '15223590011', '23', 'stephane.hansen@hotmail.com');
INSERT INTO `libraryusers` VALUES ('100', '6534', '山岸逢花', 'password', '贾烨华', '女', '辽阳市', '17540838094', '74', 'mamie.jakubowski@hotmail.com');
INSERT INTO `libraryusers` VALUES ('101', '121', '黄胜', '12345', '黄胜', '未知', '未公开', '1008611', '3', '');
