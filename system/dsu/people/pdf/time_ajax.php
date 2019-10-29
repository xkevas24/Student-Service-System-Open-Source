<?php
$id=$_GET["id"];
$con=mysqli_connect("192.168.103.61","root","*studb_2471","stu");
$sql="update stu_gongwen_status set ydsc=ydsc+1 where id='$id';";
$do=mysqli_query($con,$sql);
mysqli_close($con);
?>