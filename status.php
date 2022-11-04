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
            .currentJob h1{
                margin-left:130px;
            }
            </style>

    </head>
    
    <body>
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
                
                $sql = "SELECT sitterID FROM babysitter WHERE  sitteremail='amal@ht.mail'";
                $result3 = mysqli_query($conn, $sql);
                if($row = mysqli_fetch_row($result3))
                $var1=$row[0];
                $var2=(int)$var1;
                $query1 = "SELECT * FROM bookings where sitterid ='$var1'";
                //$query2=(String)
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    if($row = mysqli_fetch_row($result1)){
                    echo "<table>
                    <caption> My current jobs: </caption>";
                    echo
                "<thead>
                    <tr>
                        <th > Offer</th>
                        <th> Status</th>
                    </tr>
                </thead><tbody>";
                echo '<tr> <td>'.$row[0].'</td> <td>'.$row[6].'</td> </tr>'; 
                }else echo "<br><br><br><br><h1>There is no current jobs</h1>";
                    while ($row = mysqli_fetch_row($result1)) {
                        echo '<tr> <td>'.$row[0].'</td> <td>'.$row[6].'</td> </tr>'; 
                        
                    }
                echo"</tbody> 
                </table>";
                }
                else 
                    echo mysqli_error();
            ?>
</div>

<div class="prevJob">
    <table>
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
    </table>
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
