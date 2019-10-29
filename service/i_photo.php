<?php
require("app/core_auth.php");
$menu=3;
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

    <title>爱拍广场</title>

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
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="row">
                       <?php
						 #$shop_result=mysqli_query($con,"select * from stu_ishop where if_iphoto='yes';");
						 $shop_result=mysqli_query($con,"select * from stu_ishop where if_iphoto='yes' and shopstatus='正常';");
						  $r=0;
						 while($shop=mysqli_fetch_row($shop_result)){
							 $r++;
							 $aid=$shop[5];
						 //提取全部订单数
							 $orders=mysqli_fetch_row(mysqli_query($con,"select count(oid) from stu_order where aid='$aid' and ddzt='已完成';"))[0];
						//提取全部好评数
							 $hp=mysqli_fetch_row(mysqli_query($con,"select count(oid) from stu_order where aid='$aid' and ddzt='已完成' and pj='good';"))[0];
							 $hpl=$hp/$orders;
							 $hpl=sprintf("%01.2f", $hpl*100).'%';
					    //提取最低价格
							 $value=mysqli_fetch_row(mysqli_query($con,"select min(spdj) from stu_items where spmaster='$aid' and status='上架';"))[0];
						 ?>
                          <div class="col-lg-4">
                              <!--widget start-->
                              <section class="panel">
                                  <div class="twt-feed blue-bg">
                                      <h1><?php echo $shop[1]; ?></h1>
                                      <p>爱商铺认证:<?php echo $shop[2]; ?></p>
                                      <a href="#">
                                          <img src="<?php echo $shop[3]; ?>" width="140px" alt="">
                                      </a>
                                  </div>
                                  <div class="weather-category twt-category">
                                      <ul>
                                          <li class="active">
                                              <h5><?php echo $orders; ?></h5>
                                              成交单数
                                          </li>
                                          <li>
                                              <h5><?php echo $hpl; ?></h5>
                                              好评率
                                          </li>
                                          <li>
                                              <h5><?php echo $value; ?>¥起</h5>
                                              服务价格
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="twt-write col-sm-12">
                                      <blockquote><?php echo $shop[4]; ?></blockquote>
                                  </div>
                                  <footer class="twt-footer">
                                      <a class="btn btn-space btn-success" data-toggle="modal" href="#myModal3">
                                          <i class="fa fa-wechat"></i>交谈
                                      </a>
                                      <!--<a class="btn btn-space btn-white" href="ibuy.php?aid=<?php //echo $aid; ?>" target="_blank">
                                          <i class="fa fa-clock-o"></i>预约
                                      </a>-->
                                      <a class="btn btn-space btn-info pull-right" href="i_shop.php?aid=<?php echo $aid; ?>" target="_blank">
                                          <i class="fa fa-shopping-basket"></i>
                                          商铺主页
                                      </a>
                                  </footer>
                              </section>
                              <!--widget end-->
                          </div>
                          <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">复制商家微信进行交谈</h4>
                                          </div>
                                          <div class="modal-body">

                                              <h4 style="color: #C11114"><b>为了您的资金安全，请勿在“爱生活广场”外进行交易。爱生活广场会对您的资金进行保护，在订单完成前，金额不会打入商家账户中。如您在订单进行时遇到问题，可在“用户中心”--“我的订单”中进行投诉。</b></h4>
                                              <h4>微信号：</h4>
                                              <span><?php echo $shop[10]; ?></span>

                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-danger" type="button" data-dismiss="modal" aria-hidden="true">OK</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         <?php
						 //判断是否为3
						if($r=="3"){
							$r=0;
							echo "</div>";
							echo "<div class='row'>";
						}
						 } ?>
                      </div>
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