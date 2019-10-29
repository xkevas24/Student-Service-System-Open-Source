<?php
require("core_auth.php");

if(isset($_POST["jsbh"]) && $_POST["jsbh"]<>""){
	$jsbh=xss($_POST["jsbh"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../jiaoshi_apply.php");
}

if(isset($_POST["syrq"]) && $_POST["syrq"]<>""){
	$syrq=xss($_POST["syrq"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../jiaoshi_apply.php");
}

if(isset($_POST["sysj"]) && $_POST["sysj"]<>""){
	$sysj=xss($_POST["sysj"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../jiaoshi_apply.php");
}

if(isset($_POST["yongtu"]) && $_POST["yongtu"]<>""){
	$yongtu=xss($_POST["yongtu"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../jiaoshi_apply.php");
}

if(isset($_POST["phone"]) && $_POST["phone"]<>""){
	$phone=xss($_POST["phone"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../jiaoshi_apply.php");
}

	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_jiaoshi_apply;"))[0]+1;
	$add_sql="insert into stu_jiaoshi_apply (id,jsbh,syrq,sysj,phone,sqrsn,sqrname,yongtu) values ('$class_id','$jsbh','$syrq','$sysj','$phone','$sn','$name','$yongtu');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		$data=shortLink("教室申请提交成功","学生会学生社团联合会",array($sn),"您提交的教室申请正在处理，审核通过后会通知您。");
		$shenhe_sql="select sn from stu_jiaoshi_manager;";
		$shenhe_result=mysqli_query($con,$shenhe_sql);
		$shrsn=array();
		while($shr=mysqli_fetch_row($shenhe_result)){
			array_push($shrsn,$shr[0]);
		}
		$data=shortLink("新的教室申请","学生会学生社团联合会",$shrsn,"有新的教室申请，请尽快登录学生服务系统操作。");
		mysqli_close($con);
		echo "<script>alert('申请成功！请耐心等待审核！')</script>";
		header("refresh:0;url=../stu_main.php?oid=23");
	}else{
		mysqli_close($con);
		echo "<script>alert('申请失败！！')</script>";
		//echo $add_sql;
		header("refresh:0;url=../stu_main.php?oid=23");
	}

?>