<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=3;
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>权限授予-<?php echo $org; ?>-学生服务系统</title>
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
<?php include("header.php"); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    当前没有有管理员权限的人
                    <small>通常来说，学生干部在任期内自动拥有管理员权限。干事默认没有管理员权限，可由干部自行授予。</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                无权限人员列表
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>学号</th>
                                            <th>部门</th>
                                            <th>职别</th>
                                            <th>职务</th>
                                            <th>状态</th>
											<th>授予长期管理员</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>学号</th>
                                            <th>部门</th>
                                            <th>职别</th>
                                            <th>职务</th>
                                            <th>状态</th>
											<th>授予长期管理员</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select xm,sex,xh,dep,job,ps,state,id from stu_sucache where org='$org' and job<>'干部';";
								$member_result=mysqli_query($con,$get_member);
								while($member_row=mysqli_fetch_row($member_result)){
								?>
									<tr>
									<td><?php echo $member_row[0]; ?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $member_row[2]; ?></td>
									<td><?php echo $member_row[3]; ?></td>
									<td><?php echo $member_row[4]; ?></td>
									<td><?php echo $member_row[5]; ?></td>
									<td><?php 
									if($member_row[6]=="正常"){
										echo "<font color='#0B6C03'>".$member_row[6]."</font>";
									}else{
										echo "<font color='#AF0002'>".$member_row[6]."</font>";
									}
									 ?></td>
									<td><font color='#0B6C03'>
										
										<a href="controller/auth_give_long.php?id=<?php echo $member_row[7]; ?>" onclick="if(confirm('确认授予：<?php echo $member_row[0]; ?> 管理员权限吗？')==false)return false;"><em class="fa fa-key"></em>授予权限</a>
										
										</font></td>
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