<?php
require("core_auth.php");
if(!isset($_POST["info"])){
	echo "-1";
	exit();
}
if(!isset($_POST["phone"])){
	echo "-1";
	exit();
}
if(!isset($_POST["phone"])){
	echo "-1";
	exit();
}
$info=xss($_POST["info"]);
$phone=xss($_POST["phone"]);
$email=xss($_POST["email"]);
$sql="insert into stu_kf (id,stuno,inf,org,reply,status,ifhide,phone,email) values (null,'$sn','$info','','','0','true','$phone','$email');";
$do=mysqli_query($con,$sql);
if($do){
	echo "1";
	weixin("用户反馈","学生服务系统",array("20162153014","20172123018"),$info,"");
	mysqli_close($con);
}else{
	echo "-1";
}
?>