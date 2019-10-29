<?php
require("core_auth.php");


if(isset($_POST["phone"]) && $_POST["phone"]<>""){
	$phone=xss($_POST["phone"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段phone缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}

	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_developer;"))[0]+1;
	$add_sql="insert into stu_developer (id,stuno,status,phone) values ('$class_id','$sn','待审核','$phone');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select xh from stu_sucache where org='学生服务系统' and state='正常';"))[0];
		mysqli_close($con);
		$data=shortLink("待审核的开发者申请","学生服务系统",array($manager),"有新的开发者申请等待审核");
		echo "<script>alert('申请成功！工作人员会在48小时内对你的申请进行审核！')</script>";
		header("refresh:0;url=../index.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('申请失败！请重新申请！')</script>";
		header("refresh:0;url=../i_shop_apply.php");
	}

?>