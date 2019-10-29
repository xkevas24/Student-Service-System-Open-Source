<?php
function con($db){
	$con=mysqli_connect("=====","=====","=====",$db);
	return $con;
}

function con_close($db){
	mysqli_close(con($db));
}

function table_new_id($dbname,$tablename){
	$con=con($dbname);
	$sql="select max(id) from $tablename;";
	$result=mysqli_query($con,$sql);
	$max_id=mysqli_fetch_row($result);
	$id=$max_id[0]+1;
	return $id;
}
?>