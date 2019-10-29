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

    <title>新增商品</title>

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
                              新增商品
                          </header>
                          <div class="panel-body">
                             <!--<b style="color: red">商铺申请注意事项：<br>
                             <li>申请商铺时需缴纳30元保证金，保证金会在商铺无投诉运营90天后归还</li>
                             <li>客户确认订单完成前，商家无法收到款项。</li>
                             <li>为了保证交易安全，每一笔订单均有一定的冻结期。</li>
                             <li>在客户确认交易完成后，订单款项会有72小时的冻结期。解冻后可以随时提现。</li>
                             <li>如果交易过程发生问题，商家和客户均可在订单内进行投诉处理。</li>
                             <li>当前仅支持摄影类商铺入驻。</li>
                             <li>申请期间请保持手机畅通。</li>
                             </b>-->
                             <br>
                              <form id="form" class="form-horizontal" role="form" method="post" action="app/item_add.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品名称</label>
                                      <div class="col-lg-10">
                                          <input type="text" style="color: black" class="form-control" name="somc" required>
                                          <p class="help-block">输入商品名称</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品缩略图</label>
                                      <div class="col-lg-10">
                                          <input type="file" accept="image/*" class="form-control" id="user_num" name="spimg" required>
                                          <p class="help-block">上传商品缩略图，最好是正方形比例</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品详情图</label>
                                      <div class="col-lg-10">
                                          <input type="file" accept="image/*" class="form-control" id="user_num" name="big_img" required>
                                          <p class="help-block">上传商品详情图</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="hostdate" class="col-lg-2 control-label">商品定价</label>
                                      <div class="col-lg-10">
                                          <input type="number" style="color: black" class="form-control" name="spdj" required>
                                          <p class="help-block">输入商品的价格</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="bz" class="col-lg-2 control-label">编辑商品详情</label>
                                      <div class="col-lg-10">
										<div id="editor">
										</div>
                                        <textarea style="display:none" id="spxq" name="spxq" required></textarea>
                                        <p class="help-block">简要地介绍一下商品</p>
                                         <!--<textarea style="color: black" class="form-control" name="spxq" required></textarea>
                                          -->
                                      </div>
                                  </div>
                              </form>
                              <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button id="getinner" class="btn btn-success">上架</button>
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
        <script type="text/javascript" src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
		<script type="text/javascript">
			var E = window.wangEditor
		var editor = new E('#editor')
		editor.create()

		document.getElementById('getinner').addEventListener('click', function () {
			// 读取 html
			document.getElementById("spxq").innerHTML=editor.txt.html();
			//提交form
			document.getElementById('form').submit();
			//alert(editor.txt.html())
		}, false)
		
		</script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
<script>
	/*function editor(){
		var editor_inner=document.getElementById("editor").innerHTML;
		alert(editor_inner);
		//console.info(editor_inner);
		//var spxq=document.getElementById("spxq");
		//spxq.innerHTML=editor_inner;
	}*/

</script>
  </body>
</html>
<?php mysqli_close($con); ?>