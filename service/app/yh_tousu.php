<?php
require("core_auth.php");
if(isset($_GET["oid"]) && $_GET["oid"]<>""){
	$oid=xss($_GET["oid"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段订单号缺失！')</script>";
	header("refresh:0;url=../i_user_center.php");
}
if(isset($_POST["reason"]) && $_POST["reason"]<>""){
	$reason=xss($_POST["reason"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缘由缺失！')</script>";
	header("refresh:0;url=../i_user_center.php");
}

	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_yh_tousu;"))[0]+1;
	$add_sql="insert into stu_yh_tousu (id,oid,reason) values ('$newid','$oid','$reason');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select stuno from stu_ishop_manager where id='1';"))[0];
		mysqli_close($con);
		$data=shortLink("待处理的用户投诉","学生服务系统",array($manager),"有新的用户投诉，请及时处理！");
		echo "<script>alert('投诉发送成功！工作人员会在5天内进行处理！')</script>";
		header("refresh:0;url=../i_user_center.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('投诉失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../i_user_center.php");
	}

?>