<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动开启/关闭</title>
<?php
require("core_auth.php");
	if(isset($_GET["actid"])){
		$actid=base64_decode(xss($_GET["actid"]));
	}else{
		$actid="";
	}
	$statecheck = mysqli_fetch_array(mysqli_query($con,"select state from stu_codesub where actid='$actid';"));
	$state = $statecheck[0];
	if($state=="on"){
		$sql="update stu_codesub set state='off' where actid='$actid';";
		//删除缓存码
		$sqll="delete from stu_xfsign where actid='$actid';";
		//echo $sqll;
		$notice="活动已关闭";
	}elseif($state=="off"){
		$sql="update stu_codesub set state='on' where actid='$actid';";
		$notice="活动已开启";
	}
  	mysqli_query($con,$sql);
  	mysqli_query($con,$sqll);
	mysqli_close($con);	
			

	?>
</head>
<body>
	
	<script>alert('<?php echo $notice; ?>');
	</script>
<?php
header("refresh:0;url=../qr_record.php");
?>
</body>
</html>