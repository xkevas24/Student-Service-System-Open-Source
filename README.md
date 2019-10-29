# Student-Service-System-Open-Source
# 学生服务系统开源发行版【已脱敏处理】
<hr>

## 安装
请将stu.sql，dsu.sql文件还原为数据库
## 1.学生服务系统的工作目录
/sercice/ ===== 学生服务系统当前版本的前端运行目录。调用频次高。 <br>
/sercice/app ===== 学生服务系统当前版本的后端运行目录。非常重要。 <br>
/system/  ===== 学生服务系统内核、部分子系统、接口及旧版本的工作目录。调用频次低。<br>
/weixin/  ===== 微信接口的主工作目录。<br>

## 2.学生服务系统的依赖
### 核心文件
/service/public_weixin.php<br>
/service/app/core_auth.php<br>
/service/app/core_auth_weixin.php<br>
/service/app/core_crypt.php<br>
/service/app/core_mysql.php<br>
/service/app/functions.php 【已将微信通知URL注释掉了】<br>
### 数据库依赖
由于新旧版本的接口对接问题，需要修改以下几处的mysql的信息
<b>/service/app/core_mysql.php</b><br>
<b>/system/dsu/people/controller/mysqli.php</b><br>
<b>其他涉及到数据库的地方请根据错误自行调试</b><br>
### 微信依赖
学生服务系统的核心学服扫一扫功能依托微信公众号开发使用，需要将/weixin下的所有内容更改为自己的
### 其他依赖
其他的一些依赖内容请自行通过调试修改

## 3.学生服务系统的版本更新方式
$ git push -u origin master<br><br>
## 4.更新日志
<li>2019年10月28日，更改了学服的学籍照片接口，更新了其他重要内容，版本号5.6.0></li>
<li>2019年10月9日，发布了新版第二课堂签到，版本号5.4.6></li>
<li>2019年10月，尝试优化中国移动用户体验，版本号5.4.2></li>
<li>2019年3月，推出学服人脸识别门禁和签到系统Face ID，版本号5.4></li>
<li>2019年3月，推出学服系列二维码：学服条码，学服签到码，学服卡券码，版本号5.2></li>
<li>2019年2月，修改了用户界面，新增了爱生活广场、第二课堂电子核验单等功能，版本号5.0></li>
<li>2018年11月，推出物联网门禁，版本号4.6.6></li>
<li>2018年11月，推出反作弊签到系统，版本号4.6.4></li>
<li>2018年10月，正式推出数字第二课堂功能，版本号4.6.2></li>
<li>2018年10月，上线面对面扫码授权、在线请假等功能，版本号4.4></li>
<li>2018年9月，上线电子二维码卡券功能，版本号4.2></li>
<li>2018年8月，上线活动和假勤管理系统、人事和公共管理系统、微信推送功能，版本号4.0></li>
<li>2018年6月，上线动态二维码签到功能，版本号3.8></li>
<li>2018年6月，上线新版移动查寝功能，版本号3.6></li>
<li>2018年6月，上线团学组织与社团功能，版本号3.4></li>
<li>2018年5月，上线失物招领功能，版本号3.2.4></li>
<li>2018年5月，上线TOP电脑社主页，版本号3.2.2></li>
<li>2018年5月，上线学生服务项目征集功能，版本号3.2></li>
<li>2018年5月，学生服务系统公测版发布，版本号3.0></li>
<li>2018年4月，新增第二课堂数字卡券功能，版本号2.0></li>
<li>2018年3月，新增验证码值班签到功能，版本号1.4></li>
<li>2018年3月，新增验证码签到功能，版本号1.2></li>
<li>2018年2月，系统发布内测，版本号1.0></li>
