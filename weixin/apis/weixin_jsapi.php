<?php
$access_token=file_get_contents("获取token的URL");
$url='https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='.$access_token.'&type=jsapi';
$json=file_get_contents($url);
//echo $json;
$json=json_decode($json,true);
echo $json["ticket"];
?>