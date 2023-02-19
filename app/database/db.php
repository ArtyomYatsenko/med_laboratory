<?php
ini_set('session.gc_maxlifetime', 43200);
ini_set('session.cookie_lifetime', 0);
session_start();



require('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function dbCheckError($query){
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE ){
        echo $errInfo[2];
        exit();
    }
    return true;
}

function selectAll($table, $params = []){
    global $pdo;
    
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value ."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
         $i++;
        }
        
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
   
    $f = fopen("textfile.txt", "w");
    fwrite($f, $sql);
    fclose($f); 
    return $query->fetchAll();
}
function selectAllIssl($table, $params){
    global $pdo;
    
    $sql = "SELECT * FROM $table";
    if(!empty($params)){


        $sql = $sql . " WHERE name LIKE '%$params%'";
        
    }
    $sql = $sql . " ORDER BY name";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
   

    return $query->fetchAll();
    // return $sql;
}

function selectAllData($table, $data, $data1, $сounterparty){
    global $pdo;
    // $subdata1 = (int)substr($data1, 0, -6);  
    // $f = fopen("textfile.txt", "w");
    // fwrite($f, $subdata1);
    // fclose($f); 
        $sql = "SELECT * FROM $table WHERE сounterparty = '$сounterparty' AND created BETWEEN '$data' AND '$data1'";

    
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    $f = fopen("textfile.txt", "w");
    fwrite($f, $sql);
    fclose($f); 
    
    return $query->fetchAll();
}
function selectVarikoz($table, $сounterparty){
    global $pdo;

    $sql = "SELECT * FROM $table";

    
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // $f = fopen("textfile.txt", "w");
    // fwrite($f, $sql);
    // fclose($f); 
    
    return $query->fetchAll();
}

function selectIssl($table, $id_vid_issl, $params){
    global $pdo;

    $sql = "SELECT * FROM $table WHERE id_vid_issl = '$id_vid_issl'";

    if(!empty($params)){


        $sql = $sql . " AND name LIKE '%$params%'";
        
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // $f = fopen("textfile.txt", "w");
    // fwrite($f, $sql);
    // fclose($f); 

    return $query->fetchAll();
}

function selectIdVidIssl($table, $vid_issl){
    global $pdo;

    $sql = "SELECT * FROM $table WHERE name = '$vid_issl'";

    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // $f = fopen("textfile.txt", "w");
    // fwrite($f, $sql);
    // fclose($f); 
    
    return $query->fetchAll();
}


function selectOne($table, $params = []){
    global $pdo;
    
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value ."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
         $i++;
        }
        
    }
    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
   

    return $query->fetch();
}




// запись в базу данных
function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $coll = $coll . $key;
            $mask = $mask . "'" . $value . "'";    
        }else{
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

// Обновление строки в таблице
function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key .  " = '" . $value . "'";    
        }else{
            $str = $str . ", " . $key .  " = '" . $value . "'"; 
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}


// Обновление строки заявки в таблице

function updateDemand($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key .  " = '" . $value . "'";    
        }else{
            $str = $str . ", " . $key .  " = '" . $value . "'"; 
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE index_registrator = $id ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}
function updateDemandPartner($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key .  " = '" . $value . "'";    
        }else{
            $str = $str . ", " . $key .  " = '" . $value . "'"; 
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE numbertube = $id ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
   
}
function updateCovid($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key .  " = '" . $value . "'";    
        }else{
            $str = $str . ", " . $key .  " = '" . $value . "'"; 
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id_patient = $id ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
   
}

$params = [
    'username' => 'lol',
    'password' => '3rgeg3'
];

// удаление
function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE numbertube = $id ";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    
}