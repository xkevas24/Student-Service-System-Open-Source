<?php
require("core_auth.php");

if(isset($_POST["stuno"]) && $_POST["stuno"]<>""){
	$stuno=xss($_POST["stuno"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段学号缺失！')</script>";
	header("refresh:0;url=../my_shop.php");
}

if(isset($_POST["phone"]) && $_POST["phone"]<>""){
	$phone=xss($_POST["phone"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段手机缺失！')</script>";
	header("refresh:0;url=../my_shop.php");
}

if(isset($_POST["wxid"]) && $_POST["wxid"]<>""){
	$wxid=xss($_POST["wxid"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段微信缺失！')</script>";
	header("refresh:0;url=../my_shop.php");
}
	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_ishop_exchange;"))[0]+1;
	$add_sql="insert into stu_ishop_exchange (id,shopmaster,stuno,phone,wxid) values ('$newid','$sn','$stuno','$phone','$wxid');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select stuno from stu_ishop_manager where id='1';"))[0];
		mysqli_close($con);
		$data=shortLink("待审核的转让申请","学生服务系统",array($manager),"有新的转让申请等待审核，请及时处理！");
		echo "<script>alert('注销申请成功！工作人员会在72小时内与你核实！')</script>";
		header("refresh:0;url=../my_shop.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('注销申请失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../my_shop.php");
	}

?>