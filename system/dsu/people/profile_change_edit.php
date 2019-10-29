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
    <title>信息变更-<?php echo $org; ?>-学生服务系统</title>
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
                <h2>信息变更</h2>
            </div>


            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                修改成员信息
                                <small>成员信息如下，你可以修改并重新提交他们</small>
                            </h2>
                        </div>
                        <div class="body">
						<?php
						$get_member="select xm,sex,xh,dep,job,ps from stu_sucache where id='$id';";
						$member_result=mysqli_query($con,$get_member);
						$member=mysqli_fetch_row($member_result);
							?>
                            <form method="post" action="controller/profile_edit.php?id=<?php echo $id; ?>">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="xm" type="text" value="<?php echo $member[0]; ?>" class="form-control">
                                                <label class="form-label">姓名</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sex" type="text" value="<?php echo $member[1]; ?>" class="form-control">
                                                <label class="form-label">性别</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="xh" type="number" value="<?php echo $member[2]; ?>" class="form-control">
                                                <label class="form-label">学号</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

												<?php $dep_sql="select name from stu_deplib where org='$org';";
													  $dep_result=mysqli_query($con,$dep_sql);
													?>
												<select name="dep" class="form-control" >
												<?php while($row_dep=mysqli_fetch_row($dep_result)){ ?>
													<option value="<?php echo $row_dep[0]; ?>" <?php if($member[3]==$row_dep[0]){ echo "selected"; } ?> ><?php echo $row_dep[0]; ?></option>
												<?php } ?>
												</select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">

                                            <select name="job" class="form-control" >
												<option value="干部" <?php if($member[4]=="干部"){ echo "selected"; } ?> >干部</option>
												<option value="干事" <?php if($member[4]=="干事"){ echo "selected"; } ?> >干事</option>
											</select>	
                                            

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="position" type="text" value="<?php echo $member[5]; ?>" class="form-control">
                                                <label class="form-label">职务</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<button class="btn btn-primary m-t-15 waves-effect" type="submit">修改</button>
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