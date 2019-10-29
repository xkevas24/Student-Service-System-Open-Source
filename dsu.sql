# Host: 192.168.103.62  (Version 5.5.60-MariaDB)
# Date: 2019-10-29 16:28:09
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "dsu_actpub"
#

DROP TABLE IF EXISTS `dsu_actpub`;
CREATE TABLE `dsu_actpub` (
  `actid` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `pubdate` varchar(255) NOT NULL DEFAULT '',
  `cttscr` varchar(255) NOT NULL DEFAULT '',
  `picsrc` varchar(255) NOT NULL DEFAULT '',
  `vidsrc` varchar(255) NOT NULL DEFAULT '',
  `micsrc` varchar(255) NOT NULL DEFAULT '',
  `fromwho` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '审核',
  PRIMARY KEY (`actid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_attsub"
#

DROP TABLE IF EXISTS `dsu_attsub`;
CREATE TABLE `dsu_attsub` (
  `attid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `atttime` varchar(255) NOT NULL DEFAULT '',
  `sthour` varchar(255) NOT NULL DEFAULT '',
  `edhour` varchar(255) NOT NULL DEFAULT '',
  `ownedby` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`attid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_codevisible"
#

DROP TABLE IF EXISTS `dsu_codevisible`;
CREATE TABLE `dsu_codevisible` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_mail"
#

DROP TABLE IF EXISTS `dsu_mail`;
CREATE TABLE `dsu_mail` (
  `mailid` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) NOT NULL DEFAULT '',
  `sendto` varchar(255) NOT NULL DEFAULT '',
  `sendfrom` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `postdate` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`mailid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_main"
#

DROP TABLE IF EXISTS `dsu_main`;
CREATE TABLE `dsu_main` (
  `dsuid` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '审核',
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`dsuid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_qingjia"
#

DROP TABLE IF EXISTS `dsu_qingjia`;
CREATE TABLE `dsu_qingjia` (
  `qjid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `fy` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `qjtime` varchar(255) NOT NULL DEFAULT '',
  `subdate` varchar(255) NOT NULL DEFAULT '',
  `bzname` varchar(255) NOT NULL DEFAULT '',
  `orgname` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '审核中',
  PRIMARY KEY (`qjid`)
) ENGINE=InnoDB AUTO_INCREMENT=497 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_roomlog"
#

DROP TABLE IF EXISTS `dsu_roomlog`;
CREATE TABLE `dsu_roomlog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `room` varchar(255) NOT NULL DEFAULT '' COMMENT '房间号',
  `sec1` varchar(255) NOT NULL DEFAULT '' COMMENT '选项1',
  `sec2` varchar(255) NOT NULL DEFAULT '' COMMENT '选项2',
  `sec3` varchar(255) NOT NULL DEFAULT '' COMMENT '选项3',
  `sec4` varchar(255) NOT NULL DEFAULT '' COMMENT '选项4',
  `ifnoone` varchar(255) NOT NULL DEFAULT '' COMMENT '是否缺勤',
  `whowrite` varchar(255) NOT NULL DEFAULT '' COMMENT '评分人',
  `writersn` varchar(255) NOT NULL DEFAULT '' COMMENT '评分人学号',
  `checkdate` varchar(255) NOT NULL DEFAULT '' COMMENT '检查日期',
  `checktime` varchar(255) NOT NULL DEFAULT '' COMMENT '检查时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29208 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_sign"
#

DROP TABLE IF EXISTS `dsu_sign`;
CREATE TABLE `dsu_sign` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `dep` varchar(255) DEFAULT '',
  `attid` varchar(255) NOT NULL DEFAULT '',
  `sntime` varchar(255) NOT NULL DEFAULT '',
  `edtime` varchar(255) DEFAULT NULL,
  `subdate` varchar(255) DEFAULT '',
  `orgname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_toplab_visit"
#

DROP TABLE IF EXISTS `dsu_toplab_visit`;
CREATE TABLE `dsu_toplab_visit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `vt` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1295 DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_votecache"
#

DROP TABLE IF EXISTS `dsu_votecache`;
CREATE TABLE `dsu_votecache` (
  `cacid` bigint(20) NOT NULL AUTO_INCREMENT,
  `subid` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `votetime` varchar(255) NOT NULL DEFAULT '',
  `xm` varchar(255) NOT NULL DEFAULT '',
  `fy` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `setid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`cacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_votedetail"
#

DROP TABLE IF EXISTS `dsu_votedetail`;
CREATE TABLE `dsu_votedetail` (
  `setid` bigint(20) NOT NULL AUTO_INCREMENT,
  `subid` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `vidsrc` varchar(255) NOT NULL DEFAULT '',
  `picsrc` varchar(255) NOT NULL DEFAULT '',
  `micsrc` varchar(255) NOT NULL DEFAULT '',
  `numb` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`setid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "dsu_votesub"
#

DROP TABLE IF EXISTS `dsu_votesub`;
CREATE TABLE `dsu_votesub` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `hosts` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `startv` varchar(255) NOT NULL DEFAULT '',
  `endv` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
