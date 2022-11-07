<?php include_once("connection.php"); ?>

<?php

include 'includes/functions2.inc.php';


session_start();
// $_SESSION["username"]=$_POST["username"];



?>
<!DOCTYPE html>
<html>
<!--menuparent-->
    <head>
        <meta charset="utf-8">
        <title>Parent Services</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style type="text/css">
    .back{
  position: relative;
  padding: 10px 30px;
   /* margin-left: auto;  */
   background-color:#d7b593; 
   width: auto;
   height: auto;
   color: white;
   /* border-radius: 40px; */
  border: none;  
  position: relative;
  cursor: pointer;
  z-index: 1;
  font-size: medium; }

  .back:hover{
color: #75552b;
  }
  </style>


    </head>
    
    <body>



     <?php //  $_SESSION["emailparent"]=$_POST["username"]; ?>     

    <!-- ========================================================================================== -->
    <div class="wrapper">
    <!-- <button class="back" onlick = "window.history.back()"> Go Back </button> -->
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
            <div class="profile">
              <br><br><br><br>
                  <img src="157-1579943_no-profile-picture-round.png" alt="profile picture"> 
                  <br>Parent name 
                <br>
            </div>
              <!--Menu item-->
              <ul>
                  <li>
                      <a href="#" class="active">
                          <span class="icon"><i class="fas fa-home"></i></span>
                          <span class="item">Home</span>
                      </a>
                  </li>
                  <li>
                      <a href="bookingsparent.html#CurrentBookings">
                        <span class="icon"><i class="fas fa-folder"></i></i></span>
                        <span class="item">Current bookings</span>
                      </a>
                  </li>
                  <li>
                      <a href="bookingsparent.html#PreviousBookings">
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
                      <a href="parentprofile.php">
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

     
<!--         
        <ul class="servicesAsTable">
          <li class="head" >Services</li>
          <li> <a href="View offer list.html"> View offer list</a></li>
          <li>
            View my bookings
             <ul class="dropdown">
              <li><a href="bookingsparent.html#CurrentBookings">View my current bookings</a></li>
              <li><a href="bookingsparent.html#PreviousBookings"> View my previous bookings</a></li>
             </ul>
            
          </li>
          <li><a href="offer.html">Post job request</a> </li>
          <li><a href="parentprofile.html"> View my profile</a></li>
        </ul>
      
   -->
   <br><br><br><br><br><br><br><br><br>
    <div class="well">
    <h1>Welcome!</h1>
    <h3>Find trusted caregivers for your every need</h3>
   </div>
    <br><br><br><br><br><br><br><br><br><br>
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

