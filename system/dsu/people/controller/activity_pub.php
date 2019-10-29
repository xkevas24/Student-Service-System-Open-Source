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
	$title=$_POST["title"];
$picsrc=$_POST["picsrc"];
$content=$_POST["content"];
$org=$_SESSION["orgname"];
$keyword=substr(strip_tags($content),0,150);
$pubtime=date("Y年m月d日");
$id=table_new_id("stu","stu_article");
$sql="insert into stu_article (id,title,pubtime,pic,content,keyword,org,state,onclick) values ('$id','$title','$pubtime','$picsrc','$content','$keyword','$org','审核中','0');";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('发布成功！')</script>";
		
	function shortLink($tuisong_xh,$art_title,$url){


    //发送内容
    $title="【SPS审核提示】待审核的活动推文";
    $fsbm="学生服务系统";
    $content=$art_title;
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
	
	//$xh_shu=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_manager where state='正常';"))[0];
//	echo "即将推送给：".$xh_row."名管理员。";
	$i=0;
	$xh_result=mysqli_query($con,"select xh from stu_manager where state='正常';");
	while($row=mysqli_fetch_row($xh_result)){
		//echo $row[0]."@";
		$arr[$i]=$row[0];
		$i++;
	}
	$topicid = ''; //变量赋值为空
 
//用foreach 遍历下二维数组
foreach($arr as $key=>$vals){
    $topicid.=$vals.'@';
}
	$at_title="你有一篇待审核的文章：《".$title."》请及时处理。点击可预览文章。";
	$at_url="http://wlfw.ynudcc.cn/topstu/system/dsu/people/article/article.php?atid=".$id;
	$data=shortLink($arr,$at_title,$at_url);
	echo $data;
	header("refresh:0;url=../activity_manage.php");
}else{
	echo "<script>alert('发布失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	header("refresh:70;url=../activity_manage.php");
}
mysqli_close($con);
}else{
	echo "<script>alert('你没有权限！')</script>";
	mysqli_close($con);
	header("refresh:0;url=../../../stu/dashboard.php");
	//echo $auth;
	//echo "<br>row:".$auth_row;
}

?>