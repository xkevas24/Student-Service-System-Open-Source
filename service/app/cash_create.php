<?php
/*ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);*/
require("core_auth.php");
if(isset($_POST["good_name"]) && $_POST["good_name"]<>""){
	$good_name=$_POST["good_name"];
}else{
	echo "<script>alert('请输入商品名称!')</script>";
	header("refresh:0;url=../cash_create.php");
	exit();
}
if(isset($_POST["good_price"]) && $_POST["good_price"]<>""){
	$good_price=$_POST["good_price"];
}else{
	echo "<script>alert('请输入商品价格!')</script>";
	header("refresh:0;url=../cash_create.php");
	exit();
}
if(isset($_POST["user_num"]) && $_POST["user_num"]<>""){
	$user_num=$_POST["user_num"];
}else{
	echo "<script>alert('请输入用户编号!')</script>";
	header("refresh:0;url=../cash_create.php");
	exit();
}
/* 创建订单并跳转支付台 */
    header("Content-Type: text/html;charset=utf-8");
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://pay.acowboy.cn/order/gso_create.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, 1);
    $post_data = array(
        "good_name" => $good_name,
        "pay_type" => 'wechat',
        "price" => $good_price,
		"uid" => $user_num,
		"appid" => 'Kb3rsu5i',
		"appkey" => '1RckkS2I3Imez0H11xbu',
		"notify_url" => 'http://weixin.ynudcc.cn/topstu/service/app/pay_success.php', #回调通知地址
		"return_url" => 'https://pay.acowboy.cn/order/pay_show.php', #支付成功跳转地址
        );
    curl_setopt($curl, CURLOPT_POSTFIELDS,$post_data);
    $data = curl_exec($curl);
    //print_r($data);
    $data=json_decode($data,true);
    $href=$data["pay_href"];
	/* 向学服数据库写入订单信息 */
	$order_id=$data["oid"];
	$create_time=date("Y年m月d日H时i分s秒");
	$create_date=time();
	$order_sql="insert into stu_order (oid,aid,good_name,price,create_time,create_date,costumer,status) values ('$order_id','$sn','$good_name','$good_price','$create_time','$create_date','$user_num','待支付');";
	$do=mysqli_query($con,$order_sql);
	mysqli_close($con);
    header("refresh:0;url=".$href);
    exit();
?>