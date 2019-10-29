<?php
//csv文件转数组
function csv_to_array($filesrc,$coding) {
    $lines = array_map('str_getcsv', file($filesrc));; 

    $result = array();
    $headers;

    if (count($lines) > 0) {
        $headers = $lines[0];
    }

    for($i=1; $i<count($lines); $i++) {
        $obj = $lines[$i];
        $result[] = array_combine($headers, $obj);
    }
    return anyto_utf8($result,$coding);
}

function get_array_row($column,$array){
$arrayiter = new RecursiveArrayIterator($array);
$iteriter = new RecursiveIteratorIterator($arrayiter);
$i=0;
 foreach ($iteriter as $key => $val){
	 $i++;
 }
$row=$i/$column;
return $row;
}

function anyto_utf8($content,$coding){
	$return=mb_convert_encoding($content, "UTF-8", $coding); 
	return $return;
}
?>