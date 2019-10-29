<?php 
if(isset($_GET["cc"])){
	$notice="success";
	$cc=base64_decode($_GET["cc"]);
	//$cc=$_GET["cc"];
}else{
	$notice="fail";
	$cc="";
}
?>
<!doctype html>
<?php $nowtime=time(); ?>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="云南大学滇池学院网络服务系统">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<title>本地验证</title>
<style type="text/css">
html,body{background:#393D49; height: 100%;}
#tipstitle{ color: #fff; line-height: 40px; text-align: center; font-size: 24px; 
 position:fixed;  width: 280px; top: 30%; left:50%; margin-left: -140px;}
</style>
</head>

<body>
<?php if($notice=="success"){ ?>
<div id="tipstitle">
<img src="0.png"><br><div style="height:30px;"></div>
验证成功！
<br>
<div style=" font-size:16px;">
<?php echo $cc; ?>
</div>
</div>
<?php }else{ ?>
<div id="tipstitle">
<img src="1.png"><br><div style="height:30px;"></div>
验证失败！
<br>
<div style=" font-size:16px;">
<?php echo $cc; ?>
</div>
</div>
<?php } ?>	
</body>
</html>