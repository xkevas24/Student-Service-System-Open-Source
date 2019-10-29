<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>取消关注</title>
<?php
require("core_auth.php");	
if(isset($_GET["did"])){
	$oid=$_GET["did"];
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../stu_list.php");
	exit();
}
$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_subscribes;"))[0]+1;
$sql="delete from stu_subscribes where oid='$oid' and sn='$sn';";
$do=mysqli_query($con,$sql);
mysqli_close($con);
if($do){
	echo "<script>alert('取关成功！')</script>";
	header("refresh:0;url=../tw_main.php?did=".$oid);
	exit();
}else{
	echo "<script>alert('取关失败！系统错误！')</script>";
	header("refresh:0;url=../tw_main.php?did=".$oid);
	exit();
}
?>
</head>

<body>
</body>
</html>