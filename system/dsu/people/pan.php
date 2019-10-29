<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	if(isset($_GET["floder"])){
		$floder=$_GET["floder"];
	}else{
		$floder="/";
	}
	$get_public="select * from stu_uploadcache where filearea='public' and floder='$floder' order by upsj desc;";
	$file_public=mysqli_query($con,$get_public);
	
	$get_private="select * from stu_uploadcache where filearea='private' and floder='$floder' order by upsj desc;";
	$file_private=mysqli_query($con,$get_private);
	
	$get_file_public="select * from stu_floder where filearea='public' and father='$floder' order by name desc;";
	$floder_public=mysqli_query($con,$get_file_public);
	
	$get_file_private="select * from stu_floder where filearea='private' and father='$floder' order by name desc;";
	$floder_private=mysqli_query($con,$get_file_private);
	
	function coloricon($file_type){
		$type=strtolower($file_type);
		switch($type){
			case "doc":
			case "docx":
				$cs=array("color"=>"blue","icon"=>"file-word-o");
				break;
			case "xls":
			case "xlsx":
			case "csv":
				$cs=array("color"=>"green","icon"=>"file-excel-o");
				break;
			case "ppt":
			case "pps":
			case "pptx":
				$cs=array("color"=>"red","icon"=>"file-powerpoint-o");
				break;
			case "pdf":
				$cs=array("color"=>"deep-orange","icon"=>"file-pdf-o");
				break;
			case "exe":
			case "apk":
			case "dmg":
			case "ipa":
				$cs=array("color"=>"blue-grey","icon"=>"cogs");
				break;
			case "7z":
			case "rar":
			case "zip":
			case "iso":
				$cs=array("color"=>"purple","icon"=>"file-archive-o");
				break;
			case "mp3":
			case "ape":
			case "wav":
			case "flac":
			case "aac":
				$cs=array("color"=>"teal","icon"=>"music");
				break;
			case "mp4":
			case "rmvb":
			case "avi":
			case "flv":
			case "mkv":
			case "wmv":
			case "mov":
			case "mpeg":
				$cs=array("color"=>"brown","icon"=>"file-video-o");
				break;
			case "txt":
				$cs=array("color"=>"light-green","icon"=>"file-text-o");
				break;
			case "jpg":
			case "jpge":
			case "png":
			case "gif":
			case "bmp":
			case "psd":
			case "ai":
				$cs=array("color"=>"indigo","icon"=>"file-image-o");
				break;
			default:
				$cs=array("color"=>"grey","icon"=>"file");
				break;
		}
		return $cs;
	}
	// 计算中文字符串长度
function utf8_strlen($string = null) {
// 将字符串分解为单元
preg_match_all("/./us", $string, $match);
// 返回单元个数
return count($match[0]);
}

function count_size($bit)

	{

		$type = array('Bytes','KB','MB','GB','TB');

		for($i = 0; $bit >= 1024; $i++)//单位每增大1024，则单位数组向后移动一位表示相应的单位

		{

			$bit/=1024;

		}

		return (floor($bit*100)/100).$type[$i];//floor是取整函数，为了防止出现一串的小数，这里取了两位小数

	}
	
function xiaoyuanurl($url){
	$durl=explode('//',$url);
	$rest=explode('/',$durl[1]);
	array_splice($rest, 0, 1);
	array_splice($rest, 0, 1);
	$n=implode("/", $rest);
	$server=array(11,12,13,14,3,32,33,34);
	shuffle($server);
	$newurl="http://192.168.103.".$server[0]."/".$n;
	return $newurl;
}

function floder_name($id,$conn){
	$sql="select name from stu_floder where id='$id';";
	$name=mysqli_fetch_row(mysqli_query($conn,$sql))[0];
	return $name;
}

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>学服云盘 - <?php echo $org; ?></title>
	<?php
	$active=11;
	?>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
	
	 <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
	<!-- Fontawesome -->
    <link href="fa/css/font-awesome.css" rel="stylesheet">
</head>

<body class="theme-green">
<?php include("header.php"); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>学生服务系统云盘</h2>
            </div>
			<!-- PUBLIC AREA -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                公有资源库
								<small>这里的资源所有入驻组织均可调阅</small>-<span class="font-bold col-red">注意：由于学校防火墙设置，大于10M的文件仅校园网可以下载！！</span>
                            </h2>
                        </div>
                        <div class="body">
<div class="row clearfix js-sweetalert">
<a href="#">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-folder fa-4x"></i>
                        </div>
                        <div class="content">
						<h4 class="font-bold col-white">文件夹名</h4>
                          <p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
                        </div>
                    </div>
                </div>
</a>
<a data-type="success">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-grey hover-expand-effect">
<div class="icon">
<i class="fa fa-file fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">普通文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-blue hover-expand-effect">
<div class="icon">
<i class="fa fa-file-word-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">WORD文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-green hover-expand-effect">
<div class="icon">
<i class="fa fa-file-excel-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">EXCEL文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-red hover-expand-effect">
<div class="icon">
<i class="fa fa-file-powerpoint-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">PPT文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-deep-orange hover-expand-effect">
<div class="icon">
<i class="fa fa-file-pdf-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">PDF文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-blue-grey hover-expand-effect">
<div class="icon">
<i class="fa fa-cogs fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">可执行文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-purple hover-expand-effect">
<div class="icon">
<i class="fa fa-file-archive-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">压缩文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-teal hover-expand-effect">
<div class="icon">
<i class="fa fa-music fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">音乐文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-brown hover-expand-effect">
<div class="icon">
<i class="fa fa-file-video-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">视频文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-light-green hover-expand-effect">
<div class="icon">
<i class="fa fa-file-text-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">TXT文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-indigo hover-expand-effect">
<div class="icon">
<i class="fa fa-file-image-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">图片文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

</div>				
							
                        </div>
                    </div>
                </div>
			<!-- PUBLIC AREA -->
			
			<!-- PRIVATE AREA -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                私有资源库-<?php echo $org; ?>-<span class="font-bold col-red">注意：由于学校防火墙设置，大于10M的文件仅校园网可以下载！！</span>
								<small>这里的资源仅自家组织可以调阅</small>
                            </h2>
							<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" role="button" aria-expanded="true" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a class=" waves-effect waves-block" href="javascript:void(0);">新建文件夹</a></li>
                                        <li><a class=" waves-effect waves-block" href="javascript:void(0);">上传文件</a></li>
                                        <li><a class=" waves-effect waves-block" href="javascript:void(0);">上传至文件夹</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
							<h2><?php
								$layer=explode("/",$floder);
								$yuansu=count($layer);
								for($i=1;$i<$yuansu;$i++){
									$f=array_slice($layer,1,$i);
									$url=implode("/",$f);
									if($i==1){
										echo "<a href='?floder=/'>根目录</a>/"."<a href='?floder=/$url'>".floder_name($layer[$i],$con)."</a>";
									}else{
										echo "/"."<a href='?floder=/$url'>".floder_name($layer[$i],$con)."</a>";
									}
									
								}
								 ?></h2>
<div class="row clearfix">
<?php while($row_floer_private=mysqli_fetch_row($floder_private)){ ?>
<a href="<?php 
	if($row_floer_private[2]=="/"){
		echo "?floder=/".$row_floer_private[0];
	}else{
		echo "?floder=".$row_floer_private[2]."/".$row_floer_private[0];
	}
	 ?>
		 
	">
	 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-folder fa-4x"></i>
                        </div>
                        <div class="content">
						<h4 class="font-bold col-white"><?php echo $row_floer_private[1]; ?></h4>
                          <p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
                        </div>
                    </div>
                </div>
</a>
<?php } ?>
	<?php while($row_private=mysqli_fetch_row($file_private)){
	$cs=coloricon($row_private[2]);
	$len=utf8_strlen($row_private[3]);
	if($len<15){
		$size=4;
	}elseif($len<30){
		$size=5;
	}else{
		$size=6;
	}
	$file_size=count_size($row_private[4]);
	?>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" title="<?php echo $file_size; ?>">
                    <div class="info-box bg-<?php echo $cs["color"]; ?>">
                        <div class="icon">
                            <i class="fa fa-<?php echo $cs["icon"]; ?> fa-4x"></i>
                        </div>
                        <div class="content">
						<h<?php echo $size; ?> class="font-bold col-white"><?php echo $row_private[3]; 
							?></h<?php echo $size; ?>>
                          
							 &nbsp  <a href="<?php 
	if($row_private[4]<10485760){
		echo $row_private[1];
	}else{
		echo xiaoyuanurl($row_private[1]);
	}
	
	 ?>" class="font-normal col-white" target="_blank" title="下载"><em class="fa fa-download"></em></a>&nbsp 
							  <a href="<?php ?>" class="font-normal col-white" target="_blank" title="公有化文件"><em class="fa fa-eye"></em></a>&nbsp
							  <a href="<?php ?>" class="font-normal col-white" target="_blank" title="移动文件"><em class="fa fa-arrows"></em></a>&nbsp
							  <a href="<?php ?>" class="font-normal col-white" target="_blank" title="复制文件"><em class="fa fa-files-o"></em></a>&nbsp
							  <a href="<?php ?>" class="font-normal col-white" target="_blank" title="删除文件"><em class="fa fa-trash"></em></a>&nbsp
							  <a href="<?php ?>" class="font-normal col-white" target="_blank" title="分享链接"><em class="fa fa-share-square-o"></a></em>
						
						</div>
                       
                    </div>
                </div>
	<?php } ?>
<!--<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-grey hover-expand-effect">
<div class="icon">
<i class="fa fa-file fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">普通文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-blue hover-expand-effect">
<div class="icon">
<i class="fa fa-file-word-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">WORD文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-green hover-expand-effect">
<div class="icon">
<i class="fa fa-file-excel-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">EXCEL文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-red hover-expand-effect">
<div class="icon">
<i class="fa fa-file-powerpoint-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">PPT文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-deep-orange hover-expand-effect">
<div class="icon">
<i class="fa fa-file-pdf-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">PDF文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-blue-grey hover-expand-effect">
<div class="icon">
<i class="fa fa-cogs fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">可执行文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-purple hover-expand-effect">
<div class="icon">
<i class="fa fa-file-archive-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">压缩文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-teal hover-expand-effect">
<div class="icon">
<i class="fa fa-music fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">音乐文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-brown hover-expand-effect">
<div class="icon">
<i class="fa fa-file-video-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">视频文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>

<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-light-green hover-expand-effect">
<div class="icon">
<i class="fa fa-file-text-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">TXT文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>
	
<a href="#">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="info-box bg-indigo hover-expand-effect">
<div class="icon">
<i class="fa fa-file-image-o fa-4x"></i>
</div>
<div class="content">
<h4 class="font-bold col-white">图片文件</h4>
<p class="font-normal col-white"><em class="fa fa-download"></em>&nbsp <em class="fa fa-eye"></em>&nbsp<em class="fa fa-arrows"></em>&nbsp<em class="fa fa-files-o"></em>&nbsp<em class="fa fa-trash"></em>&nbsp<em class="fa fa-share-square-o"></em></p>
</div>
</div>
</div>
</a>-->

</div>				
							
                        </div>
                    </div>
                </div>
			<!-- PRIVATE AREA -->
		
            <!-- Widgets -->

            <!-- #END# Widgets -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

	<!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
	
	<!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
	
	
    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
	 <script src="js/pages/ui/dialogs.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
<?php 
mysqli_close($con);
?>
</body>

</html>