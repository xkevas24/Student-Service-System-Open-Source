<?php
header("Content-Type: text/html;charset=gbk");
require_once("core_mysql.php");
require_once("functions.php");

$aoid=$_POST["aoid"];
$order_id=$_POST["order_id"];

//云端通知开始 /* 注意，交易成功必须通知云端，否则无法跳转支付成功页面 */
$conn=mysqli_connect("139.199.202.14","kevas","xxhandsome24","ngrok");
$sqll="update orders set order_status='ok' where id='$order_id';";
$doo=mysqli_query($conn,$sqll);
mysqli_close($conn);
//云端通知结束

//本地通知开始
$sql="update stu_order set status='已支付' where oid='$order_id';";
$do=mysqli_query($con,$sql);
//本地通知结束
//本地余额更新开始
//获取商家编号
$order_status=mysqli_fetch_row(mysqli_query($con,"select * from stu_order where oid='$order_id';"));
$aid=$order_status[1];
$price=$order_status[3];
//获取订单金额

$money_lock="update stu_usrcache set money_lock=money_lock+'$price' where sn='$aid';";
$money_refresh=mysqli_query($con,$money_lock);
//通知商家
$data=shortLink("订单处理通知","爱生活广场",array($aid),"您有新的订单！请及时到商户中心确认！");

//本地余额更新结束
mysqli_close($con);

?>