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
   <title>Job Request List</title>
<link rel="stylesheet" type="text/css" href="styleee.css">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
   
        <script>
          Function functionA(c){
            <?php
                $_session['req']=(int)c;
                 ?>
         }
        </script>
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
<!-- =========================================================================================== -->

         <div class="set">
            <h1 class="offer">Request List</h1>

            <?php
                $x=$_SESSION["emailsitter"];//add by anoud
                $sql = "SELECT sitterID FROM babysitter WHERE  sitteremail='$x'";
                $result3 = mysqli_query($conn, $sql);
                if($row = mysqli_fetch_row($result3))
                    {
                        $var1=$row[0];
                        $var2=(int)$var1;
                        $query1 = "SELECT * FROM bookings where  sitterid ='$var2' AND Status='pending'";
                        $result1 = mysqli_query($conn, $query1);
                        if ($result1) {
                            if($row = mysqli_fetch_row($result1)){
                                echo "<table id="myTable" class="list">
                                <!-- Table with 3 columns -->
                                 <tr><td> <b> $row[0]   </b></td><td>  <!-- <button type="submit" name="submit" >Details</button> --><a href="request1.html"><button class="buttons1" onclick="functionA(".$row[9].")">details </button> </a> </td>
                            
                                 </tr>
                                 
                                 <tr>
                                     <td><b> Request by Mrs. Hanan</b></td>
                                     <td> <!-- <button type="submit" name="submit" >Details</button> --><a href="request2.html"> <button class="buttons1">details </button> </a> </td>
                            
                                 </tr>
                                 
                                 <tr>
                                     <td><b>Request by Mrs. Rana </b></td>
                                     <td> <!-- <button type="submit" name="submit" >Details</button> --><a href="request3.html"> <button class="buttons1">details </button></a></td>
                            
                                 </tr>
                                 
                             </table>";
                $rID="";
                
                if(isset($_GET['parentID']))
                    $name = $_GET['parentID'];
            
                $query = "SELECT * FROM bookings where sitterid='$'";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_row($result)) 
                    {
                        <a href= "RequestDetails.php?requestID= <?php echo $bookingID; "> Details</a>
                    }
                }
               ?>


            <table id="myTable" class="list">
                <!-- Table with 3 columns -->
                 
                
                 <tr>
                
                     <td> <b>Request by Mrs. Iman   </b></td>
                     <td>  <!-- <button type="submit" name="submit" >Details</button> --><a href="request1.html"><button class="buttons1">details </button> </a> </td>
            
                 </tr>
                 
                 <tr>
                     <td><b> Request by Mrs. Hanan</b></td>
                     <td> <!-- <button type="submit" name="submit" >Details</button> --><a href="request2.html"> <button class="buttons1">details </button> </a> </td>
            
                 </tr>
                 
                 <tr>
                     <td><b>Request by Mrs. Rana </b></td>
                     <td> <!-- <button type="submit" name="submit" >Details</button> --><a href="request3.html"> <button class="buttons1">details </button></a></td>
            
                 </tr>
                 
             </table>
            </div>
<!--             <ol>
	 <li class="list"> Request by Mrs. Iman  <a href="request1.html"><button class="buttons1">details </button> </a> </li> 
	 <li class="list"> Request by Mrs. Hanan <a href="request2.html"> <button class="buttons1">details </button> </a> </li>
	 <li class="list"> Request by Mrs. Rana  <a href="request3.html"> <button class="buttons1">details </button></a> </li>
	</ol></div> -->


<!-- =========================================================================================================== -->
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