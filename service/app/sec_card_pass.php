<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>审核通过</title>
<?php
require("core_auth.php");
$orgname=$_SESSION["orgname"];
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
if($iden<>"yes" and $suauth<>"1" and $orgname<>"院团委"){
	mysqli_close($con);
	header("refresh:0;url=../tw_main.php?did=14");
	exit();
}

if(isset($_GET["eid"])){
	$eid=xss($_GET["eid"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}

if(isset($_GET["actid"])){
	$actid=xss($_GET["actid"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}
	
if(isset($_GET["upsn"])){
	$upsn=xss($_GET["upsn"]);
}else{
	echo "<script>alert('参数错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}
//拉取详情
$sec_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_erkeku where eid='$eid';"));
$sec_name=$sec_info[1];
$sec_org=$sec_info[3];
$sec_value=$sec_info[4];
$sec_block=$sec_info[5];
$sec_bz=$sec_info[6];
$today=date("Y年m月d日");
$edtm=date("Y年m月d日",strtotime("+1 year"));

if($sec_info[7]=="已通过"){
	mysqli_close($con);
	echo "<script>alert('操作成功！')</script>";
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();

}

//更新审核状态
$sql="update stu_erkeku set status='已通过' where eid='$eid';";
$do=mysqli_query($con,$sql);

if($do){
	echo "<script>alert('操作成功！')</script>";
	//审核通过推送
	$data=shortLink("第二课堂凭证申请通过","校团委科创中心",array($upsn),"恭喜您，您提交的".$sec_name."第二课堂凭证申请已经通过！");
	//获取用户学号
	$actid_b63=base64_encode($actid);
	$stuno=file_get_contents("get_sign_stuno.php?actid=".$actid_b63);
	//创建卡券
	$card_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_cards_det;"))[0]+1;
	$notification="仅限".$sec_org."组织的".$sec_name.$sec_bz."第二课堂认证。";
	$card_sql="insert into stu_cards_det (id,tp,nm,fm,bgtm,edtm,notification,maxinum) values ('$card_id','attest','$sec_name','$sec_org','$today','$edtm','$notification','unlimit');";
	$do_add=mysqli_query($con,$card_sql);
////循环发卡
	$card="select * from stu_cards_det where id='$card_id';";
	$cr=mysqli_fetch_array(mysqli_query($con,$card));
	$curl = curl_init();
	//设置抓取的url
	$svname = $_SERVER['SERVER_NAME'];
	curl_setopt($curl, CURLOPT_URL, 'http://'.$svname.'/lab/api/screditapi.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POST, 1);
	$xh=explode('@', $stuno);
	$count=count($xh);
	$j=0;
	$time=date("Y-m-d H:i:s");
	for($i=0;$i<$count;$i++){
	
	$now=mysqli_fetch_row(mysqli_query($con,"select count(*) as a from stu_cards where cardo='$card_id';"))[0];
	
	$limit=$cr[7];
	
	
	if($now<$limit or $limit=="unlimit"){
	//$newid=table_new_id("stu","stu_cards");
	$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_cards;"))[0]+1;
	//echo $i.":".$xh[$i]."<br>";
	$sql="insert into stu_cards (id,type,name,fm,whenfrom,belongto,until,ifused,notification,cardo,receive_time) values ('$newid','$cr[1]','$cr[2]','$cr[3]','$cr[4]','$xh[$i]','$cr[5]','1','$cr[6]','$card_id','$time');";
	$result=mysqli_query($con,$sql);
	if($result){
		$post_data = array(
			"target" => $xh[$i],
			"reason" => "卡券信用加分",
			"method" => "+",
			"value" => "3",
			"key" => "S907-30AD-DB6C-ZZ13",
		);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
		//执行命令
		$data = curl_exec($curl);
		
		//写入积分明细
		$jfid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_erkejifen;"))[0]+1;
		$jifen_sql="insert into stu_erkejifen (id,eid,sn,value) values ('$jfid','$eid','$xh[$i]','$sec_value');";
		$do_jifen=mysqli_query($con,$jifen_sql);
		$j++;
	}else{
		echo "失败！学号：$xh[$i]<br>";
	}
		
	}else{
		array_splice($xh, $i, 1);
		echo "失败！该卡已达到派发上限！如需继续派发请提高上限！";
	}
	
}
	curl_close($curl);

	$data=shortLink("第二课堂凭证","校团委科创中心",$xh,"您参加".$sec_org."举办的".$sec_name."活动获得的第二课堂凭证已到账。");
	//print_r($data);
	
	
	mysqli_close($con);
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}else{
	echo "<script>alert('操作失败！系统错误！')</script>";
	header("refresh:0;url=../sec_cards_shenhe.php");
	exit();
}
?>
</head>

<body>
</body>
</html>