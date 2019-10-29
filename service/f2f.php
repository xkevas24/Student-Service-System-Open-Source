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

    <title>面对面授权-<?php echo $orgname; ?></title>

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
                 <?php 
				  	$sql_sub = "select * from stu_codesub where host='$orgname' and type='func' order by actid desc;"; 
					$res_sub=mysqli_query($con,$sql_sub);
				  	while($row_sub=mysqli_fetch_row($res_sub)){
					$k++;
					if($row_sub[4]=="off"){
						$color="background-color:#F13134";
					}else{
						$color="";
					}
					$actid=$row_sub[0];
				  ?>
                  <div class="col-lg-4">
                      <!--features carousel start-->
                      <section class="panel">
                          <div class="flat-carousal" style="<?php echo $color; ?>">
                              <div>
                                  <div>
                                      <h1 style="font-style: normal"><?php echo $row_sub[1]; ?></h1>
                                      <div class="text-center">
                                         <p><?php echo $row_sub[3]; ?></p>
                                         <?php 
											if($row_sub[4]=="on"){
										?>
                                          <a href="qr_show.php?actcode=<?php echo base64_encode($actid); ?>" class="view-all" target="_blank">出示二维码</a>
                                          <?php }else{ ?>
                                          <button class="btn btn-white btn-round" disabled>二维码已关闭</button>
                                          <?php } ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <!--features carousel end-->
                  </div>
                  <?php 
					if($k==3){
						$k=0;
						echo "</div>";
						echo "<div class='row'>";
					}
					} ?>
              </div>
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

  </body>
</html>
<?php mysqli_close($con); ?>