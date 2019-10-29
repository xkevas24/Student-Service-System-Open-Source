<?php
//先通过数据库获取当前access_token
require "../../service/app/core_mysql.php";
$sql="select access_token,expires from access_token where id='1';";
$row=mysqli_fetch_row(mysqli_query($con,$sql));
$time=time();

if($time<$row[1]){
	$access_token=$row[0]; 
}else{
	$access_token=file_get_contents("获取token的URL");
	
	$expires=$time+1800;
	$sql="update access_token set access_token='$access_token',expires='$expires' where id='1';";
	mysqli_query($con,$sql);
}

$sql="select js_api,expires from js_api where id='1';";
$row=mysqli_fetch_row(mysqli_query($con,$sql));
if($time<$row[1]){
	$json=$row[0]; 
}else{
	$url='https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='.$access_token.'&type=jsapi';
	$json=file_get_contents($url);
	$expires=$time+1800;
	$sql="update js_api set js_api='$json',expires='$expires' where id='1';";
	mysqli_query($con,$sql);
	//echo $json;
}
mysqli_close($con);
$json=json_decode($json,true);
echo $json["ticket"];

?>