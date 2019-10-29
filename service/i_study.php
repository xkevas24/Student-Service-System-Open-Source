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

    <title>爱学习广场</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
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
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <table class="table table-hover personal-task">
                              <tbody>
                               <?php								 
								 $menu_result=mysqli_query($con,"select * from stu_istudy;");
								 while($menu=mysqli_fetch_row($menu_result)){
								 ?>
                                <tr onClick="window.open('<?php echo $menu[3]; ?>')">
                                   
                                    <td>
                                        <i class="fa fa-<?php echo $menu[2]; ?>"></i>
                                    </td>
                                    <td><?php echo $menu[1]; ?></td>
                                    <td><i class="icon-chevron-sign-right"></i></td>
                                    
                                </tr>
                                <?php } ?>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
              </div>
              <section class="panel">
                          <header class="panel-heading">
                              今日所有课程
                          </header>
                          <div class="table-responsive">
                          	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                             <caption>右上角可以搜索课程，点击表头可以进行排序</caption>
                              <thead>
                              <tr>
                                  <th>课程名称</th>
                                  <th>分院</th>
                                  <th>上课班级</th>
                                  <th>教师</th>
                                  <th>校区</th>
                                  <th>上课节数</th>
                                  <th>上课教室</th>
                                  <th>备注</th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                 <th>课程名称</th>
                                  <th>分院</th>
                                  <th>上课班级</th>
                                  <th>教师</th>
                                  <th>校区</th>
                                  <th>上课节数</th>
                                  <th>上课教室</th>
                                  <th>备注</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <?php
								  $week=date("w");
								  switch($week){
									  case 1:
										  $sql_week="select * from stu_class_table where mon!='0';";
										  $w="mon";
										  break;
									  case 2:
										  $sql_week="select * from stu_class_table where tue!='0';";
										  $w="tue";
										  break;
									  case 3:
										  $sql_week="select * from stu_class_table where wed!='0';";
										  $w="wed";
										  break;
									  case 4:
										  $sql_week="select * from stu_class_table where thr!='0';";
										  $w="thr";
										  break;
									  case 5:
										  $sql_week="select * from stu_class_table where fri!='0';";
										  $w="fri";
										  break;
								  }
								  $sign_result=mysqli_query($con,$sql_week);
								  while($sign=mysqli_fetch_row($sign_result)){
									  $class_id=$sign[0];
									  $jieshu=mysqli_fetch_row(mysqli_query($con,"select ".$w." from stu_class_table where id='$class_id'"))[0];
								?>
                              <tr>
                                  <td><?php echo $sign[3]; ?></td>
                                  <td><?php echo $sign[1]; ?></td>
                                  <td><?php echo $sign[2]; ?></td>
                                  <td><?php echo $sign[9]; ?></td>
                                  <td><?php echo $sign[12]; ?></td>
                                  <td><?php echo $jieshu; ?></td>
                                  <td><?php echo $sign[10]; ?></td>
                                  <td><?php echo $sign[11]; ?></td>
								
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          </div>
                      </section>
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
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
