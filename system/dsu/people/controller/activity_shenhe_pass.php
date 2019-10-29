<?php
session_start();
$ssid=($_SESSION);
$array=json_decode(json_encode($ssid),true);
$user=($array["user"]);
$sn=$user["stuno"];
$org=$_SESSION["orgname"];
require("mysqli.php");
$con=con("stu");
$auth="select id from stu_sucache where xh='$sn' and org='$org' and job='干部';";
$auth_row=mysqli_fetch_row(mysqli_query($con,$auth))[0];
if($auth_row<>""){
if(isset($_GET["id"])){
	$id=$_GET["id"];
}else{
	echo "<script>alert('339错误！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../../../stu/dashboard.php");
	exit();
}
$sql="update stu_article set state='正常' where id='$id';";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('审批成功！')</script>";
	switch($org){
		case "学生会青年志愿者协会":
			$oid=21;
			break;
		case "学生会自律管理委员会":
			$oid=22;
			break;
		case "学生会学生社团联合会":
			$oid=23;
			break;
		case "学生会伙食管理委员会":
			$oid=24;
			break;
		case "学生会秘书处":
			$oid=25;
			break;
		case "学生会大学生艺术团":
			$oid=26;
			break;
		case "院团委":
			$oid=11;
			break;
		case "人文学院":
			$oid=31;
			break;
		case "管理学院":
			$oid=33;
			break;
		case "法学院":
			$oid=32;
			break;
		case "艺术学院":
			$oid=34;
			break;
		case "经济学院":
			$oid=35;
			break;
		case "学生服务系统":
			$oid=81;
			break;
	}
	function shortLink($tuisong_title,$tuisong_bm,$tuisong_xh,$tuisong_content,$url){
    //发送内容
    $title=$tuisong_title;
    $fsbm=$tuisong_bm;
    $content=$tuisong_content;
    $fsr="20162153014";
    $url=$url;


    //发送给谁
    $temp="";

    foreach ($tuisong_xh as $k => $v) {
        $temp->poststuno = $v;
        $list[] = $temp;
        unset($temp);
    }

    //发送内容整合
    $data = array("data" => json_encode($list), "title" => $title, "fsbm" => $fsbm, "fsr" =>$fsr , "content" => $content, "url" => $url);
   // print_r($data);

    $url = "http://wlfw.ynudcc.cn/app/sendweixin/wxtongzhi.php";   /*暂时注释掉  防止乱发*/
    $tm="10000";

    //短连接
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_TIMEOUT,$tm);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data= curl_exec($ch);
    curl_close($ch);
    return $data;
}
	
	//获取订阅数组
	$subs_sql="select sn from stu_subscribes where oid='$oid';";
	$subs_result=mysqli_query($con,$subs_sql);
	$subs_array=array();
	while($subs_row=mysqli_fetch_row($subs_result)){
		array_push($subs_array,$subs_row[0]);
	}
	$article=mysqli_fetch_row(mysqli_query($con,"select title,keyword from stu_article where id='$id';"));
	$data=shortLink($article[0],"$org",$subs_array,"订阅内容：".$article[1]."...","http://weixin.ynudcc.cn/topstu/system/dsu/people/article/article.php?atid=".$id);
	mysqli_close($con);	
	//print_r($subs_array);
	header("refresh:0;url=../activity_shenhe.php");
}else{
	echo "<script>alert('审批失败！')</script>";
	echo "400错误：<br>";
	echo $sql;
	header("refresh:70;url=../activity_shenhe.php");
}
mysqli_close($con);
}else{
	echo "<script>alert('301错误！你没有权限！')</script>";
	mysqli_close($con);
	header("refresh:70;url=../../../stu/dashboard.php");
	//echo $auth;
	//echo "<br>row:".$auth_row;
}

?>