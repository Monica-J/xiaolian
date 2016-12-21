-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2016 at 11:23 PM
-- Server version: 5.5.47
-- PHP Version: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xiaolian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `realname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `repwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `realname`, `tel`, `email`, `addtime`, `password`, `repwd`) VALUES
(1, 'root', 'root', '123456', '123456@qq.com', '2016-11-16 15:47:39', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `newspic` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `nid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `username`, `newspic`, `title`, `content`, `nid`) VALUES
(58, 'li', 'http://139.199.94.227/Public/uploads/2016-12-20/58588aedeb198.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', 29),
(56, 'li', 'http://139.199.94.227/Public/uploads/2016-12-20/5858e3f591dd8.png', 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', 41),
(57, 'li', 'http://139.199.94.227/Public/uploads/2016-12-20/5858deec65e40.png', '组合数学与编码简介', '组合数学是研究离散构形的一门数学分支，它有着丰富的研究内容和历史渊源，在计算机科学、信息科学、编码密码学等众多领域有重要应用。报告将介绍一些历史上著名的组合问题，以及组合数学理论在编码学中的应用，同时简单介绍北京交通大学数学系的研究生招生情况。', 40),
(59, '123', 'http://139.199.94.227/Public/uploads/2016-12-20/58588aedeb198.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', 29),
(60, '梁子昭', 'http://139.199.94.227/Public/uploads/2016-12-20/5858e3f591dd8.png', 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', 41),
(61, '123', 'http://139.199.94.227/Public/uploads/2016-12-20/5858e3f591dd8.png', 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', 41),
(62, '梁子昭', 'http://139.199.94.227/Public/uploads/2016-12-20/58588aedeb198.png', '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', 29);

-- --------------------------------------------------------

--
-- Table structure for table `dianzan`
--

CREATE TABLE IF NOT EXISTS `dianzan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `dname` varchar(40) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `dianzan`
--

INSERT INTO `dianzan` (`id`, `username`, `dname`, `content`, `pic`) VALUES
(2, '岳岳岳', 'li', '今天很开心1211212', NULL),
(67, 'root', 'li', '今天好开心啊啊啊啊啊啊啊啊', NULL),
(66, 'root', 'li', '今天好', NULL),
(62, 'li', '岳岳岳', '今天天气不错？\r\n                    ', NULL),
(68, 'li', '123', '  我是li\r\n                    ', NULL),
(69, '123', '梁子昭', '……看看', NULL),
(70, 'li', '梁子昭', '说点什么吧？？？', NULL),
(71, '123', '梁子昭', '冬至不吃饺子', NULL),
(72, 'li', '梁子昭', '123456789', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dynamic`
--

CREATE TABLE IF NOT EXISTS `dynamic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT '',
  `content` varchar(255) NOT NULL,
  `addtime` datetime NOT NULL,
  `scantime` int(11) DEFAULT '1',
  `userpic` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `fschool` varchar(255) DEFAULT NULL,
  `fgender` varchar(255) DEFAULT NULL,
  `fbirthday` date DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `username`, `fname`, `fschool`, `fgender`, `fbirthday`, `pic`) VALUES
(1, 'li', 'root', '河北师范大学', '男', '1994-10-18', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(4, 'li', '岳岳岳', '河北师范大学', '男', '2016-05-12', 'http://139.199.94.227/Public/uploads/2016-12-12/584e41f06bd2a.JPG'),
(3, 'li', '18678627329', '河北师范大学', '女', '2016-12-12', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(5, '12345', '18678627329', '河北师范大学', '女', '2016-12-12', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(6, '12345', '岳岳岳', '河北师范大学', '男', '2016-05-12', 'http://139.199.94.227/Public/uploads/2016-12-12/584e41f06bd2a.JPG'),
(7, '12345', 'root', '河北师范大学', '男', '1994-10-18', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(10, '123', 'root', '河北师范大学', '男', '1994-10-18', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(11, '123', '岳岳岳', '河北师范大学', '男', '2016-05-12', 'http://139.199.94.227/Public/uploads/2016-12-12/584e41f06bd2a.JPG'),
(12, '梁子昭', 'root', '河北师范大学', '男', '1994-10-18', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG'),
(13, '梁子昭', 'li', '河北师范大学', '男', '2016-07-07', 'http://139.199.94.227/Public/uploads/2016-12-10/584b9697f2707.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `title`, `content`, `posttime`, `scantime`, `author`, `newspic`, `recommended`, `schoolname`) VALUES
(29, '迎新晚会', '互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。', '2016-12-07 15:47:00', 20, '李', 'http://139.199.94.227/Public/uploads/2016-12-20/58588aedeb198.png', 1, '河北师范大学'),
(40, '组合数学与编码简介', '组合数学是研究离散构形的一门数学分支，它有着丰富的研究内容和历史渊源，在计算机科学、信息科学、编码密码学等众多领域有重要应用。报告将介绍一些历史上著名的组合问题，以及组合数学理论在编码学中的应用，同时简单介绍北京交通大学数学系的研究生招生情况。', '2016-12-20 15:42:00', 2, 'li', 'http://139.199.94.227/Public/uploads/2016-12-20/5858deec65e40.png', 1, '河北师范大学 理科群1号楼D-203'),
(41, 'Recent Advancement and Future Trend of Magnetic Re', '霍素国, 博士，英国University College London大学纳米实验中心实验室研究员。曾先后在英国希捷公司、布里斯托大学从事计算机硬盘及磁记录薄膜材料的研究，之后进入伦敦大学学院从事纳米磁性材料的研究。在纳米材料结构表征、磁学及磁记录材料的实验与理论研究等方面取得了引人注目的成绩。', '2016-12-20 15:55:00', 4, 'li', 'http://139.199.94.227/Public/uploads/2016-12-20/5858e3f591dd8.png', 1, '河北师范大学 理科群2号楼A-302室');

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `addtime` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`id`, `addtime`, `img`, `pname`, `content`) VALUES
(1, '2016-12-08 09:35:00', 'http://139.199.94.227/Public/uploads/2016-12-08/5848b9074a2c3.png', '抗寒', '&lt;strong&gt;抗寒&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;br /&gt;\r\n&lt;/str'),
(2, '2016-12-08 09:37:00', 'http://139.199.94.227/Public/uploads/2016-12-08/5848b95372f33.png', '抗寒', '&lt;strong&gt;HTML内容&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;strong&gt;抗寒&lt;/strong&gt;&lt;/strong&gt;'),
(3, '2016-12-08 10:39:00', 'http://139.199.94.227/Public/uploads/2016-12-08/5848c7f53887a.png', '河北师大东门', '&lt;strong&gt;HTML内容和北师大东门&lt;strong&gt;TML内容和北师大东门&lt;/strong&gt;&lt;strong&gt;TML内容和北师大东门&lt;/strong&gt;&lt;/strong&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) DEFAULT NULL,
  `splace` varchar(255) DEFAULT NULL,
  `stime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `sname`, `splace`, `stime`) VALUES
(11, '河北师范大学', '石家庄', '2016-12-01 10:09:53'),
(12, '天津大学', '天津', '2016-12-01 09:03:42'),
(14, '清华大学', '北京', '2016-12-01 09:17:04'),
(15, '上海大学', '上海', '2016-12-01 09:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(255) DEFAULT NULL,
  `initator` varchar(255) DEFAULT NULL,
  `schoolname` varchar(255) DEFAULT NULL,
  `tasktime` datetime DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `taskname`, `initator`, `schoolname`, `tasktime`, `content`) VALUES
(1, '寻找图书馆', '张三', '河北大学', '2016-12-06 11:05:08', '寻找图书馆，位与学府路'),
(6, '寻找时光塔', '岳岳岳', '河北师范大学', '2016-11-30 22:55:35', '&lt;strong&gt;寻找时光塔&lt;/strong&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `realname`, `tel`, `email`, `addtime`, `password`, `repwd`, `userpic`, `recommended`, `introduce`, `school`, `birthday`, `gender`) VALUES
(40, '校脸小人NO.1', NULL, '15632188568', NULL, '2016-12-21 22:28:06', '123', NULL, '/Public/uploads/2016-12-21/585a9176175a6.png', NULL, '我是校脸小人NO.1', NULL, '0000-00-00', '女'),
(41, '校脸小人NO.2', NULL, '15232182177', NULL, '2016-12-21 22:29:05', '123', NULL, '/Public/uploads/2016-12-21/585a91b1080a7.png', NULL, '我是校脸小人NO.2', NULL, '0000-00-00', '女'),
(42, '校脸小人NO.3', NULL, '15230803990', NULL, '2016-12-21 22:29:42', '123', NULL, '/Public/uploads/2016-12-21/585a91d689bb8.png', NULL, '我是校脸小人NO.3', NULL, '0000-00-00', '男'),
(43, '校脸小人NO.4', NULL, '18678627329', NULL, '2016-12-21 22:56:26', '123', NULL, '/Public/uploads/2016-12-21/585a981a4ccc1.png', NULL, NULL, NULL, NULL, NULL),
(44, '校脸小人NO.5', NULL, '15231193590', NULL, '2016-12-21 22:57:43', '123', NULL, '/Public/uploads/2016-12-21/585a9867ac1a1.png', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
