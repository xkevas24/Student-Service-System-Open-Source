<?php
function shortLink($tuisong_xh,$tuisong_title,$art_title,$ts_url){


    //发送内容
    $title=$tuisong_title;
    $fsbm="学生服务系统";
    $content=$art_title;
    $fsr="20162153014";
    $url=$ts_url;


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

function auth_wxts($sql_for_array,$tuisong_title,$art_title,$url){
	require("mysqli.php");
	$con=con("stu");
	
	$i=0;
	$xh_result=mysqli_query($con,$sql_for_array);
	while($row=mysqli_fetch_row($xh_result)){
		$arr[$i]=$row[0];
		$i++;
	}
	$data=shortLink($arr,$tuisong_title,$art_title,$url);
	mysqli_close($con);
	return $data;
}
	
?>