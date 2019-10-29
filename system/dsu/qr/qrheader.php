<?php 
$nowtime=time();
$today=date("Y-m-d");
		function getIp()
    {
        if(!empty($_SERVER["HTTP_CLIENT_IP"]))
        {
            $cip = $_SERVER["HTTP_CLIENT_IP"];
        }
        else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else if(!empty($_SERVER["REMOTE_ADDR"]))
        {
            $cip = $_SERVER["REMOTE_ADDR"];
        }
        else
        {
            $cip = '';
        }
        preg_match("/[\d\.]{7,15}/", $cip, $cips);
        $cip = isset($cips[0]) ? $cips[0] : 'unknown';
        unset($cips);
        return $cip;
    }
		$ip_addr=getIp();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="云南大学滇池学院网络服务系统">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<title>学生服务系统</title>
	<?php
	session_start();
if($_SESSION==null){
	$action="fail";
	$notice="没有登录信息";
}else{
		$ssid=($_SESSION);
		$array=json_decode(json_encode($ssid),true);
		$wxid=($array["WeixinOpenid"]);
		$wxlocation=($array["LOCATION"]);
		$gps_time=$wxlocation["time"];
		$gps_j=$wxlocation["jingdu"];
		$gps_w=$wxlocation["weidu"];
		$gps_jlbb=$gps_j=$wxlocation["julibenbu"];
		$gps_jlyl=$wxlocation["juliyanglin"];
		$gps_wc=$wxlocation["wucha"];
		$user=($array["user"]);
		$basic=($user["basic"]);

	//读取usrcache数据并保存至数据库
	$name=$user["xm"];
	$sn=$user["stuno"];
	$fy=$basic["fy"];
	$class=$basic["bjmc"];
	$sex=$basic["xb"];
	$sfz=$user["sfzh"];
	$detail=$name."(".$sn.")";
	
	$code=$_GET["code"];
	//0字头功能码开始
	if(substr($code, 0, 6)=="000005"){
		$values=explode('@', $code);
		$cardid=$values[1];
		$cardo=$values[2];
		$zsr=$values[3];
		header("refresh:0;url=../../stu/cards/do_gift.php?cardid=$cardid&cardo=$cardo&zsr=$zsr");
		exit();
	}
	
	if(substr($code, 0, 6)=="000007"){
		$cd=substr($code, 6, 6);
		header("refresh:0;url=../../stu/cards/cdprovide.php?cd=$cd");
		exit();
	}
	
	if(substr($code, 0, 6)=="000008"){
		$cd=substr($code, 6, 6);
		header("refresh:0;url=../../stu/cards/cdprovide_byqr.php?cd=$cd");
		exit();
	}
	
	if(substr($code, 0, 6)=="000010"){
		$values=explode('@', $code);
		$orgname=$values[2];
		$stuno=$values[1];
		header("refresh:0;url=../../stu/cards/id_result.php?sn=$stuno&org=$orgname#idcard");
		exit();
	}
	
	if(substr($code, 0, 6)=="000011"){
		header("refresh:0;url=../../stu/qiandao_check.php");
		exit();
	}
	
	if(substr($code, 0, 6)=="000012"){
		$oid=substr($code, 6, 10);
		header("refresh:0;url=../../../service/qj_view.php?oid=".$oid);
		exit();
	}
	
	if(substr($code, 0, 6)=="000013"){
		header("refresh:0;url=../../../service/cards_index.php");
		exit();
	}
	
	if(substr($code, 0, 6)=="000016"){
		header("refresh:0;url=../../top/index.php");
		exit();
	}
	
	if(substr($code, 0, 6)=="000017"){
		header("refresh:0;url=../../../service/index.php");
		exit();
	}
	
	if(substr($code, 0, 6)=="000018"){
		header("refresh:0;url=../../../location.php");
		exit();
	}

	if(substr($code, 0, 6)=="000020"){
		$rest=substr($code, 7);
		header("refresh:0;url=qr_local.php?cc=".$rest);
		exit();
	}
	if(substr($code, 0, 6)=="000021"){
		$rest=substr($code, 6);
		header("refresh:0;url=../people/pdf/viewer.php?uri=/topstu/fileshare/pdf/".$rest.".pdf");
		exit();
	}
	if(substr($code, 0, 6)=="000022"){
		$rest=substr($code, 6);
		header("refresh:0;url=../../../service/stu_main.php?oid=".$rest);
		exit();
	}
	if(substr($code, 0, 6)=="000023"){
		$rest=substr($code, 6);
		header("refresh:0;url=../../../service/tw_main.php?did=".$rest);
		exit();
	}
	if(substr($code, 0, 6)=="000024"){
		$rest=substr($code, 6);
		header("refresh:0;url=../../../service/index.php");
		exit();
	}
	if(substr($code, 0, 6)=="000025"){
		$rest=substr($code, 6);
		header("refresh:0;url=../../../service/st_main.php?did=".$rest);
		exit();
	}
	if(substr($code, 0, 6)=="000026"){
		$rest=substr($code, 6);
		header("refresh:0;url=../../../service/pdf/sec_hyd.php?stuno=".$rest);
		exit();
	}
	if(substr($code, 0, 6)=="000027"){
		//$rest=substr($code, 6);
		header("refresh:0;url=../../new_dmt_bx/Wechat/UI_top_doing_sheet.php");
		exit();
	}
	if(substr($code, 0, 6)=="000028"){
		//$rest=substr($code, 6);
		header("refresh:0;url=../../../weixin/qrscan.php?t=".time());
		exit();
	}
	if(substr($code, 0, 6)=="000029"){
		//$rest=substr($code, 6);
		header("refresh:0;url=../../../service/anniversary.php?t=".time());
		exit();
	}
	$time=substr($code, 0, 10);
	$act=substr($code, 10, 6);
	$card_id=substr($code, 16,26);
	//0字头功能码结束
	
	$deta=$nowtime-$time;
	if($deta>=0 && $deta>=6){
		$action="fail";
		$notice="二维码已过期";
		//exit();
		}else{
		$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 
		
		$stateget = mysqli_fetch_array(mysqli_query($con,"select state from stu_codesub where actid='$act';"));
		$state = $stateget[0];
		if($state=="off"){
			$action="fail";
			$notice="二维码已关闭";
			mysqli_close($con);
			
		}else{
			//执行特殊actcode语句：
		include("functions.php");
		switch($tip){
			case "active":
				header("refresh:0;url=active.php?code=$act&time=$time&org=$forg");
				$notice="正在跳转激活";
				$action="success";
				exit();
				break;
			case "authon":
				header("refresh:0;url=authon.php?code=$act&time=$time&org=$forg");
				$notice="正在跳转授权";
				$action="success";
				exit();
				break;
			case "cards":
				header("refresh:0;url=../../stu/cards/cdheader.php?t=$time&q=$act&cd=$card_id");
				$notice="正在使用卡券";
				$action="success";
				exit();
				break;
		}
		//判断IP
		$ipj="select count(id) from stu_codesign where actid='$act' and ip='$ip_addr';";
		$if_ip=mysqli_fetch_row(mysqli_query($con,$ipj))[0];
			/*if($if_ip=="0"){*/
		//过滤局域网IP
		$local_or_outter=filter_var($ip_addr, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
		if($local_or_outter){
			//GPS检验
			/*if($gps_jlbb>500 && $gps_jlyl>1000){
				$strange_sql = "insert into stu_strange_code_sign(id,name,sex,xh,fy,class,signtime,actid,actname,today,ip) values($id,'$name','$sex','$sn','$fy','$class','$signtime','$act','$actname','$today','$ip_addr');";
				mysqli_query($con,$strange_sql);
				mysqli_close($con);
				$action="fail";
				$notice="你不在校区内，请重新定位！";
			}else{*/
				$sql = "select id from stu_codesign where actid='$act' and xh='$sn';";
				$check = mysqli_query($con,$sql);
				$check = mysqli_fetch_array($check);
				$nameget = mysqli_fetch_array(mysqli_query($con,"select actname from stu_codesub where actid='$act';"));
				$actname = $nameget[0];
				if($check){

					mysqli_close($con);
						
					$action="success";
					$notice="你已扫码成功，无需重复扫码！";
				}else{		

				$idcheck = mysqli_fetch_array(mysqli_query($con,"select max(id) from stu_codesign;"));
				$id = $idcheck[0];
				$id = $id + 1;

				$signtime=date("Y年m月d日H时i分");		
				$sql = "insert into stu_codesign(id,name,sex,xh,fy,class,signtime,actid,actname,today,ip,gps_time,gps_j,gps_w,gps_wc,gps_jlbb,gps_jlyl) values($id,'$name','$sex','$sn','$fy','$class','$signtime','$act','$actname','$today','$ip_addr','$gps_time','$gps_j','$gps_w','$gps_wc','$gps_jlbb','$gps_jlyl');";
				mysqli_query($con,$sql);
				

				$action="success";
				$notice="扫码成功";
				if($if_ip<>"0"){
					$action="strange";
					$notice="请谅解，该IP地址已扫码过该活动。我们对此感到疑惑，但暂时让您扫码成功了。但您的行为信息已被记录，我们会持续关注您后续的行为特征。";
					$strange_sql = "insert into stu_strange_code_sign(id,name,sex,xh,fy,class,signtime,actid,actname,today,ip) values($id,'$name','$sex','$sn','$fy','$class','$signtime','$act','$actname','$today','$ip_addr');";
					mysqli_query($con,$strange_sql);
					
				}
				mysqli_close($con);
				function shortLink($tuisong_xh,$tsct,$check_code){
			    //发送内容
			    $title="扫码成功提示";
			    $fsbm="学生服务系统";
			    $content=$tsct;
			    $fsr="20162153014";
			    $url="wlfw.ynudcc.cn/topstu/system/dsu/qr/qr_local.php?cc=".$check_code;


			    //发送给谁
			    $temp="";

			    foreach ($tuisong_xh as $k => $v) {
			        $temp->poststuno = $v;
			        $list[] = $temp;
			        unset($temp);
			    }

			    //发送内容整合
			    $data = array("data" => json_encode($list), "title" => $title, "fsbm" => $fsbm, "fsr" =>$fsr , "content" => $content, "url" => $url);
			   // print_r($data);

			    $url = "http://wlfw.ynudcc.cn/app/sendweixin/wxtongzhi.php";   /*暂时注释掉  防止乱发*/
			    $tm="10000";

			    //短连接
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_URL,$url);
			    curl_setopt($ch, CURLOPT_TIMEOUT,$tm);
			    curl_setopt($ch,CURLOPT_POST,1);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			    $data= curl_exec($ch);
			    curl_close($ch);
			    return $data;
				}
				$usr_arr=$sn."@";
				$check_code=base64_encode($act.$sn);
				$content=$name."(".$sn.")同学你好！你于".date("Y年m月d日 H:i:s")."进行了：".$actname."活动扫码。本地备份码为：".$check_code."。如果该活动有第二课堂，请截图保存至相册！";
				$xh=explode('@', $usr_arr);
				$data=shortLink($xh,$content,$check_code);

						}
			//}

			
		}else{
			$strange_sql = "insert into stu_strange_code_sign(id,name,sex,xh,fy,class,signtime,actid,actname,today,ip) values($id,'$name','$sex','$sn','$fy','$class','$signtime','$act','$actname','$today','$ip_addr');";
				mysqli_query($con,$strange_sql);
			mysqli_close($con);
			$action="fail";
			$notice="你的操作已被反作弊系统拦截！";
		}
		//局域网过滤结束
	}
	}
	?>
<style type="text/css">
html,body{background:#393D49; height: 100%;}
#tipstitle{ color: #fff; line-height: 40px; text-align: center; font-size: 24px; 
 position:fixed;  width: 280px; top: 30%; left:50%; margin-left: -140px;}
</style>
</head>

<body>
<?php if($action=="success"){ ?>
<div id="tipstitle">
<img src="0.png"><br><div style="height:30px;"></div>

扫码成功
<br>
<div style=" font-size:12px;">
<?php echo $actname."-"; echo $notice; ?>
</div>
<br>
<div style="font-size:18px;">
<a href="../../../service/isquare.php" style="color: white">爱生活广场，发现更多精彩</a>
</div>
</div>
<?php } ?>
<?php if($action=="strange"){ ?>
<div id="tipstitle">
<img src="2.png"><br><div style="height:30px;"></div>

扫码成功
<br>
<div style=" font-size:12px;">
<?php echo $actname."<br>"; echo $notice; ?>
</div>
<br>
<div style="font-size:18px;">
<a href="../../../service/isquare.php" style="color: white">爱生活广场，发现更多精彩</a>
</div>
</div>
<?php } ?>
<?php if($action=="fail"){ ?>
<div id="tipstitle">
<img src="1.png"><br>
<div style="height:30px;"></div>
扫码失败
<br>
<div style="font-size:12px;">
<?php echo $notice; ?>

</div>
</div>
<?php }}
	?>
</body>
</html>