<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>审核不通过</title>
<?php
require("core_auth.php");
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
if($iden<>"yes" and $suauth<>"1" and $orgname<>"学生会学生社团联合会"){
	mysqli_close($con);
	header("refresh:0;url=../stu_main.php?oid=23");
	exit();
}

if(isset($_GET["id"])){
	$id=xss($_GET["id"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../jiaoshi_view.php");
	exit();
}

	
if(isset($_GET["sqrsn"])){
	$sqrsn=xss($_GET["sqrsn"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../jiaoshi_view.php");
	exit();
}
//拉取本人信息，谁操作，谁负责
$me=mysqli_fetch_row(mysqli_query($con,"select phone from stu_jiaoshi_manager where sn='$sn';"))[0];
//拉取申请信息
$apply=mysqli_fetch_row(mysqli_query($con,"select * from stu_jiaoshi_apply where id='$id';"));
//更新审核状态
$sql="update stu_jiaoshi_apply set status='未通过' where id='$id';";
$do=mysqli_query($con,$sql);
mysqli_close($con);
if($do){
	echo "<script>alert('操作成功！')</script>";
	//审核通过推送
	$data=shortLink("教室申请不通过","学生会学生社团联合会",array($apply[4]),"很抱歉，您提交的".$apply[1]."教室未能得到通过。如有疑问请联系".$name.":".$me);
	header("refresh:0;url=../jiaoshi_view.php");
	exit();
}else{
	echo "<script>alert('操作失败！系统错误！')</script>";
	header("refresh:0;url=../jiaoshi_view.php");
	exit();
}
?>
</head>

<body>
</body>
</html>