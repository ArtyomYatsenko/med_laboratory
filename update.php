<?php 
    include ("app/database/user.php");
    if(isset($_POST['surname'])){
       $surname = $_POST['surname'];
       $name = $_POST['name']; 
       $middlename = $_POST['middlename'];
       $dateofbirth = $_POST['dateofbirth'];
       $snils = $_POST['snils'];
       $email = $_POST['email'];
       $login = $_POST['login'];
       $organization = $_POST['organization'];
       $admin = $_POST['admin'];
       $сounterparty = $_POST['сounterparty'];
       $datestart = $_POST['datestart'];
       $dateend = $_POST['dateend'];
       $completed_status = $_POST['completed_status'];
       $password = $_POST['password'];
       $demand = $_POST['dateend'];
       $index_registrator = $_POST['index_registrator'];
       $datalaboratory = $_POST['datalaboratory'];
       $website = $_POST['website'];
       $comment = $_POST['commentsite'];
       $numbertube = $_POST['numbertube']; 
        tt($_POST);

       $existence = selectOne('basa', ['login' => $login]);
       echo $website;
        // $filename = __DIR__ . '/textfile.txt';
 
        // $fh = fopen($filename, 'w');
        // fwrite($fh, tt());
        // fwrite($fh, $index_registrator);
        // fclose($fh);
       if(empty($existence['login'])){
            insert('basa', ['login' => $login, 'password' => $password, 'name' => $name, 'middlename' => $middlename, 'surname' => $surname, 'dateofbirth' => $dateofbirth,
            'snils' => $snils, 'email' => $email, 'admin' => $admin]);
            echo 'Данные пациента успешно записаны. ';
        }
        else{
            update('basa', $existence['id'], ['login' => $login, 'password' => $password, 'name' => $name, 'middlename' => $middlename, 'surname' => $surname, 'dateofbirth' => $dateofbirth,
            'snils' => $snils, 'email' => $email, 'admin' => $admin]);
            echo 'Данные пациента успешно записаны. ';
        }

        $existence1с = selectOne('basa', ['login' => $login]);
        
        $id_patient = $existence1с['id'];
        
        $existence_analyz = selectOne('patient_tests', ['index_registrator' => $index_registrator]);
        
        // tt($existence_analyz);
        if($website == '0'){

            if(empty($existence_analyz['index_registrator'])){
                insert('patient_tests', ['created' => $datestart, 'demand' => $demand, 'organization' => $organization, 'сounterparty' => $сounterparty, 'completed_status' => $completed_status, 'id_patient' => $id_patient,
                'index_registrator' => $index_registrator, 'datalaboratory' => $datalaboratory, 'website' => $website, 'comment' => $comment, 'numbertube' => $numbertube] );
                echo 'Данные заявки успешно записаны. ';
            }
            else{
                updateDemand('patient_tests', $existence_analyz['index_registrator'], ['created' => $datestart, 'demand' => $demand, 'organization' => $organization, 'сounterparty' => $сounterparty, 'completed_status' => $completed_status, 'id_patient' => $id_patient, 
                'index_registrator' => $index_registrator, 'datalaboratory' => $datalaboratory, 'website' => $website, 'comment' => $comment, 'numbertube' => $numbertube] );
                echo 'Данные заявки успешно записаны. ';
            }

        }else{
           
            // if(empty($existence_analyz['numbertube'])){
            //     insert('patient_tests', ['created' => $datestart, 'demand' => $demand, 'organization' => $organization, 'сounterparty' => $сounterparty, 'completed_status' => $completed_status, 'id_patient' => $id_patient,
            //     'index_registrator' => $index_registrator, 'datalaboratory' => $datalaboratory, 'website' => $website, 'comment' => $comment, 'numbertube' => $numbertube] );
            //     echo 'Данные заявки успешно записаны. ';
            // }
            // else{

                // delete('patient_tests', $numbertube);
                // insert('patient_tests', ['created' => $datestart, 'demand' => $demand, 'organization' => $organization, 'сounterparty' => $сounterparty, 'completed_status' => $completed_status, 'id_patient' => $id_patient,
                // 'index_registrator' => $index_registrator, 'datalaboratory' => $datalaboratory, 'website' => $website, 'comment' => $comment, 'numbertube' => $numbertube] );
                // echo 'Данные заявки успешно записаны. ';

                $existence_analyz_s = selectOne('patient_tests', ['numbertube' => $numbertube]);
                
                updateDemandPartner('patient_tests', $existence_analyz_s['numbertube'], ['created' => $datestart, 'demand' => $demand, 'organization' => $organization, 'сounterparty' => $сounterparty, 'completed_status' => $completed_status, 'id_patient' => $id_patient, 
                'index_registrator' => $index_registrator, 'datalaboratory' => $datalaboratory, 'website' => $website, 'comment' => $comment, 'numbertube' => $numbertube] );
                echo 'Данные заявки успешно обновлены. ';
            // }

        }
    }





    ?>

    
