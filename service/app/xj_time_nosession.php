<?php
Header("Content-type: image/png");
header('Content-Disposition: inline; filename="me.png"');
//require "core_auth.php";

$timestamp=time();

$poststuno=$_GET["poststuno"];

$password="GWe*aivAtVQ@1%tk";

$str=$poststuno.$timestamp.$password;

$sha=hash("sha256",$str);

$sha=substr($sha,0,32);

$url="学籍照片获取URL.php?poststuno=".$poststuno."&token=".$sha."&timestamp=".$timestamp;

print_r(file_get_contents($url));

?>