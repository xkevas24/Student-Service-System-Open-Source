<?php
require("core_auth.php");
$menu=2;
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
if($iden<>"yes" and $suauth<>1){
	mysqli_close($con);
	header("refresh:0;url=../stu_list.php");
	exit();
}
//获取签到活动信息
if(isset($_GET["actid"])){
	$actid=xss($_GET["actid"]);
}else{
	mysqli_close($con);
	echo "<script>alert('活动编号异常')</script>";
	header("refresh:0;url=../qr_record.php");
	exit();
}
$sign_sub=mysqli_query($con,"select * from stu_codesub where host='$orgname' and actid='$actid';");
$sign_info=mysqli_fetch_row($sign_sub);
if($sign_info[0]==""){
	mysqli_close($con);
	echo "<script>alert('你无权查看改内容')</script>";
	header("refresh:0;url=../qr_record.php");
	exit();
}

if(isset($_POST["name"]) && $_POST["name"]<>""){
	$name=xss($_POST["name"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
if(isset($_POST["hostdate"]) && $_POST["hostdate"]<>""){
	$hostdate=xss($_POST["hostdate"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
if(isset($_POST["hostorg"]) && $_POST["hostorg"]<>""){
	$hostorg=xss($_POST["hostorg"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
if(isset($_POST["activity_value"]) && $_POST["activity_value"]<>""){
	$activity_value=xss($_POST["activity_value"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
if(isset($_POST["activity_block"]) && $_POST["activity_block"]<>""){
	$activity_block=xss($_POST["activity_block"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
if(isset($_POST["bz"]) && $_POST["bz"]<>""){
	$bz=xss($_POST["bz"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段缺失！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
$eid=mysqli_fetch_row(mysqli_query($con,"select max(eid) from stu_erkeku;"))[0]+1;
$sql="insert into stu_erkeku (eid,name,hostdate,hostorg,activity_value,activity_block,bz,status,actid,upsn) values ('$eid','$name','$hostdate','$hostorg','$activity_value','$activity_block','$bz','审核中','$actid','$sn');";
$do=mysqli_query($con,$sql);
if($do){
	$shenhe_sql="select xh from stu_sucache where org='院团委' and dep='科创中心' and job='干部' and state='正常';";
	$shenhe_result=mysqli_query($con,$shenhe_sql);
	$shrsn=array();
	while($shr=mysqli_fetch_row($shenhe_result)){
		array_push($shrsn,$shr[0]);
	}
	$data=shortLink("待处理的第二课堂申请","学生服务系统",$shrsn,"有新的第二课堂卡券申请，请及时登录学生服务系统进行审核操作！");
	mysqli_close($con);
	$data=shortLink("第二课堂凭证申请提交成功","校团委科创中心",array($sn),"您提交的".$name."第二课堂凭证申请已经提交成功。工作人员会进行信息核实，申请通过后卡券会立即发放并通知您。");
	echo "<script>alert('提交成功！卡券会在审核通过后发放！')</script>";
	header("refresh:0;url=../qr_record.php");
	exit();
}else{
	mysqli_close($con);
	echo "<script>alert('提交失败！')</script>";
	header("refresh:0;url=../qr_card_provide.php");
}
?>