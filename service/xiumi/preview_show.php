<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section style="width:600px;margin: auto;">
<?php
$show_id = $_GET["show_id"];
if (!preg_match("/^[0-9]+$/", $show_id)) {
    echo "show_id is incorrect";
    echo $show_id;
    exit;
}
$uid = $_GET["uid"];
if (!preg_match("/^[0-9a-zA-Z]+$/", $uid)) {
    echo "uid is incorrect";
    exit;
}
$article = file_get_contents("/var/www/articles/{$uid}_{$show_id}");
echo json_decode($article)->description;
?>
</section>
</body>
</html>