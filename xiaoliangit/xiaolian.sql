/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50701
Source Host           : localhost:3306
Source Database       : xiaolian

Target Server Type    : MYSQL
Target Server Version : 50701
File Encoding         : 65001

Date: 2016-12-15 10:18:13
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collection
-- ----------------------------
INSERT INTO `collection` VALUES ('45', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847be52c072f.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。');
INSERT INTO `collection` VALUES ('46', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847bdf241189.png', '送老晚会', '送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会');

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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dynamic
-- ----------------------------
INSERT INTO `dynamic` VALUES ('1', '岳岳岳', '今天很开心1211212', '2016-12-06 14:57:00', '00000000007', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG', null);
INSERT INTO `dynamic` VALUES ('2', 'root', '今天好', '2016-12-05 10:51:57', '00000000003', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', null);
INSERT INTO `dynamic` VALUES ('3', 'root', '今天好开心啊啊啊啊啊啊啊啊', '2016-12-06 16:45:48', '00000000004', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', null);
INSERT INTO `dynamic` VALUES ('62', 'li', '  我是li\r\n                    ', '2016-12-14 10:36:37', '00000000012', null, null);
INSERT INTO `dynamic` VALUES ('65', 'li', '今天天气不错？\r\n                    ', '2016-12-14 10:41:56', '00000000001', null, null);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friends
-- ----------------------------
INSERT INTO `friends` VALUES ('1', 'li', 'root', '河北师范大学', '男', '1994-10-18', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('4', 'li', '岳岳岳', '河北师范大学', '男', '2016-05-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG');
INSERT INTO `friends` VALUES ('3', 'li', '18678627329', '河北师范大学', '女', '2016-12-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('5', '12345', '18678627329', '河北师范大学', '女', '2016-12-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');
INSERT INTO `friends` VALUES ('6', '12345', '岳岳岳', '河北师范大学', '男', '2016-05-12', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG');
INSERT INTO `friends` VALUES ('7', '12345', 'root', '河北师范大学', '男', '1994-10-18', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `posttime` datetime DEFAULT NULL,
  `scantime` int(11) DEFAULT '1',
  `author` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `newspic` varchar(255) DEFAULT NULL,
  `recommended` int(11) DEFAULT NULL,
  `schoolname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('27', '河北师大之旅', '河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅河北师大之旅', '2016-12-07 15:43:00', '11', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847bd66e8fd1.png', '1', '河北师范大学');
INSERT INTO `news` VALUES ('28', '送老晚会', '送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会送老晚会', '2016-12-07 15:44:00', '28', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847bdf241189.png', '1', '河北师范大学');
INSERT INTO `news` VALUES ('29', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', '2016-12-07 15:47:00', '14', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847be52c072f.png', '1', '河北师范大学');
INSERT INTO `news` VALUES ('32', '读书管理', '读书管理读书管理读书管理读书管理读书管理读书管理读书管理读书管理读书管理读书管理读书管理读书管理', '2016-12-07 00:00:00', '1', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-07/5847bf6e6757c.png', '1', '河北师范大学');
INSERT INTO `news` VALUES ('35', '抗寒', '抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖抗寒注意保暖', '2016-12-08 10:06:00', '1', '李', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-08/5848c0518f399.png', null, '河北师范大学');
INSERT INTO `news` VALUES ('36', '河北师大英语讲座', '听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座听英语讲座', '2016-12-10 13:32:00', '1', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9376535e3.JPG', null, '河北师范大学');
INSERT INTO `news` VALUES ('38', '河北师大读书节', '河北师大读书节开幕，欢迎同学参加', '2016-12-15 10:09:00', '1', 'li', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-15/5851fb996d08d.png', null, '河北师范大学');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'roots', '135622779681', '12345637@qq.com', '2016-11-23 15:21:23', '123', '123', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我叫root', '河北师范大学', '1994-10-18', '男');
INSERT INTO `user` VALUES ('2', '18678627329', '李丽丽', '13562277938', '1123', '2016-11-24 16:34:00', '123', '123', '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我叫18678627329', '河北师范大学', '2016-12-12', '女');
INSERT INTO `user` VALUES ('27', 'li', 'liwenlong', '123', null, '2016-12-10 13:45:59', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-10/584b9697f2707.JPG', '1', '我是li', '河北师范大学', '2016-07-12', '男');
INSERT INTO `user` VALUES ('28', '岳岳岳', null, '123456', null, '2016-12-12 14:21:36', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e41f06bd2a.JPG', '1', '我叫岳岳岳', '河北师范大学', '2016-05-12', '男');
INSERT INTO `user` VALUES ('29', '111', null, '123456', null, '2016-12-12 14:30:24', '123', null, '/xiaoliangit/xiaolian-v0.1/Public/uploads/2016-12-12/584e44009a487.JPG', '1', null, '河北师范大学', '2010-02-12', '男');
