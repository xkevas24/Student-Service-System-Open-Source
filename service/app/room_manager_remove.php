<?php
require("core_auth.php");

if(isset($_GET["id"]) && $_GET["id"]<>""){
	$sprid=xss($_GET["id"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../room_manager.php");
}
	$add_sql="delete from stu_jiaoshi_manager where id='$sprid';";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('移除成功！')</script>";
		header("refresh:0;url=../room_manager.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('移除失败！！')</script>";
		//echo $add_sql;
		header("refresh:0;url=../room_manager.php");
	}

?>