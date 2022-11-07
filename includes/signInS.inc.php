<?php

if(isset($_POST["submit"])){
    $Email = $_POST["username"];
    $Passwrd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin( $Email, $Passwrd) !== false){
        header("location: ../signInS.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $Email, $Passwrd);
}
else {
    header("location: ../signInS.php");
    exit();
}