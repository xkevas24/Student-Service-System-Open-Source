<?php
function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }
$jsapiTicket =  file_get_contents("js_api.php") or die("error");
//$jsapiTicket="kgt8ON7yVITDhtdwci0qebMAl1jydj2yNxzk59NEHN0JJ4ulv-5Cj4tQA_J_4Hf2kIIn5XTdhtyEJ_ss0OL2Uw";
// 注意 URL 一定要动态获取，不能 hardcode.
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = "$protocol$_SERVER[HTTP_HOST]";
//$url="http://wx.acowboy.cn";
$timestamp = time();
$nonceStr = createNonceStr();

// 这里参数的顺序要按照 key 值 ASCII 码升序排序
$string = 'jsapi_ticket='.$jsapiTicket.'&noncestr='.$nonceStr.'&timestamp='.$timestamp.'&url='.$url;
$signature = sha1($string);

$signPackage = array(
  "appId"     => 'APPID',
  "nonceStr"  => $nonceStr,
  "timestamp" => $timestamp,
  "url"       => $url,
  "signature" => $signature,
  "rawString" => $string
);
echo json_encode($signPackage);
/*echo $jsapiTicket."<br>";
echo $nonceStr."<br>";
echo $timestamp."<br>";
echo $url."<br>";
echo $string."<br>";
echo $signature."<br>";*/
?>