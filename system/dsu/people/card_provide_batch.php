<?php
session_start();
require("mysqli.php");
$con = con("stu");
$org=$_SESSION["orgname"];
$curl = curl_init();
		//设置抓取的url
		$svname = $_SERVER['SERVER_NAME'];
		curl_setopt($curl, CURLOPT_URL, 'http://'.$svname.'/topstu/lab/api/screditapi.php');
		//设置头文件的信息作为数据流输出
		//curl_setopt($curl, CURLOPT_HEADER, 1);
		//设置获取的信息以文件流的形式返回，而不是直接输出。
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		//设置post方式提交
		curl_setopt($curl, CURLOPT_POST, 1);
		//设置post数据

function shortLink($tuisong_xh,$tsct){
    //发送内容
    $title="卡券到账提示";
    $fsbm="学生服务系统";
	
	/*$title="第二课堂凭证发放通知";
    $fsbm="院团委科创中心";*/
    $content=$tsct;
    $fsr="20162153014";
    $url="t.cn/EZldrOp";


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

if(isset($_GET["id"])){
	$id=$_GET["id"];
	$card="select * from stu_cards_det where id='$id';";
	$cr=mysqli_fetch_array(mysqli_query($con,$card));
}

$xh=explode('@', $_POST["xh"]);
$count=count($xh);
$j=0;
$time=date("Y-m-d H:i:s");

for($i=0;$i<$count;$i++){
	
	$now=mysqli_fetch_row(mysqli_query($con,"select count(*) as a from stu_cards where cardo='$id';"))[0];
	
	$limit=$cr[7];
	
	
	if($now<$limit or $limit=="unlimit"){
		$newid=table_new_id("stu","stu_cards");
	//echo $i.":".$xh[$i]."<br>";
	$sql="insert into stu_cards (id,type,name,fm,whenfrom,belongto,until,ifused,notification,cardo,receive_time) values ('$newid','$cr[1]','$cr[2]','$cr[3]','$cr[4]','$xh[$i]','$cr[5]','1','$cr[6]','$id','$time');";
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
		$j++;
	}else{
		echo "失败！学号：$xh[$i]<br>";
	}
		
	}else{
		array_splice($xh, $i, 1);
		echo "失败！该卡已达到派发上限！如需继续派发请提高上限！";
	}
	
}
mysqli_close($con);

//关闭URL请求
curl_close($curl);

$content="卡券：".$cr[2]."已到账，请到学生服务系统的钱包和卡券功能中查收和使用。点击查看。";
$data=shortLink($xh,$content);
		
		//echo $data;
echo "共：$j 条成功！请等待跳转...";
header("refresh:3;../card_manage.php");
?>