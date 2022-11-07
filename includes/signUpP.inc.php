<?php

if(isset($_POST["submit"])){

    $FirstName = $_POST["firstname"];
    $LastName = $_POST["lastname"];
    $Email = $_POST["email"];
    $Passwrd = $_POST["psw"];
    $PsWrepeat = $_POST["psw-repeat"];
    $City = $_POST["City"];
    $Location = $_POST["location"]; 

    require_once 'dbh.inc.php';
    require_once 'functions2.inc.php';


    if(emptyInputSignup($FirstName, $LastName, $Email, $Passwrd, $PsWrepeat, $City, $Location) !== false){
        header("location: ../signUpP.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($Email) !== false){
        header("location: ../signUpP.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($Passwrd, $PsWrepeat) !== false){
        header("location: ../signUpP.php?error=passwordsdontmatch");
        exit();
    }

    if(emailExists($conn, $Email) !== false){
        header("location: ../signUpP.php?error=emailtaken");
        exit();
    }

    createParent($conn, $FirstName, $LastName, $Email, $Passwrd, $City, $Location);

}
else {
    header("location: ../signUpP.php");
    exit();
}