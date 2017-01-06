<?php
//展示如何进行url内容的转发，由于在ajax里面不可以使用异源请求，所以可以通过服务器端进行转发实现文件的获取

$_GET['url'] ? die('无请求内容页面') : $url = $_GET['url'];
$contents = file_get_contents($url);
echo $contents;