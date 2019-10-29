<?php
require("core_auth.php");
if(isset($_POST["good_name"]) && $_POST["good_name"]<>""){
	$money=xss($_POST["good_name"]);
}else{
	mysqli_close($con);
	echo "<script>alert('请填写提现金额')</script>";
	header("refresh:0;url=../get_cash.php");
	exit();
}
//获取最大限额
$max=$userdetail[10];
if($money>$max){
	mysqli_close($con);
	echo "<script>alert('数目大于最大可提现金额或金额不大于零！')</script>";
	header("refresh:0;url=../get_cash.php");
	exit();
}
//文件转存
$path = "/wwwroot/nfsfile/student/images/";
$filedir=file_do($path,$_FILES["qrimg"]["name"],$_FILES["qrimg"]["tmp_name"]);
//
$bid=mysqli_fetch_row(mysqli_query($con,"select max(bid) from stu_btc;"))[0]+1;
$btc_sql="insert into stu_btc (bid,money,aid,qrimg,status) values ('$bid','$money','$sn','$filedir','处理中');";
$do=mysqli_query($con,$btc_sql);
if($do){
	//余额扣款
	$yue_sql="update stu_usrcache set money_able=money_able-$money where sn='$sn';";
	$doo=mysqli_query($con,$yue_sql);
	if($doo){
		mysqli_close($con);
		echo "<script>alert('您的".$money."元提现申请提交成功，我们会在24小时内处理。')</script>";
		header("refresh:0;url=../cash_main.php");
	}
}else{
	mysqli_close($con);
		echo "<script>alert('您的".$money."元提现申请提交成功，余额更新似乎失败了。')</script>";
		header("refresh:0;url=../cash_main.php");
}
?>