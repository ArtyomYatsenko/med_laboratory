<?php

include("app/database/user.php");

$existence = selectVarikoz('patient_tests', "Варикоза.Нет (ул. Урицкого)");
// $f = fopen("textfile.txt", "w");
//     fwrite($f, $existence);
//     fclose($f); 
$i = 0;
$f = fopen("textfile.txt", "w");
$timeArr = [];
foreach ($existence as $pat) {

    // $chars = ['.',':', ' ']; // символы для удаления
    $myArray = explode(' ', $pat['created']);
    // tt($myArray);
    $myArrData = explode('.', $myArray[0]);
    $str = $myArrData[2] . "-" . $myArrData[1] . "-" . $myArrData[0] . " " . $myArray[1];
    $timeArr[$pat['id_demand']] = $str;


    // $myArrTime = $myArray = explode('.', $myArray[0]); 
    // $time = str_replace($chars, '', $pat['created']);

    // echo $newformat . '<br>';
    // echo $time_p . '<br>';
    // $time[$i] = $pat['created'];

    // tt($pat);
    // echo ($pat['id_patient']);
    // if($i == 4){
    // $existence1с = selectOne('basa', ['id' => $pat['id_patient']]);
    // // echo $i;

    //     fwrite($f, $i . '. ' . $existence1с['surname'] . " | " . $existence1с['name'] . " | " .  $existence1с['middlename'] . " | Номер заявки: " .  $pat['numbertube'] . " | Дата: " . $pat['created'] . "\n");
    // fwrite($f, $i);


    // tt($existence1с);
    // }

    $i = $i + 1;
}
foreach ($timeArr as $pat => $cat) {


    updateClinic('patient_tests', "'" . $pat . "'", ['created' => $cat]);
}
tt($timeArr);
?>