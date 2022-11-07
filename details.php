<?php
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
<meta chrset="utf-8">
   <title>Details</title>
<link rel="stylesheet" type="text/css" href="styleee.css">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
</head>

<body>
    
    <div class="wrapper1">
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
          <div class="sidebar1">
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
                        <a href="View offer list.html"class="active">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">View offer list</span>
                        </a>
                    </li> 
                    <li>
                        <a href="parentprofile.html">
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
<div class="set">
    <?php
    $x=$_GET['bookingID'];
    $sql = "SELECT * FROM bookings WHERE bookingID='$x'";
                $result3 = mysqli_query($conn, $sql);
                if($row = mysqli_fetch_row($result3))
                    {echo "
<h1 class='offer'>Babysitter Profile</h1>

<p><img src='p1.jpeg' alt='babaysitter' width='200px' height='200px'/></p>
<p>
  <span class='header'><strong>Personal Information</strong></span> <br>
    Name: Sara <br>
    Age:28 <br>
    Phone Number:05554443 <br>
    Email:<a href  = 'mailto:Sara@gmail.com'>Sara@gmail.com</a>
</p>
<br>
<p>
  <span class='header'><strong>Rating</strong></strong><br>
   98% (good) 
</p>
<p>
  <!-- <span class='header'><strong>Reviews</strong></span> -->
  <strong></strong>
  <ul><strong> Reviews:</strong>
     <li class='list'><strong>Customer Huda say:</strong>Her behavior is very elegant</li>
	 <li class='list'><strong>Customer Rema say:</strong>Punctual and works great</li>
	 <li class='list'><strong>Customer Lama say:</strong>It's really nice with kids</li>
  </ul>
</p>

<p>
<nav>
<input class='buttons' type='submit' value='Accept'>
<a href='View offer list.html'><button class='buttons'>Reject </button> </a>
<nav>
</p>";} ?>
</div>

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