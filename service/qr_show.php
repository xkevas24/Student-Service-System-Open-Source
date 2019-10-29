<?php
require("app/core_auth.php");
?>
<!doctype html>
<html>
<head>
<?php
//include("../core_crypt.php");
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
    text-align: center; /*让div内部文字居中*/
    background-color: #fff;
    border-radius: 0px;
    width: 590px;
    height: 590px;
    border-radius: 0px;
    margin: 5% auto;
    position: absolute;
    top: -10px;
    left: 0;
    right: 0;
    bottom: 0;
}
</style>
<script src="js/jquery.js"></script>
</head>
<!-- http://wlfw.ynudcc.cn/topstu/system/dsu/qr/qrcode.php?actcode=100094 -->
<body bgcolor="#2A2A2A">
<div class="main">
<?php
if($state=="off"){
	echo "<h1>条码已关闭！</h1>";
	mysqli_close($con);
	exit();
}	
?>
	<h1>扫码：<?php echo $act_name; ?></h1>
	<h4>如果你扫码失败，可能是由于网络情况差，请多试几次。</h4>
	<img id="qrcode" src="app/qrcode.php?actcode=<?php echo $actcode; ?>" width="100%" alt="签到二维码">
	
	<?php mysqli_close($con); //header("refresh:2");  ?>
</div>
</body>
<script>
$(function(){
 setInterval(qr_refresh,3120);
 function qr_refresh(){
   document.getElementById("qrcode").src='app/qrcode.php?actcode=<?php echo $actcode; ?>';
 }
})	
</script>
</html>