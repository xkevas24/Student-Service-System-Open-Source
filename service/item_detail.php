<?php
require("app/core_auth.php");
$menu=3;
if(isset($_GET["id"]) && $_GET["id"]<>""){
	$item_id=$_GET["id"];
}else{
	header("refresh:0;url=i_photo.php");
	exit();
}
$item=mysqli_fetch_row(mysqli_query($con,"select * from stu_items where id='$item_id' and status='上架';"));
$aid=$item[2];
$shop_result=mysqli_query($con,"select * from stu_ishop where shopmaster='$aid' and shopstatus='正常';");
$shop=mysqli_fetch_row($shop_result);
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

    <title><?php echo $item[1]; ?></title>

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
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round" style="padding: 0px">
                              <img src="<?php echo $item[7]; ?>" width="100%">
                          </div>

                          <ul class="nav nav-pills nav-stacked">
							  <li><a><i class="fa fa-money"></i>商品单价：<?php echo $item[4]; ?>¥</a></li>
							  <li><a><i class="fa fa-wechat" style="color: #41B81E"></i>客服微信：<?php echo $shop[10]; ?></a></li>
                              <li class="active"><a href="app/item_buy.php?id=<?php echo $item[0]; ?>"><i class="fa fa-shopping-basket"></i>立即购买</a></li>
                          </ul>
                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>商品介绍</h1>
                              <div class="row">
                                 <div class="col-lg-9" style="color: black">
                                 	<?php echo $item[5]; ?>
                                 </div>
                                  
                              </div>
                          </div>
                      </section>
                  </aside>
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

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
<?php mysqli_close($con); ?>