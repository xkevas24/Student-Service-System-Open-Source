<?php
if(isset($_GET["xf_ticket"])){
	$xf_ticket=$_GET["xf_ticket"];
}else{
	echo "invalid param";
	exit();
}
$con=mysqli_connect("","","",""); //自己填写
$sql="select max(id) from stu_xfticket where xfticket='$xf_ticket';";
$maxid=mysqli_fetch_row(mysqli_query($con,$sql))[0];
$sql="select * from stu_xfticket where id='$maxid';";
$info=mysqli_fetch_row(mysqli_query($con,$sql));
mysqli_close($con);
$id=$info[0];
if($id==""){
	echo "invalid ticket";
	exit();
}else{
	$time=time();
	if($time>$info[5]){
		echo "ticket expired";
		exit();
	}
	$string="appid=".$info[1]."&appkey=".$info[2]."&time=".$info[4];
	$ticket=sha1($string);
	if($ticket<>$xf_ticket){
		echo "ticket error";
		exit();
	}
}
$access_token=file_get_contents("access_token.php");
$url='https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='.$access_token.'&type=jsapi';
$json=file_get_contents($url);
//echo $json;
$json=json_decode($json,true);
echo $json["ticket"];
?>