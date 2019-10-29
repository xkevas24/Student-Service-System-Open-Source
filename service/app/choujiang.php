<?php
require("core_auth.php");
if(isset($_GET["cardid"]) && $_GET["cardid"]<>""){
	$cardid=xss($_GET["cardid"]);
}else{
	mysqli_close($con);
	echo "nodata";
	exit();
}
$date=date("Y-m-d");
if($date<"2019-05-05" or $data>"2019-05-10"){
	mysqli_close($con);
	echo "unable";
	exit();
}
//检查卡券是否已使用
$sql="select id from stu_choujiang where cardid='$cardid' and poststuno='$sn' and ifused='1' and gettype<>'final';";
$check=mysqli_fetch_row(mysqli_query($con,$sql))[0];
if($check==""){
	mysqli_close($con);
	echo "error";
	exit();
}
//卡券已使用
$sql="update stu_choujiang set ifused='0' where cardid='$cardid';";
$do=mysqli_query($con,$sql);

$prize_arr = array( 
    '0' => array('id' => 1, 'title' => '中奖', 'v' => 5), 
    '1' => array('id' => 2, 'title' => '1元校园卡补贴', 'v' => 0), 
    '2' => array('id' => 3, 'title' => 'yes3', 'v' => 0), 
    '3' => array('id' => 4, 'title' => 'yes4', 'v' => 0), 
    '4' => array('id' => 5, 'title' => 'yes5', 'v' => 0), 
    '5' => array('id' => 6, 'title' => 'yes6', 'v' => 0), 
    '6' => array('id' => 7, 'title' => '谢谢参与', 'v' => 95), 
); 
 
foreach ($prize_arr as $key => $val) { 
    $arr[$val['id']] = $val['v']; 
} 
 
$prize_id = getRand($arr); //根据概率获取奖品id 
$data['msg'] = ($prize_id == 7) ? 0 : 1; //如果为0则没中  
$data['prize_title'] = $prize_arr[$prize_id - 1]['title']; //中奖奖品 
//echo json_encode($data); 
if($data['msg']==1){
	
	//检查有没有被领
	$sql="select max(id) from stu_jiangping where opendate='$date' and cardid='null';";
	$check=mysqli_fetch_row(mysqli_query($con,$sql))[0];
	if($check<>""){		
		//检查此人今天是否中奖
		$today_check="select id from stu_jiangping where opendate='$date' and cardid<>'null' and poststuno='$sn';";
		$check_result=mysqli_fetch_row(mysqli_query($con,$today_check))[0];
		if($today_check<>""){
			$sql="update stu_jiangping set cardid='$cardid',poststuno='$sn' where id='$check';";
			mysqli_query($con,$sql);
			//添加卡券
			//奖品数组
			$cardo=mysqli_fetch_row(mysqli_query($con,"select cardo from stu_jiangping where id='$check';"))[0];
			$cardo_array=mysqli_fetch_row(mysqli_query($con,"select * from stu_cards_det where id='$cardo';"));

			$newid=mysqli_fetch_row(mysqli_query($con,"select max(id) from stu_cards;"))[0]+1;
			$sql="insert into stu_cards (id,type,name,fm,whenfrom,belongto,until,ifused,notification,cardo) values ('$newid','$cardo_array[1]','$cardo_array[2]','$cardo_array[3]','$cardo_array[4]','$sn','$cardo_array[5]','1','$cardo_array[6]','$cardo');";
			$do=mysqli_query($con,$sql);
			if($do){
				$content="周年庆活动奖品：".$cardo_array[2]."已到账卡包。";
				weixin("奖品到账通知","学生服务系统",array($sn),$content);
			}

			echo "由".$cardo_array[3]."提供的".$cardo_array[2];
		}else{
			echo "1";
		}
	}else{
		echo "-1";
	}
}else{
	echo "0";
}
//exit; //以json数组返回给前端 
 
function getRand($proArr) { //计算中奖概率 
    $rs = ''; //z中奖结果 
    $proSum = array_sum($proArr); //概率数组的总概率精度 
    //概率数组循环 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $rs = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        } 
    } 
    unset($proArr); 
    return $rs; 
}


?>