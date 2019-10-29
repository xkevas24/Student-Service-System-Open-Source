<?php
$open=file_get_contents("http://dwz.wailian.work/");
$url=base64_encode($_GET["url"]);
$request_url="http://dwz.wailian.work/api.php?site=sina&url=".$url;
//echo $request_url;
//初始化
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $request_url);
//curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
print_r($data);
$data=json_decode($data,true);
print_r($data);
?>