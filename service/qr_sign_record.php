<?php
require("app/core_auth.php");
$menu=2;
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
/*if($iden<>"yes"){
	mysqli_close($con);
	header("refresh:0;url=stu_list.php");
	exit();
}*/
//获取签到活动信息
if(isset($_GET["actid"])){
	$actid=base64_decode(xss($_GET["actid"]));
}else{
	mysqli_close($con);
	echo "<script>alert('活动编号异常')</script>";
	header("refresh:0;url=qr_record.php");
	exit();
}
//$sign_sub=mysqli_query($con,"select * from stu_codesub where host='$orgname' and actid='$actid';");
$sign_sub=mysqli_query($con,"select * from stu_codesub where actid='$actid';");
$sign_info=mysqli_fetch_row($sign_sub);
/*if($sign_info[0]==""){
	mysqli_close($con);
	echo "<script>alert('你无权查看改内容')</script>";
	header("refresh:0;url=qr_record.php");
	exit();
}*/
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

    <title><?php echo $sign_info[1]."-".$sign_info[2]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
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
              <section class="panel">
                          <header class="panel-heading">
                              <?php echo $sign_info[1]; ?>签到记录
                          </header>
                          <div class="table-responsive">
                          	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                             <caption><?php echo $sign_info[1]."-".$sign_info[2]; ?></caption>
                              <thead>
                              <tr>
                                  <th>签到索引</th>
                                  <th>姓名</th>
                                  <th>性别</th>
                                  <th>学号</th>
                                  <th>分院</th>
                                  <th>班级</th>
                                  <th>签到时间</th>
                                  <th>活动名称</th>
                                  <th>设备IP</th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                  <th>签到索引</th>
                                  <th>姓名</th>
                                  <th>性别</th>
                                  <th>学号</th>
                                  <th>分院</th>
                                  <th>班级</th>
                                  <th>签到时间</th>
                                  <th>活动名称</th>
                                  <th>设备IP</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <?php 
								  $sign_result=mysqli_query($con,"select * from stu_codesign where actid='$actid';");
								  while($sign=mysqli_fetch_row($sign_result)){
								?>
                              <tr>
                                  <td><?php echo $sign[0]; ?></td>
                                  <td><?php echo $sign[1]; ?></td>
                                  <td><?php echo $sign[2]; ?></td>
                                  <td><?php echo $sign[3]; ?></td>
                                  <td><?php echo $sign[4]; ?></td>
                                  <td><?php echo $sign[5]; ?></td>
                                  <td><?php echo $sign[6]; ?></td>
                                  <td><?php echo $sign[8]; ?></td>
                                  <td><?php echo $sign[10]; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          </div>
                          
                      </section>
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


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<!-- TABLE -->
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-datatable/jquery.dataTables.js"></script>
    <script src="js/jquery-datatable/dataTables.bootstrap.js"></script>
    <script src="js/jquery-datatable/dataTables.buttons.min.js"></script>
    <script src="js/jquery-datatable/buttons.flash.min.js"></script>
    <script src="js/jquery-datatable/jszip.min.js"></script>
    <script src="js/jquery-datatable/pdfmake.min.js"></script>
    <script src="js/jquery-datatable/vfs_fonts.js"></script>
    <script src="js/jquery-datatable/buttons.html5.min.js"></script>
    <script src="js/jquery-datatable/buttons.print.min.js"></script>
    <script src="js/jquery-datatable/jquery-datatable.js"></script>
	<!-- TABLE -->
  </body>
</html>
<?php mysqli_close($con); ?>