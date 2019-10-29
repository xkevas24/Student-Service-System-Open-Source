<?php
if($_SERVER['HTTP_HOST']<>"weixin.ynudcc.cn"){
	header('HTTP/1.1 403 Forbidden');
	exit();
}
session_start();
if($_SESSION==null){
		header("refresh:0;url=errorpage/unlog.php");
	exit();
}
require "../service/app/core_mysql.php";
function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }
$timestamp = time();
$nonceStr = createNonceStr();
$jsapiTicket=file_get_contents("apis/js_api.php");
//echo $jsapiTicket."<br>";
$url='http://'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
//echo $url."<br>";
$string="jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
//echo $string."<br>";
$signature = sha1($string);
//echo $signature;

$signPackage = array(
  "appId"     => 'APPID',
  "nonceStr"  => $nonceStr,
  "timestamp" => $timestamp,
  "url"       => urldecode($url) ,
  "signature" => $signature,
  "rawString" => $string
);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>学服扫一扫</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <link rel="stylesheet" href="css_js/style.css">
</head>
<body ontouchstart="">
<?php  
//echo $url."<br>";
//echo $string;
?>
<div class="wxapi_container">
    <div class="wxapi_index_container">
      <ul class="label_box lbox_close wxapi_index_list">
        <li class="label_item wxapi_index_item"><a class="label_inner" href="#menu-scan">学生服务系统扫码服务</a></li>
      </ul>
    </div>
    <div class="lbox_close wxapi_form">
      <h3 id="menu-scan">学服条码扫描</h3>
      <span class="desc">务必允许使用地理位置，否则无法正常使用！</span>
      <br>
      <!--<span class="desc" id="gps"></span>
      <br>-->
      <span class="desc" id="network"></span>
      <br>
      <span class="desc" id="weizhi"></span>
      <button class="btn btn_primary" style="background: #1E90FF" id="scanQRCode0">扫描签到码</button>
	  <button class="btn btn_primary" style="display: none" id="scanQRCode1">扫描学服条码</button>
      <button class="btn btn_primary" style="display: none" id="scanQRCode2">扫描卡券二维码</button>
      <button class="btn btn_primary" id="scanQRCode3">普通扫码</button>
      <button class="btn btn_primary" onClick="location.reload()" style="background: #E7A71F">重新载入</button>
      <input id="nw" style="display: none">
    </div>
  </div>
</body>
<!--<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>-->
<script src="jweixin-1.0.0.js"></script>
<script>
  wx.config({
      debug: false,
      appId: 'APPID',
      timestamp: <?php echo $signPackage["timestamp"]; ?>,
      nonceStr: '<?php echo $signPackage["nonceStr"]; ?>',
      signature: '<?php echo $signPackage["signature"]; ?>',
      jsApiList: [
        'scanQRCode',
	  	'getNetworkType'
      ]
  });
	
wx.ready(function(){
  wx.hideOptionMenu();
  wx.getNetworkType({
      success: function (res) {
		document.getElementById("network").innerHTML="网络环境："+res.networkType;
		document.getElementById("nw").value=res.networkType;
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
});

document.querySelector('#scanQRCode1').onclick = function () {
    wx.scanQRCode({
      needResult: 1,
      desc: 'scanQRCode desc',
      success: function (res) {
      var qr_json=JSON.stringify(res);
	  var obj = JSON.parse(qr_json);
	  var val=obj.resultStr;
	  window.location.href="scanned.php?val="+val;
	  //window.location.href=val;
      }
    });
  };
document.querySelector('#scanQRCode2').onclick = function () {
    wx.scanQRCode({
      needResult: 1,
      desc: 'scanQRCode desc',
      success: function (res) {
      var qr_json=JSON.stringify(res);
	  var obj = JSON.parse(qr_json);
	  var val=obj.resultStr;
	  window.location.href="card_scanned.php?val="+val;
      }
    });
  };

document.querySelector('#scanQRCode0').onclick = function () {
	//签到
	var jd = "pause";
	var wd = "pause";
	var tag = "pause";
	var nw = document.getElementById("nw").value;
    wx.scanQRCode({
      needResult: 1,
      desc: 'scanQRCode desc',
      success: function (res) {
      var qr_json=JSON.stringify(res);
	  var obj = JSON.parse(qr_json);
	  var val=obj.resultStr;
	  window.location.href="sign_scanned.php?val="+val+"&tag="+tag+"&n="+nw+"&j="+jd+"&w="+wd+"&t="+<?php echo time(); ?>;
      }
    });
  };

document.querySelector('#scanQRCode3').onclick = function () {
    wx.scanQRCode({ });
  };

</script>
<script src="css_js/zepto.min.js"></script>
<!--<script src="css_js/demo.js"> </script>-->
</html>
