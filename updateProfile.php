<?php require("connection.php"); 

$sitterFirst = $_POST['sitterfname'];
$sitterLast = $_POST['sitterlnamme'];
$sitterPassword = $_POST['sitterpassword'];
$sitterEmail = $_POST['sitteremail'];
$sitterPhone =$_POST['sitterphone'];
$sitterCity = $_POST['sittercity']; 
$sitterAddress = $_POST['sitteraddress']; 


$sqlupdate= "UPDATE bookings SET sitterfname = '$sitterFirst'  , childAge = '$age' , sitterlname = '$sitterLast' , sitterpassword = '$sitterPassword' , sitteremail = '$sitterEmail' , sitterphone = '$sitterPhone', sittercity = '$sitterCity' , sitteraddress = '$sitterAddress' WHERE bookingID = ";
if( !($result = mysqli_query($conn , $sqlupdate))){
    print ("<p> Could not update request!</p>");
    die("Failed");
}

          

 header("location: bookingsparent.php");

mysqli_close($conn);?>