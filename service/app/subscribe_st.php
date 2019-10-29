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
		case 61:
			$lid=1;
			$orgname='演讲与交际协会';
			$hint="校级学生社团";
			$logo="st_yx.jpg";
			break;
		case 62:
			$lid=2;
			$orgname='魔术协会';
			$hint="校级学生社团";
			$logo="st_ms.png";
			break;
		case 63:
			$lid=3;
			$orgname='TOP电脑社';
			$hint="校级学生社团";
			$logo="st_top.png";
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
	$data=shortLink("关注成功","学生服务系统",array($sn),"您已成功订阅".$orgname."的动态推送，可在原页面点击取关。");
	header("refresh:0;url=../st_main.php?did=".$oid);
	exit();
}else{
	echo "<script>alert('关注失败！系统错误！')</script>";
	header("refresh:0;url=../st_main.php?did=".$oid);
	exit();
}
?>
</head>

<body>
</body>
</html>