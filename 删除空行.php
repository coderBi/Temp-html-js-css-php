<?php 
if(!isset($argv[1]))
	die('the path of file to change is not given');
	
$filepath = $argv[1];
$content = file_get_contents($filepath);
echo preg_match_all("/(\n|\r\n){2,}/s",$content)."\n";
// /s意味着 .可以匹配到换行 
$result = preg_replace("/(\n|\r\n){2,}/s","$1",$content);
echo $content == $result;
file_put_contents($filepath,$result);