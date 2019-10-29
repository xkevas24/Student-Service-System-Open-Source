<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="delete from stu_deplib where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('部门删除成功！')</script>";
	header("refresh:0;../batch_update.php");
}else{
	echo "<script>alert('部门删除失败！！')</script>";
	echo $sql;
	header("refresh:30;../batch_update.php");
}
?>