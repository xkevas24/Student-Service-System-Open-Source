<?php
	include "phpqrcode.php";
	include "core_mysql.php";
	include "functions.php";
	$timenow=time()+30;
	if(isset($_GET["var"])){
		$var=$_GET["var"];
	}else{
		$var=time();
	}
	$rand=createNonceStr();
	//注销所有条码
	$sql="update stu_xftm set eft='off' where val='$var';";
	$do=mysqli_query($con,$sql);
	//注册条码
	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_xftm;"))[0]+1;
	$sql="insert into stu_xftm (id,randid,val,expires) values ('$newid','$rand','$var','$timenow');";
	mysqli_query($con,$sql);
	$errorCorrectionLevel = 'L';//容错级别 
	$matrixPointSize = 15;//生成图片大小 
	Header("Content-type: image/png");
	header('Content-Disposition: inline; filename="qrcode.png"');
	QRcode::png("ynudcc://xftm/?".$rand, false, $errorCorrectionLevel, $matrixPointSize, 2); 
	//header("refresh:2");
	
?>