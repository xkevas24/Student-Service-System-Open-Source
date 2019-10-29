<?php
require "../service/app/core_auth.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>扫一扫</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<link rel="stylesheet" href="css_js/style.css">
</head>

<body>
<h1>
<?php 
if(isset($_GET["val"])){
	$val=$_GET["val"];
	$header=explode("?",$val)[0];
	if($header=="ynudcc://cards/"){
		$info=explode("?",$val)[1];
		$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_wxscan_cards;"))[0]+1;
		$info=base64_decode($info);
		$stuno=explode("@",$info)[0];
		$time=explode("@",$info)[1];
		$sql="insert into stu_wxscan (id,stuno,tmap) values ('$newid','$stuno','$time');";
		$do=mysqli_query($con,$sql);
		echo "<script>alert('扫码成功！')</script>";
	}else{
		echo "<script>alert('条码类型不正确！')</script>";
	}
}else{
	echo "<script>alert('数据为空！')</script>";
}
?>
</h1>
<script>window.history.back()</script>
</body>
<script src="css_js/zepto.min.js"></script>
</html>