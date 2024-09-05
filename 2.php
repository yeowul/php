<?php

echo "1";
print "2";

echo("3");
print("4");

echo "I am sad<br>";//마크업사용가능
echo "I am sad<br>";//마크업사용가능

$x=5;
$y=5;
echo "<h1>".$x."</h1>"; //변수와 사용가능
echo $x+$y;

$z=333;
var_dump($z); //형을 알려줌
echo "<br>";
//strlen() 문자열 bytes 반환
$a_len=strlen("한글");
echo $a_len;
?>