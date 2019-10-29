<?php

require("app/core_auth.php");

?>
                         		<table class="table-bordered">
                          		<thead>
                          		<tr>
                          			<td>中奖人</td>
                          			<td>奖品名称</td>
                          			<td>学号</td>
                          			<td>班级</td>
                          			<td>性别</td>
                          			<td>奖品提供方</td>
                          			<td>中奖类型</td>
                          		</tr>
                          		</thead>
                          		<tfoot>
                          		<tr>
                          			<td>中奖人</td>
                          			<td>奖品名称</td>
                          			<td>学号</td>
                          			<td>班级</td>
                          			<td>性别</td>
                          			<td>奖品提供方</td>
                          			<td>中奖类型</td>
                          		</tr>
                          		</tfoot>
                          		<tbody>
                          			<?php 
									$sql="select name,poststuno,org,opendate from stu_jiangping where poststuno<>'' order by opendate desc;";
									$result=mysqli_query($con,$sql);
									while($row=mysqli_fetch_row($result)){
										
										$stuinfo=mysqli_fetch_row(mysqli_query($con,"select name,class,sex from stu_usrcache where sn='$row[1]';"));
										$stu_name=$stuinfo[0];
										echo "<tr>";
										echo "<td>".$stu_name."</td>";
										echo "<td>".$row[0]."</td>";
										echo "<td>".$row[1]."</td>";
										echo "<td>".$stuinfo[1]."</td>";
										echo "<td>".$stuinfo[2]."</td>";
										echo "<td>".$row[2]."</td>";
										echo "<td>".$row[3]."</td>";
										echo "</tr>";
									}
									?>
                          		</tbody>
                          	</table>