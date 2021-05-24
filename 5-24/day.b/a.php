<?php
$a = "Helloworld";
echo "1".substr($a,0,4);
echo "\n";
echo "2".md5("12345");
echo "\n";
echo "3".str_shuffle($a);
echo "\n";

echo "\n";
echo "4".strlen($a);
echo "\n";
var_dump(str_split($a));
var_dump(strpos($a,'o'));
echo "\n";
echo "5".strrev($a);
echo "\n";
$arr = [2,3,4,4];
echo "6".implode($arr);
echo "\n";
?>