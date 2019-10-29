<?php
	include "phpqrcode.php";
	include "core_mysql.php";
	include "functions.php";
	$timenow=time()+10;
	if(isset($_GET["var"])){
		$var=$_GET["var"];
	}else{
		$var=time();
	}
	$rand=createNonceStr();
	$expire=time()+7;
	//注册条码
	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_xfcard;"))[0]+1;
	$sql="insert into stu_xfcard (id,cardid,randid,expires) values ('$newid','$var','$rand','$expire');";
	mysqli_query($con,$sql);
	$errorCorrectionLevel = 'L';//容错级别 
	$matrixPointSize = 15;//生成图片大小 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("ynudcc://cards/?".$rand, false, $errorCorrectionLevel, $matrixPointSize, 2); 
	//header("refresh:2");
	
?>