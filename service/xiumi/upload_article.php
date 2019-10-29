<?php

$access_token = $_GET["access_token"];
$timestamp = $_GET["timestamp"];
$uid = $_GET["uid"];
$signature = $_GET["signature"];

if (!preg_match("/^[0-9a-zA-Z]+$/", $uid)){
    echo "uid is incorrect";
    exit;
}

// 由access_token.php接口预先发放的token
$assume_access_token = file_get_contents("/wwwroot/fileshare/xiumi/access_token");

// 验证access token
if ($access_token != $assume_access_token) {
    $response = array(
        "code" => -1,
        "msg" => "invalid access token"
    );
    header('Content-Type:application/json');
    echo json_encode($response);
    exit;
}

// 验证签名
$cal_signature = md5(md5($assume_access_token . $timestamp) . $uid);

if ($signature != $cal_signature) {
    $response = array(
        "code" => -1,
        "msg" => "signature is incorrect"
    );
    header('Content-Type:application/json');
    echo json_encode($response);
    exit;
}

$upload_contents = file_get_contents("php://input");

$articles = json_decode($upload_contents)->articles;

foreach ($articles as $article){
    $show_id = $article->from_id;
    if (!preg_match("/^[0-9]+$/", $show_id)){
        echo "show_id is incorrect";
        exit;
    }
    file_put_contents("/wwwroot/fileshare/xiumi/articles/{$uid}_{$show_id}", json_encode($article));
		
}

$response = array("code" => 0, "msg" => "logical_success");
header('Content-Type:application/json');
echo json_encode($response);
