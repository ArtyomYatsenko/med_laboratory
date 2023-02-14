<?php 
    include ("app/database/db.php");
    // tt($_SESSION);
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    unset($_SESSION['admin']);
    header('location: ' . "cabinet.php");




?>