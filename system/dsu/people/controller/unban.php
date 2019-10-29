<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="update stu_sucache set state='正常',bantil='0' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('封禁解除成功！')</script>";
	header("refresh:0;../index.php");
}else{
	echo "<script>alert('封禁解除失败！！')</script>";
	echo $sql;
	header("refresh:30;../index.php");
}
?>