<?php

	$xm=$_POST["xm"];
	$sex=$_POST["sex"];
	$xh=$_POST["xh"];
	$dep=$_POST["dep"];
	$job=$_POST["job"];
	$position=$_POST["position"];

if(isset($_GET["id"])){
	$id=$_GET["id"];
}
require("mysqli.php");
$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
$sql="update stu_sucache set xm='$xm',sex='$sex',xh='$xh',dep='$dep',job='$job',ps='$position' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('更新成功！')</script>";
	header("refresh:0;url=../profile_change.php");
}else{
	echo "<script>alert('更新失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../profile_change.php");
}
mysqli_close($con);
?>