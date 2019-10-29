<?php
require("core_auth.php");
if(isset($_GET["oid"])){
	switch($_GET["oid"]){
		case 11:
			$orgname='院团委';
			break;
		case 12:
			$orgname='院团委';
			break;
		case 13:
			$orgname='院团委';
			break;
		case 14:
			$orgname='院团委';
			break;
		case 15:
			$orgname='院团委';
			break;
		case 16:
			$orgname='院团委';
			break;
		case 17:
			$orgname='院团委';
			break;
		case 18:
			$orgname='院团委';
			break;
		case 19:
			$orgname='院团委';
			break;
		case 21:
			$orgname='学生会青年志愿者协会';
			break;
		case 22:
			$orgname='学生会自律管理委员会';
			break;
		case 23:
			$orgname='学生会学生社团联合会';
			break;
		case 24:
			$orgname='学生会伙食管理委员会';
			break;
		case 25:
			$orgname='学生会秘书处';
			break;
		case 26:
			$orgname='学生会大学生艺术团';
			break;
		case 31:
			$orgname='人文学院';
			break;
		case 32:
			$orgname='法学院';
			break;
		case 33:
			$orgname='管理学院';
			break;
		case 61:
			$orgname='演讲与交际协会';
			break;
		case 62:
			$orgname='魔术协会';
			break;
		case 63:
			$orgname='TOP电脑社';
			break;
}
	$suauth=1;
	$iden="yes";
}else{
	$orgname=$_SESSION["orgname"];
	$suauth=$_SESSION["suauth"];
	$iden=$_SESSION["iden"];
}
if($iden<>"yes" and $suauth<>"1" and $orgname<>$orgname){
	mysqli_close($con);
	header("refresh:0;url=../attence.php");
	exit();
}

if(isset($_GET["qid"])){
	$qid=xss($_GET["qid"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../qj_view.php");
	exit();
}

$qj_detail=mysqli_fetch_row(mysqli_query($con_db2,"select * from dsu_qingjia where qjid='$qid';"));
$people_xh=$qj_detail[4];
$qj_sql="update dsu_qingjia set state='不通过' where qjid='$qid';";
$do=mysqli_query($con_db2,$qj_sql);
mysqli_close($con);
mysqli_close($con_db2);
$data=shortLink("请假不通过",$orgname,array($people_xh),"很抱歉，您提交的请假条未能得到通过。");
echo "<script>alert('操作成功！')</script>";
header("refresh:0;url=../qj_view.php");
?>