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
	}

?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>卡券发放-<?php echo $org; ?>-学生服务系统</title>
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
               <h2>
                    卡券发放
                    <small>你可以选择：1、批量发放，2、全体发放，3、扫码发放，三种方式，发放卡券。</small>
                </h2>
            </div>


            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                填写学号以批量发放
                                <small>如果学号填写错误，可能会误发至其他账户。请仔细填写学号信息。学号之间以@分隔。</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post" action="controller/card_provide_batch.php?id=<?php echo $id; ?>">
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
			
			<!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                向全校同学发放
                                <small>卡券会发送至所有同学的账户中</small>
                            </h2>
                        </div>
                        <div class="body">
                            <a href="controller/card_provide_all.php?id=<?php echo $id; ?>" class="btn btn-success m-t-15 waves-effect" onclick="if(confirm('确认要执行全体发放操作吗？该操作不可撤回！')==false)return false;" >全体发放</a>
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
                                扫码发放
                                <small>扫描下面的二维码。将卡券添加至扫码者的账户中</small>
                            </h2>
                        </div>
                        <div class="body">
                          <p>URL链接：http://weixin.ynudcc.cn/Weixin/login/topstu_lxdj.php?type=hdqd&code=000008<?php echo $id; ?></p>
                           <img src="qrcode/qrcode_provide.php?cd=<?php echo $id; ?>"> 
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