<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>设置有效活动</title>
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
$sec_info=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"));
$eids=$sec_info[0];
$eid=$eid."@";
$eids=$eids.$eid;
//更新审核状态
$sql="update stu_erkeyx set eids='$eids' where id='1';";
$do=mysqli_query($con,$sql);

if($do){
	echo "<script>alert('操作成功！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../sec_lock.php");
	exit();
}else{
	echo "<script>alert('操作失败！系统错误！')</script>";
	header("refresh:0;url=../sec_lock.php");
	exit();
}
?>
</head>

<body>
</body>
</html>