# Host: 192.168.103.61  (Version 5.5.56-MariaDB)
# Date: 2019-10-29 16:27:48
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "access_token"
#

DROP TABLE IF EXISTS `access_token`;
CREATE TABLE `access_token` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `access_token` longtext,
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "js_api"
#

DROP TABLE IF EXISTS `js_api`;
CREATE TABLE `js_api` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `js_api` longtext,
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_article"
#

DROP TABLE IF EXISTS `stu_article`;
CREATE TABLE `stu_article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `pubtime` varchar(255) DEFAULT NULL,
  `pic` longtext,
  `content` longtext,
  `keyword` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `state` varchar(255) NOT NULL DEFAULT '审核中',
  `onclick` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_attlist"
#

DROP TABLE IF EXISTS `stu_attlist`;
CREATE TABLE `stu_attlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `auth_level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_btc"
#

DROP TABLE IF EXISTS `stu_btc`;
CREATE TABLE `stu_btc` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `money` varchar(255) DEFAULT NULL,
  `aid` varchar(255) DEFAULT NULL,
  `qrimg` longtext,
  `status` varchar(255) DEFAULT NULL,
  `reply` longtext,
  `wxdh` longtext,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=6722 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_cards"
#

DROP TABLE IF EXISTS `stu_cards`;
CREATE TABLE `stu_cards` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `fm` varchar(255) NOT NULL DEFAULT '',
  `whenfrom` varchar(255) NOT NULL DEFAULT '',
  `belongto` varchar(255) NOT NULL DEFAULT '',
  `until` varchar(255) NOT NULL DEFAULT '',
  `ifused` varchar(255) NOT NULL DEFAULT '1',
  `notification` varchar(255) NOT NULL DEFAULT '',
  `cardo` varchar(255) NOT NULL DEFAULT '',
  `receive_time` varchar(255) NOT NULL DEFAULT 'unknown',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32864 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_cards_all"
#

DROP TABLE IF EXISTS `stu_cards_all`;
CREATE TABLE `stu_cards_all` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_cards_det"
#

DROP TABLE IF EXISTS `stu_cards_det`;
CREATE TABLE `stu_cards_det` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tp` varchar(255) NOT NULL DEFAULT '',
  `nm` varchar(255) NOT NULL DEFAULT '',
  `fm` varchar(255) NOT NULL DEFAULT '',
  `bgtm` varchar(255) NOT NULL DEFAULT '',
  `edtm` varchar(255) NOT NULL DEFAULT '',
  `notification` varchar(255) NOT NULL DEFAULT '',
  `maxinum` varchar(255) NOT NULL DEFAULT 'unlimit',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COMMENT='卡券库';

#
# Structure for table "stu_cards_record"
#

DROP TABLE IF EXISTS `stu_cards_record`;
CREATE TABLE `stu_cards_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xm` varchar(255) DEFAULT NULL,
  `xh` varchar(255) DEFAULT NULL,
  `cd` varchar(255) DEFAULT NULL,
  `cdname` varchar(255) DEFAULT NULL,
  `scanedby` varchar(255) DEFAULT NULL,
  `sctime` varchar(255) DEFAULT NULL,
  `cdorg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6539 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_cards_scanner"
#

DROP TABLE IF EXISTS `stu_cards_scanner`;
CREATE TABLE `stu_cards_scanner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xm` varchar(255) DEFAULT '',
  `xh` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `until` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_center"
#

DROP TABLE IF EXISTS `stu_center`;
CREATE TABLE `stu_center` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fa` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `auth_level` varchar(255) DEFAULT NULL,
  `stu_erkeyouxiao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_choujiang"
#

DROP TABLE IF EXISTS `stu_choujiang`;
CREATE TABLE `stu_choujiang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` varchar(255) DEFAULT NULL,
  `poststuno` varchar(255) DEFAULT NULL,
  `gettime` varchar(255) DEFAULT NULL,
  `gettype` varchar(255) DEFAULT NULL,
  `ifused` varchar(255) NOT NULL DEFAULT '1',
  `get_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5049 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_class_table"
#

DROP TABLE IF EXISTS `stu_class_table`;
CREATE TABLE `stu_class_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fy` varchar(255) DEFAULT NULL,
  `bjmc` varchar(255) DEFAULT NULL,
  `kcmc` varchar(255) DEFAULT NULL,
  `mon` varchar(255) DEFAULT NULL,
  `tue` varchar(255) DEFAULT NULL,
  `wed` varchar(255) DEFAULT NULL,
  `thr` varchar(255) DEFAULT NULL,
  `fri` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `bz` varchar(255) DEFAULT NULL,
  `xq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_code_ban"
#

DROP TABLE IF EXISTS `stu_code_ban`;
CREATE TABLE `stu_code_ban` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `actid` varchar(255) DEFAULT NULL,
  `acttime` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='学生服务系统签到黑名单';

#
# Structure for table "stu_codeactive"
#

DROP TABLE IF EXISTS `stu_codeactive`;
CREATE TABLE `stu_codeactive` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `auth` varchar(255) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_codecache"
#

DROP TABLE IF EXISTS `stu_codecache`;
CREATE TABLE `stu_codecache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT '',
  `orgname` varchar(255) DEFAULT NULL,
  `visible` varchar(255) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_codesign"
#

DROP TABLE IF EXISTS `stu_codesign`;
CREATE TABLE `stu_codesign` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `sex` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `fy` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `signtime` varchar(255) NOT NULL DEFAULT '',
  `actid` varchar(255) NOT NULL DEFAULT '',
  `actname` varchar(255) NOT NULL DEFAULT '',
  `today` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `gps_j` varchar(255) DEFAULT NULL,
  `gps_w` varchar(255) DEFAULT NULL,
  `gps_wc` varchar(255) DEFAULT NULL,
  `gps_jlbb` varchar(255) DEFAULT NULL,
  `gps_jlyl` varchar(255) DEFAULT NULL,
  `gps_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=37716 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_codesub"
#

DROP TABLE IF EXISTS `stu_codesub`;
CREATE TABLE `stu_codesub` (
  `actid` varchar(255) NOT NULL DEFAULT '',
  `actname` varchar(255) NOT NULL DEFAULT '',
  `host` varchar(255) NOT NULL DEFAULT '',
  `hostdate` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT 'on',
  `type` varchar(255) NOT NULL DEFAULT 'sign',
  `location` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`actid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_credit"
#

DROP TABLE IF EXISTS `stu_credit`;
CREATE TABLE `stu_credit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) DEFAULT NULL,
  `credit` varchar(255) NOT NULL DEFAULT '80',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_credit_record"
#

DROP TABLE IF EXISTS `stu_credit_record`;
CREATE TABLE `stu_credit_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `target` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `mt` varchar(255) DEFAULT NULL,
  `var` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `attime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29665 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_deplib"
#

DROP TABLE IF EXISTS `stu_deplib`;
CREATE TABLE `stu_deplib` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `org` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_developer"
#

DROP TABLE IF EXISTS `stu_developer`;
CREATE TABLE `stu_developer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '待审核',
  `phone` varchar(255) DEFAULT NULL,
  `appid` varchar(255) DEFAULT NULL,
  `appkey` varchar(255) DEFAULT NULL,
  `ftppwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_diary"
#

DROP TABLE IF EXISTS `stu_diary`;
CREATE TABLE `stu_diary` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `md` longtext,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_erkejifen"
#

DROP TABLE IF EXISTS `stu_erkejifen`;
CREATE TABLE `stu_erkejifen` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22412 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_erkeku"
#

DROP TABLE IF EXISTS `stu_erkeku`;
CREATE TABLE `stu_erkeku` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `hostdate` varchar(255) DEFAULT NULL,
  `hostorg` varchar(255) DEFAULT NULL,
  `activity_value` varchar(255) DEFAULT NULL,
  `activity_block` varchar(255) DEFAULT NULL,
  `bz` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `actid` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `upsn` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_erkeyx"
#

DROP TABLE IF EXISTS `stu_erkeyx`;
CREATE TABLE `stu_erkeyx` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `eids` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_faceid"
#

DROP TABLE IF EXISTS `stu_faceid`;
CREATE TABLE `stu_faceid` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `shijian` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1155 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_file"
#

DROP TABLE IF EXISTS `stu_file`;
CREATE TABLE `stu_file` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_floder"
#

DROP TABLE IF EXISTS `stu_floder`;
CREATE TABLE `stu_floder` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '新建文件夹',
  `father` varchar(255) NOT NULL DEFAULT '/',
  `cjsj` varchar(255) DEFAULT NULL,
  `filearea` varchar(255) NOT NULL DEFAULT 'private',
  `org` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_gift_record"
#

DROP TABLE IF EXISTS `stu_gift_record`;
CREATE TABLE `stu_gift_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` varchar(255) NOT NULL DEFAULT '0',
  `cardo` varchar(255) NOT NULL DEFAULT '0',
  `ifchecked` varchar(255) NOT NULL DEFAULT '1',
  `sn` varchar(255) NOT NULL DEFAULT '0',
  `fm` varchar(255) NOT NULL DEFAULT '',
  `sendtime` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=utf8 COMMENT='礼物记录';

#
# Structure for table "stu_gongwen"
#

DROP TABLE IF EXISTS `stu_gongwen`;
CREATE TABLE `stu_gongwen` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `gw_title` varchar(255) DEFAULT NULL,
  `gw_zihao` varchar(255) DEFAULT NULL,
  `gw_range` varchar(255) DEFAULT NULL,
  `gw_dir` varchar(255) DEFAULT NULL,
  `file_title` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `fssj` varchar(255) DEFAULT NULL,
  `wjbh` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `jzzf` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_gongwen_status"
#

DROP TABLE IF EXISTS `stu_gongwen_status`;
CREATE TABLE `stu_gongwen_status` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(255) DEFAULT NULL,
  `gwid` varchar(255) DEFAULT NULL,
  `ydsc` varchar(255) DEFAULT NULL,
  `yidu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ilist"
#

DROP TABLE IF EXISTS `stu_ilist`;
CREATE TABLE `stu_ilist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fa` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_img"
#

DROP TABLE IF EXISTS `stu_img`;
CREATE TABLE `stu_img` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` longtext,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ishop"
#

DROP TABLE IF EXISTS `stu_ishop`;
CREATE TABLE `stu_ishop` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(255) DEFAULT NULL,
  `shoptype` varchar(255) DEFAULT NULL,
  `shoplogo` longtext,
  `shopintro` varchar(255) DEFAULT NULL,
  `shopmaster` varchar(255) DEFAULT NULL,
  `shopstatus` varchar(255) DEFAULT NULL,
  `shoplevel` varchar(255) DEFAULT NULL,
  `if_iphoto` varchar(255) DEFAULT NULL,
  `aid` varchar(255) DEFAULT NULL,
  `wxid` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2804 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ishop_destroy"
#

DROP TABLE IF EXISTS `stu_ishop_destroy`;
CREATE TABLE `stu_ishop_destroy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shopmaster` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '待处理',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ishop_edit"
#

DROP TABLE IF EXISTS `stu_ishop_edit`;
CREATE TABLE `stu_ishop_edit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shoplogo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `wxid` varchar(255) DEFAULT NULL,
  `shopintro` varchar(255) DEFAULT NULL,
  `shopmaster` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '待处理',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ishop_exchange"
#

DROP TABLE IF EXISTS `stu_ishop_exchange`;
CREATE TABLE `stu_ishop_exchange` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shopmaster` varchar(255) DEFAULT NULL,
  `stuno` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `wxid` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '待处理',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_ishop_manager"
#

DROP TABLE IF EXISTS `stu_ishop_manager`;
CREATE TABLE `stu_ishop_manager` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_istudy"
#

DROP TABLE IF EXISTS `stu_istudy`;
CREATE TABLE `stu_istudy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_items"
#

DROP TABLE IF EXISTS `stu_items`;
CREATE TABLE `stu_items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `spmc` varchar(255) DEFAULT NULL,
  `spmaster` varchar(255) DEFAULT NULL,
  `spimg` longtext,
  `spdj` varchar(255) DEFAULT NULL,
  `spxq` longtext,
  `status` varchar(255) DEFAULT NULL,
  `big_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1808 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_iulist"
#

DROP TABLE IF EXISTS `stu_iulist`;
CREATE TABLE `stu_iulist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_jiangping"
#

DROP TABLE IF EXISTS `stu_jiangping`;
CREATE TABLE `stu_jiangping` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cardid` varchar(255) DEFAULT NULL,
  `opendate` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `cardo` varchar(255) DEFAULT NULL,
  `cardtype` varchar(255) DEFAULT NULL,
  `poststuno` varchar(255) DEFAULT NULL,
  `jiazhi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_jiaoshi_apply"
#

DROP TABLE IF EXISTS `stu_jiaoshi_apply`;
CREATE TABLE `stu_jiaoshi_apply` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jsbh` varchar(255) DEFAULT NULL,
  `syrq` varchar(255) DEFAULT NULL,
  `yongtu` varchar(255) DEFAULT NULL,
  `sqrsn` varchar(255) DEFAULT NULL,
  `sqrname` varchar(255) DEFAULT NULL,
  `sysj` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '待审核',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_jiaoshi_manager"
#

DROP TABLE IF EXISTS `stu_jiaoshi_manager`;
CREATE TABLE `stu_jiaoshi_manager` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_kf"
#

DROP TABLE IF EXISTS `stu_kf`;
CREATE TABLE `stu_kf` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `inf` longtext,
  `org` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ifhide` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_login"
#

DROP TABLE IF EXISTS `stu_login`;
CREATE TABLE `stu_login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xh` varchar(255) DEFAULT '',
  `time` varchar(255) DEFAULT '',
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_login_record"
#

DROP TABLE IF EXISTS `stu_login_record`;
CREATE TABLE `stu_login_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(255) DEFAULT NULL,
  `lgdate` varchar(255) DEFAULT NULL,
  `lgtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=123841 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_manager"
#

DROP TABLE IF EXISTS `stu_manager`;
CREATE TABLE `stu_manager` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xm` varchar(255) DEFAULT NULL,
  `xh` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `til` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_menu"
#

DROP TABLE IF EXISTS `stu_menu`;
CREATE TABLE `stu_menu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fa` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `show_hide` varchar(255) NOT NULL DEFAULT 'on',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_order"
#

DROP TABLE IF EXISTS `stu_order`;
CREATE TABLE `stu_order` (
  `oid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aid` varchar(255) DEFAULT NULL,
  `good_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `costumer` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `if_unlock` varchar(255) NOT NULL DEFAULT 'no',
  `pj` varchar(255) DEFAULT NULL,
  `ddzt` varchar(255) DEFAULT NULL,
  `dzzt` varchar(255) DEFAULT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=77520682 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_org"
#

DROP TABLE IF EXISTS `stu_org`;
CREATE TABLE `stu_org` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '正常',
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_room_dong"
#

DROP TABLE IF EXISTS `stu_room_dong`;
CREATE TABLE `stu_room_dong` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xiaoqu` varchar(255) DEFAULT NULL,
  `dong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_room_lock"
#

DROP TABLE IF EXISTS `stu_room_lock`;
CREATE TABLE `stu_room_lock` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `xiaoqu` varchar(255) DEFAULT NULL,
  `loudong` varchar(255) DEFAULT NULL,
  `fangjian` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6022 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_sc_info"
#

DROP TABLE IF EXISTS `stu_sc_info`;
CREATE TABLE `stu_sc_info` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `scname` varchar(255) DEFAULT NULL,
  `scstart` varchar(255) DEFAULT NULL,
  `schost` varchar(255) DEFAULT NULL,
  `scdetail` varchar(255) DEFAULT NULL,
  `scblock` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_secyg"
#

DROP TABLE IF EXISTS `stu_secyg`;
CREATE TABLE `stu_secyg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_shoplist"
#

DROP TABLE IF EXISTS `stu_shoplist`;
CREATE TABLE `stu_shoplist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_sj_tousu"
#

DROP TABLE IF EXISTS `stu_sj_tousu`;
CREATE TABLE `stu_sj_tousu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) DEFAULT NULL,
  `reason` longtext,
  `status` varchar(255) NOT NULL DEFAULT '待处理',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_sjnum"
#

DROP TABLE IF EXISTS `stu_sjnum`;
CREATE TABLE `stu_sjnum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `sctime` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `actname` varchar(255) DEFAULT NULL,
  `actid` varchar(255) DEFAULT NULL,
  `today` varchar(255) DEFAULT NULL,
  `hostip` varchar(255) DEFAULT NULL,
  `remoteip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1567572006 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_stlist"
#

DROP TABLE IF EXISTS `stu_stlist`;
CREATE TABLE `stu_stlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stname` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `smod` varchar(255) DEFAULT NULL,
  `subscribes` varchar(255) NOT NULL DEFAULT 'on',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_strange_code_sign"
#

DROP TABLE IF EXISTS `stu_strange_code_sign`;
CREATE TABLE `stu_strange_code_sign` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `xh` varchar(255) DEFAULT NULL,
  `fy` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `signtime` varchar(255) DEFAULT NULL,
  `actid` varchar(255) DEFAULT NULL,
  `actname` varchar(255) DEFAULT NULL,
  `today` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19425 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_stulist"
#

DROP TABLE IF EXISTS `stu_stulist`;
CREATE TABLE `stu_stulist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `smod` varchar(255) DEFAULT NULL,
  `subscribes` varchar(255) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_sub"
#

DROP TABLE IF EXISTS `stu_sub`;
CREATE TABLE `stu_sub` (
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `laizi` varchar(255) DEFAULT NULL,
  `sj` varchar(255) DEFAULT NULL,
  `zan` varchar(255) NOT NULL DEFAULT '0赞',
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL DEFAULT '审核中',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_subscribes"
#

DROP TABLE IF EXISTS `stu_subscribes`;
CREATE TABLE `stu_subscribes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17132 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_sucache"
#

DROP TABLE IF EXISTS `stu_sucache`;
CREATE TABLE `stu_sucache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xm` varchar(255) NOT NULL DEFAULT '',
  `sex` varchar(255) NOT NULL DEFAULT '',
  `dep` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `org` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '正常',
  `job` varchar(255) NOT NULL DEFAULT '干事',
  `ps` varchar(255) NOT NULL DEFAULT '' COMMENT '职位描述',
  `bantil` varchar(255) NOT NULL DEFAULT '0',
  `bz` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2258 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_teacher"
#

DROP TABLE IF EXISTS `stu_teacher`;
CREATE TABLE `stu_teacher` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `poststuno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_tmpauth"
#

DROP TABLE IF EXISTS `stu_tmpauth`;
CREATE TABLE `stu_tmpauth` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `xh` varchar(255) NOT NULL DEFAULT '',
  `org` varchar(255) NOT NULL DEFAULT '',
  `dep` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT 'short',
  `bgtm` varchar(255) NOT NULL DEFAULT '',
  `entm` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_twlist"
#

DROP TABLE IF EXISTS `stu_twlist`;
CREATE TABLE `stu_twlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `depname` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `smod` varchar(255) DEFAULT NULL,
  `subscribes` varchar(255) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_uploadcache"
#

DROP TABLE IF EXISTS `stu_uploadcache`;
CREATE TABLE `stu_uploadcache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `ftype` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `filesize` varchar(255) DEFAULT NULL,
  `upsj` varchar(255) DEFAULT NULL,
  `uporg` varchar(255) NOT NULL DEFAULT 'student',
  `filearea` varchar(255) NOT NULL DEFAULT 'private',
  `floder` varchar(255) NOT NULL DEFAULT '/',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_usrcache"
#

DROP TABLE IF EXISTS `stu_usrcache`;
CREATE TABLE `stu_usrcache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `fy` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `sfz` varchar(255) DEFAULT NULL,
  `auth` varchar(255) NOT NULL DEFAULT 'user',
  `credit` varchar(255) NOT NULL DEFAULT '500',
  `sec_score` varchar(255) NOT NULL DEFAULT '0',
  `money_able` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_lock` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_sure` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sid` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=24039 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_wx_record"
#

DROP TABLE IF EXISTS `stu_wx_record`;
CREATE TABLE `stu_wx_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tssj` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `receiver` longtext,
  `url` varchar(255) DEFAULT NULL,
  `success` varchar(255) NOT NULL DEFAULT '0',
  `fsrsn` varchar(255) DEFAULT NULL,
  `fsrname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=349 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_wxscan"
#

DROP TABLE IF EXISTS `stu_wxscan`;
CREATE TABLE `stu_wxscan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `stuno` varchar(255) DEFAULT NULL,
  `tmap` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=821 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_xfcard"
#

DROP TABLE IF EXISTS `stu_xfcard`;
CREATE TABLE `stu_xfcard` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` varchar(255) DEFAULT NULL,
  `randid` varchar(255) DEFAULT NULL,
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_xfsign"
#

DROP TABLE IF EXISTS `stu_xfsign`;
CREATE TABLE `stu_xfsign` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `actid` varchar(255) DEFAULT NULL,
  `randid` varchar(255) DEFAULT NULL,
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31506 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_xfticket"
#

DROP TABLE IF EXISTS `stu_xfticket`;
CREATE TABLE `stu_xfticket` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(255) DEFAULT NULL,
  `appkey` varchar(255) DEFAULT NULL,
  `xfticket` longtext,
  `time` varchar(255) DEFAULT NULL,
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_xftm"
#

DROP TABLE IF EXISTS `stu_xftm`;
CREATE TABLE `stu_xftm` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `randid` varchar(255) DEFAULT NULL,
  `val` varchar(255) DEFAULT NULL,
  `eft` varchar(255) NOT NULL DEFAULT 'on',
  `expires` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2823 DEFAULT CHARSET=utf8;

#
# Structure for table "stu_yh_tousu"
#

DROP TABLE IF EXISTS `stu_yh_tousu`;
CREATE TABLE `stu_yh_tousu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) DEFAULT NULL,
  `reason` longtext,
  `status` varchar(255) NOT NULL DEFAULT '待处理',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "stu_zancache"
#

DROP TABLE IF EXISTS `stu_zancache`;
CREATE TABLE `stu_zancache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `subid` varchar(255) DEFAULT NULL,
  `whozan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1072 DEFAULT CHARSET=utf8;
