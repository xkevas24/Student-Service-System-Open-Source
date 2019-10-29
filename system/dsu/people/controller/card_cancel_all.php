<?php
session_start();
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="delete from stu_cards_all where cardid='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('取消全体发行成功！')</script>";
	header("refresh:0;url=../card_manage.php");
}else{
	echo "<script>alert('取消全体发行失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../card_manage.php");
}
mysqli_close($con);
?>