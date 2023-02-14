<?php
include ("app/database/db.php");

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_login'])){
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);
    $existence = selectOne('basa', ['login' => $login]);
    // tt($existence);
    if($pass === $existence['password']){
        $_SESSION['id'] = $existence['id'];
        $_SESSION['login'] = $existence['login'];
        $_SESSION['admin'] = $existence['admin'];
        $_SESSION['name'] = $existence['name'];
        $_SESSION['surname'] = $existence['surname'];
        $_SESSION['middlename'] = $existence['middlename'];
        $_SESSION['dateofbirth'] = $existence['dateofbirth'];
        $_SESSION['nameorganization'] = $existence['nameorganization'];
        session_write_close();
        // tt($_SESSION);
        if($existence['admin'] == 1){
            header('location: ' . "cabinetpacienta.php");
            session_write_close();
        }
        elseif($existence['admin'] == 2){
            header('location: ' . "demand.php");
            
            
        }
        elseif($existence['admin'] == 0){
            // header('location: ' . "resultanaliz.php");
            session_write_close();
        }
    }else{
        echo 'Логин либо пароль введены не правильно';
    }   
}
?> 
