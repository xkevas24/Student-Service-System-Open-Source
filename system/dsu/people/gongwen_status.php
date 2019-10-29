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
	$gwid=$_GET["gwid"];
	$gw_status=mysqli_fetch_row(mysqli_query($con,"select * from stu_gongwen where id='$gwid';"));
	$gw_title=$gw_status[1];
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $gw_title; ?>-公文阅读情况</title>
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
</head>

<body class="theme-red">
<?php include("header.php"); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    阅读详情
                    <small>公文阅读详情</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $gw_title; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<caption><?php echo $org; ?></caption>
                                    <thead>
                                        <tr>
                                            <th>组织</th>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>学号</th>
                                            <th>部门</th>
                                            <th>职别</th>
                                            <th>职务</th>
                                            <th>是否阅读</th>
                                            <th>阅读时长</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>组织</th>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>学号</th>
                                            <th>部门</th>
                                            <th>职别</th>
                                            <th>职务</th>
                                            <th>是否阅读</th>
                                            <th>阅读时长</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_detail="select * from stu_gongwen_status where gwid='$gwid';";
								$detail_result=mysqli_query($con,$get_detail);
								while($row=mysqli_fetch_row($detail_result)){
									$stuno=$row[1];
									$stuinfo=mysqli_fetch_row(mysqli_query($con,"select * from stu_sucache where xh='$stuno';"));
								?>
									<tr>
									<td><?php echo $stuinfo[5]; ?></td>
									<td><?php echo $stuinfo[1]; ?></td>
									<td><?php echo $stuinfo[2]; ?></td>
									<td><?php echo $stuno; ?></td>
									<td><?php echo $stuinfo[3]; ?></td>
									<td><?php echo $stuinfo[7]; ?></td>
									<td><?php echo $stuinfo[8]; ?></td>
									<td><?php 
									if($row[4]=="1"){
										echo "<font color='#0B6C03'>已读</font>";
									}else{
										echo "<font color='#AF0002'>未读</font>";
									}
									 ?></td>
									 <td><?php echo $row[3]; ?>秒</td>
									</tr>
								<?php } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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