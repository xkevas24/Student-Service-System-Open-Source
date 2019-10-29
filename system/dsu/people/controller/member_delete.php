<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="delete from stu_sucache where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('成员删除成功！')</script>";
	header("refresh:0;../member_delete.php");
}else{
	echo "<script>alert('成员删除失败！！')</script>";
	echo $sql;
	header("refresh:30;../member_delete.php");
}
?>