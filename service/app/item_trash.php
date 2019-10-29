<?php
require("core_auth.php");

if(isset($_GET["id"]) && $_GET["id"]<>""){
	$spid=xss($_GET["id"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段商品编号缺失！')</script>";
	header("refresh:0;url=../item_add.php");
}


	$add_sql="update stu_items set status='下架' where id='$spid';";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('下架成功！')</script>";
		header("refresh:0;url=../i_items.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('下架失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../i_items.php");
	}

?>