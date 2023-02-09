<?php

$count = 0;

function counter($count, $array){


    if($_POST['html'] == "Язык гипертекстовой разметки"){
        $count += 1;
    }
    if($_POST['js'] == "Язык программирования с динамической типизацией"){
        $count += 1;
    }
    if($_POST['react'] == "Фреймворк"){
        $count += 1;
    }
    if($_POST['vsc'] == "Редактор кода"){
        $count += 1;
    }

    echo 'Набрано баллов: '.$count.' из 4';
}

counter($count, $array)
?>