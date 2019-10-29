<?php
require("app/core_auth.php");
$menu=1;
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

    <title>提现详单</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
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
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              提现详细清单
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="icon-bullhorn"></i> 订单编号</th>
                                  <th class="hidden-phone"><i class="fa fa-jpy"></i> 提现金额</th>
                                  <th class="hidden-phone"><i class="fa fa-jpy"></i> 手续费</th>
                                  <th class="hidden-phone"><i class="fa fa-jpy"></i> 实际到账</th>
                                  <th><i class="icon-question-sign"></i> 订单状态</th>
                                  <th><i class="fa fa-comment"></i> 处理回复</th>
                                  <th>微信单号</th>
                                  <!--
                                  紫色：<span class="label label-info label-mini">Due</span>
                                  黄色：<span class="label label-warning label-mini">Due</span>
                                  红色：<span class="label label-danger label-mini">Paid</span>
                                  蓝色：<span class="label label-primary label-mini">Due</span>
                                  绿色：<span class="label label-success label-mini">Paid</span>
                                  -->
                              </tr>
                              </thead>
                              <tbody>
                              <?php $cash_result=mysqli_query($con,"select * from stu_btc where aid='$sn' order by bid desc;");
								  while($cash=mysqli_fetch_row($cash_result)){
									  $order_status=$cash[4];
									  switch($order_status){
										  case "处理中":
											  $span_class="label label-warning label-mini";
											  break;
										  case "已入账":
											  $span_class="label label-success label-mini";
											  break;
										  case "处理失败":
											  $span_class="label label-danger label-mini";
											  break;
									  }
								  ?>
                              <tr>
                                  <td><?php echo $cash[0]; ?></td>
                                  <td><?php echo $cash[1]; ?>¥</td>
                                  <td><?php echo $cash[1]*0.03; ?>¥</td>
                                  <td><?php echo $cash[1]*0.97; ?>¥</td>
                                  <td><span class="<?php echo $span_class; ?>"><?php echo $order_status; ?></span></td>
                                  <td class="hidden-phone"><?php echo $cash[5] ?></td>
                                  <td><?php echo $cash[6] ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
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


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
<?php mysqli_close($con); ?>