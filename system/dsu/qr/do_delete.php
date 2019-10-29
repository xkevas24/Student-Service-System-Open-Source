<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动删除</title>
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
			$delete = mysqli_fetch_array(mysqli_query($con,"delete from stu_codesub where actid='$actid';"));
			mysqli_close($con);	
			$notice="活动删除成功！";
?>
</head>
<body>
	
	<script>alert('<?php echo $notice; ?>');history.go(-1);</script>

</body>
</html>