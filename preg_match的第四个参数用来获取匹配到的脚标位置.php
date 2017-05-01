<?php
$str = "第1章\n正文1\n第二章\n正文2\n第三章\n正文三";
$regex = "/(第.*章)\n(.*)(?=\n第.*章)/sU";
//第四个参数如果出入，每一个匹配到的结果不是string而是一个array这个array的0脚标是匹配到的string， 1脚标是对应的匹配到的位置
preg_match_all($regex,$str,$result,PREG_OFFSET_CAPTURE);
var_dump($result);