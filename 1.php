<?php
//xamoo
//웹서버,DB서버,php
//아파티,마리아디비,php컴파일러
//http://php.net/manual/en/install.php

// $txt="PHP";
// echo "I LOVE $txt";
$x=5;
// $y=10.5;
// $X=10;
// //php는 대소문자구분한다
// echo "x=$x, X=$X";

// 전역변수
// 로컬변수(지역변수)
function myTest(){
    // global $x; 전역변수
    $x=3; //지역변수
    echo "변수 x의 출력값 $x";
    $x++;
    echo "<br>";
}
myTest();
echo "변수 x $x";
?>
