<form method="post">
        <div>
            <p>Введите имя контакта</p>
            <input type="text" name="name">
        </div>
        <div>
            <p>Введите телефон контакта</p>
            <input type="tel" name="phone1">
        </div>
        <div>
            <p>Введите второе телефон контакта, если он есть</p>
            <input type="tel" name="phone2">
        </div>
        <button type="submit" name="button">Отправить</button>
    </form>
    <style>
        input{
            padding: 10px;
        }
        button{
            margin-top: 20px;
            padding: 10px;
        }
    </style>
<?php 

if(isset($_POST['button'])){
    readFilee();
}

function readFilee(){
    if($_POST['name'] == "" || $_POST['phone1'] == ""){
        echo 'Заполните все данные';
    }
    $file = 'question3.txt';
    $contact = file_get_contents($file);
    $contact = 'Имя:'.$_POST['name']."\n".'Телефон 1:'.$_POST['phone1']."\n".'Телефон 2:'.$_POST['phone2']."\n\n";
    file_put_contents($file, $contact, FILE_APPEND);

}

?>