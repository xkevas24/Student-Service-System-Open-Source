<?php
if($_SERVER['HTTP_HOST']=="weixin.ynudcc.cn"){
?>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        wx.config({
            debug: false,
            appId: '这里填写微信公众号的OPENID',
            timestamp: <?php echo $signPackage["timestamp"]; ?>,
            nonceStr: '<?php echo $signPackage["nonceStr"]; ?>',
            signature: '<?php echo $signPackage["signature"]; ?>',
            jsApiList: [
                'scanQRCode',
                'getLocation',
                'getNetworkType'
            ]
        });

        wx.ready(function(){
            wx.hideOptionMenu();
        });
    </script>
<?php
}
?>