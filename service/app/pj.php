<?php
require("core_auth.php");

if(isset($_GET["oid"]) && $_GET["oid"]<>""){
	$oid=xss($_GET["oid"]);
}else{
	mysqli_close($con);
	header("refresh:0;url=../my_orders.php");
}

if(isset($_GET["pj"]) && $_GET["pj"]<>""){
	$pj=xss($_GET["pj"]);
}else{
	mysqli_close($con);
	header("refresh:0;url=../my_orders.php");
}


	$add_sql="update stu_order set pj='$pj' where oid='$oid';";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('评价成功！')</script>";
		header("refresh:0;url=../my_orders.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('评价失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../my_orders.php");
	}
?>