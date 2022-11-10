<?php

if( !isset($_SERVER['QUERY_STRING']) ) exit;
$defaultPath = '/srv/icons/48px';
if( file_exists(__DIR__ . '/../custom-icons/'.$_SERVER['QUERY_STRING'].'.png') ){
	$file = __DIR__ . '/../custom-icons/'.$_SERVER['QUERY_STRING'].'.png';
}elseif( file_exists($defaultPath . '/'.$_SERVER['QUERY_STRING'].'.png') ){
	$file = $defaultPath . '/'.$_SERVER['QUERY_STRING'].'.png';
}else{
	$file = $defaultPath . '/_blank.png';
}
if( !file_exists($file) ) exit;
header("Content-type: image/png");
header("Content-length: ".filesize($file));
echo file_get_contents($file);
exit;