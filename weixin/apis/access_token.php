<?php
$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APP_ID&secret=APP_SCREST"; 
$json=file_get_contents($url);
//echo $json;
$json=json_decode($json,true);
echo $json["access_token"];
?>