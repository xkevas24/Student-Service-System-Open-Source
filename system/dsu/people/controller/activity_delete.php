<?php
session_start();
$ssid=($_SESSION);
$array=json_decode(json_encode($ssid),true);
$user=($array["user"]);
$sn=$user["stuno"];
$org=$_SESSION["orgname"];
require("mysqli.php");
$con=con("stu");
$auth="select id from stu_sucache where xh='$sn' and org='$org' and job='干部';";
$auth_row=mysqli_fetch_row(mysqli_query($con,$auth))[0];
if($auth_row<>""){
if(isset($_GET["id"])){
	$id=$_GET["id"];
}else{
	echo "<script>alert('339错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../../../stu/dashboard.php");
	exit();
}
$sql="delete from stu_article where id='$id' and org='$org';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('删除成功！')</script>";
	//echo $sql
	header("refresh:0;url=../activity_manage.php");
}else{
	echo "<script>alert('删除失败！')</script>";
	echo "400错误：<br>";
	echo $sql;
	header("refresh:70;url=../activity_manage.php");
}
mysqli_close($con);
}else{
	echo "<script>alert('301错误！你没有权限！')</script>";
	mysqli_close($con);
	header("refresh:70;url=../../../stu/dashboard.php");
	//echo $auth;
	//echo "<br>row:".$auth_row;
}

?>