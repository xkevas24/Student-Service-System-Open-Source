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
<title>成员激活</title>
<?php
session_start();
$code=$_GET["code"];
$time=$_GET["time"];
$org=$_GET["org"];
switch($org){
	case "zlw":
		$orgname="学生会自律管理委员会";
		$actname="自律委面对面激活";
		break;
	case "qx":
		$orgname="学生会青年志愿者协会";
		$actname="青协面对面激活";
		break;
	case "hgh":
		$orgname="学生会伙食管理委员会";
		$actname="伙管面对面激活";
		break;
	case "sl":
		$orgname="学生会学生社团联合会";
		$actname="社联面对面激活";
		break;
	case "yst":
		$orgname="学生会大学生艺术团";
		$actname="艺术团面对面激活";
		break;
	case "ytw":
		$orgname="院团委";
		$actname="院团委面对面激活";
		break;
	case "msc":
		$orgname="学生会秘书处";
		$actname="秘书处面对面激活";
		break;
	case "fy_rwxy":
		$orgname="人文学院";
		$actname="人文学院面对面激活";
		break;
	case "fy_fxy":
		$orgname="法学院";
		$actname="法学院面对面激活";
		break;
	case "fy_glxy":
		$orgname="管理学院";
		$actname="管理学院面对面激活";
		break;
	case "fy_ysxy":
		$orgname="艺术学院";
		$actname="艺术学院面对面激活";
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
		$notice="激活操作已过期";
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
			$notice="激活已关闭";
			mysqli_close($con);
		}else{
		$sql = "select id from stu_sucache where xh='$sn' and org='$orgname';";
		$check = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($check);
		if($check){
			mysqli_close($con);
			$action="success";
			$notice="你已激活成功，请勿反复激活";
		}else{		
		$idcheck = mysqli_fetch_array(mysqli_query($con,"select max(id) from stu_sucache;"));
		$id = $idcheck[0];
		$id = $id + 1;

		$sql = "insert into stu_sucache(id,xm,sex,dep,xh,org,state,job) values($id,'$name','$sex','暂未填写','$sn','$orgname','正常','干事');";
		mysqli_query($con,$sql);
		mysqli_close($con);
		$action="success";
		$notice="激活成功";
		}
		
		}
	}

?>
</head>

<body>
<?php if($action=="success"){ 
	//header("refresh:5;url=../../../service/");
	?>
<div id="tipstitle">
<img src="0.png"><br><div style="height:30px;"></div>
激活成功
<br>
<div style=" font-size:12px;">
<?php echo $actname."-"; echo $notice; ?></div>
</div>
<?php } ?>
<?php if($action=="fail"){ ?>
<div id="tipstitle">
<img src="1.png"><br>
<div style="height:30px;"></div>
激活失败
<br>
<div style="font-size:12px;">
<?php echo $notice; ?></div>
</div>
<?php } }?>
</body>
</html>