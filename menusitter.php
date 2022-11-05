<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!--menubabysitter-->
    <head>
        <meta charset="utf-8">
        <title>Babysitter Services</title>
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    
    <body>
        <?php $_SESSION["emailb"]=$_POST["username"]; ?>
      <nav >
        <div class="conatainer">
            <img src="KG4.png" class="logo" alt="Logo" />
    
              
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="#footer">About us</a></li>
                    <li><a href="Home.html">Sign out</a></li>
                </ul>
        </div>
         </nav>
    
      <ul class="servicesAsTable">
        <li class="head">Services</li>
        <li> <a href="request list.html"> View job request list</a></li>
        <li>View my jobs
           <ul class="dropdown">
            <li><a href="status.php">View my current jobs</a></li>
            <li><a href="status.php"> View my previous jobs</a></li>
           </ul>
    
        </li>
        <li><a href="testimonials.html">View my reviews &amp; rates</a> </li>
        <li><a href="babysitterprofile.html"> View my profile</a></li>
      </ul>


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