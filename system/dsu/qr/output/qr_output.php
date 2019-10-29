<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>记录导出</title>
 <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet"></link>
  <link rel="stylesheet" href="style.css">
    <script language="javascript" type="text/javascript" src="tablesort.js"></script>
    <script language="javascript" type="text/javascript">
window.onload = function()
{
    new TableSorter("tb1");
    new TableSorter("tb2", 0, 2 , 5, 6);
    new TableSorter("tb3").OnSorted = function(c, t)
    {
        alert("table is sorted by " + c.innerHTML + " " + (t ? "Asc" : "Desc"));
    }
}
    </script>
</head>

<strong><span style="font-size:18px;">
<body>

<?php

$table_name = 'stu_codesign';
$conn=mysqli_connect("192.168.103.61","root","*studb_2471","stu");
if(!$conn){echo "连接失败";}
$actid=$_GET["actcode"];
#mysqli_select_db("icp",$conn);
#mysqli_query("set names utf8");
$sql="select * from $table_name where actid='$actid' GROUP BY xh HAVING count(xh) = 1 order by signtime";
$res=mysqli_query($conn,$sql);
$rows=mysqli_affected_rows($conn);//获取行数
$colums=mysqli_num_fields($res);//获取列数
echo "二维码考勤记录如下：<br/>";
echo "共计".$rows."条信息 <br/>";
       
echo "<table id='tb1' class='table table-striped table-bordered table-hover'><tr>";
/*for($i=0; $i < $colums; $i++)*/{
     #$field_name=mysql_field_name($res,$i);
     $tableinfo = mysqli_fetch_fields($res);
     foreach ($tableinfo as $val) {
     	$field_name = $val->name;
  
     }
	?>
<th>序号</th>	<th>姓名</th><th>性别</th><th>学号</th><th>分院</th><th>班级</th><th>签到时间</th><th>记录id</th><th>活动名称</th><th>签到日期</th><th>设备IP</th>
	<?php
     #$field_name=mysqli_fetch_fields($res);
     #print_r($field_name[1]);
     #echo "<th>$field_name</th>";
}
echo "</tr>";
while($row=mysqli_fetch_row($res)){
     echo "<tr>";
      for($i=0; $i<$colums; $i++){
          echo "<td>$row[$i]</td>";
       }
        echo "</tr>";
   }
 echo "</table>";


?></span></strong>
  	<div class="top-panel">
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">保存为...<span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a onclick="exportTo('txt');" href="javascript://">TXT纯文本文件</a></li>
          <li><a onclick="exportTo('xls');" href="javascript://">XLS表格文件</a></li>
          <li><a onclick="exportTo('sql');" href="javascript://">SQL数据库文件</a></li>
        </ul>
      </div>
  	</div>
  <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
  <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
  <script src="tableExporter.js"></script>
  <script src="main.js"></script>

</body>
</html>