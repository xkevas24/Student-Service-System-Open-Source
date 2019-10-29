<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>二维码创建</title>
<?php
require("core_auth.php");
require("core_crypt.php");
	if(!isset($_SESSION["orgname"])){
		echo "<script>alert('创建失败！创建单位异常！')</script>";
		header("refresh:0;url=../qr_create.php");
		exit();
	}else{
		$orgname=$_SESSION["orgname"];
	}
	if($_SESSION["iden"]<>"yes"){
		echo "<script>alert('创建失败！权限异常！')</script>";
		header("refresh:0;url=../qr_create.php");
		exit();
	}
	if($_SESSION["suauth"]<>1){
		echo "<script>alert('创建失败！没有创建权限！')</script>";
		header("refresh:0;url=../qr_create.php");
		exit();
	}
	if(isset($_POST["actname"])){
		$actname=$_POST["actname"];
	}else{
		echo "<script>alert('关键字段缺失！')</script>";
		header("refresh:0;url=../qr_create.php");
		exit();
	}
	if(isset($_POST["ifsc"]) && $_POST["ifsc"]=="yes"){
		$ifsc="scc";
	}else{
		$ifsc="com";
	}
	if(isset($_POST["ifanti"]) && $_POST["ifanti"]=="yes"){
		$anti="on";
	}else{
		$anti="off";
	}
$newid=mysqli_fetch_row(mysqli_query($con,"select max(actid) from stu_codesub;"))[0]+1;
//$actcode=encrypt($newid);
$date=date("Ymd");
$type=$ifsc."@".$anti;
$sql="insert into stu_codesub (actid,actname,host,hostdate,state,type) values ('$newid','$actname','$orgname','$date','on','$type');";
$do=mysqli_query($con,$sql);
mysqli_close($con);
if($do){
	echo "<script>alert('创建成功！')</script>";
	header("refresh:0;url=../qr_record.php");
	exit();
}else{
	echo "<script>alert('创建失败！系统错误！')</script>";
	header("refresh:0;url=../qr_create.php");
	exit();
}
?>
</head>

<body>
</body>
</html>