<?php
session_start();
if($_SESSION==null){
		header("refresh:0;url=../errorpage/unlog.php");
}else{
		$svname=$_SERVER['SERVER_NAME'];
		$ssid=($_SESSION);
		$array=json_decode(json_encode($ssid),true);
		$wxid=($array["WeixinOpenid"]);
		$user=($array["user"]);
		$basic=($user["basic"]);

	//读取usrcache数据并保存至数据库
	$name=$user["xm"];
	$sn=$user["stuno"];
	$fy=$basic["fy"];
	$class=$basic["bjmc"];
	$sex=$basic["xb"];
	$sfz=$user["sfzh"];
	$date=date("Y-m-d-h:ia");
		$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
		$sql = "select id from stu_usrcache where name='$name' and sn='$sn';";
		$check = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($check);
		if($check){
			//mysqli_close($con);
		}else{
			$idcheck = mysqli_fetch_array(mysqli_query($con,"select max(id) from stu_usrcache;"));
			$id = $idcheck[0];
			$id = $id + 1;
			$sql = "insert into stu_usrcache(id,name,sn,fy,class,sex,sfz) values($id,'$name','$sn','$fy','$class','$sex','$sfz');";
  			mysqli_query($con,$sql);
				//mysqli_close($con);
		}
	$orgname=$_SESSION["orgname"];
	$auth_check="select id from stu_sucache where xh='$sn' and org='$orgname' and job='干部' and state='正常';";
	$auth=mysqli_fetch_row(mysqli_query($con,$auth_check))[0];
	if($auth<>""){
		$au="-权限正常";
	}else{
		$au="-没有权限！！";
		header("refresh:0;url=../../stu/dashboard.php");
		exit();
	}
}

?>