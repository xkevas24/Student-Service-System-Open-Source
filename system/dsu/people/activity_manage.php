<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=8;
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>活动管理-<?php echo $org; ?>-学生服务系统</title>
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
                    活动管理
                    <small>发布、编辑、删除活动推文</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                全部文章
                            </h2>
							<a href="activity_edit.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-plus"></em>发布新的文章</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>标题</th>
											<th>发布时间</th>
                                            <th>缩略图</th>
                                            <th>导读</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
                                            <th>编辑</th>
											<th>删除</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>编号</th>
                                            <th>标题</th>
											<th>发布时间</th>
                                            <th>缩略图</th>
                                            <th>导读</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
                                            <th>编辑</th>
											<th>删除</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,title,pubtime,pic,keyword,state,onclick from stu_article where org='$org';";
								$member_result=mysqli_query($con,$get_member);
								while($member_row=mysqli_fetch_row($member_result)){
								?>
									<tr>
									<td><?php echo $member_row[0]; ?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $member_row[2]; ?></td>
									<td><img src="<?php echo $member_row[3]; ?>" height="100px"></td>
									<td><?php echo $member_row[4]; ?></td>
									
									<td><?php 
									if($member_row[5]=="正常"){
										echo "<font color='#0B6C03'>".$member_row[5]."</font>";
									}else{
										echo "<font color='#AF0002'>".$member_row[5]."</font>";
									}
									 ?></td>
									
									<td><a href="article/article.php?atid=<?php echo $member_row[0]; ?>" target="_blank"><em class="fa fa-eye"></em></a></td>
									<td><?php echo $member_row[6]; ?></td>
									<td>
										<?php if($member_row[5]=="正常"){?>
										<em class="fa fa-lock"></em>
										<?php }else{ ?>
										<a href="activity_re_edit.php?id=<?php echo $member_row[0]; ?>"><em class="fa fa-pencil-square-o"></em></a>
										<?php } ?>
										
										</td>
									<td><a href="controller/activity_delete.php?id=<?php echo $member_row[0]; ?>" onclick="if(confirm('确认删除：<?php echo $member_row[1]; ?>这篇文章吗？')==false)return false;"><em class="fa fa-trash"></em></a></td>
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