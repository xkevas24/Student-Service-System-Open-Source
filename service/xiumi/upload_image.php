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

// 保存文件
if ($_FILES["img-upload"]["error"] > 0) {
    $response = array(
        "code" => -2,
        "msg" => $_FILES["img-upload"]
    );
} else {
    $now = time();
    if (!file_exists("/wwwroot/fileshare/xiumi/upload/{$now}")){
        $suc = mkdir("/wwwroot/fileshare/xiumi/upload/{$now}");
        if (!$suc){
            $response = array(
                "code" => -1,
                "msg" => "fail to create directory"
            );
            header('Content-Type:application/json');
            echo json_encode($response);
            exit;
        }
    }
    $suc = move_uploaded_file($_FILES["img-upload"]["tmp_name"],
        "/wwwroot/fileshare/xiumi/upload/{$now}/{$uid}_{$_FILES["img-upload"]["name"]}");
    if ($suc) {
        $url = "http://ent.xiumi.us/upload/{$now}/{$uid}_{$_FILES["img-upload"]["name"]}";
        $response = array(
            "code" => 0,
            "msg" => "",
            "data" => array("url" => $url, "name" => $_FILES["img-upload"]["name"])
        );
    } else {
        $response = array(
            "code" => -1,
            "msg" => "failed"
        );
    }
}

header('Content-Type:application/json');
echo json_encode($response);
