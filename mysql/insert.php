<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($result);
// echo $row['_msg'];

$conn=mysqli_connect("localhost","root","","topic");
$sql="
INSERT INTO topic
(title, descriotion, created)
VALUE(
'MySQL',
'MySQL is..',
NOW()
)
";
$result=mysqli_query($conn,$sql);
if($result===false){
    echo mysqli_error($conn);
}

?>
