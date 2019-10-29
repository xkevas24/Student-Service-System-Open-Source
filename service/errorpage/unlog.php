<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ERROR PAGE</title>
</head>
<body>
<h1>登录已过期</h1>
<p>您的登录信息已过期。请重新登录。</p>
<hr>
<h1>LOGIN EXPIRED</h1>
<p>Your login information has expired. Please login again.</p>
<?php
$svname=$_SERVER['SERVER_NAME'];
if($svname=="weixin.ynudcc.cn"){
	header("refresh:3;url=http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=000024");
}else{
	header("refresh:3;url=http://wlfw.ynudcc.cn/html/login/");
}
?>
</body>
</html>