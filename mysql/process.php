<?php
    $con=mysqli_connect("localhost","root","","opentutorals"); //(host,username,pw)
    // mysqli_select_db($con,'opentutorals');
    switch($_GET['mode']){
        case 'insert':
            $sql="INSERT INTO topic (title, description, created) VALUES ('".mysqli_real_escape_string($con,$_POST['title'])."', '".mysqli_real_escape_string($con,$_POST['description'])."', now())";
            echo $sql;
            $result = mysqli_query($con,$sql);
            // header("Location: list.php"); 
            break;
        case 'delete':
        mysqli_query($con,'DELETE FROM topic WHERE id = '.mysqli_real_escape_string($con,$_POST['id']));
        header("Location: list.php");
        break;
        case 'modify':
        mysqli_query($con,'UPDATE topic SET title = "'.mysqli_real_escape_string($con,$_POST['title']).'", description = "'.mysqli_real_escape_string($con,$_POST['description']).'" WHERE id = '.mysqli_real_escape_string($con,$_POST['id']));
        header("Location: list.php?id={$_POST['id']}");
        break;
    }

?>
