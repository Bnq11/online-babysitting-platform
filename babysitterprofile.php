<!DOCTYPE html>



<?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','babysitterplatform-2');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage My Profile</title>
        <link rel="stylesheet" href="sttyle2.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">










        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>







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

        <form>

        <div class="profile">
            <center><img class="pro" src="157-1579943_no-profile-picture-round.png" alt="user's photo"> </center>
            <h1>Personal Information</h1>
            <div class="in"><Label for="fname">First name</Label>
            <input type="text" name="First name" value="Firstname" id="fname" required></div>
            
                <div class="in">  <Label for="sname">Last name</Label>
            <input type="text" name="Second name" value="Lastname" id="sname" required></div>
          
                    <div class="in"> <Label for="pass">Password</Label>
            <input type="password" name="password" value="Password" id="pass" required></div>
           
                        <div class="in">  <Label for="email">Email Address</Label>
            <input type="email" name="email"  value="Email" id="email" required></div>
            <div class="in">  <Label for="phonenum">Phone Number</Label>
                <input type="tel" name="phonenum"  value="0555555555" id="phonenum" required></div>

            <div class="in">  <Label for="city">City</Label>
                <input type="text" name="city" value="City" id="city"></div>

                <div class="in"><label for="loc">Location</label>
                
                    <input  type="text" name="loc" value="Location" id="loc" required>
                </div>

                
                <div class="in"><Label>Bio</Label>
                    <textarea  name="bio" id="bio" rows="5" cols="55">
my bio
                    </textarea>
                    </div>

            <!-- <div class="button"><input type="submit" value="SAVE CHANGES"></div> -->
            <!-- <div class="button"><input type="reset" value="DELETE PROFILE"></div> -->
            <!-- <div class="button1"><input type="submit" value="SAVE CHANGES"></div> -->
            <center><button type="submit" class="button">Save changes</button> </center> <br>
            <center><button type="reset" class="button">Delete account</button> </center>
               
               
               
          
        </div> 




<!-- end profile div   -->


</form>


        
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
<br><br><br>
<p>&copy;2022 KinderGuardians</p>
</div>
</div>


    </body>
</html>



