<?php
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$newid=table_new_id("stu","stu_cards_scanner");
$sql="select xm,xh,org from stu_sucache where id='$id';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
if($result){
	
	$auth="insert into stu_cards_scanner (id,xm,xh,org,until,state) values ('$newid','$row[0]','$row[1]','$row[2]','foo','正常');";
	$auth_result=mysqli_query($con,$auth);
	if($auth_result){
		echo "<script>alert('权限授予成功！')</script>";
		header("refresh:0;../card_scanner.php");
	}else{
		echo "<script>alert('权限授予失败！！')</script>";
	echo $auth;
	header("refresh:30;../card_scanner.php");
	}
	
}else{
	echo "<script>alert('权限授予失败！！')</script>";
	echo $sql;
	header("refresh:30;../card_scanner.php");
}
?>