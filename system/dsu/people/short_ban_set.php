<!DOCTYPE html>
<html>

<head>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=2;
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	}else{
		header("refresh:0;url=profile_change.php");
	}
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>短期封禁设置-<?php echo $org; ?>-学生服务系统</title>
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
                <h2>短期封禁</h2>
            </div>


            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                设置短期封禁时长
                                <small>短期封禁的时长从7日到15日不等。</small>
                            </h2>
                        </div>
                        <div class="body">
						<?php
						$get_member="select xm from stu_sucache where id='$id';";
						$member_result=mysqli_query($con,$get_member);
						$member=mysqli_fetch_row($member_result);
							?>
                            <form method="post" action="controller/short_ban.php?id=<?php echo $id; ?>">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="xm" type="text" value="<?php echo $member[0]; ?>" class="form-control">
                                                <label class="form-label">姓名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<select name="bantil" class="form-control" >
													<option value="">--请选择封禁天数--</option>
													<option value="<?php echo date("Y-m-d",strtotime("+7 day")); ?>">7天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+8 day")); ?>">8天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+9 day")); ?>">9天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+10 day")); ?>">10天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+11 day")); ?>">11天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+12 day")); ?>">12天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+13 day")); ?>">13天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+14 day")); ?>">14天</option>
													<option value="<?php echo date("Y-m-d",strtotime("+15 day")); ?>">15天</option>
													
												</select>
                                    </div>

                                </div>
								<button class="btn btn-primary m-t-15 waves-effect" type="submit">封禁</button>
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