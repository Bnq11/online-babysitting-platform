<?php






 if(!isset($_POST['requestID'])){header("location:bookingsparent.php?error= request id not set"); exit();}


    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','babysitterplatform');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");



        $ID= $_POST['requestID'];
$star= $_POST['star'];
$comm=$_POST['comments'];



$query= "UPDATE  booking SET  Rate = '$star', Comments ='$comm' WHERE bookingID = $ID; ";

$result= mysqli_query($conn, $query);


if(!$result ){

    header("location:bookingsparent.php?error= query not submitted  $star and $comm not set"); 
}


else 

header("location:bookingsparent.php?error= rate submitted correctly ");


?>



