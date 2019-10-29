<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="update stu_sucache set job='干部' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('权限授予成功！')</script>";
	header("refresh:0;../auth_change_long.php");
}else{
	echo "<script>alert('权限授予失败！！')</script>";
	echo $sql;
	header("refresh:30;../auth_change_long.php");
}
?>