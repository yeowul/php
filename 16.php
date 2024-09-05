
//and $$
//php는 형식 변환이 되는 경우가 있음

<?php
echo '<br>';
if($_GET['id']=='ego' or $_GET['id']=='eo' or $_GET['id']=='ego' and $_GET['pw']=='123'){
        echo 'right';
}else{
    echo 'wrong';
}
?> 