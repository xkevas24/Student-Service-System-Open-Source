<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>readcode</title>
</head>

<body>
	<?php
	$servername = "192.168.103.61"; 
	$db_username = "root"; 
	$db_password = "*studb_2471"; 
	$dbname = "stu";
	$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
	$orgname=$_SESSION["orgname"];
		$codesql = "select * from stu_codecache where id='1';";
		$result0 = $con->query($codesql);
		$row=$result0->fetch_assoc();	
		mysqli_close($con);
		$dtcode=$row["code"];
	?>
</body>
</html>