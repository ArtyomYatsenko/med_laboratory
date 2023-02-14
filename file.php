<!-- <?php
include ("app/database/user.php");
?>
<form enctype="text/plain" accept-charset="utf-8" method="post" action="http://192.168.0.199/clinic/hs/post">
<p>
<input type="" name="f">
<input type="submit" value="Отправить">
</p>
</form> -->


<?php
//Авторизация
$username = "Администратор";
$password = "433800Oly";
$host_api = "http://192.168.0.199/clinic";
$host_post = "http://192.168.0.199/clinic/hs/post";

$data = array
 (
 //"code" => "000000004", //поиск по коду
 "naim" => "Монитор" //поиск по наименованию
 );
$json_data = json_encode($data);

$ch = curl_init($host_api);

// Заполняем параметры CURL для получения данных по запросу POST
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_URL, $host_post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

//Если передавать ничего не надо, то вместо $json_data нужно передать NULL, иначе запрос не выполнится curl_setopt($ch, CURLOPT_POSTFIELDS, NULL);


// Выполнение запроса и получение ответа
$output = curl_exec($ch);

// Проверка наличия ошибок
if ($output === FALSE) {

    echo "cURL Error: " . curl_error($ch);

}

//Выводим сервисную информацию по выполнению запроса
$info = curl_getinfo($ch);

echo 'Took ' . $info['total_time'] . ' seconds for url ' . $info['url'];

// Очистка ресурсов
curl_close($ch);


echo "<br>";
echo "<br>";

$obj = json_decode($output,true);

echo "Выводит все содержимое JSON";
echo "<br>";

var_dump($obj); // Выводит все содержимое JSON в браузер
?>