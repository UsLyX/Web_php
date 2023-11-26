
<form method="post" >
        <h3>Как вы оцениваете наш магазин?</h3>
        <div>
            <div class="input">
                <input type="radio" name="estimation" value="very_good" id="very_good">
                <label for="very_good">Отлично</label>
            </div>
            <div class="input">
                <input type="radio" name="estimation" value="good" id="good"> 
                <label for="good">Хорошо</label>
            </div>
            <div class="input">
                <input type="radio" name="estimation" value="bad" id="bad"> 
                <label for="bad">Удовлетворительно</label>
            </div>
            <div class="input">
                <input type="radio" name="estimation" value="very_bad" id="very_bad"> 
                <label for="very_bad">Плохо</label>
            </div>
        </div>
        <button style="margin-top: 20px;" name="button">Проголосовать</button>
    </form>

<?php
function counter(){
    session_start();
    if($_POST['estimation'] == "very_good"){
        $_SESSION['very_good'] += 1;
    }
    else if($_POST['estimation'] == "good"){
        $_SESSION['good'] += 1;
    }
    else if($_POST['estimation'] == "bad"){
        $_SESSION['bad'] += 1;
    }
    else if($_POST['estimation'] == "very_bad"){
        $_SESSION['very_bad'] += 1;
    }
    $maxValue;
    for($i = 0; $i <= count($_SESSION); $i++){
        foreach ($_SESSION as $key=>$val){
            if($val > $maxValue){
                $maxValue = $val;
            }
        }
    }

    echo '
        <div style="height: 400px; width: 30%;">
        <p>Результаты голосования:</p>
        <div style="display: flex; align-items: center;">
            <p style="width: 30%;">5 - '.$_SESSION['very_good'].' чел.</p>
            <div style="height: 30px; width: '.$_SESSION['very_good'] * '6'.'; background-color: brown;"></div>
        </div>
        <div style="display: flex;  align-items: center;">
            <p style="width: 30%;">4 - '.$_SESSION['good'].' чел.</p>
            <div style="height: 30px; width: '.$_SESSION['good'] * '6'.'; background-color: brown;"></div>
        </div>
        <div style="display: flex;  align-items: center;">
            <p style="width: 30%;">3 - '.$_SESSION['bad'].' чел.</p>
            <div style="height: 30px; width: '.$_SESSION['bad'] * '6'.'; background-color: brown;"></div>
        </div>
        <div style="display: flex;  align-items: center;">
            <p style="width: 30%;">2 - '.$_SESSION['very_bad'].' чел.</p>   
            <div style="height: 30px; width:'.$_SESSION['very_bad'] * '6'.'; background-color: brown;"></div>         
        </div>
        <hr>
        <p>Максимум - '.$maxValue.'</p>
    </div>
    ';
    session_write_close();
}

if(isset($_POST['button'])){
    counter();
}