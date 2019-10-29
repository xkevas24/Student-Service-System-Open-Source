<?php
require("core_auth.php");

if(isset($_POST["somc"]) && $_POST["somc"]<>""){
	$spmc=xss($_POST["somc"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段商品名称缺失！')</script>";
	header("refresh:0;url=../item_add.php");
}

if(isset($_POST["spdj"]) && $_POST["spdj"]<>""){
	$spdj=xss($_POST["spdj"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段定价缺失！')</script>";
	header("refresh:0;url=../item_add.php");
}

if(isset($_POST["spxq"]) && $_POST["spxq"]<>""){
	$spxq=$_POST["spxq"];
}else{
	mysqli_close($con);
	echo "<script>alert('字段详情缺失！')</script>";
	header("refresh:0;url=../item_add.php");
}

$path = "/wwwroot/nfsfile/student/images/";

$filedir=file_do($path,$_FILES["spimg"]["name"],$_FILES["spimg"]["tmp_name"]);
$basename="../nfsfile/student/images/".basename($filedir);
sleep(1);
$filedir2=file_do($path,$_FILES["big_img"]["name"],$_FILES["big_img"]["tmp_name"]);
$basename2="../nfsfile/student/images/".basename($filedir2);

	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_items;"))[0]+1;
	$add_sql="insert into stu_items (id,spmc,spmaster,spimg,spdj,spxq,status,big_img) values ('$class_id','$spmc','$sn','$basename','$spdj','$spxq','上架','$basename2');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('上架成功！')</script>";
		header("refresh:0;url=../i_items.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('上架失败！！')</script>";
		echo $add_sql;
		header("refresh:0;url=../i_items.php");
	}

?>