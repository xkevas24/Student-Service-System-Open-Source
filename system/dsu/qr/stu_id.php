<?php
	include "phpqrcode.php";
	$timenow=time();
	//$hidetime=pskeyon($time);
	//$code = $hidetime;
		$act="000005";
	if(isset($_GET["orgname"])){
		$orgname=$_GET["orgname"];
	}else{
		$orgname="e";
	}

	if(isset($_GET["sn"])){
		$sn=$_GET["sn"];
	}else{
		$sn="e";
	}
	//header("refresh:5");
	//$code=$timenow;
	//获取待生成的文本
	//if(empty($actcode))
	//{
	//	echo "参数错误！";
	//	exit;
	//}
	$errorCorrectionLevel = 'L';//容错级别 
	$matrixPointSize = 10;//生成图片大小 
	//生成二维码图片 
	//QRcode::png($text, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2); 
	//$QR = 'qrcode.png';//已经生成的原始二维码图 
	//输出图片 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=000010"."@".$sn."@".$orgname, false, $errorCorrectionLevel, $matrixPointSize, 2); 
	header("refresh:20");
?>