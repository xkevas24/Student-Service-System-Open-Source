<?php
require("app/core_auth.php");
$menu=4;
//科创中心成员检测
$orgsql = "select * from stu_sucache where xh='$sn' and org='院团委' and dep='科创中心' and job='干部' and state='正常';";
$orgcheck = mysqli_query($con,$orgsql);
$orgcheck = mysqli_fetch_array($orgcheck);
if($orgcheck){
	$sec_auth=1;
}else{
	$sec_auth=0;
}
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

    <title>第二课堂</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="fa/css/font-awesome.css" rel="stylesheet" />
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
              <?php
			  if($sec_auth==1){
			  ?>
              <div class="col-lg-12">
                      <section class="panel">
                        <div class="panel-body">第二课堂综合管理</div>
                        <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              本期有效活动<br>
                              <small>管理本期有效活动</small>
                              <a href="sec_lock.php" class="btn btn-success">新增有效活动</a>
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>活动名称</th>
                                  <th>举办时间</th>
                                  <th>举办单位</th>
                                  <th>所属板块</th>
                                  <th>人员类别</th>
                                  <th>分值</th>
                                  <th>操作</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
								$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
								$yx_eid=explode("@",$yx_eid);
								$list_sql="select * from stu_erkeku where eid='".implode("' or eid='",$yx_eid)."';";
								  //echo $list_sql;
								$list_result=mysqli_query($con,$list_sql);
								 while($list=mysqli_fetch_row($list_result)){
							?>
                              <tr>
                                  <td><?php echo $list[1]; ?></td>
                                  <td><?php echo $list[2]; ?></td>
                                  <td><?php echo $list[3]; ?></td>
                                  <td><?php echo $list[5]; ?></td>
                                  <td><?php echo $list[6]; ?></td>
                                  <td><?php echo $list[4]; ?></td>
                                  <td><a href="app/sec_yx_cancel.php?eid=<?php echo $list[0]; ?>" class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
                      </section>
              </div>
              <?php } ?>
              <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              本期可兑换第二课堂的所有活动<br>
                              <small>以下是本期所有可以兑换第二课堂积分的活动。</small>
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>活动名称</th>
                                  <th>举办时间</th>
                                  <th>举办单位</th>
                                  <th>所属板块</th>
                                  <th>人员类别</th>
                                  <th>分值</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
								$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
								$yx_eid=explode("@",$yx_eid);
								$list_sql="select * from stu_erkeku where eid='".implode("' or eid='",$yx_eid)."';";
								  //echo $list_sql;
								$list_result=mysqli_query($con,$list_sql);
								 while($list=mysqli_fetch_row($list_result)){
							?>
                              <tr>
                                  <td><?php echo $list[1]; ?></td>
                                  <td><?php echo $list[2]; ?></td>
                                  <td><?php echo $list[3]; ?></td>
                                  <td><?php echo $list[5]; ?></td>
                                  <td><?php echo $list[6]; ?></td>
                                  <td><?php echo $list[4]; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <div class="row">
                 <?php
				  $yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
					$yx_eid=explode("@",$yx_eid);
					$jifen_sql="select sum(value) from stu_erkejifen where sn='$sn' and(eid='".implode("' or eid='",$yx_eid)."');";
					$erke_jf=mysqli_fetch_row(mysqli_query($con,$jifen_sql))[0];
				  ?>
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              我的积分明细<br>
                              <small>仅显示本期有效积分的明细。</small>
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>活动名称</th>
                                  <th>举办单位</th>
                                  <th>所属板块</th>
                                  <th>人员类别</th>
                                  <th>分值</th>
                              </tr>
                              </thead>
                              <tbody>
                              <!--<caption>总分：<?php //echo $erke_jf; ?></caption>-->
                              <?php
								$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
								$yx_eid=explode("@",$yx_eid);
								$list_sql="select * from stu_erkejifen where sn='$sn' and(eid='".implode("' or eid='",$yx_eid)."') group by eid;";
								  //echo $list_sql;
								$list_result=mysqli_query($con,$list_sql);
								 while($list=mysqli_fetch_row($list_result)){
									 $eid=$list[1];
								$erke_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_erkeku where eid='$eid';"));
							?>
                              <tr>
                                  <td><?php echo $erke_info[1]; ?></td>
                                  <td><?php echo $erke_info[3]; ?></td>
                                  <td><?php echo $erke_info[5] ?></td>
                                  <td><?php echo $erke_info[6]; ?></td>
                                  <td><?php echo $erke_info[4]; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              生成本期第二课堂核验单<br>
                              <small>强烈建议在电脑上进行操作</small>
                          </header>
                          <div class="col-md-12">
                          	<h3>第二课堂核验单生成指南</h3>
                          	<blockquote>郑重申明：本验证单是为了方便同学们进行线下认证而制作。同学们认证时携带本单，可以进行快速验证。第二课堂最终解释权归校团委所有，如实际与本单冲突，以校团委为准。</blockquote>
                          	<li>建议使用Chrome浏览器操作。<a href="ChromeSetup.exe">点击安装Chrome浏览器</a></li>
                          	<li>首先，点击下方的“第二课堂核验单”按钮</li>
                          	<li>电脑会弹出一个新的网页，点击页面左上角的“打印”</li>
                          	<li><u>方法一：将核验单保存为PDF文件后，发送到打印店进行打印</u></li>
                          	<li><img src="style1.png"></li>
                          	<blockquote>选择目标打印机为“Print to PDF”，然后点击打印。电脑会将PDF文件保存到本地。</blockquote>
                          		<li><u>方法二：在打印店的电脑上打开本页，直接进行打印。</u></li>
                          	<a href="pdf/sec_hyd.php" class="btn btn-info" target="_blank">第二课堂核验单</a>
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


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
<?php mysqli_close($con); ?>
