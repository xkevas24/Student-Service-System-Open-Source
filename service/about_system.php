<?php
require("app/core_auth.php");
function Sec2Time($time){
    if(is_numeric($time)){
    $value = array(
      "years" => 0, "days" => 0, "hours" => 0,
      "minutes" => 0, "seconds" => 0,
    );
    if($time >= 31556926){
      $value["years"] = floor($time/31556926);
      $time = ($time%31556926);
    }
    if($time >= 86400){
      $value["days"] = floor($time/86400);
      $time = ($time%86400);
    }
    if($time >= 3600){
      $value["hours"] = floor($time/3600);
      $time = ($time%3600);
    }
    if($time >= 60){
      $value["minutes"] = floor($time/60);
      $time = ($time%60);
    }
    $value["seconds"] = floor($time);
    //return (array) $value;
    $t=$value["years"] ."年". $value["days"] ."天"." ". $value["hours"] ."小时". $value["minutes"] ."分".$value["seconds"]."秒";
    Return $t;
    
     }else{
    return (bool) FALSE;
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>关于学生服务系统</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>

    <![endif]-->
  </head>

  <body>
<?php include("public_gift.php"); ?>

  <section id="container" class="">
      <?php include("public_header.php"); include("public_sidebar.php"); ?>
      
      <!--main content start 342684-->
      <section id="main-content">
          <section class="wrapper">
              <!-- invoice start-->
              <section>
                  <div class="panel panel-primary">
                      <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                      <div class="panel-body">
                         <!--<div align="center">
                          	<h3>如果觉得我们做的不错，可以适当给我们一些捐赠鼓励！</h3>
                          	<p>你们的鼓励，是我们前进的动力！<em class="fa fa-heart"></em></p>
                          </div>-->

                          <div class="row invoice-list">
                              <div class="text-center corporate-id">
                                  <h3>学生服务系统--我校第一个学生自主研发的超大型信息管理系统</h3>
                              </div>
                              <div class="text-center invoice-btn">
                                  <a href="../system/top/index.php" class="btn btn-danger btn-lg"><i class="fa fa-heart"></i> 加入我们 </a>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>自律校园时代</h4>
                                  <p>2018年2月，许潇（2016级）在任自律委信息统计中心主任时，发布《自律校园》计划。</p>
                                  <p>2018年3月，自律委DSU（数字学生会，Digital Student Union）发布。</p>
                                  <p>2018年4月，许潇加入Top电脑社，在现教中心主任支持下，组建该社团第一批开发组。许潇任组长，组员为杨浩东。</p>
                                  <p>2018年4月，许潇提出对综测和第二课堂进行数字化。</p>
                                  <p>2018年5月，开发组获得学校的4台服务器。同月，学生服务系统初测版上线。</p>
                                  <p>总结：这段时期是学生服务系统的概念形成期，从一开始的会内小系统，转变为为全校服务器的大型系统，离不开现代教育技术中心的信任和大力支持。</p>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>学生服务系统时代</h4>
                                  <p>2018年5月，推出动态二维码签到功能。</p>
                                  <p>2018年6月，俄罗斯世界杯举办。开发组研制出高速内网直播/转播方案，成功进行了世界杯赛事转播。</p>
                                  <p>2018年7月，推出卡券和积分功能。</p>
                                  <p>2018年7月，推出电子证件功能。</p>
                                  <p>2018年8月，推出团学组织办公软件：假勤管理系统、人事管理系统。</p>
                                  <p>2018年9月，进行军训汇演直播，推出字幕和弹幕（未上线）实时传输技术。</p>
                                  <p>2018年9月，进行迎新晚会直播。本次直播是我校第一次采用全新的1080P直播技术，由世界杯转播技术演变而来。直播画面加上了特效和动态字幕，是我校直播技术领域的重大突破</p>
                                  <p>2018年10月，与团委合作，正式推出数字第二课堂功能。</p>
                                  <p>2018年11月，推出反作弊系统。</p>
                                  <p>2018年11月，推出物联网门禁系统。</p>
                                  <p>2018年11月，为学校研发“科研管理系统”。</p>
                                  <p>2018年12月，许潇卸任学生会自律管理委员会副主席兼信息统计中心主任。</p>
                                  <p>总结：这段时期是学生服务系统第一次接受公众考验的时期，遇到了很多此前未曾预料到的各种问题。系统不断地进行修复和完善，积累了十分宝贵的技术和运营经验。</p>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>5.0时代</h4>
                                  <p>2019年1月，发布5.0版本预览公告。</p>
                                  <p>2019年2月，推出爱生活广场：爱拍、爱学广场。推出第二课堂电子核验单功能。</p>
                                  <p>2019年3月，系统重做，5.0版本正式上线。</p>
                                  <p>2019年3月，推出学服系列二维码：学服条码，学服签到码，学服卡券码。</p>
                                  <p>2019年3月，推出人脸识别门禁和签到系统Face ID。仅用于学服活动签到，不做推广的打算。</p>
                                  <p>2019年3月，开发组换届，余梓豪（2017级）任组长。</p>
                                  <p>2019年3月，推出学生服务系统开放平台。</p>
                                  <p>2019年4月，系统参加2019年挑战杯学科竞赛。</p>
                                  <p>2019年7月，承办“互联网+”省赛直播，面向全云南。云南台使用的直播信号源亦是我方提供。</p>
                                  <p>2019年8月，爱生活广场下线，保留蹭课助手。</p>
                                  <p>2019年10月，承办“2019年迎新晚会”现场转播及网络直播。</p>
                                  <p>总结：这段时期是学生服务系统最重要的转型期。5.0系统的发布，标志着学服的产品理念有了重大的转变。页面设计的风格、信息量的承载、效率的提升、人工智能的推进、开放平台的提出、爱生活广场的推出，都在告诉大家：新的时代已经来临。</p>
                              </div>

                          </div>
                          <div class="row invoice-list" align="center">
                              <div class="col-lg-3 col-sm-3"></div>
                              <div class="col-lg-6 col-sm-6">
                                  <a href="../system/top/images/IMG_001.jpg" target="_blank">
                                    <img src="../system/top/images/IMG_001.jpg" id="toppic" alt="TOP" width="100%">
                                  </a>
                              </div>
                              <div class="col-lg-3 col-sm-3"></div>
                          </div>
                          <div class="row invoice-list">
                              <div class="text-center corporate-id">
                                  <img src="logo_small.png" alt="">
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>主创团队</h4>
                                  <p>
                                      许潇 <br>
                                      2016级理工学院物联网工程1班 <br>
                                      杨浩东<br>
                                      2016级理工学院软件工程1班
                                  </p>
                                  <hr>
                                  <h4>2019~2020运营维护团队</h4>
                                  <p>
                                      余梓豪（2017级）、何金恒（2017级）、陆继浩（2017级）
                                      <br>
                                      李超（2017级）、叶金霖（2017级）、李铭仰（2017级）、徐富军（2018级）
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                 <h4>软件信息</h4>
                                  <p>
                                      系统版本：学生服务系统 5.6.0<br>
                                      软件著作权：2019SR0328988 <br>著作权人：许潇，原始取得全部权利<br>
                                      系统运行：<?php $deta=time()-1525104000; echo Sec2Time($deta);  ?><br>
                                      系统发布日期：2019年2月23日<br>
                                      内核版本：DSU 2.4.2 + K Library 1.0(自主研发的高级拓展库)<br>
                                      开发语言：HTML5+Javascript+PHP<br>
                                      系统框架：Bootstrap jQuery KLib<br>
                                      PHP版本：5.4.16<br>
                                      累计日登录次数：<?php echo mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_login_record;"))[0]; ?>次<br>
                                      累计签到次数：<?php echo mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_codesign;"))[0]; ?>次<br>
                                      累计发放第二课堂学分：<?php echo mysqli_fetch_row(mysqli_query($con,"select sum(value) from stu_erkejifen;"))[0]; ?>分<br>
                                  </p>
                                  <hr>
                                  <h4>人工智能和物联网信息</h4>
                                  <ul class="unstyled">
                                      <li>人脸识别		: <strong>Face Recognition 人脸识别</strong></li>
                                      <li>物联网门禁		: 基于STM32F103ZET6的嵌入式应用程序</li>
                                      <li>深度学习		: X-DeepLearning</li>
                                      <li>数据库			: 自主研发的CatDB 2.2 No-SQL数据库</li>
                                  </ul>
                                  <hr>
                                  <h4>合作支持</h4>
                                  <p>
                                      现代教育技术中心<br>
                                      TOP电脑网络办公协会<br>
                                      校团委、学生会<br>
                                      人文学院、管理学院、法学院<br>
                                      演讲与交际协会、魔术协会<br>
                                      云南坚果文化传播有限公司<br>
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>联系我们</h4>
                                  <ul class="unstyled">
                                      <li>现教中心电话		: <strong>66275027</strong></li>
                                      <li>官方网站		: www.ynudcc.top</li>
                                      <li>办公地址			: 云南省昆明市西山区红塔东路2号明德楼501</li>
                                      <li>加入我们		: <a href="../system/top/index.php" target="_blank">点击这里</a></li>
                                  </ul>
                              </div>
                          </div>
<!--                          <table class="table table-striped table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>捐赠人姓名/单位</th>
                                  <th>捐助金额</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>现**心</td>
                                  <td>300¥</td>
                              </tr>
                              </tbody>
                          </table>-->
                          
                      </div>
                  </div>
              </section>
              <!-- invoice end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  </body>
</html>
<?php mysqli_close($con); ?>