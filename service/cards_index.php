<?php
require("app/core_auth.php");
$menu=1;
$userinfo=mysqli_fetch_row(mysqli_query($con,"select * from stu_usrcache where sn='$sn';"));
$credit=$userinfo[8];
$sec_score=$userinfo[9];
$id_num=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_sucache where xh='$sn';"))[0];
$card_num=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_cards where belongto='$sn' and ifused='1';"))[0];
//获取第二课堂积分
//获取当前有效积分编号
$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
$yx_eid=explode("@",$yx_eid);
$jifen_sql="select sum(value) from stu_erkejifen where sn='$sn' and(eid='".implode("' or eid='",$yx_eid)."');";
$erke_jf=mysqli_fetch_row(mysqli_query($con,$jifen_sql))[0];
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
	
    <title>钱包与积分</title>

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
    <?php
	$today=date("Y年m月d日");
	$sql_sub = "select * from stu_cards where belongto='$sn' and ifused='1' GROUP BY cardo order by id desc;";
	$res_sub=mysqli_query($con,$sql_sub);
	$result_sub = $con->query($sql_sub);
	$row_sub= $result_sub->fetch_assoc();
	  ?>
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
                  <div class="col-lg-4">
                      <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="panel">
                              <div class="user-heading alt green-bg">
                                  <a href="#">
                                      <img alt="" src="app/xj_time.php?poststuno=<?php echo $sn; ?>" width="140px">
                                  </a>
                                  <h1><?php echo $name; ?></h1>
                                  <p><?php echo $sn; ?></p>
                                  <p>连续登录：<?php echo $lx_days; ?>天，等级：<?php 
									if($credit<500){
										echo "<font color='#CC0000'><b>沉默寡言</b></font>";
									}elseif($credit>=500 && $credit<530){
										echo "<b>好好学生</b>";
									}elseif($credit>=530 && $credit<600){
										echo "<font color='#009900'><b>蒂花之秀</b></font>";
									}elseif($credit>=600 && $credit<650){
										echo "<font color='#330033'><b>造化钟神秀</b></font>";
									}else{
										echo "<font color='#330033'><b>天秀</b></font>";
									}
									
									?></p>
                              </div>

                              <ul class="nav nav-pills nav-stacked">
                                 <li><a href="cash_main.php"> <i class="fa fa-credit-card"></i> 账户余额 <span class="label label-success pull-right r-activity"><?php echo $userinfo[10]+$userinfo[11]+$userinfo[12]; ?></span></a></li>
                                  <li><a href="../system/stu/cards/id.php#idcard"> <i class="fa fa-id-card"></i> 电子证件 <span class="label label-primary pull-right r-activity"><?php echo $id_num; ?></span></a></li>
                                  <li><a href="../system/stu/cards/card_record.php"> <i class="fa fa-archive"></i> 卡券持有数 <span class="label label-info pull-right r-activity"><?php echo $card_num; ?></span></a></li>
                                  <li><a href="javascript:;"> <i class="fa fa-line-chart"></i> 学生积分 <span class="label label-warning pull-right r-activity"><?php  echo $credit; ?></span></a></li>
                                  <li><a href="sec.php"> <i class="fa fa-line-chart"></i> 第二课堂积分 <span class="label label-success pull-right r-activity"><?php echo $erke_jf; ?></span></a></li>
                                  <li><a href="../weixin/qrscan.php?t=<?php echo time(); ?>"> <i class="fa fa-qrcode"></i> 扫一扫 <span class="label label-success pull-right r-activity"></span></a></li>
                              </ul>

                          </section>
                      </aside>
                      <!--widget end-->
                  </div>
                  <div class="col-lg-8">
                      <div class="row">
                         <?php
                         $i=0;
						  while($row_sub=mysqli_fetch_row($res_sub)){
						      if(!($today>$row_sub[6])){
                                  $i++;
				  switch($row_sub["1"]){
					  case "lisense":
						  //$href="#";
						  $img="img/cards/lisense.png";
						  $actcode="000001";
						  $card_type="凭证";
						  break;
					  case "attest":
						  //$href="#";
						  $img="img/cards/attest.png";
						  $actcode="000002";
						  $card_type="认证券";
						  break;
					  case "pref":
						  //$href="#";
						  $img="img/cards/pref.png";
						  $actcode="000003";
						  $card_type="一次性优惠券";
						  break;
					  case "movie":
						  //$href="#";
						  $img="img/cards/movie.png";
						  $actcode="000004";
						  $card_type="一次性观影券";
						  break;
				  }
						  ?>
                          <div class="col-lg-6">
                              <!--widget start-->
                              <section class="panel">
                                  <div class="twt-feed blue-bg">
                                      <h1><?php echo $row_sub[2];?></h1>
                                      <p>有效期：<?php echo $row_sub[4]."-".$row_sub[6]; ?></p>
                                      <p>卡券类型：<?php echo $card_type; ?></p>
<!--                                      <a href="#">
                                          <img src="<?php //echo $img; ?>" alt="">
                                      </a>
                                      <br><br><br><br>-->
                                      <p>-<?php echo $row_sub[3]."于".$row_sub[4]."颁发"; ?></p>
                                  </div>
                                  
                                  <div class="twt-write col-sm-12">
                                      <blockquote><?php echo $row_sub[8]; ?></blockquote>
                                  </div>
                                  <footer class="twt-footer">
                                     <?php if($card_type<>"认证券"){ ?>
                                      <button class="btn btn-space btn-white" data-toggle="button" onClick="location='../system/stu/cards/use_cards_as_gift.php?<?php echo "cardo=$row_sub[9]&cd=$row_sub[0]&t=$row_sub[2]"; ?>'">
                                          <i class="fa fa-gift"></i>
                                      </button>
                                      <?php }else{ ?>
                                      <button class="btn btn-space btn-white" data-toggle="button" disabled>
                                          <i class="fa fa-gift"></i>
                                      </button>
                                      <?php } ?>
                                      <button class="btn btn-space btn-info pull-right" type="button" onClick="<?php 
								if($today<$row_sub[4]){
									echo "alert('卡券还未进入有效期内，可能无法使用！');";
								}
								if($today>$row_sub[6]){
									echo "alert('卡券已过期，无法使用！');";
								}
									/*
									location='../system/stu/cards/use_cards.php?actcode=<?php echo $actcode."&cd=$row_sub[0]&t=$card_title"; ?>#qr'

									location='card_use.php?<?php echo "cd=$row_sub[0]&t=$row_sub[2]"; ?>#qr'   //新版

									*/
								?>location='../system/stu/cards/use_cards.php?actcode=<?php echo $actcode."&cd=$row_sub[0]&t=$row_sub[2]"; ?>#qr'">
                                          <i class="fa fa-qrcode"></i>
                                          使用
                                      </button>
                                  </footer>
                              </section>
                              <!--widget end-->
                          </div>  
                          <?php }
						      if($i==2){
						          echo "</div><div class='row'>";
						          $i=0;
                              }
						  } ?>
                      </div>
                      
                  </div>

              </div>
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


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>

  </body>
</html>
<?php mysqli_close($con); ?>