<?php require("connection.php"); 

$name = $_POST['name'];
$age = $_POST['age'];
$service = $_POST['services'];
$date = $_POST['date'];
$start = $_POST['stime'];
$end = $_POST['etime'];

// $x=$date;// Date
// $time_in_24_hour_format  = date("H:i:s", strtotime("01:30 PM"));
// $durationSTart= date("H:i:s", strtotime($start));//start
// $durationEND=date("H:i:s", strtotime($end));//end

// $y= $x." ".$durationSTart;
// $z=$x." ".$durationEND;
// //print $z ."<br>";
// $dateS=date_create($y);
// $start= date_format($dateS,"Y-m-d H:i:s");
// $dateE=date_create($z);
// $end= date_format($dateE,"Y-m-d H:i:s");



$sqlupdate= "UPDATE bookings SET childName = '$name'  , childAge = '$age' , servicetype = '$service' , durationSTART = '$start' , durationEND = '$end' , Date_of_booking = '$date' WHERE bookingID ='$x' ";
if( !($result = mysqli_query($conn , $sqlupdate))){
    print ("<p> Could not update request!</p>");
    die("Failed");
}

          

 header("location: bookingsparent.php");

mysqli_close($conn);?>
