<?php
require("core_auth.php");
if(isset($_POST["name"]) && $_POST["name"]<>""){
	$name=xss($_POST["name"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段课程名称缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["teacher"]) && $_POST["teacher"]<>""){
	$teacher=xss($_POST["teacher"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段教师名称缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["classroom"]) && $_POST["classroom"]<>""){
	$classroom=xss($_POST["classroom"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段教师地址缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["xq"]) && $_POST["xq"]<>""){
	$xq=xss($_POST["xq"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段校区缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["mon"]) && $_POST["mon"]<>""){
	$mon=xss($_POST["mon"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段周一缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["tue"]) && $_POST["tue"]<>""){
	$tue=xss($_POST["tue"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段周二缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["wed"]) && $_POST["wed"]<>""){
	$wed=xss($_POST["wed"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段周三缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["thr"]) && $_POST["thr"]<>""){
	$thr=xss($_POST["thr"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段周四缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["fri"]) && $_POST["fri"]<>""){
	$fri=xss($_POST["fri"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段周五缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

if(isset($_POST["bz"]) && $_POST["bz"]<>""){
	$bz=xss($_POST["bz"]);
}else{
	mysqli_close($con);
	echo "<script>alert('字段备注缺失！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

//重复检测
//检测班级名称、课程名称、任课教师、校区、教室是否有重合。
$repeat_sql="select id from stu_class_table where bjmc='$class' and kcmc='$name' and teacher='$teacher' and xq='$xq' and room='$classroom';";
$repeat_id=mysqli_fetch_row(mysqli_query($con,$repeat_sql))[0];
if($repeat_id==""){
	$class_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_class_table;"))[0]+1;
	$add_sql="insert into stu_class_table (id,fy,bjmc,kcmc,mon,tue,wed,thr,fri,teacher,room,bz,xq) values ('$class_id','$fy','$class','$name','$mon','$tue','$wed','$thr','$fri','$teacher','$classroom','$bz','$xq');";
	$do=mysqli_query($con,$add_sql);
	if($do){
		mysqli_close($con);
		echo "<script>alert('新增成功！可以继续添加！')</script>";
		header("refresh:0;url=../istudy_upload.php");
	}else{
		mysqli_close($con);
		echo "<script>alert('新增失败！请重新添加！')</script>";
		header("refresh:0;url=../istudy_upload.php");
	}
}else{
	mysqli_close($con);
	echo "<script>alert('新增成功！感谢您的分享！')</script>";
	header("refresh:0;url=../istudy_upload.php");
}

?>