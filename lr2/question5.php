
<form method="post">
    <input type="text" name="first" placeholder="Первое число">
    <input type="text" name="operation" placeholder="Знак арефметической операции">
    <input type="text" name="second" placeholder="Второе число">
    <button name="calc">Рассчитать</button>
</form>

<style>
    form{
        width: 20%;
        display: flex;
        flex-direction: column;
    }
    form>*{
        margin: 30px 30px 30px 0;
        padding: 15px;
    }
</style>

<?php

    $first = $_POST['first'];
    $second = $_POST['second'];

    if(isset($_POST['calc'])){
        switch($_POST['operation']){
            case '+':
                'Ответ: '.add($first,$second);
                break;
            case '-':
                'Ответ: '.minn($first,$second);
                break;
            case '*':
                'Ответ: '.mul($first,$second);
                break;
            case '/':  
                'Ответ: '.del($first,$second);
                break;  
        }
    }

    function add($first, $second){
        echo $first + $second;
    };
    function minn($first, $second){
        echo $first - $second;
    };
    function mul($first, $second){
        echo $first * $second;
    };
    function del($first, $second){
        echo $first / $second;
    };
?>