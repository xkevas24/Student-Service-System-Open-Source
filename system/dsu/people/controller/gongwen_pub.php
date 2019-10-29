<?php
function getEXT($filename)
{
    $arr = explode('.',$filename);
    return array_pop($arr);;
}
function file_do($file,$tmp){
    $path = "/wwwroot/fileshare/pdf/";
    $file_name=$file;
    $ext=getEXT($file_name);
    $fname=explode(".",$file_name)[0];
    //$filename = $path .base64_encode($fname).".".$ext;
	$filename = $path .time().".".$ext;
    move_uploaded_file($tmp, $filename);
    return $filename;
}
session_start();
require("mysqli.php");
$con=con("stu");
$title=$_POST["title"];
$zihao=$_POST["zihao"];
$range=$_POST["range"];
$wjbh=$_POST["bianhao"];
if(isset($_POST["jzzf"])){
	if($_POST["jzzf"]=="1"){
		$jzzf="1";
	}else{
		$jzzf="0";
	}
}else{
	$jzzf="0";
}
$from=$_SESSION["orgname"];
$fssj=date("Y年m月d日H时i分");
$filedir=file_do($_FILES["file"]["name"],$_FILES["file"]["tmp_name"]);
$file_name=basename($filedir,".pdf");
$file_value=basename($filedir);
$id=table_new_id("stu","stu_gongwen");
$sql="insert into stu_gongwen (id,gw_title,gw_zihao,gw_range,gw_dir,file_title,org,fssj,wjbh,jzzf) values ('$id','$title','$zihao','$range','$file_value','$file_name','$from','$fssj','$wjbh','$jzzf');";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('发布成功！')</script>";
	function shortLink($title,$org,$uri,$tuisong_xh,$tsct){
    //发送内容
    $title=$title;
    $fsbm=$org;
    $content=$tsct;
    $fsr="20162153014";
    $url="http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=000021".$uri;


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
	
	switch($range){
		case 0:
			$xh_result=mysqli_query($con,"select xh from stu_sucache GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 1:
			$xh_result=mysqli_query($con,"select xh from stu_sucache where job='干部' GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 2:
			$xh_result=mysqli_query($con,"select xh from stu_sucache where org='院团委' and job='干部' GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 3:
			$xh_result=mysqli_query($con,"select xh from stu_sucache where org='院团委' GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 4:
			$xh_result=mysqli_query($con,"select xh from stu_sucache where job='干部' and (org='学生会秘书处' or org='学生会自律管理委员会' or org='学生会青年志愿者协会' or org='学生会学生社团联合会' or org='学生会伙食管理委员会' or org='学生会大学生艺术团') GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 5:
			$xh_result=mysqli_query($con,"select xh from stu_sucache where org='学生会秘书处' or org='学生会自律管理委员会' or org='学生会青年志愿者协会' or org='学生会学生社团联合会' or org='学生会伙食管理委员会' or org='学生会大学生艺术团' GROUP BY xh HAVING count(xh) = 1;");
			while($row=mysqli_fetch_row($xh_result)){
				$xh=$xh."@".$row[0];
			}
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
		case 6:
			$xh=$_POST["zdy"];
			$rv=$xh;
			$xh=explode("@",$xh);
			break;
	}
	
	//print_r($xh);
	echo shortLink($title,$from,$file_name,$xh,"你有待阅读的公文：".$title);
	$receiver=mysqli_query($con,"update stu_gongwen set receiver='$rv' where id='$id';");
	//遍历xh数组，写入记录
	foreach($xh as $value){
		$st_id=table_new_id("stu","stu_gongwen_status");
		$st_write_sql="insert into stu_gongwen_status (id,sn,gwid,ydsc,yidu) values ('$st_id','$value','$id','0','0');";
		$st_write=mysqli_query($con,$st_write_sql);
		//echo $st_write;
	}
	mysqli_close($con);
	header("refresh:0;url=../gongwen_manage.php");
}else{
	echo "<script>alert('发布失败！')</script>";
	echo "请将下图发送给管理员：<br>";
	echo $sql;
	mysqli_close($con);
	header("refresh:70;url=../gongwen_manage.php");
}

?>