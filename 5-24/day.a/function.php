<?php
function add($num1,$num2){
	return $num1+$num2;
}
$a=11;
$b=22;
$c = add($a,$b);
echo $c;
echo "\n";
echo '$a+$b='.$c;
echo "\n";
echo "$a+$b=$c";
//时间戳

echo time();
echo "\n";
//显示当前文件绝对路径
echo "\n";
echo __FILE__;

//显示当前行数
echo "\n";
ECHO __LINE__;

?>