<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=5;
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>长期封禁-<?php echo $org; ?>-学生服务系统</title>
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
                    长期封禁
                    <small>如果有成员违反了《学生服务系统》管理条例，系统单位应当及时对其予以封禁处罚。视情节严重给予：短期封禁（7~15天）和长期封禁（30天）。封禁后仍违反规定的，单位应将其从系统中删除。</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                长期封禁者名单
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
											<th>截止日期</th>
											<th>解禁</th>
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
											<th>截止日期</th>
											<th>解禁</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select xm,sex,xh,dep,job,ps,state,id,bantil from stu_sucache where org='$org' and state='长封禁';";
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
									<td><?php echo $member_row[8]; ?></td>
									<td>
										<a href="controller/unban.php?id=<?php echo $member_row[7]; ?>" onclick="if(confirm('确认解除：<?php echo $member_row[0]; ?> 的封禁状态吗吗？')==false)return false;" ><font color='#0B6C03'><em class="fa fa-check"></em>解除</font></a>
										
									</td>
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
			
			<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                正常状态名单
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
											<th>解禁</th>
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
											<th>解禁</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select xm,sex,xh,dep,job,ps,state,id from stu_sucache where org='$org' and state='正常';";
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
									<td>
										<a href="controller/long_ban.php?id=<?php echo $member_row[7]; ?>" onclick="if(confirm('确认封禁：<?php echo $member_row[0]; ?>吗？')==false)return false;" ><font color='#AF0002'><em class="fa fa-close"></em>长封禁</font></a>
										
									</td>
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