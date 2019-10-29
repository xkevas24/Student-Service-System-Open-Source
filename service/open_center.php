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
}
$eid_sql="select * from stu_developer where stuno='$sn' and status='已通过';";
//echo $eid_sql;
$dev=mysqli_fetch_row(mysqli_query($con,$eid_sql));
$eid=$dev[0];
if($eid==""){
	mysqli_close($con);
	echo "<script>alert('你没有访问此页面的权限，请先成为开发者！')</script>";
	header("refresh:0;url=open.php");
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

    <title>开发者中心</title>

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
                              开发者中心
                          </header>
                          <div class="panel-body">
                             欢迎你加入学生服务系统开发者中心！在申请成为开发者前，你必须了解以下事项：<br>
                            
                             <hr>
                             <br>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">APPID</label>
                                      <div class="col-lg-10">
                                          <input type="number" style="color: black" class="form-control" name="appid" value="<?php echo $dev[5]; ?>" required>
                                          <p class="help-block">开发者APPID</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">APPKEY</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="appkey" value="<?php echo $dev[6]; ?>" required>
                                          <p class="help-block">开发者APPKEY</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">FTP地址</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="appkey" value="ftp://ftp.ynudcc.top:30" required>
                                          <p class="help-block">沙盒FTP</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">FTP用户名</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="appkey" value="<?php echo $dev[5]; ?>" required>
                                          <p class="help-block">用户名和appid一致</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">FTP密码</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="appkey" value="<?php echo $dev[7]; ?>" required>
                                          <p class="help-block">A+appkey+.</p>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                         <p>请通过校园网访问以下网址：</p>
                                          <a href="http://app.ynudcc.top" class="btn btn-danger" target="_blank">学生服务系统开放平台</a>
                                      </div>
                                  </div>
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