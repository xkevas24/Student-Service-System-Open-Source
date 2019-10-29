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

    <title>商品管理</title>

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
                              所有商品
                              <a class="btn btn-info btn-round" href="item_add.php" target="_blank">新增商品</a>
                          </header>
                          <div class="table-responsive">
                          	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                              <thead>
                              <tr>
                                  <th>商品编号</th>
                                  <th>商品名称</th>
                                  <th>商品图片</th>
                                  <th>商品价格</th>
                                  <th>商品详情</th>
                                  <th>操作</th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                  <th>商品编号</th>
                                  <th>商品名称</th>
                                  <th>商品图片</th>
                                  <th>商品价格</th>
                                  <th>商品详情</th>
                                  <th>操作</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <?php 
								  $sign_result=mysqli_query($con,"select * from stu_items where spmaster='$sn' and status='上架';");
								  while($sign=mysqli_fetch_row($sign_result)){
								?>
                              <tr>
                                  <td><?php echo $sign[0]; ?></td>
                                  <td><?php echo $sign[1]; ?></td>
                                  <td><img src="<?php echo $sign[3]; ?>" width="200px" height="200px"></td>
                                  <td><?php echo $sign[4]; ?></td>
                                  <td><?php echo $sign[5]; ?></td>
                                  <td>
                                  <a class="btn btn-info" href="item_edit.php?id=<?php echo $sign[0]; ?>"><em class="fa fa-pencil-square"></em></a>
                                  <a class="btn btn-danger" href="app/item_trash.php?id=<?php echo $sign[0]; ?>"><em class="fa fa-trash"></em></a></td>
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