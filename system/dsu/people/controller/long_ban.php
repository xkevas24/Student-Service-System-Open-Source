<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$bantil=date("Y-m-d",strtotime("+30 day"));
$sql="update stu_sucache set state='长封禁',bantil='$bantil' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('封禁成功！')</script>";
	header("refresh:0;../ban_for_long.php");
}else{
	echo "<script>alert('封禁失败！！')</script>";
	echo $sql;
	header("refresh:30;../ban_for_long.php");
}
?>