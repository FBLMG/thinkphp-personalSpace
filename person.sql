-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017-10-18 17:06:24
-- 服务器版本: 5.1.73
-- PHP 版本: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `person`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_admin`
--

CREATE TABLE IF NOT EXISTS `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `creattime` text NOT NULL COMMENT '创建时间',
  `lasttime` text NOT NULL COMMENT '登陆时间',
  `img` text NOT NULL COMMENT '头像',
  `phone` text NOT NULL COMMENT '手机号码',
  `token` text COMMENT '令牌',
  `tokentime` int(11) DEFAULT NULL COMMENT '令牌时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理者表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_admin`
--

INSERT INTO `tp_admin` (`id`, `name`, `password`, `creattime`, `lasttime`, `img`, `phone`, `token`, `tokentime`) VALUES
(1, 'dzx', 'df29c6a28ab2cb0e393c1705eb4850a5', '1496465483', '1506675734', '1496979855.png', '15812671184', 'f5d59185f76952a8763565a87339ba39', 1506762134),
(2, 'hzx', 'a6c80bf3483f98956b93e0be73b12170', '1496465601', '1508293233', '1504853734.jpg', '13609615061', 'fa693392e3b5e4ece17a07a7222ad716', 1508379633);

-- --------------------------------------------------------

--
-- 表的结构 `tp_admingj`
--

CREATE TABLE IF NOT EXISTS `tp_admingj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '管理员ID',
  `creattime` text NOT NULL COMMENT '创建时间',
  `imgtime` text NOT NULL COMMENT '发表照片时间',
  `filetime` text NOT NULL COMMENT '发表文章时间',
  `logintime` text NOT NULL COMMENT '最近登陆时间',
  `remesstime` text NOT NULL COMMENT '回复留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员轨迹' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_admingj`
--

INSERT INTO `tp_admingj` (`id`, `uid`, `creattime`, `imgtime`, `filetime`, `logintime`, `remesstime`) VALUES
(1, 1, '1496465483', '1506675827', '1503555856', '1506675734', '1503467993'),
(2, 2, '1496465601', '1507619618', '1504144007', '1508293233', '1504143383');

-- --------------------------------------------------------

--
-- 表的结构 `tp_adminlogin`
--

CREATE TABLE IF NOT EXISTS `tp_adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '管理员ID',
  `jan` int(11) NOT NULL DEFAULT '0' COMMENT '一月总数',
  `feb` int(11) NOT NULL DEFAULT '0' COMMENT '二月总数',
  `mar` int(11) NOT NULL DEFAULT '0' COMMENT '三月总数',
  `apr` int(11) NOT NULL DEFAULT '0' COMMENT '四月总数',
  `may` int(11) NOT NULL DEFAULT '0' COMMENT '五月总数',
  `jun` int(11) NOT NULL DEFAULT '0' COMMENT '六月总数',
  `jul` int(11) NOT NULL DEFAULT '0' COMMENT '七月总数',
  `aug` int(11) NOT NULL DEFAULT '0' COMMENT '八月总数',
  `sep` int(11) NOT NULL DEFAULT '0' COMMENT '九月总数',
  `oct` int(11) NOT NULL DEFAULT '0' COMMENT '十月总数',
  `nov` int(11) NOT NULL DEFAULT '0' COMMENT '十一月总数',
  `dec` int(11) NOT NULL DEFAULT '0' COMMENT '十二月总数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员个人登录' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_adminlogin`
--

INSERT INTO `tp_adminlogin` (`id`, `uid`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, 1, 1, 0, 0, 1, 1, 22, 0, 34, 3, 0, 0, 0),
(2, 2, 0, 1, 0, 0, 0, 1, 1, 9, 21, 19, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_album`
--

CREATE TABLE IF NOT EXISTS `tp_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '相册名',
  `tid` int(11) NOT NULL COMMENT '分类ID',
  `img` text NOT NULL COMMENT '图片路径',
  `imgwidth` int(11) NOT NULL DEFAULT '1' COMMENT '照片形式 1:竖屏,2:横屏,3正方  ',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '相册状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='相册表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tp_album`
--

INSERT INTO `tp_album` (`id`, `name`, `tid`, `img`, `imgwidth`, `status`) VALUES
(10, 'LOVE', 3, '045613.jpg', 1, 1),
(11, '节日', 5, '030403.jpg', 2, 1),
(14, '欢乐谷', 7, '1506757222.jpg', 1, 1),
(15, 'Sweet Lovers', 6, '030532.jpg', 2, 1),
(16, '文谷', 7, '103342.JPG', 1, 1),
(17, '荷兰花卉小镇', 7, '104037.JPG', 1, 1),
(18, 'Eternal love', 6, '113757.jpg', 1, 1),
(19, 'Miss', 6, '031208.jpg', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_articleimg`
--

CREATE TABLE IF NOT EXISTS `tp_articleimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgurl` text NOT NULL COMMENT '图片地址',
  `type` text NOT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='暂时存放' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_articleimg`
--

INSERT INTO `tp_articleimg` (`id`, `imgurl`, `type`) VALUES
(1, 'noimg.jpg', 'article');

-- --------------------------------------------------------

--
-- 表的结构 `tp_articlemon`
--

CREATE TABLE IF NOT EXISTS `tp_articlemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` text NOT NULL COMMENT '月份',
  `count` int(255) NOT NULL COMMENT '数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_articlemon`
--

INSERT INTO `tp_articlemon` (`id`, `month`, `count`) VALUES
(1, 'jan', 0),
(2, 'feb', 0),
(3, 'mar', 0),
(4, 'apr', 0),
(5, 'may', 0),
(6, 'jun', 10),
(7, 'jul', 0),
(8, 'aug', 39),
(9, 'sep', 9),
(10, 'otc', 0),
(11, 'nov', 0),
(12, 'dec', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_file`
--

CREATE TABLE IF NOT EXISTS `tp_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL COMMENT '文章名称',
  `content` text NOT NULL COMMENT '内容',
  `img` text NOT NULL COMMENT '封面',
  `describe` text NOT NULL COMMENT '描述',
  `author` int(11) NOT NULL COMMENT '作者',
  `publishtime` text NOT NULL COMMENT '发表时间',
  `creattime` text NOT NULL COMMENT '修改时间',
  `status` int(11) NOT NULL COMMENT '状态',
  `fid` int(11) NOT NULL COMMENT '文章类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tp_file`
--

INSERT INTO `tp_file` (`id`, `filename`, `content`, `img`, `describe`, `author`, `publishtime`, `creattime`, `status`, `fid`) VALUES
(3, 'Aenean feugiat in ante et blandit', 'Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan ', '1496910912.jpg', 'Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non', 1, '1496819317', '1496910915', 1, 1),
(4, 'Lorem ipsum dolor sit amet', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.justo duo dolores et ea rebum. Consetetur sadipscing elitr, &nbsp;consetetur sadipscing elitr elitr. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '1496830056.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 1, '1496819365', '1502848899', 1, 2),
(7, '上线一周', '<p>上线一周</p>', '1503469663.jpg', '上线一周', 1, '1503469669', ' ', 0, 1),
(9, '七夕情人节', '<p>&nbsp; &nbsp;今天是中国传统的情人节，属于我们的第一个七夕节，也是我们结束异地后的第一个情人节，I LOVE YOU，香香，爱你的小汤圆。感谢你一路以来的支持与包容，我很幸运，因为你带给我的总是快乐与幸福，谢谢你的这一切付出，我也不会让你的付出白白浪费，我会努力创造属于我们彼此的幸福，让你做一个幸福的姑娘，带给你欢乐与幸福，香香，我爱你，七夕节快乐，属于我们的节日！<br/></p><p><br/></p>', '1503885621.jpg', '好想朝朝暮暮，更想天长地久', 1, '1503885821', '1504172068', 1, 1),
(10, '我与香香的日常', '<p>&nbsp; &nbsp; &nbsp;每天醒来第一件事就是互道早安，一起收能量。吃过早饭之后，我便来到你住的公寓，看你吃早餐，帮忙看看哪些没有带上的(你就是这么一个不让人省心的孩子，但我喜欢替你安排妥当)。吃过早餐之后，我们便开始上班的开始，我们总是习惯坐到总站，然后再坐去公司，你每天在地铁上基本就是睡觉，你习惯性的靠着我的肩膀睡，我也喜欢你靠着我的肩膀睡。我总是故意坐过几个站，然后再坐回去，只为多陪伴你一会。</p><p>&nbsp; &nbsp; &nbsp;每天下班，我总会提前在大运地铁站等你的到来，然后一起下班回家吃饭，吃过晚饭之后，我们也会出去逛逛街，享受晚上两人的独处时间，回到你住的地方，我总会等你洗完澡，给你洗衣服，这种状况，已经持续了几个月的时间，我也能为你洗衣服感到很幸福，因为可以为自己喜欢的姑娘的洗衣服，也是一种幸福。</p><p>&nbsp; &nbsp; &nbsp;我们也会在晚上睡觉前通通视频，谈谈心，有时候你也会被我的逗逼所逗笑，每当看到你的笑容，我都会很开心，因为你开心，我便感到莫名的欢喜。这样使我们彼此的感情更加的稳定与牢固，这便是我们每天的基本日常，即是那么的简单，又是那么的开心。</p>', '1504143483.jpg', '两个人在一起是最甜蜜的时光，两个人在一起总会产生矛盾，关键在于我们两个人怎么去解决，怎么去面对', 1, '1504144007', '1504172093', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_filetype`
--

CREATE TABLE IF NOT EXISTS `tp_filetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL COMMENT '文章分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章分类表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_filetype`
--

INSERT INTO `tp_filetype` (`id`, `type`) VALUES
(1, '心情'),
(2, '游玩');

-- --------------------------------------------------------

--
-- 表的结构 `tp_footervideo`
--

CREATE TABLE IF NOT EXISTS `tp_footervideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` text NOT NULL COMMENT '视频地址',
  `type` text NOT NULL COMMENT '类型',
  `creattime` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='视频展示表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_footervideo`
--

INSERT INTO `tp_footervideo` (`id`, `video`, `type`, `creattime`) VALUES
(1, '025449.mp4', 'video', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_img`
--

CREATE TABLE IF NOT EXISTS `tp_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL COMMENT '图片地址',
  `describe` text NOT NULL COMMENT '描述',
  `tid` int(11) NOT NULL COMMENT '分类ID',
  `aid` int(11) NOT NULL COMMENT '相册ID',
  `imgwidth` int(11) NOT NULL DEFAULT '1' COMMENT '照片形式 1:竖屏,2:横屏  ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片表' AUTO_INCREMENT=117 ;

--
-- 转存表中的数据 `tp_img`
--

INSERT INTO `tp_img` (`id`, `img`, `describe`, `tid`, `aid`, `imgwidth`) VALUES
(15, '045638.jpg', 'LOVE', 3, 10, 1),
(16, '045649.jpg', 'LOVE', 3, 10, 1),
(17, '045702.jpg', 'LOVE', 3, 10, 1),
(18, '045715.jpg', 'LOVE', 3, 10, 1),
(19, '092048.jpg', '七夕情人节', 5, 11, 2),
(49, '050232.jpg', '', 7, 14, 1),
(50, '050347.jpg', '', 7, 14, 1),
(56, '053410.jpg', 'LOVE', 6, 15, 1),
(59, '053444.jpg', 'LOVE', 6, 15, 1),
(60, '045405.jpeg', 'LOVE', 6, 15, 2),
(61, '053458.jpg', 'LOVE', 6, 15, 1),
(62, '053506.jpg', 'LOVE', 6, 15, 1),
(63, '045318.jpg', 'LOVE', 6, 15, 2),
(64, '045300.jpg', 'LOVE', 6, 15, 2),
(65, '045236.jpg', 'LOVE', 6, 15, 2),
(66, '045215.jpg', 'LOVE', 6, 15, 2),
(67, '045154.jpg', 'LOVE', 6, 15, 2),
(68, '045132.jpg', 'LOVE', 6, 15, 2),
(69, '045107.jpg', 'LOVE', 6, 15, 2),
(70, '045030.jpg', 'LOVE', 6, 15, 2),
(71, '044935.jpg', 'LOVE', 6, 15, 2),
(72, '043240.jpg', '国庆节快乐', 5, 11, 1),
(74, '103609.JPG', '文谷', 7, 16, 1),
(75, '103624.JPG', '文谷', 7, 16, 1),
(76, '044216.JPG', '文谷', 7, 16, 2),
(78, '044151.JPG', '文谷', 7, 16, 2),
(79, '103738.JPG', '文谷', 7, 16, 1),
(80, '103751.JPG', '文谷', 7, 16, 1),
(81, '103804.JPG', '文谷', 7, 16, 1),
(83, '103916.JPG', '文谷', 7, 16, 1),
(84, '044513.JPG', '荷兰花卉小镇', 7, 17, 2),
(85, '104108.JPG', '荷兰花卉小镇', 7, 17, 1),
(86, '104124.JPG', '荷兰花卉小镇', 7, 17, 1),
(87, '104140.JPG', '荷兰花卉小镇', 7, 17, 1),
(88, '104152.JPG', '荷兰花卉小镇', 7, 17, 1),
(89, '104203.JPG', '荷兰花卉小镇', 7, 17, 1),
(90, '104214.JPG', '荷兰花卉小镇', 7, 17, 1),
(91, '044449.JPG', '荷兰花卉小镇', 7, 17, 2),
(93, '044326.JPG', '文谷', 7, 16, 2),
(94, '044344.JPG', '文谷', 7, 16, 1),
(95, '044400.JPG', '文谷', 7, 16, 1),
(96, '044418.JPG', '文谷', 7, 16, 2),
(97, '092024.jpg', '中秋', 5, 11, 2),
(98, '113816.jpg', 'LOVE', 6, 18, 3),
(99, '113849.jpg', 'LOVE', 6, 18, 3),
(100, '113904.jpg', 'LOVE', 6, 18, 3),
(101, '113922.jpg', 'LOVE', 6, 18, 2),
(102, '113936.jpg', 'LOVE', 6, 18, 2),
(103, '113947.jpg', 'LOVE', 6, 18, 3),
(104, '113957.jpg', 'LOVE', 6, 18, 2),
(105, '114007.jpg', 'LOVE', 6, 18, 3),
(106, '114017.jpg', 'LOVE', 6, 18, 3),
(107, '031220.jpg', 'Miss', 6, 19, 3),
(108, '031228.jpg', 'Miss', 6, 19, 3),
(109, '031237.jpg', 'Miss', 6, 19, 3),
(110, '031247.jpg', 'Miss', 6, 19, 3),
(112, '031308.jpg', 'Miss', 6, 19, 3),
(113, '031316.jpg', 'Miss', 6, 19, 3),
(114, '031323.jpg', 'Miss', 6, 19, 3),
(115, '031331.jpg', 'Miss', 6, 19, 3),
(116, '031338.jpg', 'Miss', 6, 19, 3);

-- --------------------------------------------------------

--
-- 表的结构 `tp_imgtype`
--

CREATE TABLE IF NOT EXISTS `tp_imgtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL COMMENT '分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片分类表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_imgtype`
--

INSERT INTO `tp_imgtype` (`id`, `type`) VALUES
(3, '花'),
(5, '节日'),
(6, 'LOVE'),
(7, '旅行记');

-- --------------------------------------------------------

--
-- 表的结构 `tp_kprecord`
--

CREATE TABLE IF NOT EXISTS `tp_kprecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlefrist` text NOT NULL COMMENT '第一段',
  `titletwo` text NOT NULL COMMENT '第二段',
  `type` varchar(126) NOT NULL COMMENT '类型',
  `creattime` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站底部备案字段' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_kprecord`
--

INSERT INTO `tp_kprecord` (`id`, `titlefrist`, `titletwo`, `type`, `creattime`) VALUES
(1, '© DZX', '粤ICP备17107450号', 'footer', 1503554659);

-- --------------------------------------------------------

--
-- 表的结构 `tp_loginip`
--

CREATE TABLE IF NOT EXISTS `tp_loginip` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `login_ip` varchar(256) DEFAULT NULL COMMENT '访问IP地址',
  `login_city` varchar(256) DEFAULT NULL COMMENT '访问城市',
  `login_user` varchar(256) DEFAULT NULL COMMENT '访问者姓名',
  `operation_url` varchar(256) DEFAULT NULL COMMENT '访问操作',
  `create_at` int(11) DEFAULT '0' COMMENT '访问时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='访问统计记录表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_lognum`
--

CREATE TABLE IF NOT EXISTS `tp_lognum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mon` text NOT NULL COMMENT '月份',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户访问数' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_lognum`
--

INSERT INTO `tp_lognum` (`id`, `mon`, `count`) VALUES
(1, '01', 0),
(2, '02', 0),
(3, '03', 0),
(4, '04', 0),
(5, '05', 1),
(6, '06', 6),
(7, '07', 0),
(8, '08', 20),
(9, '09', 4),
(10, '10', 0),
(11, '11', 0),
(12, '12', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_lunbo`
--

CREATE TABLE IF NOT EXISTS `tp_lunbo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL COMMENT '图片地址',
  `content` text NOT NULL COMMENT '图片描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='轮播表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tp_lunbo`
--

INSERT INTO `tp_lunbo` (`id`, `img`, `content`) VALUES
(2, '122148.jpg', 'I LOVE YOU'),
(3, '122155.jpg', 'This is My Love'),
(4, '122202.jpg', 'Hold your hand and grow old together with you'),
(5, '122209.jpg', 'I LOVE YOU'),
(6, '122216.jpg', 'Eternal love'),
(7, '122225.jpg', 'Love you with my whole life'),
(8, '122247.jpg', 'Sweetheart'),
(9, '122319.jpg', 'Is My LOVE');

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '留着者ID',
  `content` text NOT NULL COMMENT '留言内容',
  `creattime` text NOT NULL COMMENT '留言时间',
  `status` int(11) NOT NULL DEFAULT '2' COMMENT '1：已回复   2：未回复',
  `biaozhi` int(11) NOT NULL DEFAULT '1' COMMENT '标志(1:正常;2:垃圾箱;)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `uid`, `content`, `creattime`, `status`, `biaozhi`) VALUES
(1, 2, '测速！', '1496990738', 1, 1),
(2, 3, '测试', '1496990738', 1, 1),
(3, 3, '<p>我来了</p>', '1497315571', 1, 1),
(4, 5, '你好！', '1497583133', 1, 1),
(5, 5, '你好！', '1503300494', 1, 1),
(6, 5, '嘿嘿！', '1503300586', 1, 1),
(7, 5, '假期前期，怀揣着归家的心与不舍', '1506671832', 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_pinglun`
--

CREATE TABLE IF NOT EXISTS `tp_pinglun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL COMMENT '文章ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `content` text NOT NULL COMMENT '评论内容',
  `time` text NOT NULL COMMENT '评论时间',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '评论浏览状态',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='评论表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_pinglun`
--

INSERT INTO `tp_pinglun` (`id`, `fid`, `uid`, `content`, `time`, `status`) VALUES
(1, 4, 5, '<p>英文好难看懂</p>', '1497580972', 1),
(2, 4, 5, '<p>英文好高大上</p>', '1497597748', 1),
(3, 3, 5, '<p>哇，占个楼先</p>', '1497598211', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_readartcle`
--

CREATE TABLE IF NOT EXISTS `tp_readartcle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rjid` int(11) NOT NULL COMMENT '日记ID',
  `reader` int(255) NOT NULL DEFAULT '0' COMMENT '浏览总数',
  `thumbs` int(255) NOT NULL DEFAULT '0' COMMENT '点赞数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='日记附属表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tp_readartcle`
--

INSERT INTO `tp_readartcle` (`id`, `rjid`, `reader`, `thumbs`) VALUES
(1, 3, 25, 1),
(2, 4, 92, 0),
(5, 7, 0, 0),
(7, 9, 6, 0),
(8, 10, 7, 2);

-- --------------------------------------------------------

--
-- 表的结构 `tp_remessage`
--

CREATE TABLE IF NOT EXISTS `tp_remessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '留言ID',
  `uid` int(11) NOT NULL COMMENT '留言者ID',
  `aid` int(11) NOT NULL COMMENT '管理员ID',
  `content` text NOT NULL COMMENT '回复内容',
  `creattime` text NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='回复留言表' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `tp_remessage`
--

INSERT INTO `tp_remessage` (`id`, `mid`, `uid`, `aid`, `content`, `creattime`) VALUES
(1, 1, 0, 1, '你好，感谢你的留言', '1497250437'),
(2, 1, 2, 0, '没想到你会回复我！', '1497253501'),
(3, 1, 0, 1, '是啊，惊不惊喜，意不意外', '1497254253'),
(4, 1, 0, 1, '<p><img src="http://img.baidu.com/hi/jx2/j_0057.gif"/></p>', '1497254334'),
(5, 1, 0, 1, '<p>嘿嘿！<br/></p>', '1497314848'),
(6, 2, 0, 1, '<p>嘿嘿!</p>', '1497314870'),
(7, 1, 0, 1, '<p><img src="http://img.baidu.com/hi/jx2/j_0068.gif"/></p>', '1497315204'),
(9, 2, 3, 0, '<p>哈喽</p>', '1497323062'),
(10, 2, 0, 1, '<p>你好呀</p>', '1497323073'),
(11, 2, 3, 0, '<p><img src="http://img.baidu.com/hi/jx2/j_0067.gif"/></p>', '1497323178'),
(12, 2, 3, 0, '<p>哈哈</p>', '1497324114'),
(13, 1, 0, 1, '<p>嘿嘿</p>', '1502849438'),
(14, 3, 0, 1, '<p>好哒</p>', '1502849463'),
(15, 4, 0, 1, '<p>嘿嘿</p>', '1503467993'),
(16, 5, 0, 2, '<p>欢迎欢迎</p>', '1504143376'),
(17, 6, 0, 2, '<p>哈喽！！！</p>', '1504143383');

-- --------------------------------------------------------

--
-- 表的结构 `tp_sms`
--

CREATE TABLE IF NOT EXISTS `tp_sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL COMMENT 'token',
  `account` text NOT NULL COMMENT 'access',
  `content` text NOT NULL COMMENT '模版内容',
  `type` text NOT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='短信验证码表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_sms`
--

INSERT INTO `tp_sms` (`id`, `token`, `account`, `content`, `type`) VALUES
(1, '2c757955d66b47d0839bdae46cc8b1a8', 'aa93642712c54c25950cb12f858873ff', '【我的空间】打死都不要告诉别人你的验证码是：', 'sms');

-- --------------------------------------------------------

--
-- 表的结构 `tp_theme`
--

CREATE TABLE IF NOT EXISTS `tp_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL COMMENT '分类ID',
  `name` text NOT NULL COMMENT '主题名称',
  `img` text NOT NULL COMMENT '照片封面',
  `status` int(11) NOT NULL COMMENT '状态(1:公开,0:保密)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='视频主题表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_title`
--

CREATE TABLE IF NOT EXISTS `tp_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT '标题名称',
  `type` text NOT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站标题' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_title`
--

INSERT INTO `tp_title` (`id`, `title`, `type`) VALUES
(1, '小汤圆快到碗里来', 'top'),
(2, 'My love is you,!', 'footer');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `password` text NOT NULL COMMENT '密码',
  `creattime` text NOT NULL COMMENT '创建时间',
  `img` text NOT NULL COMMENT '头像',
  `phone` text NOT NULL COMMENT '手机号',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态',
  `lasttime` text NOT NULL COMMENT '最近登陆时间',
  `groupid` int(120) NOT NULL COMMENT '用户分组',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `token` text COMMENT '令牌',
  `tokentime` int(11) DEFAULT '0' COMMENT '令牌时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `password`, `creattime`, `img`, `phone`, `status`, `lasttime`, `groupid`, `username`, `token`, `tokentime`) VALUES
(2, 'a2de9b490314ded3a0b2f83cb7cb8f2c', '1496470045', '2.jpg', '13609615063', 1, ' 1496710136', 2, 'user03', NULL, 0),
(3, '469cb46137ec1963d6ce065bf1bc9918', '1496655008', 'user.png', ' 15223365478', 0, ' 1494645071', 1, 'user01', '68f8d3378e1b0a1ed456c1992556b445', 1503741715),
(4, '11f5926e6608cdc0f38c250d12bb0859', '1496882028', 'user.png', ' ', 1, ' ', 1, 'user02', NULL, 0),
(5, 'df29c6a28ab2cb0e393c1705eb4850a5', '1496892895', '5.jpg', ' ', 1, ' ', 1, 'dzx', 'a05365389928bfe1d2e15c3c75d03c76', 1506759251),
(6, 'ea083fa621ecbe224dc2707bf35c2655', '1497926000', 'user.png', '13609615061', 1, '', 1, 'user', NULL, 0),
(7, 'c114023bc43214a287c7e7c1a3d9403d', '1503652918', 'user.png', '15992259745', 1, '', 1, '慢慢没发现', NULL, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_usergroup`
--

CREATE TABLE IF NOT EXISTS `tp_usergroup` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户组表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_usergroup`
--

INSERT INTO `tp_usergroup` (`id`, `name`) VALUES
(1, '普通用户'),
(2, '亲密用户'),
(3, '其他用户');

-- --------------------------------------------------------

--
-- 表的结构 `tp_variable`
--

CREATE TABLE IF NOT EXISTS `tp_variable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT '标题',
  `caption` varchar(128) NOT NULL COMMENT '描述',
  `type` text NOT NULL COMMENT '类型',
  `creattime` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='变量表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_variable`
--

INSERT INTO `tp_variable` (`id`, `title`, `caption`, `type`, `creattime`) VALUES
(1, '相册', '甜蜜的日常', 'image', 1503383511),
(2, '日记', '关于我们的点点滴滴', 'filetype', 1503383511),
(3, '美好的时光', '小汤圆快到碗里来', 'videotype', 1503383511),
(4, '我的留言', '时间轴', 'messagetype', 1503383511),
(5, 'Belong to our love', 'Record our sweet and mundane bits and pieces, and gather these bits and pieces into love forever.', 'indextop', 1503383511),
(6, '甜蜜的记忆', '岁月是那么的短暂 &amp; 但有你却是那么的漫长.', 'indexbanner', 1503383511),
(7, '美好 时光', '有你在的每一分每一秒都是那么的甜蜜. <br> 遇上你是我的荣幸 LOVE ', 'indexfooter', 1503383511);

-- --------------------------------------------------------

--
-- 表的结构 `tp_video`
--

CREATE TABLE IF NOT EXISTS `tp_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '名称',
  `describe` text NOT NULL COMMENT '描述',
  `tid` int(11) NOT NULL COMMENT '分类ID',
  `vid` int(11) NOT NULL COMMENT '主题ID',
  `video` text NOT NULL COMMENT '视频',
  `time` text NOT NULL COMMENT '发表时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='视频表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_video`
--

INSERT INTO `tp_video` (`id`, `name`, `describe`, `tid`, `vid`, `video`, `time`) VALUES
(3, '狗狗', '狗狗', 4, 7, '051050.mp4', '1497601396'),
(4, '狗狗', '狗狗', 4, 7, '051114.mp4', '1497601416');

-- --------------------------------------------------------

--
-- 表的结构 `tp_videtype`
--

CREATE TABLE IF NOT EXISTS `tp_videtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='视频分类表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tp_videtype`
--

INSERT INTO `tp_videtype` (`id`, `name`) VALUES
(5, '游玩'),
(6, 'LOVE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
