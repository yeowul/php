<?php
$conn=mysqli_connect('localhost','root','','opentutorals');

$sql="
    INSERT INTO topic
(title,descrition,created)
VALUES(
    '{$_POST['title']}',
    '{$_POST['descriotion']}',
    NOW()
)";
$result=mysqli_query($conn,$sql);
if($result===false){
    echo 'error';
}
echo $sql;
?>