<?php
//使用php eval执行一段字符串 效果与js类似
$str = "\$c = func('a','b');";
$res = eval($str);
var_dump($res);  //这里是null  只有在执行的字符串中使用return语句(例如 'return func()') 这个语句才有返回，否则返回null。如果语句执行失败，返回false。
var_dump($c);

function func($a='',$b=''){
	echo $a.'-----'.$b;
	return $a.'-----'.($a+1);
}
