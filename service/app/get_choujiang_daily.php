<?php
require("core_auth.php");
if($basic["xq"]=="1"){
	mysqli_close($con);
	echo "xqerror";
	exit();
}
$time=time();
$date=date("Y-m-d");
function str_rand($length = 8, $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if(!is_int($length) || $length < 0) {
        return false;
    }

    $string = '';
    for($i = $length; $i > 0; $i--) {
        $string .= $char[mt_rand(0, strlen($char) - 1)];
    }

    return $string;
}
$cardid=str_rand();
//检查今日是否领取过
$sql="select id from stu_choujiang where poststuno='$sn' and get_date='$date';";
$cardid_check=mysqli_fetch_row(mysqli_query($con,$sql))[0];
if($cardid_check<>""){
	echo "error";
	mysqli_close($con);
	exit();
}

//检查是否有重复卡券
$sql="select id from stu_choujiang where cardid='$cardid';";
$cardid_check=mysqli_fetch_row(mysqli_query($con,$sql))[0];
if($cardid<>""){
$sql="insert into stu_choujiang (id,cardid,poststuno,gettime,gettype,get_date) values (null,'$cardid','$sn','$time','daily','$date')";
$do=mysqli_query($con,$sql);
	echo "1";
}
mysqli_close($con);
?>