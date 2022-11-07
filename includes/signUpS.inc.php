<?php

if(isset($_POST["submit"])){

    $FirstName = $_POST["firstname"];
    $LastName = $_POST["lastname"];
    $Email = $_POST["email"];
    $Passwrd = $_POST["psw"];
    $PsWrepeat = $_POST["psw-repeat"];
    $NationalID = $_POST["NationalID"];
    $Age = $_POST["Age"];
    $Phone = $_POST["Phone"];
    $City = $_POST["City"];
    $Gender = $_POST["gender"]; 
    $Bio = $_POST["Bio"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($FirstName, $LastName, $Email, $Passwrd, $PsWrepeat, $NationalID, $Age, $Phone, $City, $Gender, $Bio) !== false){
        header("location: ../signUpS.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($Email) !== false){
        header("location: ../signUpS.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($Passwrd, $PsWrepeat) !== false){
        header("location: ../signUpS.php?error=passwordsdontmatch");
        exit();
    }

    if(emailExists($conn, $Email) !== false){
        header("location: ../signUpS.php?error=emailtaken");
        exit();
    }

    createbabysitter($conn, $FirstName, $LastName, $Email, $Passwrd, $NationalID, $Age, $Phone, $City, $Gender, $Bio);

}
else {
    header("location: ../signUpS.php");
    exit();
}