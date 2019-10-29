<?php
require("app/core_auth.php");
$menu=3;
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

    <title>上传我的课程</title>

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
  <section id="container" class="">
      <?php include("public_header.php"); include("public_sidebar.php"); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              上传我的课程
                          </header>
                          <div class="panel-body">
                             <b style="color: red">一次仅可上传一门课程</b>
                             <hr>
                             <br>
                              <form class="form-horizontal" role="form" method="post" action="app/istudy_upload.php">
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">上课班级</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="bjmc" value="<?php echo $class; ?>" disabled required>
                                          <p class="help-block">你的班级</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostorg" class="col-lg-2 control-label">课程名称</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="name" required>
                                          <p class="help-block">填写课程完整名称</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">任课教师</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="teacher" required>
                                          <p class="help-block">填写课程任课教师姓名</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">上课地点</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="classroom" required>
                                          <p class="help-block">填写该课程上课的教室等地点</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_value" class="col-lg-2 control-label">上课校区</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="xq" required>
                                          	<option value="杨林">杨林校区</option>
                                          	<option value="海埂">海埂校区</option>
                                          	<option value="阳宗海">阳宗海校区</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">周一</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="mon" required>
                                          	<option value="0">周一不上课</option>
                                          	<option value="12">12节</option>
                                          	<option value="34">34节</option>
                                          	<option value="56">56节</option>
                                          	<option value="78">78节</option>
                                          	<option value="123">123节</option>
                                          	<option value="234">234节</option>
                                          	<option value="567">567节</option>
                                          	<option value="678">678节</option>
                                          	<option value="1234">1234节</option>
                                          	<option value="1256">1256节</option>
                                          	<option value="1278">1278节</option>
                                          	<option value="3456">3456节</option>
                                          	<option value="3478">3478节</option>
                                          	<option value="5678">5678节</option>
                                          	<option value="5678">56晚</option>
                                          	<option value="9">晚课</option>
                                          	
                                          </select>
                                          <p class="help-block">选择周一上课结束</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">周二</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="tue" required>
                                          	<option value="0">周二不上课</option>
                                          	<option value="12">12节</option>
                                          	<option value="34">34节</option>
                                          	<option value="56">56节</option>
                                          	<option value="78">78节</option>
                                          	<option value="123">123节</option>
                                          	<option value="234">234节</option>
                                          	<option value="567">567节</option>
                                          	<option value="678">678节</option>
                                          	<option value="1234">1234节</option>
                                          	<option value="1256">1256节</option>
                                          	<option value="1278">1278节</option>
                                          	<option value="3456">3456节</option>
                                          	<option value="3478">3478节</option>
                                          	<option value="5678">5678节</option>
                                          	<option value="5678">56晚</option>
                                          	<option value="9">晚课</option>
                                          	
                                          </select>
                                          <p class="help-block">选择周二上课结束</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">周三</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="wed" required>
                                          	<option value="0">周三不上课</option>
                                          	<option value="12">12节</option>
                                          	<option value="34">34节</option>
                                          	<option value="56">56节</option>
                                          	<option value="78">78节</option>
                                          	<option value="123">123节</option>
                                          	<option value="234">234节</option>
                                          	<option value="567">567节</option>
                                          	<option value="678">678节</option>
                                          	<option value="1234">1234节</option>
                                          	<option value="1256">1256节</option>
                                          	<option value="1278">1278节</option>
                                          	<option value="3456">3456节</option>
                                          	<option value="3478">3478节</option>
                                          	<option value="5678">5678节</option>
                                          	<option value="5678">56晚</option>
                                          	<option value="9">晚课</option>
                                          	
                                          </select>
                                          <p class="help-block">选择周三上课结束</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">周四</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="thr" required>
                                          	<option value="0">周四不上课</option>
                                          	<option value="12">12节</option>
                                          	<option value="34">34节</option>
                                          	<option value="56">56节</option>
                                          	<option value="78">78节</option>
                                          	<option value="123">123节</option>
                                          	<option value="234">234节</option>
                                          	<option value="567">567节</option>
                                          	<option value="678">678节</option>
                                          	<option value="1234">1234节</option>
                                          	<option value="1256">1256节</option>
                                          	<option value="1278">1278节</option>
                                          	<option value="3456">3456节</option>
                                          	<option value="3478">3478节</option>
                                          	<option value="5678">5678节</option>
                                          	<option value="5678">56晚</option>
                                          	<option value="9">晚课</option>
                                          	
                                          </select>
                                          <p class="help-block">选择周四上课结束</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="activity_block" class="col-lg-2 control-label">周五</label>
                                      <div class="col-lg-10">
                                          <select class="form-control" style="color: black" name="fri" required>
                                          	<option value="0">周五不上课</option>
                                          	<option value="12">12节</option>
                                          	<option value="34">34节</option>
                                          	<option value="56">56节</option>
                                          	<option value="78">78节</option>
                                          	<option value="123">123节</option>
                                          	<option value="234">234节</option>
                                          	<option value="567">567节</option>
                                          	<option value="678">678节</option>
                                          	<option value="1234">1234节</option>
                                          	<option value="1256">1256节</option>
                                          	<option value="1278">1278节</option>
                                          	<option value="3456">3456节</option>
                                          	<option value="3478">3478节</option>
                                          	<option value="5678">5678节</option>
                                          	<option value="5678">56晚</option>
                                          	<option value="9">晚课</option>
                                          	
                                          </select>
                                          <p class="help-block">选择周五上课结束</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="bz" class="col-lg-2 control-label">信息备注</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="bz" value="无" required>
                                          <p class="help-block">该课程单双周上课或教室变动等其他特殊情况</p>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">上传</button>
                                      </div>
                                  </div>
                              </form>
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

  </body>
</html>
<?php mysqli_close($con); ?>