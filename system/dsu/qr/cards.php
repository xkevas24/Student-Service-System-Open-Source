<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>卡券</title>
<script>
</script>
</head>

<body>
<?php
	echo "HELLO！";
?>
<audio id="musicAudio" autoplay="autoplay">
<source src="pass.mp3" type="audio/mpeg">
</audio>
<script>
 document.addEventListener('DOMContentLoaded', function() {
function audioAutoPlay() {
var audio = document.getElementById('musicAudio');
audio.play();
document.addEventListener("WeixinJSBridgeReady", function() {
audio.play();
}, false);
}
audioAutoPlay();
}); 

</script>
</body>
</html>