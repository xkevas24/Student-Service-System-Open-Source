<?php
require("app/core_auth.php");
?>
<!doctype html>
<html>
<head>
<?php
if(isset($_GET["actcode"])){
	$actcode= base64_decode($_GET["actcode"]);	
}else{
	header("refresh:0;url=app/qr_error.php?error_code=noqr");
	exit();
}
$act_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_codesub where actid='$actcode';"));
$state=$act_info[4];
$act_name=$act_info[1];
$act_host=$act_info[2];
?>
<meta charset="utf-8">
<title><?php echo $act_name."-".$act_host; ?></title>
<style>
.main{
    text-align: center; 
    background-color: #fff;
    border-radius: 0px;
    width: 1300px;
    height: 800px;
    border-radius: 0px;
    margin: 5% auto;
    position: absolute;
    top: -60px;
    left: 0;
    right: 0;
    bottom: 0;
}
</style>
<script src="js/jquery.js"></script>
</head>
<!-- http://wlfw.ynudcc.cn/topstu/system/dsu/qr/qrcode.php?actcode=100094 -->
<body bgcolor="#2A2A2A">
<div class="main" id="qr">
<?php
if($state=="off"){
	echo "<h1>条码已关闭！</h1>";
	mysqli_close($con);
	exit();
}	
?>
	<h1 id="l1" style="display: none">条码已关闭！</h1>
	<h2 id="l2"><?php echo $act_name; ?></h2>
	<h4 id="l3">二维码已升级，请用"<b style="color: #AC0507">学服扫一扫</b>"签到，可多扫几次<button onClick="qp()">点击全屏</button></h4>
	<p id="l4" style="color: #AC0507"><b><u>打开公众号[青春滇院人]，点击菜单[青年之声]，点击[第二课堂签到]，扫描签到码</u></b></p>
	<div style="display:inline-block;">
		<img id="qrcode" style="background-color: #FFFFFF" src="app/sign_qrcode.php?actcode=<?php echo $actcode; ?>" width="100%" alt="签到二维码">
	</div>
	<div style="display:inline-block;">
		
	</div>
	<div style="display:inline-block;">
		<img src="qcdyr.jpg" width="70%">	
	</div>
	
</div>
</body>
<script>
$(function(){
 setInterval(qr_refresh,3120);
 function qr_refresh(){
   document.getElementById("qrcode").src='app/sign_qrcode.php?actcode=<?php echo $actcode; ?>';
	  $.get("app/qr_onoff.php?actid=<?php echo $actcode; ?>",function(data){
      if(data=='off'){
		  document.getElementById("qrcode").style.display="none";
		  document.getElementById("l4").style.display="none";
		  document.getElementById("l3").style.display="none";
		  document.getElementById("l2").style.display="none";
		  document.getElementById("l1").style.display="block";
	  }else{
		  document.getElementById("qrcode").style.display="block";
		  document.getElementById("l4").style.display="block";
		  document.getElementById("l3").style.display="block";
		  document.getElementById("l2").style.display="block";
		  document.getElementById("l1").style.display="none";
	  }
    });
 }
})	
function launchFullscreen (element) {
  if (element.requestFullscreencreen) {
    element.requestFullScreen()
  } else if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen()
  } else if (element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen()
  } else if (element.msRequestFullScreen) {
    element.msRequestFullScreen()
  }
}
function qp(){
	launchFullscreen(document.documentElement);
}
</script>
</html>
<?php mysqli_close($con);   ?>