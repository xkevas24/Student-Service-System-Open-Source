<?php
ini_set('display_errors',1);            //错误信息
ini_set('display_startup_errors',1);    //php启动错误信息
error_reporting(-1);                    //打印出所有的 错误信息
require("csv_controller.php");
require("mysqli.php");
$id=$_GET["id"];
$con=con("stu");
$get_fn="select url from stu_uploadcache where id='$id';";
$fn=mysqli_fetch_row(mysqli_query($con,$get_fn))[0];
	$array=csv_to_array($fn,"gbk");
		$row=get_array_row(8,$array);
		for($j=0;$j<$row;$j++){
			$arr=$array[$j];
			$xm=anyto_utf8($arr["xm"],"GBK");
			$sex=anyto_utf8($arr["sex"],"GBK");
			$dep=anyto_utf8($arr["dep"],"GBK");
			$xh=anyto_utf8($arr["xh"],"GBK");
			$org=anyto_utf8($arr["org"],"GBK");
			$state=anyto_utf8($arr["state"],"GBK");
			$job=anyto_utf8($arr["job"],"GBK");
			$position=anyto_utf8($arr["position"],"GBK");
			
			$new_id=table_new_id("stu","stu_sucache");
			$sql="insert into stu_sucache (id,xm,sex,dep,xh,org,state,job,ps) values ('$new_id','$xm','$sex','$dep','$xh','$org','$state','$job','$position');";
			$result=mysqli_query($con,$sql);
			if($result){
				$token=1;
			}else{
				$token=0;
			}
		}
mysqli_close($con);
switch($token){
	case 0:
		echo "<script>alert('导入失败！错误信息：".$sql."')</script>";
		break;
	case 1:
		echo "<script>alert('导入成功！')</script";
		break;
}



header("refresh:0;url=../batch_addition_member.php");
?>