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
	
	
?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>卡券管理-<?php echo $org; ?>-学生服务系统</title>
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

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
	<!-- Fontawesome -->
    <link href="fa/css/font-awesome.css" rel="stylesheet">
</head>

<body class="theme-red">
<?php include("header.php"); 

	function cd_total($id){
		$sql="select count(*) as a from stu_cards where cardo='$id';";
		$result=mysqli_fetch_array(mysqli_query($con,$sql))["a"];
		//$i=0;
//		while($row=mysqli_fetch_row($result)){
//		$i++;
//		}
		return $result;
	}

	?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>卡券管理</h2>
            </div>

			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                当前已发布的卡券
                            </h2>
							<a href="card_pub.php" class="btn btn-primary m-t-15 waves-effect"><em class="fa fa-plus"></em>发布新的卡券</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>名称</th>
                                            <th>类别</th>
                                            <th>生效日期</th>
                                            <th>失效日期</th>
                                            <th>说明</th>
                                            <th>状态</th>
											<th>编辑</th>
											<th>销毁</th>
											<th>使用记录</th>
											<th>发放</th>
											<th>发放记录</th>
											<th>领取数量</th>
											<th>发行状态</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>名称</th>
                                            <th>类别</th>
                                            <th>生效日期</th>
                                            <th>失效日期</th>
                                            <th>说明</th>
                                            <th>状态</th>
											<th>编辑</th>
											<th>销毁</th>
											<th>使用记录</th>
											<th>发放</th>
											<th>发放记录</th>
											<th>领取数量</th>
											<th>发行状态</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
								<?php
								
								$get_member="select * from stu_cards_det where fm='$org';";
								$member_result=mysqli_query($con,$get_member);
								$date=date("Y年m月d日");
								
								while($member_row=mysqli_fetch_row($member_result)){
									switch($member_row[1]){
										case "lisense":
											$type="凭证";
											break;
										case "attest":
											$type="认证券";
											break;
										case "pref":
											$type="一次性优惠券";
											break;
										case "movie":
											$type="一次性观影券";
											break;
									}
								?>
									<tr>
									<td><?php echo $member_row[2]; ?></td>
									<td><?php echo $type; ?></td>
									<td><?php echo $member_row[4]; ?></td>
									<td><?php echo $member_row[5]; ?></td>
									<td title="<?php echo $member_row[6]; ?>"><?php echo mb_substr($member_row[6],0,10,"utf-8")."..."; ?></td>
									<td><?php if($member_row[4]>$date){ echo "<p class='font-bold col-cyan'>尚未生效</p>"; }  
										if($member_row[4]<$date && $date<$member_row[5]){ echo "<p class='font-bold col-teal'>正在使用</p>"; }
										if($date>$member_row[5]){ echo "<p class='font-bold col-red'>已过期</p>"; }  
										?></td>
									<td><a class="col-blue" href="card_edit.php?id=<?php echo $member_row[0]; ?>"><em class="fa fa-pencil"></em></a></td>
									<td>
										<a href="controller/card_delete.php?id=<?php echo $member_row[0]; ?>" onclick="if(confirm('确认要销毁：<?php echo $member_row[2]; ?>吗？')==false)return false;" ><font color='#AF0002'><em class="fa fa-trash"></em></font></a>
										
									</td>
									<td><a href="card_record.php?id=<?php echo $member_row[0]; ?>"><u><?php 
									$used="select count(*) as a from stu_cards where cardo='$member_row[0]' and ifused='0';";
										$row_used=mysqli_fetch_row(mysqli_query($con,$used));
										echo $row_used[0]; ?>
										人</u></a></td>
									<td><a href="card_provide.php?id=<?php echo $member_row[0]; ?>"><font color='#000000'><em class="fa fa-hand-paper-o"></em></font></a></td>
									<td><a href="card_pro_record.php?id=<?php echo $member_row[0]; ?>"><font color='#000000'><em class="fa fa-eye"></em></font></a></td>
									<td><?php 
										//card_total($member_row[0]);
										$sql="select count(*) as a from stu_cards where cardo='$member_row[0]';";
										$row=mysqli_fetch_row(mysqli_query($con,$sql));
										echo $row[0];
										
										?>/<?php 
									if($member_row[7]=="unlimit"){
										echo "无限";
									}else{
										echo $member_row[7];
									}
									 ?></td>
									<td><?php
									$sql="select id from stu_cards_all where cardid='$member_row[0]';";
									$row=mysqli_fetch_row(mysqli_query($con,$sql))[0];
									if($row==""){
										?>
										<a href='controller/card_provide_all.php?id=<?php echo $member_row[0]; ?>' onclick="if(confirm('确认要执行全体发放操作吗？')==false)return false;"><p class='font-bold col-red'>自助领取</p></a>
									<?php
									}else{
									?>
									
										<a href='controller/card_cancel_all.php?id=<?php echo $member_row[0]; ?>' onclick="if(confirm('确认要取消全体发放操作吗？')==false)return false;"><p class='font-bold col-teal'>全体发行</p></a>
									<?php
									}
										?></td>
									</tr>
								<?php } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
<?php mysqli_close($con); ?>
</html>