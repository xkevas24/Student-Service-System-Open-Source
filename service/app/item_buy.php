<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>创建订单</title>
  </head>
<?php
/*ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);*/
echo "正在创建订单";
require("core_auth.php");
if(isset($_GET["id"]) && $_GET["id"]<>""){
	$id=$_GET["id"];
}else{
	echo "<script>alert('参数错误!')</script>";
	header("refresh:0;url=../i_photo.php");
	exit();
}
//获取商品信息
$item_sql="select spmc,spmaster,spdj from stu_items where id='$id';";
$item=mysqli_fetch_row(mysqli_query($con,$item_sql));
/* 创建订单并跳转支付台 */
    header("Content-Type: text/html;charset=utf-8");
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://pay.acowboy.cn/order/gso_create.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, 1);
    $post_data = array(
        "good_name" => $item[0],
        "pay_type" => 'wechat',
        "price" => $item[2],
		"uid" => $sn,
		"appid" => 'Kb3rsu5i',
		"appkey" => '1RckkS2I3Imez0H11xbu',
		"notify_url" => 'http://'.$svname.'/topstu/service/app/pay_success.php', #回调通知地址
		"return_url" => 'http://'.$svname.'/topstu/service/i_pay_success.php', #支付成功跳转地址
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
	$order_sql="insert into stu_order (oid,aid,good_name,price,create_time,create_date,costumer,status,ddzt,dzzt,item_id) values ('$order_id','$item[1]','$item[0]','$item[2]','$create_time','$create_date','$sn','待支付','未完成','未到账','$id');";
	$do=mysqli_query($con,$order_sql);
	mysqli_close($con);
    header("refresh:0;url=".$href);
    exit();
?>