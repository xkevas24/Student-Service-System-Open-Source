<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=10;
	
	
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>公文管理-<?php echo $org; ?>-学生服务系统</title>
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

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
	<!-- Fontawesome -->
    <link href="fa/css/font-awesome.css" rel="stylesheet">
</head>

<body class="theme-red">
<?php include("header.php"); 

	function cd_total($id){
		$sql="select count(*) as a from stu_cards where cardo='$id';";
		$result=mysqli_fetch_array(mysqli_query($con,$sql))["a"];
		//$i=0;
//		while($row=mysqli_fetch_row($result)){
//		$i++;
//		}
		return $result;
	}

	?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>公文管理</h2>
            </div>
			<?php 
			if($orgname=="院团委"){
			?>
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                当前已发布的公文
                            </h2>
							<a href="gongwen_pub.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-plus"></em>发布新的公文</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                           	<th>公文编号</th>
                                            <th>标题</th>
                                            <th>字号</th>
                                            <th>发送部门</th>
                                            <th>收件数</th>
                                            <th>已阅</th>
                                            <th>平均时长</th>
                                            <th>下载附件</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>公文编号</th>
                                            <th>标题</th>
                                            <th>字号</th>
                                            <th>发送部门</th>
                                            <th>收件数</th>
                                            <th>已阅</th>
                                            <th>平均时长</th>
                                            <th>下载附件</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
									$result=mysqli_query($con,"select * from stu_gongwen where org='$orgname' order by wjbh desc;");
									while($row=mysqli_fetch_row($result)){
										$gwid=$row[0];
								?>
									<tr>
									<td><?php echo $row[8]; ?></td>
									<td><?php echo $row[1]; ?></td>
									<td><?php echo $row[2]; ?></td>
									<td><?php echo $row[6]; ?></td>
									<td><?php $total=count(explode("@",$row[9])); echo $total; ?></td>
									<td><a href="gongwen_status.php?gwid=<?php echo $gwid; ?>" target="_blank"><?php $yidu=mysqli_fetch_row(mysqli_query($con,"select count(id) from stu_gongwen_status where gwid='$gwid' and yidu='1';"))[0]; echo $yidu; ?>/<?php echo $total; ?></a></td>
									<td><?php $sum_seconds=mysqli_fetch_row(mysqli_query($con,"select sum(ydsc) from stu_gongwen_status where gwid='$gwid';"))[0]; echo $sum_seconds/$total; ?>秒</td>
									<td><a href="../../../fileshare/pdf/<?php echo $row[4]; ?>" download="<?php echo $row[1]; ?>"><em class="fa fa-download"></em></a></td>
									
									</tr>
								<?php  } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                公文收件箱
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                           	<th>公文编号</th>
                                            <th>标题</th>
                                            <th>字号</th>
                                            <th>发送部门</th>
                                            <th>下载附件</th>
                                            <th>转发</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>公文编号</th>
                                            <th>标题</th>
                                            <th>字号</th>
                                            <th>发送部门</th>
                                            <th>下载附件</th>
                                            <th>转发</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
									$box="select * from stu_gongwen where gw_range='0' or gw_range='1' or gw_range='2' or gw_range='3' or gw_range='4' or gw_range='5' or receiver like '%$sn%' order by wjbh desc;";
									$result=mysqli_query($con,$box);
										//echo $box;
									while($row=mysqli_fetch_row($result)){ 
								?>
									<tr>
									<td><?php echo $row[8]; ?></td>
									<td><?php echo $row[1]; ?></td>
									<td><?php echo $row[2]; ?></td>
									<td><?php echo $row[6]; ?></td>
									<td><a href="../../../fileshare/pdf/<?php echo $row[4]; ?>" download="<?php echo $row[1]; ?>"><em class="fa fa-download"></em></a></td>
									<td><?php 
									if($row[10]<>"1"){	
										?>
									<a href="gongwen_zhuanfa.php?gwid=<?php echo $row[0]; ?>"><em class="fa fa-reply-all"></em></a>
									<?php }else{ ?>
									<em class="fa fa-ban"></em>禁止转发
									<?php } ?>
									</td>
									</tr>
								<?php  } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
<?php mysqli_close($con); ?>
</html>