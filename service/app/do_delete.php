<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动删除</title>
<?php
	require("core_auth.php");
	if(isset($_GET["actcode"])){
		$actid=base64_decode(xss($_GET["actcode"]));
	}else{
		$actid="";
	}
	$delete = mysqli_fetch_array(mysqli_query($con,"update stu_codesub set host='学生服务系统' where actid='$actid';"));
	mysqli_close($con);	
	$notice="活动删除成功！";
?>
</head>
<body>
	<script>alert('<?php echo $notice; ?>');</script>
	<?php header("refresh:0;url=../qr_record.php"); ?>

</body>
</html>