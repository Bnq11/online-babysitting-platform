<?php
   
    if (!$conn = mysqli_connect("localhost","root","" , "babysitterplatform"))
        die("Connection failed.");

    if(!mysqli_select_db($conn, "babysitterplatform"))
        die("Could not open the babysitterplatform database.");




?>