<?php
require("app/core_auth.php");
$menu=2;
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

    <title>团委服务通道</title>

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
    <?php
	//礼物检查
		$gift_sql = "select id from stu_gift_record where sn='$sn' and ifchecked='1';";
		$gift_check = mysqli_query($con,$gift_sql);
		$gift_check = mysqli_fetch_array($gift_check);

	//信用
		$credit=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
	//每日登录
		$lgdate=date("Y年m月d日");
		$lgtime=date("H时i分");
		$login_check="select id from stu_login_record where sn='$sn' and lgdate='$lgdate';";
		$login_result=mysqli_fetch_row(mysqli_query($con,$login_check))[0];
		if($login_result==""){
			//添加登录
			$login_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_login_record;"))[0]+1;
			$login_rd="insert into stu_login_record (id,sn,lgdate,lgtime) values ('$login_id','$sn','$lgdate','$lgtime');";
			$do_login=mysqli_query($con,$login_rd);
			//检查连续登录天数
			//require("lianxu.php");
			//增加分数
					//$credit_sql="update stu_usrcache set credit=credit+1 where sn='$sn';";
					//$add_credit=mysqli_query($con,$credit_sql);
					//写入记录
					//$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
//					$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
//					$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续7天登录','+','1','$var','$time');";
//					$add_record=mysqli_query($con,$record);
		}
	//连续登录检查
	
function getContinueDay($day_list)
    {

	    //昨天开始时间戳

	    $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));

	   

	    if($beginYesterday>$day_list[0]) $days = 0;

	    else $days = 1;

	    

	    $count = count($day_list);

	    for($i=0;$i<$count;$i++){

	        if($i<$count-1){

	            $res = compareDay($day_list[$i],$day_list[$i+1]);

	            if($res) $days++;

	            else break;

	         }

	    }

	    

	    return $days;

    }
function compareDay($curDay,$nextDay)
    {

        $lastBegin = mktime(0,0,0,date('m',$curDay),date('d',$curDay)-1,date('Y',$curDay));

        $lastEnd   = mktime(0,0,0,date('m',$curDay),date('d',$curDay),date('Y',$curDay))-1;

        

        if($nextDay>=$lastBegin && $nextDay<=$lastEnd){

            return true;

        }else{

            return false;

        }

        

    }
			
			$lianxu="select lgdate from stu_login_record where sn='$sn' order by lgdate desc;";
			$lg_array=mysqli_query($con,$lianxu);
			$lg_str="";
			while($lg_row=mysqli_fetch_row($lg_array)){
				$dt=$lg_row[0];
				$year=substr($dt,0,4);
				$month=substr($dt,7,2);
				$day=substr($dt,12,2);
				$dt=$year."-".$month."-".$day;
				//$date=strtotime($year."-".$month."-".$year);
				$lg_str=$lg_str.strtotime($dt)."@";
			}
			$lg_array=explode("@",$lg_str);
			$lx_days = getContinueDay(array_unique($lg_array));
			$time=date("Y年m月d日");
			//检测是否已经加过分
			$lg_lx=mysqli_fetch_row(mysqli_query($con,"select id from stu_credit_record where target='$sn' and attime='$time';"))[0];//BUG病灶
			if($lg_lx==""){
				switch($lx_days){
					case 7:						
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+1 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续7天登录','+','1','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 14:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+2 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续14天登录','+','2','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 30:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+5 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续30天登录','+','5','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 60:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+15 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续60天登录','+','15','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 90:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+23 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续90天登录','+','23','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 120:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+35 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续120天登录','+','35','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 180:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+60 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续180天登录','+','60','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 365:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+150 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续365天登录','+','160','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
				}
			}  
	
	  ?>
  </head>

  <body>
<?php if($gift_check[0]<>""){ 
	$gift_sql_x = "update stu_gift_record set ifchecked='0' where sn='$sn';";
	$gift_check_x = mysqli_query($con,$gift_sql_x);
	?>
	
	<audio id="musicAudio" autoplay>
<source src="mp3/gift_notice.mp3" type="audio/mpeg">
</audio>
	<script>alert("有朋友向你赠送了礼物，请到“钱包和卡券”中查收！");</script>
<?php } ?>
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
								 $menu_result=mysqli_query($con,"select * from stu_twlist;");
								 while($menu=mysqli_fetch_row($menu_result)){
								 ?>
                                <tr onClick="window.open('<?php echo $menu[4]; ?>')">
                                   
                                    <td>
                                        <i class="fa fa-graduation-cap"></i>
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
