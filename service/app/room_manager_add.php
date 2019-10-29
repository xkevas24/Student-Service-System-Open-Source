<?php
require("core_auth.php");

if(isset($_POST["name"]) && $_POST["name"]<>""){
	$sprname=xss($_POST["name"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../room_manager.php");
}

if(isset($_POST["sn"]) && $_POST["sn"]<>""){
	$sprsn=xss($_POST["sn"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../room_manager.php");
}

if(isset($_POST["phone"]) && $_POST["phone"]<>""){
	$phone=xss($_POST["phone"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../room_manager.php");
}
	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_jiaoshi_manager;"))[0]+1;
	$add_sql="insert into stu_jiaoshi_manager (id,name,sn,phone) values ('$class_id','$sprname','$sprsn','$phone');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('添加成功！')</script>";
		header("refresh:0;url=../room_manager.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('添加失败！！')</script>";
		//echo $add_sql;
		header("refresh:0;url=../room_manager.php");
	}

?>