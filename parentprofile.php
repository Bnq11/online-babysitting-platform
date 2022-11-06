
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
?>


<!DOCTYPE html>






<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage My Profile</title>
        <link rel="stylesheet" href="sttyle.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
    
    
    <!-- ================================================================================================ -->
    <!-- <script type="text/javascript">
        function showLocation(position) {
           var latitude = position.coords.latitude;
           var longitude = position.coords.longitude;
           var latlongvalue = position.coords.latitude + ","
           + position.coords.longitude;
           var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
           +latlongvalue+"&amp;zoom=14&amp;size=400x300&amp;key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o";
           document.getElementById("mapholder").innerHTML =
           "<img src='"+img_url+"'>";
        }
        function errorHandler(err) {
           if(err.code == 1) {
              alert("Error: Access is denied!");
           } else if( err.code == 2) {
              alert("Error: Position is unavailable!");
           }
        }
        function getLocation(){
           if(navigator.geolocation){
              // timeout at 60000 milliseconds (60 seconds)
              var options = {timeout:60000};
              navigator.geolocation.getCurrentPosition
              (showLocation, errorHandler, options);
           } else{
              alert("Sorry, browser does not support geolocation!");
           }
        }
     </script> -->
  <!--====================================================================================================  -->
    
    
    
    
    </head>
    <body>
        
        <nav>
            <div class="conatainer">
                <img src="KG4.png" class="logo" alt="Logo" />
        
                  
                    <ul>
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="#footer">About us</a></li>
                        <li><a href="Home.html">Sign out</a></li>
                        
                    </ul>
            </div>
             </nav>




             <?php
  




if (true){


    $email="kwkna@gmail.com";


   $parents ="SELECT * FROM parent where parentemail='$email'";


    $query=mysqli_query($conn, $parents);


    // if($row = mysqli_fetch_row($query)){

    // $var1 = $row[0];
    // $var2=(int)$var1;

    // $parents2 ="SELECT * FROM parent where parentID='$email'";
    // $query2=mysqli_query($conn, $parents2);
    // }

if(mysqli_num_rows($query)>0){

    

        foreach($query as $user){


     
    ?>

  

   




  
        <form action=saveChanges.php method="post">



       
        
        <div class="profile">
            <center><img class="pro" src="157-1579943_no-profile-picture-round.png" alt="user's photo"> </center>
            <h1>Personal Information</h1>

            <input type="hidden"  name= "user_id" value="<?php echo $user['parentID']; ?>"
            <div class="in"><Label for="fname">First name</Label>
            <input type="text" name="fname" value="<?php echo $user['parentfname']; ?>" id="fname" required></div>
            
                <div class="in">  <Label for="sname">Last name</Label>
            <input type="text" name="lname" value="<?php echo $user['parentlname']; ?>" id="sname" required></div>
          
                    <div class="in"> <Label for="pass">Password</Label>
            <input type="text" name="pass" value="<?php $user['parentpassword']; ?>" id="pass" required></div>
           
                        <div class="in">  <Label for="email">Email Address</Label>
            <input type="email" name="email"  value="<?php echo $user['parentemail']; ?>" id="email" required></div>

            <div class="in">  <Label for="city">City</Label>
                <input type="text" name="city" value="<?php echo $user['parentcity']; ?>" id="city" required></div>

                <!-- <div class="in"><label for="loc">Location</label> -->
                    <!-- <label> <b>Location</b>  </label> <br> -->
                    <!-- <div id="mapholder"></div> -->
             <!-- <form> -->
                <!-- <input type="button" onclick="getLocation();" value="Get Location"/> -->
             <!-- </form> -->
                    <!-- <input  type="text" name="loc" value="Location" id="loc" required> -->
                <!-- </div> -->

            <!-- <div class="button"><input type="submit" value="SAVE CHANGES"></div> -->
            <!-- <div class="button"><input type="reset" value="DELETE PROFILE"></div> -->
            <!-- <div class="button1"><input type="submit" value="SAVE CHANGES"></div> -->






            <center><button type="submit" name="update_user" class="button">Save changes</button> </center> <br>



            <center><button type="reset" class="button">Delete account</button> </center>
               
               
               
          
        </div> 




<!-- end profile div   -->


</form>



<?php


    
}// end for

}// end rows

else{



?>

<h4> NO recodrs found</h4>

<?php

} // end else


}
?>




        
<div class= "footer">
    <div class="col-1">
        <h3><b>ABOUT US</b></h3>
         
        <p>At KinderGuardians we distinguish ourselves on creating special 
            memorable moments for your little angels. Our babysitters don't just babysit your kids, 
            they teach them valuable lessons that keep them amused and more importantly smiling thanks
             to their creative teaching style.</p>
      </div><br>
<div id="footer"></div>
<div class="col-2">

<h3><b>NEWSLETTER</b></h3>
<form class="foot">

    <input type="text" placeholder="Your Email Address" required>
    <br>
    <button type="submit">SUBSCRIBE NOW </button>
</form>
</div><br>

<div class="col-3">
<h3><b>CONTACT US</b></h3>
<a href="mailto:info@kinderguardians.com">info@kinderguardians.com</a>
<div class="social-icons"></div>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<br><br><br>
<p>&copy;2022 KinderGuardians</p>
</div>
</div>

    </body>
</html>



