<?php
require("core_auth.php");

if(isset($_POST["reason"]) && $_POST["reason"]<>""){
	$reason=xss($_POST["reason"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缘由缺失！')</script>";
	header("refresh:0;url=../my_shop.php");
}

	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_ishop_destroy;"))[0]+1;
	$add_sql="insert into stu_ishop_destroy (id,shopmaster,reason) values ('$newid','$sn','$reason');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select stuno from stu_ishop_manager where id='1';"))[0];
		mysqli_close($con);
		$data=shortLink("待审核的注销申请","学生服务系统",array($manager),"有新的注销申请等待审核，请及时处理！");
		echo "<script>alert('注销申请成功！工作人员会在72小时内与你核实！')</script>";
		header("refresh:0;url=../my_shop.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('注销申请失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../my_shop.php");
	}

?>