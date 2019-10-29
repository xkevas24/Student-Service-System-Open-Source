<!doctype html>
<html lang="en">
<head>
<?php

	$date=date("Y-m-d-h:ia");
		$servername = "192.168.103.61"; 
		$db_username = "root"; 
		$db_password = "*studb_2471"; 
		$dbname = "stu";
		$con = mysqli_connect($servername, $db_username, $db_password, $dbname); 

	$_SESSION["orgname"]="学生会自律管理委员会";

?>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../zlw/qx.png" />
	<link rel="icon" type="image/png" href="../zlw/qx.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>学生服务系统触控终端</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
   <!--  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'/> -->

    <link href="../../iconfont/material-icons.css" rel="stylesheet" />
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="qx.png">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="../zlw/dashboard.php" class="simple-text">
					DSU平台
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="../../stu/dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p><b>学生服务系统</b></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="../../stu/stulist.php">
	                        <i class="material-icons">list</i>
	                        <p><b>DSU主页</b></p>
	                    </a>
	                </li>
					<li>
	                    <a href="../activity.php">
	                        <i class="material-icons">list</i>
	                        <p><b>活动速递</b></p>
	                    </a>
	                </li>
					<li class="active">
	                    <a href="../zlw/index.php">
	                        <i class="material-icons">list</i>
	                        <p><b>自律委DSU</b></p>
	                    </a>
	                </li>
					<li>
	                    <a href="../dsu/qx/index.php">
	                        <i class="material-icons">list</i>
	                        <p><b>院青协DSU</b></p>
	                    </a>
	                </li>
					<li>
	                    <a href="../dsu/sl/index.php">
	                        <i class="material-icons">list</i>
	                        <p><b>学社联DSU</b></p>
	                    </a>
	                </li>
					<li>
	                    <a href="../dsu/ytw/index.php">
	                        <i class="material-icons">list</i>
	                        <p><b>院团委DSU</b></p>
	                    </a>
	                </li>
					<li>
	                    <a href="#">
	                        <i class="material-icons">list</i>
	                        <p><b>网络服务系统</b></p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">生成动态二维码</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="http://weixin.ynudcc.cn/Weixin/html/login.php" class="dropdown-toggle" data-toggle="dropdown"><em class="material-icons">dashboard</em>
								<p class="hidden-lg hidden-md">总览</p>
								</a>
							</li>
					
						</ul>


					</div>
				</div>
			</nav>

			<div class="content">
	            <div class="container-fluid">
                    <div class="row">
    					<div class="col-md-8 col-md-offset-2">
                            <div class="card">
                                <div class="card-header text-center" data-background-color="blue">
                                    <h4 class="title">第一步：创建签到活动</h4>
                                    <p class="category">创建将要使用动态二维码签到功能的签到活动</p>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive table-upgrade">
                                        <div>
								<div align="center">
									<form method="post" action="code_create.php" target="_blank">
								
								<div class="form-group label-floating">
									<label class="control-label">输入活动名称</label>
									<input name="actname" class="form-control" required>
									</div>
							<button type="submit" class="btn btn-round btn-fill btn-info">创建</button>									
								</div>
									
	                              </div>
	                              </div>
								</form>
								</div>
							<br>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	            </div>
	        </div>
	</div>
</body>

	<!--   Core JS Files   -->
	<script src="../../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

	<!-- Material Dashboard javascript methods -->
	<script src="../../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
