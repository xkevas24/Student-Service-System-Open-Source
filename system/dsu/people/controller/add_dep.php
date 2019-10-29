<?php
session_start();
$org=$_SESSION["orgname"];
if(isset($_GET["id"])){
	$id=$_GET["id"];
}

$dep=$_POST["dep"];
require("mysqli.php");
$con = con("stu");
$id=table_new_id("stu","stu_deplib");
$sql="insert into stu_deplib (id,org,name) values ('$id','$org','$dep');";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('添加成功！')</script>";
	header("refresh:0;url=../batch_update.php");
}else{
	echo "<script>alert('添加失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../batch_update.php");
}
mysqli_close($con);
?>