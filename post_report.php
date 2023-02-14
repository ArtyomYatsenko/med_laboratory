<?php
include ("app/database/user.php");
$nameorganization = $_SESSION['nameorganization'];
if(isset($_POST['reportdata1'])){
    
    $reportdata1 = $_POST['reportdata1'];
    $reportdata2 = $_POST['reportdata2'];


    $username = "Администратор";
    $password = "433800Oly";
    $host_api = "http://109.195.60.80:8880/clinic";
    $host_post = "http://109.195.60.80:8880/clinic/hs/report";

$data = array
 (
 "reportdata1" => $reportdata1,
 "reportdata2" => $reportdata2,
 "nameorganization" => $nameorganization,
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

echo $output;
curl_close($ch);


}
