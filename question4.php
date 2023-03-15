<?php

function isSiteAvailible($url) {

    // Проверка правильности URL
    if(!filter_var($url, FILTER_VALIDATE_URL)){
      return false;
    }

    // Инициализация cURL
    $curlInit = curl_init($url);

    // Установка параметров запроса
    curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($curlInit,CURLOPT_HEADER,true);
    curl_setopt($curlInit,CURLOPT_NOBODY,true);
    curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

    // Получение ответа
    $response = curl_exec($curlInit);

    // закрываем CURL
    curl_close($curlInit);

    return $response ? true : false;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name="url" />
    <button>Проверить</button>
  </form>
<?

$URL = $_POST['url'];

if(isSiteAvailible($URL)){
  echo 'Сайт доступен.';
}else{
  echo 'Сайт недоступен.';
}

?>
</body>
</html>