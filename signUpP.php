<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel = "stylesheet" href=style.css>
      <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
      <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <title>Sign Up Parent</title>
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
      </script>
<!--====================================================================================================  -->
</head>
<body>
      <nav>
         <div class="conatainer">
            <img src="KG4.png" class="logo" alt="Logo" />
               <ul>
                  <li><a href="Home.html">Home</a></li>
                  <li><a href="#footer">About us</a></li>
                  <li><a href="signInP.php">Sign in</a></li>
                  
                  </ul>
         </div>
      </nav>
<!-- ========================================================================================== -->
<section class="Registeration">
   <form action="includes\signUpP.inc.php" method="post">
   
   <?php
            if(isset($_GET["error"])){
                  if($_GET["error"] == "emptyinput"){
                        echo "<p> You didn't fill in all fields! </p>";
                  }
                  else if ($_GET["error"] == "invalidemail"){
                        echo "<p> Write a proper email! </p>";
                  }

                  else if ($_GET["error"] == "passwordsdontmatchl"){
                        echo "<p> Your passwords don't match! </p>";
                  }

                  else if ($_GET["error"] == "stmtfailed"){
                        echo "<p> Something went wrong, try again! </p>";
                  }

                  else if ($_GET["error"] == "emailtaken"){
                        echo "<p> Email already taken! </p>";
                  }

                  else if ($_GET["error"] == "none"){
                        echo "<p> You signed up! </p>";
                  }
}
?>   
      <h2>Sign Up</h2>
      <center><img class="pro" src="157-1579943_no-profile-picture-round.png" alt="user's photo"> <br><label> Profile photo <br></label> </center>
         <!-- <div class="container">  -->
            <div class="left">
            <label>  Firstname: </label>  <br> 
            <input type="text" name="firstname" placeholder= "Firstname" id="firstname" required /> <br>
            
            <label for="email">Email:</label>  <br>
            <input type="email" placeholder="Enter Email" id = "email" name="email" required><br>

            <label for="psw">Password:</label> <br> 
            <input type="password" placeholder="Enter Password" id="psw" name="psw" required>  <br>

            <label for="psw-repeat">Re-type Password:</label>   <br> 
            <input type="password" placeholder="Re-type Password" id="psw-repeat" name="psw-repeat" required> <br> 
            </div>

            <div class="right">
            <label> Lastname:</label>  <br>  
            <input type="text" name="lastname" placeholder="Lastname" id="lastname" required />  <br> 
            
           
            <label> City: </label>     <br> 
            <input type="text" name="City" placeholder="City" size="15" required />  <br>
            <label> Location:  </label><br>
            <input type="text" placeholder="Street Address - city - Zip Code " name="location"    required><br>
            <label> Profile photo: <input type="file" onchange="readURL(this)" accept="Image/*" /></label> 
               
            </div>
            <!-- <textarea rows="5" cols="40"  required >
            </textarea> -->
            <!-- <div id="mapholder"></div>
            <form>
            <input type="button" onclick="getLocation();" value="Get Location"/>
            </form> -->
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br>
            
           <center><div class="check"> <input type="checkbox" checked="checked"> I agree to the terms of use <a href="#">Terms & Policy</a></div></center>
           <br>
            <!-- <a href="menuparent.html"><button type="submit" class="registerbtn"> Register</button></a>  -->
            <center><button type="submit" id="1" name= "submit" class="registerbtn">Register</button>  
            <br>
            <br>
            <label> <b>Already have an account?  <a href="signInP.php">LOG IN</a>  </b> </label><br></center>
            
   </form>
</section> 






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