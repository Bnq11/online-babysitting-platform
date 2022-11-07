

<?php

session_start();

if(false){header("location:signIn.php"); exit();}

    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','babysitterplatform-2');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");




?>


<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Reviews</title>
    <link rel="shortcut icon" type="image/x-icon" href=KG1.png>

    <!--Stylesheet--------------------------->
    <link rel="stylesheet" href="styles.css"/>
    <!--Fav-icon------------------------------>
    <link rel="shortcut icon" href="images/fav-icon.png"/>
    <!--poppins-font-family------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--using-Font-Awesome-------------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
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

    <!-- ========================================================================================== -->
    <div class="wrapper1">
    <button class="back" onlick = "window.history.back()"> Go Back </button>
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
                    <br>Sitter name 
                  <br>
              </div>
                <!--Menu item-->
                <ul>
                    <li>
                        <a href="menusitter.html" >
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="request list.html">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">View job request list</span>
                        </a>
                    </li>
                    <li>
                        <a href="status.html#My current jobs">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">Current jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="status.html#My previous jobs">
                            <span class="icon"><i class="fas fa-folder"></i></i></span>
                            <span class="item">previous jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="testimonials.html"class="active">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">reviews &amp; rates</span>
                        </a>
                    </li> 
                    <li>
                        <a href="babysitterprofile.html">
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
              

        <!--Testimonials------------------->
        <section id="testimonials">
            <!--heading--->
            <div class="testimonial-heading">
                
                <h1>My reviews</h1>
            </div>
            <!--testimonials-box-container------>
            <div class="testimonial-box-container">
<?php 

$ID="1";
    $booking ="SELECT * FROM booking where sitterid='$ID'";


    
    
$query=mysqli_query($conn, $booking);



if(mysqli_num_rows($query)>0){



    foreach($query as $user){
    
      $c_time= time();
      
      
      $p_time= $user['durationEND'];

      if ($c_time <= $p_time)

      continue;
    
    

                $rate = $user['Rate'];
                $date= $user['durationSTART'];

                date("Y-m-d" , strtotime($date));
          
          
          
          

?>



                <!--BOX-1-------------->



                
                <div class="testimonial-box">
                    <!--top------------------------->
                    <div class="box-top">
                        <!--profile----->
                        <div class="profile">
                            <!--img---->
                            <div class="profile-img">
                                <img src="profile.png" alt="profile" />
                            </div>
                            <!--name-and-username-->
                            <div class="name-user">
                                <strong> <?php  echo "Booking at ". date("Y-m-d" , strtotime($date));?>  </strong>
                            </div>
                        </div>
                        <!--reviews------>
                        <div class="reviews">
                            <i class=" <?php echo $rate >= 1 ? "fas" : "far"; ?> fa-star"></i>
                            <i class=" <?php echo $rate >= 2 ? "fas" : "far"; ?> fa-star"></i>
                            <i class="<?php echo $rate >= 3 ? "fas" : "far"; ?> fa-star"></i>
                            <i class="<?php echo $rate >= 4 ? "fas" : "far"; ?> fa-star"></i>
                            <i class="<?php echo $rate >= 5 ? "fas" : "far"; ?> fa-star"></i><!--Empty star-->
                        </div>
                    </div>
                    <!--Comments---------------------------------------->
                    <div class="client-comment">
                        <p> <?php echo $user ['Comments'] ;?> </p>
                    </div>
                </div><br>

                <?php


    
}// end for



}// end rows

else{



?>

<h4> NO recodrs found</h4>

<?php

} // end else




?>
                
                
                
            </div>
        </section>

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
      
      
    
    