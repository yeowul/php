<html>
    <body>
        <?php
        $a=100;
        echo gettype($a);
        settype($a,'double');
        echo "<br>";
        echo gettype($a);
        //$a+2를하고 싶을때 형변환 필요함
        //if(is_int(($a)))

        $title='subject';
        $$title='PHP'; //$$title->$subject
        echo $subject; //php에서는 변수이름도 가변적으로 바꿀수잇음 

        ?>
    </body>
</html>