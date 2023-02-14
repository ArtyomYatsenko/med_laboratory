<?php
include ("app/database/user.php");
$nameorganization = $_SESSION['nameorganization'];

if(!$_SESSION['id'])
{
header('Location:cabinet.php?session=1');
}else{




if(isset($_POST['calendar'])){
    tt($_POST);
//     $calendar = $_POST['calendar'];
//     // $calendar = date("m.d.Y H:m:s", strtotime($calendar));
//     // $filename = __DIR__ . '/textfile.txt';
 
//     //  $fh = fopen($filename, 'w');
//     //  fwrite($fh, $calendar);
//     //  fclose($fh);
//     $numberdemand = $_POST['numberdemand'];  
//     $surname1c = $_POST['surname1c'];  
//     $name1c = $_POST['name1c'];  
//     $middlename1c = $_POST['middlename1c'];  
//     $dateofbirth1c = $_POST['dateofbirth1c']; 
//     $age = $_POST['age'];
//     $sex = $_POST['sex'];  
//     // $cervical = $_POST['cervical'];  
//     // $vagina = $_POST['vagina'];  
//     // $uretra = $_POST['uretra'];  
//     $email = $_POST['email'];    
//     $phone = $_POST['phone'];
//     $note = $_POST['note'];   
//     $department = $_POST['department']; 
//     // $doctor = $_POST['doctor']; 
//     $infoanaliz = $_POST['infoanaliz']; 
//     // $research = $_POST['research'];  
//     $series = $_POST['series'];  
//     $number = $_POST['number'];  
//     $typereception = $_POST['typereception'];  
//     $dataanaliz = $_POST['dataanaliz'];


//     $doctorsurname = $_POST['doctorsurname'];
//     $doctorname = $_POST['doctorname'];
//     $doctormiddlename = $_POST['doctormiddlename'];

//     $login = trim($series . $number);
//     $calendar1c = str_replace('T', ' ', $calendar);
//     $existence = selectOne('basa', ['login' => $login]);

     
//     if($existence['login'] == ""){

//         insert('basa', ['login' => $login, 'name' => $name1c, 'middlename' => $middlename1c, 'surname' => $surname1c, 'dateofbirth' => $dateofbirth1c, 'email' => $email, 'admin' => '1']);

//     }
//     $existence1с = selectOne('basa', ['login' => $login]);
//     $id_patient = $existence1с['id'];
//     $existence_analyz = selectOne('patient_tests', ['numbertube' => $numberdemand]);

//             // $filename = __DIR__ . '/textfile.txt';
 
//             //  $fh = fopen($filename, 'w');
//             //  fwrite($fh, $numberdemand);
//             //  fwrite($fh, $existence_analyz['numbertube']);
//             //  fclose($fh);

//     if($existence_analyz['numbertube'] == ""){
//         insert('patient_tests', ['created' => $calendar1c, 'сounterparty' => $nameorganization, 'organization' => $nameorganization, 'completed_status' => '0', 'id_patient' => $id_patient, 'website' => '1', 'numbertube' => $numberdemand] );
//     }

    
// // Авторизация
// $username = "Администратор";
// $password = "433800Oly";
// $host_api = "http://109.195.60.80:8880/clinic";
// $host_post = "http://109.195.60.80:8880/clinic/hs/post";

// $data = array
//  (
//  "calendar" => $calendar, 
//  "numberdemand" => $numberdemand, 
//  "surname1c" => $surname1c, 
//  "name1c" => $name1c, 
//  "middlename1c" => $middlename1c, 
//  "dateofbirth1c" => $dateofbirth1c, 
//  "age" => $age, 
//  "sex" => $sex, 
//  "cervical" => $cervical, 
//  "name1c" => $name1c, 
//  "vagina" => $vagina, 
//  "uretra" => $uretra, 
//  "email" => $email, 
//  "phone" => $phone, 
//  "note" => $note, 
//  "department" => $department, 
//  "doctor" => $doctor, 
//  "infoanaliz" => $infoanaliz, 
//  "research" => $research,
//  "series" => $series,
//  "number" => $number,
//  "typereception" => $typereception,
//  "nameorganization" => $nameorganization,
//  "dataanaliz" => $dataanaliz,
//  "doctorsurname" => $doctorsurname,
//  "doctorname" => $doctorname,
//  "doctormiddlename" => $doctormiddlename,
//  );
// $json_data = json_encode($data);

// $ch = curl_init($host_api);

// // Заполняем параметры CURL для получения данных по запросу POST
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
// curl_setopt($ch, CURLOPT_URL, $host_post);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// //Если передавать ничего не надо, то вместо $json_data нужно передать NULL, иначе запрос не выполнится curl_setopt($ch, CURLOPT_POSTFIELDS, NULL);


// // Выполнение запроса и получение ответа
// $output = curl_exec($ch);

// // Проверка наличия ошибок
// if ($output === FALSE) {

//     echo "cURL Error: " . curl_error($ch);

// }

// //Выводим сервисную информацию по выполнению запроса
// // $info = curl_getinfo($ch);

// // echo 'Took ' . $info['total_time'] . ' seconds for url ' . $info['url'];

// // Очистка ресурсов
// echo $output;
// curl_close($ch);
// // header('location: ' . "cabinetpartnera.php");

}else echo "Ошибка отправки данных";


?>

<!-- <meta http-equiv="refresh" content="2; url=http://esmedlab.ru/demand.php"> -->
<?php }?>