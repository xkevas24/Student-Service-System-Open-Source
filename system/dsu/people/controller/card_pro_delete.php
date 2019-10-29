<?php
session_start();
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$bt=$_GET["bt"];
$sql="delete from stu_cards where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('删除成功！')</script>";
	header("refresh:0;url=../card_pro_record.php?id=$bt");
}else{
	echo "<script>alert('删除失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../card_pro_record.php");
}
mysqli_close($con);
?>