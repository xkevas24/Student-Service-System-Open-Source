<?php
$actid=$_GET["actid"];
$con = mysqli_connect("192.168.103.61", "root", "*studb_2471","stu"); 
$sql="select xh from stu_codesign where actid='$actid' GROUP BY xh HAVING count(xh) = 1;";
$result=mysqli_query($con,$sql);
$i=0;
while($row=mysqli_fetch_row($result)){
	$i++;
	echo $row[0]."@";
}
mysqli_close($con);
?>