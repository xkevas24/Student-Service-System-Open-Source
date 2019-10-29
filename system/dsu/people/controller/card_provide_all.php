<?php
session_start();
require("mysqli.php");
$con = con("stu");
$org=$_SESSION["orgname"];
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$repeat="select id from stu_cards_all where cardid='$id';";
	$result=mysqli_fetch_row(mysqli_query($con,$repeat))[0];
	if($result==""){
		
	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_cards_all"))[0]+1;
	$card="insert into stu_cards_all (id,cardid) values ('$newid','$id');";
	$cr=mysqli_query($con,$card);
		
	if($cr){
		echo "<script>alert('发放成功！')</script>";
	}else{
		echo "<script>alert('发放失败！')</script>";
	}
		
	}else{
		echo "<script>alert('卡券已发放过，请勿重复发放！')</script>";
	}
	
}else{
	echo "<script>alert('错误！')</script>";
}

mysqli_close($con);

header("refresh:3;../card_manage.php");
?>