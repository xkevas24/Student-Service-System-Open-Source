<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$sql="delete from stu_cards_scanner where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('权限解除成功！')</script>";
	header("refresh:0;../card_scanner.php");
}else{
	echo "<script>alert('权限解除失败！！')</script>";
	echo $sql;
	header("refresh:30;../card_scanner.php");
}
?>