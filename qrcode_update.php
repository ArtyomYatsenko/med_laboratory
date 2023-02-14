<?php
include ("app/database/user.php");
if(isset($_POST['name_ang'])){
        
    $login = $_POST['login'];
    $dataqrcode = $_POST['dataqrcode'];
    $result_covid = $_POST['result_covid'];
    $surname_ang = $_POST['surname_ang'];
    $name_ang = $_POST['name_ang'];
    $middlename_ang = $_POST['middlename_ang'];
    $dateofbirth = $_POST['dateofbirth'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $middlename = $_POST['middlename'];
    
    $filename = __DIR__ . '/textfile.txt';
    $fh = fopen($filename, 'w');
    fwrite($fh, $dataqrcode);
    fclose($fh);

    $existence = selectOne('basa', ['login' => $login]);
    



    if($existence['login'] == ""){
        insert('basa', ['name_ang' => $name_ang, 'surname_ang' => $surname_ang, 'middlename_ang' => $middlename_ang, 'dateofbirth' => $dateofbirth, 'name' => $name,
        'surname' => $surname, 'middlename' => $middlename, 'login' => $login]);
        echo 'Данные (анг) пациента записаны.';
        
        
    }
    else{
        update('basa', $existence['id'], ['name_ang' => $name_ang, 'surname_ang' => $surname_ang, 'middlename_ang' => $middlename_ang, 'dateofbirth' => $dateofbirth, 'name' => $name,
        'surname' => $surname, 'middlename' => $middlename]);
        echo 'Данные (анг) пациента обновлены.';
        
    }

    $existence = selectOne('basa', ['login' => $login]);
    $id_patient = $existence['id'];

    $existence_covid = selectOne('covid', ['id_patient' => $existence['id']]);

    if($existence_covid['dataqrcode'] == ""){
        insert('covid', ['dataqrcode' => $dataqrcode, 'result_covid' => $result_covid, 'id_patient' => $id_patient]);
        echo 'Данные ковид успешно записаны.';

        // $filename = __DIR__ . '/textfile.txt';
        // $fh = fopen($filename, 'w');
        // fwrite($fh, $surname_ang);
        // fclose($fh);
    }else{
        updateCovid('covid', $existence['id'], ['dataqrcode' => $dataqrcode, 'result_covid' => $result_covid, 'id_patient' => $id_patient]);
        echo 'Данные ковид успешно обновлены.';

        // $filename = __DIR__ . '/textfile.txt';
        // $fh = fopen($filename, 'w');
        // fwrite($fh, $name_ang);
        // fclose($fh);
    }



}
?>
