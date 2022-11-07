<?php

if(isset($_POST["submit"])){
    $Email = $_POST["username"];
    $Passwrd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions2.inc.php';

    if(emptyInputLogin( $Email, $Passwrd) !== false){
        header("location: ../signInP.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $Email, $Passwrd);
}
else {
    header("location: ../signInP.php");
    exit();
}