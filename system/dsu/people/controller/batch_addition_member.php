<?php
ini_set('display_errors',1);            //错误信息
ini_set('display_startup_errors',1);    //php启动错误信息
error_reporting(-1);                    //打印出所有的 错误信息
//require("mysqli.php");
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
	$ext=strrchr($_FILES["file"]["name"], '.');
	if($ext<>".csv"){
		 echo "错误: 请上传CSV格式的文件！";
		exit();
	}else{
		$time=time();
		$fn="../upload/" . $time.$ext;
      move_uploaded_file($_FILES["file"]["tmp_name"],$fn);
		//$con=con("stu");
		//$id=$_GET["id"];
		//$sql="insert into stu_file (id,file) values ('$id','$fn')";
		//$result=mysqli_query($con,$sql);
		//mysqli_close($con);
	}

  }
?>