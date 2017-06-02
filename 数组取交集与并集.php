<?php
//php中使用 array_intersect 与 array_merge 进行两个数组元素的取交集与并集
$arr1 = array(1,2,3);
$arr2 = array(3,4,5);

//array_intersect 获取的结果会保留原来的元素的key
$intersect = array_intersect($arr1,$arr2);
//array_merge 会改变原来的元素的脚标达到一种“自适应”来保存所有的元素
$merge = array_merge($arr1,$arr2);
var_dump($intersect,$merge);