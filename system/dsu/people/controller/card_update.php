<?php
session_start();
require("mysqli.php");
$con=con("stu");
$id=$_GET["id"];
$type=$_POST["type"];
$name=$_POST["name"];
$limit=$_POST["limit"];
if($limit=="0"){
	$limit="unlimit";
}
$from=$_SESSION["orgname"];
$bgtm=explode('/', $_POST["bgtm"]);
$bg_d=$bgtm[0];
$bg_m=$bgtm[1];
$bg_y=$bgtm[2];
$bgtm=$bg_y."年".$bg_m."月".$bg_d."日";
$edtm=explode('/', $_POST["edtm"]);
$ed_d=$edtm[0];
$ed_m=$edtm[1];
$ed_y=$edtm[2];
$edtm=$ed_y."年".$ed_m."月".$ed_d."日";
$notification=$_POST["notification"];

$sql="update stu_cards_det set tp='$type',nm='$name',fm='$from',bgtm='$bgtm',edtm='$edtm',notification='$notification',maxinum='$limit' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('更新成功！')</script>";
	header("refresh:0;url=../card_manage.php");
}else{
	echo "<script>alert('更新失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../card_manage.php");
}
mysqli_close($con);
?>