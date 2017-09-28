<?php
$str = "/controller/action.html";
$preg = "/^\/([^\/]+)\/([^\/]+)\.html$/";
$result = array();
preg_match($preg,$str,$result);
var_dump($result);