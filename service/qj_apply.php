<?php
require("app/core_auth.php");
$menu=2;
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
if($iden<>"yes"){
	mysqli_close($con);
	header("refresh:0;url=stu_list.php");
	exit();
}
//查看今日是否请假

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

    <title>请假申请</title>

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
                              填写请假条
                          </header>
                          <div class="panel-body">
                             <b style="color: red">请按规定如实填写请假条并提交审批</b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/qj_apply.php">
                                 
                                  <div class="form-group">
                                      <label for="name" class="col-lg-2 control-label">尊敬的：</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="gb_name" required>
                                          	<?php 
											$gb_name="select xm from stu_sucache where org='$orgname' and job='干部' order by dep desc;";
											$result=mysqli_query($con,$gb_name);
											while($row=mysqli_fetch_row($result)){
												echo "<option value='$row[0]'>$row[0]</option>";
											}
											?>
                                          </select>
                                          <p class="help-block">请选择直属干部</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">学长/学姐，您好！我是：</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="gs_name" value="<?php echo $name; ?>" required>
                                          <p class="help-block">输入姓名</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostorg" class="col-lg-2 control-label">，因：</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="qj_reason" required>
                                          <p class="help-block">如实填写请假缘由</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">需要请假，请假时间为：</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="qj_time" required>
                                          <p class="help-block">输入请假时间段</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">，望批准！</label>
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