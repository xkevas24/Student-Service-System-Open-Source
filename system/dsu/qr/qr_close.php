<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动开启/关闭</title>
<?php
	session_start();
	if(isset($_GET["actcode"])){
		$actid=$_GET["actcode"];
	}else{
		$actid="";
	}
		
			$servername = "192.168.103.61"; 
			$db_username = "root"; 
			$db_password = "*studb_2471"; 
			$dbname = "stu";
			$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
			$orgname=$_SESSION["orgname"];

			$statecheck = mysqli_fetch_array(mysqli_query($con,"select state from stu_codesub where actid='$actid';"));
			$state = $statecheck[0];
			if($state=="on"){
				$sql="update stu_codesub set state='off' where actid='$actid';";
				$notice="活动已关闭";
			}elseif($state=="off"){
				$sql="update stu_codesub set state='on' where actid='$actid';";
				$notice="活动已开启";
			}		
	
  			mysqli_query($con,$sql);
			mysqli_close($con);	
			

	?>
</head>
<body>
	
	<script>alert('<?php echo $notice; ?>');window.location.href = document.referrer;</script>

</body>
</html>