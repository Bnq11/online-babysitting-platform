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

<script>
            window.addEventListener("load", setInterval);
            setInterval(checkRequest, 1000);
            function checkRequest(){
                document.getElementById("Post-request").innerHTML =<?php  checkrequest($conn) ?>;
            }
        </script>
</head>
<body>
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
            <input type="text" value="Sara" >
            </label></div>
        
        <div class="age">
            <label>Child's Age:
            <input type="text" value="7" >
            </label> </div>

         <div class="service">
                 <label>Type of service:
                <select class="services" >
                    <option >Choose an option</option>
                    <option>Toddler babysitting</option>
                    <option>Infant babysitting</option>
                    <option  selected >Child babysitting</option>
                    <option>After school care</option>
                    <option>Holiday sitter</option>
                    <option>Help in homework</option>
                    </select>
                 </label> </div>

        </div>

        <div class="right">
                       Date: <br> <input class="#" id="date" type="date" name="date" value="2022-07-01"><br> </label> 
                      <!-- <label>Session Duration:<br></label>  -->
                        <label>Sessin Duration (Start): <input class="#" type="time" name="time" value="13:30:00"> <br></label> 
                        <label><span class="#">Session Duration (End):</span> <input class="#" type="time" name="time" value="18:30:00"><br> </label> 
                      <br>
    
                    </label></div>
                              
                                
    

            <input id="save" type="submit" value="Save changes">



                            
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
 
 <!-- ======================================================================== -->
    
</body>
</html>