<?php
require('js_sdk.php');
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
  <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
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
