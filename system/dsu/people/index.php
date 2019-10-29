<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>人事和公共管理 - <?php echo $org; ?></title>
	<?php
	$active=0;
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
                <h2>主菜单</h2>
				<small>计算机软件版权声明：本产品全名为“学生OA办公平台”，是“学生服务系统的子系统”。软件著作权/知识产权所有：2016级物联网工程1班 许潇。该软件免费提供给本校使用，如有出售、索价、抄袭、恶意攻击等法律禁止的相关行为，均按照侵权处理！<small>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
				<a href="output.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-print fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                内容导出
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="profile_change.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-pencil-square-o fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                信息变更
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="auth_change_long.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-key fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                权限授予
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="auth_delete_long.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-unlock fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                权限解除
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
            </div>
			<div class="row clearfix">
				<a href="ban_for_short.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-ban fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                短期封禁
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
			</a>
				<a href="ban_for_long.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-ban fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                长期封禁
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="member_delete.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                       <div class="icon">
                            <i class="fa fa-user-times fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                删除成员
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="member_add.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                添加成员
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
            </div>
			<div class="row clearfix">
				<a href="batch_addition_member.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                批量添加成员
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="batch_delete.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                       <div class="icon">
                            <i class="fa fa-minus-circle fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                批量删除成员
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="batch_update.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-refresh fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                批量更新信息
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="card_manage.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-lime hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-credit-card fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                卡券管理
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
            </div>
			<div class="row clearfix">
				<a href="card_scanner.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-user fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                卡券验票员
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="card_manage.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-times-circle fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                卡券销毁
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="activity_manage.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-universal-access fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                活动发布
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
				<a href="activity_manage.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-refresh fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                活动更新
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
				</a>
            </div>
			<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-thumbs-up fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                投票发布
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-newspaper-o fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                投票管理
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-trash fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                投票删除
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-balance-scale fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                物资公示
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row clearfix">
               <a href="gongwen_manage.php" target="_blank">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                公文管理
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                </a>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-table fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                招新申请表
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-star fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                活动报名表
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-download fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                表格导出
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-commenting fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                留言反馈
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-cloud-download fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                学服云盘
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-envelope fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                站内信箱
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-lime hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-audio-description fa-4x"></i>
                        </div>
                        <div class="content">
                           <div class="header">
                            <h3>
                                广告管理
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
<?php 
mysqli_close($con);
?>
</body>

</html>