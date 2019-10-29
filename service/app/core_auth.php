<?php
function getIp(){
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

session_start();
if($_SESSION==null){
		header("refresh:0;url=errorpage/unlog.php");
	exit();
}else{
		$svname=$_SERVER['SERVER_NAME'];
		$ssid=($_SESSION);
		$array=json_decode(json_encode($ssid),true);
		$wxid=($array["WeixinOpenid"]);
		$user=($array["user"]);
		$basic=($user["basic"]);
		
		

	//读取usrcache数据并保存至数据库
	$name=$user["xm"];
	$sn=$user["stuno"];
	$fy=$basic["fy"];
	$class=$basic["bjmc"];
	$sex=$basic["xb"];
	$sfz=$user["sfzh"];
	$date=date("Y-m-d-h:ia");
}
require "core_mysql.php";
$sql = "select id from stu_usrcache where name='$name' and sn='$sn';";
$check = mysqli_query($con,$sql);
$check = mysqli_fetch_array($check);
if(!$check){
	$idcheck = mysqli_fetch_array(mysqli_query($con,"select max(id) from stu_usrcache;"));
	$id = $idcheck[0];
	$id = $id + 1;
	$sql = "insert into stu_usrcache(id,name,sn,fy,class,sex,sfz) values($id,'$name','$sn','$fy','$class','$sex','$sfz');";
  	mysqli_query($con,$sql);
}
//用户信息数组
$userdetail=mysqli_fetch_row(mysqli_query($con,"select * from stu_usrcache where sn='$sn';"));
//礼物检查和登录积分
	//礼物检查
		$gift_sql = "select id from stu_gift_record where sn='$sn' and ifchecked='1';";
		$gift_check = mysqli_query($con,$gift_sql);
		$gift_check = mysqli_fetch_array($gift_check);

	//信用
		$credit=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
	//每日登录
		$lgdate=date("Y年m月d日");
		$lgtime=date("H时i分");
		$login_check="select id from stu_login_record where sn='$sn' and lgdate='$lgdate';";
		$login_result=mysqli_fetch_row(mysqli_query($con,$login_check))[0];
		if($login_result==""){
			//添加登录
			$login_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_login_record;"))[0]+1;
			$login_rd="insert into stu_login_record (id,sn,lgdate,lgtime) values ('$login_id','$sn','$lgdate','$lgtime');";
			$do_login=mysqli_query($con,$login_rd);
		}
	//连续登录检查
	
function getContinueDay($day_list)
    {

	    //昨天开始时间戳

	    $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));

	   

	    if($beginYesterday>$day_list[0]) $days = 0;

	    else $days = 1;

	    

	    $count = count($day_list);

	    for($i=0;$i<$count;$i++){

	        if($i<$count-1){

	            $res = compareDay($day_list[$i],$day_list[$i+1]);

	            if($res) $days++;

	            else break;

	         }

	    }

	    

	    return $days;

    }
function compareDay($curDay,$nextDay)
    {

        $lastBegin = mktime(0,0,0,date('m',$curDay),date('d',$curDay)-1,date('Y',$curDay));

        $lastEnd   = mktime(0,0,0,date('m',$curDay),date('d',$curDay),date('Y',$curDay))-1;

        

        if($nextDay>=$lastBegin && $nextDay<=$lastEnd){

            return true;

        }else{

            return false;

        }

        

    }
			
			$lianxu="select lgdate from stu_login_record where sn='$sn' order by lgdate desc;";
			$lg_array=mysqli_query($con,$lianxu);
			$lg_str="";
			while($lg_row=mysqli_fetch_row($lg_array)){
				$dt=$lg_row[0];
				$year=substr($dt,0,4);
				$month=substr($dt,7,2);
				$day=substr($dt,12,2);
				$dt=$year."-".$month."-".$day;
				//$date=strtotime($year."-".$month."-".$year);
				$lg_str=$lg_str.strtotime($dt)."@";
			}
			$lg_array=explode("@",$lg_str);
			$lx_days = getContinueDay(array_unique($lg_array));
			$time=date("Y年m月d日");
			//检测是否已经加过分
			$lg_lx=mysqli_fetch_row(mysqli_query($con,"select id from stu_credit_record where target='$sn' and attime='$time';"))[0];//BUG病灶
			if($lg_lx==""){
				switch($lx_days){
					case 7:						
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+1 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续7天登录','+','1','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 14:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+2 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续14天登录','+','2','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 30:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+5 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续30天登录','+','5','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 60:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+15 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续60天登录','+','15','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 90:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+23 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续90天登录','+','23','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 120:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+35 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续120天登录','+','35','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 180:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+60 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续180天登录','+','60','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
					case 365:
						//增加分数
						$credit_sql="update stu_usrcache set credit=credit+150 where sn='$sn';";
						$add_credit=mysqli_query($con,$credit_sql);
						//写入记录
						$var=mysqli_fetch_row(mysqli_query($con,"select credit from stu_usrcache where sn='$sn';"))[0];
						$record_id=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_credit_record;"))[0]+1;
						$record="insert into stu_credit_record (id,target,reason,mt,var,credit,attime) values ('$record_id','$sn','连续365天登录','+','160','$var','$time');";
						$add_record=mysqli_query($con,$record);
						break;
				}
			}  
					$all_sql = "select cardid from stu_cards_all;";
				$all_result=mysqli_query($con,$all_sql);
				$state=1;
				while($all_row=mysqli_fetch_row($all_result)){
				//限量检测
					$limit=mysqli_fetch_row(mysqli_query($con,"select maxinum from stu_cards_det where id='$all_row[0]';"))[0];
					
					$now=mysqli_fetch_row(mysqli_query($con,"select count(*) as a from stu_cards where cardo='$all_row[0]';"))[0];
					
					if($now<$limit or $limit=="unlimit"){
					
				//发卡循环开始	
				$if_exist="select id from stu_cards where belongto='$sn' and cardo='$all_row[0]';";
				$all_if_get=mysqli_fetch_row(mysqli_query($con,$if_exist))[0];
				if($all_if_get==""){
					$card_detail=mysqli_fetch_row(mysqli_query($con,"select * from stu_cards_det where id='$all_row[0]';"));
					$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_cards"))[0]+1;
					$do="insert into stu_cards (id,type,name,fm,whenfrom,belongto,until,ifused,notification,cardo) values ('$newid','$card_detail[1]','$card_detail[2]','$card_detail[3]','$card_detail[4]','$sn','$card_detail[5]','1','$card_detail[6]','$card_detail[0]')";
					$query=mysqli_query($con,$do);
					if($query){
						echo "<script>alert('由$card_detail[3]赠送的$card_detail[2]已到账！请查收！')</script>";
					}else{
						echo "<script>alert('由$card_detail[3]赠送的$card_detail[2]本应到账！但出现了一点小问题！')</script>";
					}
				}
				//发卡循环周期结束	
					}
			}
include("functions.php");
if($_SERVER['HTTP_HOST']=="weixin.ynudcc.cn"){
    $timestamp = time();
    $nonceStr = createNonceStr();
    $jsapiTicket=file_get_contents("微信JS_API的获取URL");
    $url='http://'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    $string="jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
    $signature = sha1($string);
    $signPackage = array(
        "appId"     => '微信公众号的APPID',
        "nonceStr"  => $nonceStr,
        "timestamp" => $timestamp,
        "url"       => urldecode($url) ,
        "signature" => $signature,
        "rawString" => $string
    );

}
$today=date("Y-m-d");
$ip=getIp();
$local_or_outter=filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
/*
if($local_or_outter && $today>="2019-09-19" && $today<="2019-10-20"){
	//header('HTTP/1.1 403 Forbidden');
	header("refresh:0;url=close_header.jpg");
	exit();
}*/
?>