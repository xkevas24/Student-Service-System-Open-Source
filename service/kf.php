<?php
require("app/core_auth.php");
$menu=0;
$today=date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>学服用户反馈</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="fa/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include("public_gift.php"); ?>
<script type="text/javascript">
	alert("秋梨膏！一卡通充值的问题不要在本通道反馈！我们不负责学校的大系统！！！校园网也不归学生服务系统管！请通过师生互动平台反映问题！谢谢大家！");
</script>
  <section id="container" class="">
      <?php include("public_header.php"); include("public_sidebar.php"); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              学生服务系统用户反馈
                          </header>
                          <div class="panel-body">
							<blockquote>
								用户反馈规则：<br>
								<li style="color:red">本反馈渠道仅受理“学生服务系统”的相关问题。本系统是由学生自主研发的二级系统，校园网、一卡通等其他问题请通过“师生互动平台”提交，并由学校有关部门解答。</li>
								<li>仅受理建设性意见的提出或目前使用当中遇到的实际问题。</li>
								<li>请针对具体问题进行详细的描述。</li>
								<li>请注意控制自己的情绪。如果出现意义不明、言语攻击等不文明行为，反馈通道将对你关闭。</li>
								<li>我们会尽快处理反馈信息，有意义的问题我们会在专栏公开。</li>
							</blockquote>
                         <div>
                         	
                         	<div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">输入问题描述</label>
                                      <div class="col-lg-10">
                                         <textarea rows="10" cols="30" id="ta" style="color: black" class="form-control"></textarea>
                                          <p class="help-block">请描述你遇到的问题，字数在200字以内。</p>
                                      </div>
                            </div>
                            
                            <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">手机号</label>
                                      <div class="col-lg-10">
                                        <input id="phone" type="tel" style="color: black" class="form-control">
                                          <p class="help-block">请输入你的手机号，便于我们与你取得联系</p>
                                      </div>
                            </div>
                            
                            <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">邮箱</label>
                                      <div class="col-lg-10">
                                        <input id="email" type="email" style="color: black" class="form-control">
                                          <p class="help-block">请输入你的邮箱，便于我们与你取得联系</p>
                                      </div>
                            </div>
                                  
                         	<button class="btn btn-primary" onClick="tijiao()">提交</button>
                         </div>
                          </div>
                      </section>
                  </div>

              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>

    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
<script>
function tijiao(){
	var info = document.getElementById("ta").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	if(info=="" || phone=="" || email=="" ){
		alert("请输入全部内容！");
	}else{
		$.post("app/kf.php",{"info":info,"phone":phone,"email":email},function(result){
		switch(result){
			case "-1":
				alert("提交失败，请重试！");
				break;
			case "-2":
				alert("您的提交通道已被关闭");
				break;
			case "1":
				alert("提交成功");
				window.location.href="index.php";
				break;
		}
    });
	}

}

</script>
  </body>
</html>
<?php mysqli_close($con); ?>