<?php

session_start();
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','babysitterplatform');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");





        if (isset($_POST['update_user'])){


$id= $_POST['parentID'];

$fname= $POST['fname'];
$lname= $_POST['lname'];

$pass= $_POST['pass'];

$email= $_POST['email'];

$city= $_POST['city'];


$parents="UPDATE parent SET parentfname='$fname' , parentlname='$fname', parentpassword= '$pass',parentemail='$email',parentcity='$city'" WHERE parentID='$user_id';

$query=mysqli_query($conn, $parents);


if($query){




   exit(0);
}



        }
?>
