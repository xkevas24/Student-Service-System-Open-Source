<?php
$appid = $_GET["appid"];

$secret = "lohrie7eel8wex3Eyee1xi1ahchoR7iu"; // 应该与appid配对

$timestamp = $_GET["timestamp"];

$nonce = $_GET["nonce"];

$signature = $_GET["signature"];

$array = [$secret, $timestamp, $nonce, $appid];

sort($array, SORT_STRING);

$cal_signature = md5(md5(implode($array)));

echo $cal_signature;
?>