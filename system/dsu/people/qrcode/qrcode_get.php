<?php
	//用于生成自助打印成绩单的QRCODE
	//2018.4.10
	//xxk
	
	// $t=1223323988;
	// echo date("Y",$t);
	// exit;

	include "phpqrcode.php";
	$cd = $_GET["cd"];	//获取待生成的文本
	if(empty($cd))
	{
		echo "参数错误！";
		exit;
	}
	$timenow=time();
	$errorCorrectionLevel = 'L';//容错级别 
	$matrixPointSize = 10;//生成图片大小 
	//生成二维码图片 
	//QRcode::png($text, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2); 
	//$QR = 'qrcode.png';//已经生成的原始二维码图 
	//输出图片 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("http://weixin.ynudcc.cn/topstu/system/stu/cards/cdprovide.php?cd=".$cd, false, $errorCorrectionLevel, $matrixPointSize, 2); 
?>