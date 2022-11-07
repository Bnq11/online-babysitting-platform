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
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!--babysitter status-->
    <head>
        <meta charset="utf-8">
        <title>Babysitter Jobs</title>
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
        <style type="text/css">
            .currentJob h1 ,.prevJob h1{
                margin-left:130px;
            }
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
    <button class="back" > Go Back </button>
    <script src="script.js"></script>
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
              <div class="profile">
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
                        <a href="status.html#My current jobs"class="active">
                          <span class="icon"><i class="fas fa-folder"></i></i></span>
                          <span class="item">Current jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="status.html#My previous jobs"class="active">
                            <span class="icon"><i class="fas fa-folder"></i></i></span>
                            <span class="item">previous jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="testimonials.html">
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
                        <li><a href="menusitter.html">Services</a></li>
                        <li><a href="#footer">About us</a></li>
                        <li><a href="Home.html">Sign out</a></li>
                    </ul>
            </div>
             </nav>

             <div class="currentJob">
                <?php       
                          //  $_SESSION["emailb"]=$_POST["username"];
                           $x=$_SESSION["emailb"];//
                          // $x=$_POST["username"];//
                           $sql = "SELECT sitterID FROM babysitter WHERE  sitteremail='$x'";
                           $result3 = mysqli_query($conn, $sql);
                           $y = 0; 
                    if($row = mysqli_fetch_row($result3))
                    {
                        $var1=$row[0];
                        $var2=(int)$var1;
                        $query1 = "SELECT * FROM bookings where sitterid ='$var2'";
                        $result1 = mysqli_query($conn, $query1);
                        
                        /*$queryp = "SELECT parentid FROM bookings where sitterid ='$var2'";
                        $resultp = mysqli_query($conn, $queryp);
                        $rowp= mysqli_fetch_row($resultp);*/
                        
                        
            
                        if ($result1) {
            
                            if($row = mysqli_fetch_row($result1)){
                                $day=date("Y-m-d H:i:s",time());
                                $start=strtotime($row[3]);
                                $today=strtotime($day);
            
                                //print $today;
                               /* $year=(int) substr($row[3],0,4);
                                $month= (int) substr($row[3],5,2);
                                $day= (int) substr($row[3],8,2);
                                $hour= (int) substr($row[3],11,2);
                                $mint= (int) substr($row[3],14,2);
                                //$second= (int) substr($row[3],17,2);
            
                                $yearT=(int) substr($today,0,4);
                                $monthT=(int) substr($today,5,2);
                                $dayT=(int) substr($today,8,2);
                                $hourT=(int) substr($today,11,2);
                                $mintT=(int) substr($today,14,2);
                                //$secondT=(int) substr($today,17,2);*/
            
                                
            
                                /*if($year-$yearT>=0 && $month-$monthT>=0){
                                if($day-$dayT>=0){
                                if($hourT-$hourT>=0){
                                if($mint-$mintT>=0){
                               // print "next";*/
                               if($start-$today >=0){
                                $querypa = "SELECT parentemail FROM parent where parentID ='$row[8]'";
                                $resultpa = mysqli_query($conn, $querypa);
                                $rowpa= mysqli_fetch_row($resultpa);
                                $GLOBALS['y']++;
                                echo "<table><caption> My current jobs: </caption>";
                                echo "<thead><tr> <th> child name</th> <th> child age</th> <th>service</th><th>price</th><th>time</th> <th>perent's email</th><th> Status</th> </tr></thead><tbody>"; 
                                echo '<tr> <td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td> <td>'.$row[5].'</td> <td> from '.$row[3].' to '.$row[4].'</td><td><a href="mailto:'.$rowpa[0].'">'.$rowpa[0].'</a></td><td>'.$row[6].'</td> </tr>';
                             } }
                            }
                            
            
                            while ($row = mysqli_fetch_row($result1)) {
                                $day=date("Y-m-d H:i:s",time());
                                $start=strtotime($row[3]);
                                $today=strtotime($day);
                                
                                //print $today;
                                /* $year=(int) substr($row[3],0,4);
                                $month= (int) substr($row[3],5,2);
                                $day= (int) substr($row[3],8,2);
                                $hour= (int) substr($row[3],11,2);
                                $mint= (int) substr($row[3],14,2);
                                //$second= (int) substr($row[3],17,2);
            
                                $yearT=(int) substr($today,0,4);
                                $monthT=(int) substr($today,5,2);
                                $dayT=(int) substr($today,8,2);
                                $hourT=(int) substr($today,11,2);
                                $mintT=(int) substr($today,14,2);
                                //$secondT=(int) substr($today,17,2);*/
            
                                /*if($year-$yearT>=0 && $month-$monthT>=0){
                                if($day-$dayT>=0){
                                if($hourT-$hourT>=0){
                                if($mint-$mintT>=0){
                               // print "next";*/
                               if($start-$today >=0){
                                $querypa = "SELECT parentemail FROM parent where parentID ='$row[8]'";
                                $resultpa = mysqli_query($conn, $querypa);
                                $rowpa= mysqli_fetch_row($resultpa);
                                if($GLOBALS['y']==0){
                                echo "<table><caption> My current jobs: </caption>";
                                echo "<thead><tr> <th> child name</th> <th> child age</th> <th>service</th><th>price</th><th>time</th> <th>perent's email</th><th> Status</th> </tr></thead><tbody>"; }
                                echo '<tr> <td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td> <td>'.$row[5].'</td> <td> from '.$row[3].' to '.$row[4].'</td><td><a href="mailto:'.$rowpa[0].'">'.$rowpa[0].'</a></td><td>'.$row[6].'</td> </tr>'; 
                                $GLOBALS['y']++;}
                            }
                            if($GLOBALS['y']>0)
                            {
                            echo"</tbody></table>";
                            }else echo "<br><br><br><br><h1>There is no current jobs</h1>";
                        }
                       else{
                        if($row = mysqli_fetch_row($result3)<=0) echo "<br><br><br><br><h1>There is no current jobs</h1>";
                        else 
                         echo mysqli_error();
                        }
                        ?>
            </div>
            
            <div class="prevJob">
               <!-- <table>
                    <caption> My previous jobs: </caption>
                    <thead>
                        <tr>
                            <th> Offer </th>
                            <th> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >offer1</td>
                            <td>Accepted</td>
                        </tr>
                        <tr>
                            <td>offer2</td>
                            <td>Rejected</td>
                        </tr>
                        <tr>
                            <td >offer3</td>
                            <td>Accepted</td>
                        </tr> 
                    </tbody>
                </table>-->
            
                <?php       
                          //  $_SESSION["emailb"]=$_POST["username"];
                           $x=$_SESSION["emailb"];//
                          // $x=$_POST["username"];//
                           $sql = "SELECT sitterID FROM babysitter WHERE  sitteremail='$x'";
                           $result3 = mysqli_query($conn, $sql);
                           $y = 0; 
                    if($row = mysqli_fetch_row($result3))
                    {
                        $var1=$row[0];
                        $var2=(int)$var1;
                        $query1 = "SELECT * FROM bookings where sitterid ='$var2'";
                        $result1 = mysqli_query($conn, $query1);
                        
                        /*$queryp = "SELECT parentid FROM bookings where sitterid ='$var2'";
                        $resultp = mysqli_query($conn, $queryp);
                        $rowp= mysqli_fetch_row($resultp);*/
                        
                        
            
                        if ($result1) {
            
                            if($row = mysqli_fetch_row($result1)){
                                $day=date("Y-m-d H:i:s",time());
                                $start=strtotime($row[3]);
                                $today=strtotime($day);
            
                                //print $today;
                               /* $year=(int) substr($row[3],0,4);
                                $month= (int) substr($row[3],5,2);
                                $day= (int) substr($row[3],8,2);
                                $hour= (int) substr($row[3],11,2);
                                $mint= (int) substr($row[3],14,2);
                                //$second= (int) substr($row[3],17,2);
            
                                $yearT=(int) substr($today,0,4);
                                $monthT=(int) substr($today,5,2);
                                $dayT=(int) substr($today,8,2);
                                $hourT=(int) substr($today,11,2);
                                $mintT=(int) substr($today,14,2);
                                //$secondT=(int) substr($today,17,2);*/
            
                                
            
                                /*if($year-$yearT>=0 && $month-$monthT>=0){
                                if($day-$dayT>=0){
                                if($hourT-$hourT>=0){
                                if($mint-$mintT>=0){
                               // print "next";*/
                               if($start-$today < 0){
                                $querypa = "SELECT parentemail FROM parent where parentID ='$row[8]'";
                                $resultpa = mysqli_query($conn, $querypa);
                                $rowpa= mysqli_fetch_row($resultpa);
                                $GLOBALS['y']++;
                                echo "<table><caption> My previous jobs: </caption>";
                                echo "<thead><tr> <th> child name</th> <th> child age</th> <th>service</th><th>price</th><th>time</th> <th>perent's email</th><th> Status</th> </tr></thead><tbody>"; 
                                echo '<tr> <td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td> <td>'.$row[5].'</td> <td> from '.$row[3].' to '.$row[4].'</td><td><a href="mailto:'.$rowpa[0].'">'.$rowpa[0].'</a></td><td>'.$row[6].'</td> </tr>';
                             } }}
            
                            while ($row = mysqli_fetch_row($result1)) {
                                $day=date("Y-m-d H:i:s",time());
                                $start=strtotime($row[3]);
                                $today=strtotime($day);
                                
                                //print $today;
                                /* $year=(int) substr($row[3],0,4);
                                $month= (int) substr($row[3],5,2);
                                $day= (int) substr($row[3],8,2);
                                $hour= (int) substr($row[3],11,2);
                                $mint= (int) substr($row[3],14,2);
                                //$second= (int) substr($row[3],17,2);
            
                                $yearT=(int) substr($today,0,4);
                                $monthT=(int) substr($today,5,2);
                                $dayT=(int) substr($today,8,2);
                                $hourT=(int) substr($today,11,2);
                                $mintT=(int) substr($today,14,2);
                                //$secondT=(int) substr($today,17,2);*/
            
                                /*if($year-$yearT>=0 && $month-$monthT>=0){
                                if($day-$dayT>=0){
                                if($hourT-$hourT>=0){
                                if($mint-$mintT>=0){
                               // print "next";*/
                               if($start-$today < 0){
                                $querypa = "SELECT parentemail FROM parent where parentID ='$row[8]'";
                                $resultpa = mysqli_query($conn, $querypa);
                                $rowpa= mysqli_fetch_row($resultpa);
                                if($GLOBALS['y']==0){
                                echo "<table><caption> My previous jobs: </caption>";
                                echo "<thead><tr> <th> child name</th> <th> child age</th> <th>service</th><th>price</th><th>time</th> <th>perent's email</th><th> Status</th> </tr></thead><tbody>"; }
                                echo '<tr> <td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td> <td>'.$row[5].'</td> <td> from '.$row[3].' to '.$row[4].'</td><td><a href="mailto:'.$rowpa[0].'">'.$rowpa[0].'</a></td><td>'.$row[6].'</td> </tr>'; 
                                $GLOBALS['y']++;}
                            }
                            if($GLOBALS['y']>0)
                            {
                            echo"</tbody></table>";
                            }else echo "<br><br><br><br><h1>There is no previous jobs</h1>";
                        }
                       else{
                        if($row = mysqli_fetch_row($result3)<=0) echo "<br><br><br><br><h1>There is no previous jobs</h1>";
                        else 
                         echo mysqli_error();
                        }
                        ?>
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
      <br><br>
      <div class="social-icons"></div>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-instagram"></i>
      <br><br>
      <p>&copy;2022 KinderGuardians</p>
      </div>
      </div>
    
   </body>
</html>