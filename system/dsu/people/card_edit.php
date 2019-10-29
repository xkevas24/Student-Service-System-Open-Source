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
		$get_card="select * from stu_cards_det where id='$id';";
		$row=mysqli_fetch_row(mysqli_query($con,$get_card));
		$bgtm=$row[4];
		$edtm=$row[5];
		$bg_y=substr($bgtm,0,4);
		$bg_m=substr($bgtm,7,2);
		$bg_d=substr($bgtm,12,2);
		$bgtm=$bg_d."/".$bg_m."/".$bg_y;
		
		$ed_y=substr($edtm,0,4);
		$ed_m=substr($edtm,7,2);
		$ed_d=substr($edtm,12,2);
		$edtm=$ed_d."/".$ed_m."/".$ed_y;
		
	}else{
		header("refresh:0;url=card_manage.php");
	}

?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>卡券编辑-<?php echo $org; ?>-学生服务系统</title>
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
                <h2>卡券编辑</h2>
            </div>

            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               编辑一张卡券并重新提交
                            </h2>
							<a href="card_manage.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-chevron-left"></em>返回卡券管理</a>
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
							<form method="post" action="controller/card_update.php?id=<?php echo $id; ?>">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>开始日期</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="bgtm" value="<?php echo $bgtm; ?>" class="form-control date" placeholder="例: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>截止日期</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="edtm" value="<?php echo $edtm; ?>" class="form-control date" placeholder="例: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>卡券名称</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">card_giftcard</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="name" value="<?php echo $row[2]; ?>" class="form-control" placeholder="卡券名称" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                    <div class="col-md-8">
                                        <b>使用描述</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">verified_user</i>
                                            </span>
                                            <div class="form-line">
                                                <textarea name="notification" class="form-control no-resize" placeholder="请输入卡券使用的说明。需要包含截止日期、使用方式和其他必要说明。" rows="4" required><?php echo $row[6]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>卡券类别</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">movie</i>
                                            </span>
                                            <div class="form-line">
                                                <select name="type" class="form-control" required>
												<option value="">选择类别</option>
												<option value="lisense" <?php if($row[1]=="lisense"){ echo "selected"; } ?>>凭证</option>
												<option value="attest" <?php if($row[1]=="attest"){ echo "selected"; } ?>>认证券</option>
												<option value="pref" <?php if($row[1]=="pref"){ echo "selected"; } ?>>一次性优惠券</option>
												<option value="movie" <?php if($row[1]=="movie"){ echo "selected"; } ?>>一次性观影券</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>限量（0为“不限数量”）</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">card_giftcard</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="number" name="limit" class="form-control" value="<?php 
												if($row[7]=="unlimit"){
													echo "0";
												}else{
													echo $row[7];
												}															  
																											  
												 ?>" placeholder="单位为：张" maxlength="5" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<button class="btn btn-primary m-t-15 waves-effect" type="submit">更新</button>
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