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

    <title>用户订单中心</title>

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
                              支出详细清单
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>订单编号</th>
                                  <th>商品名称</th>
                                  <th>支付金额</th>
                                  <th>创建时间</th>
                                  <th>商户编号</th>
                                  <th>支付状态</th>
                                  <th>订单状态</th>
                                  <th>评价</th>
                                  <th>操作</th>
                                  <!--
                                  红色：<span class="label label-danger label-mini">Paid</span>
                                  绿色：<span class="label label-success label-mini">Paid</span>
                                  -->
                              </tr>
                              </thead>
                              <tbody>
                              <?php $order_result=mysqli_query($con,"select * from stu_order where costumer='$sn' order by oid desc;");
								  while($order=mysqli_fetch_row($order_result)){
								  ?>
                              <?php
									  $pay_status=$order[7];
									  switch($pay_status){
										  case "已支付":
											  $span_class="label label-success label-mini";
											  break;
										  case "待支付":
											  $span_class="label label-danger label-mini";
											  break;
									  }
									  switch($order[9]){
										  case "good":
											  $pj="好评";
											  $span_class2="label label-success label-mini";
											  break;
										  case "bad":
											  $pj="差评";
											  $span_class2="label label-danger label-mini";
											  break;
										  default:
											  $pj="";
											  break;
									  }
								  ?>
                              <tr>
                                  <td><?php echo $order[0]; ?></td>
                                  <td><?php echo $order[2]; ?></td>
                                  <td><?php echo $order[3]; ?>¥</td>
                                  <td><?php echo $order[4]; ?></td>
                                  <td><?php echo $order[1]; ?></td>
                                  <td>
                                   <?php
									  if($order[10]=="已取消"){
									 ?>
                                 交易取消
                                 <?php }else{ ?>
                                  <span class="<?php echo $span_class; ?>"><?php echo $order[7]; ?></span>
                                  <?php } ?>
                                  </td>
                                  <td>
                                  <?php
									  if($order[10]=="已取消"){
									 ?>
                                 交易取消
                                 <?php } ?>
                                  <?php
									  if($order[10]<>"已完成" && $order[7]=="已支付"){
									 ?>
                                 <a href="app/order_end.php?oid=<?php echo $order[0]; ?>" class="btn btn-info">确认收货</a>
                                 <?php }
									  if($order[7]<>"已支付" && $order[10]<>"已取消"){ 
									  ?>
                                 <a href="https://pay.acowboy.cn/order/?oid=<?php echo $order[0]; ?>" class="btn btn-info">继续支付</a>
                                 <a href="app/order_trash.php?oid=<?php echo $order[0]; ?>" class="btn btn-danger">取消订单</a>
                                  <?php } ?>
                                   <?php
									  if($order[10]=="已完成"){
									 ?>
                                 交易完成
                                 <?php } ?>
                                  </td>
                                  <td>
                                  <?php
									  if($pj=="" && $order[10]=="已完成"){
										  ?>
									   <a href="app/pj.php?oid=<?php echo $order[0]; ?>&pj=good"><span class="label label-success label-mini">好评</span></a>
									   <a href="app/pj.php?oid=<?php echo $order[0]; ?>&pj=bad"><span class="label label-danger label-mini">差评</span></a>
								  <?php  }else{ ?>
									 
                                  <span class="<?php echo $span_class2; ?>"><?php echo $pj; ?></span>
                                  
                                  <?php } ?>
                                  </td>
                                  <td><a href="yh_tousu.php?oid=<?php echo $order[0]; ?>" target="_blank">投诉</a></td>
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