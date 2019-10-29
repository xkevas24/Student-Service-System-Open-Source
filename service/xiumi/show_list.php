<?php
$appid = "fixed_appid_f60c343a24714ca6a7dae9746b6a8e10";
$token = "Vainoh0iashaeci9gah0Xee6naarui7u";
$timestamp = time();
$nonce = mt_rand();
$uid = 999999999;
$array = [$token, $timestamp, $nonce, $uid];
sort($array, SORT_STRING);
$signature = md5(md5(implode($array)));
$login_url = "http://xiumi.us/auth/partner/login?route_type=article&signature={$signature}&timestamp={$timestamp}&nonce={$nonce}&uid={$uid}&appid={$appid}";
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>Document List</title>
</head>
<body>
图文列表
<ul>
    <?php
    $articles = dir("/var/www/articles");
    while ($file = $articles->read()) {
        if ($file != "." && $file != "..") {
            $article = json_decode(file_get_contents("/var/www/articles/$file"));
            $modify_time = date('n/j/Y H:i:s', filemtime("/var/www/articles/$file"));
            if (!empty($article->title)) {
                $args = "&mediaid={$article->from_id}&ext_id={$article->ext_id}";
                echo "<li><a href=\"{$login_url}{$args}\">{$article->title}</a>&nbsp;&nbsp;&nbsp;&nbsp; {$modify_time} 
                    <a target='_blank' href='http://ent.xiumi.us/preview_show.php?uid={$uid}&show_id={$article->from_id}'>预览</a></li>";
            }
        }
    }
    ?>
</ul>
<a href="<?= $login_url ?>">新建图文</a>
</body>
</html>
