<?php
require("app/core_auth.php");
$menu=0;
$today=date("Y-m-d");
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

    <title>周年庆线上抽奖</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

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
                  <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading">
                              学生服务系统周年庆
                          </header>
                          <div class="panel-body">
                            <p>位置：<?php $xq=$basic["xq"]; switch($xq){
							case "1":
								echo "海埂校区，海埂校区同学无法参与活动，请谅解";
								break;
							case "4":
								echo "杨林校区";
								break;
						} ?></p>
                             感恩一周年，活动已结束
                             <p>已发出：<font color="red"><?php echo mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_choujiang;"))[0]; ?></font>张奖券，系统中奖几率：5%，奖池折合人民币：<font color="red">1500元</font>，实际中奖率：<?php
								  $opened=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_choujiang where gettype<>'final' and ifused='0';"))[0];
								  $luckyed=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_jiangping where cardid<>'null';"))[0];
								  echo $luckyed."/".$opened;
								  ?>。</p>
                             <hr>
                          </div>
                      </section>
                  </div>

              </div>
              
              <div class="row">
              	<div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              我的奖品
                          </header>
                          <div class="col-lg-8">
                          	<table class="table-bordered">
                          		<thead>
                          		<tr>
                          			<td>奖券号</td>
                          			<td>奖品名称</td>
                          			<td>奖品提供方</td>
                          			<td>中奖日期</td>
                          		</tr>
                          		</thead>
                          		<tfoot>
                          		<tr>
                          			<td>奖券号</td>
                          			<td>奖品名称</td>
                          			<td>奖品提供方</td>
                          			<td>中奖日期</td>
                          		</tr>
                          		</tfoot>
                          		<tbody>
                          			<?php 
									$sql="select name,cardid,org,opendate from stu_jiangping where poststuno='$sn';";
									$result=mysqli_query($con,$sql);
									while($row=mysqli_fetch_row($result)){
										echo "<tr>";
										echo "<td>".$row[1]."</td>";
										echo "<td>".$row[0]."</td>";
										echo "<td>".$row[2]."</td>";
										echo "<td>".$row[3]."</td>";
										echo "</tr>";
									}
									?>
                          		</tbody>
                          	</table>
                          </div>
					</section>
				  </div>
              </div>
              <div class="row">
              	<div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              欧皇公告：下面的人都是欧皇
                          </header>
                          <div class="col-lg-8">
                          	<table class="table-bordered">
                          		<thead>
                          		<tr>
                          			<td>中奖人</td>
                          			<td>奖品名称</td>
                          			<td>奖品提供方</td>
                          			<td>中奖日期</td>
                          		</tr>
                          		</thead>
                          		<tfoot>
                          		<tr>
                          			<td>中奖人</td>
                          			<td>奖品名称</td>
                          			<td>奖品提供方</td>
                          			<td>中奖日期</td>
                          		</tr>
                          		</tfoot>
                          		<tbody>
                          			<?php 
									$sql="select name,poststuno,org,opendate from stu_jiangping where poststuno<>'' order by opendate desc;";
									$result=mysqli_query($con,$sql);
									while($row=mysqli_fetch_row($result)){
										$stu_name=mysqli_fetch_row(mysqli_query($con,"select name from stu_usrcache where sn='$row[1]';"))[0];
										echo "<tr>";
										echo "<td>".$stu_name."</td>";
										echo "<td>".$row[0]."</td>";
										echo "<td>".$row[2]."</td>";
										echo "<td>".$row[3]."</td>";
										echo "</tr>";
									}
									?>
                          		</tbody>
                          	</table>
                          </div>
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

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>

    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
<script>
function get_result(cardid){
	$.get("app/choujiang.php?cardid="+cardid, function(result){
		var child=document.getElementById(cardid);
		switch(result){
			case "unable":
				alert('奖券要在5月5日到5月10日之间才能刮开哦。');
				break;
			case "error":
				alert('奖券已使用过啦。');
				child.parentNode.removeChild(child);
				break;
			case "-1":
				alert('奖券已领完啦。');
				child.parentNode.removeChild(child);
				break;
			case "1":
				alert('今日运气已用完咯，留点奖给其他人嘛~');
				child.parentNode.removeChild(child);
				break;
			case "0":
				alert('谢谢参与！');
				child.parentNode.removeChild(child);
				break;
			default:
				alert('恭喜！你抽中了：'+result);				
        		child.parentNode.removeChild(child);
				break;
		}
        });
}
	
function get_daily(){
	$.get("app/get_choujiang_daily.php", function(result){
		switch(result){
			case "xqerror":
				alert('抱歉，海埂校区的同学无法参加此次活动！');
				break;
			case "error":
				alert('今日已试过手气了！4月28日~5月10日每天都可以领取一次哦！');
				break;
			case "1":
				alert('领取成功！4月28日~5月10日每天都可以领取一次哦！');
				break;
		}
		location.reload();
    });
}
function get_final(){
	$.get("app/get_choujiang_final.php", function(result){
		switch(result){
			case "xqerror":
				alert('抱歉，海埂校区的同学无法参加此次活动！');
				break;
			case "error":
				alert('已经领取过了！');
				break;
			case "1":
				alert('领取成功！每人只可以参加一次终极大奖抽奖！');
				break;
		}
		location.reload();
    });
}
</script>
  </body>
</html>
<?php mysqli_close($con); ?>