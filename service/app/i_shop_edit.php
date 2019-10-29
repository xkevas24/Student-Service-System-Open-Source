<?php
require("core_auth.php");

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

	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_ishop_edit;"))[0]+1;
	$add_sql="insert into stu_ishop_edit (id,shoplogo,phone,wxid,shopintro,shopmaster) values ('$class_id','$basename','$phone','$wxid','$shopintro','$sn');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		//获取管理员学号
		$manager=mysqli_fetch_row(mysqli_query($con,"select stuno from stu_ishop_manager where id='1';"))[0];
		mysqli_close($con);
		$data=shortLink("待审核的变更申请","学生服务系统",array($manager),"有新的商铺变更申请等待审核，请尽快处理！");
		echo "<script>alert('申请成功！工作人员会在72小时内对你的申请进行审核！')</script>";
		header("refresh:0;url=../my_shop.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('申请失败！请重新申请！')</script>";
		header("refresh:0;url=../my_shop.php");
	}

?>