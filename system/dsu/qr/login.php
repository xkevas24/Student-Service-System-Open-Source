<?php
$servername = "192.168.103.61"; 
$db_username = "root"; 
$db_password = "*studb_2471"; 
$dbname = "stu";
$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
$sql = "select id from stu_codeactive where name='许潇' and auth='active';";
		$check = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($check);

		if($check){
			header("refresh:0;url=login_success.php");
			mysqli_close($con);
		}else{
			echo $sql;
			echo "没有激活";
			header("refresh:5");
			mysqli_close($con);
		}

?>