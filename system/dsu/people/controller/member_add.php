<?php
session_start();
$org=$_SESSION["orgname"];
	$xm=$_POST["xm"];
	$sex=$_POST["sex"];
	$xh=$_POST["xh"];
	$dep=$_POST["dep"];
	$job=$_POST["job"];
	$position=$_POST["position"];

if(isset($_GET["id"])){
	$id=$_GET["id"];
}
require("mysqli.php");
$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
		$sql="select max(id) from stu_sucache;";
		$result=mysqli_query($con,$sql);
		$max_id=mysqli_fetch_row($result);
		$id=$max_id[0]+1;

$in_sql="insert into stu_sucache (id,xm,sex,dep,xh,org,state,job,ps,bantil) values ('$id','$xm','$sex','$dep','$xh','$org','正常','$job','$position','0');";
$result=mysqli_query($con,$in_sql);
if($result){
	echo "<script>alert('添加成功！')</script>";
	header("refresh:0;url=../member_add.php");
}else{
	echo "<script>alert('添加失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $in_sql;
	header("refresh:70;url=../member_add.php");
}
mysqli_close($con);
?>