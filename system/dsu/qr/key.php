<?php
function pskeyon($ps){
	$output=base64_encode($ps);
	return $output;
}
function pskeyoff($ps){
	$output=base64_decode($ps);
	return $output;
}
?>