/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : xiaolian

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-21 08:07:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `realname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `repwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('1', 'root', 'root', '123456', '123456@qq.com', '2016-11-16 15:47:39', '123', '123');

-- ----------------------------
-- Table structure for collection
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `newspic` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `nid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collection
-- ----------------------------
INSERT INTO `collection` VALUES ('58', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58588aedeb198.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', '29');
INSERT INTO `collection` VALUES ('56', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858e3f591dd8.png', 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', '41');
INSERT INTO `collection` VALUES ('57', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858deec65e40.png', '组合数学与编码简介', '组合数学是研究离散构形的一门数学分支，它有着丰富的研究内容和历史渊源，在计算机科学、信息科学、编码密码学等众多领域有重要应用。报告将介绍一些历史上著名的组合问题，以及组合数学理论在编码学中的应用，同时简单介绍北京交通大学数学系的研究生招生情况。', '40');
INSERT INTO `collection` VALUES ('59', '123', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58588aedeb198.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', '29');

-- ----------------------------
-- Table structure for dianzan
-- ----------------------------
DROP TABLE IF EXISTS `dianzan`;
CREATE TABLE `dianzan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `dname` varchar(40) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dianzan
-- ----------------------------
INSERT INTO `dianzan` VALUES ('2', '岳岳岳', 'li', '今天很开心1211212', null);
INSERT INTO `dianzan` VALUES ('67', 'root', 'li', '今天好开心啊啊啊啊啊啊啊啊', null);
INSERT INTO `dianzan` VALUES ('66', 'root', 'li', '今天好', null);
INSERT INTO `dianzan` VALUES ('62', 'li', '岳岳岳', '今天天气不错？\r\n                    ', null);

-- ----------------------------
-- Table structure for dynamic
-- ----------------------------
DROP TABLE IF EXISTS `dynamic`;
CREATE TABLE `dynamic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT '',
  `content` varchar(255) NOT NULL,
  `addtime` datetime NOT NULL,
  `scantime` int(11) unsigned zerofill DEFAULT '00000000001',
  `userpic` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dynamic
-- ----------------------------
INSERT INTO `dynamic` VALUES ('1', '岳岳岳', '今天很开心1211212', '2016-12-06 14:57:00', '00000000027', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58589c9772178.png');
INSERT INTO `dynamic` VALUES ('2', 'root', '今天好', '2016-12-05 10:51:57', '00000000006', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58589c9772178.png');
INSERT INTO `dynamic` VALUES ('3', 'root', '今天好开心啊啊啊啊啊啊啊啊', '2016-12-06 16:45:48', '00000000006', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58589c9772178.png');
INSERT INTO `dynamic` VALUES ('62', 'li', '  我是li\r\n                    ', '2016-12-14 10:36:37', '00000000014', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58589c9772178.png');
INSERT INTO `dynamic` VALUES ('65', 'li', '今天天气不错？\r\n                    ', '2016-12-14 10:41:56', '00000000002', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58589c9772178.png');

-- ----------------------------
-- Table structure for friends
-- ----------------------------
DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `fschool` varchar(255) DEFAULT NULL,
  `fgender` varchar(255) DEFAULT NULL,
  `fbirthday` date DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friends
-- ----------------------------
INSERT INTO `friends` VALUES ('1', 'li', 'root', '河北师范大学', '男', '1994-10-18', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('4', 'li', '岳岳岳', '河北师范大学', '男', '2016-05-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG');
INSERT INTO `friends` VALUES ('3', 'li', '18678627329', '河北师范大学', '女', '2016-12-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('5', '12345', '18678627329', '河北师范大学', '女', '2016-12-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('6', '12345', '岳岳岳', '河北师范大学', '男', '2016-05-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG');
INSERT INTO `friends` VALUES ('7', '12345', 'root', '河北师范大学', '男', '1994-10-18', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('10', '123', 'root', '河北师范大学', '男', '1994-10-18', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('11', '123', '岳岳岳', '河北师范大学', '男', '2016-05-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `content` varchar(2556) CHARACTER SET utf8 NOT NULL,
  `posttime` datetime DEFAULT NULL,
  `scantime` int(11) DEFAULT '1',
  `author` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `newspic` varchar(255) DEFAULT NULL,
  `recommended` int(11) DEFAULT NULL,
  `schoolname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('29', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', '2016-12-07 15:47:00', '19', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/58588aedeb198.png', '1', '河北师范大学');
INSERT INTO `news` VALUES ('40', '组合数学与编码简介', '组合数学是研究离散构形的一门数学分支，它有着丰富的研究内容和历史渊源，在计算机科学、信息科学、编码密码学等众多领域有重要应用。报告将介绍一些历史上著名的组合问题，以及组合数学理论在编码学中的应用，同时简单介绍北京交通大学数学系的研究生招生情况。', '2016-12-20 15:42:00', '2', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858deec65e40.png', '1', '河北师范大学 理科群1号楼D-203');
INSERT INTO `news` VALUES ('41', 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', '2016-12-20 15:55:00', '2', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858e3f591dd8.png', '1', '河北师范大学 理科群2号楼A-302室');

-- ----------------------------
-- Table structure for posters
-- ----------------------------
DROP TABLE IF EXISTS `posters`;
CREATE TABLE `posters` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `addtime` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posters
-- ----------------------------
INSERT INTO `posters` VALUES ('1', '2016-12-08 09:35:00', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-08/5848b9074a2c3.png', '抗寒', '&lt;strong&gt;抗寒&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;br /&gt;\r\n&lt;/str');
INSERT INTO `posters` VALUES ('2', '2016-12-08 09:37:00', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-08/5848b95372f33.png', '抗寒', '&lt;strong&gt;HTML内容&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;/strong&gt;');
INSERT INTO `posters` VALUES ('3', '2016-12-08 10:39:00', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-08/5848c7f53887a.png', '河北师大东门', '&lt;strong&gt;HTML内容和北师大东门&lt;strong&gt;TML内容和北师大东门&lt;/strong&gt;&lt;strong&gt;TML内容和北师大东门&lt;/strong&gt;&lt;/strong&gt;');

-- ----------------------------
-- Table structure for school
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) DEFAULT NULL,
  `splace` varchar(255) DEFAULT NULL,
  `stime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES ('11', '河北师范大学', '石家庄', '2016-12-01 10:09:53');
INSERT INTO `school` VALUES ('12', '天津大学', '天津', '2016-12-01 09:03:42');
INSERT INTO `school` VALUES ('14', '清华大学', '北京', '2016-12-01 09:17:04');
INSERT INTO `school` VALUES ('15', '上海大学', '上海', '2016-12-01 09:31:53');

-- ----------------------------
-- Table structure for task
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(255) DEFAULT NULL,
  `initator` varchar(255) DEFAULT NULL,
  `schoolname` varchar(255) DEFAULT NULL,
  `tasktime` datetime DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task
-- ----------------------------
INSERT INTO `task` VALUES ('1', '寻找图书馆', '张三', '河北大学', '2016-12-06 11:05:08', '寻找图书馆，位与学府路');
INSERT INTO `task` VALUES ('6', '寻找时光塔', '岳岳岳', '河北师范大学', '2016-11-30 22:55:35', '&lt;strong&gt;寻找时光塔&lt;/strong&gt;');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET utf8 NOT NULL,
  `realname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `repwd` varchar(20) DEFAULT NULL,
  `userpic` varchar(255) DEFAULT NULL,
  `recommended` int(11) DEFAULT NULL,
  `introduce` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `school` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'roots', '135622779681', '12345637@qq.com', '2016-11-23 15:21:23', '123', '123', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我叫root', '河北师范大学', '1994-10-18', '男');
INSERT INTO `user` VALUES ('2', '18678627329', '李丽丽', '13562277938', '1123', '2016-11-24 16:34:00', '123', '123', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我叫18678627329', '河北师范大学', '2016-12-12', '女');
INSERT INTO `user` VALUES ('27', 'li', 'liwenlong', '18678627329', null, '2016-12-10 13:45:59', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我是li', '河北师范大学', '2016-07-07', '男');
INSERT INTO `user` VALUES ('28', '岳岳岳', null, '123456', null, '2016-12-12 14:21:36', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG', '1', '我叫岳岳岳', '河北师范大学', '2016-05-12', '男');
INSERT INTO `user` VALUES ('35', '2333333', null, '1234567890', null, '2016-12-20 08:49:28', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858801832910.JPG', '1', '我是2333333', null, '1996-07-04', '男');
INSERT INTO `user` VALUES ('36', '123', null, '123', null, '2016-12-20 08:55:55', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-20/5858819b94fc0.JPG', null, '我是123', '河北师范大学', '1996-07-04', '男');
