<?php
$str = "第1章\n正文1\n第二章\n正文2\n第三章\n正文三";
$regex = "/(第.*章)\n(.*)(?=\n第.*章)/sU";
preg_match_all($regex,$str,$result);
var_dump($result);