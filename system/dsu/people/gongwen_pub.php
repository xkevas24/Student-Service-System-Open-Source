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

?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>公文发布-<?php echo $org; ?>-学生服务系统</title>
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

    <!-- Colorpicker Css -->
    <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />

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
                <h2>公文发布</h2>
            </div>

            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               发布一份新的公文
                                <small>选择范围并发布公文。</small>
                            </h2>
							<a href="gongwen_manage.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-chevron-left"></em>返回公文管理</a>
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
							<form method="post" action="controller/gongwen_pub.php" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b><code>*</code>标题</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-font"></em>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="title" class="form-control" placeholder="公文标题" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b><code>*</code>字号</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-font"></em>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="zihao" class="form-control" placeholder="公文字号" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b><code>*</code>发送范围</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-font"></em>
                                            </span>
                                            <div class="form-line">
                                                <select name="range" class="form-control" required>
												<option value="">请选择范围</option>
												<option value="0">全体团学组织成员</option>
												<option value="1">仅所有学生干部</option>
												<option value="2">仅团口学生干部</option>
												<option value="3">仅团口全体成员</option>
												<option value="4">仅学口学生干部</option>
												<option value="5">仅学口全体成员</option>
												<option value="6">自定义收件人</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                   <div class="col-md-4">
                                        <b>公文编号</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-font"></em>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="bianhao" class="form-control" placeholder="公文编号">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>自定义收件人（范围为“自定义收件人”时生效）</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-font"></em>
                                            </span>
                                            <div class="form-line">
                                               <textarea name="zdy" class="form-control" rows="2" cols="40" placeholder="输入学号，学号后@分隔"></textarea>
                                                <!--<input type="text" name="zdy" class="form-contro" placeholder="收件人学号">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b><code>*</code>PDF上传</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <em class="fa fa-file-pdf-o"></em>
                                            </span>
                                            <div class="form-line">
                                                <input name="file" accept=".pdf" type="file" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
								<div class="row clearfix">
								<div class="col-md-4">
                                        <b>是否禁止转发</b>
                                    <div class="input-group">
                                        <!--<span class="input-group-addon">-->
                                            <input type="checkbox" name="jzzf" value="1" class="filled-in" id="ig_checkbox">
                                            <label for="ig_checkbox"></label>
                                        <!--</span>-->
									</div>
                                    </div>
								</div>
                            </div>
							<button class="btn btn-primary m-t-15 waves-effect" type="submit">发布</button>
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

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>