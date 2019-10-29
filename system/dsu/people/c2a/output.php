<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
$con=mysqli_connect("localhost","root","","test");
$sql="select * from user where id='38';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
?>
</head>

<body>
<?php 
print_r($row);	
?>
</body>
</html>