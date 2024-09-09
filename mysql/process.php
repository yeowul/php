<?php
    mysqli_connect('localhost','root',''); //(host,username,pw)
    mysqli_select_db('opentutorials');
    switch($_GET['mode']){
        case 'insert':
            $sql="INSERT INTO topic (title, description, created) VALUES ('".mysqli_real_escape_string($_POST['title'])."', '".mysqli_real_escape_string($_POST['description'])."', now())";
            echo $sql;
            $result = mysqli_query($sql);
            // header("Location: list.php"); 
            break;
        case 'delete':
        mysqli_query('DELETE FROM topic WHERE id = '.mysqli_real_escape_string($_POST['id']));
        header("Location: list.php"); 
        break;
        case 'modify':
        mysqli_query('UPDATE topic SET title = "'.mysql_reali_escape_string($_POST['title']).'", description = "'.mysqli_real_escape_string($_POST['description']).'" WHERE id = '.mysqli_real_escape_string($_POST['id']));
        header("Location: list.php?id={$_POST['id']}");
        break;
    }

?>
