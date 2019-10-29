<?php
require("mysqli.php");
$con=con("stu");
$xh=explode('@', $_POST["xh"]);
$count=count($xh);
$j=0;

for($i=0;$i<$count;$i++){
	//echo $i.":".$xh[$i]."<br>";
	$sql="delete from stu_sucache where xh='$xh[$i]';";
	$result=mysqli_query($con,$sql);
	if($result){
		$j++;
	}else{
		echo "失败！学号：$xh[$i]<br>";
	}
}
mysqli_close($con);
echo "共：$j 条成功！请等待跳转...";
header("refresh:5;../output.php");
//$sql="delete from stu_sucache where id='$id';";
//$result=mysqli_query($con,$sql);

?>