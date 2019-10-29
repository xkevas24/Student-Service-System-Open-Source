<?php
//appid=Geethi7eexu1ging3tahzoe6ye7eek1p&nonce=590946&timestamp=1544426764
$access_token = $_GET["access_token"];
$timestamp = $_GET["timestamp"];
$uid = $_GET["uid"];
$signature = $_GET["signature"];

$assume_access_token = file_get_contents("/wwwroot/fileshare/xiumi/access_token");


$cal_signature = md5(md5($assume_access_token . $timestamp) . $uid);

echo $cal_signature;
?>