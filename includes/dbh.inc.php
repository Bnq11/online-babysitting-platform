<?php
    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPWD = "";
    $DBNAME = "test1";
$conn = mysqli_connect($DBHOST,$DBUSER,$DBPWD,$DBNAME);
if (!$conn){
    die("Connection faiiled: ".mysqli_connect_error());
}
?>