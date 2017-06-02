<?php
//检测php的中的成员函数默认的权限  应该是public的
class Test{
	function printMessage(){
		echo "message text\n";
	}
	private function privPrint(){
		echo "print in private func\n";
	}
}

$obj = new Test();
//正常输出 说明默认权限是public的 这跟c++中默认的权限是private的 java中默认的权限是包内访问，是介于private与protected中间的（protected指的继承，可以在包外面进行继承，然后默认权限的“包内访问”只能针对包内继承的情况）
$obj->printMessage();
$obj->privPrint();