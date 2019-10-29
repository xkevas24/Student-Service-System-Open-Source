<?php
$con=mysqli_connect("SQL_ADDR","SQL_USERNAME","SQL_PASSWORD","SQL_NAME");
$con_db2=mysqli_connect("SQL_ADDR","SQL_USERNAME","SQL_PASSWORD","SQL_NAME");
$pdo=new PDO("mysql:host=SQL_ADDR;dbname=SQL_NAME","SQL_USERNAME","SQL_PASSWORD");
?>