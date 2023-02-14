<?php
include ("app/database/user.php");
error_reporting(E_ERROR);
if(isset($_POST['text'])){
    $created = [];
    $completed_status = [];
    $demand = [];
    $index_registrator = [];
    $allanaliz = [];
    $comment = [];
    $datalaboratory = [];
    $website = '1';
    $search = $_POST['text'];
    $search1 = $_POST['text1'];
    $param = $_POST["param"]; 
    $nameorganization = $_POST["nameorganization"]; 
    $dem = [];
    $id_pat = [];
    $numbertube = [];
    $a = 0;
    // $f = fopen("textfile.txt", "w");
    // fwrite($f, $search);
    // fwrite($f, $param);
    // fclose($f);  
    $i = 0;
    $qwe = 0;

    if($param == "findfio"){
        $searchArray = explode(' ', $search);
        $name = $searchArray[1];
        $surname = $searchArray[0]; 
        $middlename = $searchArray[2];
        $patient = selectOne('basa', ['surname' => $surname, 'name' => $name, 'middlename' => $middlename]);
        $id = $patient['id'];
        $demand = selectAll('patient_tests', ['id_patient' => $id, 'website' => $website, 'сounterparty' => $nameorganization]);

            foreach($demand  as $qwerty){

                foreach($qwerty as $value){

                    fwrite($f, $value);   
                    $allanaliz[] = $value;

                    if($qwe == 0){
                        $created[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 1){
    
                        $completed_status[$i] = $allanaliz[$qwe];

                        if($completed_status[$i] == 1){
                            $completed_status[$i] = "(Выполнена)"; 
                        }else{
                            $completed_status[$i] = "(В работе)";
                        }

                    }elseif($qwe == 2){
    
                        $demand[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 4){

                        $id_pat[$i] = $allanaliz[$qwe];

                    }elseif($qwe == 7){
    
                        $index_registrator[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 8){
    
                        $datalaboratory[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 10){
    
                        $comment[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 11){

                        $numbertube[$i] = $allanaliz[$qwe];

                    }
    
                    $qwe++;

                    if($qwe == 12){ 
                        $qwe = 0;
                        unset($allanaliz); 
                    }
    
                }

                $i++; 

            }
        // fclose($f); 
        foreach($id_pat as $pat){
            $patient = selectOne('basa', ['id' => $pat]); 
            $fio_pat[$a] = $patient; 
            $a = $a + 1;
        } 
        // tt($fio_pat);
    }elseif($param == "findpass"){
        $patient = selectOne('basa', ['login' => $search]);
        $id = $patient['id'];
        $demand = selectAll('patient_tests', ['id_patient' => $id, 'website' => $website, 'сounterparty' => $nameorganization]);

            foreach($demand  as $qwerty){

                foreach($qwerty as $value){

                    // fwrite($f, $value);   
                    $allanaliz[] = $value;

                    if($qwe == 0){
                        $created[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 1){
    
                        $completed_status[$i] = $allanaliz[$qwe];

                        if($completed_status[$i] == 1){
                            $completed_status[$i] = "(Выполнена)"; 
                        }else{
                            $completed_status[$i] = "(В работе)";
                        }

                    }elseif($qwe == 2){
    
                        $demand[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 4){

                        $id_pat[$i] = $allanaliz[$qwe];

                    }elseif($qwe == 7){
    
                        $index_registrator[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 8){
    
                        $datalaboratory[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 10){
    
                        $comment[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 11){

                        $numbertube[$i] = $allanaliz[$qwe];

                    }
    
                    $qwe++;

                    if($qwe == 12){ 
                        $qwe = 0;
                        unset($allanaliz); 
                    }
      
                }

                $i++;

            }
            foreach($id_pat as $pat){
                $patient = selectOne('basa', ['id' => $pat]); 
                $fio_pat[$a] = $patient; 
                $a = $a + 1;
            } 
    }elseif($param == "finddemand"){
        //  $f = fopen("textfile.txt", "w");
        $demand = selectAll('patient_tests', ['numbertube' => $search, 'website' => $website, 'сounterparty' => $nameorganization]);
        $id = $demand['id_patient'];
            foreach($demand  as $qwerty){
                $id = $qwerty['id_patient'];
                foreach($qwerty as $value){

                    //  fwrite($f, $value);   
                    $allanaliz[] = $value;

                    if($qwe == 0){
                        $created[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 1){
    
                        $completed_status[$i] = $allanaliz[$qwe];

                        if($completed_status[$i] == 1){
                            $completed_status[$i] = "(Выполнена)"; 
                        }else{
                            $completed_status[$i] = "(В работе)";
                        }

                    }elseif($qwe == 2){
    
                        $demand[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 4){

                        $id_pat[$i] = $allanaliz[$qwe];

                    }elseif($qwe == 7){
    
                        $index_registrator[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 8){
    
                        $datalaboratory[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 10){
    
                        $comment[$i] = $allanaliz[$qwe];
    
                    }elseif($qwe == 11){

                        $numbertube[$i] = $allanaliz[$qwe];

                    }
    
                    $qwe++;

                    if($qwe == 12){ 
                        $qwe = 0;
                        unset($allanaliz); 
                    }
      
                }
                $i++;

            }
        
        // $patient = selectOne('basa', ['id' => $id]);
        foreach($id_pat as $pat){
            $patient = selectOne('basa', ['id' => $pat]); 
            $fio_pat[$a] = $patient; 
            $a = $a + 1;
        }    
    
    }elseif($param == "date"){
        
        
        $demand = selectAllData('patient_tests', $search, $search1, $nameorganization);
        
                $id = $demand['id_patient'];
                foreach($demand  as $qwerty){
                    
                    $id = $qwerty['id_patient'];
                    
                    foreach($qwerty as $value){
                    
                        fwrite($f, $value);   
                        $allanaliz[] = $value;

                        if($qwe == 0){
                            $created[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 1){

                            $completed_status[$i] = $allanaliz[$qwe];

                            if($completed_status[$i] == 1){
                                $completed_status[$i] = "(Выполнена)"; 
                            }else{
                                $completed_status[$i] = "(В работе)";
                            }

                        }elseif($qwe == 2){

                            $demand[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 4){

                            $id_pat[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 7){

                            $index_registrator[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 8){

                            $datalaboratory[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 10){

                            $comment[$i] = $allanaliz[$qwe];

                        }elseif($qwe == 11){

                            $numbertube[$i] = $allanaliz[$qwe];

                        }

                        $qwe++;

                        if($qwe == 12){ 
                            $qwe = 0;
                            unset($allanaliz); 
                        }

                    }
                    $i++;

                }
        $fio_pat = [];
        
        foreach($id_pat as $pat){
            $patient = selectOne('basa', ['id' => $pat]); 
            $fio_pat[$a] = $patient; 
            $a = $a + 1;
        }
        // $patient = selectOne('basa', ['id' => $id]);
            
        // fclose($f);  
        
        // fclose($f);  
    }
    echo json_encode($created, JSON_UNESCAPED_UNICODE) . "#";
    echo json_encode($completed_status, JSON_UNESCAPED_UNICODE) . "#";  
    echo json_encode($demand, JSON_UNESCAPED_UNICODE) . "#";
    echo json_encode($index_registrator, JSON_UNESCAPED_UNICODE) . "#";
    echo json_encode($comment, JSON_UNESCAPED_UNICODE) . "#";  
    echo json_encode($fio_pat, JSON_UNESCAPED_UNICODE) . "#";
    echo json_encode($datalaboratory, JSON_UNESCAPED_UNICODE) . "#";
    echo json_encode($numbertube, JSON_UNESCAPED_UNICODE);

}
?>