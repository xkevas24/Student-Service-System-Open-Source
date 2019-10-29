<?php
session_start();
if(!isset($_SESSION)){
	header("refresh:0;url=qr_error.php?error_code=nosession");
	exit();
}else{
	$ssid=($_SESSION);
	$array=json_decode(json_encode($ssid),true);
	$user=($array["user"]);
	$name=$user["xm"];
	$sn=$user["stuno"];
	if($sn==null){
		header("refresh:0;url=qr_error.php?error_code=unlog");
	exit();
	}
	$servername = "192.168.103.61"; 
	$db_username = "root"; 
	$db_password = "*studb_2471"; 
	$dbname = "stu";
	$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
	$org=$_SESSION["orgname"];
	$sql="select job from stu_sucache where xh='$sn' and org='$org' GROUP BY xh HAVING count(xh) = 1;";
	$job=mysqli_fetch_row(mysqli_query($con,$sql))[0];
	if($job<>"干部"){
		header("refresh:0;url=qr_error.php?error_code=noauth");
		exit();
	}
}
?>
<!doctype html>
<html>
<head>
<?php
include("../core_crypt.php");
if(isset($_GET["actcode"])){
	$actcode=decrypt($_GET["actcode"]);
}else{
	header("refresh:0;url=qr_error.php?error_code=noqr");
	exit();
}
$con=mysqli_connect("192.168.103.61","root","*studb_2471","stu");
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
	<h1>扫码签到：<?php echo $act_name; ?></h1>
	<h4>如果你签到失败，可能是由于网络情况差，请多试几次。</h4>
	<img src="qrcode.php?actcode=<?php echo $actcode; ?>" width="100%" alt="签到二维码">
	
	<?php mysqli_close($con); header("refresh:2");  ?>
</div>
</body>
</html>