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
    <title>批量删除成员-<?php echo $org; ?>-学生服务系统</title>
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
                <h2>批量删除成员</h2>
            </div>


            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                填写需要删除的成员学号
                                <small>如果学号填写错误，可能会误删其他成员。请至“内容导出”出，仔细抄写学号信息。学号之间以@分隔。</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post" action="controller/batch_delete.php">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
												<textarea rows="6" name="xh" placeholder="请仔细填写学号，以@分隔" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<button class="btn btn-primary m-t-15 waves-effect" type="submit">提交</button>
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