<?php
session_start();
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];

$sql="delete from stu_cards_det where id='$id';";
$result=mysqli_query($con,$sql);
$delete="delete from stu_cards where cardo='$id';";
$do=mysqli_query($con,$delete);
if($result && $do){
	echo "<script>alert('删除成功！')</script>";
	header("refresh:0;url=../card_manage.php");
}else{
	echo "<script>alert('删除失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../card_manage.php");
}
mysqli_close($con);
?>