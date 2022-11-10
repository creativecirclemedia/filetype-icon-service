<?php

if( !isset($_SERVER['QUERY_STRING']) ) exit;
$path = '/srv/icons/48px';
$file = ( file_exists($path.'/'.$_SERVER['QUERY_STRING'].'.png') ? $path.'/'.$_SERVER['QUERY_STRING'].'.png' : $path.'/_blank.png' );
if( !file_exists($file) ) exit;
header("Content-type: image/png");
header("Content-length: ".filesize($file));
echo file_get_contents($file);
exit;