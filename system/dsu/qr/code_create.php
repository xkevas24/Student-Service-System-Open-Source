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
<title>扫描结果</title>
	<?php
	session_start();
	$actname=$_POST["actname"];
if($actname==null){
	$action="fail";
	$notice="活动名称非法";
	}
		$hostdate=date("Ymd");
		$orgname="学生会自律管理委员会";
		$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
		$sql = "select actid from stu_codesub where actname='$actname' and hostdate='$hostdate' and host='$orgname';";
		$check = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($check);
		if($check){
			mysqli_close($con);
			$action="fail";
			$notice="该条目已存在";
		}else{
			$idcheck = mysqli_fetch_array(mysqli_query($con,"select max(actid) from stu_codesub;"));
			$id = $idcheck[0];
			$id = $id + 1;
			$sql = "insert into stu_codesub(actid,actname,host,hostdate) values($id,'$actname','$orgname','$hostdate');";
			$action="success";
			$notice="正在跳转二维码...";
			$url="http://wlfw.ynudcc.cn/topstu/system/dsu/qr/qrcode.php?actcode=".$id;
  			mysqli_query($con,$sql);
			mysqli_close($con);
		}
	
	?>
</head>

<body>
<?php if($action=="success"){ ?>
<div id="tipstitle">
<img src="../zlw/0.png"><br><div style="height:30px;"></div>
创建成功
<br>
<div style=" font-size:12px;">
<?php echo $notice; 
	header("refresh:5;url=$url");
	?></div>
</div>
<?php } ?>
<?php if($action=="fail"){ ?>
<div id="tipstitle">
<img src="../zlw/1.png"><br>
<div style="height:30px;"></div>
创建失败
<br>
<div style="font-size:12px;">
<?php echo $notice; ?></div>
</div>
<?php } ?>
</body>
</html>