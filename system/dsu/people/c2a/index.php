<?php
$con=mysqli_connect("localhost","root","","test");
require("csv_controller.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$array=csv_to_array("../upload/1533650010.csv","gbk");
	print_r($array);
$row=get_array_row(8,$array);
for($j=0;$j<$row;$j++){
	$arr=$array[$j];
	$name=$arr["name"];
	$sexual=$arr["sexual"];
	$sn=$arr["sn"];
	$college=$arr["college"];
	$class=$arr["class"];
	$dep=$arr["dep"];
	$level=$arr["level"];
	$job=$arr["job"];
	
	$sql="insert into user (name,sex,xuehao,college,banji,dep,zhibie,zhiwu) values ('$name','$sexual','$sn','$college','$class','$dep','$level','$job');";
	$i=1;
	$result=mysqli_query($con,$sql);
	if($result){
		$i++;
	}
}
	echo $i;
?>
</body>
</html>
