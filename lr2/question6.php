<?php

$fio = $_POST['fio'];
$year = $_POST['year'];
$programmingLanguage = $_POST['programming_language'];
$countProgrammingLanguage = 0;
$countSocialNetwork = 0;

$programmingLanguageArray = array('c#', 'c++', 'javascript', 'java', 'ruby', 'python', 'php', 'dart', 'flutter', 'swift', 'kotlin', 'f#', 'pascal', 'visualbasic');
$socialNetworkArray = array($_POST['vk'], $_POST['ok'], $_POST['twitter'], $_POST['facebook'], $_POST['telegram']);


function counterProgrammingLanguage($programmingLanguageArray, $programmingLanguage, $countProgrammingLanguage){
    for($i = 0;$i <= count($programmingLanguageArray);$i++){
        if(strpos($programmingLanguage, $programmingLanguageArray[$i])){
            $countProgrammingLanguage += 1;
        }
        else{
            continue;
        }
    }
    echo $countProgrammingLanguage;
}

function age($year){
    $year = substr($year, 0, 4);
    $nowYear = date("Y");
    echo $age = $nowYear - $year;
}
function counterSocialNetwork($countSocialNetwork, $socialNetworkArray){
    foreach($socialNetworkArray as $key => $value){
        if(!empty($value)){
            $countSocialNetwork += 1;
        } else {
            continue;
        }
    }
    echo $countSocialNetwork;
}



echo 'ФИО пользователя: '.$fio.'<br/>';
echo ' - Количество языков программирования, которые знает пользователь'.counterProgrammingLanguage($programmingLanguageArray, $programmingLanguage, $countProgrammingLanguage).'<br/>';
echo ' - Возраст пользователя'.age($year).'<br/>';
echo ' - Количество социальных сетей, в которых состоит пользователь'.counterSocialNetwork($countSocialNetwork, $socialNetworkArray).'<br/>';
?>