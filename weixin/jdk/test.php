<?php
function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }
function getSignPackage() {
    $jsapiTicket =  file_get_contents("http://wx.acowboy.cn/apis/js_api.php") or die("error");
    //$jsapiTicket="kgt8ON7yVITDhtdwci0qebMAl1jydj2yNxzk59NEHN0JJ4ulv-5Cj4tQA_J_4Hf2kIIn5XTdhtyEJ_ss0OL2Uw";
    // 注意 URL 一定要动态获取，不能 hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $url = "$protocol$_SERVER[HTTP_HOST]";
    $timestamp = time();
    $nonceStr = createNonceStr();

    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => 'AAAAAAAAAAAAAAAAAAAAAAA',
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    return $signPackage; 
  }
$signPackage=getSignPackage();
?>
<!doctype html>
<html>
<head>
<title>测试</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="format-detection" content="telephone=no, address=no">
  <!-- 必须包含此 -->
  <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
</head>
<body>

  <button onclick="wx.scanQRCode()">扫一扫</button>

</body>

<script type="text/javascript">
wx.config({
    //debug: true,
  appId: '<?php echo $signPackage["appId"];?>',
  timestamp: <?php echo $signPackage["timestamp"];?>,
  nonceStr: '<?php echo $signPackage["nonceStr"];?>',
  signature: '<?php echo $signPackage["signature"];?>',
  jsApiList: [
    'scanQRCode'
    // 要调用的 API 都要加到这个列表中
  ]
});

wx.ready(function(){
  //wx.scanQRCode();
});

</script>


</html>
