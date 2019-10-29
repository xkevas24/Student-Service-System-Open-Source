<?php
require("app/core_auth.php");
$menu=3;
//查看是否提交过
$eid_sql="select id from stu_ishop_edit where shopmaster='$sn' and shopstatus='待审核';";
//echo $eid_sql;
$eid=mysqli_fetch_row(mysqli_query($con,$eid_sql))[0];
if($eid<>""){
	mysqli_close($con);
	echo "<script>alert('你的变更正在审核中，请耐心等待！')</script>";
	header("refresh:0;url=isquare.php");
	exit();
}
//
$shopinfo=mysqli_fetch_row(mysqli_query($con,"select * from stu_ishop where shopmaster='$sn';"));
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

    <title>商铺变更</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

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
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              变更我的商铺
                          </header>
                          <div class="panel-body">
                             <b style="color: red">商铺变更注意事项：<br>
                             <li>商铺名称和类别无法更改。</li>
                             <li>申请期间请保持手机畅通。</li>
                             </b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/i_shop_edit.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商铺名称</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" value="<?php echo $shopinfo[1]; ?>" name="shopname" disabled required>
                                          <p class="help-block">输入您的招牌</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商铺头像</label>
                                      <div class="col-lg-10">
                                          <input type="file" accept="image/*" class="form-control" id="user_num" name="shoplogo" required>
                                          <p class="help-block">上传你的商铺头像，最好是正方形比例</p>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">商铺类别</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="shoptype" disabled required>
                                          	<option value="a">综合服务型：摄影类</option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">手机号码</label>
                                      <div class="col-lg-10">
                                          <input type="tel" style="color: black" class="form-control" value="<?php echo $shopinfo[11]; ?>" name="phone" required>
                                          <p class="help-block">输入您的手机号码</p>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">微信号</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" value="<?php echo $shopinfo[10]; ?>" name="wxid" required>
                                          <p class="help-block">输入您的微信号</p>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="bz" class="col-lg-2 control-label">商铺简介</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" value="<?php echo $shopinfo[4]; ?>" name="shopintro" required>
                                          <p class="help-block">简要地介绍一下商铺</p>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <a href="my_shop.php" class="btn btn-success">放弃变更</a>
                                          <button type="submit" class="btn btn-danger">提交审核</button>
                                      </div>
                                  </div>
                              </form>
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

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>

    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>

  </body>
</html>
<?php mysqli_close($con); ?>