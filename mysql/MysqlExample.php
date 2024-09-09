<html>
    <head>
        <title>Connect</title>
    </head>
    <body>
        <?php
        $dbhost='localhost';
        $dbuser='root';
        $dbpass='';
        $mysqli=new mysqli($dbhost,$dbuser,$dbpass);
        if($mysqli->connect_errno){
            printf("connection failed",$mysqli ->connect_errno);
            exit();
        }

        printf("connection sucess");
        $mysqli->close();
        ?>
    </body>
</html>