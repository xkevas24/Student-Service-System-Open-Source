<?php
session_start();
if($_SESSION==null){
		header("refresh:0;url=errorpage/unlog.php");
	exit();
}else{
		$svname=$_SERVER['SERVER_NAME'];
		$ssid=($_SESSION);
		$array=json_decode(json_encode($ssid),true);
		$wxid=($array["WeixinOpenid"]);
		$user=($array["user"]);
		$basic=($user["basic"]);
	//读取usrcache数据并保存至数据库
	$name=$user["xm"];
	$sn=$user["stuno"];
	$fy=$basic["fy"];
	$class=$basic["bjmc"];
	$sex=$basic["xb"];
	$sfz=$user["sfzh"];
	$date=date("Y-m-d-h:ia");
}
require "core_mysql.php";
//用户信息数组
include("functions.php");
?>