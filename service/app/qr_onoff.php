<?php
include "core_mysql.php";
$actid=$_GET["actid"];
$sql="select state from stu_codesub where actid='$actid';";
$state=mysqli_fetch_row(mysqli_query($con,$sql))[0];
mysqli_close($con);
echo $state;


?>