<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>动态关注</title>
<?php
require("core_auth.php");	
if(isset($_GET["did"])){
	$oid=$_GET["did"];
	switch($oid){
	case 11:
		$lid=1;
		$orgname='院团委';
		$depname='新媒体中心';
		$hint="校级团委组织";
		break;
	case 12:
		$lid=2;
		$orgname='院团委';
		$depname='办公室';
		$hint="校级团委组织";
		break;
	case 13:
		$lid=3;
		$orgname='院团委';
		$depname='宣传部';
		$hint="校级团委组织";
		break;
	case 14:
		$lid=4;
		$orgname='院团委';
		$depname='科创中心';
		$hint="校级团委组织";
		break;
	case 15:
		$lid=5;
		$orgname='院团委';
		$depname='广播台';
		$hint="校级团委组织";
		break;
	case 16:
		$lid=6;
		$orgname='院团委';
		$depname='国旗班';
		$hint="校级团委组织";
		break;
	case 17:
		$lid=7;
		$orgname='院团委';
		$depname='组织部';
		$hint="校级团委组织";
		break;
	case 18:
		$lid=8;
		$orgname='院团委';
		$depname='纪检部';
		$hint="校级团委组织";
		break;
	case 19:
		$lid=9;
		$orgname='院团委';
		$depname='青年团校';
		$hint="校级团委组织";
		break;
	
}
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../stu_list.php");
	exit();
}
$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_subscribes;"))[0]+1;
$sql="insert into stu_subscribes (id,oid,sn,status) values ('$newid','$oid','$sn','1');";
$do=mysqli_query($con,$sql);
mysqli_close($con);
if($do){
	echo "<script>alert('关注成功！')</script>";
	$data=shortLink("关注成功","学生服务系统",array($sn),"您已成功订阅校团委".$depname."的动态推送，可在原页面点击取关。");
	header("refresh:0;url=../tw_main.php?did=".$oid);
	exit();
}else{
	echo "<script>alert('关注失败！系统错误！')</script>";
	header("refresh:0;url=../tw_main.php?did=".$oid);
	exit();
}
?>
</head>

<body>
</body>
</html>