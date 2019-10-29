<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=6;

?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>批量更新-<?php echo $org; ?>-学生服务系统</title>
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

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
                <h2>批量更新</h2>
            </div>


            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               更改部门名称
                                <small>将现有的部门名称更改为新的</small>
                            </h2>
                        </div>
                        <div class="body">
							
								<?php $dep_sql="select * from stu_deplib where org='$org';";
										$dep_result=mysqli_query($con,$dep_sql);
								while($row_dep=mysqli_fetch_row($dep_result)){
								?>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">

												<p>现名称:</p>
												<h3><?php echo $row_dep[2]; ?></h3>
                                    </div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
												<p>新名称</p>
                                        <div class="form-group form-float">
                                            <div class="form-line">
										<form method="post" action="controller/batch_update.php?id=<?php echo $row_dep[0]; ?>">
												<input class="form-control" placeholder="请输入新的名称" name="dep" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
										<button type="submit" class="btn btn-primary m-t-15 waves-effect">更改</button>
										<a href="controller/batch_dep_delete.php?id=<?php echo $row_dep[0]; ?>" onclick="if(confirm('确认要删除部门：<?php echo $row_dep[2]; ?>吗？')==false)return false;" class="btn btn-danger m-t-15 waves-effect">删除</a>
									</form>
                                    </div>
                                </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Inline Layout | With Floating Label -->
			 <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               添加新的部门
                                <small>新建一个部门</small>
                            </h2>
                        </div>
                        <div class="body">
                                <div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<form method="post" action="controller/add_dep.php">
                                        <div class="form-group form-float">
                                            <div class="form-line">
										<label class="form-label">部门名称</label>
                                                <input name="dep" type="text" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<button class="btn btn-success m-t-15 waves-effect" type="submit">新建</button>
									</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Inline Layout | With Floating Label -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>