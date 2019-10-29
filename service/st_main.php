<?php
require("app/core_auth.php");
$menu=2;
if(isset($_GET["did"])){
	$did=$_GET["did"];
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=stu_list.php");
	exit();
}

switch($did){
	case 61:
		$lid=1;
		$orgname='演讲与交际协会';
		$hint="校级学生社团";
		$logo="st_yx.jpg";
		break;
	case 62:
		$lid=2;
		$orgname='魔术协会';
		$hint="校级学生社团";
		$logo="st_ms.jpg";
		break;
	case 63:
		$lid=3;
		$orgname='TOP电脑社';
		$hint="校级学生社团";
		$logo="st_top.png";
		break;
}
$orgsql = "select * from stu_sucache where xm='$name' and xh='$sn' and org='$orgname' and state='正常';";
		$orgcheck = mysqli_query($con,$orgsql);
		$orgcheck = mysqli_fetch_array($orgcheck);
		if($orgcheck){
			$iden="yes";
			$result0 = $con->query($orgsql);
			$row=$result0->fetch_assoc();
			$dep=$row["dep"];
			if($row["job"]=="干部"){
				$suauth=1;
			}else{
				$suauth=0;
			}
		}else{
			$suauth=-1;
			$iden="no";
			$dep="";
		}
$_SESSION["orgname"]=$orgname;
$_SESSION["iden"]=$iden;
$_SESSION["dep"]=$dep;
$_SESSION["suauth"]=$suauth;

$mod_sql="select smod from stu_stlist where id='$lid';";
$mod_result=mysqli_query($con,$mod_sql);
$mod=mysqli_fetch_row($mod_result)[0];
$mod=explode("@",$mod);
$mod_num=count($mod);
//获取关注情况
$sub_sql="select status from stu_subscribes where oid='$did' and sn='$sn';";
$sub_status=mysqli_fetch_row(mysqli_query($con,$sub_sql))[0];
//订阅数
$subscribes=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_subscribes where status='1' and oid='$did';"))[0];
//订阅开通
$func_sql="select subscribes from stu_stlist where id='$lid';";
$sub_func=mysqli_fetch_row(mysqli_query($con,$func_sql))[0];	
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

    <title><?php echo $orgname; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
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
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->     
                  <div class="col-lg-6">
                              <!--widget start-->
                              <section class="panel">
                                  <div class="twt-feed blue-bg">
                                      <h1><?php echo $orgname; ?></h1>
                                      <p>官方认证号：<?php echo $hint; ?></p>
                                      <a href="#">
                                          <img src="img/orglogo/<?php echo $logo; ?>" width="140px" alt="">
                                      </a>
                                  </div>
                                  <div class="weather-category twt-category">
                                      <ul>
                                          <li class="active">
                                              <h5><?php echo mysqli_fetch_row(mysqli_query($con,"select credit from stu_credit where orgname='$orgname';"))[0]; ?></h5>
                                              社团积分
                                          </li>
                                          <li>
                                              <h5><?php echo mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_sucache where org='$orgname' and state='正常';"))[0]; ?></h5>
                                              社团成员
                                          </li>
                                          <li>
                                             
                                              <h5><?php if($sub_func=="on"){ echo $subscribes; }else{ echo "未开通"; } ?></h5>
                                              关注
                                          </li>
                                      </ul>
                                  </div>
                                  <?php if($sub_func=="on"){ ?>
                                  <blockquote>点击右下角的“动态关注”，你将订阅<?php echo $orgname; ?>的精彩动态。它的优质内容我们会以推送的形式呈现给你，随时随地和它一起玩耍吧！<br></blockquote>
                                  <?php }else{ ?>
                                  <blockquote>该社团暂未开通订阅功能。<br></blockquote>
                                  <?php } ?>
                                  <footer class="twt-footer">
                                     
                                     <a class="btn btn-space btn-white" data-toggle="modal" href="#myModal3">
                                          <i class="fa fa-share-alt-square"></i>
                                          
                                      </a>
                                    <?php 
									 
									  if($sub_func=="on"){
									  ?>
                                      <?php if($sub_status<>"1"){ ?>
                                      <button class="btn btn-space btn-info pull-right" type="button" onClick="location='app/subscribe_st.php?did=<?php echo $did; ?>'">
                                          <i class="fa fa-bell"></i>
                                          关注
                                      </button>
                                      <?php }else{ ?>
                                      <button class="btn btn-space btn-danger pull-right" type="button" onClick="location='app/dissubscribe_st.php?did=<?php echo $did; ?>'">
                                          <i class="fa fa-bell"></i>
                                          取关
                                      </button>
                                      <?php } ?>
                                      <?php } ?>
                                      
                                  </footer>
                                  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">分享主页</h4>
                                          </div>
                                          <div class="modal-body">

                                              长按保存二维码，分享主页...
                                              <img src="app/qrcode.php?var=000025&actcode=<?php echo $did; ?>" width="100%" alt="分享">

                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-danger" type="button" data-dismiss="modal" aria-hidden="true">OK</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </section>
                              <!--widget end-->
                  </div>
                  <div class="col-lg-6">
                      <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="panel">
                             <div class="user-heading alt green-bg">
                                  <a href="#">
                                      <img alt="" src="app/xj_time.php?poststuno=<?php echo $sn; ?>" width="140px">
                                  </a>
                                  <h1><?php echo $name; ?></h1>
                                  <?php if($iden=="yes"){ ?>
                                  <p>部门：<?php echo $dep; ?></p>
                                  <p>职位：<?php if($suauth==1){ echo "干部"; }else{ echo "干事"; } ?></p>
                                  <?php }else{ ?>
                                  <p>你不是成员</p>
                                  <?php } ?>
                              </div>
                              <ul class="nav nav-pills nav-stacked">
                                 <?php for($i=0;$i<$mod_num-1;$i++){
                                 $cid=$i+1;
									$cid=mysqli_fetch_row(mysqli_query($con,"select * from stu_center where id='$mod[$i]';"));
									$auth_level=$cid[4];
									if($auth_level==0){
                                  ?>
                                  <li><a href="<?php echo $cid[3]; ?>" target="_blank"> <i class="fa fa-<?php echo $cid[2]; ?>"></i> <?php echo $cid[1]; ?> <span class="label label-primary pull-right r-activity">进入</span></a></li>
                                  <?php } 
								  if($auth_level==1){
									  if($iden=="yes"){
								  ?>
                                   <li><a href="<?php echo $cid[3]; ?>" target="_blank"> <i class="fa fa-<?php echo $cid[2]; ?>"></i> <?php echo $cid[1]; ?> <span class="label label-primary pull-right r-activity">进入</span></a></li>
                                  <?php }} 
								  if($auth_level==2){
									  if($iden=="yes" && $suauth=="1"){
								  ?>
                                  <li><a href="<?php echo $cid[3]; ?>" target="_blank"> <i class="fa fa-<?php echo $cid[2]; ?>"></i> <?php echo $cid[1]; ?> <span class="label label-primary pull-right r-activity">进入</span></a></li>
                                  <?php }} ?>
                                  <?php } ?>
                              </ul>

                          </section>
                      </aside>
                      <!--widget end-->
                  </div>
                  <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              最近动态
                          </header>
                          <div class="panel-body">
                              <div class="timeline-messages">
                                  <!-- Comment -->
                                <?php
								 $articles_sql="select * from stu_article where org='$orgname' and state='正常';";
								  $article_result=mysqli_query($con,$articles_sql);
								  while($article=mysqli_fetch_row($article_result)){
								 ?>
                                  <div class="msg-time-chat">
                                      <a href="#" class="message-img"><img class="avatar" src="img/orglogo/<?php echo $logo; ?>" width="45px" alt=""></a>
                                      <div class="message-body msg-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <p class="attribution"><a href="#"><?php echo $orgname; ?></a>  <?php echo $article[2]; ?>发表 &nbsp;&nbsp;<?php echo $article[8]; ?>人已读</p>
                                              <h1><?php echo $article[1]; ?></h1>
                                              <p><?php echo $article[5]; ?>......</p>
                                              <button class="btn btn-success" onClick="window.open('../system/dsu/people/article/article.php?atid=<?php echo $article[0]; ?>')">了解详情</button>
                                          </div>
                                      </div>
                                  </div>
                                  <?php } ?>
                                  <!-- /comment -->
                              </div>
                              <!--<div class="chat-form">
                                  <div class="input-cont ">
                                      <input type="text" class="form-control col-lg-12" placeholder="Type a message here...">
                                  </div>
                                  <div class="form-group">
                                      <div class="pull-right chat-features">
                                          <a href="javascript:;">
                                              <i class="icon-camera"></i>
                                          </a>
                                          <a href="javascript:;">
                                              <i class="icon-link"></i>
                                          </a>
                                          <a class="btn btn-danger" href="javascript:;">发布</a>
                                      </div>
                                  </div>

                              </div>-->
                          </div>
                      </section>
                  </div>
                  </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>

  </body>
</html>
<?php mysqli_close($con); ?>
<?php 
//本页维护须知
/*
本页不同之处在于单位主页的模块加载和不同权限的单元显示问题。
这里将mod分为3个auth_level
0：所有人可见
1：仅成员可见
2：仅干部可见
*/
?>