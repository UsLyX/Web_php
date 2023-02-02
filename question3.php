<?php

$userPassword = $_POST["password1"];

function checkedPassword($userPassword){
    $password = 123;
    if($userPassword == $password && $userPassword != ""){
        echo "<div>Пароль верный</div>";
    }
    else{
        echo "<div>Ошибка в пароле</div>";
    }
};

checkedPassword($userPassword)
?>
