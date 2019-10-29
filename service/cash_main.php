<?php
require("app/core_auth.php");
$menu=1;
//冻结金检查：将已解冻的金额转移到可用余额中
$today_time=time();
$unlock_sql="select * from stu_order where aid='$sn' and if_unlock='no' and status='已支付';";
$unlock_result=mysqli_query($con,$unlock_sql);
$order_price=0;
while($order=mysqli_fetch_row($unlock_result)){
	//检测是否可以解冻
	$order_date=$order[5];
	$deta=$today_time-$order_date;
	if($deta >= 259200){	//第一次故障时，判断没起作用，说明恒为true
		$order_price=$order_price+$order[3];
		$oid=$order[0];
		$order_update_sql="update stu_order set if_unlock='yes' where oid='$oid';";
		$order_update=mysqli_query($con,$order_update_sql);
	}
}
//更新余额情况
$usr_update="update stu_usrcache set money_able=money_able+$order_price,money_lock=money_lock-$order_price where sn='$sn';";
$usr_update_do=mysqli_query($con,$usr_update);
//重新拉取用户信息
$userdetail=mysqli_fetch_row(mysqli_query($con,"select * from stu_usrcache where sn='$sn';"));
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

    <title>我的钱包</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
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
                  <div class="col-lg-6">
                              <!--widget start-->
                              
                              <section class="panel">
                                  <div class="twt-feed blue-bg">
                                      <h1><?php echo $name; ?></h1>
                                      <p>名下商铺：<?php if($userdetail[13]==0){echo "没有注册";}else{
	$sid=$userdetail[13];
	$shop_detail=mysqli_fetch_row(mysqli_query($con,"select shopname from stu_ishop where id='$sid';"))[0];
	echo $shop_detail."(".$sid.")";} ?></p>
                                      <a href="#">
                                          <img src="app/xj_time.php?poststuno=<?php echo $sn; ?>" width="140px" alt="">
                                      </a>
                                  </div>
                                  <div class="weather-category twt-category">
                                      <ul>
                                          <li class="active">
                                              <h5><?php echo $userdetail[10]; ?></h5>
                                              余额
                                          </li>
                                          <li>
                                              <h5><?php echo $userdetail[11]; ?></h5>
                                              冻结金
                                          </li>
                                          <li>
                                              <h5><?php echo $userdetail[12]; ?></h5>
                                              保证金
                                          </li>
                                      </ul>
                                  </div>
                                  <blockquote>
                                  	<li>余额可以随时提现。<span style="color: orangered">提现会收取3%的手续费。</span></li>
                                  	<li>冻结金解冻后会自动转入余额。冻结长度由订单类型决定。</li>
                                  	<li>保证金在商铺无投诉运行90天后可以提现。</li>
                                  </blockquote>
                                  <footer class="twt-footer">
									  <a class="btn btn-info" href="isquar.php">
                                          <i class="fa fa-shopping-basket"></i>  
										  广场
                                      </a>
                                      <?php if($userdetail[13]<>0){  ?>
                                      <a class="btn btn-info" href="ishop.php?sid=<?php echo $userdetail[13]; ?>">
                                          <i class="fa fa-shopping-basket"></i>  
										  店铺
                                      </a>
                                      <?php } ?>
                                      <a class="btn btn-success" href="cash_create.php">
                                          <i class="fa fa-plus"></i>
                                          交易
                                      </a>
                                      <?php if($userdetail[10]>0){ ?>
                                      <a class="btn btn-success pull-right" href="get_cash.php">
                                          <i class="fa fa-jpy"></i>
                                          提现
                                      </a>
                                      <?php }else{ ?>
                                      <button class="btn btn-success pull-right" disabled>
                                          <i class="fa fa-jpy"></i>
                                          提现
                                      </button>
                                      <?php } ?>
                                  </footer>
                              </section>
					  </div>
                              <!--widget end-->
                  <div class="col-sm-6">
                     <section class="panel">
                          <header class="panel-heading no-border">
                              提现记录（最近5条）
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>订单编号</th>
                                  <th>提现金额</th>
                                  <th>手续费</th>
                                  <th>实际到账</th>
                                  <th>订单状态</th>
                                  <th>处理回复</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $cash_result=mysqli_query($con,"select * from stu_btc where aid='$sn' order by bid desc limit 0,5;");
								  while($cash=mysqli_fetch_row($cash_result)){
								  ?>
                              <tr>
                                  <td><?php echo $cash[0]; ?></td>
                                  <td><?php echo $cash[1]; ?>¥</td>
                                  <td><?php echo $cash[1]*0.03; ?>¥</td>
                                  <td><?php echo $cash[1]*0.97; ?>¥</td>
                                  <td><?php echo $cash[4]; ?></td>
                                  <td><?php echo $cash[5]; ?></td>
                                  
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          <footer class="panel-footer no-border" style="background-color: white">
                          	<a class="btn btn-white" href="order_cash.php" target="_blank">查看全部</a>
                          </footer>
                         
                      </section>
                     <section class="panel">
                          <header class="panel-heading no-border">
                              支出记录（最近5条）
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>订单编号</th>
                                  <th>商品名称</th>
                                  <th>支付金额</th>
                                  <th>创建时间</th>
                                  <th>商户编号</th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php $myorder_result=mysqli_query($con,"select * from stu_order where costumer='$sn' and status='已支付' order by oid desc limit 0,5;");
								  while($myorder=mysqli_fetch_row($myorder_result)){
								  ?>
                              <tr>
                                  <td><?php echo $myorder[0]; ?></td>
                                  <td><?php echo $myorder[2]; ?></td>
                                  <td><?php echo $myorder[3]; ?>¥</td>
                                  <td><?php echo $myorder[4]; ?></td>
                                  <td><?php echo $myorder[1]; ?></td>
                                  
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          <footer class="panel-footer no-border" style="background-color: white">
                          	<a class="btn btn-white" href="order_mypay.php" target="_blank">查看全部</a>
                          </footer>
                      </section>
                     <section class="panel">
                          <header class="panel-heading no-border">
                              收入记录（最近5条）
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>订单编号</th>
                                  <th>商品名称</th>
                                  <th>支付金额</th>
                                  <th>创建时间</th>
                                  <th>客户编号</th>
                                  <th>支付状态</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $order_result=mysqli_query($con,"select * from stu_order where aid='$sn' order by oid desc limit 0,5;");
								  while($order=mysqli_fetch_row($order_result)){
								  ?>
                              <tr>
                                  <td><?php echo $order[0]; ?></td>
                                  <td><?php echo $order[2]; ?></td>
                                  <td><?php echo $order[3]; ?>¥</td>
                                  <td><?php echo $order[4]; ?></td>
                                  <td><?php echo $order[6]; ?></td>
                                  <td><?php echo $order[7]; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          <footer class="panel-footer no-border" style="background-color: white">
                          	<a class="btn btn-white" href="order_earn.php" target="_blank">查看全部</a>
                          </footer>
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
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>

  </body>
</html>
<?php mysqli_close($con); ?>