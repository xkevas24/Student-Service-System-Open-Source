<?php
require("core_mysql.php");
include("functions.php");
$actid=base64_decode(xss($_GET["actid"]));
$sql="select xh from stu_codesign where actid='$actid' GROUP BY xh HAVING count(xh) = 1;";
$result=mysqli_query($con,$sql);
$i=0;
while($row=mysqli_fetch_row($result)){
	$i++;
	echo $row[0]."@";
}
mysqli_close($con);
?>