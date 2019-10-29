<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=7;
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	}else{
		$id=0;
	}
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>卡券发放记录-<?php echo $org; ?>-学生服务系统</title>
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
                <h2>卡券发放记录</h2>
            </div>

			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                下列同学拥有此卡券且尚未使用
                            </h2>
							<a href="card_manage.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-backward"></em>返回卡券管理</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
											<th>编号</th>
                                            <th>姓名</th>
                                            <th>学号</th>
                                            <th>性别</th>
                                            <th>分院</th>
                                            <th>班级</th>
                                            <th>时间</th>
                                            <th>删除卡券</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>编号</th>
                                            <th>姓名</th>
                                            <th>学号</th>
                                            <th>性别</th>
                                            <th>分院</th>
                                            <th>班级</th>
                                            <td>时间</td>
                                             <th>删除卡券</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,belongto,receive_time from stu_cards where cardo='$id' and fm='$org' and ifused='1';";
								$member_result=mysqli_query($con,$get_member);
								$i=0;
								while($member_row=mysqli_fetch_row($member_result)){
								$i++;
								$stu_info=mysqli_fetch_row(mysqli_query($con,"select name,fy,class,sex from stu_usrcache where sn='$member_row[1]';"));
								?>
									<tr>
									<td><?php echo $i; ?></td>
									<td><?php $user_name=$stu_info[0]; 
										echo $user_name;
										?></td>
									<td><?php echo $member_row[1]; ?></td>
									
									<td><?php echo $stu_info[3] ?></td>
									<td><?php echo $stu_info[1] ?></td>
									<td><?php echo $stu_info[2] ?></td>
									
									<td><?php echo $member_row[2];  ?></td>
									
									<td><a href="controller/card_pro_delete.php?id=<?php echo $member_row[0]."&bt=".$id; ?>" onclick="if(confirm('确认要销毁：<?php echo $user_name; ?>持有的这张卡券吗？')==false)return false;" ><font color='#AF0002'><em class="fa fa-trash"></em></font></a></td>
									</tr>
								<?php } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                下列同学拥有此卡券且已经使用
                            </h2>
							<a href="card_manage.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-backward"></em>返回卡券管理</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
											<th>编号</th>
                                            <th>姓名</th>
                                            <th>学号</th>
                                            <th>性别</th>
                                            <th>分院</th>
                                            <th>班级</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>编号</th>
                                            <th>姓名</th>
                                            <th>学号</th>
                                            <th>性别</th>
                                            <th>分院</th>
                                            <th>班级</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								$get_member="select id,belongto from stu_cards where cardo='$id' and fm='$org' and ifused='0';";
								$member_result=mysqli_query($con,$get_member);
								$i=0;
								while($member_row=mysqli_fetch_row($member_result)){
								$i++;
								$stu_info=mysqli_fetch_row(mysqli_query($con,"select name,fy,class,sex from stu_usrcache where sn='$member_row[1]';"));
								?>
									<tr>
									<td><?php echo $i; ?></td>
									<td><?php $user_name=$stu_info[0]; 
										echo $user_name;
										?></td>
									<td><?php echo $member_row[1]; ?></td>
									<td><?php echo $stu_info[3]; ?></td>
									<td><?php echo $stu_info[1]; ?></td>
									<td><?php echo $stu_info[2]; ?></td>
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