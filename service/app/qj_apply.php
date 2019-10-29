<?php
require("core_auth.php");
$orgname=$_SESSION["orgname"];
switch($orgname){
		case "院团委":
			$oid=11;
			break;
		case '学生会青年志愿者协会':
			$oid=21;
			break;
		case '学生会自律管理委员会':
			$oid=22;
			break;
		case '学生会学生社团联合会':
			$oid=23;
			break;
		case '学生会伙食管理委员会':
			$oid=24;
			break;
		case '学生会秘书处':
			$oid=25;
			break;
		case '学生会大学生艺术团':
			$oid=26;
			break;
		case '人文学院':
			$oid=31;
			break;
		case '法学院':
			$oid=32;
			break;
		case '管理学院':
			$oid=33;
			break;
		case '演讲与交际协会':
			$oid=61;
			break;
		case '魔术协会':
			$oid=62;
			break;
		case 'TOP电脑社':
			$oid=63;
			break;
}
$suauth=$_SESSION["suauth"];
$iden=$_SESSION["iden"];
$subdate=date("Y-m-d");
$bzname=$_POST["gb_name"];
$reason=$_POST["qj_reason"];
$qjtime=$_POST["qj_time"];
			$sql = "select qjid from dsu_qingjia where xh='$sn' and orgname='$orgname' and subdate='$subdate';";
			$check = mysqli_query($con_db2,$sql);
			$check = mysqli_fetch_array($check);
			if($check){
			$notice="失败！今日已提交过请假条！";
			mysqli_close($con_db2);
		}else{
			$idcheck = mysqli_fetch_array(mysqli_query($con_db2,"select max(qjid) from dsu_qingjia;"));
			$id = $idcheck[0];
			$id = $id + 1;	
			$sql = "insert into dsu_qingjia(qjid,bzname,name,fy,class,xh,reason,qjtime,orgname,subdate) values($id,'$bzname','$name','$fy','$class','$sn','$reason','$qjtime','$orgname','$subdate');";
  			mysqli_query($con_db2,$sql);
			mysqli_close($con_db2);
			require_once("../../system/dsu/pub_functions/wxtz.php");
			$sjr=mysqli_fetch_row(mysqli_query($con,"select xh from stu_sucache where xm='$bzname' and org='$orgname';"))[0];
			$title=$name."向你提交了请假申请";
			$content=$name."因".$reason."向你提交了请假申请，点击进行审批。";
			$tuisong=wxtz($title,$orgname,"weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=000012".$oid,$sjr,$content);
			$notice="提交成功！请等待审核！";
			mysqli_close($con);
			}
echo "<script>alert('$notice')</script>";
header("refresh:0;url=../attence.php");
?>