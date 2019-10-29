<?php
require("../app/core_auth.php");
if(isset($_GET["stuno"])){
	$stuno=$_GET["stuno"];
	$userdetail=mysqli_fetch_row(mysqli_query($con,"select * from stu_usrcache where sn='$stuno';"));
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $userdetail[1]."的第二课堂报告"; ?></title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Emrah_Demirag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"> </script>
<!--web_fonts-->
<link href='http://fonts.useso.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
<!--/web_fonts-->
<!--start-smoth-scrolling-->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body style="height: 1130px;">
<!--header-->
<div id="home" class="banner">
	<div class="container">
		<div class="label-1"> </div>
		<div class="top-menu">
		<span class="menu"> </span> 
			<ul class="nav">
					<h4 align="center"><b>本报告由学生服务系统第二课堂助手自动生成，积分内容仅供参考</b><button id="renderPdf">下载pdf</button></p></h4>
				</ul>
				<div class="clearfix"> </div>
	</div>	
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
			<div id="banner-top" class="banner-top">		  		  
				<h1><span class="left-icon"> </span>第二课堂积分报告<span class="right-icon"> </span><div class="clearfix"> </div></h1>
				<h2><span class="left-icon"> </span><?php echo $userdetail[1].":".$userdetail[2]; ?><span class="right-icon"> </span><div class="clearfix"> </div></h2>
			</div>
		<div class="header-icons">
			<img src="../app/qrcode.php" height="200px" />
		 </div>
</div>
</div>
<div id="work" class="work">
	<div class="container">

		<p>生成日期：<?php echo date("Y年m月d日"); ?></p>
	<div class="project" align="center">
			<table border="2" bordercolor="#000000" cellpadding="10">
				<thead>
					<tr>
						<th style="padding: 0.3em 1em;"><h4>名称</h4></th>
						<th style="padding: 0.3em 1em;"><h4>举办时间</h4></th>
						<th style="padding: 0.3em 1em;"><h4>单位</h4></th>
						<th style="padding: 0.3em 1em;"><h4>板块</h4></th>
						<th style="padding: 0.3em 1em;"><h4>类别备注</h4></th>
						<th style="padding: 0.3em 1em;"><h4>分值</h4></th>
                    </tr>
				</thead>
				<tbody>
                 <?php
				  $yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
					$yx_eid=explode("@",$yx_eid);
					$jifen_sql="select sum(value) from stu_erkejifen where sn='$userdetail[2]' and(eid='".implode("' or eid='",$yx_eid)."');";
					$erke_jf=mysqli_fetch_row(mysqli_query($con,$jifen_sql))[0];
				  ?>
				  <?php
								$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
								$yx_eid=explode("@",$yx_eid);
								$list_sql="select * from stu_erkejifen where sn='$sn' and(eid='".implode("' or eid='",$yx_eid)."');";
								  //echo $list_sql;
								$list_result=mysqli_query($con,$list_sql);
								 while($list=mysqli_fetch_row($list_result)){
									 $eid=$list[1];
								$erke_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_erkeku where eid='$eid';"));
							?>
					<tr>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[1]; ?></h4></b></td>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[2] ?></h4></b></td>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[3]; ?></h4></b></td>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[5] ?></h4></b></td>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[6] ?></h4></b></td>
						<td style="padding: 0.3em 1em;"><b><h4><?php echo $erke_info[4] ?></h4></b></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>		
	</div>
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	    <script type="text/javascript" src="./js/html2canvas.js"></script>
    <script type="text/javascript" src="./js/jsPdf.debug.js"></script>
    <script type="text/javascript">

      var downPdf = document.getElementById("renderPdf");

      downPdf.onclick = function() {
          html2canvas(document.body, {
              onrendered:function(canvas) {

                  var contentWidth = canvas.width;
                  var contentHeight = canvas.height;

                  //一页pdf显示html页面生成的canvas高度;
                  var pageHeight = contentWidth / 595.28 * 841.89;
                  //未生成pdf的html页面高度
                  var leftHeight = contentHeight;
                  //pdf页面偏移
                  var position = 0;
                  //a4纸的尺寸[595.28,841.89]，html页面生成的canvas在pdf中图片的宽高
                  var imgWidth = 555.28;
                  var imgHeight = 555.28/contentWidth * contentHeight;

                  var pageData = canvas.toDataURL('image/jpeg', 1.0);

                  var pdf = new jsPDF('', 'pt', 'a4');
                  //有两个高度需要区分，一个是html页面的实际高度，和生成pdf的页面高度(841.89)
                  //当内容未超过pdf一页显示的范围，无需分页
                  if (leftHeight < pageHeight) {
                      pdf.addImage(pageData, 'JPEG', 20, 0, imgWidth, imgHeight );
                  } else {
                      while(leftHeight > 0) {
                          pdf.addImage(pageData, 'JPEG', 20, position, imgWidth, imgHeight)
                          leftHeight -= pageHeight;
                          position -= 841.89;
                          //避免添加空白页
                          if(leftHeight > 0) {
                              pdf.addPage();
                          }
                      }
                  }

                  pdf.save('<?php echo $sn; ?>.pdf');
              }
          })
      }
    </script>
	</div>
</div>
</body>
</html>