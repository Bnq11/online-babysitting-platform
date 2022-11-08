

<?php

// add include
session_start();

if(false){header("location:signInP.php"); exit();}

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

    <meta charset="utf-8">




    <title>My Bookings</title>

    <link rel="stylesheet" type="text/css" href="sttyle.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>






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
                        <a href="menuparent.php" >
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="bookingsparent.php" class="active">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">Current bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="bookingsparent.php" class="active">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">Previous bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="offer.php">
                            <span class="icon"><i class="fas fa-folder"></i></i></span>
                            <span class="item">Post job request</span>
                        </a>
                    </li>
                    <li>
                        <a href="View offer list.php">
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
                <li><a href="menuparent.html">Home</a></li>
                <li><a href="#footer">About us</a></li>
                <li><a href="Home.html">Sign out</a></li>
                
            </ul>
    </div>
     </nav>

    
<!-- ================================================================================= -->
<div class="bookings">
    <h1 >  My Current Bookings</h1>
<table id="myTable" class="ul">
    <!-- Table with 3 columns -->



    <?php




    $ID="1";
    
    
    $booking ="SELECT * FROM bookings where parentID='$ID'";

// AND status= 'A'
    
    
    $query=mysqli_query($conn, $booking);



    if(mysqli_num_rows($query)>0){



        foreach($query as $user){
        
          $c_time= time();
          
          
           $p_time= strtotime($user['durationEND']);

          if ($c_time > $p_time)

          continue;
        
        ?>


    
     
     
     <tr>
         <td> <b> Duration start :<?php echo $user['durationSTART']; ?></b></td>
         <td> <a href=" editPost.php?bookingID=<?php echo $user['bookingID'] ;?>"  > <button type="button" class="buttone">EDIT</button> </a></td>
         <td> <button type="button" class="buttone">DELETE</button></td>

     </tr>
     
    
     
     


     <?php


    
}// end for



}// end rows

else{



?>

<h4> NO recodrs found</h4>

<?php

} // end else


?>


 </table>


 

 <br>

 <br><br>

 <h1 >  My Previous Bookings</h1>  
   
    <table id="myTable" class="ul">
        <!-- Table with 3 columns -->



        <?php 
    $booking ="SELECT * FROM bookings where parentID='$ID'";


    
    
$query=mysqli_query($conn, $booking);



if(mysqli_num_rows($query)>0){



    foreach($query as $user){
    
      $c_time= time();
      
      
      $p_time= strtotime($user['durationEND']);

      if ($c_time <= $p_time)

      continue;
    
    ?>



        




        
         
         
         <tr>
             <td> <b>Duration start: <?php echo $user['durationSTART']; ?> </b></td>
             <td> <a href="RATE.php?requestID=<?php echo $user['bookingID'] ;?> " > <button type="button" class="buttonrev">REVIEW & RATE</button>     </a> </a></td>
    
         </tr>


         <?php


    
}// end for



}// end rows

else{



?>

<h4> NO recodrs found</h4>

<?php

} // end else




?>
         
         
     </table>
   

    
</div>
<!-- ================================================================== -->
<!-- 
         <div class="bookings">



            <ul class="ul">   
              

              <h1 >  My Current Bookings</h1>



              <li> <b>Booking#1</b> <button type="button" class="buttone">DELETE</button>  <a href="editPost.html" > <button type="button" class="buttone">EDIT</button> </a> </li>
<br><br>

              <li><b>Booking#2</b> <button type="button" class="buttone">DELETE</button> <a href="editPost.html" >  <button type="button" class="buttone">EDIT</button>  </a> </li>
              <br><br>
              <li><b>Booking#3</b>   <button type="button" class="buttone">DELETE</button>  <a href="editPost.html" >  <button type="button" class="buttone">EDIT</button> </a> </li>






            </ul> -->



            <!-- <br>

            <br><br>

            <ul class="ul">   
              

                <h1 >  My Previous Bookings</h1>
  
                
                <li> <b>Booking#1</b>   <a href="RATE.html" > <button type="button" class="buttonrev">REVIEW & RATE</button>     </a> </li>
  
                <br><br>
                <li><b>Booking#2</b>  <a href="RATE.html" >  <button type="button" class="buttonrev">REVIEW & RATE</button> </a> </li>
                <br><br>
                <li><b>Booking#3</b>    <a href="RATE.html" >  <button type="button" class="buttonrev">REVIEW & RATE</button> </a> </li>
  
                <br><br>
  
  
  
  
              </ul>










 

         </div>-->
<!-- =============================================================================== -->
<br><br><br><br>

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
 
      














</html>
