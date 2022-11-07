



<?php

session_start();


include 'includes/functions2.inc.php';
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','test1');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");


        // function emailExists($conn, $_SESSION["username"]){
        //     $sql = "SELECT * FROM parent WHERE parentemail= ?;";
        //     $stmt = mysqli_stmt_init($conn);
        //     if(!mysqli_stmt_prepare($stmt, $sql)){
        //      header("location: ../signUpS.php?error=stmtfailed");
        //          exit();
        //     }
         
        //     mysqli_stmt_bind_param($stmt, "s", $Email);
        //     mysqli_stmt_execute($stmt);
         
        //     $resultData = mysqli_stmt_get_result($stmt);
         
        //     if($row = mysqli_fetch_assoc($resultData)){
        //      return $row;
        //     }
        //     else{
        //      $result = false;
        //      return $result;
        //     }
        //     /////////////////////////////mysqli_stmt_close($stmt);
        //  }


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
    <script type="text/javascript">
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
        // function getLocation(){
        //    if(navigator.geolocation){
        //       // timeout at 60000 milliseconds (60 seconds)
        //       var options = {timeout:60000};
        //       navigator.geolocation.getCurrentPosition
        //       (showLocation, errorHandler, options);
        //    } else{
        //       alert("Sorry, browser does not support geolocation!");
        //    }
        // }
     </script>
  <!--====================================================================================================  -->
    
    
    
    
    </head>
    <body>
        

        <div class="wrapper">
            <!--Top Menu & Menu button-->
            <!-- <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            
        </div> -->
              <div class="sidebar">
                  <div class="profile1">
                    <br><br><br><br>
                        <img src="157-1579943_no-profile-picture-round.png" alt="profile picture"> 
                        <br>Parent name 
                      <br>
                  </div>
                    <!--Menu item-->
                    <ul>
                        <li>
                            <a href="menuparent.html" >
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="bookingsparent.html#CurrentBookings" >
                              <span class="icon"><i class="fas fa-folder"></i></i></span>
                              <span class="item">Current bookings</span>
                            </a>
                        </li>
                        <li>
                            <a href="bookingsparent.html#PreviousBookings" >
                              <span class="icon"><i class="fas fa-folder"></i></i></span>
                              <span class="item">Previous bookings</span>
                            </a>
                        </li>
                        <li>
                            <a href="offer.html">
                                <span class="icon"><i class="fas fa-folder"></i></i></span>
                                <span class="item">Post job request</span>
                            </a>
                        </li>
                        <li>
                            <a href="View offer list.html">
                              <span class="icon"><i class="fas fa-folder"></i></i></span>
                              <span class="item">View offer list</span>
                            </a>
                        </li> 
                        <li>
                            <a href="parentprofile.html"class="active">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span class="item">Manage profile</span>
                            </a>
                        </li>
                        
          </ul>
          
              </div>
              
          </div>
        <script>
              var hamburger = document.querySelector(".hamburger");
            hamburger.addEventListener("click", function(){
                document.querySelector("body").classList.toggle("active");
            })
        </script>
      <!-- ========================================================================================== -->
      



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

             if (isset($_SESSION['username'])){


$email=$_SESSION["username"];
//  $email= "bshaer.n1@gmail.com";



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


        <form>

        <div class="profile">
            <center><img class="pro" src="157-1579943_no-profile-picture-round.png" alt="user's photo"> </center>
            <h1>Personal Information</h1>
            <div class="left">
            <div class="in"><Label for="fname">First name</Label>
            <input type="text" name="First name" value="<?php echo $user['parentfname']; ?>" id="fname" required></div>
            
                <div class="in">  <Label for="sname">Last name</Label>
            <input type="text" name="Last name" value="<?php echo $user['parentlname']; ?>" id="sname" required></div>
          
                    <div class="in"> <Label for="pass">Password</Label>
            <input type="password" name="password" value="<?php echo $user['parentpassword']; ?>" id="pass" required></div>
           </div>
            <div class="right">
           <div class="in">  <Label for="email">Email Address</Label>
            <input type="email" name="email"  value="<?php echo $user['parentemail']; ?>" id="email" required></div>

            <div class="in">  <Label for="city">City</Label><br>
                <input type="text" name="city" value="<?php echo $user['parentcity']; ?>" id="city" required></div>

                <div class="in"><label for="loc">Location</label>
                <input type="loc" name="loc"  value="<?php echo $user['parentaddress']; ?>" id="loc" required></div>



                    <!-- <label> <b>Location</b>  </label> <br> -->
                    <div id="mapholder"></div>
             <!-- <form>
                <input type="button" onclick="getLocation();" value="Get Location"/>
             </form> -->
                    <!-- <input  type="text" name="loc" value="Location" id="loc" required> -->
                </div>
            </div>
            <!-- <div class="button"><input type="submit" value="SAVE CHANGES"></div> -->
            <!-- <div class="button"><input type="reset" value="DELETE PROFILE"></div> -->
            <!-- <div class="button1"><input type="submit" value="SAVE CHANGES"></div> -->
            <center><button type="submit" class="button">Save changes</button> </center> <br>
            <center><button type="reset" class="button">Delete account</button> </center>
               
               
               
          
        </div> 




<!-- end profile div   -->


</form>
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

  <!-- ========================================================================================== -->


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
 <form>
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
 <br>
 <p>&copy;2022 KinderGuardians</p>
 </div>
 </div>
 
 <!-- ======================================================================== -->
    

    </body>
</html>



