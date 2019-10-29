<?php
require("app/core_auth.php");
$menu=3;
if(isset($_GET["id"]) && $_GET["id"]<>""){
	$spid=xss($_GET["id"]);
}else{
	mysqli_close($con);
	header("refresh:0;url=i_items.php");
	exit();
}
$sp=mysqli_fetch_row(mysqli_query($con,"select * from stu_items where id='$spid';"));
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

    <title>编辑商品</title>

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
                              编辑商品
                          </header>
                          <div class="panel-body">
                             <hr>
                             <br>
                              <form id="form" class="form-horizontal" role="form" method="post" action="app/item_edit.php?id=<?php echo $spid; ?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品名称</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" value="<?php echo $sp[1]; ?>" name="somc" required>
                                          <p class="help-block">输入商品名称</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品图片</label>
                                      <div class="col-lg-10">
                                          <input type="file" accept="image/*" class="form-control" id="user_num" name="spimg" required>
                                          <p class="help-block">必须重新上传商品缩略图，最好是正方形比例</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品详情图</label>
                                      <div class="col-lg-10">
                                          <input type="file" accept="image/*" class="form-control" id="user_num" name="big_img" required>
                                          <p class="help-block">必须重新上传商品详情图</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品定价</label>
                                      <div class="col-lg-10">
                                          <input type="number" style="color: black" class="form-control" value="<?php echo $sp[4]; ?>" name="spdj" required>
                                          <p class="help-block">输入商品的价格</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="bz" class="col-lg-2 control-label">商品介绍</label>
                                      <div class="col-lg-10">
                                         <div id="editor">
										</div>
                                        <textarea style="display:none" id="spxq" name="spxq" required><?php echo $sp[5]; ?></textarea>
                                          <p class="help-block">简要地介绍一下商品</p>
                                      </div>
                                  </div>
                                  
                                  
                              </form>
                              <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button id="getinner" class="btn btn-success">更新</button>
                                      </div>
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
        <script type="text/javascript" src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
		<script type="text/javascript">
			var E = window.wangEditor
			var editor = new E('#editor')
			editor.create()
			editor.txt.html(document.getElementById("spxq").innerHTML);
		//editor.txt.html('<?php //echo $sp[5]; ?>')

		document.getElementById('getinner').addEventListener('click', function () {
			// 读取 html
			document.getElementById("spxq").innerHTML=editor.txt.html();
			//提交form
			document.getElementById('form').submit();
			//alert(editor.txt.html())
		}, false)
		
		</script>
  </body>
</html>
<?php mysqli_close($con); ?>