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

    <title>学生服务系统-V5.0</title>

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
             <!--<div class="row">
             	<div class="col-lg-4">
               	<section class="panel">
               		<img src="close.jpg" width="98%">
  					    </section>
				      </div>
             </div>-->
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <table class="table table-hover personal-task">
                              <tbody>
                               <?php
								 $menu_result=mysqli_query($con,"select * from stu_menu where show_hide='on';");
								 while($menu=mysqli_fetch_row($menu_result)){
								 ?>
                                <tr onClick="window.open('<?php echo $menu[3]; ?>')">
                                   
                                    <td>
                                        <i class="fa <?php echo $menu[2]; ?>"></i>
                                    </td>
                                    <td><?php echo $menu[1]; ?></td>
                                    <td><i class="icon-chevron-sign-right"></i></td>
                                    
                                </tr>
                                <?php } 
								  if($userdetail[7]<>"user"){
								  ?>
                             	<!--<tr onClick="window.open('root.php')">
                                   
                                    <td>
                                        <i class="fa fa-key"></i>
                                    </td>
                                    <td>学服维护管理中心</td>
                                    <td><i class="icon-chevron-sign-right"></i></td>
                                    
                                </tr>-->
                             <?php } ?>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-8">
                     <?php 
					  $activity_result=mysqli_query($con,"select id,title,pubtime,pic,keyword,org from stu_article where state='正常' order by pubtime desc;");
					  while($activity=mysqli_fetch_row($activity_result)){
						  $arid=$activity[0];
						  if($arid%2==0){
					  ?>
                      <!--A-->
                      <a href="../system/dsu/people/article/article.php?atid=<?php echo $arid; ?>" target="_blank">
                      <section class="panel post-wrap pro-box">
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro right"></span>
                                  <div class="panel-body">
                                      <h1><strong><?php echo $activity[1]; ?></strong> <br><?php echo $activity[5]; ?></h1>
                                      <div class="desk yellow">
                                          <h3><?php echo $activity[2]; ?></h3>
                                          <p><?php echo $activity[4]; ?></p>
                                      </div>
                                      <!--<div class="post-btn">
                                          <a>
                                              <i class="fa fa-check"></i>
                                          </a>
                                      </div>-->
                                  </div>
                              </div>
                          </aside>
                          <aside class="post-highlight yellow v-align">
                              <div class="panel-body text-center">
                                  <div class="pro-thumb">
                                      <img src="<?php echo $activity[3]; ?>" alt="">
                                  </div>
                              </div>
                          </aside>
                      </section>
					  </a>
                      <!--A-->
                      <?php }else{ ?>
                      <!--B-->
                      <a href="../system/dsu/people/article/article.php?atid=<?php echo $arid; ?>" target="_blank">
                      <section class="panel post-wrap pro-box">
                          <aside class="post-highlight terques v-align">
                              <div class="panel-body text-center">
                                  <div class="pro-thumb">
                                      <img src="<?php echo $activity[3]; ?>" alt="">
                                  </div>
                              </div>
                          </aside>
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro left"></span>
                                  <div class="panel-body">
                                      <h1><strong><?php echo $activity[1]; ?></strong> <br> <?php echo $activity[5]; ?></h1>
                                      <div class="desk blue">
                                          <h3><?php echo $activity[2]; ?></h3>
                                          <p><?php echo $activity[4]; ?></p>
                                      </div>
                                      <!--<div class="post-btn">
                                          <a>
                                              <i class="fa fa-check"></i>
                                          </a>
                                      </div>-->
                                  </div>
                              </div>
                          </aside>
                      </section>
                      </a>
                      <!--B-->
                      <?php } ?>
                      <?php } ?>
                  </div>
              </div>
          </section>
          <p>当前IP:<?php echo $ip;  if($local_or_outter){ echo "，公网";}else{echo "内网";} ?></p>
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
   <script type="text/javascript">
  setInterval('$.ajax({url:"https://wlfw.ynudcc.cn/html/student_main/keep_alive.php?tp_=<?php echo time(); ?>",async:false});',"5000");        
  </script>

  </body>
</html>
<?php mysqli_close($con); ?>
