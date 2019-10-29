<?php

if(isset($_GET["id"])){
	$id=$_GET["id"];
}

$dep=$_POST["dep"];
require("mysqli.php");
$con = con("stu");
$sql="update stu_deplib set name='$dep' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('更新成功！')</script>";
	header("refresh:0;url=../batch_update.php");
}else{
	echo "<script>alert('更新失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../batch_update.php");
}
mysqli_close($con);
?>