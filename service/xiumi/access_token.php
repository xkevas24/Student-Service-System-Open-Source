<?php
//http://weixin.ynudcc.cn/topstu/service/xiumi/access_token.php?appid=Geethi7eexu1ging3tahzoe6ye7eek1p&
/*nonce=590946&
	signature=jae5aigeig9eTeen9cha1Pheich0phap
	&timestamp=1544426764*/

$appid = $_GET["appid"];
$secret = "lohrie7eel8wex3Eyee1xi1ahchoR7iu"; // 应该与appid配对
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$signature = $_GET["signature"];

$array = [$secret, $timestamp, $nonce, $appid];
sort($array, SORT_STRING);
$cal_signature = md5(md5(implode($array)));

if ($cal_signature != $signature){
    $response = array('code' => -1);
    header('Content-Type:application/json');
    echo json_encode($response);
    exit;
}

$access_token = md5(mt_rand() + mt_rand() + mt_rand());
if (file_put_contents("/wwwroot/fileshare/xiumi/access_token", $access_token)) {
    $response = array('access_token' => $access_token, 'expires_in' => 120);
    header('Content-Type:application/json');
    echo json_encode($response);
}else{
	echo "failed to put file";
}
