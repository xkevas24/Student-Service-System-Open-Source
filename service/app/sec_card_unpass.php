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
if($iden<>"yes" and $suauth<>"1" and $orgname<>"院团委"){
	mysqli_close($con);
	header("refresh:0;url=../tw_main.php?did=14");
	exit();
}

if(isset($_GET["eid"])){
	$eid=xss($_GET["eid"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}
//拉取详情
$sec_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_erkeku where eid='$eid';"));
$sec_name=$sec_info[1];
$sec_upsn=$sec_info[10];
$sec_org=$sec_info[3];
$sec_value=$sec_info[4];
$sec_block=$sec_info[5];
$sec_bz=$sec_info[6];
$today=date("Y年m月d日");
$edtm=date("Y年m月d日",strtotime("+1 year"));

//更新审核状态
$sql="update stu_erkeku set status='不通过' where eid='$eid';";
$do=mysqli_query($con,$sql);

if($do){
	echo "<script>alert('操作成功！')</script>";
	//审核通过推送
	$data=shortLink("第二课堂凭证申请失败","校团委科创中心",array($sec_upsn),"很抱歉，您提交的".$sec_name."第二课堂凭证申请未能得到通过！");
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}else{
	echo "<script>alert('操作失败！系统错误！')</script>";
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}
?>
</head>

<body>
</body>
</html>