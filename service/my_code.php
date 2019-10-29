<?php
require("app/core_auth.php");
$menu=0;
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

    <title>学服条码</title>

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
      <section id="main-content">
          <section class="wrapper" style="background-color:#000000">
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel"><br>
						  <?php
						  $val=$sn;
						  $val=base64_encode($val);
						  ?>
                          <img id="qrcode" src="app/xf_qrcode.php?var=<?php echo $val; ?>" width="100%">
                          <div align="center">
                          	<button id="refresh" class="btn btn-info" onClick="qr_refresh();refresh_click();">刷新条码</button>
                          </div>
                          <hr>
                          <div align="center">
                          	<p>1.可用作常规活动签到、身份校验</p>
                          	<p>2.有效期为30秒，使用一次后失效</p>
                          	<br>
                          </div>
                          
                      </section>
                      <!--user info table end-->
                  </div>
              </div>
          </section>
      </section>
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
   <script type="text/javascript">
  setInterval('$.ajax({url:"http://wlfw.ynudcc.cn/html/student_main/keep_alive.php?tp_=<?php echo time(); ?>",async:false});',"1000");        
  </script>
<script>
 function qr_refresh(){
   document.getElementById("qrcode").src='app/xf_qrcode.php?var=<?php echo $val; ?>';
 }

function button_lock(num){
	var secs = 10;
	if (num == secs) {
		document.getElementById("refresh").innerHTML="刷新条码";
		$("#refresh").attr("disabled", false);
	}
	else {
		var printnr = secs - num;
		document.getElementById("refresh").innerHTML="冷却中（" + printnr + "）秒";
		$("#refresh").attr("disabled", true);
	}
}

function refresh_click(){
	for (i = 1; i <= 10; i++) {
		window.setTimeout("button_lock( " + i + ") ", i * 1000);
	}
}
/*$(function(){
 setInterval(qr_refresh,30000);
	qr_refresh()
})*/	
</script>
  </body>
</html>
<?php mysqli_close($con); ?>
