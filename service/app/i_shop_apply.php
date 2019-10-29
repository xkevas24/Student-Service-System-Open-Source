<?php
require("core_auth.php");

if(isset($_POST["shopname"]) && $_POST["shopname"]<>""){
	$shopname=xss($_POST["shopname"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段shopname缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}

if(isset($_POST["shoptype"]) && $_POST["shoptype"]<>""){
	$shoptype=xss($_POST["shoptype"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段type缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}

if(isset($_POST["shopintro"]) && $_POST["shopintro"]<>""){
	$shopintro=xss($_POST["shopintro"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段intro缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}

if(isset($_POST["phone"]) && $_POST["phone"]<>""){
	$phone=xss($_POST["phone"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段phone缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}

if(isset($_POST["wxid"]) && $_POST["wxid"]<>""){
	$wxid=xss($_POST["wxid"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段wxid缺失！')</script>";
	header("refresh:0;url=../i_shop_apply.php");
}
$path = "/wwwroot/nfsfile/student/images/";
$filedir=file_do($path,$_FILES["shoplogo"]["name"],$_FILES["shoplogo"]["tmp_name"]);
$basename="../nfsfile/student/images/".basename($filedir);
switch($shoptype){
	case "a":
		$shoptype="综合服务型";
		break;
}
	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_ishop;"))[0]+1;
	$add_sql="insert into stu_ishop (id,shopname,shoplogo,shoptype,phone,wxid,shopintro,if_iphoto,shopmaster,shopstatus) values ('$class_id','$shopname','$basename','$shoptype','$phone','$wxid','$shopintro','yes','$sn','待审核');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select stuno from stu_ishop_manager where id='1';"))[0];
		mysqli_close($con);
		$data=shortLink("待审核的商铺申请","学生服务系统",array($manager),"有新的商铺申请等待审核");
		echo "<script>alert('申请成功！工作人员会在48小时内对你的申请进行审核！')</script>";
		header("refresh:0;url=../isquare.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('申请失败！请重新申请！')</script>";
		header("refresh:0;url=../i_shop_apply.php");
	}

?>