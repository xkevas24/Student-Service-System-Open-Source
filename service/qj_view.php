<?php
require("app/core_auth.php");
$menu=2;
if(isset($_GET["oid"])){
	switch($_GET["oid"]){
		case 11:
			$orgname='院团委';
			break;
		case 12:
			$orgname='院团委';
			break;
		case 13:
			$orgname='院团委';
			break;
		case 14:
			$orgname='院团委';
			break;
		case 15:
			$orgname='院团委';
			break;
		case 16:
			$orgname='院团委';
			break;
		case 17:
			$orgname='院团委';
			break;
		case 18:
			$orgname='院团委';
			break;
		case 19:
			$orgname='院团委';
			break;
		case 21:
			$orgname='学生会青年志愿者协会';
			break;
		case 22:
			$orgname='学生会自律管理委员会';
			break;
		case 23:
			$orgname='学生会学生社团联合会';
			break;
		case 24:
			$orgname='学生会伙食管理委员会';
			break;
		case 25:
			$orgname='学生会秘书处';
			break;
		case 26:
			$orgname='学生会大学生艺术团';
			break;
		case 31:
			$orgname='人文学院';
			break;
		case 32:
			$orgname='法学院';
			break;
		case 33:
			$orgname='管理学院';
			break;
		case 61:
			$orgname='演讲与交际协会';
			break;
		case 62:
			$orgname='魔术协会';
			break;
		case 63:
			$orgname='TOP电脑社';
			break;
}
	$suauth=1;
	$iden="yes";
}else{
	$orgname=$_SESSION["orgname"];
	$suauth=$_SESSION["suauth"];
	$iden=$_SESSION["iden"];
}

if($iden<>"yes" and $suauth<>"1"){
	mysqli_close($con);
	header("refresh:0;url=stu_list.php");
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
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <title>请假审核-<?php echo $orgname; ?></title>

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
                              待审核的请假条（手机左右滑动）
                          </header>
                          <div class="table-responsive">
                          	<table class="table table-bordered table-striped table-hover dataTable">
                             <caption>所有待审核的请假条</caption>
                              <thead>
                              <tr>
                                  <th>请假人</th>
                                  <th>请假人学号</th>
                                  <th>所属部门</th>
                                  <th>照片</th>
                                  <th>请假原因</th>
                                  <th>请假时间</th>
                                  <th>操作</th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                 <th>请假人</th>
                                  <th>请假人学号</th>
                                  <th>所属部门</th>
                                  <th>照片</th>
                                  <th>请假原因</th>
                                  <th>请假时间</th>
                                  <th>操作</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <?php 
								  $sign_result=mysqli_query($con_db2,"select * from dsu_qingjia where bzname='$name' and orgname='$orgname' and state='审核中';");
								  while($sign=mysqli_fetch_row($sign_result)){
									  //获取请假人部门信息
									  $xh=$sign[4];
									  $people=mysqli_fetch_row(mysqli_query($con,"select * from stu_sucache where xh='$xh' and org='$orgname';"));
								?>
                              <tr>
                                  <td><?php echo $sign[1]; ?></td>
                                  <td><?php echo $xh; ?></td>
                                  <td><?php echo $people[3]; ?></td>
                                  <td><img src="http://weixin.ynudcc.cn/Weixin/app/student/photos_get_nosession.php?poststuno=<?php echo $xh; ?>" alt="<?php echo $sign[1]; ?>" width="90px"></td>
                                  <td><?php echo $sign[5]; ?></td>
                                  <td><?php echo $sign[6]; ?></td>
                                  <td><a href="app/qj_pass.php?qid=<?php echo $sign[0]; ?><?php if(isset($_GET["oid"])){ echo "&oid=".$_GET["oid"]; } ?>" class="btn btn-xs btn-success">
                                  通过
                              </a>
                              <a href="app/qj_unpass.php?qid=<?php echo $sign[0]; ?>" class="btn btn-xs btn-danger">
                                  不通过
                              </a></td>
								
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
<?php mysqli_close($con); mysqli_close($con_db2); ?>