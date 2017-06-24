<?php
//在java c++等语言中  使用switch语句只能控制 int short char 枚举 等（也就是可以转化为int的，不支持因为long比int大 所以像java之类的是不支持long的）
//本程序测试php中是可以直接switch string类型的
$str = 'hello';
switch($str){
	case 'world':
		echo 'the input is world';
		break;
	case 'hello':
		echo 'bingo, the input is hello';
		break;
	default:
		echo 'something unexpected';
		break;
}