<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>动态关注</title>
<?php
require("core_auth.php");	
if(isset($_GET["oid"])){
	$oid=$_GET["oid"];
	switch($oid){
	case 21:
		$lid=2;
		$orgname='学生会青年志愿者协会';
		$hint="校级学生组织";
		$logo="qx.jpg";
		break;
	case 22:
		$lid=3;
		$orgname='学生会自律管理委员会';
		$hint="校级学生组织";
		$logo="zlw.png";
		break;
	case 23:
		$lid=4;
		$orgname='学生会学生社团联合会';
		$hint="校级学生组织";
		$logo="sl.png";
		break;
	case 24:
		$lid=5;
		$orgname='学生会伙食管理委员会';
		$hint="校级学生组织";
		$logo="hgh.JPG";
		break;
	case 25:
		$lid=6;
		$orgname='学生会秘书处';
		$hint="校级学生组织";
		$logo="msc.png";
		break;
	case 26:
		$lid=12;
		$orgname='学生会大学生艺术团';
		$hint="校级学生组织";
		$logo="yst.jpg";
		break;
	case 31:
		$lid=8;
		$orgname='人文学院';
		$hint="院级学生组织";
		$logo="rwxy.jpg";
		break;
	case 32:
		$lid=9;
		$orgname='法学院';
		$hint="院级学生组织";
		$logo="fxy.jpg";
		break;
	case 33:
		$lid=10;
		$orgname='管理学院';
		$hint="院级学生组织";
		$logo="glxy.jpg";
		break;
	case 34:
		$lid=11;
		$orgname='艺术学院';
		$hint="院级学生组织";
		$logo="ysxy.jpg";
		break;
	case 35:
		$lid=13;
		$orgname='经济学院';
		$hint="院级学生组织";
		$logo="sss.jpg";
		break;
	case 81:
		$lid=14;
		$orgname='学生服务系统';
		$hint="学生服务系统官方";
		$logo="sss.jpg";
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
	//订阅成功推送
	$data=shortLink("关注成功","学生服务系统",array($sn),"您已成功订阅".$orgname."的动态推送，可在原页面点击取关。");
	header("refresh:0;url=../stu_main.php?oid=".$oid);
	exit();
}else{
	echo "<script>alert('关注失败！系统错误！')</script>";
	header("refresh:0;url=../stu_main.php?oid=".$oid);
	exit();
}
?>
</head>

<body>
</body>
</html>