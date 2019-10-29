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
    <title>文章审核-<?php echo $org; ?>-学生服务系统</title>
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
                    文章审核
                    <small>审核各家的SPS活动推文，根据相关规定予以同意或退回。</small>
                </h2>
            </div>
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                待审核的文章
                            </h2>
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
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>预览</th>
											<th>点击量</th>
                                            <th>通过</th>
											<th>退回</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>编号</th>
                                            <th>标题</th>
											<th>发布时间</th>
                                            <th>缩略图</th>
                                            <th>导读</th>
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>预览</th>
											<th>点击量</th>
                                            <th>通过</th>
											<th>退回</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,title,pubtime,pic,keyword,state,onclick,org from stu_article where state='审核中' order by pubtime desc;";
								$member_result=mysqli_query($con,$get_member);
								while($member_row=mysqli_fetch_row($member_result)){
								?>
									<tr>
									<td><?php echo $member_row[0]; ?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $member_row[2]; ?></td>
									<td><img src="<?php echo $member_row[3]; ?>" height="100px"></td>
									<td><?php echo $member_row[4]; ?></td>
									<td><?php echo $member_row[7]; ?></td>
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
										<a href="controller/activity_shenhe_pass.php?id=<?php echo $member_row[0]; ?>" onclick="if(confirm('确认通过：<?php echo $member_row[1]; ?>这篇文章吗？')==false)return false;"><p class="font-bold col-teal"><em class="fa fa-check"></em></p></a>			
										</td>
									<td>
										<a href="controller/activity_shenhe_close.php?id=<?php echo $member_row[0]; ?>" onclick="if(confirm('确认退回：<?php echo $member_row[1]; ?>这篇文章吗？')==false)return false;"><p class="font-bold col-red"><em class="fa fa-close"></em></p></a>			
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
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                审核通过的文章
                            </h2>
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
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
											<th>重新退回</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>编号</th>
                                            <th>标题</th>
											<th>发布时间</th>
                                            <th>缩略图</th>
                                            <th>导读</th>
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
											<th>重新退回</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,title,pubtime,pic,keyword,state,onclick,org from stu_article where state='正常' order by pubtime desc;";
								$member_result=mysqli_query($con,$get_member);
								while($member_row=mysqli_fetch_row($member_result)){
								?>
									<tr>
									<td><?php echo $member_row[0]; ?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $member_row[2]; ?></td>
									<td><img src="<?php echo $member_row[3]; ?>" height="100px"></td>
									<td><?php echo $member_row[4]; ?></td>
									<td><?php echo $member_row[7]; ?></td>
									<td><?php 
									if($member_row[5]=="正常"){
										echo "<font color='#0B6C03'>".$member_row[5]."</font>";
									}else{
										echo "<font color='#AF0002'>".$member_row[5]."</font>";
									}
									 ?></td>
									
									<td><a href="article/article.php?atid=<?php echo $member_row[0]; ?>" target="_blank"><em class="fa fa-eye"></em></a></td>
									<td><?php echo $member_row[6]; ?></td>
									<td><a href="controller/activity_shenhe_close.php?id=<?php echo $member_row[0]; ?>" onclick="if(confirm('确认退回：<?php echo $member_row[1]; ?>这篇文章吗？')==false)return false;"><p class="font-bold col-red"><em class="fa fa-close"></em></p></a></td>
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
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                已退回的文章
                            </h2>
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
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
											<th>强制删除</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>编号</th>
                                            <th>标题</th>
											<th>发布时间</th>
                                            <th>缩略图</th>
                                            <th>导读</th>
											<th>来自</th>
                                            <th>审核状态</th>
                                            <th>阅读</th>
											<th>点击量</th>
											<th>强制删除</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,title,pubtime,pic,keyword,state,onclick,org from stu_article where state='退回' order by pubtime desc;";
								$member_result=mysqli_query($con,$get_member);
								while($member_row=mysqli_fetch_row($member_result)){
								?>
									<tr>
									<td><?php echo $member_row[0]; ?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $member_row[2]; ?></td>
									<td><img src="<?php echo $member_row[3]; ?>" height="100px"></td>
									<td><?php echo $member_row[4]; ?></td>
									<td><?php echo $member_row[7]; ?></td>
									<td><?php 
									if($member_row[5]=="正常"){
										echo "<font color='#0B6C03'>".$member_row[5]."</font>";
									}else{
										echo "<font color='#AF0002'>".$member_row[5]."</font>";
									}
									 ?></td>
									
									<td><a href="article/article.php?atid=<?php echo $member_row[0]; ?>" target="_blank"><em class="fa fa-eye"></em></a></td>
									<td><?php echo $member_row[6]; ?></td>
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