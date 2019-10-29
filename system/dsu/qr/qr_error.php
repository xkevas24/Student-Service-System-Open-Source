<?php
if(isset($_GET["error_code"])){
	$error_code=$_GET["error_code"];
}else{
	$error_code=0;
}
if(isset($_GET["qr_code"])){
	$qr_code=$_GET["qr_code"];
}else{
	$qr_code=0;
}

switch ($error_code) {
	case "nosession":
		echo "没有登录！";
		break;
	case "unlog":
		echo "你的登录已过期！请重新登录后再次访问！";
		break;
	case "noauth":
		echo "你没有使用此动态二维码的权限！请联系管理员提升权限！";
		break;
	case "noqr":
		echo "二维码代码信息为空！不予显示！";
		break;	
	case 0:
		echo "发生了不在错误提示范围中的错误！";
		break;
}


?>