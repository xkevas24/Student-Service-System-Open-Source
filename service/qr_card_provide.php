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
//获取签到活动信息
if(isset($_GET["actid"])){
	$actid=base64_decode(xss($_GET["actid"]));
}else{
	mysqli_close($con);
	echo "<script>alert('活动编号异常')</script>";
	header("refresh:0;url=qr_record.php");
	exit();
}
$sign_sub=mysqli_query($con,"select * from stu_codesub where host='$orgname' and actid='$actid';");
$sign_info=mysqli_fetch_row($sign_sub);
if($sign_info[0]==""){
	mysqli_close($con);
	echo "<script>alert('你无权查看改内容')</script>";
	header("refresh:0;url=qr_record.php");
	exit();
}
//查看是否提交过
$eid_sql="select eid from stu_erkeku where actid='$actid' and status='审核中';";
//echo $eid_sql;
$eid=mysqli_fetch_row(mysqli_query($con,$eid_sql))[0];
if($eid<>""){
	mysqli_close($con);
	echo "<script>alert('该活动正在审核中，请勿重复提交！')</script>";
	header("refresh:0;url=qr_record.php");
	exit();
}
$actname=$sign_info["1"];
$acttime=$sign_info["3"];
$hostorg=$sign_info["2"];
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

    <title>活动凭证发放-<?php echo $actname; ?></title>

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
                              活动凭证卡券发放
                          </header>
                          <div class="panel-body">
                             <b style="color: red">仅第二课堂范围内的活动可以发放凭证卡券！</b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/sec_card_shenhe.php?actid=<?php echo $actid; ?>">
                                 
                                  <div class="form-group">
                                      <label for="name" class="col-lg-2 control-label">活动名称</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="name" value="<?php echo $actname; ?>" required>
                                          <p class="help-block">输入该活动的官方名称</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">活动举办时间</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="hostdate" value="<?php echo $acttime; ?>" required>
                                          <p class="help-block">输入该活动的举办时间</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostorg" class="col-lg-2 control-label">承办/举办单位</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="hostorg"  value="<?php echo $hostorg; ?>" required>
                                          <p class="help-block">输入该活动的承办/举办单位</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">活动分值</label>
                                      <div class="col-lg-10">
                                          <input type="number" style="color: black" class="form-control" name="activity_value" required>
                                          <p class="help-block">输入该活动的分值</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">活动所属板块</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="activity_block" required>
                                          	<option value="基础教育">基础教育</option>
                                          	<option value="创新教育">创新教育</option>
                                          	<option value="文化体育竞赛">文化体育竞赛</option>
                                          </select>
                                          <p class="help-block">选择该活动所属的板块</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="bz" class="col-lg-2 control-label">信息备注</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="bz" required>
                                          <p class="help-block">输入该活动的签到人员属于：观众/选手/获奖者/工作人员/一等奖/二等奖等具体信息</p>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
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