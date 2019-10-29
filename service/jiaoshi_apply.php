<?php
require("app/core_auth.php");
$menu=2;
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
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

    <title>教室申请</title>

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
                              教室使用申请
                          </header>
                          <div class="panel-body">
                             <b style="color: red">
                             	<li>使用教室的过程中，人人必须遵守《云南大学滇池学院课外活动使用教室实施办法》</li>
                             	<li>使用教室后要打扫教室卫生，桌椅要摆放整齐，出教室时要关窗、关电、关门。</li>
                             </b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/jiaoshi_apply.php">
                                 
                                  <div class="form-group">
                                      <label for="name" class="col-lg-2 control-label">借用教室</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="jsbh" required>
                                          <p class="help-block">输入教室门牌号，如三号阶梯教室、1403等。</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">使用日期</label>
                                      <div class="col-lg-10">
                                          <input type="date" style="color: black" class="form-control" name="syrq" required>
                                          <p class="help-block">输入教室使用日期</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">使用时间</label>
                                      <div class="col-lg-10">
                                          <input type="datetime" style="color: black" class="form-control" name="sysj" required>
                                          <p class="help-block">输入教室使用时间，如15时00分至18时00分</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="name" class="col-lg-2 control-label">用途</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="yongtu" required>
                                          <p class="help-block">输入教室用途。</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">借用人手机</label>
                                      <div class="col-lg-10">
                                          <input type="tel" style="color: black" class="form-control" name="phone" required>
                                          <p class="help-block">输入你的手机号</p>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">提交申请</button>
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