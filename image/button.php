<?php
header("Content-type:image/png");//헤더는 항상 가장 위에,빈칸도 안됨
$string=$_GET['text'];
$im=imagecreatefrompng("button.png");//이미지에 대한 식별자
$orange=imagecolorallocate($im,60,87,156);//RGB
$px=(imagesx($im)-7.5*strlen($string))/2;
imagestring($im,4,$px,9,$string,$orange);
imagepng($im);
imagedestroy($im);
?>

