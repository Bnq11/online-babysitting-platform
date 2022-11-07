<?php require("connection.php"); ?>

<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href=KG1.png>
<link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<title>Offer</title>


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
                        <a href="offer.html"class="active">
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
  
  <?php
    $_SESSION["emailparent"]=$_POST["username"];    

    $x=$_SESSION["emailparent"];//
   
     $sql = "SELECT parentID FROM parent WHERE  parentemail='$x'";
     $resultp = mysqli_query($conn, $sql); 
      
     if($row = mysqli_fetch_row($resultp))
{
  
    $var1=$row[0];
    $var2=(int)$var1;
    $query1 = "SELECT * FROM bookings where parentid ='$var2'";
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) == 0)
    echo "<div class=\"info\"><h3 class = \"title2\">No Posted Requests</h3></div>";
    else {
        while($row = mysqli_fetch_array($result1)){ 
            $childname = $row['childName'];
            $childage = $row['childAge'];

            $y= $row[3];
            $z=$row[4];
            
            $dateS=date_create($y);
            $start= date_format($dateS,"h:ia");
            
            $dateE=date_create($z);
            $end= date_format($dateE,"h:ia");
            
            $date=date_format($dateS,"Y/m/d");
        
            $stype = $row['Service'];
            $sduration = $row['durationSTART'];
            $eduration = $row['durationEND'];
            $pID = $row['parentID'];
          
                                }  




?>

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
    

    <section class="Post-request">
     <form>

        <div>
            <h2>Job Request</h2>
        </div>

        <div class="left">
        <div class="name">
            <label>Child's Name:
            <input type="text" value="<?php echo $childname; ?>" >
            </label></div>
        
        <div class="age">
            <label>Child's Age:<br>
            <input type="text" value="<?php echo $childage; ?>" >
            </label> </div>

         <div class="service">
                 <label>Type of service:
                <input type = "text" name="services"  value= "<?php echo $stype; ?>">
                    <!-- <option >Choose an option</option>
                    <option>Toddler babysitting</option>
                    <option>Infant babysitting</option>
                    <option  selected >Child babysitting</option>
                    <option>After school care</option>
                    <option>Holiday sitter</option>
                    <option>Help in homework</option>
                    </select> -->
                 </label> </div>

        </div>

        <div class="right">
                       Date: <br> <input class="#" id="date" type="date" name="date" value="<?php echo $date;?>"><br> </label> 
                      <!-- <label>Session Duration:<br></label>  -->
                        <label>Sessin Duration (Start): <input class="#" type="time" name="time" value="<?php echo $sduration; ?>"> <br></label> 
                        <label><span class="#">Session Duration (End):</span> <input class="#" type="time" name="time" value="<?php echo $eduration; ?>"><br> </label> 
                      <br>
    
                    </label></div>
                              
                                
    

            <input id="save" type="submit" value="Save changes" onclick="functionA()">



                            
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
                            </div>
 <!-- ======================================================================== -->
    
</body>
</html>