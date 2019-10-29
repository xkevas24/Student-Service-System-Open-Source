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
	if(isset($_GET["var"])){
		$var=$_GET["var"];
	}else{
		$var="";
	}
	//header("refresh:5");
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
	$matrixPointSize = 15;//生成图片大小 
	//生成二维码图片 
	//QRcode::png($text, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2); 
	//$QR = 'qrcode.png';//已经生成的原始二维码图 
	//输出图片 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=".$code.$act.$var, false, $errorCorrectionLevel, $matrixPointSize, 2); 
	header("refresh:3");
?>