<?php
	include "phpqrcode.php";
	$timenow=time();
	//$hidetime=pskeyon($time);
	//$code = $hidetime;
	if(isset($_GET["actcode"])){
		$act=$_GET["actcode"];
	}else{
		$act=000000;
	}

$servername = "192.168.103.61"; 
$db_username = "root"; 
$db_password = "*studb_2471"; 
$dbname = "stu";
$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
$sql = "select id from stu_codeactive where name='许潇' and auth='active';";
		$check = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($check);

		if($check){
			header("refresh:0;url=login_success.php");
			mysqli_close($con);
		}else{	
			header("refresh:5");
			mysqli_close($con);
		}


	$code=$timenow;
	//获取待生成的文本
	if(empty($code))
	{
		echo "参数错误！";
		exit;
	}
	//if(empty($actcode))
	//{
	//	echo "参数错误！";
	//	exit;
	//}
	$errorCorrectionLevel = 'L';//容错级别 
	$matrixPointSize = 12;//生成图片大小 
	//生成二维码图片 
	//QRcode::png($text, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2); 
	//$QR = 'qrcode.png';//已经生成的原始二维码图 
	//输出图片 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=".$code.$act, false, $errorCorrectionLevel, $matrixPointSize, 2); 
?>