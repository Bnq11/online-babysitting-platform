<?php require("connection.php"); 

$name = $_POST['name'];
$age = $_POST['age'];
$service = $_POST['services'];
$date = $_POST['date'];
$start = $_POST['stime'];
$end = $_POST['etime'];

$x=$date;// Date
$time_in_24_hour_format  = date("H:i:s", strtotime("01:30 PM"));
$durationSTart= date("H:i:s", strtotime($start));//start
$durationEND=date("H:i:s", strtotime($end));//end

$y= $x." ".$durationSTart;
$z=$x." ".$durationEND;
//print $z ."<br>";
$dateS=date_create($y);
$start= date_format($dateS,"Y-m-d H:i:s");
$dateE=date_create($z);
$end= date_format($dateE,"Y-m-d H:i:s");

$sitterid= 1;
//$x="maha@gmail.com";//
$parentid = 1;//"SELECT parentID FROM parent WHERE  parentemail='$x'";
//$result2 = mysqli_query($conn, $parentid);

//if($row = mysqli_fetch_row($result2))
          // {
                    //$var1=$row[0];
                   // $var2=(int)$var1;

$sql = "INSERT INTO bookings"."( childName , childAge , service,durationSTART , durationEND , sitterid, parentid)". 
    "VALUES ('$name' , '$age' , '$service' , '$start' , '$end' , '$sitterid' , '$parentid')";
    if( !($result = mysqli_query($conn , $sql))){
        print ("<p> Could not post request!</p>");
        die("Failed");
    }
//}
                

     header("location: status.php");

    mysqli_close($conn);?>
