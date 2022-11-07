<?php

function emptyInputSignup($FirstName, $LastName, $Email, $Passwrd, $PsWrepeat, $NationalID, $Age, $Phone, $City, $Gender, $Bio){
    //$result;
    if(empty($FirstName) || empty($LastName) || empty($Email) || empty($Passwrd) || empty($PsWrepeat)|| empty($NationalID) || empty($Age) || empty($Phone) || empty($City) || empty($Gender) || empty($Bio)){
        $result= true;
    }
    else{
        $result= false;
    }
    return $result;
}

function invalidEmail($Email){
    //$result;
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $result= true;
    }
    else{
        $result= false;
    }
    return $result;
}

function pwdMatch($Passwrd, $PsWrepeat){
    //$result;
    if($Passwrd !== $PsWrepeat){
        $result= true;
    }
    else{
        $result= false;
    }
    return $result;
}

function emailExists($conn, $Email){
   $sql = "SELECT * FROM babysitter WHERE sitteremail= ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signUpS.php?error=stmtfailed");
        exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $Email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
    return $row;
   }
   else{
    $result = false;
    return $result;
   }
   /////////////////////////////mysqli_stmt_close($stmt);
}

function createbabysitter($conn, $FirstName, $LastName, $Email, $Passwrd, $NationalID, $Age, $Phone, $City, $Gender, $Bio){
    $sql = "INSERT INTO babysitter (sitterfname, sitterlname, sitterpassword, sitteremail, sitterphone, sittercity, sitterbio, NationalId, Age, Gender) VALUES(?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../signUpS.php?error=stmtfailed");
         exit();
    }

    // $hashedPwd = password_hash($Passwrd, PASSWORD_DEFAULT);
 
    mysqli_stmt_bind_param($stmt, "ssssssssss", $FirstName, $LastName,  $Passwrd, $Email, $Phone, $City, $Bio, $NationalID, $Age, $Gender,);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../menusitter.html"); ////////////link to babysitter page
         exit();
 }

 function emptyInputLogin($Email, $Passwrd){
    //$result;
    if(empty($Email) || empty($Passwrd)){
        $result= true;
    }
    else{
        $result= false;
    }
    return $result;
}



function loginUser($conn, $Email, $Passwrd){
    $emailExists = emailExists($conn, $Email);

    if($emailExists == false){
        header("location: ../signInS.php?error=wronglogin");
        exit();
    }
    // $hashedPwd1 = password_hash($Passwrd, PASSWORD_DEFAULT);
    $pwd = $emailExists["sitterpassword"];
    // $checkPwd = password_verify($Passwrd ,$pwd);
    
    if($Passwrd !== $pwd ){
        header("location: ../signInS.php?error=wronglogin1");
        exit();
    }
    else {
        session_start();
        $_SESSION["username"] = $emailExists["sitteremail"];
        // $_SESSION["ID"] = $emailExists["sitterID"];
        header("location: ../menusitter.html");
        exit();
    }
}
