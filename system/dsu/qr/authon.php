<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="云南大学滇池学院网络服务系统">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<style type="text/css">
html,body{background:#393D49; height: 100%;}
#tipstitle{ color: #fff; line-height: 40px; text-align: center; font-size: 24px; 
 position:fixed;  width: 280px; top: 30%; left:50%; margin-left: -140px;}
</style>
<title>管理员授权</title>
<?php
session_start();
include "key.php";
$code=$_GET["code"];
$time=$_GET["time"];
$org=$_GET["org"];
switch($org){
	case "zlw":
		$orgname="学生会自律管理委员会";
		$actname="自律委授权";
		break;
	case "qx":
		$orgname="学生会青年志愿者协会";
		$actname="青协授权";
		break;
	case "hgh":
		$orgname="学生会伙食管理委员会";
		$actname="伙管授权";
		break;
	case "sl":
		$orgname="学生会学生社团联合会";
		$actname="社联授权";
		break;
	case "yst":
		$orgname="学生会大学生艺术团";
		$actname="艺术团授权";
		break;
	case "ytw":
		$orgname="院团委";
		$actname="团委授权";
		break;
	case "msc":
		$orgname="学生会秘书处";
		$actname="秘书处授权";
		break;
	case "fy_rwxy":
		$orgname="人文学院";
		$actname="人文学院授权";
		break;
	case "fy_fxy":
		$orgname="法学院";
		$actname="法学院授权";
		break;
	case "fy_glxy":
		$orgname="管理学院";
		$actname="管理学院授权";
		break;
	case "fy_ysxy":
		$orgname="艺术学院";
		$actname="艺术学院授权";
		break;
}
if($_SESSION==null){
	$action="fail";
	$notice="没有登录信息";
}else{
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
	
	$deta=time()-$time;
	
	if($deta>60){
		$action="fail";
		$notice="授权操作已过期";
		}
	else{
		$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
		
		$stateget = mysqli_fetch_array(mysqli_query($con,"select state from stu_codesub where actid='$act';"));
		$state = $stateget[0];
		if($state=="off"){
			$action="fail";
			$notice="授权已关闭";
			mysqli_close($con);
		}else{
		$authget = mysqli_fetch_array(mysqli_query($con,"select job from stu_sucache where xh='$sn' and org='$orgname';"));
		$authname=$authget[0];
		if($authname=="干部"){
			mysqli_close($con);
			$action="success";
			$notice="你已授权成功，请勿反复获取权限";
		}else{		
		$sql = "update stu_sucache set job='干部' where xh='$sn' and org='$orgname';";
		mysqli_query($con,$sql);
		mysqli_close($con);
		$action="success";
		$notice="授权成功";
		}
		
		}
	}

?>
</head>

<body>
<?php if($action=="success"){
 //header("refresh:5;url=../$org/index.php");
	?>
<div id="tipstitle">
<img src="0.png"><br><div style="height:30px;"></div>
授权成功
<br>
<div style=" font-size:12px;">
<?php echo $actname."-"; echo $notice; ?></div>
</div>
<?php } ?>
<?php if($action=="fail"){ ?>
<div id="tipstitle">
<img src="1.png"><br>
<div style="height:30px;"></div>
授权失败
<br>
<div style="font-size:12px;">
<?php echo $notice; ?></div>
</div>
<?php } }?>
</body>
</html>