<?php
require("app/core_auth.php");
$menu=0;
//查看是否提交过
$eid_sql="select id from stu_developer where stuno='$sn' and status='待审核';";
//echo $eid_sql;
$eid=mysqli_fetch_row(mysqli_query($con,$eid_sql))[0];
if($eid<>""){
	mysqli_close($con);
	echo "<script>alert('你的申请正在审核中，请耐心等待！')</script>";
	header("refresh:0;url=index.php");
	exit();
}/*else{
	header("refresh:0;url=open_center.php");
	exit();
}*/
$eid_sql="select id from stu_developer where stuno='$sn' and status='已通过';";
//echo $eid_sql;
$eid=mysqli_fetch_row(mysqli_query($con,$eid_sql))[0];
if($eid<>""){
	mysqli_close($con);
	header("refresh:0;url=open_center.php");
	exit();
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

    <title>申请成为开发者</title>

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
                              成为开发者
                          </header>
                          <div class="panel-body">
                             欢迎你选择成为学生服务系统开发者！在申请成为开发者前，你必须了解以下事项：<br>
                             <li>程序需经由开发团队审核后，方能发布上线。</li>
                             <li>您的程序必须符合《学生服务系统开放应用标准》的相关规定。</li>
                             <li>您可能会用到<a href="20190324.pdf" target="_blank">《学生服务系统接口开发文档-2019年3月24日发布》</a>。</li>
                             <li>开发者身份通过后保留一年，次年需重新提起申请。</li>
                             <li><a href="学生服务系统开放应用标准.pdf" target="_blank">下载《学生服务系统开放应用标准》</a></li>
                             </b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/open_apply.php" enctype="multipart/form-data">

                                  
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">手机号码</label>
                                      <div class="col-lg-10">
                                          <input type="tel" style="color: black" class="form-control" name="phone" required>
                                          <p class="help-block">输入您的手机号码</p>
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